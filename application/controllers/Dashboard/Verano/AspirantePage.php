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


	//Linea de documentos
		$pasoUno = FALSE;
		$pasoDos = FALSE;
		$pasoTres = FALSE;
		$pasoCuatro= FALSE;
		$pasoCinco = FALSE;
		$pasoSeis= FALSE;
		$pasoSiete = FALSE;


	//



		if($responseView['data']['statusAspirante'] == '2R' ){
			$pasoUno = TRUE;
			$pasoDos = TRUE;
			$responseNumero = $this->_callApiRest('Verano/Ingles/api/numSelected/id/'.$identAspirante,null,"GET",null);
			if($responseNumero['data']!=null){
				$pasoUno = TRUE;
				$pasoDos = TRUE;
				$pasoTres = TRUE;
			}else{
				$pasoUno = TRUE;
				$pasoDos = TRUE;
			}

							$status = $responseInstOne['data']['statusInstitucion'] ? $responseInstOne['data']['statusInstitucion'] == 'Activo': 'Inactivo';
							$statu = '';
								if($status == TRUE){
									$statu = 'Activo';
								}else{
									$statu = 'Inactivo';
								}

								// $responseFile = $this->_callApiRest('Verano/Ingles/api/fileinfoVisa/id/'.$identAspirante,null,"GET",null);
								//
								// $idVisa = $responseFile['data']['idDocumento'];
								//
								// $recomendation = $this->_callApiRest('Verano/Ingles/api/recomendationVisa/id/'.$identAspirante,null,"GET",null);

							$responseFile = $this->_callApiRest('Verano/Ingles/api/fileinfoVisa/id/'.$identAspirante,null,"GET",null);

							$recomendation = $this->_callApiRest('Verano/Ingles/api/recomendtionVisa/id/'.$identAspirante,null,"GET",null);

							$description = $recomendation['data']['descripcion'];

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


		  $data['pasoUno']	=$pasoUno;
		  $data['pasoDos']	=$pasoDos;
		  $data['pasoTres']	=$pasoTres;
		  $data['pasoCuatro']	=$pasoCuatro;
		  $data['pasoCinco']	=$pasoCinco;
		  $data['pasoSeis']	=$pasoSeis;
		  $data['pasoSiete']	=$pasoSiete;

			$enable = '';
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
			$data['InstOneInfo']	=$fkInstOne;
			$data['InstTwoInfo']	=$fkInstTwo;
			$data['InstThreeInfo']	=$fkInstThree;
			$data['enable'] =$enable;
			$data['infAspirante'] =$responseinfoSteps['data'];
			$data['user']=$this->session->userdata('user_sess');
			$this->_initialAspirante($data);
			$this->_headerAspirante($data);
			$this->load->view('Dashboard_pages/Verano/aspirante_page_dr_view',$data);
			$this->_finalPageAspirante();
			$this->_finalPage();

		}else if($responseView['data']['statusAspirante'] == '3' OR $responseView['data']['statusAspirante'] == '4C' OR $responseView['data']['statusAspirante'] == '4U' OR $responseView['data']['statusAspirante'] == '5'){

			$progreso = '20%';
			// $infoDoc = '';
			// $statusDoc = '';
			// $stepOne = '';
			// $stepTwo = '';
			// $stepThree = '';
			// $progreso = '';
			// $defaultfile = '';
			// $fileexists = '';
			// $enable = '';
			// $status = $responseInstOne['data']['statusInstitucion'] ? $responseInstOne['data']['statusInstitucion'] == 'Activo': 'Inactivo';
			// $statu = '';
			// if($status == TRUE){
			//  $statu = 'Activo';
			// }else{
			// 	$statu = 'Inactivo';
			// }
			// $responseFile = $this->_callApiRest('Verano/Ingles/api/fileinfoCarta/id/'.$identAspirante,null,"GET",null);
			//
			// if($responseFile['data']['typeUser'] == 'Aspirante'){
			//
			// 	$recomendation = $this->_callApiRest('Verano/Ingles/api/recomendtionCarta/id/'.$identAspirante,null,"GET",null);
			//
			// 	$description = $recomendation['data']['descripcion'];
			//
			//
			// 	if($responseFile['data'] == NULL){
			// 			$defaultfile = '';
			// 			$fileexists = FALSE;
			// 			$enable= '';
			// 			$statusDoc='SinDocumento';
			// 			$progreso = '20%';
			// 	}else{
			// 	$defaultfile = $responseFile['data']['urlDocumento'];
			// 	$fileexists = TRUE;
			// 	$enable = "disabled='disabled'";
			// 	$statusDoc= $responseFile['data']['statusDocumento'];
			// 	}
			// 	$stepOne = '';
			// 	$stepTwo = '';
			// 	$stepThree = '';
			//
			// 	if($statusDoc == "Revision"){
			// 		$infoDoc = 'El documento esta en revisión';
			// 		$stepOne = 'current';
			// 		$stepTwo = 'current';
			// 		$enable= "disabled='disabled'";
			// 		$progreso = '50%';
			// 	}else if($statusDoc == "Rechazado"){
			// 		$defaultfile = '';
			// 		$fileexists = True;
			// 		$enable= "";
			// 		$infoDoc = 'El documento fue rechazado';
			// 		$defaultfile = $responseFile['data']['urlDocumento'];
			// 		$stepOne = 'current';
			// 		$stepTwo = 'current';
			// 		$progreso = '20%';
			// 	}else if($statusDoc == "Aceptado"){
			// 		$infoDoc = 'El documento fue aceptado';
			// 		$fileexists = True;
			// 		$enable= "disabled='disabled'";
			// 		$defaultfile = $responseFile['data']['urlDocumento'];
			// 		$stepOne = 'current';
			// 		$stepTwo = 'current';
			// 		$stepThree = 'current';
			// 		$progreso = '100%';
			// 	}else if($statusDoc =="SinDocumento"){
			// 		$infoDoc = 'Sin documento';
			// 		$stepOne = 'current';
			// 		$enable= "";
			// 		$progreso = '20%';
			// 	}
			//
			// }else if($responseFile['data']['typeUser'] == 'Agente'){
			// 	$recomendation = $this->_callApiRest('Verano/Ingles/api/recomendtionVisa/id/'.$identAspirante,null,"GET",null);
			// 	$description = $recomendation['data']['descripcion'];
			// 	$defaultfile = '';
			// 	$fileexists = '';
			// 	$enable = '';
			// 	$progreso = '';
			// 	if($responseFile['data'] == NULL){
			// 			$defaultfile = '';
			// 			$fileexists = FALSE;
			// 			$enable= '';
			// 			$statusDoc='SinDocumento';
			// 			$progreso = '20%';
			// 	}else{
			// 	$defaultfile = $responseFile['data']['urlDocumento'];
			// 	$fileexists = TRUE;
			// 	$enable = "disabled='disabled'";
			// 	$statusDoc= $responseFile['data']['statusDocumento'];
			// 	}
			// 	$stepOne = '';
			// 	$stepTwo = '';
			// 	$stepThree = '';
			//
			// 	if($statusDoc == "Revision"){
			// 		$infoDoc = 'El documento esta en revisión';
			// 		$stepOne = 'current';
			// 		$stepTwo = 'current';
			// 		$enable= "disabled='disabled'";
			// 		$progreso = '50%';
			// 	}else if($statusDoc == "Aceptado"){
			// 		$infoDoc = 'El documento fue aceptado';
			// 		$fileexists = True;
			// 		$enable= "disabled='disabled'";
			// 		$defaultfile = $responseFile['data']['urlDocumento'];
			// 		$stepOne = 'current';
			// 		$stepTwo = 'current';
			// 		$stepThree = 'current';
			// 		$progreso = '100%';
			// 	}
			// }else{
			// 	$recomendation = $this->_callApiRest('Verano/Ingles/api/recomendtionCarta/id/'.$identAspirante,null,"GET",null);
			// 	$description = $recomendation['data']['descripcion'];
			//
			//
			// 	if($responseFile['data'] == NULL){
			// 			$defaultfile = '';
			// 			$fileexists = FALSE;
			// 			$enable= '';
			// 			$statusDoc='SinDocumento';
			// 			$progreso = '20%';
			// 	}else{
			// 	$defaultfile = $responseFile['data']['urlDocumento'];
			// 	$fileexists = TRUE;
			// 	$enable = "disabled='disabled'";
			// 	$statusDoc= $responseFile['data']['statusDocumento'];
			// 	}
			// 	$stepOne = '';
			// 	$stepTwo = '';
			// 	$stepThree = '';
			//
			// 	if($statusDoc =="SinDocumento"){
			// 		$infoDoc = 'Sin documento';
			// 		$stepOne = 'current';
			// 		$enable= "";
			// 		$progreso = '20%';
			// 	}
			// }
			//
			// $enable = '';
			// $data['description'] =$description;
			// $data['infoDoc'] =$infoDoc;
			// $data['statusDoc'] =$statusDoc;
			// $data['stepOne'] =$stepOne;
			// $data['stepTwo'] =$stepTwo;
			// $data['stepThree'] =$stepThree;
			$NumAplicantOne = FALSE;
			$NumAplicantThree= FALSE;
			$NumAplicantTwo= FALSE;

			$responseNumAplicanteOne = $this->_callApiRest('Verano/Ingles/api/numAplication/id/'.$identAspirante.'/idDocForm/'.$fkInstOne,null,"GET",null);
			$responseNumAplicanteTwo = $this->_callApiRest('Verano/Ingles/api/numAplication/id/'.$identAspirante.'/idDocForm/'.$fkInstTwo,null,"GET",null);
			$responseNumAplicanteThree = $this->_callApiRest('Verano/Ingles/api/numAplication/id/'.$identAspirante.'/idDocForm/'.$fkInstThree,null,"GET",null);

			$data['progreso'] =$progreso;
			$data['aspirante'] =$responseVerano['data'];
			$data['instOne'] =$responseInstOne['data'];
			$data['instTwo'] =$responseInstTwo['data'];
			$data['instThree'] =$responseInstThree['data'];
			// $data['status'] =$statu;
			// $data['defaultfile'] =$defaultfile;
			// $data['fileexists'] =$fileexists;
			// $data['fileInfo'] =$responseFile;
			$data['InstOneInfo']	=$fkInstOne;
			$data['InstTwoInfo']	=$fkInstTwo;
			$data['InstThreeInfo']	=$fkInstThree;
			// $data['enable'] =$enable;
			// $responseCartaInstTwo = $this->_callApiRest('Verano/Ingles/api/fileinfoCarta/id/'.$identAspirante.'/aux/'.$fkInstTwo.'/type/'.'SinCalificar',null,"GET",null);
			// $responseCartaInstThree = $this->_callApiRest('Verano/Ingles/api/fileinfoCarta/id/'.$identAspirante.'/aux/'.$fkInstThree.'/type/'.'SinCalificar',null,"GET",null);
			$responseCartaInstOneS = $this->_callApiRest('Verano/Ingles/api/fileinfoCarta/id/'.$identAspirante.'/aux/'.$fkInstOne.'/type/'.'SinCalificar',null,"GET",null);
			// echo var_dump($responseCartaInstOne);
			if($responseCartaInstOneS['data'] == NULL){
				$responseCartaInstOneC = $this->_callApiRest('Verano/Ingles/api/fileinfoCarta/id/'.$identAspirante.'/aux/'.$fkInstOne.'/type/'.'OfertaCondicional',null,"GET",null);
				if($responseCartaInstOneC['data'] == NULL){
					$responseCartaInstOneI = $this->_callApiRest('Verano/Ingles/api/fileinfoCarta/id/'.$identAspirante.'/aux/'.$fkInstOne.'/type/'.'OfertaIncondicional',null,"GET",null);
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

			$responseCartaInstTwoS = $this->_callApiRest('Verano/Ingles/api/fileinfoCarta/id/'.$identAspirante.'/aux/'.$fkInstTwo.'/type/'.'SinCalificar',null,"GET",null);
			// echo var_dump($responseCartaInstTwo);
			if($responseCartaInstTwoS['data'] == NULL){
				$responseCartaInstTwoC = $this->_callApiRest('Verano/Ingles/api/fileinfoCarta/id/'.$identAspirante.'/aux/'.$fkInstTwo.'/type/'.'OfertaCondicional',null,"GET",null);
				if($responseCartaInstTwoC['data'] == NULL){
					$responseCartaInstTwoI = $this->_callApiRest('Verano/Ingles/api/fileinfoCarta/id/'.$identAspirante.'/aux/'.$fkInstTwo.'/type/'.'OfertaIncondicional',null,"GET",null);
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

			$responseCartaInstThreeS = $this->_callApiRest('Verano/Ingles/api/fileinfoCarta/id/'.$identAspirante.'/aux/'.$fkInstThree.'/type/'.'SinCalificar',null,"GET",null);
			// echo var_dump($responseCartaInstThree);
			if($responseCartaInstThreeS['data'] == NULL){
				$responseCartaInstThreeC = $this->_callApiRest('Verano/Ingles/api/fileinfoCarta/id/'.$identAspirante.'/aux/'.$fkInstThree.'/type/'.'OfertaCondicional',null,"GET",null);
				if($responseCartaInstThreeC['data'] == NULL){
					$responseCartaInstThreeI = $this->_callApiRest('Verano/Ingles/api/fileinfoCarta/id/'.$identAspirante.'/aux/'.$fkInstThree.'/type/'.'OfertaIncondicional',null,"GET",null);
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

			$responseinfoSteps = $this->_callApiRest('Verano/api/veranoinfoSteps/id/'.$identAspirante,null,"GET",null);
			$idCartaOne = @$responseCartaInstOne['data'][0]['idDocumento'];
			if($responseInstOne and $responseCartaInstOne['data'] != null){

					if($responseCartaInstOne['data'][0]['typeUser'] == 'Aspirante'){

						$recomendationCartaInstOne = $this->_callApiRest('Verano/Ingles/api/recomendtionCarta/id/'.$identAspirante.'/aux/'.$idCartaOne,null,"GET",null);
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

							// echo var_dump("Hola");
						}else if($statusDocCartaInstOne == "Rechazado"){


							$defaultfileCartaInstOne = '';
							$fileexistsCartaInstOne = True;
							$enableCartaInstOne= '';
							$infoDocCartaInstOne = 'El documento fue rechazado';

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
							$pasoCuatro = TRUE;

						}else{
							$infoDocCartaInstOne = 'Sin documento';
							$stepOneCartaInstOne = 'current';
							$enableCartaInstOne= "disabled='disabled'";


						}
						$whoCartaInstOne  = 'Admin_Agente';


					}else{
						$recomendationCartaInstOne = $this->_callApiRest('Verano/Ingles/api/recomendtionCarta/id/'.$identAspirante,null,"GET",null);
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
				$recomendationCartaInstOne = $this->_callApiRest('Verano/Ingles/api/recomendtionCarta/id/'.$identAspirante,null,"GET",null);
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

						$recomendationCartaInstTwo = $this->_callApiRest('Verano/Ingles/api/recomendtionCarta/id/'.$identAspirante.'/aux/'.$idCartaTwo,null,"GET",null);

						$descriptionCartaInstTwo = @$recomendationCartaInstTwo['data'][0]['descripcion'];
						// $recomendationCartaInstOne = $this->_callApiRest('Verano/Ingles/api/recomendtionCarta/id/'.$idAspirante.'/aux/'.$idCartaOne,null,"GET",null);
						// // echo var_dump($recomendationCartaInstOne);
						// $descriptionCartaInstOne = $recomendationCartaInstOne['data'][0]['descripcion'];
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
							echo var_dump("Hola");

						}else if($statusDocCartaInstTwo == "Rechazado"){


							$defaultfileCartaInstTwo = '';
							$fileexistsCartaInstTwo = True;
							$enableCartaInstTwo='';
							$infoDocCartaInstTwo = 'El documento fue rechazado';
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
				$recomendationCartaInstTwo = $this->_callApiRest('Verano/Ingles/api/recomendtionCarta/id/'.$identAspirante,null,"GET",null);
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

					$recomendationCartaInstThree = $this->_callApiRest('Verano/Ingles/api/recomendtionCarta/id/'.$identAspirante.'/aux/'.$idCartaThree,null,"GET",null);

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

						// echo var_dump("Hola");
					}else if($statusDocCartaInstThree == "Rechazado"){


						$defaultfileCartaInstThree = '';
						$fileexistsCartaInstThree = True;
						$enableCartaInstThree= '';
						$infoDocCartaInstThree = 'El documento fue rechazado';
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
					$recomendationCartaInstThree = $this->_callApiRest('Verano/Ingles/api/recomendtionCarta/id/'.$identAspirante,null,"GET",null);
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
				$recomendationCartaInstThree = $this->_callApiRest('Verano/Ingles/api/recomendtionCarta/id/'.$identAspirante,null,"GET",null);
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

			// $responseFilePago = $this->_callApiRest('Verano/Ingles/api/documentosVerano/id/'.$identAspirante.'/aux/'.'Pago',null,"GET",null);
			//  echo var_dump($responseFilePago);
			// $statusPago = $responseFilePago['data'][0]['statusDocumento'];
			//
			//
			// $idPago = $responseFilePago['data'][0]['idDocumento'];
			// $recomendationPago = $this->_callApiRest('Verano/Ingles/api/recomendationDocs/id/'.$identAspirante.'/aux/'.'Pago',null,"GET",null);

			$responseFilePago = $this->_callApiRest('Verano/Ingles/api/documentosVerano/id/'.$identAspirante.'/aux/'.'Pago',null,"GET",null);
				// echo var_dump($responseFile['data']['statusDocumento']);
			$statusPago = @$responseFilePago['data'][0]['statusDocumento'];


			$idPago = @$responseFilePago['data'][0]['idDocumento'];
			$recomendationPago = $this->_callApiRest('Verano/Ingles/api/recomendationDocs/id/'.$identAspirante.'/aux/'.'Pago',null,"GET",null);
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
					$statusDocPago='SinDocumento';
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
				$infoDocPago = 'El documento esta en revisión';
				$stepOnePago = 'current';
				$stepTwoPago = 'current';
				$enablePago= "disabled='disabled'";
				$progresoPago = '50%';
			}else if($statusDocPago == "Rechazado"){
				$defaultfilePago = '';
				$fileexistsPago = True;
				$enablePago= "";
				$infoDocPago = 'El documento fue rechazado';
				$defaultfilePago = '';
				$stepOnePago = 'current';
				$stepTwoPago = 'current';
				$progresoPago = '20%';

			}else if($statusDocPago == "Aceptado"){
				$infoDocPago = 'El documento fue aceptado';
				$fileexistsPago = True;
				$enablePago= "disabled='disabled'";
				$defaultfilePago = @$responseFilePago['data']['urlDocumento'];
				$stepOnePago = 'current';
				$stepTwoPago = 'current';
				$stepThreePago = 'current';
				$progresoPago = '100%';
				$pasoUnoPago = TRUE;
				$pasoCinco = TRUE;
			}else if($statusDocPago =="SinDocumento"){
				$infoDocPago = 'Sin documento';
				$stepOnePago = 'current';
				$enablePago= "";
				$progresoPago = '20%';

			}


			$responseFileVisa = $this->_callApiRest('Verano/Ingles/api/documentosVerano/id/'.$identAspirante.'/aux/'.'Visa',null,"GET",null);
				// echo var_dump($responseFile['data']['statusDocumento']);
			$statusVisa = @$responseFileVisa['data'][0]['statusDocumento'];


			$idVisa = @$responseFileVisa['data'][0]['idDocumento'];
			$recomendationVisa = $this->_callApiRest('Verano/Ingles/api/recomendationDocs/id/'.$identAspirante.'/aux/'.'Visa',null,"GET",null);
			// echo var_dump($recomendationVisa);
			$descriptionVisa = @$recomendationVisa['data'][0]['descripcion'];

			$defaultfileVisa = '';
			$fileexistsVisa = '';
			$enableVisa = '';
			$progresoVisa = '';
			if($responseFileVisa['data'] == NULL){
				$defaultfileVisa = '';
				$fileexistsVisa = FALSE;
				$enableVisa= '';
					$statusDocVisa='SinDocumento';
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
				$infoDocVisa = 'El documento esta en revisión';
				$stepOneVisa = 'current';
				$stepTwoVisa = 'current';
				$enableVisa= "disabled='disabled'";
				$progresoVisa = '50%';
			}else if($statusDocVisa == "Rechazado"){
				$defaultfileVisa = '';
				$fileexistsVisa = True;
				$enableVisa= "";
				$infoDocVisa = 'El documento fue rechazado';
				$defaultfileVisa = '';
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
				$pasoCinco = TRUE;
				$pasoSeis = TRUE;
				// echo var_dump($defaultfileVisa);
			}else if($statusDocVisa =="SinDocumento"){
				$infoDocVisa = 'Sin documento';
				$stepOneVisa = 'current';
				$enableVisa= "";
				$progresoVisa = '20%';

			}

			// $responseForm = $this->_callApiRest('Verano/Ingles/api/fileVeranoIngles/id/'.$identAspirante,null,"GET",null);
			//
			// $responseCarta = $this->_callApiRest('Verano/api/fileinfo/id/'.$identAspirante,null,"GET",null);
			//
			// $statusPassport = $responseCarta['data'][0]['statusDocumento'];


			// $responseCarta = $this->_callApiRest('Verano/Ingles/api/fileinfoVisa/id/'.$identAspirante,null,"GET",null);
			//
			// $idVisa = $responseCarta['data'][0]['idDocumento'];
			//
			// $recomendationCartaInstOne = $this->_callApiRest('Verano/Ingles/api/recomendtionVisa/id/'.$identAspirante,null,"GET",null);
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

			
			$data['numAplicanteOne'] = $responseNumAplicanteOne['data'];
			$data['numAplicanteTwo'] = $responseNumAplicanteTwo['data'];
			$data['numAplicanteThree'] = $responseNumAplicanteThree['data'];
			if($responseNumAplicanteOne['data']!=NULL){
				$NumAplicantOne = TRUE;
			}else{
				$NumAplicantOne = FALSE;
			}
			if($responseNumAplicanteTwo['data']!=NULL){
				$NumAplicantTwo = TRUE;
			}else{
				$NumAplicantTwo = FALSE;
			}
			if($responseNumAplicanteThree['data']!=NULL){
				$NumAplicantThree = TRUE;
			}else{
				$NumAplicantThree = FALSE;
			}
			$data['NumAplicantOne'] = $NumAplicantOne;
			$data['NumAplicantTwo'] = $NumAplicantTwo;
			$data['NumAplicantThree'] = $NumAplicantThree;

			$pasoUno = TRUE;
			$pasoDos = TRUE;
			$pasoTres = TRUE;

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

			$data['pasoUno']	=$pasoUno;
			$data['pasoDos']	=$pasoDos;
			$data['pasoTres']	=$pasoTres;
			$data['pasoCuatro']	=$pasoCuatro;
			$data['pasoCinco']	=$pasoCinco;
			$data['pasoSeis']	=$pasoSeis;
			$data['pasoSiete']	=$pasoSiete;

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
			$data['infAspirante'] =$responseinfoSteps['data'];
			$data['user']=$this->session->userdata('user_sess');



			// $this->_initialAspirante($data);
			// $this->_headerAdmin($data);
			// $this->load->view('Dashboard_pages/Ingles/aspirante_page_tres',$data);
			// $this->_finalPageAspirante();
			// $this->_finalPage();

			$this->_initialAspirante($data);
			$this->_headerAspirante($data);
			$this->load->view('Dashboard_pages/Verano/aspirante_page_tres',$data);
			$this->_finalPageAspirante();
			$this->_finalPage();
		}else if($responseView['data']['statusAspirante'] == '8C'){
			$progreso = '';
			$instOnePago ='';
			$responseTipoOfertaInstOne = $this->_callApiRest('Verano/Ingles/api/tipoOferta/id/'.$identAspirante.'/aux/'.$fkInstOne.'/tipo/'."OfertaCondicional",null,"GET",null);

			if($responseTipoOfertaInstOne['data'] != NULL){
				$responseTipo = 'OfertaCondicional';
			}else{
				$responseTipoOfertaInstOne = $this->_callApiRest('Verano/Ingles/api/tipoOferta/id/'.$identAspirante.'/aux/'.$fkInstOne.'/tipo/'.'OfertaIncondicional',null,"GET",null);
				if($responseTipoOfertaInstOne['data'] != NULL){
					$responseTipo = 'OfertaIncondicional';
				}else{
					$responseTipo ='';
				}
			}

			if($responseTipo== 'OfertaCondicional'){
					$instOnePago = TRUE;
							$responseFileTicketPagoInstOne = $this->_callApiRest('Verano/Ingles/api/ticketPago/id/'.$identAspirante.'/aux/'.$fkInstOne,null,"GET",null);

							$idTicketDocumentInstOne = $responseFileTicketPagoInstOne['data']['idDocumento'];

							$recomendationTicketPagoInstOne = $this->_callApiRest('Verano/Ingles/api/recomendtionTicket/id/'.$identAspirante.'/aux/'.$idTicketDocumentInstOne,null,"GET",null);
							$descriptionTicketPagoInstOne = @$recomendationTicketPagoInstOne['data'][0]['descripcion'];
							$defaultfileTicketPagoInstOne = '';
							$fileexistsTicketPagoInstOne = '';
							$enableTicketPagoInstOne = '';
							$progresoTicketPagoInstOne = '';
							if($responseFileTicketPagoInstOne['data'] == NULL){
								$defaultfileTicketPagoInstOne = '';
								$fileexistsTicketPagoInstOne = FALSE;
								$enableTicketPagoInstOne= '';
								$statusDocTicketPagoInstOne='SinDocumento';
								$progresoTicketPagoInstOne = '20%';
							}else{
								$defaultfileTicketPagoInstOne = $responseFileTicketPagoInstOne['data']['urlDocumento'];
								$fileexistsTicketPagoInstOne = TRUE;
								$enableTicketPagoInstOne = "disabled='disabled'";
								$statusDocTicketPagoInstOne= $responseFileTicketPagoInstOne['data']['statusDocumento'];

							}
								$stepOneTicketPagoInstOne = '';
								$stepTwoTicketPagoInstOne = '';
								$stepThreeTicketPagoInstOne = '';
								if($statusDocTicketPagoInstOne == "Revision"){
									$infoDocTicketPagoInstOne = 'El documento esta en revisión';
									$stepOneTicketPagoInstOne = 'current';
									$stepTwoTicketPagoInstOne = 'current';
									$enableTicketPagoInstOne= "disabled='disabled'";
									$progresoTicketPagoInstOne = '50%';
									}else if($statusDocTicketPagoInstOne == "Rechazado"){
									$defaultfileTicketPagoInstOne = '';
									$fileexistsTicketPagoInstOne = True;
									$enableTicketPagoInstOne= "";
									$infoDocTicketPagoInstOne = 'El documento fue rechazado';
									$defaultfileTicketPagoInstOne = $responseFileTicketPagoInstOne['data']['urlDocumento'];
									$stepOneTicketPagoInstOne = 'current';
										$stepTwoTicketPagoInstOne = 'current';
										$progresoTicketPagoInstOne = '20%';
									}else if($statusDocTicketPagoInstOne == "Aceptado"){
										$infoDocTicketPagoInstOne = 'El documento fue aceptado';
										$fileexistsTicketPagoInstOne = True;
										$enableTicketPagoInstOne= "disabled='disabled'";
										$defaultfileTicketPagoInstOne = $responseFileTicketPagoInstOne['data']['urlDocumento'];
										$stepOneTicketPagoInstOne = 'current';
										$stepTwoTicketPagoInstOne = 'current';
										$stepThreeTicketPagoInstOne = 'current';
										$progresoTicketPagoInstOne = '100%';
									}else if($statusDocTicketPagoInstOne =="SinDocumento"){
										$infoDocTicketPagoInstOne = 'Sin documento';
										$stepOneTicketPagoInstOne = 'current';
										$enableTicketPagoInstOne= "";
										$progresoTicketPagoInstOne = '20%';
									}
			}else if($responseTipo == 'OfertaIncondicional'){
				$instOnePago = FALSE;
			}else{
				$instOnePago ='';
			}

			$instTwoPago ='';
			// $responseTipoOfertaInstTwo = $this->_callApiRest('Verano/Ingles/api/tipoOferta/id/'.$identAspirante.'/aux/'.$fkInstTwo,null,"GET",null);

			$responseTipoOfertaInstTwo = $this->_callApiRest('Verano/Ingles/api/tipoOferta/id/'.$identAspirante.'/aux/'.$fkInstTwo.'/tipo/'."OfertaCondicional",null,"GET",null);

			if($responseTipoOfertaInstTwo['data'] != NULL){
				$responseTipoTwo = 'OfertaCondicional';
			}else{
				$responseTipoOfertaInstTwo = $this->_callApiRest('Verano/Ingles/api/tipoOferta/id/'.$identAspirante.'/aux/'.$fkInstTwo.'/tipo/'.'OfertaIncondicional',null,"GET",null);
				if($responseTipoOfertaInstTwo['data'] != NULL){
					$responseTipoTwo = 'OfertaIncondicional';
				}else{
					$responseTipoTwo ='';
				}
			}
			if($responseTipoTwo == 'OfertaCondicional'){
				$instTwoPago = TRUE;
				$responseFileTicketPagoInstTwo= $this->_callApiRest('Verano/Ingles/api/ticketPago/id/'.$identAspirante.'/aux/'.$fkInstTwo,null,"GET",null);
				$idTicketDocumentInstTwo = @$responseFileTicketPagoInstTwo['data']['idDocumento'];


				// $recomendationTicketPagoInstTwo = $this->_callApiRest('Verano/Ingles/api/recomendtionTicket/id/'.$idTicketDocumentInstTwo,null,"GET",null);
				// $descriptionTicketPagoInstTwo = $recomendationTicketPagoInstTwo['data'][0]['descripcion'];


				$recomendationTicketPagoInstTwo = $this->_callApiRest('Verano/Ingles/api/recomendtionTicket/id/'.$identAspirante.'/aux/'.$idTicketDocumentInstTwo,null,"GET",null);
				$descriptionTicketPagoInstTwo = @$recomendationTicketPagoInstTwo['data'][0]['descripcion'];
				// $responseticketPagoInstTwo =$responseticketPagoInstTwo;


				$defaultfileTicketPagoInstTwo = '';
				$fileexistsTicketPagoInstTwo = '';
				$enableTicketPagoInstTwo = '';
				$progresoTicketPagoInstTwo = '';
				if(@$responseFileTicketPagoInstTwo['data'] == NULL){
					$defaultfileTicketPagoInstTwo = '';
					$fileexistsTicketPagoInstTwo = FALSE;
					$enableTicketPagoInstTwo= '';
					$statusDocTicketPagoInstTwo='SinDocumento';
					$progresoTicketPagoInstTwo = '20%';
				}else{
					$defaultfileTicketPagoInstTwo = $responseFileTicketPagoInstTwo['data']['urlDocumento'];
					$fileexistsTicketPagoInstTwo = TRUE;
					$enableTicketPagoInstTwo = "disabled='disabled'";
					$statusDocTicketPagoInstTwo= $responseFileTicketPagoInstTwo['data']['statusDocumento'];

				}
					$stepOneTicketPagoInstTwo = '';
					$stepTwoTicketPagoInstTwo = '';
					$stepThreeTicketPagoInstTwo = '';
					if($statusDocTicketPagoInstTwo == "Revision"){
						$infoDocTicketPagoInstTwo = 'El documento esta en revisión';
						$stepOneTicketPagoInstTwo = 'current';
						$stepTwoTicketPagoInstTwo = 'current';
						$enableTicketPagoInstTwo= "disabled='disabled'";
						$progresoTicketPagoInstTwo = '50%';
						}else if($statusDocTicketPagoInstTwo == "Rechazado"){
						$defaultfileTicketPagoInstTwo = '';
						$fileexistsTicketPagoInstTwo = True;
						$enableTicketPagoInstTwo= "";
						$infoDocTicketPagoInstTwo = 'El documento fue rechazado';
						$defaultfileTicketPagoInstTwo = $responseFileTicketPagoInstTwo['data']['urlDocumento'];
						$stepOneTicketPagoInstTwo = 'current';
							$stepTwoTicketPagoInstTwo = 'current';
							$progresoTicketPagoInstTwo = '20%';
						}else if($statusDocTicketPagoInstTwo == "Aceptado"){
							$infoDocTicketPagoInstTwo = 'El documento fue aceptado';
							$fileexistsTicketPagoInstTwo = True;
							$enableTicketPagoInstTwo= "disabled='disabled'";
							$defaultfileTicketPagoInstTwo = $responseFileTicketPagoInstTwo['data']['urlDocumento'];
							$stepOneTicketPagoInstTwo = 'current';
							$stepTwoTicketPagoInstTwo = 'current';
							$stepThreeTicketPagoInstTwo = 'current';
							$progresoTicketPagoInstTwo = '100%';
						}else if($statusDocTicketPagoInstTwo =="SinDocumento"){
							$infoDocTicketPagoInstTwo = 'Sin documento';
							$stepOneTicketPagoInstTwo = 'current';
							$enableTicketPagoInstTwo= "";
							$progresoTicketPagoInstTwo = '20%';
						}
			}else if($responseTipoTwo == 'OfertaIncondicional'){
				$instTwoPago = FALSE;
			}else{
				$instTwoPago ='';
			}
			$instThreePago ='';
		//	$responseTipoOfertaInstThree = $this->_callApiRest('Verano/Ingles/api/tipoOferta/id/'.$identAspirante.'/aux/'.$fkInstThree,null,"GET",null);

			$responseTipoOfertaInstThree = $this->_callApiRest('Verano/Ingles/api/tipoOferta/id/'.$identAspirante.'/aux/'.$fkInstThree.'/tipo/'."OfertaCondicional",null,"GET",null);


			if($responseTipoOfertaInstThree['data'] != NULL){

				$responseTipoThree = 'OfertaCondicional';
			}else{
				$responseTipoOfertaInstThree = $this->_callApiRest('Verano/Ingles/api/tipoOferta/id/'.$identAspirante.'/aux/'.$fkInstThree.'/tipo/'.'OfertaIncondicional',null,"GET",null);
				if($responseTipoOfertaInstThree['data'] != NULL){
					$responseTipoThree = 'OfertaIncondicional';
				}else{
					$responseTipoThree ='';
				}
			}


			if($responseTipoThree == 'OfertaCondicional'){
				$instThreePago = TRUE;
				$responseFileTicketPagoInstThree = $this->_callApiRest('Verano/Ingles/api/ticketPago/id/'.$identAspirante.'/aux/'.$fkInstThree,null,"GET",null);
				$idTicketDocumentInstThree = $responseFileTicketPagoInstThree['data']['idDocumento'];
				$recomendationTicketPagoInstThree = $this->_callApiRest('Verano/Ingles/api/recomendtionTicket/id/'.$identAspirante.'/aux/'.$idTicketDocumentInstThree,null,"GET",null);
				$descriptionTicketPagoInstThree = @$recomendationTicketPagoInstThree['data'][0]['descripcion'];


				// $responseFileTicketPagoInstOne = $this->_callApiRest('Verano/Ingles/api/ticketPago/id/'.$identAspirante.'/aux/'.$fkInstOne,null,"GET",null);
				// $idTicketDocumentInstOne = $responseFileTicketPagoInstOne['data']['idDocumento'];
				// $recomendationTicketPagoInstOne = $this->_callApiRest('Verano/Ingles/api/recomendtionTicket/id/'.$identAspirante.'/aux/'.$idTicketDocumentInstOne,null,"GET",null);
				// $descriptionTicketPagoInstOne = @$recomendationTicketPagoInstOne['data'][0]['descripcion'];

				$defaultfileTicketPagoInstThree = '';
				$fileexistsTicketPagoInstThree = '';
				$enableTicketPagoInstThree = '';
				$progresoTicketPagoInstThree = '';
				if($responseFileTicketPagoInstThree['data'] == NULL){
					$defaultfileTicketPagoInstThree = '';
					$fileexistsTicketPagoInstThree = FALSE;
					$enableTicketPagoInstThree= '';
					$statusDocTicketPagoInstThree='SinDocumento';
					$progresoTicketPagoInstThree = '20%';
				}else{
					$defaultfileTicketPagoInstThree = $responseFileTicketPagoInstThree['data']['urlDocumento'];
					$fileexistsTicketPagoInstThree = TRUE;
					$enableTicketPagoInstThree = "disabled='disabled'";
					$statusDocTicketPagoInstThree= $responseFileTicketPagoInstThree['data']['statusDocumento'];

				}
					$stepOneTicketPagoInstThree = '';
					$stepTwoTicketPagoInstThree = '';
					$stepThreeTicketPagoInstThree = '';
					if($statusDocTicketPagoInstThree == "Revision"){
						$infoDocTicketPagoInstThree = 'El documento esta en revisión';
						$stepOneTicketPagoInstThree = 'current';
						$stepTwoTicketPagoInstThree = 'current';
						$enableTicketPagoInstThree= "disabled='disabled'";
						$progresoTicketPagoInstThree = '50%';
						}else if($statusDocTicketPagoInstThree == "Rechazado"){
						$defaultfileTicketPagoInstThree = '';
						$fileexistsTicketPagoInstThree = True;
						$enableTicketPagoInstThree= "";
						$infoDocTicketPagoInstThree = 'El documento fue rechazado';
						$defaultfileTicketPagoInstThree = $responseFileTicketPagoInstThree['data']['urlDocumento'];
						$stepOneTicketPagoInstThree = 'current';
							$stepTwoTicketPagoInstThree = 'current';
							$progresoTicketPagoInstThree = '20%';
						}else if($statusDocTicketPagoInstThree == "Aceptado"){
							$infoDocTicketPagoInstThree = 'El documento fue aceptado';
							$fileexistsTicketPagoInstThree = True;
							$enableTicketPagoInstThree= "disabled='disabled'";
							$defaultfileTicketPagoInstThree = $responseFileTicketPagoInstThree['data']['urlDocumento'];
							$stepOneTicketPagoInstThree = 'current';
							$stepTwoTicketPagoInstThree = 'current';
							$stepThreeTicketPagoInstThree = 'current';
							$progresoTicketPagoInstThree = '100%';
						}else if($statusDocTicketPagoInstThree =="SinDocumento"){
							$infoDocTicketPagoInstThree = 'Sin documento';
							$stepOneTicketPagoInstThree = 'current';
							$enableTicketPagoInstThree= "";
							$progresoTicketPagoInstThree = '20%';
						}
			}else if($responseTipoThree == 'OfertaIncondicional'){
				$instThreePago = FALSE;
			}else{
				$instThreePago ='';
			}
			//This metod is to resive the docs that the person upload
			$responseDocsByPerson = $this->_callApiRest('Verano/Ingles/api/docsByPerson/id/'.$identAspirante,null,"GET",null);
			$responseReferenciaPago = $this->_callApiRest('Verano/Ingles/api/referenciaPago/id/'.$identAspirante,null,"GET",null);
			$infoDocVisa = '';




			//
			$status = $responseInstOne['data']['statusInstitucion'] ? $responseInstOne['data']['statusInstitucion'] == 'Activo': 'Inactivo';
			$statu = '';
			if($status == TRUE){
				$statu = 'Activo';
			}else{
				$statu = 'Inactivo';
			}
			$responseFileVisa = $this->_callApiRest('Verano/Ingles/api/fileinfoVisa/id/'.$identAspirante,null,"GET",null);
			$idVisa = $responseFileVisa['data']['idDocumento'];
			$recomendationVisa = $this->_callApiRest('Verano/Ingles/api/recomendationVisa/id/'.$identAspirante,null,"GET",null);

			$pasoUno = TRUE;
			$pasoDos = TRUE;
			$pasoTres = TRUE;
			$pasoCuatro= TRUE;
			$pasoCinco = FALSE;
			$pasoSeis= FALSE;
			$pasoSiete = FALSE;
			$data['pasoUno']	=$pasoUno;
			$data['pasoDos']	=$pasoDos;
			$data['pasoTres']	=$pasoTres;
			$data['pasoCuatro']	=$pasoCuatro;
			$data['pasoCinco']	=$pasoCinco;
			$data['pasoSeis']	=$pasoSeis;
			$data['pasoSiete']	=$pasoSiete;

			$responseNumAplicanteOne = $this->_callApiRest('Verano/Ingles/api/numAplication/id/'.$identAspirante.'/idDocForm/'.$fkInstOne,null,"GET",null);
			$responseNumAplicanteTwo = $this->_callApiRest('Verano/Ingles/api/numAplication/id/'.$identAspirante.'/idDocForm/'.$fkInstTwo,null,"GET",null);
			$responseNumAplicanteThree = $this->_callApiRest('Verano/Ingles/api/numAplication/id/'.$identAspirante.'/idDocForm/'.$fkInstThree,null,"GET",null);
			$data['numAplicanteOne'] = $responseNumAplicanteOne['data'];
			$data['numAplicanteTwo'] = $responseNumAplicanteTwo['data'];
			$data['numAplicanteThree'] = $responseNumAplicanteThree['data'];
						$enableTicketPago = '';
						$data['descriptionTicketPagoInstOne'] =@$descriptionTicketPagoInstOne;
						$data['infoDocTicketPagoInstOne'] =@$infoDocTicketPagoInstOne;
						$data['statusDocTicketPagoInstOne'] =@$statusDocTicketPagoInstOne;
						$data['stepOneTicketPagoInstOne'] =@$stepOneTicketPagoInstOne;
						$data['stepTwoTicketPagoInstOne'] =@$stepTwoTicketPagoInstOne;
						$data['stepThreeTicketPagoInstOne'] =@$stepThreeTicketPagoInstOne;
						$data['progreso'] =@$progreso;
						$data['enableTicketPagoInstOne'] =@$enableTicketPagoInstOne;
						$data['defaultfileTicketPagoInstOne'] =@$defaultfileTicketPagoInstOne;
						$data['fileexistsTicketPagoInstOne'] =@$fileexistsTicketPagoInstOne;
						$data['fileInfoTicketPagoInstOne'] =@$responseFileTicketPagoInstOne;

						$data['descriptionTicketPagoInstTwo'] =@$descriptionTicketPagoInstTwo;
						$data['infoDocTicketPagoInstTwo'] =@$infoDocTicketPagoInstTwo;
						$data['statusDocTicketPagoInstTwo'] =@$statusDocTicketPagoInstTwo;
						$data['stepOneTicketPagoInstTwo'] =@$stepOneTicketPagoInstTwo;
						$data['stepTwoTicketPagoInstTwo'] =@$stepTwoTicketPagoInstTwo;
						$data['stepThreeTicketPagoInstTwo'] =@$stepThreeTicketPagoInstTwo;
						$data['progresoTicketPagoInstTwo'] =@$progresoTicketPagoInstTwo;
						$data['enableTicketPagoInstTwo'] =@$enableTicketPagoInstTwo;
						$data['fileexistsTicketPagoInstTwo'] =@$fileexistsTicketPagoInstTwo;
						$data['defaultfileTicketPagoInstTwo'] =@$defaultfileTicketPagoInstTwo;
						$data['fileInfoTicketPagoInstTwo'] =@$responseFileTicketPagoInstTwo;

						$data['descriptionTicketPagoInstThree'] =@$descriptionTicketPagoInstThree;
						$data['infoDocTicketPagoInstThree'] =@$infoDocTicketPagoInstThree;
						$data['statusDocTicketPagoInstThree'] =@$statusDocTicketPagoInstThree;
						$data['stepOneTicketPagoInstThree'] =@$stepOneTicketPagoInstThree;
						$data['stepTwoTicketPagoInstThree'] =@$stepTwoTicketPagoInstThree;
						$data['stepThreeTicketPagoInstThree'] =@$stepThreeTicketPagoInstThree;
						$data['progresoTicketPagoInstThree'] =@$progresoTicketPagoInstThree;
						$data['enableTicketPagoInstThree'] =@$enableTicketPagoInstThree;
						$data['defaultfileTicketPagoInstThree'] =@$defaultfileTicketPagoInstThree;
						$data['fileexistsTicketPagoInstThree'] =@$fileexistsTicketPagoInstThree;
						$data['fileInfoTicketPagoInstThree'] =@$responseFileTicketPagoInstThree;

						$data['idTicketDocumentInstOne'] =@$idTicketDocumentInstOne;
						$data['idTicketDocumentInstTwo'] =@$idTicketDocumentInstTwo;
						$data['idTicketDocumentInstThree'] =@$idTicketDocumentInstThree;

						$data['InstOneInfo']	=$fkInstOne;
						$data['InstTwoInfo']	=$fkInstTwo;
						$data['InstThreeInfo']	=$fkInstThree;


						$data['aspirante'] =$responseVerano['data'];
						$data['instOne'] =$responseInstOne['data'];
						$data['instTwo'] =$responseInstTwo['data'];
						$data['instThree'] =$responseInstThree['data'];
						$data['status'] =$statu;
						$data['instOnePago'] = @$instOnePago;
						$data['instTwoPago'] = @$instTwoPago;
						$data['instThreePago'] = @$instThreePago;

						$data['referenciaPago'] =$responseReferenciaPago['data'];

						$data['documentosAspirante'] =$responseDocsByPerson['data'];

						$data['infAspirante'] =$responseinfoSteps['data'];
						$data['user']=$this->session->userdata('user_sess');
						//  $this->_initialAspirante($data);
						// $this->load->view('Dashboard_pages/Verano/aspirante_page_cc_view',$data);
						// $this->_finalPage();



						$this->_initialAspirante($data);
						$this->_headerAdmin($data);
						$this->load->view('Dashboard_pages/Verano/aspirante_page_cc_view',$data);
						$this->_finalPageAspirante();
						$this->_finalPage();
		}else if($responseView['data']['statusAspirante'] == '4U'){

			if($responseInstOne){
				// $responseFileVisaInstOne = $this->_callApiRest('Verano/Ingles/api/fileinfoVisa/id/'.$identAspirante,null,"GET",null);
				$responseFileVisaInstOne = $this->_callApiRest('Verano/Ingles/api/tipoOferta/id/'.$identAspirante.'/aux/'.$fkInstOne.'/tipo/'."Visa",null,"GET",null);

				$idVisaInstOne = $responseFileVisaInstOne['data']['idDocumento'];
				$recomendationVisaInstOne = $this->_callApiRest('Verano/Ingles/api/recomendtionTicket/id/'.$identAspirante.'/aux/'.$idVisaInstOne,null,"GET",null);
				$descriptionVisaInstOne = @$recomendationVisaInstOne['data'][0]['descripcion'];
				//
				// $recomendationTicketPagoInstThree =
				// $descriptionTicketPagoInstThree = @$recomendationTicketPagoInstThree['data'][0]['descripcion'];


				$defaultfileVisaInstOne = '';
				$fileexistsVisaInstOne = '';
				$enableVisaInstOne = '';
				$progresoVisaInstOne = '';
				$statu = '';
				if($responseFileVisaInstOne['data'] == NULL){
					$defaultfileVisaInstOne = '';
					$fileexistsVisaInstOne = FALSE;
					$enableVisaInstOne= '';
					$statusDocVisaInstOne='SinDocumento';
					$progresoVisaInstOne = '20%';
				}else{
					$defaultfileVisaInstOne = $responseFileVisaInstOne['data']['urlDocumento'];
					$fileexistsVisaInstOne = TRUE;
					$enableVisaInstOne = "disabled='disabled'";
					$statusDocVisaInstOne= $responseFileVisaInstOne['data']['statusDocumento'];

				}
					$stepOneVisaInstOne = '';
					$stepTwoVisaInstOne = '';
					$stepThreeVisaInstOne = '';
					if($statusDocVisaInstOne == "Revision"){
						$infoDocVisaInstOne = 'El documento esta en revisión';
						$stepOneVisaInstOne = 'current';
						$stepTwoVisaInstOne = 'current';
						$enableVisaInstOne= "disabled='disabled'";
						$progresoVisaInstOne = '50%';
						}else if($statusDocVisaInstOne == "Rechazado"){
						$defaultfileVisaInstOne = '';
						$fileexistsVisaInstOne = True;
						$enableVisaInstOne= "";
						$infoDocVisaInstOne = 'El documento fue rechazado';
						$defaultfileVisaInstOne = '';
						$stepOneVisaInstOne = 'current';
							$stepTwoVisaInstOne = 'current';
							$progresoVisaInstOne = '20%';
						}else if($statusDocVisaInstOne == "Aceptado"){
							$infoDocVisaInstOne = 'El documento fue aceptado';
							$fileexistsVisaInstOne = True;
							$enableVisaInstOne= "disabled='disabled'";
							$defaultfileVisaInstOne = $responseFileVisaInstOne['data']['urlDocumento'];
							$stepOneVisaInstOne = 'current';
							$stepTwoVisaInstOne = 'current';
							$stepThreeVisaInstOne = 'current';
							$progresoVisaInstOne = '100%';
						}else if($statusDocVisaInstOne =="SinDocumento"){
							$infoDocVisaInstOne = 'Sin documento';
							$stepOneVisaInstOne = 'current';
							$enableVisaInstOne= "";
							$progresoVisaInstOne = '20%';
						}
			}else{

			}
			if($responseInstTwo){
				$responseFileVisaInstTwo = $this->_callApiRest('Verano/Ingles/api/tipoOferta/id/'.$identAspirante.'/aux/'.$fkInstTwo.'/tipo/'."Visa",null,"GET",null);

				$idVisaInstTwo = $responseFileVisaInstTwo['data']['idDocumento'];

				$recomendationVisaInstTwo = $this->_callApiRest('Verano/Ingles/api/recomendtionTicket/id/'.$identAspirante.'/aux/'.$idVisaInstTwo,null,"GET",null);
				$descriptionVisaInstTwo = @$recomendationVisaInstTwo['data'][0]['descripcion'];


				// $recomendationVisaInstTwo = $this->_callApiRest('Verano/Ingles/api/recomendationVisa/id/'.$identAspirante,null,"GET",null);
				// $descriptionVisaInstTwo = $recomendationVisaInstTwo['data']['descripcion'];
				$defaultfileVisaInstTwo = '';
				$fileexistsVisaInstTwo = '';
				$enableVisaInstTwo = '';
				$progresoVisaInstTwo = '';
				$statu = '';
				if($responseFileVisaInstTwo['data'] == NULL){
					$defaultfileVisaInstTwo = '';
					$fileexistsVisaInstTwo = FALSE;
					$enableVisaInstTwo= '';
					$statusDocVisaInstTwo='SinDocumento';
					$progresoVisaInstTwo = '20%';
				}else{
					$defaultfileVisaInstTwo = $responseFileVisaInstTwo['data']['urlDocumento'];
					$fileexistsVisaInstTwo = TRUE;
					$enableVisaInstTwo = "disabled='disabled'";
					$statusDocVisaInstTwo= $responseFileVisaInstTwo['data']['statusDocumento'];

				}
					$stepOneVisaInstTwo = '';
					$stepTwoVisaInstTwo = '';
					$stepThreeVisaInstTwo = '';
					if($statusDocVisaInstTwo == "Revision"){
						$infoDocVisaInstTwo = 'El documento esta en revisión';
						$stepOneVisaInstTwo = 'current';
						$stepTwoVisaInstTwo = 'current';
						$enableVisaInstTwo= "disabled='disabled'";
						$progresoVisaInstTwo = '50%';
						}else if($statusDocVisaInstTwo == "Rechazado"){
						$defaultfileVisaInstTwo = '';
						$fileexistsVisaInstTwo = True;
						$enableVisaInstTwo= "";
						$infoDocVisaInstTwo = 'El documento fue rechazado';
						$defaultfileVisaInstTwo = '';
						$stepOneVisaInstTwo = 'current';
							$stepTwoVisaInstTwo = 'current';
							$progresoVisaInstTwo = '20%';
						}else if($statusDocVisaInstTwo == "Aceptado"){
							$infoDocVisaInstTwo = 'El documento fue aceptado';
							$fileexistsVisaInstTwo = True;
							$enableVisaInstTwo= "disabled='disabled'";
							$defaultfileVisaInstTwo = $responseFileVisaInstTwo['data']['urlDocumento'];
							$stepOneVisaInstTwo = 'current';
							$stepTwoVisaInstTwo = 'current';
							$stepThreeVisaInstTwo = 'current';
							$progresoVisaInstTwo = '100%';
						}else if($statusDocVisaInstTwo =="SinDocumento"){
							$infoDocVisaInstTwo = 'Sin documento';
							$stepOneVisaInstTwo = 'current';
							$enableVisaInstTwo= "";
							$progresoVisaInstTwo = '20%';
						}
			}else{

			}
			if($responseInstThree){
				$responseFileVisaInstThree = $this->_callApiRest('Verano/Ingles/api/tipoOferta/id/'.$identAspirante.'/aux/'.$fkInstThree.'/tipo/'."Visa",null,"GET",null);

				$idVisaInstThree = $responseFileVisaInstThree['data']['idDocumento'];
				$recomendationVisaInstThree =  $this->_callApiRest('Verano/Ingles/api/recomendtionTicket/id/'.$identAspirante.'/aux/'.$idVisaInstThree,null,"GET",null);
				$descriptionVisaInstThree = @$recomendationVisaInstThree['data'][0]['descripcion'];
				// $recomendationVisaInstTwo =
				// $descriptionVisaInstTwo = @$recomendationVisaInstTwo['data'][0]['descripcion'];



				$defaultfileVisaInstThree = '';
				$fileexistsVisaInstThree = '';
				$enableVisaInstThree = '';
				$progresoVisaInstThree = '';
				$statu = '';
				if($responseFileVisaInstThree['data'] == NULL){
					$defaultfileVisaInstThree = '';
					$fileexistsVisaInstThree = FALSE;
					$enableVisaInstThree= '';
					$statusDocVisaInstThree='SinDocumento';
					$progresoVisaInstThree = '20%';
				}else{
					$defaultfileVisaInstThree = $responseFileVisaInstThree['data']['urlDocumento'];
					$fileexistsVisaInstThree = TRUE;
					$enableVisaInstThree = "disabled='disabled'";
					$statusDocVisaInstThree= $responseFileVisaInstThree['data']['statusDocumento'];

				}
					$stepOneVisaInstThree = '';
					$stepTwoVisaInstThree = '';
					$stepThreeVisaInstThree = '';
					if($statusDocVisaInstThree == "Revision"){
						$infoDocVisaInstThree = 'El documento esta en revisión';
						$stepOneVisaInstThree = 'current';
						$stepTwoVisaInstThree = 'current';
						$enableVisaInstThree= "disabled='disabled'";
						$progresoVisaInstThree = '50%';
						}else if($statusDocVisaInstThree == "Rechazado"){
						$defaultfileVisaInstThree = '';
						$fileexistsVisaInstThree = True;
						$enableVisaInstThree= "";
						$infoDocVisaInstThree = 'El documento fue rechazado';
						$defaultfileVisaInstThree ='';
						$stepOneVisaInstThree = 'current';
							$stepTwoVisaInstThree = 'current';
							$progresoVisaInstThree = '20%';
						}else if($statusDocVisaInstThree == "Aceptado"){
							$infoDocVisaInstThree = 'El documento fue aceptado';
							$fileexistsVisaInstThree = True;
							$enableVisaInstThree= "disabled='disabled'";
							$defaultfileVisaInstThree = $responseFileVisaInstThree['data']['urlDocumento'];
							$stepOneVisaInstThree = 'current';
							$stepTwoVisaInstThree = 'current';
							$stepThreeVisaInstThree = 'current';
							$progresoVisaInstThree = '100%';
						}else if($statusDocVisaInstThree =="SinDocumento"){
							$infoDocVisaInstThree = 'Sin documento';
							$stepOneVisaInstThree = 'current';
							$enableVisaInstThree= "";
							$progresoVisaInstThree = '20%';
						}
			}else{

			}
			$pasoUno = TRUE;
			$pasoDos = TRUE;
			$pasoTres = TRUE;
			$pasoCuatro= TRUE;
			$pasoCinco = TRUE;
			$pasoSeis= FALSE;
			$pasoSiete = FALSE;

			$data['pasoUno']	=$pasoUno;
			$data['pasoDos']	=$pasoDos;
			$data['pasoTres']	=$pasoTres;
			$data['pasoCuatro']	=$pasoCuatro;
			$data['pasoCinco']	=$pasoCinco;
			$data['pasoSeis']	=$pasoSeis;
			$data['pasoSiete']	=$pasoSiete;

			$responseNumAplicanteOne = $this->_callApiRest('Verano/Ingles/api/numAplication/id/'.$identAspirante.'/idDocForm/'.$fkInstOne,null,"GET",null);
			$responseNumAplicanteTwo = $this->_callApiRest('Verano/Ingles/api/numAplication/id/'.$identAspirante.'/idDocForm/'.$fkInstTwo,null,"GET",null);
			$responseNumAplicanteThree = $this->_callApiRest('Verano/Ingles/api/numAplication/id/'.$identAspirante.'/idDocForm/'.$fkInstThree,null,"GET",null);
			$data['numAplicanteOne'] = $responseNumAplicanteOne['data'];
			$data['numAplicanteTwo'] = $responseNumAplicanteTwo['data'];
			$data['numAplicanteThree'] = $responseNumAplicanteThree['data'];

						$enableVisaInstOne = '';
						$data['descriptionVisaInstOne'] =@$descriptionVisaInstOne;
						$data['infoDocVisaInstOne'] =@$infoDocVisaInstOne;
						$data['statusDocVisaInstOne'] =@$statusDocVisaInstOne;
						$data['stepOneVisaInstOne'] =@$stepOneVisaInstOne;
						$data['stepTwoVisaInstOne'] =@$stepTwoVisaInstOne;
						$data['stepThreeVisaInstOne'] =@$stepThreeVisaInstOne;
						$data['progresoVisa'] =@$progresoVisa;
						$data['enableVisaInstOne'] =@$enableVisaInstOne;
						$data['defaultfileVisaInstOne'] =@$defaultfileVisaInstOne;
						$data['fileexistsVisaInstOne'] =@$fileexistsVisaInstOne;
						$data['fileInfoVisaInstOne'] =@$responseFileVisaInstOne;

						$data['descriptionVisaInstTwo'] =@$descriptionVisaInstTwo;
						$data['infoDocVisaInstTwo'] =@$infoDocVisaInstTwo;
						$data['statusDocVisaInstTwo'] =@$statusDocVisaInstTwo;
						$data['stepOneVisaInstTwo'] =@$stepOneVisaInstTwo;
						$data['stepTwoVisaInstTwo'] =@$stepTwoVisaInstTwo;
						$data['stepThreeVisaInstTwo'] =@$stepThreeVisaInstTwo;
						$data['progresoVisaInstTwo'] =@$progresoVisaInstTwo;
						$data['enableVisaInstTwo'] =@$enableVisaInstTwo;
						$data['defaultfileVisaInstTwo'] =@$defaultfileVisaInstTwo;
						$data['fileexistsVisaInstTwo'] =@$fileexistsVisaInstTwo;
						$data['fileInfoVisaInstTwo'] =@$responseFileVisaInstTwo;

						$data['descriptionVisaInstThree'] =@$descriptionVisaInstThree;
						$data['infoDocVisaInstThree'] =@$infoDocVisaInstThree;
						$data['statusDocVisaInstThree'] =@$statusDocVisaInstThree;
						$data['stepOneVisaInstThree'] =@$stepOneVisaInstThree;
						$data['stepTwoVisaInstThree'] =@$stepTwoVisaInstThree;
						$data['stepThreeVisaInstThree'] =@$stepThreeVisaInstThree;
						$data['progresoVisaInstThree'] =@$progresoVisaInstThree;
						$data['enableVisaInstThree'] =@$enableVisaInstThree;
						$data['defaultfileVisaInstThree'] =@$defaultfileVisaInstThree;
						$data['fileexistsVisaInstThree'] =@$fileexistsVisaInstThree;
						$data['fileInfoVisaInstThree'] =@$responseFileVisaInstThree;

						$progreso = '';
			$data['InstOneInfo']	=$fkInstOne;
			$data['InstTwoInfo']	=$fkInstTwo;
			$data['InstThreeInfo']	=$fkInstThree;

			$data['idVisaInstThree']	=@$idVisaInstThree;
			$data['idVisaInstTwo']	=@$idVisaInstTwo;
			$data['idVisaInstOne']	=@$idVisaInstOne;

			$data['aspirante'] =$responseVerano['data'];
			$data['instOne'] =$responseInstOne['data'];
			$data['instTwo'] =$responseInstTwo['data'];
			$data['instThree'] =$responseInstThree['data'];
			$data['status'] =$statu;

			$data['infAspirante'] =$responseinfoSteps['data'];
			$data['user']=$this->session->userdata('user_sess');
			// $this->_initialAspirante($data);
			$data['progreso'] =@$progreso;
			// $this->_finalPage();
			$this->_initialAspirante($data);
			$this->_headerAdmin($data);
				$this->load->view('Dashboard_pages/Verano/aspirante_page_cu_view',$data);
			$this->_finalPageAspirante();
			$this->_finalPage();
		}else if($responseView['data']['statusAspirante'] == '5' and 1==9){

			$pasoUno = TRUE;
			$pasoDos = TRUE;
			$pasoTres = TRUE;
			$pasoCuatro= TRUE;
			$pasoCinco = TRUE;
			$pasoSeis= TRUE;
			$pasoSiete = FALSE;


			$data['pasoUno']	=$pasoUno;
			$data['pasoDos']	=$pasoDos;
			$data['pasoTres']	=$pasoTres;
			$data['pasoCuatro']	=$pasoCuatro;
			$data['pasoCinco']	=$pasoCinco;
			$data['pasoSeis']	=$pasoSeis;
			$data['pasoSiete']	=$pasoSiete;
				$progreso = '100%';
			$responseNumAplicanteOne = $this->_callApiRest('Verano/Ingles/api/numAplication/id/'.$identAspirante.'/idDocForm/'.$fkInstOne,null,"GET",null);
			$responseNumAplicanteTwo = $this->_callApiRest('Verano/Ingles/api/numAplication/id/'.$identAspirante.'/idDocForm/'.$fkInstTwo,null,"GET",null);
			$responseNumAplicanteThree = $this->_callApiRest('Verano/Ingles/api/numAplication/id/'.$identAspirante.'/idDocForm/'.$fkInstThree,null,"GET",null);
			$data['numAplicanteOne'] = $responseNumAplicanteOne['data'];
			$data['numAplicanteTwo'] = $responseNumAplicanteTwo['data'];
			$data['numAplicanteThree'] = $responseNumAplicanteThree['data'];

			$data['InstOneInfo']	=$fkInstOne;
			$data['InstTwoInfo']	=$fkInstTwo;
			$data['InstThreeInfo']	=$fkInstThree;

			$data['aspirante'] =$responseVerano['data'];
			$data['instOne'] =$responseInstOne['data'];
			$data['instTwo'] =$responseInstTwo['data'];
			$data['instThree'] =$responseInstThree['data'];
			$statu = 'success';
			$data['status'] =$statu;

			$data['progreso'] =@$progreso;

			$data['infAspirante'] =$responseinfoSteps['data'];
			$data['user']=$this->session->userdata('user_sess');
			// $this->_initialAspirante($data);
			//
			// $this->_finalPage();

			$this->_initialAspirante($data);
			$this->_headerAdmin($data);
			$this->load->view('Dashboard_pages/Verano/aspirante_page_cinco_view',$data);
			$this->_finalPageAspirante();
			$this->_finalPage();

		}else{


			$responseDocOne = $this->_callApiRest('Verano/Academico/api/veranoAcademico/id/'.$fkInstOne,null,"GET",null);

			$responseDocTwo = $this->_callApiRest('Verano/Academico/api/veranoAcademico/id/'.$fkInstTwo,null,"GET",null);
			$responseDocThree = $this->_callApiRest('Verano/Academico/api/veranoAcademico/id/'.$fkInstThree,null,"GET",null);

			$responseForm = $this->_callApiRest('Verano/Ingles/api/fileVeranoIngles/id/'.$identAspirante,null,"GET",null);

			//settings to format documents
			$responseFormOne = $this->_callApiRest('Verano/Ingles/api/fileinfoFormatoSolicitud/id/'.$identAspirante.'/aux/'.$fkInstOne,null,"GET",null);
			// echo var_dump($responseFormOne['data']);
			$responseFormTwo = $this->_callApiRest('Verano/Ingles/api/fileinfoFormatoSolicitud/id/'.$identAspirante.'/aux/'.$fkInstTwo,null,"GET",null);
			$responseFormThree = $this->_callApiRest('Verano/Ingles/api/fileinfoFormatoSolicitud/id/'.$identAspirante.'/aux/'.$fkInstThree,null,"GET",null);


			$idFormOne = @$responseFormOne['data'][0]['idDocumento'];
				$idFormTwo = @$responseFormTwo['data'][0]['idDocumento'];
					$idFormThree = @$responseFormThree['data'][0]['idDocumento'];

					$recomendationResponseFormOne= $this->_callApiRest('Verano/Ingles/api/recomendtionDocuments/id/'.$identAspirante.'/aux/'.$idFormOne,null,"GET",null);
					$descriptionFormOne = @$recomendationResponseFormOne['data'][0]['descripcion'];

					$recomendationResponseFormTwo= $this->_callApiRest('Verano/Ingles/api/recomendtionDocuments/id/'.$identAspirante.'/aux/'.$idFormTwo,null,"GET",null);
					$descriptionFormTwo = @$recomendationResponseFormTwo['data'][0]['descripcion'];


					$recomendationResponseFormThree= $this->_callApiRest('Verano/Ingles/api/recomendtionDocuments/id/'.$identAspirante.'/aux/'.$idFormThree,null,"GET",null);
					$descriptionFormThree = @$recomendationResponseFormThree['data'][0]['descripcion'];


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
			if(@$responseFormOne['data'][0]){
				$r = $responseFormOne['data'][0];
				$fileInfoFormOne = $responseFormOne['data'][0];

				$statusDocFormOne = $r['statusDocumento'];
				$idDocFormOne = $r['idDocumento'];
				$responseFileFormOne =$responseFormOne['data'][0];
				if($r['statusDocumento'] == 'Activo'){

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
						$revicionOne = TRUE;
				}else if($r['statusDocumento'] == 'Rechazado'){
					$defaultfileFormOne = '';
					$fileexistsFormOne = True;
					$enableFormOne= "";
					$infoFormOne = 'El documento fue rechazado';

					$stepOneFormOne = 'current';
					$stepTwoFormOne = 'current';
					$progreso = '20%';
					$recomendationFormOne = $descriptionFormOne;

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
			if(@$responseFormTwo['data'][0]){
				$r = $responseFormTwo['data'][0];
				$fileInfoFormTwo = $responseFormTwo['data'][0];

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
						$revicionTwo = TRUE;
				}else if($r['statusDocumento'] == 'Rechazado'){
					$defaultfileFormTwo = '';
					$fileexistsFormTwo = True;
					$enableFormTwo= "";
					$infoFormTwo = 'El documento fue rechazado';

					$stepOneFormTwo = 'current';
					$stepTwoFormTwo = 'current';
					$progreso = '20%';
					$recomendationFormTwo = $descriptionFormTwo;

				}else if($r['statusDocumento'] == 'Aceptado'){
					$infoFormTwo = 'El documento fue aceptado';
					$fileexistsFormTwo = True;
					$enableFormTwo= "disabled='disabled'";
					$defaultfileFormTwo = $r['urlDocumento'];
					$stepOneFormTwo = 'current';
					$stepTwoFormTwo = 'current';
					$stepThreeFormTwo = 'current';
					$progreso = '100%';
					$pasoDos =  TRUE;
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
						$revicionThree = TRUE;
				}else if($r['statusDocumento'] == 'Rechazado'){
					$defaultfileFormThree = '';
					$fileexistsFormThree = True;
					$enableFormThree= "";
					$infoFormThree = 'El documento fue rechazado';

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
					$pasoDos =  TRUE;
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



			// echo var_dump($responseInstOne['data']);
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
				$defaultfile = '';
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
				$enable= "";
				$progreso = '20%';

			}

			$data['pasoUno']	=$pasoUno;
			$data['pasoDos']	=$pasoDos;
			$data['pasoTres']	=$pasoTres;
			$data['pasoCuatro']	=$pasoCuatro;
			$data['pasoCinco']	=$pasoCinco;
			$data['pasoSeis']	=$pasoSeis;
			$data['pasoSiete']	=$pasoSiete;
			//Nuevas adecuaciones
			$data['documentOne'] =$responseDocOne;
			$data['documentTwo'] =$responseDocTwo;
			$data['documentThree'] =$responseDocThree;
			$data['infoFormOne'] =$infoFormOne;
			$data['enable']=	$enable;
			// ..
			$data['description'] =$description;
			$data['infoDoc'] =@$infoDoc;
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
			 $data['defaultfileFormOne'] =$defaultfileFormOne;
			$data['infoDocDropBox'] =  @$fileInfoFormOne;


			$data['revicionOne'] =  @$revicionOne;
			$data['revicionTwo'] =  @$revicionTwo;
			$data['revicionThree'] =  @$revicionThree;

			$data['stepOneFormTwo'] =$stepOneFormTwo;
			$data['stepTwoFormTwo'] =$stepTwoFormTwo;
			$data['stepThreeFormTwo'] =$stepThreeFormTwo;
			$data['defaultfileFormTwo'] =$defaultfileFormTwo;
			$data['fileexistsFormTwo'] =$fileexistsFormTwo;
			$data['enableFormTwo'] =$enableFormTwo;
			$data['infoFormTwo'] =$infoFormTwo;
			$data['statusDocFormTwo'] =$statusDocFormTwo;
			$data['recomendationFormTwo'] = $recomendationFormTwo;


			 $data['fileInfoFormTwo'] =$fileInfoFormTwo;

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
			$data['idDocFormTwo']	=@$idDocFormTwo;
			$data['idDocFormThree']	=@$idDocFormThree;
			$data['recomendationFormThree'] = $recomendationFormThree;
			$data['fileInfo'] =$responseFile;

			$data['InstOneInfo']	=$fkInstOne;
			$data['InstTwoInfo']	=$fkInstTwo;
			$data['InstThreeInfo']	=$fkInstThree;
			$data['enable'] =$enable;
			$data['infAspirante'] =$responseinfoSteps['data'];

			$data['user']=$this->session->userdata('user_sess');
			$this->_initialAspirante($data);
			$this->_headerAspirante($data);
			$this->load->view('Dashboard_pages/Verano/aspirante_page_view',$data);
			$this->_finalPageAspirante();
			$this->_finalPage();
		}




}


}
