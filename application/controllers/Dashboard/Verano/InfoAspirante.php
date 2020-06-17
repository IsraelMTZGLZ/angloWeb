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



		$recomendationFormOne = '';
		$recomendationFormTwo = '';
		$recomendationFormThree = '';

		//new
		$responseForm = $this->_callApiRest('Verano/Ingles/api/fileVeranoIngles/id/'.$idAspirante,null,"GET",null);
		//We do this to know if exists a document, we put '@' in case this does not exist
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
		$enableFormOne = '';

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

$responseFileFormTwo = '';
$responseFileFormOne = '';
$responseFileFormThree = '';
		if(@$responseForm['data'][0]){
			$r = $responseForm['data'][0];
			$fileInfoFormOne = $responseForm['data'][0];
			$statusDocFormOne = $r['statusDocumento'];
			$idDocFormOne = $r['idDocumento'];
			// echo($idDocFormOne);
			$responseFileFormOne =$responseForm['data'][0];
			if($r['statusDocumento'] == 'Activo'){

				$infoFormOne = 'El documento esta en revisión';
				$stepOneFormOne = 'current';
				$stepTwoFormOne = 'current';
				$enableFormOne = "disabled='disabled'";
				$progreso = '50%';
				$stepThreeFormOne = '';
				$defaultfileForOne = $r['urlDocumento'];
				$fileexistsFormOne = True;
			}else if($r['statusDocumento'] == 'Revision'){
				$infoFormOne = 'El documento esta en revisión';
				$stepOneFormOne = 'current';
				$stepTwoFormOne = 'current';
				$enableFormOne = "disabled='disabled'";
				$progreso = '50%';
				$stepThreeFormOne = '';
				$defaultfileForOne = $r['urlDocumento'];
				$fileexistsFormOne = True;
			}else if($r['statusDocumento'] == 'Rechazado'){
				$defaultfileFormOne = '';
				$fileexistsFormOne = True;
				$enableFormOne= "disabled='disabled'";
				$infoFormOne = 'El documento fue rechazado';
				$defaultfileForOne = $r['urlDocumento'];
				$stepOneFormOne = 'current';
				$stepTwoFormOne = 'current';
				$progreso = '20%';
				$recomendationFormOne = $this->_callApiRest('Verano/Ingles/api/recomendtion/id/'.$idAspirante.'/idDocForm/'.$idDocFormOne,null,"GET",null);
				echo($recomendationFormOne['data']['descripcion']);
				// echo($recomendationFormOne['data']['descripcion']);
			}else if($r['statusDocumento'] == 'Aceptado'){
				$infoFormOne = 'El documento fue aceptado';
				$fileexistsFormOne = True;
				$enableFormOne= "disabled='disabled'";
				$defaultfileForOne = $r['urlDocumento'];
				$stepOneFormOne = 'current';
				$stepTwoFormOne = 'current';
				$stepThreeFormOne = 'current';
				$progreso = '100%';
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
			$statusDocFormTwo = $r['statusDocumento'];
			$idDocFormTwo = $r['idDocumento'];
			// echo($idDocFormTwo);
			$responseFileFormTwo =$responseForm['data'][1];
			if($r['statusDocumento'] == 'Activo'){
				$infoFormTwo = 'El documento esta en revisión';
				$stepOneFormTwo = 'current';
				$stepTwoFormTwo = 'current';
				$enableFormTwo = "disabled='disabled'";
				$progreso = '50%';
				$stepThreeFormTwo = '';
				$defaultfileFormTwo = $r['urlDocumento'];
				$fileexistsFormTwo = True;
			}else if($r['statusDocumento'] == 'Revision'){
				$infoFormTwo = 'El documento esta en revisión';
				$stepOneFormTwo = 'current';
				$stepTwoFormTwo = 'current';
				$enableFormTwo = "disabled='disabled'";
				$progreso = '50%';
				$stepThreeFormTwo = '';
				$fileexistsFormTwo = True;
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
				$recomendationFormTwo = $this->_callApiRest('Verano/Ingles/api/recomendtion/id/'.$idAspirante.'/idDocForm/'.$idDocFormTwo,null,"GET",null);
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
			// echo($idDocFormThree);
			if($r['statusDocumento'] == 'Activo'){
				$infoFormThree = 'El documento esta en revisión';
				$stepOneFormThree = 'current';
				$stepTwoFormThree = 'current';
				$enableFormThree = "disabled='disabled'";
				$progreso = '50%';
				$stepThreeFormThree = '';
				$defaultfileFormThree = $r['urlDocumento'];
				$fileexistsFormThree = True;
			}else if($r['statusDocumento'] == 'Revision'){
				$infoFormThree = 'El documento esta en revisión';
				$stepOneFormThree = 'current';
				$stepTwoFormThree = 'current';
				$enableFormThree = "disabled='disabled'";
				$progreso = '50%';
				$stepThreeFormThree = '';
				$defaultfileFormThree = $r['urlDocumento'];
				$fileexistsFormThree = True;
			}else if($r['statusDocumento'] == 'Rechazado'){
				$defaultfileFormThree = '';
				$fileexistsFormThree = True;
				$enableFormThree= "";
				$infoFormThree = 'El documento fue rechazado';
				$defaultfileFormThree = $r['urlDocumento'];
				$stepOneFormThree = 'current';
				$stepTwoFormThree = 'current';
				$progreso = '20%';
				$recomendationFormThree = $this->_callApiRest('Verano/Ingles/api/recomendtion/id/'.$idAspirante.'/idDocForm/'.$idDocFormThree,null,"GET",null);
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

		//

		$responseFile = $this->_callApiRest('Verano/api/fileinfo/id/'.$idAspirante,null,"GET",null);
		// echo var_dump($responseFile);
		$idPassport = $responseFile['data']['idDocumento'];
			$recomendation = $this->_callApiRest('Ingles/api/recomendtionPassport/id/'.$idAspirante,null,"GET",null);
		echo var_dump($recomendation);
		$description = $recomendation['data']['descripcion'];
			$defaultfile = '';
			$fileexists = '';
			$enable = '';
			$progreso = '';
			if($responseFile['data'] == NULL){
				$defaultfile = '';
				$fileexists = FALSE;
				$enable= '';
				$statusDoc= "SinDocumento";
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
			echo("Revicion");
			$infoDoc = 'El documento esta en revisión';
			$stepOne = 'current';
			$stepTwo = 'current';
			$progreso = '50%';
		}else if($statusDoc == "Rechazado"){

			echo("Rechazado Sorry");
			$defaultfile = '';
			$fileexists = True;
			$enable= "disabled='disabled'";
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
			$enable= "disabled='disabled'";
			$progreso = '20%';

		}
		$data['stepOne'] =$stepOne;
		$data['stepTwo'] =$stepTwo;
		$data['stepThree'] =$stepThree;
		$data['defaultfile'] =$defaultfile;
		$data['fileexists'] =$fileexists;
		$data['fileInfo'] =$responseFile;
		$data['enable'] =$enable;
		$data['infoDoc'] =$infoDoc;
		$data['statusDoc'] =$statusDoc;
		$data['description'] =$description;
		$data['progreso'] =$progreso;
		$data['idinfDocment'] = $idPassport;

		//new
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


		$data['stepOneFormTwo'] =$stepOneFormTwo;
		$data['stepTwoFormTwo'] =$stepTwoFormTwo;
		$data['stepThreeFormTwo'] =$stepThreeFormTwo;
		$data['defaultfileFormTwo'] =$defaultfileFormTwo;
		$data['fileexistsFormTwo'] =$fileexistsFormTwo;
		$data['fileInfoFormTwo'] =$responseFileFormTwo;
		$data['enableFormTwo'] =$enableFormTwo;
		$data['infoFormTwo'] =$infoFormTwo;
		$data['statusDocFormTwo'] =$statusDocFormTwo;
		$data['recomendationFormTwo'] = $recomendationFormTwo;

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

    $data['idAspirante'] = $idAspirante;
    $data['aspirante'] =$responseVerano['data'];
		$data['instOne'] =$responseInstOne['data'];
		$data['instTwo'] =$responseInstTwo['data'];
		$data['instThree'] =$responseInstThree['data'];
		$data['infAspirante'] =$responseinfoSteps['data'];
    $data['user']=$this->session->userdata('user_sess');

    $this->load->view('Dashboard_pages/Verano/info_aspirante_view',$data);
		$this->_finalPage();
	}

}
