<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_RootController {

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
		$response =  $this->_callApiRest('Reportes/api/registradosDiario/',null,"GET",null);
		$response2 =  $this->_callApiRest('Reportes/api/registradosMes/',null,"GET",null);
		$data['totalMes'] = $response2['data'];
		$data['totalHoy'] = $response['data'];
        $data['user']=$this->session->userdata('user_sess');
		$this->_initialPage($data);
		$this->load->view('Dashboard_pages/Inicio',$data);
		$this->_finalPage();
		//echo var_dump($response['data']);
	}

}
