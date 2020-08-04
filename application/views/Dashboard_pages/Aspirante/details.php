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
                        <hr>
                        <?php if(@$universidades) { ?>
                            <div class="form-group">
                                <label class="form-control-label" for="inputBasicEmail">Añadir nueva institucion:</label>
                                <br>
                                <button type="button" class="btn btn-block btn-warning" data-target="#exampleNiftyFadeScale" data-toggle="modal">Añadir</button>                                        
                            </div>
                        <?php }else{ ;?>
                            <div class="form-group">
                                <label class="form-control-label" for="inputBasicEmail">Añadir nueva institucion:</label>
                                <br>
                                <button type="button" class="btn btn-block btn-warning" data-target="#exampleNiftyFadeScalePrepa" data-toggle="modal">Añadir</button>                                        
                            </div>
                        <?php } ;?>
                        <?php if(@$DeferalRequest) { ?>
                            <hr>
                            <div class="form-group">
                                <label class="form-control-label" for="inputBasicEmail">Ver defeat request:</label>
                                <br>
                                <button type="button" class="btn btn-block btn-warning" data-target="#defeatRequestModal" data-toggle="modal">Ver</button>                                        
                            </div>
                        <?php } ?>    
                        
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
                                            <div class="progress-bar progress-bar-success" style="width: <?=@$porcentaje;?>%;" role="progressbar"><?=@$porcentaje;?>%</div>
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
                                                            <input type="text" class="form-control empty" name="solicitud-<?=$universidades[$i]['idInstitucionAspiranteUniversidades']?>" placeholder="Numero de solicitud" id="solicitud-<?=$universidades[$i]['idInstitucionAspiranteUniversidades']?>" data-plugin="maxlength" maxlength="10">
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
                                                            <label style="color: black;">Numero de aplicacion:</label>
                                                            <input type="text" class="form-control empty" value="<?=$universidades[$i]['numeroAceptacion'];?>" disabled>
                                                        </div>                                              
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group form-material floating" data-plugin="formMaterial">
                                                            <label style="color: black;">Fecha del numero de aplicacion:</label>
                                                            <input type="text" class="form-control empty" value="<?=$universidades[$i]['fechaAceptacion'];?>" disabled>
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
                                                            <input type="text" class="form-control empty" name="numeroSolicitudPrepa-<?=$preparatorias[$i]['idInstitucionAspirantePreparatorias']?>" id="numeroSolicitudPrepa-<?=$preparatorias[$i]['idInstitucionAspirantePreparatorias']?>" placeholder="Numero de solicitud" data-plugin="maxlength" maxlength="10">
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
                                                            <label style="color: black;">Numero de aplicacion:</label>
                                                            <input type="text" class="form-control empty" value="<?=$preparatorias[$i]['numeroAceptacion'];?>" disabled>
                                                        </div>                                              
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group form-material floating" data-plugin="formMaterial">
                                                            <label style="color: black;">Fecha del numero de aplicacion:</label>
                                                            <input type="text" class="form-control empty" value="<?=$preparatorias[$i]['fechaAceptacion'];?>" disabled>
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
                                                    <?php if ($aspirante['statusAspirante']=='2') { ?>
                                                        <div class="row">
                                                            <div class="col-2" style="background-color: #db4437;height: 50%;">
                                                                <span style="color:white;font-size: 20px;"><?=$aspirante['statusAspirante']?></span>
                                                            </div>
                                                            <div class="col-10">
                                                                <div class="form-group">
                                                                    <textarea class="form-control" style="resize: none;" disabled><?php echo 'Ha subido todos sus archivos? (2R)'; ?> </textarea>
                                                                    <hr >
                                                                    <div class="row">
                                                                        <div class="col-6">
                                                                            <div class="radio-custom radio-danger">
                                                                                <input type="radio" id="radio1" name="radio" value="si">
                                                                                <label for="inputRadiosUnchecked">Si</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-6">
                                                                            <div class="radio-custom radio-danger">
                                                                                <input type="radio" id="radio2" name="radio" value="no">
                                                                                <label for="inputRadiosChecked">No</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                </div>
                                                                <button type="button" class="btn btn-success btn-changeStatus">Cambiar Estatus</button>
                                                            </div>
                                                        </div>
                                                    <?php }else if($aspirante['statusAspirante']=='4C') { ?>
                                                        <div class="row">
                                                            <div class="col-2" style="background-color: #db4437;height: 50%;">
                                                                <span style="color:white;font-size: 20px;"><?=$aspirante['statusAspirante']?></span>
                                                            </div>
                                                            <div class="col-10">
                                                                <div class="form-group">
                                                                    <textarea class="form-control" style="resize: none;" disabled><?php echo 'Ha subido todos sus archivos? (4U)'; ?> </textarea>
                                                                    <hr >
                                                                    <div class="row">
                                                                        <div class="col-6">
                                                                            <div class="radio-custom radio-danger">
                                                                                <input type="radio" id="radio1" name="radio4C" value="si">
                                                                                <label for="inputRadiosUnchecked">Si</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-6">
                                                                            <div class="radio-custom radio-danger">
                                                                                <input type="radio" id="radio2" name="radio4C" value="no">
                                                                                <label for="inputRadiosChecked">No</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                </div>
                                                                <button type="button" class="btn btn-success btn-changeStatus4U">Cambiar Estatus</button>
                                                            </div>
                                                        </div>
                                                    <?php }else { ?>
                                                        <div class="row">
                                                            <div class="col-10" style="background-color: #db4437;height: 50%;">
                                                                <span style="color:white;font-size: 20px;"><?=$aspirante['statusAspirante']?></span>
                                                            </div>
                                                        </div>
                                                    <?php } ?>
                                                   
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
                                        <?php if($aspirante['statusAspirante']=='4U' || $aspirante['statusAspirante']=='4C' || $aspirante['statusAspirante']=='D') { ?>
                                            <div class="form-group">
                                                <label class="form-control-label" for="inputBasicEmail">Cambiar status de 4 a D:</label>
                                                <br>
                                                <button type="button" class="btn btn-block btn-warning" data-target="#examplePositionSidebar" data-toggle="modal">Cambiar</button>                                        
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

    <?php if($aspirante['statusAspirante']=='3' || $aspirante['statusAspirante']=='4U' || $aspirante['statusAspirante']=='4C' || $aspirante['statusAspirante']=='D') { ?>
    <div class="row" data-plugin="matchHeight" data-by-row="true" style="margin-top: 30px;">
            <div class="col-xxl-9 col-lg-9">
      

            <div class="card card-shadow card-responsive" id="widgetLineareaColor">
          
          <p class="font-size-20 blue-grey-700" style="color: #B53F00;margin:30px;">Carta condicional o incondicional: &nbsp;</p>
          
            <div class="row">
                <?php if(@$universidadesOfertas) { ?>
                    <?php for($i=0; $i< count(@$universidadesOfertas);$i++) { ?>
                        <div class="col-lg-5 col-sm-12 col-md-12" style="margin: 30px;">
                            <div class="card card-shadow text-center">
                                <div class="card-block">
                                <img src="<?=@$universidadesOfertas[$i]['logoInstitucion']?>" style="max-width: 300px;">
                                
                                <h4 class="profile-user"><?=@$universidadesOfertas[$i]['nombreInstitucion']?></h4>
                                <p class="profile-job" style="font-weight: normal;">Numero de aplicacion: </p><p>
                                    <?=@$universidadesOfertas[$i]['numeroAceptacion']?></p>
                                    <p class="profile-job" style="font-weight: normal;">Fecha de aplicacion: </p><p>
                                    <?=@$universidadesOfertas[$i]['fechaAceptacion']?></p>
                                </div>
                                <div class="card-footer" style="background-color: #FFED78">
                                    <div class="row no-space">
                                    <div class="col-12">
                                    </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-lg-5 col-sm-12" style="margin: 30px;">
                            <?php if($universidadesOfertas[$i]['numeroAceptacion']) { ?>
                                <?php if(! $universidadesOfertas[$i]['idDocumento'] ) { ?>
                                    <label style="font-size: 16px;">Selecciona la casilla correspondiente:</label>
                                    <input type="hidden" id="aspiranteKey" value="<?=$aspirante['aspirante']?>">
                                    <input type="hidden" id="nameCarpeta" value="<?=$carpetaName?>">
                                    <input type="hidden" id="uniName" value="<?=$universidadesOfertas[$i]['nombreInstitucion']?>">

                                    <div class="alertOferta-<?=$universidadesOfertas[$i]['idInstitucionAspiranteUniversidades']?>"></div>
                                    <div class="row" style="margin-left: 10px;">
                                        <div class="radio-custom radio-danger" style="margin-right: 10px;">
                                            <input type="radio" id="radio" name="radio-<?=$universidadesOfertas[$i]['idInstitucionAspiranteUniversidades']?>" value="U">
                                            <label for="inputRadiosUnchecked">U</label>
                                        </div>
                                        <div class="radio-custom radio-danger">
                                            <input type="radio" id="radio2" name="radio-<?=$universidadesOfertas[$i]['idInstitucionAspiranteUniversidades']?>" value="C">
                                            <label for="inputRadiosChecked">C</label>
                                        </div>
                                    </div> 
                                    <hr>
                                    <form id="ofertaForm-<?=$universidadesOfertas[$i]['idInstitucionAspiranteUniversidades']?>">
                                        <div class="ofertaFormAlert-<?=$universidadesOfertas[$i]['idInstitucionAspiranteUniversidades']?>">
                                        </div>
                                        <label style="font-size: 16px;">Documento en PDF</label>
                                        <input type="file" data-plugin="dropify" id="ofertaCU" name="ofertaCU" data-allowed-file-extensions="pdf" data-errors-position="outside">  
                                        <button type="button" class="btn btn-block btn-info btn-ofertaCU" style="margin-top:10%;margin-bottom: 10%;" id="<?=$universidadesOfertas[$i]['idInstitucionAspiranteUniversidades']?>">Subir</button>
                                    </form>
                                <?php }else { ?>
                                    <?php if ($universidadesOfertas[$i]['statusAspirante']) { ?>
                                        <div class="example-wrap">
                                            <h4 class="example-title">Nombre del documento:</h4>
                                            <input type="text" class="form-control" id="inputDisabled"  disabled="" value="<?=$universidadesOfertas[$i]['nameDocumento']?>" style="color: black;background-color: plum;font-size: 15px;">
                                        </div>
                                        <div class="example-wrap" style="margin-top: -40px;">
                                            <h4 class="example-title">Ubicacion del documento:</h4>
                                            <input type="text" class="form-control" id="inputDisabled"  disabled="" value="<?=$universidadesOfertas[$i]['pathDisplayDocumento']?>" style="color: black;background-color: plum;font-size: 15px;">
                                        </div>
                                        <div class="example-wrap"  style="margin-top: -40px;">
                                            <h4 class="example-title">Fecha de creacion del documento:</h4>
                                            <input type="text" class="form-control" id="inputDisabled"  disabled="" value="<?=$universidadesOfertas[$i]['creationDate']?>" style="color: black;background-color: plum;font-size: 15px;">
                                        </div>
                                        <div class="example-wrap"  style="margin-top: -40px;">
                                            <h4 class="example-title">Estatus de la oferta:</h4>
                                            <input type="text" class="form-control" id="inputDisabled"  disabled="" value="<?=$universidadesOfertas[$i]['statusAspirante']?>" style="color: black;background-color: plum;font-size: 15px;">
                                        </div>
                                    <?php }else { ?>
                                        <label style="font-size: 16px;">Selecciona la casilla correspondiente:</label>
                                        <hr>
                                        <input type="hidden" id="idReal-<?=$universidadesOfertas[$i]['idInstitucionAspiranteUniversidades']?>" value="<?=$universidadesOfertas[$i]['idReal']?>">
                                        <div class="alertOferta4-<?=$universidadesOfertas[$i]['idInstitucionAspiranteUniversidades']?>"></div>

                                        <div class="row" style="margin-left: 10px;">
                                            <div class="radio-custom radio-danger" style="margin-right: 10px;">
                                                <input type="radio" id="radio" name="radioOnly-<?=$universidadesOfertas[$i]['idInstitucionAspiranteUniversidades']?>" value="U">
                                                <label for="inputRadiosUnchecked">U</label>
                                            </div>
                                            <div class="radio-custom radio-danger">
                                                <input type="radio" id="radio2" name="radioOnly-<?=$universidadesOfertas[$i]['idInstitucionAspiranteUniversidades']?>" value="C">
                                                <label for="inputRadiosChecked">C</label>
                                            </div>
                                        </div> 
                                        <div class="row" style="margin: 10px;">
                                            <div class="col-6">
                                                <button type="button" class="btn btn-block btn-success btn-ChangeStatusNew" style="margin-top:10%;margin-bottom: 10%;" id="<?=$universidadesOfertas[$i]['idInstitucionAspiranteUniversidades']?>">Aceptar</button>
                                            </div>
                                            <div class="col-6">
                                                <button type="button" class="btn btn-block btn-danger btn-recahzarStatusNew" style="margin-top:10%;margin-bottom: 10%;" id="<?=$universidadesOfertas[$i]['idInstitucionAspiranteUniversidades']?>">Rechazar</button>

                                            </div>
                                        </div>
                                        <hr>
                                        <div class="example-wrap">
                                            <h4 class="example-title">Nombre del documento:</h4>
                                            <input type="text" class="form-control" id="inputDisabled"  disabled="" value="<?=$universidadesOfertas[$i]['nameDocumento']?>" style="color: black;background-color: plum;font-size: 15px;">
                                        </div>
                                        <div class="example-wrap" style="margin-top: -40px;">
                                            <h4 class="example-title">Ubicacion del documento:</h4>
                                            <input type="text" class="form-control" disabled="" value="<?=$universidadesOfertas[$i]['pathDisplayDocumento']?>" style="color: black;background-color: plum;font-size: 15px;" id="pathNew-<?=$universidadesOfertas[$i]['idInstitucionAspiranteUniversidades']?>">
                                        </div>
                                        <div class="example-wrap"  style="margin-top: -40px;">
                                            <h4 class="example-title">Fecha de creacion del documento:</h4>
                                            <input type="text" class="form-control" id="inputDisabled"  disabled="" value="<?=$universidadesOfertas[$i]['creationDate']?>" style="color: black;background-color: plum;font-size: 15px;">
                                        </div>

                                    <?php }?>
                                    
                                <?php } ?>
                            <?php } ?> 
                        </div>
                    <?php } ?>
                <?php } ?>
            </div>
            <div class="row">
                <?php if(@$preparatoriasOfertas) { ?>
                    <?php for($i=0; $i< count(@$preparatoriasOfertas);$i++) { ?>
                        <div class="col-lg-5 col-sm-12 col-md-12" style="margin: 30px;">
                            <div class="card card-shadow text-center">
                                <div class="card-block">
                                <img src="<?=@$preparatoriasOfertas[$i]['logoInstitucion']?>" style="max-width: 300px;">
                                
                                <h4 class="profile-user"><?=@$preparatoriasOfertas[$i]['nombreInstitucion']?></h4>
                                <p class="profile-job" style="font-weight: normal;">Numero de aplicacion: </p><p>
                                    <?=@$preparatoriasOfertas[$i]['numeroAceptacion']?></p>
                                    <p class="profile-job" style="font-weight: normal;">Fecha de aplicacion: </p><p>
                                    <?=@$preparatoriasOfertas[$i]['fechaAceptacion']?></p>
                                </div>
                                <div class="card-footer" style="background-color: #FFED78">
                                    <div class="row no-space">
                                    <div class="col-12">
                                    </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-lg-5 col-sm-12" style="margin: 30px;">
                            <?php if($preparatoriasOfertas[$i]['numeroAceptacion']) { ?>
                                <?php if(! $preparatoriasOfertas[$i]['idDocumento'] ) { ?>
                                    <label style="font-size: 16px;">Selecciona la casilla correspondiente:</label>
                                    <input type="hidden" id="aspiranteKeyPrepa" value="<?=$aspirante['aspirante']?>">
                                    <input type="hidden" id="nameCarpetaPrepa" value="<?=$carpetaName?>">
                                    <input type="hidden" id="uniNamePrepa" value="<?=$preparatoriasOfertas[$i]['nombreInstitucion']?>">
                                    <div class="alertOfertaPrepa-<?=$preparatoriasOfertas[$i]['idInstitucionAspirantePreparatorias']?>"></div>
                                    <div class="row" style="margin-left: 10px;">
                                        <div class="radio-custom radio-danger" style="margin-right: 10px;">
                                            <input type="radio" id="radio3" name="radioPrepa-<?=$preparatoriasOfertas[$i]['idInstitucionAspirantePreparatorias']?>" value="U">
                                            <label for="inputRadiosUnchecked">U</label>
                                        </div>
                                        <div class="radio-custom radio-danger">
                                            <input type="radio" id="radio4" name="radioPrepa-<?=$preparatoriasOfertas[$i]['idInstitucionAspirantePreparatorias']?>" value="C">
                                            <label for="inputRadiosChecked">C</label>
                                        </div>
                                    </div> 
                                    <hr>
                                    <form id="ofertaFormPrepa-<?=$preparatoriasOfertas[$i]['idInstitucionAspirantePreparatorias']?>">
                                        <div class="ofertaFormAlertPrepa-<?=$preparatoriasOfertas[$i]['idInstitucionAspirantePreparatorias']?>">
                                        </div>
                                        <label style="font-size: 16px;">Documento en PDF</label>
                                        <input type="file" data-plugin="dropify" id="ofertaCUPrepa" name="ofertaCUPrepa" data-allowed-file-extensions="pdf" data-errors-position="outside">  
                                        <button type="button" class="btn btn-block btn-info btn-ofertaCUPrepa" style="margin-top:10%;margin-bottom: 10%;" id="<?=$preparatoriasOfertas[$i]['idInstitucionAspirantePreparatorias']?>">Subir</button>
                                    </form>
                                <?php }else { ?>
                                    <?php if ($preparatoriasOfertas[$i]['statusAspirante']) { ?>
                                        <div class="example-wrap">
                                            <h4 class="example-title">Nombre del documento:</h4>
                                            <input type="text" class="form-control" id="inputDisabled"  disabled="" value="<?=$preparatoriasOfertas[$i]['nameDocumento']?>" style="color: black;background-color: plum;font-size: 15px;">
                                        </div>
                                        <div class="example-wrap" style="margin-top: -40px;">
                                            <h4 class="example-title">Ubicacion del documento:</h4>
                                            <input type="text" class="form-control" id="inputDisabled"  disabled="" value="<?=$preparatoriasOfertas[$i]['pathDisplayDocumento']?>" style="color: black;background-color: plum;font-size: 15px;">
                                        </div>
                                        <div class="example-wrap"  style="margin-top: -40px;">
                                            <h4 class="example-title">Fecha de creacion del documento:</h4>
                                            <input type="text" class="form-control" id="inputDisabled"  disabled="" value="<?=$preparatoriasOfertas[$i]['creationDate']?>" style="color: black;background-color: plum;font-size: 15px;">
                                        </div>
                                        <div class="example-wrap"  style="margin-top: -40px;">
                                            <h4 class="example-title">Estatus de la oferta:</h4>
                                            <input type="text" class="form-control" id="inputDisabled"  disabled="" value="<?=$preparatoriasOfertas[$i]['statusAspirante']?>" style="color: black;background-color: plum;font-size: 15px;">
                                        </div>
                                    <?php }else { ?>
                                        <label style="font-size: 16px;">Selecciona la casilla correspondiente:</label>
                                        <hr>
                                        <input type="hidden" id="idReal-<?=$preparatoriasOfertas[$i]['idInstitucionAspirantePreparatorias']?>" value="<?=$preparatoriasOfertas[$i]['idReal']?>">
                                        <div class="alertOferta4-<?=$preparatoriasOfertas[$i]['idInstitucionAspirantePreparatorias']?>"></div>

                                        <div class="row" style="margin-left: 10px;">
                                            <div class="radio-custom radio-danger" style="margin-right: 10px;">
                                                <input type="radio" id="radio" name="radioOnlyPrepa-<?=$preparatoriasOfertas[$i]['idInstitucionAspirantePreparatorias']?>" value="U">
                                                <label for="inputRadiosUnchecked">U</label>
                                            </div>
                                            <div class="radio-custom radio-danger">
                                                <input type="radio" id="radio2" name="radioOnlyPrepa-<?=$preparatoriasOfertas[$i]['idInstitucionAspirantePreparatorias']?>" value="C">
                                                <label for="inputRadiosChecked">C</label>
                                            </div>
                                        </div> 
                                        <div class="row" style="margin: 10px;">
                                            <div class="col-6">
                                                <button type="button" class="btn btn-block btn-success btn-ChangeStatusPrepa" style="margin-top:10%;margin-bottom: 10%;" id="<?=$preparatoriasOfertas[$i]['idInstitucionAspirantePreparatorias']?>">Aceptar</button>
                                            </div>
                                            <div class="col-6">
                                                <button type="button" class="btn btn-block btn-danger btn-recahzarStatusNewPrepa" style="margin-top:10%;margin-bottom: 10%;" id="<?=$preparatoriasOfertas[$i]['idInstitucionAspirantePreparatorias']?>">Rechazar</button>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="example-wrap">
                                            <h4 class="example-title">Nombre del documento:</h4>
                                            <input type="text" class="form-control" id="inputDisabled"  disabled="" value="<?=$preparatoriasOfertas[$i]['nameDocumento']?>" style="color: black;background-color: plum;font-size: 15px;">
                                        </div>
                                        <div class="example-wrap" style="margin-top: -40px;">
                                            <h4 class="example-title">Ubicacion del documento:</h4>
                                            <input type="text" class="form-control"  disabled="" value="<?=$preparatoriasOfertas[$i]['pathDisplayDocumento']?>" style="color: black;background-color: plum;font-size: 15px;"  id="pathNewPrepa-<?=$preparatoriasOfertas[$i]['idInstitucionAspirantePreparatorias']?>">
                                        </div>
                                        <div class="example-wrap"  style="margin-top: -40px;">
                                            <h4 class="example-title">Fecha de creacion del documento:</h4>
                                            <input type="text" class="form-control" id="inputDisabled"  disabled="" value="<?=$preparatoriasOfertas[$i]['creationDate']?>" style="color: black;background-color: plum;font-size: 15px;">
                                        </div>

                                    <?php }?>
                                <?php } ?>
                            <?php } ?> 
                        </div>
                    <?php } ?>
                <?php } ?>
            </div>

        </div>
        <!---termino uni-->

        </div>

            <div class="col-xxl-3 col-lg-3">
                
            <input type="hidden" value="<?=$aspirante['aspirante']?>" name="aspiranteKeyATAS" id="aspiranteKeyATAS">

            <div class="card card-shadow card-responsive" id="widgetLineareaColor">
            <?php if (@$infoAspiranteUni['estudiosAspiranteUniversidad']=='PhD' || @$infoAspiranteUni['estudiosAspiranteUniversidad']=='Masters') { ?>

                <?php if ($ATASSELECION) { ?>
                    <p class="font-size-20 blue-grey-700" style="color: #B53F00;margin:30px;">ATAS: &nbsp;</p>
                    <p style="margin-left:30px;">Aplica para ATAS: &nbsp;</p>
                    <div class="row" style="margin-left: 10PX;">
                        <div class="col-6">
                            <div class="radio-custom radio-danger">
                                <input type="radio" id="radio1" name="radiono" value="si" <?php echo ($ATASSELECION['aplicaATAS'] == 'Si') ? 'checked' : '';  ?> disabled>
                                <label for="inputRadiosUnchecked">SI</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="radio-custom radio-danger">
                                <input type="radio" id="radio2" name="radiosi" value="no" disabled <?php echo ($ATASSELECION['aplicaATAS'] == 'No') ? 'checked' : '';  ?>>
                                <label for="inputRadiosChecked">NO</label>
                            </div>
                        </div>
                <?php }else { ?>
                    <p class="font-size-20 blue-grey-700" style="color: #B53F00;margin:30px;">ATAS: &nbsp;</p>
                    <p style="margin-left:30px;">Aplica para ATAS: &nbsp;</p>
                    <div class="row" style="margin-left: 10PX;">
                        <div class="col-6">
                            <div class="radio-custom radio-danger">
                                <input type="radio" id="radio1" name="radioATAS" value="si">
                                <label for="inputRadiosUnchecked">SI</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="radio-custom radio-danger">
                                <input type="radio" id="radio2" name="radioATAS" value="no">
                                <label for="inputRadiosChecked">NO</label>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-primary btn-putATAS" style="margin: 10px;margin-left: 20px;margin-right: 20px;" id="">Aplicar</button>

                <?php } ?>
                
            </div>
        <!---termino uni-->

        <?php } ?>


        <?php if ($BECASSELECION) { ?>
                  <div class="card-body">
                    <h5 class="card-title">Aplica para una beca ?</h5>
                    <div class="row" style="margin-left: 10PX;">
                          <div class="col-6">
                              <div class="radio-custom radio-danger">
                                  <input type="radio" id="radio1" <?php echo ($BECASSELECION['aplicaBecas'] == 'Si') ? 'checked' : '';  ?> disabled>
                                  <label for="inputRadiosUnchecked">SI</label>
                              </div>
                          </div>
                          <div class="col-6">
                              <div class="radio-custom radio-danger">
                                  <input type="radio" id="radio2" <?php echo ($BECASSELECION['aplicaBecas'] == 'No') ? 'checked' : '';  ?> disabled>
                                  <label for="inputRadiosChecked">NO</label>
                              </div>
                          </div>
                      </div>
                      <div class="row" style="margin-left: 10PX;">
                          <?php if ($BECASSELECION['aplicaBecas'] == 'Si') { ?>
                            <button type="button" class="btn btn-block btn-info" style="max-width: 250px;margin-top: 20px;" data-toggle="modal" data-target="#exampleModal">Info de documentos</button>
                            <button type="button" class="btn btn-block btn-success" style="max-width: 250px;margin-top: 20px;" data-toggle="modal" data-target="#exampleModal2">Info de becas aplicables</button>
                          <?php } ?>
                      </div>
                  </div>
        <?php }else { ?>
            <input type="hidden" value="<?=$aspirante['aspirante']?>" name="becasAspiranteKey" id="becasAspiranteKey">
            <div class="becaAlert"></div>

            <div class="card-body">
            <h5 class="card-title">Aplica para una beca ?</h5>
            <div class="row" style="margin-left: 10PX;">
                    <div class="col-6">
                        <div class="radio-custom radio-danger">
                            <input type="radio" id="radio1" name="radioBecas" value="si">
                            <label for="inputRadiosUnchecked">SI</label>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="radio-custom radio-danger">
                            <input type="radio" id="radio2" name="radioBecas" value="no">
                            <label for="inputRadiosChecked">NO</label>
                        </div>
                    </div>
                </div>
            <br>
            <a type="button" class="btn btn-primary btn-putBecas" style="color: white;">Aplicar</a>
            </div>
        <?php } ?> 
        </div>

        
    
    </div>
    <?php } ?>

    <?php if($aspirante['statusAspirante']=='4U' || $aspirante['statusAspirante']=='4C' || $aspirante['statusAspirante']=='D') {?>
    <div class="row" data-plugin="matchHeight" data-by-row="true" style="margin-top: 10px;">
        <div class="col-xxl-7 col-lg-8">

      <!--Eligio universidad-->
        <div class="card card-shadow card-responsive" id="widgetLineareaColor">
          
          <p class="font-size-20 blue-grey-700" style="color: #B53F00;margin:30px;">Documentos para la aplicacion de la visa: &nbsp;</p>
          
          <div class="row">
            <?php if ($aplicaionVisa) { ?>
                <?php for($i=0; $i< count(@$aplicaionVisa);$i++) { ?>
                    <input type="hidden" value="<?=$aplicaionVisa[$i]['pathDisplayDocumento']?>" id="ubicacionAplicacion-<?=@$aplicaionVisa[$i]['idReal']?>">
                    <div class="col-lg-5 col-sm-12 col-md-12" style="margin: 30px;">
                        <div class="card card-shadow text-center">
                            <div class="card-block">
                            <a class="avatar avatar-lg" target="_blank" style="width: 110px;">
                                <img src="https://img.icons8.com/clouds/2x/pdf-2.png" alt="Icon PDF">
                            </a>
                            <h4 class="profile-user"><?=@$aplicaionVisa[$i]['nameDocumento']?></h4>
                            <p class="profile-job">Fecha de subida: <?=@$aplicaionVisa[$i]['creationDate']?></p>
                            <p class="profile-job" style="font-weight: normal;">Ubicacion de la carpeta en dropbox: </p><p>
                                <?=@$aplicaionVisa[$i]['pathDisplayDocumento']?></p>
                            </div>
                            <?php if ($aplicaionVisa[$i]['statusDocumento']!='Aceptado') { ?>
                                <div class="form-group text-center">
                                    <button type="button" class="btn btn-info btnAceptarAplicacion" id="<?=@$aplicaionVisa[$i]['idReal']?>">Aceptar</button>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <button type="button" class="btn btn-danger btnRechazarAplicacion" id="<?=@$aplicaionVisa[$i]['idReal']?>">Rechazar</button>
                                </div>
                            <?php } ?>
                            
                            <?php if(@$aplicaionVisa[$i]['statusDocumento']=="Pendiente") { ;?>
                            <div class="card-footer" style="background-color: #FFED78">
                                <div class="row no-space">
                                <div class="col-12">
                                    <span style="color: black"><?=$aplicaionVisa[$i]['statusDocumento']?></span>
                                </div>
                                </div>
                            </div>
                            <?php } else if (@$aplicaionVisa[$i]['statusDocumento']=="Rechazado") { ?>
                            <div class="card-footer" style="background-color: #FF666B">
                                <div class="row no-space">
                                <div class="col-12">
                                    <span style="color: white"><?=$aplicaionVisa[$i]['statusDocumento']?></span>
                                </div>
                                </div>
                            </div>
                            <?php } else if (@$aplicaionVisa[$i]['statusDocumento']=="Aceptado") { ?>
                            <div class="card-footer" style="background-color: #28D17C">
                                <div class="row no-space">
                                <div class="col-12">
                                    <span style="color: white"><?=$aplicaionVisa[$i]['statusDocumento']?></span>
                                </div>
                                </div>
                            </div>
                            <?php } ;?>
                        </div>
                    </div>
                    
                 <?php } ?>
            <?php } ?>
            
          </div>
            
          <p class="font-size-20 blue-grey-700" style="color: #B53F00;margin:30px;">Visa: &nbsp;</p>
          <div class="row">
            <?php if ($visa) { ?>
                <?php for($i=0; $i< count(@$visa);$i++) {?>
            <div class="col-lg-5 col-sm-12 col-md-12" style="margin: 30px;">
              <div class="card card-shadow text-center">
                <div class="card-block">
                  <a class="avatar avatar-lg" target="_blank" style="width: 110px;">
                    <img src="https://img.icons8.com/clouds/2x/pdf-2.png" alt="Icon PDF">
                  </a>
                  <?php if(@$visa[$i]['descDocumento']) {?>
                    <div class="form-group">
                        <label>Descripción del problema:</label>
                        <br>
                        <label class="form-control-label" for="inputBasicFirstName"><?=@$visa[$i]['descDocumento']?></label>
                    </div>
                  <?php } ?>
                  <h4 class="profile-user"><?=@$visa[$i]['nameDocumento']?></h4>
                  <p class="profile-job">Fecha de subida: <?=@$visa[$i]['creationDate']?></p>
                  <p class="profile-job" style="font-weight: normal;">Ubicacion de la carpeta en dropbox: </p><p>
                      <?=@$visa[$i]['pathDisplayDocumento']?></p>
                </div>
                <?php if(@$visa[$i]['statusDocumento']=="Pendiente") { ;?>
                  <div class="card-footer" style="background-color: #FFED78">
                    <div class="row no-space">
                      <div class="col-12">
                        <span style="color: black"><?=$visa[$i]['statusDocumento']?></span>
                      </div>
                    </div>
                  </div>
                <?php } else if (@$visa[$i]['statusDocumento']=="Rechazado") { ?>
                  <div class="card-footer" style="background-color: #FF666B">
                    <div class="row no-space">
                      <div class="col-12">
                        <span style="color: white"><?=$visa[$i]['statusDocumento']?></span>
                      </div>
                    </div>
                  </div>
                <?php } else if (@$documentos[$i]['statusDocumento']=="Aceptado") { ?>
                  <div class="card-footer" style="background-color: #28D17C">
                    <div class="row no-space">
                      <div class="col-12">
                        <span style="color: white"><?=$visa[$i]['statusDocumento']?></span>
                      </div>
                    </div>
                  </div>
                <?php } ;?>
              </div>
            </div>
            <div class="col-lg-5 col-sm-12" style="margin: 30px;"> 
                <div class="card card-shadow " style="border: 0">
                    <?php if($visa[$i]['statusDocumento']=="Pendiente") { ?>
                        <div class="alertVisa-<?=@$visa[$i]['idReal']?>"></div>
                        <div class="form-group">
                            <label class="form-control-label" for="inputBasicFirstName" style="font-size: 16px;">Describe de forma detallada el problema que existe en el documento, que pueda ayudar al aspirante a saber que corregir.</label>
                            <textarea class="form-control" style="height: 200px;font-size: 15px" id="descVisa-<?=@$visa[$i]['idReal']?>"></textarea>
                        </div>
                        <input type="hidden" id="pathVisa-<?=@$visa[$i]['idReal']?>" value="<?=@$visa[$i]['pathDisplayDocumento']?>">
                        <div class="form-group text-center">
                            <button type="button" class="btn btn-info btnAceptarVisa" id="<?=@$visa[$i]['idReal']?>" name="<?=@$visa[$i]['nameDocumento']?>">Aceptar</button>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <button type="button" class="btn btn-danger btnRechazarVisa" id="<?=@$visa[$i]['idReal']?>">Rechazar</button>
                        </div>
                    <?php } ?>
                    <?php if($visa[$i]['statusDocumento']=="Rechazado") { ?>
                        <br>
                        <br>
                        <br>
                        <div class="form-group">
                            <label class="form-control-label" for="inputBasicFirstName" style="font-size: 18px;">El aspirante aun no ha modificado su archivo, nose puede realizar ninguna accion.</label>
                        </div>
                        
                    <?php } ?>
                    <?php if($visa[$i]['statusDocumento']=="Aceptado") { ?>
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
            <?php } ?>
            
          </div>
        </div>
        <!---termino uni-->

        

    </div>
    

    <div class="col-xxl-5 col-lg-4" >
      <div class="card card-shadow" id="widgetStackedBar">
        <div class="card-block p-0">
            <div class="p-30 h-150">
                <p  class="font-size-20 blue-grey-700">Documentos necesarios para la aplicacion de la visa:</p>
                <p  class="font-size-15 blue-grey-700">despues de revisar los documentos subidos por el aspirante marca de cada una de los documentos siguientes:</p>
            </div>
            <?php if ($necesidadesBecas) { ?>
                <?php for ($i=0; $i < count($necesidadesBecas); $i++) { ?>
                    <div class="row" style="margin-right: 10px;margin-top: 10px;">
                        <div class="col-12">
                            <?php if ($necesidadesBecas[$i]['statusNB']=='Pendiente') { ?>
                                <div class="alert dark alert-icon alert-primary alert-dismissible" role="alert" style="margin-left: 30px;margin-right: 30px;font-size: 17px;">
                                    <span class="badge badge-dark"><?=$necesidadesBecas[$i]['statusNB']?></span>
                                    <i class="icon wb-bell" aria-hidden="true" style="font-size: 17px;"></i> <?=$necesidadesBecas[$i]['idNB']?>. <?=$necesidadesBecas[$i]['descNB']?>.
                                </div>
                                <?php }elseif ($necesidadesBecas[$i]['statusNB']=='Aceptado') { ?>
                                <div class="alert dark alert-icon alert-success alert-dismissible" role="alert" style="margin-left: 30px;margin-right: 30px;font-size: 17px;">
                                    <span class="badge badge-dark"><?=$necesidadesBecas[$i]['statusNB']?></span>
                                    <i class="icon wb-check" aria-hidden="true" style="font-size: 17px;"></i> <?=$necesidadesBecas[$i]['idNB']?>. <?=$necesidadesBecas[$i]['descNB']?>.
                                </div>
                                <?php }else{ ?>
                                <div class="alert dark alert-icon alert-danger alert-dismissible" role="alert" style="margin-left: 30px;margin-right: 30px;font-size: 17px;">
                                    <span class="badge badge-dark"><?=$necesidadesBecas[$i]['statusNB']?></span>
                                    <i class="icon wb-close" aria-hidden="true" style="font-size: 17px;"></i> <?=$necesidadesBecas[$i]['idNB']?>. <?=$necesidadesBecas[$i]['descNB']?>.
                                </div>
                            <?php } ?>
                        </div>
                        <div class="col-12">
                            <div class="row" style="margin: 10px;">
                                <div class="col-4">
                                <button type="button" class="btn btn-block btn-success btn-aceptarNB" id="<?=$necesidadesBecas[$i]['idNBAAspirante']?>">Aceptar</button>

                                </div>
                                <div class="col-4">
                                <button type="button" class="btn btn-block btn-danger btn-rechazarNB" id="<?=$necesidadesBecas[$i]['idNBAAspirante']?>">Rechazar</button>

                                </div>
                                <div class="col-4">
                                <button type="button" class="btn btn-block btn-warning btn-pendienteNB" id="<?=$necesidadesBecas[$i]['idNBAAspirante']?>">Pendiente</button>

                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                  <?php } ?>
            <?php } ?>
                 
        </div>
      </div>
    </div>
  </div>
  <?php } ?>

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
                        <?php if ($documentos[$i]['nameDocumento']=='Boleta.pdf') { ?>
                            <div class="row">
                                <div class="col-6">
                                    <div class="radio-custom radio-danger">
                                        <input type="radio" id="radio1" name="radioBoleta" value="si">
                                        <label for="inputRadiosUnchecked">Final</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="radio-custom radio-danger">
                                        <input type="radio" id="radio2" name="radioBoleta" value="no">
                                        <label for="inputRadiosChecked">Incompleta</label>
                                    </div>
                                </div>
                            </div>
                            <br>
                        <?php } ?>
                        <input type="hidden" id="path-<?=@$documentos[$i]['idReal']?>" value="<?=@$documentos[$i]['pathDisplayDocumento']?>">
                        <div class="form-group text-center">
                            <button type="button" class="btn btn-info btnAceptar" id="<?=@$documentos[$i]['idReal']?>" name="<?=@$documentos[$i]['nameDocumento']?>">Aceptar</button>
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
                        <?php if ($documentos[$i]['nameDocumento']=='Boleta.pdf') { ?>
                            <div class="form-group">
                                <label class="form-control-label" for="inputBasicFirstName" style="font-size: 18px;color: black;">La boleta es <?=$documentos[$i]['BoletaTipo']?>.</label>
                            </div>
                            <br>
                        <?php } ?>
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
              <p  class="font-size-20 blue-grey-700">Archivos subidos al aspirante:</p>
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

<div class="modal fade modal-fill-in" id="uploadFileLeyenda" aria-hidden="false" aria-labelledby="exampleFillIn"
                    role="dialog" tabindex="-1">
  <div class="modal-dialog modal-simple">
    <div class="modal-content">
      <div class="modal-header">
       
        <h1 class="modal-title" id="exampleFillInModalTitle" style="color: red;">Tu documento se esta subiendo.</h1>
      </div>
      <div class="modal-body">
        <h4>Espera a que tu documento se suba correctamente.Cuando este se suba seras redirecionado a la pagina.</h4>
        
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

<div class="modal fade" id="examplePositionSidebar" aria-labelledby="examplePositionSidebar" role="dialog" tabindex="-1" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-simple modal-sidebar modal-sm">
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title">Cambiar estatus a D</h4>
        <input type="hidden" id="aspiranteKeyD" value="<?=$aspirante['aspirante']?>">
        <input type="hidden" id="nameCarpetaD" value="<?=$carpetaName?>">
        </div>
        <div class="modal-body">
            <div class="row" style="margin: 10px;">
                <div class="col-sm-12 col-md-12">
                    <input type="hidden" name="idDocumentoOferta" id="idDocumentoOferta">
                    <?php if (@$universidadesOfertas) { ?>
                        <select class="form-control" name="institucionesDU" id="institucionesDU" data-plugin="select2">
                            <option value="" disabled selected>Elige una opcion</option>
                            <?php for ($i=0; $i < count($universidadesOfertas); $i++) {  ;?>
                                <option value="<?=$universidadesOfertas[$i]['idInstitucionAspiranteUniversidades']?>"><?=$universidadesOfertas[$i]['nombreInstitucion'];?></option>
                            <?php } ;?>
                        </select>
                    <?php }else{ ?>
                        <select class="form-control" name="institucionesDP" id="institucionesDP" data-plugin="select2">
                            <option value="" disabled selected>Elige una opcion</option>
                            <?php for ($i=0; $i < count($preparatorias); $i++) {  ;?>
                                <option value="<?=$preparatorias[$i]['idInstitucionAspiranteUniversidades']?>"><?=$preparatorias[$i]['nombreInstitucion'];?></option>
                            <?php } ;?>
                        </select>
                    <?php } ?>
                    <input type="hidden" name="NombreInstitucion" id="NombreInstitucion">
                    <input type="hidden" name="fkInstitucion" id="fkInstitucion">
                    <form id="DeferralForm">
                        <div class="DeferralAlert">
                        </div>
                        <label style="font-size: 16px;">Correo o documento (Diferir):</label>
                        <input type="file" data-plugin="dropify" id="Deferral" name="Deferral">
                        <br>
                        <button type="button" class="btn btn-block btn-info" style="margin-bottom: 10%;" id="btn-Deferral">Subir</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="modal-footer">
        </div>
    </div>
    </div>
</div>

<div class="modal fade modal-fade-in-scale-up" id="exampleNiftyFadeScale" aria-labelledby="exampleModalTitle" role="dialog" tabindex="-1" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-simple">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
            </button>
            <h4 class="modal-title">Añadir nueva institucion al aspirante</h4>
        </div>
        <form id="institucionAddNew">
            <input type="hidden" name="aspiranteUniversidad" id="aspiranteUniversidad" value="<?=$infoAspiranteUni['idAspiranteUniversidad']?>">
            <div class="modal-body">
                <select class="form-control" name="instituciones" id="instituciones" data-plugin="select2">
                    <option value="" disabled selected>Elige una opcion</option>
                    <?php for ($i=0; $i < count($unisAdd); $i++) {  ;?>
                        <option value="<?=$unisAdd[$i]['idInstitucion']?>"><?=$unisAdd[$i]['nombreInstitucion'];?></option>
                    <?php } ;?>
                </select>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </form>
        
        </div>
    </div>
</div>

<div class="modal fade modal-fade-in-scale-up" id="exampleNiftyFadeScalePrepa" aria-labelledby="exampleModalTitle" role="dialog" tabindex="-1" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-simple">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
            </button>
            <h4 class="modal-title">Añadir nueva institucion al aspirante</h4>
        </div>
        <form id="institucionAddNewPrepa">
            <input type="hidden" name="aspirantePrepa" id="aspirantePrepa" value="<?=$infoAspirantePrepa['idAspirantePreparatoria']?>">
            <div class="modal-body">
                <select class="form-control" name="instituciones" id="instituciones" data-plugin="select2">
                    <option value="" disabled selected>Elige una opcion</option>
                    <?php for ($i=0; $i < count($prepasAdd); $i++) {  ;?>
                        <option value="<?=$prepasAdd[$i]['idInstitucion']?>"><?=$prepasAdd[$i]['nombreInstitucion'];?></option>
                    <?php } ;?>
                </select>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </form>
        
        </div>
    </div>
</div>

<div class="modal fade modal-fade-in-scale-up" id="defeatRequestModal" aria-labelledby="exampleModalTitle" role="dialog" tabindex="-1" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-simple">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title">Ver Deferal Request</h4>
            </div>
            <div class="row">
                <?php for ($i=0; $i < count($DeferalRequest); $i++) { ?> 
                    <div class="card" style="width: 18rem;margin: 30px;box-shadow: 0 0 5px 1px rgba(52, 52, 52, 0.224);border-radius: 20px;">
                        <img class="card-img-top" src="<?=$DeferalRequest[$i]['logoInstitucion']?>" alt="Card image cap" style="box-shadow: 0 0 5px 1px rgba(52, 52, 52, 0.224);border-radius: 20px;margin-top: 10px;">
                        <div class="card-body">
                            <h5 class="card-title"><?=$DeferalRequest[$i]['nameDocumento']?></h5>
                            <p class="card-text">
                                <span style="color: black;">Fecha:</span> <?=$DeferalRequest[$i]['creationDate']?>
                                <span style="color: black;">Ubicacion:</span> <?=$DeferalRequest[$i]['pathDisplayDocumento']?>
                                
                            </p>
                            <?php if ($DeferalRequest[$i]['statusDocumento']=='Pendiente') { ?>
                                <div class="row" style="margin: 10px;">
                                    <div class="col-6">
                                        <button type="button" class="btn btn-success btn-aceptarDefeatRequest" id="<?=$DeferalRequest[$i]['keyDocumentoEliminar']?>" name="<?=$DeferalRequest[$i]['idReal']?>">Aceptar</button>
                                    </div>
                                    <div class="col-6">
                                        <button type="button" class="btn btn-danger">Rechazar</button>
                                    </div>
                                </div>
                            <?php } ?>
                            
                        </div>
                    </div>
                <?php } ?>
                
            </div>
                
        </div>
    </div>
</div>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Becas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
            <?php for ($i=0; $i < count($BecasDocs); $i++) { ?>
                <?php 
                if ($BecasDocs[$i]['statusDocumento']=='Pendiente') {
                    $color = 'text-white bg-warning';
                }else if($BecasDocs[$i]['statusDocumento']=='Rechazado'){
                    $color = 'text-white bg-danger';
                }else{
                    $color = 'text-white bg-success';
                }
                ?>
                <?php if ($BecasDocs[$i]['statusDocumento']=='Pendiente' || $BecasDocs[$i]['statusDocumento']=='Aceptado') { ?>
                    <div class="col-xl-5" style="margin: 10px;">
                        <div class="card <?=$color?>" style="box-shadow: 0 0 5px 1px rgba(52, 52, 52, 0.224);border-radius: 20px;">
                            <img class="card-img-top" src="https://www.cori.cinvestav.mx/portals/cori/img/becas.jpg">
                            <div class="card-body">
                                <h4 class="card-title" style="margin-left: 20px;"><?=@$BecasDocs[$i]['nameDocumento']?></h4>
                                <p class="card-text" style="color: black;">Descripcion: <br></p>
                                <p><?=@$BecasDocs[$i]['descDocumento']?></p>
                                <div class="row">
                                    <div class="col-6">
                                        <button class="btn btn-success btn-becasAceptar" id="<?=@$BecasDocs[$i]['idReal']?>" name="<?=@$BecasDocs[$i]['idReal']?>">Aceptar</button>
                                    </div>
                                    <div class="col-6">
                                        <button class="btn btn-danger btn-becasRechazar" id="<?=@$BecasDocs[$i]['idReal']?>" name="<?=@$BecasDocs[$i]['pathDisplayDocumento']?>">Rechazar</button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                    
            <?php } ?>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Becas Aplicadas por el aspirante</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
            <h4 style="margin-left: 20px;">A&ntilde;adir beca a aplicar</h4>            
        </div>
        <hr>
        <select name="" id="" class="form-control">
            <option value="" disabled selected>Selecciona una opcion</option>
            <?php for ($i=0; $i < count($BecasDisponibles); $i++) { ?>
                <option value="<?=$BecasDisponibles[$i]['idBeca']?>"><?=$BecasDisponibles[$i]['nombreBeca']?></option>
            <?php } ?>
        </select>
        <div class="row" style="margin: 10px;">
            <button type="button" class="btn btn-info">Agregar</button>

        </div>
      </div>
    </div>
  </div>
</div>