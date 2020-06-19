
<div class="page-content">
      <!-- Panel Basic -->
      <div class="panel">
        <div class="card-header" style="margin-top: 2%;text-align: center">
            Aspirantes Interesados
        </div>
        <div class="panel-body">
          <table id="example" class="table table-hover dataTable table-striped w-full" data-plugin="dataTable" id="example">
            <thead>
              <tr>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Genero</th>
                <th>Fecha de nacimiento</th>
                <th>Telefono</th>
                <th>Ciudad</th>
                <th>Programa de interes</th>
                <th>Fecha de creacion</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Genero</th>
                <th>Fecha de nacimiento</th>
                <th>Telefono</th>
                <th>Ciudad</th>
                <th>Programa de interes</th>
                <th>Fecha de creacion</th>
                <th>Acciones</th>
              </tr>
            </tfoot>
            <tbody>
              <?php if ($aspirantes) { ?>
                <?php for($i=0;$i < count(@$aspirantes); $i++) {?>
                    <tr>
                        <td><?=@$aspirantes[$i]['fullname'];?></td>
                        <td><?=@$aspirantes[$i]['email'];?></td>
                        <td><?=@$aspirantes[$i]['genero'];?></td>
                        <td><?=@$aspirantes[$i]['fechaNacimiento'];?></td>
                        <td><?=@$aspirantes[$i]['telefono'];?></td>
                        <td><?=@$aspirantes[$i]['ciudad'];?></td>
                        <td><?=@$aspirantes[$i]['programaDeInteres'];?></td>
                        <td><?=@$aspirantes[$i]['completeFecha'];?></td>
                        <td>
                          <a type="button" class="btn btn-icon btn-danger" href="tel:<?=@$aspirantes[$i]['telefono'];?>">
                            <i class="icon fa-phone" aria-hidden="true" style="color: white">
                            </i>
                          </a>
                          &nbsp;&nbsp;
                          <a type="button" class="btn btn-icon btn-success" href="https://api.whatsapp.com/send?phone=<?=@$aspirantes[$i]['telefono'];?>&text=Hola%20un%20gusto%20saludarte%20!%20<?=@$aspirantes[$i]['names'];?>%20,Notamos%20que%20creaste%20una%20cuenta%20con%20nosotros%20,por%20favor%20termina%20de%20completar%20tu%20información." target="_blank">
                            <i class="fab fa-whatsapp" aria-hidden="true" style="color: white">
                            </i>
                          </a>
                          &nbsp;&nbsp;
                          <button type="button" class="btn btn-icon btn-info sendEmail" id="<?=@$aspirantes[$i]['aspirante'];?>">
                            <i class="icon fa-envelope" aria-hidden="true" style="color: white">
                            </i>
                          </button>
                          &nbsp;&nbsp;
                          <button type="button" class="btn btn-icon btn-warning seeMore" id="<?=@$aspirantes[$i]['usuario'];?>">
                            <i class="icon fa-eye" aria-hidden="true" style="color: white">
                            </i>
                          </button>
                          &nbsp;&nbsp;
                        </td>
                    </tr>
                <?php } ?>
              <?php } ?> 
            </tbody>
          </table>
        </div>
      </div>
      <!-- End Panel Basic -->
</div>


