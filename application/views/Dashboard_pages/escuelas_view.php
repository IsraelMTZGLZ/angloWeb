<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
<!-- Default theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
<!-- Semantic UI theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
<!-- Bootstrap theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>
<link rel="stylesheet" href="cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.1/css/buttons.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    
<div class="page">
    <div class="page-header">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="Home">Home</a></li>
        <li class="breadcrumb-item active">Oferta Educativa</li>
      </ol>
      <h1 class="page-title">Oferta Educativa</h1>
      
    </div>
   
    <!-- Page Content -->
    <div class="page-content container-fluid">
    
    <div class="row" data-plugin="matchHeight" data-by-row="true">

        <div class="col-xxl-12 col-xl-12">
            
          <!-- Panel Traffic -->
          <div class="card card-shadow example-responsive" id="widgetLinearea">
            <div class="card-block">
            
            <div class="row">
                  
              <div class="col-lg-5"  style="margin-right: 100px;">
                <div class="card card-shadow text-center">
                  <div class="card-block">
                    <img class="card-img-top" src="<?=base_url('resources/assets/Anglo/universidades.jpg');?>" alt="Imagen Institucion">
                    <h4 class="profile-user">Universidades</h4>
                    <p class="profile-job">Da click para ver todas las universidades disponibles</p>
                  </div>
                  <div class="card-footer">
                    <div class="row no-space">
                      <div class="col-12">
                        <button type="button" class="btn btn-primary universidades">Ver</button>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-5">
                <div class="card card-shadow text-center">
                  <div class="card-block">
                    <img class="card-img-top" src="<?=base_url('resources/assets/Anglo/preparatorias.jpg');?>" alt="Imagen Institucion" >
                    <h4 class="profile-user">Preparatorias</h4>
                    <p class="profile-job">Da click para ver todas las preparatorias disponibles</p>
                  </div>
                  <div class="card-footer">
                    <div class="row no-space">
                      <div class="col-12">
                        <button type="button" class="btn btn-primary preparatorias">Ver</button>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
              

            </div>
          </div>
        </div>
      </div>

      
  </div>

<div class="row uni" style="visibility: hidden;display: none">

<div class="col-xxl-12 col-xl-12">
    
  <!-- Panel Traffic -->
  <div class="card card-shadow example-responsive">
    <div class="card-block">
    <div class="row" style="text-align: center;display: block;margin-left: auto;margin-right: auto;">
      <h1>Universidades</h1>
    </div>
    <div class="row" style="margin-bottom: 25px;">
      <div class="col-xl-4">
        <label for="test">Filtrar por facultades</label>
        <select class="form-control" data-plugin="select2" name="facultades" id="facultades">
          <option value="" disabled selected>Elige una opcion</option>
          <?php for( $i=0 ; $i < count($facultades); $i++) {?>
            <option value="<?=@$facultades[$i]['idFacultad'];?>"><?=@$facultades[$i]['nombreFacultad'];?></option>
          <?php } ;?>
        </select>
      </div>
      <div class="col-xl-4"  style="text-align: center;display: block;margin-left: auto;margin-right: auto;">
        <br>
        <button type="button" class="btn btn-primary btn-lg btn-deleteFiltro">Eliminar filtros</button>
      </div>
      <div class="col-xl-4">
        <label for="test">Filtrar por universidades</label>
        <select class="form-control" data-plugin="select2" name="universidadesFiltro" id="universidadesFiltro">
          <option value="" disabled selected>Elige una opcion</option>
          <?php for( $i=0 ; $i < count($universidades); $i++) {?>
            <option value="<?=@$universidades[$i]['intitucion']['idInstitucion'];?>"><?=@$universidades[$i]['intitucion']['nombreInstitucion']?></option>
          <?php } ?>
        </select>
      </div>
    </div>
    <hr style="border: 0; height: 12px; box-shadow: inset 0 12px 12px -12px slateblue;width: 60%">
    <div class="row divUni">
      <?php for( $i=0 ; $i < count($universidades); $i++) {?>
        <div class="col-lg-4">
          <div class="card card-shadow text-center">
            <div class="card-block">
              <img class="card-img-top" src="<?=@$universidades[$i]['intitucion']['logoInstitucion']?>" alt="Imagen Institucion" style="width: 70%">
              <h4 class="profile-user"><?=@$universidades[$i]['intitucion']['nombreInstitucion']?></h4>
              <ul class="list-group list-group-bordered">
                <li class="list-group-item list-group-item-action active">Lista de Facultades</li>
                <?php for( $j=0 ; $j < count($universidades[$i]['Facultades']); $j++) {?>
                  <li  class="list-group-item"><?=@$universidades[$i]['Facultades'][$j]['nombreFacultad'];?></li>
                <?php } ?>
              </ul>
            </div>
          </div>
        </div>
      <?php } ?>

    </div>
  </div>
