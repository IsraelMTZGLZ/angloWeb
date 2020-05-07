<script>
		$(document).ready(function() 
    		{
				var person ;
				$(document).on('click','.editarInfo',function(){
					var agente = this.id;
           			_url = _principalURL()+"Agente/api/agenteByIdAgente/id/"+agente;

                	$.ajax({
						url: _url,
						method : 'GET',
						headers : {
						'X-API-KEY':'ANGLOKEY'
						},
						data: null,
						success : function(_response){
                    		response = JSON.stringify(_response);

							console.info(_response['data']);
							$(document).find('#nombre').val(_response['data']['names']);
							$(document).find('#apellidos').val(_response['data']['paterns']);
							person = _response['data']['persona'];
							$('#exampleModal').modal('show');
						}
            		});
				});

				$(document).on('submit','#comingForm',function (event){
					event.preventDefault();
					_url = _principalURL()+"User/api/editPerson/id/"+person;
					$.ajax({
						url: _url,
						method : 'PUT',
						headers : {
						'X-API-KEY':'ANGLOKEY'
						},
						data: $(document).find('#comingForm').serialize(),
						success : function(_response){
                        if (_response.status=="error") {
                            $.each(_response.validations,function(key,message){
                                $(document).find('#'+key).addClass('is-invalid').after('<div class="invalid-feedback">'+message+'</div>')
                            });
                        }
                        if (_response.status=="success") {
                            setTimeout(function(){
                                window.location.href = "<?php echo site_url('Login'); ?>";
                            },2000);
                        }
                        
                        tostada(_response.status,_response.message);
						

						},error : function(err){
						
						}
					});
				});
			}
		);
	</script>
