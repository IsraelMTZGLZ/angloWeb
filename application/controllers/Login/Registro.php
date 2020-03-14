<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registro extends MY_RootController {

	public function __construct() {
		parent::__construct();
		$this->load->library('facebook');
    }

	public function index()
	{
		$this->load->view('Login/register_view');
	}

	public function Facebook(){
		if($this->facebook->is_authenticated()){
			$userProfile = $this->facebook->request('get', '/me?fields=id,first_name,last_name,email,gender,locale,picture.width(600).height(600)');
			if ($userProfile['id']) {
				$this->facebook->destroy_session();
				return redirect('Login/Registro');
			}elseif($userProfile['error']){
				$this->session->set_flashdata('facebook','Error');
				$this->facebook->destroy_session();
				return redirect('Login/Registro');
			}else{
				$this->session->set_flashdata('facebook','Error');
				$this->facebook->destroy_session();
				return redirect('Login/Registro');
			}
		}	
	}

}
 
