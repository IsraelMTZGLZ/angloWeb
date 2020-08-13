<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StatusDosR extends MY_RootController {

	public function __construct() {
        parent::__construct();
    }

	public function index()
	{
		$data['user']=$this->session->userdata('user_sess');
    $this->_initialPage($data);
    $this->load->view('Dashboard_pages/statusIngles/statusdosr_view',$data);
    $this->_finalPage();
	}

}
