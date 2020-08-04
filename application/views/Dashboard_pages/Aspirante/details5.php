<style>
    .profile-cart2 {
  max-width: 400px;
  min-height: 500px;
  box-shadow: 0 0 5px 1px rgba(52, 52, 52, 0.224);
  position: relative;
  border-radius: 20px;
  transition: 2s;

}

.profile-cart2:hover {
  box-shadow: 0 0 15px 1px rgba(52, 52, 52, 0.25)
}

.profile-cart2::after {
  content: " ";
  background-image: linear-gradient(135deg, #FFF720 10%, #3CD500 100%);
  clip-path: circle(50% at 50% 1%);
  display: block;
  min-height: 500px;
  transition: 2s;
  border-radius: 20px;
}

.profile-cart2:hover::after {
  content: " ";
  clip-path: circle(100% at 50% 170%);
  transition: 2s;
  display: block;
  min-height: 500px;
  transition: 2s;
  border-radius: 20px;

}


.img2 {
  width: 100px !important;
  height: 100px !important;
  position: absolute;
  top: 78px;
  left: 37%;
  z-index: 99999999;
  transition: 2s;
  border-radius: 100%;
}

.profile-cart2:hover img {

  transform: scale(1.3) translateY(20px);
  transition: 2s;

}

.h12 {
  z-index: 999;
  position: absolute;
  justify-content: center;
  display: flex;
  width: 100%;
  letter-spacing: 2px;
  font-size: 20px;
}

.p2 {
  position: absolute;
  z-index: 999;
  display: flex;
  align-items: center;
  text-align: center;
  top: 50%;
  margin: 0 20px;
  font-size: 18px;
}

.social-area {
  position: absolute;
  bottom: 30px;
  z-index: 999;
  justify-content: center;
  display: flex;
  width: 100%;
}

.social-area a {
  color: rgba(30, 29, 29, 0.85);
}

.social-area svg {
  margin: 20px 20px 0 20px;
  font-size: 25px;
  transition: 4s;
}

.profile-cart2:hover .social-area svg {
  color: white;
  transition: 1s;
}

.profile-cart2 .social-area svg:hover {
  transform: scale(1.5);
}
</style>
<style>

.containerC .card:before {
	background-color: #9bdc28;
	clip-path: circle(150px at 80% 20%);
	content: '';
	height: 100%;
	left: 0;
	position: absolute;
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
<div class="page">
    <div class="page-content container-fluid">
        <div class="row">
            <div class="col-xxl-5 col-lg-5 col-sm-12">
                <div class="profile-cart2">
                    <div class="images"><img class="img2" src="<?=@ ($aspirante['photoUrl']!='NULL') ? $aspirante['photoUrl'] : base_url("resources/assets/Anglo/AngloLatino-sintexto.png") ;?>" alt=""></div>
                    <h1 class="h12"><?=@$aspirante['fullname'];?></h1>
                    <p class="p2">
                        <i class="icon wb-envelope emailicon " aria-hidden="true" style="color: red"></i>
                        &nbsp;&nbsp;
                        <span style="color: black;">Correo:</span>&nbsp; <?=@$aspirante['email'];?>
                        
                    </p>
                    <p class="p2" style="top: 60%;">
                        <i class="icon fa-phone-square callicon" aria-hidden="true" style="color: red"></i>
                        &nbsp;&nbsp;
                        <span style="color: black;">Telefono:</span>&nbsp; <?=@$aspirante['telefono'];?>
                        
                    </p>
                    <p class="p2" style="top: 70%;">
                        <i class="icon fa-flag nationicon" aria-hidden="true" style="color: red"></i>
                        &nbsp;&nbsp;

                        <span style="color: black;">Ciudad:</span>&nbsp; <?=@$aspirante['ciudad'];?>
                        <span style="color: black;margin-left: 10px;">Genero:</span>&nbsp; <?=@$aspirante['genero'];?>
                    </p>
                    <div class="social-area">
                        <a href="tel:<?=@$aspirante['telefono'];?>"><i class="fas fa-phone-square-alt"></i></i></a>
                        <a href=""><i class="fas fa-envelope-open-text"></i></a>
                        <a href="https://api.whatsapp.com/send?phone=<?=@$aspirante['telefono'];?>&text=Hola%20un%20gusto%20saludarte%20!%20<?=@$aspirante['fullname'];?>." target="_blank" ><i class="icon fab fa-whatsapp" aria-hidden="true"></i></a>
                    </div>
                </div>

            </div>
            <div class="col-xxl-7 col-lg-7">
                <div class="card" style="box-shadow: 0 0 5px 1px rgba(52, 52, 52, 0.224);border-radius: 20px;margin-top: 15px;">
                    <div class="card-body">
                    <div class="example-wrap">
                <div class="nav-tabs-horizontal" data-plugin="tabs">
                  <ul class="nav nav-tabs nav-tabs-line tabs-line-top" role="tablist">
                    <li class="nav-item" role="presentation"><a class="nav-link active" data-toggle="tab" href="#infoAspirante" aria-controls="infoAspirante" role="tab" aria-selected="false">Informacion del aspirante</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#instituciones" aria-controls="instituciones" role="tab" aria-selected="true">Instituciones del aspirante</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#exampleTabsLineTopThree" aria-controls="exampleTabsLineTopThree" role="tab">Progreso del aspirante</a></li>
                  </ul>
                  <div class="tab-content pt-20">
                    <div class="tab-pane" id="infoAspirante" role="tabpanel">
                        <div class="form-group">
                            <label class="form-control-label" for="inputBasicEmail">Estudio de interes:</label>
                            <input type="text" class="form-control" value="<?=@$aspirante['programaDeInteres']?>" disabled>
                        </div>
                        <?php if(@$infoAspiranteUni){ ?>
                        <div class="form-group">
                            <label class="form-control-label" for="inputBasicEmail">Facultad:</label>
                            <input type="text" class="form-control" value="<?=@$infoAspiranteUni['nombreFacultad']?>" disabled>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label" for="inputBasicEmail">Tipo de estudio:</label>
                            <input type="text" class="form-control tipoDeEstudio" value="<?=@$infoAspiranteUni['estudiosAspiranteUniversidad']?>" disabled>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label" for="inputBasicEmail">Mes y año de ingreso:</label>
                            <input type="text" class="form-control" value="<?=@$infoAspiranteUni['mes']?>, <?=@$infoAspiranteUni['anio']?>" disabled>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label" for="inputBasicEmail">Carrera elegida:</label>
                            <input type="text" class="form-control" value="<?=@$infoAspiranteUni['carrera']?>" disabled>
                        </div>
                        <?php } ?>
                        <?php if(@$infoAspirantePrepa){ ?>
                            <div class="form-group">
                                <label class="form-control-label" for="inputBasicEmail">Tipo de estudio:</label>
                                <input type="text" class="form-control" value="<?=@$infoAspirantePrepa['nombreTipoEstudio']?>" disabled>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label" for="inputBasicEmail">Tipo de alojamiento:</label>
                                <input type="text" class="form-control tipoDeEstudio" value="<?=@$infoAspirantePrepa['nombreTipoAlojamiento']?>" disabled>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label" for="inputBasicEmail">Mes y año de ingreso:</label>
                                <input type="text" class="form-control" value="<?=@$infoAspirantePrepa['mes']?>, <?=@$infoAspirantePrepa['anio']?>" disabled>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label" for="inputBasicEmail">Carrera elegida:</label>
                                <input type="text" class="form-control" value="<?=@$infoAspirantePrepa['carrera']?>" disabled>
                            </div>
                        <?php } ?>
                                        
                    </div>
                    
                    <div class="tab-pane active" id="instituciones" role="tabpanel">
                      <?php if($universidades){ ?>
                        <div class="row" style=" overflow-y: hidden;">
                          <?php for ($i=0;$i < count($universidades);$i++) { ?>
                            <div class="col-lg-6 col-11">
                              <div class="containerC" style="margin: 15px">
                                <div class="card">
                                  <div class="img-box">
                                    <img src="<?=@$universidades[$i]['logoInstitucion']?>">
                                  </div>
                                  <div class="content-box">
                                    <h2><?=@$universidades[$i]['nombreInstitucion']?></h2>
                                       
                                  </div>
                                </div>
                              </div>
                            </div>
                          <?php } ;?>        
                        </div>
                      <?php }else{ ?>
                        <div class="row" style=" overflow-y: hidden;">
                          <?php for ($i=0;$i < count(@$preparatorias);$i++) { ?>
                            <div class="col-lg-6 col-11">
                              <div class="containerC" style="margin: 15px">
                                <div class="card">
                                  <div class="img-box">
                                    <img src="<?=@$preparatorias[$i]['logoInstitucion']?>">
                                  </div>
                                  <div class="content-box">
                                    <h2 style="font-size: 20px;"><?=@$preparatorias[$i]['nombreInstitucion']?></h2>
                                         
                                  </div>
                                </div>
                              </div>
                            </div>
                          <?php } ;?>     
                        </div>
                      <?php } ?>
                    </div>
                    <div class="tab-pane" id="exampleTabsLineTopThree" role="tabpanel">
                    <ul class="timeline timeline-icon">
                      <li class="timeline-period"><?=$hoy['month'],' ' ,$hoy['year']?></li>
                      <li class="timeline-item timeline-reverse"">
                        <div class="timeline-dot bg-orange-500">
                          <i class="wb-quote-right"></i>
                        </div>
                        <div class="timeline-content">
                          <div class="card card-shadow">
                            <div class="card-header cover">
                              <div class="cover-background p-30" style="background-image: url(https://www.atlanticcouncil.org/wp-content/uploads/2019/12/Westminister-large-1024x683.jpg)">
                                <blockquote class="blockquote cover-quote white card-blockquote">
                                   Cambio su estatus a 5
                                </blockquote>
                                
                              </div>
                              <p class="card-text">
                                El aspirante subio su visa <?=$primeraVisa['lastUpdate']?>
                              </p>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="timeline-item">
                        <div class="timeline-dot bg-green-500">
                          <i class="icon wb-file" aria-hidden="true"></i>
                        </div>
                        <div class="timeline-content">
                          <div class="card card-article card-shadow">
                            
                            <div class="card-block">
                              <h3 class="card-title">Carta de oferta</h3>
                              <p class="card-text">
                                <small><?=$primeraOferta['creationDate']?></small>
                              </p>
                              <p>
                                Se subio la oferta condicional o incondicional , por consiguiente el status cambia a 4<?=$primeraOferta['statusAspirante']?>. </p>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="timeline-item timeline-reverse">
                        <div class="timeline-dot bg-green-500">
                          <i class="icon wb-file" aria-hidden="true"></i>
                        </div>
                        <div class="timeline-content">
                          <div class="card card-article card-shadow">
                            
                            <div class="card-block">
                              <h3 class="card-title">Numero de aplicacion</h3>
                              <p class="card-text">
                                <small><?=$primerCarta['fechaAceptacion']?></small>
                              </p>
                              <p>
                                Se subio el numero de aplicante , por consiguiente el status cambia a 3. </p>
                            </div>
                          </div>
                        </div>
                      </li>
                    <li class="timeline-item"">
                        <div class="timeline-dot bg-orange-500">
                          <i class="wb-quote-right"></i>
                        </div>
                        <div class="timeline-content">
                          <div class="card card-shadow">
                            <div class="card-header cover">
                              <div class="cover-background p-30" style="background-image: url(https://www.atlanticcouncil.org/wp-content/uploads/2019/12/Westminister-large-1024x683.jpg)">
                                <blockquote class="blockquote cover-quote white card-blockquote">
                                    Cambio su estatus a 2R
                                </blockquote>
                                
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="timeline-item timeline-reverse">
                        <div class="timeline-dot bg-green-500">
                          <i class="icon wb-file" aria-hidden="true"></i>
                        </div>
                        <div class="timeline-content">
                          <div class="card card-article card-shadow">
                            
                            <div class="card-block">
                              <h3 class="card-title">Subio su primer documento</h3>
                              <p class="card-text">
                                <small><?=$primerDocumentos['creationDate']?></small>
                              </p>
                              <p>
                                El aspirnate comenzo a subir sus archivos , por consiguiente el status cambia a 2. </p>
                            </div>
                          </div>
                        </div>
                      </li>
                      <br>
                      <li class="timeline-item"">
                        <div class="timeline-dot bg-orange-500">
                          <i class="wb-quote-right"></i>
                        </div>
                        <div class="timeline-content">
                          <div class="card card-shadow">
                            <div class="card-header cover">
                              <div class="cover-background p-30" style="background-image: url(https://www.atlanticcouncil.org/wp-content/uploads/2019/12/Westminister-large-1024x683.jpg)">
                                <blockquote class="blockquote cover-quote white card-blockquote">
                                   Cambio su estatus a 1
                                </blockquote>
                                
                              </div>
                              <p class="card-text">
                                <small><?=$primerRegistroA['creationDateAspirante']?></small>
                              </p>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="timeline-item timeline-reverse"">
                        <div class="timeline-dot bg-orange-500">
                          <i class="wb-quote-right"></i>
                        </div>
                        <div class="timeline-content">
                          <div class="card card-shadow">
                            <div class="card-header cover">
                              <div class="cover-background p-30" style="background-image: url(https://www.atlanticcouncil.org/wp-content/uploads/2019/12/Westminister-large-1024x683.jpg)">
                                <blockquote class="blockquote cover-quote white card-blockquote">
                                   Inicio su proceso con Anglo latino
                                </blockquote>
                                
                              </div>
                              <p class="card-text">
                                <small><?=$primerRegistro['creationDateUsuario']?></small>
                              </p>
                            </div>
                          </div>
                        </div>
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
        <div class="row">
        <div class="card" style="box-shadow: 0 0 5px 1px rgba(52, 52, 52, 0.224);border-radius: 20px;margin-top: 15px;">
          <div class="card-body">
          <div class="example-wrap">
                <div class="nav-tabs-vertical" data-plugin="tabs">
                  <ul class="nav nav-tabs mr-25" role="tablist">
                    <li class="nav-item" role="presentation"><a class="nav-link active" data-toggle="tab" href="#documentosTabs" aria-controls="documentosTabs" role="tab">Documentos</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#cartasTabs" aria-controls="cartasTabs" role="tab">Cartas C/U</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#exampleTabsLeftThree" aria-controls="exampleTabsLeftThree" role="tab">Becas</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#subidosTabs" aria-controls="subidosTabs" role="tab">Subidos</a></li>
                  </ul>
                  <div class="tab-content py-15">
                    <div class="tab-pane active" id="documentosTabs" role="tabpanel">
                      <h4>Los archivos del aspirante estan ubicados en la carpeta: <strong><?=$documentos[0]['pathDisplayCarpeta']?>/</strong>, dentro de la carpeta se encuentran los siguientes documentos:</h4>
                      <hr>
                     <div class="row">
                     
                      <?php if ($documentos) { ?>
                        <?php for ($i=0; $i < count($documentos); $i++) { ?>
                          <div class="col-sm-12 col-md-4 col-xl-3">
                            <div class="card" style="width: 18rem;">
                              <img class="card-img-top" src="https://img.icons8.com/clouds/2x/pdf-2.png" alt="Card image cap" style="max-width: 120px;margin-left: 50px;">
                              <div class="card-body">
                                <h5 class="card-title"><?=$documentos[$i]['nameDocumento']?></h5>
                                <p class="card-text">Fecha: <?=$documentos[$i]['creationDate']?>.</p>
                                <p class="card-text">Estatus: <?=$documentos[$i]['statusDocumento']?>.</p>
                              </div>
                            </div>
                          </div>
                        <?php } ?>
                        
                      <?php } ?>
                      
                     </div>
                     <hr>
                     <p style="font-size: 18px;">Archivos para la aplicacion de la visa:</p>
                     <div class="row">
                     <?php for ($i=0; $i < count($aplicaionVisa); $i++) { ?>
                          <div class="col-sm-12 col-md-4 col-xl-3">
                            <div class="card" style="width: 18rem;">
                              <img class="card-img-top" src="https://img.icons8.com/clouds/2x/pdf-2.png" alt="Card image cap" style="max-width: 120px;margin-left: 50px;">
                              <div class="card-body">
                                <h5 class="card-title"><?=$aplicaionVisa[$i]['nameDocumento']?></h5>
                                <p class="card-text">Fecha: <?=$aplicaionVisa[$i]['creationDate']?>.</p>
                                <p class="card-text">Estatus: <?=$aplicaionVisa[$i]['statusDocumento']?>.</p>
                              </div>
                            </div>
                          </div>
                        <?php } ?>
                     </div>
                     <hr>
                     <div class="row">
                     <?php for ($i=0; $i < count($visa); $i++) { ?>
                          <div class="col-sm-12 col-md-4 col-xl-3">
                            <div class="card" style="width: 18rem;">
                              <img class="card-img-top" src="https://img.icons8.com/clouds/2x/pdf-2.png" alt="Card image cap" style="max-width: 120px;margin-left: 50px;">
                              <div class="card-body">
                                <h5 class="card-title"><?=$visa[$i]['nameDocumento']?></h5>
                                <p class="card-text">Fecha: <?=$visa[$i]['creationDate']?>.</p>
                                <p class="card-text">Estatus: <?=$visa[$i]['statusDocumento']?>.</p>
                              </div>
                            </div>
                          </div>
                        <?php } ?>
                     </div>
                    </div>
                    <div class="tab-pane" id="cartasTabs" role="tabpanel">
                    <h4>Aqui podran ver las intituciones del aspirante , con sus cartas condicionales o incondicionales podras tambien agregar nuevas asi como nuevas cartas</h4>
                    <?php if(@$universidades) { ?>
                        <div class="form-group">
                            <label class="form-control-label" for="inputBasicEmail">Añadir nueva institucion:</label>
                            <br>
                            <button type="button" class="btn btn-warning" data-target="#exampleNiftyFadeScale" data-toggle="modal">Añadir</button>                                        
                        </div>
                    <?php }else{ ;?>
                        <div class="form-group">
                            <label class="form-control-label" for="inputBasicEmail">Añadir nueva institucion:</label>
                            <br>
                            <button type="button" class="btn btn-warning" data-target="#exampleNiftyFadeScalePrepa" data-toggle="modal">Añadir</button>                                        
                        </div>
                    <?php } ;?>
                  <div class="row">
                <?php if(@$universidadesOfertas) { ?>
                    <?php for($i=0; $i< count(@$universidadesOfertas);$i++) { ?>
                        <div class="col-lg-5 col-sm-12 col-md-12" style="margin: 30px;">
                            <div class="card card-shadow text-center">
                                <div class="card-block">
                                <img src="<?=@$universidadesOfertas[$i]['logoInstitucion']?>" style="max-width: 300px;">
                                
                                <h4 class="profile-user"><?=@$universidadesOfertas[$i]['nombreInstitucion']?></h4>
                                <?php if ($universidadesOfertas[$i]['numeroAceptacion']) { ?>
                                  <p class="profile-job" style="font-weight: normal;">Numero de aplicacion: </p><p>
                                    <?=@$universidadesOfertas[$i]['numeroAceptacion']?></p>
                                    <p class="profile-job" style="font-weight: normal;">Fecha de aplicacion: </p><p>
                                    <?=@$universidadesOfertas[$i]['fechaAceptacion']?></p>
                                  
                                  
                                <?php }else { ?>
                                  <div class="row">
                                                    <div class="alertSolicitud-<?=$universidades[$i]['idInstitucionAspiranteUniversidades']?>" style="margin: 10px;"></div>
                                                    <div class="col-12">
                                                        <div class="form-group form-material floating" data-plugin="formMaterial">
                                                            <input type="text" class="form-control empty" name="solicitud-<?=$universidades[$i]['idInstitucionAspiranteUniversidades']?>" placeholder="Numero de solicitud" id="solicitud-<?=$universidades[$i]['idInstitucionAspiranteUniversidades']?>" data-plugin="maxlength" maxlength="10">
                                                        </div>                                              
                                                    </div>
                                                    <div class="col-12">
                                                        <button type="button" class="btn btn-outline btn-success btn-numeroAceptacion" id="<?=$universidades[$i]['idInstitucionAspiranteUniversidades']?>">Crear</button>
                                                    </div>
                                                </div>
                                <?php } ?>
                                </div>
                                <div class="card-footer" style="background-color: #FFED78">
                                      <div class="row no-space">
                                      <div class="col-12">
                                      </div>
                                      </div>
                                  </div>
                                
                                
                            </div>
                        </div>
                        <div class="col-lg-5 col-sm-12" style="margin: 30px;">
                            <?php if($universidadesOfertas[$i]['numeroAceptacion']) { ?>
                                <?php if(! $universidadesOfertas[$i]['idDocumento'] ) { ?>
                                    <label style="font-size: 16px;">Selecciona la casilla correspondiente:</label>
                                    <input type="hidden" id="aspiranteKey" value="<?=$aspirante['aspirante']?>">
                                    <input type="hidden" id="nameCarpeta" value="<?=$carpetaName?>">
                                    <input type="hidden" id="uniName" value="<?=$universidadesOfertas[$i]['nombreInstitucion']?>">

                                    <div class="alertOferta-<?=$universidadesOfertas[$i]['idInstitucionAspiranteUniversidades']?>"></div>
                                    <div class="row" style="margin-left: 10px;">
                                        <div class="radio-custom radio-danger" style="margin-right: 10px;">
                                            <input type="radio" id="radio" name="radio-<?=$universidadesOfertas[$i]['idInstitucionAspiranteUniversidades']?>" value="U">
                                            <label for="inputRadiosUnchecked">U</label>
                                        </div>
                                        <div class="radio-custom radio-danger">
                                            <input type="radio" id="radio2" name="radio-<?=$universidadesOfertas[$i]['idInstitucionAspiranteUniversidades']?>" value="C">
                                            <label for="inputRadiosChecked">C</label>
                                        </div>
                                    </div> 
                                    <hr>
                                    <form id="ofertaForm-<?=$universidadesOfertas[$i]['idInstitucionAspiranteUniversidades']?>">
                                        <div class="ofertaFormAlert-<?=$universidadesOfertas[$i]['idInstitucionAspiranteUniversidades']?>">
                                        </div>
                                        <label style="font-size: 16px;">Documento en PDF</label>
                                        <input type="file" data-plugin="dropify" id="ofertaCU" name="ofertaCU" data-allowed-file-extensions="pdf" data-errors-position="outside">  
                                        <button type="button" class="btn btn-block btn-info btn-ofertaCU" style="margin-top:10%;margin-bottom: 10%;" id="<?=$universidadesOfertas[$i]['idInstitucionAspiranteUniversidades']?>">Subir</button>
                                    </form>
                                <?php }else { ?>
                                    <?php if ($universidadesOfertas[$i]['statusAspirante']) { ?>
                                        <div class="example-wrap">
                                            <h4 class="example-title">Nombre del documento:</h4>
                                            <input type="text" class="form-control" id="inputDisabled"  disabled="" value="<?=$universidadesOfertas[$i]['nameDocumento']?>" style="color: black;background-color: plum;font-size: 15px;">
                                        </div>
                                        <br>
                                        <br>
                                        <div class="example-wrap" style="margin-top: -40px;">
                                            <h4 class="example-title">Ubicacion del documento:</h4>
                                            <input type="text" class="form-control" id="inputDisabled"  disabled="" value="<?=$universidadesOfertas[$i]['pathDisplayDocumento']?>" style="color: black;background-color: plum;font-size: 15px;">
                                        </div>
                                        <br>
                                        <br>
                                        <div class="example-wrap"  style="margin-top: -40px;">
                                            <h4 class="example-title">Fecha de creacion del documento:</h4>
                                            <input type="text" class="form-control" id="inputDisabled"  disabled="" value="<?=$universidadesOfertas[$i]['creationDate']?>" style="color: black;background-color: plum;font-size: 15px;">
                                        </div>
                                        <br>
                                        <br>
                                        <div class="example-wrap"  style="margin-top: -40px;">
                                            <h4 class="example-title">Estatus de la oferta:</h4>
                                            <input type="text" class="form-control" id="inputDisabled"  disabled="" value="<?=$universidadesOfertas[$i]['statusAspirante']?>" style="color: black;background-color: plum;font-size: 15px;">
                                        </div>
                                        <br>
                                        <br>
                                    <?php }else { ?>
                                        <label style="font-size: 16px;">Selecciona la casilla correspondiente:</label>
                                        <hr>
                                        <input type="hidden" id="idReal-<?=$universidadesOfertas[$i]['idInstitucionAspiranteUniversidades']?>" value="<?=$universidadesOfertas[$i]['idReal']?>">
                                        <div class="alertOferta4-<?=$universidadesOfertas[$i]['idInstitucionAspiranteUniversidades']?>"></div>

                                        <div class="row" style="margin-left: 10px;">
                                            <div class="radio-custom radio-danger" style="margin-right: 10px;">
                                                <input type="radio" id="radio" name="radioOnly-<?=$universidadesOfertas[$i]['idInstitucionAspiranteUniversidades']?>" value="U">
                                                <label for="inputRadiosUnchecked">U</label>
                                            </div>
                                            <div class="radio-custom radio-danger">
                                                <input type="radio" id="radio2" name="radioOnly-<?=$universidadesOfertas[$i]['idInstitucionAspiranteUniversidades']?>" value="C">
                                                <label for="inputRadiosChecked">C</label>
                                            </div>
                                        </div> 
                                        <button type="button" class="btn btn-block btn-info btn-ChangeStatusNew" style="margin-top:10%;margin-bottom: 10%;" id="<?=$universidadesOfertas[$i]['idInstitucionAspiranteUniversidades']?>">Subir</button>

                                        <hr>
                                        <div class="example-wrap">
                                            <h4 class="example-title">Nombre del documento:</h4>
                                            <input type="text" class="form-control" id="inputDisabled"  disabled="" value="<?=$universidadesOfertas[$i]['nameDocumento']?>" style="color: black;background-color: plum;font-size: 15px;">
                                        </div>
                                        <div class="example-wrap" style="margin-top: -40px;">
                                            <h4 class="example-title">Ubicacion del documento:</h4>
                                            <input type="text" class="form-control" id="inputDisabled"  disabled="" value="<?=$universidadesOfertas[$i]['pathDisplayDocumento']?>" style="color: black;background-color: plum;font-size: 15px;">
                                        </div>
                                        <div class="example-wrap"  style="margin-top: -40px;">
                                            <h4 class="example-title">Fecha de creacion del documento:</h4>
                                            <input type="text" class="form-control" id="inputDisabled"  disabled="" value="<?=$universidadesOfertas[$i]['creationDate']?>" style="color: black;background-color: plum;font-size: 15px;">
                                        </div>

                                    <?php }?>
                                    
                                <?php } ?>
                            <?php } ?> 
                        </div>
                    <?php } ?>
                <?php } ?>
            </div>
            <div class="row">
                <?php if(@$preparatoriasOfertas) { ?>
                    <?php for($i=0; $i< count(@$preparatoriasOfertas);$i++) { ?>
                        <div class="col-lg-5 col-sm-12 col-md-12" style="margin: 30px;">
                            <div class="card card-shadow text-center">
                                <div class="card-block">
                                <img src="<?=@$preparatoriasOfertas[$i]['logoInstitucion']?>" style="max-width: 300px;">
                                
                                <h4 class="profile-user"><?=@$preparatoriasOfertas[$i]['nombreInstitucion']?></h4>
                                <p class="profile-job" style="font-weight: normal;">Numero de aplicacion: </p><p>
                                    <?=@$preparatoriasOfertas[$i]['numeroAceptacion']?></p>
                                    <p class="profile-job" style="font-weight: normal;">Fecha de aplicacion: </p><p>
                                    <?=@$preparatoriasOfertas[$i]['fechaAceptacion']?></p>
                                </div>
                                <div class="card-footer" style="background-color: #FFED78">
                                    <div class="row no-space">
                                    <div class="col-12">
                                    </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-lg-5 col-sm-12" style="margin: 30px;">
                            <?php if($preparatoriasOfertas[$i]['numeroAceptacion']) { ?>
                                <?php if(! $preparatoriasOfertas[$i]['idDocumento'] ) { ?>
                                    <label style="font-size: 16px;">Selecciona la casilla correspondiente:</label>
                                    <input type="hidden" id="aspiranteKeyPrepa" value="<?=$aspirante['aspirante']?>">
                                    <input type="hidden" id="nameCarpetaPrepa" value="<?=$carpetaName?>">
                                    <input type="hidden" id="uniNamePrepa" value="<?=$preparatoriasOfertas[$i]['nombreInstitucion']?>">
                                    <div class="alertOfertaPrepa-<?=$preparatoriasOfertas[$i]['idInstitucionAspirantePreparatorias']?>"></div>
                                    <div class="row" style="margin-left: 10px;">
                                        <div class="radio-custom radio-danger" style="margin-right: 10px;">
                                            <input type="radio" id="radio3" name="radioPrepa-<?=$preparatoriasOfertas[$i]['idInstitucionAspirantePreparatorias']?>" value="U">
                                            <label for="inputRadiosUnchecked">U</label>
                                        </div>
                                        <div class="radio-custom radio-danger">
                                            <input type="radio" id="radio4" name="radioPrepa-<?=$preparatoriasOfertas[$i]['idInstitucionAspirantePreparatorias']?>" value="C">
                                            <label for="inputRadiosChecked">C</label>
                                        </div>
                                    </div> 
                                    <hr>
                                    <form id="ofertaFormPrepa-<?=$preparatoriasOfertas[$i]['idInstitucionAspirantePreparatorias']?>">
                                        <div class="ofertaFormAlertPrepa-<?=$preparatoriasOfertas[$i]['idInstitucionAspirantePreparatorias']?>">
                                        </div>
                                        <label style="font-size: 16px;">Documento en PDF</label>
                                        <input type="file" data-plugin="dropify" id="ofertaCUPrepa" name="ofertaCUPrepa" data-allowed-file-extensions="pdf" data-errors-position="outside">  
                                        <button type="button" class="btn btn-block btn-info btn-ofertaCUPrepa" style="margin-top:10%;margin-bottom: 10%;" id="<?=$preparatoriasOfertas[$i]['idInstitucionAspirantePreparatorias']?>">Subir</button>
                                    </form>
                                <?php }else { ?>
                                    <?php if ($preparatoriasOfertas[$i]['statusAspirante']) { ?>
                                        <div class="example-wrap">
                                            <h4 class="example-title">Nombre del documento:</h4>
                                            <input type="text" class="form-control" id="inputDisabled"  disabled="" value="<?=$preparatoriasOfertas[$i]['nameDocumento']?>" style="color: black;background-color: plum;font-size: 15px;">
                                        </div>
                                        <br>
                                        <br>
                                        <div class="example-wrap" style="margin-top: -40px;">
                                            <h4 class="example-title">Ubicacion del documento:</h4>
                                            <input type="text" class="form-control" id="inputDisabled"  disabled="" value="<?=$preparatoriasOfertas[$i]['pathDisplayDocumento']?>" style="color: black;background-color: plum;font-size: 15px;">
                                        </div>
                                        <br>
                                        <br>
                                        <div class="example-wrap"  style="margin-top: -40px;">
                                            <h4 class="example-title">Fecha de creacion del documento:</h4>
                                            <input type="text" class="form-control" id="inputDisabled"  disabled="" value="<?=$preparatoriasOfertas[$i]['creationDate']?>" style="color: black;background-color: plum;font-size: 15px;">
                                        </div>
                                        <br>
                                        <br>
                                        <div class="example-wrap"  style="margin-top: -40px;">
                                            <h4 class="example-title">Estatus de la oferta:</h4>
                                            <input type="text" class="form-control" id="inputDisabled"  disabled="" value="<?=$preparatoriasOfertas[$i]['statusAspirante']?>" style="color: black;background-color: plum;font-size: 15px;">
                                        </div>
                                    <?php }else { ?>
                                        <label style="font-size: 16px;">Selecciona la casilla correspondiente:</label>
                                        <hr>
                                        <input type="hidden" id="idReal-<?=$preparatoriasOfertas[$i]['idInstitucionAspirantePreparatorias']?>" value="<?=$preparatoriasOfertas[$i]['idReal']?>">
                                        <div class="alertOferta4-<?=$preparatoriasOfertas[$i]['idInstitucionAspirantePreparatorias']?>"></div>

                                        <div class="row" style="margin-left: 10px;">
                                            <div class="radio-custom radio-danger" style="margin-right: 10px;">
                                                <input type="radio" id="radio" name="radioOnlyPrepa-<?=$preparatoriasOfertas[$i]['idInstitucionAspirantePreparatorias']?>" value="U">
                                                <label for="inputRadiosUnchecked">U</label>
                                            </div>
                                            <div class="radio-custom radio-danger">
                                                <input type="radio" id="radio2" name="radioOnlyPrepa-<?=$preparatoriasOfertas[$i]['idInstitucionAspirantePreparatorias']?>" value="C">
                                                <label for="inputRadiosChecked">C</label>
                                            </div>
                                        </div> 
                                        <button type="button" class="btn btn-block btn-info btn-ChangeStatusPrepa" style="margin-top:10%;margin-bottom: 10%;" id="<?=$preparatoriasOfertas[$i]['idInstitucionAspirantePreparatorias']?>">Subir</button>

                                        <hr>
                                        <div class="example-wrap">
                                            <h4 class="example-title">Nombre del documento:</h4>
                                            <input type="text" class="form-control" id="inputDisabled"  disabled="" value="<?=$preparatoriasOfertas[$i]['nameDocumento']?>" style="color: black;background-color: plum;font-size: 15px;">
                                        </div>
                                        <div class="example-wrap" style="margin-top: -40px;">
                                            <h4 class="example-title">Ubicacion del documento:</h4>
                                            <input type="text" class="form-control" id="inputDisabled"  disabled="" value="<?=$preparatoriasOfertas[$i]['pathDisplayDocumento']?>" style="color: black;background-color: plum;font-size: 15px;">
                                        </div>
                                        <div class="example-wrap"  style="margin-top: -40px;">
                                            <h4 class="example-title">Fecha de creacion del documento:</h4>
                                            <input type="text" class="form-control" id="inputDisabled"  disabled="" value="<?=$preparatoriasOfertas[$i]['creationDate']?>" style="color: black;background-color: plum;font-size: 15px;">
                                        </div>

                                    <?php }?>
                                <?php } ?>
                            <?php } ?> 
                        </div>
                    <?php } ?>
                <?php } ?>
            </div>
                    </div>
                    <div class="tab-pane" id="exampleTabsLeftThree" role="tabpanel">
                      Chrysippe rebus institutionem utrisque dixisset manus quippiam ignorare defatigatio
                      doctiores, essent doctus ipsam tamquam complexiones corporisque,
                      ars umbram sentiri venandi. Ipsam. Reprehenderit tantum debent
                      sicine assumenda comprobavit, assumenda primos fuerit atomos
                      amicorum inducitur quaedam miserum, potitur numquid effluere
                      haeret ipsos consuetudine, munere putet fugiendis orationis
                      quantumcumque. Perferendis attento saluti liberatione contra,
                      constituam efficeret quaeso accusamus quieti petat rem nisi
                      amicum.
                    </div>
                    <div class="tab-pane" id="subidosTabs" role="tabpanel">
                    <input type="hidden" value="<?=$aspirante['aspirante']?>" name="aspiranteKey" id="aspiranteKey">
            <form style="margin: 20px;margin-top: -50px;" id="formUpload">
                <div class="alert"></div>
                <input type="file" data-plugin="dropify" id="archivo" name="archivo" data-errors-position="outside">  
                <button type="button" class="btn btn-success btn-block" id="btn-form"><i class="icon fa-send" aria-hidden="true"></i>Subir</button>            
            </form>
                    <?php if($documentosAspirantes) { ?>
                        <?php for($i=0;$i<count(@$documentosAspirantes);$i++) { ?>
                            <div class="row" style="margin-top: 15px;">
                                <div class="col-9">
                                    <span style="font-size: 15px;color: #171A21;">                            
                                        <?=@$documentosAspirantes[$i]['nameDocumento']?>
                                    </span>
                                </div>
                                <div class="col-3">
                                    <a type="button" class="btn btn-block" style="background-color:#171A21;color:white;" href="http://localhost/angloApi<?=@$documentosAspirantes[$i]['urlDA']?>" download="<?=@$documentosAspirantes[$i]['nameDocumento']?>"><i class="icon fa-download" aria-hidden="true"></i></a>
                                </div>
                                <div class="col-12">
                                    <hr style="border-top: 3px solid red;">
                                </div>
                            </div>
                        <?php } ?>
                        
                    <?php } ?> 
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
        </div> 
  
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>

<div class="modal fade modal-fade-in-scale-up" id="exampleNiftyFadeScale" aria-labelledby="exampleModalTitle" role="dialog" tabindex="-1" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-simple">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
            </button>
            <h4 class="modal-title">Añadir nueva institucion al aspirante</h4>
        </div>
        <form id="institucionAddNew">
            <input type="hidden" name="aspiranteUniversidad" id="aspiranteUniversidad" value="<?=$infoAspiranteUni['idAspiranteUniversidad']?>">
            <div class="modal-body">
                <select class="form-control" name="instituciones" id="instituciones" data-plugin="select2">
                    <option value="" disabled selected>Elige una opcion</option>
                    <?php for ($i=0; $i < count($unisAdd); $i++) {  ;?>
                        <option value="<?=$unisAdd[$i]['idInstitucion']?>"><?=$unisAdd[$i]['nombreInstitucion'];?></option>
                    <?php } ;?>
                </select>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </form>
        
        </div>
    </div>
</div>

<div class="modal fade modal-fade-in-scale-up" id="exampleNiftyFadeScalePrepa" aria-labelledby="exampleModalTitle" role="dialog" tabindex="-1" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-simple">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
            </button>
            <h4 class="modal-title">Añadir nueva institucion al aspirante</h4>
        </div>
        <form id="institucionAddNewPrepa">
            <input type="hidden" name="aspirantePrepa" id="aspirantePrepa" value="<?=$infoAspirantePrepa['idAspirantePreparatoria']?>">
            <div class="modal-body">
                <select class="form-control" name="instituciones" id="instituciones" data-plugin="select2">
                    <option value="" disabled selected>Elige una opcion</option>
                    <?php for ($i=0; $i < count($prepasAdd); $i++) {  ;?>
                        <option value="<?=$prepasAdd[$i]['idInstitucion']?>"><?=$prepasAdd[$i]['nombreInstitucion'];?></option>
                    <?php } ;?>
                </select>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </form>
        
        </div>
    </div>
</div>