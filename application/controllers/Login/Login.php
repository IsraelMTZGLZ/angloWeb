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
		unset($_SESSION['blog']);
		$this->load->view('Login/login_view');
	}

	public function Facebook(){
		if($this->facebook->is_authenticated()){
			$userProfile = $this->facebook->request('get', '/me?fields=id,first_name,last_name,email,gender,locale,picture.width(600).height(600)');
			if ($userProfile['id']) {
				$this->facebook->destroy_session();
				redirect('Login/Login');
			}elseif($userProfile['error']){
				$this->session->set_flashdata('facebook','Error');
				$this->facebook->destroy_session();
				redirect('Login/Login');
			}else{
				$this->session->set_flashdata('facebook','Error');
				$this->facebook->destroy_session();
				redirect('Login/Login');
			}
		}	
	}

	public function google_login()
	{
		$clientId = '1'; //Google client ID
		$clientSecret = '1'; //Google client secret
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
 
