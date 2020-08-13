$(function(){
    _url = _principalURL()+"/Verano/Ingles/api/statusUno";

    var _html ="";
    console.log("entra");

      $.ajax({
  			url:_url,
  			method: "GET",
  			headers : {
  				'X-API-KEY':'ANGLOKEY'
  			},
  			dataSrc : $('#example').find('tbody').empty().append(_html),
  			success : function(response){
  			if (response.status=="success") {

  				var _html ="";
  				for (var i = 0; i < response.data.length; i++) {
            var id= response.data[i].idAspirante;
            var hash=btoa(id);
  					_html +="<tr >";

  					        _html +="<td >"+response.data[i].firstNamePersona+"</td>";
  			    				_html +="<td>"+response.data[i].lastNamePersona+"</td>";
  									_html +="<td>"+response.data[i].generoPersona+"</td>";
  			    				_html +="<td>"+response.data[i].emailUsuario+"</td>";
  			    				_html +="<td>"+response.data[i].telefonoAspirante+"</td>";
  			    				_html +="<td>"+response.data[i].ciudadAspirante+"</td>";
  			    				_html +="<td>  <a href='tel:"+response.data[i].telefonoAspirante+"'  class='btn btn-icon btn-danger'  data-toggle='tooltip' title='Information'> <i class='icon fa-phone'></i></a> <a href='"+base_url+''+'/Dashboard/Verano/InfoAspirante/info/'+''+hash+"'  id='btnE"+response.data[i].id+"' class='btn btn-icon btn-warning'  data-toggle='tooltip' title='Information'> <i class='icon fa-eye'></i></a> <a href='https://api.whatsapp.com/send?phone="+response.data[i].telefonoAspirante+"&text=No%subiste%20ningun%20documento'  target='_blank'  class='btn btn-icon btn-success'  data-toggle='tooltip' title='Information'> <i class='icon fa-whatsapp'></i></a> <button  class='btn btn-icon btn-info sendEmail' id='"+response.data[i].idAspirante+""+' '+""+response.data[i].emailUsuario+"'  data-toggle='tooltip' title='Information'> <i class='icon fa-envelope'></i></button> <a href='base_url('Dashboard/Verano/InfoAspirante/info/')"+response.data[i].idAspirante+"' id='"+response.data[i].id+"' class='btn btn-icon btn-primary'  data-toggle='tooltip' title='Information'> <i class='icon fa-edit'></i></a></td> ";
  			    				_html +="</tr>";
  				}

  				$('#example').find('tbody').empty().append(_html); //para localizar
  				$('#example').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv','excel', 'pdf', 'print'
            ]
          });
  				var table_admin = response.data;
          console.log(table_admin);




  			}else{
  				alert(response.message);
  			}

  			},
  			error : function(err){
  					response= JSON.stringify(err.responseText);
  					$(document).find('#responseText').html(
  						'<div class="alert alert-success" role="alert">'
  						+response+
  						'</div>'
  					);
  					setTimeout(function(){
  							$(document).find('#responseText').html('');
  					}, 3000);

  			}
  		});

      $(document).on('click','.sendEmail',function(){

        var data = this.id;
        var rest = data.split(" ");
        var id =  rest[0];
        var email =  rest[1];
        console.info(email);
        _email = {
          'emailAspirante':email
        }
        _url = _principalURL()+"Verano/Ingles/api/correoStatusUno/id/"+id;
        _method = "POST";


        $.ajax({
          url: _url,
          method : _method,
          headers : {
          'X-API-KEY':'ANGLOKEY'
          },
          data: _email,
          success : function(_response){
              if(!_response){
                  tostada('success','Enviado');
              }else{
                  tostada('error','Error');


              }
          },error : function(err){

          }
        });

      });

  function clearForm(_id){
    console.info("llamaron");
    $(document).find('#'+_id).find('input,select').each(function(e){
        $(this).removeClass('is-invalid');
        $(this).next('div').remove();

    });
  }
  });
