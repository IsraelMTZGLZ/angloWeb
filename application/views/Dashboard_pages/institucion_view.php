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
        <li class="breadcrumb-item active">Universidades</li>
      </ol>
      <h1 class="page-title">Configuracion de Universidades</h1>
      
    </div>
   
    <!-- Page Content -->
    <div class="page-content container-fluid">
    
    <div class="row" data-plugin="matchHeight" data-by-row="true">
        
        <div class="col-xxl-3 col-xl-4">
          <!-- Panel Web Designer -->
          <div class="card card-shadow">
            <div class="card-block bg-white p-40">
                <div class="row" style="display: flex;align-items: center;justify-content: center;">
                    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#facultadModal">Crear Facultad</button>

                </div>
                <hr>
                <ul class="list-group list-group-bordered">
                  <li class="list-group-item list-group-item-action active">Lista de facultades</li>
                  <?php for ($i = 0; $i < count($facultades); $i++) { ?>
                    <li id="<?=@$facultades[$i]['idFacultad'];?>" class="list-group-item facultad"><?=@$facultades[$i]['nombreFacultad'];?><span class="badge badge-pill badge-dark badge-lg"><?=@$facultades[$i]['abreviacionFacultad'];?></span></li>
                  
                  <?php } ?>
                </ul>
              
            </div>
          </div>
          <!-- End Panel Web Designer -->
        </div>

        <div class="col-xxl-6 col-xl-8">
            
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
                    
                    <button type="button" class="btn btn-round btn-outline btn-info btn-add-facultadInstitucion" id="<?=@$instituciones[$i]['idInstitucion'];?>">Añadir Facultad</button>
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

<div class="modal fade" id="facultadModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Crear Facultad</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="FacultadForm">
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
        <h5 class="modal-title" id="exampleModalLabel">Agregar o borrar Permisos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <ul class="list-group list-group-bordered">
        <li class="list-group-item list-group-item-action active">Lista de Facultades de: <span class="nombreInstitucion"></span></li>
        
      </ul>
      <div class="nuevo">

      </div>
      <hr style="background-color: red;height: 1px;">
      <h5 class="modal-title" id="exampleModalLabel" style="margin-left: 10px;color: blue;">Añadir Facultad</h5>
      <form id="addFacultadInsForm">
        <div class="modal-body">
        <div class="form-group form-material" data-plugin="formMaterial">
        <label class="form-control-label" for="inputText">Facultad:</label>
                <input type="hidden" name="institucion" id="institucion">
                <select class="form-control" data-plugin="select2" name="facultad" id="facultad">
                  <option value="" disabled selected>Elige una opcion</option>
                  <?php for ($i = 0; $i < count($facultades); $i++) { ?>
                    <option value="<?=$facultades[$i]['idFacultad'];?>"><?=$facultades[$i]['nombreFacultad'];?></option>
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
           _url = _principalURL()+"Facultad/api/Facultad/id/"+id;

            $.ajax({
                url : _url,
                method : 'get',
                headers : {
                'X-API-KEY':'ANGLOKEY'
                },
                success : function(_response){
                    
                    $(document).find('#nombre').val(_response.data.nombreFacultad);
                    $(document).find('#abreviacion').val(_response.data.abreviacionFacultad);

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

                        $(document).find('#FacultadForm').append(
                        '<input type="hidden" id="id" value="'+
                        _response.data.idFacultad+'">'
                        );

                        $('#facultadModal').modal('show');
                    
                },error : function(error){
                
                }
            });
        });

        $(document).on('submit','#FacultadForm',function(event){
            event.preventDefault();
            clearForm('FacultadForm');
            var _id=$(document).find('#id').val();
            if(_id){
                _url = _principalURL()+"Facultad/api/Facultad/id/"+id;
                _method = 'PUT';
            }else{
                _url = _principalURL()+"Facultad/api/Facultad/";
                _method = 'POST';
            }
                $.ajax({
                    url: _url,
                    method : _method,
                    headers : {
                    'X-API-KEY':'ANGLOKEY'
                    },
                    data: $(document).find('#FacultadForm').serialize(),
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

        $('#facultadModal').on('hidden.bs.modal', function (e) {
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
            _url = _principalURL()+"Facultad/api/Facultad/id/"+$(document).find('#id').val();
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

        

        $(document).on('click','.btn-add-facultadInstitucion',function(){
          $(document).find('.nuevo').empty();
          idInstitucion = this.id;
          $(document).find('#institucion').val(idInstitucion);
          //alert(idInstitucion);
          _url = _principalURL()+"Universidad/api/universidadByInstitucion/id/"+idInstitucion;
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
                        $(document).find('.nombreInstitucion').html(_response.data[0].nombreInstitucion);
                        var facultadesInstitucion = _response.data;
                        for (let j = 0; j < facultadesInstitucion.length; j++) {
                          $(document).find('.nuevo').append('<a type="button" class="list-group-item blue-grey-500 btn-editDeleteUniversidad" id="'+facultadesInstitucion[j]['idInstitucionFacultad']+'" name="'+facultadesInstitucion[j]['idFacultad']+'"><i class="icon wb-inbox" aria-hidden="true"></i>'+facultadesInstitucion[j]['nombreFacultad']+'</a>');
                        }
                      }else{
                        $(document).find('.nombreInstitucion').html('');
                      }
                    
                    },error : function(err){
                    
                    }
          });
          $('#addIFModal').modal('show');
        });

        $(document).on('submit','#addFacultadInsForm',function(event){
          event.preventDefault();
          
          var _id=$(document).find('#idInstitucionFacultadKey').val();
            if(_id){
                _url = _principalURL()+"Universidad/api/universidad/id/"+_id;
                _method = 'PUT';
            }else{
                _url = _principalURL()+"Universidad/api/universidad/";
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