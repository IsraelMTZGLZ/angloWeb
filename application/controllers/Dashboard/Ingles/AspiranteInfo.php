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
		$responseInstSelect = $this->_callApiRest('Ingles/api/englishnewInstselected/id/'.$idAspirante,null,"GET",null);
		$recomendation = $this->_callApiRest('Ingles/api/recomendtionPassport/id/'.$idAspirante,null,"GET",null);

		$fkInstOne =$responseInstSelect['data']['fkInstitutoOne'];
		$fkInstTwo =$responseInstSelect['data']['fkInstitutoTwo'];
		$fkInstThree =$responseInstSelect['data']['fkInstitutoThree'];

		$responseInstOne= $this->_callApiRest('Ingles/api/englishnewInst/id/'.$fkInstOne,null,"GET",null);
		$responseInstTwo = $this->_callApiRest('Ingles/api/englishnewInst/id/'.$fkInstTwo,null,"GET",null);
		$responseInstThree = $this->_callApiRest('Ingles/api/englishnewInst/id/'.$fkInstThree,null,"GET",null);

		$responseinfoSteps = $this->_callApiRest('Ingles/api/englishinfoSteps/id/'.$idAspirante,null,"GET",null);
		$recomendation = '';
		$responseFile = $this->_callApiRest('Ingles/api/fileinfo/id/'.$idAspirante,null,"GET",null);
		$description = @$recomendation['data']['descripcion'];
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
			$recomendationOne = $this->_callApiRest('Ingles/api/recomendtion/id/'.$identAspirante,null,"GET",null);
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

    $data['aspirante'] =$responseEnglish['data'];
		$data['instOne'] =$responseInstOne['data'];
		$data['instTwo'] =$responseInstTwo['data'];
		$data['instThree'] =$responseInstThree['data'];
		$data['infAspirante'] =$responseinfoSteps['data'];
    $data['user']=$this->session->userdata('user_sess');

    $this->load->view('Dashboard_pages/Ingles/aspirante_info_view',$data);
  $this->_finalPage();
	}

}
