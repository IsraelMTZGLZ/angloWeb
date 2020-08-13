<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AspiranteInfo extends MY_RootController {

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
		$idAspirante = base64_decode($idAspirante);
    $responseEnglish = $this->_callApiRest('Ingles/api/englishnewStudents/id/'.$idAspirante,null,"GET",null);

		$responseInstSelect = $this->_callApiRest('Ingles/api/instSelected/id/'.$idAspirante,null,"GET",null);

		$aux_selec_one  = @$responseInstSelect['data'][0];

		$aux_selec_two  = @$responseInstSelect['data'][1];

		$aux_selec_three  = @$responseInstSelect['data'][2];

		//




		$fkInstOne =$aux_selec_one['fkInstituto'];
		$fkInstTwo =$aux_selec_two['fkInstituto'];
		$fkInstThree =$aux_selec_three['fkInstituto'];


		$docsAcepted = $this->_callApiRest('Verano/Ingles/api/docsAcepted/id/'.$idAspirante,null,"GET",null);
		$lenDocsAcepted = sizeof($docsAcepted['data']);

		//news 29
		$responseForm = $this->_callApiRest('Ingles/api/fileIngles/id/'.$idAspirante,null,"GET",null);
		$responseFormOne = $this->_callApiRest('Verano/Ingles/api/fileinfoFormatoSolicitud/id/'.$idAspirante.'/aux/'.$fkInstOne,null,"GET",null);
		// echo var_dump($responseFormOne['data']);
		$responseFormTwo = $this->_callApiRest('Verano/Ingles/api/fileinfoFormatoSolicitud/id/'.$idAspirante.'/aux/'.$fkInstTwo,null,"GET",null);
		$responseFormThree = $this->_callApiRest('Verano/Ingles/api/fileinfoFormatoSolicitud/id/'.$idAspirante.'/aux/'.$fkInstThree,null,"GET",null);
		$idFormOne = @$responseFormOne['data'][0]['idDocumento'];
			$idFormTwo = @$responseFormTwo['data'][0]['idDocumento'];
				$idFormThree = @$responseFormThree['data'][0]['idDocumento'];

				$recomendationResponseFormOne= $this->_callApiRest('Verano/Ingles/api/recomendtionDocuments/id/'.$idAspirante.'/aux/'.$idFormOne,null,"GET",null);
				$descriptionFormOne = @$recomendationResponseFormOne['data'][0]['descripcion'];

				$recomendationResponseFormTwo= $this->_callApiRest('Verano/Ingles/api/recomendtionDocuments/id/'.$idAspirante.'/aux/'.$idFormTwo,null,"GET",null);
				$descriptionFormTwo = @$recomendationResponseFormTwo['data'][0]['descripcion'];


				$recomendationResponseFormThree= $this->_callApiRest('Verano/Ingles/api/recomendtionDocuments/id/'.$idAspirante.'/aux/'.$idFormThree,null,"GET",null);
				$descriptionFormThree = @$recomendationResponseFormThree['data'][0]['descripcion'];

		if(@$responseFormOne['data'][0]){
			$r = $responseFormOne['data'][0];
			$fileInfoFormOne = $responseFormOne['data'][0];
			$statusDocFormOne = $r['statusDocumento'];
			$idDocFormOne = $r['idDocumento'];
			// echo($idDocFormOne);
			$responseFileFormOne =$responseFormOne['data'][0];
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
				$recomendationFormOne = $descriptionFormOne;
				// echo($recomendationFormOne['data']['descripcion']);
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
			$enableFormOne= "disabled='disabled'";
			$progreso = '20%';
		}

		//second document
		if(@$responseFormTwo['data'][0]){
			$r = $responseFormTwo['data'][0];
			$fileInfoFormTwo = $responseFormTwo['data'][0];
			$statusDocFormTwo = $r['statusDocumento'];
			$idDocFormTwo = $r['idDocumento'];
			// echo($idDocFormTwo);
			$responseFileFormTwo =$responseFormTwo['data'][0];
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
				$recomendationFormTwo = $descriptionFormTwo;
				// echo var_dump($recomendationFormTwo);
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
			$enableFormTwo= "disabled='disabled'";
			$progreso = '20%';
		}

		//Third document
		if(@$responseFormThree['data'][0]){
			$r = $responseFormThree['data'][0];
			$fileInfoFormThree = $responseFormThree['data'][0];
			$statusDocFormThree = $r['statusDocumento'];
			$responseFileFormThree =$responseFormThree['data'][0];
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
				$recomendationFormThree = $descriptionFormThree;
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
			$enableFormThree= "disabled='disabled'";
			$progreso = '20%';
		}

		$data['stepOneFormOne'] =@$stepOneFormOne;
		$data['stepTwoFormOne'] =@$stepTwoFormOne;
		$data['stepThreeFormOne'] =@@$stepThreeFormOne;
		$data['defaultfileForOne'] =@$defaultfileForOne;
		$data['fileexistsFormOne'] =@$fileexistsFormOne;
		$data['fileInfoFormOne'] =@$responseFileFormOne;
		$data['enableFormOne'] =@$enableFormOne;
		$data['infoFormOne'] =@$infoFormOne;
		$data['statusDocFormOne'] =@$statusDocFormOne;
		$data['recomendationFormOne'] = @$recomendationFormOne;
		$data['infoDocDropBox'] =  @$fileInfoFormOne;


		$data['stepOneFormTwo'] =@$stepOneFormTwo;
		$data['stepTwoFormTwo'] =@$stepTwoFormTwo;
		$data['stepThreeFormTwo'] =@$stepThreeFormTwo;
		$data['defaultfileFormTwo'] =@$defaultfileFormTwo;
		$data['fileexistsFormTwo'] =@$fileexistsFormTwo;
		$data['fileInfoFormTwo'] =@$responseFileFormTwo;
		$data['enableFormTwo'] =@$enableFormTwo;
		$data['infoFormTwo'] =@$infoFormTwo;
		$data['statusDocFormTwo'] =@$statusDocFormTwo;
		$data['recomendationFormTwo'] = @$recomendationFormTwo;

		$data['stepOneFormThree'] =@$stepOneFormThree;
		$data['stepTwoFormThree'] =@$stepTwoFormThree;
		$data['stepThreeFormThree'] =@$stepThreeFormThree;
		$data['defaultfileFormThree'] =@$defaultfileFormThree;
		$data['fileexistsFormThree'] =@$fileexistsFormThree;
		$data['fileInfoFormThree'] =@$responseFileFormThree;
		$data['enableFormThree'] =@$enableFormThree;
		$data['infoFormThree'] =@$infoFormThree;
		$data['statusDocFormThree'] =@$statusDocFormThree;
		$data['idDocFormOne']	=@$idDocFormOne;
		$data['idDocFormTwo']	=@$idDocFormTwo;
		$data['idDocFormThree']	=@$idDocFormThree;
		$data['recomendationFormThree'] = @$recomendationFormThree;

		//



		$responseInstOne= $this->_callApiRest('Ingles/api/englishnewInst/id/'.$fkInstOne,null,"GET",null);
		$responseInstTwo = $this->_callApiRest('Ingles/api/englishnewInst/id/'.$fkInstTwo,null,"GET",null);
		$responseInstThree = $this->_callApiRest('Ingles/api/englishnewInst/id/'.$fkInstThree,null,"GET",null);

		$responseinfoSteps = $this->_callApiRest('Ingles/api/englishinfoSteps/id/'.$idAspirante,null,"GET",null);

		$recomendation = $this->_callApiRest('Ingles/api/recomendtionPassport/id/'.$idAspirante,null,"GET",null);

		$description = $recomendation['data']['descripcion'];


		$responseFile = $this->_callApiRest('Ingles/api/fileinfo/id/'.$idAspirante,null,"GET",null);
		$statusPassport = $responseFile['data']['statusDocumento'];


		$infoStatus = $this->_callApiRest('Verano/Ingles/api/infoAspirante/id/'.$idAspirante,null,"GET",null);
		// echo var_dump();
		$infoStAs = $infoStatus['data']['statusAspirante'];
		// echo var_dump($infoStatus);


		 $docsAcepted = $this->_callApiRest('Verano/Ingles/api/docsAcepted/id/'.$idAspirante,null,"GET",null);
				 // echo var_dump(sizeof($docsAcepted['data']));
		 $lenDocsAcepted = sizeof($docsAcepted['data']);
		 	$lenInstitutos = sizeof($responseInstSelect['data']);
		 if($lenInstitutos == $lenDocsAcepted  and $infoStAs == '2' and $statusPassport == 'Aceptado'){

			$data= array(
				"status"=>"2R"
			);
			$data_to_string=json_encode($data);

			$url =  'http://localhost/angloApi/Verano/Ingles/api/statusAspirante/'.$idAspirante;
			$curl_request = curl_init($url);

			curl_setopt($curl_request,CURLOPT_CUSTOMREQUEST,"PUT");
			curl_setopt($curl_request,CURLOPT_HTTPHEADER,array(
				"x-api-key: ANGLOKEY",
				"Content-Type: application/json"
			));
			curl_setopt($curl_request,CURLOPT_RETURNTRANSFER,TRUE);
			curl_setopt($curl_request,CURLOPT_POSTFIELDS,$data_to_string);
			$response = curl_exec($curl_request);
			curl_close($curl_request);
			$response =json_decode($response);
			if ($response->status=="success") {
			 $mask = base64_encode($idAspirante);
			 $url = "Dashboard/Ingles/InfoAspiranteDosR/info/".$mask;
			redirect($url);
			}else{
			//	echo 'no';
			}
 		}else{
				//echo 'nel';

 		}
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

			$infoDoc = 'El documento esta en revisión';
			$stepOne = 'current';
			$stepTwo = 'current';
			$progreso = '50%';
		}else if($statusDoc == "Rechazado"){


			$defaultfile = '';
			$fileexists = True;
			$enable= "disabled='disabled'";
			$infoDoc = 'El documento fue rechazado';
			$defaultfile = $responseFile['data']['urlDocumento'];
			$stepOne = 'current';
			$stepTwo = 'current';
			$progreso = '20%';
			// $recomendationOne = $this->_callApiRest('Ingles/api/recomendtionPassport/id/'.$idAspirante,null,"GET",null);
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
		$data['defaultfile'] =$defaultfile;
		$data['fileexists'] =$fileexists;
		$data['fileInfo'] =$responseFile;
		$data['enable'] =$enable;
		$data['infoDoc'] =$infoDoc;
		$data['statusDoc'] =$statusDoc;
		$data['description'] =$description;
		$data['fileInfo'] =$responseFile;
    $data['idAspirante'] = $idAspirante;
		$data['stepOne'] =$stepOne;
		$data['stepTwo'] =$stepTwo;
		$data['stepThree'] =$stepThree;
		$data['progreso'] =$progreso;

		//news 29
		$data['InstOneInfo']	=$fkInstOne;
		$data['InstTwoInfo']	=$fkInstTwo;
		$data['InstThreeInfo']	=$fkInstThree;
		//

		$data['idFormOne']	=@$idFormOne;
		$data['idFormTwo']	=@$idFormTwo;
		$data['idFormThree']	=@$idFormThree;

    $data['aspirante'] =$responseEnglish['data'];

		$data['instOne'] =$responseInstOne['data'];
		$data['instTwo'] =$responseInstTwo['data'];
		$data['instThree'] =$responseInstThree['data'];
		$data['infAspirante'] =$responseinfoSteps['data'];
    $data['user']=$this->session->userdata('user_sess');
		// $this->_initialAspirante($data);
		// $this->_headerIngles($data);
		// $this->load->view('Dashboard_pages/Ingles/aspirante_english_view',$data);
		// 	$this->_finalPageAspirante();
		// $this->_finalPage();
    $this->load->view('Dashboard_pages/Ingles/aspirante_info_view',$data);
			$this->_finalPageAdmin();
  $this->_finalPage();
	}

}
