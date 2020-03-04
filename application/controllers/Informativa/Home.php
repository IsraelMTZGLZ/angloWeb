<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_RootController {

	public function __construct() {
        parent::__construct();
    }

	public function index()
	{
		$this->_initialInformativa();
		$this->load->view('Informativa_pages/home_view');
		$this->_finalInformativa();
	}

}
 
