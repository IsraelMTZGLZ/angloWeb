


          <!-- End User Posts -->

          <!-- User Background -->
          <!-- <div class="user-background card card-shadow">
            <div class="card-header card-header-transparent p-20">
              <h4 class="card-title mb-0">Referencia de pago</h4>
            </div>
            <div class="card-block">
              <div class="example-wrap">
                <h4 class="example-title"><?=$infoDoc;?></h4>
                <div class="example">
                  <form id="formReferencia">
                    <input type="file" id="input-file-verano-ingles-referencia" name="Referencia.pdf" data-plugin="dropify"  data-default-file="<?=@$referenciaPago['tipo'];?>"  />
                  </form>
                </div>
                <div class="example example-buttons">
                  <?php if(@$referenciaPago['data'] !=NULL) { ;?>
                  <div class="float-left">
                    <button type="button" class="btn btn-primary ladda-button btn-file-verano-ingles-referencia" data-style="expand-left"
                      data-plugin="ladda" data-type="progress" id="file">
                      <span class="ladda-label"><i class="icon wb-upload mr-10" aria-hidden="true"></i>Subir</span>
                    </button>
                  </div>
                  <?php } ;?>
                  <?php if(@$referenciaPago['data'] ==NULL) { ;?>
                  <div class="float-left">
                    <button type="button" class="btn btn-warning ladda-button btn-edit-file-verano" data-style="expand-left"
                      data-plugin="ladda" data-type="progress" id="file">
                      <span class="ladda-label"><i class="icon wb-upload " aria-hidden="true"></i>Volver a subir</span>
                    </button>
                  </div>
                  <?php } ;?>
                  <div class="float-right">

                    <a type="button" class="btn btn-primary ladda-button "  href="<?=@$referenciaPago['urlDocumento'];?>" target="_blank"> </i>Ver </a>
                  </div>

                </div>


              </div>
              </div>
          </div> -->
          <!-- <div class="user-background card card-shadow">
            <div class="card-header card-header-transparent p-20">
              <h4 class="card-title mb-0">Alta carta de oferta  </h4>
            </div>
            <div class="card-block">
              <div class="example-wrap">
                <h4 class="example-title"><?=$infoDoc;?></h4>
                <div class="example">
                  <form id="formDocVisa">
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


                    <input type="file" id="input-file-visa" name="Visa.pdf" data-plugin="dropify" <?=$enable;?>   data-default-file="<?=$defaultfile;?>"  />

                  </form>
                </div>
                <div class="example example-buttons">

                  <?php if(@$fileexists == TRUE) { ;?>

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


                    <div class="float-right">

                      <a type="button" class="btn btn-primary ladda-button "  href="<?=$defaultfile;?>" target="_blank"> </i>Ver </a>
                    </div>

                  <?php } ;?>

                </div>
                <div class="example example-buttons">

                <?php if(@$fileexists == FALSE) { ;?>
                  <div class="float-left">
                    <button type="button" class="btn btn-primary ladda-button btn-file-cartacondicional" data-style="expand-left"
                      data-plugin="ladda" data-type="progress" id="file">
                      <span class="ladda-label"><i class="icon wb-upload mr-10" aria-hidden="true"></i>Subir</span>
                    </button>
                  </div>
                  <?php } ;?>
                  <?php if(@$fileexists == TRUE and $fileInfo['data']['statusDocumento']== 'Rechazado') { ;?>
                  <div class="float-left">
                    <button type="button" class="btn btn-warning ladda-button btn-edit-file-visa" data-style="expand-left"
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
                        <span class="pearl-title">Cargar de Carta</span>
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
                              <p>Si la carta de<b> <?=@$aspirante['firstNamePersona'];?> <?=@$aspirante['lastNamePersona'];?></b> es aceptada se debe marcar si es consicional o incondicional antes de presionar el boton aceptar!</p>
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
          </div> -->
          <input type="hidden" id="aspirante" value="<?=@$aspirante['idAspirante'];?>" name="fkAspirante">
          <input type="hidden" id="idDocFormOne" value="<?=@$idDocFormOne;?>" name="idDocFormOne">
          <input type="hidden" id="idDocFormTwo" value="<?=@$idDocFormTwo;?>" name="idDocFormTwo">
          <input type="hidden" id="idDocFormThree" value="<?=@$idDocFormThree;?>" name="idDocFormThree">
          <input type="hidden" id="NameLastName" value="<?=@$aspirante['firstNamePersona'];?> <?=@$aspirante['lastNamePersona'];?>" name="NameLastName">
          <input type="hidden" id="idinfDocment" value="<?=@$idinfDocment;?>" name="idinfDocment">
          <input type="hidden" id="idTicketDocument" value="<?=@$idTicketDocument;?>" name="idTicketDocument">

          <input type="hidden" id="idInstitucionOne" value="<?=@$InstOneInfo;?>" name="idInstitucionOne">
          <input type="hidden" id="idInstitucionTwo" value="<?=@$InstTwoInfo;?>" name="idInstitucionTwo">
          <input type="hidden" id="idInstitucionThree" value="<?=@$InstThreeInfo;?>" name="idInstitucionThree">

          <input type="hidden" id="idVisaInstOne" value="<?=@$idVisaInstOne;?>" name="idVisaInstOne">
          <input type="hidden" id="idVisaInstTwo" value="<?=@$idVisaInstTwo;?>" name="idVisaInstTwo">
          <input type="hidden" id="idVisaInstThree" value="<?=@$idVisaInstThree;?>" name="idVisaInstThree">


          <?php if(!@$InstOneInfo== NULL) { ;?>
          <div class="user-background card card-shadow">
            <div class="card-header card-header-transparent p-20">
              <h4 class="card-title mb-0">Visa para <?=@$instOne['nombreInstitucion'];?></h4>

            </div>
            <div class="card-block">
              <div class="example-wrap">
                <h4 class="example-title"><?=$infoDocVisaInstOne;?></h4>
                <div class="example">
                  <input type="file" id="input-file-now" data-plugin="dropify" <?=$enableVisaInstOne;?>   data-default-file="<?=$defaultfileVisaInstOne;?>"
                  />

                </div>
                <div class="example example-buttons">

                  <?php if(@$fileexistsVisaInstOne == TRUE) { ;?>

                    <div class="float-left">
                      <button type="button" class="btn btn-primary ladda-button btn-aceptar-verano-vinglesCu" data-style="expand-left"
                        data-plugin="ladda" data-type="progress" id="file">
                        <span class="ladda-label"><i class="icon fa-check" aria-hidden="true"></i>Aceptar</span>
                      </button>
                    </div>
                    <div class="float-left">
                      <button type="button" class="btn btn-warning ladda-button btn-rechazar-verano-vinglesCu" data-style="expand-left"
                        data-plugin="ladda" data-type="progress" id="file">
                        <span class="ladda-label"><i class="icon fa-times " aria-hidden="true"></i>Rechazar</span>
                      </button>
                    </div>


                    <div class="float-right">

                      <a type="button" class="btn btn-primary ladda-button "  href="<?=$defaultfileVisaInstOne;?>" target="_blank"> </i>Ver </a>
                    </div>

                  <?php } ;?>

                </div>
                <div class="example">
                  <div class="pearls row">
                    <div class="pearl <?=@$stepOneVisaInstOne;?> col-4">
                      <div class="pearl-icon"><i class="icon wb-upload  upicon" aria-hidden="true"></i></div>
                      <span class="pearl-title">Cargar Pasaporte</span>
                    </div>
                    <div class="pearl <?=@$stepTwoVisaInstOne;?> col-4">
                      <div class="pearl-icon"><i class="icon fa-spinner upicon " aria-hidden="true"></i></div>
                      <span class="pearl-title">Revisión</span>

                      <?php if(@$fileInfoVisaInstOne['data']['statusDocumento']== 'Rechazado') { ;?>
                      <div class="reviciones example example-popover" align="center">

                        <div class="popover bs-popover-bottom popover-warning col-12">
                          <div class="arrow"></div>
                          <h3 class="popover-header">Documento rechazado</h3>
                          <div class="popover-body  col-12">
                            <p><b>El pasaporte de <?=@$aspirante['firstNamePersona'];?> <?=@$aspirante['lastNamePersona'];?></b> fue rechazado! </p>
                            <p><b>razón: </b> <?=@$descriptionVisaInstOne;?></p>
                          </div>
                        </div>
                      </div>
                      <?php } ;?>
                    </div>
                    <div class="pearl  <?=@$stepThreeVisaInstOne;?>  col-4">
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
              <h4 class="card-title mb-0">Visa para <?=@$instTwo['nombreInstitucion'];?> </h4>

            </div>
            <div class="card-block">
              <div class="example-wrap">
                <h4 class="example-title"><?=$infoDocVisaInstTwo;?></h4>
                <div class="example">
                  <input type="file" id="input-file-now" data-plugin="dropify" <?=$enableVisaInstTwo;?>   data-default-file="<?=$defaultfileVisaInstTwo;?>"
                  />

                </div>
                <div class="example example-buttons">

                  <?php if(@$fileexistsVisaInstTwo == TRUE) { ;?>

                    <div class="float-left">
                      <button type="button" class="btn btn-primary ladda-button btn-aceptar-verano-vinglesCuTwo" data-style="expand-left"
                        data-plugin="ladda" data-type="progress" id="file">
                        <span class="ladda-label"><i class="icon fa-check" aria-hidden="true"></i>Aceptar</span>
                      </button>
                    </div>
                    <div class="float-left">
                      <button type="button" class="btn btn-warning ladda-button btn-rechazar-verano-vinglesCuTwo" data-style="expand-left"
                        data-plugin="ladda" data-type="progress" id="file">
                        <span class="ladda-label"><i class="icon fa-times " aria-hidden="true"></i>Rechazar</span>
                      </button>
                    </div>


                    <div class="float-right">

                      <a type="button" class="btn btn-primary ladda-button "  href="<?=$defaultfileVisaInstTwo;?>" target="_blank"> </i>Ver </a>
                    </div>

                  <?php } ;?>

                </div>
                <div class="example">
                  <div class="pearls row">
                    <div class="pearl <?=@$stepOneVisaInstTwo;?> col-4">
                      <div class="pearl-icon"><i class="icon wb-upload  upicon" aria-hidden="true"></i></div>
                      <span class="pearl-title">Cargar Pasaporte</span>
                    </div>
                    <div class="pearl <?=@$stepTwoVisaInstTwo;?> col-4">
                      <div class="pearl-icon"><i class="icon fa-spinner upicon " aria-hidden="true"></i></div>
                      <span class="pearl-title">Revisión</span>

                      <?php if(@$fileInfoVisaInstTwo['data']['statusDocumento']== 'Rechazado') { ;?>
                      <div class="reviciones example example-popover" align="center">

                        <div class="popover bs-popover-bottom popover-warning col-12">
                          <div class="arrow"></div>
                          <h3 class="popover-header">Documento rechazado</h3>
                          <div class="popover-body  col-12">
                            <p><b>El pasaporte de <?=@$aspirante['firstNamePersona'];?> <?=@$aspirante['lastNamePersona'];?></b> fue rechazado! </p>
                            <p><b>razón: </b> <?=@$descriptionVisaInstTwo;?></p>
                          </div>
                        </div>
                      </div>
                      <?php } ;?>
                    </div>
                    <div class="pearl  <?=@$stepThreeVisaInstTwo;?>  col-4">
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
              <h4 class="card-title mb-0">Visa para <?=@$instThree  ['nombreInstitucion'];?> </h4>

            </div>
            <div class="card-block">
              <div class="example-wrap">
                <h4 class="example-title"><?=$infoDocVisaInstThree;?></h4>
                <div class="example">
                  <input type="file" id="input-file-now" data-plugin="dropify" <?=$enableVisaInstThree;?>   data-default-file="<?=$defaultfileVisaInstThree;?>"
                  />

                </div>
                <div class="example example-buttons">

                  <?php if(@$fileexistsVisaInstThree == TRUE) { ;?>

                    <div class="float-left">
                      <button type="button" class="btn btn-primary ladda-button btn-aceptar-verano-vinglesCuThree" data-style="expand-left"
                        data-plugin="ladda" data-type="progress" id="file">
                        <span class="ladda-label"><i class="icon fa-check" aria-hidden="true"></i>Aceptar</span>
                      </button>
                    </div>
                    <div class="float-left">
                      <button type="button" class="btn btn-warning ladda-button btn-rechazar-verano-vinglesCuThree" data-style="expand-left"
                        data-plugin="ladda" data-type="progress" id="file">
                        <span class="ladda-label"><i class="icon fa-times " aria-hidden="true"></i>Rechazar</span>
                      </button>
                    </div>


                    <div class="float-right">

                      <a type="button" class="btn btn-primary ladda-button "  href="<?=$defaultfileVisaInstThree;?>" target="_blank"> </i>Ver </a>
                    </div>

                  <?php } ;?>

                </div>
                <div class="example">
                  <div class="pearls row">
                    <div class="pearl <?=@$stepOneVisaInstThree;?> col-4">
                      <div class="pearl-icon"><i class="icon wb-upload  upicon" aria-hidden="true"></i></div>
                      <span class="pearl-title">Cargar Pasaporte</span>
                    </div>
                    <div class="pearl <?=@$stepTwoVisaInstThree;?> col-4">
                      <div class="pearl-icon"><i class="icon fa-spinner upicon " aria-hidden="true"></i></div>
                      <span class="pearl-title">Revisión</span>

                      <?php if(@$fileInfoVisaInstThree['data']['statusDocumento']== 'Rechazado') { ;?>
                      <div class="reviciones example example-popover" align="center">

                        <div class="popover bs-popover-bottom popover-warning col-12">
                          <div class="arrow"></div>
                          <h3 class="popover-header">Documento rechazado</h3>
                          <div class="popover-body  col-12">
                            <p><b>El pasaporte de <?=@$aspirante['firstNamePersona'];?> <?=@$aspirante['lastNamePersona'];?></b> fue rechazado! </p>
                            <p><b>razón: </b> <?=@$descriptionVisaInstThree;?></p>
                          </div>
                        </div>
                      </div>
                      <?php } ;?>
                    </div>
                    <div class="pearl  <?=@$stepThreeVisaInstThree;?>  col-4">
                      <div class="pearl-icon"><i class="icon wb-check upicon" aria-hidden="true"></i></div>
                      <span class="pearl-title">Aceptado</span>
                    </div>
                  </div>
                </div>
              </div>

              </div>
          </div>
            <?php } ;?>
          <!-- <?php for ($i = 0; $i < count(@$documentosAspirante); $i++) { ?>
          <div class="user-background card card-shadow">
            <div class="card-header card-header-transparent p-20">
              <h4 class="card-title mb-0">Documentos </h4>

            </div>
            <div class="card-block">
              <div class="example-wrap">
                <h4 class="example-title"><?=$infoDoc;?></h4>
                <div class="example">
                  <input type="file" id="input-file-now" data-plugin="dropify" <?=$enable;?>   data-default-file="<?=$documentosAspirante[$i]['nombreDocumento'];?>" />

                </div>
                <div class="example example-buttons">
                    <div class="float-left">
                      <button type="button" class="btn btn-primary ladda-button btn-aceptar-verano" data-style="expand-left"
                        data-plugin="ladda" data-type="progress" id="file">
                        <span class="ladda-label"><i class="icon fa-check" aria-hidden="true"></i>Aceptar</span>
                      </button>
                    </div>
                    <div class="float-left">
                      <button type="button" class="btn btn-warning ladda-button btn-rechazar-verano" data-style="expand-left"
                        data-plugin="ladda" data-type="progress" id="file">
                        <span class="ladda-label"><i class="icon fa-times " aria-hidden="true"></i>Rechazar</span>
                      </button>
                    </div>
                    <div class="float-right">
                      <a type="button" class="btn btn-primary ladda-button "  href="<?=$documentosAspirante[$i]['urlDocumento'];?>" target="_blank"> </i>Ver </a>
                    </div>
                </div>

              </div>

              </div>
          </div>
          <?php } ?> -->
          <!-- End User Background -->

          <!-- User Recomenfations -->

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
                <h4 class="example-title">Cambiar Estatus</h4>
                <p>Selecciona una opción</p>
                <div class="example">
                  <select class="form-control"
                     id="statusAspirante" name="statusAspirante">
                    <option></option>
                    <option  value="5">Status 5</option>
                  </select>
                </div>
                  <button class="btn btn-primary btn-round btn-cambio-statusCinco"  type="button" name="follow">Cambiar</button>
              </div>
            </div>
          </div>
