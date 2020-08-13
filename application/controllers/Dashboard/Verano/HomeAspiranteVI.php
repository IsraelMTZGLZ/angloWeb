<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  class HomeAspiranteVI extends MY_RootController {

    public function __construct() {
          parent::__construct();

    }

    public function index(){


      $identAspirante  = $this->session->userdata('user_sess')->aspirante;
      $aspiranteInteres = $this->_callApiRest('Verano/api/aspirante/id/'.$identAspirante,null,"GET",null);


      if($aspiranteInteres['data']['programaDeInteres']== 'CursoVeranoIngles'){
        $cursoElegido = 'Curso de verano Inglés';
        $url = 'Dashboard/Verano/AspirantePage';
        $responseVerano = $this->_callApiRest('Verano/api/veranonewStudents/id/'.$identAspirante,null,"GET",null);
        $responseInstSelect = $this->_callApiRest('Verano/api/veranonewInstselected/id/'.$identAspirante,null,"GET",null);

        $responseInstSelect = $this->_callApiRest('Verano/Ingles/api/instSelected/id/'.$identAspirante,null,"GET",null);
        $aux_selec_one  = @$responseInstSelect['data'][0];
        $aux_selec_two  = @$responseInstSelect['data'][1];
        $aux_selec_three  = @$responseInstSelect['data'][2];

        $recomendation = $this->_callApiRest('Ingles/api/recomendtionPassport/id/'.$identAspirante,null,"GET",null);
        $description = $recomendation['data']['descripcion'];
        $fkInstOne =$aux_selec_one['fkInstituto'];
        $fkInstTwo =$aux_selec_two['fkInstituto'];
        $fkInstThree =$aux_selec_three['fkInstituto'];

        $responseInstOne= $this->_callApiRest('Verano/api/veranonewInst/id/'.$fkInstOne,null,"GET",null);
        $responseInstTwo = $this->_callApiRest('Verano/api/veranonewInst/id/'.$fkInstTwo,null,"GET",null);
        $responseInstThree = $this->_callApiRest('Verano/api/veranonewInst/id/'.$fkInstThree,null,"GET",null);

        $responseView = $this->_callApiRest('Verano/Ingles/api/aspiranteVerInglesBYAspirante/id/'.$identAspirante,null,"GET",null);
         $responseinfoSteps = $this->_callApiRest('Verano/api/veranoinfoSteps/id/'.$identAspirante,null,"GET",null);
         $fecha = $responseinfoSteps['data']['anioMesIngreso'];

         $anio = date('yy', strtotime($fecha));
         $mes =date('m', strtotime($fecha));
        $responseVerano = $this->_callApiRest('Verano/api/veranonewStudents/id/'.$identAspirante,null,"GET",null);

      }else if($aspiranteInteres['data']['programaDeInteres']== 'CursoVeranoAcademico'){
        $cursoElegido = 'Curso de verano académico';
        $url = 'Dashboard/VeranoAcademico/AspiranteAcademico';
        $responseVerano = $this->_callApiRest('Verano/api/veranonewStudents/id/'.$identAspirante,null,"GET",null);
        $responseInstSelect = $this->_callApiRest('Verano/api/veranonewInstselected/id/'.$identAspirante,null,"GET",null);

        $responseInstSelect = $this->_callApiRest('Verano/Ingles/api/instSelected/id/'.$identAspirante,null,"GET",null);
        $aux_selec_one  = @$responseInstSelect['data'][0];
        $aux_selec_two  = @$responseInstSelect['data'][1];
        $aux_selec_three  = @$responseInstSelect['data'][2];

        $recomendation = $this->_callApiRest('Ingles/api/recomendtionPassport/id/'.$identAspirante,null,"GET",null);
        $description = $recomendation['data']['descripcion'];
        $fkInstOne =$aux_selec_one['fkInstituto'];
        $fkInstTwo =$aux_selec_two['fkInstituto'];
        $fkInstThree =$aux_selec_three['fkInstituto'];

        $responseInstOne= $this->_callApiRest('Verano/api/veranonewInst/id/'.$fkInstOne,null,"GET",null);
        $responseInstTwo = $this->_callApiRest('Verano/api/veranonewInst/id/'.$fkInstTwo,null,"GET",null);
        $responseInstThree = $this->_callApiRest('Verano/api/veranonewInst/id/'.$fkInstThree,null,"GET",null);

        $responseView = $this->_callApiRest('Verano/Ingles/api/aspiranteVerInglesBYAspirante/id/'.$identAspirante,null,"GET",null);
         $responseinfoSteps = $this->_callApiRest('Verano/api/veranoinfoSteps/id/'.$identAspirante,null,"GET",null);
         $fecha = $responseinfoSteps['data']['anioMesIngreso'];

         $anio = date('yy', strtotime($fecha));
         $mes =date('m', strtotime($fecha));
        $responseVerano = $this->_callApiRest('Verano/api/veranonewStudents/id/'.$identAspirante,null,"GET",null);

      }else if($aspiranteInteres['data']['programaDeInteres']== 'CursoIngles'){
        $cursoElegido = 'Curso de Inglés';
        $url = 'Dashboard/Ingles/AspirantePage';
        $responseEnglish = $this->_callApiRest('Ingles/api/englishnewStudents/id/'.$identAspirante,null,"GET",null);
    		$responseInstSelect = $this->_callApiRest('Ingles/api/instSelected/id/'.$identAspirante,null,"GET",null);
    		$aux_selec_one  = @$responseInstSelect['data'][0];
    		$aux_selec_two  = @$responseInstSelect['data'][1];
    		$aux_selec_three  = @$responseInstSelect['data'][2];
    		$fkInstOne =$aux_selec_one['fkInstituto'];
    		$fkInstTwo =$aux_selec_two['fkInstituto'];
    		$fkInstThree =$aux_selec_three['fkInstituto'];
        $responseInstOne= $this->_callApiRest('Ingles/api/englishnewInst/id/'.$fkInstOne,null,"GET",null);
        $responseInstTwo = $this->_callApiRest('Ingles/api/englishnewInst/id/'.$fkInstTwo,null,"GET",null);
        $responseInstThree = $this->_callApiRest('Ingles/api/englishnewInst/id/'.$fkInstThree,null,"GET",null);
        $responseinfoSteps = $this->_callApiRest('Ingles/api/englishinfoSteps/id/'.$identAspirante,null,"GET",null);
      
        $fecha = $responseinfoSteps['data']['anioMesIngreso'];

        $anio = date('yy', strtotime($fecha));
        $mes =date('m', strtotime($fecha));


      }





      $data['InstOneInfo']	=$fkInstOne;
      $data['InstTwoInfo']	=$fkInstTwo;
      $data['InstThreeInfo']	=$fkInstThree;
      $data['instOne'] =$responseInstOne['data'];
      $data['instTwo'] =$responseInstTwo['data'];
      $data['instThree'] =$responseInstThree['data'];
      $data['infAspirante'] =$responseinfoSteps['data'];
      $data['mes'] =$mes;
      $data['anio'] =$anio;
      $data['url'] =$url;
      $data['aspiranteInteres'] =$cursoElegido;
      $data['user']=$this->session->userdata('user_sess');
      $this->_initialPage($data);
      $this->load->view('Dashboard_pages/Verano/aspirante_home_view',$data);
      $this->_finalPage();
    }
  }
