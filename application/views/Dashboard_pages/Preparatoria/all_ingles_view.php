<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  <input accept="image/*" id="fotoAlumno" type="file">
    <input type="text" class="form-control" name="nombrePreparatoria" id="nombre_Preparatoria" placeholder="Nombre">
  <button id="guardarImagen">Subir</button>
<script src="<?=base_url('resources/assets/JS/ServicesJS.js');?>"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
// <script>
// $(document).ready(function() {
//
//     $(".upload").on('click', function() {
//       var $fotoAlumno = $("#my_file")
//       var archivos = $fotoAlumno[0].files;
//       _url = _principalURL()+"PreparatoriaCampus/api/files";
//       var foto = archivos[0]; //Sólo queremos la primera imagen, ya que el usuario pudo seleccionar más
//       var lector = new FileReader();
//       //Ojo: En este caso 'foto' será el nombre con el que recibiremos el archivo en el servidor
//
//       console.info(archivos);
//         /* $.ajax({
//             url: 'upload.php',
//             type: 'post',
//             data: formData,
//             contentType: false,
//             processData: false,
//             success: function(response) {
//                 if (response != 0) {
//                     $(".card-img-top").attr("src", response);
//                 } else {
//                     alert('Formato de imagen incorrecto.');
//                 }
//             }
//         }); */
//         $.ajax({
//           url:_url,
//           method: 'POST',
//           dataType: 'text',
//           headers : {
//             'X-API-KEY':'ANGLOKEY'
//           },
//           data: archivos,
//         processData: false,
//         contentType: false,
//           success : function(_response){
//             response= JSON.stringify(_response);
//             if(_response.status == "error"){
//               console.log(_response);
//               console.log(data);
//             }else{
//             console.log(_response);
//             }
//
//           },
//           error : function(err){
//
//
//           }
//         });
//         return false;
//     });
// });
// </script>
<script>
$(function() {
  var $fotoAlumno = $("#fotoAlumno"),
    $btnGuardar = $("#guardarImagen");
    var $nombre = $("#nombrePreparatoria");


  $btnGuardar.click(function() {
    var formData = new FormData();
    var archivos = $fotoAlumno[0].files;
    if (archivos.length >= 0) {
      var foto = archivos[0]; //Sólo queremos la primera imagen, ya que el usuario pudo seleccionar más
      var lector = new FileReader();

      formData.append('my_file', foto);
      formData.append('nombre', $("#nombrePreparatoria").val());
      console.log(formData);
      $.ajax({
        url: _principalURL()+"PreparatoriaCampus/api/files",
        data: formData,
        type: 'POST',
        headers : {
         'X-API-KEY':'ANGLOKEY'
        },
        contentType: false,
        processData: false,
        success : function(_response){
          response= JSON.stringify(_response);
          if(_response.status == "error"){
            console.log(_response);
            tostada('error','Revise sus datos ');
              $.each(_response.validations, function(key,message){
                $(document).find('#'+key).addClass('is-invalid').after('<div class="invalid-feedback">'+message+'</div>');
               });
          }else{
            console.info(_response);
          }

        },
        error : function(error){
            console.log(error);

        }

      });
    }
  });
});
</script>
  </body>


</html>
