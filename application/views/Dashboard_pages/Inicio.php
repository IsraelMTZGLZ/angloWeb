<!-- Page -->
<div class="page">

    <div class="page-header">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="../index.html">Home</a></li>
            <li class="breadcrumb-item active">Advanced UI</li>
        </ol>
        <h1 class="page-title">Animation</h1>
        <div class="page-header-actions">
            <button type="button" class="btn btn-sm btn-icon btn-inverse btn-round" data-toggle="tooltip"
            data-original-title="Edit">
            <i class="icon wb-pencil" aria-hidden="true"></i>
            </button>
            <button type="button" class="btn btn-sm btn-icon btn-inverse btn-round" data-toggle="tooltip"
            data-original-title="Refresh">
            <i class="icon wb-refresh" aria-hidden="true"></i>
            </button>
            <button type="button" class="btn btn-sm btn-icon btn-inverse btn-round" data-toggle="tooltip"
            data-original-title="Setting">
            <i class="icon wb-settings" aria-hidden="true"></i>
            </button>
        </div>
    </div>



    <div class="page-content container-fluid">

    <!-- <?=var_dump($user);?> -->


    <div class="row">


      <div class="col-xl-12">
        <!-- Panel Editing Rows -->
        <div class="panel">
          <header class="panel-heading">
            <h3 class="panel-title">Editing Rows</h3>
          </header>
          <div class="panel-body">
            <table id="exportTable" class="table table-bordered table-hover toggle-circle"
              data-paging="true" data-filtering="true" data-sorting="true">
              <thead>
                <tr>
                  <th data-name="id" data-type="number" data-breakpoints="xs">ID</th>
                  <th data-name="firstName">First Name</th>
                  <th data-name="lastName">Last Name</th>
                  <th data-name="jobTitle" data-breakpoints="xs sm">Job Title</th>
                  <th data-name="startedOn" data-type="date" data-breakpoints="xs sm md" data-format-string="MMMM Do YYYY">Started On</th>
                  <th data-name="dob" data-type="date" data-breakpoints="xs sm md" data-format-string="MMMM Do YYYY">Date of Birth</th>
                  <th data-name="status" >status</th>
                </tr>
              </thead>
              <tbody>

              </tbody>
            </table>
          </div>
        </div>
        <!-- End Panel Editing Rows -->
        <div class="modal fade" id="editor-modal" tabindex="-1" role="dialog" aria-labelledby="editor-title">
          <div class="modal-dialog modal-simple" role="document">
            <form class="modal-content form-horizontal" id="editor">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="editor-title">Add Row</h4>
              </div>
              <div class="modal-body">
                <input type="number" id="id" name="id" class="hidden" style="display:none;" />
                <div class="form-group required">
                  <label for="firstName" class="col-sm-3 control-label">First Name</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="firstName" name="firstName" placeholder="First Name"
                      required>
                  </div>
                </div>
                <div class="form-group required">
                  <label for="lastName" class="col-sm-3 control-label">Last Name</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Last Name"
                      required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="jobTitle" class="col-sm-3 control-label">Job Title</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="jobTitle" name="jobTitle" placeholder="Job Title">
                  </div>
                </div>
                <div class="form-group required">
                  <label for="startedOn" class="col-sm-3 control-label">Started On</label>
                  <div class="col-sm-9">
                    <input type="date" class="form-control" id="startedOn" name="startedOn" placeholder="Started On"
                      required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="dob" class="col-sm-3 control-label">Date of Birth</label>
                  <div class="col-sm-9">
                    <input type="date" class="form-control" id="dob" name="dob" placeholder="Date of Birth">
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Save changes</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
              </div>
            </form>
          </div>
        </div>
      </div>

    </div>




<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
      <!-- Google Analytics -->
      <script type="text/javascript">
      console.log("Hoka");
        $(function(){
          //loadEmpresa();

          var table_admin = $(document).find('#exportTable').DataTable({
            ajax: {
              'url':'http://localhost/angloApi/index.php/Administrador/api/aspirante',
              'dataSrc':'data',
              headers: {
                'X-API-KEY':'ANGLOKEY'
              },
            },
            columns:[{data:'names',defaultContent:'no data'},
                     {data:'paterns'},
                     {data:'genero'},
                      {data:'email'},
                      {data:'typeUsuario'},
                       {data:'statusU'},
      								  {data:'tel'},
                    ]

          });

          // $('#exportTable').DataTable();



      </script>

      <script>
        (function(i, s, o, g, r, a, m) {
          i['GoogleAnalyticsObject'] = r;
          i[r] = i[r] || function() {
            (i[r].q = i[r].q || []).push(arguments)
          }, i[r].l = 1 * new Date();
          a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
          a.async = 1;
          a.src = g;
          m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '../../../../www.google-analytics.com/analytics.js',
          'ga');

        ga('create', 'UA-65522665-1', 'auto');
        ga('send', 'pageview');
      </script>
