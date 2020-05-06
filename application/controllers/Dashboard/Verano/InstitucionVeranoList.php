<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InstitucionVeranoList extends MY_RootController {

	public function __construct() {
        parent::__construct();

    }

	public function index()
	{

		$responseInstituciones = $this->_callApiRest('Institucion/api/Institucion/',null,"GET",null);
		$data['instituciones'] =$responseInstituciones['data'];
		$data['user']=$this->session->userdata('user_sess');
    $this->_initialPage($data);
    $this->load->view('Dashboard_pages/Verano/institucion_list_verano_view',$data);
    $this->_finalPage();
	}

}
