<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DatosUniversidad extends MY_RootController {

	public function __construct() {
		parent::__construct();
		if (!@$this->session->userdata('user_sess')->email) {
			redirect('Login');
        }else{
			if (@$this->session->userdata('user_sess')->typeUsuario=="Aspirante") {
				if (@$this->session->userdata('user_sess')->programaDeInteres != "Universidad") {
					redirect('Login');
				}
				$response = $this->_callApiRest('AspiranteUniversidades/api/aspiranteUniversidadesBYAspirante/id/'.$this->session->userdata('user_sess')->aspirante,null,"GET",null);
				//echo $response;
				if($response['data']){
					redirect('Login');
				}
			}else {	
				redirect('Login');
			}
			
		}
	}
	
	public function index()
	{
		$response = $this->_callApiRest('Facultad/api/Facultad/',null,"GET",null);
		$data['facultades'] = $response['data'];
		$data['user']=$this->session->userdata('user_sess');
		$this->load->view('Dashboard_pages/DatosUni',$data);
	}
	
}
 
