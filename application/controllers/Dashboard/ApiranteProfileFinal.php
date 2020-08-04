<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ApiranteProfileFinal extends MY_RootController {

	public function __construct() {
        parent::__construct();
        if (!@$this->session->userdata('user_sess')->email) {
			redirect('Login');
        }else{
            if (@$this->session->userdata('user_sess')->typeUsuario!="Admin" && @$this->session->userdata('user_sess')->typeUsuario!="Agente" ) {
                redirect('Login');
            }
        }
    }

	public function index($id)
	{
        if($id){
            $idAspirante = base64_decode($id);
            $data['user']=$this->session->userdata('user_sess');
            $aspirante = $this->_callApiRest('Aspirante/api/aspiranteByStatus5/id/'.$idAspirante,null,"GET",null);
            $data['aspirante'] = $aspirante['data'];
            if($data['aspirante']){
                if($data['aspirante']['programaDeInteres']=="Universidad"){
                    //infromcion llenada por el aspirante con el año de ingreso por ejemplo, la facultad
                    $response = $this->_callApiRest('AspiranteUniversidades/api/aspiranteUniversidadesBYAspirante/id/'.$data['aspirante']['aspirante'],null,"GET",null);
                    $data['infoAspiranteUni'] = $response['data'];
                
                    $responseUnis = $this->_callApiRest('AspiranteUniversidades/api/aspiranteInstitucionesBYAspiranteUni/id/'.$response['data']['idAspiranteUniversidad'],null,"GET",null);
                    $data['universidades'] = $responseUnis['data'];

                    $responseUnis = $this->_callApiRest('Documentos/OfertaCU/api/aspiranteInstitucionesBYAspiranteUni/id/'.$response['data']['idAspiranteUniversidad'],null,"GET",null);
                    $data['universidadesOfertas'] = $responseUnis['data'];
    
                    $response = $this->_callApiRest('Documentos/Carrera/api/carreraByAspiranteOnly/id/'.$data['aspirante']['aspirante'],null,"GET",null);
                    $data['documentos'] = $response['data'];

                    $primerCarta = $this->_callApiRest('Reportes/api/primerNumero3/'.$data['infoAspiranteUni']['idAspiranteUniversidad'],null,"GET",null);
                    $data['primerCarta'] = $primerCarta['data'];

                    $primeraOferta = $this->_callApiRest('Reportes/api/primeraCarta4/'.$data['aspirante']['aspirante'],null,"GET",null);
                    $data['primeraOferta'] = $primeraOferta['data'];

                    $responseAspiranteUni = $this->_callApiRest('AspiranteUniversidades/api/aspiranteUniversidadesBYAspirante/id/'.$data['aspirante']['aspirante'],null,"GET",null);
		    	    $responseUnis = $this->_callApiRest('Universidad/api/universidadByFacultad/id/'.$responseAspiranteUni['data']['idFacultad'],null,"GET",null);
                    
                    $data['unisAdd'] = $responseUnis['data'];

                }if($data['aspirante']['programaDeInteres']=="Preparatoria"){
                    
                    $response = $this->_callApiRest('AspirantePreparatorias/api/aspirantePreparatoriasBYAspirante/id/'.$data['aspirante']['aspirante'],null,"GET",null);
                    $data['infoAspirantePrepa'] = $response['data'];

                    $responsePrepas = $this->_callApiRest('AspirantePreparatorias/api/aspiranteInstitucionesBYAspirantePrepa/id/'.$response['data']['idAspirantePreparatoria'],null,"GET",null);
                    $data['preparatorias'] = $responsePrepas['data'];

                    $responseUnis = $this->_callApiRest('Documentos/OfertaCU/api/aspiranteInstitucionesBYAspirantePrepa/id/'.$response['data']['idAspirantePreparatoria'],null,"GET",null);
                    $data['preparatoriasOfertas'] = $responseUnis['data'];

                    //echo var_dump($data['preparatorias']);

                    $response = $this->_callApiRest('Documentos/Carrera/api/carreraByAspiranteOnly/id/'.$data['aspirante']['aspirante'],null,"GET",null);
                    $data['documentos'] = $response['data'];

                    $responseAspirantePrepa = $this->_callApiRest('AspirantePreparatorias/api/aspirantePreparatoriasBYAspirante/id/'.$data['aspirante']['aspirante'],null,"GET",null);
                    $responsePrepas = $this->_callApiRest('Preparatoria/api/preparatoriaBYTipoAlojamientoANDTipoEstudio/id/'.$responseAspirantePrepa['data']['idTipoEstudio'].'/id2/'.$responseAspirantePrepa['data']['idTipoAlojamiento'],null,"GET",null);
                    
                    $data['prepasAdd'] = $responsePrepas['data'];
                }

                $responseDocs = $this->_callApiRest('Documentos/Carrera/api/documentosAgentesByAspirante/id/'.$data['aspirante']['aspirante'],null,"GET",null);
                $data['documentosAspirantes'] = $responseDocs['data'];

                $n = $this->eliminar_acentos($data['aspirante']['aspiranteIdCarpeta']);
                $data['carpetaName'] = $n;

                $response = $this->_callApiRest('Reportes/api/statusPorcentaje/id/'.$data['aspirante']['aspirante'],null,"GET",null);
                $data['porcentaje'] = $response['data'];

                $aV = $this->_callApiRest('Documentos/Carrera/api/aplicacionVisa/id/'.$data['aspirante']['aspirante'],null,"GET",null);
                $data['aplicaionVisa'] = $aV['data'];

                $responseNBA = $this->_callApiRest('Aspirante/api/generarBecasNecesidades/id/'.$data['aspirante']['aspirante'],null,"GET",null);
                $data['necesidadesBecas'] = $responseNBA['data'];

                $visa = $this->_callApiRest('Documentos/Carrera/api/visaAll/id/'.$data['aspirante']['aspirante'],null,"GET",null);
                $data['visa'] = $visa['data'];

                $ATASSelecion = $this->_callApiRest('Aspirante/api/ATASSeleccion/id/'.$data['aspirante']['aspirante'],null,"GET",null);
                $data['ATASSELECION'] = $ATASSelecion['data'];

                //linea del tiempo
                $hoy = getdate();
                $data['hoy'] = $hoy;

                $primerRegistro = $this->_callApiRest('Reportes/api/primerRegistro/'.$data['aspirante']['usuario'],null,"GET",null);
                $data['primerRegistro'] = $primerRegistro['data'];

                $primerRegistroA = $this->_callApiRest('Reportes/api/primerRegistroAspirante/'.$data['aspirante']['aspirante'],null,"GET",null);
                $data['primerRegistroA'] = $primerRegistroA['data'];

                $primerDocumentos = $this->_callApiRest('Reportes/api/primerDocumentos/'.$data['aspirante']['aspirante'],null,"GET",null);
                $data['primerDocumentos'] = $primerDocumentos['data'];

                $primeraVisa = $this->_callApiRest('Reportes/api/primeraVisa/'.$data['aspirante']['aspirante'],null,"GET",null);
                $data['primeraVisa'] = $primeraVisa['data'];

                $this->_initialPage($data);
                $this->load->view('Dashboard_pages/Aspirante/details5',$data);
                $this->_finalPage();
                $this->load->view('Dashboard_pages/Aspirante/detailsJS');
            }else{
                redirect('Dashboard/AspiranteStatus5');
            }
            
        }else{
            redirect('Dashboard/AspiranteStatus5');
        }
        
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
