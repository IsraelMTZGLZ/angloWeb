
</div>

    <!-- slider wrapper start -->
    <div class="banner_top_wrapper float_left">
        <div class="main_slider_wrapper slider-area">
            <div class="main_slider_overly"></div>

            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="carousel-captions caption-1">
                            <div class="container jn_container">
                                <div class="row">
                                    <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
                                        <div class="content">
                                            <div data-animation="animated zoomIn"><h1 style="color: white;">Anglo Latino Education Partnership</h1></div>
                                            <br>
                                            <h2 data-animation="animated fadeInUp"><?=$this->lang->line('bienvenido_home');?> <br>
                                            </h2>

                                            <p data-animation="animated fadeInUp">
                                                <?=$this->lang->line('beca_asesoria');?>
                                            </p>
                                            <div class="header_btn slider_btn float_left">
                                                <ul>
                                                    <li data-animation="animated flipInX">
                                                        <a href="Becas"><?=$this->lang->line('leer_mas_home');?></a>
                                                    </li>
                                                    <li data-animation="animated flipInX">
                                                        <a href="Login"><?=$this->lang->line('ingresar');?></a>
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
                                            <div data-animation="animated zoomIn"><h1 style="color: white;">Anglo Latino Education Partnership</h1></div>
                                            <br>
                                            <h2 data-animation="animated fadeInUp"><?=$this->lang->line('conocenos');?>
                                            </h2>

                                            <p data-animation="animated fadeInUp">
                                            <?=$this->lang->line('beca_gratuita');?>

                                            </p>
                                            <div class="header_btn slider_btn float_left">
                                                <ul>
                                                    <li data-animation="animated flipInX">
                                                        <a href="About"><?=$this->lang->line('leer_mas_home');?></a>
                                                    </li>
                                                    <li data-animation="animated flipInX">
                                                        <a href="Login"><?=$this->lang->line('ingresar');?></a>
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
                        <a class="next" href="#carousel-example-generic" role="button" data-slide="next"> <span> <?=$this->lang->line('next_home')?></span> <i class="flaticon-arrow"></i>
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
        <div class="cp_shape_top d-none d-lg-block">
            <img src="<?=base_url('resources/assets/Anglo/LOGOTIPO-AngloLatino.png');?>" alt="">
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
                  <div class="work_process_wrapper">
                      <div class="work_box float_left">
                          <div class="work_img"><img src="<?=base_url('resources/assets/Anglo/universidades.jpg');?>" alt="img" /></div>
                          <!--<h1 class="numbering d-none d-lg-block">1</h1>-->
                          <h2><a href="OfertaEducativa"><?=$this->lang->line('univerdiades_home')?></a></h2>
                          <p style="text-align: justify;"><?=$this->lang->line('univerdiades_desc_home')?></p>
                      </div>
                  </div>
                  <div class="work_process_wrapper p2">
                      <div class="work_box float_left">
                          <div class="work_img"><img src="<?=base_url('resources/assets/Anglo/preparatorias.jpg');?>" alt="img" /></div>
                          <!--<h1 class="numbering2 d-none d-lg-block">2</h1>-->
                          <h2><a href="OfertaEducativa"><?=$this->lang->line('preparatoria_home')?></a></h2>
                          <p style="text-align: justify;"><?=$this->lang->line('preparatoria_desc_home')?></p>
                      </div>
                  </div>
                  <div class="work_process_wrapper p3">
                      <div class="work_box float_left">
                          <div class="work_img"><img src="<?=base_url('resources/assets/Anglo/cursos_ingles.jpg');?>" alt="img" /></div>
                          <!--<h1 class="numbering3 d-none d-lg-block">3</h1>-->
                          <h2><a href="OfertaEducativa"><?=$this->lang->line('cursos_home')?></a></h2>
                          <p style="text-align: justify;"><?=$this->lang->line('cursos_desc_home')?></p>
                      </div>

                  </div>
                  <div class="work_process_wrapper">
                      <div class="work_box float_left">
                          <div class="work_img"><img src="data:image/jpeg;base64,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" alt="img" /></div>
                          <!--<h1 class="numbering4 d-none d-lg-block">4</h1>-->
                          <h2><a href="OfertaEducativa"><?=$this->lang->line('cursos__verano_home')?></a></h2>
                          <p style="text-align: justify;"><?=$this->lang->line('cursos__verano_desc_home')?></p>
                      </div>

                  </div>
              </div>
          </div>
      </div>
  </div>
    <!--services wrapper start-->
    <div class="service_wrapper topper float_left">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                    <div class="cp_heading_wraper">

                        <h3><?=$this->lang->line('nuestros_servicios_home');?></h3>

                        <p style="text-transform: none;"><?=$this->lang->line('ayudar1');?>
                            <br><?=$this->lang->line('ayudar2');?>
                        </p>
                    </div>

                </div>
                <div class="services_box_wrapper float_left">

                    <div class="service_cntnt de float_left">
                        <div class="service_main">
                            <i class="fas fa-heart"></i>
                            <h2> <a href="Services"><?=$this->lang->line('fiabilidad');?></a></h2>
                        </div>
                        <div class="service_overlay"></div>
                    </div>

                    <div class="service_cntnt de resp_boerder float_left">
                        <div class="service_main">
                            <i class="fas fa-universal-access"></i>
                            <h2> <a href="Services"><?=$this->lang->line('accesibilidad');?></a></h2>
                        </div>
                        <div class="service_overlay"></div>
                    </div>

                    <div class="service_cntnt de float_left">
                        <div class="service_main">
                            <i class="fas fa-headset"></i>
                            <h2> <a href="Services"><?=$this->lang->line('servicio');?></a></h2>
                        </div>
                        <div class="service_overlay"></div>
                    </div>

                    <div class="service_cntnt de resp_boerder float_left">
                        <div class="service_main">
                            <i class="fas fa-comments"></i>
                            <h2> <a href="Services"><?=$this->lang->line('comunicacion');?></a></h2>
                        </div>
                        <div class="service_overlay"></div>
                    </div>

                    <div class="service_cntnt de resp_boerder float_left">
                        <div class="service_main">
                            <i class="fas fa-user-check"></i>
                            <h2> <a href="Services"><?=$this->lang->line('eficacia');?></a></h2>
                        </div>
                        <div class="service_overlay"></div>
                    </div>

                    <div class="service_cntnt main_without_border  de float_left">
                        <div class="service_main">
                            <i class="fas fa-star"></i>
                            <h2> <a href="Services"><?=$this->lang->line('calidad');?></a></h2>
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

                    <p style="text-transform: none"> <?=$this->lang->line('about1_home');?>
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

    <!--blog wrapper start-->
    <div class="blog_wrapper float_left">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                    <div class="cp_heading_wraper">

                        <h3><?=$this->lang->line('blog_eventos_home');?></h3>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                    <div class="blog-post-wrapper">
                        <div class="post-thumbnail">
                            <img src="<?=base_url('resources/assets/Informativa/images/blog_benefits.jpg');?>" class="img-responsive " alt="Image">
							  <div class="entry-footer float_left">

                        </div>
                        <!-- /.entry-footer -->
                        </div>
                        <!-- /.post-thumbnail -->

                        <div class="blog-content">
                            <header class="entry-header">
                                <h4 class="entry-title"><a href="Blog"><?=$this->lang->line('title_question_two');?></a></h4>

                                <!-- /.entry-meta -->
                            </header>
                            <!-- /.entry-header -->

                            <div class="entry-content">
                                <p><?=$this->lang->line('answer_question_two');?>.</p>
                            </div>
                            <a href="Blog/Beneficios" class="blog_read"><?=$this->lang->line('reading');?><i class="flaticon-arrow"></i></a>
                            <!-- /.entry-content -->
                        </div>
                        <!-- /.blog-content -->

                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                    <div class="blog-post-wrapper">
                        <div class="post-thumbnail">
                            <img src="<?=base_url('resources/assets/Informativa/images/blog_studyUk.jpg');?>" class="img-responsive " alt="Image">
							  <div class="entry-footer float_left">

                        </div>
                        <!-- /.entry-footer -->
                        </div>
                        <!-- /.post-thumbnail -->

                        <div class="blog-content">
                            <header class="entry-header">
                                <h4 class="entry-title"><a href="Blog"><?=$this->lang->line('title_question_five');?></a></h4>

                                <!-- /.entry-meta -->
                            </header>
                            <!-- /.entry-header -->

                            <div class="entry-content">
                                <p><?=$this->lang->line('answer_question_five');?>.</p>
                            </div>
                            <a href="Blog/Why" class="blog_read"><?=$this->lang->line('reading');?><i class="flaticon-arrow"></i></a>
                            <!-- /.entry-content -->
                        </div>
                        <!-- /.blog-content -->

                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                    <div class="blog-post-wrapper">
                        <div class="post-thumbnail">
                            <img src="<?=base_url('resources/assets/Anglo/events.png');?>" class="img-responsive " alt="Image">
							  <div class="entry-footer float_left">

                        </div>
                        <!-- /.entry-footer -->
                        </div>
                        <!-- /.post-thumbnail -->

                        <div class="blog-content">
                            <header class="entry-header">
                                <h4 class="entry-title"><a href="Blog"><?=$this->lang->line('event');?></a></h4>

                                <!-- /.entry-meta -->
                            </header>
                            <!-- /.entry-header -->

                            <div class="entry-content">
                                <p><?=$this->lang->line('proximamente_home')?>...</p>
                            </div>
                            <a href="Event" class="blog_read"><?=$this->lang->line('reading');?><i class="flaticon-arrow"></i></a>
                            <!-- /.entry-content -->
                        </div>
                        <!-- /.blog-content -->

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--blog wrapper end-->
    <div class="testimonial_wrapper float_left">
        <div class="counter_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="testimonial_slider_wrapper">

                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="testi_cont_wrapper float_left">

                                    <p>“Anglo Latino me acompañó durante todo el proceso para iniciar mis estudios de
                                        doctorado en Reino Unido. Apoyó con el proceso de aceptación con la University
                                        of Bristol y la preparación de la solicitudes de beca escolar y visa ante CONACyT
                                        y Reino Unido respectivamente.”
                                      </p>
                                    <h4>by - farhan S.</h4>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testi_cont_wrapper float_left">

                                    <p>“La ayuda proporcionada por David Thomas fue
                                        fundamental para poder estudiar aquí ya que él se encargó de contactarme con el
                                        investigador que ahora supervisa mis estudios y así poder generar el vínculo
                                        académico necesario para poder seguir con los trámites. Además, él me ayudó
                                        con la validación de mi comprobante académico (tira de materias) para obtener mi
                                        carta de aceptación por parte de la universidad. Es importante destacar que
                                        también el equipo de Anglo Latino me ayudó durante el proceso de aplicación para
                                        la beca que ahora tengo.”
                                    </p>
                                    <h4>by - farhan S.</h4>
                                </div>
                            </div>

                            <div class="item">
                                <div class="testi_cont_wrapper float_left">

                                    <p>“Yo no tenía ningún amigo o familiar cercano que haya estudiado en UK, por lo que todo el
                                        proceso era desconocido para mí. Sin embargo, buscando encontré al equipo de Anglo
                                        Latino.
                                        Me estuvieron guiando en cada una de las etapas del proceso. Pero en especial ellos me
                                        apoyaron a obtuve mi unconditional letter 2 días antes de la fecha límite. Todo el equipo e
                                        incluso el director de Anglo Latino se pusieron en contacto con Cardiff University y casi de
                                        forma inmediata consiguieron mi carta de aceptación.”
                                    </p>
                                    <h4>by - farhan S.</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--partner wrapper start-->
    <div class="partner_wrapper float_left">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                    <div class="cp_heading_wraper">

                        <h3><?=$this->lang->line('becas_home')?></h3>

                        <p style="text-transform: none"><?=$this->lang->line('becas_desc_home')?></p>
                    </div>

                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="pn_slider_wraper float_left">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="pn_img_wrapper">
                                    <a href="Becas"><img src="<?=base_url('resources/assets/Anglo/fundacion-beca.png');?>" alt="patner_img"></a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="pn_img_wrapper">
                                    <a href="Becas"><img src="<?=base_url('resources/assets/Anglo/conacyt.png');?>" alt="patner_img"></a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="pn_img_wrapper">
                                    <a href="Becas"><img src="<?=base_url('resources/assets/Anglo/guatefuturo-logo.png');?>" alt="patner_img"></a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="pn_img_wrapper">
                                    <a href="Becas"><img src="<?=base_url('resources/assets/Anglo/senescyt.png');?>" alt="patner_img"></a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="pn_img_wrapper">
                                    <a href="Becas"><img src="<?=base_url('resources/assets/Anglo/banco-de-mexico.png');?>" alt="patner_img"></a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="pn_img_wrapper">
                                    <a href="javascript:;"><img src="<?=base_url('resources/assets/Anglo/chevening.png');?>" alt="patner_img"></a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="pn_img_wrapper">
                                    <a href="javascript:;"><img src="<?=base_url('resources/assets/Anglo/Logo-funed.png');?>" alt="patner_img"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--partners wrapper end-->
