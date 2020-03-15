<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends MY_RootController {

	public function __construct() {
        parent::__construct();
    }

	public function index()
	{
		unset($_SESSION['blog']);
		$this->_initialInformativa();
		$this->load->view('Informativa_pages/blog_view');
		$this->_finalInformativa();
	}

}
