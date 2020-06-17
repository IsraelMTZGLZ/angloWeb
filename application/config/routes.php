<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Redirect';
$route['404_override'] = 'Show404';
$route['translate_uri_dashes'] = FALSE;
$route['Home'] = 'Informativa/home';
$route['OfertaEducativa'] = 'Informativa/OfertaEducativa/Universidades';
$route['About'] = 'Informativa/About';
$route['Services'] = 'Informativa/Services';
$route['Blog'] = 'Informativa/Blog';
$route['Event'] = 'Informativa/Event';
$route['Contacto'] = 'Informativa/Contacto';
$route['Becas'] = 'Informativa/Becas';
$route['Login'] = 'Login/Login';
$route['Login/Facebook'] = 'Login/Login/llamarFacebook';
$route['Login/google_login'] = 'Login/Login/google_login';
$route['Login/forgotPassword'] = 'Login/ForgotPassword';
$route['Registro'] = 'Login/Registro';
$route['Registro/googleRegister'] = 'Login/Registro/googleRegister';
$route['Language/spanish'] = 'LanguageSwitcher/switchLang/spanish';
$route['Language/english'] = 'LanguageSwitcher/switchLang/english';
$route['Blog/Brexit'] = 'Informativa/BlogExtraPages/BlogOne';
$route['Blog/Beneficios'] = 'Informativa/BlogExtraPages/BlogTwo';
$route['Blog/Accesible'] = 'Informativa/BlogExtraPages/BlogThree';
$route['Blog/Certificado'] = 'Informativa/BlogExtraPages/BlogFour';
$route['Blog/Why'] = 'Informativa/BlogExtraPages/BlogFive';
$route['VeranoSteps'] = 'Dashboard/Verano/TestTwo';
$route['VeranoInfo'] = 'Dashboard/Verano/AspirantePage';
$route['VeranoEleccion'] = 'Dashboard/Verano/EleccionVerano';
$route['AspiranteInfoAcademic'] = 'Dashboard/Verano/AspiranteAcademico';
$route['EnglishSteps'] = 'Dashboard/Ingles/StepsEnglish';
$route['EnglishInst'] = 'Dashboard/Ingles/StepInst';
$route['AspiranteInfo'] = 'Dashboard/Ingles/AspiranteInfo';
$route['AspiranteEnglish'] = 'Dashboard/Ingles/AspirantePage';
$route['AspirantesList'] = 'Dashboard/Ingles/ListEnglish';
<<<<<<< HEAD
$route['StatusUno'] = 'Dashboard/Ingles/StatusUno';
$route['StatusDos'] = 'Dashboard/Ingles/StatusDos';
$route['StatusCero'] = 'Dashboard/Ingles/StatusCero';
$route['HomeAgente'] = 'Dashboard/HomeAgente';
=======
$route['Dashboard/DetailsAspirante(:any)'] = 'Dashboard/DetailsAspirante/index/$1';
>>>>>>> 2e7c36db56dfc71b00797d1dadb043e0b9b27621
