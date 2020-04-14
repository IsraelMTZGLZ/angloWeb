<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InformacionAgente extends MY_RootController {

	public function __construct() {
		parent::__construct();
		//redirect('Login');
        if (!@$this->session->userdata('user_sess')->email) {
			redirect('Login');
        }
    }

	public function index()
	{
        $data['user']=$this->session->userdata('user_sess');
		$this->load->view('Dashboard_pages/agente_informacion_view',$data);
	}

}
