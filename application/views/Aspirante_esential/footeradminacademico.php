<div class="card user-visitors">

    <div id="recentActivityWidget" class="card card-shadow card-lg pb-20">
      <div class="card-header card-header-transparent pb-10">
        <div class="card-header-actions">
          <span class="badge badge-default badge-round"></span>
        </div>
        <h5 class="card-title">
          Documentos
        </h5>
      </div>
      <ul class="timeline timeline-icon">
        <li class="timeline-reverse timeline-item">
          <div class="timeline-content-wrap">
            <div class="timeline-dot bg-green-600">
            <?php if(@$pasoUno== NULL) { ;?>
              <i class="icon fa-close check-style" aria-hidden="true"></i>
            <?php }else{  ;?>
              <i class="icon fa-check check-style" aria-hidden="true"></i>
            <?php };?>
            </div>
            <div class="timeline-content">
              <div class="title">
                <span class="authors">Pasaporte</span>
              </div>
              <div class="metas">
                <!-- active 14 minutes ago -->
              </div>
            </div>
          </div>
        </li>
        <li class="timeline-reverse timeline-item">
          <div class="timeline-content-wrap">
            <div class="timeline-dot bg-blue-600">
              <?php if(@$pasoDos== NULL) { ;?>
                <i class="icon fa-close check-style" aria-hidden="true"></i>
              <?php }else{  ;?>
                <i class="icon fa-check check-style" aria-hidden="true"></i>
              <?php };?>
            </div>
            <div class="timeline-content">
              <div class="title">
                <span class="authors">Formato(s) de solicitud</span>
              </div>
              <div class="metas">
                <!-- active 2 hours ago -->
              </div>
            </div>
          </div>
        </li>
        <li class="timeline-reverse timeline-item">
          <div class="timeline-content-wrap">
            <div class="timeline-dot bg-cyan-600">
              <?php if(@$pasoTres== NULL) { ;?>
                <i class="icon fa-close check-style" aria-hidden="true"></i>
              <?php }else{  ;?>
                <i class="icon fa-check check-style" aria-hidden="true"></i>
              <?php };?>
            </div>
            <div class="timeline-content">
              <div class="title">
                <span class="authors">Transcripciones </span>

              </div>
              <div class="metas">

              </div>
            </div>
          </div>
        </li>
        <li class="timeline-reverse timeline-item">
          <div class="timeline-content-wrap">
            <div class="timeline-dot bg-orange-600">
              <?php if(@$pasoCuatro== NULL) { ;?>
                <i class="icon fa-close check-style" aria-hidden="true"></i>
              <?php }else{  ;?>
                <i class="icon fa-check check-style" aria-hidden="true"></i>
              <?php };?>
            </div>
            <div class="timeline-content">
              <div class="title">
                <span class="authors">Traducción </span>

              </div>
              <div class="metas">

              </div>
            </div>
          </div>
        </li>
        <li class="timeline-reverse timeline-item">
          <div class="timeline-content-wrap">
            <div class="timeline-dot bg-blue-600">
              <?php if(@$pasoCinco== NULL) { ;?>
                <i class="icon fa-close check-style" aria-hidden="true"></i>
              <?php }else{  ;?>
                <i class="icon fa-check check-style" aria-hidden="true"></i>
              <?php };?>
            </div>
            <div class="timeline-content">
              <div class="title">
                <span class="authors">Número de aplicante </span>

              </div>
              <div class="metas">

              </div>
            </div>
          </div>
        </li>
        <li class="timeline-reverse timeline-item">
          <div class="timeline-content-wrap">
            <div class="timeline-dot bg-cyan-600">
              <?php if(@$pasoSeis== NULL) { ;?>
                <i class="icon fa-close check-style" aria-hidden="true"></i>
              <?php }else{  ;?>
                <i class="icon fa-check check-style" aria-hidden="true"></i>
              <?php };?>
            </div>
            <div class="timeline-content">
              <div class="title">
                <span class="authors">Carta </span>

              </div>
              <div class="metas">

              </div>
            </div>
          </div>
        </li>
        <li class="timeline-reverse timeline-item">
          <div class="timeline-content-wrap">
            <div class="timeline-dot bg-green-600">
              <?php if(@$pasoSiete== NULL) { ;?>
                <i class="icon fa-close check-style" aria-hidden="true"></i>
              <?php }else{  ;?>
                <i class="icon fa-check check-style" aria-hidden="true"></i>
              <?php };?>
            </div>
            <div class="timeline-content">
              <div class="title">
                <span class="authors">Examen de Inglés </span>

              </div>
              <div class="metas">

              </div>
            </div>
          </div>
        </li>
        <li class="timeline-reverse timeline-item">
          <div class="timeline-content-wrap">
            <div class="timeline-dot bg-blue-600">
              <?php if(@$pasoOcho== NULL) { ;?>
                <i class="icon fa-close check-style" aria-hidden="true"></i>
              <?php }else{  ;?>
                <i class="icon fa-check check-style" aria-hidden="true"></i>
              <?php };?>
            </div>
            <div class="timeline-content">
              <div class="title">
                <span class="authors">Visa </span>
              </div>
              <div class="metas">
                <!-- active 2 hours ago -->
              </div>
            </div>
          </div>
        </li>


      </ul>
    </div>


  <div class="card-block">

  </div>
</div>

</div>
<!-- End Right Column -->
</div>
</div>
</div>


<div class="modal fade modal-fill-in" id="exampleFillIn" aria-hidden="false" aria-labelledby="exampleFillIn"
                role="dialog" tabindex="-1">
<div class="modal-dialog modal-simple">
<div class="modal-content">
  <div class="modal-header">

    <h1 class="modal-title" id="exampleFillInModalTitle" style="color: red;">Su documento se está dando de alta.</h1>
  </div>
  <div class="modal-body">
      <h4>Su documento está en proceso.</h4>

    <div class="wrapper">
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="shadow"></div>
    <div class="shadow"></div>
    <div class="shadow"></div>
    <span>Loading</span>
</div>
  </div>
</div>
</div>
</div>
