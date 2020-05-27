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
    $responseEnglish = $this->_callApiRest('Ingles/api/englishnewStudents/id/'.$idAspirante,null,"GET",null);
		$responseInstSelect = $this->_callApiRest('Ingles/api/englishnewInstselected/id/'.$idAspirante,null,"GET",null);
		$fkInstOne =$responseInstSelect['data']['fkInstitutoOne'];
		$fkInstTwo =$responseInstSelect['data']['fkInstitutoTwo'];
		$fkInstThree =$responseInstSelect['data']['fkInstitutoThree'];

		$responseInstOne= $this->_callApiRest('Ingles/api/englishnewInst/id/'.$fkInstOne,null,"GET",null);
		$responseInstTwo = $this->_callApiRest('Ingles/api/englishnewInst/id/'.$fkInstTwo,null,"GET",null);
		$responseInstThree = $this->_callApiRest('Ingles/api/englishnewInst/id/'.$fkInstThree,null,"GET",null);

		$responseinfoSteps = $this->_callApiRest('Ingles/api/englishinfoSteps/id/'.$idAspirante,null,"GET",null);

		$responseFile = $this->_callApiRest('Verano/api/fileinfo/id/'.$idAspirante,null,"GET",null);

			$defaultfile = '';
			$fileexists = '';
			$enable = '';
			if($responseFile['data'] == NULL){
				$defaultfile = '';
				$fileexists = FALSE;
				$enable= '';
				$statusDoc= "SinDocumento";
			}else{
				$defaultfile = $responseFile['data']['urlDocumento'];
				$fileexists = TRUE;
				$enable = "disabled='disabled'";
				$statusDoc= $responseFile['data']['statusDocumento'];
			}


		if($statusDoc == "Revision"){
			echo("Revicion");
		}else if($statusDoc == "Rechazado"){
			echo("Rechazado Sorry");
			$defaultfile = '';
			$fileexists = FALSE;
			$enable= "disabled='disabled'";
			$infoDoc = 'El documento fue rechazado';
		}else if($statusDoc == "Aceptado"){
				echo("Aceptado");
		}else if($statusDoc =="SinDocumento"){
			echo("SIn doc");
		}
		$data['defaultfile'] =$defaultfile;
		$data['fileexists'] =$fileexists;
		$data['fileInfo'] =$responseFile;
		$data['enable'] =$enable;
		$data['infoDoc'] =$infoDoc;
		$data['fileInfo'] =$responseFile;
    $data['idAspirante'] = $idAspirante;
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
