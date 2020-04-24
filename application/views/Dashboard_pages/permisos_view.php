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
        <li class="breadcrumb-item active">Permisos</li>
      </ol>
      <h1 class="page-title">Configuracion de Permisos</h1>
      
    </div>
   
    <!-- Page Content -->
    <div class="page-content container-fluid">
    
    <div class="row" data-plugin="matchHeight" data-by-row="true">
        
        <div class="col-xxl-3 col-xl-4">
          
          <!-- Panel Web Designer -->
          <div class="card card-shadow">
            <div class="card-block bg-white p-40">
                <ul class="list-group list-group-bordered">
                  <li class="list-group-item list-group-item-action active">Lista de permisos ya creados</li>
                  <?php for ($i = 0; $i < count($permisos); $i++) { ?>
                    <li id="<?=@$permisos[$i]['idPermiso'];?>" class="list-group-item permiso"><?=@$permisos[$i]['nombrePermiso'];?><span class="badge badge-pill badge-info badge-lg"><?=@$permisos[$i]['estatusPermiso'];?></span></li>
                  
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

            <div class="row">
            
            <?php for ($i = 0; $i < count($agentes); $i++) { ?>       
              <div class="col-lg-4">
                <div class="card card-shadow text-center">
                  <div class="card-block">
                    <a class="avatar avatar-lg" href="javascript:void(0)">
                      <img src="<?=@ ($agentes[$i]['photo']) ? $agentes[$i]['photoUrl'] : base_url("resources/assets/Anglo/AngloLatino-sintexto.png");?>" alt="...">
                    </a>
                    <h4 class="profile-user"><?=@$agentes[$i]['fullname'];?></h4>
                    <p class="profile-job"><?=@$agentes[$i]['email'];?></p>
                    <p>Numero de empleado: <?=@$agentes[$i]['numeroEmpleado'];?>.</p>
                    <p>Puesto: <?=@$agentes[$i]['puesto'];?>.</p>
                    <p>Estatus: <button type="button" id="<?=@$agentes[$i]['usuario'];?>" class="btn btn-estatus btn-sm btn-outline btn-<?=@ ($agentes[$i]['statusU']=='Inactivo') ? 'danger' : 'success';?>"><?=@$agentes[$i]['statusU'];?></button></p>
                    <?php if ($agentes[$i]['agente']) { ;?>
                      <button type="button" class="btn btn-primary editPermiso" id="<?=@$agentes[$i]['agente'];?>">Editar Permisos</button>
                    <?php } ;?>
                  </div>
                  <div class="card-footer">
                    <div class="row no-space">
                      <div class="col-12">
                        <span>Genero:</span>
                        <strong class="profile-stat-count"><?=@$agentes[$i]['genero'];?></strong>
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

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modificar Permisos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="permisosForm">
        <div class="modal-body">
            
                    <div class="form-group form-material" data-plugin="formMaterial">
                    <label class="form-control-label" for="inputText">Nombre:</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" >
                    </div>
                    <div class="form-group form-material" data-plugin="formMaterial">
                    <label class="form-control-label" for="inputText">Descripcion:</label>
                    <textarea type="text" class="form-control" name="descripcion" id="descripcion" ></textarea>
                    </div>
                
        
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
        </div>
      </form>
    </div>
  </div>
</div>    

<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar o borrar Permisos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <ul class="list-group list-group-bordered">
        <li class="list-group-item list-group-item-action active">Lista de permisos de: <span class="nombrePersona"></span></li>
        
      </ul>
      <div class="nuevo">

      </div>
      <hr style="background-color: red;height: 1px;">
      <h5 class="modal-title" id="exampleModalLabel" style="margin-left: 10px;color: blue;">Añadir Permisos</h5>
      <form id="addForm">
        <div class="modal-body">
            
        <div class="form-group form-material" data-plugin="formMaterial">
        <label class="form-control-label" for="inputText">Permiso:</label>
                <input type="hidden" name="agente" id="agente">
                <select class="form-control" data-plugin="select2" name="permiso" id="permiso">
                  <option value="" disabled selected>Elige una opcion</option>
                  <?php for ($i = 0; $i < count($permisos); $i++) { ?>
                    <option value="<?=$permisos[$i]['idPermiso'];?>"><?=$permisos[$i]['nombrePermiso'];?></option>
                  <?php } ;?>
                </select>
              </div>
                
        
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Añadir Permiso</button>
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
        $(document).on('click','.permiso',function(){
           id = this.id;
           _url = _principalURL()+"Permisos/api/permisos/id/"+id;

                $.ajax({
                    url: _url,
                    method : 'GET',
                    headers : {
                    'X-API-KEY':'ANGLOKEY'
                    },
                    data: null,
                    success : function(_response){
                    response = JSON.stringify(_response);

                    //console.info(_response);
                    $(document).find('#nombre').val(_response['data']['nombrePermiso']);
                    $(document).find('#descripcion').val(_response['data']['descPermiso']);


                    $('#exampleModal').modal('show');
                    //tostada(_response.status,_response.message);
                    

                    },error : function(err){
                    
                    }
            });
        });

        $(document).on('submit','#permisosForm',function(event){
            event.preventDefault();
           _url = _principalURL()+"Permisos/api/permisos/id/"+id;
           clearForm('permisosForm');
                $.ajax({
                    url: _url,
                    method : 'PUT',
                    headers : {
                    'X-API-KEY':'ANGLOKEY'
                    },
                    data: $(document).find('#permisosForm').serialize(),
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

        $(document).on('click','.editPermiso',function(event){
          $(document).find('.nuevo').empty();
          var idAgente = this.id;
          _url = _principalURL()+"Agente/api/agenteByIdAgente/id/"+idAgente;
          $.ajax({
                    url: _url,
                    method : 'GET',
                    headers : {
                    'X-API-KEY':'ANGLOKEY'
                    },
                    data: null,
                    success : function(_response){
                    response = JSON.stringify(_response);

                    //console.info(response);
                    $(document).find('.nombrePersona').html(_response['data']['fullname']);

                    $.ajax({
                      url: _principalURL()+"Permisos/api/permisosAgenteByAgente/id/"+idAgente,
                      method : 'GET',
                      headers : {
                      'X-API-KEY':'ANGLOKEY'
                      },
                      data: null,
                      success : function(_response){
                      response = JSON.stringify(_response);
                      var permisosUsuario = _response['data'];
                      for (let j = 0; j < permisosUsuario.length; j++) {
                        //console.info(permisosUsuario[j]['nombrePermiso']);
                        $(document).find('.nuevo').append('<a type="button" class="list-group-item blue-grey-500 btn-deletePermiso" id="'+permisosUsuario[j]['idPermisoAgente']+'"><i class="icon wb-inbox" aria-hidden="true"></i>'+permisosUsuario[j]['nombrePermiso']+'</a>');
                      }
                      $(document).find('#agente').val(idAgente);
                      $('#editModal').modal('show');
                      },error : function(err){
                      
                      }
                    });
                    
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

        $(document).on('click','.btn-deletePermiso',function (){
          var idPermisoTable = this.id;
          //alert(idPermisoTable);

          _url = _principalURL()+"Permisos/api/permisosAgentes/id/"+idPermisoTable;

          alertify.confirm('Eliminar Permiso', '¿Estas seguro que quieres eliminar el permiso?', 
            function(){
              $.ajax({
              url: _url,
              method : 'DELETE',
              headers : {
              'X-API-KEY':'ANGLOKEY'
              },
              data: null,
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
          }
          ,function(){ alertify.error('Cancel')});
          
        });

        $(document).on('click','.btn-estatus',function (){
          var idUsuario = this.id;
          _params={
                    "usuario":idUsuario
                };

                _url = _principalURL()+"Agente/api/agenteStatus/";

                $.ajax({
                    url: _url,
                    method : 'PUT',
                    headers : {
                    'X-API-KEY':'ANGLOKEY'
                    },
                    data: _params,
                    success : function(_response){
                    response = JSON.stringify(_response);

                    if (_response.status=="error") {
                        console.info(_response);
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
    });
</script>