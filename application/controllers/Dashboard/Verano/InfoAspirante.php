<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InfoAspirante extends MY_RootController {

	public function __construct() {
        parent::__construct();

    }

	public function index()
	{

    $data['user']=$this->session->userdata('user_sess');
    $this->_initialPage($data);
    $this->load->view('Dashboard_pages/Verano/info_aspirante_view',$data);
    $this->_finalPage();
	}
	public function info($idAspirante)
	{
    $responseVerano = $this->_callApiRest('Verano/api/veranonewStudents/id/'.$idAspirante,null,"GET",null);
		$responseInstSelect = $this->_callApiRest('Verano/api/veranonewInstselected/id/'.$idAspirante,null,"GET",null);
		$fkInstOne =$responseInstSelect['data']['fkInstitutoOne'];
		$fkInstTwo =$responseInstSelect['data']['fkInstitutoTwo'];
		$fkInstThree =$responseInstSelect['data']['fkInstitutoThree'];

		$responseInstOne= $this->_callApiRest('Verano/api/veranonewInst/id/'.$fkInstOne,null,"GET",null);
		$responseInstTwo = $this->_callApiRest('Verano/api/veranonewInst/id/'.$fkInstTwo,null,"GET",null);
		$responseInstThree = $this->_callApiRest('Verano/api/veranonewInst/id/'.$fkInstThree,null,"GET",null);

		$responseinfoSteps = $this->_callApiRest('Verano/api/veranoinfoSteps/id/'.$idAspirante,null,"GET",null);


    $data['idAspirante'] = $idAspirante;
    $data['aspirante'] =$responseVerano['data'];
		$data['instOne'] =$responseInstOne['data'];
		$data['instTwo'] =$responseInstTwo['data'];
		$data['instThree'] =$responseInstThree['data'];
		$data['infAspirante'] =$responseinfoSteps['data'];
    $data['user']=$this->session->userdata('user_sess');

    $this->load->view('Dashboard_pages/Verano/info_aspirante_view',$data);

	}

}
