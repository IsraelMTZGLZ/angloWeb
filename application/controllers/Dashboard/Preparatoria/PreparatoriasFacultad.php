<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PreparatoriasFacultad extends MY_RootController {

	public function __construct() {
		parent::__construct();
		if (!@$this->session->userdata('user_sess')->email) {
			redirect('Login');
        }else{
			if (@$this->session->userdata('user_sess')->typeUsuario=="Aspirante") {
				if (@$this->session->userdata('user_sess')->aspirante==null) {
					redirect('Login');
				}
				if (@$this->session->userdata('user_sess')->programaDeInteres != "Preparatoria") {
					redirect('Login');
				}
                $response = $this->_callApiRest('AspirantePreparatorias/api/aspirantePreparatoriasBYAspirante/id/'.$this->session->userdata('user_sess')->aspirante,null,"GET",null);
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
        $responseAspirantePrepa = $this->_callApiRest('AspirantePreparatorias/api/aspirantePreparatoriasBYAspirante/id/'.$this->session->userdata('user_sess')->aspirante,null,"GET",null);
        $responsePrepas = $this->_callApiRest('Preparatoria/api/preparatoriaBYTipoAlojamientoANDTipoEstudio/id/'.$responseAspirantePrepa['data']['idTipoEstudio'].'/id2/'.$responseAspirantePrepa['data']['idTipoAlojamiento'],null,"GET",null);
		//echo var_dump($responsePrepas['data']);
		$data['aspirantePrepa'] = $responseAspirantePrepa['data']; 
        $data['preparatorias'] = $responsePrepas['data'];
		$data['user']=$this->session->userdata('user_sess');
		$this->load->view('Dashboard_pages/SelectPrepa',$data);
	}
	
}
 
