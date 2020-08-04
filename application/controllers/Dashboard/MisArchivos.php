<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MisArchivos extends MY_RootController {

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

        if($data['user']->programaDeInteres=="Universidad"){
            $response = $this->_callApiRest('AspiranteUniversidades/api/aspiranteUniversidadesBYAspirante/id/'.$this->session->userdata('user_sess')->aspirante,null,"GET",null);
            $data['infoAspiranteUni'] = $response['data'];

            $responseUnis = $this->_callApiRest('AspiranteUniversidades/api/aspiranteInstitucionesBYAspiranteUni/id/'.$response['data']['idAspiranteUniversidad'],null,"GET",null);
            $data['universidades'] = $responseUnis['data'];

            if($data['infoAspiranteUni']['estudiosAspiranteUniversidad']=="Carrera"){
                $boleta = $this->_callApiRest('Documentos/Carrera/api/carreraByAspiranteBoleta/id/'.$this->session->userdata('user_sess')->aspirante,null,"GET",null);
                $boletatraduccion = $this->_callApiRest('Documentos/Carrera/api/carreraByAspiranteBoletaTRaduccion/id/'.$this->session->userdata('user_sess')->aspirante,null,"GET",null);
                $cartaMotivo = $this->_callApiRest('Documentos/Carrera/api/carreraByAspiranteCartaMotivo/id/'.$this->session->userdata('user_sess')->aspirante,null,"GET",null);
                $pasaporte = $this->_callApiRest('Documentos/Carrera/api/carreraByAspirantePasaporte/id/'.$this->session->userdata('user_sess')->aspirante,null,"GET",null);
                $cartasRecomendacion = $this->_callApiRest('Documentos/Carrera/api/cartaRecomen/id/'.$this->session->userdata('user_sess')->aspirante,null,"GET",null);
                $cartasAutorizacon = $this->_callApiRest('Documentos/Carrera/api/cartaAuto/id/'.$this->session->userdata('user_sess')->aspirante,null,"GET",null);

                //$cartasRecomendacion = $this->_callApiRest('Documentos/Carrera/api/test/id/'.$this->session->userdata('user_sess')->aspirante,null,"GET",null);
                //$cartasAutorizacon = $this->_callApiRest('Documentos/Carrera/api/carreraCartaAutorizacion/id/'.$this->session->userdata('user_sess')->aspirante,null,"GET",null);

                if ($boletatraduccion['data']) {
                    for($i=0;$i<count($boletatraduccion['data']);$i++){
                        $test = $boletatraduccion['data'][$i]['nameDocumento'];
                        $new = explode('.',$test); 
                        if($new[0]=='Boleta Traducida'){
                            $data['boletaTraduccion'] = true;
                            break;
                        }
                        
                    }
                }
                

                $data['boleta'] = $boleta['data'];
                $data['cartaMotivo'] = $cartaMotivo['data'];
                $data['pasaporte'] = $pasaporte['data'];
                $data['cartasRecomendacion'] = $cartasRecomendacion['data'];
                $data['cartasAutorizacon'] = $cartasAutorizacon['data'];

                $examen = $this->_callApiRest('Documentos/Carrera/api/examenIngles/id/'.$this->session->userdata('user_sess')->aspirante,null,"GET",null);
                $data['examenIngles'] = $examen['data'];

                $boletaFinal = $this->_callApiRest('Documentos/Carrera/api/boletaFinal/id/'.$this->session->userdata('user_sess')->aspirante,null,"GET",null);
                $data['boletaFinal'] = $boletaFinal['data'];

                //$visa = $this->_callApiRest('Documentos/Carrera/api/visa/id/'.$this->session->userdata('user_sess')->aspirante,null,"GET",null);
                //$data['visa'] = $visa['data'];
            
            }else if($data['infoAspiranteUni']['estudiosAspiranteUniversidad']=="Masters"){
                $transcripcon = $this->_callApiRest('Documentos/Maestria/api/maestriaByAspiranteTRansc/id/'.$this->session->userdata('user_sess')->aspirante,null,"GET",null);
                $transTraduccion = $this->_callApiRest('Documentos/Maestria/api/carreraByAspiranteTransRaduccion/id/'.$this->session->userdata('user_sess')->aspirante,null,"GET",null);
                
                if ($transTraduccion['data']) {
                    for($i=0;$i<count($transTraduccion['data']);$i++){
                        $test = $transTraduccion['data'][$i]['nameDocumento'];
                        $new = explode('.',$test); 
                        if($new[0]=='Transcripcion Traducida'){
                            $data['transcripcionTraduccion'] = true;
                            break;
                        }
                        
                    }
                }

                $cartasMotivos = $this->_callApiRest('Documentos/Maestria/api/cartasMotivosUnis/id/'.$this->session->userdata('user_sess')->aspirante,null,"GET",null);
                $cartasRecomendacionPrimeras = $this->_callApiRest('Documentos/Maestria/api/cartasRecomendacionUnisPrimera/id/'.$this->session->userdata('user_sess')->aspirante,null,"GET",null);
                $cartasRecomendacionSegunda = $this->_callApiRest('Documentos/Maestria/api/cartasRecomendacionUnisSegunda/id/'.$this->session->userdata('user_sess')->aspirante,null,"GET",null);
                $cartasAutorizacon = $this->_callApiRest('Documentos/Carrera/api/cartaAuto/id/'.$this->session->userdata('user_sess')->aspirante,null,"GET",null);
                $pasaporte = $this->_callApiRest('Documentos/Carrera/api/carreraByAspirantePasaporte/id/'.$this->session->userdata('user_sess')->aspirante,null,"GET",null);


                $data['transcripcion'] = $transcripcon['data'];
                $data['cartasMotivos'] = $cartasMotivos['data'];
                $data['cartasRecomendacionPrimeras'] = $cartasRecomendacionPrimeras['data'];
                $data['cartasRecomendacionSegundas'] = $cartasRecomendacionSegunda['data'];
                $data['cartasAutorizacon'] = $cartasAutorizacon['data'];
                $data['pasaporte'] = $pasaporte['data'];

                $examen = $this->_callApiRest('Documentos/Carrera/api/examenIngles/id/'.$this->session->userdata('user_sess')->aspirante,null,"GET",null);
                $data['examenIngles'] = $examen['data'];

                $transfinal = $this->_callApiRest('Documentos/Maestria/api/transcripcionFinal/id/'.$this->session->userdata('user_sess')->aspirante,null,"GET",null);
                $data['transFinal'] = $transfinal['data'];

                $titulo = $this->_callApiRest('Documentos/Maestria/api/titulo/id/'.$this->session->userdata('user_sess')->aspirante,null,"GET",null);
                $data['titulo'] = $titulo['data'];

                $ATAS = $this->_callApiRest('Documentos/Maestria/api/ATAS/id/'.$this->session->userdata('user_sess')->aspirante,null,"GET",null);
                $data['ATAS'] = $ATAS['data'];

                //$visa = $this->_callApiRest('Documentos/Carrera/api/visa/id/'.$this->session->userdata('user_sess')->aspirante,null,"GET",null);
                //$data['visa'] = $visa['data'];

            }else{
                $propuesta = $this->_callApiRest('Documentos/PhD/api/propuesta/id/'.$this->session->userdata('user_sess')->aspirante,null,"GET",null);
                $data['propuesta'] = $propuesta['data'];

                $transcripcon = $this->_callApiRest('Documentos/Maestria/api/maestriaByAspiranteTRansc/id/'.$this->session->userdata('user_sess')->aspirante,null,"GET",null);
                $transTraduccion = $this->_callApiRest('Documentos/Maestria/api/carreraByAspiranteTransRaduccion/id/'.$this->session->userdata('user_sess')->aspirante,null,"GET",null);
                
                if ($transTraduccion['data']) {
                    for($i=0;$i<count($transTraduccion['data']);$i++){
                        $test = $transTraduccion['data'][$i]['nameDocumento'];
                        $new = explode('.',$test); 
                        if($new[0]=='Transcripcion Traducida'){
                            $data['transcripcionTraduccion'] = true;
                            break;
                        }
                        
                    }
                }
                
                $data['transcripcion'] = $transcripcon['data'];

                $cv = $this->_callApiRest('Documentos/PhD/api/cv/id/'.$this->session->userdata('user_sess')->aspirante,null,"GET",null);
                $data['cv'] = $cv['data'];

                $pasaporte = $this->_callApiRest('Documentos/Carrera/api/carreraByAspirantePasaporte/id/'.$this->session->userdata('user_sess')->aspirante,null,"GET",null);
                $data['pasaporte'] = $pasaporte['data'];

                $cartasRecomendacionPrimeras = $this->_callApiRest('Documentos/Maestria/api/cartasRecomendacionUnisPrimera/id/'.$this->session->userdata('user_sess')->aspirante,null,"GET",null);
                $cartasRecomendacionSegunda = $this->_callApiRest('Documentos/Maestria/api/cartasRecomendacionUnisSegunda/id/'.$this->session->userdata('user_sess')->aspirante,null,"GET",null);

                $data['cartasRecomendacionPrimeras'] = $cartasRecomendacionPrimeras['data'];
                $data['cartasRecomendacionSegundas'] = $cartasRecomendacionSegunda['data'];

                $cartasAutorizacon = $this->_callApiRest('Documentos/Carrera/api/cartaAuto/id/'.$this->session->userdata('user_sess')->aspirante,null,"GET",null);
                $data['cartasAutorizacon'] = $cartasAutorizacon['data'];

                $examen = $this->_callApiRest('Documentos/Carrera/api/examenIngles/id/'.$this->session->userdata('user_sess')->aspirante,null,"GET",null);
                $data['examenIngles'] = $examen['data'];

                $transfinal = $this->_callApiRest('Documentos/Maestria/api/transcripcionFinal/id/'.$this->session->userdata('user_sess')->aspirante,null,"GET",null);
                $data['transFinal'] = $transfinal['data'];

                $titulo = $this->_callApiRest('Documentos/Maestria/api/titulo/id/'.$this->session->userdata('user_sess')->aspirante,null,"GET",null);
                $data['titulo'] = $titulo['data'];

                $ATAS = $this->_callApiRest('Documentos/Maestria/api/ATAS/id/'.$this->session->userdata('user_sess')->aspirante,null,"GET",null);
                $data['ATAS'] = $ATAS['data'];

                //$visa = $this->_callApiRest('Documentos/Carrera/api/visa/id/'.$this->session->userdata('user_sess')->aspirante,null,"GET",null);
                //$data['visa'] = $visa['data'];

            }

            $response = $this->_callApiRest('Documentos/Carrera/api/carreraByAspiranteOnly/id/'.$this->session->userdata('user_sess')->aspirante,null,"GET",null);
            $data['documentos'] = $response['data'];

            $n = $this->eliminar_acentos($this->session->userdata('user_sess')->aspiranteIdCarpeta);
            $data['carpetaName'] = $n;
        }else if($data['user']->programaDeInteres=="Preparatoria"){

            $response = $this->_callApiRest('AspirantePreparatorias/api/aspirantePreparatoriasBYAspirante/id/'.$this->session->userdata('user_sess')->aspirante,null,"GET",null);
            $data['infoAspirantePrepa'] = $response['data'];

            $responsePrepas = $this->_callApiRest('AspirantePreparatorias/api/aspiranteInstitucionesBYAspirantePrepa/id/'.$response['data']['idAspirantePreparatoria'],null,"GET",null);
            $data['preparatorias'] = $responsePrepas['data'];

            //documentos
            $pasaporte = $this->_callApiRest('Documentos/Carrera/api/carreraByAspirantePasaporte/id/'.$this->session->userdata('user_sess')->aspirante,null,"GET",null);
            $data['pasaporte'] = $pasaporte['data'];

            $boleta = $this->_callApiRest('Documentos/Carrera/api/carreraByAspiranteBoleta/id/'.$this->session->userdata('user_sess')->aspirante,null,"GET",null);
            $boletatraduccion = $this->_callApiRest('Documentos/Carrera/api/carreraByAspiranteBoletaTRaduccion/id/'.$this->session->userdata('user_sess')->aspirante,null,"GET",null);
            
            if ($boletatraduccion['data']) {
                for($i=0;$i<count($boletatraduccion['data']);$i++){
                    $test = $boletatraduccion['data'][$i]['nameDocumento'];
                    $new = explode('.',$test); 
                    if($new[0]=='Boleta Traducida'){
                        $data['boletaTraduccion'] = true;
                        break;
                    }
                    
                }
            }
            

            $data['boleta'] = $boleta['data'];

            $cartaMotivo = $this->_callApiRest('Documentos/Carrera/api/carreraByAspiranteCartaMotivo/id/'.$this->session->userdata('user_sess')->aspirante,null,"GET",null);
            $data['cartaMotivo'] = $cartaMotivo['data'];
           
            $response = $this->_callApiRest('Documentos/Carrera/api/carreraByAspiranteOnly/id/'.$this->session->userdata('user_sess')->aspirante,null,"GET",null);
            $data['documentos'] = $response['data'];

            $cartasRecomendacion = $this->_callApiRest('Documentos/Carrera/api/cartaRecomen/id/'.$this->session->userdata('user_sess')->aspirante,null,"GET",null);
            $data['cartasRecomendacion'] = $cartasRecomendacion['data'];

            $cartasAutorizacon = $this->_callApiRest('Documentos/Carrera/api/cartaAuto/id/'.$this->session->userdata('user_sess')->aspirante,null,"GET",null);
            $data['cartasAutorizacon'] = $cartasAutorizacon['data'];

            $formatoSolicitud = $this->_callApiRest('Documentos/Preparatoria/api/formatoSolicitud/id/'.$this->session->userdata('user_sess')->aspirante,null,"GET",null);
            $data['formatoSolicitud'] = $formatoSolicitud['data'];

            $n = $this->eliminar_acentos($this->session->userdata('user_sess')->aspiranteIdCarpeta);
            $data['carpetaName'] = $n;
        }

        $responseDocs = $this->_callApiRest('Documentos/Carrera/api/documentosAgentesByAspirante/id/'.$this->session->userdata('user_sess')->aspirante,null,"GET",null);
        $data['documentosAspirantes'] = $responseDocs['data'];

        $examen = $this->_callApiRest('Documentos/Carrera/api/examenIngles/id/'.$this->session->userdata('user_sess')->aspirante,null,"GET",null);
        $data['examenIngles'] = $examen['data'];

        $boletaFinal = $this->_callApiRest('Documentos/Carrera/api/boletaFinal/id/'.$this->session->userdata('user_sess')->aspirante,null,"GET",null);
        $data['boletaFinal'] = $boletaFinal['data'];

        //$visa = $this->_callApiRest('Documentos/Carrera/api/visa/id/'.$this->session->userdata('user_sess')->aspirante,null,"GET",null);
        //$data['visa'] = $visa['data'];

        $aV = $this->_callApiRest('Documentos/Carrera/api/aplicacionVisa/id/'.$this->session->userdata('user_sess')->aspirante,null,"GET",null);
        $data['aplicaionVisa'] = $aV['data'];
        
        if($data['user']->statusAspirante=="4U"){

        }
        
        $responseNBA = $this->_callApiRest('Aspirante/api/generarBecasNecesidades/id/'.$this->session->userdata('user_sess')->aspirante,null,"GET",null);
        $data['necesidadesBecas'] = $responseNBA['data'];

        $visa = $this->_callApiRest('Documentos/Carrera/api/visa/id/'.$this->session->userdata('user_sess')->aspirante,null,"GET",null);
        $data['visa'] = $visa['data'];

        $ATASSelecion = $this->_callApiRest('Aspirante/api/ATASSeleccion/id/'.$this->session->userdata('user_sess')->aspirante,null,"GET",null);
        $data['ATASSELECION'] = $ATASSelecion['data'];

        $ATAS = $this->_callApiRest('Documentos/Carrera/api/ATAS/id/'.$this->session->userdata('user_sess')->aspirante,null,"GET",null);
        $data['ATAS'] = $ATAS['data'];

        $BECASSELECION = $this->_callApiRest('Aspirante/api/BECASSeleccion/id/'.$this->session->userdata('user_sess')->aspirante,null,"GET",null);
        $data['BECASSELECION'] = $BECASSELECION['data'];

        $this->_initialPage($data);
		$this->load->view('Dashboard_pages/Archivos/view',$data);
        $this->_finalPage();
        $this->load->view('Dashboard_pages/Archivos/viewJS');
        
    }
    
    function eliminar_acentos($cadena){
		
		//Reemplazamos la A y a
		$cadena = str_replace(
		array('Á', 'À', 'Â', 'Ä', 'á', 'à', 'ä', 'â', 'ª'),
		array('A', 'A', 'A', 'A', 'a', 'a', 'a', 'a', 'a'),
		$cadena
		);

		//Reemplazamos la E y e
		$cadena = str_replace(
		array('É', 'È', 'Ê', 'Ë', 'é', 'è', 'ë', 'ê'),
		array('E', 'E', 'E', 'E', 'e', 'e', 'e', 'e'),
		$cadena );

		//Reemplazamos la I y i
		$cadena = str_replace(
		array('Í', 'Ì', 'Ï', 'Î', 'í', 'ì', 'ï', 'î'),
		array('I', 'I', 'I', 'I', 'i', 'i', 'i', 'i'),
		$cadena );

		//Reemplazamos la O y o
		$cadena = str_replace(
		array('Ó', 'Ò', 'Ö', 'Ô', 'ó', 'ò', 'ö', 'ô'),
		array('O', 'O', 'O', 'O', 'o', 'o', 'o', 'o'),
		$cadena );

		//Reemplazamos la U y u
		$cadena = str_replace(
		array('Ú', 'Ù', 'Û', 'Ü', 'ú', 'ù', 'ü', 'û'),
		array('U', 'U', 'U', 'U', 'u', 'u', 'u', 'u'),
		$cadena );

		//Reemplazamos la N, n, C y c
		$cadena = str_replace(
		array('Ñ', 'ñ', 'Ç', 'ç'),
		array('N', 'n', 'C', 'c'),
		$cadena
		);
		
		return $cadena;
	}

}
