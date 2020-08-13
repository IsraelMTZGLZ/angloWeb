
          <!-- End User Posts -->
          <input type="hidden" id="aspirante" value="<?=@$aspirante['idAspirante'];?>" name="fkAspirante">
          <input type="hidden" id="idDocFormOne" value="<?=@$idDocFormOne;?>" name="idDocFormOne">
          <input type="hidden" id="idDocFormTwo" value="<?=@$idDocFormTwo;?>" name="idDocFormTwo">
          <input type="hidden" id="idDocFormThree" value="<?=@$idDocFormThree;?>" name="idDocFormThree">
          <input type="hidden" id="NameLastName" value="<?=@$aspirante['firstNamePersona'];?> <?=@$aspirante['lastNamePersona'];?>" name="NameLastName">
          <input type="hidden" id="idinfDocment" value="<?=@$idinfDocment;?>" name="idinfDocment">
          <!-- <input type="input" id="idTicketDocument" value="<?=@$idTicketDocument;?>" name="idTicketDocument"> -->
          <input type="hidden" id="idTicketDocumentInstOne" value="<?=@$idTicketDocumentInstOne;?>" name="idTicketDocumentInstOne">
          <input type="hidden" id="idTicketDocumentInstTwo" value="<?=@$idTicketDocumentInstTwo;?>" name="idTicketDocumentInstTwo">
          <input type="hidden" id="idTicketDocumentInstThree" value="<?=@$idTicketDocumentInstThree;?>" name="idTicketDocumentInstThree">
          <input type="hidden" id="idInstitucionOne" value="<?=@$instOne['idInstitucion'];?>" name="idInstitucionOne">
          <input type="hidden" id="idInstitucionTwo" value="<?=@$instTwo['idInstitucion'];?>" name="idInstitucionTwo">
          <input type="hidden" id="idInstitucionThree" value="<?=@$instThree['idInstitucion'];?>" name="idInstitucionThree">


          <!-- User Background -->
          <div class="user-background card card-shadow">
            <div class="card-header card-header-transparent p-20">
              <h4 class="card-title mb-0">Referencia de pago</h4>
            </div>
            <div class="card-block">
              <div class="example-wrap">
                <h4 class="example-title"><?=$infoDoc;?></h4>
                <div class="example">
                  <div class="form-group col-md-6">
                    <label class="form-control-label" for="inputBasicLastName">Nombre del documento</label>
                    <input type="text" class="form-control" id="nombreDocumento" name="nombreDocumento"  value=""
                    />
                  </div>
                  <form id="formReferencia">

                    <input type="file" id="input-file-verano-ingles-referencia" name="Referencia.pdf" data-plugin="dropify"  data-default-file="<?=@$referenciaPago['tipo'];?>"  />
                  </form>
                </div>
                <div class="example example-buttons">
                  <?php if(@$referenciaPago['data'] ==NULL) { ;?>
                  <div class="float-left">
                    <button type="button" class="btn btn-primary ladda-button btn-file-verano-ingles-referenciapago" data-style="expand-left"
                      data-plugin="ladda" data-type="progress" id="file">
                      <span class="ladda-label"><i class="icon wb-upload mr-10" aria-hidden="true"></i>Subir</span>
                    </button>
                  </div>
                  <?php } ;?>
                  <?php if(@$referenciaPago['data'] !=NULL) { ;?>
                  <div class="float-left">
                    <button type="button" class="btn btn-warning ladda-button btn-edit-file-verano" data-style="expand-left"
                      data-plugin="ladda" data-type="progress" id="file">
                      <span class="ladda-label"><i class="icon wb-upload " aria-hidden="true"></i>Volver a subir</span>
                    </button>
                  </div>

                  <div class="float-right">

                    <a type="button" class="btn btn-primary ladda-button "  href="<?=@$referenciaPago['urlDocumento'];?>" target="_blank"> </i>Ver </a>
                  </div>
                    <?php } ;?>

                </div>


              </div>
              </div>
          </div>
          <?php if($instOnePago == TRUE) { ?>
          <div class="user-background card card-shadow">
            <div class="card-header card-header-transparent p-20">
              <input type="hidden" name="idCartaOne" id="idCartaOne" value="<?=@$idCartaOne;?>">
              <h4 class="card-title mb-0">Pago para <?=@$instOne['nombreInstitucion'];?></h4>
            </div>
            <div class="card-block">
              <div class="example-wrap">
                <h4 class="example-title"><?=$infoDocTicketPagoInstOne;?></h4>
                <div class="example">
                  <input type="file" id="input-file-now" data-plugin="dropify" <?=$enableTicketPagoInstOne;?>   data-default-file="<?=$defaultfileTicketPagoInstOne;?>"
                  />

                </div>
                <div class="example example-buttons">

                  <?php if(@$fileexistsTicketPagoInstOne == TRUE) { ;?>

                    <div class="float-left">
                      <button type="button" class="btn btn-primary ladda-button btn-aceptar-verano-vinglesCc" data-style="expand-left"
                        data-plugin="ladda" data-type="progress" id="file">
                        <span class="ladda-label"><i class="icon fa-check" aria-hidden="true"></i>Aceptar</span>
                      </button>
                    </div>
                    <div class="float-left">
                      <button type="button" class="btn btn-warning ladda-button btn-rechazar-verano-vinglesCc" data-style="expand-left"
                        data-plugin="ladda" data-type="progress" id="file">
                        <span class="ladda-label"><i class="icon fa-times " aria-hidden="true"></i>Rechazar</span>
                      </button>
                    </div>


                    <div class="float-right">

                      <a type="button" class="btn btn-primary ladda-button "  href="<?=$defaultfileTicketPagoInstOne;?>" target="_blank"> </i>Ver </a>
                    </div>

                  <?php } ;?>

                </div>
                <div class="example">
                  <div class="pearls row">
                    <div class="pearl <?=@$stepOneTicketPagoInstOne;?> col-4">
                      <div class="pearl-icon"><i class="icon wb-upload  upicon" aria-hidden="true"></i></div>
                      <span class="pearl-title">Cargar Pasaporte</span>
                    </div>
                    <div class="pearl <?=@$stepTwoTicketPagoInstOne;?> col-4">
                      <div class="pearl-icon"><i class="icon fa-spinner upicon " aria-hidden="true"></i></div>
                      <span class="pearl-title">Revisión</span>

                      <?php if(@$fileInfoTicketPagoInstOne['data']['statusDocumento']== 'Rechazado') { ;?>
                      <div class="reviciones example example-popover" align="center">

                        <div class="popover bs-popover-bottom popover-warning col-12">
                          <div class="arrow"></div>
                          <h3 class="popover-header">Documento rechazado</h3>
                          <div class="popover-body  col-12">
                            <p><b>El documento de <?=@$aspirante['firstNamePersona'];?> <?=@$aspirante['lastNamePersona'];?></b> fue rechazado! </p>
                            <p><b>razón: </b> <?=@$descriptionTicketPagoInstOne;?></p>
                          </div>
                        </div>
                      </div>
                      <?php } ;?>
                    </div>
                    <div class="pearl  <?=@$stepThreeTicketPagoInstOne;?>  col-4">
                      <div class="pearl-icon"><i class="icon wb-check upicon" aria-hidden="true"></i></div>
                      <span class="pearl-title">Aceptado</span>
                    </div>
                  </div>
                </div>
              </div>

              </div>
          </div>
          <?php } ;?>
          <?php if($instTwoPago == TRUE) { ?>
          <div class="user-background card card-shadow">
            <div class="card-header card-header-transparent p-20">
              <h4 class="card-title mb-0">Documento para <?=@$instTwo['nombreInstitucion'];?></h4>
            </div>
            <div class="card-block">
              <div class="example-wrap">
                <h4 class="example-title"><?=$infoDocTicketPagoInstTwo;?></h4>
                <div class="example">
                  <input type="file" id="input-file-now" data-plugin="dropify" <?=$enableTicketPagoInstTwo;?>   data-default-file="<?=$defaultfileTicketPagoInstTwo;?>"
                  />

                </div>
                <div class="example example-buttons">

                  <?php if(@$fileexistsTicketPagoInstTwo == TRUE) { ;?>

                    <div class="float-left">
                      <button type="button" class="btn btn-primary ladda-button btn-aceptar-verano-vinglesCcTwo" data-style="expand-left"
                        data-plugin="ladda" data-type="progress" id="file">
                        <span class="ladda-label"><i class="icon fa-check" aria-hidden="true"></i>Aceptar</span>
                      </button>
                    </div>
                    <div class="float-left">
                      <button type="button" class="btn btn-warning ladda-button btn-rechazar-verano-vinglesCcTwo" data-style="expand-left"
                        data-plugin="ladda" data-type="progress" id="file">
                        <span class="ladda-label"><i class="icon fa-times " aria-hidden="true"></i>Rechazar</span>
                      </button>
                    </div>


                    <div class="float-right">

                      <a type="button" class="btn btn-primary ladda-button "  href="<?=$defaultfileTicketPagoInstTwo;?>" target="_blank"> </i>Ver </a>
                    </div>

                  <?php } ;?>

                </div>
                <div class="example">
                  <div class="pearls row">
                    <div class="pearl <?=@$stepOneTicketPagoInstTwo;?> col-4">
                      <div class="pearl-icon"><i class="icon wb-upload  upicon" aria-hidden="true"></i></div>
                      <span class="pearl-title">Cargar Pasaporte</span>
                    </div>
                    <div class="pearl <?=@$stepTwoTicketPagoInstTwo;?> col-4">
                      <div class="pearl-icon"><i class="icon fa-spinner upicon " aria-hidden="true"></i></div>
                      <span class="pearl-title">Revisión</span>

                      <?php if(@$fileInfoTicketPagoInstTwo['data']['statusDocumento']== 'Rechazado') { ;?>
                      <div class="reviciones example example-popover" align="center">

                        <div class="popover bs-popover-bottom popover-warning col-12">
                          <div class="arrow"></div>
                          <h3 class="popover-header">Documento rechazado</h3>
                          <div class="popover-body  col-12">
                            <p><b>El documento de <?=@$aspirante['firstNamePersona'];?> <?=@$aspirante['lastNamePersona'];?></b> fue rechazado! </p>
                            <p><b>razón: </b> <?=@$descriptionTicketPagoInstTwo;?></p>
                          </div>
                        </div>
                      </div>
                      <?php } ;?>
                    </div>
                    <div class="pearl  <?=@$stepThreeTicketPagoInstTwo;?>  col-4">
                      <div class="pearl-icon"><i class="icon wb-check upicon" aria-hidden="true"></i></div>
                      <span class="pearl-title">Aceptado</span>
                    </div>
                  </div>
                </div>
              </div>

              </div>
          </div>
          <?php } ;?>
          <?php if($instThreePago == TRUE) { ?>
          <div class="user-background card card-shadow">
            <div class="card-header card-header-transparent p-20">
              <h4 class="card-title mb-0">Documento para <?=@$instThree['nombreInstitucion'];?></h4>
            </div>
            <div class="card-block">
              <div class="example-wrap">
                <h4 class="example-title"><?=$infoDocTicketPagoInstThree;?></h4>
                <div class="example">
                  <input type="file" id="input-file-now" data-plugin="dropify" <?=$enableTicketPagoInstThree;?>   data-default-file="<?=$defaultfileTicketPagoInstThree;?>"
                  />

                </div>
                <div class="example example-buttons">

                  <?php if(@$fileexistsTicketPagoInstThree == TRUE) { ;?>

                    <div class="float-left">
                      <button type="button" class="btn btn-primary ladda-button btn-aceptar-verano-vinglesCcThree" data-style="expand-left"
                        data-plugin="ladda" data-type="progress" id="file">
                        <span class="ladda-label"><i class="icon fa-check" aria-hidden="true"></i>Aceptar</span>
                      </button>
                    </div>
                    <div class="float-left">
                      <button type="button" class="btn btn-warning ladda-button btn-rechazar-verano-vinglesCcThree" data-style="expand-left"
                        data-plugin="ladda" data-type="progress" id="file">
                        <span class="ladda-label"><i class="icon fa-times " aria-hidden="true"></i>Rechazar</span>
                      </button>
                    </div>


                    <div class="float-right">

                      <a type="button" class="btn btn-primary ladda-button "  href="<?=$defaultfileTicketPagoInstThree;?>" target="_blank"> </i>Ver </a>
                    </div>

                  <?php } ;?>

                </div>
                <div class="example">
                  <div class="pearls row">
                    <div class="pearl <?=@$stepOneTicketPagoInstThree;?> col-4">
                      <div class="pearl-icon"><i class="icon wb-upload  upicon" aria-hidden="true"></i></div>
                      <span class="pearl-title">Cargar Pasaporte</span>
                    </div>
                    <div class="pearl <?=@$stepTwoTicketPagoInstThree;?> col-4">
                      <div class="pearl-icon"><i class="icon fa-spinner upicon " aria-hidden="true"></i></div>
                      <span class="pearl-title">Revisión</span>

                      <?php if(@$fileInfoTicketPagoInstThree['data']['statusDocumento']== 'Rechazado') { ;?>
                      <div class="reviciones example example-popover" align="center">

                        <div class="popover bs-popover-bottom popover-warning col-12">
                          <div class="arrow"></div>
                          <h3 class="popover-header">Documento rechazado</h3>
                          <div class="popover-body  col-12">
                            <p><b>El documento de <?=@$aspirante['firstNamePersona'];?> <?=@$aspirante['lastNamePersona'];?></b> fue rechazado! </p>
                            <p><b>razón: </b> <?=@$descriptionTicketPagoInstThree;?></p>
                          </div>
                        </div>
                      </div>
                      <?php } ;?>
                    </div>
                    <div class="pearl  <?=@$stepThreeTicketPagoInstThree;?>  col-4">
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
                      <option  value="4U">Status 4U</option>
                    </select>
                  </div>
                    <button class="btn btn-primary btn-round btn-cambio-statusCu"  type="button" name="follow">Cambiar</button>
              </div>
            </div>
          </div>
          <div class="card user-visitors">
            <div class="card-header card-header-transparent p-20">
              <h4 class="card-title mb-0">Referencias de pago </h4>
            </div>
            <div class="card-block px-30">

              <ul class="list-group list-group-full">

              <?php if(@$referenciaPago!= NULL ) { ;?>
                  <?php if(@$fileexistsTicketPago == TRUE and $fileInfoTicketPago['data']['statusDocumento']== 'Aceptado') { ;?>
                    <li class="list-group-item">
                      <div class="text-center">
                        <div class="iconpdf-config">
                          <button class="btn btn-primary" type="button" name="button"><i class="icon icon-xs fa-check " aria-hidden="true"></i>Pago realizado</button>
                        </div>

                      </div>
                    </li>
                <?php }else{ ;?>
                  <?php for ($i = 0; $i < count($referenciaPago); $i++) { ?>
                  <li class="list-group-item">
                    <div class="media">
                      <div class="iconpdf-config">
                        <img src="<?=base_url('resources/assets/Informativa/images/pdf.png');?>" title="Chrome" alt="Chrome">
                      </div>
                      <div class="media-body">
                        <div class="text-center">
                          <h5 class="mt-0 mb-5 hover"></i><?=@$referenciaPago[$i]['nombreDocumento'];?>
                          </h5>
                        </div>
                      </div>
                      <div class="float-right">
                        <a type="button" class="btn btn-primary btn-xs ladda-button "  href="<?=@$referenciaPago[$i]['urlDocumento'];?>" download> <i class="icon icon-xs fa-download mr-0" aria-hidden="true"></i> </a>
                      </div>

                    </div>
                  </li>
                    <?php } ;?>
                  <?php } ;?>
                <?php } ;?>

              </ul>

            </div>
          </div>
