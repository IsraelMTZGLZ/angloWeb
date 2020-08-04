<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AspiranteStatus5 extends MY_RootController {

	public function __construct() {
        parent::__construct();
        if (!@$this->session->userdata('user_sess')->email) {
			redirect('Login');
        }else{
            if (@$this->session->userdata('user_sess')->typeUsuario!="Admin" && @$this->session->userdata('user_sess')->typeUsuario!="Agente" ) {
                redirect('Login');
            }
        }
    }

	public function index()
	{
		unset($_SESSION['blog']);
        $data['user']=$this->session->userdata('user_sess');
        $aspirante = $this->_callApiRest('Aspirante/api/aspiranteByStatus5/',null,"GET",null);
        $data['aspirantes']= $aspirante['data'];   
        $this->_initialPage($data);
        $this->load->view('Dashboard_pages/status5_view',$data);
        $this->_finalPage();
	}

}
