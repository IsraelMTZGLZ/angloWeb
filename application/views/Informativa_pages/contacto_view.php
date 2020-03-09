


<div class="inner_top_header">
    <div class="counter_overlay"></div>
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
                <a href="home"><?=$this->lang->line('home_nav');?></a>
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
			<li class="active">
                <a href="Contacto"><?=$this->lang->line('contacto');?></a>
            </li>
        </ul>
        <!-- .cd-dropdown-content -->
    </nav>
    <div class="cp_navi_main_wrapper float_left">
        <div class="container-fluid">
            <div class="cp_logo_wrapper">
                <a href="home">
                    <img src="<?=base_url('resources/assets/Anglo/AngloLatino-sintexto.png');?>" alt="" style="height: 50px !important">
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
                         <li class="has-mega gc_main_navigation"><a href="home" class="gc_main_navigation"><?=$this->lang->line('home_nav');?></a>
                        </li>
                        <li class="has-mega gc_main_navigation"><a href="#" class="gc_main_navigation"><?=$this->lang->line('oferta_educativa');?></a>
                        </li>
                        <li class="has-mega gc_main_navigation"><a href="#" class="gc_main_navigation"><?=$this->lang->line('acerca_de_nosotros');?></a>
                            <ul class="navi_2_dropdown">
                                <li>
                                   <a href="About"> <i class="fas fa-caret-right"></i><?=$this->lang->line('nosotros');?></a>
                                </li>
                                <li class="parent">
                                    <a href="Services"> <i class="fas fa-caret-right"></i><?=$this->lang->line('servicios');?></a>
                                </li>
                            </ul>
                        </li>

                        <li class="has-mega gc_main_navigation"><a href="#" class="gc_main_navigation"><?=$this->lang->line('becasy_apoyos');?></a>
                        </li>
                        <li class="has-mega gc_main_navigation"><a href="#" class="gc_main_navigation"><?=$this->lang->line('blog');?></a>
                        </li>
                        <li class="has-mega gc_main_navigation active"><a href="Contacto" class="gc_main_navigation"><?=$this->lang->line('contacto');?></a>
                        </li>

                    </ul>
                </div>
                <!-- mainmenu end -->
            </div>
        </div>
    </div>
    
    <div class="page_title_section float_left">

        <div class="page_header">
            <div class="container">
                <div class="row">
                    <!-- section_heading start -->
                    <div class="col-lg-12 col-md-12 col-12 col-sm-12">

                        <h1><?=$this->lang->line('contactanos');?></h1>
                    </div>
                    <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                        <div class="sub_title_section">
                            <ul class="sub_title">

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="cp_heading_wraper contact_wrap">
            <h3>Nos Ubicamos</h3>
            <p style="margin-top: -20px;margin-bottom: 10px;">El mapa muestra los paises en color rojo que indican los paises en los que estamos ubicados</p>
        </div>
    </div>
    <div class="col-lg-3 col-md-12 col-sm-12">
        <div class="containerMundo">
            <div class="globe__placeholder">
                <div class="globe__container">
                    <div class="globe">
                        <div class="globe__sphere"></div>
                        <div class="globe__outer_shadow"></div>
                        <div class="globe__reflections__bottom"></div>
                        <div class="globe__worldmap">
                            <div class="globe__worldmap__back backimg4"></div>
                            <div class="globe__worldmap__front backimg4"></div>
                        </div>
                        <div class="globe__inner_shadow"></div>
                        <div class="globe__reflections__top"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-9 col-sm-12 col-md-12">
        <div class="containerMap">
            <div class="mapcontainer">
                <div class="map">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="solution_wrapper float_left" style="margin-top: -80px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12">

                <div class="about_slution_tab float_left">
                    <ul class="nav nav-tabs">
                        <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home1">01. Mexico</a>
                        </li>
                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#menu1">02. our services</a>
                        </li>
                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#menu2">03. our works</a>
                        </li>
                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#menu3">04. projects</a>
                        </li>
                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#menu4">05. UI/UX design</a>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="col-lg-9 col-md-12 col-sm-12 col-12">
                <div class="tab-content cp_tab_cntnt">
                    <div id="home1" class="tab-pane active">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="abt_tab_img float_left"><img src="https://www.nationalgeographic.com/content/dam/travel/Guide-Pages/north-america/mexico-city-travel.adapt.1900.1.jpg" alt="img"></div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="abt_tab_heading float_left">
                                    <h1>Paises en Mexico</h1>
                                    <ul class="list-group list-group-flush tb_left_heading_wraper" style="color: black;">
                                        <li class="list-group-item">Queretaro</li>
                                        <li class="list-group-item">Ciudad De Mexico</li>
                                        <li class="list-group-item">Guadalajara</li>
                                    </ul>                                        
                                    <div class="header_btn dark_btn tab_btn float_left">

                                        <a href="tel:4422609090">Llamar</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="menu1" class="tab-pane fade">
                        <div class="row">
                            <div class="col-lg-8 col-md-6 col-sm-12 col-12">
                                <div class="abt_tab_img float_left"><img src="images/tab2.png" alt="img"></div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                <div class="abt_tab_heading float_left">
                                    <h1>our services</h1>
                                    <p>Proin gravida nibh vel velit auctor et. Aenean sollicitudin, lorem quis bibum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus.</p>
                                    <div class="header_btn dark_btn tab_btn float_left">

                                        <a href="#">read more</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="menu2" class="tab-pane fade">
                        <div class="row">
                            <div class="col-lg-8 col-md-6 col-sm-12 col-12">
                                <div class="abt_tab_img float_left"><img src="images/tab3.png" alt="img"></div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                <div class="abt_tab_heading float_left">
                                    <h1>our works</h1>
                                    <p>Proin gravida nibh vel velit auctor et. Aenean sollicitudin, lorem quis bibum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus.</p>
                                    <div class="header_btn dark_btn tab_btn float_left">

                                        <a href="#">read more</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="menu3" class="tab-pane fade">
                        <div class="row">
                            <div class="col-lg-8 col-md-6 col-sm-12 col-12">
                                <div class="abt_tab_img float_left"><img src="images/tab4.png" alt="img"></div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                <div class="abt_tab_heading float_left">
                                    <h1>projects</h1>
                                    <p>Proin gravida nibh vel velit auctor et. Aenean sollicitudin, lorem quis bibum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus.</p>
                                    <div class="header_btn dark_btn tab_btn float_left">

                                        <a href="#">read more</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="menu4" class="tab-pane fade">
                        <div class="row">
                            <div class="col-lg-8 col-md-6 col-sm-12 col-12">
                                <div class="abt_tab_img float_left"><img src="images/tab5.png" alt="img"></div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                <div class="abt_tab_heading float_left">
                                    <h1>UI / UX designs</h1>
                                    <p>Proin gravida nibh vel velit auctor et. Aenean sollicitudin, lorem quis bibum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus.</p>
                                    <div class="header_btn dark_btn tab_btn float_left">

                                        <a href="#">read more</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
       /* Set the size of the div element that contains the map */
      #map {
        height: 400px;  /* The height is 400 pixels */
        width: 100%;  /* The width is the width of the web page */
       }
    </style>
    <h3>My Google Maps Demo</h3>
    <!--The div element for the map -->
    <div id="map"></div>
    <script>
function initMap() {
  // The location of Uluru
  var uluru = {lat: 20.690310, lng: -100.445980};
  // The map, centered at Uluru
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 17, center: uluru});
  // The marker, positioned at Uluru
  var marker = new google.maps.Marker({position: uluru, map: map,title: 'Anglo Latino'});
}
    </script>
    <!--Load the API from the specified URL
    * The async attribute allows the browser to render the page while the API loads
    * The key parameter will contain your own API key (which is not needed for this tutorial)
    * The callback parameter executes the initMap() function
    -->
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=&callback=initMap">
    </script>
                <canvas id="wave" style="height: unset !important;"></canvas>
            
    