
  <!-- Page -->


          <!-- End User Posts -->
          <input type="hidden" name="aspirante" id="aspirante" value="<?=$user->aspirante;?>">
          <input type="hidden" id="idDocIngFormOne" value="<?=@$idDocFormOne;?>" name="idDocIngFormOne">
          <input type="hidden" id="idDocIngFormTwo" value="<?=@$idDocFormTwo;?>" name="idDocIngFormTwo">
          <input type="hidden" id="idDocIngFormThree" value="<?=@$idDocFormThree;?>" name="idDocIngFormThree">
          <input type="hidden" id="NameLastName" value="<?=@$aspirante['firstNamePersona'];?> <?=@$aspirante['lastNamePersona'];?>" name="NameLastName">
          <input type="hidden" id="NameInstOne" value="<?=@$instOne['nombreInstitucion'];?>" name="NameInstOne">
          <input type="hidden" id="NameInstTwo" value="<?=@$instTwo['nombreInstitucion'];?>" name="NameInstTwo">
          <input type="hidden" id="NameInstThree" value="<?=@$instThree['nombreInstitucion'];?>" name="NameInstThree">
          <input type="hidden" id="idInstitucionOne" value="<?=@$InstOneInfo;?>" name="idInstitucionOne">
          <input type="hidden" id="idInstitucionTwo" value="<?=@$InstTwoInfo;?>" name="idInstitucionTwo">
          <input type="hidden" id="idInstitucionThree" value="<?=@$InstThreeInfo;?>" name="idInstitucionThree">
          <!-- User Background -->
          <div class="user-background card card-shadow">
            <div class="card-header card-header-transparent p-20">
              <h4 class="card-title mb-0">Alta de Pasaporte </h4>
            </div>
            <div class="card-block">
              <div class="example-wrap">
                <h4 class="example-title"><?=$infoDoc;?></h4>
                <div class="example">

                  <form id="formPassport">
                    <input type="file" id="input-file-passport" name="Pasaporte.pdf" data-plugin="dropify" <?=$enable;?>   data-default-file="<?=$defaultfile;?>"/>
                  </form>
                </div>
                <div class="example example-buttons">
                  <?php if(@$fileexists == FALSE) { ;?>
                  <div class="float-left">
                    <button type="button" class="btn btn-primary ladda-button btn-file-ingles-passport" data-style="expand-left"
                      data-plugin="ladda" data-type="progress" id="file">
                      <span class="ladda-label"><i class="icon wb-upload mr-10" aria-hidden="true"></i>Subir</span>
                    </button>
                  </div>
                  <?php } ;?>
                  <?php if(@$fileexists == TRUE and $fileInfo['data']['statusDocumento']== 'Rechazado') { ;?>
                  <div class="float-left">
                    <button type="button" class="btn btn-warning ladda-button btn-edit-file-ingles-passport" data-style="expand-left"
                      data-plugin="ladda" data-type="progress" id="file">
                      <span class="ladda-label"><i class="icon wb-upload " aria-hidden="true"></i>Volver a subir</span>
                    </button>
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

                        <?php if(@$fileInfo['data']['statusDocumento']== 'Revision') { ;?>
                        <div class="reviciones example example-popover" align="center">
                          <button type="button" class="btn btn-info sr-only">
                            Documento en revisión
                          </button>
                          <div class="popover bs-popover-bottom popover-info ">
                            <div class="arrow"></div>
                            <h3 class="popover-header">Documento en revisión</h3>
                            <div class="popover-body">
                              <p><b><?=@$aspirante['firstNamePersona'];?> <?=@$aspirante['lastNamePersona'];?></b> Su documento está siendo revisado por el equipo de <b>Anglo Latino Education Partnership</b>, gracias!</p>
                            </div>
                          </div>
                        </div>
                        <?php } ;?>
                        <?php if(@$fileInfo['data']['statusDocumento']== 'Rechazado') { ;?>
                        <div class="reviciones example example-popover" align="center">

                          <div class="popover bs-popover-bottom popover-warning col-12">
                            <div class="arrow"></div>
                            <h3 class="popover-header">Documento rechazado</h3>
                            <div class="popover-body  col-12">
                              <p><b><?=@$aspirante['firstNamePersona'];?> <?=@$aspirante['lastNamePersona'];?></b>su documento fue rechazado. </p>
                              <p><b>razón: </b> <?=@$description;?></p>
                            </div>
                          </div>
                        </div>
                        <?php } ;?>
                      </div>
                      <div class="pearl <?=@$stepThree;?> col-4">
                        <div class="pearl-icon"><i class="icon wb-check upicon" aria-hidden="true"></i></div>
                        <span class="pearl-title">Aceptado</span>
                      </div>
                    </div>
                  </div>
              </div>

              </div>
          </div>
          <?php if(@$documentOne['data']!= NULL  && @$InstOneInfo!= NULL ) { ;?>
          <div class="user-background card card-shadow">
            <div class="card-header card-header-transparent p-20">
              <h4 class="card-title mb-0">Alta de Formato de Registro para  <?=@$instOne['nombreInstitucion'];?></h4>
            </div>
            <div class="card-block">
              <div class="example-wrap">
                <h4 class="example-title"><?=$infoFormOne;?></h4>
                <div class="example">
                  <form id="formDocModi">
                    <input type="file" id="input-file-FormOne" name="formatoDeSolicitud.pdf" data-plugin="dropify" <?=$enableFormOne;?>   data-default-file="<?=$defaultfileFormOne;?>"/>
                  </form>
                </div>
                <div class="example example-buttons">
                  <?php if(@$fileexistsFormOne == FALSE) { ;?>
                  <div class="float-left">
                    <button type="button" class="btn btn-primary ladda-button btn-file-ingles-formRegistrationOne" data-style="expand-left"
                      data-plugin="ladda" data-type="progress" id="file">
                      <span class="ladda-label"><i class="icon wb-upload mr-10" aria-hidden="true"></i>Subir</span>
                    </button>
                  </div>
                  <?php } ;?>
                  <?php if(@$fileexistsFormOne == TRUE and $fileInfoFormOne['statusDocumento']== 'Rechazado') { ;?>
                  <div class="float-left">
                    <button type="button" class="btn btn-warning ladda-button btn-edit-file-inglesFormOne" data-style="expand-left"
                      data-plugin="ladda" data-type="progress" id="file">
                      <span class="ladda-label"><i class="icon wb-upload " aria-hidden="true"></i>Volver a subir</span>
                    </button>
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

                        <?php if(@$revicionOne== TRUE) { ;?>
                        <div class="reviciones example example-popover" align="center">
                          <button type="button" class="btn btn-info sr-only">
                            Documento en revisión
                          </button>
                          <div class="popover bs-popover-bottom popover-info ">
                            <div class="arrow"></div>
                            <h3 class="popover-header">Documento en revisión</h3>
                            <div class="popover-body">
                              <p><b><?=@$aspirante['firstNamePersona'];?> <?=@$aspirante['lastNamePersona'];?></b> Su documento está siendo revisado por el equipo de <b>Anglo Latino Education Partnership</b>, gracias!</p>
                            </div>
                          </div>
                        </div>
                        <?php } ;?>
                        <?php if(@$fileInfoFormOne['statusDocumento']== 'Rechazado') { ;?>
                        <div class="reviciones example example-popover" align="center">

                          <div class="popover bs-popover-bottom popover-warning col-12">
                            <div class="arrow"></div>
                            <h3 class="popover-header">Documento rechazado</h3>
                            <div class="popover-body  col-12">
                              <p><b><?=@$aspirante['firstNamePersona'];?> <?=@$aspirante['lastNamePersona'];?></b>su documento fue rechazado. </p>
                              <p><b>razón: </b> <?=@$recomendationFormOne;?></p>
                            </div>
                          </div>
                        </div>
                        <?php } ;?>
                      </div>
                      <div class="pearl <?=@$stepThreeFormOne;?> col-4">
                        <div class="pearl-icon"><i class="icon wb-check upicon" aria-hidden="true"></i></div>
                        <span class="pearl-title">Aceptado</span>
                      </div>
                    </div>
                  </div>



              </div>
              </div>
          </div>
          <?php } ?>
          <?php if(@$documentTwo['data']!= NULL  && @$InstTwoInfo!= NULL ) { ;?>
          <div class="user-background card card-shadow">
            <div class="card-header card-header-transparent p-20">
              <h4 class="card-title mb-0">Alta de Formato de Registro Para  <?=@$instTwo['nombreInstitucion'];?></h4>
            </div>
            <div class="card-block">
              <div class="example-wrap">
                <h4 class="example-title"><?=$infoFormTwo;?></h4>
                <div class="example">
                  <form id="formDocTwo">
                    <input type="file" id="input-file-FormTwo" name="formatoDeSolicitud.pdf" data-plugin="dropify" <?=$enableFormTwo;?>   data-default-file="<?=$defaultfileFormTwo;?>"/>
                  </form>
                </div>
                <div class="example example-buttons">
                  <?php if(@$fileexistsFormTwo == FALSE) { ;?>
                  <div class="float-left">
                    <button type="button" class="btn btn-primary ladda-button btn-file-ingles-formRegistrationTwo" data-style="expand-left"
                      data-plugin="ladda" data-type="progress" id="file">
                      <span class="ladda-label"><i class="icon wb-upload mr-10" aria-hidden="true"></i>Subir</span>
                    </button>
                  </div>
                  <?php } ;?>
                  <?php if(@$fileexistsFormTwo == TRUE and $fileInfoFormTwo['statusDocumento']== 'Rechazado') { ;?>
                  <div class="float-left">
                    <button type="button" class="btn btn-warning ladda-button btn-edit-file-inglesFormTwo" data-style="expand-left"
                      data-plugin="ladda" data-type="progress" id="file">
                      <span class="ladda-label"><i class="icon wb-upload " aria-hidden="true"></i>Volver a subir</span>
                    </button>
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

                        <?php if(@$revicionTwo== TRUE) { ;?>
                        <div class="reviciones example example-popover" align="center">
                          <button type="button" class="btn btn-info sr-only">
                            Documento en revisión
                          </button>
                          <div class="popover bs-popover-bottom popover-info ">
                            <div class="arrow"></div>
                            <h3 class="popover-header">Documento en revisión</h3>
                            <div class="popover-body">
                              <p><b><?=@$aspirante['firstNamePersona'];?> <?=@$aspirante['lastNamePersona'];?></b> Su documento está siendo revisado por el equipo de <b>Anglo Latino Education Partnership</b>, gracias!</p>
                            </div>
                          </div>
                        </div>
                        <?php } ;?>
                        <?php if(@$fileInfoFormTwo['statusDocumento']== 'Rechazado') { ;?>
                        <div class="reviciones example example-popover" align="center">

                          <div class="popover bs-popover-bottom popover-warning col-12">
                            <div class="arrow"></div>
                            <h3 class="popover-header">Documento rechazado</h3>
                            <div class="popover-body  col-12">
                              <p><b><?=@$aspirante['firstNamePersona'];?> <?=@$aspirante['lastNamePersona'];?></b>su documento fue rechazado. </p>
                              <p><b>razón: </b> <?=@$recomendationFormTwo;?></p>
                            </div>
                          </div>
                        </div>
                        <?php } ;?>
                      </div>
                      <div class="pearl <?=@$stepThreeFormTwo;?> col-4">
                        <div class="pearl-icon"><i class="icon wb-check upicon" aria-hidden="true"></i></div>
                        <span class="pearl-title">Aceptado</span>
                      </div>
                    </div>
                  </div>
                    <!--  -->


              </div>
              </div>
          </div>
          <?php } ?>
          <?php if(@$documentThree['data']!= NULL  && @$InstThreeInfo!= NULL ) { ;?>
          <div class="user-background card card-shadow">
            <div class="card-header card-header-transparent p-20">
              <h4 class="card-title mb-0">Alta de Formato de Registro Para  <?=@$instThree['nombreInstitucion'];?> </h4>
            </div>
            <div class="card-block">
              <div class="example-wrap">
                <h4 class="example-title"><?=$infoFormThree;?></h4>
                <div class="example">
                  <form id="formDocThree">
                    <input type="file" id="input-file-FormThree" name="formatoDeSolicitud.pdf" data-plugin="dropify" <?=$enableFormThree;?>   data-default-file="<?=$defaultfileFormThree;?>"/>
                  </form>
                </div>
                <div class="example example-buttons">
                  <?php if(@$fileexistsFormThree == FALSE) { ;?>
                  <div class="float-left">
                    <button type="button" class="btn btn-primary ladda-button btn-file-ingles-formRegistrationThree" data-style="expand-left"
                      data-plugin="ladda" data-type="progress" id="file">
                      <span class="ladda-label"><i class="icon wb-upload mr-10" aria-hidden="true"></i>Subir</span>
                    </button>
                  </div>
                  <?php } ;?>
                  <?php if(@$fileexistsFormThree == TRUE and $fileInfoFormThree['statusDocumento']== 'Rechazado') { ;?>
                  <div class="float-left">
                    <button type="button" class="btn btn-warning ladda-button btn-edit-file-inglesFormThree" data-style="expand-left"
                      data-plugin="ladda" data-type="progress" id="file">
                      <span class="ladda-label"><i class="icon wb-upload " aria-hidden="true"></i>Volver a subir</span>
                    </button>
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

                        <?php if(@$revicionThree == TRUE) { ;?>
                        <div class="reviciones /example example-popover" align="center">
                          <button type="button" class="btn btn-info sr-only">
                            Documento en revisión
                          </button>
                          <div class="popover bs-popover-bottom popover-info ">
                            <div class="arrow"></div>
                            <h3 class="popover-header">Documento en revisión</h3>
                            <div class="popover-body">
                              <p><b><?=@$aspirante['firstNamePersona'];?> <?=@$aspirante['lastNamePersona'];?></b> Su documento está siendo revisado por el equipo de <b>Anglo Latino Education Partnership</b>, gracias!</p>
                            </div>
                          </div>
                        </div>
                        <?php } ;?>
                        <?php if(@$fileInfoFormThree['statusDocumento']== 'Rechazado') { ;?>
                        <div class="reviciones example example-popover" align="center">

                          <div class="popover bs-popover-bottom popover-warning col-12">
                            <div class="arrow"></div>
                            <h3 class="popover-header">Documento rechazado</h3>
                            <div class="popover-body  col-12">
                              <p><b><?=@$aspirante['firstNamePersona'];?> <?=@$aspirante['lastNamePersona'];?></b>su documento fue rechazado. </p>
                              <p><b>razón: </b> <?=@$recomendationFormThree;?></p>
                            </div>
                          </div>
                        </div>
                        <?php } ;?>
                      </div>
                      <div class="pearl <?=@$stepThreeFormThree;?> col-4">
                        <div class="pearl-icon"><i class="icon wb-check upicon" aria-hidden="true"></i></div>
                        <span class="pearl-title">Aceptado</span>
                      </div>
                    </div>
                  </div>
                    <!--  -->


              </div>
              </div>
          </div>
          <?php } ?>
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
              <h4 class="card-title mb-0">Documentos a descargar</h4>
            </div>
            <div class="card-block px-30">

              <ul class="list-group list-group-full">

              <?php if(@$documentOne['data']!= NULL  && @$InstOneInfo!= NULL ) { ;?>
                <li class="list-group-item">
                  <div class="media">
                    <img src="<?=base_url('resources/assets/Informativa/images/pdf.png');?>" title="Chrome" alt="Chrome">
                    <div class="media-body">
                      <h5 class="mt-0 mb-5 hover"></i><?=@$documentOne['data']['nombreDocumento'];?>
                      </h5>

                    </div>
                    <div class="float-right">
                      <a type="button" class="btn btn-primary btn-xs ladda-button "  href="<?=@$documentOne['data']['urlDocumento'];?>" download> <i class="icon icon-xs fa-download mr-0" aria-hidden="true"></i> </a>
                    </div>
                  </div>
                </li>
                <?php } ;?>
                <?php if(@$documentTwo['data']!= NULL  && @$InstTwoInfo!= NULL ) { ;?>
                <li class="list-group-item">
                  <div class="media">
                    <img src="<?=base_url('resources/assets/Informativa/images/pdf.png');?>" title="Chrome" alt="Chrome">
                    <div class="media-body">
                      <h5 class="mt-0 mb-5 hover"><?=@$documentTwo['data']['nombreDocumento'];?></h5>

                    </div>

                      <div class="float-right">
                        <a type="button" class="btn btn-primary btn-xs ladda-button "  href="<?=@$documentTwo['data']['urlDocumento'];?>" download> <i class="icon icon-xs fa-download mr-0" aria-hidden="true"></i> </a>
                      </div>

                  </div>
                </li>
                  <?php } ;?>
                  <?php if(@$documentThree['data']!= NULL  && @$InstThreeInfo!= NULL ) { ;?>
                <li class="list-group-item">
                  <div class="media">
                    <img src="<?=base_url('resources/assets/Informativa/images/pdf.png');?>" title="Chrome" alt="Chrome">
                    <div class="media-body">
                      <h5 class="mt-0 mb-5 hover"><?=@$documentThree['data']['nombreDocumento'];?></h5>

                    </div>

                      <div class="float-right">
                        <a type="button" class="btn btn-primary btn-xs ladda-button "  href="<?=@$documentThree['data']['urlDocumento'];?>" download> <i class="icon icon-xs fa-download mr-0" aria-hidden="true"></i> </a>
                      </div>

                  </div>
                </li>
                <?php } ;?>
              </ul>
              <div class="text-center">

                  <a type="button" class="btn btn-round btn-outline btn-warning" href="tel:4422609090"><i class="icon icon-xs fa-phone mr-0" aria-hidden="true"></i>Contactar Agente</a>

              </div>
            </div>
          </div>
