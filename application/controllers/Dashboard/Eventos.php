<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Eventos extends MY_RootController {

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
        $response =  $this->_callApiRest('Eventos/api/eventos/',null,"GET",null);
        $data['eventos'] = $response['data'];
        $data['user']=$this->session->userdata('user_sess');
		$this->_initialPage($data);
		$this->load->view('Dashboard_pages/Evento_view',$data);
		$this->_finalPage();
		//echo var_dump($response['data']);
	}

}
