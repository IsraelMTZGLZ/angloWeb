<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email extends MY_RootController {

	public function __construct() {
        parent::__construct();
        if (!@$this->session->userdata('user_sess')->email) {
			redirect('Login');
        }else{
            if (@$this->session->userdata('user_sess')->typeUsuario!="Admin") {
                redirect('Login');
            }
        }
    }

	public function index()
	{
		$response = $this->_callApiRest('EmailConfig/Api/email/',null,"GET",null);
		$data['email']=$response;
        $data['user']=$this->session->userdata('user_sess');
		$this->_initialPage($data);
		$this->load->view('Dashboard_pages/Email',$data);
		$this->_finalPage();
		$this->load->view('Dashboard_pages/EmailJS');
	}

	public function sendEmail()
	{
		$response =  $this->_callApiRest('EmailConfig/Api/email/',null,"GET",null);
		$email_settings = $response['data'];
        $this->load->library('encryption');
        $this->load->library('email');  

        if($email_settings){
            //Email servidor
            /*$config['mailpath'] = "/usr/sbin/sendmail";
            $config['protocol'] = "sendmail";
            $config['smtp_host'] = "relay-hosting.secureserver.net";
            $config['smtp_user'] = "study@anglopageone.com";
            $config['smtp_pass'] = "Anglo@2020";
            $config['smtp_port'] = "25";
            $config['mailtype'] = "HTML";
            $config['validate'] = "TRUE";
            $this->email->initialize($config);  */
            
            //email from google
            $config['protocol'] = $email_settings['email_protocol'];
            $config['smtp_host'] = "ssl://".$email_settings['email_host'];
            $config['smtp_user'] = $email_settings['email_send'];
            $config['smtp_pass'] = $this->encryption->decrypt($email_settings['email_pass']);
            $config['smtp_port'] = $email_settings['email_port'];
            $config['charset'] = "utf-8";
            $config['mailtype'] = "html";
            $this->email->initialize($config);  
            
            $this->email->set_newline("\r\n");
            
            $this->email->from($email_settings['email_send'],$email_settings['from_email']);
            $this->email->reply_to('study@anglolatinoedu.com');
            $this->email->to('hectori.um.15@gmail.com','hectori.um.15@gmail.com');
            $this->email->subject("Testing");
            $this->email->message('test');
            if($this->email->send()){
                $this->session->set_flashdata('email','Correo enviado correctamente');
                redirect ('Dashboard/Email');
            }else{
                $this->session->set_flashdata('email','No fue posible enviar el correo, email o password incorrecto intenta modificar las configuraciones y si el problema persiste comunicate con los desarrolladores');
                redirect ('Dashboard/Email');
            }
        }else{
            redirect('home');
        }
	}

}
 
