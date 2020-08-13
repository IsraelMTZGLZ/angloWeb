
<div class="page">
  <div class="page-header">
    <h1 align="center" class="page-title"> <?=@$aspirante['firstNamePersona'];?> <?=@$aspirante['lastNamePersona'];?></h1>
    <h1 class="page-title"></h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="../index.html">Cursos de Verano</a></li>
      <li class="breadcrumb-item"><a href="javascript:void(0)">Información</a></li>
    </ol>

  </div>
  <div class="page-content container-fluid">
    <div class="row">
      <!-- Middle Column -->
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
        <!-- <div id="personalCompletedWidget" class="card card-shadow pb-20">
          <div class="card-header card-header-transparent cover overlay">
            <div class="card-block p-30">
              <div class="row">
                <div class="col-6">
                  <div class="counter text-left blue-grey-700">
                    <div class="counter-label mt-10">Tasks Completed
                    </div>
                    <div class="counter-number font-size-40 mt-10">
                      1,234
                    </div>
                  </div>
                </div>
                <div class="col-6">
                  <div class="pie-progress pie-progress-sm" data-plugin="pieProgress" data-valuemax="100"
                    data-barcolor="#57c7d4" data-size="100" data-barsize="10"
                    data-goal="86" aria-valuenow="86" role="progressbar">
                    <span class="pie-progress-number blue-grey-700 font-size-20">
                      86%
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div> -->
        <!-- End Friends List -->
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
              <?php if(!@$InstOneInfo== NULL) { ;?>
              <div class="card card-element">
                <img class="card-img-top w-full" src="<?=base_url('resources/assets/Informativa/images/uk_universities.jpg');?>" alt="Imagen Institucion" alt="Card image cap">
                <div class="card-block">
                  <h4 class="card-title" align="center"><?=@$instOne['nombreInstitucion'];?></h4>
                  <p class="card-text" align="center"></p>
                  <p class="card-text hidden-md-down" align="center"><?=@$instOne['ubicacionInstitucion'] ? $instOne['ubicacionInstitucion'] : 'London' ;?>.</p>
                </div>
                <br>

              <?php if(@$numAplicanteOne!= NULL) { ;?>
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
                <?php } ;?>


                <br>
                <div class="clash-card__unit-stats <?='clash-card__unit-stats--goblin' ;?> clearfix">
                  <div class="one-third">
                    <div class="stat"><?=@$instOne['statusInstitucion'];?>  </div>
                  </div>
                </div>
              </div>
              <?php } ;?>
              <?php if(!@$InstTwoInfo== NULL) { ;?>
              <div class="card card-element">
                <img class="card-img-top w-full" src="<?=base_url('resources/assets/Informativa/images/vv_Eastbourne.png');?>" alt="Imagen Institucion" alt="Card image cap">
                <div class="card-block">
                  <h4 class="card-title" align="center"><?=@$instTwo['nombreInstitucion'];?></h4>
                  <p class="card-text" align="center"></p>
                  <p class="card-text hidden-md-down" align="center"><?=@$instTwo['ubicacionInstitucion'] ? $instTwo['ubicacionInstitucion'] : 'London' ;?>.</p>

                </div>
                <br>
                <?php if(@$numAplicanteTwo!= NULL) { ;?>
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
                <?php } ;?>
                <br>
                <div class="clash-card__unit-stats <?='clash-card__unit-stats--goblin' ;?> clearfix">
                  <div class="one-third">
                    <div class="stat"><?=@$instTwo['statusInstitucion'];?></div>
                  </div>
                </div>
              </div>
                <?php } ;?>
                <?php if(!@$InstThreeInfo== NULL) { ;?>
              <div class="card card-element">
                <img class="card-img-top w-full" src="<?=base_url('resources/assets/Informativa/images/uk_universities.jpg');?>" alt="Imagen Institucion" alt="Card image cap">
                <div class="card-block">
                  <h4 class="card-title" align="center"><?=@$instThree['nombreInstitucion'];?></h4>
                  <p class="card-text" align="center" ></p>
                  <p class="card-text hidden-md-down" align="center"><?=@$instThree['ubicacionInstitucion'] ? $instThree['ubicacionInstitucion'] : 'London' ;?>.</p>

                </div>
                <br>
                  <?php if(@$numAplicanteThree!= NULL) { ;?>
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
                  <?php } ;?>
                <br>
                <div class="clash-card__unit-stats <?='clash-card__unit-stats--goblin' ;?> clearfix">
                  <div class="one-third">
                    <div class="stat"><?=@$instThree['statusInstitucion'];?></div>
                  </div>
                </div>
              </div>
              <?php } ;?>
            </div>

          </div>
        </div>