</div>


</div>
</div>

<div class="row prepa" style="visibility: hidden;display: none;">

<div class="col-xxl-12 col-xl-12">
    
  <!-- Panel Traffic -->
  <div class="card card-shadow example-responsive">
    <div class="card-block">
    <div class="row" style="text-align: center;display: block;margin-left: auto;margin-right: auto;">
      <h1>Preparatorias</h1>
    </div>
    <div class="row" style="margin-bottom: 25px;">
      <div class="col-xl-4">
        <label for="test">Filtrar por tipo de estudio</label>
        <select class="form-control" data-plugin="select2" name="tipoEstudio" id="tipoEstudio">
          <option value="" disabled selected>Elige una opcion</option>
          <?php for( $i=0 ; $i < count($tipoEstudios); $i++) {?>
            <option value="<?=@$tipoEstudios[$i]['idTipoEstudio'];?>"><?=@$tipoEstudios[$i]['nombreTipoEstudio'];?></option>
          <?php } ;?>
        </select>
      </div>
      <div class="col-xl-4">
        <label for="test">Filtrar por tipo de alojamiento</label>
        <select class="form-control" data-plugin="select2" name="tipoAlojamiento" id="tipoAlojamiento">
          <option value="" disabled selected>Elige una opcion</option>
          <?php for( $i=0 ; $i < count($tipoAlojamientos); $i++) {?>
            <option value="<?=@$tipoAlojamientos[$i]['idTipoAlojamiento'];?>"><?=@$tipoAlojamientos[$i]['nombreTipoAlojamiento'];?></option>
          <?php } ;?>
        </select>
      </div>
      <div class="col-xl-4">
        <label for="test">Filtrar por preparatorias</label>
        <select class="form-control" data-plugin="select2" name="preparatoriasFiltro" id="preparatoriasFiltro">
          <option value="" disabled selected>Elige una opcion</option>
          <?php for( $i=0 ; $i < count($preparatorias); $i++) {?>
            <option value="<?=@$preparatorias[$i]['institucion']['idInstitucion'];?>"><?=@$preparatorias[$i]['institucion']['nombreInstitucion']?></option>
          <?php } ?>
        </select>
      </div>
    </div>
    <div class="row" style="text-align: center;display: block;margin-left: auto;margin-right: auto;">
      <button type="button" class="btn btn-primary btn-lg btn-deleteFiltro">Eliminar filtros</button>
    </div>
    <br>
    <hr style="border: 0; height: 12px; box-shadow: inset 0 12px 12px -12px slateblue;width: 60%">
    <div class="row divPrepa">
      <?php for( $i=0 ; $i < count($preparatorias); $i++) {?>
        <div class="col-lg-6">
          <div class="card card-shadow text-center">
            <div class="card-block">
              <img class="card-img-top" src="<?=@$preparatorias[$i]['institucion']['logoInstitucion']?>" alt="Imagen Institucion" style="width: 40%">
              <h4 class="profile-user"><?=@$preparatorias[$i]['institucion']['nombreInstitucion']?></h4>
              <div class="row">
                <div class="col-lg-6">
                  <ul class="list-group list-group-bordered">
                    <li class="list-group-item list-group-item-action active">Lista de Tipos de estudios</li>
                    <?php for( $j=0 ; $j < count($preparatorias[$i]['tipoEstudios']); $j++) {?>
                      <li  class="list-group-item"><?=@$preparatorias[$i]['tipoEstudios'][$j]['nombreTipoEstudio'];?></li>
                    <?php } ?>
                  </ul>
                </div>
                <div class="col-lg-6">
                  <ul class="list-group list-group-bordered">
                    <li class="list-group-item list-group-item-action active">Lista de Tipos de estudios</li>
                    <?php for( $j=0 ; $j < count($preparatorias[$i]['tipoAlojamiento']); $j++) {?>
                      <li  class="list-group-item"><?=@$preparatorias[$i]['tipoAlojamiento'][$j]['nombreTipoAlojamiento'];?></li>
                    <?php } ?>
                  </ul>
                </div>
              </div>
              
            </div>
          </div>
        </div>
      <?php } ?>

    </div>
  </div>
