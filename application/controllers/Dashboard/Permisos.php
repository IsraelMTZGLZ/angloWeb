<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Permisos extends MY_RootController {

	public function __construct() {
        parent::__construct();
        if (!@$this->session->userdata('user_sess')->email) {
			redirect('Login');
        }else{
            if (@$this->session->userdata('user_sess')->typeUsuario!="Admin") {
                redirect('Login');
            }
        }
    }

	public function index()
	{
        $response = $this->_callApiRest('Permisos/api/permisos/',null,"GET",null);
        $responseAgentes = $this->_callApiRest('Agente/api/agente/',null,"GET",null);
        $data['permisos'] =$response['data'];
        $data['agentes'] =$responseAgentes['data'];
        $data['user']=$this->session->userdata('user_sess');
        $this->_initialPage($data);
        $this->load->view('Dashboard_pages/permisos_view',$data);
        $this->_finalPage();
	}

}
