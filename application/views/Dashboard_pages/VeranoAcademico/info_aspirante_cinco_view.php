<!--
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
    font-size: 20px;
    color: white;
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
  </style> -->
  <style>
  @import url(https://fonts.googleapis.com/css?family=Lato:400,700,900);


  :root {
    --border-radius-size: 14px;
    --barbarian: #EC9B3B;
    --archer: #EE5487;
    --giant: #F1C40F;
    --goblin: #82BB30;
    --wizard: #4FACFF;

  }

  $border-radius-size: 14px;
  $barbarian: #EC9B3B;
  $archer: #EE5487;
  $giant: #F6901A;
  $goblin: #82BB30;
  $wizard: #4FACFF;

  *, *:before, *:after {
    box-sizing: border-box;
  }




  .slide-container {
    margin: auto;
  }

  .wrapper {

  }


  .clash-card {
    background: white;
    -webkit-border-radius: 23px !important;
    -moz-border-radius: 23px !important;
    border-radius: 23px !important;
    text-align: center;
    box-shadow: -1px 15px 30px -12px black;
    z-index: 9999;
  }

  .clash-card__image {
    position: relative;
    height: 230px;
    margin-bottom: 35px;
    border-top-left-radius: var(--border-radius-size);
    border-top-right-radius: var(--border-radius-size);
  }

  .clash-card__image--barbarian {
    background: url('<?=base_url('resources/assets/Informativa/images/barbarian-bg.jpg');?>') !important;

  }

  .imagencard {
    position: relative;
    top: 26px;
    left:3px;
    right:26px;
    bottom:26px;
  }
  .clash-card__image--archer {
    background: url('<?=base_url('resources/assets/Informativa/images/archer-bg.jpg');?>');
    img {
      width: 400px;
      position: absolute;
      top: -34px;
      left: -37px;
    }
  }

  .clash-card__image--giant {
    background: url('<?=base_url('resources/assets/Informativa/images/giant-bg.jpg');?>');
    img {
      width: 340px;
      position: absolute;
      top: -30px;
      left: -25px;
    }
  }

  .clash-card__image--goblin {
    background: url('<?=base_url('resources/assets/Informativa/images/goblin-bg.jpg');?>');
    img {
      width: 370px;
      position: absolute;
      top: -21px;
      left: -37px;
    }
  }

  .clash-card__image--wizard {
    background: url('<?=base_url('resources/assets/Informativa/images/wizard-bg.jpg');?>');
    img {
      width: 345px;
      position: absolute;
      top: -28px;
      left: -10px;
    }
  }

  .clash-card__level {
    text-transform: uppercase;
    font-size: 20px;
    font-weight: 700;
    margin-bottom: 3px;
    color: #EC9B3B;
  }

  .clash-card__level--barbarian {
    color: var(--barbarian);
  }

  .clash-card__level--archer {
    color: var(--archer);
  }

  .clash-card__level--giant {
    color: var(--giant);
  }

  .clash-card__level--goblin {
    color: var(--goblin);
  }

  .clash-card__level--wizard {
    color: var(--wizard);
  }

  .clash-card__unit-name {
    font-size: 18px;
    color: black;
    font-weight: 600;
    margin-bottom: 5px;
  }

  .clash-card__unit-description {
    padding: 20px;
    margin-bottom: 10px;

  }
  .where{
    font-size: 18px;
    color: black;
    font-weight: 600;
    margin-bottom: 5px;
  }
  .closed{
    font-size: 30px;
    color: red;
    font-weight: 600;
    margin-bottom: 5px;
  }

  .signoadmiracion{
    font-size: 20px;
    color: white;
    font-weight: 900;
    margin-bottom: 5px;
  }

  .nameInst{
    font-size: 16px;
    color: black;
    font-weight: 900;
    margin-bottom: 5px;
  }
  .theadtable{
    background:  var(--wizard);
    color: white;
  }
  .theadtabletw{
    background:  var(--goblin);
    color: white;
  }
  .theadtableth{
    background:  var(--barbarian);
    color: white;
  }

  .theadtablefo{
    background:  var(--giant);
    color: white;
  }
  .clash-card__unit-stats--barbarian {
    background:var(--barbarian);

    .one-third {
       border-right: 1px solid #BD7C2F !important;
    }
  }

  .clash-card__unit-stats--archer {
    background: var(--archer);

    .one-third {
       border-right: 1px solid #D04976;
    }
  }

  .clash-card__unit-stats--giant {
    background: var(--giant);

    .one-third {
       border-right: 1px solid darken(var(--giant), 8%);
    }
  }

  .clash-card__unit-stats--goblin {
    background: var(--goblin);

    .one-third {
       border-right: 1px solid darken(var(--goblin), 6%);
    }
  }

  .clash-card__unit-stats--wizard {
    background: var(--wizard);

    .one-third {
       border-right: 1px solid darken(var(--wizard), 6%);
    }
  }

  .clash-card__unit-stats {

    color: white;
    font-weight: 700;
    border-bottom-left-radius:var(--border-radius-size);
    border-bottom-right-radius: var(--border-radius-size);

    .one-third {
      width: 33%;
      float: left;
      padding: 20px 15px;
    }

    sup {
      position: absolute;
      bottom: 4px;
      font-size: 45%;
      margin-left: 2px;
    }





    .no-border {
      border-right: none;
    }
  }

  .stat {
  font-size: 18px;
  }

  .stat-value {

  }

  .clearfix:after {
    visibility: hidden;
    display: block;
    font-size: 0;
    content: " ";
    clear: both;
    height: 0;
  }

  .slick-prev {
    left: 100px;
    z-index: 999;
  }

  .slick-next {
    right: 100px;
    z-index: 999;
  }
  .emailicon{
    font-size: 20px;
    color: white;
    font-weight: 250;clash-card__unit-stats--goblin
    margin-bottom: 5px;
  }

  .whats{
    font-size: 23px;
    color: white;
    font-weight: 250;clash-card__unit-stats--goblin
    margin-bottom: 5px;
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

  <div class="page">
    <div class="page-header">
      <h1 class="page-title">Grid Scaffolding</h1>
    </div>

    <div class="page-content container-fluid">
      <!-- Panel Options -->

      <!-- End Panel Options -->
      <!-- Panel Stacked-To-Horizontal -->


            <div class="col-md-12">
              <!-- Example Stacked-To-Horizontal -->
              <div class="example-wrap">


                <div class="example example-grid">
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="example-col">
                        <div class="slide-container ">

                              <div class="col-md-4 col-lg-12 col-xl-12">
                               <div class="wrapper">
                                 <div class="clash-card goblin">
                                   <div class="clash-card__image clash-card__image--goblin">
                                     <img class="imagencard" src="<?=base_url('resources/assets/Informativa/images/Stafford_Activities.png');?>"   alt="goblin" style=""/>
                                   </div>
                                   <div class="clash-card__level clash-card__level--goblin"><?=@$aspirante['firstNamePersona'];?> <?=@$aspirante['lastNamePersona'];?></div>
                                   <div class="clash-card__unit-description">
                                  </div>

                                   <div class="clash-card__unit-description">
                                    <p></p>
                                   </div>
                                   <div class="clash-card__unit-stats clash-card__unit-stats--goblin clearfix">
                                     <div class="one-third">
                                       <div class="row">
                                         <div class="col-lg-4">

                                           <div class="stat-value">Correo</div>
                                           <div class="stat"><i class="icon wb-envelope emailicon " aria-hidden="true"></i></div>
                                         </div>
                                         <div class="col-lg-4">

                                           <div class="stat-value">Telefono</div>
                                           <div class="stat"><i class="icon fa-phone-square emailicon" aria-hidden="true"></i></div>
                                         </div>
                                         <div class="col-lg-4">

                                           <div class="stat-value">Whatsapp</div>
                                           <div class="stat"><i class="icon fa-whatsapp whats " aria-hidden="true"></i> </div>
                                         </div>
                                       </div>
                                     </div>
                                   </div>
                                 </div> <!-- end clash-card barbarian-->
                                 </div> <!-- end wrapper -->
                              </div> <!-- end col waper-->

                      </div>
                      </div>
                    </div>
                    <div class="col-lg-8">
                      <div class="example-col">.col-lg-2</div>
                    </div>
                    <div class="col-lg-2">
                      <div class="example-col">.col-lg-2</div>
                    </div>

                  </div>

                </div>
              </div>
              <!-- End Example Stacked-To-Horizontal -->
            </div>



      <!-- End Panel Stacked-To-Horizontal -->
