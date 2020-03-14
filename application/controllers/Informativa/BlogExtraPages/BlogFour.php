<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BlogFour extends MY_RootController {

	public function __construct() {
        parent::__construct();
    }

	public function index()
	{
		$this->_initialInformativa();
		$this->load->view('Informativa_pages/BlogExtraPages/blog_view_four');
		$this->_finalInformativa();
	}

}
