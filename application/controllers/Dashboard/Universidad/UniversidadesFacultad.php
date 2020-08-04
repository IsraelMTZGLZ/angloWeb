<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UniversidadesFacultad extends MY_RootController {

	public function __construct() {
		parent::__construct();
		if (!@$this->session->userdata('user_sess')->email) {
			redirect('Login');
        }else{
			if (@$this->session->userdata('user_sess')->typeUsuario=="Aspirante") {
				if (@$this->session->userdata('user_sess')->aspirante==null) {
					redirect('Login');
				}
				if (@$this->session->userdata('user_sess')->programaDeInteres != "Universidad") {
					redirect('Login');
				}
				$response = $this->_callApiRest('AspiranteUniversidades/api/aspiranteUniversidadesBYAspirante/id/'.$this->session->userdata('user_sess')->aspirante,null,"GET",null);
				//echo $response;
				if(!$response['data']){
					redirect('Login');
				}
			}else {	
				redirect('Login');
			}
			
		}
	}
	
	public function index()
	{
        $responseAspiranteUni = $this->_callApiRest('AspiranteUniversidades/api/aspiranteUniversidadesBYAspirante/id/'.$this->session->userdata('user_sess')->aspirante,null,"GET",null);
        $responseUnis = $this->_callApiRest('Universidad/api/universidadByFacultad/id/'.$responseAspiranteUni['data']['idFacultad'],null,"GET",null);
		//echo var_dump($responseUnis['data']);
		$data['aspiranteUni'] = $responseAspiranteUni['data']; 
        $data['universidades'] = $responseUnis['data'];
		$data['user']=$this->session->userdata('user_sess');
		$this->load->view('Dashboard_pages/SelectUni',$data);
	}
	
}
 