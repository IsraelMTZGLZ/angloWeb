<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BecasConfig extends MY_RootController {

	public function __construct() {
        parent::__construct();

    }

	public function index()
	{
		$response = $this->_callApiRest('Campamento/api/campamento/',null,"GET",null);
		$responseEdad = $this->_callApiRest('Edad/api/edad/',null,"GET",null);
		$responseAlojamiento = $this->_callApiRest('TipoAlojamiento/api/tipoAlojamiento/',null,"GET",null);
		$responseInstituciones = $this->_callApiRest('Institucion/api/Institucion/',null,"GET",null);
		$responseTipo = $this->_callApiRest('TipoCampamento/api/tipoCampamento/',null,"GET",null);
		$data['campamentos'] =$response['data'];
		$data['tipos'] =$responseTipo['data'];
		$data['alojamientos'] =$responseAlojamiento['data'];
		$data['edades'] =$responseEdad['data'];
		$data['instituciones'] =$responseInstituciones['data'];
		$data['user']=$this->session->userdata('user_sess');
    $this->_initialPage($data);
    $this->load->view('Dashboard_pages/Becas/becas_config_view',$data);
    $this->_finalPage();
	}

}
