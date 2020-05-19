
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
              </tr>
            </tfoot>
            <tbody>
                <?php for($i=0;$i < count(@$aspirantes); $i++) {?>
                    <tr>
                        <td><?=@$aspirantes[$i]['fullname'];?></td>
                        <td><?=@$aspirantes[$i]['email'];?></td>
                        <td><?=@$aspirantes[$i]['genero'];?></td>
                        <td><?=@$aspirantes[$i]['fechaNacimiento'];?></td>
                        <td><?=@$aspirantes[$i]['telefono'];?></td>
                        <td><?=@$aspirantes[$i]['ciudad'];?></td>
                        <td><?=@$aspirantes[$i]['programaDeInteres'];?></td>
                    </tr>
                <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
      <!-- End Panel Basic -->
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
        }
    );
</script>
