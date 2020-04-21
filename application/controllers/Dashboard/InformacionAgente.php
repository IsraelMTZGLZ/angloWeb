<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InformacionAgente extends MY_RootController {

	public function __construct() {
		parent::__construct();
		if (!@$this->session->userdata('user_sess')->email) {
			redirect('Login');
        }else{
			if (@$this->session->userdata('user_sess')->typeUsuario=="Agente") {
				if (@$this->session->userdata('user_sess')->agente!=null) {
					redirect('Login');
				}
			}else {	
				redirect('Login');
			}
			
		}
    }

	public function index()
	{
        $data['user']=$this->session->userdata('user_sess');
		$this->load->view('Dashboard_pages/agente_informacion_view',$data);
	}

}
