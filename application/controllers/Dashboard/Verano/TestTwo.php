<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TestTwo extends MY_RootController {

	public function __construct() {
        parent::__construct();

    }

	public function index()
	{
		$response = $this->_callApiRest('Campamento/api/campamento/',null,"GET",null);
		$responseEdad = $this->_callApiRest('Edad/api/edad/',null,"GET",null);
		$responseAlojamiento = $this->_callApiRest('TipoAlojamiento/api/tipoAlojamiento/',null,"GET",null);
		$responseInstituciones = $this->_callApiRest('Institucion/api/Institucion/',null,"GET",null);
		$data['campamentos'] =$response['data'];
		$data['alojamientos'] =$responseAlojamiento['data'];
		$data['edades'] =$responseEdad['data'];
		$data['instituciones'] =$responseInstituciones['data'];
		$data['user']=$this->session->userdata('user_sess');
    $this->load->view('Dashboard_pages/Verano/test_two_view',$data);
	}

}
