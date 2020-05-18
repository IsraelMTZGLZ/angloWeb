<script>
    $(function(){
        $(document).on('click','.add-foto',function (){
            $('#examplePositionCenter').modal('show');
        });

        $(document).on('click','.edit-password',function (){
            $('#modalPassword').modal('show');
        });

        $(document).on('click','.edit-info',function (){
            $('#modalInformacion').modal('show');
        });

        $(document).on('click','#btn-photoUser',function(){
            idPhoto = $(document).find('#photo').val();
            idPerson = $(document).find('#persona').val();
            var formData = new FormData($('#photoUserForm')[0]);
            $.ajax({    
                url:_principalURL()+'Profile/api/photoUser/id/'+idPerson+'/photo/'+idPhoto,
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
                        $(document).find('.photoUserAlert').html(
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
                            window.location.href = "<?php echo site_url('Dashboard/ProfileAspirante/fotoRedirect'); ?>";    
                        },2000);
                    }
                    tostada(_response.status,_response.message);

                },error : function(err){
                
                }
            });
        });

        $(document).on('submit','#passwordForm',function(event){
            event.preventDefault();
            id = $(document).find('#usuario').val();
            clearForm('passwordForm');

            _url = _principalURL()+"Profile/api/passwordChange/id/"+id;
            _method = "POST";


            $.ajax({
                url: _url,
                method : _method,
                headers : {
                'X-API-KEY':'ANGLOKEY'
                },
                data: $(document).find('#passwordForm').serialize(),
                success : function(_response){
                if (_response.status=="error") {
                    $.each(_response.validations,function(key,message){
                        $(document).find('#'+key).addClass('is-invalid').after('<div class="invalid-feedback">'+message+'</div>')
                    });

                    setTimeout(function(){
                    
                        $(document).find('.responseText').html('<div class="summary-errors alert alert-danger alert-dismissible fade show" role="alert">'+
                            '<strong>Error!</strong> '+_response.message+
                            '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
                            '<span aria-hidden="true">&times;</span>'+
                            '</button>'+
                            '</div>'
                        );
                    },2000);
                }
                if (_response.status=="success") {
                    $(document).find('.responseText').html(
                        '<div class="alert alert-success fade show" role="alert">'+
                        '<h4 class="alert-heading">'+_response.message+'!</h4>'+
                        '</div>'
                    );
                    setTimeout(function(){
                        location.reload(); 
                    },2000);
                }
                
                tostada(_response.status,_response.message);
                

                },error : function(err){
                
                }
            });
        });

    });
    $(".hover").mouseleave(
        function () {
            $(this).removeClass("hover");
        }
    );
</script>