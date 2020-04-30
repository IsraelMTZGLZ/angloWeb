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
        <li class="breadcrumb-item active">Tipo De Estudio - Tipo De Alojamiento</li>
      </ol>
      <h1 class="page-title">Configuracion de tipos</h1>
      
    </div>
   
    <!-- Page Content -->
    <div class="page-content container-fluid">
    
    <div class="row" data-plugin="matchHeight" data-by-row="true">
        
        <div class="col-xxl-3 col-xl-6">
          <!-- Panel Web Designer -->
          <div class="card card-shadow">
            <div class="card-block bg-white p-40">
                <div class="row" style="display: flex;align-items: center;justify-content: center;">
                    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#tipoEstudioModal">Crear Tipo de estudio</button>

                </div>
                <hr>
                <ul class="list-group list-group-bordered">
                  <li class="list-group-item list-group-item-action active">Lista de tipos de estudios</li>
                  <?php for ($i = 0; $i < count($tipoEstudio); $i++) { ?>
                    <li id="<?=@$tipoEstudio[$i]['idTipoEstudio'];?>" class="list-group-item tipoEstudio"><?=@$tipoEstudio[$i]['nombreTipoEstudio'];?><span class="badge badge-pill badge-dark badge-lg"><?=@$tipoEstudio[$i]['abreviacionTipoEstudio'];?></span></li>
                  
                  <?php } ?>
                </ul>
              
            </div>
          </div>
          <!-- End Panel Web Designer -->
        </div>

        <div class="col-xxl-3 col-xl-6">
          <!-- Panel Web Designer -->
          <div class="card card-shadow">
            <div class="card-block bg-white p-40">
                <div class="row" style="display: flex;align-items: center;justify-content: center;">
                    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#tipoAlojamientoModal">Crear Tipo de alojamiento</button>

                </div>
                <hr>
                <ul class="list-group list-group-bordered">
                  <li class="list-group-item list-group-item-action active">Lista de tipos de alojaminetos</li>
                  <?php for ($i = 0; $i < count($tipoAlojamiento); $i++) { ?>
                    <li id="<?=@$tipoAlojamiento[$i]['idTipoAlojamiento'];?>" class="list-group-item tipoAlojamiento"><?=@$tipoAlojamiento[$i]['nombreTipoAlojamiento'];?><span class="badge badge-pill badge-dark badge-lg"><?=@$tipoAlojamiento[$i]['abreviacionTipoAlojamiento'];?></span></li>
                  
                  <?php } ?>
                </ul>
              
            </div>
          </div>
          <!-- End Panel Web Designer -->
        </div>
      </div>
    </div>

<!---modal facultad-->

<div class="modal fade" id="tipoEstudioModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Crear Tipo De Estudios</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="tipoEstudioForm">
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

<div class="modal fade" id="tipoAlojamientoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Crear Tipo De Alojamiento</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="tipoAlojamientoForm">
        <div class="modal-body">
            
                    <div class="form-group form-material" data-plugin="formMaterial">
                    <label class="form-control-label" for="inputText">Nombre:</label>
                    <input type="text" class="form-control" name="nombreA" id="nombreA" >
                    </div>
                    <div class="form-group form-material" data-plugin="formMaterial">
                    <label class="form-control-label" for="inputText">Abreviación:</label>
                    <input type="text" class="form-control" name="abreviacionA" id="abreviacionA" >
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


<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="<?=base_url('resources/assets/JS/ServicesJS.js');?>"></script>
<script src="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

