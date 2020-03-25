<script>
    $(function(){

        let response="";
        $(document).on('submit','#emailForm',function(event){
        event.preventDefault();

        clearForm('emailForm');
        _url = "";
        _url = _principalURL()+"EmailConfig/api/registro/";
        _method = "POST";


        $.ajax({
            url: _url,
            method : _method,
            headers : {
            'X-API-KEY':'ANGLOKEY'
            },
            data: $(document).find('#emailForm').serialize(),
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
            $(document).find('#responseText').html(
                '<div class="alert alert-success fade show" role="alert">'+
                '<h4 class="alert-heading">Configuracion creada correctamente!</h4>'+
                '</div>'
            );
            }
            
            tostada(_response.status,_response.message);
            

            },error : function(err){
            
            }
        });
        });
    });
</script>