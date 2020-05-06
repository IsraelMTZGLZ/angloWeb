<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DatosPreparatoria extends MY_RootController {

	public function __construct() {
		parent::__construct();
		if (!@$this->session->userdata('user_sess')->email) {
			redirect('Login');
        }else{
			if (@$this->session->userdata('user_sess')->typeUsuario=="Aspirante") {
				if (@$this->session->userdata('user_sess')->programaDeInteres != "Preparatoria") {
					redirect('Login');
				}
                $response = $this->_callApiRest('AspirantePreparatorias/api/aspirantePreparatoriasBYAspirante/id/'.$this->session->userdata('user_sess')->aspirante,null,"GET",null);
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
		$response = $this->_callApiRest('TipoEstudio/api/tipoEstudio/',null,"GET",null);
        $responseA = $this->_callApiRest('TipoAlojamiento/api/tipoAlojamiento/',null,"GET",null);
        $data['tipoEstudios'] = $response['data'];
        $data['tipoAlojamientos'] = $responseA['data'];
		$data['user']=$this->session->userdata('user_sess');
		$this->load->view('Dashboard_pages/DatosPrepa',$data);
	}
	
}
 
