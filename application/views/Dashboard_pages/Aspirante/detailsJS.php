<script>
     $(function(){
        $(document).on('change','.test',function () {
            var id = this.id;
            var filename =  $(document).find('.file-'+id).val().replace(/C:\\fakepath\\/i, '');
            $(document).find('#t-'+id).val(filename);
        });

        $(document).on('click','.btnAceptar',function(){
            var id = this.id;
            var formData = new FormData($('#documentoSubir-'+id)[0]);
            var tipo = $(document).find('#tipo-'+id).val();
            
            _params={
        	    "descDocument":$(document).find('#desc-'+id).val()
            };

            if(tipo=="Transcripcion"){
                _url = _principalURL()+'Documentos/Maestria/api/maestriaTranscripcionUpdated/id/'+id;
            }else if(tipo=="TranscripcionTraduccion"){
                _url = _principalURL()+'Documentos/Maestria/api/maestriaTranscripcionTraduccionUpdated/id/'+id;
            }else if(tipo=="CartaMotivo"){
                _url = _principalURL()+'Documentos/Maestria/api/maestriaCartaMotivoUpdated/id/'+id;
            }

            if(_params['descDocument']){
                $.ajax({
                    url:_url,
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
                            $(document).find('.boletaAlert-'+id).html(
                                '<div class="alert dark alert-icon alert-danger alert-dismissible" role="alert">'+
                                    '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
                                        '<span aria-hidden="true">×</span>'+
                                    '</button>'+
                                    '<i class="icon wb-close" aria-hidden="true"></i>'+_response.validations+
                                '</div>'
                            );
                        }
                        if(_response.status=="success"){
                            //poner lo de la descripcion
                            $.ajax({
                                url: _principalURL()+'Documentos/Maestria/api/maestriaDesc/id/'+id,
                                method : 'post',
                                headers : {
                                'X-API-KEY':'ANGLOKEY'
                                },
                                data: _params,
                                success : function(_response){
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
                        tostada(_response.status,_response.message);

                    },error : function(err){
                    
                    }
                });
            }else{
                $(document).find('.boletaAlert-'+id).html(
                    '<div class="alert dark alert-icon alert-danger alert-dismissible" role="alert">'+
                        '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
                            '<span aria-hidden="true">×</span>'+
                        '</button>'+
                        '<i class="icon wb-close" aria-hidden="true"></i>'+'No has llenado el campo de descricion.'+
                    '</div>'
                );
            }

            
        });
    });
</script>