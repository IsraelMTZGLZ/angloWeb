<script>
    $(function(){
        $(document).on('click','#subirBeca',function () {
            var descDocumento = $(document).find('#descDocumento').val();
            var nombreDocumento = $(document).find('#nombreDocumento').val();
            $(document).find('.becaAlert').empty();
            if(!nombreDocumento){
                if(!descDocumento){
                    $(document).find('.becaAlert').html(
                        '<div class="alert dark alert-icon alert-danger alert-dismissible" role="alert" style="margin:10px;">'+
                            '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
                                '<span aria-hidden="true">×</span>'+
                            '</button>'+
                            '<i class="icon wb-close" aria-hidden="true"></i>No se ha acompletado el campo de descripcion y el nombre del documento'+
                        '</div>'
                    );
                }else{
                    $(document).find('.becaAlert').html(
                        '<div class="alert dark alert-icon alert-danger alert-dismissible" role="alert" style="margin:10px;">'+
                            '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
                                '<span aria-hidden="true">×</span>'+
                            '</button>'+
                            '<i class="icon wb-close" aria-hidden="true"></i>No se ha acompletado el campo de el nombre del documento'+
                        '</div>'
                    );
                }
                tostada('error','No se han llenado todos los campos');
            }
            else if(!descDocumento){
                $(document).find('.becaAlert').html(
                    '<div class="alert dark alert-icon alert-danger alert-dismissible" role="alert" style="margin:10px;">'+
                        '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
                            '<span aria-hidden="true">×</span>'+
                        '</button>'+
                        '<i class="icon wb-close" aria-hidden="true"></i>No se ha acompletado el campo de descripcion del documento'+
                    '</div>'
                );
                tostada('error','No se han llenado todos los campos');
            }else {
                var formData = new FormData($('#formBeca')[0]);
                var validateForm = $( document ).find('#Beca').val() != '';
                var carpeta = $(document).find('#nameAspiranteKey').val();
                var aspirante = $(document).find('#aspiranteKey').val();
                if(validateForm){
                    $('#exampleFillIn').modal({backdrop: 'static', keyboard: false});
                    var ext = $( document ).find('#Beca').val().split('.').pop();
                    $.ajax({
                        url: 'https://content.dropboxapi.com/2/files/upload',
                        type: 'post',
                        data: formData,
                        processData: false,
                        contentType: 'application/octet-stream',
                        headers: {
                            "Authorization": "Bearer Yw6OUnBO0lAAAAAAAAAAIn7BVI50aQuBCUahP_bylfNJDVOqtX3UgjwVd4o7ChKv",
                            "Dropbox-API-Arg": '{"path": "/'+carpeta+'/Becas/'+nombreDocumento+'.'+ext+'","mode": "overwrite","autorename": true,"mute": false}'
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
                                fkAspirante : aspirante,
                                descDocumento : descDocumento
                            };

                            _url = _principalURL()+"Documentos/BecasUP/api/dropboxBecas/id/"+aspirante;
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
                                        window.location.href = "<?php echo site_url('Dashboard/BecasUP'); ?>";
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
                    $(document).find('.becaAlert').html(
                    '<div class="alert dark alert-icon alert-danger alert-dismissible" role="alert" style="margin:10px;">'+
                        '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
                            '<span aria-hidden="true">×</span>'+
                        '</button>'+
                        '<i class="icon wb-close" aria-hidden="true"></i>No se ha selecionado el documento'+
                    '</div>'
                );
                    tostada('error','No se ha seleccionado un archivo');
                }
            }
        });
    });
</script>