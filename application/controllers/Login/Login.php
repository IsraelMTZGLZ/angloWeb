<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_RootController {

	public function __construct() {
		parent::__construct();
		$this->load->library('facebook');
    }

	public function index()
	{
		$this->load->view('Login/login_view');
	}

	public function Facebook(){
		if($this->facebook->is_authenticated()){
			$userProfile = $this->facebook->request('get', '/me?fields=id,first_name,last_name,email,gender,locale,picture.width(600).height(600)');
			if ($userProfile['id']) {
				$this->facebook->destroy_session();
				redirect('Login/Login');
			}elseif($userProfile['error']){
				$this->session->set_flashdata('facebook','Error');
				$this->facebook->destroy_session();
				redirect('Login/Login');
			}else{
				$this->session->set_flashdata('facebook','Error');
				$this->facebook->destroy_session();
				redirect('Login/Login');
			}
		}	
	}
}
 
