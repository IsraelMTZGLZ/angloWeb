	<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AspirantePage extends MY_RootController {

	public function __construct() {
        parent::__construct();

    }

	public function index()
	{
		$identAspirante  = $this->session->userdata('user_sess')->aspirante;
    $responseVerano = $this->_callApiRest('Verano/api/veranonewStudents/id/'.$identAspirante,null,"GET",null);
    $responseInstSelect = $this->_callApiRest('Verano/api/veranonewInstselected/id/'.$identAspirante,null,"GET",null);

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

		$responseDocOne = $this->_callApiRest('Verano/Academico/api/veranoAcademico/id/'.$fkInstOne,null,"GET",null);
		$responseDocTwo = $this->_callApiRest('Verano/Academico/api/veranoAcademico/id/'.$fkInstTwo,null,"GET",null);
		$responseDocThree = $this->_callApiRest('Verano/Academico/api/veranoAcademico/id/'.$fkInstThree,null,"GET",null);

		$responseForm = $this->_callApiRest('Verano/Ingles/api/fileVeranoIngles/id/'.$identAspirante,null,"GET",null);
		$fileexistsFormTwo='';
		$recomendationFormOne='';
		$fileexistsFormThree= '';
		$stepOneFormOne = '';
		$stepTwoFormOne = '';
		$stepThreeFormOne = '';
		$stepOneFormTwo = '';
		$stepTwoFormTwo = '';
		$stepThreeFormTwo = '';
		$stepOneFormThree = '';
		$stepTwoFormThree = '';
		$stepThreeFormThree = '';
		$defaultfileFormOne = '';
		$fileexistsFormOne = '';
		$enableFormOne = '';
		$recomendationFormTwo='';
		$recomendationFormThree='';
		$defaultfileForOne = '';
		$defaultfileFormThree = '';
		$defaultfileFormTwo = '';
		$statusDocFormTwo = '';
		$statusDocFormThree = '';
		$fileInfoFormTwo = '';
		$responseFileFormThree = '';
		$idDocFormTwo = '';
		$idDocFormThree = '';
		$responseFileFormOne = '';
		$statusDocFormOne = '';
		$statusDocFormOne = '';

		//We do this to know if exists a document, we put '@' in case this does not exist
		if(@$responseForm['data'][0]){
			$r = $responseForm['data'][0];
			$fileInfoFormOne = $responseForm['data'][0];

			$statusDocFormOne = $r['statusDocumento'];
			$idDocFormOne = $r['idDocumento'];
			$responseFileFormOne =$responseForm['data'][0];
			if($r['statusDocumento'] == 'Activo'){
				// echo('Activo');
				$infoFormOne = 'El documento esta en revisión';
				$stepOneFormOne = 'current';
				$stepTwoFormOne = 'current';
				$enableFormOne = "disabled='disabled'";
				$progreso = '50%';
				$stepThreeFormOne = '';
				$defaultfileFormOne = $r['urlDocumento'];
					$defaultfileForOne = $r['urlDocumento'];
			}else if($r['statusDocumento'] == 'Revision'){
				$infoFormOne = 'El documento esta en revisión';
				$stepOneFormOne = 'current';
				$stepTwoFormOne = 'current';
				$enableFormOne = "disabled='disabled'";
				$progreso = '50%';
				$stepThreeFormOne = '';
				$defaultfileFormOne = $r['urlDocumento'];
					$defaultfileForOne = $r['urlDocumento'];
			}else if($r['statusDocumento'] == 'Rechazado'){
				$defaultfileFormOne = '';
				$fileexistsFormOne = True;
				$enableFormOne= "";
				$infoFormOne = 'El documento fue rechazado';
				$defaultfileFormOne = $r['urlDocumento'];
				$stepOneFormOne = 'current';
				$stepTwoFormOne = 'current';
				$progreso = '20%';
				$recomendationFormOne = $this->_callApiRest('Verano/Ingles/api/recomendtion/id/'.$identAspirante.'/idDocForm/'.$idDocFormOne,null,"GET",null);
				// echo($recomendationFormOne['data']['descripcion']);
					$defaultfileForOne = $r['urlDocumento'];
			}else if($r['statusDocumento'] == 'Aceptado'){
				$infoFormOne = 'El documento fue aceptado';
				$fileexistsFormOne = True;
				$enableFormOne= "disabled='disabled'";
				$defaultfileFormOne = $r['urlDocumento'];
				$stepOneFormOne = 'current';
				$stepTwoFormOne = 'current';
				$stepThreeFormOne = 'current';
				$progreso = '100%';
					$defaultfileForOne = $r['urlDocumento'];
			}else{
				$infoFormOne = 'Sin documento';
				$stepOneFormOne = 'current';
				$enableFormOne= "";
				$progreso = '20%';
			}
		}else{
			$infoFormOne = 'Sin documento';
			$stepOneFormOne = 'current';
			$enableFormOne= "";
			$progreso = '20%';
		}

		//second document
		if(@$responseForm['data'][1]){
			$r = $responseForm['data'][1];
			$fileInfoFormTwo = $responseForm['data'][1];
			// echo var_dump($fileInfoFormTwo['statusDocumento']);
			$statusDocFormTwo = $r['statusDocumento'];
			$idDocFormTwo = $r['idDocumento'];

			if($r['statusDocumento'] == 'Activo'){
				$infoFormTwo = 'El documento esta en revisión';
				$stepOneFormTwo = 'current';
				$stepTwoFormTwo = 'current';
				$enableFormTwo = "disabled='disabled'";
				$progreso = '50%';
				$stepThreeFormTwo = '';
				$defaultfileFormTwo = $r['urlDocumento'];
			}else if($r['statusDocumento'] == 'Revision'){
				$infoFormTwo = 'El documento esta en revisión';
				$stepOneFormTwo = 'current';
				$stepTwoFormTwo = 'current';
				$enableFormTwo = "disabled='disabled'";
				$progreso = '50%';
				$stepThreeFormTwo = '';
				$defaultfileFormTwo = $r['urlDocumento'];
			}else if($r['statusDocumento'] == 'Rechazado'){
				$defaultfileFormTwo = '';
				$fileexistsFormTwo = True;
				$enableFormTwo= "";
				$infoFormTwo = 'El documento fue rechazado';
				$defaultfileFormTwo = $r['urlDocumento'];
				$stepOneFormTwo = 'current';
				$stepTwoFormTwo = 'current';
				$progreso = '20%';
				$recomendationFormTwo = $this->_callApiRest('Verano/Ingles/api/recomendtion/id/'.$identAspirante.'/idDocForm/'.$idDocFormTwo,null,"GET",null);
				echo var_dump($recomendationFormTwo);
			}else if($r['statusDocumento'] == 'Aceptado'){
				$infoFormTwo = 'El documento fue aceptado';
				$fileexistsFormTwo = True;
				$enableFormTwo= "disabled='disabled'";
				$defaultfileFormTwo = $r['urlDocumento'];
				$stepOneFormTwo = 'current';
				$stepTwoFormTwo = 'current';
				$stepThreeFormTwo = 'current';
				$progreso = '100%';
			}else{
				$infoFormTwo = 'Sin documento';
				$stepOneFormTwo = 'current';
				$enableFormTwo= "";
				$progreso = '20%';
			}
		}else{
			$infoFormTwo = 'Sin documento';
			$stepOneFormTwo = 'current';
			$enableFormTwo= "";
			$progreso = '20%';
		}

		//Third document
		if(@$responseForm['data'][2]){
			$r = $responseForm['data'][2];
			$fileInfoFormThree = $responseForm['data'][2];
			$statusDocFormThree = $r['statusDocumento'];
			$responseFileFormThree =$responseForm['data'][2];
			$idDocFormThree = $r['idDocumento'];

			if($r['statusDocumento'] == 'Activo'){
				$infoFormThree = 'El documento esta en revisión';
				$stepOneFormThree = 'current';
				$stepTwoFormThree = 'current';
				$enableFormThree = "disabled='disabled'";
				$progreso = '50%';
				$stepThreeFormThree = '';
				$defaultfileFormThree = $r['urlDocumento'];
			}else if($r['statusDocumento'] == 'Revision'){
				$infoFormThree = 'El documento esta en revisión';
				$stepOneFormThree = 'current';
				$stepTwoFormThree = 'current';
				$enableFormThree = "disabled='disabled'";
				$progreso = '50%';
				$stepThreeFormThree = '';
				$defaultfileFormThree = $r['urlDocumento'];

			}else if($r['statusDocumento'] == 'Rechazado'){
				$defaultfileFormThree = '';
				$fileexistsFormThree = True;
				$enableFormThree= "";
				$infoFormThree = 'El documento fue rechazado';
				$defaultfileFormThree = $r['urlDocumento'];
				$stepOneFormThree = 'current';
				$stepTwoFormThree = 'current';
				$progreso = '20%';
				$recomendationFormThree = $this->_callApiRest('Verano/Ingles/api/recomendtion/id/'.$identAspirante.'/idDocForm/'.$idDocFormThree,null,"GET",null);
			}else if($r['statusDocumento'] == 'Aceptado'){
				$infoFormThree = 'El documento fue aceptado';
				$fileexistsFormThree = True;
				$enableFormThree= "disabled='disabled'";
				$defaultfileFormThree = $r['urlDocumento'];
				$stepOneFormThree = 'current';
				$stepTwoFormThree = 'current';
				$stepThreeFormThree = 'current';
				$progreso = '100%';
			}else{
				$infoFormThree = 'Sin documento';
				$stepOneFormThree = 'current';
				$enableFormThree= "";
				$progreso = '20%';
			}
		}else{
			$infoFormThree = 'Sin documento';
			$stepOneFormThree = 'current';
			$enableFormThree= "";
			$progreso = '20%';
		}


		//new



    $responseinfoSteps = $this->_callApiRest('Verano/api/veranoinfoSteps/id/'.$identAspirante,null,"GET",null);
		$status = $responseInstOne['data']['statusInstitucion'] ? $responseInstOne['data']['statusInstitucion'] == 'Activo': 'Inactivo';
		$statu = '';
			if($status == TRUE){
				$statu = 'Activo';
			}else{
				$statu = 'Inactivo';
			}

		$responseFile = $this->_callApiRest('Verano/api/fileinfo/id/'.$identAspirante,null,"GET",null);

		$defaultfile = '';
		$fileexists = '';
		$enable = '';
		$progreso = '';
		if($responseFile['data'] == NULL){
			$defaultfile = '';
			$fileexists = FALSE;
			$enable= '';
				$statusDoc='SinDocumento';
				$progreso = '20%';
		}else{
			$defaultfile = $responseFile['data']['urlDocumento'];
			$fileexists = TRUE;
			$enable = "disabled='disabled'";
			$statusDoc= $responseFile['data']['statusDocumento'];
		}
		$stepOne = '';
		$stepTwo = '';
		$stepThree = '';

		if($statusDoc == "Revision"){
			$infoDoc = 'El documento esta en revisión';
			$stepOne = 'current';
			$stepTwo = 'current';
			$enable= "disabled='disabled'";
			$progreso = '50%';
		}else if($statusDoc == "Rechazado"){
			$defaultfile = '';
			$fileexists = True;
			$enable= "";
			$infoDoc = 'El documento fue rechazado';
			$defaultfile = $responseFile['data']['urlDocumento'];
			$stepOne = 'current';
			$stepTwo = 'current';
			$progreso = '20%';

		}else if($statusDoc == "Aceptado"){
			$infoDoc = 'El documento fue aceptado';
			$fileexists = True;
			$enable= "disabled='disabled'";
			$defaultfile = $responseFile['data']['urlDocumento'];
			$stepOne = 'current';
			$stepTwo = 'current';
			$stepThree = 'current';
			$progreso = '100%';
		}else if($statusDoc =="SinDocumento"){
			$infoDoc = 'Sin documento';
			$stepOne = 'current';
			$enable= "";
			$progreso = '20%';

		}
		//Nuevas adecuaciones
		$data['documentOne'] =$responseDocOne;
		$data['documentTwo'] =$responseDocTwo;
		$data['documentThree'] =$responseDocThree;
		$data['infoFormOne'] =$infoFormOne;
		// ..
		$data['description'] =$description;
		$data['infoDoc'] =$infoDoc;
		$data['statusDoc'] =$statusDoc;
		$data['stepOne'] =$stepOne;
		$data['stepTwo'] =$stepTwo;
		$data['stepThree'] =$stepThree;
		$data['progreso'] =$progreso;
    $data['aspirante'] =$responseVerano['data'];
    $data['instOne'] =$responseInstOne['data'];
    $data['instTwo'] =$responseInstTwo['data'];
    $data['instThree'] =$responseInstThree['data'];
		$data['status'] =$statu;
		$data['defaultfile'] =$defaultfile;
		$data['fileexists'] =$fileexists;
		$data['fileInfo'] =$responseFile;
		//new today

		$data['stepOneFormOne'] =$stepOneFormOne;
		$data['stepTwoFormOne'] =$stepTwoFormOne;
		$data['stepThreeFormOne'] =$stepThreeFormOne;
		$data['defaultfileForOne'] =$defaultfileForOne;
		$data['fileexistsFormOne'] =$fileexistsFormOne;
		$data['fileInfoFormOne'] =$responseFileFormOne;
		$data['enableFormOne'] =$enableFormOne;
		$data['infoFormOne'] =$infoFormOne;
		$data['statusDocFormOne'] =@$statusDocFormOne;
		$data['recomendationFormOne'] = $recomendationFormOne;
		$data['fileInfoFormOne'] =@$fileInfoFormOne;
		// $data['infoFormOne'] =$infoFormOne;
		// $data['stepOneFormOne'] =$stepOneFormOne;
		// $data['stepTwoFormOne'] =$stepTwoFormOne;
		// $data['stepThreeFormOne'] =$stepThreeFormOne;
		// $data['enableFormOne'] =$enableFormOne;
		 $data['defaultfileFormOne'] =$defaultfileFormOne;
		// $data['recomendationFormOne'] = $recomendationFormOne;
		$data['infoDocDropBox'] =  @$fileInfoFormOne;

		$data['stepOneFormTwo'] =$stepOneFormTwo;
		$data['stepTwoFormTwo'] =$stepTwoFormTwo;
		$data['stepThreeFormTwo'] =$stepThreeFormTwo;
		$data['defaultfileFormTwo'] =$defaultfileFormTwo;
		$data['fileexistsFormTwo'] =$fileexistsFormTwo;
		// $data['fileInfoFormTwo'] =$responseFileFormTwo;
		$data['enableFormTwo'] =$enableFormTwo;
		$data['infoFormTwo'] =$infoFormTwo;
		$data['statusDocFormTwo'] =$statusDocFormTwo;
		$data['recomendationFormTwo'] = $recomendationFormTwo;


		 $data['fileInfoFormTwo'] =$fileInfoFormTwo;
		// $data['infoFormTwo'] =$infoFormTwo;
		// $data['stepOneFormTwo'] =$stepOneFormTwo;
		// $data['stepTwoFormTwo'] =$stepTwoFormTwo;
		// $data['stepThreeFormTwo'] =$stepThreeFormTwo;
		// $data['enableFormTwo'] =$enableFormTwo;
		// $data['defaultfileFormTwo'] =$defaultfileFormTwo;
		// 	$data['recomendationFormTwo'] = $recomendationFormTwo;

		// $data['fileInfoFormThree'] =$fileInfoFormThree;
		// $data['infoFormThree'] =$infoFormThree;
		// $data['stepOneFormThree'] =$stepOneFormThree;
		// $data['stepTwoFormThree'] =$stepTwoFormThree;
		// $data['stepThreeFormThree'] =$stepThreeFormThree;
		// $data['enableFormThree'] =$enableFormThree;
		// $data['defaultfileFormThree'] =$defaultfileFormThree;
		// $data['recomendationFormThree'] = $recomendationFormThree;

		$data['stepOneFormThree'] =$stepOneFormThree;
		$data['stepTwoFormThree'] =$stepTwoFormThree;
		$data['stepThreeFormThree'] =$stepThreeFormThree;
		$data['defaultfileFormThree'] =$defaultfileFormThree;
		$data['fileexistsFormThree'] =$fileexistsFormThree;
		$data['fileInfoFormThree'] =$responseFileFormThree;
		$data['enableFormThree'] =$enableFormThree;
		$data['infoFormThree'] =$infoFormThree;
		$data['statusDocFormThree'] =$statusDocFormThree;
		$data['idDocFormOne']	=@$idDocFormOne;
		$data['idDocFormTwo']	=$idDocFormTwo;
		$data['idDocFormThree']	=$idDocFormThree;
		$data['recomendationFormThree'] = $recomendationFormThree;
		$data['InstOneInfo']	=$fkInstOne;
		$data['InstTwoInfo']	=$fkInstTwo;
		$data['InstThreeInfo']	=$fkInstThree;

		$data['enable'] =$enable;
    $data['infAspirante'] =$responseinfoSteps['data'];

		$data['user']=$this->session->userdata('user_sess');

    $this->load->view('Dashboard_pages/Verano/aspirante_page_view',$data);
      $this->_finalPage();
	}


}
