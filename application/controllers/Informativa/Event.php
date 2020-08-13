<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends MY_RootController {

	public function __construct() {
        parent::__construct();
    }

	public function index()
	{
		unset($_SESSION['blog']);
		$this->session->set_flashdata('nav_active','event');
		$this->_initialInformativa();
		$this->load->view('Informativa_pages/event_view');
		$this->_finalInformativa();
	}

}
