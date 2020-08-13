<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InfoAspiranteCuatroC extends MY_RootController {

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



		$AspiranteInfo=$this->session->userdata('user_sess');

		$responseDocsByPerson = $this->_callApiRest('Verano/Ingles/api/docsByPerson/id/'.$idAspirante,null,"GET",null);


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


		$responseForm = $this->_callApiRest('Verano/Ingles/api/fileVeranoIngles/id/'.$idAspirante,null,"GET",null);

		$responseFile = $this->_callApiRest('Verano/api/fileinfo/id/'.$idAspirante,null,"GET",null);

		$statusPassport = $responseFile['data']['statusDocumento'];

		 if($lenInstitutos == $lenDocsAcepted  and $infoStAs == '2' and $statusPassport == 'Activo'){

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


			}else{

			}

 		}else{

 		}
		$progreso = '';
		$instOnePago ='';
		// $responseTipoOfertaInstOne = $this->_callApiRest('Verano/Ingles/api/tipoOferta/id/'.$idAspirante.'/aux/'.$fkInstOne,null,"GET",null);
		$responseTipoOfertaInstOne = $this->_callApiRest('Verano/Ingles/api/tipoOferta/id/'.$idAspirante.'/aux/'.$fkInstOne.'/tipo/'."OfertaCondicional",null,"GET",null);

		if($responseTipoOfertaInstOne['data'] != NULL){
			$responseTipo = 'OfertaCondicional';
		}else{
			$responseTipoOfertaInstOne = $this->_callApiRest('Verano/Ingles/api/tipoOferta/id/'.$idAspirante.'/aux/'.$fkInstOne.'/tipo/'.'OfertaIncondicional',null,"GET",null);
			if($responseTipoOfertaInstOne['data'] != NULL){
				$responseTipo = 'OfertaIncondicional';
			}else{
				$responseTipo ='';
			}
		}

		if($responseTipo == 'OfertaCondicional'){
				$instOnePago = TRUE;

				$responseFileTicketPagoInstOne = $this->_callApiRest('Verano/Ingles/api/ticketPago/id/'.$idAspirante.'/aux/'.$fkInstOne,null,"GET",null);

				$idTicketDocumentInstOne = $responseFileTicketPagoInstOne['data']['idDocumento'];

				$recomendationTicketPagoInstOne = $this->_callApiRest('Verano/Ingles/api/recomendtionTicket/id/'.$idAspirante.'/aux/'.$idTicketDocumentInstOne,null,"GET",null);
				$descriptionTicketPagoInstOne = @$recomendationTicketPagoInstOne['data'][0]['descripcion'];

				$responseticketPagoInstOne =$responseFileTicketPagoInstOne;
				// $responseticketPagoInstOne = $this->_callApiRest('Verano/Ingles/api/ticketPago/id/'.$idAspirante,null,"GET",null);

				// $idTicketDocument = $responseticketPagoInstOne['data']['idDocumento'];
				// $recomendationTicketPagoInstOne = $this->_callApiRest('Verano/Ingles/api/recomendtionTicket/id/'.$idTicketDocument,null,"GET",null);
				// // echo var_dump($responseticketPagoInstOne);
				// $descriptionTicketPagoInstOne = @$recomendationTicketPagoInstOne['data']['description'];
					$defaultfileTicketPagoInstOne = '';
					$fileexistsTicketPagoInstOne = '';
					$enableTicketPagoInstOne = '';
					$progresoTicketPagoInstOne = '';

					if($responseticketPagoInstOne['data'] == NULL){
						$defaultfileTicketPagoInstOne = '';
						$fileexistsTicketPagoInstOne = FALSE;
						$enableTicketPagoInstOne= '';
						$statusDocTicketPagoInstOne= "SinDocumento";
						$progresoTicketPagoInstOne = '20%';
					}else{
						$defaultfileTicketPagoInstOne = $responseticketPagoInstOne['data']['urlDocumento'];
						$fileexistsTicketPagoInstOne = TRUE;
						$enableTicketPagoInstOne = "disabled='disabled'";
						$statusDocTicketPagoInstOne= $responseticketPagoInstOne['data']['statusDocumento'];

					}

				$stepOneTicketPagoInstOne = '';
				$stepTwoTicketPagoInstOne = '';
				$stepThreeTicketPagoInstOne = '';

				if($statusDocTicketPagoInstOne == "Revision"){

					$infoDocTicketPagoInstOne = 'El documento esta en revisión';
					$stepOneTicketPagoInstOne = 'current';
					$stepTwoTicketPagoInstOne = 'current';
					$progresoTicketPagoInstOne = '50%';
				}else if($statusDocTicketPagoInstOne == "Rechazado"){


					$defaultfileTicketPagoInstOne = '';
					$fileexistsTicketPagoInstOne = True;
					$enableTicketPagoInstOne= "disabled='disabled'";
					$infoDocTicketPagoInstOne = 'El documento fue rechazado';
					$defaultfileTicketPagoInstOne = $responseticketPagoInstOne['data']['urlDocumento'];
					$stepOneTicketPagoInstOne = 'current';
					$stepTwoTicketPagoInstOne = 'current';
					$progresoTicketPagoInstOne = '20%';

				}else if($statusDocTicketPagoInstOne == "Aceptado"){
					$infoDocTicketPagoInstOne = 'El documento fue aceptado';
					$fileexistsTicketPagoInstOne = True;
					$enableTicketPagoInstOne= "disabled='disabled'";
					$defaultfileTicketPagoInstOne = $responseticketPagoInstOne['data']['urlDocumento'];
					$stepOneTicketPagoInstOne = 'current';
					$stepTwoTicketPagoInstOne = 'current';
					$stepThreeTicketPagoInstOne = 'current';
					$progresoTicketPagoInstOne = '100%';
				}else if($statusDocTicketPagoInstOne =="SinDocumento"){
					$infoDocTicketPagoInstOne = 'Sin documento';
					$stepOneTicketPagoInstOne = 'current';
					$enableTicketPagoInstOne= "disabled='disabled'";
					$progresoTicketPagoInstOne = '20%';

				}

		}elseif ($responseTipo == 'OfertaIncondicional') {
				$instOnePago = FALSE;
		}else {
				$instOnePago = '';
		}
		// $responseTipoOfertaInstTwo = $this->_callApiRest('Verano/Ingles/api/tipoOferta/id/'.$idAspirante.'/aux/'.$fkInstTwo,null,"GET",null);
		$responseTipoOfertaInstTwo = $this->_callApiRest('Verano/Ingles/api/tipoOferta/id/'.$idAspirante.'/aux/'.$fkInstTwo.'/tipo/'."OfertaCondicional",null,"GET",null);

		if($responseTipoOfertaInstTwo['data'] != NULL){
			$responseTipoTwo = 'OfertaCondicional';
		}else{
			$responseTipoOfertaInstTwo = $this->_callApiRest('Verano/Ingles/api/tipoOferta/id/'.$idAspirante.'/aux/'.$fkInstTwo.'/tipo/'.'OfertaIncondicional',null,"GET",null);
			if($responseTipoOfertaInstTwo['data'] != NULL){
				$responseTipoTwo = 'OfertaIncondicional';
			}else{
				$responseTipoTwo ='';
			}
		}


		if($responseTipoTwo == 'OfertaCondicional'){

			$instTwoPago = TRUE;

			$responseticketPagoInstTwo = $this->_callApiRest('Verano/Ingles/api/ticketPago/id/'.$idAspirante.'/aux/'.$fkInstTwo,null,"GET",null);
			$idTicketDocumentInstTwo = $responseticketPagoInstTwo['data']['idDocumento'];
			$recomendationTicketPagoInstTwo = $this->_callApiRest('Verano/Ingles/api/recomendtionTicket/id/'.$idAspirante.'/aux/'.$idTicketDocumentInstTwo,null,"GET",null);
			$descriptionTicketPagoInstTwo = @$recomendationTicketPagoInstTwo['data'][0]['descripcion'];
			$responseticketPagoInstTwo =$responseticketPagoInstTwo;

			// $responseticketPagoInstTwo = $this->_callApiRest('Verano/Ingles/api/ticketPago/id/'.$idAspirante,null,"GET",null);
			//
			// $idTicketDocument = $responseticketPagoInstTwo['data']['idDocumento'];
			// $recomendationTicketPagoInstTwo = $this->_callApiRest('Verano/Ingles/api/recomendtionTicket/id/'.$idTicketDocument,null,"GET",null);
			// // echo var_dump($responseticketPagoInstTwo);
			// $descriptionTicketPagoInstTwo = @$recomendationTicketPagoInstTwo['data']['description'];



				$defaultfileTicketPagoInstTwo = '';
				$fileexistsTicketPagoInstTwo = '';
				$enableTicketPagoInstTwo = '';
				$progresoTicketPagoInstTwo = '';

				if($responseticketPagoInstTwo['data'] == NULL){
					$defaultfileTicketPagoInstTwo = '';
					$fileexistsTicketPagoInstTwo = FALSE;
					$enableTicketPagoInstTwo= '';
					$statusDocTicketPagoInstTwo= "SinDocumento";
					$progresoTicketPagoInstTwo = '20%';
				}else{
					$defaultfileTicketPagoInstTwo = $responseticketPagoInstTwo['data']['urlDocumento'];
					$fileexistsTicketPagoInstTwo = TRUE;
					$enableTicketPagoInstTwo = "disabled='disabled'";
					$statusDocTicketPagoInstTwo= $responseticketPagoInstTwo['data']['statusDocumento'];

				}

			$stepOneTicketPagoInstTwo = '';
			$stepTwoTicketPagoInstTwo = '';
			$stepThreeTicketPagoInstTwo = '';

			if($statusDocTicketPagoInstTwo == "Revision"){

				$infoDocTicketPagoInstTwo = 'El documento esta en revisión';
				$stepOneTicketPagoInstTwo = 'current';
				$stepTwoTicketPagoInstTwo = 'current';
				$progresoTicketPagoInstTwo = '50%';
			}else if($statusDocTicketPagoInstTwo == "Rechazado"){


				$defaultfileTicketPagoInstTwo = '';
				$fileexistsTicketPagoInstTwo = True;
				$enableTicketPagoInstTwo= "disabled='disabled'";
				$infoDocTicketPagoInstTwo = 'El documento fue rechazado';
				$defaultfileTicketPagoInstTwo = $responseticketPagoInstTwo['data']['urlDocumento'];
				$stepOneTicketPagoInstTwo = 'current';
				$stepTwoTicketPagoInstTwo = 'current';
				$progresoTicketPagoInstTwo = '20%';

			}else if($statusDocTicketPagoInstTwo == "Aceptado"){
				$infoDocTicketPagoInstTwo = 'El documento fue aceptado';
				$fileexistsTicketPagoInstTwo = True;
				$enableTicketPagoInstTwo= "disabled='disabled'";
				$defaultfileTicketPagoInstTwo = $responseticketPagoInstTwo['data']['urlDocumento'];
				$stepOneTicketPagoInstTwo = 'current';
				$stepTwoTicketPagoInstTwo = 'current';
				$stepThreeTicketPagoInstTwo = 'current';
				$progresoTicketPagoInstTwo = '100%';
			}else if($statusDocTicketPagoInstTwo =="SinDocumento"){
				$infoDocTicketPagoInstTwo = 'Sin documento';
				$stepOneTicketPagoInstTwo = 'current';
				$enableTicketPagoInstTwo= "disabled='disabled'";
				$progresoTicketPagoInstTwo = '20%';

			}
		}elseif ($responseTipoTwo == 'OfertaIncondicional') {
			$instTwoPago = FALSE;
		}else {
			$instTwoPago = '';
		}

		$instThreePago ='';
		// $responseTipoOfertaInstThree = $this->_callApiRest('Verano/Ingles/api/tipoOferta/id/'.$idAspirante.'/aux/'.$fkInstThree,null,"GET",null);
		$responseTipoOfertaInstThree = $this->_callApiRest('Verano/Ingles/api/tipoOferta/id/'.$idAspirante.'/aux/'.$fkInstThree.'/tipo/'."OfertaCondicional",null,"GET",null);


		if($responseTipoOfertaInstThree['data'] != NULL){

			$responseTipoThree = 'OfertaCondicional';
		}else{
			$responseTipoOfertaInstThree = $this->_callApiRest('Verano/Ingles/api/tipoOferta/id/'.$idAspirante.'/aux/'.$fkInstThree.'/tipo/'.'OfertaIncondicional',null,"GET",null);
			if($responseTipoOfertaInstThree['data'] != NULL){
				$responseTipoThree = 'OfertaIncondicional';
			}else{
				$responseTipoThree ='';
			}
		}

		if($responseTipoThree == 'OfertaCondicional'){
			$instThreePago = TRUE;


			$responseticketPagoInstThree = $this->_callApiRest('Verano/Ingles/api/ticketPago/id/'.$idAspirante.'/aux/'.$fkInstThree,null,"GET",null);
			$idTicketDocumentInstThree = $responseticketPagoInstThree['data']['idDocumento'];
			$recomendationTicketPagoInstThree = $this->_callApiRest('Verano/Ingles/api/recomendtionTicket/id/'.$idAspirante.'/aux/'.$idTicketDocumentInstThree,null,"GET",null);
			$descriptionTicketPagoInstThree = @$recomendationTicketPagoInstThree['data'][0]['descripcion'];
			$responseticketPagoInstThree =$responseticketPagoInstThree;


			// $responseticketPagoInstTwo = $this->_callApiRest('Verano/Ingles/api/ticketPago/id/'.$idAspirante.'/aux/'.$fkInstTwo,null,"GET",null);
			// $idTicketDocumentInstTwo = $responseticketPagoInstTwo['data']['idDocumento'];
			// $recomendationTicketPagoInstTwo = $this->_callApiRest('Verano/Ingles/api/recomendtionTicket/id/'.$idAspirante.'/aux/'.$idTicketDocumentInstTwo,null,"GET",null);
			// $descriptionTicketPagoInstTwo = @$recomendationTicketPagoInstTwo['data'][0]['descripcion'];
			// $responseticketPagoInstTwo =$responseticketPagoInstTwo;



			// $responseticketPagoInstThree = $this->_callApiRest('Verano/Ingles/api/ticketPago/id/'.$idAspirante,null,"GET",null);
			//
			// $idTicketDocument = $responseticketPagoInstThree['data']['idDocumento'];
			// $recomendationTicketPagoInstThree = $this->_callApiRest('Verano/Ingles/api/recomendtionTicket/id/'.$idTicketDocument,null,"GET",null);
			// // echo var_dump($responseticketPagoInstThree);
			// $descriptionTicketPagoInstThree = @$recomendationTicketPagoInstThree['data']['description'];
				$defaultfileTicketPagoInstThree = '';
				$fileexistsTicketPagoInstThree = '';
				$enableTicketPagoInstThree = '';
				$progresoTicketPagoInstThree = '';

				if($responseticketPagoInstThree['data'] == NULL){
					$defaultfileTicketPagoInstThree = '';
					$fileexistsTicketPagoInstThree = FALSE;
					$enableTicketPagoInstThree= '';
					$statusDocTicketPagoInstThree= "SinDocumento";
					$progresoTicketPagoInstThree = '20%';
				}else{
					$defaultfileTicketPagoInstThree = $responseticketPagoInstThree['data']['urlDocumento'];
					$fileexistsTicketPagoInstThree = TRUE;
					$enableTicketPagoInstThree = "disabled='disabled'";
					$statusDocTicketPagoInstThree= $responseticketPagoInstThree['data']['statusDocumento'];

				}

			$stepOneTicketPagoInstThree = '';
			$stepTwoTicketPagoInstThree = '';
			$stepThreeTicketPagoInstThree = '';

			if($statusDocTicketPagoInstThree == "Revision"){

				$infoDocTicketPagoInstThree = 'El documento esta en revisión';
				$stepOneTicketPagoInstThree = 'current';
				$stepTwoTicketPagoInstThree = 'current';
				$progresoTicketPagoInstThree = '50%';
			}else if($statusDocTicketPagoInstThree == "Rechazado"){


				$defaultfileTicketPagoInstThree = '';
				$fileexistsTicketPagoInstThree = True;
				$enableTicketPagoInstThree= "disabled='disabled'";
				$infoDocTicketPagoInstThree = 'El documento fue rechazado';
				$defaultfileTicketPagoInstThree = $responseticketPagoInstThree['data']['urlDocumento'];
				$stepOneTicketPagoInstThree = 'current';
				$stepTwoTicketPagoInstThree = 'current';
				$progresoTicketPagoInstThree = '20%';

			}else if($statusDocTicketPagoInstThree == "Aceptado"){
				$infoDocTicketPagoInstThree = 'El documento fue aceptado';
				$fileexistsTicketPagoInstThree = True;
				$enableTicketPagoInstThree= "disabled='disabled'";
				$defaultfileTicketPagoInstThree = $responseticketPagoInstThree['data']['urlDocumento'];
				$stepOneTicketPagoInstThree = 'current';
				$stepTwoTicketPagoInstThree = 'current';
				$stepThreeTicketPagoInstThree = 'current';
				$progresoTicketPagoInstThree = '100%';
			}else if($statusDocTicketPagoInstThree =="SinDocumento"){
				$infoDocTicketPagoInstThree = 'Sin documento';
				$stepOneTicketPagoInstThree = 'current';
				$enableTicketPagoInstThree= "disabled='disabled'";
				$progresoTicketPagoInstThree = '20%';

			}
		}elseif ($responseTipoThree == 'OfertaIncondicional') {
			$instThreePago = FALSE;
		}else {
			$instThreePago = '';
		}

    $responseFile = $this->_callApiRest('Verano/Ingles/api/fileinfoVisa/id/'.$idAspirante,null,"GET",null);
		$responseReferenciaPago = $this->_callApiRest('Verano/Ingles/api/referenciaPago/id/'.$idAspirante,null,"GET",null);


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

		$pasoUno = TRUE;
		$pasoDos = TRUE;
		$pasoTres = TRUE;
		$pasoCuatro= TRUE;
		$pasoCinco = FALSE;
		$pasoSeis= FALSE;
		$pasoSiete = FALSE;



		$responseNumAplicanteOne = $this->_callApiRest('Verano/Ingles/api/numAplication/id/'.$idAspirante.'/idDocForm/'.$fkInstOne,null,"GET",null);
		$responseNumAplicanteTwo = $this->_callApiRest('Verano/Ingles/api/numAplication/id/'.$idAspirante.'/idDocForm/'.$fkInstTwo,null,"GET",null);
		$responseNumAplicanteThree = $this->_callApiRest('Verano/Ingles/api/numAplication/id/'.$idAspirante.'/idDocForm/'.$fkInstThree,null,"GET",null);
		$data['numAplicanteOne'] = $responseNumAplicanteOne['data'];
		$data['numAplicanteTwo'] = $responseNumAplicanteTwo['data'];
		$data['numAplicanteThree'] = $responseNumAplicanteThree['data'];

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

		$data['stepOneTicketPagoInstTwo'] =@$stepOneTicketPagoInstTwo;
		$data['stepTwoTicketPagoInstTwo'] =@$stepTwoTicketPagoInstTwo;
		$data['stepThreeTicketPagoInstTwo'] =@$stepThreeTicketPagoInstTwo;
		$data['defaultfileTicketPagoInstTwo'] =@$defaultfileTicketPagoInstTwo;
		$data['fileexistsTicketPagoInstTwo'] =@$fileexistsTicketPagoInstTwo;
		$data['fileInfoTicketPagoInstTwo'] =@$responseticketPagoInstTwo;
		$data['enableTicketPagoInstTwo'] =@$enableTicketPagoInstTwo;
		$data['infoDocTicketPagoInstTwo'] =@$infoDocTicketPagoInstTwo;
		$data['statusDocTicketPagoInstTwo'] =@$statusDocTicketPagoInstTwo;
		$data['descriptionTicketPagoInstTwo'] =@$descriptionTicketPagoInstTwo;
		$data['progresoTicketPagoInstTwo'] =@$progresoTicketPagoInstTwo;

		$data['stepOneTicketPagoInstThree'] =@$stepOneTicketPagoInstThree;
		$data['stepTwoTicketPagoInstThree'] =@$stepTwoTicketPagoInstThree;
		$data['stepThreeTicketPagoInstThree'] =@$stepThreeTicketPagoInstThree;
		$data['defaultfileTicketPagoInstThree'] =@$defaultfileTicketPagoInstThree;
		$data['fileexistsTicketPagoInstThree'] =@$fileexistsTicketPagoInstThree;
		$data['fileInfoTicketPagoInstThree'] =@$responseticketPagoInstThree;
		$data['enableTicketPagoInstThree'] =@$enableTicketPagoInstThree;
		$data['infoDocTicketPagoInstThree'] =@$infoDocTicketPagoInstThree;
		$data['statusDocTicketPagoInstThree'] =@$statusDocTicketPagoInstThree;
		$data['descriptionTicketPagoInstThree'] =@$descriptionTicketPagoInstThree;
		$data['progresoTicketPagoInstThree'] =@$progresoTicketPagoInstThree;

		$data['instOnePago'] = @$instOnePago;
		$data['instTwoPago'] = @$instTwoPago;
		$data['instThreePago'] = @$instThreePago;


		$data['pasoUno']	=$pasoUno;
		$data['pasoDos']	=$pasoDos;
		$data['pasoTres']	=$pasoTres;
		$data['pasoCuatro']	=$pasoCuatro;
		$data['pasoCinco']	=$pasoCinco;
		$data['pasoSeis']	=$pasoSeis;
		$data['pasoSiete']	=$pasoSiete;

		$data['progreso'] =$progreso;

		$data['idTicketDocumentInstOne'] = @$idTicketDocumentInstOne;
		$data['idTicketDocumentInstTwo'] = @$idTicketDocumentInstTwo;
		$data['idTicketDocumentInstThree'] = @$idTicketDocumentInstThree;
		// $data['idTicketDocument'] = $idTicketDocument;

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
    $data['aspirante'] =@$responseVerano['data'];
		$data['instOne'] =$responseInstOne['data'];
		$data['instTwo'] =$responseInstTwo['data'];
		$data['instThree'] =$responseInstThree['data'];
		$data['infAspirante'] =$responseinfoSteps['data'];

		$data['aspirante'] =$responseEnglish['data'];
		$data['infAspirante'] =$responseinfoSteps['data'];


		$data['referenciaPago'] =$responseReferenciaPago['data'];
    $data['user']=$this->session->userdata('user_sess');
		$data['documentosAspirante'] =$responseDocsByPerson['data'];

		$data['InstOneInfo']	=$fkInstOne;
		$data['InstTwoInfo']	=$fkInstTwo;
		$data['InstThreeInfo']	=$fkInstThree;
    // $this->_initialAspirante($data);
		//
		// $this->_finalPage();


		$this->_initialAspirante($data);
		$this->_headerAdmin($data);
		$this->load->view('Dashboard_pages/Ingles/info_aspirante_cc_view',$data);
		$this->_finalPageAdmin($data);
		$this->_finalPage();
	}

}
