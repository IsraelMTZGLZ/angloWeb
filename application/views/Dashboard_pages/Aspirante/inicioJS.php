<script type="text/javascript">
  $(function(){
    $(document).on('click','#btn-boleta',function(){
        var aspirante = $(document).find('#aspirante').val();
        var formData = new FormData($('#boletaForm')[0]);
        $.ajax({
            url:_principalURL()+'Documentos/Carrera/api/carreraBoleta/id/'+aspirante,
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
                    $(document).find('.boletaAlert').html(
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

    $(document).on('click','#btn-boletaDOC',function(){
        var aspirante = $(document).find('#aspirante').val();
        var formData = new FormData($('#boletaDOCForm')[0]);
        $.ajax({
            url:_principalURL()+'Documentos/Carrera/api/carreraBoletaDOC/id/'+aspirante,
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
                    $(document).find('.boletaDOCAlert').html(
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

    $(document).on('click','#btn-carta',function(){
        var aspirante = $(document).find('#aspirante').val();
        var formData = new FormData($('#cartaForm')[0]);
        $.ajax({
            url:_principalURL()+'Documentos/Carrera/api/carreraCarta/id/'+aspirante,
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
                    $(document).find('.cartaAlert').html(
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

    $(document).on('click','#btn-pasaporte',function(){
        var aspirante = $(document).find('#aspirante').val();
        var formData = new FormData($('#pasaporteForm')[0]);
        $.ajax({
            url:_principalURL()+'Documentos/Carrera/api/carreraPasaporte/id/'+aspirante,
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
                    $(document).find('.pasaporteAlert').html(
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

    $(document).on('click','#btn-transcripcion',function(){
        var aspirante = $(document).find('#aspirante').val();
        var formData = new FormData($('#transcripcionForm')[0]);
        $.ajax({
            url:_principalURL()+'Documentos/Maestria/api/maestriaTranscripcion/id/'+aspirante,
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
                    $(document).find('.transcripcionAlert').html(
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

    $(document).on('click','#btn-transcripcionTra',function(){
        var aspirante = $(document).find('#aspirante').val();
        var formData = new FormData($('#transcripcionTraForm')[0]);
        $.ajax({
            url:_principalURL()+'Documentos/Maestria/api/maestriaTranscripcionTraduccion/id/'+aspirante,
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
                    $(document).find('.transcripcionTraAlert').html(
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

    $(document).on('click','.btn-cartaMaestria',function(){
        var institucion = this.id;
        var aspirante = $(document).find('#aspirante').val();
        var formData = new FormData($('#cartaMaestriaForm-'+institucion)[0]);
        $.ajax({
            url:_principalURL()+'Documentos/Maestria/api/maestriaCartaMotivo/id/'+aspirante+'/institucion/'+institucion,
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
                    $(document).find('.cartaMaestriaAlert-'+institucion).html(
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

    $(document).on('click','#btn-recomendacion',function(){
        var aspirante = $(document).find('#aspirante').val();
        var formData = new FormData($('#recomendacionForm')[0]);
        $.ajax({
            url:_principalURL()+'Documentos/Maestria/api/maestriaCartaRecomendacion/id/'+aspirante,
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
                    $(document).find('.recomendacionAlert').html(
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

    $(document).on('click','#btn-transcripcionPHD',function(){
        var aspirante = $(document).find('#aspirante').val();
        var formData = new FormData($('#transcripcionPHDForm')[0]);
        $.ajax({
            url:_principalURL()+'Documentos/PhD/api/phDTranscripcion/id/'+aspirante,
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
                    $(document).find('.transcripcionPHDAlert').html(
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

    $(document).on('click','#btn-transcripcionTRAPHD',function(){
        var aspirante = $(document).find('#aspirante').val();
        var formData = new FormData($('#transcripcionTRAPHDForm')[0]);
        $.ajax({
            url:_principalURL()+'Documentos/PhD/api/phDTranscripcionTra/id/'+aspirante,
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
                    $(document).find('.transcripcioTRAPHDAlert').html(
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

    $(document).on('click','#btn-cartaPropuesta',function(){
        var aspirante = $(document).find('#aspirante').val();
        var formData = new FormData($('#propuestaForm')[0]);
        $.ajax({
            url:_principalURL()+'Documentos/PhD/api/phDPropuesta/id/'+aspirante,
            type:'post',
            processData:false,
            cache:false,
            headers: {
            'X-API-KEY':'ANGLOKEY'
            },
            contentType:false,
            data:formData,
            success : function(_response){
                console.info(_response);
                if(_response.status=="error"){
                    $(document).find('.propuestaAlert').html(
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
    
    $(document).on('click','#btn-cv',function(){
        var aspirante = $(document).find('#aspirante').val();
        var formData = new FormData($('#cvForm')[0]);
        $.ajax({
            url:_principalURL()+'Documentos/PhD/api/phDCV/id/'+aspirante,
            type:'post',
            processData:false,
            cache:false,
            headers: {
            'X-API-KEY':'ANGLOKEY'
            },
            contentType:false,
            data:formData,
            success : function(_response){
                console.info(_response);
                if(_response.status=="error"){
                    $(document).find('.cvAlert').html(
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

    $(document).on('click','#btn-boletaPrep',function(){
        var aspirante = $(document).find('#aspirante').val();
        var formData = new FormData($('#boletaPrepaForm')[0]);
        $.ajax({
            url:_principalURL()+'Documentos/Preparatoria/api/prepartoriaBoleta/id/'+aspirante,
            type:'post',
            processData:false,
            cache:false,
            headers: {
            'X-API-KEY':'ANGLOKEY'
            },
            contentType:false,
            data:formData,
            success : function(_response){
                console.info(_response);
                if(_response.status=="error"){
                    $(document).find('.boletaPrepAlert').html(
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

    $(document).on('click','#btn-boletaPrepaTra',function(){
        var aspirante = $(document).find('#aspirante').val();
        var formData = new FormData($('#boletaPrepaTraForm')[0]);
        $.ajax({
            url:_principalURL()+'Documentos/Preparatoria/api/prepartoriaBoletaTraduccion/id/'+aspirante,
            type:'post',
            processData:false,
            cache:false,
            headers: {
            'X-API-KEY':'ANGLOKEY'
            },
            contentType:false,
            data:formData,
            success : function(_response){
                console.info(_response);
                if(_response.status=="error"){
                    $(document).find('.boletaPrepaTraAlert').html(
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

    $(document).on('click','#btn-pasaportePrepa',function(){
        var aspirante = $(document).find('#aspirante').val();
        var formData = new FormData($('#pasaportePrepaForm')[0]);
        $.ajax({
            url:_principalURL()+'Documentos/Preparatoria/api/prepartoriaPasaporte/id/'+aspirante,
            type:'post',
            processData:false,
            cache:false,
            headers: {
            'X-API-KEY':'ANGLOKEY'
            },
            contentType:false,
            data:formData,
            success : function(_response){
                console.info(_response);
                if(_response.status=="error"){
                    $(document).find('.pasaportePrepaAlert').html(
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


    $(document).on('click','.btn-inverse',function(){
        window.location.href = "<?php echo site_url('Dashboard/MisArchivos'); ?>";
    });

  });
</script>
