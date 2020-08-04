<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MisInstituciones extends MY_RootController {

	public function __construct() {
		parent::__construct();
        if (!@$this->session->userdata('user_sess')->email) {
			redirect('Login');
        }else{
            if (@$this->session->userdata('user_sess')->typeUsuario!="Aspirante") {
                redirect('Login');
            }
        }
    }

	public function index()
	{
        $data['user']=$this->session->userdata('user_sess');

        if($data['user']->programaDeInteres=="Universidad"){

            $response = $this->_callApiRest('AspiranteUniversidades/api/aspiranteUniversidadesBYAspirante/id/'.$data['user']->aspirante,null,"GET",null);

            $responseUnis = $this->_callApiRest('Documentos/OfertaCU/api/aspiranteInstitucionesBYAspiranteUni/id/'.$response['data']['idAspiranteUniversidad'],null,"GET",null);
            $data['universidadesOfertas'] = $responseUnis['data'];
        }else if($data['user']->programaDeInteres=="Preparatoria"){

            $response = $this->_callApiRest('AspirantePreparatorias/api/aspirantePreparatoriasBYAspirante/id/'.$data['user']->aspirante,null,"GET",null);
            $data['infoAspirantePrepa'] = $response['data'];

            $responseUnis = $this->_callApiRest('Documentos/OfertaCU/api/aspiranteInstitucionesBYAspirantePrepa/id/'.$response['data']['idAspirantePreparatoria'],null,"GET",null);
            $data['preparatoriasOfertas'] = $responseUnis['data'];
            
        }

        $data['aspiranteKey'] = $data['user']->aspirante;

        $n = $this->eliminar_acentos($data['user']->aspiranteIdCarpeta);
		$data['carpetaName'] = $n;
		
		$BECASSELECION = $this->_callApiRest('Aspirante/api/BECASSeleccion/id/'.$this->session->userdata('user_sess')->aspirante,null,"GET",null);
		$data['BECASSELECION'] = $BECASSELECION['data'];
		
		$DeferalRequest = $this->_callApiRest('Aspirante/api/aspiranteDocDeferal/id/'.$this->session->userdata('user_sess')->aspirante,null,"GET",null);
        $data['DeferalRequest'] = $DeferalRequest['data'];

        //echo var_dump( $data['universidadesOfertas']);
        $this->_initialPage($data);
		$this->load->view('Dashboard_pages/Instituciones/view',$data);
        $this->_finalPage();
        $this->load->view('Dashboard_pages/Instituciones/viweJS');
        
    }

    function eliminar_acentos($cadena){
		
		//Reemplazamos la A y a
		$cadena = str_replace(
		array('Á', 'À', 'Â', 'Ä', 'á', 'à', 'ä', 'â', 'ª'),
		array('A', 'A', 'A', 'A', 'a', 'a', 'a', 'a', 'a'),
		$cadena
		);

		//Reemplazamos la E y e
		$cadena = str_replace(
		array('É', 'È', 'Ê', 'Ë', 'é', 'è', 'ë', 'ê'),
		array('E', 'E', 'E', 'E', 'e', 'e', 'e', 'e'),
		$cadena );

		//Reemplazamos la I y i
		$cadena = str_replace(
		array('Í', 'Ì', 'Ï', 'Î', 'í', 'ì', 'ï', 'î'),
		array('I', 'I', 'I', 'I', 'i', 'i', 'i', 'i'),
		$cadena );

		//Reemplazamos la O y o
		$cadena = str_replace(
		array('Ó', 'Ò', 'Ö', 'Ô', 'ó', 'ò', 'ö', 'ô'),
		array('O', 'O', 'O', 'O', 'o', 'o', 'o', 'o'),
		$cadena );

		//Reemplazamos la U y u
		$cadena = str_replace(
		array('Ú', 'Ù', 'Û', 'Ü', 'ú', 'ù', 'ü', 'û'),
		array('U', 'U', 'U', 'U', 'u', 'u', 'u', 'u'),
		$cadena );

		//Reemplazamos la N, n, C y c
		$cadena = str_replace(
		array('Ñ', 'ñ', 'Ç', 'ç'),
		array('N', 'n', 'C', 'c'),
		$cadena
		);
		
		return $cadena;
	}
    

}
