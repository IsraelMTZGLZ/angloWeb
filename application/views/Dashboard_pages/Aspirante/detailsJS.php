<script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.4.0/bootbox.min.js"></script>
<script>
     $(function(){
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
                        "Authorization": "Bearer Cgp9TLRy8iAAAAAAAAAAWIKcxqC-ZjRM6KdgHwmg5T3CJ1RoQGW5ISZ9arS5HSR-"
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
        });

    });
</script>