<style media="screen">
.card-c{

  background: white;
  width: auto;
  display: inline-block;

  text-align: center;
  box-shadow: -1px 1px 20px -12px #3e8ef7;
}
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
  .card{
    border-top:#2ECC71;
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
  .desc-text{
    font:  16px/1.5 arial, helvetica, sans-serif;
    color: #2D3731  ;
  }

</style>
<div class="page">
  <div class="page-header">

    <h1 class="page-title">Becas</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?=base_url('Dashboard/Verano/AspirantePage')?>">Regresar</a></li>
      <li class="breadcrumb-item active">Becas</li>
    </ol>
  </div>

  <div class="page-content container-fluid">
    <div class="row">
      <div class="col-xl-3 col-md-4">
        <!-- Panel -->
        <div class="panel">
          <div class="panel-body">
            <div class="list-group faq-list" role="tablist">
                  <a class="list-group-item list-group-item-action active" data-toggle="tab" href="#category-1"
                    aria-controls="category-1" role="tab">Información</a>
                <?php if(!@$InstOneInfo== NULL) { ;?>
                  <a class="list-group-item" data-toggle="tab" href="#category-2" aria-controls="category-2"
                    role="tab"><?=@$instOne['nombreInstitucion'];?></a>
                <?php } ;?>
                <?php if(!@$InstTwoInfo== NULL) { ;?>
                  <a class="list-group-item" data-toggle="tab" href="#category-3" aria-controls="category-3"
                    role="tab"><?=@$instTwo['nombreInstitucion'];?></a>
                <?php } ;?>
                <?php if(!@$InstThreeInfo== NULL) { ;?>
                  <a class="list-group-item" data-toggle="tab" href="#category-4" aria-controls="category-4"
                    role="tab"><?=@$instThree['nombreInstitucion'];?></a>
                <?php } ;?>
            </div>
          </div>
        </div>
        <!-- End Panel -->
      </div>

      <div class="col-xl-9 col-md-8">
        <!-- Panel -->
        <div class="panel">
          <div class="panel-body">
            <div class="tab-content">
              <!-- Categroy 1 -->
              <div class=" tab-pane animation-fade active" id="category-1" role="tabpanel">
                <div class="panel-group panel-group-simple panel-group-continuous" id="accordion2"
                  aria-multiselectable="true" role="tablist">
                  <!-- Question 1 -->
                  <div class="panel">
                    <div class="panel-heading" id="question-1" role="tab">
                      <a class="panel-title" aria-controls="answer-1" aria-expanded="true" data-toggle="collapse"
                        href="#answer-1" data-parent="#accordion2">
                      ¿Qué beneficios tiene una beca?
                    </a>
                    </div>
                    <div class="panel-collapse collapse show" id="answer-1" aria-labelledby="question-1"
                      role="tabpanel">
                      <div class="panel-body">
                      Una beca académica te ayuda mucho en tu vida laboral, ya que generas interés en actividades extracurriculares, y por supuesto tu currículo será de los considerados al momento de solicitar un empleo.
                      </div>
                    </div>
                  </div>
                  <!-- End Question 1 -->

                  <!-- Question 2 -->
                  <div class="panel">
                    <div class="panel-heading" id="question-2" role="tab">
                      <a class="panel-title" aria-controls="answer-2" aria-expanded="false" data-toggle="collapse"
                        href="#answer-2" data-parent="#accordion2">
                      How much does it cost to use Lorem ipsum?
                    </a>
                    </div>
                    <div class="panel-collapse collapse" id="answer-2" aria-labelledby="question-2"
                      role="tabpanel">
                      <div class="panel-body">
                        Laborum commodo cupidatat adipisicing aliqua qui in dolore occaecat labore nisi
                        occaecat enim dolor sit exercitation sit Duis minim tempor
                        est aliquip sit nostrud ea ea sit nostrud dolore cillum
                        exercitation officia sunt pariatur consequat velit id
                        nulla id Duis minim sunt sint culpa amet veniam commodo
                        nisi reprehenderit tempor irure sunt enim in eu reprehenderit
                        anim nulla tempor pariatur nisi fugiat consectetur sint
                        deserunt elit voluptate in in labore eiusmod nostrud
                        eiusmod est ullamco sit qui ut ut velit in veniam in
                        Ut nulla pariatur reprehenderit deserunt laboris sed
                        cupidatat est dolore adipisicing Duis in ut dolore dolor
                        sunt aute ut Excepteur sint consectetur.
                      </div>
                    </div>
                  </div>
                  <!-- End Question 2 -->

                  <!-- Question 3 -->
                  <div class="panel">
                    <div class="panel-heading" id="question-3" role="tab">
                      <a class="panel-title" aria-controls="answer-3" aria-expanded="false" data-toggle="collapse"
                        href="#answer-3" data-parent="#accordion2">
                      What is the lorem ipsum pariatur?
                    </a>
                    </div>
                    <div class="panel-collapse collapse" id="answer-3" aria-labelledby="question-3"
                      role="tabpanel">
                      <div class="panel-body">
                        Lorem ipsum Esse pariatur sit reprehenderit non culpa sint ullamco qui in aliquip
                        enim exercitation laborum ut eu voluptate exercitation
                        Duis dolore amet pariatur id occaecat incididunt deserunt
                        nulla esse proident.
                      </div>
                    </div>
                  </div>
                  <!-- End Question 3 -->

                  <!-- Question 4 -->
                  <div class="panel">
                    <div class="panel-heading" id="question-4" role="tab">
                      <a class="panel-title" aria-controls="answer-4" aria-expanded="false" data-toggle="collapse"
                        href="#answer-4" data-parent="#accordion2">
                     Lorem ipsum commodo adipisicing sunt ad aliqua velit nulla?
                    </a>
                    </div>
                    <div class="panel-collapse collapse" id="answer-4" aria-labelledby="question-4"
                      role="tabpanel">
                      <div class="panel-body">
                        Lorem ipsum Do cupidatat in culpa magna voluptate ullamco et anim nulla cupidatat
                        dolor culpa consequat quis dolor eu aliqua Ut eiusmod
                        ullamco sint reprehenderit commodo veniam ea irure sit
                        reprehenderit sunt sed sed proident ea incididunt esse
                        cillum cupidatat officia Duis.
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Categroy 1 -->

              <!-- Institution One -->
              <div class="tab-pane animation-fade" id="category-2" role="tabpanel">
                <div class="panel-group panel-group-simple panel-group-continuous" id="accordion"
                  aria-multiselectable="true" role="tablist">
                  <div class="panel">
                    <div class="text-center">
                        <h4 class="card-title mb-20">Becas</h4>
                    </div>
                      <ul class="blocks blocks-100 blocks-xxl-12 blocks-lg-2 blocks-md-1" data-plugin="filterable"
                        data-filters="#exampleFilter">
                        <?php if(@$becaInstOneInfo!= null) { ?>
                        <?php for ($i = 0; $i < count(@$becaInstOneInfo); $i++) { ?>
                        <li data-type="animal">
                          <div class="card card-element">
                            <img class="card-img-top w-full" src="<?=base_url('resources/assets/Informativa/images/uk_universities.jpg');?>" alt="Imagen Institucion" alt="Card image cap">
                            <div class="card-block">
                              <p class="card-text text-header" align="center">Estados participantes:</p>
                              <p class="card-text desc-text" align="center"><?=@$becaInstOneInfo[$i]['estados'];?></p>
                              <p class="card-text text-header" align="center">Descripción de beca:</p>
                              <p class="card-text desc-text" align="center"><?=@$becaInstOneInfo[$i]['descBeca'];?></p>
                              <p class="card-text text-header" align="center">Información de beca:</p>
                              <div class="media">
                                <div class="media-body">
                                  <h5 class="mt-0 mb-5 hover"><?=@$becaInstOneInfo[$i]['nombreDocumentoBeca'];?></h5>
                                  <a type="button" class="btn btn-icon btn-warning btn-outline btn-round "  href="<?=@$becaInstOneInfo[$i]['urlDocumentoBeca'];?>" download> <i class="icon  fa-download" aria-hidden="true"></i> </a>
                                </div>
                              </div>
                              <hr>
                              <p class="card-text text-header" align="center">Documentos requeridos:</p>
                              <div class="media">
                                <div class="media-body">
                                  <h5 class="mt-0 mb-5 hover"><?=@$becaInstOneInfo[$i]['nombreDocumentoBecaExtra'];?>
                                  </h5>
                                    <a type="button" class="btn btn-icon btn-info btn-outline btn-round "  href="<?=@$becaInstOneInfo[$i]['urlDocumentoBecaExtra'];?>" download> <i class="icon  fa-download" aria-hidden="true"></i> </a>
                                </div>
                              </div>
                            </div>
                            <br>
                            <div class="clash-card__unit-stats <?='clash-card__unit-stats--goblin' ;?> clearfix">
                              <div class="one-third">
                                <div class="stat"><?=@$becaInstOneInfo[$i]['statusBeca'];?>  </div>
                              </div>
                            </div>
                          </div>
                        </li>
                        <?php } ?>
                       <?php }else{ ?>
                         <div class="text-center">
                           <h4 class="card-title mb-20">Sin becas disponibles</h4>
                         </div>
                       <?php } ?>
                      </ul>
                  </div>
                </div>
              </div>
              <!-- End Institution One -->

              <!-- Categroy 3 -->
              <div class="tab-pane animation-fade" id="category-3" role="tabpanel">
                <div class="panel-group panel-group-simple panel-group-continuous" id="accordion1"
                  aria-multiselectable="true" role="tablist">
                  <div class="panel">
                    <div class="text-center">
                        <h4 class="card-title mb-20">Becas</h4>
                    </div>
                      <ul class="blocks blocks-100 blocks-xxl-12 blocks-lg-2 blocks-md-1" data-plugin="filterable"
                        data-filters="#exampleFilter">
                        <?php if(@$becaInstTwoInfo!= null) { ?>
                        <?php for ($i = 0; $i < count($becaInstTwoInfo); $i++) { ?>
                        <li data-type="animal">
                          <div class="card card-element">
                            <img class="card-img-top w-full" src="<?=base_url('resources/assets/Informativa/images/uk_universities.jpg');?>" alt="Imagen Institucion" alt="Card image cap">
                            <div class="card-block">
                              <p class="card-text text-header" align="center">Estados participantes:</p>
                              <p class="card-text desc-text" align="center"><?=@$becaInstTwoInfo[$i]['estados'];?></p>
                              <p class="card-text text-header" align="center">Descripción de beca:</p>
                              <p class="card-text desc-text" align="center"><?=@$becaInstTwoInfo[$i]['descBeca'];?></p>
                              <p class="card-text text-header" align="center">Información de beca:</p>
                              <div class="media">
                                <div class="media-body">
                                  <h5 class="mt-0 mb-5 hover"><?=@$becaInstTwoInfo[$i]['nombreDocumentoBeca'];?></h5>
                                  <a type="button" class="btn btn-icon btn-warning btn-outline btn-round "  href="<?=@$becaInstTwoInfo[$i]['urlDocumentoBeca'];?>" download> <i class="icon  fa-download" aria-hidden="true"></i> </a>
                                </div>
                              </div>
                              <hr>
                              <p class="card-text text-header" align="center">Documentos requeridos:</p>
                              <div class="media">
                                <div class="media-body">
                                  <h5 class="mt-0 mb-5 hover"><?=@$becaInstTwoInfo[$i]['nombreDocumentoBecaExtra'];?>
                                  </h5>
                                    <a type="button" class="btn btn-icon btn-info btn-outline btn-round "  href="<?=@$becaInstTwoInfo[$i]['urlDocumentoBecaExtra'];?>" download> <i class="icon  fa-download" aria-hidden="true"></i> </a>
                                </div>
                              </div>
                            </div>
                            <br>
                            <div class="clash-card__unit-stats <?='clash-card__unit-stats--goblin' ;?> clearfix">
                              <div class="one-third">
                                <div class="stat"><?=@$becaInstTwoInfo[$i]['statusBeca'];?>  </div>
                              </div>
                            </div>
                          </div>
                        </li>
                        <?php } ?>
                        <?php }else{ ?>
                          <div class="text-center">
                            <h4 class="card-title mb-20">Sin becas disponibles</h4>
                          </div>
                        <?php } ?>
                      </ul>
                  </div>
                </div>
              </div>
              <!-- End Categroy 3 -->

              <!-- Categroy 4 -->
              <div class="tab-pane animation-fade" id="category-4" role="tabpanel">
                <div class="panel-group panel-group-simple panel-group-continuous" id="accordion3"
                  aria-multiselectable="true" role="tablist">
                  <div class="panel">
                    <div class="text-center">
                        <h4 class="card-title mb-20">Becas</h4>
                    </div>
                      <ul class="blocks blocks-100 blocks-xxl-12 blocks-lg-2 blocks-md-1" data-plugin="filterable"
                        data-filters="#exampleFilter">
                        <?php if(@$becaInstThreeInfo!= null) { ?>
                        <?php for ($i = 0; $i < count($becaInstThreeInfo); $i++) { ?>
                        <li data-type="animal">
                          <div class="card card-element">
                            <img class="card-img-top w-full" src="<?=base_url('resources/assets/Informativa/images/uk_universities.jpg');?>" alt="Imagen Institucion" alt="Card image cap">
                            <div class="card-block">
                              <p class="card-text text-header" align="center">Estados participantes:</p>
                              <p class="card-text desc-text" align="center"><?=@$becaInstThreeInfo[$i]['estados'];?></p>
                              <p class="card-text text-header" align="center">Descripción de beca:</p>
                              <p class="card-text desc-text" align="center"><?=@$becaInstThreeInfo[$i]['descBeca'];?></p>
                              <p class="card-text text-header" align="center">Información de beca:</p>
                              <div class="media">
                                <div class="media-body">
                                  <h5 class="mt-0 mb-5 hover"><?=@$becaInstThreeInfo[$i]['nombreDocumentoBeca'];?></h5>
                                  <a type="button" class="btn btn-icon btn-warning btn-outline btn-round "  href="<?=@$becaInstOneInfo[$i]['urlDocumentoBeca'];?>" download> <i class="icon  fa-download" aria-hidden="true"></i> </a>
                                </div>
                              </div>
                              <hr>
                              <p class="card-text text-header" align="center">Documentos requeridos:</p>
                              <div class="media">
                                <div class="media-body">
                                  <h5 class="mt-0 mb-5 hover"><?=@$becaInstThreeInfo[$i]['nombreDocumentoBecaExtra'];?>
                                  </h5>
                                    <a type="button" class="btn btn-icon btn-info btn-outline btn-round "  href="<?=@$becaInstOneInfo[$i]['urlDocumentoBecaExtra'];?>" download> <i class="icon  fa-download" aria-hidden="true"></i> </a>
                                </div>
                              </div>
                            </div>
                            <br>
                            <div class="clash-card__unit-stats <?='clash-card__unit-stats--goblin' ;?> clearfix">
                              <div class="one-third">
                                <div class="stat"><?=@$becaInstThreeInfo[$i]['statusBeca'];?>  </div>
                              </div>
                            </div>
                          </div>
                        </li>
                        <?php } ?>
                        <?php }else{ ?>
                          <div class="text-center">
                            <h4 class="card-title mb-20">Sin becas disponibles</h4>
                          </div>
                        <?php } ?>
                      </ul>
                  </div>
                </div>
              </div>
              <!-- End Categroy 4 -->
            </div>
          </div>
        </div>
        <!-- End Panel -->
      </div>
    </div>
