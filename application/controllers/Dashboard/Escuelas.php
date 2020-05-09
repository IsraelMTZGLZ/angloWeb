<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Escuelas extends MY_RootController {

	public function __construct() {
        parent::__construct();
        if (!@$this->session->userdata('user_sess')->email) {
			redirect('Login');
        }else{
            if (@$this->session->userdata('user_sess')->typeUsuario!="Admin" && $this->session->userdata('user_sess')->typeUsuario!="Agente") {
                redirect('Login');
            }
        }
    }

	public function index()
	{
        $response = $this->_callApiRest('Universidad/api/universidadOrdenByInstitucion/',null,"GET",null);
        $facultadesAll = $this->_callApiRest('Facultad/api/facultad/',null,"GET",null);
        $tipoEstudioAll = $this->_callApiRest('TipoEstudio/api/tipoEstudio/',null,"GET",null);
        $tipoAlojamientoAll = $this->_callApiRest('TipoAlojamiento/api/tipoAlojamiento/',null,"GET",null);
        $responseP = $this->_callApiRest('Preparatoria/api/preparatoriaOrdenByInstitucion/',null,"GET",null);

        //universidades
        $universidades =array();
        for ($i=0; $i < count($response['data']) ; $i++) { 
            $facultades = $this->_callApiRest('Universidad/api/universidadByInstitucion/id/'.$response['data'][$i]['idInstitucion'],null,"GET",null);
            array_push($universidades,array("intitucion"=>$response['data'][$i],"Facultades"=>$facultades['data']));
        }

        //preparatorias
        $preparatorias = array();
        for ($j=0; $j <count($responseP['data']) ; $j++) { 
            $tipoEstudio = $this->_callApiRest('Preparatoria/api/preparatoriasBYInstitucionTiposEstudios/id/'.$responseP['data'][$j]['idInstitucion'],null,"GET",null);
            $tipoAlojamiento = $this->_callApiRest('Preparatoria/api/preparatoriasBYInstitucionTiposAlojamientos/id/'.$responseP['data'][$j]['idInstitucion'],null,"GET",null);
            array_push($preparatorias,array("institucion"=>$responseP['data'][$j],"tipoEstudios"=>$tipoEstudio['data'],"tipoAlojamiento"=>$tipoAlojamiento['data']));
        }
       
        //echo var_dump($preparatorias[0]);

        $data['universidades'] =$universidades;
        $data['facultades'] =$facultadesAll['data'];
        $data['tipoEstudios'] =$tipoEstudioAll['data'];
        $data['tipoAlojamientos'] =$tipoAlojamientoAll['data'];
        $data['preparatorias'] =$preparatorias;
        $data['user']=$this->session->userdata('user_sess');
        $this->_initialPage($data);
        $this->load->view('Dashboard_pages/escuelas_view',$data);
        $this->_finalPage();
	}

}
