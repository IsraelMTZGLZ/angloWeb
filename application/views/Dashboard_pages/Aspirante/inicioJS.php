<script type="text/javascript">
  $(function(){

    $(document).on('click','.btn-putBecas',function(){
        var aspirante = $(document).find('#becasAspiranteKey').val();
        var rd = $('input:radio[name=radioBecas]:checked').val();
        if(rd=='si'){
            status = 'Si';
        }else if(rd=='no'){
            status = 'No';
        }else{
            status = '';
        }
        data = {
            "status":status
        }
        $.ajax({
            url: _principalURL()+"Aspirante/api/BECASPONER/id/"+aspirante,
            method : 'POST',
            headers : {
            'X-API-KEY':'ANGLOKEY'
            },
            data: data,
            success : function(_response){
                if(_response['status']=="success"){
                    setTimeout(function(){
                    location.reload();
                    },2000);
                    
                }
                if(_response['status']=="error"){
                    $(document).find('.becaAlert').html(
                        '<div class="alert dark alert-icon alert-danger alert-dismissible" role="alert" style="margin:10px">'+
                            '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
                                '<span aria-hidden="true">×</span>'+
                            '</button>'+
                            '<i class="icon wb-close" aria-hidden="true"></i>No se ha seleccionado una opcion'+
                        '</div>'
                    );
                    
                }
                
                tostada(_response.status,_response.message);

            }
        });
    });
    
    $(document).on('click','#btn-boleta',function(){
        var aspirante = $(document).find('#aspirante').val();
        var formData = new FormData($('#boletaForm')[0]);
        var name = $(document).find('#nameAspirante').val();
        var validateForm = formData.get('Boleta');
        if(validateForm['size']>0){
            $('#exampleFillIn').modal({backdrop: 'static', keyboard: false});
            
            $.ajax({
                url: 'https://api.dropboxapi.com/2/files/create_folder_batch',
                type: 'post',
                contentType: 'application/json',
                headers: {
                    "Authorization": "Bearer gv_-25LIyu4AAAAAAAAAAdKa71wqu5STIEWlrueT4Eu3V-xcrl9AwQh6DE9iB2IL",
                    
                },
                data:'{\"paths\": [\"/'+name+'\"],\"autorename\": false,\"force_async\": false}',
                success: function (response) {
                    var carpeta = response['entries'][0];
                    if(carpeta['.tag']=='success'){
                        parametros = {
                            idCarpeta : carpeta['metadata']['id'],
                            nameCarpeta : carpeta['metadata']['name'],
                            pathDisplayCarpeta : carpeta['metadata']['path_display'],
                            pathLowerCarpeta : carpeta['metadata']['path_lower']
                        }
                    }else{
                        parametros = null;
                    }
                    
                    $.ajax({
                        xhr: function() {
                            var xhr = $.ajaxSettings.xhr();
                            xhr.upload.onprogress = function(e) {
                                //console.log(Math.floor(e.loaded / e.total *100) + '%');
                            };
                            return xhr;
                        },
                        url: 'https://content.dropboxapi.com/2/files/upload',
                        type: 'post',
                        data: formData,
                        processData: false,
                        contentType: 'application/octet-stream',
                        headers: {
                            "Authorization": "Bearer gv_-25LIyu4AAAAAAAAAAdKa71wqu5STIEWlrueT4Eu3V-xcrl9AwQh6DE9iB2IL",
                            "Dropbox-API-Arg": '{"path": "/'+name+'/Boleta.pdf","mode": "overwrite","autorename": true,"mute": false}'
                        },
                        success: function (data) {
                            //console.log(data);
                            if(parametros){
                                parametros['idDocumento'] = data['id'];
                                parametros['nameDocumento'] =  data['name'];
                                parametros['sizeDocumento'] =  data['size'];
                                parametros['pathDisplayDocumento'] =  data['path_display'];
                                parametros['pathLowerDocumento'] =  data['path_lower'];
                                parametros['contentHashDocumento'] = data['content_hash'],
                                parametros['clientModifiedDocumento'] =  data['client_modified'],
                                parametros['tipoDocumento'] =  'Carrera';
                                parametros['tipo'] =  'Boleta';
                                parametros['fkAspirante'] =  aspirante;

                                _url = _principalURL()+"Documentos/Carrera/api/uploadDropbox/";
                                _method = "POST";
                                $.ajax({
                                    url: _url,
                                    method : _method,
                                    headers : {
                                    'X-API-KEY':'ANGLOKEY'
                                    },
                                    data: parametros,
                                    success : function(_response){
                                    
                                    
                                        setTimeout(function(){
                                            location.reload();
                            
                                        },2000);
                                        tostada(_response.status,_response.message);
                                    

                                    },error : function(err){
                                    
                                    }
                                });

                            }else{
                                parametros = {
                                    idDocumento : data['id'],
                                    nameDocumento : data['name'],
                                    sizeDocumento : data['size'],
                                    pathDisplayDocumento : data['path_display'],
                                    pathLowerDocumento : data['path_lower'],
                                    contentHashDocumento :data['content_hash'],
                                    clientModifiedDocumento : data['client_modified'],
                                    tipoDocumento : 'Carrera',
                                    tipo : 'Boleta',
                                    fkAspirante : aspirante
                                };

                                _url = _principalURL()+"Documentos/Carrera/api/uploadDropboxSinCarpeta/";
                                _method = "POST";
                                $.ajax({
                                    url: _url,
                                    method : _method,
                                    headers : {
                                    'X-API-KEY':'ANGLOKEY'
                                    },
                                    data: parametros,
                                    success : function(_response){
                                    
                                    
                                    
                                        tostada(_response.status,_response.message);
                                    

                                    },error : function(err){
                                    
                                    }
                                });
                            }
                            
                        },
                        error: function (data) {
                        }
                    });
                },
                error: function (response) {
                    //console.error(response);
                }
            });
        }else{
            $(document).find('.boletaAlert').html(
                '<div class="alert dark alert-icon alert-danger alert-dismissible" role="alert">'+
                    '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
                        '<span aria-hidden="true">×</span>'+
                    '</button>'+
                    '<i class="icon wb-close" aria-hidden="true"></i>No se ha seleccionado un archivo'+
                '</div>'
            );
            tostada('error','No se ha seleccionado un archivo');
        }
        
    });

    $(document).on('click','.btn-inverse',function(){
        window.location.href = "<?php echo site_url('Dashboard/MisArchivos'); ?>";
    });

  });
</script>
