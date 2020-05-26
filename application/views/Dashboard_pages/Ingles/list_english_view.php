<link rel="stylesheet" href="cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.1/css/buttons.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="<?=base_url('resources/assets/Informativa/css/files.css');?>"/>



  <div class="page">
    <div class="page-header">
      <h1 align="center" class="page-title">Escuela de Inglés</h1>
      <h1 class="page-title">Lista de estudiantes nuevos</h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="../index.html">Home</a></li>
        <li class="breadcrumb-item"><a href="javascript:void(0)">Tables</a></li>
        <li class="breadcrumb-item active">DataTables</li>
      </ol>
      <div class="page-header-actions">
        <a class="btn btn-sm btn-default btn-outline btn-round" href="https://datatables.net/" target="_blank">
        <i class="icon wb-link" aria-hidden="true"></i>
        <span class="hidden-sm-down">Official Website</span>
      </a>
      </div>
    </div>
      <div class="page-content">
      <!-- Panel Table Add Row -->
      <div class="panel">

        <div class="panel-body">

          <table class="table table-bordered table-hover table-striped" cellspacing="0" id="example">
            <thead align="center">
              <tr>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Género</th>
                <th>email</th>
                <th>Teléfono</th>
                <th>Ciudad</th>
                <th>Opciones</th>
              </tr>
            </thead>
            <tbody align="center">

            </tbody>
          </table>
        </div>
      </div>
      <!-- End Panel Table Add Row -->
      <h2>Contacto</h2>
      <form action="<?=base_url("Dashboard/Ingles/ListEnglish/enviar")?>" method="post">
          Correo electronico: <br/>
          <input type="email" name="email" /><br/>
          Asunto: <br/>
          <input type="text" name="asunto" /><br/>
          Mensaje:<br/>
          <textarea name="mensaje"></textarea><br/>
          <input type="submit" name="submit" value="Enviar"/>
      </form>
      <?php
      if($this->session->flashdata('envio')){
          echo $this->session->flashdata('envio');
      }
      ?>





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
    _url = _principalURL()+"/Ingles/api/englishnewStudents";

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
  					_html +="<tr>";

  					        _html +="<td>"+response.data[i].firstNamePersona+"</td>";
  			    				_html +="<td>"+response.data[i].lastNamePersona+"</td>";
  									_html +="<td>"+response.data[i].generoPersona+"</td>";
  			    				_html +="<td>"+response.data[i].emailUsuario+"</td>";
  			    				_html +="<td>"+response.data[i].telefonoAspirante+"</td>";
  			    				_html +="<td>"+response.data[i].ciudadAspirante+"</td>";
  			    				_html +="<td> <a href='<?=base_url('Dashboard/Ingles/AspiranteInfo/info/')?>"+response.data[i].idAspirante+"' id='btnE"+response.data[i].id+"' class='edit-control btn btn-success btn-xs'  data-toggle='tooltip' > <i class='icon wb-plus'></i>Más Información</a>  </td>";
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

      // var table=$(document).find('#example').DataTable({
      //     dom: 'Bfrtip',
      //     buttons: [
      //         'copy', 'csv', 'excel', 'pdf', 'print'
      //     ],
      //   });
      // console.log(table);

    // _url = _principalURL()+"Preparatoria/api/preparatoria/";
    // var table=$(document).find('#example').DataTable({
    //   dom: 'Bfrtip',
    //   buttons: [
    //     'copy', 'csv', 'excel', 'pdf', 'print'
    //   ],
    //   ajax: {
    //     url : _url,
    //     method : 'get',
    //     dataSrc : 'data',
    //     headers : {
    //       'X-API-KEY':'ANGLOKEY'
    //     }
    //   },
    //   columns : [
    //     {data: 'nombre_Preparatoria'},
    //     {data: 'fundacion_Preparatoria'},
    //     {data: 'status_Preparatoria'},
    //     {data: '',defaultContent:'<a href="<?=base_url("Admin/edit_Admin/add/")?>"+response.data[i].idAdmin+" id="btnE"+response.data[i].idAdmin+"" class="edit-control btn btn-success btn-xs"  data-toggle="tooltip" title="Edit"> <i class="icon wb-plus"> </i>Campus</a> ' }
    //     ]
    //   });



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

        if(_id>0){
           console.info("llego Put");
           _url = _principalURL()+"Preparatoria/api/preparatoria/"+$(document).find('#id').val();
          _method = "PUT";
          _text = 'Los datos fueron editados correctamente';
        }else{
            console.info("llego Post");
            _url = _principalURL()+"Preparatoria/api/preparatoria/";
          _method = "POST";
            _text = 'Los datos fueron guardados correctamente';

        }

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
      // $.ajax({
      //   url:_url,
      //   method: _method,
      //   headers : {
      //     'X-API-KEY':'ANGLOKEY'
      //   },
      //   data: $(document).find("#campusForm").serialize(),
      //   success : function(_response){
      //     response= JSON.stringify(_response);
      //     if(_response.status == "error"){
      //       console.log(_response);
      //       tostada('error','Revise sus datos ');
      //         $.each(_response.validations, function(key,message){
      //           $(document).find('#'+key).addClass('is-invalid').after('<div class="invalid-feedback">'+message+'</div>');
      //          });
      //     }else{
      //       clearForm('campusForm');
      //       tostada('success','Los datos se an guardado correctamente ');
      //     }
      //
      //   },
      //   error : function(err){
      //       response= JSON.stringify(err.responseText);
      //       $(document).find('#responseText').html(
      //         '<div class="alert alert-success" role="alert">'
      //         +response+
      //         '</div>'
      //       );
      //       setTimeout(function(){
      //           $(document).find('#responseText').html('');
      //       }, 3000);
      //
      //   }
      // });
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
