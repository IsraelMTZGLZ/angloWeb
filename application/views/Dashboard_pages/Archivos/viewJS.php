<script type="text/javascript">
  $(function(){

    $(document).on('click','.btnReSubir',function(){
        var id = this.id;
        var name = this.name;
        var res = name.split(".");
        //console.info(res[0]);
        var formData = new FormData($('#formDocModi-'+id)[0]);
        var validateForm = $( document ).find('#files-'+id).val() != '';
        var carpeta = $(document).find('#pathCarpeta-'+id).val();
        if(validateForm){
            $('#exampleFillIn').modal({backdrop: 'static', keyboard: false});
            var ext = $( document ).find('#files-'+id).val().split('.').pop();
            $.ajax({
                url: 'https://content.dropboxapi.com/2/files/upload',
                type: 'post',
                data: formData,
                processData: false,
                contentType: 'application/octet-stream',
                headers: {
                    "Authorization": "Bearer Cgp9TLRy8iAAAAAAAAAAZXUdAQGwhKQXEtyQncORJUkuIO8afrLXrRd43_0ns-_4",
                    "Dropbox-API-Arg": '{"path": "/'+carpeta+'/'+res[0]+'.'+ext+'","mode": "overwrite","autorename": true,"mute": false}'
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
                    };

                    _url = _principalURL()+"Documentos/Carrera/api/resubirDocDropbox/id/"+id;
                    _method = "PUT";
                    $.ajax({
                        url: _url,
                        method : _method,
                        headers : {
                        'X-API-KEY':'ANGLOKEY'
                        },
                        data: parametros,
                        success : function(_response){


                            setTimeout(function(){
                                window.location.href = "<?php echo site_url('Dashboard/MisArchivos'); ?>";
                            },2000);
                            tostada(_response.status,_response.message);


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

    $(document).on('change','input[type="file"]',function (){
        var name = this.name;
        var res = name.split(".");
        if(res[0]=='Boleta' || res[0]=='Pasaporte' || res[0]=='Carta Autorizacion' || res[0]=='Transcripcion'){
            var ext = $( this ).val().split('.').pop();
            if ($( this ).val() != '') {
                if(ext != "pdf"){
                    $( this ).val('');
                    tostada('error','El tipo de arhivo no esta permitido,ingresa un archivo en formato pdf');
                }
            }
        }else if(res[0]=='Boleta Traducida'|| res[0]=='Carta Motivos' || res[0]=='Carta Recomendacion' || res[0]=='Transcripcion Traducida' || res[0]=='Propuesta de Investigacion' || res[0]=='CV' || res[0]=='Formato De Solicitud'){
            var ext = $( this ).val().split('.').pop();
            if ($( this ).val() != '') {
                if(ext != "pdf" && ext!="doc" && ext!="docx"){
                    $( this ).val('');
                    tostada('error','El tipo de arhivo no esta permitido,ingresa un archivo en formato pdf o word');
                }
            }
        }else{
            var newTest = res[0].split(' ');
            if(newTest[0]=='Primera' || newTest[0]=='Segunda'){
                var ext = $( this ).val().split('.').pop();
                if ($( this ).val() != '') {
                    if(ext != "pdf"){
                        $( this ).val('');
                        tostada('error','El tipo de arhivo no esta permitido,ingresa un archivo en formato pdf');
                    }
                }
            }else {
                var ext = $( this ).val().split('.').pop();
                if ($( this ).val() != '') {
                    if(ext != "pdf" && ext!="doc" && ext!="docx"){
                        $( this ).val('');
                        tostada('error','El tipo de arhivo no esta permitido,ingresa un archivo en formato pdf o word');
                    }
                }
            }
        }

    });

    $(document).on('click','#btn-formatoSolicitud',function(){
        var aspirante = $(document).find('#aspirante').val();
        var formData = new FormData($('#formatoSolicitudForm')[0]);
        var name = $(document).find('#nameAspirante').val();
        var validateForm = formData.get('formatoSolicitud');
        if(validateForm['size']>0){
            $('#exampleFillIn').modal({backdrop: 'static', keyboard: false});
            res = validateForm['name'].split(".",-1).reverse()[0];
            $.ajax({
                url: 'https://api.dropboxapi.com/2/files/create_folder_batch',
                type: 'post',
                contentType: 'application/json',
                headers: {
                    "Authorization": "Bearer Cgp9TLRy8iAAAAAAAAAAZXUdAQGwhKQXEtyQncORJUkuIO8afrLXrRd43_0ns-_4",

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
                        url: 'https://content.dropboxapi.com/2/files/upload',
                        type: 'post',
                        data: formData,
                        processData: false,
                        contentType: 'application/octet-stream',
                        headers: {
                            "Authorization": "Bearer Cgp9TLRy8iAAAAAAAAAAZXUdAQGwhKQXEtyQncORJUkuIO8afrLXrRd43_0ns-_4",
                            "Dropbox-API-Arg": '{"path": "/'+name+'/Formato De Solicitud.'+res+'","mode": "overwrite","autorename": true,"mute": false}'
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
                                parametros['tipoDocumento'] =  'Preparatoria';
                                parametros['tipo'] =  'FormatoSolicitud';
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
                                            window.location.href = "<?php echo site_url('Dashboard/MisArchivos'); ?>";
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
                                    tipoDocumento : 'Preparatoria',
                                    tipo : 'FormatoSolicitud',
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


                                        setTimeout(function(){
                                            window.location.href = "<?php echo site_url('Dashboard/MisArchivos'); ?>";
                                        },2000);
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
            $(document).find('.formatoSolicitudAlert').html(
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

    $(document).on('click','#btn-autoPrepa',function(){
        var aspirante = $(document).find('#aspirante').val();
        var formData = new FormData($('#autoPrepaForm')[0]);
        var name = $(document).find('#nameAspirante').val();
        var validateForm = formData.get('autoPrepa');
        if(validateForm['size']>0){
            $('#exampleFillIn').modal({backdrop: 'static', keyboard: false});
            res = validateForm['name'].split(".",-1).reverse()[0];
            $.ajax({
                url: 'https://api.dropboxapi.com/2/files/create_folder_batch',
                type: 'post',
                contentType: 'application/json',
                headers: {
                    "Authorization": "Bearer Cgp9TLRy8iAAAAAAAAAAZXUdAQGwhKQXEtyQncORJUkuIO8afrLXrRd43_0ns-_4",

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
                        url: 'https://content.dropboxapi.com/2/files/upload',
                        type: 'post',
                        data: formData,
                        processData: false,
                        contentType: 'application/octet-stream',
                        headers: {
                            "Authorization": "Bearer Cgp9TLRy8iAAAAAAAAAAZXUdAQGwhKQXEtyQncORJUkuIO8afrLXrRd43_0ns-_4",
                            "Dropbox-API-Arg": '{"path": "/'+name+'/Carta Autorizacion.'+res+'","mode": "overwrite","autorename": true,"mute": false}'
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
                                parametros['tipoDocumento'] =  'Preparatoria';
                                parametros['tipo'] =  'CartaAutorizacion';
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
                                            window.location.href = "<?php echo site_url('Dashboard/MisArchivos'); ?>";
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
                                    tipoDocumento : 'Preparatoria',
                                    tipo : 'CartaAutorizacion',
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


                                        setTimeout(function(){
                                            window.location.href = "<?php echo site_url('Dashboard/MisArchivos'); ?>";
                                        },2000);
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
            $(document).find('.autoPrepaAlert').html(
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

    $(document).on('click','#btn-recomendPrepa',function(){
        var aspirante = $(document).find('#aspirante').val();
        var formData = new FormData($('#recomendPrepaForm')[0]);
        var name = $(document).find('#nameAspirante').val();
        var validateForm = formData.get('recomendPrepa');
        if(validateForm['size']>0){
            $('#exampleFillIn').modal({backdrop: 'static', keyboard: false});
            res = validateForm['name'].split(".",-1).reverse()[0];
            $.ajax({
                url: 'https://api.dropboxapi.com/2/files/create_folder_batch',
                type: 'post',
                contentType: 'application/json',
                headers: {
                    "Authorization": "Bearer Cgp9TLRy8iAAAAAAAAAAZXUdAQGwhKQXEtyQncORJUkuIO8afrLXrRd43_0ns-_4",

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
                            "Authorization": "Bearer Cgp9TLRy8iAAAAAAAAAAZXUdAQGwhKQXEtyQncORJUkuIO8afrLXrRd43_0ns-_4",
                            "Dropbox-API-Arg": '{"path": "/'+name+'/Carta Recomendacion.'+res+'","mode": "overwrite","autorename": true,"mute": false}'
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
                                parametros['tipoDocumento'] =  'Preparatoria';
                                parametros['tipo'] =  'CartaRecomendacion';
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
                                            window.location.href = "<?php echo site_url('Dashboard/MisArchivos'); ?>";
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
                                    tipoDocumento : 'Preparatoria',
                                    tipo : 'CartaRecomendacion',
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


                                        setTimeout(function(){
                                            window.location.href = "<?php echo site_url('Dashboard/MisArchivos'); ?>";
                                        },2000);
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
            $(document).find('.recomendPrepaAlert').html(
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

    $(document).on('click','#btn-cartaMotivosPrepa',function(){
        var aspirante = $(document).find('#aspirante').val();
        var formData = new FormData($('#cartaMotivosPrepaForm')[0]);
        var name = $(document).find('#nameAspirante').val();
        var validateForm = formData.get('cartaMotivosPrepa');
        if(validateForm['size']>0){
            $('#exampleFillIn').modal({backdrop: 'static', keyboard: false});
            res = validateForm['name'].split(".",-1).reverse()[0];
            $.ajax({
                url: 'https://api.dropboxapi.com/2/files/create_folder_batch',
                type: 'post',
                contentType: 'application/json',
                headers: {
                    "Authorization": "Bearer Cgp9TLRy8iAAAAAAAAAAZXUdAQGwhKQXEtyQncORJUkuIO8afrLXrRd43_0ns-_4",

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
                            "Authorization": "Bearer Cgp9TLRy8iAAAAAAAAAAZXUdAQGwhKQXEtyQncORJUkuIO8afrLXrRd43_0ns-_4",
                            "Dropbox-API-Arg": '{"path": "/'+name+'/Carta Motivos.'+res+'","mode": "overwrite","autorename": true,"mute": false}'
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
                                parametros['tipoDocumento'] =  'Preparatoria';
                                parametros['tipo'] =  'CartaMotivo';
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
                                            window.location.href = "<?php echo site_url('Dashboard/MisArchivos'); ?>";
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
                                    tipoDocumento : 'Preparatoria',
                                    tipo : 'CartaMotivo',
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

                                        setTimeout(function(){
                                            window.location.href = "<?php echo site_url('Dashboard/MisArchivos'); ?>";
                                        },2000);
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
            $(document).find('.cartaMotivosPrepaAlert').html(
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

    $(document).on('click','#btn-boletaTraduccionPrepa',function(){
        var aspirante = $(document).find('#aspirante').val();
        var formData = new FormData($('#boletaTraduccionPrepaForm')[0]);
        var name = $(document).find('#nameAspirante').val();
        var validateForm = formData.get('BoletaTraduccionPrepa');
        if(validateForm['size']>0){
            $('#exampleFillIn').modal({backdrop: 'static', keyboard: false});
            res = validateForm['name'].split(".",-1).reverse()[0];
            $.ajax({
                url: 'https://api.dropboxapi.com/2/files/create_folder_batch',
                type: 'post',
                contentType: 'application/json',
                headers: {
                    "Authorization": "Bearer Cgp9TLRy8iAAAAAAAAAAZXUdAQGwhKQXEtyQncORJUkuIO8afrLXrRd43_0ns-_4",

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
                            "Authorization": "Bearer Cgp9TLRy8iAAAAAAAAAAZXUdAQGwhKQXEtyQncORJUkuIO8afrLXrRd43_0ns-_4",
                            "Dropbox-API-Arg": '{"path": "/'+name+'/Boleta Traducida.'+res+'","mode": "overwrite","autorename": true,"mute": false}'
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
                                parametros['tipoDocumento'] =  'Preparatoria';
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
                                            window.location.href = "<?php echo site_url('Dashboard/MisArchivos'); ?>";
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
                                    tipoDocumento : 'Preparatoria',
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

                                        setTimeout(function(){
                                            window.location.href = "<?php echo site_url('Dashboard/MisArchivos'); ?>";
                                        },2000);
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
            $(document).find('.boletaTraduccionPrepaAlert').html(
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

    $(document).on('click','#btn-boletaPrepa',function(){
        var aspirante = $(document).find('#aspirante').val();
        var formData = new FormData($('#boletaPrepaForm')[0]);
        var name = $(document).find('#nameAspirante').val();
        var validateForm = formData.get('boletaPrepa');
        if(validateForm['size']>0){
            $('#exampleFillIn').modal({backdrop: 'static', keyboard: false});
            res = validateForm['name'].split(".",-1).reverse()[0];
            $.ajax({
                url: 'https://api.dropboxapi.com/2/files/create_folder_batch',
                type: 'post',
                contentType: 'application/json',
                headers: {
                    "Authorization": "Bearer Cgp9TLRy8iAAAAAAAAAAZXUdAQGwhKQXEtyQncORJUkuIO8afrLXrRd43_0ns-_4",

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
                            "Authorization": "Bearer Cgp9TLRy8iAAAAAAAAAAZXUdAQGwhKQXEtyQncORJUkuIO8afrLXrRd43_0ns-_4",
                            "Dropbox-API-Arg": '{"path": "/'+name+'/Boleta.'+res+'","mode": "overwrite","autorename": true,"mute": false}'
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
                                parametros['tipoDocumento'] =  'Preparatoria';
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
                                            window.location.href = "<?php echo site_url('Dashboard/MisArchivos'); ?>";
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
                                    tipoDocumento : 'Preparatoria',
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


                                        setTimeout(function(){
                                            window.location.href = "<?php echo site_url('Dashboard/MisArchivos'); ?>";
                                        },2000);
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
            $(document).find('.boletaPrepaAlert').html(
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

    $(document).on('click','#btn-pasaportePrepa',function(){
        var aspirante = $(document).find('#aspirante').val();
        var formData = new FormData($('#pasaportePrepaForm')[0]);
        var name = $(document).find('#nameAspirante').val();
        var validateForm = formData.get('pasaportePrepa');
        if(validateForm['size']>0){
            $('#exampleFillIn').modal({backdrop: 'static', keyboard: false});
            res = validateForm['name'].split(".",-1).reverse()[0];
            $.ajax({
                url: 'https://api.dropboxapi.com/2/files/create_folder_batch',
                type: 'post',
                contentType: 'application/json',
                headers: {
                    "Authorization": "Bearer Cgp9TLRy8iAAAAAAAAAAZXUdAQGwhKQXEtyQncORJUkuIO8afrLXrRd43_0ns-_4",

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
                            "Authorization": "Bearer Cgp9TLRy8iAAAAAAAAAAZXUdAQGwhKQXEtyQncORJUkuIO8afrLXrRd43_0ns-_4",
                            "Dropbox-API-Arg": '{"path": "/'+name+'/Pasaporte.'+res+'","mode": "overwrite","autorename": true,"mute": false}'
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
                                parametros['tipoDocumento'] =  'Preparatoria';
                                parametros['tipo'] =  'Pasaporte';
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
                                            window.location.href = "<?php echo site_url('Dashboard/MisArchivos'); ?>";
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
                                    tipoDocumento : 'Preparatoria',
                                    tipo : 'Pasaporte',
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

                                        setTimeout(function(){
                                            window.location.href = "<?php echo site_url('Dashboard/MisArchivos'); ?>";
                                        },2000);
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
            $(document).find('.pasaportePrepaAlert').html(
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

    $(document).on('click','#btn-autoCartaPHD',function(){
        var aspirante = $(document).find('#aspirante').val();
        var formData = new FormData($('#autoCartaPHDForm')[0]);
        var name = $(document).find('#nameAspirante').val();
        var validateForm = formData.get('autoCartaPHD');
        if(validateForm['size']>0){
            $('#exampleFillIn').modal({backdrop: 'static', keyboard: false});
            res = validateForm['name'].split(".",-1).reverse()[0];
            $.ajax({
                url: 'https://api.dropboxapi.com/2/files/create_folder_batch',
                type: 'post',
                contentType: 'application/json',
                headers: {
                    "Authorization": "Bearer Cgp9TLRy8iAAAAAAAAAAZXUdAQGwhKQXEtyQncORJUkuIO8afrLXrRd43_0ns-_4",

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
                            "Authorization": "Bearer Cgp9TLRy8iAAAAAAAAAAZXUdAQGwhKQXEtyQncORJUkuIO8afrLXrRd43_0ns-_4",
                            "Dropbox-API-Arg": '{"path": "/'+name+'/Carta Autorizacion.'+res+'","mode": "overwrite","autorename": true,"mute": false}'
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
                                parametros['tipoDocumento'] =  'PhD';
                                parametros['tipo'] =  'CartaAutorizacion';
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
                                            window.location.href = "<?php echo site_url('Dashboard/MisArchivos'); ?>";
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
                                    tipoDocumento : 'PhD',
                                    tipo : 'CartaAutorizacion',
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


                                        setTimeout(function(){
                                            window.location.href = "<?php echo site_url('Dashboard/MisArchivos'); ?>";
                                        },2000);
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
            $(document).find('.autoCartaPHDAlert').html(
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

    $(document).on('click','.btn-cartasReSPHD',function(){
        var idUniversidad =  this.id;
        var nombreUniversidad = this.name;
        var aspirante = $(document).find('#aspirante').val();
        var formData = new FormData($('#cartasReSPHDForm-'+idUniversidad)[0]);
        var name = $(document).find('#nameAspirante').val();
        var validateForm = formData.get('cartasReSPHD-'+idUniversidad);
        if(validateForm['size']>0){
            $('#exampleFillIn').modal({backdrop: 'static', keyboard: false});
            res = validateForm['name'].split(".",-1).reverse()[0];
            $.ajax({
                url: 'https://api.dropboxapi.com/2/files/create_folder_batch',
                type: 'post',
                contentType: 'application/json',
                headers: {
                    "Authorization": "Bearer Cgp9TLRy8iAAAAAAAAAAZXUdAQGwhKQXEtyQncORJUkuIO8afrLXrRd43_0ns-_4",

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
                        url: 'https://content.dropboxapi.com/2/files/upload',
                        type: 'post',
                        data: formData,
                        processData: false,
                        contentType: 'application/octet-stream',
                        headers: {
                            "Authorization": "Bearer Cgp9TLRy8iAAAAAAAAAAZXUdAQGwhKQXEtyQncORJUkuIO8afrLXrRd43_0ns-_4",
                            "Dropbox-API-Arg": '{"path": "/'+name+'/Segunda Carta Recomendacion de la '+nombreUniversidad+'.'+res+'","mode": "overwrite","autorename": true,"mute": false}'
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
                                parametros['tipoDocumento'] =  'PhD';
                                parametros['tipo'] =  'CartaRecomendacion';
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
                                            window.location.href = "<?php echo site_url('Dashboard/MisArchivos'); ?>";
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
                                    tipoDocumento : 'PhD',
                                    tipo : 'CartaRecomendacion',
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

                                        setTimeout(function(){
                                            window.location.href = "<?php echo site_url('Dashboard/MisArchivos'); ?>";
                                        },2000);
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
            $(document).find('.cartasReSPHDAlert-'+idUniversidad).html(
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

    $(document).on('click','.btn-cartasRePPHD',function(){
        var idUniversidad =  this.id;
        var nombreUniversidad = this.name;
        var aspirante = $(document).find('#aspirante').val();
        var formData = new FormData($('#cartasRePPHDForm-'+idUniversidad)[0]);
        var name = $(document).find('#nameAspirante').val();
        var validateForm = formData.get('cartasRePPHD-'+idUniversidad);
        if(validateForm['size']>0){
            $('#exampleFillIn').modal({backdrop: 'static', keyboard: false});
            res = validateForm['name'].split(".",-1).reverse()[0];
            $.ajax({
                url: 'https://api.dropboxapi.com/2/files/create_folder_batch',
                type: 'post',
                contentType: 'application/json',
                headers: {
                    "Authorization": "Bearer Cgp9TLRy8iAAAAAAAAAAZXUdAQGwhKQXEtyQncORJUkuIO8afrLXrRd43_0ns-_4",

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
                        url: 'https://content.dropboxapi.com/2/files/upload',
                        type: 'post',
                        data: formData,
                        processData: false,
                        contentType: 'application/octet-stream',
                        headers: {
                            "Authorization": "Bearer Cgp9TLRy8iAAAAAAAAAAZXUdAQGwhKQXEtyQncORJUkuIO8afrLXrRd43_0ns-_4",
                            "Dropbox-API-Arg": '{"path": "/'+name+'/Primera Carta Recomendacion de la '+nombreUniversidad+'.'+res+'","mode": "overwrite","autorename": true,"mute": false}'
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
                                parametros['tipoDocumento'] =  'PhD';
                                parametros['tipo'] =  'CartaRecomendacion';
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
                                            window.location.href = "<?php echo site_url('Dashboard/MisArchivos'); ?>";
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
                                    tipoDocumento : 'PhD',
                                    tipo : 'CartaRecomendacion',
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

                                        setTimeout(function(){
                                            window.location.href = "<?php echo site_url('Dashboard/MisArchivos'); ?>";
                                        },2000);
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
            $(document).find('.cartasRePPHDAlert-'+idUniversidad).html(
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

    $(document).on('click','#btn-pasaportePHD',function(){
        var aspirante = $(document).find('#aspirante').val();
        var formData = new FormData($('#pasaportePHDForm')[0]);
        var name = $(document).find('#nameAspirante').val();
        var validateForm = formData.get('pasaportePHD');
        if(validateForm['size']>0){
            $('#exampleFillIn').modal({backdrop: 'static', keyboard: false});
            res = validateForm['name'].split(".",-1).reverse()[0];
            $.ajax({
                url: 'https://api.dropboxapi.com/2/files/create_folder_batch',
                type: 'post',
                contentType: 'application/json',
                headers: {
                    "Authorization": "Bearer Cgp9TLRy8iAAAAAAAAAAZXUdAQGwhKQXEtyQncORJUkuIO8afrLXrRd43_0ns-_4",

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
                            "Authorization": "Bearer Cgp9TLRy8iAAAAAAAAAAZXUdAQGwhKQXEtyQncORJUkuIO8afrLXrRd43_0ns-_4",
                            "Dropbox-API-Arg": '{"path": "/'+name+'/Pasaporte.'+res+'","mode": "overwrite","autorename": true,"mute": false}'
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
                                parametros['tipoDocumento'] =  'PhD';
                                parametros['tipo'] =  'Pasaporte';
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
                                            window.location.href = "<?php echo site_url('Dashboard/MisArchivos'); ?>";
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
                                    tipoDocumento : 'PhD',
                                    tipo : 'Pasaporte',
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

                                        setTimeout(function(){
                                            window.location.href = "<?php echo site_url('Dashboard/MisArchivos'); ?>";
                                        },2000);
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
            $(document).find('.pasaportePHDAlert').html(
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

    $(document).on('click','#btn-pasaporteMaestria',function(){
        var aspirante = $(document).find('#aspirante').val();
        var formData = new FormData($('#pasaporteMaestriaForm')[0]);
        var name = $(document).find('#nameAspirante').val();
        var validateForm = formData.get('pasaporteMaestria');
        if(validateForm['size']>0){
            $('#exampleFillIn').modal({backdrop: 'static', keyboard: false});
            res = validateForm['name'].split(".",-1).reverse()[0];
            $.ajax({
                url: 'https://api.dropboxapi.com/2/files/create_folder_batch',
                type: 'post',
                contentType: 'application/json',
                headers: {
                    "Authorization": "Bearer Cgp9TLRy8iAAAAAAAAAAZXUdAQGwhKQXEtyQncORJUkuIO8afrLXrRd43_0ns-_4",

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
                            "Authorization": "Bearer Cgp9TLRy8iAAAAAAAAAAZXUdAQGwhKQXEtyQncORJUkuIO8afrLXrRd43_0ns-_4",
                            "Dropbox-API-Arg": '{"path": "/'+name+'/Pasaporte.'+res+'","mode": "overwrite","autorename": true,"mute": false}'
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
                                parametros['tipoDocumento'] =  'Masters';
                                parametros['tipo'] =  'Pasaporte';
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
                                            window.location.href = "<?php echo site_url('Dashboard/MisArchivos'); ?>";
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
                                    tipoDocumento : 'Masters',
                                    tipo : 'Pasaporte',
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

                                        setTimeout(function(){
                                            window.location.href = "<?php echo site_url('Dashboard/MisArchivos'); ?>";
                                        },2000);
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
            $(document).find('.pasaporteMaestriaAlert').html(
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

    $(document).on('click','#btn-cv',function(){
        var aspirante = $(document).find('#aspirante').val();
        var formData = new FormData($('#cvForm')[0]);
        var name = $(document).find('#nameAspirante').val();
        var validateForm = formData.get('cv');
        if(validateForm['size']>0){
            $('#exampleFillIn').modal({backdrop: 'static', keyboard: false});
            res = validateForm['name'].split(".",-1).reverse()[0];
            $.ajax({
                url: 'https://api.dropboxapi.com/2/files/create_folder_batch',
                type: 'post',
                contentType: 'application/json',
                headers: {
                    "Authorization": "Bearer Cgp9TLRy8iAAAAAAAAAAZXUdAQGwhKQXEtyQncORJUkuIO8afrLXrRd43_0ns-_4",

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
                            "Authorization": "Bearer Cgp9TLRy8iAAAAAAAAAAZXUdAQGwhKQXEtyQncORJUkuIO8afrLXrRd43_0ns-_4",
                            "Dropbox-API-Arg": '{"path": "/'+name+'/CV.'+res+'","mode": "overwrite","autorename": true,"mute": false}'
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
                                parametros['tipoDocumento'] =  'PhD';
                                parametros['tipo'] =  'CV';
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
                                            window.location.href = "<?php echo site_url('Dashboard/MisArchivos'); ?>";
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
                                    tipoDocumento : 'PhD',
                                    tipo : 'CV',
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


                                        setTimeout(function(){
                                            window.location.href = "<?php echo site_url('Dashboard/MisArchivos'); ?>";
                                        },2000);
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
            $(document).find('.cvAlert').html(
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

    $(document).on('click','#btn-transTraduccionPHD',function(){
        var aspirante = $(document).find('#aspirante').val();
        var formData = new FormData($('#transTraduccionPHDForm')[0]);
        var name = $(document).find('#nameAspirante').val();
        var validateForm = formData.get('transTraduccionPHD');
        if(validateForm['size']>0){
            $('#exampleFillIn').modal({backdrop: 'static', keyboard: false});
            res = validateForm['name'].split(".",-1).reverse()[0];
            $.ajax({
                url: 'https://api.dropboxapi.com/2/files/create_folder_batch',
                type: 'post',
                contentType: 'application/json',
                headers: {
                    "Authorization": "Bearer Cgp9TLRy8iAAAAAAAAAAZXUdAQGwhKQXEtyQncORJUkuIO8afrLXrRd43_0ns-_4",

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
                            "Authorization": "Bearer Cgp9TLRy8iAAAAAAAAAAZXUdAQGwhKQXEtyQncORJUkuIO8afrLXrRd43_0ns-_4",
                            "Dropbox-API-Arg": '{"path": "/'+name+'/Transcripcion Traducida.'+res+'","mode": "overwrite","autorename": true,"mute": false}'
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
                                parametros['tipoDocumento'] =  'PhD';
                                parametros['tipo'] =  'Transcripcion';
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
                                            window.location.href = "<?php echo site_url('Dashboard/MisArchivos'); ?>";
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
                                    tipoDocumento : 'PhD',
                                    tipo : 'Transcripcion',
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


                                        setTimeout(function(){
                                            window.location.href = "<?php echo site_url('Dashboard/MisArchivos'); ?>";
                                        },2000);
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
            $(document).find('.transTraduccionPHDAlert').html(
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

    $(document).on('click','#btn-transPHD',function(){
        var aspirante = $(document).find('#aspirante').val();
        var formData = new FormData($('#transPHDForm')[0]);
        var name = $(document).find('#nameAspirante').val();
        var validateForm = formData.get('transPHD');
        if(validateForm['size']>0){
            $('#exampleFillIn').modal({backdrop: 'static', keyboard: false});
            res = validateForm['name'].split(".",-1).reverse()[0];
            $.ajax({
                url: 'https://api.dropboxapi.com/2/files/create_folder_batch',
                type: 'post',
                contentType: 'application/json',
                headers: {
                    "Authorization": "Bearer Cgp9TLRy8iAAAAAAAAAAZXUdAQGwhKQXEtyQncORJUkuIO8afrLXrRd43_0ns-_4",

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
                            "Authorization": "Bearer Cgp9TLRy8iAAAAAAAAAAZXUdAQGwhKQXEtyQncORJUkuIO8afrLXrRd43_0ns-_4",
                            "Dropbox-API-Arg": '{"path": "/'+name+'/Transcripcion.'+res+'","mode": "overwrite","autorename": true,"mute": false}'
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
                                parametros['tipoDocumento'] =  'PhD';
                                parametros['tipo'] =  'Transcripcion';
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
                                            window.location.href = "<?php echo site_url('Dashboard/MisArchivos'); ?>";
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
                                    tipoDocumento : 'PhD',
                                    tipo : 'Transcripcion',
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


                                        setTimeout(function(){
                                            window.location.href = "<?php echo site_url('Dashboard/MisArchivos'); ?>";
                                        },2000);
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
            $(document).find('.transPHDAlert').html(
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

    $(document).on('click','#btn-propuesta',function(){
        var aspirante = $(document).find('#aspirante').val();
        var formData = new FormData($('#propuestaForm')[0]);
        var name = $(document).find('#nameAspirante').val();
        var validateForm = formData.get('propuesta');
        if(validateForm['size']>0){
            $('#exampleFillIn').modal({backdrop: 'static', keyboard: false});
            res = validateForm['name'].split(".",-1).reverse()[0];
            $.ajax({
                url: 'https://api.dropboxapi.com/2/files/create_folder_batch',
                type: 'post',
                contentType: 'application/json',
                headers: {
                    "Authorization": "Bearer Cgp9TLRy8iAAAAAAAAAAZXUdAQGwhKQXEtyQncORJUkuIO8afrLXrRd43_0ns-_4",

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
                            "Authorization": "Bearer Cgp9TLRy8iAAAAAAAAAAZXUdAQGwhKQXEtyQncORJUkuIO8afrLXrRd43_0ns-_4",
                            "Dropbox-API-Arg": '{"path": "/'+name+'/Propuesta de Investigacion.'+res+'","mode": "overwrite","autorename": true,"mute": false}'
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
                                parametros['tipoDocumento'] =  'PhD';
                                parametros['tipo'] =  'Propuesta';
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
                                            window.location.href = "<?php echo site_url('Dashboard/MisArchivos'); ?>";
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
                                    tipoDocumento : 'Masters',
                                    tipo : 'CartaAutorizacion',
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


                                        setTimeout(function(){
                                            window.location.href = "<?php echo site_url('Dashboard/MisArchivos'); ?>";
                                        },2000);
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
            $(document).find('.propuestaAlert').html(
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

    $(document).on('click','#btn-autoCarta',function(){
        var aspirante = $(document).find('#aspirante').val();
        var formData = new FormData($('#autoCartaForm')[0]);
        var name = $(document).find('#nameAspirante').val();
        var validateForm = formData.get('autoCarta');
        if(validateForm['size']>0){
            $('#exampleFillIn').modal({backdrop: 'static', keyboard: false});
            res = validateForm['name'].split(".",-1).reverse()[0];
            $.ajax({
                url: 'https://api.dropboxapi.com/2/files/create_folder_batch',
                type: 'post',
                contentType: 'application/json',
                headers: {
                    "Authorization": "Bearer Cgp9TLRy8iAAAAAAAAAAZXUdAQGwhKQXEtyQncORJUkuIO8afrLXrRd43_0ns-_4",

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
                            "Authorization": "Bearer Cgp9TLRy8iAAAAAAAAAAZXUdAQGwhKQXEtyQncORJUkuIO8afrLXrRd43_0ns-_4",
                            "Dropbox-API-Arg": '{"path": "/'+name+'/Carta Autorizacion.'+res+'","mode": "overwrite","autorename": true,"mute": false}'
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
                                parametros['tipoDocumento'] =  'Masters';
                                parametros['tipo'] =  'CartaAutorizacion';
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
                                            window.location.href = "<?php echo site_url('Dashboard/MisArchivos'); ?>";
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
                                    tipoDocumento : 'Masters',
                                    tipo : 'CartaAutorizacion',
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


                                        setTimeout(function(){
                                            window.location.href = "<?php echo site_url('Dashboard/MisArchivos'); ?>";
                                        },2000);
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
            $(document).find('.autoCartaAlert').html(
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

    $(document).on('click','.btn-cartasReS',function(){
        var idUniversidad =  this.id;
        var nombreUniversidad = this.name;
        var aspirante = $(document).find('#aspirante').val();
        var formData = new FormData($('#cartasReSForm-'+idUniversidad)[0]);
        var name = $(document).find('#nameAspirante').val();
        var validateForm = formData.get('cartasReS-'+idUniversidad);
        if(validateForm['size']>0){
            $('#exampleFillIn').modal({backdrop: 'static', keyboard: false});
            res = validateForm['name'].split(".",-1).reverse()[0];
            $.ajax({
                url: 'https://api.dropboxapi.com/2/files/create_folder_batch',
                type: 'post',
                contentType: 'application/json',
                headers: {
                    "Authorization": "Bearer Cgp9TLRy8iAAAAAAAAAAZXUdAQGwhKQXEtyQncORJUkuIO8afrLXrRd43_0ns-_4",

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
                        url: 'https://content.dropboxapi.com/2/files/upload',
                        type: 'post',
                        data: formData,
                        processData: false,
                        contentType: 'application/octet-stream',
                        headers: {
                            "Authorization": "Bearer Cgp9TLRy8iAAAAAAAAAAZXUdAQGwhKQXEtyQncORJUkuIO8afrLXrRd43_0ns-_4",
                            "Dropbox-API-Arg": '{"path": "/'+name+'/Segunda Carta Recomendacion de la '+nombreUniversidad+'.'+res+'","mode": "overwrite","autorename": true,"mute": false}'
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
                                parametros['tipoDocumento'] =  'Masters';
                                parametros['tipo'] =  'CartaRecomendacion';
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
                                            window.location.href = "<?php echo site_url('Dashboard/MisArchivos'); ?>";
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
                                    tipoDocumento : 'Masters',
                                    tipo : 'CartaRecomendacion',
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

                                        setTimeout(function(){
                                            window.location.href = "<?php echo site_url('Dashboard/MisArchivos'); ?>";
                                        },2000);
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
            $(document).find('.cartasReSAlert-'+idUniversidad).html(
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

    $(document).on('click','.btn-cartasReP',function(){
        var idUniversidad =  this.id;
        var nombreUniversidad = this.name;
        var aspirante = $(document).find('#aspirante').val();
        var formData = new FormData($('#cartasRePForm-'+idUniversidad)[0]);
        var name = $(document).find('#nameAspirante').val();
        var validateForm = formData.get('cartasReP-'+idUniversidad);
        if(validateForm['size']>0){
            $('#exampleFillIn').modal({backdrop: 'static', keyboard: false});
            res = validateForm['name'].split(".",-1).reverse()[0];
            $.ajax({
                url: 'https://api.dropboxapi.com/2/files/create_folder_batch',
                type: 'post',
                contentType: 'application/json',
                headers: {
                    "Authorization": "Bearer Cgp9TLRy8iAAAAAAAAAAZXUdAQGwhKQXEtyQncORJUkuIO8afrLXrRd43_0ns-_4",

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
                        url: 'https://content.dropboxapi.com/2/files/upload',
                        type: 'post',
                        data: formData,
                        processData: false,
                        contentType: 'application/octet-stream',
                        headers: {
                            "Authorization": "Bearer Cgp9TLRy8iAAAAAAAAAAZXUdAQGwhKQXEtyQncORJUkuIO8afrLXrRd43_0ns-_4",
                            "Dropbox-API-Arg": '{"path": "/'+name+'/Primera Carta Recomendacion de la '+nombreUniversidad+'.'+res+'","mode": "overwrite","autorename": true,"mute": false}'
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
                                parametros['tipoDocumento'] =  'Masters';
                                parametros['tipo'] =  'CartaRecomendacion';
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
                                            window.location.href = "<?php echo site_url('Dashboard/MisArchivos'); ?>";
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
                                    tipoDocumento : 'Masters',
                                    tipo : 'CartaRecomendacion',
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

                                        setTimeout(function(){
                                            window.location.href = "<?php echo site_url('Dashboard/MisArchivos'); ?>";
                                        },2000);
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
            $(document).find('.cartasRePAlert-'+idUniversidad).html(
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

    $(document).on('click','.btn-cartasMotivos',function(){
        var idUniversidad =  this.id;
        var nombreUniversidad = this.name;
        var aspirante = $(document).find('#aspirante').val();
        var formData = new FormData($('#cartasMotivosForm-'+idUniversidad)[0]);
        var name = $(document).find('#nameAspirante').val();
        var validateForm = formData.get('cartasMotivos-'+idUniversidad);
        if(validateForm['size']>0){
            $('#exampleFillIn').modal({backdrop: 'static', keyboard: false});
            res = validateForm['name'].split(".",-1).reverse()[0];
            $.ajax({
                url: 'https://api.dropboxapi.com/2/files/create_folder_batch',
                type: 'post',
                contentType: 'application/json',
                headers: {
                    "Authorization": "Bearer Cgp9TLRy8iAAAAAAAAAAZXUdAQGwhKQXEtyQncORJUkuIO8afrLXrRd43_0ns-_4",

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
                        url: 'https://content.dropboxapi.com/2/files/upload',
                        type: 'post',
                        data: formData,
                        processData: false,
                        contentType: 'application/octet-stream',
                        headers: {
                            "Authorization": "Bearer Cgp9TLRy8iAAAAAAAAAAZXUdAQGwhKQXEtyQncORJUkuIO8afrLXrRd43_0ns-_4",
                            "Dropbox-API-Arg": '{"path": "/'+name+'/Carta Motivo de la '+nombreUniversidad+'.'+res+'","mode": "overwrite","autorename": true,"mute": false}'
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
                                parametros['tipoDocumento'] =  'Masters';
                                parametros['tipo'] =  'CartaMotivo';
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
                                            window.location.href = "<?php echo site_url('Dashboard/MisArchivos'); ?>";
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
                                    tipoDocumento : 'Masters',
                                    tipo : 'CartaMotivo',
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

                                        setTimeout(function(){
                                            window.location.href = "<?php echo site_url('Dashboard/MisArchivos'); ?>";
                                        },2000);
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
            $(document).find('.cartasMotivosAlert-'+idUniversidad).html(
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

    $(document).on('click','#btn-transTraduccion',function(){
        var aspirante = $(document).find('#aspirante').val();
        var formData = new FormData($('#transTraduccionForm')[0]);
        var name = $(document).find('#nameAspirante').val();
        var validateForm = formData.get('transTraduccion');
        if(validateForm['size']>0){
            $('#exampleFillIn').modal({backdrop: 'static', keyboard: false});
            res = validateForm['name'].split(".",-1).reverse()[0];
            $.ajax({
                url: 'https://api.dropboxapi.com/2/files/create_folder_batch',
                type: 'post',
                contentType: 'application/json',
                headers: {
                    "Authorization": "Bearer Cgp9TLRy8iAAAAAAAAAAZXUdAQGwhKQXEtyQncORJUkuIO8afrLXrRd43_0ns-_4",

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
                            "Authorization": "Bearer Cgp9TLRy8iAAAAAAAAAAZXUdAQGwhKQXEtyQncORJUkuIO8afrLXrRd43_0ns-_4",
                            "Dropbox-API-Arg": '{"path": "/'+name+'/Transcripcion Traducida.'+res+'","mode": "overwrite","autorename": true,"mute": false}'
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
                                parametros['tipoDocumento'] =  'Masters';
                                parametros['tipo'] =  'Transcripcion';
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
                                            window.location.href = "<?php echo site_url('Dashboard/MisArchivos'); ?>";
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
                                    tipoDocumento : 'Masters',
                                    tipo : 'Transcripcion',
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


                                        setTimeout(function(){
                                            window.location.href = "<?php echo site_url('Dashboard/MisArchivos'); ?>";
                                        },2000);
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
            $(document).find('.transTraduccionAlert').html(
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

    $(document).on('click','#btn-trans',function(){
        var aspirante = $(document).find('#aspirante').val();
        var formData = new FormData($('#transForm')[0]);
        var name = $(document).find('#nameAspirante').val();
        var validateForm = formData.get('trans');
        if(validateForm['size']>0){
            $('#exampleFillIn').modal({backdrop: 'static', keyboard: false});
            res = validateForm['name'].split(".",-1).reverse()[0];
            $.ajax({
                url: 'https://api.dropboxapi.com/2/files/create_folder_batch',
                type: 'post',
                contentType: 'application/json',
                headers: {
                    "Authorization": "Bearer Cgp9TLRy8iAAAAAAAAAAZXUdAQGwhKQXEtyQncORJUkuIO8afrLXrRd43_0ns-_4",

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
                            "Authorization": "Bearer Cgp9TLRy8iAAAAAAAAAAZXUdAQGwhKQXEtyQncORJUkuIO8afrLXrRd43_0ns-_4",
                            "Dropbox-API-Arg": '{"path": "/'+name+'/Transcripcion.'+res+'","mode": "overwrite","autorename": true,"mute": false}'
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
                                parametros['tipoDocumento'] =  'Masters';
                                parametros['tipo'] =  'Transcripcion';
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
                                            window.location.href = "<?php echo site_url('Dashboard/MisArchivos'); ?>";
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
                                    tipoDocumento : 'Masters',
                                    tipo : 'Transcripcion',
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


                                        setTimeout(function(){
                                            window.location.href = "<?php echo site_url('Dashboard/MisArchivos'); ?>";
                                        },2000);
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
            $(document).find('.transAlert').html(
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

    $(document).on('click','#btn-auto',function(){
        var aspirante = $(document).find('#aspirante').val();
        var formData = new FormData($('#autoForm')[0]);
        var name = $(document).find('#nameAspirante').val();
        var validateForm = formData.get('auto');
        if(validateForm['size']>0){
            $('#exampleFillIn').modal({backdrop: 'static', keyboard: false});
            res = validateForm['name'].split(".",-1).reverse()[0];
            $.ajax({
                url: 'https://api.dropboxapi.com/2/files/create_folder_batch',
                type: 'post',
                contentType: 'application/json',
                headers: {
                    "Authorization": "Bearer Cgp9TLRy8iAAAAAAAAAAZXUdAQGwhKQXEtyQncORJUkuIO8afrLXrRd43_0ns-_4",

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
                            "Authorization": "Bearer Cgp9TLRy8iAAAAAAAAAAZXUdAQGwhKQXEtyQncORJUkuIO8afrLXrRd43_0ns-_4",
                            "Dropbox-API-Arg": '{"path": "/'+name+'/Carta Autorizacion.'+res+'","mode": "overwrite","autorename": true,"mute": false}'
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
                                parametros['tipo'] =  'CartaAutorizacion';
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
                                            window.location.href = "<?php echo site_url('Dashboard/MisArchivos'); ?>";
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
                                    tipo : 'CartaAutorizacion',
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


                                        setTimeout(function(){
                                            window.location.href = "<?php echo site_url('Dashboard/MisArchivos'); ?>";
                                        },2000);
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
            $(document).find('.autoAlert').html(
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

    $(document).on('click','#btn-boleta',function(){
        var aspirante = $(document).find('#aspirante').val();
        var formData = new FormData($('#boletaForm')[0]);
        var name = $(document).find('#nameAspirante').val();
        var validateForm = formData.get('Boleta');
        if(validateForm['size']>0){
            $('#exampleFillIn').modal({backdrop: 'static', keyboard: false});
            res = validateForm['name'].split(".",-1).reverse()[0];
            $.ajax({
                url: 'https://api.dropboxapi.com/2/files/create_folder_batch',
                type: 'post',
                contentType: 'application/json',
                headers: {
                    "Authorization": "Bearer Cgp9TLRy8iAAAAAAAAAAZXUdAQGwhKQXEtyQncORJUkuIO8afrLXrRd43_0ns-_4",

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
                            "Authorization": "Bearer Cgp9TLRy8iAAAAAAAAAAZXUdAQGwhKQXEtyQncORJUkuIO8afrLXrRd43_0ns-_4",
                            "Dropbox-API-Arg": '{"path": "/'+name+'/Boleta.'+res+'","mode": "overwrite","autorename": true,"mute": false}'
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
                                            window.location.href = "<?php echo site_url('Dashboard/MisArchivos'); ?>";
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


                                        setTimeout(function(){
                                            window.location.href = "<?php echo site_url('Dashboard/MisArchivos'); ?>";
                                        },2000);
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

    $(document).on('click','#btn-recomend',function(){
        var aspirante = $(document).find('#aspirante').val();
        var formData = new FormData($('#recomendForm')[0]);
        var name = $(document).find('#nameAspirante').val();
        var validateForm = formData.get('recomend');
        if(validateForm['size']>0){
            $('#exampleFillIn').modal({backdrop: 'static', keyboard: false});
            res = validateForm['name'].split(".",-1).reverse()[0];
            $.ajax({
                url: 'https://api.dropboxapi.com/2/files/create_folder_batch',
                type: 'post',
                contentType: 'application/json',
                headers: {
                    "Authorization": "Bearer Cgp9TLRy8iAAAAAAAAAAZXUdAQGwhKQXEtyQncORJUkuIO8afrLXrRd43_0ns-_4",

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
                            "Authorization": "Bearer Cgp9TLRy8iAAAAAAAAAAZXUdAQGwhKQXEtyQncORJUkuIO8afrLXrRd43_0ns-_4",
                            "Dropbox-API-Arg": '{"path": "/'+name+'/Carta Recomendacion.'+res+'","mode": "overwrite","autorename": true,"mute": false}'
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
                                parametros['tipo'] =  'CartaRecomendacion';
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
                                            window.location.href = "<?php echo site_url('Dashboard/MisArchivos'); ?>";
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
                                    tipo : 'CartaRecomendacion',
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


                                        setTimeout(function(){
                                            window.location.href = "<?php echo site_url('Dashboard/MisArchivos'); ?>";
                                        },2000);
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
            $(document).find('.recomendAlert').html(
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

    $(document).on('click','#btn-boletaTraduccion',function(){
        var aspirante = $(document).find('#aspirante').val();
        var formData = new FormData($('#boletaTraduccionForm')[0]);
        var name = $(document).find('#nameAspirante').val();
        var validateForm = formData.get('BoletaTraduccion');
        if(validateForm['size']>0){
            $('#exampleFillIn').modal({backdrop: 'static', keyboard: false});
            res = validateForm['name'].split(".",-1).reverse()[0];
            $.ajax({
                url: 'https://api.dropboxapi.com/2/files/create_folder_batch',
                type: 'post',
                contentType: 'application/json',
                headers: {
                    "Authorization": "Bearer Cgp9TLRy8iAAAAAAAAAAZXUdAQGwhKQXEtyQncORJUkuIO8afrLXrRd43_0ns-_4",

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
                            "Authorization": "Bearer Cgp9TLRy8iAAAAAAAAAAZXUdAQGwhKQXEtyQncORJUkuIO8afrLXrRd43_0ns-_4",
                            "Dropbox-API-Arg": '{"path": "/'+name+'/Boleta Traducida.'+res+'","mode": "overwrite","autorename": true,"mute": false}'
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
                                            window.location.href = "<?php echo site_url('Dashboard/MisArchivos'); ?>";
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

                                        setTimeout(function(){
                                            window.location.href = "<?php echo site_url('Dashboard/MisArchivos'); ?>";
                                        },2000);
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
            $(document).find('.boletaTraduccionAlert').html(
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

    $(document).on('click','#btn-cartaMotivos',function(){
        var aspirante = $(document).find('#aspirante').val();
        var formData = new FormData($('#cartaMotivosForm')[0]);
        var name = $(document).find('#nameAspirante').val();
        var validateForm = formData.get('cartaMotivos');
        if(validateForm['size']>0){
            $('#exampleFillIn').modal({backdrop: 'static', keyboard: false});
            res = validateForm['name'].split(".",-1).reverse()[0];
            $.ajax({
                url: 'https://api.dropboxapi.com/2/files/create_folder_batch',
                type: 'post',
                contentType: 'application/json',
                headers: {
                    "Authorization": "Bearer Cgp9TLRy8iAAAAAAAAAAZXUdAQGwhKQXEtyQncORJUkuIO8afrLXrRd43_0ns-_4",

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
                            "Authorization": "Bearer Cgp9TLRy8iAAAAAAAAAAZXUdAQGwhKQXEtyQncORJUkuIO8afrLXrRd43_0ns-_4",
                            "Dropbox-API-Arg": '{"path": "/'+name+'/Carta Motivos.'+res+'","mode": "overwrite","autorename": true,"mute": false}'
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
                                parametros['tipo'] =  'CartaMotivo';
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
                                            window.location.href = "<?php echo site_url('Dashboard/MisArchivos'); ?>";
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
                                    tipo : 'CartaMotivo',
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

                                        setTimeout(function(){
                                            window.location.href = "<?php echo site_url('Dashboard/MisArchivos'); ?>";
                                        },2000);
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
            $(document).find('.cartaMotivosAlert').html(
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

    $(document).on('click','#btn-pasaporte',function(){
        var aspirante = $(document).find('#aspirante').val();
        var formData = new FormData($('#pasaporteForm')[0]);
        var name = $(document).find('#nameAspirante').val();
        var validateForm = formData.get('pasaporte');
        if(validateForm['size']>0){
            $('#exampleFillIn').modal({backdrop: 'static', keyboard: false});
            res = validateForm['name'].split(".",-1).reverse()[0];
            $.ajax({
                url: 'https://api.dropboxapi.com/2/files/create_folder_batch',
                type: 'post',
                contentType: 'application/json',
                headers: {
                    "Authorization": "Bearer Cgp9TLRy8iAAAAAAAAAAZXUdAQGwhKQXEtyQncORJUkuIO8afrLXrRd43_0ns-_4",

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
                            "Authorization": "Bearer Cgp9TLRy8iAAAAAAAAAAZXUdAQGwhKQXEtyQncORJUkuIO8afrLXrRd43_0ns-_4",
                            "Dropbox-API-Arg": '{"path": "/'+name+'/Pasaporte.'+res+'","mode": "overwrite","autorename": true,"mute": false}'
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
                                parametros['tipo'] =  'Pasaporte';
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
                                            window.location.href = "<?php echo site_url('Dashboard/MisArchivos'); ?>";
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
                                    tipo : 'Pasaporte',
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

                                        setTimeout(function(){
                                            window.location.href = "<?php echo site_url('Dashboard/MisArchivos'); ?>";
                                        },2000);
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
            $(document).find('.pasaporteAlert').html(
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

    $(document).on('click','.btn-cartaRecomendacion',function(){
        var idUniversidad =  this.id;
        var nombreUniversidad = this.name;
        var aspirante = $(document).find('#aspirante').val();
        var formData = new FormData($('#cartaRecomendacionForm-'+idUniversidad)[0]);
        var name = $(document).find('#nameAspirante').val();
        var validateForm = formData.get('cartaRecomendacion-'+idUniversidad);
        if(validateForm['size']>0){
            $('#exampleFillIn').modal({backdrop: 'static', keyboard: false});
            res = validateForm['name'].split(".",-1).reverse()[0];
            $.ajax({
                url: 'https://api.dropboxapi.com/2/files/create_folder_batch',
                type: 'post',
                contentType: 'application/json',
                headers: {
                    "Authorization": "Bearer Cgp9TLRy8iAAAAAAAAAAZXUdAQGwhKQXEtyQncORJUkuIO8afrLXrRd43_0ns-_4",

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
                            "Authorization": "Bearer Cgp9TLRy8iAAAAAAAAAAZXUdAQGwhKQXEtyQncORJUkuIO8afrLXrRd43_0ns-_4",
                            "Dropbox-API-Arg": '{"path": "/'+name+'/Carta Recomendacion de la '+nombreUniversidad+'.'+res+'","mode": "overwrite","autorename": true,"mute": false}'
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
                                parametros['tipo'] =  'CartaRecomendacion';
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
                                            window.location.href = "<?php echo site_url('Dashboard/MisArchivos'); ?>";
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
                                    tipo : 'CartaRecomendacion',
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

                                        setTimeout(function(){
                                            window.location.href = "<?php echo site_url('Dashboard/MisArchivos'); ?>";
                                        },2000);
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
            $(document).find('.cartaRecomendacionAlert-'+idUniversidad).html(
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

    $(document).on('click','.btn-cartaAutorizacion',function(){
        var idUniversidad =  this.id;
        var nombreUniversidad = this.name;
        var aspirante = $(document).find('#aspirante').val();
        var formData = new FormData($('#cartaAutorizacionForm-'+idUniversidad)[0]);
        var name = $(document).find('#nameAspirante').val();
        var validateForm = formData.get('cartaAutorizacion-'+idUniversidad);
        if(validateForm['size']>0){
            $('#exampleFillIn').modal({backdrop: 'static', keyboard: false});
            res = validateForm['name'].split(".",-1).reverse()[0];
            $.ajax({
                url: 'https://api.dropboxapi.com/2/files/create_folder_batch',
                type: 'post',
                contentType: 'application/json',
                headers: {
                    "Authorization": "Bearer Cgp9TLRy8iAAAAAAAAAAZXUdAQGwhKQXEtyQncORJUkuIO8afrLXrRd43_0ns-_4",

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
                            "Authorization": "Bearer Cgp9TLRy8iAAAAAAAAAAZXUdAQGwhKQXEtyQncORJUkuIO8afrLXrRd43_0ns-_4",
                            "Dropbox-API-Arg": '{"path": "/'+name+'/Carta Autorizacion de la '+nombreUniversidad+'.'+res+'","mode": "overwrite","autorename": true,"mute": false}'
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
                                parametros['tipo'] =  'CartaAutorizacion';
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
                                            window.location.href = "<?php echo site_url('Dashboard/MisArchivos'); ?>";
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
                                    tipo : 'CartaAutorizacion',
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

                                        setTimeout(function(){
                                            window.location.href = "<?php echo site_url('Dashboard/MisArchivos'); ?>";
                                        },2000);
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
            $(document).find('.cartaAutorizacionAlert-'+idUniversidad).html(
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

  });


</script>
