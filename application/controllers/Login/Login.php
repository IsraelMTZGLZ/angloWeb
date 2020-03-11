<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_RootController {

	public function __construct() {
        parent::__construct();
    }

	public function index()
	{
		$this->load->view('Login/login_view');
	}

}
 
