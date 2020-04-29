<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tipo extends MY_RootController {

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
        $response = $this->_callApiRest('TipoEstudio/api/tipoEstudio/',null,"GET",null);
        $responseAlojamiento = $this->_callApiRest('TipoAlojamiento/api/tipoAlojamiento/',null,"GET",null);
        $data['tipoEstudio'] =$response['data'];
        $data['tipoAlojamiento'] =$responseAlojamiento['data'];
        $data['user']=$this->session->userdata('user_sess');
        $this->_initialPage($data);
        $this->load->view('Dashboard_pages/tipo_view',$data);
        $this->_finalPage();
	}

}
