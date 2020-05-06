<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends MY_RootController {

	public function __construct() {
        parent::__construct();

    }

	public function index()
	{
		$data['user']=$this->session->userdata('user_sess');
    $this->load->view('Dashboard_pages/Verano/test_view',$data);
	}

}
