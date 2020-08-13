

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
  <input type="hidden" name="idCartaOne" id="idCartaOne" value="<?=@$idCartaOne;?>">
  <input type="hidden" name="idCartaTwo" id="idCartaTwo" value="<?=@$idCartaTwo;?>">
  <input type="hidden" name="idCartaThree" id="idCartaThree" value="<?=@$idCartaThree;?>">

          <!-- End User Posts -->

          <!-- User Background -->
          <?php if(!@$InstOneInfo== NULL and 1== 9) { ;?>
          <div class="user-background card card-shadow">
            <div class="card-header card-header-transparent p-20">
              <h4 class="card-title mb-0">Alta de Carta para <?=@$instOne['nombreInstitucion'];?></h4>
            </div>
            <div class="card-block">
              <div class="example-wrap">
                <h4 class="example-title"><?=$infoDocCartaInstOne;?></h4>
                <div class="example">
                  <form id="formDocCartaVIngles">

                    <input type="file" id="input-file-carta-vingles" name="Carta.pdf" data-plugin="dropify" <?=$enableCartaInstOne;?>   data-default-file="<?=$defaultfileCartaInstOne;?>" />
                  </form>
                </div>
                <div class="example example-buttons">
                  <?php if(@$fileexistsCartaInstOne == FALSE) { ;?>
                  <div class="float-left">
                    <button type="button" class="btn btn-primary ladda-button btn-file-carta-vingles" data-style="expand-left"
                      data-plugin="ladda" data-type="progress" id="file">
                      <span class="ladda-label"><i class="icon wb-upload mr-10" aria-hidden="true"></i>Subir</span>
                    </button>
                  </div>
                  <?php } ;?>
                  <?php if(@$fileexistsCartaInstOne == TRUE and $fileInfoCartaInstOne['data'][0]['statusDocumento']== 'Rechazado') { ;?>
                  <div class="float-left">
                    <button type="button" class="btn btn-warning ladda-button btn-edit-file-carta-vingles" data-style="expand-left"
                      data-plugin="ladda" data-type="progress" id="file">
                      <span class="ladda-label"><i class="icon wb-upload " aria-hidden="true"></i>Volver a subir</span>
                    </button>
                  </div>
                  <?php } ;?>

                </div>

                  <div class="example">
                    <div class="pearls row">
                      <div class="pearl <?=@$stepOneCartaInstOne;?> col-4">
                        <div class="pearl-icon"><i class="icon wb-upload  upicon" aria-hidden="true"></i></div>
                        <span class="pearl-title">Cargar de Visa</span>
                      </div>
                      <div class="pearl <?=@$stepTwoCartaInstOne;?> col-4">
                        <div class="pearl-icon"><i class="icon fa-spinner upicon " aria-hidden="true"></i></div>
                        <span class="pearl-title">Revisión</span>

                        <?php if(@$fileInfoCartaInstOne['data'][0]['statusDocumento']== 'Revision') { ;?>
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
          <?php if(!@$InstTwoInfo== NULL and 2==9) { ;?>
          <div class="user-background card card-shadow">
            <div class="card-header card-header-transparent p-20">
              <h4 class="card-title mb-0">Alta de Carta para <?=@$instTwo['nombreInstitucion'];?></h4>
            </div>
            <div class="card-block">
              <div class="example-wrap">
                <h4 class="example-title"><?=$infoDocCartaInstTwo;?></h4>
                <div class="example">
                  <form id="formDocCartaVInglesTwo">
                    <input type="file" id="input-file-carta-vinglestwo" name="Carta.pdf" data-plugin="dropify" <?=$enableCartaInstTwo;?>   data-default-file="<?=$defaultfileCartaInstTwo;?>" />
                  </form>
                </div>
                <div class="example example-buttons">
                  <?php if(@$fileexistsCartaInstTwo == FALSE) { ;?>
                  <div class="float-left">
                    <button type="button" class="btn btn-primary ladda-button btn-file-carta-vingles-two" data-style="expand-left"
                      data-plugin="ladda" data-type="progress" id="file">
                      <span class="ladda-label"><i class="icon wb-upload mr-10" aria-hidden="true"></i>Subir</span>
                    </button>
                  </div>
                  <?php } ;?>
                  <?php if(@$fileexistsCartaInstTwo == TRUE and $fileInfoCartaInstTwo['data'][0]['statusDocumento']== 'Rechazado') { ;?>
                  <div class="float-left">
                    <button type="button" class="btn btn-warning ladda-button btn-edit-file-carta-vinglestwo" data-style="expand-left"
                      data-plugin="ladda" data-type="progress" id="file">
                      <span class="ladda-label"><i class="icon wb-upload " aria-hidden="true"></i>Volver a subir</span>
                    </button>
                  </div>
                  <?php } ;?>

                </div>

                  <div class="example">
                    <div class="pearls row">
                      <div class="pearl <?=@$stepOneCartaInstTwo;?> col-4">
                        <div class="pearl-icon"><i class="icon wb-upload  upicon" aria-hidden="true"></i></div>
                        <span class="pearl-title">Cargar de Visa</span>
                      </div>
                      <div class="pearl <?=@$stepTwoCartaInstTwo;?> col-4">
                        <div class="pearl-icon"><i class="icon fa-spinner upicon " aria-hidden="true"></i></div>
                        <span class="pearl-title">Revisión</span>

                        <?php if(@$fileInfoCartaInstTwo['data'][0]['statusDocumento']== 'Revision') { ;?>
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
          <?php if(!@$InstThreeInfo== NULL and 3==2) { ;?>
          <div class="user-background card card-shadow">
            <div class="card-header card-header-transparent p-20">
              <h4 class="card-title mb-0">Alta de Carta para <?=@$instThree['nombreInstitucion'];?></h4>
            </div>
            <div class="card-block">
              <div class="example-wrap">
                <h4 class="example-title"><?=$infoDocCartaInstThree;?></h4>
                <div class="example">
                  <form id="formDocCartaVInglesThree">
                    <input type="file" id="input-file-carta-vinglesthree" name="Carta.pdf" data-plugin="dropify" <?=$enableCartaInstThree;?>   data-default-file="<?=$defaultfileCartaInstThree;?>" />
                  </form>
                </div>
                <div class="example example-buttons">
                  <?php if(@$fileexistsCartaInstThree == FALSE) { ;?>
                  <div class="float-left">
                    <button type="button" class="btn btn-primary ladda-button btn-file-carta-vingles-three" data-style="expand-left"
                      data-plugin="ladda" data-type="progress" id="file">
                      <span class="ladda-label"><i class="icon wb-upload mr-10" aria-hidden="true"></i>Subir</span>
                    </button>
                  </div>
                  <?php } ;?>
                  <?php if(@$fileexistsCartaInstThree == TRUE and $fileInfoCartaInstThree['data'][0]['statusDocumento']== 'Rechazado') { ;?>
                  <div class="float-left">
                    <button type="button" class="btn btn-warning ladda-button btn-edit-file-carta-vinglesthree" data-style="expand-left"
                      data-plugin="ladda" data-type="progress" id="file">
                      <span class="ladda-label"><i class="icon wb-upload " aria-hidden="true"></i>Volver a subir</span>
                    </button>
                  </div>
                  <?php } ;?>

                </div>

                  <div class="example">
                    <div class="pearls row">
                      <div class="pearl <?=@$stepOneCartaInstThree;?> col-4">
                        <div class="pearl-icon"><i class="icon wb-upload  upicon" aria-hidden="true"></i></div>
                        <span class="pearl-title">Cargar de Visa</span>
                      </div>
                      <div class="pearl <?=@$stepTwoCartaInstThree;?> col-4">
                        <div class="pearl-icon"><i class="icon fa-spinner upicon " aria-hidden="true"></i></div>
                        <span class="pearl-title">Revisión</span>

                        <?php if(@$fileInfoCartaInstThree['data'][0]['statusDocumento']== 'Revision') { ;?>
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
                            <div class="card-header card-header-transparent p-20">
                              <h4 class="card-title mb-0">Alta de Carta para <?=@$instOne['nombreInstitucion'];?></h4>
                            </div>
                            <div class="card-block">
                              <div class="example-wrap">
                                <h4 class="example-title"><?=$infoDocCartaInstOne;?></h4>
                                <div class="example">
                                  <form id="formDocCartaVIngles">

                                    <input type="file" id="input-file-carta-vingles" name="Carta.pdf" data-plugin="dropify" <?=$enableCartaInstOne;?>   data-default-file="<?=$defaultfileCartaInstOne;?>" />
                                  </form>
                                </div>
                                <div class="example example-buttons">
                                  <?php if(@$fileexistsCartaInstOne == FALSE) { ;?>
                                  <div class="float-left">
                                    <button type="button" class="btn btn-primary ladda-button btn-file-carta-vingles" data-style="expand-left"
                                      data-plugin="ladda" data-type="progress" id="file">
                                      <span class="ladda-label"><i class="icon wb-upload mr-10" aria-hidden="true"></i>Subir</span>
                                    </button>
                                  </div>
                                  <?php } ;?>
                                  <?php if(@$fileexistsCartaInstOne == TRUE and $fileInfoCartaInstOne['data'][0]['statusDocumento']== 'Rechazado') { ;?>
                                  <div class="float-left">
                                    <button type="button" class="btn btn-warning ladda-button btn-edit-file-carta-vingles" data-style="expand-left"
                                      data-plugin="ladda" data-type="progress" id="file">
                                      <span class="ladda-label"><i class="icon wb-upload " aria-hidden="true"></i>Volver a subir</span>
                                    </button>
                                  </div>
                                  <?php } ;?>

                                </div>

                                  <div class="example">
                                    <div class="pearls row">
                                      <div class="pearl <?=@$stepOneCartaInstOne;?> col-4">
                                        <div class="pearl-icon"><i class="icon wb-upload  upicon" aria-hidden="true"></i></div>
                                        <span class="pearl-title">Cargar de Visa</span>
                                      </div>
                                      <div class="pearl <?=@$stepTwoCartaInstOne;?> col-4">
                                        <div class="pearl-icon"><i class="icon fa-spinner upicon " aria-hidden="true"></i></div>
                                        <span class="pearl-title">Revisión</span>

                                        <?php if(@$fileInfoCartaInstOne['data'][0]['statusDocumento']== 'Revision') { ;?>
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
                      <hr>
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
                                  <h4 class="card-title mb-0">Alta de Carta para <?=@$instTwo['nombreInstitucion'];?></h4>
                                </div>
                                <div class="card-block">
                                  <div class="example-wrap">
                                    <h4 class="example-title"><?=$infoDocCartaInstTwo;?></h4>
                                    <div class="example">
                                      <form id="formDocCartaVInglesTwo">
                                        <input type="file" id="input-file-carta-vinglestwo" name="Carta.pdf" data-plugin="dropify" <?=$enableCartaInstTwo;?>   data-default-file="<?=$defaultfileCartaInstTwo;?>" />
                                      </form>
                                    </div>
                                    <div class="example example-buttons">
                                      <?php if(@$fileexistsCartaInstTwo == FALSE) { ;?>
                                      <div class="float-left">
                                        <button type="button" class="btn btn-primary ladda-button btn-file-carta-vingles-two" data-style="expand-left"
                                          data-plugin="ladda" data-type="progress" id="file">
                                          <span class="ladda-label"><i class="icon wb-upload mr-10" aria-hidden="true"></i>Subir</span>
                                        </button>
                                      </div>
                                      <?php } ;?>
                                      <?php if(@$fileexistsCartaInstTwo == TRUE and $fileInfoCartaInstTwo['data'][0]['statusDocumento']== 'Rechazado') { ;?>
                                      <div class="float-left">
                                        <button type="button" class="btn btn-warning ladda-button btn-edit-file-carta-vinglestwo" data-style="expand-left"
                                          data-plugin="ladda" data-type="progress" id="file">
                                          <span class="ladda-label"><i class="icon wb-upload " aria-hidden="true"></i>Volver a subir</span>
                                        </button>
                                      </div>
                                      <?php } ;?>

                                    </div>

                                      <div class="example">
                                        <div class="pearls row">
                                          <div class="pearl <?=@$stepOneCartaInstTwo;?> col-4">
                                            <div class="pearl-icon"><i class="icon wb-upload  upicon" aria-hidden="true"></i></div>
                                            <span class="pearl-title">Cargar de Visa</span>
                                          </div>
                                          <div class="pearl <?=@$stepTwoCartaInstTwo;?> col-4">
                                            <div class="pearl-icon"><i class="icon fa-spinner upicon " aria-hidden="true"></i></div>
                                            <span class="pearl-title">Revisión</span>

                                            <?php if(@$fileInfoCartaInstTwo['data'][0]['statusDocumento']== 'Revision') { ;?>
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
                                          <p>Para poder seguir con el proceso de debe realizar un pago</p>
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
                              <h4 class="card-title mb-0">Alta de Pago </h4>
                            </div>
                            <div class="card-block">
                              <div class="example-wrap">
                                <h4 class="example-title"><?=$infoDocPago;?></h4>
                                <div class="example">
                                  <form id="formDocPago">
                                    <input type="file" id="input-file-pago" name="Pago.pdf" data-plugin="dropify" <?=$enablePago;?>   data-default-file="<?=$defaultfilePago;?>" />
                                  </form>
                                </div>
                                <div class="example example-buttons">
                                  <?php if(@$fileexistsPago == FALSE) { ;?>
                                  <div class="float-left">
                                    <button type="button" class="btn btn-primary ladda-button btn-file-pago-vingles" data-style="expand-left"
                                      data-plugin="ladda" data-type="progress" id="file">
                                      <span class="ladda-label"><i class="icon wb-upload mr-10" aria-hidden="true"></i>Subir</span>
                                    </button>
                                  </div>
                                  <?php } ;?>
                                  <?php if(@$fileexistsPago == TRUE and $fileInfoPago['data'][0]['statusDocumento']== 'Rechazado') { ;?>
                                  <div class="float-left">
                                    <button type="button" class="btn btn-warning ladda-button btn-edit-file-vingles" data-style="expand-left"
                                      data-plugin="ladda" data-type="progress" id="file">
                                      <span class="ladda-label"><i class="icon wb-upload " aria-hidden="true"></i>Volver a subir</span>
                                    </button>
                                  </div>
                                  <?php } ;?>

                                </div>

                                  <div class="example">
                                    <div class="pearls row">
                                      <div class="pearl <?=@$stepOnePago;?> col-4">
                                        <div class="pearl-icon"><i class="icon wb-upload  upicon" aria-hidden="true"></i></div>
                                        <span class="pearl-title">Cargar Pasaporte</span>
                                      </div>
                                      <div class="pearl <?=@$stepTwoPago;?> col-4">
                                        <div class="pearl-icon"><i class="icon fa-spinner upicon " aria-hidden="true"></i></div>
                                        <span class="pearl-title">Revisión</span>

                                        <?php if(@$fileInfoPago['data']['statusDocumento']== 'Revision') { ;?>
                                        <div class="reviciones example example-popover" align="center">
                                          <button type="button" class="btn btn-info sr-only">
                                            Documento en revisión
                                          </button>
                                          <div class="popover bs-popover-bottom popover-info ">
                                            <div class="arrow"></div>
                                            <h3 class="popover-header">Documento en revisión</h3>
                                            <div class="popover-body">
                                              <p><b><?=@$aspirante['firstNamePersona'];?> <?=@$aspirante['lastNamePersona'];?> </b> Su documento está siendo revisado por el equipo de <b>Anglo Latino Education Partnership</b>, gracias!</p>
                                            </div>
                                          </div>
                                        </div>
                                        <?php } ;?>
                                        <?php if(@$fileInfoPago['data'][0]['statusDocumento']== 'Rechazado') { ;?>
                                        <div class="reviciones example example-popover" align="center">

                                          <div class="popover bs-popover-bottom popover-warning col-12">
                                            <div class="arrow"></div>
                                            <h3 class="popover-header">Documento rechazado</h3>
                                            <div class="popover-body  col-12">
                                              <p><b><?=@$aspirante['firstNamePersona'];?> <?=@$aspirante['lastNamePersona'];?></b>su documento fue rechazado. </p>
                                              <p><b>razón: </b> <?=@$descriptionPago;?></p>
                                            </div>
                                          </div>
                                        </div>
                                        <?php } ;?>
                                      </div>
                                      <div class="pearl <?=@$stepThreePago;?> col-4">
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
        <?php if(@$aspirante['statusAspirante']== '4U'  OR @$aspirante['statusAspirante']== '5') { ;?>

            <div class="col-lg-12 col-xl-12 order-xl-5">
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
                                <h4 class="card-title" align="center">alta de Visa</h4>
                                <p class="card-text" align="center"></p>


                              </div>


                                <div class="text-center">
                                    <form id="FormAplicantNumber">
                                      <div class="form-group col-md-12">
                                        <label class="form-control-label" for="inputBasicFirstName">Descripcion</label>
                                        <div class="text-center">
                                            <p>Para poder seguir con el proceso de debe subir un pdf de la visa escaneada</p>
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
                                <h4 class="card-title mb-0">Alta de Visa </h4>
                              </div>
                              <div class="card-block">
                                <div class="example-wrap">
                                  <h4 class="example-title"><?=$infoDocVisa;?></h4>
                                  <div class="example">
                                    <form id="formDocVisa">
                                      <input type="file" id="input-file-visa" name="Visa.pdf" data-plugin="dropify" <?=$enableVisa;?>   data-default-file="<?=$defaultfileVisa;?>" />
                                    </form>
                                  </div>
                                  <div class="example example-buttons">
                                    <?php if(@$fileexistsVisa == FALSE) { ;?>
                                    <div class="float-left">
                                      <button type="button" class="btn btn-primary ladda-button btn-file-visa-vingles" data-style="expand-left"
                                        data-plugin="ladda" data-type="progress" id="file">
                                        <span class="ladda-label"><i class="icon wb-upload mr-10" aria-hidden="true"></i>Subir</span>
                                      </button>
                                    </div>
                                    <?php } ;?>
                                    <?php if(@$fileexistsVisa == TRUE and $fileInfoVisa['data'][0]['statusDocumento']== 'Rechazado') { ;?>
                                    <div class="float-left">
                                      <button type="button" class="btn btn-warning ladda-button btn-edit-visa-vingles" data-style="expand-left"
                                        data-plugin="ladda" data-type="progress" id="file">
                                        <span class="ladda-label"><i class="icon wb-upload " aria-hidden="true"></i>Volver a subir</span>
                                      </button>
                                    </div>
                                    <?php } ;?>

                                  </div>

                                    <div class="example">
                                      <div class="pearls row">
                                        <div class="pearl <?=@$stepOneVisa;?> col-4">
                                          <div class="pearl-icon"><i class="icon wb-upload  upicon" aria-hidden="true"></i></div>
                                          <span class="pearl-title">Cargar Pasaporte</span>
                                        </div>
                                        <div class="pearl <?=@$stepTwoVisa;?> col-4">
                                          <div class="pearl-icon"><i class="icon fa-spinner upicon " aria-hidden="true"></i></div>
                                          <span class="pearl-title">Revisión</span>

                                          <?php if(@$fileInfoVisa['data']['statusDocumento']== 'Revision') { ;?>
                                          <div class="reviciones example example-popover" align="center">
                                            <button type="button" class="btn btn-info sr-only">
                                              Documento en revisión
                                            </button>
                                            <div class="popover bs-popover-bottom popover-info ">
                                              <div class="arrow"></div>
                                              <h3 class="popover-header">Documento en revisión</h3>
                                              <div class="popover-body">
                                                <p><b><?=@$aspirante['firstNamePersona'];?> <?=@$aspirante['lastNamePersona'];?> </b> Su documento está siendo revisado por el equipo de <b>Anglo Latino Education Partnership</b>, gracias!</p>
                                              </div>
                                            </div>
                                          </div>
                                          <?php } ;?>
                                          <?php if(@$fileInfoVisa['data'][0]['statusDocumento']== 'Rechazado') { ;?>
                                          <div class="reviciones example example-popover" align="center">

                                            <div class="popover bs-popover-bottom popover-warning col-12">
                                              <div class="arrow"></div>
                                              <h3 class="popover-header">Documento rechazado</h3>
                                              <div class="popover-body  col-12">
                                                <p><b><?=@$aspirante['firstNamePersona'];?> <?=@$aspirante['lastNamePersona'];?></b>su documento fue rechazado. </p>
                                                <p><b>razón: </b> <?=@$descriptionVisa;?></p>
                                              </div>
                                            </div>
                                          </div>
                                          <?php } ;?>
                                        </div>
                                        <div class="pearl <?=@$stepThreeVisa;?> col-4">
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
        <!-- End Middle Column -->

        <!-- Left Column -->


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
          <!-- <div class="user-friends card card-shadow">
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
                      <span class="badge badge-pill badge-dark badge-outline p-10"><?=@$infAspirante['abreviacionEdad'];?></span>
                    </div>
                    <div class="skill-name">
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

      </div>

      <div class="modal fade modal-3d-slit modal-success" id="exampleNifty3dSlit" aria-hidden="true"
        aria-labelledby="exampleModalTitle" role="dialog" tabindex="-1">
        <div class="modal-dialog modal-simple">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
              <h4 class="modal-title">descripción</h4>
            </div>
            <div class="modal-body">
              <br>
              <p>
                En Cambridge School of Visual & Performing Arts ofrecemos un gran rango de divertidos e interactivos cursos de 1 a 3 semanas o si deseas permanecer más tiempo con nosotros puedes combinar un número de materias y pasar el verano con nosotros!.</p>
            </div>
            <div class="modal-footer">

              <button type="button" class="btn btn-success" data-dismiss="modal">OK</button>
            </div>
          </div>
        </div>
      </div> -->
