<style>
.header-design {
  /* background-color: #a4508b;
  background-image: linear-gradient(326deg, #a4508b 0%, #5f0a87 74%);
  height: 120px; */
  text-align: center;
}

.listar-map-button {
  width: 100%;
  position: absolute;
  display: table;
  right: 0;
  top: 0;
  height: 200px;
  line-height: 164px;
  white-space: nowrap;
  font-size: 0;
}

.listar-map-button {
  right: auto;
  /***
    box-shadow: 0 0 65px rgba(0,0,0,.07) inset, 0 0 35px rgba(0,0,0,.05) inset;**/
}

.listar-map-button-text span {
  background-color: #fff;
  color: #252525;
  text-shadow: none;
}

.listar-page-header-content .listar-map-button-text span {
  position: relative;
  display: inline-block;
  vertical-align: middle;
  font-size: 15px;
  height: 44px;
  line-height: 1.6;
  padding: 10px 25px;
  box-shadow: 0 0 300px rgba(0, 0, 0, 0.65), 0 0 30px rgba(0, 0, 0, 0.06);
  border-radius: 50px;
  background-color: rgba(35, 40, 45, 0.9);
  color: #fff;
  text-shadow: 1px 1px rgba(0, 0, 0, 0.2);
}

header .footer-wave {
  max-width: 102%;
  width: 100%;
  height: 187.8px;
  left: 0;
  z-index: 1;
  bottom: -67px;
  background: url(https://1.bp.blogspot.com/-NYl6L8pz8B4/XoIVXwfhlNI/AAAAAAAAU3k/nxJKiLT706Mb7jUFiM5vdCsOSNnFAh0yQCLcBGAsYHQ/s1600/hero-wave.png)
    repeat-x;
  animation: wave 10s cubic-bezier(0.44, 0.66, 0.67, 0.37) infinite;
}

@keyframes wave {
  0% {
    background-position: 0;
  }
  100% {
    background-position: 1440px;
  }
}


.listar-feature-item.listar-feature-has-link .listar-feature-item-inner:after {
  content: "";
  background-color: #fff;
  z-index: 6;
  position: absolute;
  background-repeat: no-repeat;
  background-position: center center;
}

.listar-feature-icon-wrapper {
  width: 148px;
  height: 148px;
  line-height: 148px;
  border-radius: 500px;
  position: relative;
  background-color: #fff;
  box-shadow: 8px 8px 30px rgba(0, 0, 0, 0.06);
  -webkit-transform: rotate(0deg);
  -moz-transform: rotate(0deg);
  -ms-transform: rotate(0deg);
  -o-transform: rotate(0deg);
  transform: rotate(0deg);
  left: 50%;
  vertical-align: middle;
  margin-left: -74px;
  top: -66px;
  margin-top: -74px;
}

.listar-feature-icon-inner {
  width: 120px;
  height: 120px;
  line-height: 120px;
  border-radius: 500px;
  position: relative;
  display: inline-block;
  vertical-align: middle;
  box-shadow: 10px 10px 20px rgba(0, 0, 0, 0.14);
  background: #fff;
}

.listar-feature-icon-inner div {
  -webkit-transform: rotate(0deg);
  -moz-transform: rotate(0deg);
  -ms-transform: rotate(0deg);
  -o-transform: rotate(0deg);
  transform: rotate(0deg);
  display: inline-block;
  position: relative;
  width: 120px;
  height: 120px;
  line-height: 120px;
  text-align: left;
}

.listar-feature-icon-inner img {
  position: relative;
  margin: 0 auto;
  vertical-align: middle;
  display: inline-block;
  width: auto;
  left: 50%;
  -webkit-transform: translate(-50%);
  -moz-transform: translate(-50%);
  -ms-transform: translate(-50%);
  -o-transform: translate(-50%);
  transform: translate(-50%);
  height: 55px;
}

.listar-feature-item img,
.listar-feature-item i {
  position: relative;
  display: inline-block;
  border-bottom: 0;
  font-size: 40px;
  top: 0;
  padding: 0;
  color: #258bd5;
}

.listar-feature-with-image .listar-feature-content-wrapper {
  top: 0;
}
.listar-feature-content-wrapper {
  position: relative;
  margin-top: -15.5px;
}

.listar-feature-item .listar-feature-item-title {
  padding-top: 0;
  margin: 0 0 30px;
  text-align: center;
  line-height: 1.5;
}

.listar-feature-item
  .listar-feature-item-title.listar-feature-counter-added
  > span {
  margin-left: 25px;
  border-radius: 0 50px 50px 0;
}

.listar-feature-item .listar-feature-item-title > span {
  box-shadow: 15px 20px 30px rgba(80, 80, 80, 0.12),
    5px 0px 40px rgba(80, 80, 80, 0.1);
  padding: 10px 20px;
  display: inline-block;
  position: relative;
  background-color: #fff;
}

.listar-feature-item .listar-feature-item-title > span span {
  box-shadow: 15px 15px 30px rgba(80, 80, 80, 0.2),
    5px 0px 80px rgba(80, 80, 80, 0.15);
  padding: 10px 0;
  display: inline-block;
  width: 50px;
  height: 50px;
  line-height: 30px;
  white-space: nowrap;
  position: absolute;
  top: -3px;
  left: -40px;
  border-radius: 50px;
  background-color: #fff;
}

.listar-feature-item .listar-feature-item-title span {
  display: inline-block;
  font-size: 14px;
  line-height: normal;
  font-weight: 400;
  text-shadow: none;
  border-radius: 50px;
  color: #252525;
  font-size: 18px;
}

.listar-feature-item-excerpt {
  padding: 0 20px;
}

.listar-feature-item-excerpt {
  color: #252525;
  position: relative;
  top: 0;
  width: 100%;
  margin: 0 auto;
  text-align: center;
}

.pset {
  padding-top: 180px;
  padding-bottom: 80px;
}

.listar-map-button-text span {
  position: relative;
  display: inline-block;
  vertical-align: middle;
  font-size: 15px;
  height: 44px;
  line-height: 1.6;
  padding: 10px 25px;
  box-shadow: 0 0 31px rgba(0, 0, 0, 0.65), 0 0 4px rgba(0, 0, 0, 0.06);
  border-radius: 50px;
  background-color: rgba(35, 40, 45, 0.9);
  color: #fff;
  text-shadow: 1px 1px rgba(0, 0, 0, 0.2);
}

.listar-map-button-text span {
  background-color: #fff;
  color: #252525;
  text-shadow: none;
  -webkit-transition: all 0.2s ease-in;
  -moz-transition: all 0.2s ease-in;
  -ms-transition: all 0.2s ease-in;
  -o-transition: all 0.2s ease-in;
  transition: all 0.2s ease-in;
}

.listar-map-button-text span:after {
  border: 12px solid #fff;
}

.listar-map-button-text span:after {
  content: "";
  position: absolute;
  top: -14px;
  left: -14px;
  width: calc(100% + 28px);
  height: calc(100% + 28px);
  border-radius: 36px;
}

.listar-map-button:hover .listar-map-button-text span {
  padding: 10px 43px 10px 51px;
  -webkit-transition: all 0.2s ease-in;
  -moz-transition: all 0.2s ease-in;
  -ms-transition: all 0.2s ease-in;
  -o-transition: all 0.2s ease-in;
  transition: all 0.2s ease-in;
}

.listar-feature-with-image .listar-feature-item a:before {
  content: "";
  position: absolute;
  top: -74px;
  left: 50%;
  margin-left: -74px;
  width: 148px;
  height: 148px;
  border-radius: 1000px;
  z-index: 10;
}

.listar-feature-item.listar-feature-has-link .listar-feature-item-inner:after {
  margin-left: -25px;
  width: 50px;
  height: 50px;
  border-radius: 50px;
  box-shadow: 10px 10px 40px rgba(80, 80, 80, 0.15),
    15px 15px 30px rgba(80, 80, 80, 0.05), 0 0 120px rgba(80, 80, 80, 0.6);
  bottom: -30px;
  background-image: url("https://image.flaticon.com/icons/svg/2316/2316674.svg");
  background-size: 40%;
  color: #555;
  line-height: 52px;
}

.col-lg-1,
.col-lg-2,
.col-lg-3,
.col-lg-4,
.col-lg-5,
.col-lg-6,
.col-lg-7,
.col-lg-8,
.col-lg-9,
.col-lg-10,
.col-lg-11,
.col-lg-12,
.col-md-1,
.col-md-2,
.col-md-3,
.col-md-4,
.col-md-5,
.col-md-6,
.col-md-7,
.col-md-8,
.col-md-9,
.col-md-10,
.col-md-11,
.col-md-12,
.col-sm-1,
.col-sm-2,
.col-sm-3,
.col-sm-4,
.col-sm-5,
.col-sm-6,
.col-sm-7,
.col-sm-8,
.col-sm-9,
.col-sm-10,
.col-sm-11,
.col-sm-12,
.col-xs-1,
.col-xs-2,
.col-xs-3,
.col-xs-4,
.col-xs-5,
.col-xs-6,
.col-xs-7,
.col-xs-8,
.col-xs-9,
.col-xs-10,
.col-xs-11,
.col-xs-12 {
  align-self: flex-start;
}


</style>
<header class="header-design">
  <div class="listar-map-button">
    <div class="listar-map-button-text" style="display: inline-block; opacity: 1;margin-top: 50px">
      <span class="icon-map2">
        Bienvenido</span>
    </div>
  </div>

  <div class="footer-wave"></div>
</header>
<style>

.containerC .card:before {
	background-color: #9bdc28;
	clip-path: circle(150px at 80% 20%);
	content: '';
	height: 100%;
	left: 0;
	top: 0;
	transition: clip-path 0.5s ease-in-out;
	width: 100%;
}

.containerC .card:hover:before,
.containerC .card:focus:before,
.containerC .card:active:before {
	clip-path: circle(300px at 80% -20%);
}

.containerC .card {
	position: relative;
	width: 320px;
	height: 450px;
	background-color: deepskyblue;
	border-radius: 20px;
	overflow: hidden;
}



.containerC .card .img-box {
	height: 220px;
	position: absolute;
	top: 50%;
	transform: translateY(-50%);
	transition: top 0.5s ease,
							transform 0.5s ease;
	width: 100%;
	z-index: 1;
}

.containerC .card:hover .img-box {
	top: 0%;
	transform: translateY(0%);
}

.containerC .card .img-box img {
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
	max-width: 270px;
}

.containerC .card .content-box {
	bottom: 0;
	height: 100px;
	position: absolute;
	text-align: center;
	transition: height 1s ease;
	width: 100%;
	z-index: 1;
}

.containerC .card:hover .content-box,
.containerC .card:focus .content-box,
.containerC .card:active .content-box {
	height: 210px;
}

.containerC .card .content-box h2 {
	color: #ffffff;
	font-weight: 600;
	letter-spacing: 1px;
	position: relative;
}

.containerC .card .content-box .size,
.containerC .card .content-box .color {
	align-items: center;
	display: flex;
	justify-content: center;
	opacity: 0;
	padding: 8px 20px;
	transition: opacity 0.5s ease;
	visibility: hidden;
}

.containerC .card:hover .content-box .size,
.containerC .card:focus .content-box .size,
.containerC .card:active .content-box .size {
	opacity: 1;
	transition-delay: 0.5s;
	visibility: visible;
}

.containerC .card:hover .content-box .color,
.containerC .card:focus .content-box .color,
.containerC .card:active .content-box .color {
	opacity: 1;
	transition-delay: 0.6s;
	visibility: visible;
}

.containerC .card .content-box .size h3,
.containerC .card .content-box .color h3 {
	color: #ffffff;
	font: 300 14px 'Poppins', italic;
	letter-spacing: 2px;
	margin-right: 10px;
	text-transform: uppercase;
}

.containerC .card .content-box .size span {
	background-color: #ffffff;
	border-radius: 4px;
	color: #111111;
	cursor: pointer;
	display: inline-block;
	font: 600 14px 'Poppins', italic;
	height: 26px;
	line-height: 26px;
	margin: 0 5px;
	text-align: center;
	transition: background-color 0.5s ease;
	width: 26px;
}

.containerC .card .content-box .size span:hover,
.containerC .card .content-box .size span:focus,
.containerC .card .content-box .size span:active {
	background-color: #9bdc28;
}

.containerC .card .content-box .color span {
	border-radius: 50%;
	cursor: pointer;
	height: 20px;
	margin: 0 5px;
	width: 20px;
}

.containerC .card .content-box .color span:nth-child(2) {
	background-color: #9bdc28;
}

.containerC .card .content-box .color span:nth-child(3) {
	background-color: #0ea9f4;
}

.containerC .card .content-box .color span:nth-child(4) {
	background-color: #e91e63;
}

.containerC .card .content-box a {
	background-color: #ffffff;
	border-radius: 4px;
	color: #111111;
	display: inline-block;
	font-weight: 600;
	margin-top: 10px;
	opacity: 0;
	padding: 10px 20px;
	text-decoration: none;
	transform: translateY(50px);
	transition: opacity 0.5s ease,
							transform 0.5s ease;
}

.containerC .card:hover .content-box a {
	opacity: 1;
	transform: translateY(0);
	transition-delay: 0.75s;
}
</style>

<div class="page-content containerC-fluid" >
  <div class="row" data-plugin="matchHeight" data-by-row="true">
    <div class="col-xxl-8 col-lg-7">

      <!--Eligio universidad-->
      <?php if(!@$infoAspiranteVeranoIngles) { ;?>
        <div class="card card-shadow card-responsive" id="widgetLineareaColor">
          <div class=" p-0">
            <div class="pt-30 p-30" style="height:calc(100% - 250px);">
              <div class="row">
                <div class="col-7">
                  <p class="font-size-20 blue-grey-700" style="color: #B53F00;display:inline;">Curso Elegido: &nbsp;</p>
                  <p class="font-size-20" style="color: #B53F00;display:inline;"><?=@$aspiranteInteres;?> </p>
                </div>
                <div class="col-5">
                  <div class="float-right clearfix">
                    <ul class="list-unstyled">
                    <!-- <li class="mb-5 text-truncate">
                        <i class="icon wb-medium-point red-600 mr-5" aria-hidden="true"></i>Tipo estudio: <?=$infoAspiranteUni['estudiosAspiranteUniversidad'];?>
                    </li> -->
                    <li class="mb-5 text-truncate">
                        <i class="icon wb-medium-point orange-600 mr-5" aria-hidden="true"></i>Mes: <?=$mes;?>
                    </li>
                    <li class="mb-5 text-truncate">
                        <i class="icon wb-medium-point green-600 mr-5" aria-hidden="true"></i>Año: <?=$anio;?>
                    </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>


            <p class="font-size-20 blue-grey-700" style="color: #B53F00;margin:10px;">Instituciones Seleccionadas: &nbsp;</p>


          <div class="row" style=" overflow-y: hidden;">
            <?php if (!@$InstOneInfo== NULL) { ?>
              <div class="col-lg-4 col-12">
                <div class="containerC" style="margin: 15px">
                  <div class="card">
                    <div class="img-box">
                      <img src="<?=@$instOne['urlImagen'];?>">
                    </div>
                    <div class="content-box">
                      <h2><?=@$instOne['nombreInstitucion'];?></h2>
                      <div class="color">
                        <h3>Color :</h3>
                        <span></span>
                        <span></span>
                        <span></span>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
                <?php } ;?>
                  <?php if (!@$InstTwoInfo== NULL) { ?>
              <div class="col-lg-4 ">
                <div class="containerC" style="margin: 15px">
                  <div class="card">
                    <div class="img-box">
                      <img src="<?=@$instTwo['urlImagen'];?>">
                    </div>
                    <div class="content-box">
                      <h2><?=@$instTwo['nombreInstitucion'];?></h2>
                      <div class="color">
                        <h3>Color :</h3>
                        <span></span>
                        <span></span>
                        <span></span>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
              <?php } ;?>
              <?php if (!@$InstThreeInfo== NULL) { ?>
              <div class="col-lg-4 ">
                <div class="containerC" style="margin: 15px">
                  <div class="card">
                    <div class="img-box">
                      <img src="<?=@$instThree['urlImagen'];?>">
                    </div>
                    <div class="content-box">
                      <h2><?=@$instThree['nombreInstitucion'];?></h2>
                      <div class="color">
                        <h3>Color :</h3>
                        <span></span>
                        <span></span>
                        <span></span>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
          <?php } ;?>
          </div>
        </div>
      <?php } ;?>
      <!--Termina Eligio universidad-->

      <!--Empieza Eligio preparatoria-->
      <?php if(@$infoAspirantePrepa) { ;?>
        <div class="card card-shadow card-responsive" id="widgetLineareaColor">
          <div class=" p-0">
            <div class="pt-30 p-30" style="height:calc(100% - 250px);">
              <div class="row">
                <div class="col-7">
                  <p class="font-size-20 blue-grey-700" style="color: #B53F00;display:inline;">Tipo de estudio elegido: &nbsp;</p>
                  <p class="font-size-20" style="color: #B53F00;display:inline;"><?=@$infoAspirantePrepa['nombreTipoEstudio'];?></p>
                  <p class="font-size-20 blue-grey-700" style="color: #B53F00;display:inline;">Tipo de alojamiento elegido: &nbsp;</p>
                  <p class="font-size-20" style="color: #B53F00;display:inline;"><?=@$infoAspirantePrepa['nombreTipoAlojamiento'];?></p>
                </div>
                <div class="col-5">
                  <div class="float-right clearfix">
                    <ul class="list-unstyled">
                      <li class="mb-5 text-truncate">
                          <i class="icon wb-medium-point orange-600 mr-5" aria-hidden="true"></i>Mes: <?=@$infoAspirantePrepa['mes'];?>
                      </li>
                      <li class="mb-5 text-truncate">
                          <i class="icon wb-medium-point green-600 mr-5" aria-hidden="true"></i>Año: <?=@$infoAspirantePrepa['anio'];?>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <?php if(@$infoAspirantePrepa) {;?>
            <p class="font-size-20 blue-grey-700" style="color: #B53F00;margin:25px;">Preparatorias Seleccionadas: &nbsp;</p>
          <?php } ;?>

          <div class="row" style=" overflow-y: hidden;">
            <?php for ($i=0;$i < count(@$preparatorias);$i++) { ?>
              <div class="col-lg-6 col-11">
                <div class="containerC" style="margin: 15px">
                  <div class="card">
                    <div class="img-box">
                      <img src="<?=@$preparatorias[$i]['logoInstitucion']?>" alt="Preparatoria" title="Preparatoria">
                    </div>
                    <div class="content-box">
                      <h2 style="font-size: 20px;"><?=@$preparatorias[$i]['nombreInstitucion']?></h2>
                      <div class="color">
                        <h3>Color :</h3>
                        <span></span>
                        <span></span>
                        <span></span>
                      </div>
                      <a href="javascript:void(0);">
                          Buy Now
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            <?php } ;?>
          </div>
        </div>
      <?php } ;?>
      <!--termina Eligio preparatoria-->

    </div>

    <div class="col-xxl-4 col-lg-5" >
      <div class="card card-shadow" id="widgetStackedBar">
        <div class="card-block p-0">
          <div class="p-30 h-150">
            <p  class="font-size-20 blue-grey-700">Documentos:</p>
          </div>

                <div role="alert" class="alert dark alert-danger alert-avatar alert-dismissible" style="margin: 15px;">

                  <span class="avatar">
                    <img alt="Anglo" src="<?=base_url("resources/assets/Anglo/AngloLatino-sintexto.png");?>">
                  </span>
                  <h2 style="color: white;">! Gracias por confiar en nosotros¡</h2>
                  <p style="font-size: 20px">
                    Por favor sigue el siguiente link para poder comenzar a subir tus archivos.
                  </p>
                  <p class="mt-15">
                    <a type='button' class="btn btn-danger btn-inverse" href="<?=base_url($url)?>">Ir a mis documentos</a>
                    <!-- <button class="btn btn-danger btn-inverse" type="button"></button> -->
                  </p>
                </div>

          <!--termina preparatoria -->

        </div>
      </div>
    </div>
  </div>
</div>
