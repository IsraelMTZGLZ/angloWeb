<div class="site-menubar">
    <div class="site-menubar-header">
      <div class="cover overlay">
        <img class="cover-image" src="<?=base_url('resources/assets/Anglo/cursos_ingles.jpg');?>" alt="...">
        <div class="overlay-panel vertical-align overlay-background">
          <div class="vertical-align-middle">
            <a class="avatar avatar-lg" href="javascript:void(0)">
              <img src="<?=@($user->photoUrl!='NULL') ? @$user->photoUrl : base_url("resources/assets/Anglo/AngloLatino-sintexto.png") ;?>" alt="">
            </a>
            <div class="site-menubar-info">
              <h5 class="site-menubar-user"><?=@ucwords(strtolower($user->names));?> <?=@ucwords(strtolower($user->paterns));?></h5>
              <p class="site-menubar-email"><?=@$user->email?></p>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="site-menubar-body">
      <div>
        <div>
          <ul class="site-menu" data-plugin="menu">
            <li class="site-menu-item">
              <?php if($user->typeUsuario=="Admin") { ;?>
                <a href="Home">
                  <i class="site-menu-icon fas fa-home" aria-hidden="true" style="font-size: 20px;"></i>
                  <span class="site-menu-title">Inicio</span>
                </a>
              <?php } ;?>
              <?php if($user->typeUsuario=="Agente") { ;?>
                <a href="HomeAgente">
                  <i class="site-menu-icon fas fa-home" aria-hidden="true" style="font-size: 20px;"></i>
                  <span class="site-menu-title">Inicio</span>
                </a>
              <?php } ;?>
              <?php if($user->typeUsuario=="Aspirante") { ;?>
                <a href="HomeAspirante">
                  <i class="site-menu-icon fas fa-home" aria-hidden="true" style="font-size: 20px;"></i>
                  <span class="site-menu-title">Inicio</span>
                </a>
              <?php } ;?>
            </li>
            <?php if($user->typeUsuario=="Admin") { ?>
              <li class="site-menu-item has-sub">
                <a href="javascript:void(0)">
                  <i class="site-menu-icon fas fa-users" aria-hidden="true"></i>
                  <span class="site-menu-title">Usuarios</span>
                  <span class="site-menu-arrow"></span>
                </a>
                <ul class="site-menu-sub">

                  <li class="site-menu-item">
                    <a href="Permisos">
                      <span class="site-menu-title">Agentes</span>
                    </a>
                  </li>
                  
                </ul>
              </li>
            <?php } ?>
            <?php if($user->typeUsuario=="Admin") { ?>
              <li class="site-menu-item has-sub">
                <a href="javascript:void(0)">
                  <i class="site-menu-icon fas fa-plus-square" aria-hidden="true"></i>
                  <span class="site-menu-title">Escuelas</span>
                  <span class="site-menu-arrow"></span>
                </a>
                <ul class="site-menu-sub">
                  <li class="site-menu-item">
                    <a href="Institucion">
                      <span class="site-menu-title">Instituciones / Universidades</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a href="Preparatorias">
                      <span class="site-menu-title">Preparatorias</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a href="Tipo">
                      <span class="site-menu-title">Estudios / Alojamiento</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="site-menu-item">
                <a href="Eventos">
                  <i class="site-menu-icon fas fa-calendar" aria-hidden="true"></i>
                  <span class="site-menu-title">Eventos</span>

                </a>
              </li>
            <?php } ?>
            <?php if($user->typeUsuario=="Admin" || $user->typeUsuario=="Agente") { ?>
              <li class="site-menu-item">
                <a href="Escuelas">
                  <i class="site-menu-icon fas fa-graduation-cap" aria-hidden="true"></i>
                  <span class="site-menu-title">Oferta Educativa</span>

                </a>
              </li>
            <?php } ?>
            <?php if($user->typeUsuario=="Admin" || $user->typeUsuario=="Agente") { ?>
            <li class="site-menu-item has-sub">
              <a href="javascript:void(0)">
                <i class="site-menu-icon icon fa-graduation-cap" aria-hidden="true" style="font-size: 20px;"></i>
                <span class="site-menu-title">Universidades/Preparatorias</span>
                <span class="site-menu-arrow"></span>
              </a>
              <ul class="site-menu-sub">
                <li class="site-menu-item">
                  <a href="TablaDescarga">
                    <i class="site-menu-icon fas fa-users" aria-hidden="true"></i>
                    <span class="site-menu-title">Aspirantes</span>&nbsp;&nbsp;&nbsp;
                    <span class="badge badge-pill badge-primary">Status 0</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a href="AspiranteStatus1">
                    <i class="site-menu-icon fas fa-users" aria-hidden="true"></i>
                    <span class="site-menu-title">Aspirantes</span>&nbsp;&nbsp;&nbsp;
                    <span class="badge badge-pill badge-primary">Status 1</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a href="AspiranteStatus2">
                    <i class="site-menu-icon fas fa-users" aria-hidden="true"></i>
                    <span class="site-menu-title">Aspirantes</span>&nbsp;&nbsp;&nbsp;
                    <span class="badge badge-pill badge-primary">Status 2-4</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a href="AspiranteStatus5">
                    <i class="site-menu-icon fas fa-users" aria-hidden="true"></i>
                    <span class="site-menu-title">Aspirantes</span>&nbsp;&nbsp;&nbsp;
                    <span class="badge badge-pill badge-primary">Status 5</span>
                  </a>
                </li>
              </ul>
            </li>
          <?php } ?>
            
            <li class="site-menu-item">
              <?php if($user->typeUsuario=="Aspirante") { ;?>
                <a href="MisArchivos">
                  <i class="site-menu-icon far fa-file" aria-hidden="true" style="font-size: 20px;"></i>
                  <span class="site-menu-title">Mis Archivos</span>
                </a>
              <?php } ;?>
            </li>
