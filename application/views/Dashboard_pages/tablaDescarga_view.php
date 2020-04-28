<link rel="stylesheet" href="cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.1/css/buttons.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

<div class="card text-center">
  <div class="card-header" style="margin-top: 2%;">
    Aspirantes Interesados
  </div>
  <div class="card-body">
    <table id="example" class="display nowrap table-striped table-bordered" style="width:80%">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Genero</th>
                <th>Correo</th>
                <th>Fecha de nacimiento</th>
                <th>Telefono</th>
                <th>Ciudad</th>
                <th>Programa de interes</th>
            </tr>
        </thead>
        <tbody>

        </tbody>
        <tfoot>
            <tr>
                <th>Nombre</th>
                <th>Genero</th>
                <th>Correo</th>
                <th>Fecha de nacimiento</th>
                <th>Telefono</th>
                <th>Ciudad</th>
                <th>Programa de interes</th>
            </tr>
        </tfoot>
    </table>
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


            $('#example tfoot th').each( function () {
                var title = $(this).text();
                $(this).html( '<input type="text" placeholder="Search '+title+'" />' );
            } );


            _url = _principalURL()+"Aspirante/api/aspirante/";
            var table=$(document).find('#example').DataTable({
                scrollY:        '50vh',
                "scrollX": true,
                scrollCollapse: true,
                paging:         false,
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
                    {data: 'fullname'},
                    {data: 'genero'},
                    {data: 'email'},
                    {data: 'fechaNacimiento'},
                    {data: 'telefono'},
                    {data : 'ciudad'},
                    {data : 'programaDeInteres'}
                ]
            });
<<<<<<< HEAD

        }
=======

            // DataTable
    var table2 = $('#example').DataTable();

    // Apply the search
    table2.columns().every( function () {
        var that = this;

        $( 'input', this.footer() ).on( 'keyup change clear', function () {
            if ( that.search() !== this.value ) {
                that
                    .search( this.value )
                    .draw();
            }
        } );
    } );
        }
>>>>>>> 603f6a9bfdfc7a97f363d0b0c049556ec3b8b529
    );
</script>
