<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_RootController {

	public function __construct() {
		parent::__construct();
		require_once APPPATH.'third_party/src/Google_Client.php';
		require_once APPPATH.'third_party/src/contrib/Google_Oauth2Service.php';
		$this->load->library('facebook');
    }

	public function index()
	{
		if (@$this->session->userdata('user_sess')->email) {
			if (@$this->session->userdata('user_sess')->statusU=="Activo") {
				if (@$this->session->userdata('user_sess')->typeUsuario=="Aspirante") {
					if (@$this->session->userdata('user_sess')->aspirante==null) {
						//no ha llenado toda su informacion
						redirect('Dashboard/InformacionAspirante');
					}elseif (@$this->session->userdata('user_sess')->programaDeInteres==null){
						redirect('Dashboard/EleccionUniversidad');
					}else{
						//ha llenado toda su informacion
						redirect('ComingSoon');
					}
				}else if (@$this->session->userdata('user_sess')->typeUsuario=="Agente") {
					# code...
				}else if (@$this->session->userdata('user_sess')->typeUsuario=="Admin") {
					# code...
				}
			}
		}
		unset($_SESSION['blog']);
		$this->load->view('Login/login_view');
	}

	public function Facebook(){
		if($this->facebook->is_authenticated()){
			$userProfile = $this->facebook->request('get', '/me?fields=id,first_name,last_name,email,gender,locale,picture.width(600).height(600)');
			if ($userProfile['id']) {
				$this->facebook->destroy_session();
				redirect('Login');
			}elseif($userProfile['error']){
				$this->session->set_flashdata('facebook','Error');
				$this->facebook->destroy_session();
				redirect('Login');
			}else{
				$this->session->set_flashdata('facebook','Error');
				$this->facebook->destroy_session();
				redirect('Login');
			}
		}	
	}

	public function google_login()
	{
		$clientId = '846059479473-nk4bq494i4lhb247j1rd3b6v8ltkj95s.apps.googleusercontent.com'; //Google client ID
		$clientSecret = 'BrIhlAOnVDeC7QZ7G5dhlbib'; //Google client secret
		//google
		//$redirectURL = 'http://anglopageone.com/Login/Login/google_login/';
		//local
		$redirectURL = 'http://localhost/angloWeb/Login/Login/google_login/';
		
		//Call Google API
		$gClient = new Google_Client();
		$gClient->setApplicationName('Login');
		$gClient->setClientId($clientId);
		$gClient->setClientSecret($clientSecret);
		$gClient->setRedirectUri($redirectURL);
		$gClient->setScopes('profile email');
		$gClient->setApprovalPrompt('force');
		$google_oauthV2 = new Google_Oauth2Service($gClient);
		
		if(isset($_GET['code']))
		{
			$gClient->authenticate($_GET['code']);
			$_SESSION['token'] = $gClient->getAccessToken();
			header('Location: ' . filter_var($redirectURL, FILTER_SANITIZE_URL));
		}

		if (isset($_SESSION['token'])) 
		{
			$gClient->setAccessToken($_SESSION['token']);
		}
		
		if ($gClient->getAccessToken()) {
            $userProfile = $google_oauthV2->userinfo_v2_me->get();
			if ($userProfile['id']) {
				$data=array(
                    "email"=>$userProfile['email'],
                    "token"=>$userProfile['id']
				);
				$data_to_string=json_encode($data);
			//peticiones http
			$curl_request = curl_init("http://localhost/angloApi/User/api/loginPlus");

			curl_setopt($curl_request,CURLOPT_CUSTOMREQUEST,"POST");
			curl_setopt($curl_request,CURLOPT_HTTPHEADER,array(
				"x-api-key: ANGLOKEY",
				"Content-Type: application/json"
			));
			curl_setopt($curl_request,CURLOPT_RETURNTRANSFER,TRUE);
			curl_setopt($curl_request,CURLOPT_POSTFIELDS,$data_to_string);

			$response = curl_exec($curl_request);
			if (!$response) {
				$response= json_encode(array(
					"status"=>curl_error($curl_request),
					"message"=>curl_errno($curl_request)
				));
			}

			curl_close($curl_request);
			$response =json_decode($response);
			echo var_dump($response);

			if ($response->status=="success") {
				//$this->session->set_userdata('user_sess',$response->data);
				//echo var_dump($response->data);
				if ($response->data->statusU=="Activo") {
					//usuario activo
					//echo var_dump($response->data);
					if ($response->data->typeUsuario=="Aspirante") {
						if ($response->data->aspirante==null) {
							//no ha llenado toda su informacion
							$this->session->set_userdata('user_sess',$response->data);
							redirect('Dashboard/InformacionAspirante');
						}elseif (@$response->data->programaDeInteres==null){
							$this->session->set_userdata('user_sess',$response->data);
							redirect('Dashboard/EleccionUniversidad');
						}else{
							//ha llenado toda su informacion
							$this->session->set_userdata('user_sess',$response->data);
							redirect('ComingSoon');
						}
					}else if ($response->data->typeUsuario=="Agente") {
						# code...
					}else if ($response->data->typeUsuario=="Admin") {
						# code...
					}else{
						$this->session->set_flashdata('messagePredeterminado','El usuario tiene algunos problemas comunicate con Anglo Latino Education Partnership.');
						redirect('Login');
					}
				}else{
					//usuario inactivo
					$this->session->set_flashdata('messagePredeterminado','El usuario no tiene permisos de acceso comunicate con Anglo Latino Education Partnership.');
					//redirect('Login');
				}
				//redirect("Dashboard/Home");
			}else{
				$this->session->set_flashdata('message',$response);
				redirect('Login');
			}	
			}elseif($userProfile['error']){
				$this->session->set_flashdata('facebook','Error');
				return redirect('Login');
			}else{
				$this->session->set_flashdata('facebook','Error');
				return redirect('Login');
			}
        } 
		else 
		{
            $url = $gClient->createAuthUrl();
		    header("Location: $url");
            exit;
        }
	}

	public function autenticar()
	{
		if ($this->input->post('email') && $this->input->post('password')) {
			$data= array(
				"email"=>$this->input->post('email'),
				"password"=>$this->input->post('password')
			);
			//decodificar
			$data_to_string=json_encode($data);
			//peticiones http
			$curl_request = curl_init("http://localhost/angloApi/User/api/loginNativo");

			curl_setopt($curl_request,CURLOPT_CUSTOMREQUEST,"POST");
			curl_setopt($curl_request,CURLOPT_HTTPHEADER,array(
				"x-api-key: ANGLOKEY",
				"Content-Type: application/json"
			));
			curl_setopt($curl_request,CURLOPT_RETURNTRANSFER,TRUE);
			curl_setopt($curl_request,CURLOPT_POSTFIELDS,$data_to_string);

			$response = curl_exec($curl_request);
			if (!$response) {
				$response= json_encode(array(
					"status"=>curl_error($curl_request),
					"message"=>curl_errno($curl_request)
				));
			}

			curl_close($curl_request);
			$response =json_decode($response);
			//echo var_dump($response);

			if ($response->status=="success") {
				if ($response->data->statusU=="Activo") {
					//usuario activo
					//echo var_dump($response->data);
					if ($response->data->typeUsuario=="Aspirante") {
						if ($response->data->aspirante==null) {
							//no ha llenado toda su informacion
							$this->session->set_userdata('user_sess',$response->data);
							redirect('Dashboard/InformacionAspirante');
						}elseif (@$response->data->programaDeInteres==null){
							$this->session->set_userdata('user_sess',$response->data);
							redirect('Dashboard/EleccionUniversidad');
						}else{
							//ha llenado toda su informacion
							$this->session->set_userdata('user_sess',$response->data);
							redirect('ComingSoon');
						}
					}else if ($response->data->typeUsuario=="Agente") {
						# code...
					}else if ($response->data->typeUsuario=="Admin") {
						# code...
					}else{
						$this->session->set_flashdata('messagePredeterminado','El usuario tiene algunos problemas comunicate con Anglo Latino Education Partnership.');
						redirect('Login');
					}
				}else{
					//usuario inactivo
					$this->session->set_flashdata('messagePredeterminado','El usuario no tiene permisos de acceso comunicate con Anglo Latino Education Partnership.');
					redirect('Login');
				}
			}else{
				$this->session->set_flashdata('message',$response);
				redirect('Login');
			}	

		}else{
			//flashdata
			$this->session->set_flashdata('message',"No se envio parametros");
			redirect('Login');
		}
		
	}

	function logout()
	{
		$this->session->sess_destroy();
		redirect('Login');
	}

	
}
 
