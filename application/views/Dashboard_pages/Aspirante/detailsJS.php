<script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.4.0/bootbox.min.js"></script>
<script>
     $(function(){

        $(document).on('click','.btn-aceptarDefeatRequest',function (){
            var id = this.id;
            var name = this.name;
            bootbox.confirm({
                message: "Estas seguro que quieres aceptar la oferta que te mando el aspirante, revisa que sea el documento que se requiere.",
                size : 'small',
                centerVertical: true,
                buttons: {
                    confirm: {
                        label: 'Si',
                        className: 'btn-success'
                    },
                    cancel: {
                        label: 'No',
                        className: 'btn-danger'
                    }
                },
                callback: function (result) {
                    if(result==true){
                        if(id){
                            $.ajax({
                                url: _principalURL()+"Documentos/Carrera/api/defeatDocs/id/"+id,
                                method : 'DELETE',
                                headers : {
                                'X-API-KEY':'ANGLOKEY'
                                },
                                data: null,
                                success : function(_response){
                                    
                                        if(_response['status']=="success"){
                                            $.ajax({
                                                url: _principalURL()+"Documentos/Carrera/api/deferralDropboxStatus/id/"+name,
                                                method : 'POST',
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
                                        }
                                        tostada(_response.status,_response.message);
                                    


                                    


                                },error : function(err){

                                }
                            });
                        }else{
                            $.ajax({
                                url: _principalURL()+"Documentos/Carrera/api/deferralDropboxStatus/id/"+name,
                                method : 'POST',
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
                        }
                        
                    }else{
                        tostada('info','Operacion cancelada');
                    }
                }
            });
        });

        $(document).on('click','.btn-recahzarStatusNewPrepa',function (){
            var id = this.id;
            bootbox.confirm({
                message: "Estas seguro que quieres rechazar el documento, ya que la operacion no se podra cancelar, revisa bien el documento antes de rechazarlo.",
                size : 'small',
                centerVertical: true,
                buttons: {
                    confirm: {
                        label: 'Si',
                        className: 'btn-success'
                    },
                    cancel: {
                        label: 'No',
                        className: 'btn-danger'
                    }
                },
                callback: function (result) {
                    if(result==true){
                        $('#exampleFillIn').modal({backdrop: 'static', keyboard: false});
                        var path = $(document).find('#pathNewPrepa-'+id).val();
                        var idReal = $(document).find('#idReal-'+id).val();
                        $.ajax({
                            url: 'https://api.dropboxapi.com/2/files/delete_v2',
                            type: 'post',
                            headers: {
                                "Authorization": "Bearer Yw6OUnBO0lAAAAAAAAAAIn7BVI50aQuBCUahP_bylfNJDVOqtX3UgjwVd4o7ChKv"
                            },
                            data:'{\"path\": \"'+path+'\"}',
                            contentType: 'application/json',
                            success: function (response) {
                                $.ajax({
                                    url: _principalURL()+"Documentos/OfertaCU/api/deleteOfertaPrepa/id/"+idReal,
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

                                    }
                                });  
                                
                            },
                            error: function (response) {
                                console.error(response);
                            }
                        });
                    }else{
                        tostada('info','Operacion cancelada');
                    }
                }
            });
        });

        $(document).on('click','.btn-recahzarStatusNew',function (){
            var id = this.id;
            bootbox.confirm({
                message: "Estas seguro que quieres rechazar el documento, ya que la operacion no se podra cancelar, revisa bien el documento antes de rechazarlo.",
                size : 'small',
                centerVertical: true,
                buttons: {
                    confirm: {
                        label: 'Si',
                        className: 'btn-success'
                    },
                    cancel: {
                        label: 'No',
                        className: 'btn-danger'
                    }
                },
                callback: function (result) {
                    if(result==true){
                        $('#exampleFillIn').modal({backdrop: 'static', keyboard: false});
                        var path = $(document).find('#pathNew-'+id).val();
                        var idReal = $(document).find('#idReal-'+id).val();
                        $.ajax({
                            url: 'https://api.dropboxapi.com/2/files/delete_v2',
                            type: 'post',
                            headers: {
                                "Authorization": "Bearer Yw6OUnBO0lAAAAAAAAAAIn7BVI50aQuBCUahP_bylfNJDVOqtX3UgjwVd4o7ChKv"
                            },
                            data:'{\"path\": \"'+path+'\"}',
                            contentType: 'application/json',
                            success: function (response) {
                                $.ajax({
                                    url: _principalURL()+"Documentos/OfertaCU/api/deleteOfertaUni/id/"+idReal,
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

                                    }
                                });  
                                
                            },
                            error: function (response) {
                                console.error(response);
                            }
                        });
                    }else{
                        tostada('info','Operacion cancelada');
                    }
                }
            });
        });

        $(document).on('click','.btn-becasRechazar',function(){
            var id = this.id;
            var carpeta = this.name;
            data = {
                "status":'Rechazado'
            }
            bootbox.prompt({
                title: "Escribe el motivo por el cual rechazas la beca", 
                centerVertical: true,
                callback: function(result){ 
                    if(result){
                        $('#exampleModal').modal('hide');
                        $('#exampleFillIn').modal({backdrop: 'static', keyboard: false});

                        data['motivo'] = result;
                        $.ajax({
                            url: 'https://api.dropboxapi.com/2/files/delete_v2',
                            type: 'post',
                            headers: {
                                "Authorization": "Bearer Yw6OUnBO0lAAAAAAAAAAIn7BVI50aQuBCUahP_bylfNJDVOqtX3UgjwVd4o7ChKv"
                            },
                            data:'{\"path\": \"'+carpeta+'\"}',
                            contentType: 'application/json',
                            success: function (response) {
                                $.ajax({
                                    url: _principalURL()+"Documentos/BecasUP/api/statuschange/id/"+id,
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
                                    tostada(_response.status,_response.message);

                                    }
                                });  
                                
                            },
                            error: function (response) {
                                console.error(response);
                            }
                        });
                        
                    }else{
                        tostada('info','Llena el campo con el motivo del rechazo del documento');
                    }
                }
            });
        });

        $(document).on('click','.btn-becasAceptar',function(){
            var id = this.id;
            data = {
                "status":'Aceptado'
            }
            bootbox.confirm({
                message: "Estas seguro que quiereses aceptar el documento",
                size : 'small',
                centerVertical: true,
                buttons: {
                    confirm: {
                        label: 'Si',
                        className: 'btn-success'
                    },
                    cancel: {
                        label: 'No',
                        className: 'btn-danger'
                    }
                },
                callback: function (result) {
                    if(result==true){
                        $.ajax({
                            url: _principalURL()+"Documentos/BecasUP/api/statuschange/id/"+id,
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
                            tostada(_response.status,_response.message);

                            }
                        });
                    }else{
                        tostada('info','Operacion cancelada');
                    }
                }
            });
            
        });

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

        $(document).on('change','#institucionesDP',function(){
            var id = $(document).find('#institucionesDP').val();
            _url = _principalURL()+"Institucion/api/institucion/id/"+id;

            $.ajax({
            url: _url,
            method : 'GET',
            headers : {
            'X-API-KEY':'ANGLOKEY'
            },
            data:null,
            success : function(_response){
               $(document).find('#NombreInstitucion').val(_response['data']['nombreInstitucion']);
            },error : function(err){

            }
          });
        });

        $(document).on('submit','#institucionAddNewPrepa',function(event){
            event.preventDefault();
            _url = _principalURL()+"AspirantePreparatorias/api/aspirantePreparatoriasFacultadesNewAdd/";
            _method = "POST";
            $.ajax({
            url: _url,
            method : _method,
            headers : {
            'X-API-KEY':'ANGLOKEY'
            },
            data: $(document).find('#institucionAddNewPrepa').serialize(),
            success : function(_response){
            response = JSON.stringify(_response);

            if (_response.status=="error") {
              $.each(_response.validations,function(key,message){
                  $(document).find('#'+key).addClass('is-invalid').after('<div class="invalid-feedback">'+message+'</div>')
              });

              setTimeout(function(){

                  $(document).find('#responseText').html('<div class="summary-errors alert alert-danger alert-dismissible fade show" role="alert">'+
                  '<strong>Error!</strong> '+_response.message+
                  '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
                  '<span aria-hidden="true">&times;</span>'+
                  '</button>'+
                  '</div>'
                  );
              },2000);
            }
            if (_response.status=="success") {
              window.location.href = "<?php echo site_url('Dashboard/AspiranteStatus2');?>";
            }

            tostada(_response.status,_response.message);


            },error : function(err){

            }
          });
        });

        $(document).on('submit','#institucionAddNew',function(event){
            event.preventDefault();
            _url = _principalURL()+"AspiranteUniversidades/api/aspiranteUniversidadesFacultadesOnlyOne/";
            _method = "POST";
            $.ajax({
            url: _url,
            method : _method,
            headers : {
            'X-API-KEY':'ANGLOKEY'
            },
            data: $(document).find('#institucionAddNew').serialize(),
            success : function(_response){
            response = JSON.stringify(_response);

            if (_response.status=="error") {
              $.each(_response.validations,function(key,message){
                  $(document).find('#'+key).addClass('is-invalid').after('<div class="invalid-feedback">'+message+'</div>')
              });

              setTimeout(function(){

                  $(document).find('#responseText').html('<div class="summary-errors alert alert-danger alert-dismissible fade show" role="alert">'+
                  '<strong>Error!</strong> '+_response.message+
                  '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
                  '<span aria-hidden="true">&times;</span>'+
                  '</button>'+
                  '</div>'
                  );
              },2000);
            }
            if (_response.status=="success") {
              window.location.href = "<?php echo site_url('Dashboard/AspiranteStatus2');?>";
            }

            tostada(_response.status,_response.message);


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

        $(document).on('click','.btn-putATAS',function(){
            var aspirante = $(document).find('#aspiranteKeyATAS').val();
            var rd = $('input:radio[name=radioATAS]:checked').val();
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
                url: _principalURL()+"Aspirante/api/ATASPONER/id/"+aspirante,
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
                    tostada(_response.status,_response.message);

                }
            });
        });

        $(document).on('click','.btnRechazarVisa',function(){
            var id = this.id;
            
            _paramtetros = {
                "descDocumento" : $(document).find('#descVisa-'+id).val()
            };

            path = $(document).find('#pathVisa-'+id).val();

            if(_paramtetros['descDocumento']){
                $('#exampleFillIn').modal({backdrop: 'static', keyboard: false});
                $.ajax({
                    url: 'https://api.dropboxapi.com/2/files/delete_v2',
                    type: 'post',
                    headers: {
                        "Authorization": "Bearer Yw6OUnBO0lAAAAAAAAAAIn7BVI50aQuBCUahP_bylfNJDVOqtX3UgjwVd4o7ChKv"
                    },
                    data:'{\"path\": \"'+path+'\"}',
                    contentType: 'application/json',
                    success: function (response) {
                        $.ajax({
                            url: _principalURL()+"Documentos/Carrera/api/documentosDescAddVisa/id/"+id,
                            method : 'POST',
                            headers : {
                            'X-API-KEY':'ANGLOKEY'
                            },
                            data: _paramtetros,
                            success : function(_response){
                               if(_response['status']=="success"){
                                    setTimeout(function(){
                                    location.reload();
                                    },2000);
                                    tostada(_response.status,_response.message);
                                    
                               }
                            }
                        });
                        
                    },
                    error: function (response) {
                        console.error(response);
                    }
                })

            }else{
                $(document).find('.alertVisa-'+id).html(
                '<div class="alert dark alert-icon alert-danger alert-dismissible" role="alert">'+
                    '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
                        '<span aria-hidden="true">×</span>'+
                    '</button>'+
                    '<i class="icon wb-close" aria-hidden="true"></i>El campo descripcion es requerido'+
                '</div>'
                );
                tostada('error','No se ha llenado el campo de descripcion');
            }
            

            
        });

        $(document).on('click','.btnAceptarVisa',function(){
            var id = this.id;
            
            bootbox.confirm({
                message: "Estas seguro que quiereses aceptar el documento",
                size : 'small',
                centerVertical: true,
                buttons: {
                    confirm: {
                        label: 'Si',
                        className: 'btn-success'
                    },
                    cancel: {
                        label: 'No',
                        className: 'btn-danger'
                    }
                },
                callback: function (result) {
                    if(result==true){
                        $.ajax({
                            url: _principalURL()+"Documentos/Carrera/api/documentosChangeActiveVisa/id/"+id,
                            method : 'POST',
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

                            }
                        });
                    }else{
                        tostada('info','Operacion cancelada');
                    }
                }
            });
            
            
            
        });

        $(document).on('click','.btn-pendienteNB',function(){
            var id = this.id;
            bootbox.confirm({
                message: "Estas seguro que quiereses rechazar el documento",
                size : 'small',
                centerVertical: true,
                buttons: {
                    confirm: {
                        label: 'Si',
                        className: 'btn-success'
                    },
                    cancel: {
                        label: 'No',
                        className: 'btn-danger'
                    }
                },
                callback: function (result) {
                    if(result==true){
                        data = {
                            "status": "Pendiente"
                        }
                        $.ajax({
                            url: _principalURL()+"Aspirante/api/changeStatusNB/id/"+id,
                            method : 'PUT',
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
                                tostada(_response.status,_response.message);

                            }
                        });
                    }else{
                        tostada('info','Operacion cancelada');
                    }
                }
            });
        });

        $(document).on('click','.btn-rechazarNB',function(){
            var id = this.id;
            bootbox.confirm({
                message: "Estas seguro que quiereses rechazar el documento",
                size : 'small',
                centerVertical: true,
                buttons: {
                    confirm: {
                        label: 'Si',
                        className: 'btn-success'
                    },
                    cancel: {
                        label: 'No',
                        className: 'btn-danger'
                    }
                },
                callback: function (result) {
                    if(result==true){
                        data = {
                            "status": "Rechazado"
                        }
                        $.ajax({
                            url: _principalURL()+"Aspirante/api/changeStatusNB/id/"+id,
                            method : 'PUT',
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
                                tostada(_response.status,_response.message);

                            }
                        });
                    }else{
                        tostada('info','Operacion cancelada');
                    }
                }
            });
        });

        $(document).on('click','.btn-aceptarNB',function(){
            var id = this.id;
            bootbox.confirm({
                message: "Estas seguro que quiereses aceptar el documento",
                size : 'small',
                centerVertical: true,
                buttons: {
                    confirm: {
                        label: 'Si',
                        className: 'btn-success'
                    },
                    cancel: {
                        label: 'No',
                        className: 'btn-danger'
                    }
                },
                callback: function (result) {
                    if(result==true){
                        data = {
                            "status": "Aceptado"
                        }
                        $.ajax({
                            url: _principalURL()+"Aspirante/api/changeStatusNB/id/"+id,
                            method : 'PUT',
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
                                tostada(_response.status,_response.message);

                            }
                        });
                    }else{
                        tostada('info','Operacion cancelada');
                    }
                }
            });
        });

        $(document).on('click','.btn-ChangeStatusPrepa',function(){
            var id = this.id;
            var rd = $('input:radio[name=radioOnlyPrepa-'+id+']:checked').val();
            if(rd=='U'){
                status = 'U';
            }else if(rd=='C'){
                status = 'C';
            }else{
                status = '';
            }

            var rd2 = $('input:radio[name=radioOnlyPrepa-'+id+']:checked').val();
            if(rd2=='U'){
                status2 = '4U';
            }else if(rd2=='C'){
                status2 = '4C';
            }else{
                status2 = '';
            }

            if (status) {
                bootbox.confirm({
                    message: "Estas seguro que queires aceptar el documento, revisa bien antes de confirmar el documento ya que esta operacion no se puede cancelar.",
                    size : 'small',
                    centerVertical: true,
                    buttons: {
                        confirm: {
                            label: 'Si',
                            className: 'btn-success'
                        },
                        cancel: {
                            label: 'No',
                            className: 'btn-danger'
                        }
                    },
                    callback: function (result) {
                        if(result==true){
                            datanEW = {
                                "status": status
                            }

                            datanEW2 = {
                                "status": status2
                            }
                            var aspirante = $(document).find('#aspiranteKey').val();
                            var idreal = $(document).find('#idReal-'+id).val();
                            $.ajax({
                                url: _principalURL()+"AspirantePreparatorias/api/change4C4U/id/"+idreal,
                                method : 'POST',
                                headers : {
                                'X-API-KEY':'ANGLOKEY'
                                },
                                data: datanEW,
                                success : function(_response){
                                    
                                        
                                    $.ajax({
                                        url: _principalURL()+"Documentos/Carrera/api/cambiarStatusN/id/"+aspirante,
                                        method : 'POST',
                                        headers : {
                                        'X-API-KEY':'ANGLOKEY'
                                        },
                                        data: datanEW2,
                                        success : function(_response){
                                            if(_response['status']=="success"){
                                                setTimeout(function(){
                                                    location.reload();
                                                },2000);
                                                
                                            }
                                            tostada(_response.status,_response.message);

                                        }
                                    });                            

                                    tostada(_response.status,_response.message);

                                }
                            });
                        }else{
                            tostada('info','Operacion cancelada');
                        }
                    }
                });
                
            }else{
                $(document).find('.alertOferta4-'+id).html(
                    '<div class="alert dark alert-icon alert-danger alert-dismissible" role="alert">'+
                        '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
                            '<span aria-hidden="true">×</span>'+
                        '</button>'+
                        '<i class="icon wb-close" aria-hidden="true"></i>LLena el campo Condicional o Incondicional'+
                    '</div>'
                );
                
            }
        });

        $(document).on('click','.btn-ChangeStatusNew',function(){
            var id = this.id;
            var rd = $('input:radio[name=radioOnly-'+id+']:checked').val();
            if(rd=='U'){
                status = 'U';
            }else if(rd=='C'){
                status = 'C';
            }else{
                status = '';
            }

            var rd2 = $('input:radio[name=radioOnly-'+id+']:checked').val();
            if(rd2=='U'){
                status2 = '4U';
            }else if(rd2=='C'){
                status2 = '4C';
            }else{
                status2 = '';
            }

            if (status) {
                bootbox.confirm({
                    message: "Estas seguro que quieres aceptar el documento, ya que la operacion no se podra cancelar, revisa bien el documento antes de aceptarlo.",
                    size : 'small',
                    centerVertical: true,
                    buttons: {
                        confirm: {
                            label: 'Si',
                            className: 'btn-success'
                        },
                        cancel: {
                            label: 'No',
                            className: 'btn-danger'
                        }
                    },
                    callback: function (result) {
                        if(result==true){
                            datanEW = {
                                "status": status
                            }

                            datanEW2 = {
                                "status": status2
                            }
                            var aspirante = $(document).find('#aspiranteKey').val();
                            var idreal = $(document).find('#idReal-'+id).val();
                            $.ajax({
                                url: _principalURL()+"AspiranteUniversidades/api/change4C4U/id/"+idreal,
                                method : 'POST',
                                headers : {
                                'X-API-KEY':'ANGLOKEY'
                                },
                                data: datanEW,
                                success : function(_response){
                                    
                                        
                                    $.ajax({
                                        url: _principalURL()+"Documentos/Carrera/api/cambiarStatusN/id/"+aspirante,
                                        method : 'POST',
                                        headers : {
                                        'X-API-KEY':'ANGLOKEY'
                                        },
                                        data: datanEW2,
                                        success : function(_response){
                                            if(_response['status']=="success"){
                                                setTimeout(function(){
                                                    location.reload();
                                                },2000);
                                                
                                            }
                                            tostada(_response.status,_response.message);

                                        }
                                    });                            

                                    tostada(_response.status,_response.message);

                                }
                            });
                        }else{
                            tostada('info','Operacion cancelada');
                        }
                    }
                });
                
            }else{
                $(document).find('.alertOferta4-'+id).html(
                    '<div class="alert dark alert-icon alert-danger alert-dismissible" role="alert">'+
                        '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
                            '<span aria-hidden="true">×</span>'+
                        '</button>'+
                        '<i class="icon wb-close" aria-hidden="true"></i>LLena el campo Condicional o Incondicional'+
                    '</div>'
                );
                
            }
        });

        $(document).on('click','.btnAceptarAplicacion',function(){
            var id = this.id;
            bootbox.confirm({
                message: "Estas seguro que quiereses aceptar el documento",
                size : 'small',
                centerVertical: true,
                buttons: {
                    confirm: {
                        label: 'Si',
                        className: 'btn-success'
                    },
                    cancel: {
                        label: 'No',
                        className: 'btn-danger'
                    }
                },
                callback: function (result) {
                    if(result==true){
                        $.ajax({
                            url: _principalURL()+"Documentos/Carrera/api/documentosChangeActiveAplicacion/id/"+id,
                            method : 'POST',
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

                            }
                        });
                    }else{
                        tostada('info','Operacion cancelada');
                    }
                }
            });
        });

        $(document).on('click','.btnRechazarAplicacion',function(){
            var id = this.id;
        
            path = $(document).find('#ubicacionAplicacion-'+id).val();

            bootbox.confirm({
                message: "Estas seguro que quiereses rechazar el documento",
                size : 'small',
                centerVertical: true,
                buttons: {
                    confirm: {
                        label: 'Si',
                        className: 'btn-success'
                    },
                    cancel: {
                        label: 'No',
                        className: 'btn-danger'
                    }
                },
                callback: function (result) {
                    if(result==true){
                        $('#exampleFillIn').modal({backdrop: 'static', keyboard: false});

                        $.ajax({
                            url: 'https://api.dropboxapi.com/2/files/delete_v2',
                            type: 'post',
                            headers: {
                                "Authorization": "Bearer Yw6OUnBO0lAAAAAAAAAAIn7BVI50aQuBCUahP_bylfNJDVOqtX3UgjwVd4o7ChKv"
                            },
                            data:'{\"path\": \"'+path+'\"}',
                            contentType: 'application/json',
                            success: function (response) {
                                $.ajax({
                                    url: _principalURL()+"Documentos/Carrera/api/docAplicacion/id/"+id,
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
                                            tostada(_response.status,_response.message);
                                            
                                        }
                                    }
                                });
                                
                            },
                            error: function (response) {
                                console.error(response);
                            }
                        });
                    }else{
                        tostada('info','Operacion cancelada');
                    }
                }
            });

            
            
        });

        $(document).on('click','.btn-changeStatus4U',function(){
            var id=$(document).find('#aspiranteKey').val();
            var rd = $('input:radio[name=radio4C]:checked').val();
            if(rd=='si'){
                status = '4U';
            }else if(rd=='no'){
                status = '4C';
            }else{
                status = '';
            }
            data = {
                "status":status
            }
            $.ajax({
                url: _principalURL()+"Documentos/Carrera/api/cambiarStatusN/id/"+id,
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
                    tostada(_response.status,_response.message);

                }
            });

        });

        $(document).on('click','.btn-ofertaCUPrepa',function(){
            var id = this.id;
            var rd = $('input:radio[name=radioPrepa-'+id+']:checked').val();
            if(rd=='U'){
                status = '4U';
            }else if(rd=='C'){
                status = '4C';
            }else{
                status = '';
            }

            var rd2 = $('input:radio[name=radioPrepa-'+id+']:checked').val();
            if(rd2=='U'){
                status2 = 'U';
            }else if(rd2=='C'){
                status2 = 'C';
            }else{
                status2 = '';
            }

            if (status) {
                datanEW = {
                    "status": status
                }
                bootbox.confirm({
                    message: "Estas seguro que queires subir el documento y con ese estatus asegurate que estas subiendo el archivo correcto.",
                    size : 'small',
                    centerVertical: true,
                    buttons: {
                        confirm: {
                            label: 'Si',
                            className: 'btn-success'
                        },
                        cancel: {
                            label: 'No',
                            className: 'btn-danger'
                        }
                    },
                    callback: function (result) {
                        if(result==true){
                            var aspirante = $(document).find('#aspiranteKeyPrepa').val();
                var formData = new FormData($('#ofertaFormPrepa-'+id)[0]);
                var name = $(document).find('#nameCarpetaPrepa').val();
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
                            parametros['statusAspirante'] = status2;
                            parametros['statusDocumento'] = 'Aceptado'

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
                                
                                    $.ajax({
                                        url: _principalURL()+"Documentos/Carrera/api/cambiarStatusN/id/"+aspirante,
                                        method : 'POST',
                                        headers : {
                                        'X-API-KEY':'ANGLOKEY'
                                        },
                                        data: datanEW,
                                        success : function(_response){
                                            if(_response['status']=="success"){
                                                setTimeout(function(){
                                                    location.reload();
                                                },2000);
                                                
                                            }
                                            tostada(_response.status,_response.message);

                                        }
                                    });
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
                        }else{
                            tostada('info','Operacion cancelada');
                        }
                    }
                });
                
            }else{
                $(document).find('.alertOfertaPrepa-'+id).html(
                    '<div class="alert dark alert-icon alert-danger alert-dismissible" role="alert">'+
                        '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
                            '<span aria-hidden="true">×</span>'+
                        '</button>'+
                        '<i class="icon wb-close" aria-hidden="true"></i>LLena el campo Condicional o Incondicional'+
                    '</div>'
                );
                
            }
            
        });

        $(document).on('click','.btn-ofertaCU',function(){
            var id = this.id;
            var rd = $('input:radio[name=radio-'+id+']:checked').val();
            if(rd=='U'){
                status = '4U';
            }else if(rd=='C'){
                status = '4C';
            }else{
                status = '';
            }

            var rd2 = $('input:radio[name=radio-'+id+']:checked').val();
            if(rd2=='U'){
                status2 = 'U';
            }else if(rd2=='C'){
                status2 = 'C';
            }else{
                status2 = '';
            }

            if (status) {
                bootbox.confirm({
                    message: "Estas seguro que quieres subir el documento, revisa bien que tipo de oferta es ya que esta operacion no es reversible.",
                    size : 'small',
                    centerVertical: true,
                    buttons: {
                        confirm: {
                            label: 'Si',
                            className: 'btn-success'
                        },
                        cancel: {
                            label: 'No',
                            className: 'btn-danger'
                        }
                    },
                    callback: function (result) {
                        if(result==true){
                            datanEW = {
                    "status": status
                }
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
                            parametros['statusAspirante'] = status2;
                            parametros['statusDocumento'] = 'Aceptado';


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
                                
                                    $.ajax({
                                        url: _principalURL()+"Documentos/Carrera/api/cambiarStatusN/id/"+aspirante,
                                        method : 'POST',
                                        headers : {
                                        'X-API-KEY':'ANGLOKEY'
                                        },
                                        data: datanEW,
                                        success : function(_response){
                                            if(_response['status']=="success"){
                                                setTimeout(function(){
                                                    location.reload();
                                                },2000);
                                                
                                            }
                                            tostada(_response.status,_response.message);

                                        }
                                    });
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
                        }else{
                            tostada('info','Operacion cancelada');
                        }
                    }
                });
                
            }else{
                $(document).find('.alertOferta-'+id).html(
                    '<div class="alert dark alert-icon alert-danger alert-dismissible" role="alert">'+
                        '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
                            '<span aria-hidden="true">×</span>'+
                        '</button>'+
                        '<i class="icon wb-close" aria-hidden="true"></i>LLena el campo Condicional o Incondicional'+
                    '</div>'
                );
                
            }
            
        });

        $(document).on('click','.btn-numeroAceptacion',function(){
            var id= this.id;
            var f = new Date();
            data = {
                "numero": $(document).find('#solicitud-'+id).val(),
                "fecha":  f.getDate() + "/" + (f.getMonth() +1) + "/" + f.getFullYear() + " " + f.getHours() + ":" + f.getMinutes()

            }
            if(!data['numero']){
                $(document).find('.alertSolicitud-'+id).html(
                    '<div class="alert dark alert-icon alert-danger alert-dismissible" role="alert">'+
                        '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
                            '<span aria-hidden="true">×</span>'+
                        '</button>'+
                        '<i class="icon wb-close" aria-hidden="true"></i>LLena el campo de formato de solicitud'+
                    '</div>'
                );
                tostada('error','Revisa el mensaje');
            }else{
                $.ajax({
                    url: _principalURL()+"AspiranteUniversidades/api/numeroSolicitud/id/"+id,
                    method : 'PUT',
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
                        tostada(_response.status,_response.message);

                    }
                }); 
            }

        });

        $(document).on('click','.btn-numeroAceptacionPrepa',function(){
            var id= this.id;
            var f = new Date();
            data = {
                "numero": $(document).find('#numeroSolicitudPrepa-'+id).val(),
                "fecha": f.getDate() + "/" + (f.getMonth() +1) + "/" + f.getFullYear() + " " + f.getHours() + ":" + f.getMinutes()
            }
            if(!data['numero']){
                $(document).find('.alertSolicitudPrepa-'+id).html(
                    '<div class="alert dark alert-icon alert-danger alert-dismissible" role="alert">'+
                        '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
                            '<span aria-hidden="true">×</span>'+
                        '</button>'+
                        '<i class="icon wb-close" aria-hidden="true"></i>LLena el campo de formato de solicitud'+
                    '</div>'
                );
                tostada('error','Revisa el mensaje');
            }else{
                $.ajax({
                    url: _principalURL()+"AspirantePreparatorias/api/numeroSolicitud/id/"+id,
                    method : 'PUT',
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
                        tostada(_response.status,_response.message);

                    }
                }); 
            }

        });

        $(document).on('click','.btn-changeStatus',function(){
            var id=$(document).find('#aspiranteKey').val();
            var rd = $('input:radio[name=radio]:checked').val();
            if(rd=='si'){
                status = '2R';
            }else if(rd=='no'){
                status = '2';
            }else{
                status = '';
            }
            data = {
                "status":status
            }

            bootbox.confirm({
                message: "Estas seguro que quieres cambiar el estatus del aspirante, revisa bien que el aspirante haya entregado todos los documentos que se requieren para el cambio.",
                size : 'small',
                centerVertical: true,
                buttons: {
                    confirm: {
                        label: 'Si',
                        className: 'btn-success'
                    },
                    cancel: {
                        label: 'No',
                        className: 'btn-danger'
                    }
                },
                callback: function (result) {
                    if(result==true){
                        $.ajax({
                            url: _principalURL()+"Documentos/Carrera/api/cambiarStatusN/id/"+id,
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
                                tostada(_response.status,_response.message);

                            }
                        });
                    }else{
                        tostada('info','Operacion cancelada');
                    }
                }
            });
            

        });

        $(document).on('click','#btn-form',function(){
            var id=$(document).find('#aspiranteKey').val();
            
            var formData = new FormData($('#formUpload')[0]);
            // formData.append("Photo",file);
            $.ajax({
                url:_principalURL()+'/Documentos/Carrera/api/documentosAgente/id/'+id,
                type:'post',
                processData:false,
                cache:false,
                headers : {
                    'X-API-KEY':'ANGLOKEY'
                },
                contentType:false,
                data:formData,
                success : function(_response){
                console.info(_response);
                if(_response.status=="success"){
                    setTimeout(function(){
                        location.reload();
                    },1000);
                }else{
                    $(document).find('.alert').html(
                        '<div class="alert dark alert-icon alert-danger alert-dismissible" role="alert">'+
                            '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
                                '<span aria-hidden="true">×</span>'+
                            '</button>'+
                            '<i class="icon wb-close" aria-hidden="true"></i>'+_response.validations+
                        '</div>'
                    );
                }
                tostada(_response.status,_response.message);

                },error : function(err){
                
                }
            });

        });

        $(document).on('change','.test',function () {
            var id = this.id;
            var filename =  $(document).find('.file-'+id).val().replace(/C:\\fakepath\\/i, '');
            $(document).find('#t-'+id).val(filename);
        });

        $(document).on('click','.btnRechazar',function(){
            var id = this.id;
            
            _paramtetros = {
                "descDocumento" : $(document).find('#desc-'+id).val()
            };

            path = $(document).find('#path-'+id).val();

            if(_paramtetros['descDocumento']){
                $('#exampleFillIn').modal({backdrop: 'static', keyboard: false});
                $.ajax({
                    url: 'https://api.dropboxapi.com/2/files/delete_v2',
                    type: 'post',
                    headers: {
                        "Authorization": "Bearer Yw6OUnBO0lAAAAAAAAAAIn7BVI50aQuBCUahP_bylfNJDVOqtX3UgjwVd4o7ChKv"
                    },
                    data:'{\"path\": \"'+path+'\"}',
                    contentType: 'application/json',
                    success: function (response) {
                        $.ajax({
                            url: _principalURL()+"Documentos/Carrera/api/documentosDescAdd/id/"+id,
                            method : 'POST',
                            headers : {
                            'X-API-KEY':'ANGLOKEY'
                            },
                            data: _paramtetros,
                            success : function(_response){
                               if(_response['status']=="success"){
                                    setTimeout(function(){
                                    location.reload();
                                    },2000);
                                    tostada(_response.status,_response.message);
                                    
                               }
                            }
                        });
                        
                    },
                    error: function (response) {
                        console.error(response);
                    }
                })

            }else{
                $(document).find('.alert-'+id).html(
                '<div class="alert dark alert-icon alert-danger alert-dismissible" role="alert">'+
                    '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
                        '<span aria-hidden="true">×</span>'+
                    '</button>'+
                    '<i class="icon wb-close" aria-hidden="true"></i>El campo descripcion es requerido'+
                '</div>'
                );
                tostada('error','No se ha llenado el campo de descripcion');
            }
            

            
        });

        $(document).on('click','.btnAceptar',function(){
            var id = this.id;
            var nameDoc = this.name;
            
            if (nameDoc=='Boleta.pdf') {
                var rd = $('input:radio[name=radioBoleta]:checked').val();
                if(rd=='si'){
                    BoletaTipo = 'Final';
                }else if(rd=='no'){
                    BoletaTipo = 'Incompleta';
                }else{
                    BoletaTipo = '';
                }
                data = {
                    "BoletaTipo":BoletaTipo
                }
                if (BoletaTipo) {
                    bootbox.confirm({
                        message: "Estas seguro que quiereses aceptar el documento",
                        size : 'small',
                        centerVertical: true,
                        buttons: {
                            confirm: {
                                label: 'Si',
                                className: 'btn-success'
                            },
                            cancel: {
                                label: 'No',
                                className: 'btn-danger'
                            }
                        },
                        callback: function (result) {
                            if(result==true){
                                $.ajax({
                                    url: _principalURL()+"Documentos/Carrera/api/documentosChangeActive/id/"+id,
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
                                    tostada(_response.status,_response.message);

                                    }
                                });
                            }else{
                                tostada('info','Operacion cancelada');
                            }
                        }
                    });
                }else{
                    $(document).find('.alert-'+id).html(
                        '<div class="alert dark alert-icon alert-danger alert-dismissible" role="alert">'+
                            '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
                                '<span aria-hidden="true">×</span>'+
                            '</button>'+
                            '<i class="icon wb-close" aria-hidden="true"></i>El campo FInal/Incompleta es requerido ya que es una boleta'+
                        '</div>'
                    );
                    tostada('error','No se ha llenado el campo requerido');
                }
            }else{
                bootbox.confirm({
                    message: "Estas seguro que quiereses aceptar el documento",
                    size : 'small',
                    centerVertical: true,
                    buttons: {
                        confirm: {
                            label: 'Si',
                            className: 'btn-success'
                        },
                        cancel: {
                            label: 'No',
                            className: 'btn-danger'
                        }
                    },
                    callback: function (result) {
                        if(result==true){
                            $.ajax({
                                url: _principalURL()+"Documentos/Carrera/api/documentosChangeActive/id/"+id,
                                method : 'POST',
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

                                }
                            });
                        }else{
                            tostada('info','Operacion cancelada');
                        }
                    }
                });
            }
            
            
        });

    });
</script>