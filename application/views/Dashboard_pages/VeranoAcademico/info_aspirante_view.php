

      <h1 class="page-title">Información de <?=@$aspirante['firstNamePersona'];?> <?=@$aspirante['lastNamePersona'];?></h1>
      <input type="hidden" id="aspirante" value="<?=@$aspirante['idAspirante'];?>" name="fkAspirante">
      <input type="hidden" id="idDocFormOne" value="<?=@$idDocFormOne;?>" name="idDocFormOne">
      <input type="hidden" id="idDocFormTwo" value="<?=@$idDocFormTwo;?>" name="idDocFormTwo">
      <input type="hidden" id="idDocFormThree" value="<?=@$idDocFormThree;?>" name="idDocFormThree">
      <input type="hidden" id="NameLastName" value="<?=@$aspirante['firstNamePersona'];?> <?=@$aspirante['lastNamePersona'];?>" name="NameLastName">
      <input type="hidden" id="idinfDocment" value="<?=@$idinfDocment;?>" name="idinfDocment">

      <input type="input" id="idFormOne" value="<?=@$idFormOne;?>" name="idFormOne">
      <input type="input" id="idFormTwo" value="<?=@$idFormTwo;?>" name="idFormTwo">
      <input type="input" id="idFormThree" value="<?=@$idFormThree;?>" name="idFormThree">


          <!-- User Background -->
          <div class="user-background card card-shadow">
            <div class="card-header card-header-transparent p-20">
              <h4 class="card-title mb-0">Pasaporte </h4>

            </div>
            <div class="card-block">
              <div class="example-wrap">
                <h4 class="example-title"><?=$infoDoc;?></h4>
                <div class="example">
                  <input type="file" id="input-file-now" data-plugin="dropify" <?=$enable;?>   data-default-file="<?=$defaultfile;?>"
                  />

                </div>
                <div class="example example-buttons">

                  <?php if(@$fileexists == TRUE) { ;?>

                    <div class="float-left">
                      <button type="button" class="btn btn-primary ladda-button btn-aceptar-passportAcademico" data-style="expand-left"
                        data-plugin="ladda" data-type="progress" id="file">
                        <span class="ladda-label"><i class="icon fa-check" aria-hidden="true"></i>Aceptar</span>
                      </button>
                    </div>
                    <div class="float-left">
                      <button type="button" class="btn btn-warning ladda-button btn-rechazar-pasaporte-academic" data-style="expand-left"
                        data-plugin="ladda" data-type="progress" id="file">
                        <span class="ladda-label"><i class="icon fa-times " aria-hidden="true"></i>Rechazar</span>
                      </button>
                    </div>


                    <div class="float-right">

                      <a type="button" class="btn btn-primary ladda-button "  href="<?=$defaultfile;?>" target="_blank"> </i>Ver </a>
                    </div>

                  <?php } ;?>

                </div>
                <div class="example">
                  <div class="pearls row">
                    <div class="pearl <?=@$stepOne;?> col-4">
                      <div class="pearl-icon"><i class="icon wb-upload  upicon" aria-hidden="true"></i></div>
                      <span class="pearl-title">Cargar Pasaporte</span>
                    </div>
                    <div class="pearl <?=@$stepTwo;?> col-4">
                      <div class="pearl-icon"><i class="icon fa-spinner upicon " aria-hidden="true"></i></div>
                      <span class="pearl-title">Revisión</span>

                      <?php if(@$fileInfo['data']['statusDocumento']== 'Rechazado') { ;?>
                      <div class="reviciones example example-popover" align="center">

                        <div class="popover bs-popover-bottom popover-warning col-12">
                          <div class="arrow"></div>
                          <h3 class="popover-header">Documento rechazado</h3>
                          <div class="popover-body  col-12">
                            <p><b>El pasaporte de <?=@$aspirante['firstNamePersona'];?> <?=@$aspirante['lastNamePersona'];?></b> fue rechazado! </p>
                            <p><b>razón: </b> <?=@$description;?></p>
                          </div>
                        </div>
                      </div>
                      <?php } ;?>
                    </div>
                    <div class="pearl  <?=@$stepThree;?>  col-4">
                      <div class="pearl-icon"><i class="icon wb-check upicon" aria-hidden="true"></i></div>
                      <span class="pearl-title">Aceptado</span>
                    </div>
                  </div>
                </div>
              </div>

              </div>
          </div>
          <?php if( @$InstOneInfo!= NULL ) { ;?>
          <div class="user-background card card-shadow">
            <div class="card-header card-header-transparent p-20">
              <h4 class="card-title mb-0">Formato de solicitud para <?=@$instOne['nombreInstitucion'];?> </h4>

            </div>
            <div class="card-block">
              <div class="example-wrap">
                <h4 class="example-title"><?=$infoFormOne;?></h4>
                <div class="example">
                  <input type="file" id="input-file-now" data-plugin="dropify" <?=$enableFormOne;?>   data-default-file="<?=$defaultfileForOne;?>"
                  />

                </div>
                <div class="example example-buttons">
 
                  <?php if(@$fileexistsFormOne == TRUE) { ;?>

                    <div class="float-left">
                      <button type="button" class="btn btn-primary ladda-button btn-aceptar-veranoAcademicoFormOne" data-style="expand-left"
                        data-plugin="ladda" data-type="progress" id="file">
                        <span class="ladda-label"><i class="icon fa-check" aria-hidden="true"></i>Aceptar</span>
                      </button>
                    </div>
                    <div class="float-left">
                      <button type="button" class="btn btn-warning ladda-button btn-rechazar-veranoAcademicoFormOne" data-style="expand-left"
                        data-plugin="ladda" data-type="progress" id="file">
                        <span class="ladda-label"><i class="icon fa-times " aria-hidden="true"></i>Rechazar</span>
                      </button>
                    </div>
                    <div class="float-left">
                      <!-- <button type="button" class="btn btn-info ladda-button btn-subir-veranoFormOne" data-style="expand-left"
                        data-plugin="ladda" data-type="progress" id="file">
                        <span class="ladda-label"><i class="icon fa-times " aria-hidden="true"></i>Subir</span>
                      </button> -->
                    </div>


                    <div class="float-right">

                      <a type="button" class="btn btn-primary ladda-button "  href="<?=$defaultfileForOne;?>" target="_blank"> </i>Ver </a>
                    </div>

                  <?php } ;?>

                </div>
                <div class="example">
                  <div class="pearls row">
                    <div class="pearl <?=@$stepOneFormOne;?> col-4">
                      <div class="pearl-icon"><i class="icon wb-upload  upicon" aria-hidden="true"></i></div>
                      <span class="pearl-title">Cargar formato de registro</span>
                    </div>
                    <div class="pearl <?=@$stepTwoFormOne;?> col-4">
                      <div class="pearl-icon"><i class="icon fa-spinner upicon " aria-hidden="true"></i></div>
                      <span class="pearl-title">Revisión</span>

                      <?php if(@$fileInfoFormOne['statusDocumento']== 'Rechazado') { ;?>
                      <div class="reviciones example example-popover" align="center">

                        <div class="popover bs-popover-bottom popover-warning col-12">
                          <div class="arrow"></div>
                          <h3 class="popover-header">Documento rechazado</h3>
                          <div class="popover-body  col-12">
                            <p><b>El pasaporte de <?=@$aspirante['firstNamePersona'];?> <?=@$aspirante['lastNamePersona'];?></b> fue rechazado! </p>
                            <p><b>razón: </b> <?=@$recomendationFormOne;?></p>
                          </div>
                        </div>
                      </div>
                      <?php } ;?>
                    </div>
                    <div class="pearl  <?=@$stepThreeFormOne;?>  col-4">
                      <div class="pearl-icon"><i class="icon wb-check upicon" aria-hidden="true"></i></div>
                      <span class="pearl-title">Aceptado</span>
                    </div>
                  </div>
                </div>
              </div>

              </div>
          </div>
          <?php } ;?>
          <?php if( @$InstTwoInfo!= NULL ) { ;?>
          <div class="user-background card card-shadow">
            <div class="card-header card-header-transparent p-20">
              <h4 class="card-title mb-0">Formato de solicitud para <?=@$instTwo['nombreInstitucion'];?> </h4>

            </div>
            <div class="card-block">
              <div class="example-wrap">
                <h4 class="example-title"><?=$infoFormTwo;?></h4>
                <div class="example">
                  <input type="file" id="input-file-now" data-plugin="dropify" <?=$enableFormTwo;?>   data-default-file="<?=$defaultfileFormTwo;?>"
                  />

                </div>
                <div class="example example-buttons">

                  <?php if(@$fileexistsFormTwo == TRUE) { ;?>

                    <div class="float-left">
                      <button type="button" class="btn btn-primary ladda-button btn-aceptar-veranoAcademicoFormTwo" data-style="expand-left"
                        data-plugin="ladda" data-type="progress" id="file">
                        <span class="ladda-label"><i class="icon fa-check" aria-hidden="true"></i>Aceptar</span>
                      </button>
                    </div>
                    <div class="float-left">
                      <button type="button" class="btn btn-warning ladda-button btn-rechazar-veranoAcademicoFormTwo" data-style="expand-left"
                        data-plugin="ladda" data-type="progress" id="file">
                        <span class="ladda-label"><i class="icon fa-times " aria-hidden="true"></i>Rechazar</span>
                      </button>
                    </div>


                    <div class="float-right">

                      <a type="button" class="btn btn-primary ladda-button "  href="<?=$defaultfileFormTwo;?>" target="_blank"> </i>Ver </a>
                    </div>

                  <?php } ;?>

                </div>
                <div class="example">
                  <div class="pearls row">
                    <div class="pearl <?=@$stepOneFormTwo;?> col-4">
                      <div class="pearl-icon"><i class="icon wb-upload  upicon" aria-hidden="true"></i></div>
                      <span class="pearl-title">Cargar formato de registro</span>
                    </div>
                    <div class="pearl <?=@$stepTwoFormTwo;?> col-4">
                      <div class="pearl-icon"><i class="icon fa-spinner upicon " aria-hidden="true"></i></div>
                      <span class="pearl-title">Revisión</span>

                      <?php if(@$fileInfoFormTwo['statusDocumento']== 'Rechazado') { ;?>
                      <div class="reviciones example example-popover" align="center">

                        <div class="popover bs-popover-bottom popover-warning col-12">
                          <div class="arrow"></div>
                          <h3 class="popover-header">Documento rechazado</h3>
                          <div class="popover-body  col-12">
                            <p><b>El pasaporte de <?=@$aspirante['firstNamePersona'];?> <?=@$aspirante['lastNamePersona'];?></b> fue rechazado! </p>
                            <p><b>razón: </b><?=@$recomendationFormTwo;?></p>
                          </div>
                        </div>
                      </div>
                      <?php } ;?>
                    </div>
                    <div class="pearl  <?=@$stepThreeFormTwo;?>  col-4">
                      <div class="pearl-icon"><i class="icon wb-check upicon" aria-hidden="true"></i></div>
                      <span class="pearl-title">Aceptado</span>
                    </div>
                  </div>
                </div>
              </div>

              </div>
          </div>
          <?php } ;?>
          <?php if( @$InstThreeInfo!= NULL ) { ;?>
          <div class="user-background card card-shadow">
            <div class="card-header card-header-transparent p-20">
              <h4 class="card-title mb-0">Formato de solicitud para <?=@$instThree['nombreInstitucion'];?> </h4>

            </div>
            <div class="card-block">
              <div class="example-wrap">
                <h4 class="example-title"><?=$infoFormThree;?></h4>
                <div class="example">
                  <input type="file" id="input-file-now" data-plugin="dropify" <?=$enableFormThree;?>   data-default-file="<?=$defaultfileFormThree;?>"
                  />

                </div>
                <div class="example example-buttons">

                  <?php if(@$fileexistsFormThree == TRUE) { ;?>

                    <div class="float-left">
                      <button type="button" class="btn btn-primary ladda-button btn-aceptar-veranoAcademicoFormThree" data-style="expand-left"
                        data-plugin="ladda" data-type="progress" id="file">
                        <span class="ladda-label"><i class="icon fa-check" aria-hidden="true"></i>Aceptar</span>
                      </button>
                    </div>
                    <div class="float-left">
                      <button type="button" class="btn btn-warning ladda-button btn-rechazar-veranoAcademicoFormThree" data-style="expand-left"
                        data-plugin="ladda" data-type="progress" id="file">
                        <span class="ladda-label"><i class="icon fa-times " aria-hidden="true"></i>Rechazar</span>
                      </button>
                    </div>


                    <div class="float-right">

                      <a type="button" class="btn btn-primary ladda-button "  href="<?=$defaultfileFormThree;?>" target="_blank"> </i>Ver </a>
                    </div>

                  <?php } ;?>

                </div>
                <div class="example">
                  <div class="pearls row">
                    <div class="pearl <?=@$stepOneFormThree;?> col-4">
                      <div class="pearl-icon"><i class="icon wb-upload  upicon" aria-hidden="true"></i></div>
                      <span class="pearl-title">Cargar formato de registro</span>
                    </div>
                    <div class="pearl <?=@$stepTwoFormThree;?> col-4">
                      <div class="pearl-icon"><i class="icon fa-spinner upicon " aria-hidden="true"></i></div>
                      <span class="pearl-title">Revisión</span>

                      <?php if(@$fileInfoFormThree['statusDocumento']== 'Rechazado') { ;?>
                      <div class="reviciones example example-popover" align="center">

                        <div class="popover bs-popover-bottom popover-warning col-12">
                          <div class="arrow"></div>
                          <h3 class="popover-header">Documento rechazado</h3>
                          <div class="popover-body  col-12">
                            <p><b>El pasaporte de <?=@$aspirante['firstNamePersona'];?> <?=@$aspirante['lastNamePersona'];?></b> fue rechazado! </p>
                            <p><b>razón: </b> <?=@$recomendationFormThree;?></p>
                          </div>
                        </div>
                      </div>
                      <?php } ;?>
                    </div>
                    <div class="pearl  <?=@$stepThreeFormThree;?>  col-4">
                      <div class="pearl-icon"><i class="icon wb-check upicon" aria-hidden="true"></i></div>
                      <span class="pearl-title">Aceptado</span>
                    </div>
                  </div>
                </div>
              </div>

              </div>
          </div>
          <?php } ;?>
          <div class="user-background card card-shadow">
            <div class="card-header card-header-transparent p-20">
              <h4 class="card-title mb-0">Transcripciones </h4>

            </div>
            <div class="card-block">
              <div class="example-wrap">
                <h4 class="example-title"><?=$infoDocTranscription;?></h4>
                <div class="example">
                  <input type="file" id="input-file-now" data-plugin="dropify" <?=$enableTranscription;?>   data-default-file="<?=$defaultfileTranscription;?>"
                  />

                </div>
                <div class="example example-buttons">

                  <?php if(@$fileexistsTranscription == TRUE) { ;?>

                    <div class="float-left">
                      <button type="button" class="btn btn-primary ladda-button btn-aceptar-transcriptionAcademico" data-style="expand-left"
                        data-plugin="ladda" data-type="progress" id="file">
                        <span class="ladda-label"><i class="icon fa-check" aria-hidden="true"></i>Aceptar</span>
                      </button>
                    </div>
                    <div class="float-left">
                      <button type="button" class="btn btn-warning ladda-button btn-rechazar-transcription-academic" data-style="expand-left"
                        data-plugin="ladda" data-type="progress" id="file">
                        <span class="ladda-label"><i class="icon fa-times " aria-hidden="true"></i>Rechazar</span>
                      </button>
                    </div>


                    <div class="float-right">

                      <a type="button" class="btn btn-primary ladda-button "  href="<?=$defaultfileTranscription;?>" target="_blank"> </i>Ver </a>
                    </div>

                  <?php } ;?>

                </div>
                <div class="example">
                  <div class="pearls row">
                    <div class="pearl <?=@$stepOneTranscription;?> col-4">
                      <div class="pearl-icon"><i class="icon wb-upload  upicon" aria-hidden="true"></i></div>
                      <span class="pearl-title">Cargar Pasaporte</span>
                    </div>
                    <div class="pearl <?=@$stepTwoTranscription;?> col-4">
                      <div class="pearl-icon"><i class="icon fa-spinner upicon " aria-hidden="true"></i></div>
                      <span class="pearl-title">Revisión</span>

                      <?php if(@$fileInfoTranscription['data']['statusDocumento']== 'Rechazado') { ;?>
                      <div class="reviciones example example-popover" align="center">

                        <div class="popover bs-popover-bottom popover-warning col-12">
                          <div class="arrow"></div>
                          <h3 class="popover-header">Documento rechazado</h3>
                          <div class="popover-body  col-12">
                            <p><b>El pasaporte de <?=@$aspirante['firstNamePersona'];?> <?=@$aspirante['lastNamePersona'];?></b> fue rechazado! </p>
                            <p><b>razón: </b> <?=@$descriptionTranscription;?></p>
                          </div>
                        </div>
                      </div>
                      <?php } ;?>
                    </div>
                    <div class="pearl  <?=@$stepThreeTranscription;?>  col-4">
                      <div class="pearl-icon"><i class="icon wb-check upicon" aria-hidden="true"></i></div>
                      <span class="pearl-title">Aceptado</span>
                    </div>
                  </div>
                </div>
              </div>

              </div>
          </div>
          <div class="user-background card card-shadow">
            <div class="card-header card-header-transparent p-20">
              <h4 class="card-title mb-0">Traducción </h4>

            </div>
            <div class="card-block">
              <div class="example-wrap">
                <h4 class="example-title"><?=$infoDocTraduction;?></h4>
                <div class="example">
                  <input type="file" id="input-file-now" data-plugin="dropify" <?=$enableTraduction;?>   data-default-file="<?=$defaultfileTraduction;?>"
                  />

                </div>
                <div class="example example-buttons">

                  <?php if(@$fileexistsTraduction == TRUE) { ;?>

                    <div class="float-left">
                      <button type="button" class="btn btn-primary ladda-button btn-aceptar-traductionAcademico" data-style="expand-left"
                        data-plugin="ladda" data-type="progress" id="file">
                        <span class="ladda-label"><i class="icon fa-check" aria-hidden="true"></i>Aceptar</span>
                      </button>
                    </div>
                    <div class="float-left">
                      <button type="button" class="btn btn-warning ladda-button btn-rechazar-traduction-academic" data-style="expand-left"
                        data-plugin="ladda" data-type="progress" id="file">
                        <span class="ladda-label"><i class="icon fa-times " aria-hidden="true"></i>Rechazar</span>
                      </button>
                    </div>


                    <div class="float-right">

                      <a type="button" class="btn btn-primary ladda-button "  href="<?=$defaultfileTraduction;?>" target="_blank"> </i>Ver </a>
                    </div>

                  <?php } ;?>

                </div>
                <div class="example">
                  <div class="pearls row">
                    <div class="pearl <?=@$stepOneTraduction;?> col-4">
                      <div class="pearl-icon"><i class="icon wb-upload  upicon" aria-hidden="true"></i></div>
                      <span class="pearl-title">Cargar Pasaporte</span>
                    </div>
                    <div class="pearl <?=@$stepTwoTraduction;?> col-4">
                      <div class="pearl-icon"><i class="icon fa-spinner upicon " aria-hidden="true"></i></div>
                      <span class="pearl-title">Revisión</span>

                      <?php if(@$fileInfoTraduction['data']['statusDocumento']== 'Rechazado') { ;?>
                      <div class="reviciones example example-popover" align="center">

                        <div class="popover bs-popover-bottom popover-warning col-12">
                          <div class="arrow"></div>
                          <h3 class="popover-header">Documento rechazado</h3>
                          <div class="popover-body  col-12">
                            <p><b>El pasaporte de <?=@$aspirante['firstNamePersona'];?> <?=@$aspirante['lastNamePersona'];?></b> fue rechazado! </p>
                            <p><b>razón: </b> <?=@$descriptionTraduction;?></p>
                          </div>
                        </div>
                      </div>
                      <?php } ;?>
                    </div>
                    <div class="pearl  <?=@$stepThreeTraduction;?>  col-4">
                      <div class="pearl-icon"><i class="icon wb-check upicon" aria-hidden="true"></i></div>
                      <span class="pearl-title">Aceptado</span>
                    </div>
                  </div>
                </div>
              </div>

              </div>
          </div>

        </div>
        <!-- End Middle Column -->

        <!-- Left Column -->

        <!-- End Left Column -->

        <!-- Right Column -->
        <div class="col-lg-6 col-xl-3 order-xl-3">
          <div class="card user-visitors">
            <div class="card-header card-header-transparent p-20">
              <h4 class="card-title mb-0">Status</h4>
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
