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
    
                    $response = $this->_callApiRest('Documentos/Carrera/api/carreraByAspiranteOnly/id/'.$data['aspirante']['aspirante'],null,"GET",null);
                    $data['documentos'] = $response['data'];
                    //echo var_dump($data['documentos'][0]);
                }if($data['aspirante']['programaDeInteres']=="Preparatoria"){
                    
                    $response = $this->_callApiRest('AspirantePreparatorias/api/aspirantePreparatoriasBYAspirante/id/'.$data['aspirante']['aspirante'],null,"GET",null);
                    $data['infoAspirantePrepa'] = $response['data'];

                    $responsePrepas = $this->_callApiRest('AspirantePreparatorias/api/aspiranteInstitucionesBYAspirantePrepa/id/'.$response['data']['idAspirantePreparatoria'],null,"GET",null);
                    $data['preparatorias'] = $responsePrepas['data'];

                    //echo var_dump($data['preparatorias']);

                    $response = $this->_callApiRest('Documentos/Carrera/api/carreraByAspiranteOnly/id/'.$data['aspirante']['aspirante'],null,"GET",null);
                    $data['documentos'] = $response['data'];
                }

                $responseDocs = $this->_callApiRest('Documentos/Carrera/api/documentosAgentesByAspirante/id/'.$data['aspirante']['aspirante'],null,"GET",null);
                $data['documentosAspirantes'] = $responseDocs['data'];
                
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
