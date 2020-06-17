<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TestThree extends MY_RootController {

	public function __construct() {
        parent::__construct();

    }

	public function index()
	{

		$identAspirante  = $this->session->userdata('user_sess')->aspirante;
		$responseElecciones = $this->_callApiRest('Verano/api/veranoGeneral/id/'.$identAspirante,null,"GET",null);
		$tipoCamamento = $responseElecciones['data']['fkTipoCampamento'];
		$tipoId = $responseElecciones['data']['fkTipoCampamento'];
		$responseTipo = $this->_callApiRest('TipoCampamento/api/tipoCampamentoselected/id/'.$tipoId,null,"GET",null);
		$veranoSelected =$responseTipo['data']['nombreTipoCampamento'];
		echo($veranoSelected);
		$edad = $responseElecciones['data']['fkEdad'];
		$campamento = $responseElecciones['data']['fkCampamento'];
		$alojamiento = $responseElecciones['data']['fkAlojamiento'];
		$responseFilt = $this->_callApiRest('Verano/api/institucionBysteps/idO/'.$edad.'/idTw/'.$campamento.'/idTh/'.$alojamiento.'/idFo/'.$tipoCamamento,null,"GET",null);
		echo($tipoCamamento);
		$data['veranoSelected'] =$veranoSelected;
		$data['instituciones'] =$responseFilt['data'];
		$data['user']=$this->session->userdata('user_sess');
    $this->load->view('Dashboard_pages/Verano/test_three_view',$data);



	}


}
