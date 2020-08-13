<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BecasCrear extends MY_RootController {

	public function __construct() {
        parent::__construct();
        if (!@$this->session->userdata('user_sess')->email) {
			redirect('Login');
        }else{
            if (@$this->session->userdata('user_sess')->typeUsuario!="Admin" && $this->session->userdata('user_sess')->typeUsuario!="Agente") {
                redirect('Login');
            }
        }
    }

	public function index()
	{
        
        $data['user']=$this->session->userdata('user_sess');

        $response = $this->_callApiRest('BecasAdd/api/becas/',null,"GET",null);
        $data['becasAll'] = $response['data'];

        $this->_initialPage($data);
        $this->load->view('Dashboard_pages/becasCrear_view',$data);
        $this->_finalPage();
        $this->load->view('Dashboard_pages/becasCrearJS',$data);
	}

}
