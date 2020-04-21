<div class="site-menubar">
    <div class="site-menubar-header">
      <div class="cover overlay">
        <img class="cover-image" src="<?=base_url('resources/assets/Anglo/cursos_ingles.jpg');?>" alt="...">
        <div class="overlay-panel vertical-align overlay-background">
          <div class="vertical-align-middle">
            <a class="avatar avatar-lg" href="javascript:void(0)">
              <img src="<?=@($user->photoUrl!='NULL') ? $user->photoUrl : base_url("resources/assets/Anglo/AngloLatino-sintexto.png") ;?>" alt="">
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
            <li class="site-menu-item hover">
                <a href="Home">
                  <i class="site-menu-icon fas fa-home" aria-hidden="true" style="font-size: 20px;"></i>
                  <span class="site-menu-title">Home</span>
                </a>
              </li>
            <li class="site-menu-item has-sub hover">
              <a href="javascript:void(0)">
                <i class="site-menu-icon fas fa-envelope" aria-hidden="true"></i>
                <span class="site-menu-title">Email</span>
                <span class="site-menu-arrow"></span>
              </a>
                <ul class="site-menu-sub" style="">
                  <li class="site-menu-item">
                    <a href="Email">
                      <span class="site-menu-title">Configuración correo</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="site-menu-item has-sub hover">
                <a href="javascript:void(0)">
                  <i class="site-menu-icon fas fa-users" aria-hidden="true"></i>
                  <span class="site-menu-title">Usuarios</span>
                  <span class="site-menu-arrow"></span>
                </a>
                <ul class="site-menu-sub">
                  <li class="site-menu-item">
                    <a href="TablaDescarga">
                      <span class="site-menu-title">Aspirantes</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a href="TablaAgente">
                      <span class="site-menu-title">Agentes</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="site-menu-item has-sub hover">
                <a href="javascript:void(0)">
                  <i class="site-menu-icon fas fa-plus-square" aria-hidden="true"></i>
                  <span class="site-menu-title">Escuelas</span>
                  <span class="site-menu-arrow"></span>
                </a>
                <ul class="site-menu-sub">
                  <li class="site-menu-item">
                    <a href="Preparatoria/All_Preparatorias">
                      <span class="site-menu-title">Preparatorias</span>
                    </a>
                  </li>
                </ul>
              </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
