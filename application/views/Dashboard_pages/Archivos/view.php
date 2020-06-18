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

<div class="page-content containerC-fluid" >
  <div class="row" data-plugin="matchHeight" data-by-row="true" style="">
    <div class="col-xxl-7 col-lg-8">

      <!--Eligio universidad-->
        <div class="card card-shadow card-responsive" id="widgetLineareaColor">
          <p class="font-size-20 blue-grey-700" style="color: #B53F00;margin:30px;">Tus Documentos: &nbsp;</p>
          <input type="hidden" id="aspirante" value="<?=@$user->aspirante?>">
          <input type="hidden" id="nameAspirante" value="<?=@$carpetaName?>">
          <div class="list-group" style="margin: 20px;">
          <?php if(@$documentos) { ?>
            <?php for( $i=0; $i < count(@$documentos); $i++) { ?>
              <?php if($documentos[$i]['statusDocumento']=='Pendiente'){?>
              <a class="list-group-item list-group-item-warning" href="javascript:void(0)" style="font-size: 18px;">
                <?php $new = explode('.',$documentos[$i]['nameDocumento']);$salida =array_reverse($new);?>
                <?php if($salida[0]=='pdf') { ?>
                  <i class="icon fa-file-pdf-o" aria-hidden="true" style="color: #000000;font-size: 25px;"></i> <?=$documentos[$i]['nameDocumento']?>
                <?php }else {?>
                  <i class="icon fa-file-word-o" aria-hidden="true" style="color: #000000;font-size: 25px;"></i> <?=$documentos[$i]['nameDocumento']?>
                <?php } ?>
                <br>
                <span style="font-weight: normal;">Ultima fecha de modificacion:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <?php
                    $new = explode(' ',$documentos[$i]['lastUpdate']); 
                    echo $new[0];
                  ;?>
                <span class="badge badge-pill badge-warning">Status: <?=$documentos[$i]['statusDocumento']?></span>
              </a>
              <?php } ?>
              <?php if($documentos[$i]['statusDocumento']=='Aceptado'){?>
              <a class="list-group-item list-group-item-success" href="javascript:void(0)" style="font-size: 18px;">
                <?php $new = explode('.',$documentos[$i]['nameDocumento']);$salida =array_reverse($new);?>
                <?php if($salida[0]=='pdf') { ?>
                  <i class="icon fa-file-pdf-o" aria-hidden="true" style="color: #000000;font-size: 25px;"></i> <?=$documentos[$i]['nameDocumento']?>
                <?php }else {?>
                  <i class="icon fa-file-word-o" aria-hidden="true" style="color: #000000;font-size: 25px;"></i> <?=$documentos[$i]['nameDocumento']?>
                <?php } ?>
                <br>
                <span style="font-weight: normal;">Ultima fecha de modificacion:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <?php
                    $new = explode(' ',$documentos[$i]['lastUpdate']); 
                    echo $new[0];
                  ;?>
                <span class="badge badge-pill badge-success">Status: <?=$documentos[$i]['statusDocumento']?></span>
              </a>
              <?php } ?>
              <?php if($documentos[$i]['statusDocumento']=='Rechazado'){?>
              <a class="list-group-item list-group-item-danger" href="javascript:void(0)" style="font-size: 18px;">
                <?php $new = explode('.',$documentos[$i]['nameDocumento']);$salida =array_reverse($new);?>
                <?php if($salida[0]=='pdf') { ?>
                  <i class="icon fa-file-pdf-o" aria-hidden="true" style="color: #000000;font-size: 25px;"></i> <?=$documentos[$i]['nameDocumento']?>
                <?php }else {?>
                  <i class="icon fa-file-word-o" aria-hidden="true" style="color: #000000;font-size: 25px;"></i> <?=$documentos[$i]['nameDocumento']?>
                <?php } ?>
                <br>
                <span style="font-weight: normal;">Ultima fecha de modificacion:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <?php
                    $new = explode(' ',$documentos[$i]['lastUpdate']); 
                    echo $new[0];
                  ;?>
                <span class="badge badge-pill badge-danger">Status: <?=$documentos[$i]['statusDocumento']?></span>
                <br>
                <br>
                <div style="text-align: center;color: black;">Tu archivo fue rechazado por lo siguiente:</div>
                <div style="text-align: justify;"><?=$documentos[$i]['descDocumento']?></div>
                <br>
                <div style="text-align: center;color: black;">Sube de nuevo tu archivo con las modificaciones necesarias ya mencionadas:</div>
                <br>
                <input type="hidden" id="pathCarpeta-<?=$documentos[$i]['idReal'];?>" value="<?=$documentos[$i]['nameCarpeta'];?>">
                <div class="row">
                  <div class="col-sm-12 col-md-6" style="margin-bottom: 15px;">
                    <form id="formDocModi-<?=$documentos[$i]['idReal'];?>">
                      <input type="file" class="form-control btn btn-danger" name="<?=$documentos[$i]['nameDocumento'];?>" id="files-<?=$documentos[$i]['idReal'];?>">
                    </form>
                  </div>
                  <br>
                  <div class="col-sm-12 col-md-6">
                    <button type="button" class="btn btn-block btn-info btnReSubir" id="<?=$documentos[$i]['idReal'];?>" name="<?=$documentos[$i]['nameDocumento'];?>">Subir</button>
                  </div>
                </div>
              </a>
              <?php } ?>
            <?php } ?>
            <?php } ?>
          </div>
          <p class="font-size-20 blue-grey-700" style="color: #B53F00;margin:30px;">Documentos Faltantes por subir: &nbsp;</p>
          
          <?php if(@$infoAspiranteUni['estudiosAspiranteUniversidad']=="Carrera") {?>
            <?php if(!$boleta || @!$boletaTraduccion) {?>
              <div class="row">
                <div class="col-sm-12 col-md-5" style="margin: 20px;">
                  <ul class="list-group list-group-bordered">
                    <li class="list-group-item list-group-item-action active" style="font-size: 16px;">1. Copia escaneada de la boleta de calificaciones de los dos últimos años de estudio..</li>
                  </ul>
                </div>
                <div class="col-sm-12 col-md-5">
                  <?php if(!$boleta){ ?>
                    <form id="boletaForm">
                      <div class="boletaAlert">
                      </div>
                      <label style="font-size: 16px;">Documento original en PDF</label>
                      <input type="file" data-plugin="dropify" id="Boleta" name="Boleta" data-allowed-file-extensions="pdf" data-errors-position="outside">  
                      <button type="button" class="btn btn-block btn-info" style="margin-top:10%;margin-bottom: 10%;" id="btn-boleta">Subir</button>
                    </form>
                  <?php } ?>
                  
                  <?php if(@!$boletaTraduccion){ ?>
                    <form id="boletaTraduccionForm">
                      <div class="boletaTraduccionAlert">
                      </div>
                      <label style="font-size: 16px;">Documento en ingles en formato PDF|WORD</label>
                      <input type="file" data-plugin="dropify" id="BoletaTraduccion" name="BoletaTraduccion" data-allowed-file-extensions="pdf doc docx" data-errors-position="outside">  
                      <button type="button" class="btn btn-block btn-info" style="margin-top:10%;margin-bottom: 10%;" id="btn-boletaTraduccion">Subir</button>
                    </form>
                  <?php } ?>
                </div>
              </div>
            <?php } ?>
            <?php if (!$cartaMotivo) { ?>
              <div class="row">
                <div class="col-sm-12 col-md-5" style="margin: 20px;">
                  <ul class="list-group list-group-bordered">
                    <li class="list-group-item list-group-item-action active" style="font-size: 16px;">2. Carta de motivos, indicando la carrera/pre-grado que quiere estudiar y el por qué (en inglés).</li>
                  </ul>
                </div>
                <div class="col-sm-12 col-md-5">
                    <form id="cartaMotivosForm">
                      <div class="cartaMotivosAlert">
                      </div>
                      <label style="font-size: 16px;">Documento en PDF|WORD</label>
                      <input type="file" data-plugin="dropify" id="cartaMotivos" name="cartaMotivos" data-allowed-file-extensions="pdf doc docx" data-errors-position="outside">  
                      <button type="button" class="btn btn-block btn-info" style="margin-top:10%;margin-bottom: 10%;" id="btn-cartaMotivos">Subir</button>
                    </form>
                </div>
              </div>
            <?php } ?>
            <?php if (!$pasaporte) { ?>
              <div class="row">
                <div class="col-sm-12 col-md-5" style="margin: 20px;">
                  <ul class="list-group list-group-bordered">
                    <li class="list-group-item list-group-item-action active" style="font-size: 16px;">3. Copia escaneada de la página de foto del pasaporte, documento original escaneado.</li>
                  </ul>
                </div>
                <div class="col-sm-12 col-md-5">
                    <form id="pasaporteForm">
                      <div class="pasaporteAlert">
                      </div>
                      <label style="font-size: 16px;">Documento original en PDF</label>
                      <input type="file" data-plugin="dropify" id="pasaporte" name="pasaporte" data-allowed-file-extensions="pdf" data-errors-position="outside">  
                      <button type="button" class="btn btn-block btn-info" style="margin-top:10%;margin-bottom: 10%;" id="btn-pasaporte">Subir</button>
                    </form>
                </div>
              </div>
            <?php } ?>
            <?php if (!$cartasRecomendacion) { ?>
              <div class="row">
                <div class="col-sm-12 col-md-5" style="margin: 20px;">
                  <ul class="list-group list-group-bordered">
                    <li class="list-group-item list-group-item-action active" style="font-size: 16px;">4. Carta Recomendacion.</li>
                  </ul>
                </div>
                <div class="col-sm-12 col-md-5">
                    <form id="recomendForm">
                      <div class="recomendAlert">
                      </div>
                      <label style="font-size: 16px;">Documento en PDF|WORD</label>
                      <input type="file" data-plugin="dropify" id="recomend" name="recomend" data-allowed-file-extensions="pdf doc docx" data-errors-position="outside">  
                      <button type="button" class="btn btn-block btn-info" style="margin-top:10%;margin-bottom: 10%;" id="btn-recomend">Subir</button>
                    </form>
                </div>
              </div>
            <?php } ?>
            <?php if (!$cartasAutorizacon) { ?>
              <div class="row">
                <div class="col-sm-12 col-md-5" style="margin: 20px;">
                  <ul class="list-group list-group-bordered">
                    <li class="list-group-item list-group-item-action active" style="font-size: 16px;">5. Carta De Autorización.</li>
                  </ul>
                </div>
                <div class="col-sm-12 col-md-5">
                    <form id="autoForm">
                      <div class="autoAlert">
                      </div>
                      <label style="font-size: 16px;">Documento en PDF</label>
                      <input type="file" data-plugin="dropify" id="auto" name="auto" data-allowed-file-extensions="pdf" data-errors-position="outside">  
                      <button type="button" class="btn btn-block btn-info" style="margin-top:10%;margin-bottom: 10%;" id="btn-auto">Subir</button>
                    </form>
                </div>
              </div>
            <?php } ?>
            <?php if ($user->statusAspirante=="2R" || $user->statusAspirante=="3") { ?>
              <p class="font-size-20 blue-grey-700" style="color: #B53F00;margin:30px;">Documentos Faltantes para terminar tu proceso: &nbsp;</p>
              <?php if (!$examenIngles) { ?>
                <div class="row">
                  <div class="col-sm-12 col-md-5" style="margin: 20px;">
                    <ul class="list-group list-group-bordered">
                      <li class="list-group-item list-group-item-action active" style="font-size: 16px;">1. Examen de ingles vigente.</li>
                    </ul>
                  </div>
                  <div class="col-sm-12 col-md-5">
                      <form id="examenForm">
                        <div class="examenAlert">
                        </div>
                        <label style="font-size: 16px;">Documento en PDF</label>
                        <input type="file" data-plugin="dropify" id="examen" name="examen" data-allowed-file-extensions="pdf" data-errors-position="outside">  
                        <button type="button" class="btn btn-block btn-info" style="margin-top:10%;margin-bottom: 10%;" id="btn-examen">Subir</button>
                      </form>
                  </div>
                </div>
              <?php } ?>
              <?php if (!$boletaFinal) { ?>
                <div class="row">
                  <div class="col-sm-12 col-md-5" style="margin: 20px;">
                    <ul class="list-group list-group-bordered">
                      <li class="list-group-item list-group-item-action active" style="font-size: 16px;">2. Boleta de calificaciones finales.</li>
                    </ul>
                  </div>
                  <div class="col-sm-12 col-md-5">
                    <form id="boletaFinalForm">
                      <div class="boletaFinalAlert">
                      </div>
                      <label style="font-size: 16px;">Documento en PDF</label>
                      <input type="file" data-plugin="dropify" id="boletaFinal" name="boletaFinal" data-allowed-file-extensions="pdf doc docx" data-errors-position="outside">  
                      <button type="button" class="btn btn-block btn-info" style="margin-top:10%;margin-bottom: 10%;" id="btn-boletaFinal">Subir</button>
                    </form>
                  </div>
                </div>
              <?php } ?>
              <?php if (!$visa) { ?>
                <div class="row">
                  <div class="col-sm-12 col-md-5" style="margin: 20px;">
                    <ul class="list-group list-group-bordered">
                      <li class="list-group-item list-group-item-action active" style="font-size: 16px;">3. Visa.</li>
                    </ul>
                  </div>
                  <div class="col-sm-12 col-md-5">
                    <form id="visaForm">
                      <div class="visaAlert">
                      </div>
                      <label style="font-size: 16px;">Documento en PDF</label>
                      <input type="file" data-plugin="dropify" id="visa" name="visa" data-allowed-file-extensions="pdf" data-errors-position="outside">  
                      <button type="button" class="btn btn-block btn-info" style="margin-top:10%;margin-bottom: 10%;" id="btn-visa">Subir</button>
                    </form>
                  </div>
                </div>
              <?php } ?>
            <?php } ?>
          <?php } ?>
          <?php if(@$infoAspiranteUni['estudiosAspiranteUniversidad']=="Masters") {?>
            <?php if(!$transcripcion || @!$transcripcionTraduccion) {?>
              <div class="row">
                <div class="col-sm-12 col-md-5" style="margin: 20px;">
                  <ul class="list-group list-group-bordered">
                    <li class="list-group-item list-group-item-action active" style="font-size: 16px;">1. -Copia escaneada de las transcripciones de su carrera (completa o parcial – en PDF)</li>
                  </ul>
                </div>
                <div class="col-sm-12 col-md-5">
                  <?php if(!$transcripcion){ ?>
                    <form id="transForm">
                      <div class="transAlert">
                      </div>
                      <label style="font-size: 16px;">Documento original en PDF</label>
                      <input type="file" data-plugin="dropify" id="trans" name="trans" data-allowed-file-extensions="pdf" data-errors-position="outside">  
                      <button type="button" class="btn btn-block btn-info" style="margin-top:10%;margin-bottom: 10%;" id="btn-trans">Subir</button>
                    </form>
                  <?php } ?>
                  
                  <?php if(@!$transcripcionTraduccion){ ?>
                    <form id="transTraduccionForm">
                      <div class="transTraduccionAlert">
                      </div>
                      <label style="font-size: 16px;">Documento en ingles en formato PDF|WORD</label>
                      <input type="file" data-plugin="dropify" id="transTraduccion" name="transTraduccion" data-allowed-file-extensions="pdf doc docx" data-errors-position="outside">  
                      <button type="button" class="btn btn-block btn-info" style="margin-top:10%;margin-bottom: 10%;" id="btn-transTraduccion">Subir</button>
                    </form>
                  <?php } ?>

                </div>
              </div>
            <?php } ?>
            <?php if($cartasMotivos){?>
              <div class="row" style="margin: 10px;">
              <div class="col-sm-12 col-md-12">
                  <ul class="list-group list-group-bordered">
                    <li class="list-group-item list-group-item-action active" style="font-size: 16px;">2. Carta de motivos (una por cada maestria (universidad) a la que va postulando, identificando la maestría específica y los motivos por aplicar a esta (en inglés – documento en Word/PDF) .</li>
                  </ul>
                </div>
              </div>
            <?php } ?>
            <?php for($i=0;$i < count($cartasMotivos);$i++) { ?>
              
              <div class="row">
                <div class="col-sm-12 col-md-5" style="margin: 20px;">
                  <ul class="list-group list-group-bordered">
                    <li class="list-group-item list-group-item-action bg-info active" style="font-size: 16px;"><?=$i+1?>. Carta Motivos de la <?=$cartasMotivos[$i]['nombreInstitucion']?> .</li>
                  </ul>
                </div>
                <div class="col-sm-12 col-md-5">
                    <form id="cartasMotivosForm-<?=@$cartasMotivos[$i]['idInstitucion']?>">
                      <div class="cartasMotivosAlert-<?=@$cartasMotivos[$i]['idInstitucion']?>">
                      </div>
                      <label style="font-size: 16px;">Documento en formato PDF|WORD debera ser el de la  <?=$cartasMotivos[$i]['nombreInstitucion']?>.</label>
                      <input type="file" data-plugin="dropify" id="cartasMotivos-<?=@$cartasMotivos[$i]['idInstitucion']?>" name="cartasMotivos-<?=@$cartasMotivos[$i]['idInstitucion']?>" data-allowed-file-extensions="pdf doc docx" data-errors-position="outside">  
                      <button type="button" class="btn btn-block btn-info btn-cartasMotivos" style="margin-top:10%;margin-bottom: 10%;" id="<?=@$cartasMotivos[$i]['idInstitucion']?>" name="<?=$cartasMotivos[$i]['nombreInstitucion']?>">Subir</button>
                    </form>
                </div>
              </div>
            <?php } ;?>
            <?php if($cartasRecomendacionPrimeras && $cartasRecomendacionSegundas){?>
              <div class="row" style="margin: 10px;">
              <div class="col-sm-12 col-md-12">
                  <ul class="list-group list-group-bordered">
                    <li class="list-group-item list-group-item-action active" style="font-size: 16px;">3. Dos cartas de recomendación (académicas o mínimo una académica, otra profesional en formato PDF) .</li>
                  </ul>
                </div>
              </div>
            <?php } ?>
            <?php for($i=0;$i < count($cartasRecomendacionPrimeras);$i++) { ?>
              
              <div class="row">
                <div class="col-sm-12 col-md-5" style="margin: 20px;">
                  <ul class="list-group list-group-bordered">
                    <li class="list-group-item list-group-item-action bg-info active" style="font-size: 16px;"><?=$i+1?>. Primera Carta De Recomendacion de la universidad <?=$cartasRecomendacionPrimeras[$i]['nombreInstitucion']?> .</li>
                  </ul>
                </div>
                <div class="col-sm-12 col-md-5">
                    <form id="cartasRePForm-<?=@$cartasRecomendacionPrimeras[$i]['idInstitucion']?>">
                      <div class="cartasRePAlert-<?=@$cartasRecomendacionPrimeras[$i]['idInstitucion']?>">
                      </div>
                      <label style="font-size: 16px;">Documento en formato PDF debera ser el de la  <?=$cartasRecomendacionPrimeras[$i]['nombreInstitucion']?>.</label>
                      <input type="file" data-plugin="dropify" id="cartasReP-<?=@$cartasRecomendacionPrimeras[$i]['idInstitucion']?>" name="cartasReP-<?=@$cartasRecomendacionPrimeras[$i]['idInstitucion']?>" data-allowed-file-extensions="pdf" data-errors-position="outside">  
                      <button type="button" class="btn btn-block btn-info btn-cartasReP" style="margin-top:10%;margin-bottom: 10%;" id="<?=@$cartasRecomendacionPrimeras[$i]['idInstitucion']?>" name="<?=$cartasRecomendacionPrimeras[$i]['nombreInstitucion']?>">Subir</button>
                    </form>
                </div>
              </div>
              
            <?php } ;?>
            <?php for($i=0;$i < count($cartasRecomendacionSegundas);$i++) { ?>
                  <div class="row">
                    <div class="col-sm-12 col-md-5" style="margin: 20px;">
                      <ul class="list-group list-group-bordered">
                        <li class="list-group-item list-group-item-action bg-info active" style="font-size: 16px;"><?=($i+1)?>. Segunda Carta De Recomendacion de la universidad <?=@$cartasRecomendacionSegundas[$i]['nombreInstitucion']?> .</li>
                      </ul>
                    </div>
                    <div class="col-sm-12 col-md-5">
                        <form id="cartasReSForm-<?=@$cartasRecomendacionSegundas[$i]['idInstitucion']?>">
                          <div class="cartasReSAlert-<?=@$cartasRecomendacionSegundas[$i]['idInstitucion']?>">
                          </div>
                          <label style="font-size: 16px;">Documento en formato PDF debera ser el de la  <?=$cartasRecomendacionSegundas[$i]['nombreInstitucion']?>.</label>
                          <input type="file" data-plugin="dropify" id="cartasReS-<?=@$cartasRecomendacionSegundas[$i]['idInstitucion']?>" name="cartasReS-<?=@$cartasRecomendacionSegundas[$i]['idInstitucion']?>" data-allowed-file-extensions="pdf" data-errors-position="outside">  
                          <button type="button" class="btn btn-block btn-info btn-cartasReS" style="margin-top:10%;margin-bottom: 10%;" id="<?=@$cartasRecomendacionSegundas[$i]['idInstitucion']?>" name="<?=$cartasRecomendacionSegundas[$i]['nombreInstitucion']?>">Subir</button>
                        </form>
                    </div>
                  </div>
              <?php } ;?>
              <?php if (!$cartasAutorizacon) { ?>
              <div class="row">
                <div class="col-sm-12 col-md-5" style="margin: 20px;">
                  <ul class="list-group list-group-bordered">
                    <li class="list-group-item list-group-item-action active" style="font-size: 16px;">4. Carta De Autorización.</li>
                  </ul>
                </div>
                <div class="col-sm-12 col-md-5">
                    <form id="autoCartaForm">
                      <div class="autoCartaAlert">
                      </div>
                      <label style="font-size: 16px;">Documento en PDF</label>
                      <input type="file" data-plugin="dropify" id="autoCarta" name="autoCarta" data-allowed-file-extensions="pdf" data-errors-position="outside">  
                      <button type="button" class="btn btn-block btn-info" style="margin-top:10%;margin-bottom: 10%;" id="btn-autoCarta">Subir</button>
                    </form>
                </div>
              </div>
            <?php } ?>
            <?php if (!$pasaporte) { ?>
              <div class="row">
                <div class="col-sm-12 col-md-5" style="margin: 20px;">
                  <ul class="list-group list-group-bordered">
                    <li class="list-group-item list-group-item-action active" style="font-size: 16px;">5. Copia escaneada de la página de foto del pasaporte, documento original escaneado.</li>
                  </ul>
                </div>
                <div class="col-sm-12 col-md-5">
                    <form id="pasaporteMaestriaForm">
                      <div class="pasaporteMaestriaAlert">
                      </div>
                      <label style="font-size: 16px;">Documento original en PDF</label>
                      <input type="file" data-plugin="dropify" id="pasaporteMaestria" name="pasaporteMaestria" data-allowed-file-extensions="pdf" data-errors-position="outside">  
                      <button type="button" class="btn btn-block btn-info" style="margin-top:10%;margin-bottom: 10%;" id="btn-pasaporteMaestria">Subir</button>
                    </form>
                </div>
              </div>
            <?php } ?>
            <?php if ($user->statusAspirante=="2R" || $user->statusAspirante=="3") { ?>
              <p class="font-size-20 blue-grey-700" style="color: #B53F00;margin:30px;">Documentos Faltantes para terminar tu proceso: &nbsp;</p>
              <?php if (!$examenIngles) { ?>
                <div class="row">
                  <div class="col-sm-12 col-md-5" style="margin: 20px;">
                    <ul class="list-group list-group-bordered">
                      <li class="list-group-item list-group-item-action active" style="font-size: 16px;">1. Examen de ingles vigente.</li>
                    </ul>
                  </div>
                  <div class="col-sm-12 col-md-5">
                      <form id="examenMaestriaForm">
                        <div class="examenMaestriaAlert">
                        </div>
                        <label style="font-size: 16px;">Documento en PDF</label>
                        <input type="file" data-plugin="dropify" id="examenMaestria" name="examenMaestria" data-allowed-file-extensions="pdf" data-errors-position="outside">  
                        <button type="button" class="btn btn-block btn-info" style="margin-top:10%;margin-bottom: 10%;" id="btn-examenMaestria">Subir</button>
                      </form>
                  </div>
                </div>
              <?php } ?>
              <?php if (!$transFinal) { ?>
                <div class="row">
                  <div class="col-sm-12 col-md-5" style="margin: 20px;">
                    <ul class="list-group list-group-bordered">
                      <li class="list-group-item list-group-item-action active" style="font-size: 16px;">2. Transcripcion Final.</li>
                    </ul>
                  </div>
                  <div class="col-sm-12 col-md-5">
                      <form id="transFinalMaestriaForm">
                        <div class="transFinalMaestriaAlert">
                        </div>
                        <label style="font-size: 16px;">Documento en PDF</label>
                        <input type="file" data-plugin="dropify" id="transFinalMaestria" name="transFinalMaestria" data-allowed-file-extensions="pdf" data-errors-position="outside">  
                        <button type="button" class="btn btn-block btn-info" style="margin-top:10%;margin-bottom: 10%;" id="btn-transFinalMaestria">Subir</button>
                      </form>
                  </div>
                </div>
              <?php } ?>
              <?php if (!$titulo) { ?>
                <div class="row">
                  <div class="col-sm-12 col-md-5" style="margin: 20px;">
                    <ul class="list-group list-group-bordered">
                      <li class="list-group-item list-group-item-action active" style="font-size: 16px;">3. Titulo/ Acta de examen/ Carta Constancia.</li>
                    </ul>
                  </div>
                  <div class="col-sm-12 col-md-5">
                      <form id="tituloForm">
                        <div class="tituloAlert">
                        </div>
                        <label style="font-size: 16px;">Documento en PDF</label>
                        <input type="file" data-plugin="dropify" id="titulo" name="titulo" data-allowed-file-extensions="pdf" data-errors-position="outside">  
                        <button type="button" class="btn btn-block btn-info" style="margin-top:10%;margin-bottom: 10%;" id="btn-titulo">Subir</button>
                      </form>
                  </div>
                </div>
              <?php } ?>
              <?php if (!$ATAS) { ?>
                <div class="row">
                  <div class="col-sm-12 col-md-5" style="margin: 20px;">
                    <ul class="list-group list-group-bordered">
                      <li class="list-group-item list-group-item-action active" style="font-size: 16px;">4. ATAS.</li>
                    </ul>
                  </div>
                  <div class="col-sm-12 col-md-5">
                      <form id="ATASForm">
                        <div class="ATASAlert">
                        </div>
                        <label style="font-size: 16px;">Documento en PDF</label>
                        <input type="file" data-plugin="dropify" id="ATAS" name="ATAS" data-allowed-file-extensions="pdf" data-errors-position="outside">  
                        <button type="button" class="btn btn-block btn-info" style="margin-top:10%;margin-bottom: 10%;" id="btn-ATAS">Subir</button>
                      </form>
                  </div>
                </div>
              <?php } ?>
              <?php if (!$visa) { ?>
                <div class="row">
                  <div class="col-sm-12 col-md-5" style="margin: 20px;">
                    <ul class="list-group list-group-bordered">
                      <li class="list-group-item list-group-item-action active" style="font-size: 16px;">5. Visa.</li>
                    </ul>
                  </div>
                  <div class="col-sm-12 col-md-5">
                    <form id="visaMaestriaForm">
                      <div class="visaMaestriaAlert">
                      </div>
                      <label style="font-size: 16px;">Documento en PDF</label>
                      <input type="file" data-plugin="dropify" id="visaMaestria" name="visaMaestria" data-allowed-file-extensions="pdf" data-errors-position="outside">  
                      <button type="button" class="btn btn-block btn-info" style="margin-top:10%;margin-bottom: 10%;" id="btn-visaMaestria">Subir</button>
                    </form>
                  </div>
                </div>
              <?php } ?>
            <?php } ?>

          <?php } ?>
          <?php if(@$infoAspiranteUni['estudiosAspiranteUniversidad']=="PhD") {?>
            <?php if (!$propuesta) { ?>
              <div class="row">
                <div class="col-sm-12 col-md-5" style="margin: 20px;">
                  <ul class="list-group list-group-bordered">
                    <li class="list-group-item list-group-item-action active" style="font-size: 16px;">1. Propuesta de investigación indicando la línea de investigación pretendida (en ingles) .</li>
                  </ul>
                </div>
                <div class="col-sm-12 col-md-5">
                    <form id="propuestaForm">
                      <div class="propuestaAlert">
                      </div>
                      <label style="font-size: 16px;">Documento en PDF o WORD</label>
                      <input type="file" data-plugin="dropify" id="propuesta" name="propuesta" data-allowed-file-extensions="pdf doc docx" data-errors-position="outside">  
                      <button type="button" class="btn btn-block btn-info" style="margin-top:10%;margin-bottom: 10%;" id="btn-propuesta">Subir</button>
                    </form>
                </div>
              </div>
            <?php } ?>
            <?php if(!$transcripcion || @!$transcripcionTraduccion) {?>
              <div class="row">
                <div class="col-sm-12 col-md-5" style="margin: 20px;">
                  <ul class="list-group list-group-bordered">
                    <li class="list-group-item list-group-item-action active" style="font-size: 16px;">2. Copia escaneada de las transcripciones de su carrera (completa o parcial – en PDF)</li>
                  </ul>
                </div>
                <div class="col-sm-12 col-md-5">
                  <?php if(!$transcripcion){ ?>
                    <form id="transPHDForm">
                      <div class="transPHDAlert">
                      </div>
                      <label style="font-size: 16px;">Documento original en PDF</label>
                      <input type="file" data-plugin="dropify" id="transPHD" name="transPHD" data-allowed-file-extensions="pdf" data-errors-position="outside">  
                      <button type="button" class="btn btn-block btn-info" style="margin-top:10%;margin-bottom: 10%;" id="btn-transPHD">Subir</button>
                    </form>
                  <?php } ?>
                  
                  <?php if(@!$transcripcionTraduccion){ ?>
                    <form id="transTraduccionPHDForm">
                      <div class="transTraduccionPHDAlert">
                      </div>
                      <label style="font-size: 16px;">Documento en ingles en formato PDF|WORD</label>
                      <input type="file" data-plugin="dropify" id="transTraduccionPHD" name="transTraduccionPHD" data-allowed-file-extensions="pdf doc docx" data-errors-position="outside">  
                      <button type="button" class="btn btn-block btn-info" style="margin-top:10%;margin-bottom: 10%;" id="btn-transTraduccionPHD">Subir</button>
                    </form>
                  <?php } ?>

                </div>
              </div>
            <?php } ?>
            <?php if (!$cv) { ?>
              <div class="row">
                <div class="col-sm-12 col-md-5" style="margin: 20px;">
                  <ul class="list-group list-group-bordered">
                    <li class="list-group-item list-group-item-action active" style="font-size: 16px;">3. Curriculum Vitae en ingles.</li>
                  </ul>
                </div>
                <div class="col-sm-12 col-md-5">
                    <form id="cvForm">
                      <div class="cvAlert">
                      </div>
                      <label style="font-size: 16px;">Documento en PDF o WORD</label>
                      <input type="file" data-plugin="dropify" id="cv" name="cv" data-allowed-file-extensions="pdf doc docx" data-errors-position="outside">  
                      <button type="button" class="btn btn-block btn-info" style="margin-top:10%;margin-bottom: 10%;" id="btn-cv">Subir</button>
                    </form>
                </div>
              </div>
            <?php } ?>
            <?php if (!$pasaporte) { ?>
              <div class="row">
                <div class="col-sm-12 col-md-5" style="margin: 20px;">
                  <ul class="list-group list-group-bordered">
                    <li class="list-group-item list-group-item-action active" style="font-size: 16px;">4. Copia escaneada de la página de foto del pasaporte, documento original escaneado.</li>
                  </ul>
                </div>
                <div class="col-sm-12 col-md-5">
                    <form id="pasaportePHDForm">
                      <div class="pasaportePHDAlert">
                      </div>
                      <label style="font-size: 16px;">Documento original en PDF</label>
                      <input type="file" data-plugin="dropify" id="pasaportePHD" name="pasaportePHD" data-allowed-file-extensions="pdf" data-errors-position="outside">  
                      <button type="button" class="btn btn-block btn-info" style="margin-top:10%;margin-bottom: 10%;" id="btn-pasaportePHD">Subir</button>
                    </form>
                </div>
              </div>
            <?php } ?>
            <?php if($cartasRecomendacionPrimeras && $cartasRecomendacionSegundas){?>
              <div class="row" style="margin: 10px;">
              <div class="col-sm-12 col-md-12">
                  <ul class="list-group list-group-bordered">
                    <li class="list-group-item list-group-item-action active" style="font-size: 16px;">5. Dos cartas de recomendación (académicas en formato PDF) .</li>
                  </ul>
                </div>
              </div>
            <?php } ?>
            <?php for($i=0;$i < count($cartasRecomendacionPrimeras);$i++) { ?>
              
              <div class="row">
                <div class="col-sm-12 col-md-5" style="margin: 20px;">
                  <ul class="list-group list-group-bordered">
                    <li class="list-group-item list-group-item-action bg-info active" style="font-size: 16px;"><?=$i+1?>. Primera Carta De Recomendacion de la universidad: <?=$cartasRecomendacionPrimeras[$i]['nombreInstitucion']?> .</li>
                  </ul>
                </div>
                <div class="col-sm-12 col-md-5">
                    <form id="cartasRePPHDForm-<?=@$cartasRecomendacionPrimeras[$i]['idInstitucion']?>">
                      <div class="cartasRePPHDAlert-<?=@$cartasRecomendacionPrimeras[$i]['idInstitucion']?>">
                      </div>
                      <label style="font-size: 16px;">Documento en formato PDF debera ser el de la universidad:  <?=$cartasRecomendacionPrimeras[$i]['nombreInstitucion']?>.</label>
                      <input type="file" data-plugin="dropify" id="cartasRePPHD-<?=@$cartasRecomendacionPrimeras[$i]['idInstitucion']?>" name="cartasRePPHD-<?=@$cartasRecomendacionPrimeras[$i]['idInstitucion']?>" data-allowed-file-extensions="pdf" data-errors-position="outside">  
                      <button type="button" class="btn btn-block btn-info btn-cartasRePPHD" style="margin-top:10%;margin-bottom: 10%;" id="<?=@$cartasRecomendacionPrimeras[$i]['idInstitucion']?>" name="<?=$cartasRecomendacionPrimeras[$i]['nombreInstitucion']?>">Subir</button>
                    </form>
                </div>
              </div>
              
            <?php } ;?>
            <?php for($i=0;$i < count($cartasRecomendacionSegundas);$i++) { ?>
                  <div class="row">
                    <div class="col-sm-12 col-md-5" style="margin: 20px;">
                      <ul class="list-group list-group-bordered">
                        <li class="list-group-item list-group-item-action bg-info active" style="font-size: 16px;"><?=($i+1)?>. Segunda Carta De Recomendacion de la universidad: <?=@$cartasRecomendacionSegundas[$i]['nombreInstitucion']?> .</li>
                      </ul>
                    </div>
                    <div class="col-sm-12 col-md-5">
                        <form id="cartasReSPHDForm-<?=@$cartasRecomendacionSegundas[$i]['idInstitucion']?>">
                          <div class="cartasReSPHDAlert-<?=@$cartasRecomendacionSegundas[$i]['idInstitucion']?>">
                          </div>
                          <label style="font-size: 16px;">Documento en formato PDF debera ser el de la universidad: <?=$cartasRecomendacionSegundas[$i]['nombreInstitucion']?>.</label>
                          <input type="file" data-plugin="dropify" id="cartasReSPHD-<?=@$cartasRecomendacionSegundas[$i]['idInstitucion']?>" name="cartasReSPHD-<?=@$cartasRecomendacionSegundas[$i]['idInstitucion']?>" data-allowed-file-extensions="pdf" data-errors-position="outside">  
                          <button type="button" class="btn btn-block btn-info btn-cartasReSPHD" style="margin-top:10%;margin-bottom: 10%;" id="<?=@$cartasRecomendacionSegundas[$i]['idInstitucion']?>" name="<?=$cartasRecomendacionSegundas[$i]['nombreInstitucion']?>">Subir</button>
                        </form>
                    </div>
                  </div>
              <?php } ;?>
              <?php if (!$cartasAutorizacon) { ?>
              <div class="row">
                <div class="col-sm-12 col-md-5" style="margin: 20px;">
                  <ul class="list-group list-group-bordered">
                    <li class="list-group-item list-group-item-action active" style="font-size: 16px;">6. Carta De Autorización.</li>
                  </ul>
                </div>
                <div class="col-sm-12 col-md-5">
                    <form id="autoCartaPHDForm">
                      <div class="autoCartaPHDAlert">
                      </div>
                      <label style="font-size: 16px;">Documento en PDF</label>
                      <input type="file" data-plugin="dropify" id="autoCartaPHD" name="autoCartaPHD" data-allowed-file-extensions="pdf" data-errors-position="outside">  
                      <button type="button" class="btn btn-block btn-info" style="margin-top:10%;margin-bottom: 10%;" id="btn-autoCartaPHD">Subir</button>
                    </form>
                </div>
              </div>
            <?php } ?>
            <?php if ($user->statusAspirante=="2R" || $user->statusAspirante=="3") { ?>
              <p class="font-size-20 blue-grey-700" style="color: #B53F00;margin:30px;">Documentos Faltantes para terminar tu proceso: &nbsp;</p>
              <?php if (!$examenIngles) { ?>
                <div class="row">
                  <div class="col-sm-12 col-md-5" style="margin: 20px;">
                    <ul class="list-group list-group-bordered">
                      <li class="list-group-item list-group-item-action active" style="font-size: 16px;">1. Examen de ingles vigente.</li>
                    </ul>
                  </div>
                  <div class="col-sm-12 col-md-5">
                      <form id="examenPHDForm">
                        <div class="examenPHDAlert">
                        </div>
                        <label style="font-size: 16px;">Documento en PDF</label>
                        <input type="file" data-plugin="dropify" id="examenPHD" name="examenPHD" data-allowed-file-extensions="pdf" data-errors-position="outside">  
                        <button type="button" class="btn btn-block btn-info" style="margin-top:10%;margin-bottom: 10%;" id="btn-examenPHD">Subir</button>
                      </form>
                  </div>
                </div>
              <?php } ?>
              <?php if (!$transFinal) { ?>
                <div class="row">
                  <div class="col-sm-12 col-md-5" style="margin: 20px;">
                    <ul class="list-group list-group-bordered">
                      <li class="list-group-item list-group-item-action active" style="font-size: 16px;">2. Transcripcion Final.</li>
                    </ul>
                  </div>
                  <div class="col-sm-12 col-md-5">
                      <form id="transFinalPHDForm">
                        <div class="transFinalPHDAlert">
                        </div>
                        <label style="font-size: 16px;">Documento en PDF</label>
                        <input type="file" data-plugin="dropify" id="transFinalPHD" name="transFinalPHD" data-allowed-file-extensions="pdf" data-errors-position="outside">  
                        <button type="button" class="btn btn-block btn-info" style="margin-top:10%;margin-bottom: 10%;" id="btn-transFinalPHD">Subir</button>
                      </form>
                  </div>
                </div>
              <?php } ?>
              <?php if (!$titulo) { ?>
                <div class="row">
                  <div class="col-sm-12 col-md-5" style="margin: 20px;">
                    <ul class="list-group list-group-bordered">
                      <li class="list-group-item list-group-item-action active" style="font-size: 16px;">3. Titulo/ Acta de examen/ Carta Constancia.</li>
                    </ul>
                  </div>
                  <div class="col-sm-12 col-md-5">
                      <form id="tituloPHDForm">
                        <div class="tituloPHDAlert">
                        </div>
                        <label style="font-size: 16px;">Documento en PDF</label>
                        <input type="file" data-plugin="dropify" id="tituloPHD" name="tituloPHD" data-allowed-file-extensions="pdf" data-errors-position="outside">  
                        <button type="button" class="btn btn-block btn-info" style="margin-top:10%;margin-bottom: 10%;" id="btn-tituloPHD">Subir</button>
                      </form>
                  </div>
                </div>
              <?php } ?>
              <?php if (!$ATAS) { ?>
                <div class="row">
                  <div class="col-sm-12 col-md-5" style="margin: 20px;">
                    <ul class="list-group list-group-bordered">
                      <li class="list-group-item list-group-item-action active" style="font-size: 16px;">4. ATAS.</li>
                    </ul>
                  </div>
                  <div class="col-sm-12 col-md-5">
                      <form id="ATASPHDForm">
                        <div class="ATASPHDAlert">
                        </div>
                        <label style="font-size: 16px;">Documento en PDF</label>
                        <input type="file" data-plugin="dropify" id="ATASPHD" name="ATASPHD" data-allowed-file-extensions="pdf" data-errors-position="outside">  
                        <button type="button" class="btn btn-block btn-info" style="margin-top:10%;margin-bottom: 10%;" id="btn-ATASPHD">Subir</button>
                      </form>
                  </div>
                </div>
              <?php } ?>
              <?php if (!$visa) { ?>
                <div class="row">
                  <div class="col-sm-12 col-md-5" style="margin: 20px;">
                    <ul class="list-group list-group-bordered">
                      <li class="list-group-item list-group-item-action active" style="font-size: 16px;">5. Visa.</li>
                    </ul>
                  </div>
                  <div class="col-sm-12 col-md-5">
                    <form id="visaPHDForm">
                      <div class="visaPHDAlert">
                      </div>
                      <label style="font-size: 16px;">Documento en PDF</label>
                      <input type="file" data-plugin="dropify" id="visaPHD" name="visaPHD" data-allowed-file-extensions="pdf" data-errors-position="outside">  
                      <button type="button" class="btn btn-block btn-info" style="margin-top:10%;margin-bottom: 10%;" id="btn-visaPHD">Subir</button>
                    </form>
                  </div>
                </div>
              <?php } ?>
            <?php } ?>
          <?php } ?>
          <?php if(@$infoAspirantePrepa) {?>
            <?php if (!$pasaporte) { ?>
              <div class="row">
                <div class="col-sm-12 col-md-5" style="margin: 20px;">
                  <ul class="list-group list-group-bordered">
                    <li class="list-group-item list-group-item-action active" style="font-size: 16px;">1. Copia escaneada de la página de foto del pasaporte, documento original escaneado.</li>
                  </ul>
                </div>
                <div class="col-sm-12 col-md-5">
                    <form id="pasaportePrepaForm">
                      <div class="pasaportePrepaAlert">
                      </div>
                      <label style="font-size: 16px;">Documento original en PDF</label>
                      <input type="file" data-plugin="dropify" id="pasaportePrepa" name="pasaportePrepa" data-allowed-file-extensions="pdf" data-errors-position="outside">  
                      <button type="button" class="btn btn-block btn-info" style="margin-top:10%;margin-bottom: 10%;" id="btn-pasaportePrepa">Subir</button>
                    </form>
                </div>
              </div>
            <?php } ?>
            <?php if(!$boleta || @!$boletaTraduccion) {?>
              <div class="row">
                <div class="col-sm-12 col-md-5" style="margin: 20px;">
                  <ul class="list-group list-group-bordered">
                    <li class="list-group-item list-group-item-action active" style="font-size: 16px;">2. Copia escaneada de la boleta de calificaciones de los dos últimos años de estudio..</li>
                  </ul>
                </div>
                <div class="col-sm-12 col-md-5">
                  <?php if(!$boleta){ ?>
                    <form id="boletaPrepaForm">
                      <div class="boletaPrepaAlert">
                      </div>
                      <label style="font-size: 16px;">Documento original en PDF</label>
                      <input type="file" data-plugin="dropify" id="boletaPrepa" name="boletaPrepa" data-allowed-file-extensions="pdf" data-errors-position="outside">  
                      <button type="button" class="btn btn-block btn-info" style="margin-top:10%;margin-bottom: 10%;" id="btn-boletaPrepa">Subir</button>
                    </form>
                  <?php } ?>
                  
                  <?php if(@!$boletaTraduccion){ ?>
                    <form id="boletaTraduccionPrepaForm">
                      <div class="boletaTraduccionPrepaAlert">
                      </div>
                      <label style="font-size: 16px;">Documento en ingles en formato PDF|WORD</label>
                      <input type="file" data-plugin="dropify" id="BoletaTraduccionPrepa" name="BoletaTraduccionPrepa" data-allowed-file-extensions="pdf doc docx" data-errors-position="outside">  
                      <button type="button" class="btn btn-block btn-info" style="margin-top:10%;margin-bottom: 10%;" id="btn-boletaTraduccionPrepa">Subir</button>
                    </form>
                  <?php } ?>
                </div>
              </div>
            <?php } ?>
            <?php if (!$cartaMotivo) { ?>
              <div class="row">
                <div class="col-sm-12 col-md-5" style="margin: 20px;">
                  <ul class="list-group list-group-bordered">
                    <li class="list-group-item list-group-item-action active" style="font-size: 16px;">3. Carta de motivos (en inglés).</li>
                  </ul>
                </div>
                <div class="col-sm-12 col-md-5">
                    <form id="cartaMotivosPrepaForm">
                      <div class="cartaMotivosPrepaAlert">
                      </div>
                      <label style="font-size: 16px;">Documento en PDF|WORD</label>
                      <input type="file" data-plugin="dropify" id="cartaMotivosPrepa" name="cartaMotivosPrepa" data-allowed-file-extensions="pdf doc docx" data-errors-position="outside">  
                      <button type="button" class="btn btn-block btn-info" style="margin-top:10%;margin-bottom: 10%;" id="btn-cartaMotivosPrepa">Subir</button>
                    </form>
                </div>
              </div>
            <?php } ?>
            <?php if (!$cartasRecomendacion) { ?>
              <div class="row">
                <div class="col-sm-12 col-md-5" style="margin: 20px;">
                  <ul class="list-group list-group-bordered">
                    <li class="list-group-item list-group-item-action active" style="font-size: 16px;">4. Carta Recomendacion.</li>
                  </ul>
                </div>
                <div class="col-sm-12 col-md-5">
                    <form id="recomendPrepaForm">
                      <div class="recomendPrepaAlert">
                      </div>
                      <label style="font-size: 16px;">Documento en PDF|WORD</label>
                      <input type="file" data-plugin="dropify" id="recomendPrepa" name="recomendPrepa" data-allowed-file-extensions="pdf doc docx" data-errors-position="outside">  
                      <button type="button" class="btn btn-block btn-info" style="margin-top:10%;margin-bottom: 10%;" id="btn-recomendPrepa">Subir</button>
                    </form>
                </div>
              </div>
            <?php } ?>
            <?php if (!$cartasAutorizacon) { ?>
              <div class="row">
                <div class="col-sm-12 col-md-5" style="margin: 20px;">
                  <ul class="list-group list-group-bordered">
                    <li class="list-group-item list-group-item-action active" style="font-size: 16px;">5. Carta De Autorización.</li>
                  </ul>
                </div>
                <div class="col-sm-12 col-md-5">
                    <form id="autoPrepaForm">
                      <div class="autoPrepaAlert">
                      </div>
                      <label style="font-size: 16px;">Documento en PDF</label>
                      <input type="file" data-plugin="dropify" id="autoPrepa" name="autoPrepa" data-allowed-file-extensions="pdf" data-errors-position="outside">  
                      <button type="button" class="btn btn-block btn-info" style="margin-top:10%;margin-bottom: 10%;" id="btn-autoPrepa">Subir</button>
                    </form>
                </div>
              </div>
            <?php } ?>
            <?php if (!$formatoSolicitud) { ?>
              <div class="row">
                <div class="col-sm-12 col-md-5" style="margin: 20px;">
                  <ul class="list-group list-group-bordered">
                    <li class="list-group-item list-group-item-action active" style="font-size: 16px;">6. Formato De Solicitud.</li>
                  </ul>
                </div>
                <div class="col-sm-12 col-md-5">
                    <form id="formatoSolicitudForm">
                      <div class="formatoSolicitudAlert">
                      </div>
                      <label style="font-size: 16px;">Documento en PDF|WORD</label>
                      <input type="file" data-plugin="dropify" id="formatoSolicitud" name="formatoSolicitud" data-allowed-file-extensions="pdf doc docx" data-errors-position="outside">  
                      <button type="button" class="btn btn-block btn-info" style="margin-top:10%;margin-bottom: 10%;" id="btn-formatoSolicitud">Subir</button>
                    </form>
                </div>
              </div>
            <?php } ?>
            <?php if ($user->statusAspirante=="2R" || $user->statusAspirante=="3") { ?>
              <p class="font-size-20 blue-grey-700" style="color: #B53F00;margin:30px;">Documentos Faltantes para terminar tu proceso: &nbsp;</p>
              <?php if (!$examenIngles) { ?>
                <div class="row">
                  <div class="col-sm-12 col-md-5" style="margin: 20px;">
                    <ul class="list-group list-group-bordered">
                      <li class="list-group-item list-group-item-action active" style="font-size: 16px;">1. Examen de ingles vigente.</li>
                    </ul>
                  </div>
                  <div class="col-sm-12 col-md-5">
                      <form id="examenPrepaForm">
                        <div class="examenPrepaAlert">
                        </div>
                        <label style="font-size: 16px;">Documento en PDF</label>
                        <input type="file" data-plugin="dropify" id="examenPrepa" name="examenPrepa" data-allowed-file-extensions="pdf" data-errors-position="outside">  
                        <button type="button" class="btn btn-block btn-info" style="margin-top:10%;margin-bottom: 10%;" id="btn-examenPrepa">Subir</button>
                      </form>
                  </div>
                </div>
              <?php } ?>
              <?php if (!$boletaFinal) { ?>
                <div class="row">
                  <div class="col-sm-12 col-md-5" style="margin: 20px;">
                    <ul class="list-group list-group-bordered">
                      <li class="list-group-item list-group-item-action active" style="font-size: 16px;">2. Boleta de calificaciones finales.</li>
                    </ul>
                  </div>
                  <div class="col-sm-12 col-md-5">
                    <form id="boletaFinalPrepaForm">
                      <div class="boletaFinalPrepaAlert">
                      </div>
                      <label style="font-size: 16px;">Documento en PDF</label>
                      <input type="file" data-plugin="dropify" id="boletaFinalPrepa" name="boletaFinalPrepa" data-allowed-file-extensions="pdf doc docx" data-errors-position="outside">  
                      <button type="button" class="btn btn-block btn-info" style="margin-top:10%;margin-bottom: 10%;" id="btn-boletaFinalPrepa">Subir</button>
                    </form>
                  </div>
                </div>
              <?php } ?>
              <?php if (!$visa) { ?>
                <div class="row">
                  <div class="col-sm-12 col-md-5" style="margin: 20px;">
                    <ul class="list-group list-group-bordered">
                      <li class="list-group-item list-group-item-action active" style="font-size: 16px;">3. Visa.</li>
                    </ul>
                  </div>
                  <div class="col-sm-12 col-md-5">
                    <form id="visaPrepaForm">
                      <div class="visaPrepaAlert">
                      </div>
                      <label style="font-size: 16px;">Documento en PDF</label>
                      <input type="file" data-plugin="dropify" id="visaPrepa" name="visaPrepa" data-allowed-file-extensions="pdf" data-errors-position="outside">  
                      <button type="button" class="btn btn-block btn-info" style="margin-top:10%;margin-bottom: 10%;" id="btn-visaPrepa">Subir</button>
                    </form>
                  </div>
                </div>
              <?php } ?>
            <?php } ?>
          <?php } ?>
          
          

        </div>
        <!---termino uni-->

    </div>

    <div class="col-xxl-5 col-lg-4" >
      <div class="card card-shadow" id="widgetStackedBar">
        <div class="card-block p-0">
        <div class="p-30 h-150" style="margin-bottom: -30px;">
              <p  class="font-size-20 blue-grey-700">Archivos necesarios subidos por un agente:</p>
          </div>   
          <ul class="list-group " >
            <li class="list-group-item">
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
                
                
            </li>     
          </ul>
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

<div class="modal fade modal-fill-in" id="exampleFillIn" aria-hidden="false" aria-labelledby="exampleFillIn"
                    role="dialog" tabindex="-1">
  <div class="modal-dialog modal-simple">
    <div class="modal-content">
      <div class="modal-header">
       
        <h1 class="modal-title" id="exampleFillInModalTitle" style="color: red;">Tu documento se esta subiendo.</h1>
      </div>
      <div class="modal-body">
        <h4>Espera a que tu documento se suba.Cuando este se suba seras redirecionado a la pagina.</h4>
        
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