
  <style media="screen">
  :root {
    --border-radius-size: 14px;
    --barbarian: #EC9B3B;
    --archer: #EE5487;
    --giant: #F1C40F;
    --goblin:   #11C26D;
    --wizard:   #f2353c;

  }

  .userDatos{
    font-size: 16px;
    color: black;
    font-weight: 200;
    margin-bottom: 5px;
  }
  .userName{
    font-size: 19px;
    color: black;
    font-weight: 400;
    margin-bottom: 5px;
  }
  .emailicon{
    font-size: 16px;
    color: #4FACFF;
    font-weight: 250;clash-card__unit-stats--goblin
    margin-bottom: 5px;
  }
  .pdficon{
    font-size: 20px;
    color: #ff4c52;
    font-weight: 250;clash-card__unit-stats--goblin
    margin-bottom: 5px;
  }
    .callicon{
      font-size: 18px;
      color: #4FACFF;
      font-weight: 250;
      margin-bottom: 5px;
    }

    .iconcheck{
      font-size: 20px;
      color: #4FACFF;
      font-weight: 250;
      margin-bottom: 5px;
    }

    .nationicon{
      font-size: 18px;
      color: #4FACFF;
      font-weight: 250;
      margin-bottom: 5px;
    }

    .resumen{

      font-size: 22px;
      color: #0bb2d4;
      font-weight: 250;
      margin-bottom: 5px;
    }
    .card-element{
      background: white;
      width: auto;
      display: inline-block;

      text-align: center;
      box-shadow: -1px 1px 20px -12px #3e8ef7;
    }
    .clash-card__unit-stats--barbarian {
      background:var(--barbarian);


    }


    .clash-card__unit-stats--archer {
      background: var(--archer);


    }

    .clash-card__unit-stats--giant {
      background: var(--giant);

    }

    .clash-card__unit-stats--goblin {
      background: var(--goblin);

    }

    .clash-card__unit-stats--wizard {
      background: var(--wizard);

    }


    .stat {
    font-size: 18px;
    color: white;
    }

    .reviciones{
      align: center;
    }
    .upicon{
      /* position:relative;
      top: 5px; */
    }
    .check-style{
      /* position:relative;
      top: 14px; */
    }
  </style>



  <!-- Page -->
  <input type="hidden" name="aspirante" id="aspirante" value="<?=$user->aspirante;?>">
  <input type="hidden" id="idDocFormOne" value="<?=@$idDocFormOne;?>" name="idDocFormOne">
  <input type="hidden" id="idDocFormTwo" value="<?=@$idDocFormTwo;?>" name="idDocFormTwo">
  <input type="hidden" id="idDocFormThree" value="<?=@$idDocFormThree;?>" name="idDocFormThree">
  <input type="hidden" id="NameLastName" value="<?=@$aspirante['firstNamePersona'];?> <?=@$aspirante['lastNamePersona'];?>" name="NameLastName">
  <input type="hidden" id="NameInstOne" value="<?=@$instOne['nombreInstitucion'];?>" name="NameInstOne">
  <input type="hidden" id="NameInstTwo" value="<?=@$instTwo['nombreInstitucion'];?>" name="NameInstTwo">
  <input type="hidden" id="NameInstThree" value="<?=@$instThree['nombreInstitucion'];?>" name="NameInstThree">
  <input type="hidden" id="idInstitucionOne" value="<?=@$instOne['idInstitucion'];?>" name="idInstitucionOne">
  <input type="hidden" id="idInstitucionTwo" value="<?=@$instTwo['idInstitucion'];?>" name="idInstitucionTwo">
  <input type="hidden" id="idInstitucionThree" value="<?=@$instThree['idInstitucion'];?>" name="idInstitucionThree">


          <!-- End User Posts -->

          <!-- User Background -->

          <div class="user-background card card-shadow">
            <div class="card-header card-header-transparent p-20">

              <h4 class="card-title mb-0">Documentos Completos  </h4>
            </div>
            <div class="card-block">
              <div class="example-wrap">
                <h4 class="example-title"></h4>
                <div class="example">

                </div>



              </div>
              </div>

          </div>


          <!-- End User Background -->

          <!-- User Recomenfations -->

          <!-- End User Recomendations -->
          <!-- User Following -->

          <!-- End User Following -->
        </div>

        <!-- End Middle Column -->

        <!-- Left Column -->

        <!-- End Left Column -->

        <!-- Right Column -->
        <div class="col-lg-6 col-xl-3 order-xl-3">
          <div class="card user-visitors">
            <div class="card-header card-header-transparent p-20">
              <h4 class="card-title mb-0">Estatus</h4>
            </div>
            <div class="card-block px-30">

              <ul class="list-group list-group-full">
                <div class="text-center">
                <div class="col-12" style="background-color: #db4437;height: 50%;">
                    <span style="color:white; font-size: 20px;" ><?=@$aspirante['statusAspirante'];?></span>
                </div>
                </div>
              </ul>
              <div class="text-center">

                  <h4 class="example-title">Cambiar Estatus</h4>
                  <p>Selecciona una opción</p>
                  <div class="example">
                    <select class="form-control"
                       id="statusAspirante" name="statusAspirante">
                      <option></option>
                      <option  value="4U">Status 4U</option>
                      <option  value="4C">Status 4C</option>
                    </select>
                  </div>
                    <button class="btn btn-primary btn-round btn-cambio-status"  type="button" name="follow">Cambiar</button>


              </div>
            </div>
          </div>
