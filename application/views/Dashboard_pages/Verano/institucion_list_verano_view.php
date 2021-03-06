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

      <div class="example-wrap">

        <div class="row">
            <?php for ($i = 0; $i < count($instituciones); $i++) { ?>
          <div class="col-lg-4 col-md-12">
            <!-- <h4 class="example-title">Types</h4> -->
            <div class="card">
              <img class="card-img-top img-fluid w-full" src="<?=base_url('resources/assets/Informativa/images/uk_universities.jpg');?>"
                alt="Card image cap">
              <div class="card-block">
                <h4 class="card-title"><?=@$instituciones[$i]['nombreInstitucion'];?></h4>
                <p class="card-text">Some quick example text to build on the card title and make up
                  the bulk of the card's content.</p>
              </div>
              <ul class="list-group list-group-dividered px-20 mb-0">
                <li class="list-group-item px-0">Cras justo odio</li>
                <li class="list-group-item px-0">Dapibus ac facilisis in</li>
                <li class="list-group-item px-0">Vestibulum at eros</li>
              </ul>
              <div class="card-block">
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
              </div>
            </div>
          </div>
        <?php } ?>

        </div>
      </div>

<!---modal facultad-->

<div class="modal fade" id="campamentoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Crear Campamento</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="campamentoForm">
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

<div class="modal fade" id="addIFModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
      <form id="addFacultadInsForm">
        <div class="modal-body">
        <div class="form-group form-material" data-plugin="formMaterial">
        <label class="form-control-label" for="inputText">Campamentos:</label>
                <input type="hidden" name="institucion" id="institucion">
                <select class="form-control" data-plugin="select2" name="campamento" id="campamento">
                  <option value="" disabled selected>Elige una opcion</option>
                  <?php for ($i = 0; $i < count($campamentos); $i++) { ?>
                    <option value="<?=$campamentos[$i]['idCampamento'];?>"><?=$campamentos[$i]['nombreCampamento'];?></option>
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
    $(document).ready(function(){
        var id;
        var idInstitucion;
        $(document).on('click','.facultad',function(){
           id = this.id;
           console.info(id);
           _url = _principalURL()+"Campamento/api/campamento/id/"+id;

            $.ajax({
                url : _url,
                method : 'get',
                headers : {
                'X-API-KEY':'ANGLOKEY'
                },
                success : function(_response){

                    $(document).find('#nombre').val(_response.data.nombreCampamento);
                    $(document).find('#abreviacion').val(_response.data.abreviacionCampamento);

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

                        $(document).find('#campamentoForm').append(
                        '<input type="hidden" id="id" value="'+
                        _response.data.idCampamento+'">'
                        );

                        $('#campamentoModal').modal('show');

                },error : function(error){

                }
            });
        });



        $(document).on('submit','#campamentoForm',function(event){
            event.preventDefault();
            clearForm('campamentoForm');
            var _id=$(document).find('#id').val();
            if(_id){
                _url = _principalURL()+"Campamento/api/campamento/id/"+id;
                _method = 'PUT';
            }else{
                _url = _principalURL()+"Campamento/api/campamento/";
                _method = 'POST';
            }
                $.ajax({
                    url: _url,
                    method : _method,
                    headers : {
                    'X-API-KEY':'ANGLOKEY'
                    },
                    data: $(document).find('#campamentoForm').serialize(),
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

        $('#campamentoModal').on('hidden.bs.modal', function (e) {
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

        $(document).on('click','.btn-add-campamentoInstitucion',function(){
          $(document).find('.nuevo').empty();
          idInstitucion = this.id;
          $(document).find('#institucion').val(idInstitucion);
          (idInstitucion);
          _url = _principalURL()+"CampamentosInstituciones/api/campamentoByInstitucion/id/"+idInstitucion;
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
                        var campamentoInstitucion = _response.data;
                        for (let j = 0; j < campamentoInstitucion.length; j++) {
                          $(document).find('.nuevo').append('<a type="button" class="list-group-item blue-grey-500 btn-editDeleteUniversidad" id="'+campamentoInstitucion[j]['idCampamentoInstitucion']+'" name="'+campamentoInstitucion[j]['idCampamento']+'"><i class="icon wb-inbox" aria-hidden="true"></i>'+campamentoInstitucion[j]['nombre']+'</a>');
                        }
                      }else{
                        $(document).find('.nombreInstitucion').html('');
                      }

                    },error : function(err){

                    }
          });
          $('#addIFModal').modal('show');
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



        $(document).on('submit','#addFacultadInsForm',function(event){
          event.preventDefault();

          var _id=$(document).find('#idInstitucionFacultadKey').val();
            if(_id){
                _url = _principalURL()+"CampamentosInstituciones/api/campamentoInstitucion/id/"+_id;
                _method = 'PUT';
            }else{
                _url = _principalURL()+"CampamentosInstituciones/api/campamentoInstitucion/";
                _method = 'POST';
            }
                $.ajax({
                    url: _url,
                    method : _method,
                    headers : {
                    'X-API-KEY':'ANGLOKEY'
                    },
                    data: $(document).find('#addFacultadInsForm').serialize(),
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
          $(document).find('#addFacultadInsForm').append(
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

        $('#addIFModal').on('hidden.bs.modal', function (e) {
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
