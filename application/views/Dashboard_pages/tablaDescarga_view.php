<link rel="stylesheet" href="cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.1/css/buttons.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

<div class="card text-center">
  <div class="card-header" style="margin-top: 2%;">
    Aspirantes Interesados
  </div>
  <div class="card-body">
    <table id="example" class="display nowrap table table-hover dataTable table-striped w-full" style="width:80%">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Genero</th>
                <th>Correo</th>
                <th>Mes</th>
                <th>Año</th>
                <th>Accion</th>
            </tr>
        </thead>
        <tbody>

        </tbody>
        <tfoot>
            <tr>
                <th>Nombre</th>
                <th>Genero</th>
                <th>Correo</th>
                <th>Mes</th>
                <th>Año</th>
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


            _url = _principalURL()+"Aspirante/api/aspiranteByStatus0/";
            var table=$(document).find('#example').DataTable({
                
                
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
                    {data: 'mesCreation'},
                    {data: 'yearCreation'},
                    {data: 'usuario',
                        render:function(data, type, row)
                        {
                        return '<button type="button" id="'+data+'" class="btn btn-icon btn-primary sendEmail"><i class="icon wb-envelope" aria-hidden="true"></i></button>';
                        },
                        "targets": -1
                    }
                ]
            });

            table.columns().every( function () {
                var that = this;
        
                $( 'input', this.footer() ).on( 'keyup change clear', function () {
                    if ( that.search() !== this.value ) {
                        that
                            .search( this.value )
                            .draw();
                    }
                } );
            } );

            $(document).on('click','.sendEmail',function (){
                var usuario = this.id;
                _url = _principalURL()+"Status/api/sendEmailStatus0/id/"+usuario;
                _method = "POST";


                $.ajax({
                    url: _url,
                    method : _method,
                    headers : {
                    'X-API-KEY':'ANGLOKEY'
                    },
                    data: null,
                    success : function(_response){
                        console.info(_response);
                        if(!_response){
                            tostada('success','Correo Enviado Corractamente al destinatario');
                        }else{
                            tostada('error','Error inesperado, si persiste comunicate con los desarrolladores');

                        }
                    },error : function(err){
                    
                    }
                });

            });

        }
    );
</script>
