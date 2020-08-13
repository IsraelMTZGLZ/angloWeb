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
		$idAspirante = base64_decode($idAspirante);
    $responseVerano = $this->_callApiRest('Verano/api/veranonewStudents/id/'.$idAspirante,null,"GET",null);
		// $responseInstSelect = $this->_callApiRest('Verano/api/veranonewInstselected/id/'.$idAspirante,null,"GET",null);

		//testing
		$AspiranteInfo=$this->session->userdata('user_sess');
		// echo var_dump($AspiranteInfo);

		$responseInstSelect = $this->_callApiRest('Verano/Ingles/api/instSelected/id/'.$idAspirante,null,"GET",null);
		$aux_selec_one  = @$responseInstSelect['data'][0];
		$aux_selec_two  = @$responseInstSelect['data'][1];
		$aux_selec_three  = @$responseInstSelect['data'][2];
		$lenInstitutos = sizeof($responseInstSelect['data']);

		//new today 22 Jul  infoAspirante
		$infoStatus = $this->_callApiRest('Verano/Ingles/api/infoAspirante/id/'.$idAspirante,null,"GET",null);
		// echo var_dump();
		$infoStAs = $infoStatus['data']['statusAspirante'];
		$docsAcepted = $this->_callApiRest('Verano/Ingles/api/docsAcepted/id/'.$idAspirante,null,"GET",null);
				// echo var_dump(sizeof($docsAcepted['data']));
		$lenDocsAcepted = sizeof($docsAcepted['data']);

		//
		 // echo var_dump($docsAcepted);



		//-------------

		$fkInstOne =$aux_selec_one['fkInstituto'];
    $fkInstTwo =$aux_selec_two['fkInstituto'];
    $fkInstThree =$aux_selec_three['fkInstituto'];

		$responseInstOne= $this->_callApiRest('Verano/api/veranonewInst/id/'.$fkInstOne,null,"GET",null);
		$responseInstTwo = $this->_callApiRest('Verano/api/veranonewInst/id/'.$fkInstTwo,null,"GET",null);
		$responseInstThree = $this->_callApiRest('Verano/api/veranonewInst/id/'.$fkInstThree,null,"GET",null);

		$responseinfoSteps = $this->_callApiRest('Verano/api/veranoinfoSteps/id/'.$idAspirante,null,"GET",null);



		$recomendationFormOne = '';
		$recomendationFormTwo = '';
		$recomendationFormThree = '';



		$pasoUno = FALSE;
		$pasoDos = FALSE;
		$pasoTres = FALSE;
		$pasoCuatro= FALSE;
		$pasoCinco = FALSE;
		$pasoSeis= FALSE;
		$pasoSiete = FALSE;

		//new
		// $responseForm = $this->_callApiRest('Verano/Ingles/api/fileVeranoIngles/id/'.$idAspirante,null,"GET",null);

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
				$pasoDos = TRUE;
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
				$enableFormTwo= "disabled='disabled'";
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
				$pasoDos = TRUE;
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
				$enableFormThree= "disabled='disabled'";
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
				$pasoDos = TRUE;
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

		 // redirect($url);

		$responseFile = $this->_callApiRest('Verano/api/fileinfo/id/'.$idAspirante,null,"GET",null);
		  // echo var_dump($responseFile['data']['statusDocumento']);
		$statusPassport = $responseFile['data']['statusDocumento'];
		 // if($responseFile['data']['statusDocumento']){
		 //
		 // }
		 // echo ($lenDocsAcepted);
		 if($lenInstitutos == $lenDocsAcepted  and $infoStAs == '2' and $statusPassport == 'Aceptado'){
			//  $info = array(
	 		// 	'status'=>'2R'
	 		// );
			// $json_string_in_array = array('{"status":"2R"}');
			// $json_array = json_decode($json_string_in_array[0]);
			$data= array(
				"status"=>"2R"
			);
			//decodificar
			$data_to_string=json_encode($data);
			//peticiones http
			//$curl_request = curl_init("https://api.anglo.anglolatinoedu.com/User/api/loginNativo");
			//local
			$url =  'http://localhost/angloApi/Verano/Ingles/api/statusAspirante/'.$idAspirante;
			// echo($url);
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
				// echo base64_encode($idAspirante);
			 $mask = base64_encode($idAspirante);
			 $url = "Dashboard/Verano/InfoAspirante2R/info/".$mask;
			 // echo($url);
				  redirect($url);
			}else{
				// echo 'no';
			}
 		}else{
				// echo 'nel';
				// $hash=btoa($idAspirante);

 		}
		$idPassport = $responseFile['data']['idDocumento'];
			$recomendation = $this->_callApiRest('Ingles/api/recomendtionPassport/id/'.$idAspirante,null,"GET",null);
		// echo var_dump($recomendation);
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
			// echo("Revicion");
			$infoDoc = 'El documento esta en revisión';
			$stepOne = 'current';
			$stepTwo = 'current';
			$progreso = '50%';
		}else if($statusDoc == "Rechazado"){

			// echo("Rechazado Sorry");
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
			$pasoUno = TRUE;
		}else if($statusDoc =="SinDocumento"){
			$infoDoc = 'Sin documento';
			$stepOne = 'current';
			$enable= "disabled='disabled'";
			$progreso = '20%';

		}

		$data['pasoUno']	=$pasoUno;
		$data['pasoDos']	=$pasoDos;
		$data['pasoTres']	=$pasoTres;
		$data['pasoCuatro']	=$pasoCuatro;
		$data['pasoCinco']	=$pasoCinco;
		$data['pasoSeis']	=$pasoSeis;
		$data['pasoSiete']	=$pasoSiete;

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
		$data['infoDocDropBox'] =  @$fileInfoFormOne;


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


		$data['InstOneInfo']	=$fkInstOne;
		$data['InstTwoInfo']	=$fkInstTwo;
		$data['InstThreeInfo']	=$fkInstThree;

		$data['idFormOne']	=@$idFormOne;
		$data['idFormTwo']	=@$idFormTwo;
		$data['idFormThree']	=@$idFormThree;

		$this->_initialAspirante($data);
		$this->_headerAspirante($data);
    $this->load->view('Dashboard_pages/Verano/info_aspirante_view',$data);
		$this->_finalPageAdmin($data);
		$this->_finalPage();

		// $this->_initialAspirante($data);
		// $this->_headerAspirante($data);
		// $this->load->view('Dashboard_pages/Verano/aspirante_page_view',$data);
		// $this->_finalPageAspirante();
		// $this->_finalPage();
	}

}