<div class="modal fade" id="modalInformacion" aria-hidden="true" aria-labelledby="examplePositionCenter" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-simple modal-center">
    <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
          </button>
          <h4 class="modal-title">Información del usuario</h4>
        </div>
          <div class="modal-body">
              <ul class="list-group list-group-bordered">
                <li class="list-group-item list-group-item-action active">Universidades seleccionadas:</li>  
              </ul>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
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
<script>
    $(document).ready(function()
        {
          $(document).on('click','.sendEmail',function(){
            var id = this.id;
            _url = _principalURL()+"Status/api/sendEmailStatus1/id/"+id;
            _method = "POST";


            $.ajax({
              url: _url,
              method : _method,
              headers : {
              'X-API-KEY':'ANGLOKEY'
              },
              data: null,
              success : function(_response){
                  if(!_response){
                      tostada('success','Correo Enviado Corractamente al destinatario');
                  }else{
                      tostada('error','Error inesperado, si persiste comunicate con los desarrolladores');

                  }
              },error : function(err){
              
              }
            });

          });

          $(document).on('click','.seeMore',function(){
            var id = this.id;
            _url = _principalURL()+"Aspirante/api/aspirante/id/"+id;
            _method = "GET";


            $.ajax({
              url: _url,
              method : _method,
              headers : {
              'X-API-KEY':'ANGLOKEY'
              },
              data: null,
              success : function(_response){
                aspiranteInfo = _response['data'];
                if(aspiranteInfo['programaDeInteres']){
                  if(aspiranteInfo['programaDeInteres']=='Universidad'){
                    $.ajax({
                      url: _principalURL()+"AspiranteUniversidades/api/aspiranteUniversidadesBYAspirante/id/"+aspiranteInfo['aspirante'],
                      method : _method,
                      headers : {
                      'X-API-KEY':'ANGLOKEY'
                      },
                      data: null,
                      success : function(_response){
                        universidadInfo = _response['data'];
                        if(universidadInfo){
                          $(document).find('.modal-body').html(
                            '<ul class="list-group list-group-dividered ">'+
                              '<li class="list-group-item" style="font-size: 18px;"><span style="color:black !important;">Facultad elegida:</span>&nbsp;&nbsp;'+universidadInfo['nombreFacultad']+'</span></li>'+
                              '<li class="list-group-item" style="font-size: 18px"><span style="color:black !important;">Tipo de estudio elegido: </span >&nbsp;&nbsp;'+universidadInfo['estudiosAspiranteUniversidad']+'</span></li>'+
                              '<li class="list-group-item" style="font-size: 18px"><span style="color:black !important;">Año de estudio: </span>&nbsp;&nbsp;'+(universidadInfo['anio'] ? universidadInfo['anio'] : "No se ha seleccionado un año de ingreso")+'</span></li>'+
                              '<li class="list-group-item" style="font-size: 18px"><span style="color:black !important;">Mes de estudio: </span >&nbsp;&nbsp;'+(universidadInfo['mes'] ? universidadInfo['mes'] : "No se ha seleccionado un mes de ingreso")+'</span></li>'+
                            '</ul>'+
                            '<div class="test">'+
                              '<ul class="list-group list-group-bordered">'+
                                '<li class="list-group-item list-group-item-action active next" style="font-size: 18px"><span  style="font-size: 15px">Universidades seleccionadas</li>'+
                              '</ul>'+
                            '</div>'
                          );
                          if(universidadInfo['anioMesIngreso']){
                            $.ajax({
                              url: _principalURL()+"AspiranteUniversidades/api/aspiranteInstitucionesBYAspiranteUni/id/"+universidadInfo['idAspiranteUniversidad'],
                              method : _method,
                              headers : {
                              'X-API-KEY':'ANGLOKEY'
                              },
                              data: null,
                              success : function(_response){
                                unisSeleccionadas = _response['data'];
                                for (let i = 0; i < unisSeleccionadas.length; i++) {
                                  $(document).find('.test').find('.next').after(
                                      '<li class="list-group-item list-group-item-action" style="font-size: 18px"> '+unisSeleccionadas[i]['nombreInstitucion']+'</li>'
                                    
                                  );
                                }
                              },error : function(err){}
                            });
                          }else{
                            $(document).find('.test').html(
                              '<ul class="list-group list-group-bordered">'+
                                '<li class="list-group-item list-group-item-action active">No ha seleccionado Universidades:</li>'+
                              '</ul>'
                            );
                          }
                          $('#modalInformacion').modal('show');
                        }else{
                          tostada('error','No se puede acceder a ver mas informacion, ya que no ha elegido una facultad o un tipo de estudio de interes');

                        }
                        
                      },error : function(err){
                        
                      }
                    });
                  }else if(aspiranteInfo['programaDeInteres']=='Preparatoria'){
                    $.ajax({
                          url: _principalURL()+"AspirantePreparatorias/api/aspirantePreparatoriasBYAspirante/id/"+aspiranteInfo['aspirante'],
                          method : _method,
                          headers : {
                          'X-API-KEY':'ANGLOKEY'
                          },
                          data: null,
                          success : function(_response){
                            preparatoriasInfo = _response['data'];
                            console.info(preparatoriasInfo);
                            if(preparatoriasInfo){
                              $(document).find('.modal-body').html(
                                '<ul class="list-group list-group-dividered ">'+
                                  '<li class="list-group-item" style="font-size: 18px;"><span style="color:black !important;">Tipo de alojamiento elegido:</span>&nbsp;&nbsp;'+preparatoriasInfo['nombreTipoAlojamiento']+'</span></li>'+
                                  '<li class="list-group-item" style="font-size: 18px"><span style="color:black !important;">Tipo de estudio elegido: </span >&nbsp;&nbsp;'+preparatoriasInfo['nombreTipoEstudio']+'</span></li>'+
                                  '<li class="list-group-item" style="font-size: 18px"><span style="color:black !important;">Año de estudio: </span>&nbsp;&nbsp;'+(preparatoriasInfo['anio'] ? preparatoriasInfo['anio'] : "No se ha seleccionado un año de ingreso")+'</span></li>'+
                                  '<li class="list-group-item" style="font-size: 18px"><span style="color:black !important;">Mes de estudio: </span >&nbsp;&nbsp;'+(preparatoriasInfo['mes'] ? preparatoriasInfo['mes'] : "No se ha seleccionado un mes de ingreso")+'</span></li>'+
                                '</ul>'+
                                '<div class="test">'+
                                  '<ul class="list-group list-group-bordered">'+
                                    '<li class="list-group-item list-group-item-action active next" style="font-size: 18px"><span  style="font-size: 15px">Preparatorias seleccionadas</li>'+
                                  '</ul>'+
                                '</div>'
                              );
                              if(preparatoriasInfo['anioMesIngreso']){
                                $.ajax({
                                  url: _principalURL()+"AspirantePreparatorias/api/aspiranteInstitucionesBYAspirantePrepa/id/"+preparatoriasInfo['idAspirantePreparatoria'],
                                  method : _method,
                                  headers : {
                                  'X-API-KEY':'ANGLOKEY'
                                  },
                                  data: null,
                                  success : function(_response){
                                    prepasSeleecionadas = _response['data'];
                                    for (let i = 0; i < prepasSeleecionadas.length; i++) {
                                      $(document).find('.test').find('.next').after(
                                          '<li class="list-group-item list-group-item-action" style="font-size: 18px"> '+prepasSeleecionadas[i]['nombreInstitucion']+'</li>'
                                        
                                      );
                                    }
                                  },error : function(err){}
                                });
                              }else{
                                $(document).find('.test').html(
                                  '<ul class="list-group list-group-bordered">'+
                                    '<li class="list-group-item list-group-item-action active">No ha seleccionado Preparatorias:</li>'+
                                  '</ul>'
                                );
                              }
                              $('#modalInformacion').modal('show');
                            }else{
                              tostada('error','No se puede acceder a ver mas informacion, ya que no ha elegido una facultad o un tipo de estudio de interes');

                            }
                            
                          },error : function(err){
                          
                          }
                        });
                  }
                }else{
                  tostada('error','No se puede acceder a ver mas informacion, ya que no ha elegido un programa de interes');
                }
              },error : function(err){
              
              }
            });
          });
        }
    );
</script>
