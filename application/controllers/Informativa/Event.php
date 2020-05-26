<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends MY_RootController {

	public function __construct() {
        parent::__construct();
    }

	public function index()
	{
		unset($_SESSION['blog']);
		$response =  $this->_callApiRest('Eventos/api/eventos/',null,"GET",null);
		$data['eventos'] = $response['data'];
		$this->session->set_flashdata('nav_active','blog');
		$this->_initialInformativa();
		$this->load->view('Informativa_pages/event_view',$data);
		$this->_finalInformativa();
	}

}
