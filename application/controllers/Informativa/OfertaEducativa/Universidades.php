<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Universidades extends MY_RootController {

	public function __construct() {
        parent::__construct();
    }

	public function index()
	{
		unset($_SESSION['blog']);
		$this->session->set_flashdata('nav_active','about');
		$this->_initialInformativa();
		$this->load->view('Informativa_pages/OfertaEducativa/universidades_view');
		$this->_finalInformativa();
	}

}
