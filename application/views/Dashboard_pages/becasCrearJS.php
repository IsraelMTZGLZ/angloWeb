
<script>
    $(function(){

        $(document).on('click','.eliminarBecas',function(){
            var id = this.id;

            $.ajax({
                url: _principalURL()+"BecasAdd/api/becasQuitar/id/"+id,
                method : 'DELETE',
                headers : {
                'X-API-KEY':'ANGLOKEY'
                },
                data: null,
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

        $(document).on('click','.editBecas',function(){
            var id = this.id;

            $.ajax({
                url: _principalURL()+"BecasAdd/api/becasPUT/id/"+id,
                method : 'PUT',
                headers : {
                'X-API-KEY':'ANGLOKEY'
                },
                data: $(document).find('#formBecasPut').serialize(),
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
        
        $('#exampleModal').on('hidden.bs.modal', function (e) {

            $(document).find('#paisPut').prop('disabled', true);
            $(document).find('#nombrePut').prop('disabled', true);
            $(document).find('#linkPut').prop('disabled', true);
            $(document).find('#aperturaPut').prop('disabled', true);
            $(document).find('#cierrePut').prop('disabled', true);
            $(document).find('#periodoEvaluacionPut').prop('disabled', true);
            $(document).find('#resultadosPut').prop('disabled', true);
            $(document).find('#asignacionPut').prop('disabled', true);
            $(document).find('#montoPut').prop('disabled', true);
            $(document).find('#programaPut').prop('disabled', true);
            $(document).find('#descripcionPut').prop('disabled', true);
            $(document).find('#convenioPut').prop('disabled', true);

            $(document).find('.btnsEdit').empty();

        });

        $(document).on('click','.edit-info',function(){
            var id = this.id;
            $(document).find('#paisPut').prop('disabled', false);
            $(document).find('#nombrePut').prop('disabled', false);
            $(document).find('#linkPut').prop('disabled', false);
            $(document).find('#aperturaPut').prop('disabled', false);
            $(document).find('#cierrePut').prop('disabled', false);
            $(document).find('#periodoEvaluacionPut').prop('disabled', false);
            $(document).find('#resultadosPut').prop('disabled', false);
            $(document).find('#asignacionPut').prop('disabled', false);
            $(document).find('#montoPut').prop('disabled', false);
            $(document).find('#programaPut').prop('disabled', false);
            $(document).find('#descripcionPut').prop('disabled', false);
            $(document).find('#convenioPut').prop('disabled', false);

            $(document).find('.btnsEdit').html(
                '<div class="row">'+
                    '<div class="col-4">'+
                        '<button type="button" class="btn btn-warning editBecas" id="'+id+'">Editar</button>'+
                    '</div>'+
                    '<div class="col-4">'+
                        '<button type="button" class="btn btn-danger eliminarBecas" id="'+id+'">Eliminar</button>'+
                    '</div>'+
                '</div>'
            );

        });

        $(document).on('click','.verMas-btn',function(){
            var id = this.id;
            $(document).find('.edit-info').attr('id',id);
            $.ajax({
                url: _principalURL()+"BecasAdd/api/becas/id/"+id,
                method : 'GET',
                headers : 
                    {
                        'X-API-KEY':'ANGLOKEY'
                    },
                data:   null,
                success : function(_response){
                    
                    var becaInfo = _response['data'];

                    $(document).find('#paisPut').val(becaInfo['paisBeca']);
                    $(document).find('#nombrePut').val(becaInfo['nombreBeca']);
                    $(document).find('#linkPut').val(becaInfo['linkBeca']);
                    $(document).find('#aperturaPut').val(becaInfo['aperturaFechaBeca']);
                    $(document).find('#cierrePut').val(becaInfo['cierreFcehaBeca']);
                    $(document).find('#periodoEvaluacionPut').val(becaInfo['periodoEvaluacionBeca']);
                    $(document).find('#resultadosPut').val(becaInfo['resultadosBecas']);
                    $(document).find('#asignacionPut').val(becaInfo['procesoAsignacionBeca']);
                    $(document).find('#montoPut').val(becaInfo['montoBeca']);
                    $(document).find('#programaPut').val(becaInfo['programaBeca']);
                    $(document).find('#descripcionPut').val(becaInfo['descripcionBeca']);
                    $(document).find('#convenioPut').val(becaInfo['convenioBeca']);

                    $('#exampleModal').modal('show');


                },error : function(err){
                
                }
            });
        });

        let response="";
        $(document).on('submit','#formBecasAdd',function(event){
            event.preventDefault();

            clearForm('formBecasAdd');
            _url = "";
            _url = _principalURL()+"BecasAdd/api/becasAdd/";
            _method = "POST";


            $.ajax({
                url: _url,
                method : _method,
                headers : {
                'X-API-KEY':'ANGLOKEY'
                },
                data: $(document).find('#formBecasAdd').serialize(),
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
    });
</script>