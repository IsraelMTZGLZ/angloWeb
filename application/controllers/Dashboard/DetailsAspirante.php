<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DetailsAspirante extends MY_RootController {

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
            $aspirante = $this->_callApiRest('Aspirante/api/aspiranteByStatus2/id/'.$idAspirante,null,"GET",null);
            $data['aspirante'] = $aspirante['data'];
            if($data['aspirante']){
                if($data['aspirante']['programaDeInteres']=="Universidad"){
                    //infromcion llenada por el aspirante con el año de ingreso por ejemplo, la facultad
                    $response = $this->_callApiRest('AspiranteUniversidades/api/aspiranteUniversidadesBYAspirante/id/'.$data['aspirante']['aspirante'],null,"GET",null);
                    $data['infoAspiranteUni'] = $response['data'];
                
                    $responseUnis = $this->_callApiRest('AspiranteUniversidades/api/aspiranteInstitucionesBYAspiranteUni/id/'.$response['data']['idAspiranteUniversidad'],null,"GET",null);
                    $data['universidades'] = $responseUnis['data'];
    
                    if($data['infoAspiranteUni']['estudiosAspiranteUniversidad']=="Carrera"){
                        $responseDocumentos = $this->_callApiRest('Documentos/Carrera/api/carreraByAspiranteOnly/id/'.$data['aspirante']['aspirante'],null,"GET",null);
                        //echo var_dump($responseDocumentos['data']);
                        $data['documentos'] = $responseDocumentos['data'];
                    }else if($data['infoAspiranteUni']['estudiosAspiranteUniversidad']=="Masters"){
                        $responseDocumentos = $this->_callApiRest('Documentos/Maestria/api/maestriaByAspiranteOnly/id/'.$data['aspirante']['aspirante'],null,"GET",null);
                        //echo var_dump($responseDocumentos['data']);
                        $data['documentos'] = $responseDocumentos['data'];
                    }else{
                        $responseDocumentos = $this->_callApiRest('Documentos/PhD/api/phDByAspiranteOnly/id/'.$data['aspirante']['aspirante'],null,"GET",null);
                        //echo var_dump($responseDocumentos['data']);
                        $data['documentos'] = $responseDocumentos['data'];
                    }
                }
                
                $this->_initialPage($data);
                $this->load->view('Dashboard_pages/Aspirante/details',$data);
                $this->_finalPage();
                $this->load->view('Dashboard_pages/Aspirante/detailsJS');
            }else{
                redirect('Dashboard/AspiranteStatus2');
            }
            
        }else{
            redirect('Dashboard/AspiranteStatus2');
        }
        
	}

}
