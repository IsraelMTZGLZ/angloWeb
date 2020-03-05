    <!-- navi wrapper End -->
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
                                   <a href="About"> <i class="fas fa-caret-right"></i><?=$this->lang->line('nosotros');?></a>
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


    <!-- slider wrapper start -->
    <div class="banner_top_wrapper float_left">
        <div class="main_slider_wrapper slider-area">
            <div class="main_slider_overly"></div>

            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <div class="carousel-captions caption-1">
                            <div class="container jn_container">
                                <div class="row">
                                    <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
                                        <div class="content">
                                            <div data-animation="animated zoomIn"><img src="<?=base_url('resources/assets/Informativa/images/slider1.png');?>" alt="img"></div>
                                            <h2 data-animation="animated fadeInUp"><?=$this->lang->line('bienvenido');?> <br>
                                            </h2>

                                            <p data-animation="animated fadeInUp">
                                                <?=$this->lang->line('beca_asesoria');?>
                                            </p>
                                            <div class="header_btn slider_btn float_left">
                                                <ul>
                                                    <li data-animation="animated flipInX">
                                                        <a href="Becas"><?=$this->lang->line('leer_mas');?></a>
                                                    </li>
                                                    <li data-animation="animated flipInX">
                                                        <a href="#"><?=$this->lang->line('ingresar');?></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-captions caption-2">
                            <div class="container jn_container">
                                <div class="row">
                                    <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
                                        <div class="content">
                                            <div data-animation="animated zoomIn"><img src="<?=base_url('resources/assets/Informativa/images/slider1.png');?>" alt="img"></div>
                                            <h2 data-animation="animated fadeInUp"><?=$this->lang->line('conocenos');?>
                                            </h2>

                                            <p data-animation="animated fadeInUp">
                                            <?=$this->lang->line('beca_gratuita');?>

                                            </p>
                                            <div class="header_btn slider_btn float_left">
                                                <ul>
                                                    <li data-animation="animated flipInX">
                                                        <a href="About"><?=$this->lang->line('leer_mas');?></a>
                                                    </li>
                                                    <li data-animation="animated flipInX">
                                                        <a href="#"><?=$this->lang->line('ingresar');?></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"><span class="number"></span>
                        </li>
                        <li data-target="#carousel-example-generic" data-slide-to="1" class=""><span class="number"></span>
                        </li>
                    </ol>
                    <div class="carousel-nevigation">
                        <a class="prev" href="#carousel-example-generic" role="button" data-slide="prev"> <span> prev</span> <i class="flaticon-arrow-1"></i>
                        </a>
                        <a class="next" href="#carousel-example-generic" role="button" data-slide="next"> <span> next</span> <i class="flaticon-arrow"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider_right_wrapper">
            <div class="wave-holder">
                <canvas id="wave" width="1920" height="969"></canvas>
            </div>
        </div>
        <div class="cp_shape_top">
            <img src="<?=base_url('resources/assets/Informativa/images/computer.png');?>" alt="shape">
        </div>
    </div>
    <!-- slider wrapper End -->
    <!--services wrapper start-->
    <div class="service_wrapper topper float_left">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                    <div class="cp_heading_wraper">

                        <h3><?=$this->lang->line('nuestros_servicios');?></h3>

                        <p><?=$this->lang->line('ayudar1');?>
                            <br><?=$this->lang->line('ayudar2');?>
                        </p>
                    </div>

                </div>
                <div class="services_box_wrapper float_left">

                    <div class="service_cntnt de float_left">
                        <div class="service_main">
                            <i class="flaticon-eye-open"></i>
                            <h2> <a href="#">retina ready</a></h2>
                        </div>
                        <div class="service_overlay"></div>
                    </div>

                    <div class="service_cntnt de resp_boerder float_left">
                        <div class="service_main">
                            <i class="flaticon-diamond"></i>
                            <h2> <a href="#">amazing platform</a></h2>
                        </div>
                        <div class="service_overlay"></div>
                    </div>

                    <div class="service_cntnt de float_left">
                        <div class="service_main">
                            <i class="flaticon-shopping-cart"></i>
                            <h2> <a href="#">woocommerece</a></h2>
                        </div>
                        <div class="service_overlay"></div>
                    </div>

                    <div class="service_cntnt de resp_boerder float_left">
                        <div class="service_main">
                            <i class="flaticon-star"></i>
                            <h2> <a href="#">multi purpose</a></h2>
                        </div>
                        <div class="service_overlay"></div>
                    </div>

                    <div class="service_cntnt main_without_border  de float_left">
                        <div class="service_main">
                            <i class="flaticon-man-user"></i>
                            <h2> <a href="#">user friendly</a></h2>
                        </div>
                        <div class="service_overlay"></div>
                    </div>

                    <div class="service_cntnt resp_boerder float_left">
                        <div class="service_main">
                            <i class="flaticon-flask"></i>
                            <h2> <a href="#">Visualize Strategies</a></h2>
                        </div>
                        <div class="service_overlay"></div>
                    </div>

                    <div class="service_cntnt float_left">
                        <div class="service_main">
                            <i class="flaticon-triangular-arrows-sign-for-recycle"></i>
                            <h2> <a href="#">Fast Interaction</a></h2>
                        </div>
                        <div class="service_overlay"></div>
                    </div>

                    <div class="service_cntnt resp_boerder float_left">
                        <div class="service_main">
                            <i class="flaticon-trophy"></i>
                            <h2> <a href="#">Award Winning</a></h2>
                        </div>
                        <div class="service_overlay"></div>
                    </div>

                    <div class="service_cntnt resp_border_2 float_left">
                        <div class="service_main">
                            <i class="flaticon-portfolio"></i>
                            <h2> <a href="#">best portfolio</a></h2>
                        </div>
                        <div class="service_overlay"></div>
                    </div>

                    <div class="service_cntnt main_without_border resp_border_2 resp_boerder float_left">
                        <div class="service_main">
                            <i class="flaticon-graduate-cap"></i>
                            <h2> <a href="#">best trainers</a></h2>
                        </div>
                        <div class="service_overlay"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="girl_shape_top">
            <img src="<?=base_url('resources/assets/Informativa/images/girl.png');?>" alt="shape">
        </div>
    </div>
    <!--services wrapper start-->
    <!--story wrapper start-->
    <div class="story_wrapper float_left">
        <div class="story_left_Wrapper">
            <img src="<?=base_url('resources/assets/Informativa/images/mockup.png');?>" alt="shape">
        </div>
        <div class="story_right_Wrapper">
            <div class="container container_cp">
                <div class="cp_heading_wraper left_heading">

                    <h3><?=$this->lang->line('acerca_de_nosotros');?></h3>

                    <p> <?=$this->lang->line('about1_home');?>
                        <br>
                        <br> <?=$this->lang->line('about2_home');?>
                        <br>
                        <br>Todas las Universidades están ranqueadas entre las primeras 200 a nivel mundial, es decir, el top 1% en el mundo por la excelencia de su investigación y su enseñanza.
                    </p>
                    <div class="header_btn dark_btn float_left">

                        <a href="About">reading</a>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--story wrapper end-->
    <!-- counter wrapper start-->
    <div class="counter_section float_left">
        <div class="counter_overlay"></div>
        <div class="counter-section">
            <div class="container">
                <div class="row">

                    <div class="counter_width">
                        <div class="counter_cntnt_box">
                            <div class="tb_icon">
                                <div class="icon"><i class="flaticon-add-user-symbol-of-interface"></i>
                                    <div class="btc_step_overlay"></div>
                                </div>
                            </div>
                            <div class="count-description"><span class="timer">2846</span>
                                <h5 class="con1"> <a href="#"> happy customers </a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="counter_width">
                        <div class="counter_cntnt_box">
                            <div class="tb_icon">
                                <div class="icon"><i class="flaticon-career"></i>
                                    <div class="btc_step_overlay"></div>
                                </div>
                            </div>
                            <div class="count-description"> <span class="timer">425</span>
                                <h5 class="con2"> <a href="#"> successfull projects  </a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="counter_width">
                        <div class="counter_cntnt_box">
                            <div class="tb_icon">
                                <div class="icon"><i class="flaticon-search"></i>
                                    <div class="btc_step_overlay"></div>
                                </div>
                            </div>
                            <div class="count-description"> <span class="timer">7660</span>
                                <h5 class="con2"> <a href="#"> blog posts </a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="counter_width">
                        <div class="counter_cntnt_box">
                            <div class="tb_icon">
                                <div class="icon"><i class="flaticon-server"></i>
                                    <div class="btc_step_overlay"></div>
                                </div>
                            </div>
                            <div class="count-description"> <span class="timer">2347</span>
                                <h5 class="con4"> <a href="#"> web pages </a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="counter_width">
                        <div class="counter_cntnt_box">
                            <div class="tb_icon">
                                <div class="icon"><i class="flaticon-trophy"></i>
                                    <div class="btc_step_overlay"></div>
                                </div>
                            </div>
                            <div class="count-description"> <span class="timer">627</span>
                                <h5 class="con5"> <a href="#">design awards</a></h5>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
    <!-- counter wrapper end-->
    <!--process wrapper start-->
    <div class="process_wrapper float_left">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                    <div class="cp_heading_wraper">

                        <h3>Creative Work Process</h3>

                        <p> Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin,
                            <br>lorem quis bibendum auctor, nisi elit consequat ipsum</p>
                    </div>

                </div>
                <div class="work_process_main_wrapper float_left">
                    <div class="work_process_wrapper">
                        <div class="work_box float_left">
                            <div class="work_img"><img src="<?=base_url('resources/assets/Informativa/images/wrk1.png');?>" alt="img" /></div>
                            <h1 class="numbering">1</h1>
                            <h2><a href="#">planning</a></h2>
                            <p>Holisticly unleash enterprise process improvements.</p>
                        </div>
                    </div>
                    <div class="work_process_wrapper p2">
                        <div class="work_box float_left">
                            <div class="work_img"><img src="<?=base_url('resources/assets/Informativa/images/wrk2.png');?>" alt="img" /></div>
                            <h1 class="numbering numbering2">2</h1>
                            <h2><a href="#">designing</a></h2>
                            <p>Synergistically incubate high impact data via cros.</p>
                        </div>
                    </div>
                    <div class="work_process_wrapper p3">
                        <div class="work_box float_left">
                            <div class="work_img"><img src="<?=base_url('resources/assets/Informativa/images/wrk3.png');?>" alt="img" /></div>
                            <h1 class="numbering numbering3">3</h1>
                            <h2><a href="#">programing</a></h2>
                            <p>Conveniently customize customized work expertise</p>
                        </div>

                    </div>
                    <div class="work_process_wrapper">
                        <div class="work_box float_left">
                            <div class="work_img"><img src="<?=base_url('resources/assets/Informativa/images/wrk4.png');?>" alt="img" /></div>
                            <h1 class="numbering numbering4">4</h1>
                            <h2><a href="#">presentation</a></h2>
                            <p>Engage goal oriented channels via leveraged best practices. </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--process wrapper end-->
    <!--team wrapper start-->
    <div class="team_wrapper float_left">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                    <div class="cp_heading_wraper">

                        <h3>meet our team</h3>

                        <p>sly foster exceptional initiatives mindshare through extensible after
                            <br>cross-unit infrastructures. .
                        </p>
                    </div>

                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="team_slider_wrapper float_left">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="team_slider_main float_left">

                                    <div class="team_img_wrapper">
                                        <img src="<?=base_url('resources/assets/Informativa/images/team1.png');?>" class="img-responsive" alt="img" />
                                    </div>

                                    <div class="team_info_wrapper">
                                        <h4><a href="#">Arnold Oliver</a></h4>
                                        <h5>founder</h5>
                                        <p>
                                            Pelle ntes quehabi ta ntm orb itr isti quesenec tuse Pelle ntes quehabi ta ntm orb itr isti quesenec tusePelle ntes.
                                        </p>
                                        <div class="team_info_social_icons">
                                            <ul>
                                                <li>
                                                    <a href="#">
                                                        <i class="fab fa-facebook-f"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fab fa-twitter"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fab fa-google-plus-g"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fab fa-instagram"></i>
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="team_slider_main float_left">

                                    <div class="team_img_wrapper">
                                        <img src="<?=base_url('resources/assets/Informativa/images/team2.png');?>" class="img-responsive" alt="img" />
                                    </div>

                                    <div class="team_info_wrapper">
                                        <h4><a href="#">jannifer doe</a></h4>
                                        <h5>founder</h5>
                                        <p>
                                            Pelle ntes quehabi ta ntm orb itr isti quesenec tuse Pelle ntes quehabi ta ntm orb itr isti quesenec tusePelle ntes.
                                        </p>
                                        <div class="team_info_social_icons">
                                            <ul>
                                                <li>
                                                    <a href="#">
                                                        <i class="fab fa-facebook-f"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fab fa-twitter"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fab fa-google-plus-g"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fab fa-instagram"></i>
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="team_slider_main float_left">

                                    <div class="team_img_wrapper">
                                        <img src="<?=base_url('resources/assets/Informativa/images/team1.png');?>" class="img-responsive" alt="img" />
                                    </div>

                                    <div class="team_info_wrapper">
                                        <h4><a href="#">Arnold Oliver</a></h4>
                                        <h5>founder</h5>
                                        <p>
                                            Pelle ntes quehabi ta ntm orb itr isti quesenec tuse Pelle ntes quehabi ta ntm orb itr isti quesenec tusePelle ntes.
                                        </p>
                                        <div class="team_info_social_icons">
                                            <ul>
                                                <li>
                                                    <a href="#">
                                                        <i class="fab fa-facebook-f"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fab fa-twitter"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fab fa-google-plus-g"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fab fa-instagram"></i>
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="team_slider_main float_left">

                                    <div class="team_img_wrapper">
                                        <img src="<?=base_url('resources/assets/Informativa/images/team2.png');?>" class="img-responsive" alt="img" />
                                    </div>

                                    <div class="team_info_wrapper">
                                        <h4><a href="#">jannifer doe</a></h4>
                                        <h5>founder</h5>
                                        <p>
                                            Pelle ntes quehabi ta ntm orb itr isti quesenec tuse Pelle ntes quehabi ta ntm orb itr isti quesenec tusePelle ntes.
                                        </p>
                                        <div class="team_info_social_icons">
                                            <ul>
                                                <li>
                                                    <a href="#">
                                                        <i class="fab fa-facebook-f"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fab fa-twitter"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fab fa-google-plus-g"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fab fa-instagram"></i>
                                                    </a>
                                                </li>

                                            </ul>
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
    <!--team wrapper end-->
    <!-- testimonial wrapper start-->
    <div class="testimonial_wrapper float_left">
        <div class="counter_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="testimonial_slider_wrapper">

                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="testi_cont_wrapper float_left">

                                    <p>“sly foster exceptional initiatives mindshare through extensible after cross-unit infrastructures.”</p>
                                    <h4>by - farhan S.</h4>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testi_cont_wrapper float_left">

                                    <p>“sly foster exceptional initiatives mindshare through extensible after cross-unit infrastructures.”</p>
                                    <h4>by - farhan S.</h4>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testi_cont_wrapper float_left">

                                    <p>“sly foster exceptional initiatives mindshare through extensible after cross-unit infrastructures.”</p>
                                    <h4>by - farhan S.</h4>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testi_cont_wrapper float_left">

                                    <p>“sly foster exceptional initiatives mindshare through extensible after cross-unit infrastructures.”</p>
                                    <h4>by - farhan S.</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- testimonial wrapper end-->
    <!--gallery wrapper start-->
    <div class="gallery_wrapper float_left">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                    <div class="cp_heading_wraper">

                        <h3>our work</h3>

                        <p>Lorem Ipsum. Proin Gravida Nibh Vel Velit Auctor Aliquet. Aenean Sollicitudin,
                            <br> Lorem Quis Bibendum Auctor, Nisi Elit Consequat Ipsum .
                        </p>
                    </div>

                    <ul class="protfoli_filter">
                        <li class="active" data-filter="*"><a href="#"> all</a></li>

                        <li data-filter=".website"><a href="#">web design</a></li>
                        <li data-filter=".design"><a href="#">graphic</a></li>
                        <li data-filter=".ux_ui"><a href="#">logo</a></li>
                        <li data-filter=".ux_uy"><a href="#">wordpress</a></li>
                    </ul>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                    <div class="row portfoli_inner">

                        <!-- Items -->
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 website ux_ui">
                            <div class="portfolio_item">
                                <img src="<?=base_url('resources/assets/Informativa/images/g1.jpg');?>" alt="">
                                <div class="portfolio_hover">
                                    <a href="#">  company branding <span>(mockup, branding) </span></a>
                                    <p></p>
                                    <div class="zoom_popup">
                                        <a class="img-link" href="<?=base_url('resources/assets/Informativa/images/g1.jpg');?>"> <i class="flaticon-add"></i>
                                        </a>
                                    </div>
                                </div>
								<div class="portfolio_overlay"></div>
                            </div>
                        </div>
                        <!-- Items -->
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 website design ux_uy">
                            <div class="portfolio_item">
                                <img src="<?=base_url('resources/assets/Informativa/images/g2.jpg');?>" alt="">
                                <div class="portfolio_hover">
                                    <a href="#">  company branding <span>(mockup, branding) </span></a>
                                    <div class="zoom_popup">
                                        <a class="img-link" href="<?=base_url('resources/assets/Informativa/images/g2.jpg');?>"> <i class="flaticon-add"></i>
                                        </a>
                                    </div>
                                </div>
								<div class="portfolio_overlay"></div>
                            </div>
                        </div>
                        <!-- Items -->
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 design ux_ui">
                            <div class="portfolio_item">
                                <img src="<?=base_url('resources/assets/Informativa/images/g3.jpg');?>" alt="">
                                <div class="portfolio_hover">
                                    <a href="#">  company branding <span>(mockup, branding) </span></a>
                                    <div class="zoom_popup">
                                        <a class="img-link" href="<?=base_url('resources/assets/Informativa/images/g3.jpg');?>"> <i class="flaticon-add"></i>
                                        </a>
                                    </div>
                                </div>
								<div class="portfolio_overlay"></div>
                            </div>
                        </div>
                        <!-- Items -->
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 website ux_uy">
                            <div class="portfolio_item">
                                <img src="<?=base_url('resources/assets/Informativa/images/g4.jpg');?>" alt="">
                                <div class="portfolio_hover">
                                    <a href="#">  company branding <span>(mockup, branding) </span></a>
                                    <div class="zoom_popup">
                                        <a class="img-link" href="<?=base_url('resources/assets/Informativa/images/g4.jpg');?>"> <i class="flaticon-add"></i>
                                        </a>
                                    </div>
                                </div>
								<div class="portfolio_overlay"></div>
                            </div>
                        </div>
                        <!-- Items -->
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 website ux_uy">
                            <div class="portfolio_item">
                                <img src="<?=base_url('resources/assets/Informativa/images/g5.jpg');?>" alt="">
                                <div class="portfolio_hover">
                                    <a href="#">  company branding <span>(mockup, branding) </span></a>
                                    <div class="zoom_popup">
                                        <a class="img-link" href="<?=base_url('resources/assets/Informativa/images/g5.jpg');?>"> <i class="flaticon-add"></i>
                                        </a>
                                    </div>
                                </div>
								<div class="portfolio_overlay"></div>
                            </div>
                        </div>
                        <!-- Items -->
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 website design ux_ui">
                            <div class="portfolio_item">
                                <img src="<?=base_url('resources/assets/Informativa/images/g6.jpg');?>" alt="">
                                <div class="portfolio_hover">
                                    <a href="#">  company branding <span>(mockup, branding) </span></a>
                                    <div class="zoom_popup">
                                        <a class="img-link" href="<?=base_url('resources/assets/Informativa/images/g6.jpg');?>"> <i class="flaticon-add"></i>
                                        </a>
                                    </div>
                                </div>
								<div class="portfolio_overlay"></div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ux_uy website design ux_ui">
                            <div class="portfolio_item">
                                <img src="<?=base_url('resources/assets/Informativa/images/g7.jpg');?>" alt="">
                                <div class="portfolio_hover">
                                    <a href="#">  company branding b <span>(mockup, branding) </span></a>
                                    <div class="zoom_popup">
                                        <a class="img-link" href="<?=base_url('resources/assets/Informativa/images/g7.jpg');?>"> <i class="flaticon-add"></i>
                                        </a>
                                    </div>
                                </div>
								<div class="portfolio_overlay"></div>
                            </div>
                        </div>
                    </div>
					<div class="header_btn dark_btn gallery_btn float_left">
                        <a href="#">all projects</a>
                   </div>
                </div>
            </div>
        </div>
    </div>
    <!--gallery wrapper end-->
    <!--pricing wrapper start-->
    <div class="pricing_wrapper float_left">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                    <div class="cp_heading_wraper">

                        <h3>pricing table</h3>

                        <p>sly foster exceptional initiatives mindshare through extensible after
                            <br>cross-unit infrastructures. .
                        </p>
                    </div>

                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="pricing_box_wrapper float_left">
                        <h1>basic plan</h1>
                        <div class="main_pdet float_left">

                            <h2><span class="dollarr"> $ </span> 29  <br> <span> / per month</span></h2>
                        </div>
                        <ul class="pricing_list22">
                            <li>10 upload per month</li>
                            <li>02 free download</li>
                            <li>
                                05 GB Server Space
                            </li>
                            <li>60 Hit Per Day</li>
                            <li>Author Page

                            </li>
                            <li>24/7 Customer Support
                            </li>
                            <li>Unlimited staff</li>

                        </ul>
                        <a href="#" class="price_btn">buy now!</a>
                    </div>

                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="pricing_box_wrapper float_left">
                        <h1>premium plan</h1>
                        <div class="main_pdet float_left">

                            <h2><span class="dollarr"> $ </span> 59 <br> <span> / per month</span></h2>
                        </div>
                        <ul class="pricing_list22">
                            <li>10 upload per month</li>
                            <li>02 free download</li>
                            <li>
                                05 GB Server Space
                            </li>
                            <li>60 Hit Per Day</li>
                            <li>Author Page

                            </li>
                            <li>24/7 Customer Support
                            </li>
                            <li>Unlimited staff</li>

                        </ul>
                        <a href="#" class="price_btn">buy now!</a>
                    </div>

                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="pricing_box_wrapper float_left">
                        <h1>pro plan</h1>
                        <div class="main_pdet float_left">

                            <h2><span class="dollarr"> $ </span> 99  <br> <span> / per month</span></h2>
                        </div>
                        <ul class="pricing_list22">
                            <li>10 upload per month</li>
                            <li>02 free download</li>
                            <li>
                                05 GB Server Space
                            </li>
                            <li>60 Hit Per Day</li>
                            <li>Author Page

                            </li>
                            <li>24/7 Customer Support
                            </li>
                            <li>Unlimited staff</li>

                        </ul>
                        <a href="#" class="price_btn">buy now!</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--pricing wrapper end-->
    <!-- video section Start -->
    <div class="prs_video_section_main_wrapper float_left">
        <div class="counter_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="prs_video_sec_icon_wrapper">
                        <ul>
                            <li>
                                <a class="test-popup-link button" rel='external' href='https://www.youtube.com/embed/ryzOXAO0Ss0' title='title'><img src="<?=base_url('resources/assets/Informativa/images/play.png');?>" class="img-responsive" alt="img"></a>
                            </li>
                        </ul>
                        <h1>video player</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- video section End -->
    <!--blog wrapper start-->
    <div class="blog_wrapper float_left">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                    <div class="cp_heading_wraper">

                        <h3>blog posts</h3>

                        <p>Lorem Ipsum. Proin Gravida Nibh Vel Velit Auctor Aliquet. Aenean Sollicitudin,
                            <br> Lorem Quis Bibendum Auctor, Nisi Elit Consequat Ipsum .
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                    <div class="blog-post-wrapper">
                        <div class="post-thumbnail">
                            <img src="<?=base_url('resources/assets/Informativa/images/blog1.jpg');?>" class="img-responsive " alt="Image">
							  <div class="entry-footer float_left">
                            <ul class="entry-meta pull-left">
                                <li><span class="hits"><a href="#"><i class="fa fa-heart"></i> 30</a></span></li>
                                <li><span class="post-comments-number"><a href="#"><i class="fa fa-comment"></i> 25</a></span></li>
                            </ul>

                        </div>
                        <!-- /.entry-footer -->
                        </div>
                        <!-- /.post-thumbnail -->

                        <div class="blog-content">
                            <header class="entry-header">
                                <h4 class="entry-title"><a href="#">Blog image post</a></h4>
                                <div class="entry-meta">
                                    <ul>
                                        <li><span class="author">By <a href="#">Admin</a></span>
                                        </li>
                                        <li><span class="posted-in">sept 19, 2019</span>
                                        </li>
                                    </ul>
                                </div>
                                <!-- /.entry-meta -->
                            </header>
                            <!-- /.entry-header -->

                            <div class="entry-content">
                                <p>Sollicitudin, lorem quis bibe u auctor, nisi elit conat ipsu, nec sagittis sem ni id elit. Duis sed odio sit amet nibh vulpute cursus. Proin gravida nibh vel velit auctor aliquet.</p>
                            </div>
                            <a href="#" class="blog_read">read more <i class="flaticon-arrow"></i></a>
                            <!-- /.entry-content -->
                        </div>
                        <!-- /.blog-content -->

                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                    <div class="blog-post-wrapper">
                        <div class="post-thumbnail">
                            <div id="blogoneSlider" class="carousel slide" data-ride="carousel">

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active">
                                        <img src="<?=base_url('resources/assets/Informativa/images/blog2.jpg');?>" class="img-responsive " alt="Image">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="<?=base_url('resources/assets/Informativa/images/blog1.jpg');?>" class="img-responsive " alt="Image">
                                    </div>
                                </div>

                                <!-- Controls -->
                                <a class="left carousel-control" href="#blogoneSlider" role="button" data-slide="prev">
                                    <span class="flaticon-left-arrow" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" href="#blogoneSlider" role="button" data-slide="next">
                                    <span class="flaticon-right-arrow" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
							  <div class="entry-footer float_left">
                            <ul class="entry-meta pull-left">
                                <li><span class="hits"><a href="#"><i class="fa fa-heart"></i> 30</a></span></li>
                                <li><span class="post-comments-number"><a href="#"><i class="fa fa-comment"></i> 25</a></span></li>
                            </ul>

                        </div>
                        <!-- /.entry-footer -->
                        </div>
                        <!-- /.post-thumbnail -->

                        <div class="blog-content">
                            <header class="entry-header">
                                <h4 class="entry-title"><a href="#">slider blog post</a></h4>
                                <div class="entry-meta">
                                    <ul>
                                        <li><span class="author">By <a href="#">Admin</a></span>
                                        </li>
                                        <li><span class="posted-in">sept 19, 2019</span>
                                        </li>
                                    </ul>
                                </div>
                                <!-- /.entry-meta -->
                            </header>
                            <!-- /.entry-header -->

                            <div class="entry-content">
                                <p>Sollicitudin, lorem quis bibe u auctor, nisi elit conat ipsu, nec sagittis sem ni id elit. Duis sed odio sit amet nibh vulpute cursus. Proin gravida nibh vel velit auctor aliquet.</p>
                                <a href="#" class="blog_read">read more <i class="flaticon-arrow"></i></a>
                            </div>
                            <!-- /.entry-content -->
                        </div>
                        <!-- /.blog-content -->

                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                    <div class="blog-post-wrapper">
                        <div class="post-thumbnail">
                            <img src="<?=base_url('resources/assets/Informativa/images/blog3.jpg');?>" alt="Image" />
                            <a href="https://www.youtube.com/watch?v=b9krhARsAHU" class="test-popup-link vedie_img"><span><img src="<?=base_url('resources/assets/Informativa/images/play2.png');?>" alt="img"></span></a>
							 <div class="entry-footer float_left">
                            <ul class="entry-meta pull-left">
                                <li><span class="hits"><a href="#"><i class="fa fa-heart"></i> 30</a></span></li>
                                <li><span class="post-comments-number"><a href="#"><i class="fa fa-comment"></i> 25</a></span></li>
                            </ul>

                        </div>
                        <!-- /.entry-footer -->
                        </div>
                        <!-- /.post-thumbnail -->

                        <div class="blog-content">
                            <header class="entry-header">
                                <h4 class="entry-title"><a href="#">video blog post</a></h4>
                                <div class="entry-meta">
                                    <ul>
                                        <li><span class="author">By <a href="#">Admin</a></span>
                                        </li>
                                        <li><span class="posted-in">sept 19, 2019</span>
                                        </li>
                                    </ul>
                                </div>
                                <!-- /.entry-meta -->
                            </header>
                            <!-- /.entry-header -->

                            <div class="entry-content">
                                <p>Sollicitudin, lorem quis bibe u auctor, nisi elit conat ipsu, nec sagittis sem ni id elit. Duis sed odio sit amet nibh vulpute cursus. Proin gravida nibh vel velit auctor aliquet.</p>
                                <a href="#" class="blog_read">read more <i class="flaticon-arrow"></i></a>
                            </div>
                            <!-- /.entry-content -->
                        </div>
                        <!-- /.blog-content -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--blog wrapper end-->
    <!--partner wrapper start-->
    <div class="partner_wrapper float_left">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                    <div class="cp_heading_wraper">

                        <h3>our partners</h3>

                        <p>sly foster exceptional initiatives mindshare through extensible after
                            <br>cross-unit infrastructures. .
                        </p>
                    </div>

                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="pn_slider_wraper float_left">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="pn_img_wrapper">
                                    <a href="#"><img src="<?=base_url('resources/assets/Informativa/images/p1.png');?>" alt="patner_img"></a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="pn_img_wrapper">
                                    <a href="#"><img src="<?=base_url('resources/assets/Informativa/images/p2.png');?>" alt="patner_img"></a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="pn_img_wrapper">
                                    <a href="#"><img src="<?=base_url('resources/assets/Informativa/images/p3.png');?>" alt="patner_img"></a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="pn_img_wrapper">
                                    <a href="#"><img src="<?=base_url('resources/assets/Informativa/images/p4.png');?>" alt="patner_img"></a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="pn_img_wrapper">
                                    <a href="#"><img src="<?=base_url('resources/assets/Informativa/images/p5.png');?>" alt="patner_img"></a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="pn_img_wrapper">
                                    <a href="#"><img src="<?=base_url('resources/assets/Informativa/images/p6.png');?>" alt="patner_img"></a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--partners wrapper end-->
    <!--newsletter wrapper start-->

    <div class="news_letter_wrapper float_left">

        <div class="container">

            <div class="lr_nl_heading_wrapper">
                <h2> Newsletter</h2>
                <p>Don’t miss to subscribe to our new feeds, kindly fill the form </p>
            </div>

            <div class="lr_nl_form_wrapper">
                <input type="text" placeholder=" Email">
                <button type="submit">Subscribe</button>
            </div>

        </div>
    </div>