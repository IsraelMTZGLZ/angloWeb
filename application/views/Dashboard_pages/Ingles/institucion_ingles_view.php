<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
<!-- Default theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
<!-- Semantic UI theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
<!-- Bootstrap theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>

<div class="page">
    <div class="page-header">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="Home">Home</a></li>
        <li class="breadcrumb-item active">cursos de verano</li>
      </ol>
      <h1 class="page-title">Configuracion de Cursos de Verano</h1>

    </div>

    <!-- Page Content -->
    <div class="page-content container-fluid">

    <div class="row" data-plugin="matchHeight" data-by-row="true">

        <div class="col-xxl-3 col-xl-4">
          <!-- Panel Web Designer -->
          <div class="card card-shadow">
            <div class="card-block bg-white p-38">
                <div class="row" style="display: flex;align-items: center;justify-content: center;">
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#cursoInstitucion">Crear Curso</button>

                </div>
                <hr>
                <ul class="list-group list-group-bordered">
                  <li class="list-group-item list-group-item-action list-group-item-info  active">Lista de Cursos</li>
                  <?php for ($i = 0; $i < count($cursos); $i++) { ?>
                    <li id="<?=@$cursos[$i]['idTipoCurso'];?>" class="list-group-item facultad"><?=@$cursos[$i]['nombreTipoCurso'];?><span class="badge badge-pill badge-info badge-lg"><?=@$cursos[$i]['abreviacionTipoCurso'];?></span></li>

                  <?php } ?>
                </ul>


            </div>

            <div class="card-block bg-white p-38">
                <div class="row" style="display: flex;align-items: center;justify-content: center;">
                    <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#alojamientoModal">Crear Alojamiento</button>

                </div>
                <hr>
                <ul class="list-group list-group-bordered">
                  <li class="list-group-item list-group-item-action active">Lista de Alojamientos</li>
                  <?php for ($i = 0; $i < @count($alojamientos); $i++) { ?>
                    <li id="<?=@$alojamientos[$i]['idTipoAlojamiento'];?>" class="list-group-item alojamiento"><?=@$alojamientos[$i]['nombreTipoAlojamiento'];?><span class="badge badge-pill badge-success badge-lg"><?=@$alojamientos[$i]['abreviacionTipoAlojamiento'];?></span></li>

                  <?php } ?>
                </ul>


            </div>
          </div>

          <!-- End Panel Web Designer -->
        </div>


        <div class="col-xxl-8 col-xl-8">

          <!-- Panel Traffic -->
          <div class="card card-shadow example-responsive border border-primary" id="widgetLinearea">
            <div class="card-block">
            <div class="row" style="display: flex;align-items: center;justify-content: center;">
                    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#institucionModal">Crear Institucion</button>

                </div>
                <hr>
            <div class="row">

            <?php for ($i = 0; $i < count($instituciones); $i++) { ?>
              <div class="col-lg-4">
                <div class="card card-shadow text-center">
                  <div class="card-block">
                    <img class="card-img-top" src="<?=base_url('resources/assets/Informativa/images/uk_universities.jpg');?>" alt="Imagen Institucion">
                    <h4 class="profile-user"><?=@$instituciones[$i]['nombreInstitucion'];?></h4>
                    <p class="profile-job"><?=@$instituciones[$i]['ubicacionInstitucion'];?></p>

                    <button type="button" class="btn btn-round btn-outline btn-info btn-add-cursoInstitucion" id="<?=@$instituciones[$i]['idInstitucion'];?>">Añadir Curso</button>
                    <button type="button" class="btn btn-round btn-outline btn-success btn-add-alojamientoInstitucion" id="<?=@$instituciones[$i]['idInstitucion'];?>">Añadir Alojamiento</button>
                  </div>
                  <div class="card-footer">
                    <div class="row no-space">
                      <div class="col-12">
                        <button type="button" class="btn btn-primary editarInstitucion" id="<?=@$instituciones[$i]['idInstitucion'];?>">Editar Institucion</button>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <?php } ?>

            </div>
          </div>
        </div>
      </div>
    </div>

<!---modal facultad-->

<div class="modal fade" id="cursoInstitucion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Crear Curso</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="cursoForm">
        <div class="modal-body">

                    <div class="form-group form-material" data-plugin="formMaterial">
                    <label class="form-control-label" for="inputText">Nombre:</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" >
                    </div>
                    <div class="form-group form-material" data-plugin="formMaterial">
                    <label class="form-control-label" for="inputText">Abreviación:</label>
                    <input type="text" class="form-control" name="abreviacion" id="abreviacion" >
                    </div>


        </div>
        <div class="modal-footer btns">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
        </div>
      </form>
    </div>
  </div>
</div>


