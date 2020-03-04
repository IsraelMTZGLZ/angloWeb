<body>
    <!-- preloader Start -->
    <!-- preloader Start -->
    <div id="preloader">
        <div id="status">
            <img src="https://pa1.narvii.com/6557/19b849c62b3f8e6ef9413f4fe9ac214ae6b99657_hq.gif" id="preloader_image" alt="loader">
        </div>
    </div>
    <div  class="cursor"></div>
    <!-- Top Scroll Start -->
<a href="javascript:" id="return-to-top"><img src="<?=base_url('resources/assets/Informativa/images/scroll.png');?>" alt="img"></a>

<!--Redes sociales bar-->

<div class="icon-bar">
  <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a> 
  <a href="#" class="whatsapp"><i class="fab fa-whatsapp"></i></a> 
  <a href="#" class="google"><i class="fab fa-google"></i></a> 
  <a href="#" class="linkedin"><i class="fab fa-linkedin"></i></a>
  <a href="#" class="youtube"><i class="fab fa-youtube"></i></a> 
</div>


<!--bar idioma-->
<div class="share-bar right"><!-- Set position: top,left,right,bottom -->
  <ul>
    <li class="<?php echo ($this->session->userdata('site_lang') == 'spanish') ? 'spanishActivo' : 'spanish'; ?>">
      <a href="<?php echo base_url(); ?>LanguageSwitcher/switchLang/spanish">
        <i class="flag-icon flag-icon-mx" aria-hidden="true"></i>
      </a>
    </li>
    <li class="<?php echo ($this->session->userdata('site_lang') == 'english') ? 'englishActivo' : 'english'; ?>">
      <a href="<?php echo base_url(); ?>LanguageSwitcher/switchLang/english">
        <i class="flag-icon flag-icon-gb" aria-hidden="true"></i>
      </a>
    </li>
    <li class="idioma">
      <a target="_self">
      <i class="fas fa-language fa-2x" aria-hidden="true"></i>
      </a>
    </li>
  </ul>
</div>

<div class="">
  <div id="iframeHolder"></div>
	<!-- <a href="https://wa.me/5211234567890?text=Me%20gustaría%20saber%20el%20precio%20del%20coche"  id="postYourAdd"  class="whatsapp" target="_blank"><img src="<?=base_url('resources/assets/Informativa/images/england.png');?>" alt="img"></a> -->
