<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agente extends MY_RootController {

	public function __construct() {
        parent::__construct();
        if (!@$this->session->userdata('user_sess')->email) {
			redirect('Login');
        }
    }

	public function index()
	{
        $data['user']=$this->session->userdata('user_sess');
		$this->_initialPage($data);
		$this->load->view('Dashboard_pages/Agente',$data);
		$this->_finalPage();
	}

}
