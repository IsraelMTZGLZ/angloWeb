<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InfoAspiranteTres extends MY_RootController {

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

    $responseVerano = $this->_callApiRest('Verano/api/veranonewStudents/id/'.$idAspirante,null,"GET",null);
		$AspiranteInfo=$this->session->userdata('user_sess');

		$docsAceptedNum = $this->_callApiRest('Verano/Ingles/api/docsNumAplicante/id/'.$idAspirante,null,"GET",null);

		$responseInstSelect = $this->_callApiRest('Verano/Ingles/api/instSelected/id/'.$idAspirante,null,"GET",null);
		// echo var_dump($idAspirante);
		$aux_selec_one  = @$responseInstSelect['data'][0];
		$aux_selec_two  = @$responseInstSelect['data'][1];
		$aux_selec_three  = @$responseInstSelect['data'][2];
		$lenInstitutos = @sizeof(@$responseInstSelect['data']);

		$pasoUno = TRUE;
		$pasoDos = TRUE;
		$pasoTres = TRUE;
		$pasoCuatro= TRUE;
		$pasoCinco = TRUE;
		$pasoSeis= FALSE;
		$pasoSiete = FALSE;



		$infoStatus = $this->_callApiRest('Verano/Ingles/api/infoAspirante/id/'.$idAspirante,null,"GET",null);

		$infoStAs = $infoStatus['data']['statusAspirante'];
		$docsAcepted = $this->_callApiRest('Verano/Ingles/api/docsAcepted/id/'.$idAspirante,null,"GET",null);

		$lenDocsAcepted = @sizeof($docsAcepted['data']);


		$fkInstOne =$aux_selec_one['fkInstituto'];
    $fkInstTwo =$aux_selec_two['fkInstituto'];
    $fkInstThree =$aux_selec_three['fkInstituto'];

		$responseInstOne= $this->_callApiRest('Verano/api/veranonewInst/id/'.$fkInstOne,null,"GET",null);
		$responseInstTwo = $this->_callApiRest('Verano/api/veranonewInst/id/'.$fkInstTwo,null,"GET",null);

		$responseInstThree = $this->_callApiRest('Verano/api/veranonewInst/id/'.$fkInstThree,null,"GET",null);

		$responseCartaInstTwo = $this->_callApiRest('Verano/Ingles/api/fileinfoCarta/id/'.$idAspirante.'/aux/'.$fkInstTwo,null,"GET",null);
		$responseCartaInstThree = $this->_callApiRest('Verano/Ingles/api/fileinfoCarta/id/'.$idAspirante.'/aux/'.$fkInstThree,null,"GET",null);
		$responseCartaInstOne = $this->_callApiRest('Verano/Ingles/api/fileinfoCarta/id/'.$idAspirante.'/aux/'.$fkInstOne,null,"GET",null);


		$infoDocCartaOne = '';
		$statusDocCarta = '';
		$stepOneCartaOne = '';
		$stepTwoCartaOne = '';
		$stepThreeCartaOne = '';
		$progreso = '';
		$defaultfileCartaOne = '';
		$fileexistsCartaOne = '';
		$enableCartaOne = '';
		$idVisa = '';



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
					$descriptionCartaInstOne = $recomendationCartaInstOne['data']['descripcion'];


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
		if($responseInstTwo and $responseCartaInstTwo['data'] != null){

				if($responseCartaInstTwo['data'][0]['typeUser'] == 'Aspirante'){
					$idCartaTwo = $responseCartaInstTwo['data'][0]['idDocumento'];

					$recomendationCartaInstTwo = $this->_callApiRest('Verano/Ingles/api/recomendtionCarta/id/'.$idAspirante.'/aux/'.$idCartaTwo,null,"GET",null);

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
							$defaultfileCartaInstTwo = $responseCartaInstTwo['data'][0]['urlDocumento'];
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
						$progreso = '100%';
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
						$defaultfileCartaInstTwo = $responseCartaInstTwo['data'][0]['urlDocumento'];
						$fileexistsCartaInstTwo = TRUE;
						$enableCartaInstTwo = "disabled='disabled'";
						$statusDocCartaInstTwo= $responseCartaInstTwo['data'][0]['statusDocumento'];

					}


						$descriptionCartaInstTwo = '';
					if($statusDocCartaInstTwo == "Aceptado"){
						$infoDocCartaInstTwo = 'El documento fue aceptado';
						$fileexistsCartaInstTwo = True;
						$enableCartaInstTwo= "disabled='disabled'";
						$defaultfileCartaInstTwo = $responseCartaInstTwo['data'][0]['urlDocumento'];
						$stepOneCartaInstTwo = 'current';
						$stepTwoCartaInstTwo = 'current';
						$stepThreeCartaInstTwo = 'current';
						$progreso = '100%';
					}else{
						$infoDocCartaInstTwo = 'Sin documento';
						$stepOneCartaInstTwo = 'current';
						$enableCartaInstTwo= "disabled='disabled'";
						$progreso = '20%';

					}
					$whoCartaInstTwo  = 'Admin_Agente';


				}else{

				}
		}else{
			$recomendationCartaInstTwo = $this->_callApiRest('Verano/Ingles/api/recomendtionCarta/id/'.$idAspirante,null,"GET",null);
			$description = @$recomendationCartaInstTwo['data'][0]['descripcion'];


			if($responseCartaInstTwo['data'] == NULL){
					$defaultfileCartaInstTwo = '';
					$fileexistsCartaInstTwo = FALSE;
					$enableCartaInstTwo= '';
					$statusDocCartaInstTwo='SinDocumento';
					$progreso = '20%';
			}else{
			$defaultfileCartaInstTwo = $responseCartaInstTwo['data']['urlDocumento'];
			$fileexistsCartaInstTwo = TRUE;
			$enableCartaInstTwo = "disabled='disabled'";
			$statusDocCartaInstTwo= $responseCartaInstTwo['data']['statusDocumento'];
			}
			$stepOneCartaInstTwo = '';
			$stepTwoCartaInstTwo = '';
			$stepThreeCartaInstTwo = '';

			if($statusDocCartaInstTwo =="SinDocumento"){
				$infoDocCartaInstTwo = 'Sin documento';
				$stepOneCartaInstTwo = 'current';
				$enableCartaInstTwo= "";
				$progreso = '20%';
			}
			$whoCartaInstTwo  = 'no_One';
		}
		if($responseInstThree and $responseCartaInstThree['data'] != null){
			if($responseCartaInstThree['data'][0]['typeUser'] == 'Aspirante'){
				$idCartaThree = $responseCartaInstThree['data'][0]['idDocumento'];

				$recomendationCartaInstThree = $this->_callApiRest('Verano/Ingles/api/recomendtionCarta/id/'.$idAspirante.'/aux/'.$idCartaThree,null,"GET",null);

				$descriptionCartaInstThree = @$recomendationCartaInstThree['data'][0]['descripcion'];

					$defaultfileCartaInstThree = '';
					$fileexistsCartaInstThree = '';
					$enableCartaInstThree = '';

					if($responseCartaInstThree['data'][0] == NULL){
						$defaultfileCartaInstThree = '';
						$fileexistsCartaInstThree = FALSE;
						$enableCartaInstThree= '';
						$statusDocCartaInstThree= "SinDocumento";

					}else{
						$defaultfileCartaInstThree = $responseCartaInstThree['data'][0]['urlDocumento'];
						$fileexistsCartaInstThree = TRUE;
						$enableCartaInstThree = "disabled='disabled'";
						$statusDocCartaInstThree= $responseCartaInstThree['data'][0]['statusDocumento'];

					}

				$stepOneCartaInstThree = '';
				$stepTwoCartaInstThree = '';
				$stepThreeCartaInstThree = '';

				if($statusDocCartaInstThree == "Revision"){

					$infoDocCartaInstThree = 'El documento esta en revisión';
					$stepOneCartaInstThree = 'current';
					$stepTwoCartaInstThree = 'current';
					$defaultfileCartaInstThree = $responseCartaInstThree['data'][0]['urlDocumento'];
					// echo var_dump("Hola");
				}else if($statusDocCartaInstThree == "Rechazado"){


					$defaultfileCartaInstThree = '';
					$fileexistsCartaInstThree = True;
					$enableCartaInstThree= "disabled='disabled'";
					$infoDocCartaInstThree = 'El documento fue rechazado';
					$defaultfileCartaInstThree = $responseCartaInstThree['data'][0]['urlDocumento'];
					$stepOneCartaInstThree = 'current';
					$stepTwoCartaInstThree = 'current';


				}else if($statusDocCartaInstThree == "Aceptado"){
					$infoDocCartaInstThree = 'El documento fue aceptado';
					$fileexistsCartaInstThree = True;
					$enableCartaInstThree= "disabled='disabled'";
					$defaultfileCartaInstThree = $responseCartaInstThree['data'][0]['urlDocumento'];
					$stepOneCartaInstThree = 'current';
					$stepTwoCartaInstThree = 'current';
					$stepThreeCartaInstThree = 'current';
					$progreso = '100%';
				}else if($statusDocCartaInstThree =="SinDocumento"){
					$infoDocCartaInstThree = 'Sin documento';
					$stepOneCartaInstThree = 'current';
					$enableCartaInstThree= "disabled='disabled'";


				}
				$whoCartaInstThree  = 'Aspirante';
			}else if($responseCartaInstThree['data'][0]['typeUser'] == 'Agente'){
				$defaultfileCartaInstThree = '';
				$fileexistsCartaInstThree = '';
				$enableCartaInstThree = '';

				if($responseCartaInstThree['data'][0] == NULL){
					$defaultfileCartaInstThree = '';
					$fileexistsCartaInstThree = FALSE;
					$enableCartaInstThree= '';
					$statusDocCartaInstThree= "SinDocumento";

				}else{
					$defaultfileCartaInstThree = $responseCartaInstThree['data'][0]['urlDocumento'];
					$fileexistsCartaInstThree = TRUE;
					$enableCartaInstThree = "disabled='disabled'";
					$statusDocCartaInstThree= $responseCartaInstThree['data'][0]['statusDocumento'];

				}

					$descriptionCarta = '';
				if($statusDocCartaInstThree == "Aceptado"){
					$infoDocCartaInstThree = 'El documento fue aceptado';
					$fileexistsCartaInstThree = True;
					$enableCartaInstThree= "disabled='disabled'";
					$defaultfileCartaInstThree = $responseCartaInstThree['data'][0]['urlDocumento'];
					$stepOneCartaInstThree = 'current';
					$stepTwoCartaInstThree = 'current';
					$stepThreeCartaInstThree = 'current';
					$progreso = '100%';
				}else{
					$infoDocCartaInstThree = 'Sin documento';
					$stepOneCartaInstThree = 'current';
					$enableCartaInstThree= "disabled='disabled'";
					$progreso = '20%';

				}
				$whoCartaInstThree  = 'Admin_Agente';


			}else{
				$recomendationCartaInstThree = $this->_callApiRest('Verano/Ingles/api/recomendtionCarta/id/'.$idAspirante,null,"GET",null);
				$description = $recomendationCartaInstThree['data']['descripcion'];


				if($responseCartaInstThree['data'][0] == NULL){
						$defaultfileCartaInstThree = '';
						$fileexistsCartaInstThree = FALSE;
						$enableCartaInstThree= '';
						$statusDocCartaInstThree='SinDocumento';
						$progreso = '20%';
				}else{
				$defaultfileCartaInstThree = $responseCartaInstThree['data'][0]['urlDocumento'];
				$fileexistsCartaInstThree = TRUE;
				$enableCartaInstThree = "disabled='disabled'";
				$statusDocCartaInstThree= $responseCartaInstThree['data'][0]['statusDocumento'];
				}
				$stepOneCartaInstThree = '';
				$stepTwoCartaInstThree = '';
				$stepThreeCartaInstThree = '';

				if($statusDocCartaInstThree =="SinDocumento"){
					$infoDocCartaInstThree = 'Sin documento';
					$stepOneCartaInstThree = 'current';
					$enableCartaInstThree= "";
					$progreso = '20%';
				}
				$whoCartaInstThree  = 'no_One';
			}
		}else{
			$recomendationCartaInstThree = $this->_callApiRest('Verano/Ingles/api/recomendtionCarta/id/'.$idAspirante,null,"GET",null);
			$description = @$recomendationCartaInstThree['data'][0]['descripcion'];


			if($responseCartaInstThree['data'] == NULL){
					$defaultfileCartaInstThree = '';
					$fileexistsCartaInstThree = FALSE;
					$enableCartaInstThree= '';
					$statusDocCartaInstThree='SinDocumento';
					$progreso = '20%';
			}else{
			$defaultfileCartaInstThree = $responseCartaInstThree['data'][0]['urlDocumento'];
			$fileexistsCartaInstThree = TRUE;
			$enableCartaInstThree = "disabled='disabled'";
			$statusDocCartaInstThree= $responseCartaInstThree['data'][0]['statusDocumento'];
			}
			$stepOneCartaInstThree = '';
			$stepTwoCartaInstThree = '';
			$stepThreeCartaInstThree = '';

			if($statusDocCartaInstThree =="SinDocumento"){
				$infoDocCartaInstThree = 'Sin documento';
				$stepOneCartaInstThree = 'current';
				$enableCartaInstThree= "";
				$progreso = '20%';
			}
			$whoCartaInstThree  = 'no_One';
		}

		// $responseForm = $this->_callApiRest('Verano/Ingles/api/fileVeranoIngles/id/'.$idAspirante,null,"GET",null);
		//
		// $responseCarta = $this->_callApiRest('Verano/api/fileinfo/id/'.$idAspirante,null,"GET",null);
		//
		// $statusPassport = $responseCarta['data'][0]['statusDocumento'];


    // $responseCarta = $this->_callApiRest('Verano/Ingles/api/fileinfoVisa/id/'.$idAspirante,null,"GET",null);
		//
		// $idVisa = $responseCarta['data'][0]['idDocumento'];
		//
		// $recomendationCartaInstOne = $this->_callApiRest('Verano/Ingles/api/recomendtionVisa/id/'.$idAspirante,null,"GET",null);
		//
		// $description = $recomendationCartaInstOne['data']['descripcion'];
		// 	$defaultfileCartaOne = '';
		// 	$fileexistsCartaOne = '';
		// 	$enableCartaOne = '';
		// 	$progreso = '';
		// 	if($responseCarta['data'][0] == NULL){
		// 		$defaultfileCartaOne = '';
		// 		$fileexistsCartaOne = FALSE;
		// 		$enableCartaOne= '';
		// 		$statusDocCartaInstOne= "SinDocumento";
		// 		$progreso = '20%';
		// 	}else{
		// 		$defaultfileCartaOne = $responseCarta['data'][0]['urlDocumento'];
		// 		$fileexistsCartaOne = TRUE;
		// 		$enableCartaOne = "disabled='disabled'";
		// 		$statusDocCartaInstOne= $responseCarta['data'][0]['statusDocumento'];
		// 	}
		//
		// $stepOneCartaOne = '';
		// $stepTwoCartaOne = '';
		// $stepThreeCartaOne = '';
		//
		// if($statusDocCarta == "Revision"){
		//
		// 	$infoDocCartaOne = 'El documento esta en revisión';
		// 	$stepOneCartaOne = 'current';
		// 	$stepTwoCartaOne = 'current';
		// 	$progreso = '50%';
		// }else if($statusDocCarta == "Rechazado"){
		//
		//
		// 	$defaultfileCartaOne = '';
		// 	$fileexistsCartaOne = True;
		// 	$enableCartaOne= "disabled='disabled'";
		// 	$infoDocCartaOne = 'El documento fue rechazado';
		// 	$defaultfileCartaOne = $responseCarta['data'][0]['urlDocumento'];
		// 	$stepOneCartaOne = 'current';
		// 	$stepTwoCartaOne = 'current';
		// 	$progreso = '20%';
		//
		// }else if($statusDocCarta == "Aceptado"){
		// 	$infoDocCartaOne = 'El documento fue aceptado';
		// 	$fileexistsCartaOne = True;
		// 	$enableCartaOne= "disabled='disabled'";
		// 	$defaultfileCartaOne = $responseCarta['data'][0]['urlDocumento'];
		// 	$stepOneCartaOne = 'current';
		// 	$stepTwoCartaOne = 'current';
		// 	$stepThreeCartaOne = 'current';
		// 	$progreso = '100%';
		// }else if($statusDocCarta =="SinDocumento"){
		// 	$infoDocCartaOne = 'Sin documento';
		// 	$stepOneCartaOne = 'current';
		// 	$enableCartaOne= "disabled='disabled'";
		// 	$progreso = '20%';
		//
		// }
		$responseNumAplicanteOne = $this->_callApiRest('Verano/Ingles/api/numAplication/id/'.$idAspirante.'/idDocForm/'.$fkInstOne,null,"GET",null);
		$responseNumAplicanteTwo = $this->_callApiRest('Verano/Ingles/api/numAplication/id/'.$idAspirante.'/idDocForm/'.$fkInstTwo,null,"GET",null);
		$responseNumAplicanteThree = $this->_callApiRest('Verano/Ingles/api/numAplication/id/'.$idAspirante.'/idDocForm/'.$fkInstThree,null,"GET",null);
		$data['numAplicanteOne'] = $responseNumAplicanteOne['data'];
		$data['numAplicanteTwo'] = $responseNumAplicanteTwo['data'];
		$data['numAplicanteThree'] = $responseNumAplicanteThree['data'];

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

		$data['stepOneCartaInstTwo'] =@$stepOneCartaInstTwo;
		$data['stepTwoCartaInstTwo'] =@$stepTwoCartaInstTwo;
		$data['stepThreeCartaInstTwo'] =@$stepThreeCartaInstTwo;
		$data['defaultfileCartaInstTwo'] =@$defaultfileCartaInstTwo;
		$data['fileexistsCartaInstTwo'] =$fileexistsCartaInstTwo;
		$data['fileInfoCartaInstTwo'] =@$responseCartaInstTwo;
		$data['enableCartaInstTwo'] =@$enableCartaInstTwo;
		$data['infoDocCartaInstTwo'] =@$infoDocCartaInstTwo;
		$data['statusDocCartaInstTwo'] =@$statusDocCartaInstTwo;
		$data['descriptionCartaInstTwo'] =@$descriptionCartaInstTwo;
		$data['whoCartaInstTwo'] = @$whoCartaInstTwo;

		$data['stepOneCartaInstThree'] =@$stepOneCartaInstThree;
		$data['stepTwoCartaInstThree'] =@$stepTwoCartaInstThree;
		$data['stepThreeCartaInstThree'] =@$stepThreeCartaInstThree;
		$data['defaultfileCartaInstThree'] =@$defaultfileCartaInstThree;
		$data['fileexistsCartaInstThree'] =@$fileexistsCartaInstThree;
		$data['fileInfoCartaInstThree'] =@$responseCartaInstThree;
		$data['enableCartaInstThree'] =@$enableCartaInstThree;
		$data['infoDocCartaInstThree'] =@$infoDocCartaInstThree;
		$data['statusDocCartaInstThree'] =@$statusDocCartaInstThree;
		$data['descriptionCartaInstThree'] =@$descriptionCartaInstThree;
		$data['whoCartaInstThree'] = @$whoCartaInstThree;
		$data['idCartaOne'] = @$idCartaOne;
		$data['idCartaTwo'] = @$idCartaTwo;
		$data['idCartaThree'] = @$idCartaThree;

		$data['pasoUno']	=$pasoUno;
		$data['pasoDos']	=$pasoDos;
		$data['pasoTres']	=$pasoTres;
		$data['pasoCuatro']	=$pasoCuatro;
		$data['pasoCinco']	=$pasoCinco;
		$data['pasoSeis']	=$pasoSeis;
		$data['pasoSiete']	=$pasoSiete;

		$data['progreso'] =$progreso;
		// echo ($who);

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

		// $this->_initialAspirante($data);
		// $this->_headerAdmin($data);
		//
		// $this->_finalPageAdmin($data);
		// $this->_finalPage();

		$this->_initialAspirante($data);
		$this->_headerAdmin($data);
		$this->load->view('Dashboard_pages/Verano/info_aspirante_tres_view',$data);
		$this->_finalPageAdminAcademico($data);
		$this->_finalPage();
	}

}
