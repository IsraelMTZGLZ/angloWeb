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
        }

		$this->_initialPage($data);
		$this->load->view('Dashboard_pages/Aspirante/inicio',$data);
        $this->_finalPage();
        $this->load->view('Dashboard_pages/Aspirante/inicioJS');
	}

}
