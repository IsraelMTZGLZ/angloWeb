<style>@import url(https://fonts.googleapis.com/css?family=Open+Sans:300,400,600);
@import url(https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css);
.snip1344 {
  font-family: 'Open Sans', Arial, sans-serif;
  position: relative;
  overflow: hidden;
  margin: 10px;
  min-width: 230px;
  max-width: 315px;
  width: 100%;
  color: #ffffff;
  text-align: center;
  line-height: 1.4em;
  background-color: #141414;
}
.snip1344 * {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-transition: all 0.25s ease;
  transition: all 0.25s ease;
}
.snip1344 .background {
  width: 100%;
  vertical-align: top;
  opacity: 0.2;
  -webkit-filter: grayscale(100%) blur(10px);
  filter: grayscale(100%) blur(10px);
  -webkit-transition: all 2s ease;
  transition: all 2s ease;
}
.snip1344 figcaption {
  width: 100%;
  padding: 15px 25px;
  position: absolute;
  left: 0;
  top: 50%;
}
.snip1344 .profile {
  border-radius: 50%;
  position: absolute;
  bottom: 50%;
  left: 50%;
  max-width: 100px;
  opacity: 1;
  box-shadow: 3px 3px 20px rgba(0, 0, 0, 0.5);
  border: 2px solid rgba(255, 255, 255, 0.5);
  -webkit-transform: translate(-50%, 0%);
  transform: translate(-50%, 0%);
}
.snip1344 h3 {
  margin: 0 0 5px;
  font-weight: 400;
}
.snip1344 h3 span {
  display: block;
  font-size: 0.6em;
  color: #f39c12;
  opacity: 0.75;
}
.snip1344 i {
  padding: 10px 5px;
  display: inline-block;
  font-size: 32px;
  color: #ffffff;
  text-align: center;
  opacity: 0.65;
}
.snip1344 a {
  text-decoration: none;
}
.snip1344 i:hover {
  opacity: 1;
  -webkit-transition: all 0.35s ease;
  transition: all 0.35s ease;
}
.snip1344:hover .background,
.snip1344.hover .background {
  -webkit-transform: scale(1.3);
  transform: scale(1.3);
}
.snip1344:hover .profile {
  opacity: 0.3;
}

.snip1344:hover .middle {
  opacity: 1;
}
.middle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
}
</style>
<div class="page">
    <div class="page-content container-fluid">
      <div class="row">
          <div class="col-lg-4 col-sm-12">
            <figure class="snip1344">
                <img src="<?=@($user->photoUrl!='NULL') ? @$user->photoUrl : base_url("resources/assets/Anglo/AngloLatino-sintexto.png") ;?>" alt="profile-sample1" class="background"/>
                <img src="<?=@($user->photoUrl!='NULL') ? @$user->photoUrl : base_url("resources/assets/Anglo/AngloLatino-sintexto.png") ;?>" alt="profile-sample1" class="profile"/>
                <div class="middle" style="margin-top: -15%">
                    <div class="text"><a type="button" class="add-foto" alt="Cambiar Foto" title="Cambiar Foto"><i class="fas fa-plus-circle"></i></a></div>
                </div>
                <figcaption>
                    <h3 style="color: white"><?=$user->fullname?><span><?=$user->email?></span></h3>
                </figcaption>
            </figure>
            <ul class="list-group list-group-full">
              
              <li class="list-group-item snip1344" >
                <h4 class="example-title"><i class="icon fa-user" aria-hidden="true"></i>Correo :</h4>
                <p style="margin-left: 20px">
                  <?=$user->email?>
                </p>
              </li>
              <?php if($user->typeOauthUsuario!="Google") { ?>
              <li class="list-group-item snip1344" >
                <h4 class="example-title"><i class="icon fa-key" aria-hidden="true"></i>Contraseña :</h4>
                <p style="margin-left: 20px">
                  *****
                </p>
              </li>
              <li class="list-group-item list-group-item-action active snip1344">
                <button type="button" class="btn btn-primary btn-block btn-lg edit-password">Editar Contraseña</button>
              </li>
              <?php } ?>
            </ul>
            <ul class="list-group list-group-full">
              
              <li class="list-group-item snip1344" >
                <h4 class="example-title"><i class="icon fa-file-pdf-o" aria-hidden="true"></i>Mis documentos :</h4>
                <p style="margin-left: 20px">
                  Para ver tus documentos ve a la seccion de mis archivos.
                </p>
                <a type="button" class="btn btn-primary" href="MisArchivos">Ir</a>

              </li>
            </ul>
          </div>
          <div class="col-lg-8 col-sm-12">
            <div class="card" style="-webkit-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);-moz-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);">
              <div class="card-body">
                <div class="row">
                  <div class="col-lg-6 col-sm-12">
                    <div class="card border-light mb-3">
                      <div class="card-header text-center" style="background: black;color: white">
                        Informacion basica
                      </div>
                      <div class="card-body">
                        <ul class="list-group list-group-full">
                          <li class="list-group-item">
                            <h4 class="example-title"><i class="icon fa-user" aria-hidden="true"></i>Nombre (s):</h4>
                            <p style="margin-left: 20px">
                              <?=$user->names?>
                            </p>
                          </li>
                          <li class="list-group-item">
                            <h4 class="example-title"><i class="icon fa-user" aria-hidden="true"></i>Apellido (s):</h4>
                            <p style="margin-left: 20px">
                              <?=$user->paterns?>
                            </p>
                          </li>
                          <li class="list-group-item">
                            <h4 class="example-title"><i class="icon fa-intersex" aria-hidden="true"></i>Genero :</h4>
                            <p style="margin-left: 20px">
                              <?=$user->genero?>
                            </p>
                          </li>
                          <li class="list-group-item">
                            <h4 class="example-title"><i class="icon wb-calendar" aria-hidden="true"></i>Fecha de nacimiento :</h4>
                            <p style="margin-left: 20px">
                              <?=$user->fechaNacimiento?>
                            </p>
                          </li>
                          <li class="list-group-item">
                            <h4 class="example-title"><i class="icon fa-phone" aria-hidden="true"></i>Telefono :</h4>
                            <p style="margin-left: 20px">
                              <?=$user->telefono?>
                            </p>
                          </li>
                          <li class="list-group-item">
                            <h4 class="example-title"><i class="icon fa-map-marker" aria-hidden="true"></i>Ciudad :</h4>
                            <p style="margin-left: 20px">
                              <?=$user->ciudad?>
                            </p>
                          </li>
                          <li class="list-group-item list-group-item-action active">
                            <button type="button" class="btn btn-primary btn-block edit-info">Editar Informacion</button>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6 col-sm-12">
                    <div class="card border-light mb-3">
                      <div class="card-header text-center" style="background: black;color: white">
                        Informacion Aplicante
                      </div>
                      <div class="card-body">
                        <ul class="list-group list-group-full">
                          <li class="list-group-item">
                            <h4 class="example-title"><i class="icon fa-book" aria-hidden="true"></i>Programa de interes:</h4>
                            <p style="margin-left: 20px">
                              <?=$user->programaDeInteres?>
                            </p>
                          </li>
                          <li class="list-group-item">
                            <hr>
                          </li>
                          <?php if(@$infoAspiranteUni) { ?>
                            <li class="list-group-item">
                              <h4 class="example-title"><i class="icon fa-flask" aria-hidden="true"></i>Facultad:</h4>
                              <p style="margin-left: 20px">
                                <?=$infoAspiranteUni['nombreFacultad']?>
                              </p>
                            </li>
                            <li class="list-group-item">
                              <h4 class="example-title"><i class="icon fa-graduation-cap" aria-hidden="true"></i>Tipo de estudio de interes:</h4>
                              <p style="margin-left: 20px">
                                <?=$infoAspiranteUni['estudiosAspiranteUniversidad']?>
                              </p>
                            </li>
                            <li class="list-group-item">
                              <h4 class="example-title"><i class="icon fa-calendar-check-o" aria-hidden="true"></i>Año y Mes de ingreso:</h4>
                              <p style="margin-left: 20px">
                                <?=$infoAspiranteUni['anio']?> - <?=$infoAspiranteUni['mes']?>
                              </p>
                            </li>
                          <?php } ?>
                          <?php if(@$infoAspirantePrepa) { ?>
                            <li class="list-group-item">
                              <h4 class="example-title"><i class="icon fa-graduation-cap" aria-hidden="true"></i>Tipo de estudio de interes:</h4>
                              <p style="margin-left: 20px">
                                <?=$infoAspirantePrepa['nombreTipoEstudio']?>
                              </p>
                            </li>
                            <li class="list-group-item">
                              <h4 class="example-title"><i class="icon fa-graduation-cap" aria-hidden="true"></i>Tipo de alojamiento de interes:</h4>
                              <p style="margin-left: 20px">
                                <?=$infoAspirantePrepa['nombreTipoAlojamiento']?>
                              </p>
                            </li>
                            <li class="list-group-item">
                              <h4 class="example-title"><i class="icon fa-calendar-check-o" aria-hidden="true"></i>Año y Mes de ingreso:</h4>
                              <p style="margin-left: 20px">
                                <?=$infoAspirantePrepa['anio']?> - <?=$infoAspirantePrepa['mes']?>
                              </p>
                            </li>
                          <?php } ?>
                          <li class="list-group-item">
                            <hr>
                          </li>
                        </ul>


                      </div>
                    </div>
                  </div>
                  
                  <?php if(@$universidades) { ?>
                    <div class="col-lg-12 col-sm-12">
                      <div class="card border-light mb-3">
                        <div class="card-header text-center" style="background: black;color: white">
                          Universidades Seleccionadas
                        </div>
                        <div class="card-body">
                        <ul class="list-group list-group-full">
                          <?php for($i = 0; $i < count($universidades); $i++) { ?>
                            <li class="list-group-item">
                              <div class="row">
                                <div class="col-4">
                                  <img src="<?=$universidades[$i]['logoInstitucion']?>" style="max-height: 100%;max-width: 100%">
                                </div>
                                <div class="col-8" style="margin-top: 5%">
                                  <h4><?=$universidades[$i]['nombreInstitucion']?></h4>
                                  
                                </div>
                              </div>
                            </li>
                          <?php } ?>
                        </ul>


                        </div>
                      </div>
                    </div>
                  <?php } ?>
                  <?php if(@$preparatorias) { ?>
                    <div class="col-lg-12 col-sm-12">
                      <div class="card border-light mb-3">
                        <div class="card-header text-center" style="background: black;color: white">
                          Preparatorias Seleccionadas
                        </div>
                        <div class="card-body">
                        <ul class="list-group list-group-full">
                          <?php for($i = 0; $i < count($preparatorias); $i++) { ?>
                            <li class="list-group-item">
                              <div class="row">
                                <div class="col-4">
                                  <img src="<?=$preparatorias[$i]['logoInstitucion']?>" style="max-height: 100%;max-width: 100%">
                                </div>
                                <div class="col-8" style="margin-top: 5%">
                                  <h4><?=$preparatorias[$i]['nombreInstitucion']?></h4>
                                  
                                </div>
                              </div>
                            </li>
                          <?php } ?>
                        </ul>


                        </div>
                      </div>
                    </div>
                  <?php } ?>

                </div>
              </div>
            </div>
          </div>
      </div>

    </div>
