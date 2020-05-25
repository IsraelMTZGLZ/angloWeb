<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProfileAgente extends MY_RootController {

	public function __construct() {
		parent::__construct();
        if (!@$this->session->userdata('user_sess')->email) {
			redirect('Login');
        }else{
            if (@$this->session->userdata('user_sess')->typeUsuario!="Agente") {
                redirect('Login');
            }
        }
    }

	public function index()
	{
        $data['user']=$this->session->userdata('user_sess');

        $this->_initialPage($data);
		$this->load->view('Dashboard_pages/ProfileAgente/view',$data);
        $this->_finalPage();
        $this->load->view('Dashboard_pages/ProfileAgente/viewJS');
        
    }
    
    public function fotoRedirect()
    {
        $response = $this->_callApiRest('Agente/api/agente/id/'.$this->session->userdata('user_sess')->usuario,null,"GET",null);
        $object = json_decode(json_encode($response['data']), FALSE);
        $this->session->set_userdata('user_sess',$object);
        redirect('Dashboard/ProfileAgente');
    }


}