<!-- <button id="button"  class="whatsapp" target="_blank"><img src="<?=base_url('resources/assets/Informativa/images/england.png');?>" alt="img">OPEN</button> -->
<button class="chat-open-dialog"> <span class="fa fa-question"></span> </button>
<button class="chat-button-destroy"> <span class="fas fa-window-close fa-2x" style="color: white;"></span> </button>
</div>
    <!-- Top Scroll End -->
    <!-- cp navi wrapper Start -->
	<nav class="cd-dropdown">
        <h2><a href="index.html"><span><img src="<?=base_url('resources/assets/Anglo/LOGOTIPO-AngloLatino.png');?>" alt="img"></span>Anglo</a></h2>
            <a href="#0" class="cd-close"><?=$this->lang->line('close');?></a>
              <ul class="cd-dropdown-content">
                  <li>
                     <form class="cd-search">
                      <input type="search" placeholder="Search...">
                    </form>
               </li>
            <li class="">
                <a href="home"><?=$this->lang->line('home');?></a>
            </li>  
                
			<li class="">
                <a href="#"><?=$this->lang->line('oferta_educativa');?></a>
            </li>
               <!-- .has-children -->
            <li class="has-children">
                <a href="#"><?=$this->lang->line('acerca_de_nosotros');?></a>
                <ul class="cd-secondary-dropdown icon_menu is-hidden">
                    <li class="go-back"><a href="#0"><?=$this->lang->line('menu');?></a></li>
                    <li><a href="our_team.html"><?=$this->lang->line('nosotros');?></a></li>
                    <li><a href="pricing_plans.html"><?=$this->lang->line('servicios');?></a></li>
                </ul>
            </li>
			<li class="">
                <a href="#"><?=$this->lang->line('becasy_apoyos');?></a>
            </li>
			<li class="">
                <a href="#"><?=$this->lang->line('blog');?></a>
            </li>
			<li class="">
                <a href="#"><?=$this->lang->line('contacto');?></a>
            </li>
        </ul>
        <!-- .cd-dropdown-content -->
    </nav>

    <div class="cp_navi_main_wrapper float_left">
        <div class="container-fluid">
            <div class="cp_logo_wrapper">
                <a href="home">
                    <img src="<?=base_url('resources/assets/Informativa/images/logo.png');?>" alt="logo">
                </a>
            </div>
            <!-- mobile menu area start -->
            <header class="mobail_menu d-block d-sm-block d-md-block d-lg-none d-xl-none">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="cd-dropdown-wrapper">
                                <a class="house_toggle" href="#0">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 31.177 31.177" style="enable-background:new 0 0 31.177 31.177;" xml:space="preserve" width="25px" height="25px">
                                        <g>
                                            <g>
                                                <path class="menubar" d="M30.23,1.775H0.946c-0.489,0-0.887-0.398-0.887-0.888S0.457,0,0.946,0H30.23    c0.49,0,0.888,0.398,0.888,0.888S30.72,1.775,30.23,1.775z" fill="#004165" />
                                            </g>
                                            <g>
                                                <path class="menubar" d="M30.23,9.126H12.069c-0.49,0-0.888-0.398-0.888-0.888c0-0.49,0.398-0.888,0.888-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,8.729,30.72,9.126,30.23,9.126z" fill="#004165" />
                                            </g>
                                            <g>
                                                <path class="menubar" d="M30.23,16.477H0.946c-0.489,0-0.887-0.398-0.887-0.888c0-0.49,0.398-0.888,0.887-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,16.079,30.72,16.477,30.23,16.477z" fill="#004165" />
                                            </g>
                                            <g>
                                                <path class="menubar" d="M30.23,23.826H12.069c-0.49,0-0.888-0.396-0.888-0.887c0-0.49,0.398-0.888,0.888-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,23.43,30.72,23.826,30.23,23.826z" fill="#004165" />
                                            </g>
                                            <g>
                                                <path class="menubar" d="M30.23,31.177H0.946c-0.489,0-0.887-0.396-0.887-0.887c0-0.49,0.398-0.888,0.887-0.888H30.23    c0.49,0,0.888,0.398,0.888,0.888C31.118,30.78,30.72,31.177,30.23,31.177z" fill="#004165" />
                                            </g>
                                        </g>
                                    </svg>
                                </a>
                                <!-- .cd-dropdown -->

                            </div>
                        </div>
                    </div>
                </div>
                <!-- .cd-dropdown-wrapper -->
            </header>
            <div class="header_btn top_btn float_left">

                <a href="login_register.html"><?=$this->lang->line('ingresar');?></a>

            </div>

            <div class="jen_search_btn_wrapper d-none d-sm-none d-md-none d-lg-block d-xl-block">
                <!-- extra nav -->
                <div class="extra-nav">
                    <div class="extra-cell">
                        <button id="quik-search-btn" type="button" class="site-button radius-xl"><i class="flaticon-magnifying-glass"></i></button>
                    </div>
                </div>

                <!-- Quik search -->
                <div class="dez-quik-search bg-primary-dark">
                    <form action="#">
                        <input name="search" value="" type="text" class="form-control" placeholder="Type to search...">
                        <span id="quik-search-remove"><i class="fas fa-times"></i></span>
                    </form>
                </div>
            </div>

            <div class="cp_navigation_wrapper">
                <div class="mainmenu d-xl-block d-lg-block d-md-none d-sm-none d-none">
                    <ul class="main_nav_ul">
                         <li class="has-mega gc_main_navigation"><a href="home" class="gc_main_navigation"><?=$this->lang->line('home');?></a>
                        </li>
                        <li class="has-mega gc_main_navigation"><a href="#" class="gc_main_navigation"><?=$this->lang->line('oferta_educativa');?></a>
                        </li>
                        <li class="has-mega gc_main_navigation"><a href="#" class="gc_main_navigation"><?=$this->lang->line('acerca_de_nosotros');?></a>
                            <ul class="navi_2_dropdown">
                                <li>
                                   <a href="pricing_plans.html"> <i class="fas fa-caret-right"></i><?=$this->lang->line('nosotros');?></a>
                                </li>
                                <li class="parent">
                                    <a href="login_register.html"> <i class="fas fa-caret-right"></i><?=$this->lang->line('servicios');?></a>
                                </li>
                            </ul>
                        </li>

                        <li class="has-mega gc_main_navigation"><a href="#" class="gc_main_navigation"><?=$this->lang->line('becasy_apoyos');?></a>
                        </li>
                        <li class="has-mega gc_main_navigation"><a href="#" class="gc_main_navigation"><?=$this->lang->line('blog');?></a>
                        </li>
                        <li class="has-mega gc_main_navigation"><a href="#" class="gc_main_navigation"><?=$this->lang->line('contacto');?></a>
                        </li>

                    </ul>
                </div>
                <!-- mainmenu end -->
            </div>
        </div>
    </div>


     <!-- chat start-->
    <div class="chat-popup">
   <div class="chat-windows">
     <div class="chat-window-one">
       <div class="chat-header">
         <h4>Need Help?</h4>
         <form id="chatForm">
           <table class="webchat-config">
             <tbody>
             <tr>
               <td><input type="text" id="firstName" value="" placeholder="Your Name"/></td>
             </tr>
             <tr>
               <td><input type="text" id="agentEmail" value="" placeholder="Your Email"/></td>
             </tr>
             </tbody>
           </table>
         </form>
         <button class="chat-button-start fa-commenting-o fa" type="button" onclick="startEmbeddedChat()"> <span>Chat Now</span> </button>
       </div>
       <div class="chat-phone-number">
         <small>Available Mon-Fri <br>
         10pm-5pm EST</small>
         646-491-6500
       </div>
     </div>
     <div class="chat-window-two">
       <div id="chatContainer" style="height: 600px;">
       <iframe width="370" height="455" allow="microphone;" src="https://console.dialogflow.com/api-client/demo/embedded/88670589-0d1c-4d08-9ca8-0df56768162f"></iframe>
       </div>
     </div>
   </div>
 </div>