<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StepsEnglish extends MY_RootController {

	public function __construct() {
        parent::__construct();

    }

	public function index()
	{
		$response = $this->_callApiRest('TipoCursos/api/tipoCursos/',null,"GET",null);
		$responseAlojamiento = $this->_callApiRest('TipoAlojamientoCurso/api/tipoAlojamientoCurso/',null,"GET",null);
		$responseInstituciones = $this->_callApiRest('Institucion/api/Institucion/',null,"GET",null);
		$data['cursos'] =$response['data'];
		$data['alojamientos'] =$responseAlojamiento['data'];
		$data['instituciones'] =$responseInstituciones['data'];
		$data['user']=$this->session->userdata('user_sess');
    $this->load->view('Dashboard_pages/Ingles/steps_english_view',$data);
	}

}
