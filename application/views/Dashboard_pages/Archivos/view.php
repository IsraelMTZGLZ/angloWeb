<div class="page-content containerC-fluid" >
  <div class="row" data-plugin="matchHeight" data-by-row="true">
    <div class="col-xxl-7 col-lg-8">

      <!--Eligio universidad-->
        <div class="card card-shadow card-responsive" id="widgetLineareaColor">
          
          <p class="font-size-20 blue-grey-700" style="color: #B53F00;margin:30px;">Tus Documentos: &nbsp;</p>
         
          <div class="row">
            <?php if(@!$documentos) { ?>
              <div class="card " style="margin-left:50px;">
              <img class="card-img-top img-fluid w-full" src="https://www.mygotoit.com/files/2020/01/file-2-resized.jpg" alt="Card image cap" style="max-width: 50%">
              <div class="card-block">
                <h4 class="card-title">No cuentas con documentos subidos.</h4>
                <p class="card-text">Regresa al inicio para subir los archivos necesarios.</p>
              </div>
              <div class="card-block">
                <a href="Home" class="btn btn-primary">Ir al inicio</a>
              </div>
            </div>
            <?php } ?>
            <?php for($i=0; $i< count($documentos);$i++) {?>
            <div class="col-lg-5 col-sm-12" style="margin: 30px;">
              <div class="card card-shadow text-center">
                <div class="card-block">
                  <a class="avatar avatar-lg" href="<?=@'http://localhost/angloApi'.$documentos[$i]['urlDocumento']?>" target="_blank" style="width: 110px;">
                    <img src="https://img.icons8.com/clouds/2x/pdf-2.png" alt="Icon PDF">
                  </a>
                  <h4 class="profile-user"><?=$documentos[$i]['nombreDocumento']?></h4>
                  <p class="profile-job">Fecha de subida: <?=$documentos[$i]['creationDateDocumento']?></p>
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


