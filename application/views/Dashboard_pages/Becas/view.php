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

<div class="page-content containerC-fluid" >
  <div class="row" data-plugin="matchHeight" data-by-row="true">
    <div class="col-xxl-8 col-lg-8">
      <!--Eligio universidad-->
        <div class="card card-shadow card-responsive" id="widgetLineareaColor" style="box-shadow: 0 0 5px 1px rgba(52, 52, 52, 0.224);border-radius: 20px;">
          <div class="row" style="margin-left: 10px;">
              <h2 style="color: #9E9E9E;">Archivos subidos para las becas:</h2>
          </div>
          <div class="row">
            <?php if (@$BecasDocs) { ?>
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
                    <div class="col-xl-5" style="margin: 20px;">
                        <div class="card <?=$color?>" style="box-shadow: 0 0 5px 1px rgba(52, 52, 52, 0.224);border-radius: 20px;">
                            <img class="card-img-top" src="https://www.cori.cinvestav.mx/portals/cori/img/becas.jpg">
                            <div class="card-body">
                                <h4 class="card-title" style="margin-left: 20px;"><?=@$BecasDocs[$i]['nameDocumento']?></h4>
                                <p class="card-text" style="color: black;">Descripcion: <br></p>
                                <p><?=@$BecasDocs[$i]['descDocumento']?></p>
                                <a class="btn btn-primary disabled" style="color: white !important;"><?=@$BecasDocs[$i]['statusDocumento']?></a>
                                <?php if ($BecasDocs[$i]['motivo']) { ?>
                                  <br>
                                  <p style="color: black;margin-top: 10px;">Motivo por el cual fue rechazado:</p>
                                  <p><?=@$BecasDocs[$i]['motivo']?></p>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            <?php } ?>
          </div>
          
        </div>

    </div>

    <div class="col-xxl-4 col-lg-4" >
        <input type="hidden" id="nameAspiranteKey" value="<?=$carpetaName?>">
        <input type="hidden" id="aspiranteKey" value="<?=@$user->aspirante?>">

      <div class="card card-shadow card-responsive" id="widgetStackedBar" style="box-shadow: 0 0 5px 1px rgba(52, 52, 52, 0.224);border-radius: 20px;">
        <div class="card-block p-0">
            <div class="row" style="margin-left: 10px;">
              <h2 style="color: #9E9E9E;"> Subir archivos:</h2>
            </div>
            <form id="formBeca" style="margin: 20px;">
                <input type="file" data-plugin="dropify" id="Beca" name="Beca" data-errors-position="outside">  
            </form>
            <div class="example-wrap" style="margin: 10px;">
                <h4 class="example-title" style="margin-left: 10px;">Nombre del archivo:</h4>
                <p>Escribe un nombre al arhcivo que pueda ayudar al agente a saber que archivo es y le permita saber mas del archivo.(No usar acentos ni caracteres especiales -/()@).</p>
                <input type="text" class="form-control round" id="nombreDocumento" name="nombreDocumento">
            </div>
            <div class="example-wrap" style="margin: 10px;">
                <h4 class="example-title" style="margin-left: 10px;">Descripcion:</h4>
                <p>Escribe la descripcion de lo que se requiere que se haga con el documento, una descripcion que pueda ayduar al agente a saber que hacer con el archivo.</p>
                <textarea class="form-control" id="descDocumento" name="descDocumento" style="height: 200px;resize: none;"></textarea>
            </div>
            <div class="becaAlert"></div>
            <button type="button" class="btn btn-block btn-primary" style="margin: 15px;max-width: 390px;" id="subirBeca">Subir archivo</button>
        </div>
        <div class="p-30 h-150">
              <p  class="font-size-20 blue-grey-700">Contactar:</p>
              <p  class="font-size-15 blue-grey-700">Si tienes dudas sobre el proceso de tus archivos o por algun tipo dde estado de tus archivos contactanos por los siguientes medios:</p>
          </div>
          <ul class="list-group list-group-bordered" style="margin:15px;margin-bottom: 150px;">
            <li class="list-group-item">
              <a type="button" class="btn btn-block" style="background-color:#171A21;color:white;" href="tel:+524422609090"><i class="icon fas fa-phone" aria-hidden="true"></i>Llamar</a>
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
            <li class="list-group-item">
              <a type="button" class="btn btn-block social-facebook" href="https://m.me/AngloLatino/" target="_blank"><i class="icon bd-facebook" aria-hidden="true"></i>Messenger facebook</a>
            </li>       
          </ul>
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