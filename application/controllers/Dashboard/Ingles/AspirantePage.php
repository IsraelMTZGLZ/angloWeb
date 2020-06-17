<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AspirantePage extends MY_RootController {

	public function __construct() {
        parent::__construct();

    }

	public function index()
	{
		$identAspirante  = $this->session->userdata('user_sess')->aspirante;
    $responseEnglish = $this->_callApiRest('Ingles/api/englishnewStudents/id/'.$identAspirante,null,"GET",null);
    $responseInstSelect = $this->_callApiRest('Ingles/api/englishnewInstselected/id//'.$identAspirante,null,"GET",null);
		$recomendation = $this->_callApiRest('Ingles/api/recomendtion/id/'.$identAspirante,null,"GET",null);
		$description = $recomendation['data']['descripcion'];
    $fkInstOne =$responseInstSelect['data']['fkInstitutoOne'];
    $fkInstTwo =$responseInstSelect['data']['fkInstitutoTwo'];
    $fkInstThree =$responseInstSelect['data']['fkInstitutoThree'];

    $responseInstOne= $this->_callApiRest('Ingles/api/englishnewInst/id/'.$fkInstOne,null,"GET",null);
    $responseInstTwo = $this->_callApiRest('Ingles/api/englishnewInst/id/'.$fkInstTwo,null,"GET",null);
    $responseInstThree = $this->_callApiRest('Ingles/api/englishnewInst/id/'.$fkInstThree,null,"GET",null);

    $responseinfoSteps = $this->_callApiRest('Ingles/api/englishinfoSteps/id/'.$identAspirante,null,"GET",null);

		$status = $responseInstOne['data']['statusInstitucion'] ? $responseInstOne['data']['statusInstitucion'] == 'Activo': 'Inactivo';
		$statu = '';
			if($status == TRUE){
				$statu = 'Activo';
			}else{
				$statu = 'Inactivo';
			}
		$responseFile = $this->_callApiRest('Ingles/api/fileinfo/id/'.$identAspirante,null,"GET",null);

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


	  $data['description'] =$description;
		$data['infoDoc'] =$infoDoc;
		$data['statusDoc'] =$statusDoc;
		$data['stepOne'] =$stepOne;
		$data['stepTwo'] =$stepTwo;
		$data['stepThree'] =$stepThree;
		$data['progreso'] =$progreso;

    $data['aspirante'] =$responseEnglish['data'];
    $data['instOne'] =$responseInstOne['data'];
    $data['instTwo'] =$responseInstTwo['data'];
    $data['instThree'] =$responseInstThree['data'];
		$data['status'] =$statu;
		$data['defaultfile'] =$defaultfile;
		$data['fileexists'] =$fileexists;
		$data['fileInfo'] =$responseFile;
		$data['enable'] =$enable;
    $data['infAspirante'] =$responseinfoSteps['data'];

		$data['user']=$this->session->userdata('user_sess');

    $this->load->view('Dashboard_pages/Ingles/aspirante_english_view',$data);
      $this->_finalPage();
	}


}
