
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
  .pdficon{
    font-size: 20px;
    color: #ff4c52;
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
    .check-style{
      /* position:relative;
      top: 14px; */
    }
  </style>



  <!-- Page -->
  <input type="hidden" name="aspirante" id="aspirante" value="<?=$user->aspirante;?>">
  <input type="hidden" id="idDocFormOne" value="<?=@$idDocFormOne;?>" name="idDocFormOne">
  <input type="hidden" id="idDocFormTwo" value="<?=@$idDocFormTwo;?>" name="idDocFormTwo">
  <input type="hidden" id="idDocFormThree" value="<?=@$idDocFormThree;?>" name="idDocFormThree">
  <input type="hidden" id="NameLastName" value="<?=@$aspirante['firstNamePersona'];?> <?=@$aspirante['lastNamePersona'];?>" name="NameLastName">
  <input type="hidden" id="NameInstOne" value="<?=@$instOne['nombreInstitucion'];?>" name="NameInstOne">
  <input type="hidden" id="NameInstTwo" value="<?=@$instTwo['nombreInstitucion'];?>" name="NameInstTwo">
  <input type="hidden" id="NameInstThree" value="<?=@$instThree['nombreInstitucion'];?>" name="NameInstThree">
  <input type="hidden" id="idInstitucionOne" value="<?=@$instOne['idInstitucion'];?>" name="idInstitucionOne">
  <input type="hidden" id="idInstitucionTwo" value="<?=@$instTwo['idInstitucion'];?>" name="idInstitucionTwo">
  <input type="hidden" id="idInstitucionThree" value="<?=@$instThree['idInstitucion'];?>" name="idInstitucionThree">


          <!-- End User Posts -->

          <!-- User Background -->
          <?php if(!@$InstOneInfo== NULL) { ;?>
          <div class="user-background card card-shadow">
            <div class="card-header card-header-transparent p-20">
              <input type="text" name="idCartaOne" id="idCartaOne" value="<?=@$idCartaOne;?>">
              <h4 class="card-title mb-0">Alta carta de oferta para <?=@$instOne['nombreInstitucion'];?>  </h4>
            </div>
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

                  <?php if(@$fileexistsCartaInstOne == TRUE and @$whoCartaInstOne != 'Admin_Agente') { ;?>

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
                    <button type="button" class="btn btn-primary ladda-button btn-file-carta-inglesagente-One" data-style="expand-left"
                      data-plugin="ladda" data-type="progress" id="file">
                      <span class="ladda-label"><i class="icon wb-upload mr-10" aria-hidden="true"></i>Subir</span>
                    </button>
                  </div>
                  <?php } ;?>
                  <?php if(@$fileexistsCartaInstOne == TRUE and $fileInfoCartaInstOne['data']['statusDocumento']== 'Rechazado') { ;?>
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
          <?php } ;?>
          <?php if(!@$InstTwoInfo== NULL) { ;?>
          <div class="user-background card card-shadow">
            <div class="card-header card-header-transparent p-20">
              <input type="text" name="idCartaTwo" id="idCartaTwo" value="<?=@$idCartaTwo;?>">
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
                    <button type="button" class="btn btn-primary ladda-button btn-file-carta-inglesagente-Two" data-style="expand-left"
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
          <?php if(!@$InstThreeInfo== NULL) { ;?>
          <div class="user-background card card-shadow">
            <div class="card-header card-header-transparent p-20">
              <input type="text" name="idCartaThree" id="idCartaThree" value="<?=@$idCartaThree;?>">
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
                    <button type="button" class="btn btn-primary ladda-button btn-file-carta-inglesagente-Three" data-style="expand-left"
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

          <!-- User Recomenfations -->

          <!-- End User Recomendations -->
          <!-- User Following -->

          <!-- End User Following -->
        </div>

        <!-- End Middle Column -->

        <!-- Left Column -->

        <!-- End Left Column -->

        <!-- Right Column -->
        <div class="col-lg-6 col-xl-3 order-xl-3">
          <div class="card user-visitors">
            <div class="card-header card-header-transparent p-20">
              <h4 class="card-title mb-0">Estatus</h4>
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

                  <h4 class="example-title">Cambiar Estatus</h4>
                  <p>Selecciona una opción</p>
                  <div class="example">
                    <select class="form-control"
                       id="statusAspirante" name="statusAspirante">
                      <option></option>
                      <option  value="4U">Status 4U</option>
                      <option  value="4C">Status 4C</option>
                    </select>
                  </div>
                    <button class="btn btn-primary btn-round btn-cambio-status"  type="button" name="follow">Cambiar</button>


              </div>
            </div>
          </div>
