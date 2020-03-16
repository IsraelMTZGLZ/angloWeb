<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BlogFive extends MY_RootController {

	public function __construct() {
        parent::__construct();
    }

	public function index()
	{
		$this->session->set_flashdata('blog','idioma');
		$this->session->set_flashdata('nav_active','about');
		$this->_initialInformativa();
		$this->load->view('Informativa_pages/BlogExtraPages/blog_view_five');
		$this->_finalInformativa();
	}

}
