<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProfileAspirante extends MY_RootController {

	public function __construct() {
		parent::__construct();
        if (!@$this->session->userdata('user_sess')->email) {
			redirect('Login');
        }else{
            if (@$this->session->userdata('user_sess')->typeUsuario!="Aspirante") {
                redirect('Login');
            }
        }
    }

	public function index()
	{
        $data['user']=$this->session->userdata('user_sess');

        $this->_initialPage($data);
		$this->load->view('Dashboard_pages/Profile/view',$data);
        $this->_finalPage();
        $this->load->view('Dashboard_pages/Profile/viewJS');
        
	}

}
