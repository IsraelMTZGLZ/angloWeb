<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class All_Preparatorias extends MY_RootController {

	public function __construct() {
        parent::__construct();

    }

	public function index()
	{
		unset($_SESSION['blog']);
        $data['user']=$this->session->userdata('user_sess');
        $this->_initialPage($data);
        $this->load->view('Dashboard_pages/Preparatoria/all_preparatoria_view',$data);
        $this->_finalPage();
	}

}
