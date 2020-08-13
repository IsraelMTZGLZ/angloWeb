<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends MY_RootController {

public function __construct() {
			parent::__construct();

	}

public function index()
{
	$identAspirante  = $this->session->userdata('user_sess')->aspirante;
	$responseVerano = $this->_callApiRest('Verano/api/veranonewStudents/id/'.$identAspirante,null,"GET",null);
	// $responseInstSelect = $this->_callApiRest('Verano/api/veranonewInstselected/id/'.$identAspirante,null,"GET",null);

	//testing

	$responseInstSelect = $this->_callApiRest('Verano/Ingles/api/instSelected/id/'.$identAspirante,null,"GET",null);
	$aux_selec_one  = @$responseInstSelect['data'][0];

	$aux_selec_two  = @$responseInstSelect['data'][1];

	$aux_selec_three  = @$responseInstSelect['data'][2];

	//



	$recomendation = $this->_callApiRest('Ingles/api/recomendtionPassport/id/'.$identAspirante,null,"GET",null);

	$description = $recomendation['data']['descripcion'];
	$fkInstOne =$aux_selec_one['fkInstituto'];
	$fkInstTwo =$aux_selec_two['fkInstituto'];
	$fkInstThree =$aux_selec_three['fkInstituto'];
	 // NEW TODAY 12


    	$responseInstOne= $this->_callApiRest('Verano/api/veranonewInst/id/'.$fkInstOne,null,"GET",null);
    	$responseInstTwo = $this->_callApiRest('Verano/api/veranonewInst/id/'.$fkInstTwo,null,"GET",null);
    	$responseInstThree = $this->_callApiRest('Verano/api/veranonewInst/id/'.$fkInstThree,null,"GET",null);


    	$responseView = $this->_callApiRest('Verano/Ingles/api/aspiranteVerInglesBYAspirante/id/'.$identAspirante,null,"GET",null);


     $responseinfoSteps = $this->_callApiRest('Verano/api/veranoinfoSteps/id/'.$identAspirante,null,"GET",null);

    	$enable = '';

      $data['aspirante'] =$responseVerano['data'];
      $data['instOne'] =$responseInstOne['data'];
      $data['instTwo'] =$responseInstTwo['data'];
      $data['instThree'] =$responseInstThree['data'];

			$data['InstOneInfo']	=$fkInstOne;
			$data['InstTwoInfo']	=$fkInstTwo;
			$data['InstThreeInfo']	=$fkInstThree;
			$data['enable'] =$enable;
			$data['infAspirante'] =$responseinfoSteps['data'];

			$data['user']=$this->session->userdata('user_sess');
			$this->_initialAspirante($data);
			$this->load->view('Dashboard_pages/ProfileVIA/profile_view',$data);

			$this->_finalPage();





}


}
