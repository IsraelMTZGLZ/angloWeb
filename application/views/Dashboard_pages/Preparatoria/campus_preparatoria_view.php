<link rel="stylesheet" href="cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.1/css/buttons.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="<?=base_url('resources/assets/Informativa/css/files.css');?>"/>
<div class="card text-center">
  <div class="card-header" style="margin-top: 2%;">
    Preparatorias
  </div>

  <div class="card-body">
    <div id="responseText" style="margin-top: 20px;margin-bottom: -5px;">
    <div class="row">
      <div class="col-md-6 col-sm-6 col-6">
        <div class="example example-buttons">
          <!-- <button type="button" data-toggle="modal" class="btn btn-primary" data-target="#exampleModalScrollable">	Add New <i class="fa fa-plus"></i>	</button> -->
            <button type="button" data-toggle="modal" data-target="#exampleModalPrimary" class="btn btn-outline btn-primary"><i class="icon wb-plus" aria-hidden="true"></i> More</button>
        </div>
      </div>
    </div>

    <table id="example" class="display nowrap" style="width:100%">
        <thead>
            <tr>
            <th>Foto </th>
                <th>Nombre Preparatoria </th>
                <th>Status Preparatoria</th>
                <th>Fundación</th>
                <th>Nombre Campus</th>
                <th>Tipo</th>
                <th>Alojamiento</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>

        </tbody>
    </table>
  </div>
</div>

<div class="modal fade modal-primary" id="exampleModalPrimary" aria-hidden="true"
  aria-labelledby="exampleModalPrimary" role="dialog" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title">Preparatoria Campus</h4>
      </div>
      	<form id="campusForm">
      <div class="modal-body form-row">



        <div class="col-xl-6 form-group">
          <label>Foto Campus</label>
          <input  accept="image/*" id="fotoCampus" type="file">
        </div>
        <div class="col-xl-6 form-group">
          <label>Logo Campus</label>
          <input accept="image/*" id="fotoLogo" type="file">
        </div>

          <div class="col-xl-6 form-group">
            <label>nombreCampus</label>
            <input type="text" class="form-control" name="nombreCampus" id="nombreCampus" placeholder="Nombre">
          </div>
          <div class="col-xl-6 form-group">
            <label>Ubicación</label>
            <input type="text" class="form-control" name="ubicacionCampus" id="ubicacionCampus" placeholder="Nombre">
          </div>
          <div class="col-xl-6 form-group">
            <label>tipo Campus</label>
            <input type="text" class="form-control" name="tipoCampus" id="tipoCampus" placeholder="Nombre">
          </div>
          <div class="col-xl-6 form-group">
            <label>alojamiento Campus</label>
            <input type="text" class="form-control" name="alojamientoCampus" id="alojamientoCampus" placeholder="Nombre">
          </div>
          <div class="col-xl-6 form-group">
            <label>descripcion Campus</label>
            <input type="text" class="form-control" name="descripcionCampus" id="descripcionCampus" placeholder="Nombre">
          </div>

          <div class="col-xl-6 form-group">
            <label>Status</label>
              <select class="form-control" name="statusCampus" id="statusCampus" data-plugin="selectpicker">

                <option  value="Activo">Activo</option>
                <option value="Inactivo" >Inactivo</option>
                <option value="Pendiente">Pendiente</option>

              </select>

          </div>

      </div>
      <div class="modal-footer">
      <div class="form-group btns">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </div>
    </form>
    </div>
  </div>
</div>

