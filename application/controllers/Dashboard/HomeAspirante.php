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

            if($data['infoAspiranteUni']['estudiosAspiranteUniversidad']=="Carrera"){
                $responseDocumentos = $this->_callApiRest('Documentos/Carrera/api/carreraByAspirante/id/'.$this->session->userdata('user_sess')->aspirante.'/tipo/Boleta/',null,"GET",null);
                $responseDocumentosbOLETA = $this->_callApiRest('Documentos/Carrera/api/carreraByAspirante/id/'.$this->session->userdata('user_sess')->aspirante.'/tipo/BoletaTraduccion/',null,"GET",null);

                $responseDocumentosCarta = $this->_callApiRest('Documentos/Carrera/api/carreraByAspirante/id/'.$this->session->userdata('user_sess')->aspirante.'/tipo/CartaMotivo',null,"GET",null);
                $responseDocumentosPasaporte = $this->_callApiRest('Documentos/Carrera/api/carreraByAspirante/id/'.$this->session->userdata('user_sess')->aspirante.'/tipo/Pasaporte',null,"GET",null);

                $data['documentosBoleta'] = $responseDocumentos['data'];
                $data['documentosBoletaTraduccion'] = $responseDocumentosbOLETA['data'];
                $data['documentosCarta'] = $responseDocumentosCarta['data'];
                $data['documentosPasaporte'] = $responseDocumentosPasaporte['data'];

                //echo var_dump($data['documentosBoletaTraduccion']);
            }

            if($data['infoAspiranteUni']['estudiosAspiranteUniversidad']=="Masters"){
                $responseDocumentos = $this->_callApiRest('Documentos/Maestria/api/maestriaByAspirante/id/'.$this->session->userdata('user_sess')->aspirante.'/tipo/Transcripcion',null,"GET",null);
                $responseDocumentosTra = $this->_callApiRest('Documentos/Maestria/api/maestriaByAspirante/id/'.$this->session->userdata('user_sess')->aspirante.'/tipo/TranscripcionTraduccion',null,"GET",null);

                $responseDocumentosCarta = $this->_callApiRest('Documentos/Maestria/api/maestriaByAspiranteCartaMotivo/id/'.$this->session->userdata('user_sess')->aspirante,null,"GET",null);
                $responseDocumentosPasaporte = $this->_callApiRest('Documentos/Maestria/api/maestriaByAspirante/id/'.$this->session->userdata('user_sess')->aspirante.'/tipo/CartaRecomendacion',null,"GET",null);

                $data['documentosTrasncripcion'] = $responseDocumentos['data'];
                $data['documentosTrasncripcionTraduccion'] = $responseDocumentosTra['data'];
                $data['documentosCarta'] = $responseDocumentosCarta['data'];
                $data['documentosRecomendacion'] = $responseDocumentosPasaporte['data'];

            }

            if($data['infoAspiranteUni']['estudiosAspiranteUniversidad']=="PhD"){
                $responseDocumentos = $this->_callApiRest('Documentos/PhD/api/phDByAspirante/id/'.$this->session->userdata('user_sess')->aspirante.'/tipo/Transcripcion',null,"GET",null);
                $responseDocumentosCarta = $this->_callApiRest('Documentos/PhD/api/phDByAspirante/id/'.$this->session->userdata('user_sess')->aspirante.'/tipo/Propuesta',null,"GET",null);
                $responseDocumentosPasaporte = $this->_callApiRest('Documentos/PhD/api/phDByAspirante/id/'.$this->session->userdata('user_sess')->aspirante.'/tipo/CV',null,"GET",null);
                $responseDocumentosTRa = $this->_callApiRest('Documentos/PhD/api/phDByAspirante/id/'.$this->session->userdata('user_sess')->aspirante.'/tipo/TranscripcionTraduccion',null,"GET",null);

                $data['documentosTrasncripcion'] = $responseDocumentos['data'];
                $data['documentosTrasncripcionTraduccion'] = $responseDocumentosTRa['data'];
                $data['documentosPropuesta'] = $responseDocumentosCarta['data'];
                $data['documentosCV'] = $responseDocumentosPasaporte['data'];
            }
        }else if($data['user']->programaDeInteres=="Preparatoria"){

            $response = $this->_callApiRest('AspirantePreparatorias/api/aspirantePreparatoriasBYAspirante/id/'.$this->session->userdata('user_sess')->aspirante,null,"GET",null);
            $data['infoAspirantePrepa'] = $response['data'];

            $responsePrepas = $this->_callApiRest('AspirantePreparatorias/api/aspiranteInstitucionesBYAspirantePrepa/id/'.$response['data']['idAspirantePreparatoria'],null,"GET",null);
            $data['preparatorias'] = $responsePrepas['data'];

            $responseDocumentos = $this->_callApiRest('Documentos/Preparatoria/api/preparatoriaByAspirante/id/'.$this->session->userdata('user_sess')->aspirante.'/tipo/Boleta',null,"GET",null);
            $responseDocumentosPasaporte = $this->_callApiRest('Documentos/Preparatoria/api/preparatoriaByAspirante/id/'.$this->session->userdata('user_sess')->aspirante.'/tipo/Pasaporte',null,"GET",null);
            $responseDocumentostra = $this->_callApiRest('Documentos/Preparatoria/api/preparatoriaByAspirante/id/'.$this->session->userdata('user_sess')->aspirante.'/tipo/BoletaTraduccion',null,"GET",null);

            $data['documentosBoletas'] = $responseDocumentos['data'];
            $data['documentosBoletasTraduccion'] = $responseDocumentostra['data'];
            $data['documentosPasaporte'] = $responseDocumentosPasaporte['data'];
        }

        //echo var_dump($data['infoAspirantePrepa']);
		$this->_initialPage($data);
		$this->load->view('Dashboard_pages/Aspirante/inicio',$data);
        $this->_finalPage();
        $this->load->view('Dashboard_pages/Aspirante/inicioJS');
	}

}
