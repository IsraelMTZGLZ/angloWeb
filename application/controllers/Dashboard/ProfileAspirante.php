<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProfileAspirante extends MY_RootController {

	public function __construct() {
		parent::__construct();
        if (!@$this->session->userdata('user_sess')->email) {
			redirect('Login');
        }else{
            if (@$this->session->userdata('user_sess')->typeUsuario!="Aspirante") {
                redirect('Login');
            }
        }
    }

	public function index()
	{
        $data['user']=$this->session->userdata('user_sess');

        $ch = curl_init();

		curl_setopt($ch, CURLOPT_URL, "https://restcountries.eu/rest/v2/region/Americas?fields=name;callingCodes");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$res = json_decode(curl_exec($ch),true);
		
		curl_close($ch);
		//echo var_dump($res[0]['callingCodes'][0]);
		$data['countries']=$res;

        if($data['user']->programaDeInteres=="Universidad"){
            //infromcion llenada por el aspirante con el año de ingreso por ejemplo, la facultad
            $response = $this->_callApiRest('AspiranteUniversidades/api/aspiranteUniversidadesBYAspirante/id/'.$this->session->userdata('user_sess')->aspirante,null,"GET",null);
            $data['infoAspiranteUni'] = $response['data'];
        
            $responseUnis = $this->_callApiRest('AspiranteUniversidades/api/aspiranteInstitucionesBYAspiranteUni/id/'.$response['data']['idAspiranteUniversidad'],null,"GET",null);
            $data['universidades'] = $responseUnis['data'];

        }else if($data['user']->programaDeInteres=="Preparatoria"){

            $response = $this->_callApiRest('AspirantePreparatorias/api/aspirantePreparatoriasBYAspirante/id/'.$this->session->userdata('user_sess')->aspirante,null,"GET",null);
            $data['infoAspirantePrepa'] = $response['data'];

            $responsePrepas = $this->_callApiRest('AspirantePreparatorias/api/aspiranteInstitucionesBYAspirantePrepa/id/'.$response['data']['idAspirantePreparatoria'],null,"GET",null);
            $data['preparatorias'] = $responsePrepas['data'];

        }

        $this->_initialPage($data);
		$this->load->view('Dashboard_pages/Profile/view',$data);
        $this->_finalPage();
        $this->load->view('Dashboard_pages/Profile/viewJS');
        
    }
    
    public function fotoRedirect()
    {
        $response = $this->_callApiRest('Aspirante/api/aspirante/id/'.$this->session->userdata('user_sess')->usuario,null,"GET",null);
		$object = json_decode(json_encode($response['data']), FALSE);
        $this->session->set_userdata('user_sess',$object);
        redirect('Dashboard/ProfileAspirante');
    }


}
