
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


          <!-- End User Posts -->

          <!-- User Background -->
          <div class="user-background card card-shadow">
            <div class="card-header card-header-transparent p-20">
              <h4 class="card-title mb-0">Tus documentos estan siendo revisados, esperar las indicaciones de un agente, Gracias.</h4>
            </div>
            <div class="card-block">
              <div class="example-wrap">
                <h4 class="example-title"></h4>
                <div class="example text-center">
                  <img src="<?=base_url('resources/assets/Informativa/images/anglo_log.png');?>" alt="">
                </div>



              </div>
              </div>
          </div>
          <!-- <div class="user-background card card-shadow">
            <div class="card-header card-header-transparent p-20">
              <h4 class="card-title mb-0">Alta de Visa </h4>
            </div>
            <div class="card-block">
              <div class="example-wrap">
                <h4 class="example-title"><?=$infoDoc;?></h4>
                <div class="example">
                  <form id="formDocVisa">
                    <input type="file" id="input-file-visa" name="Visa.pdf" data-plugin="dropify" <?=$enable;?>   data-default-file="<?=$defaultfile;?>" />
                  </form>
                </div>
                <div class="example example-buttons">
                  <?php if(@$fileexists == FALSE) { ;?>
                  <div class="float-left">
                    <button type="button" class="btn btn-primary ladda-button btn-file-visa" data-style="expand-left"
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
                        <span class="pearl-title">Cargar de Visa</span>
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
          </div> -->


          <!-- End User Background -->

          <!-- User Recomenfations -->

          <!-- End User Recomendations -->
          <!-- User Following -->

          <!-- End User Following -->
        </div>
        <!-- End Left Column -->

        <!-- Right Column -->
        <div class="col-lg-6 col-xl-3 order-xl-3">
          <div class="card user-visitors">
            <div class="card-header card-header-transparent p-20">
              <h4 class="card-title mb-0">Información</h4>
            </div>
            <div class="card-block px-30">


              <div class="text-center">
                  <!-- <a type="button" class="btn btn-round btn-warning" href="tel:4422609090"><i class="icon icon-xs fa-info mr-0" aria-hidden="true"></i>Información</a> -->
                  <button class="btn btn-outline btn-warning" data-target="#InfoDr" data-toggle="modal"
                    type="button"> <i class="icon icon-xs fa-info mr-0" aria-hidden="true"></i>Información </button>
              </div>
            </div>
          </div>
