<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registro extends MY_RootController {

	public function __construct() {
		parent::__construct();
		require_once APPPATH.'third_party/src/Google_Client.php';
		require_once APPPATH.'third_party/src/contrib/Google_Oauth2Service.php';
		$this->load->library('facebook');
    }

	public function index()
	{
		$this->load->view('Login/register_view');
	}

	public function Facebook(){
		if($this->facebook->is_authenticated()){
			$userProfile = $this->facebook->request('get', '/me?fields=id,first_name,last_name,email,gender,locale,picture.width(600).height(600)');
			if ($userProfile['id']) {
				$this->facebook->destroy_session();
				return redirect('Login/Registro');
			}elseif($userProfile['error']){
				$this->session->set_flashdata('facebook','Error');
				$this->facebook->destroy_session();
				return redirect('Login/Registro');
			}else{
				$this->session->set_flashdata('facebook','Error');
				$this->facebook->destroy_session();
				return redirect('Login/Registro');
			}
		}	
	}

	public function googleRegister(){
		$clientId = '1'; //Google client ID
		$clientSecret = '1'; //Google client secret
		$redirectURL = 'http://localhost/angloWeb/Login/Registro/google_login/';
		
		//Call Google API
		$gClient = new Google_Client();
		$gClient->setApplicationName('Login');
		$gClient->setClientId($clientId);
		$gClient->setClientSecret($clientSecret);
		$gClient->setRedirectUri($redirectURL);
		$gClient->setScopes('email profile');
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
            $userProfile = $google_oauthV2->userinfo->get();
			echo "<pre>";
			print_r($userProfile);
			die;
        } 
		else 
		{
            $url = $gClient->createAuthUrl();
		    header("Location: $url");
            exit;
        }
	}

}
 
