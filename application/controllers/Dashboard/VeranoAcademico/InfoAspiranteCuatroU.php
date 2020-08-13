<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InfoAspiranteCuatroU extends MY_RootController {

	public function __construct() {
        parent::__construct();

    }

	public function index()
	{

    $this->load->view('Dashboard_pages/Verano/aspirante_page_cu_view');

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


		$infoStatus = $this->_callApiRest('Verano/Ingles/api/infoAspirante/id/'.$idAspirante,null,"GET",null);

		$infoStAs = $infoStatus['data']['statusAspirante'];
		$docsAcepted = $this->_callApiRest('Verano/Ingles/api/docsAcepted/id/'.$idAspirante,null,"GET",null);

		$lenDocsAcepted = sizeof($docsAcepted['data']);


		$fkInstOne =$aux_selec_one['fkInstituto'];
    $fkInstTwo =$aux_selec_two['fkInstituto'];
    $fkInstThree =$aux_selec_three['fkInstituto'];

		$responseInstOne= $this->_callApiRest('Verano/api/veranonewInst/id/'.$fkInstOne,null,"GET",null);
		$responseInstTwo = $this->_callApiRest('Verano/api/veranonewInst/id/'.$fkInstTwo,null,"GET",null);
		$responseInstThree = $this->_callApiRest('Verano/api/veranonewInst/id/'.$fkInstThree,null,"GET",null);

		$responseinfoSteps = $this->_callApiRest('Verano/api/veranoinfoSteps/id/'.$idAspirante,null,"GET",null);

		if($responseInstOne){
			// $responseFileVisaInstOne = $this->_callApiRest('Verano/Ingles/api/fileinfoVisa/id/'.$idAspirante,null,"GET",null);
			//
			// $idVisaInstOne = $responseFileVisaInstOne['data']['idDocumento'];
			//
			// $recomendationFileVisaInstOne = $this->_callApiRest('Verano/Ingles/api/recomendtionVisa/id/'.$idAspirante,null,"GET",null);


			$responseFileVisaInstOne = $this->_callApiRest('Verano/Ingles/api/tipoOferta/id/'.$idAspirante.'/aux/'.$fkInstOne.'/tipo/'."Visa",null,"GET",null);

			$idVisaInstOne = $responseFileVisaInstOne['data']['idDocumento'];
			$recomendationFileVisaInstOne = $this->_callApiRest('Verano/Ingles/api/recomendtionTicket/id/'.$idAspirante.'/aux/'.$idVisaInstOne,null,"GET",null);
			 $descriptionVisaInstOne = @$recomendationFileVisaInstOne['data'][0]['descripcion'];
			//
			// $descriptionVisaInstOne = @$recomendationFileVisaInstOne['data'][0]['descripcion'];
				$defaultfileVisaInstOne = '';
				$fileexistsVisaInstOne = '';
				$enableVisaInstOne = '';
				$progreso = '';
				if($responseFileVisaInstOne['data'] == NULL){
					$defaultfileVisaInstOne = '';
					$fileexistsVisaInstOne = FALSE;
					$enableVisaInstOne= '';
					$statusDocVisaInstOne= "SinDocumento";
					$progreso = '20%';
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
				$progreso = '50%';
			}else if($statusDocVisaInstOne == "Rechazado"){


				$defaultfileVisaInstOne = '';
				$fileexistsVisaInstOne = True;
				$enableVisaInstOne= "disabled='disabled'";
				$infoDocVisaInstOne = 'El documento fue rechazado';
				$defaultfileVisaInstOne = $responseFileVisaInstOne['data']['urlDocumento'];
				$stepOneVisaInstOne = 'current';
				$stepTwoVisaInstOne = 'current';
				$progreso = '20%';

			}else if($statusDocVisaInstOne == "Aceptado"){
				$infoDocVisaInstOne = 'El documento fue aceptado';
				$fileexistsVisaInstOne = True;
				$enableVisaInstOne= "disabled='disabled'";
				$defaultfileVisaInstOne = $responseFileVisaInstOne['data']['urlDocumento'];
				$stepOneVisaInstOne = 'current';
				$stepTwoVisaInstOne = 'current';
				$stepThreeVisaInstOne = 'current';
				$progreso = '100%';
			}else if($statusDocVisaInstOne =="SinDocumento"){
				$infoDocVisaInstOne = 'Sin documento';
				$stepOneVisaInstOne = 'current';
				$enableVisaInstOne= "disabled='disabled'";
				$progreso = '20%';

			}
		}else{

		}
		if($responseInstTwo){
			// $responseFileVisaInstTwo = $this->_callApiRest('Verano/Ingles/api/fileinfoVisa/id/'.$idAspirante,null,"GET",null);
			//
			// $idVisaInstTwo = $responseFileVisaInstTwo['data']['idDocumento'];
			//
			// $recomendationFileVisaInstTwo = $this->_callApiRest('Verano/Ingles/api/recomendtionVisa/id/'.$idAspirante,null,"GET",null);
			//
			// $descriptionVisaInstTwo = $recomendationFileVisaInstTwo['data']['descripcion'];

			$responseFileVisaInstTwo = $this->_callApiRest('Verano/Ingles/api/tipoOferta/id/'.$idAspirante.'/aux/'.$fkInstTwo.'/tipo/'."Visa",null,"GET",null);
			$idVisaInstTwo = $responseFileVisaInstTwo['data']['idDocumento'];
			$recomendationFileVisaInstTwo = $this->_callApiRest('Verano/Ingles/api/recomendtionTicket/id/'.$idAspirante.'/aux/'.$idVisaInstTwo,null,"GET",null);
			$descriptionVisaInstTwo = @$recomendationFileVisaInstTwo['data'][0]['descripcion'];


				$defaultfileVisaInstTwo = '';
				$fileexistsVisaInstTwo = '';
				$enableVisaInstTwo = '';
				$progreso = '';
				if($responseFileVisaInstTwo['data'] == NULL){
					$defaultfileVisaInstTwo = '';
					$fileexistsVisaInstTwo = FALSE;
					$enableVisaInstTwo= '';
					$statusDocVisaInstTwo= "SinDocumento";
					$progreso = '20%';
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
				$progreso = '50%';
			}else if($statusDocVisaInstTwo == "Rechazado"){


				$defaultfileVisaInstTwo = '';
				$fileexistsVisaInstTwo = True;
				$enableVisaInstTwo= "disabled='disabled'";
				$infoDocVisaInstTwo = 'El documento fue rechazado';
				$defaultfileVisaInstTwo = $responseFileVisaInstTwo['data']['urlDocumento'];
				$stepOneVisaInstTwo = 'current';
				$stepTwoVisaInstTwo = 'current';
				$progreso = '20%';

			}else if($statusDocVisaInstTwo == "Aceptado"){
				$infoDocVisaInstTwo = 'El documento fue aceptado';
				$fileexistsVisaInstTwo = True;
				$enableVisaInstTwo= "disabled='disabled'";
				$defaultfileVisaInstTwo = $responseFileVisaInstTwo['data']['urlDocumento'];
				$stepOneVisaInstTwo = 'current';
				$stepTwoVisaInstTwo = 'current';
				$stepThreeVisaInstTwo = 'current';
				$progreso = '100%';
			}else if($statusDocVisaInstTwo =="SinDocumento"){
				$infoDocVisaInstTwo = 'Sin documento';
				$stepOneVisaInstTwo = 'current';
				$enableVisaInstTwo= "disabled='disabled'";
				$progreso = '20%';

			}
		}else{

		}
		if($responseInstThree){
			// $responseFileVisaInstThree = $this->_callApiRest('Verano/Ingles/api/fileinfoVisa/id/'.$idAspirante,null,"GET",null);
			//
			// $idVisaInstThree = $responseFileVisaInstThree['data']['idDocumento'];
			//
			// $recomendationFileVisaInstThree = $this->_callApiRest('Verano/Ingles/api/recomendtionVisa/id/'.$idAspirante,null,"GET",null);
			//
			// $descriptionVisaInstThree = $recomendationFileVisaInstThree['data']['descripcion'];
			$responseFileVisaInstThree = $this->_callApiRest('Verano/Ingles/api/tipoOferta/id/'.$idAspirante.'/aux/'.$fkInstThree.'/tipo/'."Visa",null,"GET",null);

			$idVisaInstThree = $responseFileVisaInstThree['data']['idDocumento'];
			$recomendationFileVisaInstThree =  $this->_callApiRest('Verano/Ingles/api/recomendtionTicket/id/'.$idAspirante.'/aux/'.$idVisaInstThree,null,"GET",null);
			$descriptionVisaInstThree = @$recomendationFileVisaInstThree['data'][0]['descripcion'];

				$defaultfileVisaInstThree = '';
				$fileexistsVisaInstThree = '';
				$enableVisaInstThree = '';
				$progreso = '';
				if($responseFileVisaInstThree['data'] == NULL){
					$defaultfileVisaInstThree = '';
					$fileexistsVisaInstThree = FALSE;
					$enableVisaInstThree= '';
					$statusDocVisaInstThree= "SinDocumento";
					$progreso = '20%';
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
				$progreso = '50%';
			}else if($statusDocVisaInstThree == "Rechazado"){


				$defaultfileVisaInstThree = '';
				$fileexistsVisaInstThree = True;
				$enableVisaInstThree= "disabled='disabled'";
				$infoDocVisaInstThree = 'El documento fue rechazado';
				$defaultfileVisaInstThree = $responseFileVisaInstThree['data']['urlDocumento'];
				$stepOneVisaInstThree = 'current';
				$stepTwoVisaInstThree = 'current';
				$progreso = '20%';

			}else if($statusDocVisaInstThree == "Aceptado"){
				$infoDocVisaInstThree = 'El documento fue aceptado';
				$fileexistsVisaInstThree = True;
				$enableVisaInstThree= "disabled='disabled'";
				$defaultfileVisaInstThree = $responseFileVisaInstThree['data']['urlDocumento'];
				$stepOneVisaInstThree = 'current';
				$stepTwoVisaInstThree = 'current';
				$stepThreeVisaInstThree = 'current';
				$progreso = '100%';
			}else if($statusDocVisaInstThree =="SinDocumento"){
				$infoDocVisaInstThree = 'Sin documento';
				$stepOneVisaInstThree = 'current';
				$enableVisaInstThree= "disabled='disabled'";
				$progreso = '20%';

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
		// $responseForm = $this->_callApiRest('Verano/Ingles/api/fileVeranoIngles/id/'.$idAspirante,null,"GET",null);
		//
		// $responseFileVisa = $this->_callApiRest('Verano/api/fileinfo/id/'.$idAspirante,null,"GET",null);
		//
		// $statusPassport = $responseFileVisa['data']['statusDocumento'];


		$responseNumAplicanteOne = $this->_callApiRest('Verano/Ingles/api/numAplication/id/'.$idAspirante.'/idDocForm/'.$fkInstOne,null,"GET",null);
		$responseNumAplicanteTwo = $this->_callApiRest('Verano/Ingles/api/numAplication/id/'.$idAspirante.'/idDocForm/'.$fkInstTwo,null,"GET",null);
		$responseNumAplicanteThree = $this->_callApiRest('Verano/Ingles/api/numAplication/id/'.$idAspirante.'/idDocForm/'.$fkInstThree,null,"GET",null);
		$data['numAplicanteOne'] = $responseNumAplicanteOne['data'];
		$data['numAplicanteTwo'] = $responseNumAplicanteTwo['data'];
		$data['numAplicanteThree'] = $responseNumAplicanteThree['data'];


		$data['pasoUno']	=$pasoUno;
		$data['pasoDos']	=$pasoDos;
		$data['pasoTres']	=$pasoTres;
		$data['pasoCuatro']	=$pasoCuatro;
		$data['pasoCinco']	=$pasoCinco;
		$data['pasoSeis']	=$pasoSeis;
		$data['pasoSiete']	=$pasoSiete;

		$data['progreso'] =$progreso;

		$data['stepOneVisaInstOne'] =$stepOneVisaInstOne;
		$data['stepTwoVisaInstOne'] =$stepTwoVisaInstOne;
		$data['stepThreeVisaInstOne'] =$stepThreeVisaInstOne;
		$data['defaultfileVisaInstOne'] =$defaultfileVisaInstOne;
		$data['fileexistsVisaInstOne'] =$fileexistsVisaInstOne;
		$data['fileInfoVisaInstOne'] =$responseFileVisaInstOne;
		$data['enableVisaInstOne'] =$enableVisaInstOne;
		$data['infoDocVisaInstOne'] =$infoDocVisaInstOne;
		$data['statusDocVisaInstOne'] =$statusDocVisaInstOne;
		$data['descriptionVisaInstOne'] =$descriptionVisaInstOne;
		$data['progreso'] =$progreso;
		$data['idinfDocmentVisaInstOne'] = $idVisaInstOne;

		$data['stepOneVisaInstTwo'] =@$stepOneVisaInstTwo;
		$data['stepTwoVisaInstTwo'] =@$stepTwoVisaInstTwo;
		$data['stepThreeVisaInstTwo'] =@$stepThreeVisaInstTwo;
		$data['defaultfileVisaInstTwo'] =@$defaultfileVisaInstTwo;
		$data['fileexistsVisaInstTwo'] =@$fileexistsVisaInstTwo;
		$data['fileInfoVisaInstTwo'] =@$responseFileVisaInstTwo;
		$data['enableVisaInstTwo'] =@$enableVisaInstTwo;
		$data['infoDocVisaInstTwo'] =@$infoDocVisaInstTwo;
		$data['statusDocVisaInstTwo'] =@$statusDocVisaInstTwo;
		$data['descriptionVisaInstTwo'] =@$descriptionVisaInstTwo;
		$data['idinfDocmentVisaInstTwo'] = @$idVisaInstTwo;

		$data['stepOneVisaInstThree'] =@$stepOneVisaInstThree;
		$data['stepTwoVisaInstThree'] =@$stepTwoVisaInstThree;
		$data['stepThreeVisaInstThree'] =@$stepThreeVisaInstThree;
		$data['defaultfileVisaInstThree'] =@$defaultfileVisaInstThree;
		$data['fileexistsVisaInstThree'] =@$fileexistsVisaInstThree;
		$data['fileInfoVisaInstThree'] =@$responseFileVisaInstThree;
		$data['enableVisaInstThree'] =@$enableVisaInstThree;
		$data['infoDocVisaInstThree'] =@$infoDocVisaInstThree;
		$data['statusDocVisaInstThree'] =@$statusDocVisaInstThree;
		$data['descriptionVisaInstThree'] =@$descriptionVisaInstThree;
		$data['idinfDocmentVisaInstThree'] = @@$idVisaInstThree;

    $data['idAspirante'] = @$idAspirante;
    $data['aspirante'] =@$responseVerano['data'];
		$data['instOne'] =@$responseInstOne['data'];
		$data['instTwo'] =@$responseInstTwo['data'];
		$data['instThree'] =@$responseInstThree['data'];
		$data['infAspirante'] =@$responseinfoSteps['data'];

		$data['idVisaInstThree']	=@$idVisaInstThree;
		$data['idVisaInstTwo']	=@$idVisaInstTwo;
		$data['idVisaInstOne']	=@$idVisaInstOne;

		$data['InstOneInfo']	=$fkInstOne;
		$data['InstTwoInfo']	=$fkInstTwo;
		$data['InstThreeInfo']	=$fkInstThree;
    $data['user']=$this->session->userdata('user_sess');

		// $this->_initialAspirante($data);
		// $this->_headerAdmin($data);
		//
		// $this->_finalPageAdmin($data);
		// $this->_finalPage();

		$this->_initialAspirante($data);
		$this->_headerAdmin($data);
		$this->load->view('Dashboard_pages/VeranoAcademico/info_aspirante_cu_view',$data);
		$this->_finalPageAdminAcademico($data);
		$this->_finalPage();

    // $this->_initialAspirante($data);
    // $this->load->view('Dashboard_pages/Verano/info_aspirante_cu_view',$data);
		// $this->_finalPage();
	}

}