<<<<<<< HEAD

              <?php if($user->typeUsuario=="Aspirante") { ;?>
                <li class="site-menu-item has-sub active open">
                  <a href="javascript:void(0)">
                    <i class="site-menu-icon wb-bookmark" aria-hidden="true"></i>
                    <span class="site-menu-title">Verano</span>
                    <span class="site-menu-arrow"></span>
                  </a>
                  <ul class="site-menu-sub">
                    <li class="site-menu-item has-sub">
                      <a href="javascript:void(0)">
                        <span class="site-menu-title">Verano Inglés</span>
                        <span class="site-menu-arrow"></span>
                      </a>
                      <ul class="site-menu-sub">
                        <li class="site-menu-item">
                          <a href="<?=base_url('Dashboard/StatusVeranoIngles/StatusCero')?>">

                            <span class="site-menu-title">Aspirantes</span>&nbsp;&nbsp;&nbsp;
                            <span class="badge badge-pill badge-primary">Status 0</span>
                          </a>
                        </li>
                        <li class="site-menu-item">
                          <a href="<?=base_url('Dashboard/StatusVeranoIngles/StatusUno')?>">

                            <span class="site-menu-title">Aspirantes</span>&nbsp;&nbsp;&nbsp;
                            <span class="badge badge-pill badge-primary">Status 1</span>
                          </a>
                        </li>
                        <li class="site-menu-item">
                          <a href="<?=base_url('Dashboard/StatusVeranoIngles/StatusDos')?>">

                            <span class="site-menu-title">Aspirantes</span>&nbsp;&nbsp;&nbsp;
                            <span class="badge badge-pill badge-primary">Status 2</span>
                          </a>
                        </li>
                        <li class="site-menu-item">
                          <a href="<?=base_url('Dashboard/StatusVeranoIngles/StatusDosR')?>">

                            <span class="site-menu-title">Aspirantes</span>&nbsp;&nbsp;&nbsp;
                            <span class="badge badge-pill badge-primary">Status 2R</span>
                          </a>
                        </li>
                        <li class="site-menu-item">
                          <a href="<?=base_url('Dashboard/StatusVeranoIngles/StatusTres')?>">

                            <span class="site-menu-title">Aspirantes</span>&nbsp;&nbsp;&nbsp;
                            <span class="badge badge-pill badge-primary">Status 3</span>
                          </a>
                        </li>
                        <li class="site-menu-item">
                          <a href="<?=base_url('Dashboard/StatusVeranoIngles/StatusCuatroC')?>">

                            <span class="site-menu-title">Aspirantes</span>&nbsp;&nbsp;&nbsp;
                            <span class="badge badge-pill badge-primary">Status 4C</span>
                          </a>
                        </li>
                        <li class="site-menu-item">
                          <a href="<?=base_url('Dashboard/StatusVeranoIngles/StatusCuatroU')?>">

                            <span class="site-menu-title">Aspirantes</span>&nbsp;&nbsp;&nbsp;
                            <span class="badge badge-pill badge-primary">Status 4U</span>
                          </a>
                        </li>
                        <li class="site-menu-item">
                          <a href="<?=base_url('Dashboard/StatusVeranoIngles/StatusCinco')?>">

                            <span class="site-menu-title">Aspirantes</span>&nbsp;&nbsp;&nbsp;
                            <span class="badge badge-pill badge-primary">Status 5</span>
                          </a>
                        </li>

                      </ul>
                    </li>
                  </ul>
                  <ul class="site-menu-sub">
                    <li class="site-menu-item has-sub">
                      <a href="javascript:void(0)">
                        <span class="site-menu-title">Verano Académico</span>
                        <span class="site-menu-arrow"></span>
                      </a>
                      <ul class="site-menu-sub">
                        <li class="site-menu-item">
                          <a href="<?=base_url('Dashboard/StatusVeranoAcademico/StatusCero')?>">

                            <span class="site-menu-title">Aspirantes</span>&nbsp;&nbsp;&nbsp;
                            <span class="badge badge-pill badge-primary">Status 0</span>
                          </a>
                        </li>
                        <li class="site-menu-item">
                          <a href="<?=base_url('Dashboard/StatusVeranoAcademico/StatusUno')?>">

                            <span class="site-menu-title">Aspirantes</span>&nbsp;&nbsp;&nbsp;
                            <span class="badge badge-pill badge-primary">Status 1</span>
                          </a>
                        </li>
                        <li class="site-menu-item">
                          <a href="<?=base_url('Dashboard/StatusVeranoAcademico/StatusDos')?>">

                            <span class="site-menu-title">Aspirantes</span>&nbsp;&nbsp;&nbsp;
                            <span class="badge badge-pill badge-primary">Status 2</span>
                          </a>
                        </li>
                        <li class="site-menu-item">
                          <a href="<?=base_url('Dashboard/StatusVeranoAcademico/StatusDosR')?>">

                            <span class="site-menu-title">Aspirantes</span>&nbsp;&nbsp;&nbsp;
                            <span class="badge badge-pill badge-primary">Status 2R</span>
                          </a>
                        </li>
                        <li class="site-menu-item">
                          <a href="<?=base_url('Dashboard/StatusVeranoAcademico/StatusTres')?>">

                            <span class="site-menu-title">Aspirantes</span>&nbsp;&nbsp;&nbsp;
                            <span class="badge badge-pill badge-primary">Status 3</span>
                          </a>
                        </li>
                        <li class="site-menu-item">
                          <a href="<?=base_url('Dashboard/StatusVeranoAcademico/StatusCuatroC')?>">

                            <span class="site-menu-title">Aspirantes</span>&nbsp;&nbsp;&nbsp;
                            <span class="badge badge-pill badge-primary">Status 4C</span>
                          </a>
                        </li>
                        <li class="site-menu-item">
                          <a href="<?=base_url('Dashboard/StatusVeranoAcademico/StatusCuatroU')?>">

                            <span class="site-menu-title">Aspirantes</span>&nbsp;&nbsp;&nbsp;
                            <span class="badge badge-pill badge-primary">Status 4U</span>
                          </a>
                        </li>
                        <li class="site-menu-item">
                          <a href="<?=base_url('Dashboard/StatusVeranoAcademico/StatusCinco')?>">

                            <span class="site-menu-title">Aspirantes</span>&nbsp;&nbsp;&nbsp;
                            <span class="badge badge-pill badge-primary">Status 5</span>
                          </a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li class="site-menu-item has-sub active ">
                  <a href="javascript:void(0)">
                    <i class="site-menu-icon wb-bookmark" aria-hidden="true"></i>
                    <span class="site-menu-title">Inglés</span>
                    <span class="site-menu-arrow"></span>
                  </a>
                  

                      <ul class="site-menu-sub">
                        <li class="site-menu-item">
                          <a href="<?=base_url('Dashboard/StatusVeranoIngles/StatusCero')?>">

                            <span class="site-menu-title">Aspirantes</span>&nbsp;&nbsp;&nbsp;
                            <span class="badge badge-pill badge-primary">Status 0</span>
                          </a>
                        </li>
                        <li class="site-menu-item">
                          <a href="<?=base_url('Dashboard/StatusIngles/StatusUno')?>">

                            <span class="site-menu-title">Aspirantes</span>&nbsp;&nbsp;&nbsp;
                            <span class="badge badge-pill badge-primary">Status 1</span>
                          </a>
                        </li>
                        <li class="site-menu-item">
                          <a href="<?=base_url('Dashboard/StatusIngles/StatusDos')?>">

                            <span class="site-menu-title">Aspirantes</span>&nbsp;&nbsp;&nbsp;
                            <span class="badge badge-pill badge-primary">Status 2</span>
                          </a>
                        </li>
                        <li class="site-menu-item">
                          <a href="<?=base_url('Dashboard/StatusIngles/StatusDosR')?>">

                            <span class="site-menu-title">Aspirantes</span>&nbsp;&nbsp;&nbsp;
                            <span class="badge badge-pill badge-primary">Status 2R</span>
                          </a>
                        </li>
                        <li class="site-menu-item">
                          <a href="<?=base_url('Dashboard/StatusIngles/StatusTres')?>">

                            <span class="site-menu-title">Aspirantes</span>&nbsp;&nbsp;&nbsp;
                            <span class="badge badge-pill badge-primary">Status 3</span>
                          </a>
                        </li>
                        <li class="site-menu-item">
                          <a href="<?=base_url('Dashboard/StatusIngles/StatusCuatroC')?>">

                            <span class="site-menu-title">Aspirantes</span>&nbsp;&nbsp;&nbsp;
                            <span class="badge badge-pill badge-primary">Status 4C</span>
                          </a>
                        </li>
                        <li class="site-menu-item">
                          <a href="<?=base_url('Dashboard/StatusIngles/StatusCuatroU')?>">

                            <span class="site-menu-title">Aspirantes</span>&nbsp;&nbsp;&nbsp;
                            <span class="badge badge-pill badge-primary">Status 4U</span>
                          </a>
                        </li>
                        <li class="site-menu-item">
                          <a href="<?=base_url('Dashboard/StatusIngles/StatusCinco')?>">

                            <span class="site-menu-title">Aspirantes</span>&nbsp;&nbsp;&nbsp;
                            <span class="badge badge-pill badge-primary">Status 5</span>
                          </a>
                        </li>
                      </ul>



                </li>
              <?php } ;?>

