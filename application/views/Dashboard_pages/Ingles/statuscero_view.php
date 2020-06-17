<link rel="stylesheet" href="cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.1/css/buttons.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="<?=base_url('resources/assets/Informativa/css/files.css');?>"/>
<style media="screen">
@media screen and (max-width: 600px) {
     table {
         width:100%;
     }
     thead {
         display: none;
     }
     tr:nth-of-type(2n) {
         background-color: inherit;
     }
     tr td:first-child {
         background: #f0f0f0;
         font-weight:bold;
         font-size:1.3em;
     }
     tbody td {
         display: block;
         text-align:center;
     }
     tbody td:before {
         content: attr(data-th);
         display: block;
         text-align:center;
     }
}

</style>


  <div class="page">
    <div class="page-header">
      <h1 align="center" class="page-title">Escuela de Inglés</h1>
      <h1 class="page-title">Lista de estudiantes Status 0</h1>

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
            <thead >
              <tr>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Género</th>
                <th>email</th>>
                <th>Opciones</th>
              </tr>
            </thead>
            <tbody align="center">

            </tbody>
          </table>
        </div>
      </div>
      <!-- End Panel Table Add Row -->






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
    _url = _principalURL()+"/Ingles/api/aspiranteCero";

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
            var hash=response.data[i].idAspirante;
  					_html +="<tr>";

  					        _html +="<td>"+response.data[i].firstNamePersona+"</td>";
  			    				_html +="<td>"+response.data[i].lastNamePersona+"</td>";
  									_html +="<td>"+response.data[i].generoPersona+"</td>";
  			    				_html +="<td>"+response.data[i].emailUsuario+"</td>";
  			    				_html +="<td> <a href='<?=base_url('Dashboard/Ingles/AspiranteInfo/info/')?>"+response.data[i].idAspirante+"' id='btnE"+response.data[i].id+"' class='edit-control btn btn-success btn-xs'  data-toggle='tooltip' > <i class='icon wb-plus'></i>Más Información</a>   <button type='button' class='edit-control btn btn-warning btn-xs'  data-toggle='tooltip'><i class='icon fa-envelope'></i></button>  </td>";
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

  });
</script>
