
<div class="page">
   
    <!-- Page Content -->
    <div class="page-content container-fluid">
        <div class="row" data-plugin="matchHeight" data-by-row="true">
            <div class="col-xxl-3 col-xl-3">
                <div class="user-info card card-shadow text-center">
                    <div class="user-base card-block">
                        <a class="avatar img-bordered avatar-100" href="javascript:void(0)">
                            <img src="<?=@ ($aspirante['photoUrl']) ? $aspirante['photoUrl'] : base_url("resources/assets/Anglo/AngloLatino-sintexto.png") ;?>" alt="Imagen Perfil">
                        </a>
                        <p class="userName"></p>
                        <p class="userDatos"></p>
                        <p class="user-job">Correo</p>
                        <p class="userDatos"><i class="icon wb-envelope emailicon " aria-hidden="true"></i> <?=@$aspirante['email'];?></p>
                        <p class="user-job">Teléfono</p>
                        <p class="userDatos"><i class="icon fa-phone-square callicon" aria-hidden="true"></i> <?=@$aspirante['telefono'];?></p>
                        <p class="user-job">Ciudad</p>
                        <p class="userDatos"><i class="icon fa-flag nationicon" aria-hidden="true"></i> <?=@$aspirante['ciudad'];?></p>
                        <p class="user-job">Género</p>
                        <p class="userDatos"><i class="icon fa-user nationicon" aria-hidden="true"></i> <?=@$aspirante['genero'];?></p>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6 col-xl-6">
                <div class="row">
                    <div class="col-12" >
                        <div class="card" style="height: 50%">
                            <div class="card-block ">
                                <h4 class="card-title mb-0">Progreso</h4>
                                <div class="example-wrap">
                                    <div class="example">

                                        <div class="progress progress-lg">
                                            <div class="progress-bar progress-bar-success" style="width: 50%;" role="progressbar">50%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="user-posts card card-shadow" style="margin-top:-70px;height:113%">
                            <div class="card-block">
                                <h4 class="card-title mb-20">Instituciones elegidas por el aspirante:</h4>
                                <br>
                                <br>
                                <div class="card-deck">
                                    <?php for($i=0;$i<count($universidades);$i++) {?>
                                        <div class="card card-element">
                                            <img class="card-img-top w-full" src="<?=@$universidades[$i]['logoInstitucion'];?>" alt="Imagen Institucion">
                                            <div class="card-block">
                                                <h4 class="card-title" align="center"><?=@$universidades[$i]['nombreInstitucion'];?>.</h4>
                               
                                            </div>
                                            <div class="clash-card__unit-stats clash-card__unit-stats--goblin clearfix">
                                                <div class="one-third">
                                                    <div class="stat"> </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php }?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
