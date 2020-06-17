<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TestTwo extends MY_RootController {

	public function __construct() {
        parent::__construct();

    }

	public function index()
	{
		$identAspirante  = $this->session->userdata('user_sess')->aspirante;
		$responseElecciones = $this->_callApiRest('Verano/api/veranoGeneral/id/'.$identAspirante,null,"GET",null);
		$tipoId = $responseElecciones['data']['fkTipoCampamento'];
		$responseTipo = $this->_callApiRest('TipoCampamento/api/tipoCampamentoselected/id/'.$tipoId,null,"GET",null);
		$veranoSelected =$responseTipo['data']['nombreTipoCampamento'];

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
		echo ($veranoSelected);
		if($veranoSelected == 'Verano Inglés'){
			$this->load->view('Dashboard_pages/Verano/steps_ingles_view',$data);
		}else if($veranoSelected == 'Verano Académico'){
			$this->load->view('Dashboard_pages/Verano/steps_academico_view',$data);
		}else{

		}


	}

}
