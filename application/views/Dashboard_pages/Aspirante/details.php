<style>
.wrapper{
    width:70%;
    height:60px;
    position: absolute;
    left:50%;
    top:150%;
    transform: translate(-50%, -50%);
}
.circle{
    width:25px;
    height:25px;
    position: absolute;
    border-radius: 50%;
    background-color: red;
    left:15%;
    transform-origin: 50%;
    animation: circle .5s alternate infinite ease;
}

@keyframes circle{
    0%{
        top:60px;
        height:5px;
        border-radius: 50px 50px 25px 25px;
        transform: scaleX(1.7);
    }
    40%{
        height:20px;
        border-radius: 50%;
        transform: scaleX(1);
    }
    100%{
        top:0%;
    }
}
.circle:nth-child(2){
    left:45%;
    animation-delay: .2s;
}
.circle:nth-child(3){
    left:auto;
    right:15%;
    animation-delay: .3s;
}
.shadow{
    width:20px;
    height:4px;
    border-radius: 50%;
    background-color: rgba(0,0,0,.5);
    position: absolute;
    top:62px;
    transform-origin: 50%;
    z-index: -1;
    left:15%;
    filter: blur(1px);
    animation: shadow .5s alternate infinite ease;
}

@keyframes shadow{
    0%{
        transform: scaleX(1.5);
    }
    40%{
        transform: scaleX(1);
        opacity: .7;
    }
    100%{
        transform: scaleX(.2);
        opacity: .4;
    }
}
.shadow:nth-child(4){
    left: 45%;
    animation-delay: .2s
}
.shadow:nth-child(5){
    left:auto;
    right:15%;
    animation-delay: .3s;
}
.wrapper span{
    position: absolute;
    top:75px;
    font-family: 'Lato';
    font-size: 20px;
    letter-spacing: 12px;
    color: #fff;
    left:15%;
}
</style>

