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
        <li class="breadcrumb-item active">Eventos</li>
      </ol>
      <h1 class="page-title">Configuracion de eventos</h1>
      
    </div>
   
    <!-- Page Content -->
    <div class="page-content container-fluid">
    
    <div class="row" data-plugin="matchHeight" data-by-row="true">
        
        

        <div class="col-xxl-12 col-xl-12">
            
          <!-- Panel Traffic -->
          <div class="card card-shadow example-responsive border border-primary" id="widgetLinearea">
            <div class="card-block">
            <div class="row" style="display: flex;align-items: center;justify-content: center;">
                    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#eventoModal">Crear Evento</button>

                </div>
                <hr>
            <div class="row">
            
            <?php for ($i = 0; $i < count($eventos); $i++) { ?>       
              <div class="col-lg-4">
                <div class="card card-shadow text-center">
                  <div class="card-block">
                    <img class="card-img-top imagen-open" src="<?=@ ($eventos[$i]['urlImagen']!='NULL') ? $eventos[$i]['urlImagen'] : base_url("resources/assets/Anglo/AngloLatino-sintexto.png");?>" alt="Imagen Eventos" style="max-width: 150px;">
                    
                    <h4 class="profile-user"><?=@$eventos[$i]['titulo'];?></h4>
                    <p class="profile-job"><?=@$eventos[$i]['fecha'];?> - <?=@$eventos[$i]['horario'];?></p>
                    <p class="profile-job"><?=@$eventos[$i]['descE'];?></p>
                    <a type="button" class="btn btn-round btn-outline btn-info btn-add-facultadInstitucion" href="<?=$eventos[$i]['urlE']?>" target="_blank">Link de acceso</a>
                  </div>
                  <div class="card-footer">
                    <div class="row no-space">
                      <div class="col-6">
                        <button type="button" class="btn btn-primary editarEvento" id="<?=@$eventos[$i]['idEvento'];?>">Editar Evento</button>

                      </div>
                      <div class="col-6">
                        <button type="button" class="btn btn-primary addPhoto" id="<?=@$eventos[$i]['idEvento'];?>">Añadir Imagen</button>

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

<div class="modal fade" id="eventoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Crear Institucion</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="EventoForm">
        <div class="modal-body">
            
            <div class="form-group form-material" data-plugin="formMaterial">
                <label class="form-control-label" for="titulo">Titulo:</label>
                <input type="text" class="form-control" name="titulo" id="titulo" >
            </div>
            <div class="form-group form-material" data-plugin="formMaterial">
                <label class="form-control-label" for="fecha">Fecha:</label>
                <input type="text" class="form-control" name="fecha" id="fecha" >
            </div>
            <div class="form-group form-material" data-plugin="formMaterial">
                <label class="form-control-label" for="horario">Horario:</label>
                <input type="text" class="form-control" name="horario" id="horario" >
            </div>
            <div class="form-group form-material" data-plugin="formMaterial">
                <label class="form-control-label" for="urlE">Link de acceso:</label>
                <input type="text" class="form-control" name="urlE" id="urlE" >
            </div>
            <div class="form-group form-material" data-plugin="formMaterial">
                <label class="form-control-label" for="descE">Descripcion Evento:</label>
                <textarea type="text" class="form-control" name="descE" id="descE" ></textarea>
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

<div class="modal fade" id="photoChange" aria-hidden="true" aria-labelledby="examplePositionCenter" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-simple modal-center">
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title">Cambiar Foto</h4>
        </div>
        <div class="modal-body">
            <input type="hidden" name="evento" id="evento">
            <form id="photoEventoForm">
                <ul class="list-group list-group-bordered">
                    <li class="list-group-item list-group-item-action active" style="font-size: 16px;">Inserta la foto que deseas utilizar.</li>
                </ul>
                <div class="photoEventoAlert">
                </div>
                <div class="row">
                    <div class="col-md-8 col-sm-12">
                        <input type="file" id="input-file-now" data-plugin="dropify" data-default-file="" id="photoEvento" name="photoEvento">

                    </div>
                    <div class="col-md-4 col-sm-12 vertical-align-middle">
                    <button type="button" class="btn btn-block btn-info" style="margin-top:20%" id="btn-photoEvento">Subir</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>
</div>


<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="<?=base_url('resources/assets/JS/ServicesJS.js');?>"></script>
<script src="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

<script>
    $(document).ready(function() 
    {
        $(document).on('submit','#EventoForm',function(event){
            event.preventDefault();
            clearForm('EventoForm');
            var _id=$(document).find('#idEvento').val();
            if(_id){
                _url = _principalURL()+"Eventos/api/eventos/id/"+_id;
                _method = 'PUT';
            }else{
                _url = _principalURL()+"Eventos/api/eventos/";
                _method = 'POST';
            }
            
            
                $.ajax({
                    url: _url,
                    method : _method,
                    headers : {
                    'X-API-KEY':'ANGLOKEY'
                    },
                    data: $(document).find('#EventoForm').serialize(),
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

        $(document).on('click','.addPhoto',function (){
            var id = this.id;
            $(document).find('#evento').val(id);
            $('#photoChange').modal('show');
        });

        $(document).on('click','#btn-photoEvento',function(){
            id = $(document).find('#evento').val();
            var formData = new FormData($('#photoEventoForm')[0]);
            $.ajax({    
                url:_principalURL()+'Eventos/api/photoEvento/id/'+id,
                type:'post',
                processData:false,
                cache:false,
                headers: {
                'X-API-KEY':'ANGLOKEY'
                },
                contentType:false,
                data:formData,
                success : function(_response){
                    if(_response.status=="error"){
                        $(document).find('.photoEventoAlert').html(
                            '<div class="alert dark alert-icon alert-danger alert-dismissible" role="alert">'+
                                '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
                                    '<span aria-hidden="true">×</span>'+
                                '</button>'+
                                '<i class="icon wb-close" aria-hidden="true"></i>'+_response.validations+
                            '</div>'
                        );
                    }
                    if(_response.status=="success"){
                        setTimeout(function(){
                            location.reload();   
                        },2000);
                    }
                    tostada(_response.status,_response.message);

                },error : function(err){
                
                }
            });
        });

        $(document).on('click','.editarEvento',function(){
          id = this.id;
          _url = _principalURL()+"Eventos/api/eventos/id/"+id;

            $.ajax({
                url : _url,
                method : 'get',
                headers : {
                'X-API-KEY':'ANGLOKEY'
                },
                success : function(_response){
                    
                    $(document).find('#titulo').val(_response.data.titulo);
                    $(document).find('#fecha').val(_response.data.fecha);
                    $(document).find('#horario').val(_response.data.horario);
                    $(document).find('#urlE').val(_response.data.urlE);
                    $(document).find('#descE').val(_response.data.descE);

                        $(document).find('.btnsIns').html(
                        '<div class="row">'+
                            '<div class="col">'+
                            '<button type="button" class="btn btn-danger btn-cancel" data-dismiss="modal">Cancelar</button>'+
                            '</div>'+
                            '<div class="col">'+
                            '<button type="submit" class="btn btn-primary btn-update">Update</button>'+
                            '</div>'+
                            '<div class="col">'+
                            '<button type="button" class="btn btn-warning btn-delete-evento">Borrar</button>'+
                            '</div>'+
                        '</div>'
                        );

                        $(document).find('#EventoForm').append(
                          '<input type="hidden" id="idEvento" value="'+
                          _response.data.idEvento+'">'
                        );

                        $('#eventoModal').modal('show');
                    
                },error : function(error){
                
                }
            });
        });

        $('#eventoModal').on('hidden.bs.modal', function (e) {
            $(document).find('#titulo').val('');
            $(document).find('#horario').val('');
            $(document).find('#fecha').val('');
            $(document).find('#descE').val('');
            $(document).find('#urlE').val('');
            $(document).find('#idEvento').remove();
            $(document).find('.btnsIns').html(
                '<div class="row">'+
                '<div class="col">'+
                    '<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>'+
                    '<button type="submit" class="btn btn-primary">Guardar Cambios</button>'+
                '</div>'+
                '</div>'
            );
        });

        $(document).on('click','.btn-delete-evento',function(){
            _url = _principalURL()+"Eventos/api/eventos/id/"+$(document).find('#idEvento').val();
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
        
    });
</script>