=======
            <li class="site-menu-item">
              <?php if($user->typeUsuario=="Aspirante") { ;?>
                <a href="MisInstituciones">
                  <i class="site-menu-icon fas fa-graduation-cap" aria-hidden="true" style="font-size: 20px;"></i>
                  <span class="site-menu-title">Mis Instituciones</span>
                </a>
              <?php } ;?>
            </li>
>>>>>>> 269b12679298ba2de77ad02e57da55c643728c6e
            <?php if($user->typeUsuario=="Agente") { ?>
              <li class="site-menu-item">
                <a href="TablaDescarga">
                  <i class="site-menu-icon fas fa-users" aria-hidden="true"></i>
                  <span class="site-menu-title">Aspirantes</span>&nbsp;&nbsp;&nbsp;
                  <span class="badge badge-pill badge-primary">Status 0</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a href="AspiranteStatus1">
                  <i class="site-menu-icon fas fa-users" aria-hidden="true"></i>
                  <span class="site-menu-title">Aspirantes</span>&nbsp;&nbsp;&nbsp;
                  <span class="badge badge-pill badge-primary">Status 1</span>
                </a>
              </li>
            <?php } ?>
            <!-- <?php if($user->typeUsuario=="Admin") { ?> -->
            <li class="site-menu-item has-sub">
              <a href="javascript:void(0)">
                <i class="site-menu-icon icon fa-university" aria-hidden="true" style="font-size: 20px;"></i>
                <span class="site-menu-title">Ingles</span>
                <span class="site-menu-arrow"></span>
              </a>
              <ul class="site-menu-sub">
                <li class="site-menu-item">
                  <a href="StatusCero">
                    <i class="site-menu-icon fas fa-users" aria-hidden="true"></i>
                    <span class="site-menu-title">Aspirantes</span>&nbsp;&nbsp;&nbsp;
                    <span class="badge badge-pill badge-primary">Status 0</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a href="StatusUno">
                    <i class="site-menu-icon fas fa-users" aria-hidden="true"></i>
                    <span class="site-menu-title">Aspirantes</span>&nbsp;&nbsp;&nbsp;
                    <span class="badge badge-pill badge-primary">Status 1</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a href="StatusDos">
                    <i class="site-menu-icon fas fa-users" aria-hidden="true"></i>
                    <span class="site-menu-title">Aspirantes</span>&nbsp;&nbsp;&nbsp;
                    <span class="badge badge-pill badge-primary">Status 2/3/4</span>
                  </a>
                </li>
              </ul>
            </li>
<<<<<<< HEAD
          <!-- <?php } ?> -->
          <!-- <?php if($user->typeUsuario=="Admin") { ?> -->
            <!-- <li class="site-menu-item has-sub active open">
=======
          <?php } ?>
          <?php if($user->typeUsuario=="Admin") { ?>
            <li class="site-menu-item has-sub open">
>>>>>>> 269b12679298ba2de77ad02e57da55c643728c6e
              <a href="javascript:void(0)">
                <i class="site-menu-icon wb-bookmark" aria-hidden="true"></i>
                <span class="site-menu-title">Verano</span>
                <span class="site-menu-arrow"></span>
              </a>
              <ul class="site-menu-sub">
                <li class="site-menu-item has-sub">
                  <a href="javascript:void(0)">
                    <span class="site-menu-title">Verano Ingles</span>
                    <span class="site-menu-arrow"></span>
                  </a>
                  <ul class="site-menu-sub">
                    <li class="site-menu-item">
                      <a href="<?=base_url('Dashboard/StatusVeranoIngles/StatusCero')?>">

                        <span class="site-menu-title">Aspirantes</span>&nbsp;&nbsp;&nbsp;
                        <span class="badge badge-pill badge-primary">Status 0</span>
                      </a>
                    </li>
                    <li class="site-menu-item">
                      <a href="StatusUno">

                        <span class="site-menu-title">Aspirantes</span>&nbsp;&nbsp;&nbsp;
                        <span class="badge badge-pill badge-primary">Status 1</span>
                      </a>
                    </li>
                    <li class="site-menu-item">
                      <a href="StatusDos">

                        <span class="site-menu-title">Aspirantes</span>&nbsp;&nbsp;&nbsp;
                        <span class="badge badge-pill badge-primary">Status 2</span>
                      </a>
                    </li>
                    <li class="site-menu-item">
                      <a href="StatusDos">

                        <span class="site-menu-title">Aspirantes</span>&nbsp;&nbsp;&nbsp;
                        <span class="badge badge-pill badge-primary">Status 2R</span>
                      </a>
                    </li>
                  </ul>
                </li>
              </ul>
<<<<<<< HEAD
            </li> -->
            <!-- <?php } ?> -->
=======
            </li>
            <?php } ?>
            <?php if($user->typeUsuario=="Aspirante") { ;?>
              <?php if ($BECASSELECION['aplicaBecas']=='Si') { ?>
                <li class="site-menu-item">
                  <a href="BecasUP">
                    <i class="site-menu-icon icon fa-institution" aria-hidden="true" style="font-size: 20px;"></i>
                    <span class="site-menu-title">Becas</span>
                  </a>
                </li>
              <?php } ?>
            <?php } ?>
>>>>>>> 269b12679298ba2de77ad02e57da55c643728c6e
            <li class="site-menu-item">
                <a href="<?=base_url('Login/Login/logout')?>">
                  <i class="site-menu-icon icon wb-power" aria-hidden="true" style="font-size: 20px;"></i>
                  <span class="site-menu-title">Cerrar sesión</span>
                </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
