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
                                    <a href="Services"> <i class="fas fa-caret-right"></i><?=$this->lang->line('servicios');?></a>
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
    <!--process wrapper start-->
    <div class="process_wrapper float_left">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                    <div class="cp_heading_wraper">

                        <h3><?=$this->lang->line('oferta_educativa');?></h3>
                    </div>

                </div>
                <div class="work_process_main_wrapper float_left">
                <div class="work_process_wrapper p2">
                        <div class="work_box float_left">
                            <div class="work_img"><img src="<?=base_url('resources/assets/Anglo/universidades.jpg');?>" alt="img" /></div>
                            <h1 class="numbering numbering">1</h1>
                            <h2><a href="#">Universidades</a></h2>
                            <p>Las universidades dentro del convenio cuentan con becas para estudiantes extranjeros.</p>
                        </div>
                    </div>
                    <div class="work_process_wrapper p2">
                        <div class="work_box float_left">
                            <div class="work_img"><img src="<?=base_url('resources/assets/Anglo/preparatorias.jpg');?>" alt="img" /></div>
                            <h1 class="numbering numbering2">2</h1>
                            <h2><a href="#">Preparatorias</a></h2>
                            <p>Todas estas instituciones ofrecen becas internas para estudiantes extranjeros.</p>
                        </div>
                    </div>
                    <div class="work_process_wrapper p2">
                        <div class="work_box float_left">
                            <div class="work_img"><img src="<?=base_url('resources/assets/Anglo/cursos_ingles.jpg');?>" alt="img" /></div>
                            <h1 class="numbering numbering3">3</h1>
                            <h2><a href="#">Cursos de ingles</a></h2>
                            <p>Conveniently customize customized work expertise</p>
                        </div>

                    </div>
                </div>
                <div class="header_btn dark_btn gallery_btn float_left">
                        <a href="#">All Ofertas</a>
                   </div>
            </div>
        </div>
    </div>
    <!--process wrapper end-->
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
                            <i class="fas fa-heart"></i>
                            <h2> <a href="#"><?=$this->lang->line('fiabilidad');?></a></h2>
                        </div>
                        <div class="service_overlay"></div>
                    </div>

                    <div class="service_cntnt de resp_boerder float_left">
                        <div class="service_main">
                            <i class="fas fa-universal-access"></i>
                            <h2> <a href="#"><?=$this->lang->line('accesibilidad');?></a></h2>
                        </div>
                        <div class="service_overlay"></div>
                    </div>

                    <div class="service_cntnt de float_left">
                        <div class="service_main">
                            <i class="fas fa-headset"></i>
                            <h2> <a href="#"><?=$this->lang->line('servicio');?></a></h2>
                        </div>
                        <div class="service_overlay"></div>
                    </div>

                    <div class="service_cntnt de resp_boerder float_left">
                        <div class="service_main">
                            <i class="fas fa-comments"></i>
                            <h2> <a href="#"><?=$this->lang->line('comunicacion');?></a></h2>
                        </div>
                        <div class="service_overlay"></div>
                    </div>

                    <div class="service_cntnt main_without_border  de float_left">
                        <div class="service_main">
                            <i class="fas fa-user-check"></i>
                            <h2> <a href="#"><?=$this->lang->line('eficacia');?></a></h2>
                        </div>
                        <div class="service_overlay"></div>
                    </div>

                    <div class="service_cntnt resp_boerder float_left">
                        <div class="service_main">
                            <i class="fas fa-star"></i>
                            <h2> <a href="#"><?=$this->lang->line('calidad');?></a></h2>
                        </div>
                        <div class="service_overlay"></div>
                    </div>

                </div>
            </div>
        </div>
        <!-- <div class="girl_shape_top">
            <img src="<?=base_url('resources/assets/Informativa/images/girl.png');?>" alt="shape">
        </div> -->
    </div>
    <!--services wrapper start-->
    <!--story wrapper start-->
    <div class="story_wrapper float_left">
        <div class="story_left_Wrapper">
            <img src="<?=base_url('resources/assets/Informativa/images/uk_student_Two.jpg');?>" alt="shape">
        </div>
        <div class="story_right_Wrapper">
            <div class="container container_cp">
                <div class="cp_heading_wraper left_heading">

                    <h3><?=$this->lang->line('acerca_de_nosotros');?></h3>

                    <p> <?=$this->lang->line('about1_home');?>
                        <br>
                        <br> <?=$this->lang->line('about2_home');?>
                        <br>
                        <br><?=$this->lang->line('about3_home');?>
                    </p>
                    <div class="header_btn dark_btn float_left">

                        <a href="About"><?=$this->lang->line('reading');?></a>

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

    <!--blog wrapper start-->
    <div class="blog_wrapper float_left">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                    <div class="cp_heading_wraper">

                        <h3>blog posts y eventos</h3>
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

                        <h3>Becas y Financiamientos</h3>

                        <p>Te asesoramos en todo el proceso
                        </p>
                    </div>

                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="pn_slider_wraper float_left">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="pn_img_wrapper">
                                    <a href="#"><img src="<?=base_url('resources/assets/Anglo/fundacion-beca.png');?>" alt="patner_img"></a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="pn_img_wrapper">
                                    <a href="#"><img src="<?=base_url('resources/assets/Anglo/conacyt.png');?>" alt="patner_img"></a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="pn_img_wrapper">
                                    <a href="#"><img src="<?=base_url('resources/assets/Anglo/guatefuturo-logo.png');?>" alt="patner_img"></a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="pn_img_wrapper">
                                    <a href="#"><img src="<?=base_url('resources/assets/Anglo/senescyt.png');?>" alt="patner_img"></a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="pn_img_wrapper">
                                    <a href="#"><img src="<?=base_url('resources/assets/Anglo/banco-de-mexico.png');?>" alt="patner_img"></a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="pn_img_wrapper">
                                    <a href="#"><img src="<?=base_url('resources/assets/Anglo/chevening.png');?>" alt="patner_img"></a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="pn_img_wrapper">
                                    <a href="#"><img src="<?=base_url('resources/assets/Anglo/Logo-funed.png');?>" alt="patner_img"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--partners wrapper end-->
    <div class="containerMap">

<h1>Minimal example</h1>

<div class="mapcontainer">
    <div class="map">
        <span>Alternative content for the map</span>
    </div>
</div>

<p><b>All example for jQuery Mapael are available <a href="https://www.vincentbroute.fr/mapael/">here</a>.</b></p>

</div>