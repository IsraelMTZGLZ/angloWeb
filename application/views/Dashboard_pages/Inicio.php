<div class="page">
    <div class="page-header h-300 mb-30" style="background: url(https://live.staticflickr.com/7497/15363260754_309df57095_k.jpg);">
      <div class="text-center blue-grey-800 m-0 mt-50">
        <div class="font-size-50 mb-30 blue-grey-800" style="color:white !important;">Anglo Latino Education Partnership</div>
        <ul class="list-inline font-size-14">
          <li class="list-inline-item" style="color:white !important;">
            <i class="icon wb-map mr-5" aria-hidden="true"></i> Anillo Vial II Junipero Serra #2450 Valle de Juriquilla II 76230, Santiago de Querétaro, Qro.
          </li>
          <li class="list-inline-item ml-20" style="color:white !important;">
            <i class="icon wb-heart mr-5" aria-hidden="true"></i> 442 260 9090
          </li>
        </ul>
      </div>
    </div>

    <div class="page-content container-fluid">
      <div class="row" data-plugin="matchHeight" data-by-row="true">
        <div class="col-xxl-3 col-xl-4" style="">
          <!-- Panel Web Designer -->
          <div class="card card-shadow">
            <div class="card-block text-center bg-white p-40">
              <div class="avatar avatar-100 mb-20">
                <img src="<?=@ ($user->photoUrl!='NULL') ? $user->photoUrl : base_url("resources/assets/Anglo/AngloLatino-sintexto.png") ;?>" alt="">
              </div>
              <p class="font-size-20 blue-grey-700" style="text-transform:capitalize;"><?=@$user->names;?> <?=@$user->paterns;?></p>
              <p class="blue-grey-400 mb-20"><?=$user->email;?></p>
              <p class="mb-35">Gracias por ingresar al sistema.
              </p>
              <button type="button" class="btn btn-primary px-40">Editar mi informacion</button>
            </div>
          </div>
          <!-- End Panel Web Designer -->
        </div>
        <div class="col-xxl-12 col-lg-4 h-p50 h-only-lg-p100 h-only-xl-p100">
              <!-- Panel Overall Sales -->
              <div class="card card-shadow card-inverse bg-blue-600 white">
                <div class="card-block p-30">
                  <div class="counter counter-lg counter-inverse text-left">
                    <div class="counter-label mb-20">
                      <div>Total de registrados hoy</div>
                    </div>
                    <div class="counter-number-group mb-15">
                      <span class="counter-number"><?=@$totalHoy['total'];?></span>
                    </div>
                    <div class="counter-label">
                      <div class="counter counter-sm text-left">
                        <div class="counter-number-group">
                          <span class="counter-number font-size-14">Fecha: &nbsp;</span>
                          <span class="counter-number-related font-size-14" style="font-size: 20px !important;"><?=@$totalHoy['fecha'];?></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Panel Overall Sales -->
            </div>
            <div class="col-xxl-12 col-lg-4 h-p50 h-only-lg-p100 h-only-xl-p100">
              <!-- Panel Overall Sales -->
              <div class="card card-shadow card-inverse bg-red-600 white">
                <div class="card-block p-30">
                  <div class="counter counter-lg counter-inverse text-left">
                    <div class="counter-label mb-20">
                      <div>Total de registrados en el mes</div>
                    </div>
                    <div class="counter-number-group mb-15">
                      <span class="counter-number"><?=@$totalMes['total'];?></span>
                    </div>
                    <div class="counter-label">
                      <div class="counter counter-sm text-left">
                        <div class="counter-number-group">
                          <span class="counter-number font-size-14">Fecha: </span>
                          <span class="counter-number-related font-size-14" style="font-size: 20px !important;"><?=@$totalMes['fechaAnterior'];?> y <?=@$totalMes['fechaFinal'];?></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Panel Overall Sales -->
            </div>
            
        
      </div>

      <div class="row" data-plugin="matchHeight" data-by-row="true">
        <div class="col-xl-4 col-lg-6" style="">
          <!-- Panel Followers -->
          <div class="panel" id="followers">
            <div class="panel-heading">
              <h3 class="panel-title">
                Followers
              </h3>
              <div class="panel-actions panel-actions-keep">
                <div class="dropdown">
                  <a class="panel-action" id="examplePanelDropdown" data-toggle="dropdown" href="#" aria-expanded="false" role="button"><i class="icon wb-more-vertical" aria-hidden="true"></i></a>
                  <div class="dropdown-menu dropdown-menu-bullet dropdown-menu-right" aria-labelledby="examplePanelDropdown" role="menu">
                    <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-flag" aria-hidden="true"></i> Action</a>
                    <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-print" aria-hidden="true"></i> Another action</a>
                    <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-heart" aria-hidden="true"></i> Something else here</a>
                    <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-share" aria-hidden="true"></i> Separated link</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="panel-body">
              <ul class="list-group list-group-dividered list-group-full h-300 scrollable is-enabled scrollable-vertical" data-plugin="scrollable" style="position: relative;">
                <div data-role="container" class="scrollable-container" style="height: 300px; width: 275px;">
                  <div data-role="content" class="scrollable-content" style="width: 260px;">
                    <li class="list-group-item">
                      <div class="media">
                        <div class="pr-20">
                          <a class="avatar avatar-online" href="javascript:void(0)">
                            <img src="../../global/portraits/9.jpg" alt="">
                            <i></i>
                          </a>
                        </div>
                        <div class="media-body w-full">
                          <div class="float-right">
                            <button type="button" class="btn btn-outline btn-default btn-sm">Follow</button>
                          </div>
                          <div>
                            <span>Willard Wood</span>
                          </div>
                          <small>@heavybutterfly920</small>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="media">
                        <div class="pr-20">
                          <a class="avatar avatar-away" href="javascript:void(0)">
                            <img src="../../global/portraits/10.jpg" alt="">
                            <i></i>
                          </a>
                        </div>
                        <div class="media-body w-full">
                          <div class="float-right">
                            <button type="button" class="btn btn-success btn-sm"><i class="icon wb-check" aria-hidden="true"></i>Following</button>
                          </div>
                          <div>
                            <span>Ronnie Ellis</span>
                          </div>
                          <small>@kingronnie24</small>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="media">
                        <div class="pr-20">
                          <a class="avatar avatar-busy" href="javascript:void(0)">
                            <img src="../../global/portraits/11.jpg" alt="">
                            <i></i>
                          </a>
                        </div>
                        <div class="media-body w-full">
                          <div class="float-right">
                            <button type="button" class="btn btn-outline btn-default btn-sm">Follow</button>
                          </div>
                          <div>
                            <span>Gwendolyn Wheeler</span>
                          </div>
                          <small>@perttygirl66</small>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="media">
                        <div class="pr-20">
                          <a class="avatar avatar-off" href="javascript:void(0)">
                            <img src="../../global/portraits/12.jpg" alt="">
                            <i></i>
                          </a>
                        </div>
                        <div class="media-body w-full">
                          <div class="float-right">
                            <button type="button" class="btn btn-outline btn-default btn-sm">Follow</button>
                          </div>
                          <div>
                            <span>Daniel Russell</span>
                          </div>
                          <small>@danieltiger08</small>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="media">
                        <div class="pr-20">
                          <a class="avatar avatar-online" href="javascript:void(0)">
                            <img src="../../global/portraits/9.jpg" alt="">
                            <i></i>
                          </a>
                        </div>
                        <div class="media-body w-full">
                          <div class="float-right">
                            <button type="button" class="btn btn-outline btn-default btn-sm">Follow</button>
                          </div>
                          <div>
                            <span>Willard Wood</span>
                          </div>
                          <small>@heavybutterfly920</small>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="media">
                        <div class="pr-20">
                          <a class="avatar avatar-away" href="javascript:void(0)">
                            <img src="../../global/portraits/10.jpg" alt="">
                            <i></i>
                          </a>
                        </div>
                        <div class="media-body w-full">
                          <div class="float-right">
                            <button type="button" class="btn btn-success btn-sm"><i class="icon wb-check" aria-hidden="true"></i>Following</button>
                          </div>
                          <div>
                            <span>Ronnie Ellis</span>
                          </div>
                          <small>@kingronnie24</small>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="media">
                        <div class="pr-20">
                          <a class="avatar avatar-busy" href="javascript:void(0)">
                            <img src="../../global/portraits/11.jpg" alt="">
                            <i></i>
                          </a>
                        </div>
                        <div class="media-body w-full">
                          <div class="float-right">
                            <button type="button" class="btn btn-outline btn-default btn-sm">Follow</button>
                          </div>
                          <div>
                            <span>Gwendolyn Wheeler</span>
                          </div>
                          <small>@perttygirl66</small>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="media">
                        <div class="pr-20">
                          <a class="avatar avatar-off" href="javascript:void(0)">
                            <img src="../../global/portraits/12.jpg" alt="">
                            <i></i>
                          </a>
                        </div>
                        <div class="media-body w-full">
                          <div class="float-right">
                            <button type="button" class="btn btn-outline btn-default btn-sm">Follow</button>
                          </div>
                          <div>
                            <span>Daniel Russell</span>
                          </div>
                          <small>@danieltiger08</small>
                        </div>
                      </div>
                    </li>
                  </div>
                </div>
              <div class="scrollable-bar scrollable-bar-vertical scrollable-bar-hide" draggable="false"><div class="scrollable-bar-handle" style="height: 95.114px;"></div></div></ul>
            </div>
          </div>
          <!-- End Panel Followers -->
        </div>

        <div class="col-xl-4 col-lg-6" style="">
          <!-- Panel Tickets -->
          <div class="panel">
            <div class="panel-heading">
              <h3 class="panel-title">Tickets</h3>
              <div class="panel-actions panel-actions-keep">
                <div class="dropdown">
                  <a class="panel-action" id="examplePanelDropdown" data-toggle="dropdown" href="#" aria-expanded="false" role="button"><i class="icon wb-more-vertical" aria-hidden="true"></i></a>
                  <div class="dropdown-menu dropdown-menu-bullet dropdown-menu-right" aria-labelledby="examplePanelDropdown" role="menu">
                    <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-flag" aria-hidden="true"></i> Action</a>
                    <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-print" aria-hidden="true"></i> Another action</a>
                    <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-heart" aria-hidden="true"></i> Something else here</a>
                    <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-share" aria-hidden="true"></i> Separated link</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="panel-body">
              <ul class="list-group list-group-dividered list-group-full h-300 scrollable is-enabled scrollable-vertical" data-plugin="scrollable" style="position: relative;">
                <div data-role="container" class="scrollable-container" style="height: 300px; width: 275px;">
                  <div data-role="content" class="scrollable-content" style="width: 260px;">
                    <li class="list-group-item justify-content-between">
                      <small class="badge badge-round badge-info float-right">Completed</small>
                      <p>
                        <span>Server unavaible</span>
                        <span>[13060]</span>
                      </p>
                      <small>Opened by
                        <a class="hightlight" href="javascript:void(0)">
                          <span class="avatar avatar-xs">
                            <img src="../../global/portraits/1.jpg" alt="">
                          </span>
                          <span>Herman Beck</span>
                        </a>
                        <time datetime="2018-07-01T08:55">2 hours ago</time>
                      </small>
                    </li>
                    <li class="list-group-item justify-content-between">
                      <small class="badge badge-round badge-warning float-right">Pendening</small>
                      <p>
                        <span>Mobile App Problem</span>
                        <span>[13061]</span>
                      </p>
                      <small>Opened by
                        <a class="hightlight" href="javascript:void(0)">
                          <span class="avatar avatar-xs">
                            <img src="../../global/portraits/2.jpg" alt="">
                          </span>
                          <span>Mary Adams</span>
                        </a>
                        <time datetime="2018-07-01T07:55">1 hour ago</time>
                      </small>
                    </li>
                    <li class="list-group-item justify-content-between">
                      <small class="badge badge-round badge-primary float-right">In progress</small>
                      <p>
                        <span>IE8 problem</span>
                        <span>[13062]</span>
                      </p>
                      <small>Opened by
                        <a class="hightlight" href="javascript:void(0)">
                          <span class="avatar avatar-xs">
                            <img src="../../global/portraits/3.jpg" alt="">
                          </span>
                          <span>Caleb Richards</span>
                        </a>
                        <time datetime="2018-06-28T21:05">3 days ago</time>
                      </small>
                    </li>
                    <li class="list-group-item justify-content-between">
                      <small class="badge badge-round badge-danger float-right">Rejected</small>
                      <p>
                        <span>Respoonsive problem</span>
                        <span>[13063]</span>
                      </p>
                      <small>Opened by
                        <a class="hightlight" href="javascript:void(0)">
                          <span class="avatar avatar-xs">
                            <img src="../../global/portraits/4.jpg" alt="">
                          </span>
                          <span>June Lane</span>
                        </a>
                        <time datetime="2018-06-27T13:05">4 days ago</time>
                      </small>
                    </li>
                    <li class="list-group-item justify-content-between">
                      <small class="badge badge-round badge-info float-right">Completed</small>
                      <p>
                        <span>Server unavaible</span>
                        <span>[13060]</span>
                      </p>
                      <small>Opened by
                        <a class="hightlight" href="javascript:void(0)">
                          <span class="avatar avatar-xs">
                            <img src="../../global/portraits/5.jpg" alt="">
                          </span>
                          <span>Herman Beck</span>
                        </a>
                        <time datetime="2018-07-01T08:55">2 hours ago</time>
                      </small>
                    </li>
                    <li class="list-group-item justify-content-between">
                      <small class="badge badge-round badge-warning float-right">Pendening</small>
                      <p>
                        <span>Mobile App Problem</span>
                        <span>[13061]</span>
                      </p>
                      <small>Opened by
                        <a class="hightlight" href="javascript:void(0)">
                          <span class="avatar avatar-xs">
                            <img src="../../global/portraits/6.jpg" alt="">
                          </span>
                          <span>Mary Adams</span>
                        </a>
                        <time datetime="2018-07-01T07:55">1 hour ago</time>
                      </small>
                    </li>
                    <li class="list-group-item justify-content-between">
                      <small class="badge badge-round badge-primary float-right">In progress</small>
                      <p>
                        <span>IE8 problem</span>
                        <span>[13062]</span>
                      </p>
                      <small>Opened by
                        <a class="hightlight" href="javascript:void(0)">
                          <span class="avatar avatar-xs">
                            <img src="../../global/portraits/7.jpg" alt="">
                          </span>
                          <span>Caleb Richards</span>
                        </a>
                        <time datetime="2018-06-28T21:05">3 days ago</time>
                      </small>
                    </li>
                    <li class="list-group-item justify-content-between">
                      <small class="badge badge-round badge-danger float-right">Rejected</small>
                      <p>
                        <span>Respoonsive problem</span>
                        <span>[13063]</span>
                      </p>
                      <small>Opened by
                        <a class="hightlight" href="javascript:void(0)">
                          <span class="avatar avatar-xs">
                            <img src="../../global/portraits/8.jpg" alt="">
                          </span>
                          <span>June Lane</span>
                        </a>
                        <time datetime="2018-06-27T13:05">4 days ago</time>
                      </small>
                    </li>
                  </div>
                </div>
              <div class="scrollable-bar scrollable-bar-vertical scrollable-bar-hide" draggable="false"><div class="scrollable-bar-handle" style="height: 136.661px; transform: translate3d(0px, 155.339px, 0px);"></div></div></ul>
            </div>
          </div>
          <!-- End Panel Tickets -->
        </div>

        <div class="col-xl-4 col-lg-12" style="">
          <!-- Panel Title -->
          <div class="card card-shadow" id="widgetGmap">
            <div class="map h-full" id="gmap" style="position: relative; overflow: hidden;"><div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);"><div class="gm-style" style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px;"><div tabindex="0" style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; cursor: url(&quot;https://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;), default; touch-action: pan-x pan-y;"><div style="z-index: 1; position: absolute; left: 50%; top: 50%; width: 100%; transform: translate(0px, 0px);"><div style="position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div style="position: absolute; z-index: 985; transform: matrix(1, 0, 0, 1, -182, -96);"><div style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: -256px; top: 0px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: -256px; top: -256px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: 0px; top: -256px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: 256px; top: -256px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: 256px; top: 0px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: 256px; top: 256px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: 0px; top: 256px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: -256px; top: 256px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div></div></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div style="position: absolute; z-index: 985; transform: matrix(1, 0, 0, 1, -182, -96);"><div style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.google.com/maps/vt?pb=!1m5!1m4!1i15!2i9372!3i17488!4i256!2m3!1e0!2sm!3i510224828!2m3!1e2!6m1!3e5!3m17!2ses-MX!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;token=41565" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: -256px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.google.com/maps/vt?pb=!1m5!1m4!1i15!2i9371!3i17487!4i256!2m3!1e0!2sm!3i510224864!2m3!1e2!6m1!3e5!3m17!2ses-MX!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;token=90198" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: -256px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.google.com/maps/vt?pb=!1m5!1m4!1i15!2i9371!3i17488!4i256!2m3!1e0!2sm!3i510224864!2m3!1e2!6m1!3e5!3m17!2ses-MX!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;token=125892" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 256px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.google.com/maps/vt?pb=!1m5!1m4!1i15!2i9373!3i17489!4i256!2m3!1e0!2sm!3i510224828!2m3!1e2!6m1!3e5!3m17!2ses-MX!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;token=74326" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 256px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.google.com/maps/vt?pb=!1m5!1m4!1i15!2i9373!3i17488!4i256!2m3!1e0!2sm!3i510224828!2m3!1e2!6m1!3e5!3m17!2ses-MX!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;token=38632" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 256px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.google.com/maps/vt?pb=!1m5!1m4!1i15!2i9373!3i17487!4i256!2m3!1e0!2sm!3i510224828!2m3!1e2!6m1!3e5!3m17!2ses-MX!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;token=2938" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: -256px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.google.com/maps/vt?pb=!1m5!1m4!1i15!2i9371!3i17489!4i256!2m3!1e0!2sm!3i510224828!2m3!1e2!6m1!3e5!3m17!2ses-MX!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;token=80192" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 0px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.google.com/maps/vt?pb=!1m5!1m4!1i15!2i9372!3i17487!4i256!2m3!1e0!2sm!3i510224828!2m3!1e2!6m1!3e5!3m17!2ses-MX!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;token=5871" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 0px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.google.com/maps/vt?pb=!1m5!1m4!1i15!2i9372!3i17489!4i256!2m3!1e0!2sm!3i510224828!2m3!1e2!6m1!3e5!3m17!2ses-MX!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;token=77259" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div></div></div></div><div class="gm-style-pbc" style="z-index: 2; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; opacity: 0;"><p class="gm-style-pbt"></p></div><div style="z-index: 3; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; touch-action: pan-x pan-y;"><div style="z-index: 4; position: absolute; left: 50%; top: 50%; width: 100%; transform: translate(0px, 0px);"><div style="position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;"></div></div></div></div><iframe aria-hidden="true" frameborder="0" tabindex="-1" style="z-index: -1; position: absolute; width: 100%; height: 100%; top: 0px; left: 0px; border: none;"></iframe><div style="margin-left: 5px; margin-right: 5px; z-index: 1000000; position: absolute; left: 0px; bottom: 0px;"><a target="_blank" rel="noopener" href="https://maps.google.com/maps?ll=-12.043333,-77.028333&amp;z=15&amp;hl=es-MX&amp;gl=US&amp;mapclient=apiv3" title="Abrir esta área en Google&nbsp;Maps (se abre en una ventana nueva)" style="position: static; overflow: visible; float: none; display: inline;"><div style="width: 66px; height: 26px; cursor: pointer;"><img alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/google_white5.png" draggable="false" style="position: absolute; left: 0px; top: 0px; width: 66px; height: 26px; user-select: none; border: 0px; padding: 0px; margin: 0px;"></div></a></div><div style="background-color: white; padding: 15px 21px; border: 1px solid rgb(171, 171, 171); font-family: Roboto, Arial, sans-serif; color: rgb(34, 34, 34); box-sizing: border-box; box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 16px; z-index: 10000002; display: none; width: 290px; height: 0px; position: absolute; left: 5px; top: 5px;"><div style="padding: 0px 0px 10px; font-size: 16px; box-sizing: border-box;">Datos del mapa</div><div style="font-size: 13px;">Datos del mapa ©2020</div><button draggable="false" title="Cerrar" aria-label="Cerrar" type="button" class="gm-ui-hover-effect" style="background: none; display: block; border: 0px; margin: 0px; padding: 0px; position: absolute; cursor: pointer; user-select: none; top: 0px; right: 0px; width: 37px; height: 37px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224px%22%20height%3D%2224px%22%20viewBox%3D%220%200%2024%2024%22%20fill%3D%22%23000000%22%3E%0A%20%20%20%20%3Cpath%20d%3D%22M19%206.41L17.59%205%2012%2010.59%206.41%205%205%206.41%2010.59%2012%205%2017.59%206.41%2019%2012%2013.41%2017.59%2019%2019%2017.59%2013.41%2012z%22%2F%3E%0A%20%20%20%20%3Cpath%20d%3D%22M0%200h24v24H0z%22%20fill%3D%22none%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="pointer-events: none; display: block; width: 13px; height: 13px; margin: 12px;"></button></div><div class="gmnoprint" style="z-index: 1000001; position: absolute; right: 211px; bottom: 0px; width: 82px;"><div draggable="false" class="gm-style-cc" style="user-select: none; height: 14px; line-height: 14px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a style="text-decoration: none; cursor: pointer;">Datos del mapa</a><span style="display: none;">Datos del mapa ©2020</span></div></div></div><div class="gmnoscreen" style="position: absolute; right: 0px; bottom: 0px;"><div style="font-family: Roboto, Arial, sans-serif; font-size: 11px; color: rgb(68, 68, 68); direction: ltr; text-align: right; background-color: rgb(245, 245, 245);">Datos del mapa ©2020</div></div><div class="gmnoprint gm-style-cc" draggable="false" style="z-index: 1000001; user-select: none; height: 14px; line-height: 14px; position: absolute; right: 0px; bottom: 0px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a href="https://www.google.com/intl/es-MX_US/help/terms_maps.html" target="_blank" rel="noopener" style="text-decoration: none; cursor: pointer; color: rgb(68, 68, 68);">Condiciones del Servicio</a></div></div><button draggable="false" title="Activar o desactivar la vista de pantalla completa" aria-label="Activar o desactivar la vista de pantalla completa" type="button" class="gm-control-active gm-fullscreen-control" style="background: none rgb(255, 255, 255); border: 0px; margin: 10px; padding: 0px; position: absolute; cursor: pointer; user-select: none; border-radius: 2px; height: 40px; width: 40px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; overflow: hidden; top: 0px; right: 0px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%20018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23666%22%20d%3D%22M0%2C0v2v4h2V2h4V0H2H0z%20M16%2C0h-4v2h4v4h2V2V0H16z%20M16%2C16h-4v2h4h2v-2v-4h-2V16z%20M2%2C12H0v4v2h2h4v-2H2V12z%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23333%22%20d%3D%22M0%2C0v2v4h2V2h4V0H2H0z%20M16%2C0h-4v2h4v4h2V2V0H16z%20M16%2C16h-4v2h4h2v-2v-4h-2V16z%20M2%2C12H0v4v2h2h4v-2H2V12z%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23111%22%20d%3D%22M0%2C0v2v4h2V2h4V0H2H0z%20M16%2C0h-4v2h4v4h2V2V0H16z%20M16%2C16h-4v2h4h2v-2v-4h-2V16z%20M2%2C12H0v4v2h2h4v-2H2V12z%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px;"></button><div class="gmnoprint gm-bundled-control" draggable="false" controlwidth="40" controlheight="81" style="margin: 10px; user-select: none; position: absolute; left: 0px; top: 0px;"><div class="gmnoprint" controlwidth="40" controlheight="81" style="position: absolute; left: 0px; top: 0px;"><div draggable="false" style="user-select: none; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px; cursor: pointer; background-color: rgb(255, 255, 255); width: 40px; height: 81px;"><button draggable="false" title="Acercar" aria-label="Acercar" type="button" class="gm-control-active" style="background: none; display: block; border: 0px; margin: 0px; padding: 0px; position: relative; cursor: pointer; user-select: none; overflow: hidden; width: 40px; height: 40px; top: 0px; left: 0px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpolygon%20fill%3D%22%23666%22%20points%3D%2218%2C7%2011%2C7%2011%2C0%207%2C0%207%2C7%200%2C7%200%2C11%207%2C11%207%2C18%2011%2C18%2011%2C11%2018%2C11%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpolygon%20fill%3D%22%23333%22%20points%3D%2218%2C7%2011%2C7%2011%2C0%207%2C0%207%2C7%200%2C7%200%2C11%207%2C11%207%2C18%2011%2C18%2011%2C11%2018%2C11%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpolygon%20fill%3D%22%23111%22%20points%3D%2218%2C7%2011%2C7%2011%2C0%207%2C0%207%2C7%200%2C7%200%2C11%207%2C11%207%2C18%2011%2C18%2011%2C11%2018%2C11%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px;"></button><div style="position: relative; overflow: hidden; width: 30px; height: 1px; margin: 0px 5px; background-color: rgb(230, 230, 230); top: 0px;"></div><button draggable="false" title="Alejar" aria-label="Alejar" type="button" class="gm-control-active" style="background: none; display: block; border: 0px; margin: 0px; padding: 0px; position: relative; cursor: pointer; user-select: none; overflow: hidden; width: 40px; height: 40px; top: 0px; left: 0px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23666%22%20d%3D%22M0%2C7h18v4H0V7z%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23333%22%20d%3D%22M0%2C7h18v4H0V7z%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23111%22%20d%3D%22M0%2C7h18v4H0V7z%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px;"></button></div></div></div><div class="gmnoprint gm-bundled-control gm-bundled-control-on-bottom" draggable="false" controlwidth="0" controlheight="0" style="margin: 10px; user-select: none; position: absolute; display: none; bottom: 26px; left: 0px;"><div class="gmnoprint" controlwidth="40" controlheight="40" style="display: none; position: absolute;"><div style="width: 40px; height: 40px;"><button draggable="false" title="Rotar mapa 90&nbsp;grados" aria-label="Rotar mapa 90&nbsp;grados" type="button" class="gm-control-active" style="background: none rgb(255, 255, 255); display: none; border: 0px; margin: 0px 0px 32px; padding: 0px; position: relative; cursor: pointer; user-select: none; width: 40px; height: 40px; top: 0px; left: 0px; overflow: hidden; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224%22%20height%3D%2222%22%20viewBox%3D%220%200%2024%2022%22%3E%0A%20%20%3Cpath%20fill%3D%22%23666%22%20fill-rule%3D%22evenodd%22%20d%3D%22M20%2010c0-5.52-4.48-10-10-10s-10%204.48-10%2010v5h5v-5c0-2.76%202.24-5%205-5s5%202.24%205%205v5h-4l6.5%207%206.5-7h-4v-5z%22%20clip-rule%3D%22evenodd%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224%22%20height%3D%2222%22%20viewBox%3D%220%200%2024%2022%22%3E%0A%20%20%3Cpath%20fill%3D%22%23333%22%20fill-rule%3D%22evenodd%22%20d%3D%22M20%2010c0-5.52-4.48-10-10-10s-10%204.48-10%2010v5h5v-5c0-2.76%202.24-5%205-5s5%202.24%205%205v5h-4l6.5%207%206.5-7h-4v-5z%22%20clip-rule%3D%22evenodd%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224%22%20height%3D%2222%22%20viewBox%3D%220%200%2024%2022%22%3E%0A%20%20%3Cpath%20fill%3D%22%23111%22%20fill-rule%3D%22evenodd%22%20d%3D%22M20%2010c0-5.52-4.48-10-10-10s-10%204.48-10%2010v5h5v-5c0-2.76%202.24-5%205-5s5%202.24%205%205v5h-4l6.5%207%206.5-7h-4v-5z%22%20clip-rule%3D%22evenodd%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px;"></button><button draggable="false" title="Inclinar el mapa" aria-label="Inclinar el mapa" type="button" class="gm-tilt gm-control-active" style="background: none rgb(255, 255, 255); display: block; border: 0px; margin: 0px; padding: 0px; position: relative; cursor: pointer; user-select: none; width: 40px; height: 40px; top: 0px; left: 0px; overflow: hidden; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218px%22%20height%3D%2216px%22%20viewBox%3D%220%200%2018%2016%22%3E%0A%20%20%3Cpath%20fill%3D%22%23666%22%20d%3D%22M0%2C16h8V9H0V16z%20M10%2C16h8V9h-8V16z%20M0%2C7h8V0H0V7z%20M10%2C0v7h8V0H10z%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218px%22%20height%3D%2216px%22%20viewBox%3D%220%200%2018%2016%22%3E%0A%20%20%3Cpath%20fill%3D%22%23333%22%20d%3D%22M0%2C16h8V9H0V16z%20M10%2C16h8V9h-8V16z%20M0%2C7h8V0H0V7z%20M10%2C0v7h8V0H10z%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218px%22%20height%3D%2216px%22%20viewBox%3D%220%200%2018%2016%22%3E%0A%20%20%3Cpath%20fill%3D%22%23111%22%20d%3D%22M0%2C16h8V9H0V16z%20M10%2C16h8V9h-8V16z%20M0%2C7h8V0H0V7z%20M10%2C0v7h8V0H10z%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="width: 18px;"></button></div></div></div><div draggable="false" class="gm-style-cc" style="position: absolute; user-select: none; height: 14px; line-height: 14px; right: 121px; bottom: 0px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><span>200 m&nbsp;</span><div style="position: relative; display: inline-block; height: 8px; bottom: -1px; width: 47px;"><div style="width: 100%; height: 4px; position: absolute; left: 0px; top: 0px;"></div><div style="width: 4px; height: 8px; left: 0px; top: 0px; background-color: rgb(255, 255, 255);"></div><div style="width: 4px; height: 8px; position: absolute; background-color: rgb(255, 255, 255); right: 0px; bottom: 0px;"></div><div style="position: absolute; background-color: rgb(102, 102, 102); height: 2px; left: 1px; bottom: 1px; right: 1px;"></div><div style="position: absolute; width: 2px; height: 6px; left: 1px; top: 1px; background-color: rgb(102, 102, 102);"></div><div style="width: 2px; height: 6px; position: absolute; background-color: rgb(102, 102, 102); bottom: 1px; right: 1px;"></div></div></div></div></div></div><div style="background-color: white; font-weight: 500; font-family: Roboto, sans-serif; padding: 15px 25px; box-sizing: border-box; top: 5px; border: 1px solid rgba(0, 0, 0, 0.12); border-radius: 5px; left: 50%; max-width: 375px; position: absolute; transform: translateX(-50%); width: calc(100% - 10px); z-index: 1;"><div><img alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/google_gray.svg" draggable="false" style="padding: 0px; margin: 0px; border: 0px; height: 17px; vertical-align: middle; width: 52px; user-select: none;"></div><div style="line-height: 20px; margin: 15px 0px;"><span style="color: rgba(0, 0, 0, 0.87); font-size: 14px;">Esta página no puede cargar Google&nbsp;Maps correctamente.</span></div><table style="width: 100%;"><tr><td style="line-height: 16px; vertical-align: middle;"><a href="https://developers.google.com/maps/documentation/javascript/error-messages?utm_source=maps_js&amp;utm_medium=degraded&amp;utm_campaign=keyless#api-key-and-billing-errors" target="_blank" rel="noopener" style="color: rgba(0, 0, 0, 0.54); font-size: 12px;">¿Eres el propietario de este sitio web?</a></td><td style="text-align: right;"><button class="dismissButton">Aceptar</button></td></tr></table></div></div>
          </div>
          <!-- End Panel Title -->
        </div>
      </div>
    </div>
  </div>