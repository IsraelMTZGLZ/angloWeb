<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Informativa extends MY_RootController {

	public function __construct() {
        parent::__construct();
    }

	public function index()
	{
		$this->_initialInformativa();
		$this->load->view('informativa');
		$this->_finalInformativa();
	}

	
}
 
