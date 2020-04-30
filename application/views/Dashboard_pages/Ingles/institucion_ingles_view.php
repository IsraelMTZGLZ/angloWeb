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
                  <?php for ($i = 0; $i < count($alojamientos); $i++) { ?>
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
                    <img class="card-img-top" src="<?=@ ($instituciones[$i]['logoInstitucion']) ? $instituciones[$i]['logoInstitucion'] : base_url("resources/assets/Anglo/AngloLatino-sintexto.png");?>" alt="Imagen Institucion">
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
        <h5 class="modal-title" id="exampleModalLabel">Agregar o borrar Permisos</h5>
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
      <form id="addAlojamientoInsForm">
        <div class="modal-body">
        <div class="form-group form-material" data-plugin="formMaterial">
        <label class="form-control-label" for="inputText">Alojamientos:</label>
                <input type="hidden" name="institucion" id="institucionnn">
                <select class="form-control" data-plugin="select2" name="alojamiento" id="alojamiento">
                  <option value="" disabled selected>Elige una opcion</option>
                  <?php for ($i = 0; $i < count($alojamientos); $i++) { ?>
                    <option value="<?=$alojamientos[$i]['idTipoAlojamiento'];?>"><?=$alojamientos[$i]['nombreTipoAlojamiento'];?></option>
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

<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="<?=base_url('resources/assets/JS/ServicesJS.js');?>"></script>
<script src="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

<script>
    $(document).ready(function()
    {
        var id;
        var idInstitucion;
        $(document).on('click','.facultad',function(){
           id = this.id;
           console.info(id);
           _url = _principalURL()+"TipoCursos/api/tipoCursos/id/"+id;

            $.ajax({
                url : _url,
                method : 'get',
                headers : {
                'X-API-KEY':'ANGLOKEY'
                },
                success : function(_response){

                    $(document).find('#nombre').val(_response.data.nombreTipoCurso);
                    $(document).find('#abreviacion').val(_response.data.abreviacionTipoCurso);

                        $(document).find('.btns').html(
                        '<div class="row">'+
                            '<div class="col">'+
                            '<button type="button" class="btn btn-danger btn-cancel" data-dismiss="modal">Cancelar</button>'+
                            '</div>'+
                            '<div class="col">'+
                            '<button type="submit" class="btn btn-primary btn-update">Update</button>'+
                            '</div>'+
                            '<div class="col">'+
                            '<button type="button" class="btn btn-warning btn-delete">Delete</button>'+
                            '</div>'+
                        '</div>'
                        );

                        $(document).find('#cursoForm').append(
                        '<input type="hidden" id="id" value="'+
                        _response.data.idTipoCurso+'">'
                        );

                        $('#cursoInstitucion').modal('show');

                },error : function(error){

                }
            });
        });



        $(document).on('submit','#cursoForm',function(event){
            event.preventDefault();
            clearForm('cursoForm');
            var _id=$(document).find('#id').val();
            if(_id){
                _url = _principalURL()+"TipoCursos/api/tipoCursos/id/"+id;
                _method = 'PUT';
            }else{
                _url = _principalURL()+"TipoCursos/api/tipoCursos/";
                _method = 'POST';
            }
                $.ajax({
                    url: _url,
                    method : _method,
                    headers : {
                    'X-API-KEY':'ANGLOKEY'
                    },
                    data: $(document).find('#cursoForm').serialize(),
                    success : function(_response){
                        response = JSON.stringify(_response);
                        if (_response.status=="error") {
                            $.each(_response.validations,function(key,message){
                                $(document).find('#'+key).addClass('is-invalid').after('<div class="invalid-feedback">'+message+'</div>')
                            });
                        }
                        if (_response.status=="success") {
                            setTimeout(function(){
                                location.reload();

                            },2000);
                        }

                        tostada(_response.status,_response.message);


                    },error : function(err){

                    }
            });
        });


        $(document).on('click','.edad',function(){
           id = this.id;
           console.info(id);
           _url = _principalURL()+"Edad/api/edad/id/"+id;

            $.ajax({
                url : _url,
                method : 'get',
                headers : {
                'X-API-KEY':'ANGLOKEY'
                },
                success : function(_response){

                    $(document).find('#nombree').val(_response.data.nombreEdad);
                    $(document).find('#abreviacione').val(_response.data.abreviacionEdad);
                    $(document).find('#edad').val(_response.data.edadEdad);

                        $(document).find('.btns').html(
                        '<div class="row">'+
                            '<div class="col">'+
                            '<button type="button" class="btn btn-danger btn-cancel" data-dismiss="modal">Cancelar</button>'+
                            '</div>'+
                            '<div class="col">'+
                            '<button type="submit" class="btn btn-primary btn-update">Update</button>'+
                            '</div>'+
                            '<div class="col">'+
                            '<button type="button" class="btn btn-warning btn-delete-edad">Delete</button>'+
                            '</div>'+
                        '</div>'
                        );

                        $(document).find('#edadForm').append(
                        '<input type="hidden" id="id" value="'+
                        _response.data.idEdad+'">'
                        );

                        $('#edadModal').modal('show');

                },error : function(error){

                }
            });
        });

        $(document).on('submit','#edadForm',function(event){
            event.preventDefault();
            clearForm('edadForm');
            var _id=$(document).find('#id').val();
            if(_id){
                _url = _principalURL()+"Edad/api/edad/id/"+id;
                _method = 'PUT';
            }else{
                _url = _principalURL()+"Edad/api/edad/";
                _method = 'POST';
            }
                $.ajax({
                    url: _url,
                    method : _method,
                    headers : {
                    'X-API-KEY':'ANGLOKEY'
                    },
                    data: $(document).find('#edadForm').serialize(),
                    success : function(_response){
                        response = JSON.stringify(_response);
                        if (_response.status=="error") {
                            $.each(_response.validations,function(key,message){
                                $(document).find('#'+key).addClass('is-invalid').after('<div class="invalid-feedback">'+message+'</div>')
                            });
                        }
                        if (_response.status=="success") {
                            setTimeout(function(){
                                location.reload();

                            },2000);
                        }

                        tostada(_response.status,_response.message);


                    },error : function(err){

                    }
            });
        });

        $(document).on('click','.alojamiento',function(){
           id = this.id;
           console.info(id);
           _url = _principalURL()+"TipoAlojamiento/api/tipoAlojamiento/id/"+id;

            $.ajax({
                url : _url,
                method : 'get',
                headers : {
                'X-API-KEY':'ANGLOKEY'
                },
                success : function(_response){

                    $(document).find('#nombrea').val(_response.data.nombreTipoAlojamiento);
                    $(document).find('#abreviaciona').val(_response.data.abreviacionTipoAlojamiento);

                        $(document).find('.btns').html(
                        '<div class="row">'+
                            '<div class="col">'+
                            '<button type="button" class="btn btn-danger btn-cancel" data-dismiss="modal">Cancelar</button>'+
                            '</div>'+
                            '<div class="col">'+
                            '<button type="submit" class="btn btn-primary btn-update">Update</button>'+
                            '</div>'+
                            '<div class="col">'+
                            '<button type="button" class="btn btn-warning btn-delete-alojamiento">Delete</button>'+
                            '</div>'+
                        '</div>'
                        );

                        $(document).find('#alojamientoForm').append(
                        '<input type="hidden" id="id" value="'+
                        _response.data.idTipoAlojamiento+'">'
                        );

                        $('#alojamientoModal').modal('show');

                },error : function(error){

                }
            });
        });

        $(document).on('submit','#alojamientoForm',function(event){
            event.preventDefault();
            clearForm('alojamientoForm');
            var _id=$(document).find('#id').val();
            if(_id){
                _url = _principalURL()+"TipoAlojamiento/api/tipoAlojamiento/id/"+id;
                _method = 'PUT';
            }else{
                _url = _principalURL()+"TipoAlojamiento/api/tipoAlojamiento/";
                _method = 'POST';
            }
                $.ajax({
                    url: _url,
                    method : _method,
                    headers : {
                    'X-API-KEY':'ANGLOKEY'
                    },
                    data: $(document).find('#alojamientoForm').serialize(),
                    success : function(_response){
                        response = JSON.stringify(_response);
                        if (_response.status=="error") {
                            $.each(_response.validations,function(key,message){
                                $(document).find('#'+key).addClass('is-invalid').after('<div class="invalid-feedback">'+message+'</div>')
                            });
                        }
                        if (_response.status=="success") {
                            setTimeout(function(){
                                location.reload();

                            },2000);
                        }

                        tostada(_response.status,_response.message);


                    },error : function(err){

                    }
            });
        });

        $(document).on('submit','#addForm',function(event){
            event.preventDefault();

           _url = _principalURL()+"Permisos/api/permisosAgentes/";
           clearForm('addForm');
                $.ajax({
                    url: _url,
                    method : 'POST',
                    headers : {
                    'X-API-KEY':'ANGLOKEY'
                    },
                    data: $(document).find('#addForm').serialize(),
                    success : function(_response){
                        response = JSON.stringify(_response);
                        if (_response.status=="error") {
                            $.each(_response.validations,function(key,message){
                                $(document).find('#'+key).addClass('is-invalid').after('<div class="invalid-feedback">'+message+'</div>')
                            });
                        }
                        if (_response.status=="success") {
                            setTimeout(function(){
                                location.reload();

                            },2000);
                        }

                        tostada(_response.status,_response.message);


                    },error : function(err){

                    }
            });
        });

        $('#cursoInstitucion').on('hidden.bs.modal', function (e) {
            $(document).find('#nombre').val('');
            $(document).find('#abreviacion').val('');
            $(document).find('#id').remove();
            $(document).find('.btns').html(
                '<div class="row">'+
                '<div class="col">'+
                    '<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>'+
                    '<button type="submit" class="btn btn-primary">Guardar Cambios</button>'+
                '</div>'+
                '</div>'
            );
        });

        $(document).on('click','.btn-delete',function(){
            _url = _principalURL()+"Campamento/api/campamento/id/"+$(document).find('#id').val();
            $.ajax({
                "url":_url,
                "method":"DELETE",
                headers :{
                'X-API-KEY':'ANGLOKEY'
                },
                success : function(response){
                if(response.status=="success"){

                    setTimeout(function(){
                            location.reload();

                        },2000);

                }

                tostada(response.status,response.message);

                },
                error : function(error){

                }
            })
        });


        $(document).on('click','.btn-delete-edad',function(){
            _url = _principalURL()+"Edad/api/edad/id/"+$(document).find('#id').val();
            $.ajax({
                "url":_url,
                "method":"DELETE",
                headers :{
                'X-API-KEY':'ANGLOKEY'
                },
                success : function(response){
                if(response.status=="success"){

                    setTimeout(function(){
                            location.reload();

                        },2000);

                }

                tostada(response.status,response.message);

                },
                error : function(error){

                }
            })
        });

        $(document).on('click','.btn-delete-alojamiento',function(){
            _url = _principalURL()+"Edad/api/alojamiento/id/"+$(document).find('#id').val();
            $.ajax({
                "url":_url,
                "method":"DELETE",
                headers :{
                'X-API-KEY':'ANGLOKEY'
                },
                success : function(response){
                if(response.status=="success"){

                    setTimeout(function(){
                            location.reload();

                        },2000);

                }

                tostada(response.status,response.message);

                },
                error : function(error){

                }
            })
        });


        $(document).on('submit','#InstitucionForm',function(event){
            event.preventDefault();
            clearForm('InstitucionForm');
            var _id=$(document).find('#idInstitucion').val();
            if(_id){
                _url = _principalURL()+"Institucion/api/Institucion/id/"+id;
                _method = 'PUT';
            }else{
                _url = _principalURL()+"Institucion/api/Institucion/";
                _method = 'POST';
            }
                $.ajax({
                    url: _url,
                    method : _method,
                    headers : {
                    'X-API-KEY':'ANGLOKEY'
                    },
                    data: $(document).find('#InstitucionForm').serialize(),
                    success : function(_response){
                        response = JSON.stringify(_response);
                        if (_response.status=="error") {
                            $.each(_response.validations,function(key,message){
                                $(document).find('#'+key).addClass('is-invalid').after('<div class="invalid-feedback">'+message+'</div>')
                            });
                        }
                        if (_response.status=="success") {
                            setTimeout(function(){
                                location.reload();

                            },2000);
                        }

                        tostada(_response.status,_response.message);


                    },error : function(err){

                    }
            });
        });

        $(document).on('click','.editarInstitucion',function(){
          id = this.id;
          _url = _principalURL()+"Institucion/api/institucion/id/"+id;

            $.ajax({
                url : _url,
                method : 'get',
                headers : {
                'X-API-KEY':'ANGLOKEY'
                },
                success : function(_response){

                    $(document).find('#nombreI').val(_response.data.nombreInstitucion);
                    $(document).find('#ubicacion').val(_response.data.ubicacionInstitucion);
                    $(document).find('#url').val(_response.data.logoInstitucion);

                        $(document).find('.btnsIns').html(
                        '<div class="row">'+
                            '<div class="col">'+
                            '<button type="button" class="btn btn-danger btn-cancel" data-dismiss="modal">Cancelar</button>'+
                            '</div>'+
                            '<div class="col">'+
                            '<button type="submit" class="btn btn-primary btn-update">Update</button>'+
                            '</div>'+
                            '<div class="col">'+
                            '<button type="button" class="btn btn-warning btn-delete-institucion">Delete</button>'+
                            '</div>'+
                        '</div>'
                        );

                        $(document).find('#InstitucionForm').append(
                          '<input type="hidden" id="idInstitucion" value="'+
                          _response.data.idInstitucion+'">'
                        );

                        $('#institucionModal').modal('show');

                },error : function(error){

                }
            });
        });

        $('#institucionModal').on('hidden.bs.modal', function (e) {
            $(document).find('#nombreI').val('');
            $(document).find('#ubicacion').val('');
            $(document).find('#url').val('');
            $(document).find('#idInstitucion').remove();
            $(document).find('.btnsIns').html(
                '<div class="row">'+
                '<div class="col">'+
                    '<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>'+
                    '<button type="submit" class="btn btn-primary">Guardar Cambios</button>'+
                '</div>'+
                '</div>'
            );
        });

        $(document).on('click','.btn-delete-institucion',function(){
            _url = _principalURL()+"Institucion/api/institucion/id/"+$(document).find('#idInstitucion').val();
            $.ajax({
                "url":_url,
                "method":"DELETE",
                headers :{
                'X-API-KEY':'ANGLOKEY'
                },
                success : function(response){
                if(response.status=="success"){

                    setTimeout(function(){
                            location.reload();

                        },2000);

                }

                tostada(response.status,response.message);

                },
                error : function(error){

                }
            })
        });

        $(document).on('click','.btn-add-cursoInstitucion',function(){
          $(document).find('.nuevo').empty();
          idInstitucion = this.id;
          $(document).find('#institucion').val(idInstitucion);
          (idInstitucion);
          _url = _principalURL()+"TipoCursosInstituciones/api/tipoCursoByInstituciones/id/"+idInstitucion;
          $.ajax({
                    url: _url,
                    method : 'GET',
                    headers : {
                    'X-API-KEY':'ANGLOKEY'
                    },
                    data: null,
                    success : function(_response){
                      if(_response.data){
                        console.info(_response.data);
                        $(document).find('.nombreInstitucion').html(_response.data[0].institucion);
                        var cursoInstitucion = _response.data;
                        for (let j = 0; j < cursoInstitucion.length; j++) {
                          $(document).find('.nuevo').append('<a type="button" class="list-group-item blue-grey-500 btn-editDeleteUniversidad" id="'+cursoInstitucion[j]['idTipoCursosInstituciones']+'" name="'+cursoInstitucion[j]['idTipoCurso']+'"><i class="icon wb-inbox" aria-hidden="true"></i>'+cursoInstitucion[j]['nombre']+'</a>');
                        }
                      }else{
                        $(document).find('.nombreInstitucion').html('');
                      }

                    },error : function(err){

                    }
          });
          $('#addICModal').modal('show');
        });

        $(document).on('click','.btn-add-edadInstitucion',function(){
          $(document).find('.nuevoo').empty();
          idInstitucion = this.id;
          $(document).find('#institucionn').val(idInstitucion);
          /* alert(idInstitucion); */
          _url = _principalURL()+"EdadesInstituciones/api/edadByInstituciones/id/"+idInstitucion;
          $.ajax({
                    url: _url,
                    method : 'GET',
                    headers : {
                    'X-API-KEY':'ANGLOKEY'
                    },
                    data: null,
                    success : function(_response){
                      if(_response.data){
                        console.info(_response.data);
                        $(document).find('.nombreInstitucion').html(_response.data[0].institucion);
                        var edadInstitucion = _response.data;
                        for (let j = 0; j < edadInstitucion.length; j++) {
                          $(document).find('.nuevoo').append('<a type="button" class="list-group-item blue-grey-500 btn-editDeleteUniversidad" id="'+edadInstitucion[j]['idEdadInstitucion']+'" name="'+edadInstitucion[j]['idEdad']+'"><i class="icon wb-inbox" aria-hidden="true"></i>'+edadInstitucion[j]['nombre']+'</a>');
                        }
                      }else{
                        $(document).find('.nombreInstitucion').html('');
                      }

                    },error : function(err){

                    }
          });
          $('#addIEModal').modal('show');
        });

        $(document).on('click','.btn-add-alojamientoInstitucion',function(){
          $(document).find('.nuevo').empty();
          idInstitucion = this.id;
          $(document).find('#institucionnn').val(idInstitucion);
          /* alert(idInstitucion); */
          _url = _principalURL()+"AlojamientoCampamento/api/alojamientoByInstituciones/id/"+idInstitucion;
          $.ajax({
                    url: _url,
                    method : 'GET',
                    headers : {
                    'X-API-KEY':'ANGLOKEY'
                    },
                    data: null,
                    success : function(_response){
                      if(_response.data){
                        console.info(_response.data);
                        $(document).find('.nombreInstitucion').html(_response.data[0].institucion);
                        var alojamientoInstitucion = _response.data;
                        for (let j = 0; j < alojamientoInstitucion.length; j++) {
                          $(document).find('.nuevo').append('<a type="button" class="list-group-item blue-grey-500 btn-editDeleteUniversidad" id="'+alojamientoInstitucion[j]['idAlojamientoCampamento']+'" name="'+alojamientoInstitucion[j]['idTipoAlojamiento']+'"><i class="icon wb-inbox" aria-hidden="true"></i>'+alojamientoInstitucion[j]['nombre']+'</a>');
                        }
                      }else{
                        $(document).find('.nombreInstitucion').html('');
                      }

                    },error : function(err){

                    }
          });
          $('#addIAModal').modal('show');
        });



        $(document).on('submit','#addCursoaddInsForm',function(event){
          event.preventDefault();

          var _id=$(document).find('#idInstitucionFacultadKey').val();
            if(_id){
                _url = _principalURL()+"CTipoCursosInstituciones/api/tipoCursosInstituciones/id/"+_id;
                _method = 'PUT';
            }else{
                _url = _principalURL()+"TipoCursosInstituciones/api/tipoCursosInstituciones/";
                _method = 'POST';
            }
                $.ajax({
                    url: _url,
                    method : _method,
                    headers : {
                    'X-API-KEY':'ANGLOKEY'
                    },
                    data: $(document).find('#addCursoaddInsForm').serialize(),
                    success : function(_response){
                        response = JSON.stringify(_response);
                        if (_response.status=="error") {
                            $.each(_response.validations,function(key,message){
                                $(document).find('#'+key).addClass('is-invalid').after('<div class="invalid-feedback">'+message+'</div>')
                            });
                        }
                        if (_response.status=="success") {
                            setTimeout(function(){
                                location.reload();

                            },2000);
                        }

                        tostada(_response.status,_response.message);


                    },error : function(err){

                    }
            });
        });


        $(document).on('submit','#addEdadInsForm',function(event){
          event.preventDefault();

          var _id=$(document).find('#idInstitucionFacultadKey').val();
            if(_id){
                _url = _principalURL()+"EdadesInstituciones/api/edadesInstituciones/id/"+_id;
                _method = 'PUT';
            }else{
                _url = _principalURL()+"EdadesInstituciones/api/edadesInstituciones/";
                _method = 'POST';
            }
                $.ajax({
                    url: _url,
                    method : _method,
                    headers : {
                    'X-API-KEY':'ANGLOKEY'
                    },
                    data: $(document).find('#addEdadInsForm').serialize(),
                    success : function(_response){
                        response = JSON.stringify(_response);
                        if (_response.status=="error") {
                            $.each(_response.validations,function(key,message){
                                $(document).find('#'+key).addClass('is-invalid').after('<div class="invalid-feedback">'+message+'</div>')
                            });
                        }
                        if (_response.status=="success") {
                            setTimeout(function(){
                                location.reload();

                            },2000);
                        }

                        tostada(_response.status,_response.message);


                    },error : function(err){

                    }
            });
        });

        $(document).on('submit','#addAlojamientoInsForm',function(event){
          event.preventDefault();

          var _id=$(document).find('#idInstitucionFacultadKey').val();
            if(_id){
                _url = _principalURL()+"AlojamientoCampamento/api/alojamientocampamento/id/"+_id;
                _method = 'PUT';
            }else{
                _url = _principalURL()+"AlojamientoCampamento/api/alojamientocampamento/";
                _method = 'POST';
            }
                $.ajax({
                    url: _url,
                    method : _method,
                    headers : {
                    'X-API-KEY':'ANGLOKEY'
                    },
                    data: $(document).find('#addAlojamientoInsForm').serialize(),
                    success : function(_response){
                        response = JSON.stringify(_response);
                        if (_response.status=="error") {
                            $.each(_response.validations,function(key,message){
                                $(document).find('#'+key).addClass('is-invalid').after('<div class="invalid-feedback">'+message+'</div>')
                            });
                        }
                        if (_response.status=="success") {
                            setTimeout(function(){
                                location.reload();

                            },2000);
                        }

                        tostada(_response.status,_response.message);


                    },error : function(err){

                    }
            });
        });

        $(document).on('click','.btn-editDeleteUniversidad',function(){
          var idF = this.id;
          var idFa = this.name;
          console.info(idF);
          $('#facultad').val(idFa).trigger('change');
          $(document).find('#addCursoaddInsForm').append(
                          '<input type="hidden" id="idInstitucionFacultadKey" value="'+
                          idF+'">'
                        );

          $(document).find('.btnsFI').html(
                        '<div class="row">'+
                            '<div class="col">'+
                            '<button type="button" class="btn btn-danger btn-cancel" data-dismiss="modal">Cancelar</button>'+
                            '</div>'+
                            '<div class="col">'+
                            '<button type="submit" class="btn btn-primary btn-update">Update</button>'+
                            '</div>'+
                            '<div class="col">'+
                            '<button type="button" class="btn btn-warning btn-delete-institucionFacultadKey">Delete</button>'+
                            '</div>'+
                        '</div>'
                        );
        });

        $(document).on('click','.btn-delete-institucionFacultadKey',function(){
            _url = _principalURL()+"Universidad/api/universidad/id/"+$(document).find('#idInstitucionFacultadKey').val();
            $.ajax({
                "url":_url,
                "method":"DELETE",
                headers :{
                'X-API-KEY':'ANGLOKEY'
                },
                success : function(response){
                if(response.status=="success"){

                    setTimeout(function(){
                            location.reload();

                        },2000);

                }

                tostada(response.status,response.message);

                },
                error : function(error){

                }
            })
        });

        $('#addICModal').on('hidden.bs.modal', function (e) {
            $('#facultad').val('').trigger('change');
            $(document).find('#idInstitucionFacultadKey').remove();
            $(document).find('.btnsFI').html(
                '<div class="row">'+
                '<div class="col">'+
                    '<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>'+
                    '<button type="submit" class="btn btn-primary">Guardar Cambios</button>'+
                '</div>'+
                '</div>'
            );
        });

    });
</script>
