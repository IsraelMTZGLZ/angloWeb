

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

  <input type="hidden" id="idTicketDocumentInstOne" value="<?=@$idTicketDocumentInstOne;?>" name="idTicketDocumentInstOne">
  <input type="hidden" id="idTicketDocumentInstTwo" value="<?=@$idTicketDocumentInstTwo;?>" name="idTicketDocumentInstTwo">
  <input type="hidden" id="idTicketDocumentInstThree" value="<?=@$idTicketDocumentInstThree;?>" name="idTicketDocumentInstThree">

          <!-- End User Posts -->

          <!-- User Background -->

          <div class="user-background card card-shadow">
            <div class="card-header card-header-transparent p-20">
              <h4 class="card-title mb-0">Alta de examen de Inglés</h4>
            </div>
            <div class="card-block">
              <div class="example-wrap">
                <h4 class="example-title"><?=$infoDoc;?></h4>
                <div class="example">
                  <form id="formDocAcademicPassport">
                    <input type="file" id="input-file-academic-passport" name="formatoDeSolicitud.pdf" data-plugin="dropify" <?=$enable;?>   data-default-file="<?=$defaultfile;?>" />
                  </form>
                </div>
                <div class="example example-buttons">
                  <?php if(@$fileexists == FALSE) { ;?>
                  <div class="float-left">
                    <button type="button" class="btn btn-primary ladda-button btn-file-academic-exam" data-style="expand-left"
                      data-plugin="ladda" data-type="progress" id="file">
                      <span class="ladda-label"><i class="icon wb-upload mr-10" aria-hidden="true"></i>Subir</span>
                    </button>
                  </div>
                  <?php } ;?>
                  <?php if(@$fileexists == TRUE and $fileInfo['data'][0]['statusDocumento']== 'Rechazado') { ;?>
                  <div class="float-left">
                    <button type="button" class="btn btn-warning ladda-button btn-edit-file-academic-passport" data-style="expand-left"
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
                          <div class="popover bs-popover-bottom popover-info col-12 ">
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
          </div> -->
