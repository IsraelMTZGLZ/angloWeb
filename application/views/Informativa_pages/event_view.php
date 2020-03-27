
<link rel="stylesheet" type="text/css" href="<?=base_url('resources/assets/Informativa/css/timeline.css');?>" />

    <div class="page_title_section float_left">

        <div class="page_header">
            <div class="container">
                <div class="row">
                    <!-- section_heading start -->
                    <div class="col-lg-12 col-md-12 col-12 col-sm-12">

                        <h1><?=$this->lang->line('event');?></h1>
                    </div>
                    <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                        <div class="sub_title_section">
                            <ul class="sub_title">
                                <li> </li>

                                <li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- navi wrapper End -->
<!--blog wrapper start-->
<div class="comming_main_wrapper float_left">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="comming_wrapper float_left">
                    <div class="comming_top_header float_left">
                        <div class="comming_logo">
                            <a href="#"> <img src="<?=base_url('resources/assets/Anglo/LOGOTIPO-AngloLatin.png');?>" alt="logo"></a>
                        </div>
                        <div class="comming_about">

                        </div>

                    </div>
                    <h1><?=$this->lang->line('event_title_coming');?>.</h1>


                    <div class="timer_wrapper float_left">

                        <div id="clockdiv">
                            <div><span class="days"></span>
                                <div class="smalltext">Days</div>
                            </div>
                            <div><span class="hours"></span>
                                <div class="smalltext">Hours</div>
                            </div>
                            <div><span class="minutes"></span>
                                <div class="smalltext">Minutes</div>
                            </div>
                            <div><span class="seconds"></span>
                                <div class="smalltext">Seconds</div>
                            </div>
                        </div>

                    </div>

                    <div class="comming_soon_form comments_form  float_left">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="cp_heading_wraper">

                                        <h3><?=$this->lang->line('event_sub_coming');?></h3>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
<!-- <div class="blog_wrapper float_left">
    <div class="container">
        <div class="row">

            <div class="comments_form float_left">

              <div class="row">
                  <div class="col-md-12">
                      <div class="main-timeline">
                        <div class="">


                          <a href="#.bd-example-modal-lg" class="timeline" >
                              <div class="timeline-icon" ><i class="far fa-calendar-plus" aria-hidden="true"></i></div>
                              <div class="timeline-content">
                                  <h3 class="title">Feria Lunes 14 de noviembre </h3>
                                  <p class="description">
                                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate ducimus officiis quod! Aperiam eveniet nam nostrum odit quasi ullam voluptatum.
                                  </p>

                              </div>
                          </a>
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Reservar</button>

                          </div>
                          <a href="#" class="timeline">
                              <div class="timeline-icon"><i class="fa fa-rocket"></i></div>
                              <div class="timeline-content">
                                  <h3 class="title">Web Developer</h3>
                                  <p class="description">
                                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate ducimus officiis quod! Aperiam eveniet nam nostrum odit quasi ullam voluptatum.
                                  </p>
                              </div>
                          </a>
                          <a href="#" class="timeline">
                              <div class="timeline-icon"><i class="fa fa-briefcase"></i></div>
                              <div class="timeline-content">
                                  <h3 class="title">Web Designer</h3>
                                  <p class="description">
                                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate ducimus officiis quod! Aperiam eveniet nam nostrum odit quasi ullam voluptatum.
                                  </p>
                              </div>
                          </a>
                          <a href="#" class="timeline">
                              <div class="timeline-icon"><i class="fa fa-mobile"></i></div>
                              <div class="timeline-content">
                                  <h3 class="title">Web Developer</h3>
                                  <p class="description">
                                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate ducimus officiis quod! Aperiam eveniet nam nostrum odit quasi ullam voluptatum.
                                  </p>
                              </div>
                          </a>
                          <a href="#" class="timeline">
                              <div class="timeline-icon"><i class="fa fa-calendar-plus"></i></div>
                              <div class="timeline-content">
                                  <h3 class="title">Web Developer</h3>
                                  <p class="description">
                                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate ducimus officiis quod! Aperiam eveniet nam nostrum odit quasi ullam voluptatum.
                                  </p>
                              </div>
                          </a>
                          <a href="#" class="timeline">
                              <div class="timeline-icon"><i class="fa fa-calendar-plus"></i></div>
                              <div class="timeline-content">
                                  <h3 class="title">Web Developer</h3>
                                  <p class="description">
                                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate ducimus officiis quod! Aperiam eveniet nam nostrum odit quasi ullam voluptatum.
                                  </p>
                              </div>
                          </a>
                      </div>
                  </div>
              </div>

            </div>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Large modal</button>

        </div>
    </div>
</div> -->

<script>
    //************* time counter ***********//

    var deadline = 'may 10 2020 11:59:00 GMT-0400';

    function time_remaining(endtime) {
        var t = Date.parse(endtime) - Date.parse(new Date());
        var seconds = Math.floor((t / 1000) % 60);
        var minutes = Math.floor((t / 1000 / 60) % 60);
        var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
        var days = Math.floor(t / (1000 * 60 * 60 * 24));
        return {
            'total': t,
            'days': days,
            'hours': hours,
            'minutes': minutes,
            'seconds': seconds
        };
    }

    function run_clock(id, endtime) {
        var clock = document.getElementById(id);

        // get spans where our clock numbers are held
        var days_span = clock.querySelector('.days');
        var hours_span = clock.querySelector('.hours');
        var minutes_span = clock.querySelector('.minutes');
        var seconds_span = clock.querySelector('.seconds');

        function update_clock() {
            var t = time_remaining(endtime);

            // update the numbers in each part of the clock
            days_span.innerHTML = t.days;
            hours_span.innerHTML = ('0' + t.hours).slice(-2);
            minutes_span.innerHTML = ('0' + t.minutes).slice(-2);
            seconds_span.innerHTML = ('0' + t.seconds).slice(-2);

            if (t.total <= 0) {
                clearInterval(timeinterval);
            }
        }
        update_clock();
        var timeinterval = setInterval(update_clock, 1000);
    }
    run_clock('clockdiv', deadline);
</script>
