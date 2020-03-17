<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Becas extends MY_RootController {

	public function __construct() {
        parent::__construct();
    }

	public function index()
	{
		unset($_SESSION['blog']);
		$this->session->set_flashdata('nav_active','becas');
		$this->_initialInformativa();
		$this->load->view('Informativa_pages/becas_view');
		$this->_finalInformativa();
	}

}
