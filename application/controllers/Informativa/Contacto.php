<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contacto extends MY_RootController {

	public function __construct() {
        parent::__construct();
    }

	public function index()
	{
        unset($_SESSION['blog']);
        $this->_initialInformativa();
        $this->load->view('Informativa_pages/contacto_extras/contacto_librarias_view');
		$this->load->view('Informativa_pages/contacto_view');
        $this->_finalInformativa();
        $this->load->view('Informativa_pages/contacto_extras/contactoJS');
	}

}
 