<div class="modal fade" id="edadModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Crear Edad</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="edadForm">
        <div class="modal-body">

                    <div class="form-group form-material" data-plugin="formMaterial">
                    <label class="form-control-label" for="inputText">Nombre:</label>
                    <input type="text" class="form-control" name="nombre" id="nombree" >
                    </div>
                    <div class="form-group form-material" data-plugin="formMaterial">
                    <label class="form-control-label" for="inputText">Abreviación:</label>
                    <input type="text" class="form-control" name="abreviacion" id="abreviacione" >
                    </div>
                    <div class="form-group form-material" data-plugin="formMaterial">
                    <label class="form-control-label" for="inputText">Edad:</label>
                    <input type="text" class="form-control" name="edad" id="edad" >
                    </div>


        </div>
        <div class="modal-footer btns">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="alojamientoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Crear Alojamiento</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="alojamientoForm">
        <div class="modal-body">

                    <div class="form-group form-material" data-plugin="formMaterial">
                    <label class="form-control-label" for="inputText">Nombre:</label>
                    <input type="text" class="form-control" name="nombre" id="nombrea" >
                    </div>
                    <div class="form-group form-material" data-plugin="formMaterial">
                    <label class="form-control-label" for="inputText">Abreviación:</label>
                    <input type="text" class="form-control" name="abreviacion" id="abreviaciona" >
                    </div>


        </div>
        <div class="modal-footer btns">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="institucionModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Crear Institucion</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="InstitucionForm">
        <div class="modal-body">

                    <div class="form-group form-material" data-plugin="formMaterial">
                    <label class="form-control-label" for="inputText">Nombre:</label>
                    <input type="text" class="form-control" name="nombreI" id="nombreI" >
                    </div>
                    <div class="form-group form-material" data-plugin="formMaterial">
                    <label class="form-control-label" for="inputText">Ubicación:</label>
                    <input type="text" class="form-control" name="ubicacion" id="ubicacion" >
                    </div>
                    <div class="form-group form-material" data-plugin="formMaterial">
                    <label class="form-control-label" for="inputText">Logo URL:</label>
                    <textarea type="text" class="form-control" name="url" id="url" ></textarea>
                    </div>


        </div>
        <div class="modal-footer btnsIns">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="addICModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Instituto Campamento</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <ul class="list-group list-group-bordered">
        <li class="list-group-item list-group-item-action active">Lista de Campamentos de: <span class="nombreInstitucion"></span></li>

      </ul>
      <div class="nuevo">

      </div>
      <hr style="background-color: red;height: 1px;">
      <h5 class="modal-title" id="exampleModalLabel" style="margin-left: 10px;color: blue;">Añadir Facultad</h5>
      <form id="addCursoaddInsForm">
        <div class="modal-body">
        <div class="form-group form-material" data-plugin="formMaterial">
        <label class="form-control-label" for="inputText">Campamentos:</label>
                <input type="hidden" name="institucion" id="institucion">
                <select class="form-control" data-plugin="select2" name="tipocurso" id="tipocurso">
                  <option value="" disabled selected>Elige una opcion</option>
                  <?php for ($i = 0; $i < count($cursos); $i++) { ?>
                    <option value="<?=$cursos[$i]['idTipoCurso'];?>"><?=$cursos[$i]['nombreTipoCurso'];?></option>
                  <?php } ;?>
                </select>
              </div>


        </div>
        <div class="modal-footer btnsFI">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Añadir Facultad</button>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="addIEModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar o borrar Permisos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <ul class="list-group list-group-bordered">
        <li class="list-group-item list-group-item-action active">Lista de Campamentos de: <span class="nombreInstitucion"></span></li>

      </ul>
      <div class="nuevoo">

      </div>
      <hr style="background-color: red;height: 1px;">
      <h5 class="modal-title" id="exampleModalLabel" style="margin-left: 10px;color: blue;">Añadir Facultad</h5>
      <form id="addEdadInsForm">
        <div class="modal-body">
        <div class="form-group form-material" data-plugin="formMaterial">
        <label class="form-control-label" for="inputText">Campamentos:</label>
                <input type="hidden" name="institucion" id="institucionn">
                <select class="form-control" data-plugin="select2" name="edad" id="edad">
                  <option value="" disabled selected>Elige una opcion</option>
                  <?php for ($i = 0; $i < count($edades); $i++) { ?>
                    <option value="<?=$edades[$i]['idEdad'];?>"><?=$edades[$i]['edadEdad'];?></option>
                  <?php } ;?>
                </select>
              </div>


        </div>
        <div class="modal-footer btnsFI">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Añadir Facultad</button>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="addIAModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Alojamiento</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <ul class="list-group list-group-bordered">
        <li class="list-group-item list-group-item-action active">Lista de Alojamientos de: <span class="nombreInstitucion"></span></li>

      </ul>
      <div class="nuevo">

      </div>
      <hr style="background-color: red;height: 1px;">
      <h5 class="modal-title" id="exampleModalLabel" style="margin-left: 10px;color: blue;">Añadir Alojamiento</h5>
      <form id="addAlojamientoInsForm">
        <div class="modal-body">
        <div class="form-group form-material" data-plugin="formMaterial">
        <label class="form-control-label" for="inputText">Alojamientos:</label>
                <input type="hidden" name="institucion" id="institucionnn">
                <select class="form-control" data-plugin="select2" name="tipoalojamiento" id="alojamiento">
                  <option value="" disabled selected>Elige una opcion</option>
                  <?php for ($i = 0; $i < count($alojamientos); $i++) { ?>
                    <option value="<?=$alojamientos[$i]['idTipoAlojamiento'];?>"><?=$alojamientos[$i]['nombreTipoAlojamiento'];?> <?=$alojamientos[$i]['idTipoAlojamiento'];?></option>
                  <?php } ;?>
                </select>
              </div>


        </div>
        <div class="modal-footer btnsFI">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Añadir Alojamiento</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="<?=base_url('resources/assets/JS/ServicesJS.js');?>"></script>
<script src="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
