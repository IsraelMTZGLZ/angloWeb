<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StatusUno extends MY_RootController {

	public function __construct() {
        parent::__construct();
    }

	public function index()
	{
		$data['user']=$this->session->userdata('user_sess');
    $this->_initialPage($data);
    $this->load->view('Dashboard_pages/statusVeranoAcademico/statusuno_view',$data);
    $this->_finalPage();
	}

}