</div>

<div class="modal fade" id="examplePositionCenter" aria-hidden="true" aria-labelledby="examplePositionCenter" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-simple modal-center">
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title">Cambiar Foto</h4>
        </div>
        <div class="modal-body">
            <input type="hidden" name="photo" id="photo" value="<?=@$user->photo?>">
            <input type="hidden" name="persona" id="persona" value="<?=@$user->persona?>">
            <form id="photoUserForm">
                <ul class="list-group list-group-bordered">
                    <li class="list-group-item list-group-item-action active" style="font-size: 16px;">Inserta la foto que deseas utilizar.</li>
                </ul>
                <div class="photoUserAlert">
                </div>
                <div class="row">
                    <div class="col-md-8 col-sm-12">
                        <input type="file" id="input-file-now" data-plugin="dropify" data-default-file="" id="PhotoUser" name="PhotoUser">

                    </div>
                    <div class="col-md-4 col-sm-12 vertical-align-middle">
                    <button type="button" class="btn btn-block btn-info" style="margin-top:20%" id="btn-photoUser">Subir</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>
</div>

<div class="modal fade" id="modalPassword" aria-hidden="true" aria-labelledby="examplePositionCenter" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-simple modal-center">
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title">Cambiar Contraseña</h4>
        </div>
        <input type="hidden" name="usuario" id="usuario" value="<?=@$user->usuario?>">

        <form id="passwordForm">
          <div class="modal-body">
            <div class="responseText"></div>            
                <div class="form-group form-material" data-plugin="formMaterial">
                  <label class="form-control-label" for="passwordActual">Contraseña Actual</label>
                  <input type="password" class="form-control" id="passwordActual" name="passwordActual" >
                </div>
                <div class="form-group form-material" data-plugin="formMaterial">
                  <label class="form-control-label" for="passwordNuevo">Contraseña Nueva</label>
                  <input type="password" class="form-control" id="passwordNuevo" name="passwordNuevo">
                </div>
                <div class="form-group form-material" data-plugin="formMaterial">
                  <label class="form-control-label" for="passwordNuevoR">Repetir contraseña</label>
                  <input type="password" class="form-control" id="passwordNuevoR" name="passwordNuevoR">
                </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Save changes</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </form>
    </div>
    </div>
