Examen<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InfoAspirante2R extends MY_RootController {

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

		$AspiranteInfo=$this->session->userdata('user_sess');


		$responseInstSelect = $this->_callApiRest('Verano/Ingles/api/instSelected/id/'.$idAspirante,null,"GET",null);
		$aux_selec_one  = @$responseInstSelect['data'][0];
		$aux_selec_two  = @$responseInstSelect['data'][1];
		$aux_selec_three  = @$responseInstSelect['data'][2];
		$lenInstitutos = sizeof($responseInstSelect['data']);


		$infoStatus = $this->_callApiRest('Verano/Ingles/api/infoAspirante/id/'.$idAspirante,null,"GET",null);

		$infoStAs = $infoStatus['data']['statusAspirante'];
		$docsAcepted = $this->_callApiRest('Verano/Ingles/api/docsAcepted/id/'.$idAspirante,null,"GET",null);
		$docsAceptedNum = $this->_callApiRest('Verano/Ingles/api/docsNumAplicante/id/'.$idAspirante,null,"GET",null);

		$lenDocsAcepted = sizeof($docsAcepted['data']);
		$lenDocsAceptedNum = sizeof($docsAceptedNum['data']);


		$fkInstOne =$aux_selec_one['fkInstituto'];
    $fkInstTwo =$aux_selec_two['fkInstituto'];
    $fkInstThree =$aux_selec_three['fkInstituto'];

		$responseInstOne= $this->_callApiRest('Verano/api/veranonewInst/id/'.$fkInstOne,null,"GET",null);
		$responseInstTwo = $this->_callApiRest('Verano/api/veranonewInst/id/'.$fkInstTwo,null,"GET",null);
		$responseInstThree = $this->_callApiRest('Verano/api/veranonewInst/id/'.$fkInstThree,null,"GET",null);
		$responseinfoSteps = $this->_callApiRest('Verano/api/veranoinfoSteps/id/'.$idAspirante,null,"GET",null);
		$responseNumAplicanteOne = $this->_callApiRest('Verano/Ingles/api/numAplication/id/'.$idAspirante.'/idDocForm/'.$fkInstOne,null,"GET",null);
		$responseNumAplicanteTwo = $this->_callApiRest('Verano/Ingles/api/numAplication/id/'.$idAspirante.'/idDocForm/'.$fkInstTwo,null,"GET",null);
		$responseNumAplicanteThree = $this->_callApiRest('Verano/Ingles/api/numAplication/id/'.$idAspirante.'/idDocForm/'.$fkInstThree,null,"GET",null);
		// echo var_dump($responseNumAplicanteOne['data']);

		$responseNumAplication = $this->_callApiRest('Verano/Ingles/api/numSelected/id/'.$idAspirante,null,"GET",null);

		$lenDocsAcepted = sizeof($responseNumAplication['data']);

		$responseForm = $this->_callApiRest('Verano/Ingles/api/fileVeranoIngles/id/'.$idAspirante,null,"GET",null);

		$responseFile = $this->_callApiRest('Verano/api/fileinfo/id/'.$idAspirante,null,"GET",null);

		$statusPassport = $responseFile['data']['statusDocumento'];


		//new today
		$responseCartaInstOneS = $this->_callApiRest('Verano/Ingles/api/fileinfoCarta/id/'.$idAspirante.'/aux/'.$fkInstOne.'/type/'."SinCalificar",null,"GET",null);
		// echo var_dump($responseCartaInstOne);
		if($responseCartaInstOneS['data'] == NULL){
			$responseCartaInstOneC = $this->_callApiRest('Verano/Ingles/api/fileinfoCarta/id/'.$idAspirante.'/aux/'.$fkInstOne.'/type/'."OfertaCondicional",null,"GET",null);
			if($responseCartaInstOneC['data'] == NULL){
				$responseCartaInstOneI = $this->_callApiRest('Verano/Ingles/api/fileinfoCarta/id/'.$idAspirante.'/aux/'.$fkInstOne.'/type/'."OfertaIncondicional",null,"GET",null);
				if($responseCartaInstOneI['data'] == NULL){
					$responseCartaInstOne = $responseCartaInstOneS;
				}else{

					$responseCartaInstOne = $responseCartaInstOneI;
				}
			}else{


				$responseCartaInstOne = $responseCartaInstOneC;

			}
		}else{
				$responseCartaInstOne = $responseCartaInstOneS;
		}
		$whoCartaInstOne  = 'no_One';

		$responseCartaInstTwoS = $this->_callApiRest('Verano/Ingles/api/fileinfoCarta/id/'.$idAspirante.'/aux/'.$fkInstTwo.'/type/'."SinCalificar",null,"GET",null);
		//echo var_dump($responseCartaInstTwoS);
		if($responseCartaInstTwoS['data'] == NULL){
			$responseCartaInstTwoC = $this->_callApiRest('Verano/Ingles/api/fileinfoCarta/id/'.$idAspirante.'/aux/'.$fkInstTwo.'/type/'."OfertaCondicional",null,"GET",null);
			if($responseCartaInstTwoC['data'] == NULL){
				$responseCartaInstTwoI = $this->_callApiRest('Verano/Ingles/api/fileinfoCarta/id/'.$idAspirante.'/aux/'.$fkInstTwo.'/type/'."OfertaIncondicional",null,"GET",null);
				if($responseCartaInstTwoI['data'] == NULL){
					$responseCartaInstTwo = $responseCartaInstTwoS;

				}else{

					$responseCartaInstTwo = $responseCartaInstTwoI;
				}
			}else{


				$responseCartaInstTwo = $responseCartaInstTwoC;

			}
		}else{
				$responseCartaInstTwo = $responseCartaInstTwoS;
		}
		$whoCartaInstTwo  = 'no_One';
		 //

		 // echo var_dump($responseCartaInstOne);
		if($responseNumAplicanteOne['data']!=NULL){
			$NumAplicantOne = TRUE;
			$pasoTres = TRUE;
			$pasoCuatro= TRUE;
			$fileexistsCartaInstTwo = FALSE;

			$responseinfoSteps = $this->_callApiRest('Verano/api/veranoinfoSteps/id/'.$idAspirante,null,"GET",null);

			if($responseInstOne and $responseCartaInstOne['data'] != null){
					$idCartaOne = $responseCartaInstOne['data'][0]['idDocumento'];



					if($responseCartaInstOne['data'][0]['typeUser'] == 'Aspirante'){


						$recomendationCartaInstOne = $this->_callApiRest('Verano/Ingles/api/recomendtionCarta/id/'.$idAspirante.'/aux/'.$idCartaOne,null,"GET",null);
						// echo var_dump($recomendationCartaInstOne);
						$descriptionCartaInstOne = @$recomendationCartaInstOne['data'][0]['descripcion'];
							$defaultfileCartaInstOne = '';
							$fileexistsCartaInstOne = '';
							$enableCartaInstOne = '';

							if($responseCartaInstOne['data'][0] == NULL){
								$defaultfileCartaInstOne = '';
								$fileexistsCartaInstOne = FALSE;
								$enableCartaInstOne= '';
								$statusDocCartaInstOne= "SinDocumento";

							}else{

								$defaultfileCartaOne = $responseCartaInstOne['data'][0]['urlDocumento'];
								$fileexistsCartaInstOne = TRUE;
								$enableCartaInstOne = "disabled='disabled'";
								$statusDocCartaInstOne= $responseCartaInstOne['data'][0]['statusDocumento'];

							}

						$stepOneCartaInstOne = '';
						$stepTwoCartaInstOne = '';
						$stepThreeCartaInstOne = '';

						if($statusDocCartaInstOne == "Revision"){

							$infoDocCartaInstOne = 'El documento esta en revisión';
							$stepOneCartaInstOne = 'current';
							$stepTwoCartaInstOne = 'current';
							$defaultfileCartaInstOne = $responseCartaInstOne['data'][0]['urlDocumento'];
							// echo var_dump("Hola");
						}else if($statusDocCartaInstOne == "Rechazado"){


							$defaultfileCartaInstOne = '';
							$fileexistsCartaInstOne = True;
							$enableCartaInstOne= "disabled='disabled'";
							$infoDocCartaInstOne = 'El documento fue rechazado';
							$defaultfileCartaInstOne = $responseCartaInstOne['data'][0]['urlDocumento'];
							$stepOneCartaInstOne = 'current';
							$stepTwoCartaInstOne = 'current';



						}else if($statusDocCartaInstOne == "Aceptado"){
							$infoDocCartaInstOne = 'El documento fue aceptado';
							$fileexistsCartaInstOne = True;
							$enableCartaInstOne= "disabled='disabled'";
							$defaultfileCartaInstOne = $responseCartaInstOne['data'][0]['urlDocumento'];
							$stepOneCartaInstOne = 'current';
							$stepTwoCartaInstOne = 'current';
							$stepThreeCartaInstOne = 'current';

						}else if($statusDocCartaInstOne =="SinDocumento"){
							$infoDocCartaInstOne = 'Sin documento';
							$stepOneCartaInstOne = 'current';
							$enableCartaInstOne= "disabled='disabled'";


						}
						$whoCartaInstOne  = 'Aspirante';
					}else if($responseCartaInstOne['data'][0]['typeUser'] == 'Agente'){
						$descriptionCartaInstOne = '';
						if($responseCartaInstOne['data'][0] == NULL){
							$defaultfileCartaInstOne = '';
							$fileexistsCartaInstOne = FALSE;
							$enableCartaInstOne= '';
							$statusDocCartaInstOne= "SinDocumento";

						}else{
							$defaultfileCartaOne = $responseCartaInstOne['data'][0]['urlDocumento'];
							$fileexistsCartaInstOne = TRUE;
							$enableCartaInstOne = "disabled='disabled'";
							$statusDocCartaInstOne= $responseCartaInstOne['data'][0]['statusDocumento'];

						}

							$descriptionCartaInstOneCarta = '';
						if($statusDocCartaInstOne == "Aceptado"){
							$infoDocCartaInstOne = 'El documento fue aceptado';
							$fileexistsCartaInstOne = True;
							$enableCartaInstOne= "disabled='disabled'";
							$defaultfileCartaInstOne = $responseCartaInstOne['data'][0]['urlDocumento'];
							$stepOneCartaInstOne = 'current';
							$stepTwoCartaInstOne = 'current';
							$stepThreeCartaInstOne = 'current';

						}else{
							$infoDocCartaInstOne = 'Sin documento';
							$stepOneCartaInstOne = 'current';
							$enableCartaInstOne= "disabled='disabled'";


						}
						$whoCartaInstOne  = 'Admin_Agente';


					}else{
						$recomendationCartaInstOne = $this->_callApiRest('Verano/Ingles/api/recomendtionCarta/id/'.$idAspirante,null,"GET",null);
						$descriptionCartaInstOne = @$recomendationCartaInstOne['data'][0]['descripcion'];


						if($responseCartaInstOne['data'][0] == NULL){
								$defaultfileCartaInstOne = '';
								$fileexistsCartaInstOne = FALSE;
								$enableCartaInstOne= '';
								$statusDocCartaInstOne='SinDocumento';

						}else{
						$defaultfileCartaInstOne = $responseCartaInstOne['data'][0]['urlDocumento'];
						$fileexistsCartaInstOne = TRUE;
						$enableCartaInstOne = "disabled='disabled'";
						$statusDocCartaInstOne= $responseCartaInstOne['data'][0]['statusDocumento'];
						}
						$stepOneCartaInstOne = '';
						$stepTwoCartaInstOne = '';
						$stepThreeCartaInstOne = '';

						if($statusDocCartaInstOne =="SinDocumento"){
							$infoDocCartaInstOne = 'Sin documento';
							$stepOneCartaInstOne = 'current';
							$enableCartaInstOne= "";

						}
						$whoCartaInstOne  = 'no_One';
					}
			}else{
				$recomendationCartaInstOne = $this->_callApiRest('Verano/Ingles/api/recomendtionCarta/id/'.$idAspirante,null,"GET",null);
				$descriptionCartaInstOne = @$recomendationCartaInstOne['data'][0]['descripcion'];


				if($responseCartaInstOne['data'] == NULL){
						$defaultfileCartaInstOne = '';
						$fileexistsCartaInstOne = FALSE;
						$enableCartaInstOne= '';
						$statusDocCartaInstOne='SinDocumento';

				}else{
				$defaultfileCartaInstOne = $responseCartaInstOne['data'][0]['urlDocumento'];
				$fileexistsCartaInstOne = TRUE;
				$enableCartaInstOne = "disabled='disabled'";
				$statusDocCartaInstOne= $responseCartaInstOne['data'][0]['statusDocumento'];
				}
				$stepOneCartaInstOne = '';
				$stepTwoCartaInstOne = '';
				$stepThreeCartaInstOne = '';

				if($statusDocCartaInstOne =="SinDocumento"){
					$infoDocCartaInstOne = 'Sin documento';
					$stepOneCartaInstOne = 'current';
					$enableCartaInstOne= "";

				}
				$whoCartaInstOne  = 'no_One';
			}
		}else{
			$NumAplicantOne = FALSE;
		}

		if($responseNumAplicanteTwo['data']!=NULL){
			$NumAplicantTwo= TRUE;
			$fileexistsCartaInstTwo = TRUE;

			if($responseInstTwo and $responseCartaInstTwo['data'] != null){
					$idCartaTwo = $responseCartaInstTwo['data'][0]['idDocumento'];



					if($responseCartaInstTwo['data'][0]['typeUser'] == 'Aspirante'){


						$recomendationCartaInstTwo = $this->_callApiRest('Verano/Ingles/api/recomendtionCarta/id/'.$idAspirante.'/aux/'.$idCartaTwo,null,"GET",null);
						// echo var_dump($recomendationCartaInstTwo);
						$descriptionCartaInstTwo = @$recomendationCartaInstTwo['data'][0]['descripcion'];
							$defaultfileCartaInstTwo = '';
							$fileexistsCartaInstTwo = '';
							$enableCartaInstTwo = '';

							if($responseCartaInstTwo['data'][0] == NULL){
								$defaultfileCartaInstTwo = '';
								$fileexistsCartaInstTwo = FALSE;
								$enableCartaInstTwo= '';
								$statusDocCartaInstTwo= "SinDocumento";

							}else{

								$defaultfileCartaTwo = $responseCartaInstTwo['data'][0]['urlDocumento'];
								$fileexistsCartaInstTwo = TRUE;
								$enableCartaInstTwo = "disabled='disabled'";
								$statusDocCartaInstTwo= $responseCartaInstTwo['data'][0]['statusDocumento'];

							}

						$stepOneCartaInstTwo = '';
						$stepTwoCartaInstTwo = '';
						$stepThreeCartaInstTwo = '';

						if($statusDocCartaInstTwo == "Revision"){

							$infoDocCartaInstTwo = 'El documento esta en revisión';
							$stepOneCartaInstTwo = 'current';
							$stepTwoCartaInstTwo = 'current';
							$defaultfileCartaInstTwo = $responseCartaInstTwo['data'][0]['urlDocumento'];
							// echo var_dump("Hola");
						}else if($statusDocCartaInstTwo == "Rechazado"){


							$defaultfileCartaInstTwo = '';
							$fileexistsCartaInstTwo = True;
							$enableCartaInstTwo= "disabled='disabled'";
							$infoDocCartaInstTwo = 'El documento fue rechazado';
							$defaultfileCartaInstTwo = $responseCartaInstTwo['data'][0]['urlDocumento'];
							$stepOneCartaInstTwo = 'current';
							$stepTwoCartaInstTwo = 'current';



						}else if($statusDocCartaInstTwo == "Aceptado"){
							$infoDocCartaInstTwo = 'El documento fue aceptado';
							$fileexistsCartaInstTwo = True;
							$enableCartaInstTwo= "disabled='disabled'";
							$defaultfileCartaInstTwo = $responseCartaInstTwo['data'][0]['urlDocumento'];
							$stepOneCartaInstTwo = 'current';
							$stepTwoCartaInstTwo = 'current';
							$stepThreeCartaInstTwo = 'current';

						}else if($statusDocCartaInstTwo =="SinDocumento"){
							$infoDocCartaInstTwo = 'Sin documento';
							$stepOneCartaInstTwo = 'current';
							$enableCartaInstTwo= "disabled='disabled'";


						}
						$whoCartaInstTwo  = 'Aspirante';
					}else if($responseCartaInstTwo['data'][0]['typeUser'] == 'Agente'){
						$descriptionCartaInstTwo = '';
						if($responseCartaInstTwo['data'][0] == NULL){
							$defaultfileCartaInstTwo = '';
							$fileexistsCartaInstTwo = FALSE;
							$enableCartaInstTwo= '';
							$statusDocCartaInstTwo= "SinDocumento";

						}else{
							$defaultfileCartaTwo = $responseCartaInstTwo['data'][0]['urlDocumento'];
							$fileexistsCartaInstTwo = TRUE;
							$enableCartaInstTwo = "disabled='disabled'";
							$statusDocCartaInstTwo= $responseCartaInstTwo['data'][0]['statusDocumento'];

						}

							$descriptionCartaInstTwoCarta = '';
						if($statusDocCartaInstTwo == "Aceptado"){
							$infoDocCartaInstTwo = 'El documento fue aceptado';
							$fileexistsCartaInstTwo = True;
							$enableCartaInstTwo= "disabled='disabled'";
							$defaultfileCartaInstTwo = $responseCartaInstTwo['data'][0]['urlDocumento'];
							$stepOneCartaInstTwo = 'current';
							$stepTwoCartaInstTwo = 'current';
							$stepThreeCartaInstTwo = 'current';

						}else{
							$infoDocCartaInstTwo = 'Sin documento';
							$stepTwoCartaInstTwo = 'current';
							$enableCartaInstTwo= "disabled='disabled'";


						}
						$whoCartaInstTwo  = 'Admin_Agente';


					}else{
						$recomendationCartaInstTwo = $this->_callApiRest('Verano/Ingles/api/recomendtionCarta/id/'.$idAspirante,null,"GET",null);
						$descriptionCartaInstTwo = @$recomendationCartaInstTwo['data'][0]['descripcion'];


						if($responseCartaInstTwo['data'][0] == NULL){
								$defaultfileCartaInstTwo = '';
								$fileexistsCartaInstTwo = FALSE;
								$enableCartaInstTwo= '';
								$statusDocCartaInstTwo='SinDocumento';

						}else{
						$defaultfileCartaInstTwo = $responseCartaInstTwo['data'][0]['urlDocumento'];
						$fileexistsCartaInstTwo = TRUE;
						$enableCartaInstTwo = "disabled='disabled'";
						$statusDocCartaInstTwo= $responseCartaInstTwo['data'][0]['statusDocumento'];
						}
						$stepOneCartaInstTwo = '';
						$stepTwoCartaInstTwo = '';
						$stepThreeCartaInstTwo = '';

						if($statusDocCartaInstTwo =="SinDocumento"){
							$infoDocCartaInstTwo = 'Sin documento';
							$stepOneCartaInstTwo = 'current';
							$enableCartaInstTwo= "";

						}
						$whoCartaInstTwo  = 'no_One';
					}
			}else{
				$recomendationCartaInstTwo = $this->_callApiRest('Verano/Ingles/api/recomendtionCarta/id/'.$idAspirante,null,"GET",null);
				$descriptionCartaInstTwo = @$recomendationCartaInstTwo['data'][0]['descripcion'];


				if($responseCartaInstTwo['data'] == NULL){
						$defaultfileCartaInstTwo = '';
						$fileexistsCartaInstTwo = FALSE;
						$enableCartaInstTwo= '';
						$statusDocCartaInstTwo='SinDocumento';

				}else{
				$defaultfileCartaInstTwo = $responseCartaInstTwo['data'][0]['urlDocumento'];
				$fileexistsCartaInstTwo = TRUE;
				$enableCartaInstTwo = "disabled='disabled'";
				$statusDocCartaInstTwo= $responseCartaInstTwo['data'][0]['statusDocumento'];
				}
				$stepOneCartaInstTwo = '';
				$stepTwoCartaInstTwo = '';
				$stepThreeCartaInstTwo = '';

				if($statusDocCartaInstTwo =="SinDocumento"){
					$infoDocCartaInstTwo = 'Sin documento';
					$stepOneCartaInstTwo = 'current';
					$enableCartaInstTwo= "";
						// echo 'Hola';
				}
				$whoCartaInstTwo  = 'no_One';
			}
		}else{
			$NumAplicantTwo= FALSE;
		}

		if($responseNumAplicanteThree['data']!=NULL){
			$NumAplicantThree= TRUE;
		}else{
			$NumAplicantThree= FALSE;
		}



		 if($lenInstitutos == $lenDocsAcepted  and $lenInstitutos == $lenDocsAcepted and $lenDocsAceptedNum==$lenInstitutos){
			 // echo('Si');
			$data= array(
				"status"=>"3"
			);

			$data_to_string=json_encode($data);

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

				// echo var_dump($response);
			}else{
				// echo var_dump($response);
			}

 		}else{

 		}
    $responseFile = $this->_callApiRest('Verano/Ingles/api/fileinfoVisa/id/'.$idAspirante,null,"GET",null);

		$idVisa = $responseFile['data']['idDocumento'];

		$recomendation = $this->_callApiRest('Verano/Ingles/api/recomendtionVisa/id/'.$idAspirante,null,"GET",null);

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


		//new 4C
		if($infoStAs == '4C'){
			if($responseCartaInstOne['data'] != null){

				$responseFileExamen = $this->_callApiRest('Verano/Ingles/api/documentosVerano/id/'.$idAspirante.'/aux/'.'Examen',null,"GET",null);
					// echo var_dump($responseFile['data']['statusDocumento']);
				$statusExamen = @$responseFileExamen['data'][0]['statusDocumento'];


				$idExamen = @$responseFileExamen['data'][0]['idDocumento'];
				$recomendationExamen = $this->_callApiRest('Verano/Ingles/api/recomendationDocs/id/'.$idAspirante.'/aux/'.'Examen',null,"GET",null);
				// echo var_dump($recomendationExamen);
				$descriptionExamen = @$recomendationExamen['data'][0]['descripcion'];
					$defaultfileExamen = '';
					$fileexistsExamen = '';
					$enableExamen = '';
					$progresoExamen = '';
					if($responseFileExamen['data'] == NULL){
						$defaultfileExamen = '';
						$fileexistsExamen = FALSE;
						$enableExamen= '';
						$statusDocExamen= "SinDocumento";
						$progresoExamen = '20%';
					}else{
						$defaultfileExamen = $responseFileExamen['data'][0]['urlDocumento'];
						$fileexistsExamen = TRUE;
						$enableExamen = "disabled='disabled'";
						$statusDocExamen= $responseFileExamen['data'][0]['statusDocumento'];
					}

				$stepOneExamen = '';
				$stepTwoExamen = '';
				$stepThreeExamen = '';

				if($statusDocExamen == "Revision"){
					// echo("Revicion");
					$infoDocExamen = 'El documento esta en revisión';
					$stepOneExamen = 'current';
					$stepTwoExamen = 'current';
					$progresoExamen = '50%';
						$defaultfileExamen = $responseFileExamen['data'][0]['urlDocumento'];
				}else if($statusDocExamen == "Rechazado"){

					// echo("Rechazado Sorry");
					$defaultfileExamen = '';
					$fileexistsExamen = True;
					$enableExamen= "disabled='disabled'";
					$infoDocExamen = 'El documento fue rechazado';
					$defaultfileExamen = $responseFileExamen['data'][0]['urlDocumento'];
					$stepOneExamen = 'current';
					$stepTwoExamen = 'current';
					$progresoExamen = '20%';

				}else if($statusDocExamen == "Aceptado"){
					$infoDocExamen = 'El documento fue aceptado';
					$fileexistsExamen = True;
					$enableExamen= "disabled='disabled'";
					$defaultfileExamen = $responseFileExamen['data'][0]['urlDocumento'];
					$stepOneExamen = 'current';
					$stepTwoExamen = 'current';
					$stepThreeExamen = 'current';
					$progresoExamen = '100%';
					$pasoUnoExamen = TRUE;

				}else if($statusDocExamen =="SinDocumento"){
					$infoDocExamen = 'Sin documento';
					$stepOneExamen = 'current';
					$enableExamen= "disabled='disabled'";
					$progresoExamen = '20%';

				}
			}else{

			}
		}else if($infoStAs == '4U' OR $infoStAs == '5' ){
			$responseFileVisa = $this->_callApiRest('Verano/Ingles/api/documentosVerano/id/'.$idAspirante.'/aux/'.'Visa',null,"GET",null);
				// echo var_dump($responseFile['data']['statusDocumento']);
			$statusVisa = @$responseFileVisa['data'][0]['statusDocumento'];
			$pasoCinco = TRUE;

			$idVisa = @$responseFileVisa['data'][0]['idDocumento'];
			$recomendationVisa = $this->_callApiRest('Verano/Ingles/api/recomendationDocs/id/'.$idAspirante.'/aux/'.'Visa',null,"GET",null);
			//echo var_dump($recomendationVisa);
			$descriptionVisa = @$recomendationVisa['data'][0]['descripcion'];
				$defaultfileVisa = '';
				$fileexistsVisa = '';
				$enableVisa = '';
				$progresoVisa = '';
				if($responseFileVisa['data'] == NULL){
					$defaultfileVisa = '';
					$fileexistsVisa = FALSE;
					$enableVisa= '';
					$statusDocVisa= "SinDocumento";
					$progresoVisa = '20%';
				}else{
					$defaultfileVisa = $responseFileVisa['data'][0]['urlDocumento'];
					$fileexistsVisa = TRUE;
					$enableVisa = "disabled='disabled'";
					$statusDocVisa= $responseFileVisa['data'][0]['statusDocumento'];
				}

			$stepOneVisa = '';
			$stepTwoVisa = '';
			$stepThreeVisa = '';

			if($statusDocVisa == "Revision"){
				// echo("Revicion");
				$infoDocVisa = 'El documento esta en revisión';
				$stepOneVisa = 'current';
				$stepTwoVisa = 'current';
				$progresoVisa = '50%';
					$defaultfileVisa = $responseFileVisa['data'][0]['urlDocumento'];
			}else if($statusDocVisa == "Rechazado"){

				// echo("Rechazado Sorry");
				$defaultfileVisa = '';
				$fileexistsVisa = True;
				$enableVisa= "disabled='disabled'";
				$infoDocVisa = 'El documento fue rechazado';
				$defaultfileVisa = $responseFileVisa['data'][0]['urlDocumento'];
				$stepOneVisa = 'current';
				$stepTwoVisa = 'current';
				$progresoVisa = '20%';

			}else if($statusDocVisa == "Aceptado"){
				$infoDocVisa = 'El documento fue aceptado';
				$fileexistsVisa = True;
				$enableVisa= "disabled='disabled'";
				$defaultfileVisa = $responseFileVisa['data'][0]['urlDocumento'];
				$stepOneVisa = 'current';
				$stepTwoVisa = 'current';
				$stepThreeVisa = 'current';
				$progresoVisa = '100%';
				$pasoUnoVisa = TRUE;
				$pasoSeis = TRUE;
			}else if($statusDocVisa =="SinDocumento"){
				$infoDocVisa = 'Sin documento';
				$stepOneVisa = 'current';
				$enableVisa= "disabled='disabled'";
				$progresoVisa = '20%';

			}
		}else if($infoStAs == '5'){
			$pasoCinco = TRUE;
			$pasoSeis = TRUE;
		}

		//new today view
		$data['stepOneExamen'] =@$stepOneExamen;
		$data['stepTwoExamen'] =@$stepTwoExamen;
		$data['stepThreeExamen'] =@$stepThreeExamen;
		$data['defaultfileExamen'] =@$defaultfileExamen;
		$data['fileexistsExamen'] =@$fileexistsExamen;
		$data['fileInfoExamen'] =@$responseFileExamen;
		$data['enableExamen'] =@$enableExamen;
		$data['infoDocExamen'] =@$infoDocExamen;
		$data['statusDocExamen'] =@$statusDocExamen;
		$data['descriptionExamen'] =@$descriptionExamen;
		$data['progresoExamen'] =@$progresoExamen;
		$data['idinfDocmentExamen'] = @$idExamen;


		$data['stepOneVisa'] =@$stepOneVisa;
		$data['stepTwoVisa'] =@$stepTwoVisa;
		$data['stepThreeVisa'] =@$stepThreeVisa;
		$data['defaultfileVisa'] =@$defaultfileVisa;
		$data['fileexistsVisa'] =@$fileexistsVisa;
		$data['fileInfoVisa'] =@$responseFileVisa;
		$data['enableVisa'] =@$enableVisa;
		$data['infoDocVisa'] =@$infoDocVisa;
		$data['statusDocVisa'] =@$statusDocVisa;
		$data['descriptionVisa'] =@$descriptionVisa;
		$data['progresoVisa'] =@$progresoVisa;
		$data['idinfDocmentVisa'] = @$idVisa;

		$data['stepOneCartaInstOne'] =@$stepOneCartaInstOne;
		$data['stepTwoCartaInstOne'] =@$stepTwoCartaInstOne;
		$data['stepThreeCartaInstOne'] =@$stepThreeCartaInstOne;
		$data['defaultfileCartaInstOne'] =@$defaultfileCartaInstOne;
		$data['fileexistsCartaInstOne'] =@$fileexistsCartaInstOne;
		// echo var_dump($fileexistsCartaInstOne);
		$data['fileInfoCartaInstOne'] =@$responseCartaInstOne;
		$data['enableCartaInstOne'] =@$enableCartaInstOne;
		$data['infoDocCartaInstOne'] =@$infoDocCartaInstOne;
		$data['statusDocCartaInstOne'] =@$statusDocCartaInstOne;
		$data['descriptionCartaInstOne'] =@$descriptionCartaInstOne;

		$data['idinfDocment'] = $idVisa;
		$data['whoCartaInstOne'] = $whoCartaInstOne;

		$data['stepOneCartaInstTwo'] =$stepOneCartaInstTwo;
		$data['stepTwoCartaInstTwo'] =@$stepTwoCartaInstTwo;
		$data['stepThreeCartaInstTwo'] =@$stepThreeCartaInstTwo;
		$data['defaultfileCartaInstTwo'] =@$defaultfileCartaInstTwo;
		$data['fileexistsCartaInstTwo'] =@$fileexistsCartaInstTwo;
		// echo var_dump($fileexistsCartaInstTwo);
		$data['fileInfoCartaInstTwo'] =@$responseCartaInstTwo;
		$data['enableCartaInstTwo'] =@$enableCartaInstTwo;
		$data['infoDocCartaInstTwo'] =@$infoDocCartaInstTwo;
		$data['statusDocCartaInstTwo'] =@$statusDocCartaInstTwo;
		$data['descriptionCartaInstTwo'] =@$descriptionCartaInstTwo;
		$data['whoCartaInstTwo'] = $whoCartaInstTwo;
		//



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
		$data['idinfDocment'] = $idVisa;

    $data['idAspirante'] = $idAspirante;
    $data['aspirante'] =$responseVerano['data'];
		$data['instOne'] =$responseInstOne['data'];
		$data['instTwo'] =$responseInstTwo['data'];
		$data['instThree'] =$responseInstThree['data'];
		$data['infAspirante'] =$responseinfoSteps['data'];
    $data['user']=$this->session->userdata('user_sess');

		$data['numAplicanteOne'] = $responseNumAplicanteOne['data'];
		$data['numAplicanteTwo'] = $responseNumAplicanteTwo['data'];
		$data['numAplicanteThree'] = $responseNumAplicanteThree['data'];

		$data['InstOneInfo']	=$fkInstOne;
		$data['InstTwoInfo']	=$fkInstTwo;
		$data['InstThreeInfo']	=$fkInstThree;

    $this->load->view('Dashboard_pages/VeranoAcademico/info_aspirante_dr_view',$data);
		$this->_finalPage();
	}

}