</div>


</div>
</div>

</div>

   

    
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="<?=base_url('resources/assets/JS/ServicesJS.js');?>"></script>
<script src="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

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
<script>
    $(document).ready(function() 
    {
      $(document).on('click','.universidades',function (){
        //$(document).find('.divUni').empty();
        //$(document).find('.cardUni').css('background','white');
        //hacer visible el contenedor
        $('.uni').show();
        $('.uni').css('visibility', 'visible');

        //hacer invisible prepa
        $('.prepa').hide();
        $('.prepa').css('visibility', 'hidden');
        
      });

      $(document).on('click','.btn-deleteFiltro',function(){
        window.location.reload();
      });

      $(document).on('change','#facultades',function(){
        $(document).find('.divUni').empty();
        var facultadChoosed = this.value;
        _url = _principalURL()+"Universidad/api/universidadByFacultad/id/"+facultadChoosed;
        $.ajax({
          url: _url,
          method : 'GET',
          headers : {
          'X-API-KEY':'ANGLOKEY'
          },
          data: null,
          success : function(_response){
            var universidades = _response.data;
            if(universidades){
              for (let i = 0; i < universidades.length; i++) {
                $.ajax({
                  url: _principalURL()+"Universidad/api/universidadByInstitucion/id/"+universidades[i]['idInstitucion'],
                  method : 'GET',
                  headers : {
                  'X-API-KEY':'ANGLOKEY'
                  },
                  data: null,
                  success : function(_response){
                    var facultades = _response.data;
                    //console.info(facultades);
                    
                    $(document).find('.divUni').append('<div class="col-lg-4">'+
                      '<div class="card card-shadow text-center" style="">'+
                        '<div class="card-block">'+
                          '<img class="card-img-top" src="'+universidades[i]['logoInstitucion']+'" alt="Imagen Institucion" style="width: 70%">'+
                          '<h4 class="profile-user">'+universidades[i]['nombreInstitucion']+'</h4>'+
                          '<ul class="list-group list-group-bordered '+universidades[i]['idInstitucion']+'">'+
                            '<li class="list-group-item list-group-item-action active">Lista de Facultades</li>'+
                          '</ul>'+
                        '</div>'+
                      '</div>'+
                    '</div>');
                    for (let j = 0; j < facultades.length; j++) {
                      $(document).find('.'+facultades[j]['idInstitucion']).append('<li  class="list-group-item">'+facultades[j]['nombreFacultad']+'</li>');
                    }
                  },error : function(err){
                  
                  }
                });
              }
            }
          },error : function(err){
          
          }
        });
      });

      $(document).on('change','#universidadesFiltro',function(){
        $(document).find('.divUni').empty();
        var uniChoosed = this.value;
        _url = _principalURL()+"Universidad/api/universidadOrdenByInstitucionWhereInstitucion/id/"+uniChoosed;
        $.ajax({
          url: _url,
          method : 'GET',
          headers : {
          'X-API-KEY':'ANGLOKEY'
          },
          data: null,
          success : function(_response){
            var universidades = _response.data;
            if(universidades){
              for (let i = 0; i < universidades.length; i++) {
                $.ajax({
                  url: _principalURL()+"Universidad/api/universidadByInstitucion/id/"+universidades[i]['idInstitucion'],
                  method : 'GET',
                  headers : {
                  'X-API-KEY':'ANGLOKEY'
                  },
                  data: null,
                  success : function(_response){
                    var facultades = _response.data;
                    //console.info(facultades);
                    
                    $(document).find('.divUni').append('<div class="col-lg-4">'+
                      '<div class="card card-shadow text-center" style="">'+
                        '<div class="card-block">'+
                          '<img class="card-img-top" src="'+universidades[i]['logoInstitucion']+'" alt="Imagen Institucion" style="width: 70%">'+
                          '<h4 class="profile-user">'+universidades[i]['nombreInstitucion']+'</h4>'+
                          '<ul class="list-group list-group-bordered '+universidades[i]['idInstitucion']+'">'+
                            '<li class="list-group-item list-group-item-action active">Lista de Facultades</li>'+
                          '</ul>'+
                        '</div>'+
                      '</div>'+
                    '</div>');
                    for (let j = 0; j < facultades.length; j++) {
                      $(document).find('.'+facultades[j]['idInstitucion']).append('<li  class="list-group-item">'+facultades[j]['nombreFacultad']+'</li>');
                    }
                  },error : function(err){
                  
                  }
                });
              }
            }
          },error : function(err){
          
          }
        });
      });

      $(document).on('click','.preparatorias',function (){
        //hacer visible el contenedor
        $('.prepa').show();
        $('.prepa').css('visibility', 'visible');
        
        //hacer invisible el div de uni
        $('.uni').hide();
        $('.uni').css('visibility', 'hidden');
      });

      $(document).on('change','#tipoEstudio',function (){
        $(document).find('.divPrepa').empty();
        var tipoEstudio = this.value;
        _url = _principalURL()+"Preparatoria/api/preparatoriaBYtipoEstudio/id/"+tipoEstudio;
        $.ajax({
          url: _url,
          method : 'GET',
          headers : {
          'X-API-KEY':'ANGLOKEY'
          },
          data: null,
          success : function(_response){
            var preparatorias = _response.data;
            if(preparatorias){
              for (let i = 0; i < preparatorias.length; i++) {
                $.ajax({
                  url: _principalURL()+"Preparatoria/api/preparatoriasBYInstitucionTiposEstudios/id/"+preparatorias[i]['idInstitucion'],
                  method : 'GET',
                  headers : {
                  'X-API-KEY':'ANGLOKEY'
                  },
                  data: null,
                  success : function(_response){
                    var tipoEstudios = _response.data;
                    //console.info(facultades);
                    $.ajax({
                      url: _principalURL()+"Preparatoria/api/preparatoriasBYInstitucionTiposAlojamientos/id/"+preparatorias[i]['idInstitucion'],
                      method : 'GET',
                      headers : {
                      'X-API-KEY':'ANGLOKEY'
                      },
                      data: null,
                      success : function(_response){
                        var tipoAlojamiento = _response.data;
                        //console.info(facultades);
                        
                        $(document).find('.divPrepa').append('<div class="col-lg-6">'+
                          '<div class="card card-shadow text-center">'+
                            '<div class="card-block">'+
                              '<img class="card-img-top" src="'+preparatorias[i]['logoInstitucion']+'" alt="Imagen Institucion" style="width: 40%">'+
                              '<h4 class="profile-user">'+preparatorias[i]['nombreInstitucion']+'</h4>'+
                              '<div class="row">'+
                                '<div class="col-lg-6">'+
                                  '<ul class="list-group list-group-bordered '+preparatorias[i]['idInstitucion']+'">'+
                                    '<li class="list-group-item list-group-item-action active">Lista de Tipos de estudios</li>'+
                                  '</ul>'+
                                '</div>'+
                                '<div class="col-lg-6">'+
                                  '<ul class="list-group list-group-bordered alojamiento-'+preparatorias[i]['idInstitucion']+'">'+
                                    '<li class="list-group-item list-group-item-action active">Lista de Tipos de estudios</li>'+
                                  '</ul>'+
                                '</div>'+
                              '</div>'+
                            '</div>'+
                          '</div>'+
                        '</div>');
                        for (let j = 0; j < tipoEstudios.length; j++) {
                          $(document).find('.'+tipoEstudios[j]['idInstitucion']).append('<li  class="list-group-item">'+tipoEstudios[j]['nombreTipoEstudio']+'</li>');
                        }
                        for (let k = 0; k < tipoAlojamiento.length; k++) {
                          $(document).find('.alojamiento-'+tipoAlojamiento[k]['idInstitucion']).append('<li  class="list-group-item">'+tipoAlojamiento[k]['nombreTipoAlojamiento']+'</li>');
                        }
                      },error : function(err){
                      
                      }
                    });
                  },error : function(err){
                  
                  }
                });
              }
            }
          },error : function(err){
          
          }
        });
      });

      $(document).on('change','#tipoAlojamiento',function (){
        $(document).find('.divPrepa').empty();
        var tipoAlo = this.value;
        _url = _principalURL()+"Preparatoria/api/preparatoriaBYtipoAlojamiento/id/"+tipoAlo;
        $.ajax({
          url: _url,
          method : 'GET',
          headers : {
          'X-API-KEY':'ANGLOKEY'
          },
          data: null,
          success : function(_response){
            var preparatorias = _response.data;
            if(preparatorias){
              for (let i = 0; i < preparatorias.length; i++) {
                $.ajax({
                  url: _principalURL()+"Preparatoria/api/preparatoriasBYInstitucionTiposEstudios/id/"+preparatorias[i]['idInstitucion'],
                  method : 'GET',
                  headers : {
                  'X-API-KEY':'ANGLOKEY'
                  },
                  data: null,
                  success : function(_response){
                    var tipoEstudios = _response.data;
                    //console.info(facultades);
                    $.ajax({
                      url: _principalURL()+"Preparatoria/api/preparatoriasBYInstitucionTiposAlojamientos/id/"+preparatorias[i]['idInstitucion'],
                      method : 'GET',
                      headers : {
                      'X-API-KEY':'ANGLOKEY'
                      },
                      data: null,
                      success : function(_response){
                        var tipoAlojamiento = _response.data;
                        //console.info(facultades);
                        
                        $(document).find('.divPrepa').append('<div class="col-lg-6">'+
                          '<div class="card card-shadow text-center">'+
                            '<div class="card-block">'+
                              '<img class="card-img-top" src="'+preparatorias[i]['logoInstitucion']+'" alt="Imagen Institucion" style="width: 40%">'+
                              '<h4 class="profile-user">'+preparatorias[i]['nombreInstitucion']+'</h4>'+
                              '<div class="row">'+
                                '<div class="col-lg-6">'+
                                  '<ul class="list-group list-group-bordered '+preparatorias[i]['idInstitucion']+'">'+
                                    '<li class="list-group-item list-group-item-action active">Lista de Tipos de estudios</li>'+
                                  '</ul>'+
                                '</div>'+
                                '<div class="col-lg-6">'+
                                  '<ul class="list-group list-group-bordered alojamiento-'+preparatorias[i]['idInstitucion']+'">'+
                                    '<li class="list-group-item list-group-item-action active">Lista de Tipos de estudios</li>'+
                                  '</ul>'+
                                '</div>'+
                              '</div>'+
                            '</div>'+
                          '</div>'+
                        '</div>');
                        for (let j = 0; j < tipoEstudios.length; j++) {
                          $(document).find('.'+tipoEstudios[j]['idInstitucion']).append('<li  class="list-group-item">'+tipoEstudios[j]['nombreTipoEstudio']+'</li>');
                        }
                        for (let k = 0; k < tipoAlojamiento.length; k++) {
                          $(document).find('.alojamiento-'+tipoAlojamiento[k]['idInstitucion']).append('<li  class="list-group-item">'+tipoAlojamiento[k]['nombreTipoAlojamiento']+'</li>');
                        }
                      },error : function(err){
                      
                      }
                    });
                  },error : function(err){
                  
                  }
                });
              }
            }
          },error : function(err){
          
          }
        });
      });

      $(document).on('change','#preparatoriasFiltro',function (){
        $(document).find('.divPrepa').empty();
        var pre = this.value;
        _url = _principalURL()+"Preparatoria/api/preparatoriaBYIns/id/"+pre;
        $.ajax({
          url: _url,
          method : 'GET',
          headers : {
          'X-API-KEY':'ANGLOKEY'
          },
          data: null,
          success : function(_response){
            var preparatorias = _response.data;
            if(preparatorias){
              for (let i = 0; i < preparatorias.length; i++) {
                $.ajax({
                  url: _principalURL()+"Preparatoria/api/preparatoriasBYInstitucionTiposEstudios/id/"+preparatorias[i]['idInstitucion'],
                  method : 'GET',
                  headers : {
                  'X-API-KEY':'ANGLOKEY'
                  },
                  data: null,
                  success : function(_response){
                    var tipoEstudios = _response.data;
                    //console.info(facultades);
                    $.ajax({
                      url: _principalURL()+"Preparatoria/api/preparatoriasBYInstitucionTiposAlojamientos/id/"+preparatorias[i]['idInstitucion'],
                      method : 'GET',
                      headers : {
                      'X-API-KEY':'ANGLOKEY'
                      },
                      data: null,
                      success : function(_response){
                        var tipoAlojamiento = _response.data;
                        //console.info(facultades);
                        
                        $(document).find('.divPrepa').append('<div class="col-lg-6">'+
                          '<div class="card card-shadow text-center">'+
                            '<div class="card-block">'+
                              '<img class="card-img-top" src="'+preparatorias[i]['logoInstitucion']+'" alt="Imagen Institucion" style="width: 40%">'+
                              '<h4 class="profile-user">'+preparatorias[i]['nombreInstitucion']+'</h4>'+
                              '<div class="row">'+
                                '<div class="col-lg-6">'+
                                  '<ul class="list-group list-group-bordered '+preparatorias[i]['idInstitucion']+'">'+
                                    '<li class="list-group-item list-group-item-action active">Lista de Tipos de estudios</li>'+
                                  '</ul>'+
                                '</div>'+
                                '<div class="col-lg-6">'+
                                  '<ul class="list-group list-group-bordered alojamiento-'+preparatorias[i]['idInstitucion']+'">'+
                                    '<li class="list-group-item list-group-item-action active">Lista de Tipos de estudios</li>'+
                                  '</ul>'+
                                '</div>'+
                              '</div>'+
                            '</div>'+
                          '</div>'+
                        '</div>');
                        for (let j = 0; j < tipoEstudios.length; j++) {
                          $(document).find('.'+tipoEstudios[j]['idInstitucion']).append('<li  class="list-group-item">'+tipoEstudios[j]['nombreTipoEstudio']+'</li>');
                        }
                        for (let k = 0; k < tipoAlojamiento.length; k++) {
                          $(document).find('.alojamiento-'+tipoAlojamiento[k]['idInstitucion']).append('<li  class="list-group-item">'+tipoAlojamiento[k]['nombreTipoAlojamiento']+'</li>');
                        }
                      },error : function(err){
                      
                      }
                    });
                  },error : function(err){
                  
                  }
                });
              }
            }
          },error : function(err){
          
          }
        });
      });

    });
</script>