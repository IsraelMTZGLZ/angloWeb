<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EleccionUniversidad extends MY_RootController {

	public function __construct() {
		parent::__construct();
		if (!@$this->session->userdata('user_sess')->email) {
			redirect('Login');
        }else{
			if (@$this->session->userdata('user_sess')->typeUsuario=="Aspirante") {
				if (@$this->session->userdata('user_sess')->aspirante==null) {
					redirect('Login');
				}if (@$this->session->userdata('user_sess')->programaDeInteres) {
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
		$this->load->view('Dashboard_pages/Eleccion',$data);
	}
	
}
 
