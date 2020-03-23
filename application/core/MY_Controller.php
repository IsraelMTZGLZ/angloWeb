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

    public function _callApiRest($endPoint, $data = NULL, $method, $pAPIKey = NULL) {
	    $response = array();
        switch ($method){
            case "POST":
                $dataToString = json_encode($data ? $data : array());
                //api pagina
                //$curlRequest = curl_init("http://angloapi.anglopageone.com/".$endPoint);
                //api local
                $curlRequest = curl_init("http://localhost/angloApi/".$endPoint);

                curl_setopt($curlRequest, CURLOPT_CUSTOMREQUEST, $method);
                curl_setopt($curlRequest, CURLOPT_HTTPHEADER, array(
                        'X-API-KEY: ANGLOKEY',
                        'Content-Type: application/json',
                        'Content-Length: ' . strlen($dataToString))
                );

                curl_setopt($curlRequest, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($curlRequest, CURLOPT_POSTFIELDS, $dataToString);

                $response = curl_exec($curlRequest);

                if (!$response) {
                    $response = json_encode(array(
                        'error' => curl_error($curlRequest),
                        'code' => curl_errno($curlRequest)
                    ));
                }

                curl_close($curlRequest);

                break;
            case "GET":

                $queryString = http_build_query( $data ? $data : array() );

                //api web
                //$curlRequest = curl_init("http://angloapi.anglopageone.com/".$endPoint."?".$queryString);
                //api local
                $curlRequest = curl_init("http://localhost/angloApi/".$endPoint."?".$queryString);
                curl_setopt($curlRequest, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($curlRequest, CURLOPT_HTTPHEADER, array(
                        'X-API-KEY: QWERTY' ,
                        'Content-Type: application/json')
                );

                $response = curl_exec($curlRequest);
                if(!$response){
                    $response = json_encode(array(
                        'error' => curl_error($curlRequest),
                        'code' => curl_errno($curlRequest)
                    ));
                }

                curl_close($curlRequest);
                break;
            case "PUT":
                break;
            case "DELETE":
                break;
            default:
                break;
        }
        $response = json_decode($response, true);
        return $response;

    }

}
