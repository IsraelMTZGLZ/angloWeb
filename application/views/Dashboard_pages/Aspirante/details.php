
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
                        <p class="userDatos"><i class="icon wb-envelope emailicon " aria-hidden="true" style="color: red"></i> <?=@$aspirante['email'];?></p>
                        <p class="user-job">Teléfono</p>
                        <p class="userDatos"><i class="icon fa-phone-square callicon" aria-hidden="true" style="color: red"></i> <?=@$aspirante['telefono'];?></p>
                        <p class="user-job">Ciudad</p>
                        <p class="userDatos"><i class="icon fa-flag nationicon" aria-hidden="true" style="color: red"></i> <?=@$aspirante['ciudad'];?></p>
                        <p class="user-job">Género</p>
                        <p class="userDatos"><i class="icon fa-user nationicon" aria-hidden="true" style="color: red"></i> <?=@$aspirante['genero'];?></p>
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
                                        <div class="card card-element" style="border: 0;">
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
            <div class="col-xxl-3 col-xl-3">
                <div class="row">
                        <div class="col-12" >
                            <div class="card" style="height: 50%">
                                <div class="card-block ">
                                    <h4 class="card-title mb-0">Status</h4>
                                    <div class="example-wrap">
                                        <div class="example">
                                            <ul class="list-group">
                                                <li class="bg-red-600 list-group-item text-center">
                                                    <span style="color:white"><?=$aspirante['statusAspirante']?></span>
                                                </li>
                                        
                                            </ul>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                        <div class="user-posts card card-shadow" style="margin-top:-90px;height:113%">
                            <div class="card-block">
                                <h4 class="card-title mb-20">Informacion escolar:</h4>
                                
                                <div class="card-deck">
                                    <div class="card card-element" style="border: 0;">
                                        <div class="form-group">
                                            <label class="form-control-label" for="inputBasicEmail">Estudio de interes:</label>
                                            <input type="text" class="form-control" value="<?=@$aspirante['programaDeInteres']?>" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label" for="inputBasicEmail">Facultad:</label>
                                            <input type="text" class="form-control" value="<?=@$infoAspiranteUni['nombreFacultad']?>" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label" for="inputBasicEmail">Tipo de estudio:</label>
                                            <input type="text" class="form-control" value="<?=@$infoAspiranteUni['estudiosAspiranteUniversidad']?>" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label" for="inputBasicEmail">Mes y año de ingreso:</label>
                                            <input type="text" class="form-control" value="<?=@$infoAspiranteUni['mes']?>, <?=@$infoAspiranteUni['anio']?>" disabled>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="row" data-plugin="matchHeight" data-by-row="true">
    <div class="col-xxl-7 col-lg-8">

      <!--Eligio universidad-->
        <div class="card card-shadow card-responsive" id="widgetLineareaColor">
          
          <p class="font-size-20 blue-grey-700" style="color: #B53F00;margin:30px;">Documentos del aspirante: &nbsp;</p>
         
          <div class="row">
            <?php for($i=0; $i< count(@$documentos);$i++) {?>
            <div class="col-lg-5 col-sm-12" style="margin: 30px;">
              <div class="card card-shadow text-center">
                <div class="card-block">
                  <a class="avatar avatar-lg" href="<?=@'http://localhost/angloApi'.$documentos[$i]['urlDocumento']?>" target="_blank" style="width: 110px;">
                    <img src="https://img.icons8.com/clouds/2x/pdf-2.png" alt="Icon PDF">
                  </a>
                  <?php if($documentos[$i]['descMaestriaDocumento']) {?>
                    <div class="form-group">
                        <label>Descripción del problema:</label>
                        <br>
                        <label class="form-control-label" for="inputBasicFirstName"><?=@$documentos[$i]['descMaestriaDocumento']?></label>
                    </div>
                  <?php } ?>
                  <h4 class="profile-user"><?=$documentos[$i]['nombreDocumento']?></h4>
                  <p class="profile-job">Fecha de subida: <?=$documentos[$i]['lastUpdateDocumento']?></p>
                  <p></p>
                  <a type="button" class="btn btn-primary" href="<?=@'http://localhost/angloApi'.$documentos[$i]['urlDocumento']?>" target="_blank">Ver</a>
                </div>
                <?php if(@$documentos[$i]['statusDocumento']=="Pendiente") { ;?>
                  <div class="card-footer" style="background-color: #FFED78">
                    <div class="row no-space">
                      <div class="col-12">
                        <span style="color: black"><?=$documentos[$i]['statusDocumento']?></span>
                      </div>
                    </div>
                  </div>
                <?php } else if (@$documentos[$i]['statusDocumento']=="Rechazado") { ?>
                  <div class="card-footer" style="background-color: #FF666B">
                    <div class="row no-space">
                      <div class="col-12">
                        <span style="color: white"><?=$documentos[$i]['statusDocumento']?></span>
                      </div>
                    </div>
                  </div>
                <?php } else if (@$documentos[$i]['statusDocumento']=="Aceptado") { ?>
                  <div class="card-footer" style="background-color: #28D17C">
                    <div class="row no-space">
                      <div class="col-12">
                        <span style="color: white"><?=$documentos[$i]['statusDocumento']?></span>
                      </div>
                    </div>
                  </div>
                <?php } ;?>
              </div>
            </div>
            <div class="col-lg-5 col-sm-12" style="margin: 30px;"> 
                <div class="card card-shadow " style="border: 0">
                    <?php if($documentos[$i]['statusDocumento']=="Pendiente") { ?>
                        <div class="boletaAlert-<?=@$documentos[$i]['idDocumento']?>"></div>
                        <div class="form-group">
                            <label class="form-control-label" for="inputBasicFirstName" style="font-size: 16px;">Describe de forma detallada el problema que existe en el documento, que pueda ayudar al aspirante a saber que corregir.</label>
                            <textarea class="form-control" style="height: 100px;font-size: 15px" id="desc-<?=@$documentos[$i]['idDocumento']?>"></textarea>
                        </div>
                        <input type="hidden" id="tipo-<?=@$documentos[$i]['idDocumento']?>" value="<?=@$documentos[$i]['tipo']?>">
                        <form id="documentoSubir-<?=@$documentos[$i]['idDocumento']?>">
                            <?php if($documentos[$i]['tipo']=="Transcripcion") { ?>
                                <div class="form-group">
                                    <label>Formato PDF</label>
                                    <div class="input-group input-group-file" data-plugin="inputGroupFile">
                                        <input type="text" class="form-control" id="t-<?=@$documentos[$i]['idDocumento']?>" readonly="">
                                        <span class="input-group-btn">
                                        <span class="btn btn-success btn-file">
                                            <i class="icon wb-upload" aria-hidden="true"></i>
                                                <input type="file" class="test file-<?=@$documentos[$i]['idDocumento']?>" id="<?=@$documentos[$i]['idDocumento']?>" name="Transcripcion">
                                            
                                        </span>
                                        </span>
                                    </div>
                                </div>
                            <?php } ?>
                            <?php if($documentos[$i]['tipo']=="TranscripcionTraduccion") { ?>
                                <div class="form-group">
                                    <label>Formato PDF|DOC|WORD</label>
                                    <div class="input-group input-group-file" data-plugin="inputGroupFile">
                                        <input type="text" class="form-control" id="t-<?=@$documentos[$i]['idDocumento']?>" readonly="">
                                        <span class="input-group-btn">
                                        <span class="btn btn-success btn-file">
                                            <i class="icon wb-upload" aria-hidden="true"></i>
                                                <input type="file" class="test file-<?=@$documentos[$i]['idDocumento']?>" id="<?=@$documentos[$i]['idDocumento']?>" name="Transcripcion">
                                            
                                        </span>
                                        </span>
                                    </div>
                                </div>
                            <?php } ?>
                            <?php if($documentos[$i]['tipo']=="CartaMotivo") { ?>
                                <div class="form-group">
                                    <label>Formato PDF|DOC|WORD</label>
                                    <div class="input-group input-group-file" data-plugin="inputGroupFile">
                                        <input type="text" class="form-control" id="t-<?=@$documentos[$i]['idDocumento']?>" readonly="">
                                        <span class="input-group-btn">
                                        <span class="btn btn-success btn-file">
                                            <i class="icon wb-upload" aria-hidden="true"></i>
                                                <input type="file" class="test file-<?=@$documentos[$i]['idDocumento']?>" id="<?=@$documentos[$i]['idDocumento']?>" name="CartaMotivo">
                                            
                                        </span>
                                        </span>
                                    </div>
                                </div>
                            <?php } ?>
                        </form>
                        <div class="form-group text-center">
                            <button type="button" class="btn btn-info btnAceptar" id="<?=@$documentos[$i]['idDocumento']?>">Aceptar</button>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <button type="button" class="btn btn-danger">Rechazar</button>
                        </div>
                    <?php } ?>
                    <?php if($documentos[$i]['statusDocumento']=="Rechazado") { ?>
                        <br>
                        <br>
                        <br>
                        <div class="form-group">
                            <label class="form-control-label" for="inputBasicFirstName" style="font-size: 18px;">El aspirante aun no ha modificado su archivo, nose puede realizar ninguna accion.</label>
                        </div>
                        
                    <?php } ?>
                </div>
            </div>
            <?php } ?>
          </div>

        </div>
        <!---termino uni-->

    </div>

    <div class="col-xxl-5 col-lg-4" >
      <div class="card card-shadow" id="widgetStackedBar" style="height: 50%">
        <div class="card-block p-0">
          <div class="p-30 h-150">
              <p  class="font-size-20 blue-grey-700">Contactar:</p>
              <p  class="font-size-15 blue-grey-700">Si tienes dudas sobre el proceso de tus archivos o por algun tipo dde estado de tus archivos contactanos por los siguientes medios:</p>
          </div>
          <ul class="list-group list-group-bordered" style="margin:15px">
            <li class="list-group-item">
              <a type="button" class="btn btn-block" style="background-color:#171A21;color:white;" href="tel:4422609090"><i class="icon fas fa-phone" aria-hidden="true"></i>Llamar</a>
            </li>
            <li class="list-group-item">
              <a type="button" class="btn btn-block" style="background-color:#25d366;color:white;" href="https://api.whatsapp.com/send?phone=524423645384&text=Dudas%20de%20la%20documentacion%20entregada" target="_blank"  rel="noopener" aria-label="Mandar mensaje whatsapp anglo"><i class="icon fab fa-whatsapp" aria-hidden="true"></i>WhatsApp</a>
            </li>
            <li class="list-group-item d-block d-sm-none">
              <a type="button" class="btn btn-block" style="background-color:#db4437;color:white;" href="mailto:study@anglolatinoedu.com?Subject=Dudas%20de%20la%20documentacion%20entregada"><i class="icon far fa-envelope" aria-hidden="true" target="_blank"></i>Correo</a>
              <span style="margin-left:20px">study@anglolatinoedu.com</span>
            </li>
            <li class="list-group-item d-none d-sm-block ">
              <a type="button" class="btn btn-block" style="background-color:#db4437;color:white;" href=" https://mail.google.com/mail/?view=cm&fs=1&to=study@anglolatinoedu.com&su=Dudas%20de%20la%20documentacion%20entregada&body=Mi%20nombre%20es:%20<?=$user->fullname;?>%20y%20Mi%20Correo%20es%20:<?=$user->email;?>" target="_blank"><i class="icon far fa-envelope" aria-hidden="true" target="_blank"></i>Correo</a>
              <span style="margin-left:20px">study@anglolatinoedu.com</span>
            </li>
            <li class="list-group-item d-none d-sm-block">
              <a type="button" class="btn btn-block social-facebook" href="https://www.facebook.com/AngloLatino/" target="_blank"><i class="icon bd-facebook" aria-hidden="true"></i>Facebook</a>
            </li> 
            <li class="list-group-item d-block d-sm-none">
              <a type="button" class="btn btn-block social-facebook" href="fb://page/6623204789"><i class="icon bd-facebook" aria-hidden="true"></i>Facebook</a>
            </li>        
          </ul>
        </div>
      </div>
    </div>
  </div>
    </div>
    
</div>