</div>

<div class="modal fade" id="modalInformacion" aria-hidden="true" aria-labelledby="examplePositionCenter" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-simple modal-center">
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title">Cambiar Información</h4>
        </div>

        <form id="informacionForm">
          <input type="hidden" name="persona" id="persona" value="<?=@$user->persona?>">
          <input type="hidden" name="aspirante" id="aspirante" value="<?=@$user->aspirante?>">
          <div class="modal-body">
            <div class="responseIText"></div>            
                <div class="form-group form-material" data-plugin="formMaterial">
                  <label class="form-control-label" for="nombre">Nombre (s):</label>
                  <input type="text" class="form-control" id="nombre" name="nombre" value="<?=$user->names?>">
                </div>
                <div class="form-group form-material" data-plugin="formMaterial">
                  <label class="form-control-label" for="apellido">Apellido (s):</label>
                  <input type="text" class="form-control" id="apellido" name="apellido" value="<?=$user->paterns?>">
                </div>
                <div class="form-group form-material" data-plugin="formMaterial">
                  <label class="form-control-label" for="gender">Genero :</label>
                  <select name="gender" id="gender" class="form-control" data-plugin="select2">
                    <option value="Femenino" <?php  echo ($user->genero == "Femenino") ? 'selected' : '';  ?> >Femenino</option>
                    <option value="Masculino" <?php  echo ($user->genero == "Masculino") ? 'selected' : '';  ?>>Masculino</option>
                  </select>                
                </div>
                
                <div class="form-group form-material" data-plugin="formMaterial">
                  <label class="form-control-label" for="fechaNacimiento">Fecha de nacimiento :</label>
                  <input type="date" class="form-control" id="fechaNacimiento" name="fechaNacimiento" value="<?=$user->fechaNacimiento?>">
                </div>
                <div class="form-group form-material" data-plugin="formMaterial">
                  <label class="form-control-label" for="ciudad">Ciudad de origen :</label>
                  <select class="form-control ciudad" data-plugin="select2">
                    <option value="" disabled selected>Elige una opcion</option>
                    <?php for ($i=0; $i < count($countries); $i++) {  ;?>
                    <option value="<?=$countries[$i]['name']?>,<?=$countries[$i]['callingCodes'][0];?>" <?php  echo ($user->ciudad == $countries[$i]['name']) ? 'selected' : '';  ?>><?=$countries[$i]['name'];?></option>
                    <?php } ;?>
                  </select>
                </div>
                <input type="hidden"  name="ciudad" id="ciudad" value="<?=$user->ciudad?>">
                <div class="form-group form-material" data-plugin="formMaterial">
                  <label class="form-control-label" for="telefono">Telefono con lada :</label>
                  <input type="tel" class="form-control" id="telefono" name="telefono" value="<?=$user->telefono?>">
                </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Save changes</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </form>
    </div>
    </div>
</div>
