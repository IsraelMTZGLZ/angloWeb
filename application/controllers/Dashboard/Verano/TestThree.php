<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TestThree extends MY_RootController {

	public function __construct() {
        parent::__construct();

    }

	public function index()
	{
    $responseInstituciones = $this->_callApiRest('Institucion/api/Institucion/',null,"GET",null);
    $data['instituciones'] =$responseInstituciones['data'];
    $data['user']=$this->session->userdata('user_sess');
    $this->load->view('Dashboard_pages/Verano/test_three_view',$data);
	}
	public function add()
	{
		$responseInstituciones = $this->_callApiRest('Institucion/api/Institucion/',null,"GET",null);
    $data['instituciones'] =$responseInstituciones['data'];
    $data['user']=$this->session->userdata('user_sess');
    $this->load->view('Dashboard_pages/Verano/test_three_view',$data);
	}

}
