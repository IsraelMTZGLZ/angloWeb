
          <!-- End User Posts -->
          <input type="hidden" name="aspirante" id="aspirante" value="<?=$user->aspirante;?>">
          <input type="hidden" id="idDocFormOne" value="<?=@$idDocFormOne;?>" name="idDocFormOne">
          <input type="hidden" id="idDocFormTwo" value="<?=@$idDocFormTwo;?>" name="idDocFormTwo">
          <input type="hidden" id="idDocFormThree" value="<?=@$idDocFormThree;?>" name="idDocFormThree">
          <input type="hidden" id="NameLastName" value="<?=@$aspirante['firstNamePersona'];?> <?=@$aspirante['lastNamePersona'];?>" name="NameLastName">
          <input type="hidden" id="NameInstOne" value="<?=@$instOne['nombreInstitucion'];?>" name="NameInstOne">
          <input type="hidden" id="NameInstTwo" value="<?=@$instTwo['nombreInstitucion'];?>" name="NameInstTwo">
          <input type="hidden" id="NameInstThree" value="<?=@$instThree['nombreInstitucion'];?>" name="NameInstThree">

          <input type="hidden" id="idInstitucionOne" value="<?=@$InstOneInfo;?>" name="idInstitucionOne">
          <input type="hidden" id="idInstitucionTwo" value="<?=@$InstTwoInfo;?>" name="idInstitucionTwo">
          <input type="hidden" id="idInstitucionThree" value="<?=@$InstThreeInfo;?>" name="idInstitucionThree">

          <input type="hidden" id="idVisaInstOne" value="<?=@$idVisaInstOne;?>" name="idVisaInstOne">
          <input type="hidden" id="idVisaInstTwo" value="<?=@$idVisaInstTwo;?>" name="idVisaInstTwo">
          <input type="hidden" id="idVisaInstThree" value="<?=@$idVisaInstThree;?>" name="idVisaInstThree">

          <!-- User Background -->
          <?php if(!@$InstOneInfo== NULL) { ;?>
          <div class="user-background card card-shadow">
            <div class="card-header card-header-transparent p-20">
              <h4 class="card-title mb-0">Alta de Visa para <?=@$instOne['nombreInstitucion'];?> </h4>
            </div>
            <div class="card-block">
              <div class="example-wrap">
                <h4 class="example-title"><?=$infoDocVisaInstOne;?></h4>
                <div class="example">
                  <form id="formDocVisa">
                    <input type="file" id="input-file-visa" name="VisaInstOne.pdf" data-plugin="dropify" <?=$enableVisaInstOne;?>   data-default-file="<?=$defaultfileVisaInstOne;?>" />
                  </form>
                </div>
                <div class="example example-buttons">
                  <?php if(@$fileexistsVisaInstOne == FALSE) { ;?>
                  <div class="float-left">
                    <button type="button" class="btn btn-primary ladda-button btn-file-visaCu" data-style="expand-left"
                      data-plugin="ladda" data-type="progress" id="file">
                      <span class="ladda-label"><i class="icon wb-upload mr-10" aria-hidden="true"></i>Subir</span>
                    </button>
                  </div>
                  <?php } ;?>
                  <?php if(@$fileexistsVisaInstOne == TRUE and $fileInfoVisaInstOne['data']['statusDocumento']== 'Rechazado') { ;?>
                  <div class="float-left">
                    <button type="button" class="btn btn-warning ladda-button btn-edit-file-carta-vinglesCu" data-style="expand-left"
                      data-plugin="ladda" data-type="progress" id="file">
                      <span class="ladda-label"><i class="icon wb-upload " aria-hidden="true"></i>Volver a subir</span>
                    </button>
                  </div>
                  <?php } ;?>

                </div>

                  <div class="example">
                    <div class="pearls row">
                      <div class="pearl <?=@$stepOneVisaInstOne;?> col-4">
                        <div class="pearl-icon"><i class="icon wb-upload  upicon" aria-hidden="true"></i></div>
                        <span class="pearl-title">Cargar de VisaInstOne</span>
                      </div>
                      <div class="pearl <?=@$stepTwoVisaInstOne;?> col-4">
                        <div class="pearl-icon"><i class="icon fa-spinner upicon " aria-hidden="true"></i></div>
                        <span class="pearl-title">Revisión</span>

                        <?php if(@$fileInfoVisaInstOne['data']['statusDocumento']== 'Revision') { ;?>
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
                        <?php if(@$fileInfoVisaInstOne['data']['statusDocumento']== 'Rechazado') { ;?>
                        <div class="reviciones example example-popover" align="center">

                          <div class="popover bs-popover-bottom popover-warning col-12">
                            <div class="arrow"></div>
                            <h3 class="popover-header">Documento rechazado</h3>
                            <div class="popover-body  col-12">
                              <p><b><?=@$aspirante['firstNamePersona'];?> <?=@$aspirante['lastNamePersona'];?></b>su documento fue rechazado. </p>
                              <p><b>razón: </b> <?=@$descriptionVisaInstOne;?></p>
                            </div>
                          </div>
                        </div>
                        <?php } ;?>
                      </div>
                      <div class="pearl <?=@$stepThreeVisaInstOne;?> col-4">
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
              <h4 class="card-title mb-0">Alta de Visa para <?=@$instTwo['nombreInstitucion'];?> </h4>
            </div>
            <div class="card-block">
              <div class="example-wrap">
                <h4 class="example-title"><?=$infoDocVisaInstTwo;?></h4>
                <div class="example">
                  <form id="formDocVisaInstTwo">
                    <input type="file" id="input-file-visatwo" name="VisaInstTwo.pdf" data-plugin="dropify" <?=$enableVisaInstTwo;?>   data-default-file="<?=$defaultfileVisaInstTwo;?>" />
                  </form>
                </div>
                <div class="example example-buttons">
                  <?php if(@$fileexistsVisaInstTwo == FALSE) { ;?>
                  <div class="float-left">
                    <button type="button" class="btn btn-primary ladda-button btn-file-visaCuTwo" data-style="expand-left"
                      data-plugin="ladda" data-type="progress" id="file">
                      <span class="ladda-label"><i class="icon wb-upload mr-10" aria-hidden="true"></i>Subir</span>
                    </button>
                  </div>
                  <?php } ;?>
                  <?php if(@$fileexistsVisaInstTwo == TRUE and $fileInfoVisaInstTwo['data']['statusDocumento']== 'Rechazado') { ;?>
                  <div class="float-left">
                    <button type="button" class="btn btn-warning ladda-button btn-edit-file-carta-vinglesCutwo" data-style="expand-left"
                      data-plugin="ladda" data-type="progress" id="file">
                      <span class="ladda-label"><i class="icon wb-upload " aria-hidden="true"></i>Volver a subir</span>
                    </button>
                  </div>
                  <?php } ;?>

                </div>

                  <div class="example">
                    <div class="pearls row">
                      <div class="pearl <?=@$stepOneVisaInstTwo;?> col-4">
                        <div class="pearl-icon"><i class="icon wb-upload  upicon" aria-hidden="true"></i></div>
                        <span class="pearl-title">Cargar de VisaInstTwo</span>
                      </div>
                      <div class="pearl <?=@$stepTwoVisaInstTwo;?> col-4">
                        <div class="pearl-icon"><i class="icon fa-spinner upicon " aria-hidden="true"></i></div>
                        <span class="pearl-title">Revisión</span>

                        <?php if(@$fileInfoVisaInstTwo['data']['statusDocumento']== 'Revision') { ;?>
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
                        <?php if(@$fileInfoVisaInstTwo['data']['statusDocumento']== 'Rechazado') { ;?>
                        <div class="reviciones example example-popover" align="center">

                          <div class="popover bs-popover-bottom popover-warning col-12">
                            <div class="arrow"></div>
                            <h3 class="popover-header">Documento rechazado</h3>
                            <div class="popover-body  col-12">
                              <p><b><?=@$aspirante['firstNamePersona'];?> <?=@$aspirante['lastNamePersona'];?></b>su documento fue rechazado. </p>
                              <p><b>razón: </b> <?=@$descriptionVisaInstTwo;?></p>
                            </div>
                          </div>
                        </div>
                        <?php } ;?>
                      </div>
                      <div class="pearl <?=@$stepThreeVisaInstTwo;?> col-4">
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
              <h4 class="card-title mb-0">Alta de Visa para <?=@$instThree['nombreInstitucion'];?></h4>
            </div>
            <div class="card-block">
              <div class="example-wrap">
                <h4 class="example-title"><?=$infoDocVisaInstThree;?></h4>
                <div class="example">
                  <form id="formDocVisaInstThree">
                    <input type="file" id="input-file-visathree" name="VisaInstThree.pdf" data-plugin="dropify" <?=$enableVisaInstThree;?>   data-default-file="<?=$defaultfileVisaInstThree;?>" />
                  </form>
                </div>
                <div class="example example-buttons">
                  <?php if(@$fileexistsVisaInstThree == FALSE) { ;?>
                  <div class="float-left">
                    <button type="button" class="btn btn-primary ladda-button btn-file-visaCuThree" data-style="expand-left"
                      data-plugin="ladda" data-type="progress" id="file">
                      <span class="ladda-label"><i class="icon wb-upload mr-10" aria-hidden="true"></i>Subir</span>
                    </button>
                  </div>
                  <?php } ;?>
                  <?php if(@$fileexistsVisaInstThree == TRUE and $fileInfoVisaInstThree['data']['statusDocumento']== 'Rechazado') { ;?>
                  <div class="float-left">
                    <button type="button" class="btn btn-warning ladda-button btn-edit-file-carta-vinglesCuthree" data-style="expand-left"
                      data-plugin="ladda" data-type="progress" id="file">
                      <span class="ladda-label"><i class="icon wb-upload " aria-hidden="true"></i>Volver a subir</span>
                    </button>
                  </div>
                  <?php } ;?>

                </div>

                  <div class="example">
                    <div class="pearls row">
                      <div class="pearl <?=@$stepOneVisaInstThree;?> col-4">
                        <div class="pearl-icon"><i class="icon wb-upload  upicon" aria-hidden="true"></i></div>
                        <span class="pearl-title">Cargar de VisaInstThree</span>
                      </div>
                      <div class="pearl <?=@$stepTwoVisaInstThree;?> col-4">
                        <div class="pearl-icon"><i class="icon fa-spinner upicon " aria-hidden="true"></i></div>
                        <span class="pearl-title">Revisión</span>

                        <?php if(@$fileInfoVisaInstThree['data']['statusDocumento']== 'Revision') { ;?>
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
                        <?php if(@$fileInfoVisaInstThree['data']['statusDocumento']== 'Rechazado') { ;?>
                        <div class="reviciones example example-popover" align="center">

                          <div class="popover bs-popover-bottom popover-warning col-12">
                            <div class="arrow"></div>
                            <h3 class="popover-header">Documento rechazado</h3>
                            <div class="popover-body  col-12">
                              <p><b><?=@$aspirante['firstNamePersona'];?> <?=@$aspirante['lastNamePersona'];?></b>su documento fue rechazado. </p>
                              <p><b>razón: </b> <?=@$descriptionVisaInstThree;?></p>
                            </div>
                          </div>
                        </div>
                        <?php } ;?>
                      </div>
                      <div class="pearl <?=@$stepThreeVisaInstThree;?> col-4">
                        <div class="pearl-icon"><i class="icon wb-check upicon" aria-hidden="true"></i></div>
                        <span class="pearl-title">Aceptado</span>
                      </div>
                    </div>
                  </div>



              </div>
              </div>
          </div>
          <?php } ;?>

        </div>

        <!-- End Middle Column -->

        <!-- Left Column -->

        <!-- End Left Column -->

        <!-- Right Column -->
        <div class="col-lg-6 col-xl-3 order-xl-3">
          <div class="card user-visitors">
            <div class="card-header card-header-transparent p-20">
              <h4 class="card-title mb-0">Información</h4>
            </div>
            <div class="card-block px-30">

              <ul class="list-group list-group-full">
                <div class="text-center">
                <!-- <div class="col-12" style="background-color: #db4437;height: 50%;">
                    <span style="color:white; font-size: 20px;" >3</span>
                </div> -->
                </div>
              </ul>
              <div class="text-center">
                  <!-- <a type="button" class="btn btn-round btn-warning" href="tel:4422609090"><i class="icon icon-xs fa-info mr-0" aria-hidden="true"></i>Información</a> -->
                  <button class="btn btn-outline btn-warning" data-target="#InfoTres" data-toggle="modal"
                    type="button"> <i class="icon icon-xs fa-info mr-0" aria-hidden="true"></i>Información </button>
              </div>
            </div>
          </div>
