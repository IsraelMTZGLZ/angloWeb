<!-- Page -->
<?php if ($this->session->flashdata('email')) { ;?>
          <div class="alert alert-warning alert-dismissible fade show" role="alert" style="margin-top: 18px;width: 80%;margin-left: 100px;">
            <strong>Alerta!</strong> <?=@$this->session->flashdata('email')?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
    <?php } ;?>
<div class="page">
    <div class="page-header">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="Home">Home</a></li>
        <li class="breadcrumb-item active">Email</li>
      </ol>
      <h1 class="page-title">Configuracion de correo</h1>
      
    </div>
   
    <!-- Page Content -->
    <div class="page-content container-fluid">
    
    <div class="row" data-plugin="matchHeight" data-by-row="true">
        
        <div class="col-xxl-3 col-xl-4">
          
          <!-- Panel Web Designer -->
          <div class="card card-shadow">
            <div class="card-block text-center bg-white p-40">
              <div class="avatar avatar-100 mb-20">
                <img src="<?=@ ($user->photoUrl!='NULL') ? $user->photoUrl : base_url("resources/assets/Anglo/AngloLatino-sintexto.png") ;?>" alt="">
              </div>
              <p class="font-size-20 blue-grey-700"><?=@ucwords(strtolower($user->names));?> <?=@ucwords(strtolower($user->paterns));?></p>
              <p class="blue-grey-400 mb-20"><?=@$user->email;?></p>
              <p class="mb-35">Correo Proporcionado: <?=@ ($email['data']!='NULL') ? $email['data']['email_send'] : 'Correo aun no configurado' ;?>
                  <ul class="text-justify">
                      <li class="text-justify">Email, el correo que se desea utilizar para mandar los emails.</li>
                      <li>Password, la contraseña del email, contraseña utilizada para entrar a gmail.</li>
                      <li>From, Desde donde sera mandado nombre.</li>
                      <li>Protocolo, poner smtp</li>
                      <li>Servidor, poner smtp.gmail.com</li>
                      <li>Puerto, poner 465</li>
                  </ul>
                  <p>Si el correo a usar no sera un @gmail !llamar a los desarrolladores!</p>
                  <a type="button" class="btn btn-primary px-40 text-white" href="Email/sendEmail">Enviar Correo</a>
                </p>
              
            </div>
          </div>
          <!-- End Panel Web Designer -->
        </div>

        <div class="col-xxl-6 col-xl-8">
            
          <!-- Panel Traffic -->
          <div class="card card-shadow example-responsive border border-primary" id="widgetLinearea">
            <div class="card-block" style="min-width:480px;">
            <div id="responseText" style="margin-top: 20px;margin-bottom: -5px;">
        </div>
                <form id="emailForm">
                <div class="row" style="margin-top:30px;">
                    <div class="col-lg-4 col-md-6 col-ms-12">
                        <div class="form-group">
                            <h4 class="example-title">Correo</h4>
                            <input type="email" class="form-control round focus" id="email" name="email">
                        
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-ms-12">
                        <div class="form-group">
                            <h4 class="example-title">Contraseña</h4>
                            <input type="password" class="form-control round focus"  id="password" name="password">
                        
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-ms-12">
                        <div class="form-group">
                            <h4 class="example-title">Repetir Contraseña</h4>
                            <input type="password" class="form-control round focus"  id="rPassword" name="rPassword">
                        
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-ms-12">
                        <div class="form-group">
                            <h4 class="example-title">From</h4>
                            <input type="text" class="form-control round focus" id="from" name="from">
                        
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-ms-12">
                        <div class="form-group">
                            <h4 class="example-title">Protocolo</h4>
                            <select class="form-control round" data-style="btn-outline btn-primary" data-plugin="selectpicker" id="protocolo" name="protocolo">
                                <option value="smtp">smtp</option>
                            </select>
                        
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-ms-12">
                        <div class="form-group">
                            <h4 class="example-title">Servidor</h4>
                            <input type="text" class="form-control round focus"  id="servidor" name="servidor">
                        
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-ms-12">
                        <div class="form-group">
                            <h4 class="example-title">Puerto</h4>
                            <input type="text" data-plugin="maxlength" maxlength="3" class="form-control round focus"  id="puerto" name="puerto">
                        
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block btn-round" style="margin-top: 60px;">Enviar</button>
            </form>
            </div>
            
          </div>
          <!-- End Panel Traffic -->
        </div>

        
      </div>