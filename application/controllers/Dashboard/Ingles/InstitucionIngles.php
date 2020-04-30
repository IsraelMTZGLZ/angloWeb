<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InstitucionIngles extends MY_RootController {

	public function __construct() {
        parent::__construct();

    }

	public function index()
	{
		$response = $this->_callApiRest('TipoCursos/api/tipoCursos/',null,"GET",null);
		$responseAlojamiento = $this->_callApiRest('TipoAlojamiento/api/tipoAlojamiento/',null,"GET",null);
		$responseInstituciones = $this->_callApiRest('Institucion/api/Institucion/',null,"GET",null);
		$data['cursos'] =$response['data'];
		$data['alojamientos'] =$responseAlojamiento['data'];
		$data['instituciones'] =$responseInstituciones['data'];
		$data['user']=$this->session->userdata('user_sess');
    $this->_initialPage($data);
    $this->load->view('Dashboard_pages/Ingles/institucion_ingles_view',$data);
    $this->_finalPage();
	}

}
