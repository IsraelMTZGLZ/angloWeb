<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeAspirante extends MY_RootController {

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
            //infromcion llenada por el aspirante con el año de ingreso por ejemplo, la facultad
            $response = $this->_callApiRest('AspiranteUniversidades/api/aspiranteUniversidadesBYAspirante/id/'.$this->session->userdata('user_sess')->aspirante,null,"GET",null);
            $data['infoAspiranteUni'] = $response['data'];
        
            $responseUnis = $this->_callApiRest('AspiranteUniversidades/api/aspiranteInstitucionesBYAspiranteUni/id/'.$response['data']['idAspiranteUniversidad'],null,"GET",null);
            $data['universidades'] = $responseUnis['data'];

            $primerCarta = $this->_callApiRest('Reportes/api/primerNumero3/'.$data['infoAspiranteUni']['idAspiranteUniversidad'],null,"GET",null);
            $data['primerCarta'] = $primerCarta['data'];

            $primeraOferta = $this->_callApiRest('Reportes/api/primeraCarta4/'.$this->session->userdata('user_sess')->aspirante,null,"GET",null);
            $data['primeraOferta'] = $primeraOferta['data'];

            
        }else if($data['user']->programaDeInteres=="Preparatoria"){

            $response = $this->_callApiRest('AspirantePreparatorias/api/aspirantePreparatoriasBYAspirante/id/'.$this->session->userdata('user_sess')->aspirante,null,"GET",null);
            $data['infoAspirantePrepa'] = $response['data'];

            $responsePrepas = $this->_callApiRest('AspirantePreparatorias/api/aspiranteInstitucionesBYAspirantePrepa/id/'.$response['data']['idAspirantePreparatoria'],null,"GET",null);
            $data['preparatorias'] = $responsePrepas['data'];

            
        }

        //linea del tiempo
        $hoy = getdate();
        $data['hoy'] = $hoy;

        $primerRegistro = $this->_callApiRest('Reportes/api/primerRegistro/'.$this->session->userdata('user_sess')->usuario,null,"GET",null);
        $data['primerRegistro'] = $primerRegistro['data'];

        $primerRegistroA = $this->_callApiRest('Reportes/api/primerRegistroAspirante/'.$this->session->userdata('user_sess')->aspirante,null,"GET",null);
        $data['primerRegistroA'] = $primerRegistroA['data'];

        $primerDocumentos = $this->_callApiRest('Reportes/api/primerDocumentos/'.$this->session->userdata('user_sess')->aspirante,null,"GET",null);
        $data['primerDocumentos'] = $primerDocumentos['data'];

        $primeraVisa = $this->_callApiRest('Reportes/api/primeraVisa/'.$this->session->userdata('user_sess')->aspirante,null,"GET",null);
        $data['primeraVisa'] = $primeraVisa['data'];

        $BECASSELECION = $this->_callApiRest('Aspirante/api/BECASSeleccion/id/'.$this->session->userdata('user_sess')->aspirante,null,"GET",null);
        $data['BECASSELECION'] = $BECASSELECION['data'];

        //echo var_dump($data['infoAspirantePrepa']);
		$this->_initialPage($data);
		$this->load->view('Dashboard_pages/Aspirante/inicio',$data);
        $this->_finalPage();
        $this->load->view('Dashboard_pages/Aspirante/inicioJS');
	}

}
