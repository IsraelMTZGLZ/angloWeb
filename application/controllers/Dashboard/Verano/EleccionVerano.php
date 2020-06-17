<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EleccionVerano extends MY_RootController {

	public function __construct() {
		parent::__construct();
		// if (!@$this->session->userdata('user_sess')->email) {
		// 	redirect('Login');
    //     }else{
		// 	if (@$this->session->userdata('user_sess')->typeUsuario=="Aspirante") {
		// 		if (@$this->session->userdata('user_sess')->aspirante==null) {
		// 			redirect('Login');
		// 		}if (@$this->session->userdata('user_sess')->programaDeInteres) {
		// 			redirect('Login');
		// 		}
		// 	}else {
		// 		redirect('Login');
		// 	}
    //
		// }
	}

	public function index()
	{
    $responseTipo = $this->_callApiRest('TipoCampamento/api/tipoCampamento/',null,"GET",null);

		$data['tipos'] =$responseTipo['data'];
		$data['user']=$this->session->userdata('user_sess');

		$this->load->view('Dashboard_pages/Verano/eleccion_verano_view',$data);
	}

}
