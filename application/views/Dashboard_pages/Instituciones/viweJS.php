<script>
    $(document).on('change','#institucionesDU',function(){
            var id = $(document).find('#institucionesDU').val();
            _url = _principalURL()+"Documentos/OfertaCU/api/aspiranteInstitucionesBYKeyUniqueValue/id/"+id;

            $.ajax({
            url: _url,
            method : 'GET',
            headers : {
            'X-API-KEY':'ANGLOKEY'
            },
            data:null,
            success : function(_response){
               $(document).find('#fkInstitucion').val(_response['data']['idInstitucion']);
               $(document).find('#idDocumentoOferta').val(_response['data']['idReal']);
               $(document).find('#NombreInstitucion').val(_response['data']['nombreInstitucion']);
            },error : function(err){

            }
          });
        });

    $(document).on('click','#btn-Deferral',function(){
        var formData = new FormData($('#DeferralForm')[0]);
        var validateForm = $( document ).find('#Deferral').val() != '';
        var carpeta = $(document).find('#nameCarpetaD').val();
        var aspirante = $(document).find('#aspiranteKeyD').val();
        var intitucion = $(document).find('#fkInstitucion').val();
        
        var intitucionNombre = $(document).find('#NombreInstitucion').val();
        var keyDocumentoEliminar = $(document).find('#idDocumentoOferta').val();
        if(validateForm){
            $('#examplePositionSidebar').modal('hide');
            $('#uploadFileLeyenda').modal({backdrop: 'static', keyboard: false});
            var ext = $( document ).find('#Deferral').val().split('.').pop();
            $.ajax({
                url: 'https://content.dropboxapi.com/2/files/upload',
                type: 'post',
                data: formData,
                processData: false,
                contentType: 'application/octet-stream',
                headers: {
                    "Authorization": "Bearer Yw6OUnBO0lAAAAAAAAAAIn7BVI50aQuBCUahP_bylfNJDVOqtX3UgjwVd4o7ChKv",
                    "Dropbox-API-Arg": '{"path": "/'+carpeta+'/Email deferral request '+intitucionNombre+'.'+ext+'","mode": "overwrite","autorename": true,"mute": false}'
                },
                success: function (data) {

                    parametros = {
                        idDocumento : data['id'],
                        nameDocumento : data['name'],
                        sizeDocumento : data['size'],
                        pathDisplayDocumento : data['path_display'],
                        pathLowerDocumento : data['path_lower'],
                        contentHashDocumento :data['content_hash'],
                        clientModifiedDocumento : data['client_modified'],
                        fkAspirante: aspirante,
                        fkInstitucion : intitucion,
                        keyDocumentoEliminar : keyDocumentoEliminar
                    };

                    _url = _principalURL()+"Documentos/Carrera/api/deferralDropbox/";
                    _method = "POST";
                    $.ajax({
                        url: _url,
                        method : _method,
                        headers : {
                        'X-API-KEY':'ANGLOKEY'
                        },
                        data: parametros,
                        success : function(_response){
                            /*if(keyDocumentoEliminar){
                                $.ajax({
                                    url: _principalURL()+"Documentos/Carrera/api/defeatDocs/id/"+keyDocumentoEliminar,
                                    method : 'DELETE',
                                    headers : {
                                    'X-API-KEY':'ANGLOKEY'
                                    },
                                    data: null,
                                    success : function(_response){
                                        
                                            if(_response['status']=="success"){
                                                setTimeout(function(){
                                                location.reload();
                                                },2000);
                                                
                                            }
                                            tostada(_response.status,_response.message);
                                        


                                        


                                    },error : function(err){

                                    }
                                });
                            }else{*/
                                if(_response['status']=="success"){
                                    setTimeout(function(){
                                    location.reload();
                                    },2000);
                                    
                                }
                                tostada(_response.status,_response.message);
                            //}


                            


                        },error : function(err){

                        }
                    });

                },
                error: function (data) {
                    console.log(data);
                }
            });
        }else{
            tostada('error','No se ha seleccionado un archivo');
        }
    });

    $(document).on('click','.btn-ofertaCUPrepa',function(){
        var id = this.id;
        
        var aspirante = $(document).find('#aspiranteKey').val();
        var formData = new FormData($('#ofertaFormPrepa-'+id)[0]);
        var name = $(document).find('#nameCarpeta').val();
        var validateForm = formData.get('ofertaCUPrepa');
        var uniname = $(document).find('#uniNamePrepa').val();

        if(validateForm['size']>0){
            $('#uploadFileLeyenda').modal({backdrop: 'static', keyboard: false});
            
            $.ajax({
                url: 'https://content.dropboxapi.com/2/files/upload',
                type: 'post',
                data: formData,
                processData: false,
                contentType: 'application/octet-stream',
                headers: {
                    "Authorization": "Bearer Yw6OUnBO0lAAAAAAAAAAIn7BVI50aQuBCUahP_bylfNJDVOqtX3UgjwVd4o7ChKv",
                    "Dropbox-API-Arg": '{"path": "/'+name+'/Ofeta '+uniname+'.pdf","mode": "overwrite","autorename": true,"mute": false}'
                },
                success: function (data) {
                    //console.log(data);
                    parametros = {};
                    parametros['idDocumento'] = data['id'];
                    parametros['nameDocumento'] =  data['name'];
                    parametros['sizeDocumento'] =  data['size'];
                    parametros['pathDisplayDocumento'] =  data['path_display'];
                    parametros['pathLowerDocumento'] =  data['path_lower'];
                    parametros['contentHashDocumento'] = data['content_hash'],
                    parametros['clientModifiedDocumento'] =  data['client_modified'],
                    parametros['fkAspirante'] =  aspirante;
                    parametros['fkInstitucionAspirantePreparatorias'] =  id;

                    _url = _principalURL()+"Documentos/OfertaCU/api/uploadDropboxPrepa/";
                    _method = "POST";
                    $.ajax({
                        url: _url,
                        method : _method,
                        headers : {
                        'X-API-KEY':'ANGLOKEY'
                        },
                        data: parametros,
                        success : function(_response){
                        
                            if(_response['status']=="success"){
                                setTimeout(function(){
                                    location.reload();
                                },2000);
                                
                            }
                            tostada(_response.status,_response.message);
                        

                        },error : function(err){
                        
                        }
                    });

                    
                    
                },
                error: function (data) {
                }
            });
        }else{
            $(document).find('.ofertaFormAlertPrepa-'+id).html(
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

    $(document).on('click','.btn-ofertaCU',function(){
        var id = this.id;
        
        var aspirante = $(document).find('#aspiranteKey').val();
        var formData = new FormData($('#ofertaForm-'+id)[0]);
        var name = $(document).find('#nameCarpeta').val();
        var validateForm = formData.get('ofertaCU');
        var uniname = $(document).find('#uniName').val();

        if(validateForm['size']>0){
            $('#uploadFileLeyenda').modal({backdrop: 'static', keyboard: false});
            
            $.ajax({
                url: 'https://content.dropboxapi.com/2/files/upload',
                type: 'post',
                data: formData,
                processData: false,
                contentType: 'application/octet-stream',
                headers: {
                    "Authorization": "Bearer Yw6OUnBO0lAAAAAAAAAAIn7BVI50aQuBCUahP_bylfNJDVOqtX3UgjwVd4o7ChKv",
                    "Dropbox-API-Arg": '{"path": "/'+name+'/Ofeta '+uniname+'.pdf","mode": "overwrite","autorename": true,"mute": false}'
                },
                success: function (data) {
                    //console.log(data);
                    parametros = {};
                    parametros['idDocumento'] = data['id'];
                    parametros['nameDocumento'] =  data['name'];
                    parametros['sizeDocumento'] =  data['size'];
                    parametros['pathDisplayDocumento'] =  data['path_display'];
                    parametros['pathLowerDocumento'] =  data['path_lower'];
                    parametros['contentHashDocumento'] = data['content_hash'],
                    parametros['clientModifiedDocumento'] =  data['client_modified'],
                    parametros['fkAspirante'] =  aspirante;
                    parametros['fkInstitucionAspiranteUniversidades'] =  id;

                    _url = _principalURL()+"Documentos/OfertaCU/api/uploadDropbox/";
                    _method = "POST";
                    $.ajax({
                        url: _url,
                        method : _method,
                        headers : {
                        'X-API-KEY':'ANGLOKEY'
                        },
                        data: parametros,
                        success : function(_response){
                        
                            if(_response['status']=="success"){
                                setTimeout(function(){
                                    location.reload();
                                },2000);
                                
                            }
                            tostada(_response.status,_response.message);
                        

                        },error : function(err){
                        
                        }
                    });

                    
                    
                },
                error: function (data) {
                }
            });
        }else{
            $(document).find('.ofertaFormAlert-'+id).html(
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
</script>