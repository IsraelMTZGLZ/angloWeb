<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MisArchivos extends MY_RootController {

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
            $response = $this->_callApiRest('AspiranteUniversidades/api/aspiranteUniversidadesBYAspirante/id/'.$this->session->userdata('user_sess')->aspirante,null,"GET",null);
            $data['infoAspiranteUni'] = $response['data'];

            if($data['infoAspiranteUni']['estudiosAspiranteUniversidad']=="Carrera"){
                $responseDocumentos = $this->_callApiRest('Documentos/Carrera/api/carreraByAspiranteOnly/id/'.$this->session->userdata('user_sess')->aspirante,null,"GET",null);
                //echo var_dump($responseDocumentos['data']);
                $data['documentos'] = $responseDocumentos['data'];
            }else if($data['infoAspiranteUni']['estudiosAspiranteUniversidad']=="Masters"){
                $responseDocumentos = $this->_callApiRest('Documentos/Maestria/api/maestriaByAspiranteOnly/id/'.$this->session->userdata('user_sess')->aspirante,null,"GET",null);
                //echo var_dump($responseDocumentos['data']);
                $data['documentos'] = $responseDocumentos['data'];
            }else{
                $responseDocumentos = $this->_callApiRest('Documentos/PhD/api/phDByAspiranteOnly/id/'.$this->session->userdata('user_sess')->aspirante,null,"GET",null);
                //echo var_dump($responseDocumentos['data']);
                $data['documentos'] = $responseDocumentos['data'];
            }
        }else if($data['user']->programaDeInteres=="Preparatoria"){

            $response = $this->_callApiRest('Documentos/Preparatoria/api/preparatoriaByAspiranteOnly/id/'.$this->session->userdata('user_sess')->aspirante,null,"GET",null);
            
            $data['documentos'] = $response['data'];
            //echo var_dump($data['documentos']);
        }

        $this->_initialPage($data);
		$this->load->view('Dashboard_pages/Archivos/view',$data);
        $this->_finalPage();
        $this->load->view('Dashboard_pages/Archivos/viewJS');
        
	}

}
