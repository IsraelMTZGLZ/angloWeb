<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StepInst extends MY_RootController {

	public function __construct() {
        parent::__construct();

    }

	public function index()
	{

		$identAspirante  = $this->session->userdata('user_sess')->aspirante;
		$responseElecciones = $this->_callApiRest('Ingles/api/inglesGeneral/id/'.$identAspirante,null,"GET",null);
		$curso = $responseElecciones['data']['fkCurso'];
		$alojamiento = $responseElecciones['data']['fkAlojamiento'];
		$responseFilt = $this->_callApiRest('Ingles/api/institucionBysteps/idTw/'.$curso.'/idTh/'.$alojamiento,null,"GET",null);

		$data['instituciones'] =$responseFilt['data'];
		$data['user']=$this->session->userdata('user_sess');
    $this->load->view('Dashboard_pages/Ingles/step_inst_view',$data);
	}


}
