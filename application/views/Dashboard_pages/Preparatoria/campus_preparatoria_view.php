<link rel="stylesheet" href="cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.1/css/buttons.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

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
                <th>Nombre</th>
                <th>Fundacion</th>
                <th>Status</th>
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
        <h4 class="modal-title">Preparatoria</h4>
      </div>
      	<form id="prepaForm">
      <div class="modal-body form-row">

          <div class="col-xl-4 form-group">
            <label>Nombre</label>
            <input type="text" class="form-control" name="nombrePreparatoria" id="nombre_Preparatoria" placeholder="Nombre">
          </div>
          <div class="col-xl-4 form-group">
            <label>Status</label>
              <select class="form-control" name="statusPreparatoria" id="status_Preparatoria" data-plugin="selectpicker">

                <option  value="Activo">Activo</option>
                <option value="Inactivo" >Inactivo</option>
                <option value="Pendiente">Pendiente</option>

              </select>

          </div>
          <div class="col-xl-4 form-group">
            <label>Fundación</label>
            <input type="text" class="form-control" name="fundacionPreparatoria" id="fundacion_Preparatoria" placeholder="Fundación">
          </div>
          <!-- <div class="col-md-12 float-right">
            <button class="btn btn-primary btn-outline" data-dismiss="modal" type="button">Create</button>
          </div> -->

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
  <?php if(@$idAdmin){ ?>
    console.info(<?=@$idAdmin?>);
 <?php }else { ?>
tostada('error','');
 <?php } ?>

  /*This function is emplemented to show data in the table */

    _url = _principalURL()+"Preparatoria/api/preparatoria/";
    var table=$(document).find('#example').DataTable({
      dom: 'Bfrtip',
      buttons: [
        'copy', 'csv', 'excel', 'pdf', 'print'
      ],
      ajax: {
        url : _url,
        method : 'get',
        dataSrc : 'data',
        headers : {
          'X-API-KEY':'ANGLOKEY'
        }
      },
      columns : [
        {data: 'nombre_Preparatoria'},
        {data: 'fundacion_Preparatoria'},
        {data: 'status_Preparatoria'},
        {data: '',defaultContent:'<a href="<?=base_url("Admin/edit_Admin/add/")?>"+response.data[i].idAdmin+" id="btnE"+response.data[i].idAdmin+"" class="edit-control btn btn-success btn-xs"  data-toggle="tooltip" title="Edit"> <i class="icon wb-plus"> </i>Campus</a> ' }
        ]
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
            console.log(_response.data);
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
            $(document).find('#prepaForm').append(
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
    $(document).on('submit','#prepaForm',function(event){


      event.preventDefault();
      clearForm('prepaForm');
      _url = "";
      _method = "";
      var _id = $(document).find('#id').val();
      console.info($(document).find("#prepaForm").serialize());
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
      $.ajax({
        url:_url,
        method: _method,
        headers : {
          'X-API-KEY':'ANGLOKEY'
        },
        data: $(document).find("#prepaForm").serialize(),
        success : function(_response){
          response= JSON.stringify(_response);
          if(_response.status == "error"){
            console.log(_response);
            tostada('error','Revise sus datos ');
              $.each(_response.validations, function(key,message){
                $(document).find('#'+key).addClass('is-invalid').after('<div class="invalid-feedback">'+message+'</div>');
               });
          }else{
            clearForm('prepaForm');
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
            clearForm('prepaForm');
            tostada('error','Los datos no se an borrado correctamente ');


          }else{
            clearForm('prepaForm');
           tostada('success','Los datos se an borrado correctamente ');


          }
        },
        error : function(){

        }

      });
    });
    $(document).on('click','.btn-cancel',function(){
      clearForm('prepaForm');
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