<script>
    $(document).ready(function() 
    {
        var id;
        var idA;
        $(document).on('submit','#tipoEstudioForm',function(event){
          event.preventDefault();
          
          var _id=$(document).find('#idTipoEstudio').val();
            if(_id){
                _url = _principalURL()+"TipoEstudio/api/tipoEstudio/id/"+_id;
                _method = 'PUT';
            }else{
                _url = _principalURL()+"TipoEstudio/api/tipoEstudio/";
                _method = 'POST';
            }
                $.ajax({
                    url: _url,
                    method : _method,
                    headers : {
                    'X-API-KEY':'ANGLOKEY'
                    },
                    data: $(document).find('#tipoEstudioForm').serialize(),
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

        $(document).on('click','.tipoEstudio',function(){
           id = this.id;
           _url = _principalURL()+"TipoEstudio/api/tipoEstudio/id/"+id;

            $.ajax({
                url : _url,
                method : 'get',
                headers : {
                'X-API-KEY':'ANGLOKEY'
                },
                success : function(_response){
                    
                    $(document).find('#nombre').val(_response.data.nombreTipoEstudio);
                    $(document).find('#abreviacion').val(_response.data.abreviacionTipoEstudio);

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

                        $(document).find('#tipoEstudioForm').append(
                        '<input type="hidden" id="idTipoEstudio" value="'+
                        _response.data.idTipoEstudio+'">'
                        );

                        $('#tipoEstudioModal').modal('show');
                    
                },error : function(error){
                
                }
            });
        });

        $(document).on('click','.btn-delete',function(){
            _url = _principalURL()+"TipoEstudio/api/tipoEstudio/id/"+$(document).find('#idTipoEstudio').val();
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
        
        $('#tipoEstudioModal').on('hidden.bs.modal', function (e) {
            $(document).find('#nombre').val('');
            $(document).find('#abreviacion').val('');
            $(document).find('#idTipoEstudio').remove();
            $(document).find('.btns').html(
                '<div class="row">'+
                '<div class="col">'+
                    '<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>'+
                    '<button type="submit" class="btn btn-primary">Guardar Cambios</button>'+
                '</div>'+
                '</div>'
            );
        });

        $(document).on('submit','#tipoAlojamientoForm',function(event){
          event.preventDefault();
          
          var _id=$(document).find('#idTipoAlojamiento').val();
            if(_id){
                _url = _principalURL()+"TipoAlojamiento/api/tipoAlojamiento/id/"+_id;
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
                    data: $(document).find('#tipoAlojamientoForm').serialize(),
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

        $(document).on('click','.tipoAlojamiento',function(){
           idA = this.id;
           _url = _principalURL()+"TipoAlojamiento/api/tipoAlojamiento/id/"+idA;

            $.ajax({
                url : _url,
                method : 'get',
                headers : {
                'X-API-KEY':'ANGLOKEY'
                },
                success : function(_response){
                    
                    $(document).find('#nombreA').val(_response.data.nombreTipoAlojamiento);
                    $(document).find('#abreviacionA').val(_response.data.abreviacionTipoAlojamiento);

                        $(document).find('.btns').html(
                        '<div class="row">'+
                            '<div class="col">'+
                            '<button type="button" class="btn btn-danger btn-cancel" data-dismiss="modal">Cancelar</button>'+
                            '</div>'+
                            '<div class="col">'+
                            '<button type="submit" class="btn btn-primary btn-update">Update</button>'+
                            '</div>'+
                            '<div class="col">'+
                            '<button type="button" class="btn btn-warning btn-deleteA">Delete</button>'+
                            '</div>'+
                        '</div>'
                        );

                        $(document).find('#tipoAlojamientoForm').append(
                        '<input type="hidden" id="idTipoAlojamiento" value="'+
                        _response.data.idTipoAlojamiento+'">'
                        );

                        $('#tipoAlojamientoModal').modal('show');
                    
                },error : function(error){
                
                }
            });
        });

        $(document).on('click','.btn-deleteA',function(){
            _url = _principalURL()+"TipoAlojamiento/api/TipoAlojamiento/id/"+$(document).find('#idTipoAlojamiento').val();
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

        $('#tipoAlojamientoModal').on('hidden.bs.modal', function (e) {
            $(document).find('#nombreA').val('');
            $(document).find('#abreviacionA').val('');
            $(document).find('#idTipoAlojamiento').remove();
            $(document).find('.btns').html(
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