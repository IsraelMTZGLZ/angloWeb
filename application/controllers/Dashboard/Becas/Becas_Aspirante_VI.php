<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Becas_Aspirante_VI extends MY_RootController {

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
	public function info()
	{
    $identAspirante  = $this->session->userdata('user_sess')->aspirante;
    $responseInstSelect = $this->_callApiRest('Verano/Ingles/api/instSelected/id/'.$identAspirante,null,"GET",null);
		$aux_selec_one  = @$responseInstSelect['data'][0];
		$aux_selec_two  = @$responseInstSelect['data'][1];
		$aux_selec_three  = @$responseInstSelect['data'][2];
		$fkInstOne =$aux_selec_one['fkInstituto'];
		$fkInstTwo =$aux_selec_two['fkInstituto'];
		$fkInstThree =$aux_selec_three['fkInstituto'];
    $responseInstOne= $this->_callApiRest('Verano/api/veranonewInst/id/'.$fkInstOne,null,"GET",null);
    $responseInstTwo = $this->_callApiRest('Verano/api/veranonewInst/id/'.$fkInstTwo,null,"GET",null);
    $responseInstThree = $this->_callApiRest('Verano/api/veranonewInst/id/'.$fkInstThree,null,"GET",null);

    $responseInstOneBecas = $this->_callApiRest('Becas/api/infoBecas/id/'.$fkInstOne,null,"GET",null);
    $responseInstTwoBecas = $this->_callApiRest('Becas/api/infoBecas/id/'.$fkInstTwo,null,"GET",null);
    $responseInstThreeBecas = $this->_callApiRest('Becas/api/infoBecas/id/'.$fkInstThree,null,"GET",null);
    $data['becaInstOneInfo']	=$responseInstOneBecas['data'];
		$data['becaInstTwoInfo']	=$responseInstTwoBecas['data'];
		$data['becaInstThreeInfo']	=$responseInstThreeBecas['data'];
		
		// $data['responseInstOneBecas']	=$responseInstOneBecas;
		$data['InstOneInfo']	=$fkInstOne;
    $data['InstTwoInfo']	=$fkInstTwo;
    $data['InstThreeInfo']	=$fkInstThree;
    $data['instOne'] =$responseInstOne['data'];
    $data['instTwo'] =$responseInstTwo['data'];
    $data['instThree'] =$responseInstThree['data'];

    $data['user']=$this->session->userdata('user_sess');
    $this->_initialPage($data);
    $this->load->view('Dashboard_pages/Becas/becas_aspirante_vi_view',$data);
    $this->_finalPage();
	}

}
