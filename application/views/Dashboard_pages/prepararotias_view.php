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
        

        <div class="col-xxl-6 col-xl-12">
            
          <!-- Panel Traffic -->
          <div class="card card-shadow example-responsive border border-primary" id="widgetLinearea">
            <div class="card-block">
            
            <div class="row">
            
            <?php for ($i = 0; $i < count($instituciones); $i++) { ?>       
              <div class="col-lg-3">
                <div class="card card-shadow text-center">
                  <div class="card-block">
                    <img class="card-img-top" src="<?=@ ($instituciones[$i]['logoInstitucion']) ? $instituciones[$i]['logoInstitucion'] : base_url("resources/assets/Anglo/AngloLatino-sintexto.png");?>" alt="Imagen Institucion">
                    <h4 class="profile-user"><?=@$instituciones[$i]['nombreInstitucion'];?></h4>
                    <p class="profile-job"><?=@$instituciones[$i]['ubicacionInstitucion'];?></p>
                    
                    <button type="button" class="btn btn-round btn-outline btn-info btn-add-tipoEstudio" id="<?=@$instituciones[$i]['idInstitucion'];?>">Añadir Tipo Estudio</button>
                  </div>
                  <div class="card-footer">
                    <div class="row no-space">
                      <div class="col-12">
                        <button type="button" class="btn btn-primary btn-add-tipoAlojamiento" id="<?=@$instituciones[$i]['idInstitucion'];?>">Añadir Tipo Alojamiento</button>

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

<div class="modal fade" id="addTEModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar o borrar tipo de estudios</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <ul class="list-group list-group-bordered">
        <li class="list-group-item list-group-item-action active">Lista de Tipo de Estudios de: <span class="nombreInstitucion"></span></li>
        
      </ul>
      <div class="nuevo">

      </div>
      <hr style="background-color: red;height: 1px;">
      <h5 class="modal-title" id="exampleModalLabel" style="margin-left: 10px;color: blue;">Añadir Tipo Estudio</h5>
      <form id="addTEIForm">
        <div class="modal-body">
        <div class="form-group form-material" data-plugin="formMaterial">
        <label class="form-control-label" for="inputText">Tipo De Estudio:</label>
                <input type="hidden" name="institucion" id="institucion">
                <select class="form-control" data-plugin="select2" name="tipoEstudio" id="tipoEstudio">
                  <option value="" disabled selected>Elige una opcion</option>
                  <?php for ($i = 0; $i < count($tipoEstudio); $i++) { ?>
                    <option value="<?=$tipoEstudio[$i]['idTipoEstudio'];?>"><?=$tipoEstudio[$i]['nombreTipoEstudio'];?></option>
                  <?php } ;?>
                </select>
              </div>
                
        
        </div>
        <div class="modal-footer btnsTE">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Añadir Tipo De Estudio</button>
        </div>
      </form>
    </div>
  </div>
</div> 

<!--tipo alojamiento-->
<div class="modal fade" id="addTAModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar o borrar tipo de alojamiento</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <ul class="list-group list-group-bordered">
        <li class="list-group-item list-group-item-action active">Lista de Tipo de alojamiento de: <span class="nombreInstitucionA"></span></li>
        
      </ul>
      <div class="nuevoA">

      </div>
      <hr style="background-color: red;height: 1px;">
      <h5 class="modal-title" id="exampleModalLabel" style="margin-left: 10px;color: blue;">Añadir Tipo Estudio</h5>
      <form id="addTAIForm">
        <div class="modal-body">
        <div class="form-group form-material" data-plugin="formMaterial">
        <label class="form-control-label" for="inputText">Tipo De Estudio:</label>
                <input type="hidden" name="institucionA" id="institucionA">
                <select class="form-control" data-plugin="select2" name="tipoAlojamiento" id="tipoAlojamiento">
                  <option value="" disabled selected>Elige una opcion</option>
                  <?php for ($i = 0; $i < count($tipoAlojamiento); $i++) { ?>
                    <option value="<?=$tipoAlojamiento[$i]['idTipoAlojamiento'];?>"><?=$tipoAlojamiento[$i]['nombreTipoAlojamiento'];?></option>
                  <?php } ;?>
                </select>
              </div>
                
        
        </div>
        <div class="modal-footer btnsTA">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Añadir Tipo De Alojamiento</button>
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
        $(document).on('click','.btn-add-tipoEstudio',function(){
          $(document).find('.nuevo').empty();
          idInstitucion = this.id;
          $(document).find('#institucion').val(idInstitucion);
          //alert(idInstitucion);
          _url = _principalURL()+"TipoEstudioInstituccion/api/tipoEstudioInstituccionBYInstitucion/id/"+idInstitucion;
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
                        var estudiosInstitucion = _response.data;
                        for (let j = 0; j < estudiosInstitucion.length; j++) {
                          $(document).find('.nuevo').append('<a type="button" class="list-group-item blue-grey-500 btn-editDeleteTipoEstudio" id="'+estudiosInstitucion[j]['idTipoEstudioInstituccion']+'" name="'+estudiosInstitucion[j]['idTipoEstudio']+'"><i class="icon wb-inbox" aria-hidden="true"></i>'+estudiosInstitucion[j]['nombreTipoEstudio']+'</a>');
                        }
                      }else{
                        $(document).find('.nombreInstitucion').html('');
                      }
                    
                    },error : function(err){
                    
                    }
          });
          $('#addTEModal').modal('show');
        });

        $(document).on('submit','#addTEIForm',function(event){
          event.preventDefault();
          
          var _id=$(document).find('#idInstitucionTipoEstudioKey').val();
            if(_id){
                _url = _principalURL()+"TipoEstudioInstituccion/api/tipoEstudioInstituccion/id/"+_id;
                _method = 'PUT';
            }else{
                _url = _principalURL()+"TipoEstudioInstituccion/api/tipoEstudioInstituccion/";
                _method = 'POST';
            }
                $.ajax({
                    url: _url,
                    method : _method,
                    headers : {
                    'X-API-KEY':'ANGLOKEY'
                    },
                    data: $(document).find('#addTEIForm').serialize(),
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

        $(document).on('click','.btn-editDeleteTipoEstudio',function(){
          var idTEI = this.id;
          var idTE = this.name;
          //console.info(idF);
          $('#tipoEstudio').val(idTE).trigger('change');
          $(document).find('#addTEIForm').append(
                          '<input type="hidden" id="idInstitucionTipoEstudioKey" value="'+
                          idTEI+'">'
                        );
          
          $(document).find('.btnsTE').html(
                        '<div class="row">'+
                            '<div class="col">'+
                            '<button type="button" class="btn btn-danger btn-cancel" data-dismiss="modal">Cancelar</button>'+
                            '</div>'+
                            '<div class="col">'+
                            '<button type="submit" class="btn btn-primary btn-update">Update</button>'+
                            '</div>'+
                            '<div class="col">'+
                            '<button type="button" class="btn btn-warning btn-delete-TEIKey">Delete</button>'+
                            '</div>'+
                        '</div>'
                        );
        });

        $(document).on('click','.btn-delete-TEIKey',function(){
            _url = _principalURL()+"TipoEstudioInstituccion/api/tipoEstudioInstituccion/id/"+$(document).find('#idInstitucionTipoEstudioKey').val();
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

        $('#addTEModal').on('hidden.bs.modal', function (e) {
            $('#tipoEstudio').val('').trigger('change');
            $(document).find('#idInstitucionTipoEstudioKey').remove();
            $(document).find('.btnsTE').html(
                '<div class="row">'+
                '<div class="col">'+
                    '<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>'+
                    '<button type="submit" class="btn btn-primary">Guardar Cambios</button>'+
                '</div>'+
                '</div>'
            );
        });

        //tipo de alojamiento
        $(document).on('click','.btn-add-tipoAlojamiento',function(){
          $(document).find('.nuevoA').empty();
          idInstitucionA = this.id;
          $(document).find('#institucionA').val(idInstitucionA);
          //alert(idInstitucion);
          _url = _principalURL()+"Preparatoria/api/preparatoriaBYinstitucion/id/"+idInstitucionA;
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
                        $(document).find('.nombreInstitucionA').html(_response.data[0].nombreInstitucion);
                        var alojamientoInstitucion = _response.data;
                        for (let j = 0; j < alojamientoInstitucion.length; j++) {
                          $(document).find('.nuevoA').append('<a type="button" class="list-group-item blue-grey-500 btn-editDeleteTipoAlojamiento" id="'+alojamientoInstitucion[j]['idTipoAlojamientoInstitucion']+'" name="'+alojamientoInstitucion[j]['idTipoAlojamiento']+'"><i class="icon wb-inbox" aria-hidden="true"></i>'+alojamientoInstitucion[j]['nombreTipoAlojamiento']+'</a>');
                        }
                      }else{
                        $(document).find('.nombreInstitucionA').html('');
                      }
                    
                    },error : function(err){
                    
                    }
          });
          $('#addTAModal').modal('show');
        });

        $(document).on('submit','#addTAIForm',function(event){
          event.preventDefault();
          
          var _id=$(document).find('#idInstitucionTipoAlojamientoKey').val();
            if(_id){
                _url = _principalURL()+"Preparatoria/api/preparatoria/id/"+_id;
                _method = 'PUT';
            }else{
                _url = _principalURL()+"Preparatoria/api/preparatoria/";
                _method = 'POST';
            }
                $.ajax({
                    url: _url,
                    method : _method,
                    headers : {
                    'X-API-KEY':'ANGLOKEY'
                    },
                    data: $(document).find('#addTAIForm').serialize(),
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

        $(document).on('click','.btn-editDeleteTipoAlojamiento',function(){
          var idTAI = this.id;
          var idTA = this.name;
          //console.info(idF);
          $('#tipoAlojamiento').val(idTA).trigger('change');
          $(document).find('#addTAIForm').append(
                          '<input type="hidden" id="idInstitucionTipoAlojamientoKey" value="'+
                          idTAI+'">'
                        );
          
          $(document).find('.btnsTA').html(
                        '<div class="row">'+
                            '<div class="col">'+
                            '<button type="button" class="btn btn-danger btn-cancel" data-dismiss="modal">Cancelar</button>'+
                            '</div>'+
                            '<div class="col">'+
                            '<button type="submit" class="btn btn-primary btn-update">Update</button>'+
                            '</div>'+
                            '<div class="col">'+
                            '<button type="button" class="btn btn-warning btn-delete-TAIKey">Delete</button>'+
                            '</div>'+
                        '</div>'
                        );
        });
        
        $(document).on('click','.btn-delete-TAIKey',function(){
            _url = _principalURL()+"Preparatoria/api/preparatoria/id/"+$(document).find('#idInstitucionTipoAlojamientoKey').val();
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

        $('#addTAModal').on('hidden.bs.modal', function (e) {
            $('#tipoAlojamiento').val('').trigger('change');
            $(document).find('#idInstitucionTipoAlojamientoKey').remove();
            $(document).find('.btnsTA').html(
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