<div class="page">
   
    <!-- Page Content -->
    <div class="page-content container-fluid">
        <div class="row" data-plugin="matchHeight" data-by-row="true">
            <div class="col-xxl-3 col-xl-3">
                <div class="user-info card card-shadow text-center">
                    <div class="user-base card-block">
                        <a class="avatar img-bordered avatar-100" href="javascript:void(0)">
                            
                            <img src="<?=@ ($aspirante['photoUrl']!='NULL') ? $aspirante['photoUrl'] : base_url("resources/assets/Anglo/AngloLatino-sintexto.png") ;?>" alt="Imagen Perfil">
                        </a>
                        <br>
                        
                        <p class="user-job"></p>
                        <p class="userDatos"></p>
                        <p class="user-job"></p>
                        <p class="userDatos"></p>
                        <p class="user-job" style="font-weight: normal">Nombre:</p>
                        <p class="userDatos"><i class="icon fa-user nationicon " aria-hidden="true" style="color: red"></i> <?=@$aspirante['fullname'];?></p>

                        <p class="user-job" style="font-weight: normal">Correo:</p>
                        <p class="userDatos"><i class="icon wb-envelope emailicon " aria-hidden="true" style="color: red"></i> <?=@$aspirante['email'];?></p>
                        <p class="user-job" style="font-weight: normal">Teléfono:</p>
                        <p class="userDatos"><i class="icon fa-phone-square callicon" aria-hidden="true" style="color: red"></i> <?=@$aspirante['telefono'];?></p>
                        <p class="user-job" style="font-weight: normal">Ciudad:</p>
                        <p class="userDatos"><i class="icon fa-flag nationicon" aria-hidden="true" style="color: red"></i> <?=@$aspirante['ciudad'];?></p>
                        <p class="user-job" style="font-weight: normal">Género:</p>
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
                                <?php if(@$universidades) { ?>
                                    <?php for($i=0;$i<count(@$universidades);$i++) {?>
                                        <div class="card card-element" style="border: 0;">
                                            <img class="card-img-top w-full" src="<?=@$universidades[$i]['logoInstitucion'];?>" alt="Imagen Institucion" style="height: 120px;">
                                            <div class="card-block">
                                                <h4 class="card-title" align="center"><?=@$universidades[$i]['nombreInstitucion'];?>.</h4>
                               
                                            </div>
                                            <div class="clash-card__unit-stats clash-card__unit-stats--goblin clearfix">
                                                <div class="one-third">
                                                    <div class="stat"> </div>
                                                </div>
                                            </div>
                                            <?php if(!$universidades[$i]['numeroAceptacion']) {?>
                                                <div class="row">
                                                    <div class="alertSolicitud-<?=$universidades[$i]['idInstitucionAspiranteUniversidades']?>" style="margin: 10px;"></div>
                                                    <div class="col-12">
                                                        <div class="form-group form-material floating" data-plugin="formMaterial">
                                                            <input type="text" class="form-control empty" name="solicitud-<?=$universidades[$i]['idInstitucionAspiranteUniversidades']?>" placeholder="Numero de solicitud" id="solicitud-<?=$universidades[$i]['idInstitucionAspiranteUniversidades']?>">
                                                        </div>                                              
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group form-material floating" data-plugin="formMaterial">
                                                            <input type="date" class="form-control empty" name="fechaSolicitud-<?=$universidades[$i]['idInstitucionAspiranteUniversidades']?>" id="fechaSolicitud-<?=$universidades[$i]['idInstitucionAspiranteUniversidades']?>">
                                                        </div>                                              
                                                    </div>
                                                    <div class="col-12">
                                                        <button type="button" class="btn btn-outline btn-success btn-numeroAceptacion" id="<?=$universidades[$i]['idInstitucionAspiranteUniversidades']?>">Crear</button>
                                                    </div>
                                                </div>
                                            <?php }else { ?>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group form-material floating" data-plugin="formMaterial">
                                                            <label style="color: black;">Numero de aceptacion:</label>
                                                            <input type="text" class="form-control empty" value="<?=$universidades[$i]['numeroAceptacion'];?>" disabled>
                                                        </div>                                              
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group form-material floating" data-plugin="formMaterial">
                                                            <label style="color: black;">Fecha del numero de aceptación:</label>
                                                            <input type="date" class="form-control empty" value="<?=$universidades[$i]['fechaAceptacion'];?>" disabled>
                                                        </div>                                              
                                                    </div>
                                                </div>
                                            <?php } ?>
                                            
                                        </div>
                                    <?php }?>
                                    <?php }?>
                                    <?php if(@$preparatorias) { ?>
                                    <?php for($i=0;$i<count(@$preparatorias);$i++) {?>
                                        <div class="card card-element" style="border: 0;">
                                            <img class="card-img-top w-full" src="<?=@$preparatorias[$i]['logoInstitucion'];?>" alt="Imagen Institucion" style="height: 120px;">
                                            <div class="card-block">
                                                <h4 class="card-title" align="center"><?=@$preparatorias[$i]['nombreInstitucion'];?>.</h4>
                               
                                            </div>
                                            <div class="clash-card__unit-stats clash-card__unit-stats--goblin clearfix">
                                                <div class="one-third">
                                                    <div class="stat"> </div>
                                                </div>
                                            </div>
                                            <?php if(!$preparatorias[$i]['numeroAceptacion']) {?>
                                                <div class="row">
                                                    <div class="alertSolicitudPrepa-<?=$preparatorias[$i]['idInstitucionAspirantePreparatorias']?>" style="margin: 10px;"></div>
                                                    <div class="col-12">
                                                        <div class="form-group form-material floating" data-plugin="formMaterial">
                                                            <input type="text" class="form-control empty" name="numeroSolicitudPrepa-<?=$preparatorias[$i]['idInstitucionAspirantePreparatorias']?>" id="numeroSolicitudPrepa-<?=$preparatorias[$i]['idInstitucionAspirantePreparatorias']?>" placeholder="Numero de solicitud">
                                                        </div>                                              
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group form-material floating" data-plugin="formMaterial">
                                                            <input type="date" class="form-control empty" name="fechaSolicitudPrepa-<?=$preparatorias[$i]['idInstitucionAspirantePreparatorias']?>" id="fechaSolicitudPrepa-<?=$preparatorias[$i]['idInstitucionAspirantePreparatorias']?>">
                                                        </div>                                              
                                                    </div>
                                                    <div class="col-12">
                                                        <button type="button" class="btn btn-outline btn-success btn-numeroAceptacionPrepa" id="<?=$preparatorias[$i]['idInstitucionAspirantePreparatorias']?>">Crear</button>
                                                    </div>
                                                </div>
                                            <?php }else { ?>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group form-material floating" data-plugin="formMaterial">
                                                            <label style="color: black;">Numero de aceptacion:</label>
                                                            <input type="text" class="form-control empty" value="<?=$preparatorias[$i]['numeroAceptacion'];?>" disabled>
                                                        </div>                                              
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group form-material floating" data-plugin="formMaterial">
                                                            <label style="color: black;">Fecha del numero de aceptación:</label>
                                                            <input type="date" class="form-control empty" value="<?=$preparatorias[$i]['fechaAceptacion'];?>" disabled>
                                                        </div>                                              
                                                    </div>
                                                </div>
                                            <?php } ?>
                                            
                                        </div>
                                    <?php }?>
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
                            <div class="card" style="height: 70%">
                                <div class="card-block ">
                                    <h4 class="card-title mb-0">Status</h4>
                                    <div class="example-wrap">
                                        <div class="example">
                                            <ul class="list-group">
                                                <li class="list-group-item text-center">
                                                    <div class="row">
                                                        <div class="col-2" style="background-color: #db4437;height: 50%;">
                                                            <span style="color:white;font-size: 20px;"><?=$aspirante['statusAspirante']?></span>
                                                        </div>
                                                        <div class="col-10">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" value="Cambiar estatus" disabled>
                                                                <hr>
                                                                <select class="form-control" name="statusNew" id="statusNew">
                                                                    <option value="" disabled selected>Selecciona Una Opcion</option>
                                                                    <option value="2">2</option>
                                                                    <option value="2R">2R</option>
                                                                </select>
                                                            </div>
                                                            <button type="button" class="btn btn-success btn-changeStatus">Cambiar Estatus</button>
                                                        </div>
                                                    </div>
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
                                        <?php if(@$infoAspiranteUni){ ?>
                                        <div class="form-group">
                                            <label class="form-control-label" for="inputBasicEmail">Facultad:</label>
                                            <input type="text" class="form-control" value="<?=@$infoAspiranteUni['nombreFacultad']?>" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label" for="inputBasicEmail">Tipo de estudio:</label>
                                            <input type="text" class="form-control tipoDeEstudio" value="<?=@$infoAspiranteUni['estudiosAspiranteUniversidad']?>" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label" for="inputBasicEmail">Mes y año de ingreso:</label>
                                            <input type="text" class="form-control" value="<?=@$infoAspiranteUni['mes']?>, <?=@$infoAspiranteUni['anio']?>" disabled>
                                        </div>
                                        <?php } ?>
                                        <?php if(@$infoAspirantePrepa){ ?>
                                            <div class="form-group">
                                                <label class="form-control-label" for="inputBasicEmail">Tipo de estudio:</label>
                                                <input type="text" class="form-control" value="<?=@$infoAspirantePrepa['nombreTipoEstudio']?>" disabled>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label" for="inputBasicEmail">Tipo de alojamiento:</label>
                                                <input type="text" class="form-control tipoDeEstudio" value="<?=@$infoAspirantePrepa['nombreTipoAlojamiento']?>" disabled>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label" for="inputBasicEmail">Mes y año de ingreso:</label>
                                                <input type="text" class="form-control" value="<?=@$infoAspirantePrepa['mes']?>, <?=@$infoAspirantePrepa['anio']?>" disabled>
                                            </div>
                                        <?php } ?>
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
          <?php if(@!$documentos) { ?>
              <div class="card " style="margin-left:50px;">
              <img class="card-img-top img-fluid w-full" src="https://www.mygotoit.com/files/2020/01/file-2-resized.jpg" alt="Card image cap" style="max-width: 40%">
              <div class="card-block">
                <h4 class="card-title">No cuenta con documentos subidos.</h4>
                <p class="card-text">Comunicate con el aspirante.</p>
              </div>
            </div>
            <?php } ?>
          <div class="row">
            <?php for($i=0; $i< count(@$documentos);$i++) {?>
            <div class="col-lg-5 col-sm-12 col-md-12" style="margin: 30px;">
              <div class="card card-shadow text-center">
                <div class="card-block">
                  <a class="avatar avatar-lg" target="_blank" style="width: 110px;">
                    <img src="https://img.icons8.com/clouds/2x/pdf-2.png" alt="Icon PDF">
                  </a>
                  <?php if(@$documentos[$i]['descDocumento']) {?>
                    <div class="form-group">
                        <label>Descripción del problema:</label>
                        <br>
                        <label class="form-control-label" for="inputBasicFirstName"><?=@$documentos[$i]['descDocumento']?></label>
                    </div>
                  <?php } ?>
                  <h4 class="profile-user"><?=@$documentos[$i]['nameDocumento']?></h4>
                  <p class="profile-job">Fecha de subida: <?=@$documentos[$i]['creationDate']?></p>
                  <p class="profile-job" style="font-weight: normal;">Ubicacion de la carpeta en dropbox: </p><p>
                      <?=@$documentos[$i]['pathDisplayDocumento']?></p>
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
                        <div class="alert-<?=@$documentos[$i]['idReal']?>"></div>
                        <div class="form-group">
                            <label class="form-control-label" for="inputBasicFirstName" style="font-size: 16px;">Describe de forma detallada el problema que existe en el documento, que pueda ayudar al aspirante a saber que corregir.</label>
                            <textarea class="form-control" style="height: 200px;font-size: 15px" id="desc-<?=@$documentos[$i]['idReal']?>"></textarea>
                        </div>
                        <input type="hidden" id="path-<?=@$documentos[$i]['idReal']?>" value="<?=@$documentos[$i]['pathDisplayDocumento']?>">
                        <div class="form-group text-center">
                            <button type="button" class="btn btn-info btnAceptar" id="<?=@$documentos[$i]['idReal']?>">Aceptar</button>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <button type="button" class="btn btn-danger btnRechazar" id="<?=@$documentos[$i]['idReal']?>">Rechazar</button>
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
                    <?php if($documentos[$i]['statusDocumento']=="Aceptado") { ?>
                        <br>
                        <br>
                        <br>
                        <div class="form-group">
                            <label class="form-control-label" for="inputBasicFirstName" style="font-size: 18px;">El documento ya ha sido aceptado, nose puede realizar ninguna accion.</label>
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
      <div class="card card-shadow" id="widgetStackedBar">
        <div class="card-block p-0">
          <div class="p-30 h-150">
              <p  class="font-size-20 blue-grey-700">Contactar:</p>
              <p  class="font-size-15 blue-grey-700">Si quieres ponerte en contacto con el aspirante realiza algunas de las siguientes acciones:</p>
          </div>
          <ul class="list-group list-group-bordered" style="margin:15px">
            <li class="list-group-item">
              <a type="button" class="btn btn-block" style="background-color:#171A21;color:white;" href="tel:<?=@$aspirante['telefono'];?>"><i class="icon fas fa-phone" aria-hidden="true"></i>Llamar</a>
            </li>
            <li class="list-group-item">
              <a type="button" class="btn btn-block" style="background-color:#25d366;color:white;"  href="https://api.whatsapp.com/send?phone=<?=@$aspirante['telefono'];?>&text=Hola%20un%20gusto%20saludarte%20!%20<?=@$aspirante['fullname'];?>." target="_blank"  rel="noopener" aria-label="Mandar mensaje whatsapp anglo"><i class="icon fab fa-whatsapp" aria-hidden="true"></i>WhatsApp</a>
            </li>
            <li class="list-group-item">
              <a type="button" class="btn btn-block" style="background-color:#db4437;color:white;"><i class="icon far fa-envelope" aria-hidden="true" target="_blank"></i>Correo</a>
            </li>      
          </ul>
          <div class="p-30 h-150" style="margin-bottom: -10px;">
              <p  class="font-size-20 blue-grey-700">Archivos a subir:</p>
          </div>
          <input type="hidden" value="<?=$aspirante['aspirante']?>" name="aspiranteKey" id="aspiranteKey">
            <form style="margin: 20px;margin-top: -50px;" id="formUpload">
                <div class="alert"></div>
                <input type="file" data-plugin="dropify" id="archivo" name="archivo" data-errors-position="outside">  
                <button type="button" class="btn btn-success btn-block" id="btn-form"><i class="icon fa-send" aria-hidden="true"></i>Subir</button>            
            </form>
        <div class="p-30 h-150" style="margin-bottom: -30px;">
              <p  class="font-size-20 blue-grey-700">Archivos subidos al usuario:</p>
          </div>   
          <ul class="list-group " >
            <li class="list-group-item">
            <?php if($documentosAspirantes) { ?>
                <?php for($i=0;$i<count(@$documentosAspirantes);$i++) { ?>
                    <div class="row" style="margin-top: 15px;">
                        <div class="col-9">
                            <span style="font-size: 15px;color: #171A21;">                            
                                <?=@$documentosAspirantes[$i]['nameDocumento']?>
                            </span>
                        </div>
                        <div class="col-3">
                            <a type="button" class="btn btn-block" style="background-color:#171A21;color:white;" href="http://localhost/angloApi<?=@$documentosAspirantes[$i]['urlDA']?>" download="<?=@$documentosAspirantes[$i]['nameDocumento']?>"><i class="icon fa-download" aria-hidden="true"></i></a>
                        </div>
                        <div class="col-12">
                            <hr style="border-top: 3px solid red;">
                        </div>
                    </div>
                <?php } ?>
                
            <?php } ?>   
            </li>     
          </ul>
                 
        </div>
      </div>
    </div>
  </div>
    </div>
    
</div>


<div class="modal fade modal-fill-in" id="exampleFillIn" aria-hidden="false" aria-labelledby="exampleFillIn"
                    role="dialog" tabindex="-1">
  <div class="modal-dialog modal-simple">
    <div class="modal-content">
      <div class="modal-header">
       
        <h1 class="modal-title" id="exampleFillInModalTitle" style="color: red;">Tu documento se esta eliminando.</h1>
      </div>
      <div class="modal-body">
        <h4>Espera a que tu documento se elimine correctamente.Cuando este se elimine seras redirecionado a la pagina.</h4>
        
        <div class="wrapper">
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="shadow"></div>
        <div class="shadow"></div>
        <div class="shadow"></div>
        <span>Loading</span>
    </div>
      </div>
    </div>
  </div>
</div>