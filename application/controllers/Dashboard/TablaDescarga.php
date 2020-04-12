<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TablaDescarga extends MY_RootController {

	public function __construct() {
        parent::__construct();
        //redirect('Login');
		//if (!@$this->session->userdata('user_sess')->email) {
			//redirect('Login');
        //}
    }

	public function index()
	{
		unset($_SESSION['blog']);
        $data['user']=$this->session->userdata('user_sess');
        $this->_initialPage($data);
        $this->load->view('Dashboard_pages/tablaDescarga_view',$data);
        $this->_finalPage();
	}
	
}
 
