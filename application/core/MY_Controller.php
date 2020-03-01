<?php
if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );

class MY_RootController extends CI_Controller {
	
    public function __construct() {
        parent::__construct();
    }

    public function _initialPage() {
    	$this->load->view('Dashboard_esential/head');
        $this->load->view('Dashboard_esential/nav');
        $this->load->view('Dashboard_esential/menu');
    }

    public function _finalPage(){
        $this->load->view('Dashboard_esential/footer');
    }

    public function _initialInformativa()
    {
        $this->load->view('Informativa_esential/head');
        $this->load->view('Informativa_esential/nav');
    }

    public function _finalInformativa(){
        $this->load->view('Informativa_esential/footer');
    }

}
