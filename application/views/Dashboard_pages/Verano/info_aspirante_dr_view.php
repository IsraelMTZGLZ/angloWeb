
  <style media="screen">
    :root {
      --border-radius-size: 14px;
      --barbarian: #EC9B3B;
      --archer: #EE5487;
        --giant: #F1C40F;
        --goblin:   #11C26D;
        --wizard:   #f2353c;

      }

      .userDatos{
        font-size: 16px;
        color: black;
      font-weight: 200;
      margin-bottom: 5px;
    }
    .userName{
      font-size: 19px;
      color: black;
      font-weight: 400;
      margin-bottom: 5px;
    }
    .emailicon{
      font-size: 16px;
      color: #4FACFF;
      font-weight: 250;clash-card__unit-stats--goblin
      margin-bottom: 5px;
    }
      .callicon{
        font-size: 18px;
        color: #4FACFF;
        font-weight: 250;
        margin-bottom: 5px;
      }

      .iconcheck{
        font-size: 20px;
        color: #4FACFF;
        font-weight: 250;
        margin-bottom: 5px;
      }

      .nationicon{
        font-size: 18px;
        color: #4FACFF;
        font-weight: 250;
        margin-bottom: 5px;
      }

      .resumen{

        font-size: 22px;
        color: #0bb2d4;
        font-weight: 250;
        margin-bottom: 5px;
      }
      .card-element{
        background: white;
        width: auto;
        display: inline-block;

        text-align: center;
        box-shadow: -1px 1px 20px -12px #3e8ef7;
      }
      .clash-card__unit-stats--barbarian {
        background:var(--barbarian);


      }


      .clash-card__unit-stats--archer {
        background: var(--archer);


      }

      .clash-card__unit-stats--giant {
        background: var(--giant);

      }

      .clash-card__unit-stats--goblin {
        background: var(--goblin);

      }

      .clash-card__unit-stats--wizard {
        background: var(--wizard);

      }


      .stat {
      font-size: 18px;
      color: white;
      }

      .reviciones{
        align: center;
      }
      .upicon{
        /* position:relative;
        top: 5px; */
      }
      .icon-Status{

        color: white;
        position:relative;
        top: -10px;
      }
    </style>



  <!-- Page -->
  <div class="page">
    <div class="page-header">
      <h1 align="center" class="page-title">Cursos de  Verano  </h1>
      <h1 class="page-title">Información de <?=@$aspirante['firstNamePersona'];?> <?=@$aspirante['lastNamePersona'];?></h1>
      <input type="hidden" id="aspirante" value="<?=@$aspirante['idAspirante'];?>" name="aspirante">
      <input type="hidden" id="idDocFormOne" value="<?=@$idDocFormOne;?>" name="idDocFormOne">
      <input type="hidden" id="idDocFormTwo" value="<?=@$idDocFormTwo;?>" name="idDocFormTwo">
      <input type="hidden" id="idDocFormThree" value="<?=@$idDocFormThree;?>" name="idDocFormThree">
      <input type="hidden" id="NameLastName" value="<?=@$aspirante['firstNamePersona'];?> <?=@$aspirante['lastNamePersona'];?>" name="NameLastName">
      <input type="hidden" id="idinfDocment" value="<?=@$idinfDocment;?>" name="idinfDocment">
      <input type="hidden" id="idInstitucionOne" value="<?=@$instOne['idInstitucion'];?>" name="idInstitucionOne">
      <input type="hidden" id="idInstitucionTwo" value="<?=@$instTwo['idInstitucion'];?>" name="idInstitucionTwo">
      <input type="hidden" id="idInstitucionThree" value="<?=@$instThree['idInstitucion'];?>" name="idInstitucionThree">
      <input type="hidden" id="NameInstOne" value="<?=@$instOne['nombreInstitucion'];?>" name="NameInstOne">
      <input type="hidden" id="NameInstTwo" value="<?=@$instTwo['nombreInstitucion'];?>" name="NameInstTwo">
      <input type="hidden" id="NameInstThree" value="<?=@$instThree['nombreInstitucion'];?>" name="NameInstThree">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="../index.html">Cursos de Verano</a></li>
        <li class="breadcrumb-item"><a href="javascript:void(0)">Información</a></li>
      </ol>

    </div>
    <div class="page-content container-fluid">
      <div class="row">
        <!-- Left Column -->
        <div class="col-lg-6 col-xl-3 order-xl-1">
          <div class="user-info card card-shadow text-center">
            <div class="user-base card-block">
              <a class="avatar img-bordered avatar-100" href="javascript:void(0)">
                <img src="<?=base_url('resources/assets/Informativa/images/9.jpg');?>" alt="...">
              </a>
              <p class="userName"><?=@$aspirante['firstNamePersona'];?></p>
              <p class="userDatos"><?=@$aspirante['lastNamePersona'];?></p>
              <p class="user-job">Correo</p>
              <p class="userDatos"><i class="icon wb-envelope emailicon " aria-hidden="true"></i> <?=@$aspirante['emailUsuario'];?></p>
              <p class="user-job">Teléfono</p>
              <p class="userDatos"><i class="icon fa-phone-square callicon" aria-hidden="true"></i> <?=@$aspirante['telefonoAspirante'];?></p>
              <p class="user-job">Ciudad</p>
              <p class="userDatos"><i class="icon fa-flag nationicon" aria-hidden="true"></i> <?=@$aspirante['ciudadAspirante'];?></p>
              <p class="user-job">Género</p>
                <p class="userDatos"><i class="icon fa-user nationicon" aria-hidden="true"></i> <?=@$aspirante['generoPersona'];?></p>
            </div>

            <div class="user-actions" >
              <button class="btn btn-primary btn-round"  type="button" name="follow"><?=@$aspirante['statusUsuario'];?></button>
            </div>

          </div>
          <!-- End User Info -->
          <!-- Friend List -->
          <div class="user-friends card card-shadow">
            <div class="card-block">
              <h4 class="card-title mb-20">
                <i class="icon wb-clipboard resumen"></i>
                Resumen de seguimiento
              </h4>

              <div class="card-block">
                <h5 class="card-title">
                  <i class="icon fa-child iconcheck"></i>
                  <span>Edad</span>
                </h5>

                <ul class="user-skills list-unstyled" >
                  <li class="skill " >

                    <div class="skill-num col-2">
                      <span class="badge badge-pill badge-dark badge-outline p-10"><?=@$infAspirante['abreviacionEdad'];?> </span>
                    </div>
                    <div class="skill-name vertical-align-middle">
                    <?=@$infAspirante['nombreEdad'];?> <?=@$infAspirante['edadEdad'];?>
                    </div>
                  </li>

                </ul>
              </div>

              <div class="card-block">
                <h5 class="card-title">
                  <i class="icon fa-university iconcheck"></i>
                  <span>Campamento</span>
                </h5>
                <ul class="user-skills list-unstyled">

                  <li class="skill">
                    <div class="skill-num col-2">
                      <span class="badge badge-pill badge-primary badge-outline p-10"><?=@$infAspirante['abreviacionCampamento'];?></span>
                    </div>
                    <div class="skill-name vertical-align-middle">
                      <?=@$infAspirante['nombreCampamento'];?>
                    </div>

                  </li>

                </ul>
              </div>

              <div class="card-block">
                <h5 class="card-title">
                  <i class="icon fa-home iconcheck"></i>
                  <span>Tipo Alojamiento</span>
                </h5>
                <ul class="user-skills list-unstyled">

                  <li class="skill">
                    <div class="skill-num col-2">
                      <span class="badge badge-pill badge-success badge-outline p-10"><?=@$infAspirante['abreviacionTipoAlojamiento'];?></span>
                    </div>
                    <div class="skill-name vertical-align-middle">
                      <?=@$infAspirante['nombreTipoAlojamiento'];?>
                    </div>

                  </li>
                </ul>
              </div>

            </div>
          </div>

        </div>
        <div class="col-lg-12 col-xl-6 order-xl-2">

          <!-- User Content Release -->
          <div class="user-release card card-shadow">

            <div class="card-block ">
              <h4 class="card-title mb-0">Progreso</h4>
              <div class="example-wrap">
                <div class="example">

                  <div class="progress progress-lg">
                    <div class="progress-bar progress-bar-success" style="width: <?=$progreso;?>;" role="progressbar"><?=$progreso;?></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- End User Content Release -->

          <!-- User Posts -->
          <div class="user-posts card card-shadow">
            <div class="card-block">
              <h4 class="card-title mb-20">Mis instituciones elegidas</h4>
              <div class="card-deck">
                <?php if( @$InstOneInfo!= NULL ) { ;?>
                <div class="card card-element">
                    <img class="card-img-top w-full" src="<?=base_url('resources/assets/Informativa/images/uk_universities.jpg');?>" alt="Imagen Institucion" alt="Card image cap">
                    <div class="card-block">
                      <h4 class="card-title" align="center"><?=@$instOne['nombreInstitucion'];?></h4>
                      <p class="card-text" align="center"></p>
                      <p class="card-text hidden-md-down" align="center"><?=@$instOne['ubicacionInstitucion'] ? $instOne['ubicacionInstitucion'] : 'London' ;?>.</p>

                    </div>
                    <?php if( @$numAplicanteOne== NULL ) { ;?>
                    <div class="text-center">
                        <form id="FormAplicantNumber">
                          <div class="form-group col-md-12">
                            <label class="form-control-label" for="inputBasicFirstName">Ingresa el número la aplicante</label>
                            <input type="number"   maxlength="9" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"  name="NumberAplicantVInglesOne" id="NumberAplicantVInglesOne" value=""  class="form-control"   autocomplete="off" />
                          </div>
                        </form>
                    </div>
                    <br>
                    <div class="text-center">
                      <button type="button" class="btn btn-primary ladda-button btn-postNumAplicanteVIngOne" data-style="expand-left"
                        data-plugin="ladda" data-type="progress" id="file"><span class="ladda-label"><i class="icon wb-upload mr-10" aria-hidden="true"></i>Subir</span>
                      </button>
                    </div>
                    <br>
                    <?php } ?>
                    <?php if( @$numAplicanteOne!= NULL ) { ;?>
                      <div class="text-center">
                          <form id="FormAplicantNumber">
                            <div class="form-group col-md-12">
                              <label class="form-control-label" for="inputBasicFirstName">Número la aplicante</label>
                              <input type="number"   name="NumberAplicantVInglesThree" id="NumberAplicantVInglesThree" value="<?=@$numAplicanteOne['numeroAplicante'];?>"  class="form-control"   autocomplete="off" disabled/>
                              <label class="form-control-label" for="inputBasicFirstName">Fecha de registro</label>
                              <input type="text"   name="NumberAplicantVInglesThree" id="NumberAplicantVInglesThree" value="<?=@$numAplicanteOne['CD'];?>"  class="form-control"   autocomplete="off" disabled/>
                            </div>
                          </form>
                      </div>
                      <br>
                    <?php } ?>
                    <div class="clash-card__unit-stats <?='clash-card__unit-stats--goblin' ;?> clearfix">
                      <div class="one-third">
                        <div class="stat"><?=@$instOne['statusInstitucion'];?> </div>
                      </div>
                    </div>
                  </div>
                  <?php } ?>
                  <?php if( @$InstTwoInfo!= NULL ) { ;?>
                  <div class="card card-element">
                    <img class="card-img-top w-full" src="<?=base_url('resources/assets/Informativa/images/vv_Eastbourne.png');?>" alt="Imagen Institucion" alt="Card image cap">
                    <div class="card-block">
                      <h4 class="card-title" align="center"><?=@$instTwo['nombreInstitucion'];?></h4>
                      <p class="card-text" align="center"></p>
                      <p class="card-text hidden-md-down" align="center"><?=@$instTwo['ubicacionInstitucion'] ? $instTwo['ubicacionInstitucion'] : 'London' ;?>.</p>

                    </div>
                    <?php if( @$numAplicanteTwo== NULL ) { ;?>
                    <div class="text-center">
                        <form id="FormAplicantNumber">
                          <div class="form-group col-md-12">
                            <label class="form-control-label" for="inputBasicFirstName">Ingresa el número la aplicante</label>
                            <input type="number"   maxlength="9" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"  name="NumberAplicantVInglesTwo" id="NumberAplicantVInglesTwo" value=""  class="form-control"   autocomplete="off" />
                          </div>
                        </form>
                    </div>
                    <br>
                    <div class="text-center">
                      <button type="button" class="btn btn-primary ladda-button btn-postNumAplicanteVIngTwo" data-style="expand-left"
                        data-plugin="ladda" data-type="progress" id="file"><span class="ladda-label"><i class="icon wb-upload mr-10" aria-hidden="true"></i>Subir</span>
                      </button>
                    </div>
                    <br>
                    <?php }else{ ;?>
                      <div class="text-center">
                          <form id="FormAplicantNumber">
                            <div class="form-group col-md-12">
                              <label class="form-control-label" for="inputBasicFirstName">Número la aplicante</label>
                              <input type="number"   name="NumberAplicantVInglesThree" id="NumberAplicantVInglesThree" value="<?=@$numAplicanteTwo['numeroAplicante'];?>"  class="form-control"   autocomplete="off" disabled/>
                              <label class="form-control-label" for="inputBasicFirstName">Fecha de registro</label>
                              <input type="text"   name="NumberAplicantVInglesThree" id="NumberAplicantVInglesThree" value="<?=@$numAplicanteTwo['CD'];?>"  class="form-control"   autocomplete="off" disabled/>
                            </div>
                          </form>
                      </div>
                      <br>
                    <?php } ?>
                    <div class="clash-card__unit-stats <?='clash-card__unit-stats--goblin' ;?> clearfix">
                      <div class="one-third">
                        <div class="stat"><?=@$instTwo['statusInstitucion'];?></div>
                      </div>
                    </div>
                   </div>

                  <?php } ?>
                  <?php if( @$InstThreeInfo!= NULL ) { ;?>
                  <div class="card card-element">
                    <img class="card-img-top w-full" src="<?=base_url('resources/assets/Informativa/images/uk_universities.jpg');?>" alt="Imagen Institucion" alt="Card image cap">
                    <div class="card-block">
                      <h4 class="card-title" align="center"><?=@$instThree['nombreInstitucion'];?></h4>
                      <p class="card-text" align="center" ></p>
                      <p class="card-text hidden-md-down" align="center"><?=@$instThree['ubicacionInstitucion'] ? $instThree['ubicacionInstitucion'] : 'London' ;?>.</p>

                    </div>
                    <?php if( @$numAplicanteThree== NULL ) { ;?>
                    <div class="text-center">
                        <form id="FormAplicantNumber">
                          <div class="form-group col-md-12">
                            <label class="form-control-label" for="inputBasicFirstName">Ingresa el número la aplicante</label>
                            <input type="number"   maxlength="9" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"  name="NumberAplicantVInglesThree" id="NumberAplicantVInglesThree" value=""  class="form-control"   autocomplete="off" />
                          </div>
                        </form>
                    </div>
                    <br>
                    <div class="text-center">
                      <button type="button" class="btn btn-primary ladda-button btn-postNumAplicanteVIngThree" data-style="expand-left"
                        data-plugin="ladda" data-type="progress" id="file"><span class="ladda-label"><i class="icon wb-upload mr-10" aria-hidden="true"></i>Subir</span>
                      </button>
                    </div>
                    <br>
                  <?php }else{ ;?>
                    <div class="text-center">
                        <form id="FormAplicantNumber">
                          <div class="form-group col-md-12">
                              <label class="form-control-label" for="inputBasicFirstName">Número la aplicante</label>

                              <input type="number"   name="NumberAplicantVInglesThree" id="NumberAplicantVInglesThree" value="<?=@$numAplicanteThree['numeroAplicante'];?>"  class="form-control"   autocomplete="off" disabled/>

                              <label class="form-control-label" for="inputBasicFirstName">Fecha de registro</label>
                              <input type="text"   name="NumberAplicantVInglesThree" id="NumberAplicantVInglesThree" value="<?=@$numAplicanteThree['CD'];?>"  class="form-control"   autocomplete="off" disabled/>
                          </div>
                        </form>
                    </div>
                    <br>
                  <?php } ?>
                    <div class="clash-card__unit-stats <?='clash-card__unit-stats--goblin' ;?> clearfix">
                      <div class="one-third">
                        <div class="stat"><?=@$instThree['statusInstitucion'];?></div>
                      </div>
                    </div>
                  </div>
                  <?php } ?>
              </div>

            </div>
          </div>
          <!-- End User Posts -->

          <!-- User Background -->

          <?php if(@$InstTwoInfo != NULL and $NumAplicantTwo !=NULL and 2==3) { ;?>
          <div class="user-background card card-shadow">
            <div class="card-header card-header-transparent p-20">
              <input type="hidden" name="idCartaTwo" id="idCartaTwo" value="<?=@$idCartaTwo;?>">
              <h4 class="card-title mb-0">Alta carta de oferta para <?=@$instTwo['nombreInstitucion'];?>  </h4>
            </div>
            <div class="card-block">
              <div class="example-wrap">

                <?php if(@$fileInfoCartaInstTwo['data'][0]['type']== 'OfertaCondicional') { ;?>
                <h4 class="example-title"><?=$infoDocCartaInstTwo;?> <span class="badge badge-primary">Oferta Condicional CC</span></h4>
              <?php }else if(@$fileInfoCartaInstTwo['data'][0]['type']== 'OfertaIncondicional'){ ;?>
                <h4 class="example-title"><?=$infoDocCartaInstTwo;?> <span class="badge badge-success">Oferta Incondicional CU</span></h4>
                <?php } else{;?>
                  <h4 class="example-title"><?=$infoDocCartaInstTwo;?> </h4>
                <?php } ;?>
                <div class="example">
                  <form id="formDocCUTwo">
                    <?php if(@$fileInfoCartaInstTwo['data'][0]['type']== 'SinCalificar' OR $fileInfoCartaInstTwo['data'] == NULL ) { ;?>
                    <ul class="list-unstyled list-inline">
                      <li class="list-inline-item">
                        <div class="radio-custom radio-primary">
                          <input type="radio" id="inputRadiosUnchecked" name="radioCUTwo" id="radioCUTwo1" value="OfertaCondicional"/>
                          <label for="inputRadiosUnchecked">Condicional</label>
                        </div>
                      </li>
                      <li class="list-inline-item">
                        <div class="radio-custom radio-success">
                          <input type="radio" id="inputRadiosUnchecked" name="radioCUTwo"  id="radioCUTwo2" value="OfertaIncondicional"/>
                          <label for="inputRadiosChecked">Incondicional</label>
                        </div>
                      </li>
                    </ul>

                      <?php } ;?>
                    <form id="formDocCartaVInglesTwo">
                      <input type="file" id="input-file-carta-vinglestwo" name="Carta.pdf" data-plugin="dropify" <?=$enableCartaInstTwo;?>   data-default-file="<?=$defaultfileCartaInstTwo;?>" />
                    </form>
                  </form>
                </div>
                <div class="example example-buttons">

                  <?php if(@$fileexistsCartaInstTwo == TRUE and @$whoCartaInstTwo != 'Admin_Agente') { ;?>

                    <div class="float-left">
                      <button type="button" class="btn btn-primary ladda-button btn-aceptar-verano-vinglestwo" data-style="expand-left"
                        data-plugin="ladda" data-type="progress" id="file">
                        <span class="ladda-label"><i class="icon fa-check" aria-hidden="true"></i>Aceptar</span>
                      </button>
                    </div>
                    <div class="float-left">
                      <button type="button" class="btn btn-warning ladda-button btn-rechazar-verano-vinglestwo" data-style="expand-left"
                        data-plugin="ladda" data-type="progress" id="file">
                        <span class="ladda-label"><i class="icon fa-times " aria-hidden="true"></i>Rechazar</span>
                      </button>
                    </div>




                  <?php } ;?>
                  <?php if(@$fileexistsCartaInstTwo == TRUE) { ;?>
                  <div class="float-right">
                    <a type="button" class="btn btn-primary ladda-button "  href="<?=$defaultfileCartaInstTwo;?>" target="_blank"> </i>Ver </a>
                  </div>
                  <?php } ;?>
                  </div>
                <?php if(@$whoCartaInstTwo == 'no_One') { ;?>
                <div class="example example-buttons">

                <?php if(@$fileexistsCartaInstTwo == FALSE) { ;?>
                  <div class="float-left">
                    <button type="button" class="btn btn-primary ladda-button btn-file-carta-vinglesagente-Two" data-style="expand-left"
                      data-plugin="ladda" data-type="progress" id="file">
                      <span class="ladda-label"><i class="icon wb-upload mr-10" aria-hidden="true"></i>Subir</span>
                    </button>
                  </div>
                  <?php } ;?>
                  <?php if(@$fileexistsCartaInstTwo == TRUE and $fileInfoCartaInstTwo['data']['statusDocumento']== 'Rechazado') { ;?>
                  <div class="float-left">
                    <button type="button" class="btn btn-warning ladda-button btn-edit-file-visa" data-style="expand-left"
                      data-plugin="ladda" data-type="progress" id="file">
                      <span class="ladda-label"><i class="icon wb-upload " aria-hidden="true"></i>Volver a subir</span>
                    </button>
                  </div>
                  <?php } ;?>

                </div>
                <?php } ;?>

                  <div class="example">
                    <div class="pearls row">
                      <div class="pearl <?=@$stepOneCartaInstTwo;?> col-4">
                        <div class="pearl-icon"><i class="icon wb-upload  upicon" aria-hidden="true"></i></div>
                        <span class="pearl-title">Cargar de Carta</span>
                      </div>
                      <div class="pearl <?=@$stepTwoCartaInstTwo;?> col-4">
                        <div class="pearl-icon"><i class="icon fa-spinner upicon " aria-hidden="true"></i></div>
                        <span class="pearl-title">Revisión</span>

                        <?php if(@$fileInfoCartaInstTwo['data']['statusDocumento']== 'Revision') { ;?>
                        <div class="reviciones example example-popover" align="center">
                          <button type="button" class="btn btn-info sr-only">
                            Documento en revisión
                          </button>
                          <div class="popover bs-popover-bottom popover-info ">
                            <div class="arrow"></div>
                            <h3 class="popover-header">Documento en revisión</h3>
                            <div class="popover-body">
                              <p>Si la carta de<b> <?=@$aspirante['firstNamePersona'];?> <?=@$aspirante['lastNamePersona'];?></b> es aceptada se debe marcar si es consicional o incondicional antes de presionar el boton aceptar!</p>
                            </div>
                          </div>
                        </div>
                        <?php } ;?>
                        <?php if(@$fileInfoCartaInstTwo['data'][0]['statusDocumento']== 'Rechazado') { ;?>
                        <div class="reviciones example example-popover" align="center">

                          <div class="popover bs-popover-bottom popover-warning col-12">
                            <div class="arrow"></div>
                            <h3 class="popover-header">Documento rechazado</h3>
                            <div class="popover-body  col-12">
                              <p><b><?=@$aspirante['firstNamePersona'];?> <?=@$aspirante['lastNamePersona'];?></b>su documento fue rechazado. </p>
                              <p><b>razón: </b> <?=@$descriptionCartaInstTwo;?></p>
                            </div>
                          </div>
                        </div>
                        <?php } ;?>
                      </div>
                      <div class="pearl <?=@$stepThreeCartaInstTwo;?> col-4">
                        <div class="pearl-icon"><i class="icon wb-check upicon" aria-hidden="true"></i></div>
                        <span class="pearl-title">Aceptado</span>
                      </div>
                    </div>
                  </div>



              </div>
              </div>
          </div>
          <?php } ;?>
          <?php if(@$InstThreeInfo!= NULL and $NumAplicantThree !=NULL and 3==9) { ;?>
          <div class="user-background card card-shadow">
            <div class="card-header card-header-transparent p-20">
              <input type="hidden" name="idCartaThree" id="idCartaThree" value="<?=@$idCartaThree;?>">
              <h4 class="card-title mb-0">Alta carta de oferta para <?=@$instThree['nombreInstitucion'];?> </h4>
            </div>
            <div class="card-block">
              <div class="example-wrap">
                <?php if(@$fileInfoCartaInstThree['data'][0]['type']== 'OfertaCondicional') { ;?>
                <h4 class="example-title"><?=$infoDocCartaInstThree;?> <span class="badge badge-primary">Oferta Condicional CC</span></h4>
                <?php }else if(@$fileInfoCartaInstThree['data'][0]['type']== 'OfertaIncondicional'){ ;?>
                <h4 class="example-title"><?=$infoDocCartaInstThree;?> <span class="badge badge-success">Oferta Incondicional CU</span></h4>
                <?php } else{;?>
                  <h4 class="example-title"><?=$infoDocCartaInstThree;?> </h4>
                <?php } ;?>
                <div class="example">
                  <form id="formDocCUThree">
                    <?php if(@$fileInfoCartaInstThree['data'][0]['type'] == 'SinCalificar' OR $fileInfoCartaInstThree['data'] == NULL) { ;?>
                    <ul class="list-unstyled list-inline">
                      <li class="list-inline-item">
                        <div class="radio-custom radio-primary">
                          <input type="radio" id="inputRadiosUnchecked" name="radioCUThree" id="radioCUThree1" value="OfertaCondicional"/>
                          <label for="inputRadiosUnchecked">Condicional</label>
                        </div>
                      </li>
                      <li class="list-inline-item">
                        <div class="radio-custom radio-success">
                          <input type="radio" id="inputRadiosUnchecked" name="radioCUThree"  id="radioCUThree2" value="OfertaIncondicional"/>
                          <label for="inputRadiosChecked">Incondicional</label>
                        </div>
                      </li>
                    </ul>
                    <?php } ;?>
                    <form id="formDocCartaVInglesThree">
                      <input type="file" id="input-file-carta-vinglesthree" name="Carta.pdf" data-plugin="dropify" <?=$enableCartaInstThree;?>   data-default-file="<?=$defaultfileCartaInstThree;?>" />
                    </form>
                  </form>
                </div>
                <div class="example example-buttons">

                  <?php if(@$fileexistsCartaInstThree == TRUE and @$whoCartaInstThree != 'Admin_Agente') { ;?>

                    <div class="float-left">
                      <button type="button" class="btn btn-primary ladda-button btn-aceptar-verano-vinglesthree" data-style="expand-left"
                        data-plugin="ladda" data-type="progress" id="file">
                        <span class="ladda-label"><i class="icon fa-check" aria-hidden="true"></i>Aceptar</span>
                      </button>
                    </div>
                    <div class="float-left">
                      <button type="button" class="btn btn-warning ladda-button btn-rechazar-verano-vinglesthree" data-style="expand-left"
                        data-plugin="ladda" data-type="progress" id="file">
                        <span class="ladda-label"><i class="icon fa-times " aria-hidden="true"></i>Rechazar</span>
                      </button>
                    </div>




                  <?php } ;?>
                  <?php if(@$fileexistsCartaInstThree == TRUE) { ;?>
                    <div class="float-right">

                      <a type="button" class="btn btn-primary ladda-button "  href="<?=$defaultfileCartaInstThree;?>" target="_blank"> </i>Ver </a>
                    </div>
                  <?php } ;?>

                </div>
                <?php if(@$whoCartaInstThree == 'no_One') { ;?>
                <div class="example example-buttons">

                <?php if(@$fileexistsCartaInstThree == FALSE) { ;?>
                  <div class="float-left">
                    <button type="button" class="btn btn-primary ladda-button btn-file-carta-vinglesagente-Three" data-style="expand-left"
                      data-plugin="ladda" data-type="progress" id="file">
                      <span class="ladda-label"><i class="icon wb-upload mr-10" aria-hidden="true"></i>Subir</span>
                    </button>
                  </div>
                  <?php } ;?>
                  <?php if(@$fileexistsCartaInstThree == TRUE and $fileInfoCartaInstThree['data']['statusDocumento']== 'Rechazado') { ;?>
                  <div class="float-left">
                    <button type="button" class="btn btn-warning ladda-button btn-edit-file-visa" data-style="expand-left"
                      data-plugin="ladda" data-type="progress" id="file">
                      <span class="ladda-label"><i class="icon wb-upload " aria-hidden="true"></i>Volver a subir</span>
                    </button>
                  </div>
                  <?php } ;?>

                </div>
                <?php } ;?>

                  <div class="example">
                    <div class="pearls row">
                      <div class="pearl <?=@$stepOneCartaInstThree;?> col-4">
                        <div class="pearl-icon"><i class="icon wb-upload  upicon" aria-hidden="true"></i></div>
                        <span class="pearl-title">Cargar de Carta</span>
                      </div>
                      <div class="pearl <?=@$stepTwoCartaInstThree;?> col-4">
                        <div class="pearl-icon"><i class="icon fa-spinner upicon " aria-hidden="true"></i></div>
                        <span class="pearl-title">Revisión</span>

                        <?php if(@$fileInfoCartaInstThree['data']['statusDocumento']== 'Revision') { ;?>
                        <div class="reviciones example example-popover" align="center">
                          <button type="button" class="btn btn-info sr-only">
                            Documento en revisión
                          </button>
                          <div class="popover bs-popover-bottom popover-info ">
                            <div class="arrow"></div>
                            <h3 class="popover-header">Documento en revisión</h3>
                            <div class="popover-body">
                              <p>Si la carta de<b> <?=@$aspirante['firstNamePersona'];?> <?=@$aspirante['lastNamePersona'];?></b> es aceptada se debe marcar si es consicional o incondicional antes de presionar el boton aceptar!</p>
                            </div>
                          </div>
                        </div>
                        <?php } ;?>
                        <?php if(@$fileInfoCartaInstThree['data'][0]['statusDocumento']== 'Rechazado') { ;?>
                        <div class="reviciones example example-popover" align="center">

                          <div class="popover bs-popover-bottom popover-warning col-12">
                            <div class="arrow"></div>
                            <h3 class="popover-header">Documento rechazado</h3>
                            <div class="popover-body  col-12">
                              <p><b><?=@$aspirante['firstNamePersona'];?> <?=@$aspirante['lastNamePersona'];?></b>su documento fue rechazado. </p>
                              <p><b>razón: </b> <?=@$descriptionCartaInstThree;?></p>
                            </div>
                          </div>
                        </div>
                        <?php } ;?>
                      </div>
                      <div class="pearl <?=@$stepThreeCartaInstThree;?> col-4">
                        <div class="pearl-icon"><i class="icon wb-check upicon" aria-hidden="true"></i></div>
                        <span class="pearl-title">Aceptado</span>
                      </div>
                    </div>
                  </div>



              </div>
              </div>
          </div>
          <?php } ;?>

          <!-- End User Background -->


        </div>
        <!-- End Middle Column -->
        <div class="col-lg-12 col-xl-12 order-xl-4">
          <div class="card user-visitors">
            <div class="card-header card-header-transparent p-20">
              <h4 class="card-title mb-0">Carta de oferta</h4>

            </div>
            <div class="container-fluid">
            <div class="row">

                <div class="col-md-12">

                  <?php if(@$InstOneInfo!= NULL and $NumAplicantOne !=NULL ) { ;?>
                    <div class="text-center">
                      <h3 class="card-title mb-0">Alta carta de oferta paraa <?=@$instOne['nombreInstitucion'];?>  </h3>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                          <?php if( @$InstOneInfo!= NULL ) { ;?>
                          <div class="card card-element">
                              <img class="card-img-top w-full" src="<?=base_url('resources/assets/Informativa/images/uk_universities.jpg');?>" alt="Imagen Institucion" alt="Card image cap">
                              <div class="card-block">
                                <h4 class="card-title" align="center"><?=@$instOne['nombreInstitucion'];?></h4>
                                <p class="card-text" align="center"></p>
                                <p class="card-text hidden-md-down" align="center"><?=@$instOne['ubicacionInstitucion'] ? $instOne['ubicacionInstitucion'] : 'London' ;?>.</p>

                              </div>
                              <?php if( @$numAplicanteOne== NULL ) { ;?>
                              <div class="text-center">
                                  <form id="FormAplicantNumber">
                                    <div class="form-group col-md-12">
                                      <label class="form-control-label" for="inputBasicFirstName">Ingresa el número la aplicante</label>
                                      <input type="number"   maxlength="9" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"  name="NumberAplicantVInglesOne" id="NumberAplicantVInglesOne" value=""  class="form-control"   autocomplete="off" />
                                    </div>
                                  </form>
                              </div>
                              <br>
                              <div class="text-center">
                                <button type="button" class="btn btn-primary ladda-button btn-postNumAplicanteVIngOne" data-style="expand-left"
                                  data-plugin="ladda" data-type="progress" id="file"><span class="ladda-label"><i class="icon wb-upload mr-10" aria-hidden="true"></i>Subir</span>
                                </button>
                              </div>
                              <br>
                              <?php } ?>
                              <?php if( @$numAplicanteOne!= NULL ) { ;?>
                                <div class="text-center">
                                    <form id="FormAplicantNumber">
                                      <div class="form-group col-md-12">
                                        <label class="form-control-label" for="inputBasicFirstName">Número la aplicante</label>
                                        <div class="text-center">
                                            <input type="number"   name="NumberAplicantVInglesThree" id="NumberAplicantVInglesThree" value="<?=@$numAplicanteOne['numeroAplicante'];?>"  class="form-control text-center"   autocomplete="off" disabled/>
                                        </div>

                                        <label class="form-control-label" for="inputBasicFirstName">Fecha de registro</label>
                                        <input type="text"   name="NumberAplicantVInglesThree" id="NumberAplicantVInglesThree" value="<?=@$numAplicanteOne['CD'];?>"  class="form-control form-control text-center"   autocomplete="off" disabled/>
                                      </div>
                                    </form>
                                </div>
                                <br>
                              <?php } ?>
                              <div class="clash-card__unit-stats <?='clash-card__unit-stats--goblin' ;?> clearfix">
                                <div class="one-third">
                                  <div class="stat"><?=@$instOne['statusInstitucion'];?> </div>
                                </div>
                              </div>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="col-md-8">

                          <div class="user-background card card-shadow">

                              <input type="hidden" name="idCartaOne" id="idCartaOne" value="<?=@$idCartaOne;?>">


                            <div class="card-block">
                              <div class="example-wrap">
                                <!-- <h4 class="example-title"><?=$infoDocCartaInstOne;?></h4> -->
                                <?php if(@$fileInfoCartaInstOne['data'][0]['type']== 'OfertaCondicional') { ;?>
                                <h4 class="example-title"><?=$infoDocCartaInstOne;?> <span class="badge badge-primary">Oferta Condicional CC</span></h4>
                              <?php }else if(@$fileInfoCartaInstOne['data'][0]['type']== 'OfertaIncondicional'){ ;?>
                                <h4 class="example-title"><?=$infoDocCartaInstOne;?> <span class="badge badge-success">Oferta Incondicional CU</span></h4>
                                <?php } else{;?>
                                  <h4 class="example-title"><?=$infoDocCartaInstOne;?> </h4>
                                <?php } ;?>
                                <div class="example">
                                  <form id="formDocVisa">
                                    <?php if(@$fileInfoCartaInstOne['data'][0]['type']== 'SinCalificar' OR $fileInfoCartaInstOne['data'] == NULL ) { ;?>
                                    <ul class="list-unstyled list-inline">
                                      <li class="list-inline-item">
                                        <div class="radio-custom radio-primary">
                                          <input type="radio" id="inputRadiosUnchecked" name="radioCU" id="radioCU1" value="OfertaCondicional"/>
                                          <label for="inputRadiosUnchecked">Condicional</label>
                                        </div>
                                      </li>
                                      <li class="list-inline-item">
                                        <div class="radio-custom radio-success">
                                          <input type="radio" id="inputRadiosUnchecked" name="radioCU"  id="radioCU2" value="OfertaIncondicional"/>
                                          <label for="inputRadiosChecked">Incondicional</label>
                                        </div>
                                      </li>
                                    </ul>
                                      <?php } ;?>

                                    <form id="formDocCartaVIngles">
                                      <input type="file" id="input-file-carta-vingles" name="Carta.pdf" data-plugin="dropify" <?=$enableCartaInstOne;?>   data-default-file="<?=$defaultfileCartaInstOne;?>" />
                                    </form>
                                  </form>
                                </div>
                                <div class="example example-buttons">

                                  <?php if(@$fileexistsCartaInstOne == TRUE and @$whoCartaInstOne != 'Admin_Agente' and $fileInfoCartaInstOne['data'][0]['statusDocumento']!= 'Aceptado') { ;?>

                                    <div class="float-left">
                                      <button type="button" class="btn btn-primary ladda-button btn-aceptar-verano-vingles" data-style="expand-left"
                                        data-plugin="ladda" data-type="progress" id="file">
                                        <span class="ladda-label"><i class="icon fa-check" aria-hidden="true"></i>Aceptar</span>
                                      </button>
                                    </div>
                                    <div class="float-left">
                                      <button type="button" class="btn btn-warning ladda-button btn-rechazar-verano-vingles" data-style="expand-left"
                                        data-plugin="ladda" data-type="progress" id="file">
                                        <span class="ladda-label"><i class="icon fa-times " aria-hidden="true"></i>Rechazar</span>
                                      </button>
                                    </div>




                                  <?php } ;?>
                                  <?php if(@$fileexistsCartaInstOne == TRUE) { ;?>
                                    <div class="float-right">

                                      <a type="button" class="btn btn-primary ladda-button "  href="<?=$defaultfileCartaInstOne;?>" target="_blank"> </i>Ver </a>
                                    </div>
                                  <?php } ;?>

                                </div>
                                <?php if(@$whoCartaInstOne == 'no_One') { ;?>
                                <div class="example example-buttons">

                                <?php if(@$fileexistsCartaInstOne == FALSE) { ;?>
                                  <div class="float-left">
                                    <button type="button" class="btn btn-primary ladda-button btn-file-carta-vinglesagente-One" data-style="expand-left"
                                      data-plugin="ladda" data-type="progress" id="file">
                                      <span class="ladda-label"><i class="icon wb-upload mr-10" aria-hidden="true"></i>Subir</span>
                                    </button>
                                  </div>
                                  <?php } ;?>
                                  <?php if(@$fileexistsCartaInstOne == TRUE and @$fileInfoCartaInstOne['data']['statusDocumento']== 'Rechazado') { ;?>
                                  <div class="float-left">
                                    <button type="button" class="btn btn-warning ladda-button btn-edit-file-visa" data-style="expand-left"
                                      data-plugin="ladda" data-type="progress" id="file">
                                      <span class="ladda-label"><i class="icon wb-upload " aria-hidden="true"></i>Volver a subir</span>
                                    </button>
                                  </div>
                                  <?php } ;?>

                                </div>
                                <?php } ;?>

                                  <div class="example">
                                    <div class="pearls row">
                                      <div class="pearl <?=@$stepOneCartaInstOne;?> col-4">
                                        <div class="pearl-icon"><i class="icon wb-upload  upicon" aria-hidden="true"></i></div>
                                        <span class="pearl-title">Cargar de Carta</span>
                                      </div>
                                      <div class="pearl <?=@$stepTwoCartaInstOne;?> col-4">
                                        <div class="pearl-icon"><i class="icon fa-spinner upicon " aria-hidden="true"></i></div>
                                        <span class="pearl-title">Revisión</span>

                                        <?php if(@$fileInfoCartaInstOne['data']['statusDocumento']== 'Revision') { ;?>
                                        <div class="reviciones example example-popover" align="center">
                                          <button type="button" class="btn btn-info sr-only">
                                            Documento en revisión
                                          </button>
                                          <div class="popover bs-popover-bottom popover-info ">
                                            <div class="arrow"></div>
                                            <h3 class="popover-header">Documento en revisión</h3>
                                            <div class="popover-body">
                                              <p>Si la carta de<b> <?=@$aspirante['firstNamePersona'];?> <?=@$aspirante['lastNamePersona'];?></b> es aceptada se debe marcar si es consicional o incondicional antes de presionar el boton aceptar!</p>
                                            </div>
                                          </div>
                                        </div>
                                        <?php } ;?>
                                        <?php if(@$fileInfoCartaInstOne['data'][0]['statusDocumento']== 'Rechazado') { ;?>
                                        <div class="reviciones example example-popover" align="center">

                                          <div class="popover bs-popover-bottom popover-warning col-12">
                                            <div class="arrow"></div>
                                            <h3 class="popover-header">Documento rechazado</h3>
                                            <div class="popover-body  col-12">
                                              <p><b><?=@$aspirante['firstNamePersona'];?> <?=@$aspirante['lastNamePersona'];?></b>su documento fue rechazado. </p>
                                              <p><b>razón: </b> <?=@$descriptionCartaInstOne;?></p>
                                            </div>
                                          </div>
                                        </div>
                                        <?php } ;?>
                                      </div>
                                      <div class="pearl <?=@$stepThreeCartaInstOne;?> col-4">
                                        <div class="pearl-icon"><i class="icon wb-check upicon" aria-hidden="true"></i></div>
                                        <span class="pearl-title">Aceptado</span>
                                      </div>
                                    </div>
                                  </div>



                              </div>
                              </div>
                          </div>


                        </div>
                    </div>
                  <?php } ;?>
                  <br>
                  <?php if(@$InstTwoInfo!= NULL and $NumAplicantTwo !=NULL ) { ;?>
                    <div class="text-center">
                      <h3 class="card-title mb-0">Alta carta de oferta para <?=@$instTwo['nombreInstitucion'];?>  </h3>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                          <?php if( @$InstTwoInfo!= NULL ) { ;?>
                          <div class="card card-element">
                              <img class="card-img-top w-full" src="<?=base_url('resources/assets/Informativa/images/uk_universities.jpg');?>" alt="Imagen Institucion" alt="Card image cap">
                              <div class="card-block">
                                <h4 class="card-title" align="center"><?=@$instTwo['nombreInstitucion'];?></h4>
                                <p class="card-text" align="center"></p>
                                <p class="card-text hidden-md-down" align="center"><?=@$instTwo['ubicacionInstitucion'] ? $instTwo['ubicacionInstitucion'] : 'London' ;?>.</p>

                              </div>
                              <?php if( @$numAplicanteTwo== NULL ) { ;?>
                              <div class="text-center">
                                  <form id="FormAplicantNumber">
                                    <div class="form-group col-md-12">
                                      <label class="form-control-label" for="inputBasicFirstName">Ingresa el número la aplicante</label>
                                      <input type="number"   maxlength="9" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"  name="NumberAplicantVInglesOne" id="NumberAplicantVInglesOne" value=""  class="form-control"   autocomplete="off" />
                                    </div>
                                  </form>
                              </div>
                              <br>
                              <div class="text-center">
                                <button type="button" class="btn btn-primary ladda-button btn-postNumAplicanteVIngOne" data-style="expand-left"
                                  data-plugin="ladda" data-type="progress" id="file"><span class="ladda-label"><i class="icon wb-upload mr-10" aria-hidden="true"></i>Subir</span>
                                </button>
                              </div>
                              <br>
                              <?php } ?>
                              <?php if( @$numAplicanteTwo!= NULL ) { ;?>
                                <div class="text-center">
                                    <form id="FormAplicantNumber">
                                      <div class="form-group col-md-12">
                                        <label class="form-control-label" for="inputBasicFirstName">Número la aplicante</label>
                                        <div class="text-center">
                                            <input type="number"   name="NumberAplicantVInglesThree" id="NumberAplicantVInglesThree" value="<?=@$numAplicanteTwo['numeroAplicante'];?>"  class="form-control text-center"   autocomplete="off" disabled/>
                                        </div>

                                        <label class="form-control-label" for="inputBasicFirstName">Fecha de registro</label>
                                        <input type="text"   name="NumberAplicantVInglesThree" id="NumberAplicantVInglesThree" value="<?=@$numAplicanteTwo['CD'];?>"  class="form-control form-control text-center"   autocomplete="off" disabled/>
                                      </div>
                                    </form>
                                </div>
                                <br>
                              <?php } ?>
                              <div class="clash-card__unit-stats <?='clash-card__unit-stats--goblin' ;?> clearfix">
                                <div class="one-third">
                                  <div class="stat"><?=@$instTwo['statusInstitucion'];?> </div>
                                </div>
                              </div>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="col-md-8">

                          <div class="user-background card card-shadow">
                            <div class="card-header card-header-transparent p-20">
                              <input type="hidden" name="idCartaTwo" id="idCartaTwo" value="<?=@$idCartaTwo;?>">
                              <h4 class="card-title mb-0">Alta carta de oferta para <?=@$instTwo['nombreInstitucion'];?>  </h4>
                            </div>
                            <div class="card-block">
                              <div class="example-wrap">

                                <?php if(@$fileInfoCartaInstTwo['data'][0]['type']== 'OfertaCondicional') { ;?>
                                <h4 class="example-title"><?=$infoDocCartaInstTwo;?> <span class="badge badge-primary">Oferta Condicional CC</span></h4>
                              <?php }else if(@$fileInfoCartaInstTwo['data'][0]['type']== 'OfertaIncondicional'){ ;?>
                                <h4 class="example-title"><?=$infoDocCartaInstTwo;?> <span class="badge badge-success">Oferta Incondicional CU</span></h4>
                                <?php } else{;?>
                                  <h4 class="example-title"><?=$infoDocCartaInstTwo;?> </h4>
                                <?php } ;?>
                                <div class="example">
                                  <form id="formDocCUTwo">
                                    <?php if(@$fileInfoCartaInstTwo['data'][0]['type']== 'SinCalificar' OR $fileInfoCartaInstTwo['data'] == NULL ) { ;?>
                                    <ul class="list-unstyled list-inline">
                                      <li class="list-inline-item">
                                        <div class="radio-custom radio-primary">
                                          <input type="radio" id="inputRadiosUnchecked" name="radioCUTwo" id="radioCUTwo1" value="OfertaCondicional"/>
                                          <label for="inputRadiosUnchecked">Condicional</label>
                                        </div>
                                      </li>
                                      <li class="list-inline-item">
                                        <div class="radio-custom radio-success">
                                          <input type="radio" id="inputRadiosUnchecked" name="radioCUTwo"  id="radioCUTwo2" value="OfertaIncondicional"/>
                                          <label for="inputRadiosChecked">Incondicional</label>
                                        </div>
                                      </li>
                                    </ul>

                                      <?php } ;?>
                                    <form id="formDocCartaVInglesTwo">
                                      <input type="file" id="input-file-carta-vinglestwo" name="Carta.pdf" data-plugin="dropify" <?=$enableCartaInstTwo;?>   data-default-file="<?=$defaultfileCartaInstTwo;?>" />
                                    </form>
                                  </form>
                                </div>
                                <div class="example example-buttons">

                                  <?php if(@$fileexistsCartaInstTwo == TRUE and @$whoCartaInstTwo != 'Admin_Agente' and $fileInfoCartaInstTwo['data'][0]['statusDocumento']!= 'Aceptado') { ;?>

                                    <div class="float-left">
                                      <button type="button" class="btn btn-primary ladda-button btn-aceptar-verano-vinglestwo" data-style="expand-left"
                                        data-plugin="ladda" data-type="progress" id="file">
                                        <span class="ladda-label"><i class="icon fa-check" aria-hidden="true"></i>Aceptar</span>
                                      </button>
                                    </div>
                                    <div class="float-left">
                                      <button type="button" class="btn btn-warning ladda-button btn-rechazar-verano-vinglestwo" data-style="expand-left"
                                        data-plugin="ladda" data-type="progress" id="file">
                                        <span class="ladda-label"><i class="icon fa-times " aria-hidden="true"></i>Rechazar</span>
                                      </button>
                                    </div>




                                  <?php } ;?>
                                  <?php if(@$fileexistsCartaInstTwo == TRUE) { ;?>
                                  <div class="float-right">
                                    <a type="button" class="btn btn-primary ladda-button "  href="<?=$defaultfileCartaInstTwo;?>" target="_blank"> </i>Ver </a>
                                  </div>
                                  <?php } ;?>
                                  </div>
                                <?php if(@$whoCartaInstTwo == 'no_One') { ;?>
                                <div class="example example-buttons">

                                <?php if(@$fileexistsCartaInstTwo == FALSE) { ;?>
                                  <div class="float-left">
                                    <button type="button" class="btn btn-primary ladda-button btn-file-carta-vinglesagente-Two" data-style="expand-left"
                                      data-plugin="ladda" data-type="progress" id="file">
                                      <span class="ladda-label"><i class="icon wb-upload mr-10" aria-hidden="true"></i>Subir</span>
                                    </button>
                                  </div>
                                  <?php } ;?>
                                  <?php if(@$fileexistsCartaInstTwo == TRUE and $fileInfoCartaInstTwo['data']['statusDocumento']== 'Rechazado') { ;?>
                                  <div class="float-left">
                                    <button type="button" class="btn btn-warning ladda-button btn-edit-file-visa" data-style="expand-left"
                                      data-plugin="ladda" data-type="progress" id="file">
                                      <span class="ladda-label"><i class="icon wb-upload " aria-hidden="true"></i>Volver a subir</span>
                                    </button>
                                  </div>
                                  <?php } ;?>

                                </div>
                                <?php } ;?>

                                  <div class="example">
                                    <div class="pearls row">
                                      <div class="pearl <?=@$stepOneCartaInstTwo;?> col-4">
                                        <div class="pearl-icon"><i class="icon wb-upload  upicon" aria-hidden="true"></i></div>
                                        <span class="pearl-title">Cargar de Carta</span>
                                      </div>
                                      <div class="pearl <?=@$stepTwoCartaInstTwo;?> col-4">
                                        <div class="pearl-icon"><i class="icon fa-spinner upicon " aria-hidden="true"></i></div>
                                        <span class="pearl-title">Revisión</span>

                                        <?php if(@$fileInfoCartaInstTwo['data']['statusDocumento']== 'Revision') { ;?>
                                        <div class="reviciones example example-popover" align="center">
                                          <button type="button" class="btn btn-info sr-only">
                                            Documento en revisión
                                          </button>
                                          <div class="popover bs-popover-bottom popover-info ">
                                            <div class="arrow"></div>
                                            <h3 class="popover-header">Documento en revisión</h3>
                                            <div class="popover-body">
                                              <p>Si la carta de<b> <?=@$aspirante['firstNamePersona'];?> <?=@$aspirante['lastNamePersona'];?></b> es aceptada se debe marcar si es consicional o incondicional antes de presionar el boton aceptar!</p>
                                            </div>
                                          </div>
                                        </div>
                                        <?php } ;?>
                                        <?php if(@$fileInfoCartaInstTwo['data'][0]['statusDocumento']== 'Rechazado') { ;?>
                                        <div class="reviciones example example-popover" align="center">

                                          <div class="popover bs-popover-bottom popover-warning col-12">
                                            <div class="arrow"></div>
                                            <h3 class="popover-header">Documento rechazado</h3>
                                            <div class="popover-body  col-12">
                                              <p><b><?=@$aspirante['firstNamePersona'];?> <?=@$aspirante['lastNamePersona'];?></b>su documento fue rechazado. </p>
                                              <p><b>razón: </b> <?=@$descriptionCartaInstTwo;?></p>
                                            </div>
                                          </div>
                                        </div>
                                        <?php } ;?>
                                      </div>
                                      <div class="pearl <?=@$stepThreeCartaInstTwo;?> col-4">
                                        <div class="pearl-icon"><i class="icon wb-check upicon" aria-hidden="true"></i></div>
                                        <span class="pearl-title">Aceptado</span>
                                      </div>
                                    </div>
                                  </div>



                              </div>
                              </div>
                          </div>
                        </div>
                    </div>
                  <?php } ;?>
                  <?php if(@$InstThreeInfo!= NULL and $NumAplicantThree !=NULL ) { ;?>
                    <div class="text-center">
                      <h3 class="card-title mb-0">Alta carta de oferta para <?=@$instThree['nombreInstitucion'];?>  </h3>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                          <?php if( @$InstThreeInfo!= NULL ) { ;?>
                          <div class="card card-element">
                            <img class="card-img-top w-full" src="<?=base_url('resources/assets/Informativa/images/uk_universities.jpg');?>" alt="Imagen Institucion" alt="Card image cap">
                            <div class="card-block">
                              <h4 class="card-title" align="center"><?=@$instThree['nombreInstitucion'];?></h4>
                              <p class="card-text" align="center" ></p>
                              <p class="card-text hidden-md-down" align="center"><?=@$instThree['ubicacionInstitucion'] ? $instThree['ubicacionInstitucion'] : 'London' ;?>.</p>

                            </div>
                            <?php if( @$numAplicanteThree== NULL ) { ;?>
                            <div class="text-center">
                                <form id="FormAplicantNumber">
                                  <div class="form-group col-md-12">
                                    <label class="form-control-label" for="inputBasicFirstName">Ingresa el número la aplicante</label>
                                    <input type="number"   maxlength="9" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"  name="NumberAplicantVInglesThree" id="NumberAplicantVInglesThree" value=""  class="form-control"   autocomplete="off" />
                                  </div>
                                </form>
                            </div>
                            <br>
                            <div class="text-center">
                              <button type="button" class="btn btn-primary ladda-button btn-postNumAplicanteVIngThree" data-style="expand-left"
                                data-plugin="ladda" data-type="progress" id="file"><span class="ladda-label"><i class="icon wb-upload mr-10" aria-hidden="true"></i>Subir</span>
                              </button>
                            </div>
                            <br>
                          <?php }else{ ;?>
                            <div class="text-center">
                                <form id="FormAplicantNumber">
                                  <div class="form-group col-md-12">
                                      <label class="form-control-label" for="inputBasicFirstName">Número la aplicante</label>

                                      <input type="number"   name="NumberAplicantVInglesThree" id="NumberAplicantVInglesThree" value="<?=@$numAplicanteThree['numeroAplicante'];?>"  class="form-control text-center"   autocomplete="off" disabled/>

                                      <label class="form-control-label" for="inputBasicFirstName">Fecha de registro</label>
                                      <input type="text"   name="NumberAplicantVInglesThree" id="NumberAplicantVInglesThree" value="<?=@$numAplicanteThree['CD'];?>"  class="form-control text-center"   autocomplete="off" disabled/>
                                  </div>
                                </form>
                            </div>
                            <br>
                          <?php } ?>
                            <div class="clash-card__unit-stats <?='clash-card__unit-stats--goblin' ;?> clearfix">
                              <div class="one-third">
                                <div class="stat"><?=@$instThree['statusInstitucion'];?></div>
                              </div>
                            </div>
                          </div>
                          <?php } ?>
                        </div>
                        <div class="col-md-8">

                          <div class="user-background card card-shadow">
                            <div class="card-header card-header-transparent p-20">
                              <input type="hidden" name="idCartaThree" id="idCartaThree" value="<?=@$idCartaThree;?>">
                              <h4 class="card-title mb-0">Alta carta de oferta para <?=@$instThree['nombreInstitucion'];?> </h4>
                            </div>
                            <div class="card-block">
                              <div class="example-wrap">
                                <?php if(@$fileInfoCartaInstThree['data'][0]['type']== 'OfertaCondicional') { ;?>
                                <h4 class="example-title"><?=$infoDocCartaInstThree;?> <span class="badge badge-primary">Oferta Condicional CC</span></h4>
                                <?php }else if(@$fileInfoCartaInstThree['data'][0]['type']== 'OfertaIncondicional'){ ;?>
                                <h4 class="example-title"><?=$infoDocCartaInstThree;?> <span class="badge badge-success">Oferta Incondicional CU</span></h4>
                                <?php } else{;?>
                                  <h4 class="example-title"><?=$infoDocCartaInstThree;?> </h4>
                                <?php } ;?>
                                <div class="example">
                                  <form id="formDocCUThree">
                                    <?php if(@$fileInfoCartaInstThree['data'][0]['type'] == 'SinCalificar' OR $fileInfoCartaInstThree['data'] == NULL) { ;?>
                                    <ul class="list-unstyled list-inline">
                                      <li class="list-inline-item">
                                        <div class="radio-custom radio-primary">
                                          <input type="radio" id="inputRadiosUnchecked" name="radioCUThree" id="radioCUThree1" value="OfertaCondicional"/>
                                          <label for="inputRadiosUnchecked">Condicional</label>
                                        </div>
                                      </li>
                                      <li class="list-inline-item">
                                        <div class="radio-custom radio-success">
                                          <input type="radio" id="inputRadiosUnchecked" name="radioCUThree"  id="radioCUThree2" value="OfertaIncondicional"/>
                                          <label for="inputRadiosChecked">Incondicional</label>
                                        </div>
                                      </li>
                                    </ul>
                                    <?php } ;?>
                                    <form id="formDocCartaVInglesThree">
                                      <input type="file" id="input-file-carta-vinglesthree" name="Carta.pdf" data-plugin="dropify" <?=$enableCartaInstThree;?>   data-default-file="<?=$defaultfileCartaInstThree;?>" />
                                    </form>
                                  </form>
                                </div>
                                <div class="example example-buttons">

                                  <?php if(@$fileexistsCartaInstThree == TRUE and @$whoCartaInstThree != 'Admin_Agente' and $fileInfoCartaInstThree['data'][0]['statusDocumento']!= 'Aceptado') { ;?>

                                    <div class="float-left">
                                      <button type="button" class="btn btn-primary ladda-button btn-aceptar-verano-vinglesthree" data-style="expand-left"
                                        data-plugin="ladda" data-type="progress" id="file">
                                        <span class="ladda-label"><i class="icon fa-check" aria-hidden="true"></i>Aceptar</span>
                                      </button>
                                    </div>
                                    <div class="float-left">
                                      <button type="button" class="btn btn-warning ladda-button btn-rechazar-verano-vinglesthree" data-style="expand-left"
                                        data-plugin="ladda" data-type="progress" id="file">
                                        <span class="ladda-label"><i class="icon fa-times " aria-hidden="true"></i>Rechazar</span>
                                      </button>
                                    </div>




                                  <?php } ;?>
                                  <?php if(@$fileexistsCartaInstThree == TRUE) { ;?>
                                    <div class="float-right">

                                      <a type="button" class="btn btn-primary ladda-button "  href="<?=$defaultfileCartaInstThree;?>" target="_blank"> </i>Ver </a>
                                    </div>
                                  <?php } ;?>

                                </div>
                                <?php if(@$whoCartaInstThree == 'no_One') { ;?>
                                <div class="example example-buttons">

                                <?php if(@$fileexistsCartaInstThree == FALSE) { ;?>
                                  <div class="float-left">
                                    <button type="button" class="btn btn-primary ladda-button btn-file-carta-vinglesagente-Three" data-style="expand-left"
                                      data-plugin="ladda" data-type="progress" id="file">
                                      <span class="ladda-label"><i class="icon wb-upload mr-10" aria-hidden="true"></i>Subir</span>
                                    </button>
                                  </div>
                                  <?php } ;?>
                                  <?php if(@$fileexistsCartaInstThree == TRUE and $fileInfoCartaInstThree['data']['statusDocumento']== 'Rechazado') { ;?>
                                  <div class="float-left">
                                    <button type="button" class="btn btn-warning ladda-button btn-edit-file-visa" data-style="expand-left"
                                      data-plugin="ladda" data-type="progress" id="file">
                                      <span class="ladda-label"><i class="icon wb-upload " aria-hidden="true"></i>Volver a subir</span>
                                    </button>
                                  </div>
                                  <?php } ;?>

                                </div>
                                <?php } ;?>

                                  <div class="example">
                                    <div class="pearls row">
                                      <div class="pearl <?=@$stepOneCartaInstThree;?> col-4">
                                        <div class="pearl-icon"><i class="icon wb-upload  upicon" aria-hidden="true"></i></div>
                                        <span class="pearl-title">Cargar de Carta</span>
                                      </div>
                                      <div class="pearl <?=@$stepTwoCartaInstThree;?> col-4">
                                        <div class="pearl-icon"><i class="icon fa-spinner upicon " aria-hidden="true"></i></div>
                                        <span class="pearl-title">Revisión</span>

                                        <?php if(@$fileInfoCartaInstThree['data']['statusDocumento']== 'Revision') { ;?>
                                        <div class="reviciones example example-popover" align="center">
                                          <button type="button" class="btn btn-info sr-only">
                                            Documento en revisión
                                          </button>
                                          <div class="popover bs-popover-bottom popover-info ">
                                            <div class="arrow"></div>
                                            <h3 class="popover-header">Documento en revisión</h3>
                                            <div class="popover-body">
                                              <p>Si la carta de<b> <?=@$aspirante['firstNamePersona'];?> <?=@$aspirante['lastNamePersona'];?></b> es aceptada se debe marcar si es consicional o incondicional antes de presionar el boton aceptar!</p>
                                            </div>
                                          </div>
                                        </div>
                                        <?php } ;?>
                                        <?php if(@$fileInfoCartaInstThree['data'][0]['statusDocumento']== 'Rechazado') { ;?>
                                        <div class="reviciones example example-popover" align="center">

                                          <div class="popover bs-popover-bottom popover-warning col-12">
                                            <div class="arrow"></div>
                                            <h3 class="popover-header">Documento rechazado</h3>
                                            <div class="popover-body  col-12">
                                              <p><b><?=@$aspirante['firstNamePersona'];?> <?=@$aspirante['lastNamePersona'];?></b>su documento fue rechazado. </p>
                                              <p><b>razón: </b> <?=@$descriptionCartaInstThree;?></p>
                                            </div>
                                          </div>
                                        </div>
                                        <?php } ;?>
                                      </div>
                                      <div class="pearl <?=@$stepThreeCartaInstThree;?> col-4">
                                        <div class="pearl-icon"><i class="icon wb-check upicon" aria-hidden="true"></i></div>
                                        <span class="pearl-title">Aceptado</span>
                                      </div>
                                    </div>
                                  </div>



                              </div>
                              </div>
                          </div>

                        </div>
                    </div>
                  <?php } ;?>
                </div>
            </div>
          </div>
          </div>
        </div>


      <?php if(@$aspirante['statusAspirante']== '4C') { ;?>

        <div class="col-lg-12 col-xl-12 order-xl-5">
          <div class="card user-visitors">
            <div class="card-header card-header-transparent p-20">
              <h4 class="card-title mb-0">Pago para visa</h4>
            </div>
            <div class="container-fluid">
            <div class="row">

                <div class="col-md-12">
                  <div class="row">
                    <div class="col-md-4">

                      <div class="card card-element">
                        <div class="container" style="width:400px;">

                        </div>

                          <div class="card-block">
                            <h4 class="card-title" align="center">Pago para visa</h4>
                            <p class="card-text" align="center"></p>


                          </div>


                            <div class="text-center">
                                <form id="FormAplicantNumber">
                                  <div class="form-group col-md-12">
                                    <label class="form-control-label" for="inputBasicFirstName">Descripcion</label>
                                    <div class="text-center">
                                        <p>El pago se debera hacer devido a que el estatus del aspirante es 4C</p>
                                    </div>
                                  </div>
                                </form>
                            </div>
                            <br>

                          <div class="clash-card__unit-stats <?='clash-card__unit-stats--goblin' ;?> clearfix">
                            <div class="one-third">

                            </div>
                          </div>
                        </div>

                    </div>
                      <div class="col-md-8">
                        <div class="user-background card card-shadow">
                          <div class="card-header card-header-transparent p-20">
                            <h4 class="card-title mb-0">Pago </h4>

                          </div>
                          <div class="card-block">
                            <div class="example-wrap">
                              <h4 class="example-title"><?=@$infoDocPago;?></h4>
                              <div class="example">
                                <input type="file" id="input-file-now" data-plugin="dropify" <?=$enablePago;?>   data-default-file="<?=$defaultfilePago;?>"
                                />

                              </div>
                              <div class="example example-buttons">

                                <?php if(@$fileexistsPago == TRUE) { ;?>

                                  <div class="float-left">
                                    <button type="button" class="btn btn-primary ladda-button btn-aceptar-vingles" data-style="expand-left"
                                      data-plugin="ladda" data-type="progress" id="file">
                                      <span class="ladda-label"><i class="icon fa-check" aria-hidden="true"></i>Aceptar</span>
                                    </button>
                                  </div>
                                  <div class="float-left">
                                    <button type="button" class="btn btn-warning ladda-button btn-rechazar-vingles" data-style="expand-left"
                                      data-plugin="ladda" data-type="progress" id="file">
                                      <span class="ladda-label"><i class="icon fa-times " aria-hidden="true"></i>Rechazar</span>
                                    </button>
                                  </div>


                                  <div class="float-right">

                                    <a type="button" class="btn btn-primary ladda-button "  href="<?=$defaultfilePago;?>" target="_blank"> </i>Ver </a>
                                  </div>

                                <?php } ;?>

                              </div>
                              <div class="example">
                                <div class="pearls row">
                                  <div class="pearl <?=@$stepOnePago;?> col-4">
                                    <div class="pearl-icon"><i class="icon wb-upload  upicon" aria-hidden="true"></i></div>
                                    <span class="pearl-title">Cargar pago</span>
                                  </div>
                                  <div class="pearl <?=@$stepTwoPago;?> col-4">
                                    <div class="pearl-icon"><i class="icon fa-spinner upicon " aria-hidden="true"></i></div>
                                    <span class="pearl-title">Revisión</span>

                                    <?php if(@$fileInfoPago['data'][0]['statusDocumento']== 'Rechazado') { ;?>
                                    <div class="reviciones example example-popover" align="center">

                                      <div class="popover bs-popover-bottom popover-warning col-12">
                                        <div class="arrow"></div>
                                        <h3 class="popover-header">Documento rechazado</h3>
                                        <div class="popover-body  col-12">
                                          <p><b>El pasaporte de <?=@$aspirantePago['firstNamePersona'];?> <?=@$aspirantePago['lastNamePersona'];?></b> fue rechazado! </p>
                                          <p><b>razón: </b> <?=@$descriptionPago;?></p>
                                        </div>
                                      </div>
                                    </div>
                                    <?php } ;?>
                                  </div>
                                  <div class="pearl  <?=@$stepThreePago;?>  col-4">
                                    <div class="pearl-icon"><i class="icon wb-check upicon" aria-hidden="true"></i></div>
                                    <span class="pearl-title">Aceptado</span>
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
          </div>
          </div>
        </div>
        <?php } ?>

        <?php if(@$aspirante['statusAspirante']== '4U' OR @$aspirante['statusAspirante']== '5') { ;?>

          <div class="col-lg-12 col-xl-12 order-xl-6">
            <div class="card user-visitors">
              <div class="card-header card-header-transparent p-20">
                <h4 class="card-title mb-0">Visa</h4>
              </div>
              <div class="container-fluid">
              <div class="row">

                  <div class="col-md-12">
                    <div class="row">
                      <div class="col-md-4">

                        <div class="card card-element">
                          <div class="container" style="width:400px;">

                          </div>

                            <div class="card-block">
                              <h4 class="card-title" align="center">Visa</h4>
                              <p class="card-text" align="center"></p>


                            </div>


                              <div class="text-center">
                                  <form id="FormAplicantNumber">
                                    <div class="form-group col-md-12">
                                      <label class="form-control-label" for="inputBasicFirstName">Descripcion</label>
                                      <div class="text-center">
                                          <p>Se da de alta visa para poder continuar con el proceso </p>
                                      </div>
                                    </div>
                                  </form>
                              </div>
                              <br>

                            <div class="clash-card__unit-stats <?='clash-card__unit-stats--goblin' ;?> clearfix">
                              <div class="one-third">

                              </div>
                            </div>
                          </div>

                      </div>
                        <div class="col-md-8">
                          <div class="user-background card card-shadow">
                            <div class="card-header card-header-transparent p-20">
                              <h4 class="card-title mb-0">Visa </h4>

                            </div>
                            <div class="card-block">
                              <div class="example-wrap">
                                <h4 class="example-title"><?=@$infoDocVisa;?></h4>
                                <div class="example">
                                  <input type="file" id="input-file-now" data-plugin="dropify" <?=$enableVisa;?>   data-default-file="<?=$defaultfileVisa;?>"
                                  />

                                </div>
                                <div class="example example-buttons">

                                  <?php if(@$fileexistsVisa == TRUE and @$fileInfoVisa['data'][0]['statusDocumento']!= 'Aceptado') { ;?>

                                    <div class="float-left">
                                      <button type="button" class="btn btn-primary ladda-button btn-aceptar-visa-vingles" data-style="expand-left"
                                        data-plugin="ladda" data-type="progress" id="file">
                                        <span class="ladda-label"><i class="icon fa-check" aria-hidden="true"></i>Aceptar</span>
                                      </button>
                                    </div>
                                    <div class="float-left">
                                      <button type="button" class="btn btn-warning ladda-button btn-rechazar-visa-vingles" data-style="expand-left"
                                        data-plugin="ladda" data-type="progress" id="file">
                                        <span class="ladda-label"><i class="icon fa-times " aria-hidden="true"></i>Rechazar</span>
                                      </button>
                                    </div>




                                  <?php } ;?>
                                  <?php if(@$fileexistsVisa == TRUE) { ;?>

                                  <div class="float-right">

                                    <a type="button" class="btn btn-primary ladda-button "  href="<?=$defaultfileVisa;?>" target="_blank"> </i>Ver </a>
                                  </div>
                                  <?php } ;?>
                                </div>
                                <div class="example">
                                  <div class="pearls row">
                                    <div class="pearl <?=@$stepOneVisa;?> col-4">
                                      <div class="pearl-icon"><i class="icon wb-upload  upicon" aria-hidden="true"></i></div>
                                      <span class="pearl-title">Cargar Visa</span>
                                    </div>
                                    <div class="pearl <?=@$stepTwoVisa;?> col-4">
                                      <div class="pearl-icon"><i class="icon fa-spinner upicon " aria-hidden="true"></i></div>
                                      <span class="pearl-title">Revisión</span>

                                      <?php if(@$fileInfoVisa['data'][0]['statusDocumento']== 'Rechazado') { ;?>
                                      <div class="reviciones example example-popover" align="center">

                                        <div class="popover bs-popover-bottom popover-warning col-12">
                                          <div class="arrow"></div>
                                          <h3 class="popover-header">Documento rechazado</h3>
                                          <div class="popover-body  col-12">
                                            <p><b>El pasaporte de <?=@$aspiranteVisa['firstNamePersona'];?> <?=@$aspiranteVisa['lastNamePersona'];?></b> fue rechazado! </p>
                                            <p><b>razón: </b> <?=@$descriptionVisa;?></p>
                                          </div>
                                        </div>
                                      </div>
                                      <?php } ;?>
                                    </div>
                                    <div class="pearl  <?=@$stepThreeVisa;?>  col-4">
                                      <div class="pearl-icon"><i class="icon wb-check upicon" aria-hidden="true"></i></div>
                                      <span class="pearl-title">Aceptado</span>
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
            </div>
            </div>
          </div>
          <?php } ?>
        <!-- Right Column -->
        <div class="col-lg-6 col-xl-3 order-xl-3">
          <div class="card user-visitors">
            <div class="card-header card-header-transparent p-20">
              <h4 class="card-title mb-0">Status Aspirante</h4>
            </div>
            <div class="card-block px-30">

              <ul class="list-group list-group-full">
                <div class="text-center">
                <div class="col-12" style="background-color: #db4437;height: 50%;">
                    <span style="color:white; font-size: 20px;" ><?=@$aspirante['statusAspirante'];?></span>
                </div>
                </div>
              </ul>
              <div class="text-center">

                  <!-- <a type="button" class="btn btn-round btn-outline btn-warning" href="tel:4422609090"><i class="icon icon-xs fa-phone mr-0" aria-hidden="true"></i>Contactar Agente</a> -->

              </div>
            </div>
          </div>