<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.print.min.js"></script>
<script src="<?=base_url('resources/assets/JS/ServicesJS.js');?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
$(function(){


  /*This function is emplemented to show data in the table */


    _url = _principalURL()+"/PreparatoriaCampus/api/preparatoriacampus";

    var _html ="";

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
  					_html +="<tr>";

  					        _html +="<td><img src='"+response.data[i].urlLogotipo+"' alt='Elemento de Descarga' width='50px' height='50px'></td>";
  			    				_html +="<td>"+response.data[i].nombrePreparatoria+"</td>";
  									_html +="<td>"+response.data[i].statusPreparatoria+"</td>";
  			    				_html +="<td>"+response.data[i].fundacion+"</td>";
  			    				_html +="<td>"+response.data[i].nombreCampus+"</td>";
  			    				_html +="<td>"+response.data[i].tipoCampus+"</td>";
  			    				_html +="<td>"+response.data[i].alojamientoCampus+"</td>";
  			    				_html +="<td> <a href='<?=base_url('Cita/add/')?>"+response.data[i].id+"' id='btnE"+response.data[i].id+"' class='edit-control btn btn-primary btn-xs'  data-toggle='tooltip' title='Edit'> <i class='fa fa-pencil'></i></a>   <button id='"+response.data[i].id+"' class='delete-control btn btn-danger btn-xs'  title='Delete'><i class='fa fa-trash-o'></i></button></td>";
  			    				_html +="</tr>";
  				}

  				$('#example').find('tbody').empty().append(_html); //para localizar
  				$('#example').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
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


    // this me tethod is implemented to submit or delete information to the table
    $(document).find('#example tbody').on('click','tr',function(){
      _url = _principalURL()+"Preparatoria/api/preparatoria/id/";
      var _prepa = table.row(this).data();
      $.ajax({
        url:_url+_prepa.idPreparatoria,
        method: 'get',
        headers: {
          'X-API-KEY':'ANGLOKEY'
        },
        success : function(_response){
          if(_response.status=="error"){
            tostada('error','Los datos  no fueron cargados correctamente ');
          }else if(_response.status == "success"){

            $.each(_response.data,function(key,value){
               $(document).find('#'+key).val(value);
            });
						$('#exampleModalPrimary').modal('show')
            $(document).find('.btns').html(
              '<div class="row ">'+
                '<div class="col">'+
                  '<button type="button" class="btn btn-warning btn-cancel">Cancel</button>'+

              '</div>'+

                '<div class="col">'+
                  '<button class="btn btn-primary">Update</button>'+

              '</div>'+

                '<div class="col">'+
                  '<button class="btn  btn-danger btn-delete">Delete</button>'+
                '</div>'+
              '</div>'

            );
            $(document).find('#campusForm').append(
              '<input type="hidden" id="id" name="id" value="'+_response.data.idPreparatoria+'">'
            );
          }


        },
        error: function(error){
          tostada('error','Los datos  no fueron cargados correctamente ');
        }

      });
    });
    /* This method is implemented to submit information to the DATA BASE */
    $(document).on('submit','#campusForm',function(event){

        var $fotoCampus = $("#fotoCampus");
        var $fotoLogo = $("#fotoLogo");
        var $nombre = $("#nombrePreparatoria");
        var formData = new FormData();
        var archivosCampu = $fotoCampus[0].files;
        var archivosLogo = $fotoLogo[0].files;
      if (archivosCampu.length >= 0 && archivosLogo.length >= 0 ) {
        var fotoCampus = archivosCampu[0]; //Sólo queremos la primera imagen, ya que el usuario pudo seleccionar más
        var fotoLogo = archivosLogo[0];
        var lector = new FileReader();
        formData.append('my_file', fotoCampus);
        formData.append('my_logo', fotoLogo);
        formData.append('nombreCampus', $("#nombreCampus").val());
        formData.append('ubicacionCampus', $("#ubicacionCampus").val());
        formData.append('tipoCampus', $("#tipoCampus").val());
        formData.append('alojamientoCampus', $("#alojamientoCampus").val());
        formData.append('descripcionCampus', $("#descripcionCampus").val());
        formData.append('nombreCampus', $("#nombreCampus").val());
        formData.append('statusCampus', $("#statusCampus").val());
        formData.append('preparatoria', 1);
        var  l = $("#nombreCampus").val();

      }else{

      }



      event.preventDefault();
      clearForm('campusForm');
      _url = "";
      _method = "";
      var _id = $(document).find('#id').val();
      console.info($(document).find("#campusForm").serialize());
      if(_id>0){
         console.info("llego Put");
         _url = _principalURL()+"PreparatoriaCampus/api/preparatoriacampusfhoto/"+$(document).find('#id').val();
        _method = "PUT";
        _text = 'Los datos fueron editados correctamente';
      }else{
          console.info("llego Post");
          _url = _principalURL()+"PreparatoriaCampus/api/preparatoriacampusfhoto/";
        _method = "POST";
          _text = 'Los datos fueron guardados correctamente';

      }
      $.ajax({
        url:_url,
        method: _method,
        headers : {
          'X-API-KEY':'ANGLOKEY'
        },
        data: formData,
        contentType: false,
        processData: false,
        success : function(_response){
          response= JSON.stringify(_response);
          if(_response.status == "error"){

            tostada('error','Revise sus datos ');
              $.each(_response.validations, function(key,message){
                $(document).find('#'+key).addClass('is-invalid').after('<div class="invalid-feedback">'+message+'</div>');
               });
          }else{
            clearForm('campusForm');
            tostada('success','Los datos se an guardado correctamente ');
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

    });

    $(document).on('click','.btn-delete',function(){
      console.info("llego delete");
      $.ajax({
        "url" : _principalURL()+"Preparatoria/api/preparatoria/id/"+$(document).find('#id').val(),
        "method" : "DELETE",
        headers : {
          'X-API-KEY':'ANGLOKEY'
        },
        success : function(_response){

          if(_response.status == "error"){
            clearForm('campusForm');
            tostada('error','Los datos no se an borrado correctamente ');


          }else{
            clearForm('campusForm');
           tostada('success','Los datos se an borrado correctamente ');


          }
        },
        error : function(){

        }

      });
    });
    $(document).on('click','.btn-cancel',function(){
      clearForm('campusForm');
    $('#exampleModalPrimary').modal('hide');
    });

  /*this method is implemented to clear the modal */

  function clearForm(_id){
    console.info("llamaron");
    $(document).find('#'+_id).find('input,select').each(function(e){
        $(this).removeClass('is-invalid');
        $(this).next('div').remove();

    });
  }
  });


</script>
