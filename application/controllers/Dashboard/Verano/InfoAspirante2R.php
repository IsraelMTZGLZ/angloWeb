<?php
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
		$idAspirante = base64_decode($idAspirante);
    $responseVerano = $this->_callApiRest('Verano/api/veranonewStudents/id/'.$idAspirante,null,"GET",null);

		$AspiranteInfo=$this->session->userdata('user_sess');


		$responseInstSelect = $this->_callApiRest('Verano/Ingles/api/instSelected/id/'.$idAspirante,null,"GET",null);
		$aux_selec_one  = @$responseInstSelect['data'][0];
		$aux_selec_two  = @$responseInstSelect['data'][1];
		$aux_selec_three  = @$responseInstSelect['data'][2];
		$lenInstitutos = sizeof($responseInstSelect['data']);

		$responseView = $this->_callApiRest('Verano/Ingles/api/aspiranteVerInglesBYAspirante/id/'.$idAspirante,null,"GET",null);

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

		$pasoUno = TRUE;
		$pasoDos = TRUE;
		$pasoTres = FALSE;
		$pasoCuatro= FALSE;
		$pasoCinco = FALSE;
		$pasoSeis= FALSE;
		$pasoSiete = FALSE;

		$NumAplicantOne = FALSE;
		$NumAplicantThree= FALSE;
		$NumAplicantTwo= FALSE;

		//this is to know if the aplicant number exists
		$responseCartaInstTwo = $this->_callApiRest('Verano/Ingles/api/fileinfoCarta/id/'.$idAspirante.'/aux/'.$fkInstTwo.'/type/'.'OfertaCondicional',null,"GET",null);
		// if($responseCartaInstTwoC['data']!= NULL){
		// 		$responseCartaInstTwoI = $this->_callApiRest('Verano/Ingles/api/fileinfoCarta/id/'.$idAspirante.'/aux/'.$fkInstTwo.'/type/'.'OfertaIncondicional',null,"GET",null);
		// 		if($responseCartaInstTwoI){
		//
		// 		}else{
		//
		// 		}
		// }else{
		//
		// }
		// $responseCartaInstThree = $this->_callApiRest('Verano/Ingles/api/fileinfoCarta/id/'.$idAspirante.'/aux/'.$fkInstThree,null,"GET",null);
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
			$responseCartaInstThreeS = $this->_callApiRest('Verano/Ingles/api/fileinfoCarta/id/'.$idAspirante.'/aux/'.$fkInstThree.'/type/'."SinCalificar",null,"GET",null);
			//echo var_dump($responseCartaInstThreeS);
			if($responseCartaInstThreeS['data'] == NULL){
				$responseCartaInstThreeC = $this->_callApiRest('Verano/Ingles/api/fileinfoCarta/id/'.$idAspirante.'/aux/'.$fkInstThree.'/type/'."OfertaCondicional",null,"GET",null);
				if($responseCartaInstThreeC['data'] == NULL){
					$responseCartaInstThreeI = $this->_callApiRest('Verano/Ingles/api/fileinfoCarta/id/'.$idAspirante.'/aux/'.$fkInstThree.'/type/'."OfertaIncondicional",null,"GET",null);
					if($responseCartaInstThreeI['data'] == NULL){
						$responseCartaInstThree = $responseCartaInstThreeS;

					}else{

						$responseCartaInstThree = $responseCartaInstThreeI;
					}
				}else{


					$responseCartaInstThree = $responseCartaInstThreeC;

				}
			}else{
					$responseCartaInstThree = $responseCartaInstThreeS;
			}
			$whoCartaInstThree  = 'no_One';

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
			$pasoTres = TRUE;
			$pasoCuatro= TRUE;
			//$fileexistsCartaInstTwo = FALSE;


			if($responseInstThree and $responseCartaInstThree['data'] != null){
					$idCartaThree = $responseCartaInstThree['data'][0]['idDocumento'];



					if($responseCartaInstThree['data'][0]['typeUser'] == 'Aspirante'){


						$recomendationCartaInstThree = $this->_callApiRest('Verano/Ingles/api/recomendtionCarta/id/'.$idAspirante.'/aux/'.$idCartaThree,null,"GET",null);
						// echo var_dump($recomendationCartaInstThree);
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

								$defaultfileCartaThree = $responseCartaInstThree['data'][0]['urlDocumento'];
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

						}else if($statusDocCartaInstThree =="SinDocumento"){
							$infoDocCartaInstThree = 'Sin documento';
							$stepOneCartaInstThree = 'current';
							$enableCartaInstThree= "disabled='disabled'";


						}
						$whoCartaInstThree  = 'Aspirante';
					}else if($responseCartaInstThree['data'][0]['typeUser'] == 'Agente'){
						$descriptionCartaInstThree = '';
						if($responseCartaInstThree['data'][0] == NULL){
							$defaultfileCartaInstThree = '';
							$fileexistsCartaInstThree = FALSE;
							$enableCartaInstThree= '';
							$statusDocCartaInstThree= "SinDocumento";

						}else{
							$defaultfileCartaThree = $responseCartaInstThree['data'][0]['urlDocumento'];
							$fileexistsCartaInstThree = TRUE;
							$enableCartaInstThree = "disabled='disabled'";
							$statusDocCartaInstThree= $responseCartaInstThree['data'][0]['statusDocumento'];

						}

							$descriptionCartaInstThreeCarta = '';
						if($statusDocCartaInstThree == "Aceptado"){
							$infoDocCartaInstThree = 'El documento fue aceptado';
							$fileexistsCartaInstThree = True;
							$enableCartaInstThree= "disabled='disabled'";
							$defaultfileCartaInstThree = $responseCartaInstThree['data'][0]['urlDocumento'];
							$stepOneCartaInstThree = 'current';
							$stepTwoCartaInstThree = 'current';
							$stepThreeCartaInstThree = 'current';

						}else{
							$infoDocCartaInstThree = 'Sin documento';
							$stepOneCartaInstThree = 'current';
							$enableCartaInstThree= "disabled='disabled'";


						}
						$whoCartaInstThree  = 'Admin_Agente';


					}else{
						$recomendationCartaInstThree = $this->_callApiRest('Verano/Ingles/api/recomendtionCarta/id/'.$idAspirante,null,"GET",null);
						$descriptionCartaInstThree = @$recomendationCartaInstThree['data'][0]['descripcion'];


						if($responseCartaInstThree['data'][0] == NULL){
								$defaultfileCartaInstThree = '';
								$fileexistsCartaInstThree = FALSE;
								$enableCartaInstThree= '';
								$statusDocCartaInstThree='SinDocumento';

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

						}
						$whoCartaInstThree  = 'no_One';
					}
			}else{
				$recomendationCartaInstThree = $this->_callApiRest('Verano/Ingles/api/recomendtionCarta/id/'.$idAspirante,null,"GET",null);
				$descriptionCartaInstThree = @$recomendationCartaInstThree['data'][0]['descripcion'];


				if($responseCartaInstThree['data'] == NULL){
						$defaultfileCartaInstThree = '';
						$fileexistsCartaInstThree = FALSE;
						$enableCartaInstThree= '';
						$statusDocCartaInstThree='SinDocumento';

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

				}
				$whoCartaInstThree  = 'no_One';
			}
		}else{
			$NumAplicantThree= FALSE;
		}

		//

		 if(1==3){
			 // echo('Si');
			$data= array(
				"status"=>"5"
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

				// $mask = base64_encode($idAspirante);
				// $url = "Dashboard/Verano/InfoAspirante2R/info/".$mask;
				// redirect($url);
			}else{
			}

 		}else{
			// $mask = base64_encode($idAspirante);
			// $url = "Dashboard/Verano/InfoAspiranteTres/info/".$mask;
			// redirect($url);
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

		$stepTwo = '';
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

		//Those variables are to know if an amplicant number exists

		if($infoStAs == '4C'){
			if($responseCartaInstOne['data'] != null){

				$responseFilePago = $this->_callApiRest('Verano/Ingles/api/documentosVerano/id/'.$idAspirante.'/aux/'.'Pago',null,"GET",null);
					// echo var_dump($responseFile['data']['statusDocumento']);
				$statusPago = @$responseFilePago['data'][0]['statusDocumento'];


				$idPago = @$responseFilePago['data'][0]['idDocumento'];
				$recomendationPago = $this->_callApiRest('Verano/Ingles/api/recomendationDocs/id/'.$idAspirante.'/aux/'.'Pago',null,"GET",null);
				// echo var_dump($recomendationPago);
				$descriptionPago = @$recomendationPago['data'][0]['descripcion'];
					$defaultfilePago = '';
					$fileexistsPago = '';
					$enablePago = '';
					$progresoPago = '';
					if($responseFilePago['data'] == NULL){
						$defaultfilePago = '';
						$fileexistsPago = FALSE;
						$enablePago= '';
						$statusDocPago= "SinDocumento";
						$progresoPago = '20%';
					}else{
						$defaultfilePago = $responseFilePago['data'][0]['urlDocumento'];
						$fileexistsPago = TRUE;
						$enablePago = "disabled='disabled'";
						$statusDocPago= $responseFilePago['data'][0]['statusDocumento'];
					}

				$stepOnePago = '';
				$stepTwoPago = '';
				$stepThreePago = '';

				if($statusDocPago == "Revision"){
					// echo("Revicion");
					$infoDocPago = 'El documento esta en revisión';
					$stepOnePago = 'current';
					$stepTwoPago = 'current';
					$progresoPago = '50%';
						$defaultfilePago = $responseFilePago['data'][0]['urlDocumento'];
				}else if($statusDocPago == "Rechazado"){

					// echo("Rechazado Sorry");
					$defaultfilePago = '';
					$fileexistsPago = True;
					$enablePago= "disabled='disabled'";
					$infoDocPago = 'El documento fue rechazado';
					$defaultfilePago = $responseFilePago['data'][0]['urlDocumento'];
					$stepOnePago = 'current';
					$stepTwoPago = 'current';
					$progresoPago = '20%';

				}else if($statusDocPago == "Aceptado"){
					$infoDocPago = 'El documento fue aceptado';
					$fileexistsPago = True;
					$enablePago= "disabled='disabled'";
					$defaultfilePago = $responseFilePago['data'][0]['urlDocumento'];
					$stepOnePago = 'current';
					$stepTwoPago = 'current';
					$stepThreePago = 'current';
					$progresoPago = '100%';
					$pasoUnoPago = TRUE;

				}else if($statusDocPago =="SinDocumento"){
					$infoDocPago = 'Sin documento';
					$stepOnePago = 'current';
					$enablePago= "disabled='disabled'";
					$progresoPago = '20%';

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

		$data['NumAplicantOne'] = $NumAplicantOne;
		$data['NumAplicantTwo'] = $NumAplicantTwo;
		$data['NumAplicantThree'] = $NumAplicantThree;
		//

		//This is to pay
		$data['stepOnePago'] =@$stepOnePago;
		$data['stepTwoPago'] =@$stepTwoPago;
		$data['stepThreePago'] =@$stepThreePago;
		$data['defaultfilePago'] =@$defaultfilePago;
		$data['fileexistsPago'] =@$fileexistsPago;
		$data['fileInfoPago'] =@$responseFilePago;
		$data['enablePago'] =@$enablePago;
		$data['infoDocPago'] =@$infoDocPago;
		$data['statusDocPago'] =@$statusDocPago;
		$data['descriptionPago'] =@$descriptionPago;
		$data['progresoPago'] =@$progresoPago;
		$data['idinfDocmentPago'] = @$idPago;


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

		//nuevoo
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
		$data['fileexistsCartaInstTwo'] =@$fileexistsCartaInstTwo;
		// echo var_dump($fileexistsCartaInstTwo);
		$data['fileInfoCartaInstTwo'] =@$responseCartaInstTwo;
		$data['enableCartaInstTwo'] =@$enableCartaInstTwo;
		$data['infoDocCartaInstTwo'] =@$infoDocCartaInstTwo;
		$data['statusDocCartaInstTwo'] =@$statusDocCartaInstTwo;
		$data['descriptionCartaInstTwo'] =@$descriptionCartaInstTwo;
		$data['whoCartaInstTwo'] = $whoCartaInstTwo;

		//
		$data['stepOneCartaInstThree'] =@$stepOneCartaInstThree;
		$data['stepTwoCartaInstThree'] =@$stepTwoCartaInstThree;
		$data['stepThreeCartaInstThree'] =@$stepThreeCartaInstThree;
		$data['defaultfileCartaInstThree'] =@$defaultfileCartaInstThree;
		$data['fileexistsCartaInstThree'] =@$fileexistsCartaInstThree;
		// echo var_dump($fileexistsCartaInstThree);
		$data['fileInfoCartaInstThree'] =@$responseCartaInstThree;
		$data['enableCartaInstThree'] =@$enableCartaInstThree;
		$data['infoDocCartaInstThree'] =@$infoDocCartaInstThree;
		$data['statusDocCartaInstThree'] =@$statusDocCartaInstThree;
		$data['descriptionCartaInstThree'] =@$descriptionCartaInstThree;
		$data['whoCartaInstThree'] = $whoCartaInstThree;


		//New today  JUn 31
		$data['stepOneTicketPagoInstOne'] =@$stepOneTicketPagoInstOne;
		$data['stepTwoTicketPagoInstOne'] =@$stepTwoTicketPagoInstOne;
		$data['stepThreeTicketPagoInstOne'] =@$stepThreeTicketPagoInstOne;
		$data['defaultfileTicketPagoInstOne'] =@$defaultfileTicketPagoInstOne;
		$data['fileexistsTicketPagoInstOne'] =@$fileexistsTicketPagoInstOne;
		$data['fileInfoTicketPagoInstOne'] =@$responseticketPagoInstOne;
		$data['enableTicketPagoInstOne'] =@$enableTicketPagoInstOne;
		$data['infoDocTicketPagoInstOne'] =@$infoDocTicketPagoInstOne;
		$data['statusDocTicketPagoInstOne'] =@$statusDocTicketPagoInstOne;
		$data['descriptionTicketPagoInstOne'] =@$descriptionTicketPagoInstOne;
		$data['progresoTicketPagoInstOne'] =@$progresoTicketPagoInstOne;
		//

    $data['idAspirante'] = $idAspirante;
    $data['aspirante'] =$responseVerano['data'];
		$data['instOne'] =$responseInstOne['data'];
		$data['instTwo'] =$responseInstTwo['data'];
		$data['instThree'] =$responseInstThree['data'];
		$data['infAspirante'] =$responseinfoSteps['data'];
    $data['user']=$this->session->userdata('user_sess');

		$data['numAplicanteOne'] = $responseNumAplicanteOne['data'];
		// echo var_dump($responseNumAplicanteOne['data']);
		$data['numAplicanteTwo'] = $responseNumAplicanteTwo['data'];
		$data['numAplicanteThree'] = $responseNumAplicanteThree['data'];

		$data['InstOneInfo']	=$fkInstOne;
		$data['InstTwoInfo']	=$fkInstTwo;
		$data['InstThreeInfo']	=$fkInstThree;
		//new
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

		$this->_initialAspirante($data);
		$this->load->view('Dashboard_pages/Verano/info_aspirante_dr_view',$data);
		$this->_finalPageAdmin($data);
		$this->_finalPage();
	}

}
