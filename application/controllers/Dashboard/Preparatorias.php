<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Preparatorias extends MY_RootController {

	public function __construct() {
        parent::__construct();
        if (!@$this->session->userdata('user_sess')->email) {
			redirect('Login');
        }else{
            if (@$this->session->userdata('user_sess')->typeUsuario!="Admin") {
                redirect('Login');
            }
        }
    }

	public function index()
	{
        $responseInstituciones = $this->_callApiRest('Institucion/api/Institucion/',null,"GET",null);
        $responseTipoEstudio = $this->_callApiRest('TipoEstudio/api/TipoEstudio/',null,"GET",null);
        $responseTipoAlojamiento = $this->_callApiRest('TipoAlojamiento/api/tipoAlojamiento/',null,"GET",null);
        $data['tipoEstudio'] =$responseTipoEstudio['data'];
        $data['tipoAlojamiento'] =$responseTipoAlojamiento['data'];
        $data['instituciones'] =$responseInstituciones['data'];
        $data['user']=$this->session->userdata('user_sess');
        $this->_initialPage($data);
        $this->load->view('Dashboard_pages/prepararotias_view',$data);
        $this->_finalPage();
	}

}
