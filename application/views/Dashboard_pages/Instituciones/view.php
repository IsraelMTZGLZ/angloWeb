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

<div class="row" data-plugin="matchHeight" data-by-row="true" style="margin-top: 30px;">
        <div class="col-xxl-12 col-lg-12">

            <div class="card card-shadow card-responsive" id="widgetLineareaColor">
          
          <p class="font-size-20 blue-grey-700" style="color: #B53F00;margin:30px;">Tus instituciones: &nbsp;</p>
          <p style="margin-left: 30px;" >Aqui veras el status del numero de aplicacion de tu institucion.</p>
            
          <div style="margin: 10px;">
                <button type="button" class="btn btn-warning float-right" data-target="#examplePositionSidebar" data-toggle="modal">Diferrir oferta de alguna de las intituciones</button>
            </div>
            <?php if ($DeferalRequest) { ?>
                <div style="margin: 10px;">
                    <button type="button" class="btn btn-info float-right" data-target="#defeatRequestModal" data-toggle="modal">Ver Ofertas Diferidas</button>
                </div>
            <?php } ?>
            

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
                                    <label style="font-size: 16px;">Ingresa tu oferta de la universidad correspondiente:</label>
                                    <input type="hidden" id="aspiranteKey" value="<?=$aspiranteKey?>">
                                    <input type="hidden" id="nameCarpeta" value="<?=$carpetaName?>">
                                    <input type="hidden" id="uniName" value="<?=$universidadesOfertas[$i]['nombreInstitucion']?>">
                                    <div class="alertOferta-<?=$universidadesOfertas[$i]['idInstitucionAspiranteUniversidades']?>"></div>
                                    <hr>
                                    <form id="ofertaForm-<?=$universidadesOfertas[$i]['idInstitucionAspiranteUniversidades']?>">
                                        <div class="ofertaFormAlert-<?=$universidadesOfertas[$i]['idInstitucionAspiranteUniversidades']?>">
                                        </div>
                                        <label style="font-size: 16px;">Documento en PDF</label>
                                        <input type="file" data-plugin="dropify" id="ofertaCU" name="ofertaCU" data-allowed-file-extensions="pdf" data-errors-position="outside">  
                                        <button type="button" class="btn btn-block btn-info btn-ofertaCU" style="margin-top:10%;margin-bottom: 10%;" id="<?=$universidadesOfertas[$i]['idInstitucionAspiranteUniversidades']?>">Subir</button>
                                    </form>
                                <?php }else { ?>
                                    <div class="example-wrap">
                                        <h4 class="example-title">Nombre del documento:</h4>
                                        <input type="text" class="form-control" id="inputDisabled"  disabled="" value="<?=$universidadesOfertas[$i]['nameDocumento']?>" style="color: black;background-color: plum;font-size: 15px;">
                                    </div>
                                    <div class="example-wrap"  style="margin-top: -40px;">
                                        <h4 class="example-title">Fecha de creacion del documento:</h4>
                                        <input type="text" class="form-control" id="inputDisabled"  disabled="" value="<?=$universidadesOfertas[$i]['creationDate']?>" style="color: black;background-color: plum;font-size: 15px;">
                                    </div>
                                    <div class="example-wrap"  style="margin-top: -40px;">
                                        <h4 class="example-title">Estatus del documento:</h4>
                                        <input type="text" class="form-control" id="inputDisabled"  disabled="" value="<?=$universidadesOfertas[$i]['statusDocumento']?>" style="color: black;background-color: plum;font-size: 15px;">
                                    </div>
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
                                    <label style="font-size: 16px;">Ingresa tu oferta de la universidad correspondiente:</label>
                                    <input type="hidden" id="aspiranteKey" value="<?=$aspiranteKey?>">
                                    <input type="hidden" id="nameCarpeta" value="<?=$carpetaName?>">
                                    <input type="hidden" id="uniNamePrepa" value="<?=$preparatoriasOfertas[$i]['nombreInstitucion']?>">
                                    <div class="alertOfertaPrepa-<?=$preparatoriasOfertas[$i]['idInstitucionAspirantePreparatorias']?>"></div>
                                    <hr>
                                    <form id="ofertaFormPrepa-<?=$preparatoriasOfertas[$i]['idInstitucionAspirantePreparatorias']?>">
                                        <div class="ofertaFormAlertPrepa-<?=$preparatoriasOfertas[$i]['idInstitucionAspirantePreparatorias']?>">
                                        </div>
                                        <label style="font-size: 16px;">Documento en PDF</label>
                                        <input type="file" data-plugin="dropify" id="ofertaCUPrepa" name="ofertaCUPrepa" data-allowed-file-extensions="pdf" data-errors-position="outside">  
                                        <button type="button" class="btn btn-block btn-info btn-ofertaCUPrepa" style="margin-top:10%;margin-bottom: 10%;" id="<?=$preparatoriasOfertas[$i]['idInstitucionAspirantePreparatorias']?>">Subir</button>
                                    </form>
                                <?php }else { ?>
                                    <div class="example-wrap">
                                        <h4 class="example-title">Nombre del documento:</h4>
                                        <input type="text" class="form-control" id="inputDisabled"  disabled="" value="<?=$preparatoriasOfertas[$i]['nameDocumento']?>" style="color: black;background-color: plum;font-size: 15px;">
                                    </div>
                                    <div class="example-wrap"  style="margin-top: -40px;">
                                        <h4 class="example-title">Fecha de creacion del documento:</h4>
                                        <input type="text" class="form-control" id="inputDisabled"  disabled="" value="<?=$preparatoriasOfertas[$i]['creationDate']?>" style="color: black;background-color: plum;font-size: 15px;">
                                    </div>
                                    <div class="example-wrap"  style="margin-top: -40px;">
                                        <h4 class="example-title">Estatus del documento:</h4>
                                        <input type="text" class="form-control" id="inputDisabled"  disabled="" value="<?=$preparatoriasOfertas[$i]['statusDocumento']?>" style="color: black;background-color: plum;font-size: 15px;">
                                    </div>
                                <?php } ?>
                            <?php } ?> 
                        </div>
                    <?php } ?>
                <?php } ?>
            </div>

        </div>
        <!---termino uni-->

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
        <input type="hidden" id="aspiranteKeyD" value="<?=$user->aspirante?>">
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
                                <li class="bg-yellow-800 list-group-item">
                                    <span style="color:white">Pendiente</span> 
                                </li>
                            <?php }else if ($DeferalRequest[$i]['statusDocumento']=='Aceptado') { ?>
                                <li class="bg-light-green-500 list-group-item">
                                    <span style="color: white;">Aceptado</span> 
                                </li>
                            <?php } ?>
                        </div>
                    </div>
                <?php } ?>
                
            </div>
                
        </div>
    </div>
</div>