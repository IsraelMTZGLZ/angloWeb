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
  width: 1000px;
  text-align: center;
}

.wrapper {
  padding-top: 40px;
  padding-bottom: 40px;

  &:focus {
    outline: 0;
  }
}


.clash-card {
  background: white;
  width: auto;
  display: inline-block;
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


</style>
<div class="page_title_section float_left">

  <div class="page_header">
      <div class="container">
          <div class="row">
              <!-- section_heading start -->
              <div class="col-lg-12 col-md-12 col-12 col-sm-12">

                  <h1><?=$this->lang->line('offer_edictiva_us');?></h1>
              </div>
          </div>
      </div>
  </div>
</div>
</div>



<div class="gallery_wrapper float_left" style="margin-bottom: -200px;">
  <div class="container">
      <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-12">
              <ul class="protfoli_filter">
                  <li  class="active" data-filter="*"><a href="#"> Todos</a></li>

                  <li data-filter=".website"><a href="#">Universidades</a></li>
                  <li data-filter=".design"><a href="#">Preparatorias</a></li>
                  <li data-filter=".ux_ui"><a href="#">Escuelas de inglés</a></li>
                  <li data-filter=".ux_uy"><a href="#">Cursos de verano</a></li>
                  <li data-filter=".ux_uyy"><a href="#">Cursos de verano de inglés</a></li>
              </ul>
          </div>

          <div class="col-lg-12 col-md-12 col-sm-12 col-12">
              <div class="row portfoli_inner">
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 website">
                      <div class="portfolio_item">
                        <img src="<?=base_url('resources/assets/Informativa/images/u_bathh.jpg');?>" alt="">
                          <div class="portfolio_hover">
                              <div class="row" style="display: flex;align-items: center;justify-content: center;background: white;">
                                <div class="col-7">
                                  <img src="<?=base_url('resources/assets/Informativa/images/lu_bath.png');?>">
                                </div>
                                <div class="col-5">
                                   <a data-toggle="modal" data-target="#BathUniModal">University of Bath</a>                                   </div>
                              </div>
                              <div class="zoom_popup d-none d-lg-block d-xl-block">
                                  <i class=""><button type="button" class="btn btn-primary flaticon-add" data-toggle="modal" data-target="#BathUniModal"></button></i>                                </div>
                             </div>
                             <a data-toggle="modal" data-target="#BathUniModal"><div class="portfolio_overlay"></div></a>
                      </div>
                  </div>
                  <!-- Items -->
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 website">
                      <div class="portfolio_item">
                          <img src="<?=base_url('resources/assets/Informativa/images/u_bristool.jpg');?>" alt="">
                          <div class="portfolio_hover">
                              <div class="row" style="display: flex;align-items: center;justify-content: center;background: white;">
                                <div class="col-7">
                                  <img src="<?=base_url('resources/assets/Informativa/images/lu_bristol.png');?>">
                                </div>
                                <div class="col-5">
                                   <a data-toggle="modal" data-target="#bristolModal">University of Bristol</a>                                   </div>
                              </div>
                               <div class="zoom_popup">
                                    <i class=""><button type="button" class="btn btn-primary flaticon-add" data-toggle="modal" data-target="#bristolModal"></button></i>
                               </div>
                          </div>
                          <a data-toggle="modal" data-target="#bristolModal"><div class="portfolio_overlay"></div></a>
                      </div>
                  </div>

                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 website ">
                      <div class="portfolio_item">
                          <img src="<?=base_url('resources/assets/Informativa/images/u_arts.jpg');?>" alt="">
                          <div class="portfolio_hover">
                              <div class="row" style="display: flex;align-items: center;justify-content: center;background: white;">
                                <div class="col-7">
                                  <img style="width: 80%" src="<?=base_url('resources/assets/Informativa/images/lu_cambriadge.png');?>">
                                </div>
                                <div class="col-5">
                                   <a data-toggle="modal" data-target="#artsModal">Cambridge School of Visual & Performing Arts</a></div>
                              </div>
                              <div class="zoom_popup">
                                   <i class=""><button type="button" class="btn btn-primary flaticon-add" data-toggle="modal" data-target="#artsModal"></button></i>
                              </div>

                          </div>
                        <a data-toggle="modal" data-target="#artsModal"><div class="portfolio_overlay"></div></a>
                      </div>
                  </div>
                  <!-- Items -->
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 website ">
                      <div class="portfolio_item">
                          <img src="<?=base_url('resources/assets/Informativa/images/u_queen-mary.jpg');?>" alt="">
                          <div class="portfolio_hover">
                              <div class="row" style="display: flex;align-items: center;justify-content: center;background: white;">
                                <div class="col-7">
                                  <img src="<?=base_url('resources/assets/Informativa/images/lu_queen-mary.png');?>">
                                </div>
                                <div class="col-5">
                                   <a data-toggle="modal" data-target="#queenModal">Queen Mary University of London</a>                                   </div>
                              </div>
                               <div class="zoom_popup">
                                    <i class=""><button type="button" class="btn btn-primary flaticon-add" data-toggle="modal" data-target="#queenModal"></button></i>
                               </div>
                          </div>
                       <a data-toggle="modal" data-target="#queenModal"><div class="portfolio_overlay"></div></a>
                      </div>
                  </div>
                  <!-- Items -->
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 website  ">
                      <div class="portfolio_item">
                          <img src="<?=base_url('resources/assets/Informativa/images/u_east-anglia.jpg');?>" alt="">
                          <div class="portfolio_hover">
                              <div class="row" style="display: flex;align-items: center;justify-content: center;background: white;">
                                <div class="col-7">
                                  <img style="width: 80%" src="<?=base_url('resources/assets/Informativa/images/lu_uea.png');?>">
                                </div>
                                <div class="col-5">
                                  <a data-toggle="modal" data-target="#ueaModal">University of East Anglia</a>
                                </div>
                              </div>
                              <div class="zoom_popup">
                                   <i class=""><button type="button" class="btn btn-primary flaticon-add" data-toggle="modal" data-target="#ueaModal"></button></i>
                              </div>
                          </div>
                     <a data-toggle="modal" data-target="#ueaModal"><div class="portfolio_overlay"></div></a>
                      </div>
                  </div>

                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12  website  ">
                      <div class="portfolio_item">
                          <img src="<?=base_url('resources/assets/Informativa/images/u_west-of-england.jpg');?>" alt="">
                          <div class="portfolio_hover">
                              <div class="row" style="display: flex;align-items: center;justify-content: center;background: white;">
                                <div class="col-7">
                                  <img src="<?=base_url('resources/assets/Informativa/images/lu_uwe.png');?>">
                                </div>
                                <div class="col-5">
                                  <a data-toggle="modal" data-target="#uweModal"> University of the West of England</a>
                                </div>
                              </div>
                              <div class="zoom_popup">
                                   <i class=""><button type="button" class="btn btn-primary flaticon-add" data-toggle="modal" data-target="#uweModal"></button></i>
                              </div>
                          </div>
                        <a data-toggle="modal" data-target="#uweModal"><div class="portfolio_overlay"></div></a>
                      </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12  website">
                      <div class="portfolio_item">
                          <img src="<?=base_url('resources/assets/Informativa/images/u_into.png');?>" alt="">
                          <div class="portfolio_hover">
                              <div class="row" style="display: flex;align-items: center;justify-content: center;background: white;">
                                <div class="col-7">
                                  <img style="width: 80%" src="<?=base_url('resources/assets/Informativa/images/lu_conventru.png');?>">
                                </div>
                                <div class="col-5">
                                  <a data-toggle="modal" data-target="#coventryModal"> Coventry University</a>
                                </div>
                              </div>
                              <div class="zoom_popup">
                                   <i class=""><button type="button" class="btn btn-primary flaticon-add" data-toggle="modal" data-target="#coventryModal"></button></i>
                              </div>
                          </div>
                   <a data-toggle="modal" data-target="#coventryModal"><div class="portfolio_overlay"></div></a>
                      </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12  website">
                      <div class="portfolio_item">
                          <img src="<?=base_url('resources/assets/Informativa/images/u_crandfiel.jpg');?>" alt="">
                          <div class="portfolio_hover">
                              <div class="row" style="display: flex;align-items: center;justify-content: center;background: white;">
                                <div class="col-7">
                                  <img src="<?=base_url('resources/assets/Informativa/images/lu_cranfield.png');?>">
                                </div>
                                <div class="col-5">
                                  <a data-toggle="modal" data-target="#cranfieldModal"> Cranfield University </a>
                                </div>
                              </div>
                              <div class="zoom_popup">
                                   <i class=""><button type="button" class="btn btn-primary flaticon-add" data-toggle="modal" data-target="#cranfieldModal"></button></i>
                              </div>
                          </div>
                      <a data-toggle="modal" data-target="#cranfieldModal"><div class="portfolio_overlay"></div></a>
                      </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12  website">
                      <div class="portfolio_item">
                          <img src="<?=base_url('resources/assets/Informativa/images/u_new-castle.jpg');?>" alt="">
                          <div class="portfolio_hover">
                              <div class="row" style="display: flex;align-items: center;justify-content: center;background: white;">
                                <div class="col-7">
                                  <img src="<?=base_url('resources/assets/Informativa/images/lu_newcastle.png');?>">
                                </div>
                                <div class="col-5">
                                  <a data-toggle="modal" data-target="#castleModal"> Newcastle University </a>
                                </div>
                              </div>
                              <div class="zoom_popup">
                                   <i class=""><button type="button" class="btn btn-primary flaticon-add" data-toggle="modal" data-target="#castleModal"></button></i>
                              </div>
                          </div>
                   <a data-toggle="modal" data-target="#castleModal"><div class="portfolio_overlay"></div></a>
                      </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12  website">
                      <div class="portfolio_item">
                          <img src="<?=base_url('resources/assets/Informativa/images/u_st-andrews.jpg');?>" alt="">
                          <div class="portfolio_hover">
                              <div class="row" style="display: flex;align-items: center;justify-content: center;background: white;">
                                <div class="col-7">
                                  <img src="<?=base_url('resources/assets/Informativa/images/luu_st-andrews.png');?>">
                                </div>
                                <div class="col-5">
                                  <a data-toggle="modal" data-target="#andrewModal">University of St Andrews</a>
                                </div>
                              </div>

                              <div class="zoom_popup">
                                   <i class=""><button type="button" class="btn btn-primary flaticon-add" data-toggle="modal" data-target="#andrewModal"></button></i>
                              </div>
                          </div>
                          <a data-toggle="modal" data-target="#andrewModal"><div class="portfolio_overlay"></div></a>
                      </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12  website">
                      <div class="portfolio_item">
                          <img src="<?=base_url('resources/assets/Informativa/images/uk_universities.jpg');?>" alt="">
                          <div class="portfolio_hover">
                              <a data-toggle="modal" data-target="#othersModal"> Otras Universidades </a>
                              <div class="zoom_popup">
                                   <i class=""><button type="button" class="btn btn-primary flaticon-add" data-toggle="modal" data-target="#othersModal"></button></i>
                              </div>
                          </div>
                   <a data-toggle="modal" data-target="#othersModal"><div class="portfolio_overlay"></div></a>
                      </div>
                  </div>

                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12  design">
                      <div class="portfolio_item">
                          <img src="<?=base_url('resources/assets/Informativa/images/u_arts.jpg');?>" alt="">
                          <div class="portfolio_hover">
                              <div class="row" style="display: flex;align-items: center;justify-content: center;background: white;">
                                <div class="col-7">
                                  <img style="width: 80%" src="<?=base_url('resources/assets/Informativa/images/lu_cambriadge.png');?>">
                                </div>
                                <div class="col-5">
                                  <a data-toggle="modal" data-target="#artsPrepaModal"> Cambridge School of Visual and Performing Arts  <span>LEER MÁS </span></a>
                                </div>
                              </div>
                              <div class="zoom_popup">
                                   <i class=""><button type="button" class="btn btn-primary flaticon-add" data-toggle="modal" data-target="#artsPrepaModal"></button></i>
                              </div>
                          </div>
                        <a data-toggle="modal" data-target="#artsPrepaModal"><div class="portfolio_overlay"></div></a>
                      </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12  design">
                      <div class="portfolio_item">
                          <img src="<?=base_url('resources/assets/Informativa/images/u_cats.jpg');?>" alt="">
                          <div class="portfolio_hover">
                              <div class="row" style="display: flex;align-items: center;justify-content: center;background: white;">
                                <div class="col-7" style="background: white">
                                  <img style="background: white" src="<?=base_url('resources/assets/Informativa/images/lu_cats.png');?>">
                                </div>
                                <div class="col-5">
                                  <a data-toggle="modal" data-target="#catsPrepaModal"> CATS College</a>
                                </div>
                              </div>
                              <div class="zoom_popup">
                                   <i class=""><button type="button" class="btn btn-primary flaticon-add" data-toggle="modal" data-target="#catsPrepaModal"></button></i>
                              </div>
                          </div>
                   <a data-toggle="modal" data-target="#catsPrepaModal"><div class="portfolio_overlay"></div></a>
                      </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12  design">
                      <div class="portfolio_item">
                          <img src="<?=base_url('resources/assets/Informativa/images/v_concord.jpg');?>" alt="">
                          <div class="portfolio_hover">
                              <div class="row" style="display: flex;align-items: center;justify-content: center;background: white;">
                                <div class="col-7">
                                  <img src="https://pbs.twimg.com/profile_images/1189486413403901953/G1XL4_AA_400x400.jpg">
                                </div>
                                <div class="col-5">
                                  <a data-toggle="modal" data-target="#concordPrepaModal">Concord College</a>
                                </div>
                              </div>
                              <div class="zoom_popup">
                                   <i class=""><button type="button" class="btn btn-primary flaticon-add" data-toggle="modal" data-target="#concordPrepaModal"></button></i>
                              </div>
                          </div>
                   <a data-toggle="modal" data-target="#concordPrepaModal"><div class="portfolio_overlay"></div></a>
                      </div>
                  </div>

                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12  design">
                      <div class="portfolio_item">
                          <img src="<?=base_url('resources/assets/Informativa/images/prepa_nto.jpg');?>" alt="">
                          <div class="portfolio_hover">
                              <a data-toggle="modal" data-target="#intoPrepaModal"> Into UK</a>
                              <div class="zoom_popup">
                                   <i class=""><button type="button" class="btn btn-primary flaticon-add" data-toggle="modal" data-target="#intoPrepaModal"></button></i>
                              </div>
                          </div>
                   <a data-toggle="modal" data-target="#intoPrepaModal"><div class="portfolio_overlay"></div></a>
                      </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12  design">
                      <div class="portfolio_item">
                          <img src="<?=base_url('resources/assets/Informativa/images/prepa_kaplan.jpg');?>" alt="">
                          <div class="portfolio_hover">
                              <div class="row" style="display: flex;align-items: center;justify-content: center;background: white;">
                                <div class="col-7" style="background: white">
                                  <img style="background: white" src="https://d311j2r2qvjkvi.cloudfront.net/en-us/getasset/f791d15a-2b56-45df-b5ee-ce7691b7cc5a/">
                                </div>
                                <div class="col-5">
                                  <a data-toggle="modal" data-target="#kaplanPrepaModal"> Kaplan</a>
                                </div>
                              </div>
                              <div class="zoom_popup">
                                   <i class=""><button type="button" class="btn btn-primary flaticon-add" data-toggle="modal" data-target="#kaplanPrepaModal"></button></i>
                              </div>
                          </div>
                   <a data-toggle="modal" data-target="#kaplanPrepaModal"><div class="portfolio_overlay"></div></a>
                      </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12  design">
                      <div class="portfolio_item">
                          <img src="<?=base_url('resources/assets/Informativa/images/cambios_standrew.jpg');?>" alt="">
                          <div class="portfolio_hover">
                              <div class="row" style="display: flex;align-items: center;justify-content: center;background: white;">
                                <div class="col-7" style="background: white">
                                  <img style="background: white" src="<?=base_url('resources/assets/Informativa/images/cambios_stadrew_Collage.jpg');?>">
                                </div>
                                <div class="col-5">
                                  <a data-toggle="modal" data-target="#adrewsPrepaModal"> St Andrews College, Cambridge</a>
                                </div>
                              </div>
                              <div class="zoom_popup">
                                   <i class=""><button type="button" class="btn btn-primary flaticon-add" data-toggle="modal" data-target="#adrewsPrepaModal"></button></i>
                              </div>
                          </div>
                   <a data-toggle="modal" data-target="#adrewsPrepaModal"><div class="portfolio_overlay"></div></a>
                      </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12  design">
                      <div class="portfolio_item">
                          <img src="<?=base_url('resources/assets/Informativa/images/prepa_atauton.jpg');?>" alt="">
                          <div class="portfolio_hover">
                              <div class="row" style="display: flex;align-items: center;justify-content: center;background: white;">
                                <div class="col-9">
                                  <img src="<?=base_url('resources/assets/Informativa/images/prepa_tauton_logo.jpeg');?>">
                                </div>
                                <div class="col-3">
                                  <a data-toggle="modal" data-target="#tautonPrepaModal">Taunton School</a>
                                </div>
                              </div>
                              <div class="zoom_popup">
                                   <i class=""><button type="button" class="btn btn-primary flaticon-add" data-toggle="modal" data-target="#tautonPrepaModal"></button></i>
                              </div>
                          </div>
                   <a data-toggle="modal" data-target="#tautonPrepaModal"><div class="portfolio_overlay"></div></a>
                      </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12  design">
                      <div class="portfolio_item">
                          <img src="<?=base_url('resources/assets/Informativa/images/uk_universities.jpg');?>" alt="">
                          <div class="portfolio_hover">
                              <a data-toggle="modal" data-target="#akworthPrepaModal">Otras Preparatorias</a>
                              <div class="zoom_popup">
                                   <i class=""><button type="button" class="btn btn-primary flaticon-add" data-toggle="modal" data-target="#akworthPrepaModal"></button></i>
                              </div>
                          </div>
                   <a data-toggle="modal" data-target="#akworthPrepaModal"><div class="portfolio_overlay"></div></a>
                      </div>
                  </div>


                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 v_chester.jpgcol-12  ux_ui">
                      <div class="portfolio_item">
                          <img src="<?=base_url('resources/assets/Informativa/images/new_newchester-english-in-chester-00.jpg');?>" alt="">
                          <div class="portfolio_hover">
                          <div class="row" style="display: flex;align-items: center;justify-content: center;background: white;">
                                <div class="col-7">
                                  <img src="<?=base_url('resources/assets/Informativa/images/e_chester.jpg');?>">
                                </div>
                                <div class="col-5">
                                <a data-toggle="modal" data-target="#chesterInglesModal"> English in Chester </a>
                                </div>
                              </div>
                              <div class="zoom_popup">
                                   <i class=""><button type="button" class="btn btn-primary flaticon-add" data-toggle="modal" data-target="#chesterInglesModal"></button></i>
                              </div>
                          </div>
                   <a data-toggle="modal" data-target="#chesterInglesModal"><div class="portfolio_overlay"></div></a>
                      </div>
                  </div>

                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12  ux_ui">
                      <div class="portfolio_item">
                          <img src="<?=base_url('resources/assets/Informativa/images/new_new_eselect.jpg');?>" alt="">
                          <div class="portfolio_hover">
                              <div class="row" style="display: flex;align-items: center;justify-content: center;background: white;">
                                <div class="col-7">
                                  <img src="<?=base_url('resources/assets/Informativa/images/new_selectenglishlogo.jpg');?>">
                                </div>
                                <div class="col-5">
                                <a data-toggle="modal" data-target="#cambridgeInglesModal"> Select English </a>
                                </div>
                              </div>
                              <div class="zoom_popup">
                                   <i class=""><button type="button" class="btn btn-primary flaticon-add" data-toggle="modal" data-target="#cambridgeInglesModal"></button></i>
                              </div>
                          </div>
                   <a data-toggle="modal" data-target="#cambridgeInglesModal"><div class="portfolio_overlay"></div></a>
                      </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12  ux_ui">
                      <div class="portfolio_item">
                          <img src="<?=base_url('resources/assets/Informativa/images/e_stafford_house.jpg');?>" alt="">
                          <div class="portfolio_hover">
                              <div class="row" style="display: flex;align-items: center;justify-content: center;background: white;">
                                <div class="col-7">
                                  <img src="<?=base_url('resources/assets/Informativa/images/new_stafford_house.jpg');?>">
                                </div>
                                <div class="col-5">
                                <a data-toggle="modal" data-target="#stanfordInglesModal">     Stafford house </a>
                                </div>
                              </div>
                              <div class="zoom_popup">
                                   <i class=""><button type="button" class="btn btn-primary flaticon-add" data-toggle="modal" data-target="#stanfordInglesModal"></button></i>
                              </div>
                          </div>
                   <a data-toggle="modal" data-target="#stanfordInglesModal"><div class="portfolio_overlay"></div></a>
                      </div>
                  </div>



                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12  ux_ui">
                      <div class="portfolio_item">
                          <img src="<?=base_url('resources/assets/Informativa/images/new_new_Bathh.jpg');?>" alt="">
                          <div class="portfolio_hover">
                            <div class="row" style="display: flex;align-items: center;justify-content: center;background: white;">
                                <div class="col-7" style="background: white">
                                  <img style="background: white" src="<?=base_url('resources/assets/Informativa/images/new_bath_acaademic_of_english.jpg');?>">
                                </div>
                                <div class="col-5">
                                  <a data-toggle="modal" data-target="#bathInglesModal" style="font-size: 40px;"> Bath Academy of English</a>
                                </div>
                              </div>
                              <div class="zoom_popup">
                                   <i class=""><button type="button" class="btn btn-primary flaticon-add" data-toggle="modal" data-target="#bathInglesModal"></button></i>
                              </div>
                          </div>
                   <a data-toggle="modal" data-target="#bathInglesModal"><div class="portfolio_overlay"></div></a>
                      </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12  ux_ui">
                      <div class="portfolio_item">
                          <img src="<?=base_url('resources/assets/Informativa/images/bristol_international_house.jpg');?>" alt="">
                          <div class="portfolio_hover">
                              <div class="row" style="display: flex;align-items: center;justify-content: center;background: white;">
                                <div class="col-7">
                                  <img src="<?=base_url('resources/assets/Informativa/images/bristol_international_house_logo.jpg');?>">
                                </div>
                                <div class="col-5">
                                <a data-toggle="modal" data-target="#bristolInglesModal">  International English  Bristol   </a>
                                </div>
                              </div>
                              <div class="zoom_popup">
                                   <i class=""><button type="button" class="btn btn-primary flaticon-add" data-toggle="modal" data-target="#bristolInglesModal"></button></i>
                              </div>
                          </div>
                   <a data-toggle="modal" data-target="#bristolInglesModal"><div class="portfolio_overlay"></div></a>
                      </div>
                  </div>

                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12  ux_ui">
                      <div class="portfolio_item">
                          <img src="<?=base_url('resources/assets/Informativa/images/e_ecambrige.jpg');?>" alt="">
                          <div class="portfolio_hover">
                              <div class="row" style="display: flex;align-items: center;justify-content: center;background: white;">
                                <div class="col-7">
                                <img style="width: 70%" src="<?=base_url('resources/assets/Informativa/images/new_CAE-Cambridge-Academy-of-English.jpg');?>">
                                </div>
                                <div class="col-5">
                                <a data-toggle="modal" data-target="#cambridgeAcademyInglesModal"> Cambridge Academy of English </a>
                                </div>
                              </div>
                              <div class="zoom_popup">
                                   <i class=""><button type="button" class="btn btn-primary flaticon-add" data-toggle="modal" data-target="#cambridgeAcademyInglesModal"></button></i>
                              </div>
                          </div>
                   <a data-toggle="modal" data-target="#cambridgeAcademyInglesModal"><div class="portfolio_overlay"></div></a>
                      </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12  ux_ui">
                      <div class="portfolio_item">
                          <img src="<?=base_url('resources/assets/Informativa/images/new_new_centre_brighton.jpg');?>" alt="">
                          <div class="portfolio_hover">
                              <div class="row" style="display: flex;align-items: center;justify-content: center;background: white;">
                                <div class="col-7">
                                  <img src="<?=base_url('resources/assets/Informativa/images/new_bringthon.jpg');?>">
                                </div>
                                <div class="col-5">
                                <a data-toggle="modal" data-target="#brightonInglesModal"> English Language Centre Brighton </a>
                                </div>
                              </div>
                              <div class="zoom_popup">
                                   <i class=""><button type="button" class="btn btn-primary flaticon-add" data-toggle="modal" data-target="#brightonInglesModal"></button></i>
                              </div>
                          </div>
                   <a data-toggle="modal" data-target="#brightonInglesModal"><div class="portfolio_overlay"></div></a>
                      </div>
                  </div>




                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12  ux_ui">
                      <div class="portfolio_item">
                          <img src="<?=base_url('resources/assets/Informativa/images/z_subir_eastbourne.jpg');?>" alt="">
                          <div class="portfolio_hover">
                              <div class="row" style="display: flex;align-items: center;justify-content: center;background: white;">
                                <div class="col-7">
                                  <img src="<?=base_url('resources/assets/Informativa/images/z_subir_estbourne_Logo.jpg');?>">
                                </div>
                                <div class="col-5">
                                <a data-toggle="modal" data-target="#eastbourneInglesModal"> the english language centre brighton / eastbourne</a>
                                </div>
                              </div>
                              <div class="zoom_popup">
                                   <i class=""><button type="button" class="btn btn-primary flaticon-add" data-toggle="modal" data-target="#eastbourneInglesModal"></button></i>
                              </div>
                          </div>
                   <a data-toggle="modal" data-target="#eastbourneInglesModal"><div class="portfolio_overlay"></div></a>
                      </div>
                  </div>

                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12  ux_ui">
                      <div class="portfolio_item">
                          <img src="<?=base_url('resources/assets/Informativa/images/uk_universities.jpg');?>" alt="">
                          <div class="portfolio_hover">

                              <a data-toggle="modal" data-target="#othersModalEnglish"> Otras escuelas de Inglés </a>
                              <div class="zoom_popup">
                                   <i class=""><button type="button" class="btn btn-primary flaticon-add" data-toggle="modal" data-target="#othersModalEnglish"></button></i>
                              </div>
                          </div>
                   <a data-toggle="modal" data-target="#othersModalEnglish"><div class="portfolio_overlay"></div></a>
                      </div>
                  </div>
                  <!-- inicia v-->
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12  ux_uy">
                      <div class="portfolio_item">
                          <img src="<?=base_url('resources/assets/Informativa/images/u_arts.jpg');?>" alt="">
                          <div class="portfolio_hover">
                              <div class="row" style="display: flex;align-items: center;justify-content: center;background: white;">
                                <div class="col-7">
                                  <img style="width: 80%" src="<?=base_url('resources/assets/Informativa/images/lu_cambriadge.png');?>">
                                </div>
                                <div class="col-5">
                                <a data-toggle="modal" data-target="#artsVeranoModal"> Cambridge School of Visual & Performing Arts </a>
                                </div>
                              <div class="zoom_popup">
                                   <i class=""><button type="button" class="btn btn-primary flaticon-add" data-toggle="modal" data-target="#artsVeranoModal"></button></i>
                              </div>
                              </div>
                          </div>
                        <a data-toggle="modal" data-target="#artsVeranoModal"><div class="portfolio_overlay"></div></a>
                      </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12  ux_uy">
                      <div class="portfolio_item">
                          <img src="<?=base_url('resources/assets/Informativa/images/u_bristool.jpg');?>" alt="">
                          <div class="portfolio_hover">
                              <div class="row" style="display: flex;align-items: center;justify-content: center;background: white;">
                                <div class="col-7">
                                <img src="<?=base_url('resources/assets/Informativa/images/v_bristol.png');?>">
                                </div>
                                <div class="col-5">
                                <a data-toggle="modal" data-target="#bristolVeranoModal">University of Bristol</a>
                              </div>
                              </div>
                              <div class="zoom_popup">
                                   <i class=""><button type="button" class="btn btn-primary flaticon-add" data-toggle="modal" data-target="#bristolVeranoModal"></button></i>
                              </div>
                          </div>
                   <a data-toggle="modal" data-target="#bristolVeranoModal"><div class="portfolio_overlay"></div></a>
                      </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12  ux_uy">
                      <div class="portfolio_item">
                          <img src="<?=base_url('resources/assets/Informativa/images/u_cats.jpg');?>" alt="">
                          <div class="portfolio_hover">
                              <div class="row" style="display: flex;align-items: center;justify-content: center;background: white;">
                                <div class="col-7">
                                  <img style="background: white" src="<?=base_url('resources/assets/Informativa/images/lu_cats.png');?>">
                                </div>
                                <div class="col-5">
                                <a data-toggle="modal" data-target="#catsVeranoModal"> CATS College</a>
                                </div>
                              </div>
                              <div class="zoom_popup">
                                   <i class=""><button type="button" class="btn btn-primary flaticon-add" data-toggle="modal" data-target="#catsVeranoModal"></button></i>
                              </div>
                          </div>
                          <a  data-toggle="modal" data-target="#catsVeranoModal"><div class="portfolio_overlay"></div></a>
                      </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12  ux_uy">
                      <div class="portfolio_item">
                          <img src="<?=base_url('resources/assets/Informativa/images/u_queen-mary.jpg');?>" alt="">
                          <div class="portfolio_hover">
                          <div class="row" style="display: flex;align-items: center;justify-content: center;background: white;">
                                <div class="col-7">
                                  <img src="<?=base_url('resources/assets/Informativa/images/lu_queen-mary.png');?>">
                                </div>
                                <div class="col-5">
                                   <a data-toggle="modal" data-target="#queenVeranoModal">Queen Mary University of London</a>                                   </div>
                              </div>
                               <div class="zoom_popup">
                                    <i class=""><button type="button" class="btn btn-primary flaticon-add" data-toggle="modal" data-target="#queenVeranoModal"></button></i>
                               </div>
                          </div>
                       <a data-toggle="modal" data-target="#queenVeranoModal"><div class="portfolio_overlay"></div></a>
                      </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12  ux_uy">
                      <div class="portfolio_item">
                          <img src="<?=base_url('resources/assets/Informativa/images/u_west-of-england.jpg');?>" alt="">
                          <div class="portfolio_hover">
                          <div class="row" style="display: flex;align-items: center;justify-content: center;background: white;">
                                <div class="col-7">
                                  <img style="background: white" src="<?=base_url('resources/assets/Informativa/images/lu_uwe.png');?>">
                                </div>
                                <div class="col-5">
                                   <a data-toggle="modal" data-target="#uweVeranoModal">University of the West of England</a>                                   </div>
                              </div>
                              <div class="zoom_popup">
                                   <i class=""><button type="button" class="btn btn-primary flaticon-add" data-toggle="modal" data-target="#uweVeranoModal"></button></i>
                              </div>
                          </div>
                        <a data-toggle="modal" data-target="#uweVeranoModal"><div class="portfolio_overlay"></div></a>
                      </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12  ux_uy">
                      <div class="portfolio_item">
                          <img src="<?=base_url('resources/assets/Informativa/images/v_york.jpg');?>" alt="">
                          <div class="portfolio_hover">
                          <div class="row" style="display: flex;align-items: center;justify-content: center;background: white;">
                                <div class="col-7">
                                  <img style="background: white" src="<?=base_url('resources/assets/Informativa/images/lu_uea.png');?>">
                                </div>
                                <div class="col-5">
                                   <a data-toggle="modal" data-target="#ueaVeranoModal">University of East Anglia</a>                                   </div>
                              </div>
                              <div class="zoom_popup">
                                   <i class=""><button type="button" class="btn btn-primary flaticon-add" data-toggle="modal" data-target="#ueaVeranoModal"></button></i>
                              </div>
                          </div>
                   <a data-toggle="modal" data-target="#ueaVeranoModal"><div class="portfolio_overlay"></div></a>
                      </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12  ux_uy">
                      <div class="portfolio_item">
                          <img src="<?=base_url('resources/assets/Informativa/images/u_st-andrews.jpg');?>" alt="">
                          <div class="portfolio_hover">
                              <div class="row" style="display: flex;align-items: center;justify-content: center;background: white;">
                                <div class="col-7">
                                  <img src="<?=base_url('resources/assets/Informativa/images/luu_st-andrews.png');?>">
                                </div>
                                <div class="col-5">
                                   <a data-toggle="modal" data-target="#andrewVeranoModal">University of St Andrews</a>                                   </div>
                              </div>
                              <div class="zoom_popup">
                                   <i class=""><button type="button" class="btn btn-primary flaticon-add" data-toggle="modal" data-target="#andrewVeranoModal"></button></i>
                              </div>
                          </div>
                   <a data-toggle="modal" data-target="#andrewVeranoModal"><div class="portfolio_overlay"></div></a>
                      </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12  ux_uy">
                      <div class="portfolio_item">
                          <img src="<?=base_url('resources/assets/Informativa/images/prepamodal_atauton.png');?>" alt="">
                          <div class="portfolio_hover">
                            <div class="row" style="display: flex;align-items: center;justify-content: center;background: white;">
                                <div class="col-7">
                                  <img style="background: white" src="<?=base_url('resources/assets/Informativa/images/prepa_tauton_logo.jpeg');?>">
                                </div>
                                <div class="col-5">
                                   <a data-toggle="modal" data-target="#tauntonVeranoModal">Tauton School</a>                                   </div>
                              </div>
                              <div class="zoom_popup">
                                   <i class=""><button type="button" class="btn btn-primary flaticon-add" data-toggle="modal" data-target="#tauntonVeranoModal"></button></i>
                              </div>
                          </div>
                   <a data-toggle="modal" data-target="#tauntonVeranoModal"><div class="portfolio_overlay"></div></a>
                      </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12  ux_uy">
                      <div class="portfolio_item">
                          <img src="<?=base_url('resources/assets/Informativa/images/v_concord.jpg');?>" alt="">
                          <div class="portfolio_hover">
                              <div class="row" style="display: flex;align-items: center;justify-content: center;background: white;">
                                <div class="col-7">
                                  <img src="<?=base_url('resources/assets/Informativa/images/v_concord_logo.jpg');?>">
                                </div>
                                <div class="col-5">
                                  <a data-toggle="modal" data-target="#concordVeranoModal"> Concord College</a>
                                </div>
                              </div>
                              <div class="zoom_popup">
                                   <i class=""><button type="button" class="btn btn-primary flaticon-add" data-toggle="modal" data-target="#concordVeranoModal"></button></i>
                              </div>
                          </div>
                          <a data-toggle="modal" data-target="#concordVeranoModal"><div class="portfolio_overlay"></div></a>
                      </div>
                  </div>

                  <!-- //termina -->
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12  ux_uyy">
                      <div class="portfolio_item">
                          <img src="<?=base_url('resources/assets/Informativa/images/new_newchester-english-in-chester-001Modal.jpg');?>" alt="">
                          <div class="portfolio_hover">
                              <div class="row" style="display: flex;align-items: center;justify-content: center;background: white;">
                                <div class="col-7">
                                  <img src="<?=base_url('resources/assets/Informativa/images/e_chester.jpg');?>">
                                </div>
                                <div class="col-5">
                                   <a data-toggle="modal" data-target="#chesterVeranoModal">English in Chester</a>                                   </div>
                              </div>
                              <div class="zoom_popup">
                                   <i class=""><button type="button" class="btn btn-primary flaticon-add" data-toggle="modal" data-target="#chesterVeranoModal"></button></i>
                              </div>
                          </div>
                   <a data-toggle="modal" data-target="#chesterVeranoModal"><div class="portfolio_overlay"></div></a>
                      </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12  ux_uyy">
                      <div class="portfolio_item">
                          <img src="<?=base_url('resources/assets/Informativa/images/new_new_eselect.jpg');?>" alt="">
                          <div class="portfolio_hover">
                          <div class="row" style="display: flex;align-items: center;justify-content: center;background: white;">
                                <div class="col-7">
                                  <img src="<?=base_url('resources/assets/Informativa/images/new_selectenglishlogo.jpg');?>">
                                </div>
                                <div class="col-5">
                                   <a data-toggle="modal" data-target="#cambridgeVeranoModal">Select English</a>                                   </div>
                              </div>
                              <div class="zoom_popup">
                                   <i class=""><button type="button" class="btn btn-primary flaticon-add" data-toggle="modal" data-target="#cambridgeVeranoModal"></button></i>
                              </div>
                          </div>
                   <a data-toggle="modal" data-target="#cambridgeVeranoModal"><div class="portfolio_overlay"></div></a>
                      </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12  ux_uyy">
                      <div class="portfolio_item">
                          <img src="<?=base_url('resources/assets/Informativa/images/z_subir_eastbourne.jpg');?>" alt="">
                          <div class="portfolio_hover">
                          <div class="row" style="display: flex;align-items: center;justify-content: center;background: white;">
                                <div class="col-7">
                                  <img src="<?=base_url('resources/assets/Informativa/images/z_subir_estbourne_Logo.jpg');?>">
                                </div>
                                <div class="col-5">
                                   <a data-toggle="modal" data-target="#eastbourneVeranoModal">the english language centre brighton / eastbourne</a>                                   </div>
                              </div>
                              <div class="zoom_popup">
                                   <i class=""><button type="button" class="btn btn-primary flaticon-add" data-toggle="modal" data-target="#eastbourneVeranoModal"></button></i>
                              </div>
                          </div>
                   <a data-toggle="modal" data-target="#eastbourneVeranoModal"><div class="portfolio_overlay"></div></a>
                      </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12  ux_uyy">
                      <div class="portfolio_item">
                          <img src="<?=base_url('resources/assets/Informativa/images/e_stafford_house.jpg');?>" alt="">
                          <div class="portfolio_hover">
                              <div class="row" style="display: flex;align-items: center;justify-content: center;background: white;">
                                <div class="col-7">
                                  <img src="<?=base_url('resources/assets/Informativa/images/stafford_Logo.png');?>">
                                </div>
                                <div class="col-5">
                                <a data-toggle="modal" data-target="#stanfordVeranoModal">  Stafford house </a>
                                </div>
                              </div>
                              <div class="zoom_popup">
                                   <i class=""><button type="button" class="btn btn-primary flaticon-add" data-toggle="modal" data-target="#stanfordVeranoModal"></button></i>
                              </div>
                          </div>
                   <a data-toggle="modal" data-target="#stanfordVeranoModal"><div class="portfolio_overlay"></div></a>
                      </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12  ux_uyy">
                      <div class="portfolio_item">
                          <img src="<?=base_url('resources/assets/Informativa/images/new_new_Bathh.jpg');?>" alt="">
                          <div class="portfolio_hover">
                              <div class="row" style="display: flex;align-items: center;justify-content: center;background: white;">
                                <div class="col-7">
                                  <img style="background: white" src="<?=base_url('resources/assets/Informativa/images/lp_bath.png');?>">
                                </div>
                                <div class="col-5">
                                   <a data-toggle="modal" data-target="#bathVeranoModal">Bath Academic</a>                                   </div>
                              </div>
                              <div class="zoom_popup">
                                   <i class=""><button type="button" class="btn btn-primary flaticon-add" data-toggle="modal" data-target="#bathVeranoModal"></button></i>
                              </div>
                          </div>
                   <a data-toggle="modal" data-target="#bathVeranoModal"><div class="portfolio_overlay"></div></a>
                      </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12  ux_uyy">
                      <div class="portfolio_item">
                          <img src="<?=base_url('resources/assets/Informativa/images/e_ecambrige.jpg');?>" alt="">
                          <div class="portfolio_hover">
                          <div class="row" style="display: flex;align-items: center;justify-content: center;background: white;">
                                <div class="col-7">
                                  <img style="width: 80%" src="<?=base_url('resources/assets/Informativa/images/new_CAE-Cambridge-Academy-of-English.jpg');?>">
                                </div>
                                <div class="col-5">
                                   <a data-toggle="modal" data-target="#cambridgeVeranoInglesModal">Cambridge Academy of English</a>                                   </div>
                              </div>
                              <div class="zoom_popup">
                                   <i class=""><button type="button" class="btn btn-primary flaticon-add" data-toggle="modal" data-target="#cambridgeVeranoInglesModal"></button></i>
                              </div>
                          </div>
                   <a data-toggle="modal" data-target="#cambridgeVeranoInglesModal"><div class="portfolio_overlay"></div></a>
                      </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12  ux_uyy">
                      <div class="portfolio_item">
                          <img src="<?=base_url('resources/assets/Informativa/images/prepa_stonyhurts.jpg');?>" alt="">
                          <div class="portfolio_hover">
                          <div class="row" style="display: flex;align-items: center;justify-content: center;background: white;">
                                <div class="col-7">
                                  <img src="<?=base_url('resources/assets/Informativa/images/prepa_Stonyhurts_College.jpg');?>">
                                </div>
                                <div class="col-5">
                                   <a data-toggle="modal" data-target="#stonyhurtsVeranoModal">Stonyhurts College</a>                                   </div>
                              </div>
                              <div class="zoom_popup">
                                   <i class=""><button type="button" class="btn btn-primary flaticon-add" data-toggle="modal" data-target="#stonyhurtsVeranoModal"></button></i>
                              </div>
                          </div>
                          <a data-toggle="modal" data-target="#stonyhurtsVeranoModal"><div class="portfolio_overlay"></div></a>
                      </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12  ux_uyy">
                      <div class="portfolio_item">
                          <img src="<?=base_url('resources/assets/Informativa/images/prepa_nto.jpg');?>" alt="">
                          <div class="portfolio_hover">
                              <a data-toggle="modal" data-target="#intoVeranoModal"> Into UK</a>
                              <div class="zoom_popup">
                                   <i class=""><button type="button" class="btn btn-primary flaticon-add" data-toggle="modal" data-target="#intoVeranoModal"></button></i>
                              </div>
                          </div>
                   <a data-toggle="modal" data-target="#intoVeranoModal"><div class="portfolio_overlay"></div></a>
                      </div>
                  </div>


              </div>

          </div>
      </div>
  </div>
</div>




<div class="modal fade text-center py-5 subscribeModal-lg "  id="BathUniModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
          <!-- <div class="top-strip"></div> -->
        <div class="modal-header">
          <div class="container-fluid">
            <div class="row" style="margin-bottom: 10px;">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: red">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="row">
              <div class="col-md-4  d-none d-lg-block d-xl-block"  style="margin-top: -60px;"> <img src="<?=base_url('resources/assets/Informativa/images/lu_bath.png');?>" class="rounded mx-auto d-block" alt="..."></div>
              <div class="col-md-7 ml-auto  d-none d-lg-block d-xl-block"><img  src="<?=base_url('resources/assets/Informativa/images/um_bathh.jpg');?>" alt=""></div>
            </div>
          </div>
          <!-- <a class="h2" href="https://www.fiverr.com/sunlimetech/design-and-fix-your-bootstrap-4-issues" target="_blank"> </a>

          <h3 class="col-md-4 "></h3> -->

        </div>
        <div class="modal-body">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-4"><b>Fundación:</b> </div>
              <div class="col-md-4 "> 1966 .</div>
            </div>
            <div class="row">
              <div class="col-md-4"><b>Ubicación:</b> </div>
              <div class="col-md-4 "> <a href="javascript:;">Ciudad de Bath (1hr 50 mins de Londres). </a> </div>
            </div>
            <div class="row">
              <hr>

            </div>
            <div class="row">
              <hr>
                <div class="col-md-12 " style="align:center"><b>Ranking:</b></div>
            </div>
            <div class="row">

              <div class="col-md-6">Ranking Mundial QS 172 The Guardian University Guide Top 10.</div>
              <div class="col-md-6">Ocupa el 4º lugar general de 122 en la encuesta de satisfacción estudiantil 2018.</div>
              <br>
            </div>

            <div class="row">
              <hr>

            </div>
            <div class="list-group">
              <button type="button" class="list-group-item list-group-item-action list-group-item-success ">
                Facultades
              </button>
              <button type="button" class="list-group-item list-group-item-action" id="Odont" >Ingenierías.</button>
              <button type="button" class="list-group-item list-group-item-action" id="Odont" >Arquitectura.</button>
              <button type="button" class="list-group-item list-group-item-action" id="Odont" >Negocios.</button>
              <button type="button" class="list-group-item list-group-item-action" id="Odont" >Ciencias Sociales.</button>
            </div>

            <div class="row">
              <hr>
            </div>
            <div class="row">
              <div class="col-md-12">Ciudad romana, patrimonio mundial de la Humanidad por la UNESCO.</div>
            </div>
            <div class="header_btn dark_btn" style="display: flex;justify-content: center;">
                    <a style="width: 100%;" href="../Login" > Me interesa</a>
                </div>
            <div class="row">
              <hr>
            </div>

            <div class="youtube-player" data-id="HqwIMl67hCQ"></div>

          <!--<div class="embed-responsive embed-responsive-21by9">
              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/HqwIMl67hCQ"></iframe>
            </div>-->
          </div>
        </div>
          <div class="bottom-strip"></div>
      </div>
  </div>
</div>


<div class="modal fade text-center py-5 subscribeModal-lg "  id="bristolModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
          <!-- <div class="top-strip"></div> -->
        <div class="modal-header">
          <div class="container-fluid">
            <div class="row" style="margin-bottom: 10px;">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: red">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="row">
              <div class="col-md-4 d-none d-lg-block d-xl-block"  style="margin-top: -60px;"> <img src="<?=base_url('resources/assets/Informativa/images/lu_bristol.png');?>" class="rounded mx-auto d-block" alt="..."></div>
              <div class="col-md-7 ml-auto d-none d-lg-block d-xl-block"><img  src="<?=base_url('resources/assets/Informativa/images/luu_bristol.jpg');?>" alt=""></div>
            </div>
          </div>
          <!-- <a class="h2" href="https://www.fiverr.com/sunlimetech/design-and-fix-your-bootstrap-4-issues" target="_blank"> </a>

          <h3 class="col-md-4 "></h3> -->

        </div>
        <div class="modal-body">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-4"><b>Fundación:</b> </div>
              <div class="col-md-4 "> 1876 .</div>
            </div>
            <div class="row">
              <div class="col-md-4"><b>Ubicación:</b> </div>
              <div class="col-md-4 "> <a href="javascript:;">Bristol (1h 40min de Londres). </a> </div>
            </div>
            <div class="row">
              <hr>

            </div>
            <div class="row">
              <hr>
                <div class="col-md-12 " style="align:center"><b>Ranking:</b></div>
            </div>
            <div class="row">

              <div class="col-md-6">Empleabilidad: los egresados de la Universidad ranqueados en el 6º lugar a nivel nacional, 47º lugar a nivel mundial.</div>
              <div class="col-md-6">Ranking Mundial QS 49; 9ª  en el Reino Unido; 4ª  por su investigación: RAE.</div>
              <br>
            </div>

            <div class="row">
              <hr>

            </div>
            <div class="list-group">
              <button type="button" class="list-group-item list-group-item-action list-group-item-success ">
                Facultades
              </button>
              <button type="button" class="list-group-item list-group-item-action" id="Odont" >Artes y Humanidades.</button>
              <button type="button" class="list-group-item list-group-item-action" id="Odont" >Ciencias.</button>
              <button type="button" class="list-group-item list-group-item-action" id="Odont" >Ciencias de la salud.</button>
              <button type="button" class="list-group-item list-group-item-action" id="Odont" >Ciencias Sociales.</button>
              <button type="button" class="list-group-item list-group-item-action" id="Odont" >Ingenierias.</button>
              <button type="button" class="list-group-item list-group-item-action" id="Odont" >Medicina y Odontologia.</button>
              <button type="button" class="list-group-item list-group-item-action" id="Odont" >Negocios.</button>
            </div>
            <div class="row">
              <hr>
            </div>
            <div class="row">

              <div class="col-md-12">Bristol nombrada la mejor ciudad para vivir en UK (Sunday Times 2017).</div>
              <div class="header_btn dark_btn" style="display: flex;justify-content: center;">
                    <a style="width: 100%;" href="../Login" > Me interesa</a>
                </div>
            </div>

            <br>
            <div class="youtube-player" data-id="5XcKtaAU-xw"></div>
            <!--<div class="embed-responsive embed-responsive-21by9">
              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/5XcKtaAU-xw"></iframe>
            </div>-->
          </div>
        </div>
          <div class="bottom-strip"></div>
      </div>
  </div>
</div>
<iframe width="560" height="315" src="" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

<div class="modal fade text-center py-5 subscribeModal-lg "  id="artsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
          <!-- <div class="top-strip"></div> -->
        <div class="modal-header">
          <div class="container-fluid">
          <div class="row" style="margin-bottom: 10px;">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: red">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="row">
              <div class="col-md-4 d-none d-lg-block d-xl-block"  style="margin-top: -1px;"> <img src="<?=base_url('resources/assets/Informativa/images/lu_cambriadge.png');?>" class="rounded mx-auto d-block" alt="..."></div>
              <div class="col-md-7 ml-auto d-none d-lg-block d-xl-block"><img  src="<?=base_url('resources/assets/Informativa/images/luu_arts.jpg');?>" alt=""></div>
            </div>
          </div>
          <!-- <a class="h2" href="https://www.fiverr.com/sunlimetech/design-and-fix-your-bootstrap-4-issues" target="_blank"> </a>

          <h3 class="col-md-4 "></h3> -->

        </div>
        <div class="modal-body">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-4"><b>Fundación:</b> </div>
              <div class="col-md-4 "> 1985.</div>
            </div>
            <div class="row">
              <div class="col-md-4"><b>Ubicación:</b> </div>
              <div class="col-md-4 "> <a href="javascript:;">A 50 min de Londres. </a> </div>
            </div>
            <div class="row">
              <hr>

            </div>
            <div class="row">
              <hr>
                <div class="col-md-12 " style="align:center"><b>Ranking:</b></div>
            </div>
            <div class="row">

              <div class="col-md-6">Está asociada con la revista Hearst Magazines UK (Editora de Elle y Cosmopolitan).</div>
              <div class="col-md-6">Programas acreditados por la Universidad de los Artes, Londres.</div>
              <br>
            </div>

            <div class="row">
              <hr>

            </div>
            <div class="list-group">
              <button type="button" class="list-group-item list-group-item-action list-group-item-success ">
                Facultades
              </button>
              <button type="button" class="list-group-item list-group-item-action" id="Odont" >Artes y Humanidades.</button>
            </div>
            <div class="row">
              <hr>
            </div>
            <div class="row">
              <div class="col-md-12">Una preparatoria especializada en las artes, diseño y drama.</div>

                <div class="header_btn dark_btn" style="display: flex;justify-content: center;">
                    <a style="width: 100%;" href="../Login" > Me interesa</a>
                </div>

            </div>
          </div>
          <div class="row">
            <hr>
          </div>
          <div class="youtube-player" data-id="TLGYTqu34i0"></div>
          <!--<div class="embed-responsive embed-responsive-21by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/TLGYTqu34i0"></iframe>
          </div>-->
          </div>

        </div>
          <div class="bottom-strip"></div>
      </div>

</div>

<!-- ///////////////////////////////////////////////////////////// -->
<div class="modal fade text-center py-5 subscribeModal-lg "  id="catsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
          <!-- <div class="top-strip"></div> -->
        <div class="modal-header">
          <div class="container-fluid">
          <div class="row" style="margin-bottom: 10px;">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: red">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="row">
              <div class="col-md-4 d-none d-lg-block d-xl-block"  style="margin-top: -1px;"> <img src="<?=base_url('resources/assets/Informativa/images/lu_cats.png');?>" class="rounded mx-auto d-block" alt="..."></div>
              <div class="col-md-7 ml-auto d-none d-lg-block d-xl-block"><img  src="<?=base_url('resources/assets/Informativa/images/luu_cats.png');?>" alt=""></div>
            </div>
          </div>
          <!-- <a class="h2" href="https://www.fiverr.com/sunlimetech/design-and-fix-your-bootstrap-4-issues" target="_blank"> </a>

          <h3 class="col-md-4 "></h3> -->

        </div>
        <div class="modal-body">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-4"><b>Fundación:</b> </div>
              <div class="col-md-4 "> 1952.</div>
            </div>
            <div class="row">
              <div class="col-md-4"><b>Ubicación:</b> </div>
              <div class="col-md-4 "> <a href="javascript:;">Bristol (1h 40min de Londres). </a> </div>
            </div>
            <div class="row">
              <hr>

            </div>
            <div class="row">
              <hr>
                <div class="col-md-12 " style="align:center"><b>Ranking:</b></div>
            </div>
            <div class="row">

              <div class="col-md-6">3a en el ranking de las mejores preparatorias del UK.</div>
              <div class="col-md-6">6ª en el Ranking de Escuelas Independientes de Internado. La mejor para estudiantes internacionales.</div>
              <br>
            </div>

            <div class="row">
              <hr>

            </div>
            <div class="list-group">
              <button type="button" class="list-group-item list-group-item-action list-group-item-success ">
                Facultades
              </button>
              <button type="button" class="list-group-item list-group-item-action" id="Odont" >Arquitectura.</button>
              <button type="button" class="list-group-item list-group-item-action" id="Odont" >Artes y Humanidades.</button>
              <button type="button" class="list-group-item list-group-item-action" id="Odont" >Ciencias.</button>
              <button type="button" class="list-group-item list-group-item-action" id="Odont" >Ciencias de la salud.</button>
              <button type="button" class="list-group-item list-group-item-action" id="Odont" >Ciencias Sociales.</button>
              <button type="button" class="list-group-item list-group-item-action" id="Odont" >Ingenierias.</button>
              <button type="button" class="list-group-item list-group-item-action" id="Odont" >Medicina y Odontologia.</button>
              <button type="button" class="list-group-item list-group-item-action" id="Odont" >Negocios.</button>
            </div>
            <div class="header_btn dark_btn" style="display: flex;justify-content: center;">
                    <a style="width: 100%;" href="../Login" > Me interesa</a>
                </div>
            <div class="row">
              <hr>
            </div>
            <div class="row">
              <!-- <div class="col-md-12">Una preparatoria especializada en las artes, diseño y drama.</div> -->



            </div>
          </div>
          <div class="row">
            <hr>
          </div>
          <!-- <div class="embed-responsive embed-responsive-21by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/TLGYTqu34i0"></iframe>
          </div> -->
          </div>

        </div>
          <div class="bottom-strip"></div>
      </div>

</div>

<!-- ///////////////////////////////////////////////////////////////// -->

<div class="modal fade text-center py-5 subscribeModal-lg "  id="coventryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
          <!-- <div class="top-strip"></div> -->
        <div class="modal-header">
          <div class="container-fluid">
            <div class="row" style="margin-bottom: 10px;">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: red">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="row">
              <div class="col-md-4 d-none d-lg-block d-xl-block"  style="margin-top: -1px;"> <img src="<?=base_url('resources/assets/Informativa/images/lu_conventru.png');?>" class="rounded mx-auto d-block" alt="..."></div>
              <div class="col-md-7 ml-auto d-none d-lg-block d-xl-block"><img  src="<?=base_url('resources/assets/Informativa/images/luu_coventry.jpg');?>" alt=""></div>
            </div>
          </div>
          <!-- <a class="h2" href="https://www.fiverr.com/sunlimetech/design-and-fix-your-bootstrap-4-issues" target="_blank"> </a>

          <h3 class="col-md-4 "></h3> -->

        </div>
        <div class="modal-body">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-4"><b>Fundación:</b> </div>
              <div class="col-md-4 "> 1595 y en 1992 obtiene título de universidad.</div>
            </div>
            <div class="row">
              <div class="col-md-4"><b>Ubicación:</b> </div>
              <div class="col-md-4 "> <a href="javascript:;">Bristol (1h 40min) de Londres. </a> </div>
            </div>
            <div class="row">
              <hr>

            </div>
            <div class="row">
              <hr>
                <div class="col-md-12 " style="align:center"><b>Ranking:</b></div>
            </div>
            <div class="row">

              <div class="col-md-6">Calidad de enseñanza calificada como GOLD.</div>
              <div class="col-md-6">Ranking de universidades del Reino Unido 15.</div>
              <br>
            </div>

            <div class="row">
              <hr>

            </div>
            <div class="list-group">
              <button type="button" class="list-group-item list-group-item-action list-group-item-success ">
                Facultades
              </button>
              <button type="button" class="list-group-item list-group-item-action" id="Odont" >Arquitectura.</button>
              <button type="button" class="list-group-item list-group-item-action" id="Odont" >Artes y Humanidades.</button>
              <button type="button" class="list-group-item list-group-item-action" id="Odont" >Ciencias de la salud.</button>
              <button type="button" class="list-group-item list-group-item-action" id="Odont" >Ciencias Sociales.</button>
              <button type="button" class="list-group-item list-group-item-action" id="Odont" >Ingenierias.</button>
              <button type="button" class="list-group-item list-group-item-action" id="Odont" >Negocios.</button>
            </div>
            <div class="row">
              <hr>
            </div>
            <div class="row">

              <div class="header_btn dark_btn" style="display: flex;justify-content: center;">
                    <a style="width: 100%;" href="../Login" > Me interesa</a>
                </div>

            </div>
          </div>
          <div class="row">
            <hr>
          </div>
          <div class="youtube-player" data-id="ULS0FN2kjqg"></div>
          <div class="youtube-player" data-id="_neMHKZo1AI"></div>
          <!--<div class="embed-responsive embed-responsive-21by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/ULS0FN2kjqg"></iframe>
          </div>
          <hr>
          <div class="embed-responsive embed-responsive-21by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/_neMHKZo1AI"></iframe>
          </div>-->
          </div>

        </div>
          <div class="bottom-strip"></div>
      </div>

</div>

<div class="modal fade text-center py-5 subscribeModal-lg "  id="cranfieldModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
          <!-- <div class="top-strip"></div> -->
        <div class="modal-header">
          <div class="container-fluid">
          <div class="row" style="margin-bottom: 10px;">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: red">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="row">
              <div class="col-md-4 d-none d-lg-block d-xl-block"  style="margin-top: -1px;"> <img src="<?=base_url('resources/assets/Informativa/images/lu_cranfield.png');?>" class="rounded mx-auto d-block" alt="..."></div>
              <div class="col-md-7 ml-auto d-none d-lg-block d-xl-block"><img  src="<?=base_url('resources/assets/Informativa/images/luu_crandfiel.png');?>" alt=""></div>
            </div>
          </div>
          <!-- <a class="h2" href="https://www.fiverr.com/sunlimetech/design-and-fix-your-bootstrap-4-issues" target="_blank"> </a>

          <h3 class="col-md-4 "></h3> -->

        </div>
        <div class="modal-body">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-4"><b>Fundación:</b> </div>
              <div class="col-md-4 "> 1946.</div>
            </div>
            <div class="row">
              <div class="col-md-4"><b>Ubicación:</b> </div>
              <div class="col-md-4 "> <a href="javascript:;" >Cranfield (1 hr de Londres). </a> </div>
            </div>
            <div class="row">
              <hr>

            </div>
            <div class="row">
              <hr>
                <div class="col-md-12 " style="align:center"><b>Ranking:</b></div>
            </div>
            <div class="row">

              <div class="col-md-6">Clasificación mundial de QS: 39 Universidad exclusivamente de estudios de posgrado.</div>
              <div class="col-md-6">El ratio estudiantes: profesores es de 5:1, el segundo mejor en el UK. </div>
              <br>
            </div>

            <div class="row">
              <hr>

            </div>
            <div class="list-group">
              <button type="button" class="list-group-item list-group-item-action list-group-item-success ">
                Facultades
              </button>
              <button type="button" class="list-group-item list-group-item-action" id="Odont" >Ciencias.</button>
              <button type="button" class="list-group-item list-group-item-action" id="Odont" >Ciencias Sociales.</button>
              <button type="button" class="list-group-item list-group-item-action" id="Odont" >Ingenierias.</button>
              <button type="button" class="list-group-item list-group-item-action" id="Odont" >Negocios.</button>
            </div>
            <div class="row">
              <hr>
            </div>
            <div class="row">
              <div class="col-md-12">La única universidad con su propio aeropuerto operativo; se utiliza para la investigación y el diseño aeroespacial.</div>

              <div class="header_btn dark_btn" style="display: flex;justify-content: center;">
                    <a style="width: 100%;" href="../Login" > Me interesa</a>
                </div>

            </div>
          </div>
          <div class="row">
            <hr>
          </div>
          <div class="youtube-player" data-id="FpdZKWHX-7g"></div>
          <!--<div class="embed-responsive embed-responsive-21by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/FpdZKWHX-7g"></iframe>
          </div>-->
          <hr>

          </div>

        </div>
          <div class="bottom-strip"></div>
      </div>

</div>

<div class="modal fade text-center py-5 subscribeModal-lg "  id="castleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
          <!-- <div class="top-strip"></div> -->
        <div class="modal-header">
          <div class="container-fluid">
          <div class="row" style="margin-bottom: 10px;">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: red">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="row">
              <div class="col-md-4  d-none d-lg-block d-xl-block"  style="margin-top: -1px;"> <img src="<?=base_url('resources/assets/Informativa/images/lu_newcastle.png');?>" class="rounded mx-auto d-block" alt="..."></div>
              <div class="col-md-7 ml-auto  d-none d-lg-block d-xl-block"><img  src="<?=base_url('resources/assets/Informativa/images/luu_new-castle.jpg');?>" alt=""></div>
            </div>
          </div>
          <!-- <a class="h2" href="https://www.fiverr.com/sunlimetech/design-and-fix-your-bootstrap-4-issues" target="_blank"> </a>

          <h3 class="col-md-4 "></h3> -->

        </div>
        <div class="modal-body">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-4"><b>Fundación:</b> </div>
              <div class="col-md-4 "> 1834 4 h de Londres.</div>
            </div>
            <div class="row">
              <div class="col-md-4"><b>Ubicación:</b> </div>
              <div class="col-md-4 "> <a href="javascript:;">Campus en London. </a> </div>
            </div>
            <div class="row">
              <hr>

            </div>
            <div class="row">
              <hr>
                <div class="col-md-12 " style="align:center"><b>Ranking:</b></div>
            </div>
            <div class="row">

              <div class="col-md-6">QS Ranking Mundial de Universidades 146.</div>
              <div class="col-md-6">9a en Times Higher Education Europe Teaching Rankings 2018. </div>
              <br>
            </div>

            <div class="row">
              <hr>

            </div>
            <div class="list-group">
              <button type="button" class="list-group-item list-group-item-action list-group-item-success ">
                Facultades
              </button>
              <button type="button" class="list-group-item list-group-item-action" id="Odont" >Arquitectura.</button>
              <button type="button" class="list-group-item list-group-item-action" id="Odont" >Artes y Humanidades.</button>
              <button type="button" class="list-group-item list-group-item-action" id="Odont" >Ciencias.</button>
              <button type="button" class="list-group-item list-group-item-action" id="Odont" >Ciencias de la salud.</button>
              <button type="button" class="list-group-item list-group-item-action" id="Odont" >Ciencias Sociales.</button>
              <button type="button" class="list-group-item list-group-item-action" id="Odont" >Ingenierias.</button>
              <button type="button" class="list-group-item list-group-item-action" id="Odont" >Medicina y Odontologia.</button>
              <button type="button" class="list-group-item list-group-item-action" id="Odont" >Negocios.</button>
            </div>
            <div class="row">
              <hr>
            </div>
            <div class="row">
              <div class="col-md-12">En la ciudad de Newcastle, se encuentra el Center of Life (centro de investigación biomédica)..</div>

              <div class="header_btn dark_btn" style="display: flex;justify-content: center;">
                    <a style="width: 100%;" href="../Login" > Me interesa</a>
                </div>

            </div>
          </div>
          <div class="row">
            <hr>
          </div>
          <div class="youtube-player" data-id="An1TyEODZ2Y"></div>

          <!--<div class="embed-responsive embed-responsive-21by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/An1TyEODZ2Y"></iframe>
          </div>-->
          <hr>
          <div class="youtube-player" data-id="DcP4YPY7N9g"></div>

          <!--<div class="embed-responsive embed-responsive-21by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/DcP4YPY7N9g"></iframe>
          </div>-->
          <hr>

          </div>

        </div>
          <div class="bottom-strip"></div>
      </div>

</div>

<div class="modal fade text-center py-5 subscribeModal-lg "  id="queenModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
          <!-- <div class="top-strip"></div> -->
        <div class="modal-header">
          <div class="container-fluid">
            <div class="row" style="margin-bottom: 10px;">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: red">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="row">
              <div class="col-md-4 d-none d-lg-block d-xl-block"  style="margin-top: -1px;"> <img src="<?=base_url('resources/assets/Informativa/images/lu_queen-mary.png');?>" class="rounded mx-auto d-block" alt="..."></div>
              <div class="col-md-7 ml-auto d-none d-lg-block d-xl-block"><img  src="<?=base_url('resources/assets/Informativa/images/luu_queen-mary.jpg');?>" alt=""></div>
            </div>
          </div>
          <!-- <a class="h2" href="https://www.fiverr.com/sunlimetech/design-and-fix-your-bootstrap-4-issues" target="_blank"> </a>

          <h3 class="col-md-4 "></h3> -->

        </div>
        <div class="modal-body">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-4"><b>Fundación:</b> </div>
              <div class="col-md-4 "> 1785.</div>
            </div>
            <div class="row">
              <div class="col-md-4"><b>Ubicación:</b> </div>
              <div class="col-md-4 "> <a href="javascript:;" >Centro de Londres. </a> </div>
            </div>
            <div class="row">
              <hr>

            </div>
            <div class="row">
              <hr>
                <div class="col-md-12 " style="align:center"><b>Ranking:</b></div>
            </div>
            <div class="row">

              <div class="col-md-6">QS Ranking Mundial de Universidades (2018) 119.</div>
              <div class="col-md-6">Times Higher Education 46 a nivel europeo. </div>
              <br>
            </div>

            <div class="row">
              <hr>

            </div>
            <div class="list-group">
              <button type="button" class="list-group-item list-group-item-action list-group-item-success ">
                Facultades
              </button>
              <button type="button" class="list-group-item list-group-item-action" id="Odont" >Artes y Humanidades.</button>
              <button type="button" class="list-group-item list-group-item-action" id="Odont" >Ciencias.</button>
              <button type="button" class="list-group-item list-group-item-action" id="Odont" >Ciencias de la salud.</button>
              <button type="button" class="list-group-item list-group-item-action" id="Odont" >Ingenierias.</button>
              <button type="button" class="list-group-item list-group-item-action" id="Odont" >Medicina y Odontologia.</button>
              <button type="button" class="list-group-item list-group-item-action" id="Odont" >Negocios.</button>
            </div>
            <div class="row">
              <hr>
            </div>
            <div class="row">
              <div class="col-md-12">En 1785 fundó la primera escuela de Medicina de Inglaterra en el Royal London Hospital.</div>

              <div class="header_btn dark_btn" style="display: flex;justify-content: center;">
                    <a style="width: 100%;" href="../Login" > Me interesa</a>
                </div>

            </div>
          </div>
          <div class="row">
            <hr>
          </div>
          <div class="youtube-player" data-id="f9y6eeEK1oM"></div>

          <!--<div class="embed-responsive embed-responsive-21by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/f9y6eeEK1oM"></iframe>
          </div>-->
          </div>

        </div>
          <div class="bottom-strip"></div>
      </div>

</div>

<div class="modal fade text-center py-5 subscribeModal-lg "  id="andrewModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <!-- <div class="top-strip"></div> -->
      <div class="modal-header">
        <div class="container-fluid">
        <div class="row" style="margin-bottom: 10px;">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: red">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
          <div class="row">
            <div class="col-md-4 d-none d-lg-block d-xl-block"  style="margin-top: -1px;"> <img src="<?=base_url('resources/assets/Informativa/images/luu_st-andrews.png');?>" class="rounded mx-auto d-block" alt="..."></div>
            <div class="col-md-7 ml-auto d-none d-lg-block d-xl-block"><img  src="<?=base_url('resources/assets/Informativa/images/lu_st-andrews.jpg');?>" alt=""></div>
          </div>
        </div>
        <!-- <a class="h2" href="https://www.fiverr.com/sunlimetech/design-and-fix-your-bootstrap-4-issues" target="_blank"> </a>

        <h3 class="col-md-4 "></h3> -->

      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-4"><b>Fundación:</b> </div>
            <div class="col-md-4 "> 1413.</div>
          </div>
          <div class="row">
            <div class="col-md-4"><b>Ubicación:</b> </div>
            <div class="col-md-4 "> <a href="javascript:;"  >1hr 30 mins de Londres en avión. </a> </div>
          </div>
          <div class="row">
            <hr>

          </div>
          <div class="row">
            <hr>
              <div class="col-md-12 " style="align:center"><b>Ranking:</b></div>
          </div>
          <div class="row">

            <div class="col-md-6">QS Ranking Mundial de Universidades 100.</div>
            <div class="col-md-6">No 1 en Escocia y No 2 en UK: Guardian University Guide 2020.  </div>
            <br>
          </div>

          <div class="row">
            <hr>

          </div>
          <div class="list-group">
            <button type="button" class="list-group-item list-group-item-action list-group-item-success ">
              Facultades
            </button>
            <button type="button" class="list-group-item list-group-item-action" id="Odont" >Artes y Humanidades.</button>
            <button type="button" class="list-group-item list-group-item-action" id="Odont" >Ciencias.</button>
            <button type="button" class="list-group-item list-group-item-action" id="Odont" >Ciencias de la salud.</button>
            <button type="button" class="list-group-item list-group-item-action" id="Odont" >Ciencias Sociales.</button>
            <button type="button" class="list-group-item list-group-item-action" id="Odont" >Medicina y Odontologia.</button>
            <button type="button" class="list-group-item list-group-item-action" id="Odont" >Negocios.</button>
          </div>
          <div class="row">
            <hr>
          </div>
          <div class="row">
            <div class="col-md-12">Los Duques de Cambridge, el Príncipe William y Kate, se conocieron mientras estudiaban.</div>

            <div class="header_btn dark_btn" style="display: flex;justify-content: center;">
                    <a style="width: 100%;" href="../Login" > Me interesa</a>
                </div>

          </div>
        </div>
        <div class="row">
          <hr>
        </div>
        <div class="youtube-player" data-id="x8O5kv47zn8"></div>

        <!--<div class="embed-responsive embed-responsive-21by9">
          <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/x8O5kv47zn8"></iframe>
        </div>-->

        <hr>

        </div>

      </div>
        <div class="bottom-strip"></div>
    </div>

</div>

<div class="modal fade text-center py-5 subscribeModal-lg "  id="ueaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
          <!-- <div class="top-strip"></div> -->
        <div class="modal-header">
          <div class="container-fluid">
          <div class="row" style="margin-bottom: 10px;">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: red">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="row">
              <div class="col-md-4 d-none d-lg-block d-xl-block"  style="margin-top: -1px;"> <img src="<?=base_url('resources/assets/Informativa/images/lu_uea.png');?>" class="rounded mx-auto d-block" alt="..."></div>
              <div class="col-md-7 ml-auto d-none d-lg-block d-xl-block"><img  src="<?=base_url('resources/assets/Informativa/images/luu_east-anglia.jpg');?>" alt=""></div>
            </div>
          </div>
          <!-- <a class="h2" href="https://www.fiverr.com/sunlimetech/design-and-fix-your-bootstrap-4-issues" target="_blank"> </a>

          <h3 class="col-md-4 "></h3> -->

        </div>
        <div class="modal-body">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-4"><b>Fundación:</b> </div>
              <div class="col-md-4 "> 29 de septiembre de 1963.</div>
            </div>
            <div class="row">
              <div class="col-md-4"><b>Ubicación:</b> </div>
              <div class="col-md-4 "> <a href="javascript:;">Norwich  (90 mins) de Londres.</a> </div>
            </div>
            <div class="row">
              <hr>

            </div>
            <div class="row">
              <hr>
                <div class="col-md-12 " style="align:center"><b>Ranking:</b></div>
            </div>
            <div class="row">

              <div class="col-md-6">THE Ranking Mundial 2020: 192.</div>
              <div class="col-md-6">Ranqueada 10ª en UK por la calidad de su investigación.</div>
              <br>
            </div>

            <div class="row">
              <hr>

            </div>
            <div class="list-group">
              <button type="button" class="list-group-item list-group-item-action list-group-item-success ">
                Facultades
              </button>
              <button type="button" class="list-group-item list-group-item-action" id="Odont" >Artes y Humanidades.</button>
              <button type="button" class="list-group-item list-group-item-action" id="Odont" >Ciencias.</button>
              <button type="button" class="list-group-item list-group-item-action" id="Odont" >Ciencias de la salud.</button>
              <button type="button" class="list-group-item list-group-item-action" id="Odont" >Ciencias Sociales.</button>
              <button type="button" class="list-group-item list-group-item-action" id="Odont" >Medicina y Odontologia.</button>
              <button type="button" class="list-group-item list-group-item-action" id="Odont" >Negocios.</button>
            </div>
            <div class="row">
              <hr>
            </div>
            <div class="row">
              <div class="col-md-12">Norwich es la primera ciudad Patrimonio Mundial de la Literatura.</div>

                <div class="header_btn dark_btn footer_btn float_left">
                    <a href="http://www.uea.ac.uk/" target="_blank">Web Page</a>
                </div>

            </div>
          </div>
          <div class="row">
            <hr>
          </div>
          <div class="youtube-player" data-id="LTF9EOqy9L8"></div>

          <!--<div class="embed-responsive embed-responsive-21by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/LTF9EOqy9L8"></iframe>
          </div>-->
          </div>

        </div>
          <div class="bottom-strip"></div>
      </div>

</div>

<div class="modal fade text-center py-5 subscribeModal-lg "  id="uweModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
          <!-- <div class="top-strip"></div> -->
        <div class="modal-header">
          <div class="container-fluid">
          <div class="row" style="margin-bottom: 10px;">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: red">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="row">
              <div class="col-md-4 d-none d-lg-block d-xl-block"  style="margin-top: -1px;"> <img src="<?=base_url('resources/assets/Informativa/images/lu_uwe.png');?>" class="rounded mx-auto d-block" alt="..."></div>
              <div class="col-md-7 ml-auto d-none d-lg-block d-xl-block"><img  src="<?=base_url('resources/assets/Informativa/images/luu_west.jpg');?>" alt=""></div>
            </div>
          </div>
          <!-- <a class="h2" href="https://www.fiverr.com/sunlimetech/design-and-fix-your-bootstrap-4-issues" target="_blank"> </a>

          <h3 class="col-md-4 "></h3> -->

        </div>
        <div class="modal-body">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-4"><b>Fundación:</b> </div>
              <div class="col-md-4 "> 1595 y en 1992 obtiene título de universidad.</div>
            </div>
            <div class="row">
              <div class="col-md-4"><b>Ubicación:</b> </div>
              <div class="col-md-4 "> <a href="javascript:;">Bristol (1h 40min) de Londres. </a> </div>
            </div>
            <div class="row">
              <hr>

            </div>
            <div class="row">
              <hr>
                <div class="col-md-12 " style="align:center"><b>Ranking:</b></div>
            </div>
            <div class="row">

              <div class="col-md-6">Guardian University Guide 28 en Reino Unido.</div>
              <div class="col-md-6">11vo en el UK según encuesta de satisfacción estudiantil.</div>
              <br>
            </div>

            <div class="row">
              <hr>

            </div>
            <div class="list-group">
              <button type="button" class="list-group-item list-group-item-action list-group-item-success ">
                Facultades
              </button>
              <button type="button" class="list-group-item list-group-item-action" id="Odont" >Arquitectura.</button>
              <button type="button" class="list-group-item list-group-item-action" id="Odont" >Artes y Humanidades.</button>
              <button type="button" class="list-group-item list-group-item-action" id="Odont" >Ciencias de la salud.</button>
              <button type="button" class="list-group-item list-group-item-action" id="Odont" >Ciencias Sociales.</button>
              <button type="button" class="list-group-item list-group-item-action" id="Odont" >Negocios.</button>
            </div>
            <div class="row">
              <hr>
            </div>
            <div class="row">
              <div class="col-md-12">The Guardian nombro a Bristol como una de las 10 ciudades más felices para vivir y trabajar en el Reino Unido.</div>

              <div class="header_btn dark_btn" style="display: flex;justify-content: center;">
                    <a style="width: 100%;" href="../Login" > Me interesa</a>
                </div>

            </div>
          </div>
          <div class="row">
            <hr>
          </div>
          <div class="youtube-player" data-id="scLpnIm-XZo"></div>

          <!--<div class="embed-responsive embed-responsive-21by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/scLpnIm-XZo"></iframe>
          </div>-->
          </div>

        </div>
          <div class="bottom-strip"></div>
      </div>

</div>

<div class="modal fade text-center py-5 subscribeModal-lg "  id="othersModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <!-- <div class="top-strip"></div> -->
      <div class="modal-header">
        <div class="container-fluid">
        <div class="row" style="margin-bottom: 10px;">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: red">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
          <div class="row">
            <div class="col-md-4 d-none d-lg-block d-xl-block"  style="margin-top: 40px;"> <img src="<?=base_url('resources/assets/Informativa/images/uk_band.jpg');?>" class="rounded mx-auto d-block" alt="..."></div>
            <div class="col-md-7 ml-auto d-none d-lg-block d-xl-block"><img  src="<?=base_url('resources/assets/Informativa/images/u_universities.jpg');?>" alt=""></div>
          </div>
        </div>
        <!-- <a class="h2" href="https://www.fiverr.com/sunlimetech/design-and-fix-your-bootstrap-4-issues" target="_blank"> </a>

        <h3 class="col-md-4 "></h3> -->

      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row">
            <!-- <div class="col-md-4"><b>Fundación:</b> </div>
            <div class="col-md-4 "> 1413 1hr 30 mins de Londres en avión.</div> -->
          </div>
          <div class="row">
            <hr>

          </div>
          <div class="row">
            <hr>
              <div class="col-md-12 " style="align:center"><b>Universidades:</b></div>
          </div>
          <div class="row">


            <div class="col-md-6"><li>University of Aberdeen</li></div>
            <div class="col-md-6"> <li>Cardiff University </li></div>
            <div class="col-md-6"> <li>University of Exeter</li></div>
            <div class="col-md-6"><li>Goldsmiths College</li></div>
            <div class="col-md-6"> <li>University of Reading</li> </div>
            <div class="col-md-6"> <li>University of Strathclyde, Glasgow, Escocia.</li>  </div>
            <div class="col-md-6"><li>Trinity College Dublin, Ireland </li> </div>
            <br>
          </div>
        </div>
        <div class="header_btn dark_btn" style="display: flex;justify-content: center;">
                    <a style="width: 100%;" href="../Login" > Me interesa</a>
                </div>
        <div class="row">
          <hr>
        </div>
        <div class="youtube-player" data-id="v8oA0J3fAnQ"></div>

        <!--<div class="embed-responsive embed-responsive-21by9">
          <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/v8oA0J3fAnQ"></iframe>
        </div>-->
        </div>

      </div>
        <div class="bottom-strip"></div>
    </div>

</div>

<!-- ****************************************Prepa Modal*******************************************************************8 -->


<div class="modal fade text-center py-5 subscribeModal-lg "  id="artsPrepaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <!-- <div class="top-strip"></div> -->
      <div class="modal-header">
        <div class="container-fluid">
        <div class="row" style="margin-bottom: 10px;">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: red">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
          <div class="row">
            <div class="col-md-4 d-none d-lg-block d-xl-block"  style="margin-top: -1px;"> <img src="<?=base_url('resources/assets/Informativa/images/lu_cambriadge.png');?>" class="rounded mx-auto d-block" alt="..."></div>
            <div class="col-md-7 ml-auto d-none d-lg-block d-xl-block"><img  src="<?=base_url('resources/assets/Informativa/images/luu_arts.jpg');?>" alt=""></div>
          </div>
        </div>
        <!-- <a class="h2" href="https://www.fiverr.com/sunlimetech/design-and-fix-your-bootstrap-4-issues" target="_blank"> </a>

        <h3 class="col-md-4 "></h3> -->

      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-4"><b>Fundación:</b> </div>
            <div class="col-md-4 "> 1985.</div>
          </div>
          <div class="row">
            <div class="col-md-4"><b>Ubicación:</b> </div>
            <div class="col-md-4 "> <a href="javascript:;"> A 50 min de Londres </a> </div>
          </div>
          <div class="row">
            <hr>
          </div>

          <div class="row">
            <hr>
              <div class="col-md-12 " style="align:center"><b>Tipo</b></div>
              <div class="col-md-12"><li>Año academico.</li></div>
              <div class="col-md-12"><li>Prepa completo.</li></div>
              <div class="col-md-12"><li>Semestre academico.</li></div>

          </div>
          <br>
          <div class="list-group">
            <button type="button" class="list-group-item list-group-item-action list-group-item-success ">
              Alojamiento
            </button>
            <button type="button" class="list-group-item list-group-item-action" id="Odont" >Residencial.</button>

          </div>

          <div class="row">
            <hr>
          </div>
          <div class="row">
            <div class="col-md-12">Una preparatoria especializada en las artes, diseño y drama.</div>
          </div>
        </div>
        <div class="col-md-12 ">
        <div class="header_btn dark_btn" style="display: flex;justify-content: center;">
                    <a style="width: 100%;" href="../Login" > Me interesa</a>
                </div>
        </div>
        <div class="row">
          <hr>
        </div>
        <div class="youtube-player" data-id="TLGYTqu34i0"></div>

        <!--<div class="embed-responsive embed-responsive-21by9">
          <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/TLGYTqu34i0"></iframe>
        </div>-->
        </div>

      </div>
        <div class="bottom-strip"></div>
    </div>


</div>

<div class="modal fade text-center py-5 subscribeModal-lg "  id="catsPrepaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
          <!-- <div class="top-strip"></div> -->
        <div class="modal-header">
          <div class="container-fluid">
          <div class="row" style="margin-bottom: 10px;">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: red">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="row">
              <div class="col-md-4 d-none d-lg-block d-xl-block"  style="margin-top: -1px;"> <img src="<?=base_url('resources/assets/Informativa/images/lu_cats.png');?>" class="rounded mx-auto d-block" alt="..."></div>
              <div class="col-md-7 ml-auto d-none d-lg-block d-xl-block"><img  src="<?=base_url('resources/assets/Informativa/images/luu_cats.png');?>" alt=""></div>
            </div>
          </div>
          <!-- <a class="h2" href="https://www.fiverr.com/sunlimetech/design-and-fix-your-bootstrap-4-issues" target="_blank"> </a>

          <h3 class="col-md-4 "></h3> -->

        </div>
        <div class="modal-body">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-4"><b>Fundación:</b> </div>
              <div class="col-md-4 "> 1952.</div>
            </div>
            <div class="row">
              <div class="col-md-4"><b>Ubicación Cambridge:</b> </div>
              <div class="col-md-4 "> <a href="https://goo.gl/maps/TtxkyUd5Ud1nw4SV9"> A1 High St, Chesterton, Cambridge CB4 1NQ, Reino Unido </a> </div>

          </div>
          <br>
            <div class="row">
              <div class="col-md-4"><b>Ubicación Canterbury:</b> </div>
              <div class="col-md-4 "> <a href="https://goo.gl/maps/5WQzGMZvC7Ki8gGHA"> 68 New Dover Rd, Canterbury CT1 3LQ, Reino Unido </a> </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-4"><b>Ubicación Londres:</b> </div>
              <div class="col-md-4 "> <a href="https://goo.gl/maps/gUfa7H22Ts4LAzwM6">43-45 Bloomsbury Square, Holborn, London WC1A 2RA, Reino Unido </a> </div>

            </div>
            <div class="row">
              <hr>
            </div>

            <div class="row">
              <hr>
                <div class="col-md-12 " style="align:center"><b>Tipo</b></div>
                <div class="col-md-12"><li>Año academico.</li></div>
                <div class="col-md-12"><li>Prepa completo.</li></div>
                <div class="col-md-12"><li>Semestre academico.</li></div>

            </div>
            <br>
            <div class="list-group">
              <button type="button" class="list-group-item list-group-item-action list-group-item-success ">
                Alojamiento
              </button>
              <button type="button" class="list-group-item list-group-item-action" id="Odont" >Residencial.</button>

            </div>

            <div class="row">
              <hr>
            </div>
            <div class="row">
              <div class="col-md-12">Cats College lleva casi 60 años formando alumnos con futuros llenos de éxito.</div>
            </div>
          </div>
          <div class="col-md-12 ">
          <div class="header_btn dark_btn" style="display: flex;justify-content: center;">
                    <a style="width: 100%;" href="../Login" > Me interesa</a>
                </div>
          </div>
          <div class="row">
            <hr>
          </div>
          <div class="youtube-player" data-id="uPFn8rHs6kI"></div>

          <!--<div class="embed-responsive embed-responsive-21by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/uPFn8rHs6kI"></iframe>
          </div>-->
          </div>

        </div>
          <div class="bottom-strip"></div>
      </div>

</div>





<div class="modal fade text-center py-5 subscribeModal-lg "  id="concordPrepaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
          <!-- <div class="top-strip"></div> -->
        <div class="modal-header">
          <div class="container-fluid">
          <div class="row" style="margin-bottom: 10px;">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: red">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="row">
              <div class="col-md-4 d-none d-lg-block d-xl-block"  style="margin-top: -1px;"> <img style="width: 90%" src="https://pbs.twimg.com/profile_images/1189486413403901953/G1XL4_AA_400x400.jpg" class="rounded mx-auto d-block" alt="..."></div>
              <div class="col-md-7 ml-auto d-none d-lg-block d-xl-block"><img  src="<?=base_url('resources/assets/Informativa/images/prepa_concordTwo.png');?>" alt=""></div>
            </div>
          </div>
          <!-- <a class="h2" href="https://www.fiverr.com/sunlimetech/design-and-fix-your-bootstrap-4-issues" target="_blank"> </a>

          <h3 class="col-md-4 "></h3> -->

        </div>
        <div class="modal-body">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-4"><b>Fundación:</b> </div>
              <div class="col-md-4 "> 1949.</div>
            </div>
            <div class="row">
              <div class="col-md-4"><b>Ubicación:</b> </div>
              <div class="col-md-4 "> <a href="https://goo.gl/maps/wvfZuoTvzmAGgQE69" target="_blank" > Acton Burnell Hall, Acton Burnell, Shrewsbury SY5 7PF, Reino Unido</a> </div>
            </div>
            <div class="row">
              <hr>
            </div>

            <div class="row">
              <hr>
                <div class="col-md-12 " style="align:center"><b>Tipo</b></div>
                <div class="col-md-12"><li>Año academico.</li></div>
                <div class="col-md-12"><li>Prepa completo.</li></div>

            </div>
            <br>
            <div class="list-group">
              <button type="button" class="list-group-item list-group-item-action list-group-item-success ">
                Alojamiento
              </button>
              <button type="button" class="list-group-item list-group-item-action" id="Odont" >Internado.</button>

            </div>

            <div class="row">
              <hr>
            </div>
            <div class="row">
              <div class="col-md-12">Como colegio internacional es uno de los más importantes de inglaterra.</div>
              <div class="col-md-12">Como colegio es una escuela en la que los jóvenes pueden florecer, encontrar confianza y un sentido de autoestima.</div>
              <div class="col-md-12">Concord es un lugar seguro y salidable para que cualquier niño crezca, damos la beinvenida a estudiantes de todo el mundo.</div>
            </div>
          </div>
          <div class="col-md-12 ">
          <div class="header_btn dark_btn" style="display: flex;justify-content: center;">
                    <a style="width: 100%;" href="../Login" > Me interesa</a>
                </div>
          </div>
          <div class="row">
            <hr>
          </div>
          <div class="youtube-player" data-id="5Uy21-BRN84"></div>

         <!--<div class="embed-responsive embed-responsive-21by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/5Uy21-BRN84"></iframe>
          </div>-->
          </div>

        </div>
          <div class="bottom-strip"></div>
      </div>

</div>

<div class="modal fade text-center py-5 subscribeModal-lg "  id="intoPrepaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <!-- <div class="top-strip"></div> -->
      <div class="modal-header">
        <div class="container-fluid">
        <div class="row" style="margin-bottom: 10px;">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: red">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
          <div class="row">
            <div class="col-md-4 d-none d-lg-block d-xl-block"  style="margin-top: -1px;"> <img src="<?=base_url('resources/assets/Informativa/images/prepa_into_logo.jpg');?>" class="rounded mx-auto d-block" alt="..."></div>
            <div class="col-md-7 ml-auto d-none d-lg-block d-xl-block"><img  src="<?=base_url('resources/assets/Informativa/images/prepa_nto.png');?>" alt=""></div>
          </div>
        </div>
        <!-- <a class="h2" href="https://www.fiverr.com/sunlimetech/design-and-fix-your-bootstrap-4-issues" target="_blank"> </a>

        <h3 class="col-md-4 "></h3> -->

      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-4"><b>Fundación:</b> </div>
            <div class="col-md-4 "> 1985.</div>
          </div>
          <div class="row">
            <div class="col-md-4"><b>Ubicación:</b> </div>
            <div class="col-md-4 "> <a href="https://goo.gl/maps/fPDAMFWF43oiYsxJ7" target="_blank" > 102 Middlesex St, Spitalfields, London E1 7EZ, Reino Unido</a> </div>
          </div>
          <div class="row">
            <hr>
          </div>

          <div class="row">
            <hr>
              <div class="col-md-12 " style="align:center"><b>Tipo</b></div>
              <div class="col-md-12"><li>Año academico.</li></div>
              <div class="col-md-12"><li>Prepa completo.</li></div>

          </div>
          <br>
          <div class="list-group">
            <button type="button" class="list-group-item list-group-item-action list-group-item-success ">
              Alojamiento
            </button>
            <button type="button" class="list-group-item list-group-item-action" id="Odont" >Residencial.</button>

          </div>

          <div class="row">
            <hr>
          </div>
          <div class="row">
            <div class="col-md-12">Los especialistas internacionales del estudio, Cada año , se ayuda a miles de jóvenes de todo el mundo para estudiar en las universidades líderes en UK.</div>
            <div class="col-md-12">Con Into los estudiantes van a estar mejor preparados para tener éxito en la universidad.</div>
            <div class="col-md-12">Con Into, Se les garantiza una gran educación internacional.</div>
          </div>
        </div>
        <div class="header_btn dark_btn" style="display: flex;justify-content: center;">
                    <a style="width: 100%;" href="../Login" > Me interesa</a>
                </div>
        <div class="row">
          <hr>
        </div>
        <div class="youtube-player" data-id="kkI2_4UKbos"></div>

        <!--<div class="embed-responsive embed-responsive-21by9">
          <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/GdEQPUbmvaE"></iframe>
        </div>-->
        </div>
      </div>
        <div class="bottom-strip"></div>
    </div>


</div>

<div class="modal fade text-center py-5 subscribeModal-lg "  id="kaplanPrepaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <!-- <div class="top-strip"></div> -->
      <div class="modal-header">
        <div class="container-fluid">
        <div class="row" style="margin-bottom: 10px;">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: red">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
          <div class="row">
            <div class="col-md-4 d-none d-lg-block d-xl-block"  style="margin-top: -1px;"> <img src="https://d311j2r2qvjkvi.cloudfront.net/en-us/getasset/f791d15a-2b56-45df-b5ee-ce7691b7cc5a/" class="rounded mx-auto d-block" alt="..."></div>
            <div class="col-md-7 ml-auto d-none d-lg-block d-xl-block"><img  src="<?=base_url('resources/assets/Informativa/images/prepamodal_kaplan.png');?>" alt=""></div>
          </div>
        </div>
        <!-- <a class="h2" href="https://www.fiverr.com/sunlimetech/design-and-fix-your-bootstrap-4-issues" target="_blank"> </a>

        <h3 class="col-md-4 "></h3> -->

      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-4"><b>Fundación:</b> </div>
            <div class="col-md-4 "> 1938.</div>
          </div>
          <div class="row">
            <div class="col-md-4"><b>Ubicación:</b> </div>
            <div class="col-md-4 "> <a href="https://goo.gl/maps/zKTbasE3xCGkSUFb7" target="_blank" > Londres,Bristol, Brighton</a> </div>
          </div>
          <div class="row">
            <hr>
          </div>

          <div class="row">
            <hr>
              <div class="col-md-12 " style="align:center"><b>Tipo</b></div>
              <div class="col-md-12"><li>Año academico.</li></div>

          </div>
          <br>
          <div class="list-group">
            <button type="button" class="list-group-item list-group-item-action list-group-item-success ">
              Alojamiento
            </button>
            <button type="button" class="list-group-item list-group-item-action" id="Odont" >Residencial.</button>

          </div>

          <div class="row">
            <hr>
          </div>
          <div class="row">
            <div class="col-md-12">Estudie en una de las universidades internacionales más respetadas de Londres.</div>
            <div class="col-md-12">KIC London celebra 10 años de ayudar a los estudiantes a seguir su camino a la universidad.</div>
            <div class="col-md-12">Situado en la ciudad académica más importante del mundo (QS Best Student Cities 2019), el Colegio te preparará para un título universitario y para una carrera exitosa.</div>
          </div>
        </div>
        <div class="col-md-12 ">
          <div class="header_btn dark_btn" style="display: flex;justify-content: center;">
            <a style="width: 100%;" href="../Login" > Me interesa</a>
          </div>
        </div>
        <div class="row">
          <hr>
        </div>
        <div class="youtube-player" data-id="DrcW85kja5w"></div>
        <!--<div class="embed-responsive embed-responsive-21by9">
          <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Pdmv3chcouc"></iframe>
        </div>-->
        </div>
      </div>
        <div class="bottom-strip"></div>
    </div>


</div>

<div class="modal fade text-center py-5 subscribeModal-lg "  id="adrewsPrepaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
          <!-- <div class="top-strip"></div> -->
        <div class="modal-header">
          <div class="container-fluid">
          <div class="row" style="margin-bottom: 10px;">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: red">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="row">
              <div class="col-md-4 d-none d-lg-block d-xl-block"  style="margin-top: -1px;"> <img src="<?=base_url('resources/assets/Informativa/images/cambios_stadrew_Collage.jpg');?>" class="rounded mx-auto d-block" alt="..."></div>
              <div class="col-md-7 ml-auto d-none d-lg-block d-xl-block"><img  src="<?=base_url('resources/assets/Informativa/images/cambios_standrewModal.jpg');?>" alt=""></div>
            </div>
          </div>
          <!-- <a class="h2" href="https://www.fiverr.com/sunlimetech/design-and-fix-your-bootstrap-4-issues" target="_blank"> </a>

          <h3 class="col-md-4 "></h3> -->

        </div>
        <div class="modal-body">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-4"><b>Fundación:</b> </div>
              <div class="col-md-4 "> 1985.</div>
            </div>
            <div class="row">
              <div class="col-md-4"><b>Ubicación:</b> </div>
              <div class="col-md-4 "> <a href="https://goo.gl/maps/CCyZa2zsHdw8cpWH9" target="_blank" > 89 Regent St, Cambridge CB2 1AW, Reino Unido </a> </div>
            </div>
            <div class="row">
              <hr>
            </div>

            <div class="row">
              <hr>
                <div class="col-md-12 " style="align:center"><b>Tipo</b></div>
                <div class="col-md-12"><li>Año academico.</li></div>
                <div class="col-md-12"><li>Prepa completo.</li></div>
                <div class="col-md-12"><li>Semestre academico.</li></div>

            </div>
            <br>
            <div class="list-group">
              <button type="button" class="list-group-item list-group-item-action list-group-item-success ">
                Alojamiento
              </button>

              <button type="button" class="list-group-item list-group-item-action" id="Odont" >Con familia.</button>
              <button type="button" class="list-group-item list-group-item-action" id="Odont" >Residencial.</button>

            </div>

            <div class="row">
              <hr>
            </div>
            <div class="row">
              <div class="col-md-12">Cuenta con una alta calidad educativa .</div>
              <div class="col-md-12">Cuenta con internet inálambrico por todo el campus, tiene 16 salones bien equipados con pizarrón interactivo.</div>
              <div class="col-md-12">Estudiantes desde 14 años estudian en St. Andrews.</div>
            </div>
          </div>
          <div class="col-md-12 ">
          <div class="header_btn dark_btn" style="display: flex;justify-content: center;">
                    <a style="width: 100%;" href="../Login" > Me interesa</a>
                </div>
          </div>
          <div class="row">
            <hr>
          </div>
          <video controls width="640" height="480"  >
            <source src="https://www.standrewscambridge.co.uk/wp-content/uploads/2019/02/St.-Andrews-2018.mp4" type="video/mp4" width="640" height="480">

          </video>
        <!-- <div class="youtube-player" data-id="tfVYTiZt23E"></div> -->

          <!--<div class="embed-responsive embed-responsive-21by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/tfVYTiZt23E"></iframe>
          </div>-->
          </div>
        </div>
          <div class="bottom-strip"></div>
      </div>
</div>

<div class="modal fade text-center py-5 subscribeModal-lg "  id="tautonPrepaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
          <!-- <div class="top-strip"></div> -->
        <div class="modal-header">
          <div class="container-fluid">
            <div class="row" style="margin-bottom: 10px;">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: red">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="row">
              <div class="col-md-4 d-none d-lg-block d-xl-block"  style="margin-top: -1px;"> <img src="<?=base_url('resources/assets/Informativa/images/prepa_tauton_logo.jpeg');?>" class="rounded mx-auto d-block" alt="..."></div>
              <div class="col-md-7 ml-auto d-none d-lg-block d-xl-block"><img  src="<?=base_url('resources/assets/Informativa/images/prepamodal_atauton.png');?>" alt=""></div>
            </div>
          </div>
          <!-- <a class="h2" href="https://www.fiverr.com/sunlimetech/design-and-fix-your-bootstrap-4-issues" target="_blank"> </a>

          <h3 class="col-md-4 "></h3> -->

        </div>
        <div class="modal-body">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-4"><b>Fundación:</b> </div>
              <div class="col-md-4 "> 1847.</div>
            </div>
            <div class="row">
              <div class="col-md-4"><b>Ubicación:</b> </div>
              <div class="col-md-4 "> <a href="https://goo.gl/maps/7SNsjXiXfAisYZdd7" target="_blank" > Staplegrove Rd, Taunton TA2 6AD, Reino Unido </a> </div>
            </div>
            <div class="row">
              <hr>
            </div>

            <div class="row">
              <hr>
                <div class="col-md-12 " style="align:center"><b>Tipo</b></div>
                <div class="col-md-12"><li>Año academico.</li></div>
                <div class="col-md-12"><li>Prepa completo.</li></div>
                <div class="col-md-12"><li>Semestre academico.</li></div>

            </div>
            <br>
            <div class="list-group">
              <button type="button" class="list-group-item list-group-item-action list-group-item-success ">
                Alojamiento
              </button>
              <button type="button" class="list-group-item list-group-item-action" id="Odont" >Internado.</button>

            </div>

            <div class="row">
              <hr>
            </div>
            <div class="row">
              <div class="col-md-12">La escuela esta localizada en un hermoso y seguro campus con exelente conexión con Londres.</div>
              <div class="col-md-12">Cuenta con edificios antiguos muy hermosos complementados con modernas instalaciones.</div>
              <div class="col-md-12">El objetivo de la escuela es preparar a los estudiantes para entrar al sistema educativo británico.</div>
            </div>
          </div>
          <div class="col-md-12 ">
          <div class="header_btn dark_btn" style="display: flex;justify-content: center;">
                    <a style="width: 100%;" href="../Login" > Me interesa</a>
                </div>
          </div>
          <div class="row">
            <hr>
          </div>
          <div class="youtube-player" data-id="t38tNAvZbJk"></div>

          <!--<div class="embed-responsive embed-responsive-21by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/m61w28VWR2I"></iframe>
          </div>-->
          </div>

        </div>
          <div class="bottom-strip"></div>
      </div>
</div>

<div class="modal fade text-center py-5 subscribeModal-lg "  id="akworthPrepaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <!-- <div class="top-strip"></div> -->
      <div class="modal-header d-none d-lg-block d-xl-block">
        <div class="container-fluid">
          <div class="row" style="margin-bottom: 10px;">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: red">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
          <div class="row">
            <div class="col-md-4 "  style="margin-top: 40px;"> <img src="<?=base_url('resources/assets/Informativa/images/uk_band.jpg');?>" class="rounded mx-auto d-block" alt="..."></div>
            <div class="col-md-7 ml-auto"><img  src="<?=base_url('resources/assets/Informativa/images/u_universities.jpg');?>" alt=""></div>
          </div>
        </div>
        <!-- <a class="h2" href="https://www.fiverr.com/sunlimetech/design-and-fix-your-bootstrap-4-issues" target="_blank"> </a>

        <h3 class="col-md-4 "></h3> -->

      </div>
      <div class="modal-body">
        <div class="container-fluid">

          <br>
          <div class="list-group">
            <button type="button" class="list-group-item list-group-item-action list-group-item-success ">
              Lista de Preparatorias
            </button>
            <button type="button" class="list-group-item list-group-item-action" id="Odont" >Ackworth School</button>
            <button type="button" class="list-group-item list-group-item-action" id="Odont" >Bath Academy.</button>
            <button type="button" class="list-group-item list-group-item-action" id="Odont" >Cardiff Sixth Form College.</button>
            <button type="button" class="list-group-item list-group-item-action" id="Odont" >Collyer's.</button>
            <button type="button" class="list-group-item list-group-item-action" id="Odont" >Dover College .</button>
            <button type="button" class="list-group-item list-group-item-action" id="Odont" >OnCampus.</button>
            <button type="button" class="list-group-item list-group-item-action" id="Odont" >Stonyhurst College.</button>
            <button type="button" class="list-group-item list-group-item-action" id="Odont" >Strathallan.</button>
          </div>

        </div>
        <div class="header_btn dark_btn" style="display: flex;justify-content: center;">
                    <a style="width: 100%;" href="../Login" > Me interesa</a>
                </div>
        <div class="row">
          <hr>
        </div>
        <div class="youtube-player" data-id="v8oA0J3fAnQ"></div>
        <!--<div class="embed-responsive embed-responsive-21by9">
          <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/v8oA0J3fAnQ"></iframe>
        </div>-->

      </div>
        <div class="bottom-strip"></div>
    </div>

</div>
</div>


<div class="modal fade text-center py-5 subscribeModal-lg "  id="bathPrepaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <!-- <div class="top-strip"></div> -->
      <div class="modal-header">
        <div class="container-fluid">
          <div class="row" style="margin-bottom: 10px;">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: red">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
          <div class="row">
            <div class="col-md-4 d-none d-lg-block d-xl-block"  style="margin-top: -1px;"> <img src="<?=base_url('resources/assets/Informativa/images/lp_bath.png');?>" class="rounded mx-auto d-block" alt="..."></div>
            <div class="col-md-7 ml-auto d-none d-lg-block d-xl-block"><img  src="<?=base_url('resources/assets/Informativa/images/vv_bath.jpg');?>" alt=""></div>
          </div>
        </div>
        <!-- <a class="h2" href="https://www.fiverr.com/sunlimetech/design-and-fix-your-bootstrap-4-issues" target="_blank"> </a>

        <h3 class="col-md-4 "></h3> -->

      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-4"><b>Fundación:</b> </div>
            <div class="col-md-4 "> 1985.</div>
          </div>
          <div class="row">
            <div class="col-md-4"><b>Ubicación:</b> </div>
            <div class="col-md-4 "> <a href="https://goo.gl/maps/8r8T5gyXEpL3eXi16" target="_blank" > Avon, 27 Queen Square, Bath BA1 2HX, Reino Unido </a> </div>
          </div>
          <div class="row">
            <hr>
          </div>

          <div class="row">
            <hr>
              <div class="col-md-12 " style="align:center"><b>Tipo</b></div>
              <div class="col-md-12"><li>Año academico.</li></div>
              <div class="col-md-12"><li>Prepa completo.</li></div>
              <div class="col-md-12"><li>Semestre academico.</li></div>

          </div>
          <br>
          <div class="list-group">
            <button type="button" class="list-group-item list-group-item-action list-group-item-success ">
              Alojamiento
            </button>

            <button type="button" class="list-group-item list-group-item-action" id="Odont" >Con familia.</button>
            <button type="button" class="list-group-item list-group-item-action" id="Odont" >Residencial.</button>

          </div>

          <div class="row">
            <hr>
          </div>
        </div>
        <div class="col-md-12 ">
        <div class="header_btn dark_btn" style="display: flex;justify-content: center;">
                    <a style="width: 100%;" href="../Login" > Me interesa</a>
                </div>
        </div>
        <div class="row">
          <hr>
        </div>
        <div class="youtube-player" data-id="S1G5cWSMmzQ"></div>

        <!--<div class="embed-responsive embed-responsive-21by9">
          <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/S1G5cWSMmzQ"></iframe>
        </div>-->
        </div>

      </div>
        <div class="bottom-strip"></div>
    </div>

</div>

<div class="modal fade text-center py-5 subscribeModal-lg "  id="collyerPrepaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
          <!-- <div class="top-strip"></div> -->
        <div class="modal-header">
          <div class="container-fluid">
          <div class="row" style="margin-bottom: 10px;">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: red">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="row">
              <div class="col-md-4  d-none d-lg-block d-xl-block"  style="margin-top: -1px;"> <img src="<?=base_url('resources/assets/Informativa/images/prepa_collers_logo.png');?>" class="rounded mx-auto d-block" alt="..."></div>
              <div class="col-md-7 ml-auto  d-none d-lg-block d-xl-block"><img  src="<?=base_url('resources/assets/Informativa/images/prepamodal_collers.png');?>" alt=""></div>
            </div>
          </div>
          <!-- <a class="h2" href="https://www.fiverr.com/sunlimetech/design-and-fix-your-bootstrap-4-issues" target="_blank"> </a>

          <h3 class="col-md-4 "></h3> -->

        </div>
        <div class="modal-body">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-4"><b>Fundación:</b> </div>
              <div class="col-md-4 "> 1985.</div>
            </div>
            <div class="row">
              <div class="col-md-4"><b>Ubicación:</b> </div>
              <div class="col-md-4 "> <a href="https://goo.gl/maps/wAKMwQbXom9D6JK68" target="_blank" > 82 Hurst Rd, Horsham RH12 2EJ, Reino Unido </a> </div>
            </div>
            <div class="row">
              <hr>
            </div>

            <div class="row">
              <hr>
                <div class="col-md-12 " style="align:center"><b>Tipo</b></div>
                <div class="col-md-12"><li>Año academico.</li></div>
                <div class="col-md-12"><li>Prepa completo.</li></div>

            </div>
            <br>
            <div class="list-group">
              <button type="button" class="list-group-item list-group-item-action list-group-item-success ">
                Alojamiento
              </button>

              <button type="button" class="list-group-item list-group-item-action" id="Odont" >Con familia.</button>

            </div>

            <div class="row">
              <hr>
            </div>
          </div>
          <div class="col-md-12 ">
          <div class="header_btn dark_btn" style="display: flex;justify-content: center;">
                    <a style="width: 100%;" href="../Login" > Me interesa</a>
                </div>
          </div>
          <div class="row">
            <hr>
          </div>
          <div class="youtube-player" data-id="_eJsc2kI7wU"></div>

          <!--<div class="embed-responsive embed-responsive-21by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/_eJsc2kI7wU"></iframe>
          </div>-->
          </div>

        </div>
          <div class="bottom-strip"></div>
      </div>

</div>

<div class="modal fade text-center py-5 subscribeModal-lg "  id="cardiffPrepaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <!-- <div class="top-strip"></div> -->
      <div class="modal-header">
        <div class="container-fluid">
        <div class="row" style="margin-bottom: 10px;">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: red">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
          <div class="row">
            <div class="col-md-4 d-none d-lg-block d-xl-block"  style="margin-top: -1px;"> <img src="<?=base_url('resources/assets/Informativa/images/prepa_cardiff-sixth_Logo.jpg');?>" class="rounded mx-auto d-block" alt="..."></div>
            <div class="col-md-7 ml-auto d-none d-lg-block d-xl-block"><img  src="<?=base_url('resources/assets/Informativa/images/prepamodal_cardiff-sixth.png');?>" alt=""></div>
          </div>
        </div>
        <!-- <a class="h2" href="https://www.fiverr.com/sunlimetech/design-and-fix-your-bootstrap-4-issues" target="_blank"> </a>

        <h3 class="col-md-4 "></h3> -->

      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-4"><b>Fundación:</b> </div>
            <div class="col-md-4 "> 1985.</div>
          </div>
          <div class="row">
            <div class="col-md-4"><b>Ubicación:</b> </div>
            <div class="col-md-4 "> <a href="https://g.page/CSFCOfficial?share" target="_blank" > Trinity Court, 21-27 Newport Rd, Cardiff CF24 0AA, Reino Unido </a> </div>
          </div>
          <div class="row">
            <hr>
          </div>

          <div class="row">
            <hr>
              <div class="col-md-12 " style="align:center"><b>Tipo</b></div>
              <div class="col-md-12"><li>Año academico.</li></div>
              <div class="col-md-12"><li>Prepa completo.</li></div>

          </div>
          <br>
          <div class="list-group">
            <button type="button" class="list-group-item list-group-item-action list-group-item-success ">
              Alojamiento
            </button>
            <button type="button" class="list-group-item list-group-item-action" id="Odont" >Residencial.</button>

          </div>

          <div class="row">
            <hr>
          </div>
        </div>
        <div class="col-md-12 ">
          <div class="header_btn dark_btn" style="display: flex;justify-content: center;">
                    <a style="width: 100%;" href="../Login" > Me interesa</a>
                </div>
        </div>
        <div class="row">
          <hr>
        </div>
        <div class="youtube-player" data-id="cJcIRj8MszM"></div>

        <!--<div class="embed-responsive embed-responsive-21by9">
          <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/cJcIRj8MszM"></iframe>
        </div>-->
        </div>

      </div>
        <div class="bottom-strip"></div>
    </div>


</div>

<div class="modal fade text-center py-5 subscribeModal-lg "  id="doverPrepaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <!-- <div class="top-strip"></div> -->
      <div class="modal-header">
        <div class="container-fluid">
          <div class="row" style="margin-bottom: 10px;">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: red">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
          <div class="row">
            <div class="col-md-4 d-none d-lg-block d-xl-block "  style="margin-top: -1px;"> <img src="<?=base_url('resources/assets/Informativa/images/prepa_Dover_prepa.jpg');?>" class="rounded mx-auto d-block" alt="..."></div>
            <div class="col-md-7 ml-auto d-none d-lg-block d-xl-block"><img  src="<?=base_url('resources/assets/Informativa/images/prepamodal_dover.png');?>" alt=""></div>
          </div>
        </div>
        <!-- <a class="h2" href="https://www.fiverr.com/sunlimetech/design-and-fix-your-bootstrap-4-issues" target="_blank"> </a>

        <h3 class="col-md-4 "></h3> -->

      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-4"><b>Fundación:</b> </div>
            <div class="col-md-4 "> 1985.</div>
          </div>
          <div class="row">
            <div class="col-md-4"><b>Ubicación:</b> </div>
            <div class="col-md-4 "> <a href="https://goo.gl/maps/9BECx3p7qQghekqp6" target="_blank" > Effingham Cres, Dover CT17 9RH, Reino Unido </a> </div>
          </div>
          <div class="row">
            <hr>
          </div>

          <div class="row">
            <hr>
              <div class="col-md-12 " style="align:center"><b>Tipo</b></div>
              <div class="col-md-12"><li>Año academico.</li></div>
              <div class="col-md-12"><li>Prepa completo.</li></div>

          </div>
          <br>
          <div class="list-group">
            <button type="button" class="list-group-item list-group-item-action list-group-item-success ">
              Alojamiento
            </button>
            <button type="button" class="list-group-item list-group-item-action" id="Odont" >Internado.</button>

          </div>

          <div class="row">
            <hr>
          </div>
        </div>
        <div class="col-md-12 ">
        <div class="header_btn dark_btn" style="display: flex;justify-content: center;">
                    <a style="width: 100%;" href="../Login" > Me interesa</a>
                </div>
        </div>
        <div class="row">
          <hr>
        </div>
        <div class="youtube-player" data-id="WeAYjrwD7v4"></div>

        <!--<div class="embed-responsive embed-responsive-21by9">
          <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/WeAYjrwD7v4"></iframe>
        </div>-->
        </div>

      </div>
        <div class="bottom-strip"></div>
    </div>


</div>

<div class="modal fade text-center py-5 subscribeModal-lg "  id="stonyhurtsPrepaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <!-- <div class="top-strip"></div> -->
      <div class="modal-header">
        <div class="container-fluid">
        <div class="row" style="margin-bottom: 10px;">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: red">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
          <div class="row">
            <div class="col-md-4 d-none d-lg-block d-xl-block"  style="margin-top: -1px;"> <img src="<?=base_url('resources/assets/Informativa/images/prepa_Stonyhurts_College.jpg');?>" class="rounded mx-auto d-block" alt="..."></div>
            <div class="col-md-7 ml-auto d-none d-lg-block d-xl-block"><img  src="<?=base_url('resources/assets/Informativa/images/prepamodal_stonyhurts.png');?>" alt=""></div>
          </div>
        </div>
        <!-- <a class="h2" href="https://www.fiverr.com/sunlimetech/design-and-fix-your-bootstrap-4-issues" target="_blank"> </a>

        <h3 class="col-md-4 "></h3> -->

      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-4"><b>Fundación:</b> </div>
            <div class="col-md-4 "> 1985.</div>
          </div>
          <div class="row">
            <div class="col-md-4"><b>Ubicación:</b> </div>
            <div class="col-md-4 "> <a href="https://goo.gl/maps/offSnTJiuAXzAvk78" target="_blank" > Stonyhurst, Clitheroe BB7 9PT, Reino Unido </a> </div>
          </div>
          <div class="row">
            <hr>
          </div>

          <div class="row">
            <hr>
              <div class="col-md-12 " style="align:center"><b>Tipo</b></div>
              <div class="col-md-12"><li>Prepa completo.</li></div>

          </div>
          <br>
          <div class="list-group">
            <button type="button" class="list-group-item list-group-item-action list-group-item-success ">
              Alojamiento
            </button>
            <button type="button" class="list-group-item list-group-item-action" id="Odont" >Internado.</button>

          </div>

          <div class="row">
            <hr>
          </div>
        </div>
        <div class="col-md-12 ">
        <div class="header_btn dark_btn" style="display: flex;justify-content: center;">
                    <a style="width: 100%;" href="../Login" > Me interesa</a>
                </div>
        </div>
        <div class="row">
          <hr>
        </div>
        <div class="youtube-player" data-id="5xa1XwDzSnQ"></div>

        <!--<div class="embed-responsive embed-responsive-21by9">
          <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/5xa1XwDzSnQ"></iframe>
        </div>-->
        </div>

      </div>
        <div class="bottom-strip"></div>
    </div>


</div>

<div class="modal fade text-center py-5 subscribeModal-lg "  id="strathaPrepaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <!-- <div class="top-strip"></div> -->
      <div class="modal-header">
        <div class="container-fluid">
          <div class="row" style="margin-bottom: 10px;">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: red">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
          <div class="row">
            <div class="col-md-4 d-none d-lg-block d-xl-block"  style="margin-top: -1px;"> <img src="<?=base_url('resources/assets/Informativa/images/prepa_strathallan_logo.png');?>" class="rounded mx-auto d-block" alt="..."></div>
            <div class="col-md-7 ml-auto d-none d-lg-block d-xl-block"><img  src="<?=base_url('resources/assets/Informativa/images/prepamodal_strathallan.png');?>" alt=""></div>
          </div>
        </div>
        <!-- <a class="h2" href="https://www.fiverr.com/sunlimetech/design-and-fix-your-bootstrap-4-issues" target="_blank"> </a>

        <h3 class="col-md-4 "></h3> -->

      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-4"><b>Fundación:</b> </div>
            <div class="col-md-4 "> 1985.</div>
          </div>
          <div class="row">
            <div class="col-md-4"><b>Ubicación:</b> </div>
            <div class="col-md-4 "> <a href="https://goo.gl/maps/h2j9BiWNmAkzGKeo6" target="_blank" > Forgandenny, Perth PH2 9EG, Reino Unido </a> </div>
          </div>
          <div class="row">
            <hr>
          </div>

          <div class="row">
            <hr>
              <div class="col-md-12 " style="align:center"><b>Tipo</b></div>
              <div class="col-md-12"><li>Prepa completo.</li></div>

          </div>
          <br>
          <div class="list-group">
            <button type="button" class="list-group-item list-group-item-action list-group-item-success ">
              Alojamiento
            </button>
            <button type="button" class="list-group-item list-group-item-action" id="Odont" >Internado.</button>

          </div>

          <div class="row">
            <hr>
          </div>
        </div>
        <div class="col-md-12 ">
        <div class="header_btn dark_btn" style="display: flex;justify-content: center;">
                    <a style="width: 100%;" href="../Login" > Me interesa</a>
                </div>
        </div>
        <div class="row">
          <hr>
        </div>
        <div class="youtube-player" data-id="PhklOowjNJk"></div>

        <<!--div class="embed-responsive embed-responsive-21by9">
          <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/PhklOowjNJk"></iframe>
        </div>-->
        </div>

      </div>
        <div class="bottom-strip"></div>
    </div>


</div>




<!-- *******************************************Englis********************************************************************** -->

<!-- / -->
<div class="modal fade text-center py-5 subscribeModal-lg "  id="bathInglesModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
          <!-- <div class="top-strip"></div> -->
        <div class="modal-header">
          <div class="container-fluid">
          <div class="row" style="margin-bottom: 10px;">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: red">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="row">
              <div class="col-md-4 d-none d-lg-block d-xl-block"  style="margin-top: 30px;"> <img src="<?=base_url('resources/assets/Informativa/images/new_bath_acaademic_of_english.jpg');?>" class="rounded mx-auto d-block" alt="..."></div>
              <div class="col-md-7 ml-auto d-none d-lg-block d-xl-block"><img  src="<?=base_url('resources/assets/Informativa/images/new_newu_BathhModal.jpg');?>" alt=""></div>
            </div>
          </div>
          <!-- <a class="h2" href="https://www.fiverr.com/sunlimetech/design-and-fix-your-bootstrap-4-issues" target="_blank"> </a>

          <h3 class="col-md-4 "></h3> -->

        </div>
        <div class="modal-body">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-4"><b>Fundación:</b> </div>
              <div class="col-md-4 "> 	1973 .</div>
            </div>
            <div class="row">
              <div class="col-md-4"><b>Ubicación:</b> </div>
              <div class="col-md-4 "> <a href="https://goo.gl/maps/u82xj3PPHUkcMBsy8" target="_blank" >27 Queen Square, Bath BA1 2HX,United Kingdom</a> </div>
            </div>
            <div class="row">
              <hr>

            </div>
            <div class="row">
              <hr>
                <div class="col-md-12 " style="align:center"><b>Edades</b></div>
                <div class="col-md-12"><li>Mayor de (16+).</li></div>

            </div>
            <div class="row">
              <hr>
                <div class="col-md-12 " style="align:center"><b>Tipo de curso</b></div>
                <div class="col-md-12"><li>Inglés general.</li></div>
                <div class="col-md-12"><li>Inglés profesional (25+).</li></div>
                <div class="col-md-12"><li>Preparación para exámenes.</li></div>

            </div>

            <div class="row">
              <hr>

            </div>
            <div class="list-group">
              <button type="button" class="list-group-item list-group-item-action list-group-item-success ">
                Alojamiento
              </button>
              <button type="button" class="list-group-item list-group-item-action" id="Odont" data-id="Odontología" >Con familia.</button>

            </div>

            <div class="row">
              <hr>
            </div>
            <div class="row">

              <div class="col-md-12"><li>Acreditada por UKVI y British Council.</li></div>
              <div class="col-md-12"><li>atención individual a cada estudiante.</li></div>
              <div class="col-md-12"><li>Alojamiento con familias solidarias y responsables.</li></div>

              <div class="col-md-12 ">

              <div class="header_btn dark_btn" style="display: flex;justify-content: center;">
                    <a style="width: 100%;" href="../Login" > Me interesa</a>
                </div>
                </div>

            </div>
          </div>
          <div class="row">
            <hr>
          </div>
          <div class="youtube-player" data-id="S1G5cWSMmzQ"></div>

          <!--<div class="embed-responsive embed-responsive-21by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/S1G5cWSMmzQ"></iframe>
          </div>-->

          <hr>

          </div>

        </div>
          <div class="bottom-strip"></div>
      </div>
</div>

<!-- // -->
<div class="modal fade text-center py-5 subscribeModal-lg "  id="brightonInglesModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
          <!-- <div class="top-strip"></div> -->
        <div class="modal-header">
          <div class="container-fluid">
            <div class="row" style="margin-bottom: 10px;">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: red">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="row">
              <div class="col-md-4 d-none d-lg-block d-xl-block"  style="margin-top: 30px;"> <img src="<?=base_url('resources/assets/Informativa/images/new_bringthon.jpg');?>" class="rounded mx-auto d-block" alt="..."></div>
              <div class="col-md-7 ml-auto d-none d-lg-block d-xl-block"><img  src="<?=base_url('resources/assets/Informativa/images/new_new_centre_brightonModal.jpg');?>" alt=""></div>
            </div>
          </div>
          <!-- <a class="h2" href="https://www.fiverr.com/sunlimetech/design-and-fix-your-bootstrap-4-issues" target="_blank"> </a>

          <h3 class="col-md-4 "></h3> -->

        </div>
        <div class="modal-body">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-4"><b>Fundación:</b> </div>
              <div class="col-md-4 "> 	1962 .</div>
            </div>
            <div class="row">
              <div class="col-md-4"><b>Ubicación:</b> </div>
              <div class="col-md-4 "> <a href="https://goo.gl/maps/EnJY2JK1wF3U4Br88" target="_blank" >33 Palmeira Square, Hove BN3 2GB, United Kingdom</a> </div>
            </div>
            <div class="row">
              <hr>

            </div>
            <div class="row">
              <hr>
                <div class="col-md-12 " style="align:center"><b>Edades</b></div>
                <div class="col-md-12"><li>Mayor de (16+).</li></div>

            </div>
            <div class="row">
              <hr>
                <div class="col-md-12 " style="align:center"><b>Tipo de curso</b></div>
                <div class="col-md-12"><li>Inglés general.</li></div>
                <div class="col-md-12"><li>Inglés profesional (25+).</li></div>
                <div class="col-md-12"><li>Preparación para exámenes.</li></div>

            </div>

            <div class="row">
              <hr>

            </div>
            <div class="list-group">
              <button type="button" class="list-group-item list-group-item-action list-group-item-success ">
                Alojamiento
              </button>
              <button type="button" class="list-group-item list-group-item-action" id="Odont" data-id="Odontología" >Con familia.</button>

            </div>
            <div class="row">
              <hr>
            </div>
            <div class="row">

              <div class="col-md-12"><li>Ofrecer a los estudiantes la oportunidad de experimentar lo que es estudiar una materia que les encanta en la universidad.</li></div>
              <div class="col-md-12"><li>Los estudiantes aprenderán en un entorno académico, trabajarán con otros estudiantes interesados ​​en cursos similares, estudiantes universitarios y personal académico.</li></div>
              <div class="col-md-12"><li>Clases de diversas nacionalidades.</li></div>

              <div class="col-md-12 ">

                <div class="header_btn dark_btn" style="display: flex;justify-content: center;">
                    <a style="width: 100%;" href="../Login" > Me interesa</a>
                </div>
                </div>

            </div>
          </div>
          <div class="row">
            <hr>
          </div>
          <div class="youtube-player" data-id="WJWdV6xExKk"></div>

          <!--<div class="embed-responsive embed-responsive-21by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Vqj6hIFB-TE"></iframe>
          </div>-->
          <hr>

          </div>

        </div>
          <div class="bottom-strip"></div>
      </div>
</div>

<!-- / -->
<div class="modal fade text-center py-5 subscribeModal-lg "  id="cambridgeInglesModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
          <!-- <div class="top-strip"></div> -->
        <div class="modal-header">
          <div class="container-fluid">
            <div class="row" style="margin-bottom: 10px;">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: red">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="row">
              <div class="col-md-4 d-none d-lg-block d-xl-block"  style="margin-top: 30px;"> <img src="<?=base_url('resources/assets/Informativa/images/new_selectenglishlogo.jpg');?>" class="rounded mx-auto d-block" alt="..."></div>
              <div class="col-md-7 ml-auto d-none d-lg-block d-xl-block"><img  src="<?=base_url('resources/assets/Informativa/images/new_new_eselectModal.jpg');?>" alt=""></div>
            </div>
          </div>
          <!-- <a class="h2" href="https://www.fiverr.com/sunlimetech/design-and-fix-your-bootstrap-4-issues" target="_blank"> </a>

          <h3 class="col-md-4 "></h3> -->

        </div>
        <div class="modal-body">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-4"><b>Fundación:</b> </div>
              <div class="col-md-4 "> 	1991 .</div>
            </div>
            <div class="row">
              <div class="col-md-4"><b>Ubicación:</b> </div>
              <div class="col-md-4 "> <a href="https://goo.gl/maps/fyt4VQvkFH7GoHhp6" target="_blank" >13 Station Rd, Cambridge CB1 2JB, Reino Unido </a> </div>
            </div>
            <div class="row">
              <hr>

            </div>
            <div class="row">
              <hr>
                <div class="col-md-12 " style="align:center"><b>Edades</b></div>
                <div class="col-md-12"><li>Mayor de (16+).</li></div>

            </div>
            <div class="row">
              <hr>
                <div class="col-md-12 " style="align:center"><b>Tipo de curso</b></div>
                <div class="col-md-12"><li>Inglés general.</li></div>
                <div class="col-md-12"><li>Inglés profesional (25+).</li></div>
                <div class="col-md-12"><li>Preparación para exámenes.</li></div>

            </div>

            <div class="row">
              <hr>

            </div>
            <div class="list-group">
              <button type="button" class="list-group-item list-group-item-action list-group-item-success ">
                Alojamiento
              </button>
              <button type="button" class="list-group-item list-group-item-action" id="Odont" data-id="Odontología" >Con familia.</button>
              <button type="button" class="list-group-item list-group-item-action" id="Odont" >Residencial.</button>

            </div>
            <div class="row">
              <hr>
            </div>
            <div class="row">

              <div class="col-md-12"><li>Nuestros programas ofrecen una mezcla de tradición e inspiración a medida que los participantes de todo el mundo absorben la atmósfera de este lugar extraordinario.</li></div>
              <div class="col-md-12"><li>Durante siglos, la Universidad ha ayudado a dar forma y cambiar el mundo.</li></div>
              <div class="col-md-12"><li>creemos que nuestros programas ofrecen beneficios que ampliarán su experiencia y mejorarán su CV.</li></div>

              <div class="col-md-12 ">

              <div class="header_btn dark_btn" style="display: flex;justify-content: center;">
                    <a style="width: 100%;" href="../Login" > Me interesa</a>
                </div>
                </div>

            </div>
          </div>
          <div class="row">
            <hr>
          </div>
          <div class="youtube-player" data-id="IbDyLsPEbPA"></div>

          <!--<div class="embed-responsive embed-responsive-21by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/bCApP-JqLpc"></iframe>
          </div>-->
          <hr>

          </div>

        </div>
          <div class="bottom-strip"></div>
      </div>
</div>

<!-- / -->
<div class="modal fade text-center py-5 subscribeModal-lg "  id="stanfordInglesModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
          <!-- <div class="top-strip"></div> -->
        <div class="modal-header">
          <div class="container-fluid">
          <div class="row" style="margin-bottom: 10px;">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: red">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="row">
              <div class="col-md-4 d-none d-lg-block d-xl-block"  style="margin-top: 30px;"> <img src="<?=base_url('resources/assets/Informativa/images/new_stafford_house.jpg');?>" class="rounded mx-auto d-block" alt="..."></div>
              <div class="col-md-7 ml-auto d-none d-lg-block d-xl-block"><img  src="<?=base_url('resources/assets/Informativa/images/e_stafford_houseModal.jpg');?>" alt=""></div>
            </div>
          </div>
          <!-- <a class="h2" href="https://www.fiverr.com/sunlimetech/design-and-fix-your-bootstrap-4-issues" target="_blank"> </a>

          <h3 class="col-md-4 "></h3> -->

        </div>
        <div class="modal-body">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-4"><b>Fundación:</b> </div>
              <div class="col-md-4 "> 	1952.</div>
            </div>
            <div class="row">
              <div class="col-md-4"><b>Ubicación:</b> </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-4"><b>London:</b> </div>
              <div class="col-md-4 "> <a href="https://goo.gl/maps/Ycju8LdURUVEbCMaA" target="_blank" > Londres SE1 5JA, Reino Unido </a> </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-4"><b>Brighton:</b> </div>
              <div class="col-md-4 "> <a href="https://goo.gl/maps/8fqbcbiC9WhTSiHH6" target="_blank" > 61 Western Rd, Hove BN3 1JD, Reino Unido</a> </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-4"><b>Canterbury:</b> </div>
              <div class="col-md-4 "> <a href="https://goo.gl/maps/fHtg59F324RBwaat8" target="_blank" > 19 New Dover Rd, Canterbury CT1 3AH, Reino Unido </a> </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-4"><b>Cambridge:</b> </div>
              <div class="col-md-4 "> <a href="https://goo.gl/maps/uLPgmAYTYmDJxciV9" target="_blank" >15 Round Church St, Cambridge CB5 8AD, Reino Unido </a> </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-4"><b>Boston, USA:</b> </div>
              <div class="col-md-4 "> <a href="https://g.page/stafford-house-boston?share" target="_blank" > 38 Chauncy St 8th floor, Boston, MA 02111, Estados Unidos</a> </div>
            </div>
            <br>
            <div class="list-group">
              <button type="button" class="list-group-item list-group-item-action list-group-item-success ">
                Alojamiento
              </button>
              <button type="button" class="list-group-item list-group-item-action" id="Odont" data-id="Odontología" >Con familia.</button>

            </div>
            <div class="row">
              <hr>
            </div>
            <div class="row">

              <div class="col-md-12"><li>Acreditada por el British Council en Londres.</li></div>
              <div class="col-md-12"><li>Cuenta con los más altos estándares con más de 60 años de experiencia y éxito.</li></div>
              <div class="col-md-12"><li>Clases pequeñas(10 en primedio, máximo 14), Profesores altamente calificados, Cuenta con última tecnología  y tableros inteligentes en todos los salones.</li></div>

              <div class="col-md-12 ">

              <div class="header_btn dark_btn" style="display: flex;justify-content: center;">
                    <a style="width: 100%;" href="../Login" > Me interesa</a>
                </div>
                </div>
            </div>
          </div>
          <div class="row">
            <hr>
          </div>
          <div class="youtube-player" data-id="Wztg6uPsJpE"></div>

          <!--<div class="embed-responsive embed-responsive-21by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/_RNiSEej3qA"></iframe>
          </div>-->

          <hr>

          </div>

        </div>
          <div class="bottom-strip"></div>
      </div>
</div>

<div class="modal fade text-center py-5 subscribeModal-lg "  id="stanfordVeranoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
          <!-- <div class="top-strip"></div> -->
        <div class="modal-header">
          <div class="container-fluid">
          <div class="row" style="margin-bottom: 10px;">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: red">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="row">
              <div class="col-md-4 d-none d-lg-block d-xl-block"  style="margin-top: 30px;"> <img src="<?=base_url('resources/assets/Informativa/images/stafford_Logo.png');?>" class="rounded mx-auto d-block" alt="..."></div>
              <div class="col-md-7 ml-auto d-none d-lg-block d-xl-block"><img  src="<?=base_url('resources/assets/Informativa/images/e_stafford_houseModal.jpg');?>" alt=""></div>
            </div>
          </div>
          <!-- <a class="h2" href="https://www.fiverr.com/sunlimetech/design-and-fix-your-bootstrap-4-issues" target="_blank"> </a>

          <h3 class="col-md-4 "></h3> -->

        </div>
        <div class="modal-body">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-4"><b>Fundación:</b> </div>
              <div class="col-md-4 "> 	1952.</div>
            </div>
            <div class="row">
              <div class="col-md-4"><b>Ubicación:</b> </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-4"><b>London:</b> </div>
              <div class="col-md-4 "> <a href="https://goo.gl/maps/Ycju8LdURUVEbCMaA" target="_blank" > Londres SE1 5JA, Reino Unido </a> </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-4"><b>Brighton:</b> </div>
              <div class="col-md-4 "> <a href="https://goo.gl/maps/8fqbcbiC9WhTSiHH6" target="_blank" > 61 Western Rd, Hove BN3 1JD, Reino Unido</a> </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-4"><b>Canterbury:</b> </div>
              <div class="col-md-4 "> <a href="https://goo.gl/maps/fHtg59F324RBwaat8" target="_blank" > 19 New Dover Rd, Canterbury CT1 3AH, Reino Unido </a> </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-4"><b>Cambridge:</b> </div>
              <div class="col-md-4 "> <a href="https://goo.gl/maps/uLPgmAYTYmDJxciV9" target="_blank" >15 Round Church St, Cambridge CB5 8AD, Reino Unido </a> </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-4"><b>Boston, USA:</b> </div>
              <div class="col-md-4 "> <a href="https://g.page/stafford-house-boston?share" target="_blank" > 38 Chauncy St 8th floor, Boston, MA 02111, Estados Unidos</a> </div>
            </div>
            <br>
            <div class="row">
                <div class="slide-container ">
                    <div class="row">
                      <div class="col-xs-2 col-md-6 ">
                       <div class="wrapper">
                         <div class="clash-card barbarian">
                           <div class="clash-card__image clash-card__image--barbarian">
                             <img class="imagencard" src="<?=base_url('resources/assets/Informativa/images/Stafford_Activities.png');?>"   alt="barbarian" />
                           </div>
                           <div class="clash-card__level clash-card__level--barbarian">Actividades de Aventura </div>
                           <div class="clash-card__unit-description">
                             Los estudiantes en este curso participarán en emocionantes actividades en Rutland Water, la reserva natural que se encuentra cerca de la escuela. Entre las actividades están, deportes acuáticos, montar a caballo, escalada, construir refugios de emergencia y paseo guiado en bicicleta.
                           </div>
                           <p class="where">¿Cuándo y dónde?</p>
                           <p class="nameInst">Oakham</p>
                           <div class="clash-card__unit-description">
                             <p><b>Llegada: </b>4 Jul <b>Salida: </b>2 Ago</p>
                           </div>
                           <p class="where">Duración</p>
                           <div class="clash-card__unit-description">
                             1–4 semanas
                           </div>
                           <p class="where">El costo por semana incluye: </p>
                           <div class="clash-card__unit-description">
                             Alojamiento, desayuno, comida y cena, suplementos para el curso, actividades sociales programadas y costo de inscripción.
                           </div>
                           <div class="clash-card__unit-stats clash-card__unit-stats--barbarian clearfix">
                             <div class="one-third">
                               <div class="stat-value">Edad:</div>
                               <div class="stat">12-17 años </div>
                             </div>
                             <div class="one-third">
                               <div class="stat-value">Nivel de inglés:</div>
                               <div class="stat">Pre-Intermedio a Avanzado </div>
                             </div>
                             <div class="one-third no-border">
                               <div class="stat-value">Costo:</div>
                               <div class="stat">£368 por semana</div>
                             </div>
                           </div>
                         </div> <!-- end clash-card barbarian-->
                         </div> <!-- end wrapper -->
                      </div> <!-- end col waper-->
                      <div class="col-xs-2 col-md-6  ml-auto">
                       <div class="wrapper">
                         <div class="clash-card wizard">
                           <div class="clash-card__image clash-card__image--wizard">
                             <img class="imagencard" src="<?=base_url('resources/assets/Informativa/images/stafford_arte.png');?>"   alt="barbarian" />
                           </div>
                           <div class="clash-card__level clash-card__level--wizard">Arte</div>
                           <div class="clash-card__unit-description">
                             Los estudiantes trabajarán en diferentes disciplinas artísticas, fotografía, trabajo 3D.Realizarán su portfolio y lo presentarán a otros estudiantes.
                           </div>
                           <p class="where">¿Cuándo y dónde?</p>
                           <p class="nameInst">Malvern</p>
                           <div class="clash-card__unit-description">
                             <p><b>Llegada: </b>4 Jul <b>Salida: </b>26 Jul</p>
                           </div>
                           <p class="where">Duración</p>
                           <div class="clash-card__unit-description">
                             1–2 semanas
                           </div>
                           <p class="where">El costo por semana incluye: </p>
                           <div class="clash-card__unit-description">
                             Alojamiento, desayuno, comida y cena, suplementos para el curso, actividades sociales programadas y costo de inscripción.
                           </div>
                           <div class="clash-card__unit-stats clash-card__unit-stats--wizard clearfix">
                             <div class="one-third">
                               <div class="stat-value">Edad:</div>
                               <div class="stat">12-17 años </div>
                             </div>
                             <div class="one-third">
                               <div class="stat-value">Nivel de inglés:</div>
                               <div class="stat">Básico a Avanzado </div>
                             </div>
                             <div class="one-third no-border">
                               <div class="stat-value">Costo:</div>
                               <div class="stat">£273 por semana</div>
                             </div>
                           </div>
                         </div> <!-- end clash-card barbarian-->
                       </div> <!-- end wrapper -->
                      </div> <!-- end col waper-->
                      <div class="col-xs-2 col-md-6  ml-auto">
                       <div class="wrapper">
                         <div class="clash-card goblin">
                           <div class="clash-card__image clash-card__image--giant">
                             <img class="imagencard" src="<?=base_url('resources/assets/Informativa/images/stafford_basquetball.png');?>"   alt="barbarian" />
                           </div>
                           <div class="clash-card__level clash-card__level--giant">Basketball</div>
                           <div class="clash-card__unit-description">
                             Los estudiantes tendrán 9 horas a la semana de clases de basketball con entrenadores acreditados. El entrenamiento se enfocará en las habilidades y técnicas usadas en el juego y lo pondrán a prueba en torneos semanales.
                           </div>
                           <p class="where">¿Cuándo y dónde?</p>
                           <p class="nameInst">Canterbury</p>
                           <div class="clash-card__unit-description">
                             <p><b>Llegada: </b>21 Jun<b>Salida: </b>16 Ago</p>
                           </div>
                           <p class="where">Duración</p>
                           <div class="clash-card__unit-description">
                             1–4 semanas
                           </div>
                           <p class="where">El costo por semana incluye: </p>
                           <div class="clash-card__unit-description">
                             Alojamiento, desayuno, comida y cena, suplementos para el curso, actividades sociales programadas y costo de inscripción.
                           </div>
                           <div class="clash-card__unit-stats clash-card__unit-stats--giant clearfix">
                             <div class="one-third">
                               <div class="stat-value">Edad:</div>
                               <div class="stat">12-17 años</div>
                             </div>
                             <div class="one-third">
                               <div class="stat-value">Nivel de inglés:</div>
                               <div class="stat">Básico a Avanzado</div>
                             </div>
                             <div class="one-third no-border">
                               <div class="stat-value">Costo:</div>
                               <div class="stat">£273 por semana</div>
                             </div>
                           </div>
                         </div> <!-- end clash-card barbarian-->
                        </div> <!-- end wrapper -->
                      </div> <!-- end col waper-->
                      <div class="col-xs-2 col-md-6  ml-auto">
                       <div class="wrapper">
                         <div class="clash-card archer">
                           <div class="clash-card__image clash-card__image--archer">
                             <img class="imagencard" src="<?=base_url('resources/assets/Informativa/images/stafford_teatro.png');?>"   alt="barbarian" />
                           </div>
                           <div class="clash-card__level clash-card__level--archer">Teatro</div>
                           <div class="clash-card__unit-description">
                             Los estudiantes en este curso desarrollarán su conocimiento de técnicas en teatro y artes escénicas. Trabajarán en sus habilidades físicas y vocales.
                           </div>
                           <p class="where">¿Cuándo y dónde?</p>
                           <p class="nameInst">Malvern y Woodcote</p>
                           <div class="clash-card__unit-description">
                             <p><b>Llegada: </b>5 Jul<b>Salida: </b>26 Jul </p>
                             <p><b>Llegada: </b>5 Jul<b>Salida: </b>2 Ago </p>
                           </div>
                           <p class="where">Duración</p>
                           <div class="clash-card__unit-description">
                             1–2 semanas
                           </div>
                           <p class="where">El costo por semana incluye: </p>
                           <div class="clash-card__unit-description">
                             Alojamiento, desayuno, comida y cena, suplementos para el curso, actividades sociales programadas y costo de inscripción.
                           </div>
                           <div class="clash-card__unit-stats clash-card__unit-stats--archer clearfix">
                             <div class="one-third">
                               <div class="stat-value">Edad:</div>
                               <div class="stat">12-17 años</div>
                             </div>
                             <div class="one-third">
                               <div class="stat-value">Nivel de inglés:</div>
                               <div class="stat">Básico a Avanzado</div>
                             </div>
                             <div class="one-third no-border">
                               <div class="stat-value">Costo:</div>
                               <div class="stat">£273 por semana</div>
                             </div>
                           </div>
                         </div> <!-- end clash-card barbarian-->
                        </div> <!-- end wrapper -->
                      </div> <!-- end col waper-->
                      <div class="col-xs-2 col-md-6  ml-auto">
                       <div class="wrapper">
                         <div class="clash-card giant">
                           <div class="clash-card__image clash-card__image--goblin">
                             <img class="imagencard" src="<?=base_url('resources/assets/Informativa/images/stafford_rugby.png');?>"   alt="barbarian" />
                           </div>
                           <div class="clash-card__level clash-card__level--goblin">Rugby</div>
                           <div class="clash-card__unit-description">
                             Este curso será impartido por Glenn Gelderbloom, jugador profesional del equipo Leicester Tigers campeones de la copa Europea. Actualmente es entrenador en Leicester Tigers Academy.
                           </div>
                           <p class="where">¿Cuándo y dónde?</p>
                           <p class="nameInst">Oakham</p>
                           <div class="clash-card__unit-description">
                             <p><b>Llegada: </b>5 Jul<b>Salida: </b>26 Jul</p>
                           </div>
                           <p class="where">Duración</p>
                           <div class="clash-card__unit-description">
                             1–4 semanas
                           </div>
                           <p class="where">El costo por semana incluye: </p>
                           <div class="clash-card__unit-description">
                             Alojamiento, desayuno, comida y cena, suplementos para el curso, actividades sociales programadas y costo de inscripción.
                           </div>
                           <div class="clash-card__unit-stats clash-card__unit-stats--goblin clearfix">
                             <div class="one-third">
                               <div class="stat-value">Edad:</div>
                               <div class="stat"> 12-17 años</div>
                             </div>
                             <div class="one-third">
                               <div class="stat-value">Nivel de inglés:</div>
                               <div class="stat">Básico a Avanzado</div>
                             </div>
                             <div class="one-third no-border">
                               <div class="stat-value">Costo:</div>
                               <div class="stat">£295 por semana</div>
                             </div>
                           </div>
                         </div> <!-- end clash-card barbarian-->
                         </div> <!-- end wrapper -->

                      </div> <!-- end col waper-->
                      <div class="col-xs-2 col-md-6  ml-auto">
                       <div class="wrapper">
                         <div class="clash-card barbarian">
                           <div class="clash-card__image clash-card__image--barbarian">
                             <img class="imagencard" src="<?=base_url('resources/assets/Informativa/images/stafford_aquitacion.png');?>"   alt="barbarian" />
                           </div>
                           <div class="clash-card__level clash-card__level--barbarian">Equitación</div>
                           <div class="clash-card__unit-description">
                             Los estudiantes aprenderán a mantener limpio y cuidado un establo de caballos. Usar el equipamiento de equitación así como disfrutar de equitación den tro y al aire libre con instructores calificados.
                           </div>
                           <p class="where">¿Cuándo y dónde?</p>
                           <p class="nameInst">Malvern</p>
                           <div class="clash-card__unit-description">
                             <p><b>Llegada: </b> 5 Jul<b>Salida: </b>26 Jul</p>
                           </div>
                           <p class="where">Duración</p>
                           <div class="clash-card__unit-description">
                             1–2 semanas
                           </div>
                           <p class="where">El costo por semana incluye: </p>
                           <div class="clash-card__unit-description">
                             Alojamiento, desayuno, comida y cena, suplementos para el curso, actividades sociales programadas y costo de inscripción.
                           </div>
                           <div class="clash-card__unit-stats clash-card__unit-stats--barbarian clearfix">
                             <div class="one-third">
                               <div class="stat-value">Edad:</div>
                               <div class="stat"> 12-17 años</div>
                             </div>
                             <div class="one-third">
                               <div class="stat-value">Nivel de inglés:</div>
                               <div class="stat">Básico a Avanzado</div>
                             </div>
                             <div class="one-third no-border">
                               <div class="stat-value">Costo:</div>
                               <div class="stat">£550 por semana</div>
                             </div>
                           </div>

                         </div> <!-- end clash-card barbarian-->
                         </div> <!-- end wrapper -->

                      </div> <!-- end col waper-->
                      <div class="col-xs-2 col-md-6  ml-auto">
                       <div class="wrapper">
                         <div class="clash-card wizard">
                           <div class="clash-card__image clash-card__image--wizard">
                             <img class="imagencard" src="<?=base_url('resources/assets/Informativa/images/stafford_navegacion.png');?>"   alt="barbarian" />
                           </div>
                           <div class="clash-card__level clash-card__level--wizard">Navegación</div>
                           <div class="clash-card__unit-description">
                             (Todos los estudiantes deberán saber nadar con confianza en el mar)
                             Este programa está diseñado para permitirle a los estudiantes obtener confianza en el agua mientras se divierten. Las sesiones se llevarán a cabo con  Royal Yachting Association Instructor en el puerto de Dove.
                           </div>
                           <p class="where">¿Cuándo y dónde?</p>
                           <p class="nameInst">Dover College</p>
                           <div class="clash-card__unit-description">
                             <p><b>Llegada: </b>5 Jul <b>Salida: </b>19 Jul</p>
                           </div>
                           <p class="where">Duración</p>
                           <div class="clash-card__unit-description">
                              2 semanas
                           </div>
                           <p class="where">El costo por semana incluye: </p>
                           <div class="clash-card__unit-description">
                             Alojamiento, desayuno, comida y cena, suplementos para el curso, actividades sociales programadas y costo de inscripción.
                           </div>
                           <div class="clash-card__unit-stats clash-card__unit-stats--wizard clearfix">
                             <div class="one-third">
                               <div class="stat-value">Edad:</div>
                               <div class="stat">12-17 años </div>
                             </div>
                             <div class="one-third">
                               <div class="stat-value">Nivel de inglés:</div>
                               <div class="stat">Básico a Avanzado </div>
                             </div>
                             <div class="one-third no-border">
                               <div class="stat-value">Costo:</div>
                               <div class="stat">£368 por semana</div>
                             </div>
                           </div>
                         </div> <!-- end clash-card barbarian-->
                       </div> <!-- end wrapper -->
                      </div> <!-- end col waper-->
                      <div class="col-xs-2 col-md-6  ml-auto">
                       <div class="wrapper">
                         <div class="clash-card goblin">
                           <div class="clash-card__image clash-card__image--giant">
                             <img class="imagencard" src="<?=base_url('resources/assets/Informativa/images/stafford_tenis.png');?>"   alt="barbarian" />
                           </div>
                           <div class="clash-card__level clash-card__level--giant">Tenis</div>
                           <div class="clash-card__unit-description">
                             Los estudiantes tendrán 9 horas de clases a la semana de tenis profesional, impartidos por entrenadores calificados de Malvern Tennis Academy. Las sesiones incluyen enseñanza de técnicas para golpear la pelota en el juego.
                           </div>
                           <p class="where">¿Cuándo y dónde?</p>
                           <p class="nameInst">Malvern</p>
                           <div class="clash-card__unit-description">
                             <p><b>Llegada: </b>5 Jul<b>Salida: </b>26 Jul</p>
                           </div>
                           <p class="where">Duración</p>
                           <div class="clash-card__unit-description">
                             1–4 semanas
                           </div>
                           <p class="where">El costo por semana incluye: </p>
                           <div class="clash-card__unit-description">
                             Alojamiento, desayuno, comida y cena, suplementos para el curso, actividades sociales programadas y costo de inscripción.
                           </div>
                           <div class="clash-card__unit-stats clash-card__unit-stats--giant clearfix">
                             <div class="one-third">
                               <div class="stat-value">Edad:</div>
                               <div class="stat">12-17 años</div>
                             </div>
                             <div class="one-third">
                               <div class="stat-value">Nivel de inglés:</div>
                               <div class="stat">Básico a Avanzado</div>
                             </div>
                             <div class="one-third no-border">
                               <div class="stat-value">Costo:</div>
                               <div class="stat">£295 por semana</div>
                             </div>
                           </div>
                         </div> <!-- end clash-card barbarian-->
                        </div> <!-- end wrapper -->
                      </div> <!-- end col waper-->
                      <div class="col-xs-2 col-md-6  ml-auto">
                       <div class="wrapper">
                         <div class="clash-card archer">
                           <div class="clash-card__image clash-card__image--archer">
                             <img class="imagencard" src="<?=base_url('resources/assets/Informativa/images/stafford_videojuegos.png');?>"   alt="barbarian" />
                           </div>
                           <div class="clash-card__level clash-card__level--archer">Codificación de Videojuegos</div>
                           <div class="clash-card__unit-description">
                            Los estudiantes aprenderán las bases de codificación y programación ya que lograrán crear su propio videojuego.
                           </div>
                           <p class="where">¿Cuándo y dónde?</p>
                           <p class="nameInst">Oakham</p>
                           <div class="clash-card__unit-description">
                             <p><b>Llegada: </b>4 Jul<b>Salida: </b>02 Ago </p>
                           </div>
                           <p class="where">Duración</p>
                           <div class="clash-card__unit-description">
                             1–2 semanas
                           </div>
                           <p class="where">El costo por semana incluye: </p>
                           <div class="clash-card__unit-description">
                             Alojamiento, desayuno, comida y cena, suplementos para el curso, actividades sociales programadas y costo de inscripción.
                           </div>
                           <div class="clash-card__unit-stats clash-card__unit-stats--archer clearfix">
                             <div class="one-third">
                               <div class="stat-value">Edad:</div>
                               <div class="stat">12-17 años</div>
                             </div>
                             <div class="one-third">
                               <div class="stat-value">Nivel de inglés:</div>
                               <div class="stat">Pre-Intermedio a Avanzado</div>
                             </div>
                             <div class="one-third no-border">
                               <div class="stat-value">Costo:</div>
                               <div class="stat">£368 por semana</div>
                             </div>
                           </div>
                         </div> <!-- end clash-card barbarian-->
                        </div> <!-- end wrapper -->
                      </div> <!-- end col waper-->
                 </div> <!-- end row two -->
              </div><!-- end slide continer-->
            </div>
            <br>
            <div class="row">

              <div class="col-md-12"><li>Acreditada por el British Council en Londres.</li></div>
              <div class="col-md-12"><li>Cuenta con los más altos estándares con más de 60 años de experiencia y éxito.</li></div>
              <div class="col-md-12"><li>Clases pequeñas(10 en primedio, máximo 14), Profesores altamente calificados, Cuenta con última tecnología  y tableros inteligentes en todos los salones.</li></div>

              <div class="col-md-12 ">

              <div class="header_btn dark_btn" style="display: flex;justify-content: center;">
                    <a style="width: 100%;" href="../Login" > Me interesa</a>
                </div>
                </div>
            </div>
          </div>
          <div class="row">
            <hr>
          </div>
          <div class="youtube-player" data-id="Wztg6uPsJpE"></div>

          <!--<div class="embed-responsive embed-responsive-21by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/_RNiSEej3qA"></iframe>
          </div>-->

          <hr>

          </div>

        </div>
          <div class="bottom-strip"></div>
      </div>
</div>


<div class="modal fade text-center py-5 subscribeModal-lg "  id="bristolInglesModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
          <!-- <div class="top-strip"></div> -->
        <div class="modal-header">
          <div class="container-fluid">
          <div class="row" style="margin-bottom: 10px;">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: red">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="row">
              <div class="col-md-4 d-none d-lg-block d-xl-block"  style="margin-top: 30px;"> <img src="<?=base_url('resources/assets/Informativa/images/bristol_international_house_logo.jpg');?>" class="rounded mx-auto d-block" alt="..."></div>
              <div class="col-md-7 ml-auto d-none d-lg-block d-xl-block"><img  src="<?=base_url('resources/assets/Informativa/images/bristol_international_houseModal.jpg');?>" alt=""></div>
            </div>
          </div>
          <!-- <a class="h2" href="https://www.fiverr.com/sunlimetech/design-and-fix-your-bootstrap-4-issues" target="_blank"> </a>

          <h3 class="col-md-4 "></h3> -->

        </div>
        <div class="modal-body">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-4"><b>Fundación:</b> </div>
              <div class="col-md-4 "> 	1987.</div>
            </div>
            <div class="row">
              <div class="col-md-4"><b>Ubicación:</b> </div>
              <div class="col-md-4 "> <a href="https://goo.gl/maps/BrwbcPdo9NdSxqxe9" target="_blank" > 27 Oakfield Rd, Clifton, Bristol BS8 2AT, Reino Unido </a> </div>

            </div>

            <div class="row">
              <hr>

            </div>
            <div class="row">
              <hr>
                <div class="col-md-12 " style="align:center"><b>Edades</b></div>
                <div class="col-md-12"><li>Mayor de (16+).</li></div>

            </div>
            <div class="row">
              <hr>
                <div class="col-md-12 " style="align:center"><b>Tipo de curso</b></div>
                <div class="col-md-12"><li>Inglés general.</li></div>
                <div class="col-md-12"><li>Inglés profesional (25+).</li></div>
                <div class="col-md-12"><li>Preparación para exámenes.</li></div>

            </div>

            <div class="row">
              <hr>

            </div>
            <div class="list-group">
              <button type="button" class="list-group-item list-group-item-action list-group-item-success ">
                Alojamiento
              </button>
              <button type="button" class="list-group-item list-group-item-action" id="Odont" data-id="Odontología" >Con familia.</button>

            </div>
            <div class="row">
              <hr>
            </div>
            <div class="row">

              <div class="col-md-12"><li>En el edificio principal de nuestra escuela en Oakfield Road, tenemos una gran sala de estudio, una sala de estudiantes en la planta baja con máquinas de café y bebidas.</li></div>
              <div class="col-md-12"><li>El edificio cuenta con una conexión a internet súper rápida de 500 Mbit y la última Wifi para mantenerlo conectado.</li></div>
              <div class="col-md-12"><li>Su seguridad es una prioridad para nosotros y la escuela mantiene altos estándares en esta área.</li></div>

              <div class="col-md-12 ">

              <div class="header_btn dark_btn" style="display: flex;justify-content: center;">
                    <a style="width: 100%;" href="../Login" > Me interesa</a>
                </div>
                </div>
            </div>
          </div>
          <div class="row">
            <hr>
          </div>
          <div class="youtube-player" data-id="khM7tjui86Q"></div>

          <!--<div class="embed-responsive embed-responsive-21by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/_RNiSEej3qA"></iframe>
          </div>-->

          <hr>

          </div>

        </div>
          <div class="bottom-strip"></div>
      </div>
</div>

<!-- / -->
<div class="modal fade text-center py-5 subscribeModal-lg "  id="cambridgeAcademyInglesModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
          <!-- <div class="top-strip"></div> -->
        <div class="modal-header">
          <div class="container-fluid">
          <div class="row" style="margin-bottom: 10px;">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: red">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="row">
              <div class="col-md-4 d-none d-lg-block d-xl-block"  style="margin-top: 30px;"> <img src="<?=base_url('resources/assets/Informativa/images/new_CAE-Cambridge-Academy-of-English.jpg');?>" class="rounded mx-auto d-block" alt="..."></div>
              <div class="col-md-7 ml-auto d-none d-lg-block d-xl-block"><img  src="<?=base_url('resources/assets/Informativa/images/ee_ecambrige.jpg');?>" alt=""></div>
            </div>
          </div>
          <!-- <a class="h2" href="https://www.fiverr.com/sunlimetech/design-and-fix-your-bootstrap-4-issues" target="_blank"> </a>

          <h3 class="col-md-4 "></h3> -->

        </div>
        <div class="modal-body">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-4"><b>Fundación:</b> </div>
              <div class="col-md-4 ">	1973.</div>
            </div>
            <div class="row">
              <div class="col-md-4"><b>Ubicación:</b> </div>
              <div class="col-md-4 "> <a href="https://goo.gl/maps/T33Bn6Mfjrnpa69x5" target="_blank" > Cambridge Academy of English, 65 High Street, Girton, Cambridge CB3 0QD England </a> </div>
            </div>
            <div class="row">
              <hr>

            </div>
            <div class="row">
              <hr>
                <div class="col-md-12 " style="align:center"><b>Edades</b></div>
                <div class="col-md-12"><li>Mayor de (16+).</li></div>

            </div>
            <div class="row">
              <hr>
                <div class="col-md-12 " style="align:center"><b>Tipo de curso</b></div>
                <div class="col-md-12"><li>Inglés general.</li></div>
                <div class="col-md-12"><li>Inglés profesional (25+).</li></div>
                <div class="col-md-12"><li>Preparación para exámenes.</li></div>

            </div>

            <div class="row">
              <hr>

            </div>
            <div class="list-group">
              <button type="button" class="list-group-item list-group-item-action list-group-item-success ">
                Alojamiento
              </button>
              <button type="button" class="list-group-item list-group-item-action" id="Odont" data-id="Odontología" >Con familia.</button>

            </div>
            <div class="row">
              <hr>
            </div>
            <div class="row">

              <!-- <div class="col-md-12"><li>20 o 26 horas de matrícula + programa social.</li></div>
              <div class="col-md-12"><li>Excursión miércoles por la tarde + evento social jueves por la noche.</li></div>
              <div class="col-md-12"><li>La Escuela de Verano ofrece oportunidades estructuradas y respaldadas para estudiantes de CCL y estudiantes internacionales visitantes para compartir una experiencia enriquecedora e intercultural.</li></div> -->

              <div class="col-md-12 ">

              <div class="header_btn dark_btn" style="display: flex;justify-content: center;">
                    <a style="width: 100%;" href="../Login" > Me interesa</a>
                </div>
                </div>
            </div>
          </div>
          <div class="row">
            <hr>
          </div>
          <div class="youtube-player" data-id="oegk-4TmnnM"></div>

          <!--<div class="embed-responsive embed-responsive-21by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/_RNiSEej3qA"></iframe>
          </div>-->

          <hr>

          </div>

        </div>
          <div class="bottom-strip"></div>
      </div>
</div>

<div class="modal fade text-center py-5 subscribeModal-lg "  id="chesterInglesModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
          <!-- <div class="top-strip"></div> -->
        <div class="modal-header">
          <div class="container-fluid">
            <div class="row" style="margin-bottom: 10px;">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: red">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="row">
              <div class="col-md-4 d-none d-lg-block d-xl-block"  style="margin-top: 30px;"> <img src="<?=base_url('resources/assets/Informativa/images/e_chester.jpg');?>" class="rounded mx-auto d-block" alt="..."></div>
              <div class="col-md-7 ml-auto d-none d-lg-block d-xl-block"><img  src="<?=base_url('resources/assets/Informativa/images/new_newchester-english-in-chester-00 (copy).jpg');?>" alt=""></div>
            </div>
          </div>
          <!-- <a class="h2" href="https://www.fiverr.com/sunlimetech/design-and-fix-your-bootstrap-4-issues" target="_blank"> </a>

          <h3 class="col-md-4 "></h3> -->

        </div>
        <div class="modal-body">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-4"><b>Fundación:</b> </div>
              <div class="col-md-4 "> 	1976 .</div>
            </div>
            <div class="row">
              <div class="col-md-4"><b>Ubicación:</b> </div>
              <div class="col-md-4 "> <a href="https://goo.gl/maps/G5cp1nuiuyYMBk977" target="_blank" > 9-11 Stanley PI, Chester CH1 2LU, Reino Unido </a> </div>
            </div>
            <div class="row">
              <hr>

            </div>
            <div class="row">
              <hr>
                <div class="col-md-12 " style="align:center"><b>Edades</b></div>
                <div class="col-md-12"><li>Mayor de (16+).</li></div>

            </div>
            <div class="row">
              <hr>
                <div class="col-md-12 " style="align:center"><b>Tipo de curso</b></div>
                <div class="col-md-12"><li>Inglés general.</li></div>
                <div class="col-md-12"><li>Inglés profesional (25+).</li></div>
                <div class="col-md-12"><li>Preparación para exámenes.</li></div>

            </div>

            <div class="row">
              <hr>

            </div>
            <div class="list-group">
              <button type="button" class="list-group-item list-group-item-action list-group-item-success ">
                Alojamiento
              </button>
              <button type="button" class="list-group-item list-group-item-action" id="Odont" data-id="Odontología" >Con familia.</button>
              <button type="button" class="list-group-item list-group-item-action" id="Odont" >Residencial.</button>

            </div>
            <div class="row">
              <hr>
            </div>
            <div class="row">

              <div class="col-md-12"><li>Te enseñarán nuestros destacados académicos de la Facultad de Administración y Negocios que son especialistas de la industria en su campo.</li></div>
              <div class="col-md-12"><li>Oportunidades fantásticas para experimentar el maravilloso Chester histórico y el noroeste del Reino Unido, incluidos Liverpool, Manchester y el norte de Gales.</li></div>
              <div class="col-md-12"><li> Es una oportunidad emocionante para combinar actividades de estudio y sociales.</li></div>

              <div class="col-md-12 ">

                <div class="header_btn dark_btn" style="display: flex;justify-content: center;">
                    <a style="width: 100%;" href="../Login" > Me interesa</a>
                </div>
              </div>

            </div>
          </div>
          <div class="row">
            <hr>
          </div>
          <div class="youtube-player" data-id="0P024JLpuoI"></div>

          <!--<div class="embed-responsive embed-responsive-21by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/5pcmATG_mjM"></iframe>
          </div>-->
        <hr>

          </div>

        </div>
          <div class="bottom-strip"></div>
      </div>
</div>

<div class="modal fade text-center py-5 subscribeModal-lg "  id="eastbourneInglesModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
          <!-- <div class="top-strip"></div> -->
        <div class="modal-header">
          <div class="container-fluid">
          <div class="row" style="margin-bottom: 10px;">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: red">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="row">
              <div class="col-md-4 d-none d-lg-block d-xl-block"  style="margin-top: 30px;"> <img src="<?=base_url('resources/assets/Informativa/images/z_subir_estbourne_Logo.jpg');?>" class="rounded mx-auto d-block" alt="..."></div>
              <div class="col-md-7 ml-auto d-none d-lg-block d-xl-block"><img  src="<?=base_url('resources/assets/Informativa/images/z_subir_eastbourneModal.jpg');?>" alt=""></div>
            </div>
          </div>
          <!-- <a class="h2" href="https://www.fiverr.com/sunlimetech/design-and-fix-your-bootstrap-4-issues" target="_blank"> </a>

          <h3 class="col-md-4 "></h3> -->

        </div>
        <div class="modal-body">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-4"><b>Fundación:</b> </div>
              <div class="col-md-4 "> 	1936 .</div>
            </div>
            <div class="row">
              <div class="col-md-4"><b>Ubicación:</b> </div>
              <div class="col-md-4 "> <a href="https://goo.gl/maps/RXCpxCfBAsjwzdCr9" target="_blank" >Old Wish Rd, Eastbourne BN21 4JY, Reino Unido </a> </div>
            </div>
            <div class="row">
              <hr>

            </div>
            <div class="row">
              <hr>
                <div class="col-md-12 " style="align:center"><b>Edades</b></div>
                <div class="col-md-12"><li>Mayor de (16+).</li></div>

            </div>
            <div class="row">
              <hr>
                <div class="col-md-12 " style="align:center"><b>Tipo de curso</b></div>
                <div class="col-md-12"><li>Inglés general.</li></div>
                <div class="col-md-12"><li>Inglés profesional (25+).</li></div>
                <div class="col-md-12"><li>Preparación para exámenes.</li></div>

            </div>

            <div class="row">
              <hr>

            </div>
            <div class="list-group">
              <button type="button" class="list-group-item list-group-item-action list-group-item-success ">
                Alojamiento
              </button>
              <button type="button" class="list-group-item list-group-item-action" id="Odont" data-id="Odontología" >Con familia.</button>

            </div>
            <div class="row">
              <hr>
            </div>
            <div class="row">

              <div class="col-md-12"><li>Eastbourne tiene mucho que ofrecer, incluyendo una selección de cines y teatros multiplex modernos, un hermoso paseo marítimo, un puerto deportivo de ocio y excelentes tiendas, tanto interiores como al aire libre.</li></div>
              <div class="col-md-12"><li>instalaciones educativas y deportivas de primera clase.</li></div>

              <div class="col-md-12 ">

              <div class="header_btn dark_btn" style="display: flex;justify-content: center;">
                    <a style="width: 100%;" href="../Login" > Me interesa</a>
                </div>
                </div>

            </div>
          </div>
          <div class="row">
            <hr>
          </div>
          <div class="youtube-player" data-id="UPrH--JS5eg"></div>

          <!--<div class="embed-responsive embed-responsive-21by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/S1G5cWSMmzQ"></iframe>
          </div>-->

          <hr>

          </div>

        </div>
          <div class="bottom-strip"></div>
      </div>
</div>

<div class="modal fade text-center py-5 subscribeModal-lg "  id="othersModalEnglish" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <!-- <div class="top-strip"></div> -->
      <div class="modal-header">
        <div class="container-fluid">
        <div class="row" style="margin-bottom: 10px;">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: red">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
          <div class="row">
            <div class="col-md-4 d-none d-lg-block d-xl-block"  style="margin-top: 40px;"> <img src="<?=base_url('resources/assets/Informativa/images/uk_band.jpg');?>" class="rounded mx-auto d-block" alt="..."></div>
            <div class="col-md-7 ml-auto d-none d-lg-block d-xl-block"><img  src="<?=base_url('resources/assets/Informativa/images/u_universities.jpg');?>" alt=""></div>
          </div>
        </div>
        <!-- <a class="h2" href="https://www.fiverr.com/sunlimetech/design-and-fix-your-bootstrap-4-issues" target="_blank"> </a>

        <h3 class="col-md-4 "></h3> -->

      </div>
      <div class="modal-body">
        <div class="container-fluid">

          <br>
          <div class="list-group">
            <button type="button" class="list-group-item list-group-item-action list-group-item-success ">
              Lista de Escuelas de Inglés
            </button>
            <button type="button" class="list-group-item list-group-item-action" id="Odont" >Bristol</button>
            <button type="button" class="list-group-item list-group-item-action" id="Odont" >Canterbury.</button>
            <button type="button" class="list-group-item list-group-item-action" id="Odont" >Cork, Ireland.</button>
            <button type="button" class="list-group-item list-group-item-action" id="Odont" >Dublin.</button>
            <button type="button" class="list-group-item list-group-item-action" id="Odont" >Liverpool .</button>
            <button type="button" class="list-group-item list-group-item-action" id="Odont" >London.</button>
            <button type="button" class="list-group-item list-group-item-action" id="Odont" >Manchester.</button>
          </div>

        </div>
        <div class="header_btn dark_btn" style="display: flex;justify-content: center;">
                    <a style="width: 100%;" href="../Login" > Me interesa</a>
                </div>
        <div class="row">
          <hr>
        </div>
        <div class="youtube-player" data-id="v8oA0J3fAnQ"></div>

        <!--<div class="embed-responsive embed-responsive-21by9">
          <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/v8oA0J3fAnQ"></iframe>
        </div>-->

      </div>
        <div class="bottom-strip"></div>
    </div>

</div>
</div>

<!--.....................................................- Cursos de verano ...................................................-->

<div class="modal fade text-center py-5 subscribeModal-lg "  id="bathVeranoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
          <!-- <div class="top-strip"></div> -->
        <div class="modal-header">
          <div class="container-fluid">
            <div class="row" style="margin-bottom: 10px;">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: red">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="row">
              <div class="col-md-4 d-none d-lg-block d-xl-block"  style="margin-top: 30px;"> <img src="<?=base_url('resources/assets/Informativa/images/lp_bath.png');?>" class="rounded mx-auto d-block" alt="..."></div>
              <div class="col-md-7 ml-auto d-none d-lg-block d-xl-block"><img  src="<?=base_url('resources/assets/Informativa/images/new_new_Bathh.jpg');?>" alt=""></div>
            </div>
          </div>
        </div>
        <div class="modal-body">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-4"><b>Fundación:</b> </div>
              <div class="col-md-4 "> 	1976 .</div>
            </div>
            <div class="row">
              <div class="col-md-4"><b>Ubicación:</b> </div>
              <div class="col-md-4 "> <a href="https://goo.gl/maps/u82xj3PPHUkcMBsy8" target="_blank" >27 Queen Square, Bath BA1 2HX,United Kingdom</a> </div>
            </div>
            <br>
            <div class="row">
                <div class="slide-container ">
                    <div class="row">
                      <div class="col-xs-2 col-md-6">
                       <div class="wrapper">
                         <div class="clash-card giant">
                           <div class="clash-card__image clash-card__image--goblin">
                             <img class="imagencard" src="<?=base_url('resources/assets/Informativa/images/bath_summerschool.jpg');?>"   alt="barbarian" />
                           </div>
                           <div class="clash-card__level clash-card__level--goblin">JUNIOR SUMMER SCHOOL</div>
                           <div class="clash-card__unit-description">
                             El mejor ambiente para jóvenes que quieren desarrollar sus habilidades en inglés que les gustaría conocer gente nueva y hacer nuevos amigos.
                           </div>
                           <p class="where">¿Cuándo?</p>
                           <div class="clash-card__unit-description">
                             <p><b>Llegada: </b>29 de Junio <b>Salida: </b>31 Julio 2020</p>
                           </div>
                           <div class="clash-card__unit-stats clash-card__unit-stats--goblin clearfix">
                             <div class="one-third">
                               <div class="stat-value">Edad:</div>
                               <div class="stat">12 - 16 años </div>
                             </div>
                             <div class="one-third">
                               <div class="stat-value">Nivel de inglés:</div>
                               <div class="stat"> Básico - Avanzado</div>
                             </div>
                           </div>

                         </div> <!-- end clash-card barbarian-->
                         </div> <!-- end wrapper -->

                      </div> <!-- end col waper-->
                      <div class="col-xs-2 col-md-6  ml-auto">
                         <div class="wrapper">
                          <table class="table table-bordered">
                            <thead class="theadtabletw">
                              <tr>
                                <th >Junior Summer School en Bath Academy (Casa anfitriona y residencia)</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>15 horas por semana de clases, programa completo de actividades, materiales, comidas y alojamiento</td>
                              </tr>
                            </tbody>
                          </table>
                          <table class="table table-bordered">
                            <thead class="theadtabletw">
                              <tr>
                                <th>1 semana</th>
                                <th>2 semanas</th>
                                <th>3 semanas</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>£630</td>
                                <td>£1,240</td>
                                <td>£1,830</td>
                              </tr>
                            </tbody>
                          </table>
                         </div>
                      </div>
                      <div class="col-xs-2 col-md-6  ml-auto">
                        <div class="wrapper">
                         <table class="table table-bordered">
                           <thead class="theadtableth">
                             <tr>
                               <th >Junior Summer School at Milton Abbey (Residencial)</th>
                             </tr>
                           </thead>
                           <tbody>
                             <tr>
                               <td>15 horas por semana de clases, programa completo de actividades, materiales, comidas y alojamiento</td>
                             </tr>
                           </tbody>
                         </table>
                         <table class="table table-bordered">
                           <thead class="theadtableth">
                             <tr>
                               <th>1 semana</th>
                               <th>2 semanas</th>
                               <th>3 semanas</th>
                             </tr>
                           </thead>
                           <tbody>
                             <tr>
                               <td>£630</td>
                               <td>£1,240</td>
                               <td>£1,830</td>
                             </tr>
                           </tbody>
                         </table>
                        </div>
                      </div>
                      <div class="col-xs-2 col-md-6  ml-auto">
                       <div class="wrapper">
                         <div class="clash-card barbarian">
                           <div class="clash-card__image clash-card__image--barbarian">
                             <img class="imagencard" src="<?=base_url('resources/assets/Informativa/images/bath_milton.jpg');?>"   alt="barbarian" />
                           </div>
                           <div class="clash-card__level clash-card__level--barbarian">MILTON ABBEY JUNIOR SUMMER SCHOOL</div>
                           <div class="clash-card__unit-description">
                             El mejor ambiente para jóvenes que quieren desarrollar sus habilidades en inglés que les gustaría conocer gente nueva y hacer nuevos amigos.
                           </div>
                           <p class="where">¿Cuándo?</p>
                           <div class="clash-card__unit-description">
                             <p><b>Llegada: </b>05 de Julio <b>Salida: </b>19 Julio 2020</p>
                           </div>
                           <p class="where">Incluye</p>
                           <div class="clash-card__unit-description">
                             Alimentos, alojamiento, actividades programadas, excursiones.
                           </div>
                           <div class="clash-card__unit-stats clash-card__unit-stats--barbarian clearfix">
                             <div class="one-third">
                               <div class="stat-value">Edad:</div>
                               <div class="stat"> 9 - 16 años </div>
                             </div>
                             <div class="one-third">
                               <div class="stat-value">Nivel de inglés:</div>
                               <div class="stat">Básico - Avanzado</div>
                             </div>
                           </div>

                         </div> <!-- end clash-card barbarian-->
                         </div> <!-- end wrapper -->

                      </div> <!-- end col waper-->
                 </div> <!-- end row two -->
              </div><!-- end slide continer-->
            </div>
            <br>
            <div class="row">
              <div class="col-md-12 ">
              <div class="header_btn dark_btn" style="display: flex;justify-content: center;">
                    <a style="width: 100%;" href="../Login" > Me interesa</a>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <hr>
          </div>
          <div class="youtube-player" data-id="S1G5cWSMmzQ"></div>

          <!--<div class="embed-responsive embed-responsive-21by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/S1G5cWSMmzQ"></iframe>
          </div>-->

          <hr>

          </div>

        </div>
          <div class="bottom-strip"></div>
      </div>
</div>


<div class="modal fade text-center py-5 subscribeModal-lg "  id="brightonVeranoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
          <!-- <div class="top-strip"></div> -->
        <div class="modal-header">
          <div class="container-fluid">
            <div class="row" style="margin-bottom: 10px;">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: red">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="row">
              <div class="col-md-4 d-none d-lg-block d-xl-block"  style="margin-top: 30px;"> <img src="<?=base_url('resources/assets/Informativa/images/v_brighton_logo.jpg');?>" class="rounded mx-auto d-block" alt="..."></div>
              <div class="col-md-7 ml-auto d-none d-lg-block d-xl-block"><img  src="<?=base_url('resources/assets/Informativa/images/vv_brington.png');?>" alt=""></div>
            </div>
          </div>
          <!-- <a class="h2" href="https://www.fiverr.com/sunlimetech/design-and-fix-your-bootstrap-4-issues" target="_blank"> </a>

          <h3 class="col-md-4 "></h3> -->

        </div>
        <div class="modal-body">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-4"><b>Fundación:</b> </div>
              <div class="col-md-4 "> 	1858 .</div>
            </div>
            <div class="row">
              <div class="col-md-4"><b>Ubicación:</b> </div>
              <div class="col-md-4 "> <a href="https://goo.gl/maps/EnJY2JK1wF3U4Br88" target="_blank" > 58-67 Grand Parade, Brighton BN2 0JY, Reino Unido</a> </div>
            </div>
            <div class="row">
              <hr>

            </div>
            <div class="row">
              <hr>
                <div class="col-md-12 " style="align:center"><b>En ELC le ofrecen:</b></div>
                <div class="col-md-12"><li>Un amable, atento y ambiente de aprendizaje seguro.</li></div>
                <div class="col-md-12"><li>Profesores altamente experimentados y profesionales.</li></div>
                <div class="col-md-12"><li>Clases de diversas nacionalidades.</li></div>
                <div class="col-md-12"><li>Todos de Cursos y materiales de enseñanza.</li></div>
                <div class="col-md-12"><li>Programa de actividades sociales y excursiones.</li></div>
                <div class="col-md-12"><li>Un lugar para los estudiantes y cafetería.</li></div>
                <div class="col-md-12"><li>WiFi gratuito en todo los edificios principales.</li></div>
                <div class="col-md-12"><li>Pizarras interactivas.</li></div>
                <div class="col-md-12"><li>Un amplio laboratorio con computadoras.</li></div>

            </div>
            <br>


            <div class="row">
              <hr>

            </div>
            <div class="list-group">
              <button type="button" class="list-group-item list-group-item-action list-group-item-success ">
                AlojamienELC Ofrece los siguientes cursos:to
              </button>
              <button type="button" class="list-group-item list-group-item-action" id="Odont" data-id="Odontología" >Preparación para los exámenes: IELTS & Cambridge, TOEIC.</button>
              <button type="button" class="list-group-item list-group-item-action" id="Odont"  data-id="Veterinaria" >Cursos para maestros.</button>
              <button type="button" class="list-group-item list-group-item-action" id="Odont"  data-id="Veterinaria" >Inglés general y curso intensivo.</button>
              <button type="button" class="list-group-item list-group-item-action" id="Odont"  data-id="Veterinaria" >Inglés para negocios.</button>
              <button type="button" class="list-group-item list-group-item-action" id="Odont"  data-id="Veterinaria" >Programa de un año.</button>
              <button type="button" class="list-group-item list-group-item-action" id="Odont"  data-id="Veterinaria" >Cursos de Verano.</button>

            </div>

            <div class="row">
              <hr>
            </div>
            <div class="row">


              <div class="col-md-12 ">

              <div class="header_btn dark_btn" style="display: flex;justify-content: center;">
                    <a style="width: 100%;" href="../Login" > Me interesa</a>
                </div>
                </div>

            </div>
          </div>
          <div class="row">
            <hr>
          </div>
          <div class="youtube-player" data-id="Vqj6hIFB-TE"></div>

          <!--<div class="embed-responsive embed-responsive-21by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Vqj6hIFB-TE"></iframe>
          </div>-->
          <hr>

          </div>

        </div>
          <div class="bottom-strip"></div>
      </div>
</div>


<div class="modal fade text-center py-5 subscribeModal-lg "  id="canterburyVeranoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
          <!-- <div class="top-strip"></div> -->
        <div class="modal-header">
          <div class="container-fluid">
            <div class="row" style="margin-bottom: 10px;">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: red">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="row">
              <div class="col-md-4 d-none d-lg-block d-xl-block"  style="margin-top: 30px;"> <img src="<?=base_url('resources/assets/Informativa/images/v_updatecaterburylogo.png');?>" class="rounded mx-auto d-block" alt="..."></div>
              <div class="col-md-7 ml-auto d-none d-lg-block d-xl-block"><img  src="<?=base_url('resources/assets/Informativa/images/v_update_caterbusy.jpg');?>" alt=""></div>
            </div>
          </div>
          <!-- <a class="h2" href="https://www.fiverr.com/sunlimetech/design-and-fix-your-bootstrap-4-issues" target="_blank"> </a>

          <h3 class="col-md-4 "></h3> -->

        </div>
        <div class="modal-body">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-4"><b>Fundación:</b> </div>
              <div class="col-md-4 "> 1949 .</div>
            </div>
            <div class="row">
              <div class="col-md-4"><b>Ubicación:</b> </div>
              <div class="col-md-4 "> <a href="https://goo.gl/maps/szyFrYrz2E2A8C9A7" target="_blank" > New Dover Rd, Canterbury CT1 3AJ, Reino Unido</a> </div>
            </div>
            <div class="row">
              <hr>

            </div>
            <div class="row">
              <hr>
                <div class="col-md-12 " style="align:center"><b>Edades</b></div>
                <div class="col-md-12"><li>Senior 14-17.</li></div>

            </div>
            <div class="row">
              <hr>
                <div class="col-md-12 " style="align:center"><b>Tipo de campamento</b></div>
                <div class="col-md-12"><li>Academico.</li></div>
                <div class="col-md-12"><li>Inglés.</li></div>
                <div class="col-md-12"><li>Combinado.</li></div>

            </div>

            <div class="row">
              <hr>

            </div>
            <div class="list-group">
              <button type="button" class="list-group-item list-group-item-action list-group-item-success ">
                Alojamiento
              </button>
              <button type="button" class="list-group-item list-group-item-action" id="Odont" >Residencial.</button>

            </div>

            <div class="row">
              <hr>
            </div>
            <div class="row">

              <!-- <div class="col-md-12"><li>.</li></div>
              <div class="col-md-12"><li>.</li></div>
              <div class="col-md-12"><li>.</li></div> -->

              <div class="col-md-12 ">

              <div class="header_btn dark_btn" style="display: flex;justify-content: center;">
                    <a style="width: 100%;" href="../Login" > Me interesa</a>
                </div>
                </div>

            </div>
          </div>
          <div class="row">
            <hr>
          </div>
          <div class="embed-responsive embed-responsive-21by9">
            <!-- <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/S1G5cWSMmzQ"></iframe> -->
          </div>

          <hr>

          </div>

        </div>
          <div class="bottom-strip"></div>
      </div>
</div>



<div class="modal fade text-center py-5 subscribeModal-lg "  id="cork_IrelandVeranoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
          <!-- <div class="top-strip"></div> -->
        <div class="modal-header">
          <div class="container-fluid">
            <div class="row" style="margin-bottom: 10px;">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: red">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="row">
              <div class="col-md-4 d-none d-lg-block d-xl-block"  style="margin-top: 30px;"> <img src="<?=base_url('resources/assets/Informativa/images/v_cork_irland_logo.png');?>" class="rounded mx-auto d-block" alt="..."></div>
              <div class="col-md-7 ml-auto d-none d-lg-block d-xl-block"><img  src="<?=base_url('resources/assets/Informativa/images/vv_Cork_irland.png');?>" alt=""></div>
            </div>
          </div>
          <!-- <a class="h2" href="https://www.fiverr.com/sunlimetech/design-and-fix-your-bootstrap-4-issues" target="_blank"> </a>

          <h3 class="col-md-4 "></h3> -->

        </div>
        <div class="modal-body">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-4"><b>Fundación:</b> </div>
              <div class="col-md-4 "> 	1845.</div>
            </div>
            <div class="row">
              <div class="col-md-4"><b>Ubicación:</b> </div>
              <div class="col-md-4 "> <a href="https://goo.gl/maps/pKZkLmhqavSQGqLL8" target="_blank" > Gaol Walk, University College, Cork, T12 YN60, Irlanda </a> </div>
            </div>
            <div class="row">
              <hr>

            </div>
            <div class="row">
              <hr>
                <div class="col-md-12 " style="align:center"><b>Edades</b></div>
                <div class="col-md-12"><li>Senior 14-17.</li></div>

            </div>
            <div class="row">
              <hr>
                <div class="col-md-12 " style="align:center"><b>Tipo de campamento</b></div>
                <div class="col-md-12"><li>Inglés.</li></div>
                <div class="col-md-12"><li>Inglés mas deporte.</li></div>

            </div>

            <div class="row">
              <hr>

            </div>
            <div class="list-group">
              <button type="button" class="list-group-item list-group-item-action list-group-item-success ">
                Alojamiento
              </button>
              <button type="button" class="list-group-item list-group-item-action" id="Odont" data-id="Odontología" >Con familia.</button>

            </div>

            <div class="row">
              <hr>
            </div>
            <div class="row">

              <div class="col-md-12"><li>20 o 26 horas de matrícula + programa social.</li></div>
              <div class="col-md-12"><li>Excursión miércoles por la tarde + evento social jueves por la noche.</li></div>
              <div class="col-md-12"><li>La Escuela de Verano ofrece oportunidades estructuradas y respaldadas para estudiantes de CCL y estudiantes internacionales visitantes para compartir una experiencia enriquecedora e intercultural.</li></div>

              <div class="col-md-12 ">

              <div class="header_btn dark_btn" style="display: flex;justify-content: center;">
                    <a style="width: 100%;" href="../Login" > Me interesa</a>
                </div>
                </div>
            </div>
          </div>
          <div class="row">
            <hr>
          </div>
          <div class="youtube-player" data-id="_RNiSEej3qA"></div>

          <!--<div class="embed-responsive embed-responsive-21by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/_RNiSEej3qA"></iframe>
          </div>-->

          <hr>

          </div>

        </div>
          <div class="bottom-strip"></div>
      </div>
</div>

<div class="modal fade text-center py-5 subscribeModal-lg "  id="dublinVeranoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
          <!-- <div class="top-strip"></div> -->
        <div class="modal-header">
          <div class="container-fluid">
            <div class="row" style="margin-bottom: 10px;">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: red">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="row">
              <div class="col-md-4 d-none d-lg-block d-xl-block"  style="margin-top: 30px;"> <img src="<?=base_url('resources/assets/Informativa/images/v_dublin_logo.png');?>" class="rounded mx-auto d-block" alt="..."></div>
              <div class="col-md-7 ml-auto d-none d-lg-block d-xl-block"><img  src="<?=base_url('resources/assets/Informativa/images/vv_dublin.png');?>" alt=""></div>
            </div>
          </div>
          <!-- <a class="h2" href="https://www.fiverr.com/sunlimetech/design-and-fix-your-bootstrap-4-issues" target="_blank"> </a>

          <h3 class="col-md-4 "></h3> -->

        </div>
        <div class="modal-body">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-4"><b>Fundación:</b> </div>
              <div class="col-md-4 "> 	1976 .</div>
            </div>
            <div class="row">
              <div class="col-md-4"><b>Ubicación:</b> </div>
              <div class="col-md-4 "> <a href="https://goo.gl/maps/j5tWf4cfKS5dwWy4A" target="_blank" > College Green, Dublin 2, Irlanda</a> </div>
            </div>
            <div class="row">
              <hr>

            </div>
            <div class="row">
              <hr>
                <div class="col-md-12 " style="align:center"><b>Edades</b></div>
                <div class="col-md-12"><li>Senior 14-17.</li></div>

            </div>
            <div class="row">
              <hr>
                <div class="col-md-12 " style="align:center"><b>Tipo de campamento</b></div>
                <div class="col-md-12"><li>Inglés.</li></div>

            </div>

            <div class="row">
              <hr>

            </div>
            <div class="list-group">
              <button type="button" class="list-group-item list-group-item-action list-group-item-success ">
                Alojamiento
              </button>
              <button type="button" class="list-group-item list-group-item-action" id="Odont" data-id="Odontología" >Con familia.</button>
              <button type="button" class="list-group-item list-group-item-action" id="Odont" >Residencial.</button>

            </div>

            <div class="row">
              <hr>
            </div>
            <div class="row">

              <div class="col-md-12"><li>Participar en un programa de verano puede ser una forma brillante de experimentar estudiar en el extranjero sin tener que pasar un período completo o un año en el extranjero.</li></div>


              <div class="col-md-12 ">

              <div class="header_btn dark_btn" style="display: flex;justify-content: center;">
                    <a style="width: 100%;" href="../Login" > Me interesa</a>
                </div>
                </div>

            </div>
          </div>
          <div class="row">
            <hr>
          </div>
          <div class="youtube-player" data-id="jFdd3EVN4-Q"></div>

          <!--<div class="embed-responsive embed-responsive-21by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/jFdd3EVN4-Q"></iframe>
          </div>-->
          <hr>

          </div>

        </div>
          <div class="bottom-strip"></div>
      </div>
</div>

<div class="modal fade text-center py-5 subscribeModal-lg "  id="eastbourneVeranoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
          <!-- <div class="top-strip"></div> -->
        <div class="modal-header">
          <div class="container-fluid">
            <div class="row" style="margin-bottom: 10px;">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: red">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="row">
              <div class="col-md-4 d-none d-lg-block d-xl-block"  style="margin-top: 30px;"> <img src="<?=base_url('resources/assets/Informativa/images/z_subir_estbourne_Logo.jpg');?>" class="rounded mx-auto d-block" alt="..."></div>
              <div class="col-md-7 ml-auto d-none d-lg-block d-xl-block"><img  src="<?=base_url('resources/assets/Informativa/images/z_subir_eastbourneModal.jpg');?>" alt=""></div>
            </div>
          </div>
          <!-- <a class="h2" href="https://www.fiverr.com/sunlimetech/design-and-fix-your-bootstrap-4-issues" target="_blank"> </a>

          <h3 class="col-md-4 "></h3> -->

        </div>
        <div class="modal-body">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-4"><b>Fundación:</b> </div>
              <div class="col-md-4 "> 	1867 .</div>
            </div>
            <div class="row">
              <div class="col-md-4"><b>Ubicación:</b> </div>
              <div class="col-md-4 "> <a href="https://goo.gl/maps/RXCpxCfBAsjwzdCr9" target="_blank" >Old Wish Rd, Eastbourne BN21 4JY, Reino Unido </a> </div>
            </div>
            <div class="row">
              <hr>

            </div>
            <br>
            <div class="row">
                <div class="slide-container ">
                    <div class="row">
                      <div class="col-xs-2 col-md-6 ">
                       <div class="wrapper">
                         <div class="clash-card barbarian">
                           <div class="clash-card__image clash-card__image--barbarian">
                             <img class="imagencard" src="<?=base_url('resources/assets/Informativa/images/brigthon.jpg');?>"   alt="barbarian" />
                           </div>
                           <div class="clash-card__level clash-card__level--barbarian">Brighton</div>
                           <div class="clash-card__level clash-card__level--barbarian">Summer Vacation course (V) </div>
                           <div class="clash-card__unit-description">
                             Diseñado para jóvenes adultos, medio día de estudio y medio día de actividades sociales.
                           </div>
                             <p class="where">Costo</p>
                           <div class="clash-card__unit-description">
                             <ul>
                               <li>- £756 2 semanas </li>
                               <li>- £1,086 3 semanas</li>
                               <li>- £1,368 4 semanas + paquete de actividades por £85</li>
                             </ul>
                           </div>
                           <p class="where">Incluye:</p>
                           <div class="clash-card__unit-description">
                             Alojamiento, desayuno, cena, materiales, actividades sociales y excursiones programadas.
                           </div>
                           <div class="clash-card__unit-stats clash-card__unit-stats--barbarian clearfix">
                             <div class="one-third">
                               <div class="stat-value">Edad:</div>
                               <div class="stat">16-22 años. </div>
                             </div>
                             <div class="one-third">
                               <div class="stat-value">Inicio:</div>
                               <div class="stat">Cualquier lunes de Julio - Agosto </div>
                             </div>
                             <div class="one-third no-border">
                               <div class="stat-value">Nivel de Ingles:</div>
                               <div class="stat">Principiante a Avanzado</div>
                             </div>
                           </div>
                         </div> <!-- end clash-card barbarian-->
                         </div> <!-- end wrapper -->
                      </div> <!-- end col waper-->
                      <div class="col-xs-2 col-md-6  ml-auto">
                       <div class="wrapper">
                         <div class="clash-card wizard">
                           <div class="clash-card__image clash-card__image--wizard">
                             <img class="imagencard" src="<?=base_url('resources/assets/Informativa/images/brigthon.jpg');?>"   alt="barbarian" />
                           </div>
                           <div class="clash-card__level clash-card__level--wizard">Brighton</div>
                           <div class="clash-card__level clash-card__level--wizard">Junior Vacation course (VJ)</div>
                           <div class="clash-card__unit-description">
                             Diseñado para estudiantes que alguno de sus padres están tomando alguno de nuestros cursos de adulto. Medio día de clases y un programa completo de actividades supervisadas.
                           </div>
                           <p class="where">Costo:</p>
                           <div class="clash-card__unit-description">
                             <ul>
                               <li>- £361 por semana  ( mínimo 2 semanas  + paquete de actividades por £85 )</li>
                             </ul>
                           </div>
                           <p class="where">Incluye:</p>
                           <div class="clash-card__unit-description">
                             Alojamiento, desayuno, cena, materiales, actividades sociales y excursiones programadas.
                           </div>
                           <div class="clash-card__unit-stats clash-card__unit-stats--wizard clearfix">
                             <div class="one-third">
                               <div class="stat-value">Edad:</div>
                               <div class="stat">13-15 años </div>
                             </div>
                             <div class="one-third no-border">
                               <div class="stat-value">Nivel de inglés:</div>
                               <div class="stat"> Principiante a Avanzado</div>
                             </div>
                             <div class="one-third no-border">
                               <div class="stat-value">Inicio:</div>
                               <div class="stat"> Cualquier lunes de Julio - Agosto </div>
                             </div>
                           </div>
                         </div> <!-- end clash-card barbarian-->
                         </div> <!-- end wrapper -->

                      </div> <!-- end col waper-->
                      <div class="col-xs-2 col-md-6">
                       <div class="wrapper">
                         <div class="clash-card goblin">
                           <div class="clash-card__image clash-card__image--giant">
                             <img class="imagencard" src="<?=base_url('resources/assets/Informativa/images/eastbourne.png');?>"   alt="barbarian" />
                           </div>
                           <div class="clash-card__level clash-card__level--giant">Eastbourne</div>
                           <div class="clash-card__level clash-card__level--giant">Summer Plus course (SP)</div>
                           <div class="clash-card__unit-description">
                             Diseñado para jóvenes adultos, clases de inglés intensivo y actividades sociales.
                           </div>
                             <p class="where">Costo</p>
                              <div class="clash-card__unit-description">
                                £361 por semana
                              </div>
                              <p class="where">Incluye</p>
                               <div class="clash-card__unit-description">
                                 Alojamiento, desayuno, cena, actividades sociales programadas, futbol, cine, boliche, cabalgata, mini golf y excursiones.
                               </div>
                             <div class="clash-card__unit-stats clash-card__unit-stats--giant clearfix">
                               <div class="one-third">
                                 <div class="stat-value">Edad:</div>
                                 <div class="stat">16-22 años</div>
                               </div>
                               <div class="one-third no-border">
                                 <div class="stat-value">Nivel de inglés:</div>
                                 <div class="stat"> Principiante a Avanzado</div>
                               </div>
                               <div class="one-third no-border">
                                 <div class="stat-value">Inicio:</div>
                                 <div class="stat"> Cualquier lunes de Junio - Agosto</div>
                               </div>
                             </div>

                         </div> <!-- end clash-card barbarian-->
                         </div> <!-- end wrapper -->

                      </div> <!-- end col waper-->
                 </div> <!-- end row two -->
              </div><!-- end slide continer-->
            </div>
            <br>
            <div class="row">

              <div class="col-md-12"><li>Eastbourne tiene mucho que ofrecer, incluyendo una selección de cines y teatros multiplex modernos, un hermoso paseo marítimo, un puerto deportivo de ocio y excelentes tiendas, tanto interiores como al aire libre.</li></div>
              <div class="col-md-12"><li>instalaciones educativas y deportivas de primera clase.</li></div>

              <div class="col-md-12 ">

                <div class="header_btn dark_btn" style="display: flex;justify-content: center;">
                    <a style="width: 100%;" href="../Login" > Me interesa</a>
                </div>
                </div>

            </div>
          </div>
          <div class="row">
            <hr>
          </div>
          <div class="youtube-player" data-id="UPrH--JS5eg"></div>

          <!--<div class="embed-responsive embed-responsive-21by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/S1G5cWSMmzQ"></iframe>
          </div>-->

          <hr>

          </div>

        </div>
          <div class="bottom-strip"></div>
      </div>
</div>

<div class="modal fade text-center py-5 subscribeModal-lg "  id="LondonVeranoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
          <!-- <div class="top-strip"></div> -->
        <div class="modal-header">
          <div class="container-fluid">
            <div class="row" style="margin-bottom: 10px;">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: red">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="row">
              <div class="col-md-4 d-none d-lg-block d-xl-block"  style="margin-top: 30px;"> <img src="<?=base_url('resources/assets/Informativa/images/v_london_logo.jpeg');?>" class="rounded mx-auto d-block" alt="..."></div>
              <div class="col-md-7 ml-auto d-none d-lg-block d-xl-block"><img  src="<?=base_url('resources/assets/Informativa/images/vv_london.png');?>" alt=""></div>
            </div>
          </div>
          <!-- <a class="h2" href="https://www.fiverr.com/sunlimetech/design-and-fix-your-bootstrap-4-issues" target="_blank"> </a>

          <h3 class="col-md-4 "></h3> -->

        </div>
        <div class="modal-body">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-4"><b>Fundación:</b> </div>
              <div class="col-md-4 "> 	1976 .</div>
            </div>
            <div class="row">
              <div class="col-md-4"><b>Ubicación:</b> </div>
              <div class="col-md-4 "> <a href="https://goo.gl/maps/GTxCCZmp9EaZ9SeN9" target="_blank" > Gower St, Bloomsbury, London WC1E 6BT, Reino Unido</a> </div>
            </div>
            <div class="row">
              <hr>

            </div>
            <div class="row">
              <hr>
                <div class="col-md-12 " style="align:center"><b>Edades</b></div>
                <div class="col-md-12"><li>Junior 7-13.</li></div>
                <div class="col-md-12"><li>Senior 14-17.</li></div>

            </div>
            <div class="row">
              <hr>
                <div class="col-md-12 " style="align:center"><b>Tipo de campamento</b></div>
                <div class="col-md-12"><li>Academico.</li></div>
                <div class="col-md-12"><li>Inglés.</li></div>

            </div>

            <div class="row">
              <hr>

            </div>
            <div class="list-group">
              <button type="button" class="list-group-item list-group-item-action list-group-item-success ">
                Alojamiento
              </button>
              <button type="button" class="list-group-item list-group-item-action" id="Odont" data-id="Odontología" >Con familia.</button>
              <button type="button" class="list-group-item list-group-item-action" id="Odont" >Residencial.</button>

            </div>

            <div class="row">
              <hr>
            </div>
            <div class="row">

              <div class="col-md-12"><li>La escuela de verano de LSE es la mejor establecida y la más grande de su tipo en toda Europa, con más de 80 cursos académicamente rigurosos que se ofrecen.</li></div>
              <div class="col-md-12"><li>Cada año, más de 6,000 estudiantes de 120 naciones estudian en el campus de LSE en el corazón del centro de Londres.</li></div>
              <div class="col-md-12"><li>.</li></div>

              <div class="col-md-12 ">

              <div class="header_btn dark_btn" style="display: flex;justify-content: center;">
                    <a style="width: 100%;" href="../Login" > Me interesa</a>
                </div>
                </div>

            </div>
          </div>
          <div class="row">
            <hr>
          </div>
          <div class="embed-responsive embed-responsive-21by9">
            <!-- <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/S1G5cWSMmzQ"></iframe> -->
          </div>

          <hr>

          </div>

        </div>
          <div class="bottom-strip"></div>
      </div>
</div>

<div class="modal fade text-center py-5 subscribeModal-lg "  id="manchesterVeranoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
          <!-- <div class="top-strip"></div> -->
        <div class="modal-header">
          <div class="container-fluid">
            <div class="row" style="margin-bottom: 10px;">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: red">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="row">
              <div class="col-md-4 d-none d-lg-block d-xl-block"  style="margin-top: 30px;"> <img src="<?=base_url('resources/assets/Informativa/images/v_manchester_logo.png');?>" class="rounded mx-auto d-block" alt="..."></div>
              <div class="col-md-7 ml-auto d-none d-lg-block d-xl-block"><img  src="<?=base_url('resources/assets/Informativa/images/vv_manchester.png');?>" alt=""></div>
            </div>
          </div>
          <!-- <a class="h2" href="https://www.fiverr.com/sunlimetech/design-and-fix-your-bootstrap-4-issues" target="_blank"> </a>

          <h3 class="col-md-4 "></h3> -->

        </div>
        <div class="modal-body">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-4"><b>Fundación:</b> </div>
              <div class="col-md-4 "> 	1976 .</div>
            </div>
            <div class="row">
              <div class="col-md-4"><b>Ubicación:</b> </div>
              <div class="col-md-4 "> <a href="https://goo.gl/maps/8HMTdxADMuBomkUG9" target="_blank" > Fielden Campus, 141 Barlow Moor Rd, West Didsbury, Manchester M20 2PQ, Reino Unido</a> </div>
            </div>
            <div class="row">
              <hr>

            </div>
            <div class="row">
              <hr>
                <div class="col-md-12 " style="align:center"><b>Edades</b></div>
                <div class="col-md-12"><li>Senior 14-17.</li></div>

            </div>
            <div class="row">
              <hr>
                <div class="col-md-12 " style="align:center"><b>Tipo de campamento</b></div>
                <div class="col-md-12"><li>Inglés.</li></div>

            </div>

            <div class="row">
              <hr>

            </div>
            <div class="list-group">
              <button type="button" class="list-group-item list-group-item-action list-group-item-success ">
                Alojamiento
              </button>
              <button type="button" class="list-group-item list-group-item-action" id="Odont" data-id="Odontología" >Con familia.</button>

            </div>

            <div class="row">
              <hr>
            </div>
            <div class="row">

              <div class="col-md-12"><li>Con cientos de cursos únicos, útiles e inspiradores para elegir, ¡el conocimiento que necesita para tener éxito está al alcance de su mano!.</li></div>
              <div class="col-md-12"><li>Ya sea que esté esperando su carrera perfecta, ansioso por aprender nuevas habilidades increíbles o comenzar el camino a la universidad, podemos ayudarlo a encontrar el curso, certificado o premio ideal.</li></div>
              <div class="col-md-12"><li>Sumérgete en tu área temática favorita, busca la calificación que necesitas y descubre adónde te puede llevar estudiar con The Manchester College.</li></div>

              <div class="col-md-12 ">

              <div class="header_btn dark_btn" style="display: flex;justify-content: center;">
                    <a style="width: 100%;" href="../Login" > Me interesa</a>
                </div>
                </div>

            </div>
          </div>
          <div class="row">
            <hr>
          </div>
          <div class="youtube-player" data-id="xnquQlOYJK8"></div>

          <!--<div class="embed-responsive embed-responsive-21by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/xnquQlOYJK8"></iframe>
          </div>-->
        <hr>

          </div>

        </div>
          <div class="bottom-strip"></div>
      </div>
</div>

<div class="modal fade text-center py-5 subscribeModal-lg "  id="tauntonVeranoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
          <!-- <div class="top-strip"></div> -->
        <div class="modal-header">
          <div class="container-fluid">
          <div class="row" style="margin-bottom: 10px;">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: red">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="row">
              <div class="col-md-4 d-none d-lg-block d-xl-block"  style="margin-top: 30px;"> <img src="<?=base_url('resources/assets/Informativa/images/prepa_tauton_logo.jpeg');?>" class="rounded mx-auto d-block" alt="..."></div>
              <div class="col-md-7 ml-auto d-none d-lg-block d-xl-block"><img  src="<?=base_url('resources/assets/Informativa/images/prepamodal_atauton.png');?>" alt=""></div>
            </div>
          </div>
          <!-- <a class="h2" href="https://www.fiverr.com/sunlimetech/design-and-fix-your-bootstrap-4-issues" target="_blank"> </a>

          <h3 class="col-md-4 "></h3> -->

        </div>
        <div class="modal-body">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-4"><b>Fundación:</b> </div>
              <div class="col-md-4 "> 	1847 .</div>
            </div>
            <div class="row">
              <div class="col-md-4"><b>Ubicación:</b> </div>
              <div class="col-md-4 "> <a href="https://goo.gl/maps/iqbNbiKKHm45cMhH8" target="_blank" >Staplegrove Rd, Taunton TA2 6AD, Reino Unido </a> </div>
            </div>
            <br>
            <div class="row">
              <div class="slide-container ">
                <div class="row">
                 <div class="col-xs-2 col-md-6 ">
                       <div class="wrapper">
                         <div class="clash-card barbarian">
                           <div class="clash-card__image clash-card__image--barbarian">
                             <img class="imagencard" src="<?=base_url('resources/assets/Informativa/images/TautonSchool.png');?>"   alt="barbarian" />
                           </div>
                           <div class="clash-card__level clash-card__level--barbarian">Programa Académico</div>
                           <div class="clash-card__unit-description">
                             Este curso ofrece una variedad de experiencias de aprendizaje del idioma inglés (3 horas) y otras materias académicas (2 horas).
                           </div>
                             <p class="where">Incluye:</p>
                           <div class="clash-card__unit-description">
                             Matrícula, materiales didácticos, alojamiento, entrenamiento deportivo, informe académico completo y certificado del curso, comida, lavandería, actividades, seguro, excursiones y traslados a aeropuertos seleccionados (entre los horarios publicados en los días de traslado).
                           </div>
                           <div class="clash-card__unit-stats clash-card__unit-stats--barbarian clearfix">
                             <div class="one-third">
                               <div class="stat-value">Edad:</div>
                               <div class="stat"> 8-12 años </div>
                             </div>

                             <div class="one-third no-border">
                               <div class="stat-value">Costo:</div>
                               <div class="stat">  £2,700 por 2 semanas </div>
                             </div>
                           </div>
                         </div> <!-- end clash-card barbarian-->
                         </div> <!-- end wrapper -->
                      </div> <!-- end col waper-->
                 <div class="col-xs-2 col-md-6  ml-auto">
                       <div class="wrapper">
                         <div class="clash-card wizard">
                           <div class="clash-card__image clash-card__image--wizard">
                             <img class="imagencard" src="<?=base_url('resources/assets/Informativa/images/TautonSchool.png');?>"   alt="barbarian" />
                           </div>
                           <div class="clash-card__level clash-card__level--wizard">STEM: Computación, programación y robótica</div>
                           <div class="clash-card__unit-description">
                             Nuestros estudiantes serán introducidos al mundo de la tecnología y robótica. Diseñarán y programaran robots de Lego Mindstorms©.
                           </div>
                           <p class="where">Incluye:</p>
                           <div class="clash-card__unit-description">
                             Matrícula, materiales didácticos, alojamiento, entrenamiento deportivo, informe académico completo y certificado del curso, comida, lavandería, actividades, seguro, excursiones y traslados a aeropuertos seleccionados (entre los horarios publicados en los días de traslado).
                           </div>

                           <div class="clash-card__unit-stats clash-card__unit-stats--wizard clearfix">
                             <div class="one-third">
                               <div class="stat-value">Edad:</div>
                               <div class="stat"> 8-12 años </div>
                             </div>
                             <div class="one-third no-border">
                               <div class="stat-value">Costo:</div>
                               <div class="stat">£2,500 por 2 semanas </div>
                             </div>
                           </div>
                         </div> <!-- end clash-card barbarian-->
                         </div> <!-- end wrapper -->

                      </div> <!-- end col waper-->
                 <div class="col-xs-2 col-md-6  ml-auto">
                       <div class="wrapper">
                         <div class="clash-card goblin">
                           <div class="clash-card__image clash-card__image--goblin">
                             <img class="imagencard" src="<?=base_url('resources/assets/Informativa/images/TautonSchool.png');?>"   alt="barbarian" />
                           </div>
                           <div class="clash-card__level clash-card__level--goblin">Multi - Deportes</div>
                           <div class="clash-card__unit-description">
                              Este curso de dos semanas tiene dos horas de un deporte diferente cada día, desde los deportes más tradicionales como fútbol​​, tenis, baloncesto, atletismo, bádminton y natación hasta los deportes menos conocidos como rugby, cricket, rounders, esgrima y netball. Y 3 horas de clases de inglés.
                           </div>
                             <p class="where">Costo Incluye:</p>
                           <div class="clash-card__unit-description">
                             Matrícula, materiales didácticos, alojamiento, entrenamiento deportivo, informe académico completo y certificado del curso, comida, lavandería, actividades, seguro, excursiones y traslados a aeropuertos seleccionados (entre los horarios publicados en los días de traslado).
                           </div>
                           <div class="clash-card__unit-stats clash-card__unit-stats--goblin clearfix">
                             <div class="one-third">
                               <div class="stat-value">Edad:</div>
                               <div class="stat">8-12 años</div>
                             </div>
                             <div class="one-third no-border">
                               <div class="stat-value">Costo:</div>
                               <div class="stat"> £2,500 por 2 semanas </div>
                             </div>
                           </div>

                         </div> <!-- end clash-card barbarian-->
                         </div> <!-- end wrapper -->

                      </div> <!-- end col waper-->
                 <div class="col-xs-2 col-md-6  ml-auto">
                       <div class="wrapper">
                         <div class="clash-card archer">
                           <div class="clash-card__image clash-card__image--archer">
                             <img class="imagencard" src="<?=base_url('resources/assets/Informativa/images/TautonSchool.png');?>"   alt="barbarian" />
                           </div>
                           <div class="clash-card__level clash-card__level--archer">Cocina</div>
                           <div class="clash-card__unit-description">
                            El curso de cocina les brinda a nuestros estudiantes más jóvenes tres horas de inglés y dos horas de cocina práctica cada día, utilizando las excelentes instalaciones de cocina de la escuela Taunton Prep.
                           </div>
                             <p class="where">Costo Incluye:</p>
                           <div class="clash-card__unit-description">
                             Matrícula, materiales didácticos, alojamiento, entrenamiento deportivo, informe académico completo y certificado del curso, comida, lavandería, actividades, seguro, excursiones y traslados a aeropuertos seleccionados (entre los horarios publicados en los días de traslado).
                           </div>
                           <div class="clash-card__unit-stats clash-card__unit-stats--archer clearfix">
                             <div class="one-third">
                               <div class="stat-value">Edad:</div>
                               <div class="stat">8-12 años  </div>
                             </div>
                             <div class="one-third">
                               <div class="stat-value">Nivel de inglés:</div>
                               <div class="stat">IELTS 4.5+ / intermedio</div>
                             </div>
                             <div class="one-third no-border">
                               <div class="stat-value">Costo:</div>
                               <div class="stat">£2,600 por 2 semanas </div>
                             </div>
                           </div>

                         </div> <!-- end clash-card barbarian-->
                         </div> <!-- end wrapper -->

                      </div> <!-- end col waper-->
                </div> <!-- end row two -->
              </div><!-- end slide continer-->
            </div>
            <br>
            <div class="row">
              <table class="table table-bordered">
                <thead class="theadtable">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Curso</th>
                    <th scope="col">Duración</th>
                    <th scope="col">Fechas</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Summer School 1</td>
                    <td>2 Semanas</td>
                    <td>Sábado 4 de Julio – Sábado 18 de Julio 2020</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Summer School 1</td>
                    <td>2 Semanas</td>
                    <td>Sábado 18 de Julio – Sábado 1 de Agosto 2020</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Summer School 3</td>
                    <td>2 Semanas</td>
                    <td>Sábado 1 de Agosto – Sábado 15 de Agosto 2020</td>
                  </tr>
                </tbody>
              </table>

            </div>
            <br>
            <div class="row">
              <div class="slide-container ">
               <div class="row">
                 <div class="col-xs-2 col-md-6  ml-auto">
                  <div class="wrapper">
                    <div class="clash-card giant">
                      <div class="clash-card__image clash-card__image--giant">
                        <img class="imagencard" src="<?=base_url('resources/assets/Informativa/images/TautonSchool.png');?>"   alt="barbarian" />
                      </div>
                      <div class="clash-card__level clash-card__level--giant">Académico</div>
                      <div class="clash-card__unit-description">
                        Dentro de cada tema, se les enseña a los estudiantes cómo investigar, organizar, evaluar, sintetizar y aplicar el conocimiento a diferentes situaciones.
                      </div>
                        <p class="where">Costo Incluye</p>
                      <div class="clash-card__unit-description">
                        Matrícula, materiales didácticos, alojamiento, entrenamiento deportivo, informe académico completo y certificado del curso, comida, lavandería, actividades, seguro, excursiones y traslados a aeropuertos seleccionados (entre los horarios publicados en los días de traslado).
                      </div>
                      <div class="clash-card__unit-stats clash-card__unit-stats--giant clearfix">
                        <div class="one-third">
                          <div class="stat-value">Edad:</div>
                          <div class="stat">13-17 años </div>
                        </div>
                        <div class="one-third no-border">
                          <div class="stat-value">Costo:</div>
                          <div class="stat"> £2,700 por 2 semanas </div>
                        </div>
                      </div>

                    </div> <!-- end clash-card barbarian-->
                    </div> <!-- end wrapper -->

                 </div> <!-- end col waper-->
                 <div class="col-xs-2 col-md-6  ml-auto">
                  <div class="wrapper">
                    <div class="clash-card barbarian">
                      <div class="clash-card__image clash-card__image--barbarian">
                        <img class="imagencard" src="<?=base_url('resources/assets/Informativa/images/TautonSchool.png');?>"   alt="barbarian" />
                      </div>
                      <div class="clash-card__level clash-card__level--barbarian">Futuros líderes de negocios</div>
                      <div class="clash-card__unit-description">
                        Este curso proporciona una introducción ideal a los negocios, las finanzas y la economía.
                      </div>
                        <p class="where">Costo Incluye:</p>
                      <div class="clash-card__unit-description">
                        Matrícula, materiales didácticos, alojamiento, entrenamiento deportivo, informe académico completo y certificado del curso, comida, lavandería, actividades, seguro, excursiones y traslados a aeropuertos seleccionados (entre los horarios publicados en los días de traslado).
                     </div>
                      <div class="clash-card__unit-stats clash-card__unit-stats--barbarian clearfix">
                        <div class="one-third">
                          <div class="stat-value">Edad:</div>
                          <div class="stat"> 13-17 años </div>
                        </div>
                        <div class="one-third no-border">
                          <div class="stat-value">Costo:</div>
                          <div class="stat">£2,500 por 2 semanas </div>
                        </div>
                      </div>

                    </div> <!-- end clash-card barbarian-->
                    </div> <!-- end wrapper -->

                 </div> <!-- end col waper-->
                 <div class="col-xs-2 col-md-6  ml-auto">
                  <div class="wrapper">
                    <div class="clash-card wizard">
                      <div class="clash-card__image clash-card__image--wizard">
                        <img class="imagencard" src="<?=base_url('resources/assets/Informativa/images/TautonSchool.png');?>"   alt="barbarian" />
                      </div>
                      <div class="clash-card__level clash-card__level--wizard">STEM (Ciencia, Tecnología, Ingeniería y matemáticas)</div>
                      <div class="clash-card__unit-description">
                        Complementando las tres horas de clases de inglés, los estudiantes tienen dos horas diarias de enseñanza altamente práctica en Ciencias, Tecnología, Ingeniería y Matemáticas.
                      </div>
                        <p class="where">¿Costo Incluye:</p>
                      <div class="clash-card__unit-description">
                        Matrícula, materiales didácticos, alojamiento, entrenamiento deportivo, informe académico completo y certificado del curso, comida, lavandería, actividades, seguro, excursiones y traslados a aeropuertos seleccionados (entre los horarios publicados en los días de traslado).
                      </div>
                      <div class="clash-card__unit-stats clash-card__unit-stats--wizard clearfix">
                        <div class="one-third">
                          <div class="stat-value">Edad:</div>
                          <div class="stat">13-17 años </div>
                        </div>
                        <div class="one-third no-border">
                          <div class="stat-value">Costo:</div>
                          <div class="stat"> £2,500 por 2 semanas  </div>
                        </div>
                      </div>
                    </div> <!-- end clash-card barbarian-->
                    </div> <!-- end wrapper -->

                 </div> <!-- end col waper-->
                 <div class="col-xs-2 col-md-6  ml-auto">
                  <div class="wrapper">
                    <div class="clash-card goblin">
                      <div class="clash-card__image clash-card__image--goblin">
                        <img class="imagencard" src="<?=base_url('resources/assets/Informativa/images/TautonSchool.png');?>"   alt="barbarian" />
                      </div>
                      <div class="clash-card__level clash-card__level--goblin">Artes Escénicas</div>
                      <div class="clash-card__unit-description">
                        Los estudiantes tienen la oportunidad de escribir e interpretar sus propios guiones, diseño de vestuario y el uso de efectos visuales y de audio.
                      </div>
                        <p class="where">Costo Incluye:</p>
                      <div class="clash-card__unit-description">
                        Matrícula, materiales didácticos, alojamiento, entrenamiento deportivo, informe académico completo y certificado del curso, comida, lavandería, actividades, seguro, excursiones y traslados a aeropuertos seleccionados (entre los horarios publicados en los días de traslado).
                      </div>
                      <div class="clash-card__unit-stats clash-card__unit-stats--goblin clearfix">
                        <div class="one-third">
                          <div class="stat-value">Edad:</div>
                          <div class="stat">13-17 años </div>
                        </div>
                        <div class="one-third no-border">
                          <div class="stat-value">Costo:</div>
                          <div class="stat"> £2,500 por 2 semanas </div>
                        </div>
                      </div>

                    </div> <!-- end clash-card barbarian-->
                    </div> <!-- end wrapper -->

                 </div> <!-- end col waper-->
                 <div class="col-xs-2 col-md-6  ml-auto">
                  <div class="wrapper">
                    <div class="clash-card archer">
                      <div class="clash-card__image clash-card__image--archer">
                        <img class="imagencard" src="<?=base_url('resources/assets/Informativa/images/TautonSchool.png');?>"   alt="barbarian" />
                      </div>
                      <div class="clash-card__level clash-card__level--archer">Golf</div>
                      <div class="clash-card__unit-description">
                        Esta es una oportunidad emocionante para los golfistas con algo de experiencia que desean mejorar sus habilidades y disfrutar jugando al golf con otros estudiantes de la misma edad.
                      </div>
                        <p class="where">Costo Incluye:</p>
                      <div class="clash-card__unit-description">
                        Matrícula, materiales didácticos, alojamiento, entrenamiento deportivo, informe académico completo y certificado del curso, comida, lavandería, actividades, seguro, excursiones y traslados a aeropuertos seleccionados (entre los horarios publicados en los días de traslado).
                      </div>
                      <div class="clash-card__unit-stats clash-card__unit-stats--archer clearfix">
                        <div class="one-third">
                          <div class="stat-value">Edad:</div>
                          <div class="stat">13-17 años</div>
                        </div>
                        <div class="one-third no-border">
                          <div class="stat-value">Costo:</div>
                          <div class="stat">  £2,700 por 2 semanas  </div>
                        </div>
                      </div>

                    </div> <!-- end clash-card barbarian-->
                    </div> <!-- end wrapper -->

                 </div> <!-- end col waper-->
                 <div class="col-xs-2 col-md-6  ml-auto">
                  <div class="wrapper">
                    <div class="clash-card giant">
                      <div class="clash-card__image clash-card__image--giant">
                        <img class="imagencard" src="<?=base_url('resources/assets/Informativa/images/TautonSchool.png');?>"   alt="barbarian" />
                      </div>
                      <div class="clash-card__level clash-card__level--giant">Tenis</div>
                      <div class="clash-card__unit-description">
                        Este curso está diseñado para jugadores de tenis que desean mejorar su juego mientras aprenden inglés.
                      </div>
                        <p class="where">Costo Incluye:</p>
                      <div class="clash-card__unit-description">
                        Matrícula, materiales didácticos, alojamiento, entrenamiento deportivo, informe académico completo y certificado del curso, comida, lavandería, actividades, seguro, excursiones y traslados a aeropuertos seleccionados (entre los horarios publicados en los días de traslado).
                      </div>
                      <div class="clash-card__unit-stats clash-card__unit-stats--giant clearfix">
                        <div class="one-third">
                          <div class="stat-value">Edad:</div>
                          <div class="stat">13-17 años </div>
                        </div>
                        <div class="one-third no-border">
                          <div class="stat-value">Costo:</div>
                          <div class="stat"> £2,500 por 2 semanas </div>
                        </div>
                      </div>

                    </div> <!-- end clash-card barbarian-->
                    </div> <!-- end wrapper -->

                 </div> <!-- end col waper-->
               </div>
              </div>
            </div>
            <br>
            <div class="row">
              <table class="table table-bordered">
                <thead class="theadtabletw">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Curso</th>
                    <th scope="col">Duración</th>
                    <th scope="col">Fechas</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Summer School 1</td>
                    <td>2 Semanas</td>
                    <td>Sábado 4 de Julio – Sábado 18 de Julio 2020</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Summer School 2</td>
                    <td>2 Semanas</td>
                    <td>Sábado 18 de Julio – Sábado 1 de Agosto 2020</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Summer School 2</td>
                    <td>2 Semanas</td>
                    <td>Sábado 1 de Agosto – Sábado 15 de Agosto 2020</td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td>GCSE Pre-Sessional</td>
                    <td>2 Semanas</td>
                    <td>Domingo 23 Agosto – Miércoles  2 de  Septiembre 2020</td>
                  </tr>
                  <tr>
                    <th scope="row">5</th>
                    <td>A-Level/IB/Foundation Pre-Sessional</td>
                    <td>2 Semanas</td>
                    <td>Domingo 23 Agosto – Miércoles  2 de  Septiembre 2020</td>
                  </tr>
                </tbody>
              </table>

            </div>
            <br>
            <div class="row">
              <div class="col-md-12"><li>Al asistir a uno de nuestros cursos Pre-sessional, los estudiantes no solo pueden mejorar su dominio del inglés, sino que también pueden desarrollar habilidades académicas clave que los equiparán bien para su viaje educativo.</li></div>

            </div>
            <div class="row">
              <div class="slide-container ">
               <div class="row">
                 <div class="col-xs-2 col-md-6  ml-auto">
                                        <div class="wrapper">
                                          <div class="clash-card barbarian">
                                            <div class="clash-card__image clash-card__image--barbarian">
                                              <img class="imagencard" src="<?=base_url('resources/assets/Informativa/images/TautonSchool.png');?>"   alt="barbarian" />
                                            </div>
                                            <div class="clash-card__level clash-card__level--barbarian">Pre – sessional GCSE</div>
                                            <div class="clash-card__unit-description">
                                              Estos cursos de 10 días están diseñados para proporcionar ese importante impulso para los estudiantes internacionales antes de unirse a un programa de Diploma GCSE, A Level, BTEC o IB (Bachillerato Internacional) en el Reino Unido.
                                            </div>
                                              <p class="where">Costo Incluye:</p>
                                            <div class="clash-card__unit-description">
                                              Los cursos incluyen tres horas de inglés académico intensivo cada mañana. Por las tardes, los estudiantes reciben dos horas de otra preparación académica, incluyendo lecciones, conferencias y talleres.
                                            </div>
                                            <div class="clash-card__unit-stats clash-card__unit-stats--barbarian clearfix">
                                              <div class="one-third">
                                                <div class="stat-value">Edad:</div>
                                                <div class="stat"> 14-16 años </div>
                                              </div>
                                              <div class="one-third no-border">
                                                <div class="stat-value">Costo:</div>
                                                <div class="stat"> £1,600 por 10 días </div>
                                              </div>
                                            </div>

                                          </div> <!-- end clash-card barbarian-->
                                          </div> <!-- end wrapper -->

                                       </div> <!-- end col waper-->
                 <div class="col-xs-2 col-md-6  ml-auto">
                                        <div class="wrapper">
                                          <div class="clash-card wizard">
                                            <div class="clash-card__image clash-card__image--wizard">
                                              <img class="imagencard" src="<?=base_url('resources/assets/Informativa/images/TautonSchool.png');?>"   alt="barbarian" />
                                            </div>
                                            <div class="clash-card__level clash-card__level--wizard">Pre – sessional IB/A Levels</div>
                                            <div class="clash-card__unit-description">
                                              Estos cursos de 10 días están diseñados para proporcionar ese importante impulso para los estudiantes internacionales antes de unirse a un programa de Diploma GCSE, A Level, BTEC o IB (Bachillerato Internacional) en el Reino Unido.
                                            </div>
                                              <p class="where">Costo Incluye:</p>
                                            <div class="clash-card__unit-description">
                                              Los cursos incluyen tres horas de inglés académico intensivo cada mañana. Por las tardes, los estudiantes reciben dos horas de otra preparación académica, incluyendo lecciones, conferencias y talleres.
                                            </div>
                                            <div class="clash-card__unit-stats clash-card__unit-stats--wizard clearfix">
                                              <div class="one-third">
                                                <div class="stat-value">Edad:</div>
                                                <div class="stat">17-18 años </div>
                                              </div>
                                              <div class="one-third no-border">
                                                <div class="stat-value">Costo:</div>
                                                <div class="stat"> £1,600 por 10 días </div>
                                              </div>
                                            </div>
                                          </div> <!-- end clash-card barbarian-->
                                          </div> <!-- end wrapper -->

                                       </div> <!-- end col waper-->
               </div>
              </div>
            </div>
            <br>
            <div class="row">
              <table class="table table-bordered">
                <thead class="theadtableth">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Curso</th>
                    <th scope="col">Duración</th>
                    <th scope="col">Fechas</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>GCSE Pre-Sessional</td>
                    <td>10 Días</td>
                    <td>Domingo 23 Agosto – Miércoles  2 de  Septiembre 2020</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>A-Level/IB/Foundation Pre-Sessional</td>
                    <td>10 Días</td>
                    <td>Domingo 23 Agosto – Miércoles  2 de  Septiembre 2020</td>
                  </tr>
                </tbody>
              </table>

            </div>
            <br>
            <!-- <div class="row">
              <hr>
                <div class="col-md-12 " style="align:center"><b>Edades</b></div>
                <div class="col-md-12"><li>Junior 7-13.</li></div>
                <div class="col-md-12"><li>Senior 14-17.</li></div>

            </div>
            <div class="row">
              <hr>
                <div class="col-md-12 " style="align:center"><b>Tipo de campamento</b></div>
                <div class="col-md-12"><li>Academico.</li></div>
                <div class="col-md-12"><li>Combinado.</li></div>

            </div> -->

            <div class="row">
              <hr>

            </div>
            <!-- <div class="list-group">
              <button type="button" class="list-group-item list-group-item-action list-group-item-success ">
                Alojamiento
              </button>
              <button type="button" class="list-group-item list-group-item-action" id="Odont"  data-id="Veterinaria" >Internado.</button>

            </div> -->

            <div class="row">
              <hr>
            </div>
            <div class="row">

              <div class="col-md-12"><li>Establecida en 1847, Taunton School ha sido durante mucho tiempo uno de los principales proveedores de educación privada en el Reino Unido.</li></div>
              <div class="col-md-12"><li>Estamos ubicados en el hermoso condado rural de Somerset en el suroeste de Inglaterra, ocupando un sitio de 56 acres y con excelentes instalaciones.</li></div>

              <div class="col-md-12 ">

              <div class="header_btn dark_btn" style="display: flex;justify-content: center;">
                    <a style="width: 100%;" href="../Login" > Me interesa</a>
                </div>
                </div>

            </div>
          </div>
          <div class="row">
            <hr>
          </div>
          <div class="youtube-player" data-id="C3trTWa7_Cg"></div>


          <!--<div class="embed-responsive embed-responsive-21by9">
            <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/372337647?color=ffffff&byline=0&portrait=0"></iframe>
          </div>-->
          <hr>

          </div>

        </div>
          <div class="bottom-strip"></div>
      </div>
</div>

<div class="modal fade text-center py-5 subscribeModal-lg "  id="yorkVeranoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
          <!-- <div class="top-strip"></div> -->
        <div class="modal-header">
          <div class="container-fluid">
            <div class="row" style="margin-bottom: 10px;">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: red">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="row">
              <div class="col-md-4 d-none d-lg-block d-xl-block"  style="margin-top: 30px;"> <img src="<?=base_url('resources/assets/Informativa/images/v_york_logo.png');?>" class="rounded mx-auto d-block" alt="..."></div>
              <div class="col-md-7 ml-auto d-none d-lg-block d-xl-block"><img  src="<?=base_url('resources/assets/Informativa/images/vv_york.png');?>" alt=""></div>
            </div>
          </div>
          <!-- <a class="h2" href="https://www.fiverr.com/sunlimetech/design-and-fix-your-bootstrap-4-issues" target="_blank"> </a>

          <h3 class="col-md-4 "></h3> -->

        </div>
        <div class="modal-body">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-4"><b>Fundación:</b> </div>
              <div class="col-md-4 "> 	1976 .</div>
            </div>
            <div class="row">
              <div class="col-md-4"><b>Ubicación:</b> </div>
              <div class="col-md-4 "> <a href="https://goo.gl/maps/Hn4wKX1KX4wHcy8s8" target="_blank" >The King's Manor, Exhibition Square, York YO1 7EP, Reino Unido </a> </div>
            </div>
            <div class="row">
              <hr>

            </div>
            <div class="row">
              <hr>
                <div class="col-md-12 " style="align:center"><b>Edades</b></div>
                <div class="col-md-12"><li>Junior 7-13.</li></div>
                <div class="col-md-12"><li>Senior 14-17.</li></div>

            </div>
            <div class="row">
              <hr>
                <div class="col-md-12 " style="align:center"><b>Tipo de campamento</b></div>
                <div class="col-md-12"><li>Inglés.</li></div>

            </div>
            <br>
            <div class="list-group">
              <button type="button" class="list-group-item list-group-item-action list-group-item-success ">
                Alojamiento
              </button>
              <button type="button" class="list-group-item list-group-item-action" id="Odont" >Residencial.</button>

            </div>

            <div class="row">
              <hr>
            </div>
            <div class="row">

              <div class="col-md-12"><li>Desarrolla tus habilidades académicas, comunicativas y lingüísticas en inglés.</li></div>
              <div class="col-md-12"><li>Aumente su confianza y mejore sus habilidades transferibles, como trabajar en equipo en un entorno internacional.</li></div>
              <div class="col-md-12"><li>Amplíe sus horizontes y desarrolle su forma de pensar.</li></div>

              <div class="col-md-12 ">

              <div class="header_btn dark_btn" style="display: flex;justify-content: center;">
                    <a style="width: 100%;" href="../Login" > Me interesa</a>
                </div>
              </div>

            </div>
          </div>
          <div class="row">
            <hr>
          </div>
          <div class="youtube-player" data-id="OZyMxE5QXXE"></div>

          <!--<div class="embed-responsive embed-responsive-21by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/OZyMxE5QXXE"></iframe>
          </div>-->
        <hr>

          </div>

        </div>
          <div class="bottom-strip"></div>
      </div>
</div>

<div class="modal fade text-center py-5 subscribeModal-lg "  id="ueaVeranoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
          <!-- <div class="top-strip"></div> -->
        <div class="modal-header">
          <div class="container-fluid">
            <div class="row" style="margin-bottom: 10px;">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: red">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="row">
              <div class="col-md-4 d-none d-lg-block d-xl-block"  style="margin-top: -1px;"> <img src="<?=base_url('resources/assets/Informativa/images/lu_uea.png');?>" class="rounded mx-auto d-block" alt="..."></div>
              <div class="col-md-7 ml-auto d-none d-lg-block d-xl-block"><img  src="<?=base_url('resources/assets/Informativa/images/luu_east-anglia.jpg');?>" alt=""></div>
            </div>
          </div>
          <!-- <a class="h2" href="https://www.fiverr.com/sunlimetech/design-and-fix-your-bootstrap-4-issues" target="_blank"> </a>

          <h3 class="col-md-4 "></h3> -->

        </div>
        <div class="modal-body">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-4"><b>Fundación:</b> </div>
              <div class="col-md-4 "> 1963</div>
            </div>
            <div class="row">
              <div class="col-md-4"><b>Ubicación:</b> </div>
              <div class="col-md-4 "> <a href="javascript:;">Norwich  (90 mins) de Londres. </a> </div>
            </div>
            <br>
            <br>

            <div class="row">
                <div class="slide-container ">

                    <div class="row">
                      <div class="col-xs-2 col-md-6 ">
                       <div class="wrapper">
                         <div class="clash-card barbarian">
                           <div class="clash-card__image clash-card__image--barbarian">
                             <img class="imagencard" src="<?=base_url('resources/assets/Informativa/images/uea.jpg');?>"   alt="barbarian" />
                           </div>
                           <div class="clash-card__level clash-card__level--barbarian">Marca, publicidad y marketing digital.</div>
                           <div class="clash-card__unit-description">
                             Este módulo de ayudará a explorar la conexión entre publicidad y las técnicas de mercadotecnia digital – y como le dan forma a los mensajes de las marcas.
                           </div>
                             <p class="where">Viajes de Campo incluidos: </p>
                             <div class="clash-card__unit-description">
                               <p>- BBC Voices Workshop (The Forum, Norwich), London’s Museum of Brands and The History of Advertising Trust.</p>
                             </div>

                           <!-- <div class="clash-card__unit-stats clash-card__unit-statsbarbarian clearfix">
                             <div class="one-third">
                               <div class="stat-value">Nivel de inglés:</div>
                               <div class="stat">IELTS overall 5.0</div>
                             </div>
                           </div> -->
                         </div> <!-- end clash-card barbarian-->
                         </div> <!-- end wrapper -->
                      </div> <!-- end col waper-->
                      <div class="col-xs-2 col-md-6  ml-auto">
                       <div class="wrapper">
                         <div class="clash-card wizard">
                           <div class="clash-card__image clash-card__image--wizard">
                             <img class="imagencard" src="<?=base_url('resources/assets/Informativa/images/uea.jpg');?>"   alt="barbarian" />
                           </div>
                           <div class="clash-card__level clash-card__level--wizard">Escritura Creativa.</div>
                           <div class="clash-card__unit-description">
                            Estudiaras el trabajo de autores reconocidos y obtendrás las habilidades esenciales para convertirte en escritor, incluida la redacción de borradores y la lectura como escritor.
                           </div>
                           <p class="where">Viajes de Campo incluidos:</p>
                           <div class="clash-card__unit-description">
                             Shakespeare’s Globe Theatre (London), National Centre for Writing (Norwich).
                           </div>

                           <!-- <div class="clash-card__unit-stats clash-card__unit-statswizard clearfix">
                             <div class="one-third">
                               <div class="stat-value">Edad:</div>
                               <div class="stat">16+  </div>
                             </div>
                             <div class="one-third">
                               <div class="stat-value">Nivel de inglés:</div>
                               <div class="stat">IELTS overall 5.0 / intermedio</div>
                             </div>
                           </div> -->
                         </div> <!-- end clash-card barbarian-->
                         </div> <!-- end wrapper -->

                      </div> <!-- end col waper-->
                      <div class="col-xs-2 col-md-6  ml-auto">
                       <div class="wrapper">
                         <div class="clash-card goblin">
                           <div class="clash-card__image clash-card__image--goblin">
                             <img class="imagencard" src="<?=base_url('resources/assets/Informativa/images/uea.jpg');?>"   alt="barbarian" />
                           </div>
                           <div class="clash-card__level clash-card__level--goblin">Ley Global de medios y comunicaciones.</div>
                           <div class="clash-card__unit-description">
                             Te alentaremos a compartir las leyes de tu país para encontrar los retos de la “sociedad de la información”
                           </div>
                           <p class="where">Viajes de Campo incluidos:</p>
                           <div class="clash-card__unit-description">
                             Te alentaremos a compartir las leyes de tu país para encontrar los retos de la “sociedad de la información”
                           </div>


                           <!-- <div class="clash-card__unit-stats clash-card__unit-statsgoblin clearfix">
                             <div class="one-third">
                               <div class="stat-value">Edad:</div>
                               <div class="stat">18+ </div>
                             </div>
                             <div class="one-third">
                               <div class="stat-value">Nivel de inglés:</div>
                               <div class="stat">IELTS overall 5.0 / intermedio</div>
                             </div>

                           </div> -->

                         </div> <!-- end clash-card barbarian-->
                         </div> <!-- end wrapper -->

                      </div> <!-- end col waper-->
                    </div> <!-- end row two -->
              </div><!-- end slide continer-->
            </div>
            <div class="row">
              <hr>

            </div>
            <div class="row">
              <hr>
                <div class="col-md-12 " style="align:center"><b>Ranking:</b></div>
            </div>
            <div class="row">

              <div class="col-md-6">THE Ranking Mundial 2020: 192.</div>
              <div class="col-md-6">Ranqueada 10ª en UK por la calidad de su investigación.</div>
              <br>
            </div>

            <div class="row">
              <hr>

            </div>
            <!-- <div class="list-group">
              <button type="button" class="list-group-item list-group-item-action list-group-item-success ">
                Facultades
              </button>
              <button type="button" class="list-group-item list-group-item-action" id="Odont" >Artes y Humanidades.</button>
              <button type="button" class="list-group-item list-group-item-action" id="Odont" >Ciencias.</button>
              <button type="button" class="list-group-item list-group-item-action" id="Odont" >Ciencias de la salud.</button>
              <button type="button" class="list-group-item list-group-item-action" id="Odont" >Ciencias Sociales.</button>
              <button type="button" class="list-group-item list-group-item-action" id="Odont" >Medicina y Odontologia.</button>
              <button type="button" class="list-group-item list-group-item-action" id="Odont" >Negocios.</button>
            </div> -->
            <div class="row">
              <hr>
            </div>
            <div class="row">
              <div class="col-md-12">Norwich es la primera ciudad Patrimonio Mundial de la Literatura.</div>

              <div class="header_btn dark_btn" style="display: flex;justify-content: center;">
                    <a style="width: 100%;" href="../Login" > Me interesa</a>
                </div>

            </div>
          </div>
          <div class="row">
            <hr>
          </div>
          <div class="youtube-player" data-id="LTF9EOqy9L8"></div>

          <!--<div class="embed-responsive embed-responsive-21by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/LTF9EOqy9L8"></iframe>
          </div>-->
          </div>

        </div>
          <div class="bottom-strip"></div>
      </div>

</div>

<div class="modal fade text-center py-5 subscribeModal-lg "  id="cambridgeVeranoInglesModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
          <!-- <div class="top-strip"></div> -->
        <div class="modal-header">
          <div class="container-fluid">
            <div class="row" style="margin-bottom: 10px;">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: red">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="row">
              <div class="col-md-4 d-none d-lg-block d-xl-block"  style="margin-top: 30px;"> <img src="<?=base_url('resources/assets/Informativa/images/new_CAE-Cambridge-Academy-of-English.jpg');?>" class="rounded mx-auto d-block" alt="..."></div>
              <div class="col-md-7 ml-auto d-none d-lg-block d-xl-block"><img  src="<?=base_url('resources/assets/Informativa/images/ee_ecambrige.jpg');?>" alt=""></div>
            </div>
          </div>
          <!-- <a class="h2" href="https://www.fiverr.com/sunlimetech/design-and-fix-your-bootstrap-4-issues" target="_blank"> </a>

          <h3 class="col-md-4 "></h3> -->

        </div>
        <div class="modal-body">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-4"><b>Fundación:</b> </div>
              <div class="col-md-4 "> 	1845.</div>
            </div>
            <div class="row">
              <div class="col-md-4"><b>Ubicación:</b> </div>
              <div class="col-md-4 "> <a href="https://goo.gl/maps/pKZkLmhqavSQGqLL8" target="_blank" > Gaol Walk, University College, Cork, T12 YN60, Irlanda </a> </div>
            </div>
            <br>
            <div class="row">
                <div class="slide-container ">
                    <div class="row">
                      <div class="col-xs-2 col-md-6">
                       <div class="wrapper">
                         <div class="clash-card giant">
                           <div class="clash-card__image clash-card__image--goblin">
                             <img class="imagencard" src="<?=base_url('resources/assets/Informativa/images/AcademicofEnglish_summer.jpg');?>"   alt="barbarian" />
                           </div>
                           <div class="clash-card__level clash-card__level--goblin">Cursos en casa anfitriona: Adolescentes </div>
                           <div class="clash-card__unit-description">
                            20 horas de clases por semana, actividades sociales y deportivas programadas
                           </div>
                           <p class="where">Incluye:</p>
                           <div class="clash-card__unit-description">
                             Alojamiento, comidas, traslados, actividades deportivas, excursiones, seguro médico e inscripción.
                           </div>
                           <div class="clash-card__unit-stats clash-card__unit-stats--goblin clearfix">
                             <div class="one-third">
                               <div class="stat-value">Edad:</div>
                               <div class="stat">14 - 16 años </div>
                             </div>
                             <div class="one-third">
                               <div class="stat-value">Nivel de inglés:</div>
                               <div class="stat"> Básico - Avanzado</div>
                             </div>
                           </div>

                         </div> <!-- end clash-card barbarian-->
                         </div> <!-- end wrapper -->

                      </div> <!-- end col waper-->
                      <div class="col-xs-2 col-md-6  ml-auto">
                         <div class="wrapper">
                          <table class="table table-bordered">
                            <thead class="theadtabletw">
                              <tr>
                                <th>Therm</th>
                                <th>Fechas</th>
                                <th>Duración</th>
                                <th>Costo</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>T1</td>
                                <td>22 Junio – 3 Julio 2020</td>
                                <td>2 Semanas</td>
                                <td>£1870</td>
                              </tr>
                              <tr>
                                <td>T2</td>
                                <td>6 Julio – 17 Julio 2020</td>
                                <td> 2 Semanas</td>
                                <td> £1870 </td>
                              </tr>
                              <tr>
                                <td>T3</td>
                                <td>20 Julio – 31 Julio 2020</td>
                                <td>2 Semanas</td>
                                <td>£1870</td>
                              </tr>
                            </tbody>
                          </table>
                         </div>
                      </div>

                      <div class="col-xs-2 col-md-6  ml-auto">
                         <div class="wrapper">
                          <table class="table table-bordered">
                            <thead class="theadtableth">
                              <tr>
                                <th>Therm</th>
                                <th>Fechas</th>
                                <th>Duración</th>
                                <th>Costo</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>MH1</td>
                                <td>6 Julio – 17 Julio 2020</td>
                                <td>2 Semanas</td>
                                <td>£2110</td>
                              </tr>
                              <tr>
                                <td>MH1</td>
                                <td>20 Julio – 31 Julio 2020</td>
                                <td> 2 Semanas</td>
                                <td> £2110 </td>
                              </tr>
                              <tr>
                                <td>MH1 + 2</td>
                                <td>6 Julio - 31 Julio 2020</td>
                                <td>4 Semanas </td>
                                <td>£3860</td>
                              </tr>
                            </tbody>
                          </table>
                         </div>
                      </div>
                      <div class="col-xs-2 col-md-6  ml-auto">
                       <div class="wrapper">
                         <div class="clash-card barbarian">
                           <div class="clash-card__image clash-card__image--barbarian">
                             <img class="imagencard" src="<?=base_url('resources/assets/Informativa/images/AcademicofEnglish_summer.jpg');?>"   alt="barbarian" />
                           </div>
                           <div class="clash-card__level clash-card__level--barbarian">Cursos en residencia: Niños </div>
                           <div class="clash-card__unit-description">
                             15 horas de clases por semana, actividades sociales y deportivas programadas.
                           </div>
                           <p class="where">Incluye</p>
                           <div class="clash-card__unit-description">
                             Alojamiento, comidas, traslados, actividades deportivas, excursiones, seguro médico e inscripción.
                           </div>
                           <div class="clash-card__unit-stats clash-card__unit-stats--barbarian clearfix">
                             <div class="one-third">
                               <div class="stat-value">Edad:</div>
                               <div class="stat">9 - 13 años </div>
                             </div>
                             <div class="one-third">
                               <div class="stat-value">Nivel de inglés:</div>
                               <div class="stat">Básico - Avanzado</div>
                             </div>
                           </div>

                         </div> <!-- end clash-card barbarian-->
                         </div> <!-- end wrapper -->

                      </div> <!-- end col waper-->

                      <div class="col-xs-2 col-md-6">
                       <div class="wrapper">
                         <div class="clash-card wizard">
                           <div class="clash-card__image clash-card__image--wizard">
                             <img class="imagencard" src="<?=base_url('resources/assets/Informativa/images/AcademicofEnglish_recidencia.jpg');?>"   alt="barbarian" />
                           </div>
                           <div class="clash-card__level clash-card__level--wizard">Cursos en residencia: Adolescentes </div>
                           <div class="clash-card__unit-description">
                             15 horas de clases por semana, actividades sociales y deportivas programadas
                           </div>
                           <p class="where">Incluye:</p>
                           <div class="clash-card__unit-description">
                             Alojamiento, comidas, traslados, actividades deportivas, excursiones, seguro médico e inscripción.
                           </div>
                           <div class="clash-card__unit-stats clash-card__unit-stats--wizard clearfix">
                             <div class="one-third">
                               <div class="stat-value">Edad:</div>
                               <div class="stat">12 - 16 años </div>
                             </div>
                             <div class="one-third">
                               <div class="stat-value">Nivel de inglés:</div>
                               <div class="stat"> Básico - Avanzado</div>
                             </div>
                           </div>

                         </div> <!-- end clash-card barbarian-->
                         </div> <!-- end wrapper -->

                      </div> <!-- end col waper-->
                      <div class="col-xs-2 col-md-6  ml-auto">
                         <div class="wrapper">
                          <table class="table table-bordered">
                            <thead class="theadtable">
                              <tr>
                                <th>Therm</th>
                                <th>Fechas</th>
                                <th>Duración</th>
                                <th>Costo</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>OBH1</td>
                                <td>13 Julio – 24 Julio 2020</td>
                                <td>2 Semanas</td>
                                <td>£2110</td>
                              </tr>
                              <tr>
                                <td>OBH2</td>
                                <td>27 Julio – 07 Agosto 2020</td>
                                <td> 2 Semanas</td>
                                <td> £2110 </td>
                              </tr>
                              <tr>
                                <td>OBH1 + 2</td>
                                <td>13 Julio - 7 Agosto 2020</td>
                                <td>4 Semanas </td>
                                <td>£3860</td>
                              </tr>
                            </tbody>
                          </table>
                         </div>
                      </div>

                      <div class="col-xs-2 col-md-6  ml-auto">
                         <div class="wrapper">
                          <table class="table table-bordered">
                            <thead class="theadtablefo">
                              <tr>
                                <th>Therm</th>
                                <th>Fechas</th>
                                <th>Duración</th>
                                <th>Costo</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>PHC1</td>
                                <td>6 Julio – 17 Julio 2020</td>
                                <td>2 Semanas</td>
                                <td>£2110</td>
                              </tr>
                              <tr>
                                <td>PHC2</td>
                                <td>20 Julio – 31 Julio 2020</td>
                                <td> 2 Semanas</td>
                                <td> £2110 </td>
                              </tr>
                              <tr>
                                <td>OBH1 + 2</td>
                                <td>6 Julio - 31 Julio 2020</td>
                                <td>4 Semanas </td>
                                <td>£3860</td>
                              </tr>
                            </tbody>
                          </table>
                         </div>
                      </div>
                      <div class="col-xs-2 col-md-6  ml-auto">
                       <div class="wrapper">
                         <div class="clash-card giant">
                           <div class="clash-card__image clash-card__image--giant">
                             <img class="imagencard" src="<?=base_url('resources/assets/Informativa/images/AcademicofEnglish_Tw_adolecente.jpg');?>"   alt="barbarian" />
                           </div>
                           <div class="clash-card__level clash-card__level--giant">Cursos en residencia: Adolescentes </div>
                           <div class="clash-card__unit-description">
                             20 horas de clases por semana, actividades sociales y deportivas programadas.
                           </div>
                           <p class="where">Incluye:</p>
                           <div class="clash-card__unit-description">
                             Alojamiento, comidas, traslados, actividades deportivas, excursiones, seguro médico e inscripción.
                           </div>
                           <div class="clash-card__unit-stats clash-card__unit-stats--giant clearfix">
                             <div class="one-third">
                               <div class="stat-value">Edad:</div>
                               <div class="stat"> 14 - 17 años </div>
                             </div>
                             <div class="one-third">
                               <div class="stat-value">Nivel de inglés:</div>
                               <div class="stat">Básico - Avanzado</div>
                             </div>
                           </div>

                         </div> <!-- end clash-card barbarian-->
                         </div> <!-- end wrapper -->

                      </div> <!-- end col waper-->
                 </div> <!-- end row two -->
              </div><!-- end slide continer-->
            </div>
            <br>
            <div class="row">
              <div class="col-md-12 ">

              <div class="header_btn dark_btn" style="display: flex;justify-content: center;">
                    <a style="width: 100%;" href="../Login" > Me interesa</a>
                </div>
                </div>
            </div>
          </div>
          <div class="row">
            <hr>
          </div>
          <div class="youtube-player" data-id="oegk-4TmnnM"></div>

          <!--<div class="embed-responsive embed-responsive-21by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/_RNiSEej3qA"></iframe>
          </div>-->

          <hr>

          </div>

        </div>
          <div class="bottom-strip"></div>
      </div>
</div>

<div class="modal fade text-center py-5 subscribeModal-lg "  id="uweVeranoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
          <!-- <div class="top-strip"></div> -->
        <div class="modal-header">
          <div class="container-fluid">
          <div class="row" style="margin-bottom: 10px;">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: red">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="row">
              <div class="col-md-4 d-none d-lg-block d-xl-block"  style="margin-top: -1px;"> <img src="<?=base_url('resources/assets/Informativa/images/lu_uwe.png');?>" class="rounded mx-auto d-block" alt="..."></div>
              <div class="col-md-7 ml-auto d-none d-lg-block d-xl-block"><img  src="<?=base_url('resources/assets/Informativa/images/luu_west.jpg');?>" alt=""></div>
            </div>
          </div>
          <!-- <a class="h2" href="https://www.fiverr.com/sunlimetech/design-and-fix-your-bootstrap-4-issues" target="_blank"> </a>

          <h3 class="col-md-4 "></h3> -->

        </div>
        <div class="modal-body">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-4"><b>Fundación:</b> </div>
              <div class="col-md-4 "> 1595 y en 1992 obtiene título de universidad.</div>
            </div>
            <div class="row">
              <div class="col-md-4"><b>Ubicación:</b> </div>
              <div class="col-md-4 "> <a href="javascript:;">Bristol (1h 40min) de Londres. </a> </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-12 " style="align:center"><p class="closed">Aplicaciones cerradas para 2020</p></div>

            </div>
            <br>

            <div class="row">
                <div class="slide-container ">

                    <div class="row">
                      <div class="col-xs-2 col-md-6 ">
                       <div class="wrapper">
                         <div class="clash-card barbarian">
                           <div class="clash-card__image clash-card__image--barbarian">
                             <img class="imagencard" src="<?=base_url('resources/assets/Informativa/images/uwe_leuguacultural.png');?>"   alt="barbarian" />
                           </div>
                           <div class="clash-card__level clash-card__level--barbarian">Escuela de verano de lengua Inglesa y cultura Británica</div>
                           <div class="clash-card__unit-description">
                             Tendrás una experiencia universitaria en UK.
                           </div>
                             <p class="where">Costo </p>
                             <div class="clash-card__unit-description">
                               <p>- £1,150 paquete self-catering (Alimentos no incluidos. Ideal para los que prefieren cocinar sus alimentos. Solo disponible para mayores de 18 años.)</p>
                               <p>- £1,450 Paquete todo incluído (Comidas incluidas. Paquete disponible para todos los estudiantes.)</p>
                             </div>
                             <p class="where">Incluye:</p>
                             <div class="clash-card__unit-description">
                               <ul>
                                 <li>- Materiales</li>
                                 <li>- Wi-Fi dentro de la universidad.</li>
                                 <li>- Dos semanas de alojamiento el la Villa estudiantil en el campus de Frenchay habitación sencilla.</li>
                                 <li>- Transferencias de aeropuerto ( horarios y días designados).</li>
                                 <li>- Viajes</li>
                                 <li>- Lunch de bienvenida y despedida.</li>
                               </ul>
                             </div>
                           <div class="clash-card__unit-stats clash-card__unit-stats--barbarian clearfix">
                             <div class="one-third">
                               <div class="stat-value">Nivel de inglés:</div>
                               <div class="stat">IELTS overall 5.0</div>
                             </div>
                           </div>
                         </div> <!-- end clash-card barbarian-->
                         </div> <!-- end wrapper -->
                      </div> <!-- end col waper-->
                      <div class="col-xs-2 col-md-6  ml-auto">
                       <div class="wrapper">
                         <div class="clash-card wizard">
                           <div class="clash-card__image clash-card__image--wizard">
                             <img class="imagencard" src="<?=base_url('resources/assets/Informativa/images/uwe_arteMedia.png');?>"   alt="barbarian" />
                           </div>
                           <div class="clash-card__level clash-card__level--wizard">Escuela de verano de arte, medios y diseño</div>
                           <div class="clash-card__unit-description">
                            Despierta tu creatividad en un entorno que te alienta a desarrollar tu talento.
                           </div>
                           <p class="where">Costo: £2,500 </p>
                           <p class="where">Incluye:</p>
                           <div class="clash-card__unit-description">
                             <ul>
                               <p class="where">Alojamiento:</p>
                                 <li>-Todos los alimentos</li>
                                 <li>-Acceso a internet en todas las habitaciones.</li>
                                 <li>-Servicio de limpieza y cambio de ropa de cama semanal. </li>
                                 <li>-Seguridad monitoreada 24/7</li>
                            </ul>
                           </div>

                           <div class="clash-card__unit-description">
                             <ul>
                               <p class="where">Todos los alimentos:</p>
                             <li>-Desayuno , Comida y cena. </li>
                             <li>-Actividades sociales y viajes. </li>
                             <li>-Transferencias de aeropuerto ( horarios y días designados)</li>
                             <li>-Wi-Fi dentro de la Universidad</li>
                             <li>-Certificado de asistencia por parte de UWE Bristol</li>
                             </ul>
                           </div>
                           <div class="clash-card__unit-stats clash-card__unit-stats--wizard clearfix">
                             <div class="one-third">
                               <div class="stat-value">Edad:</div>
                               <div class="stat">16+  </div>
                             </div>
                             <div class="one-third">
                               <div class="stat-value">Nivel de inglés:</div>
                               <div class="stat">IELTS overall 5.0 / intermedio</div>
                             </div>
                           </div>
                         </div> <!-- end clash-card barbarian-->
                         </div> <!-- end wrapper -->

                      </div> <!-- end col waper-->
                      <div class="col-xs-2 col-md-6  ml-auto">
                       <div class="wrapper">
                         <div class="clash-card goblin">
                           <div class="clash-card__image clash-card__image--goblin">
                             <img class="imagencard" src="<?=base_url('resources/assets/Informativa/images/uwe_ciencias.png');?>"   alt="barbarian" />
                           </div>
                           <div class="clash-card__level clash-card__level--goblin">Escuela de verano de ciencia.</div>
                           <div class="clash-card__unit-description">
                             Tendrás clases académicas de inglés combinadas con talleres de ciencias.
                           </div>
                           <p class="where">Costo  </p>
                           <div class="clash-card__unit-description">
                             <ul>
                                 <li>-£1,150 paquete self-catering (Alimentos no incluidos. Ideal para los que prefieren cocinar sus alimentos. Solo disponible para mayores de 18 años.)</li>
                                 <li>-£1,450 Paquete todo incluído (Comidas incluidas. Paquete disponible para todos los estudiantes.)</li>
                            </ul>
                           </div>

                           <div class="clash-card__unit-description">
                             <ul>
                              <p class="where">Incluye:</p>
                             <li>-Materiales. </li>
                             <li>-Wi-Fi dentro de la universidad. </li>
                             <li>-Dos semanas de alojamiento el la Villa estudiantil en el campus de Frenchay habitación sencilla.</li>
                             <li>-Transferencias de aeropuerto ( horarios y días designados)</li>
                             <li>-Viajes</li>
                             <li>-Lunch de bienvenida y despedida</li>
                             </ul>
                           </div>
                           <div class="clash-card__unit-stats clash-card__unit-stats--goblin clearfix">
                             <div class="one-third">
                               <div class="stat-value">Edad:</div>
                               <div class="stat">18+ </div>
                             </div>
                             <div class="one-third">
                               <div class="stat-value">Nivel de inglés:</div>
                               <div class="stat">IELTS overall 5.0 / intermedio</div>
                             </div>

                           </div>

                         </div> <!-- end clash-card barbarian-->
                         </div> <!-- end wrapper -->

                      </div> <!-- end col waper-->
                    </div> <!-- end row two -->
              </div><!-- end slide continer-->
            </div>
            <div class="row">
              <hr>

            </div>
            <div class="row">
              <hr>
                <div class="col-md-12 " style="align:center"><b>Ranking:</b></div>
            </div>
            <div class="row">

              <div class="col-md-6">Guardian University Guide 28 en Reino Unido.</div>
              <div class="col-md-6">11vo en el UK según encuesta de satisfacción estudiantil.</div>
              <br>
            </div>

            <div class="row">
              <hr>

            </div>
            <!-- <div class="list-group">
              <button type="button" class="list-group-item list-group-item-action list-group-item-success ">
                Facultades
              </button>
              <button type="button" class="list-group-item list-group-item-action" id="Odont" >Arquitectura.</button>
              <button type="button" class="list-group-item list-group-item-action" id="Odont" >Artes y Humanidades.</button>
              <button type="button" class="list-group-item list-group-item-action" id="Odont" >Ciencias de la salud.</button>
              <button type="button" class="list-group-item list-group-item-action" id="Odont" >Ciencias Sociales.</button>
              <button type="button" class="list-group-item list-group-item-action" id="Odont" >Negocios.</button>
            </div> -->
            <div class="row">
              <hr>
            </div>
            <div class="row">
              <div class="col-md-12">The Guardian nombro a Bristol como una de las 10 ciudades más felices para vivir y trabajar en el Reino Unido.</div>

              <div class="header_btn dark_btn" style="display: flex;justify-content: center;">
                    <a style="width: 100%;" href="../Login" > Me interesa</a>
                </div>

            </div>
          </div>
          <div class="row">
            <hr>
          </div>
          <div class="youtube-player" data-id="scLpnIm-XZo"></div>

          <!--<div class="embed-responsive embed-responsive-21by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/scLpnIm-XZo"></iframe>
          </div>-->
          </div>

        </div>
          <div class="bottom-strip"></div>
      </div>

</div>

<div class="modal fade text-center py-5 subscribeModal-lg "  id="queenVeranoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
          <!-- <div class="top-strip"></div> -->
        <div class="modal-header">
          <div class="container-fluid">
            <div class="row" style="margin-bottom: 10px;">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: red">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="row">
              <div class="col-md-4 d-none d-lg-block d-xl-block"  style="margin-top: -1px;"> <img src="<?=base_url('resources/assets/Informativa/images/lu_queen-mary.png');?>" class="rounded mx-auto d-block" alt="..."></div>
              <div class="col-md-7 ml-auto d-none d-lg-block d-xl-block"><img  src="<?=base_url('resources/assets/Informativa/images/luu_queen-mary.jpg');?>" alt=""></div>
            </div>
          </div>
          <!-- <a class="h2" href="https://www.fiverr.com/sunlimetech/design-and-fix-your-bootstrap-4-issues" target="_blank"> </a>

          <h3 class="col-md-4 "></h3> -->

        </div>
        <div class="modal-body">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-4"><b>Fundación:</b> </div>
              <div class="col-md-4 "> 1785.</div>
            </div>
            <div class="row">
              <div class="col-md-4"><b>Ubicación:</b> </div>
              <div class="col-md-4 "> <a href="javascript:;" >Centro de Londres. </a> </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-12 " style="align:center"><p class="closed">Aplicaciones cerradas para 2020</p></div>

            </div>

            <div class="row">
                <div class="slide-container ">

                    <div class="row">
                      <div class="col-xs-2 col-md-6 ">
                       <div class="wrapper">
                         <div class="clash-card barbarian">
                           <div class="clash-card__image clash-card__image--barbarian">
                             <img class="imagencard" src="<?=base_url('resources/assets/Informativa/images/queenmary_cultArte.png');?>"   alt="barbarian" />
                           </div>
                           <div class="clash-card__level clash-card__level--barbarian">Cultura y artes liberales</div>
                           <div class="clash-card__unit-description">
                             Descubre historia, cultura y arte en queen Mary.
                           </div>
                             <p class="where"></p>
                           <div class="clash-card__unit-description">
                             <p><b>Alojamiento: </b>£670 por sesión
                               <br>
                              <b>Viajes de campo: </b>£10 - £20</p>
                           </div>
                           <div class="clash-card__unit-stats clash-card__unit-stats--barbarian clearfix">
                             <div class="one-third">
                               <div class="stat-value">Edad:</div>
                               <div class="stat"> 18+ </div>
                             </div>
                             <div class="one-third">
                               <div class="stat-value">Nivel de inglés:</div>
                               <div class="stat">  IELTS overall 7 / TOEFL iBT overall 100</div>
                             </div>
                             <div class="one-third no-border">
                               <div class="stat-value">Costo:</div>
                               <div class="stat">  £1,700 1 sesión - £3,300 2 sesiones  </div>
                             </div>
                           </div>
                         </div> <!-- end clash-card barbarian-->
                         </div> <!-- end wrapper -->
                      </div> <!-- end col waper-->
                      <div class="col-xs-2 col-md-6  ml-auto">
                       <div class="wrapper">
                         <div class="clash-card wizard">
                           <div class="clash-card__image clash-card__image--wizard">
                             <img class="imagencard" src="<?=base_url('resources/assets/Informativa/images/queenmary_negOpolitleyes.png');?>"   alt="barbarian" />
                           </div>
                           <div class="clash-card__level clash-card__level--wizard">Negocios, política y leyes</div>
                           <div class="clash-card__unit-description">
                             Tendrás un sofisticado entendimiento de la globalización.
                           </div>
                           <p class="where"></p>
                           <div class="clash-card__unit-description">
                             <p><b>Alojamiento: </b>£670 por sesión
                               <br>
                              <b>Viajes de campo: </b>£10 - £20</p>
                           </div>

                           <div class="clash-card__unit-stats clash-card__unit-stats--wizard clearfix">
                             <div class="one-third">
                               <div class="stat-value">Edad:</div>
                               <div class="stat">18+ </div>
                             </div>
                             <div class="one-third">
                               <div class="stat-value">Nivel de inglés:</div>
                               <div class="stat">IELTS overall 6.5 / TOEFL iBT overall 92</div>
                             </div>
                             <div class="one-third no-border">
                               <div class="stat-value">Costo:</div>
                               <div class="stat"> £1,700 1 sesión - £3,300 2 sesiones </div>
                             </div>
                           </div>
                         </div> <!-- end clash-card barbarian-->
                         </div> <!-- end wrapper -->

                      </div> <!-- end col waper-->
                      <div class="col-xs-2 col-md-6  ml-auto">
                       <div class="wrapper">
                         <div class="clash-card goblin">
                           <div class="clash-card__image clash-card__image--goblin">
                             <img class="imagencard" src="<?=base_url('resources/assets/Informativa/images/queenmary_cienciaMedicina.png');?>"   alt="barbarian" />
                           </div>
                           <div class="clash-card__level clash-card__level--goblin">Ciencia, medicina y tecnología</div>
                           <div class="clash-card__unit-description">
                             Entrenamiento básico en cirugía, desarrollo de investigaciones, aprender de programas como python. Eso y más aprenderás.
                           </div>
                           <p class="where"></p>
                           <div class="clash-card__unit-description">
                             <p><b>Alojamiento: </b>£670 por sesión
                               <br>
                              <b>Viajes de campo: </b>£10 - £20</p>
                           </div>
                           <div class="clash-card__unit-stats clash-card__unit-stats--goblin clearfix">
                             <div class="one-third">
                               <div class="stat-value">Edad:</div>
                               <div class="stat">18+ </div>
                             </div>
                             <div class="one-third">
                               <div class="stat-value">Nivel de inglés:</div>
                               <div class="stat">ELTS overall 6.5 / TOEFL iBT overall 100</div>
                             </div>
                             <div class="one-third no-border">
                               <div class="stat-value">Costo:</div>
                               <div class="stat"> £1,700 1 sesión - £3,300 2 sesiones </div>
                             </div>
                           </div>

                         </div> <!-- end clash-card barbarian-->
                         </div> <!-- end wrapper -->

                      </div> <!-- end col waper-->
                      <div class="col-xs-2 col-md-6  ml-auto">
                       <div class="wrapper">
                         <div class="clash-card giant">
                           <div class="clash-card__image clash-card__image--giant">
                             <img class="imagencard" src="<?=base_url('resources/assets/Informativa/images/bristol_arq.png');?>"   alt="barbarian" />
                           </div>
                           <div class="clash-card__unit-description">
                             *Los estudiantes deberán haber completado dos semestres de estudio en la Universidad de su País.
                             -Costos de viaje y alimentos no están incluídos
                           </div>


                           <div class="clash-card__unit-stats clash-card__unit-stats--giant clearfix">
                             <div class="one-third">
                               <div class="stat-value"></div>
                               <div class="stat">!</div>

                             </div>

                             <div class="one-third">
                               <div class="stat-value"></div>
                               <div class="stat"></div>

                             </div>

                             <div class="one-third no-border">
                               <div class="stat-value"></div>
                               <div class="stat"> </div>

                             </div>

                           </div>

                         </div> <!-- end clash-card barbarian-->
                         </div> <!-- end wrapper -->

                      </div> <!-- end col waper-->
                    </div> <!-- end row two -->
              </div><!-- end slide continer-->
            </div>
            <div class="row">
              <hr>

            </div>
            <!-- <div class="row">
              <hr>
                <div class="col-md-12 " style="align:center"><b>Principales facultades</b></div>
                <div class="col-md-12"><li>Humanities and social sciences.</li></div>
                <div class="col-md-12"><li>Science and engineering.</li></div>
                <div class="col-md-12"><li>Medicine and Dentistry.</li></div>

            </div> -->


            <div class="row">
              <hr>
            </div>
            <div class="row">
              <div class="col-md-12">En 1785 fundó la primera escuela de Medicina de Inglaterra en el Royal London Hospital.</div>

              <div class="header_btn dark_btn" style="display: flex;justify-content: center;">
                    <a style="width: 100%;" href="../Login" > Me interesa</a>
                </div>

            </div>
          </div>
          <div class="row">
            <hr>
          </div>
          <div class="youtube-player" data-id="f9y6eeEK1oM"></div>

          <!--<div class="embed-responsive embed-responsive-21by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/f9y6eeEK1oM"></iframe>
          </div>-->
          </div>

        </div>
          <div class="bottom-strip"></div>
      </div>

</div>

<div class="modal fade text-center py-5 subscribeModal-lg "  id="andrewVeranoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <!-- <div class="top-strip"></div> -->
      <div class="modal-header">
        <div class="container-fluid">
          <div class="row" style="margin-bottom: 10px;">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: red">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
          <div class="row">
            <div class="col-md-4 d-none d-lg-block d-xl-block"  style="margin-top: -1px;"> <img src="<?=base_url('resources/assets/Informativa/images/luu_st-andrews.png');?>" class="rounded mx-auto d-block" alt="..."></div>
            <div class="col-md-7 ml-auto d-none d-lg-block d-xl-block"><img  src="<?=base_url('resources/assets/Informativa/images/lu_st-andrews.jpg');?>" alt=""></div>
          </div>
        </div>
        <!-- <a class="h2" href="https://www.fiverr.com/sunlimetech/design-and-fix-your-bootstrap-4-issues" target="_blank"> </a>

        <h3 class="col-md-4 "></h3> -->

      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-4"><b>Fundación:</b> </div>
            <div class="col-md-4 "> 1413.</div>
          </div>
          <div class="row">
            <div class="col-md-4"><b>Ubicación:</b> </div>
            <div class="col-md-4 "> <a href="javascript:;" >1hr 30 mins de Londres en avión </a> </div>
          </div>

          <br>
          <div class="row">
          <div class="col-md-12">Para los estudiantes que están interesados ​​en experimentar lo que es estudiar en la Universidad de St Andrews o están buscando una muestra de la vida universitaria, nuestra escuela de verano puede ser la oportunidad perfecta.</div>
          </div>

          <br>
          <div class="row">
              <div class="col-md-12 " style="align:center"><p class="closed">Aplicaciones cerradas para 2020</p></div>

          </div>
          <br>
          <div class="list-group">
            <button type="button" class="list-group-item list-group-item-action list-group-item-success ">
              Academic courses:
            </button>
            <button type="button" class="list-group-item list-group-item-action" id="Odont" >Arts and Social Sciences.</button>
            <button type="button" class="list-group-item list-group-item-action" id="Odont" >Biological and Earth Sciences.</button>
            <button type="button" class="list-group-item list-group-item-action" id="Odont" >Creative Writing.</button>
            <button type="button" class="list-group-item list-group-item-action" id="Odont" >Management, Economics and Entrepreneurship.</button>
            <button type="button" class="list-group-item list-group-item-action" id="Odont" >Medicine.</button>
            <button type="button" class="list-group-item list-group-item-action" id="Odont" >Moral Philosophy in the Age of Artificial Intelligence.</button>
            <button type="button" class="list-group-item list-group-item-action" id="Odont" >Physical Science, Mathematics and Computer Science.</button>
            <button type="button" class="list-group-item list-group-item-action" id="Odont" >Psychology and Neuroscience.</button>
            <button type="button" class="list-group-item list-group-item-action" id="Odont" >Making Scotland: Many Stories, One Nation.</button>
            <button type="button" class="list-group-item list-group-item-action" id="Odont" >Sustainable Development.</button>
            <button type="button" class="list-group-item list-group-item-action" id="Odont" >World Literature.</button>
          </div>
          <br>
          <div class="list-group">
            <button type="button" class="list-group-item list-group-item-action list-group-item-warning ">
              Costo £4,100.
            </button>
            <p class="where">Incluye:</p>
            <button type="button" class="list-group-item list-group-item-action" id="Odont" >Inscripción.</button>
            <button type="button" class="list-group-item list-group-item-action" id="Odont" >Material de lectura.</button>
            <button type="button" class="list-group-item list-group-item-action" id="Odont" >Equipamiento de laboratorio y equipamiento de deportes.</button>
            <button type="button" class="list-group-item list-group-item-action" id="Odont" >Alojamiento.</button>
            <button type="button" class="list-group-item list-group-item-action" id="Odont" >Desayuno, comida y cena diarios.</button>
            <button type="button" class="list-group-item list-group-item-action" id="Odont" >Transporte de y para el aeropuerto llegada y salida.</button>
            <button type="button" class="list-group-item list-group-item-action" id="Odont" >Presentaciones de invitados.</button>
            <button type="button" class="list-group-item list-group-item-action" id="Odont" >Viajes de campo.</button>
            <button type="button" class="list-group-item list-group-item-action" id="Odont" >Todas las actividades sociales y culturales organizadas.</button>
            <button type="button" class="list-group-item list-group-item-action" id="Odont" >Membresía del centro de deportes. </button>
          </div>
          <br>
          <div class="row">
            <hr>
          </div>
          <div class="row">
            <div class="col-md-12">Los Duques de Cambridge, el Príncipe William y Kate, se conocieron mientras estudiaban.</div>

            <div class="header_btn dark_btn" style="display: flex;justify-content: center;">
                    <a style="width: 100%;" href="../Login" > Me interesa</a>
                </div>

          </div>
        </div>
        <div class="row">
          <hr>
        </div>
        <div class="youtube-player" data-id="x8O5kv47zn8"></div>

        <!--<div class="embed-responsive embed-responsive-21by9">
          <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/x8O5kv47zn8"></iframe>
        </div>-->

        <hr>

        </div>

      </div>
        <div class="bottom-strip"></div>
    </div>

</div>


<div class="modal fade text-center py-5 subscribeModal-lg "  id="stonyhurtsVeranoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <!-- <div class="top-strip"></div> -->
      <div class="modal-header d-none d-lg-block d-xl-block">
        <div class="container-fluid">
          <div class="row" style="margin-bottom: 10px;">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: red">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
          <div class="row">
            <div class="col-md-4 d-none d-lg-block d-xl-block"  style="margin-top: -1px;"> <img src="<?=base_url('resources/assets/Informativa/images/prepa_Stonyhurts_College.jpg');?>" class="rounded mx-auto d-block" alt="..."></div>
            <div class="col-md-7 ml-auto d-none d-lg-block d-xl-block"><img  src="<?=base_url('resources/assets/Informativa/images/prepamodal_stonyhurts.png');?>" alt=""></div>
          </div>
        </div>
        <!-- <a class="h2" href="https://www.fiverr.com/sunlimetech/design-and-fix-your-bootstrap-4-issues" target="_blank"> </a>

        <h3 class="col-md-4 "></h3> -->

      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-4"><b>Fundación:</b> </div>
            <div class="col-md-4 "> 1593.</div>
          </div>
          <div class="row">
            <div class="col-md-4"><b>Ubicación:</b> </div>
            <div class="col-md-4 "> <a href="https://goo.gl/maps/offSnTJiuAXzAvk78" target="_blank" > Stonyhurst, Clitheroe BB7 9PT, Reino Unido </a> </div>
          </div>
          <br>
          <div class="row">
              <div class="slide-container ">
                  <div class="row">
                    <div class="col-xs-2 col-md-6">
                     <div class="wrapper">
                       <div class="clash-card wizard">
                         <div class="clash-card__image clash-card__image--wizard">
                           <img class="imagencard" src="<?=base_url('resources/assets/Informativa/images/stonyLogo.png');?>"   alt="barbarian" />
                         </div>
                         <div class="clash-card__level clash-card__level--wizard">STONYHURST Language School</div>
                         <div class="clash-card__unit-description">
                           Los alumnos tendrán un mejor entendimiento del inglés, poner a prueba sus habilidades y a tener un mayor confianza a la hora de hablar el idioma inglés.
                         </div>
                         <p class="where">Incluye:</p>
                         <div class="clash-card__unit-description">
                           <ul>
                             <li>Clases de alta calidad.</li>
                             <li>Alojamiento premium.</li>
                             <li>Todos los alimentos y actividades programadas.</li>
                             <li>Sudadera, playera y bolso.</li>
                             <li>Todos los deportes y actividades con instructores calificados y equipamiento de seguridad.</li>
                             <li>Lavandería.</li>
                             <li>Materiales.</li>
                             <li>Traslados desde aeropuerto de Liverpool, Manchester o Leeds Bradford.</li>
                             <li>Seguro médico de viaje.</li>
                           </ul>
                         </div>
                         <div class="clash-card__unit-stats clash-card__unit-stats--wizard clearfix">
                           <div class="one-third">
                             <div class="stat-value">Edad:</div>
                             <div class="stat">10 - 16 años </div>
                           </div>
                           <div class="one-third">
                             <div class="stat-value">Nivel de inglés:</div>
                             <div class="stat"> Básico - Avanzado</div>
                           </div>
                         </div>

                       </div> <!-- end clash-card barbarian-->
                       </div> <!-- end wrapper -->

                    </div> <!-- end col waper-->
                    <div class="col-xs-2 col-md-6  ml-auto">
                       <div class="wrapper">
                        <table class="table table-bordered">
                          <thead class="theadtablefo">
                            <tr>
                              <th>Semanas</th>
                              <th>Llegada</th>
                              <th>Salida</th>
                              <th>Costo</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>Dos semanas</td>
                              <td>Viernes 9 Julio</td>
                              <td>Viernes 23 Julio 2021</td>
                              <td>£2,550</td>
                            </tr>
                            <tr>
                              <td>Dos semanas</td>
                              <td>Viernes 23 Julio</td>
                              <td> Viernes 6 Agosto 2021</td>
                              <td> £2,550 </td>
                            </tr>
                            <tr>
                              <td>Tres semanas  </td>
                              <td> Viernes  9 Julio</td>
                              <td>Viernes 30 Julio 2021 </td>
                              <td>£3,800</td>
                            </tr>
                            <tr>
                              <td>Cuatro semanas </td>
                              <td> Viernes  9 Julio</td>
                              <td>Viernes 6 Agosto 2021 </td>
                              <td>£4,650</td>
                            </tr>
                          </tbody>
                        </table>
                        <table class="table table-bordered">
                          <thead class="theadtabletw">
                            <tr>
                              <th colspan="4" >Actividades extra que requieren agendarse antes de iniciar el curso</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>Equitación</td>
                              <td>£38 por una hora</td>
                            </tr>
                            <tr>
                              <td>Clases de Golf</td>
                              <td>£38 por una hora </td>
                            </tr>
                            <tr>
                              <td>Clases de Tenis </td>
                              <td>£38 por una hora </td>
                            </tr>
                            <tr>
                              <td>Clases de natación</td>
                              <td>£20 por 30 min</td>
                            </tr>

                          </tbody>
                        </table>
                       </div>
                    </div>
               </div> <!-- end row two -->
            </div><!-- end slide continer-->
          </div>
          <br>
        </div>
        <div class="col-md-12 ">
        <div class="header_btn dark_btn" style="display: flex;justify-content: center;">
                    <a style="width: 100%;" href="../Login" > Me interesa</a>
                </div>
        </div>
        <div class="row">
          <hr>
        </div>
        <div class="youtube-player" data-id="5xa1XwDzSnQ"></div>

        <!--<div class="embed-responsive embed-responsive-21by9">
          <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/5xa1XwDzSnQ"></iframe>
        </div>-->
        </div>

      </div>
        <div class="bottom-strip"></div>
    </div>


</div>



<div class="modal fade text-center py-5 subscribeModal-lg "  id="easttbourneVeranoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
          <!-- <div class="top-strip"></div> -->
        <div class="modal-header">
          <div class="container-fluid">
          <div class="row" style="margin-bottom: 10px;">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: red">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="row">
              <div class="col-md-4 d-none d-lg-block d-xl-block"  style="margin-top: 30px;"> <img src="<?=base_url('resources/assets/Informativa/images/new_Eastbourne_English-studyco1.jpg');?>" class="rounded mx-auto d-block" alt="..."></div>
              <div class="col-md-7 ml-auto d-none d-lg-block d-xl-block"><img  src="<?=base_url('resources/assets/Informativa/images/vv_Eastbourne.png');?>" alt=""></div>
            </div>
          </div>
          <!-- <a class="h2" href="https://www.fiverr.com/sunlimetech/design-and-fix-your-bootstrap-4-issues" target="_blank"> </a>

          <h3 class="col-md-4 "></h3> -->

        </div>
        <div class="modal-body">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-4"><b>Fundación:</b> </div>
              <div class="col-md-4 "> 	1867 .</div>
            </div>
            <div class="row">
              <div class="col-md-4"><b>Ubicación:</b> </div>
              <div class="col-md-4 "> <a href="https://goo.gl/maps/RXCpxCfBAsjwzdCr9" target="_blank" >Old Wish Rd, Eastbourne BN21 4JY, Reino Unido </a> </div>
            </div>
            <div class="row">
              <hr>

            </div>
            <div class="row">
              <hr>
                <div class="col-md-12 " style="align:center"><b>Edades</b></div>
                <div class="col-md-12"><li>Mayor de (16+).</li></div>

            </div>
            <div class="row">
              <hr>
                <div class="col-md-12 " style="align:center"><b>Tipo de curso</b></div>
                <div class="col-md-12"><li>Inglés general.</li></div>
                <div class="col-md-12"><li>Inglés profesional (25+).</li></div>
                <div class="col-md-12"><li>Preparación para exámenes.</li></div>

            </div>

            <div class="row">
              <hr>

            </div>
            <div class="list-group">
              <button type="button" class="list-group-item list-group-item-action list-group-item-success ">
                Alojamiento
              </button>
              <button type="button" class="list-group-item list-group-item-action" id="Odont" data-id="Odontología" >Con familia.</button>

            </div>
            <div class="row">
              <hr>
            </div>
            <div class="row">

              <div class="col-md-12"><li>Eastbourne tiene mucho que ofrecer, incluyendo una selección de cines y teatros multiplex modernos, un hermoso paseo marítimo, un puerto deportivo de ocio y excelentes tiendas, tanto interiores como al aire libre.</li></div>
              <div class="col-md-12"><li>instalaciones educativas y deportivas de primera clase.</li></div>

              <div class="col-md-12 ">

              <div class="header_btn dark_btn" style="display: flex;justify-content: center;">
                    <a style="width: 100%;" href="../Login" > Me interesa</a>
                </div>
                </div>

            </div>
          </div>
          <div class="row">
            <hr>
          </div>
          <div class="youtube-player" data-id="S1G5cWSMmzQ"></div>

          <!--<div class="embed-responsive embed-responsive-21by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/S1G5cWSMmzQ"></iframe>
          </div>-->

          <hr>

          </div>

        </div>
          <div class="bottom-strip"></div>
      </div>
</div>

<!-- Aqui inicia -->
<div class="modal fade text-center py-5 subscribeModal-lg "  id="artsVeranoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
          <!-- <div class="top-strip"></div> -->
        <div class="modal-header">
          <div class="container-fluid">
            <div class="row" style="margin-bottom: 10px;">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: red">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="row">
              <div class="col-md-4 d-none d-lg-block d-xl-block"  style="margin-top: -1px;"> <img src="<?=base_url('resources/assets/Informativa/images/lu_cambriadge.png');?>" class="rounded mx-auto d-block" alt="..."></div>
              <div class="col-md-7 ml-auto d-none d-lg-block d-xl-block"><img  src="<?=base_url('resources/assets/Informativa/images/luu_arts.jpg');?>" alt=""></div>
            </div>
          </div>
          <!-- <a class="h2" href="https://www.fiverr.com/sunlimetech/design-and-fix-your-bootstrap-4-issues" target="_blank"> </a>

          <h3 class="col-md-4 "></h3> -->

        </div>
        <div class="modal-body">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-4"><b>Fundación:</b> </div>
              <div class="col-md-4 "> 1985.</div>
            </div>
            <div class="row">
              <div class="col-md-4"><b>Ubicación:</b> </div>
              <div class="col-md-4 "> <a href="javascript:;" >A 50 min de Londres. </a> </div>
            </div>
            <div class="row">
              <hr>

            </div>
            <div class="row">
              <div class="col-md-12">En Cambridge School of Visual & Performing Arts ofrecemos un gran rango de divertidos e interactivos cursos de 1 a 3 semanas o si deseas permanecer más tiempo con nosotros puedes combinar un número de materias y pasar el verano con nosotros!.</div>
            </div>
              <br>
            <div class="row">
                <div class="slide-container ">
                    <div class="row">
                      <div class="col-xs-2 col-md-6 ">
                       <div class="wrapper">
                         <div class="clash-card barbarian">
                           <div class="clash-card__image clash-card__image--barbarian">
                             <img class="imagencard" src="<?=base_url('resources/assets/Informativa/images/art_preparacionporta.jpg');?>"   alt="barbarian" />
                           </div>
                           <div class="clash-card__level clash-card__level--barbarian">Preparación de Portafolio </div>
                           <div class="clash-card__unit-name">Ciencia, tecnología, ingeniería y matemáticas</div>
                           <div class="clash-card__unit-description">
                             Para estudiantes que quieran desarrollar un portafolio digital.
                           </div>
                             <p class="where">¿Cuándo?</p>
                           <div class="clash-card__unit-description">
                             <p><b>Llegada: </b>Domingo 5 Julio <b>Salida: </b>Sabado 25 Julio 2020</p>
                             <p><b>Llegada: </b>Domingo 2 Agosto <b>Salida: </b>Sábado 22 Agosto 2020</p>
                           </div>
                           <div class="clash-card__unit-stats clash-card__unit-stats--barbarian clearfix">
                             <div class="one-third">
                               <div class="stat-value">Edad:</div>
                               <div class="stat">16+. </div>
                             </div>
                             <div class="one-third">
                               <div class="stat-value">Nivel de inglés:</div>
                               <div class="stat"> IELTS 4.5+ / intermedio.</div>
                             </div>
                             <div class="one-third no-border">
                               <div class="stat-value">Costo:</div>
                               <div class="stat"> £3,900*.  </div>
                             </div>
                           </div>
                         </div> <!-- end clash-card barbarian-->
                         </div> <!-- end wrapper -->
                      </div> <!-- end col waper-->
                      <div class="col-xs-2 col-md-6  ml-auto">
                       <div class="wrapper">
                         <div class="clash-card wizard">
                           <div class="clash-card__image clash-card__image--wizard">
                             <img class="imagencard" src="<?=base_url('resources/assets/Informativa/images/art_preparacionporta.jpg');?>"   alt="barbarian" />
                           </div>
                           <div class="clash-card__level clash-card__level--wizard">Preparación de Portafolio y curso de ingléso</div>
                           <div class="clash-card__unit-description">
                             Para estudiantes que quieran desarrollar un portafolio digital y obtener clases de inglés especializadas.
                           </div>
                             <p class="where">¿Cuándo?</p>
                           <div class="clash-card__unit-description">
                             <p><b>Llegada: </b>Domingo 2 Agosto  <b>Salida: </b>Sábado 22 Agosto 2020</p>
                           </div>
                           <div class="clash-card__unit-stats clash-card__unit-stats--wizard clearfix">
                             <div class="one-third">
                               <div class="stat-value">Edad:</div>
                               <div class="stat">18+ </div>
                             </div>
                             <div class="one-third">
                               <div class="stat-value">Nivel de inglés:</div>
                               <div class="stat">IELTS 4.5+ / intermedio</div>
                             </div>
                             <div class="one-third no-border">
                               <div class="stat-value">Costo:</div>
                               <div class="stat"> £3,900*  </div>
                             </div>
                           </div>
                         </div> <!-- end clash-card barbarian-->
                         </div> <!-- end wrapper -->

                      </div> <!-- end col waper-->
                      <div class="col-xs-2 col-md-6  ml-auto">
                       <div class="wrapper">
                         <div class="clash-card goblin">
                           <div class="clash-card__image clash-card__image--goblin">
                             <img class="imagencard" src="<?=base_url('resources/assets/Informativa/images/arts_modas.jpg');?>"   alt="barbarian" />
                           </div>
                           <div class="clash-card__level clash-card__level--goblin">Curso de Modas</div>
                           <div class="clash-card__unit-description">
                             Para estudiantes interesados en el mundo de la moda.
                             *Preferible si tiene portafolio
                           </div>
                             <p class="where">¿Cuándo?</p>
                           <div class="clash-card__unit-description">
                             <p><b>Llegada: </b>Domingo 28 Junio  <b>Salida: </b>Sabado 11 Julio 2020</p>
                             <p><b>Llegada: </b>Domingo 26 Julio <b>Salida: </b>Sábado 8 Agosto 2020</p>
                           </div>
                           <div class="clash-card__unit-stats clash-card__unit-stats--goblin clearfix">
                             <div class="one-third">
                               <div class="stat-value">Edad:</div>
                               <div class="stat">14 a 18</div>
                             </div>
                             <div class="one-third">
                               <div class="stat-value">Nivel de inglés:</div>
                               <div class="stat">IELTS 4.5+ / intermedio</div>
                             </div>
                             <div class="one-third no-border">
                               <div class="stat-value">Costo:</div>
                               <div class="stat"> £2,700* </div>
                             </div>
                           </div>

                         </div> <!-- end clash-card barbarian-->
                         </div> <!-- end wrapper -->

                      </div> <!-- end col waper-->
                      <div class="col-xs-2 col-md-6  ml-auto">
                       <div class="wrapper">
                         <div class="clash-card archer">
                           <div class="clash-card__image clash-card__image--archer">
                             <img class="imagencard" src="<?=base_url('resources/assets/Informativa/images/arts_film.jpg');?>"   alt="barbarian" />
                           </div>
                           <div class="clash-card__level clash-card__level--archer">Filmación</div>
                           <div class="clash-card__unit-description">
                             Para estudiantes que se encuentren interesados en filmación, televisión y animación.
                           </div>
                             <p class="where">¿Cuándo?</p>
                           <div class="clash-card__unit-description">
                             <p><b>Llegada: </b>Domingo 28 Junio <b>Salida: </b>Sabado 11 Julio 2020</p>
                             <p><b>Llegada: </b>Domingo 26 Julio <b>Salida: </b>Sábado 8 Agosto 2020</p>
                           </div>
                           <div class="clash-card__unit-stats clash-card__unit-stats--archer clearfix">
                             <div class="one-third">
                               <div class="stat-value">Edad:</div>
                               <div class="stat">14 a 18  </div>
                             </div>
                             <div class="one-third">
                               <div class="stat-value">Nivel de inglés:</div>
                               <div class="stat">IELTS 4.5+ / intermedio</div>
                             </div>
                             <div class="one-third no-border">
                               <div class="stat-value">Costo:</div>
                               <div class="stat">  £2,700*  </div>
                             </div>
                           </div>

                         </div> <!-- end clash-card barbarian-->
                         </div> <!-- end wrapper -->

                      </div> <!-- end col waper-->
                      <div class="col-xs-2 col-md-6  ml-auto">
                       <div class="wrapper">
                         <div class="clash-card giant">
                           <div class="clash-card__image clash-card__image--giant">
                             <img class="imagencard" src="<?=base_url('resources/assets/Informativa/images/arts_teatromusical.jpg');?>"   alt="barbarian" />
                           </div>
                           <div class="clash-card__level clash-card__level--giant">Teatro musical</div>
                           <div class="clash-card__unit-description">
                             En este curso te enseñarán profesionales en el teatro con créditos en Londres y Nueva York.
                           </div>
                             <p class="where">¿Cuándo?</p>
                           <div class="clash-card__unit-description">
                             <p><b>Llegada: </b>Domingo 28 Junio <b>Salida: </b>Domingo 12 Julio 2020</p>
                             <p><b>Llegada: </b>Domingo 26 Julio <b>Salida: </b>Domingo 9 Agosto 2020</p>
                           </div>
                           <div class="clash-card__unit-stats clash-card__unit-stats--giant clearfix">
                             <div class="one-third">
                               <div class="stat-value">Edad:</div>
                               <div class="stat">14+ </div>
                             </div>
                             <div class="one-third">
                               <div class="stat-value">Nivel de inglés:</div>
                               <div class="stat">IELTS 4.5+ / intermedio</div>
                             </div>
                             <div class="one-third no-border">
                               <div class="stat-value">Costo:</div>
                               <div class="stat"> £2,700* </div>
                             </div>
                           </div>

                         </div> <!-- end clash-card barbarian-->
                         </div> <!-- end wrapper -->

                      </div> <!-- end col waper-->
                      <div class="col-xs-2 col-md-6  ml-auto">
                       <div class="wrapper">
                         <div class="clash-card barbarian">
                           <div class="clash-card__image clash-card__image--barbarian">
                             <img class="imagencard" src="<?=base_url('resources/assets/Informativa/images/arts_actuacion.jpg');?>"   alt="barbarian" />
                           </div>
                           <div class="clash-card__level clash-card__level--barbarian">Actuación</div>
                           <div class="clash-card__unit-description">
                             Este curso es impartido por actores profesionales que te enseñarán a desarrollar tu creatividad y confianza.
                           </div>
                             <p class="where">¿Cuándo?</p>
                           <div class="clash-card__unit-description">
                             <p><b>Llegada: </b>Domingo 28 June <b>Salida: </b>Domingo 12 Julio 2020</p>
                             <p><b>Llegada: </b>Domingo 12 Julio <b>Salida: </b>Domingo 26 Julio 2020</p>
                             <p><b>Llegada: </b>Domingo 26 Julio 2020 <b>Salida: </b>Domingo 9 Agosto 2020</p>
                           </div>
                           <div class="clash-card__unit-stats clash-card__unit-stats--barbarian clearfix">
                             <div class="one-third">
                               <div class="stat-value">Edad:</div>
                               <div class="stat"> 14 a 18 </div>
                             </div>
                             <div class="one-third">
                               <div class="stat-value">Nivel de inglés:</div>
                               <div class="stat">IELTS 4.5+ / intermedio</div>
                             </div>
                             <div class="one-third no-border">
                               <div class="stat-value">Costo:</div>
                               <div class="stat"> £2,700* </div>
                             </div>
                           </div>

                         </div> <!-- end clash-card barbarian-->
                         </div> <!-- end wrapper -->

                      </div> <!-- end col waper-->
                      <div class="col-xs-2 col-md-6  ml-auto">
                       <div class="wrapper">
                         <div class="clash-card wizard">
                           <div class="clash-card__image clash-card__image--wizard">
                             <img class="imagencard" src="<?=base_url('resources/assets/Informativa/images/arts_precentacionmusical.jpg');?>"   alt="barbarian" />
                           </div>
                           <div class="clash-card__level clash-card__level--wizard">Presentación Musical</div>
                           <div class="clash-card__unit-description">
                             En este curso aprederás con profesionales sobre técnicas instrumentales y vocales.
                           </div>
                             <p class="where">¿Cuándo?</p>
                           <div class="clash-card__unit-description">
                             <p><b>Llegada: </b>Domingo 19 Julio  <b>Salida: </b>Domingo 26 Julio 2020</p>
                           </div>
                           <div class="clash-card__unit-stats clash-card__unit-stats--wizard clearfix">
                             <div class="one-third">
                               <div class="stat-value">Edad:</div>
                               <div class="stat">14 a 18  </div>
                             </div>
                             <div class="one-third">
                               <div class="stat-value">Nivel de inglés:</div>
                               <div class="stat">IELTS 4.5+ / intermedio</div>
                             </div>
                             <div class="one-third no-border">
                               <div class="stat-value">Costo:</div>
                               <div class="stat"> £1,450*  </div>
                             </div>
                           </div>
                         </div> <!-- end clash-card barbarian-->
                         </div> <!-- end wrapper -->

                      </div> <!-- end col waper-->
                      <div class="col-xs-2 col-md-6  ml-auto">
                       <div class="wrapper">
                         <div class="clash-card goblin">
                           <div class="clash-card__image clash-card__image--goblin">
                             <img class="imagencard" src="<?=base_url('resources/assets/Informativa/images/arts_precentacionmusical.jpg');?>"   alt="barbarian" />
                           </div>
                           <div class="clash-card__level clash-card__level--goblin">Producción Musical</div>
                           <div class="clash-card__unit-description">
                             Tendrás clases intensivas utilizando equipo de producción profesional, aprendiendo técnicas y elaborando tu propia música.
                           </div>
                             <p class="where">¿Cuándo?</p>
                           <div class="clash-card__unit-description">
                             <p><b>Llegada: </b>Domingo 19 Julio  <b>Salida: </b>Domingo 26 Julio 2020</p>
                           </div>
                           <div class="clash-card__unit-stats clash-card__unit-stats--goblin clearfix">
                             <div class="one-third">
                               <div class="stat-value">Edad:</div>
                               <div class="stat">14+ </div>
                             </div>
                             <div class="one-third">
                               <div class="stat-value">Nivel de inglés:</div>
                               <div class="stat"> IELTS 4.5+ / intermedio</div>
                             </div>
                             <div class="one-third no-border">
                               <div class="stat-value">Costo:</div>
                               <div class="stat"> £2,700* </div>
                             </div>
                           </div>

                         </div> <!-- end clash-card barbarian-->
                         </div> <!-- end wrapper -->

                      </div> <!-- end col waper-->
                      <div class="col-xs-2 col-md-6  ml-auto">
                       <div class="wrapper">
                         <div class="clash-card archer">
                           <div class="clash-card__image clash-card__image--archer">
                             <img class="imagencard" src="<?=base_url('resources/assets/Informativa/images/arts_produccionmusical.jpg');?>"   alt="barbarian" />
                           </div>
                           <div class="clash-card__level clash-card__level--archer">Fotografía</div>
                           <div class="clash-card__unit-description">
                             Tendrás a Cambridge de inspiración para crear un gran portafolio.
                           </div>
                             <p class="where">¿Cuándo?</p>
                           <div class="clash-card__unit-description">
                             <p><b>Llegada: </b>Domingo 28 Junio <b>Salida: </b>Domingo 5 Julio 2020</p>
                             <p><b>Llegada: </b>Domingo 5 Julio <b>Salida: </b>Domingo 12 Julio 2020</p>
                             <p><b>Llegada: </b>Domingo 12 Julio <b>Salida: </b>Domingo 19 Julio 2020</p>
                             <p><b>Llegada: </b>Domingo 26 Julio 2020 <b>Salida: </b>Domingo 2 Agosto 2020</p>
                           </div>
                           <div class="clash-card__unit-stats clash-card__unit-stats--archer clearfix">
                             <div class="one-third">
                               <div class="stat-value">Edad:</div>
                               <div class="stat">14 a 18</div>
                             </div>
                             <div class="one-third">
                               <div class="stat-value">Nivel de inglés:</div>
                               <div class="stat">IELTS 4.5+ / intermedio</div>
                             </div>
                             <div class="one-third no-border">
                               <div class="stat-value">Costo:</div>
                               <div class="stat">  £1,450*  </div>
                             </div>
                           </div>

                         </div> <!-- end clash-card barbarian-->
                         </div> <!-- end wrapper -->

                      </div> <!-- end col waper-->
                      <div class="col-xs-2 col-md-6  ml-auto">
                       <div class="wrapper">
                         <div class="clash-card giant">
                           <div class="clash-card__image clash-card__image--giant">
                             <img class="imagencard" src="<?=base_url('resources/assets/Informativa/images/arts_moda.jpg');?>"   alt="barbarian" />
                           </div>
                           <div class="clash-card__level clash-card__level--giant">Comunicación de Moda</div>
                           <div class="clash-card__unit-description">
                             Te introducirá a las áreas clave de la comunicación visual dirigida a la industria de la moda y marcas.
                           </div>
                             <p class="where">¿Cuándo?</p>
                           <div class="clash-card__unit-description">
                             <p><b>Llegada: </b>Domingo 5 Julio <b>Salida: </b>Domingo 12 Julio 2020</p>
                           </div>
                           <div class="clash-card__unit-stats clash-card__unit-stats--giant clearfix">
                             <div class="one-third">
                               <div class="stat-value">Edad:</div>
                               <div class="stat">14+ </div>
                             </div>
                             <div class="one-third">
                               <div class="stat-value">Nivel de inglés:</div>
                               <div class="stat">IELTS 4.5+ / intermedio</div>
                             </div>
                             <div class="one-third no-border">
                               <div class="stat-value">Costo:</div>
                               <div class="stat"> £1,450* </div>
                             </div>
                           </div>

                         </div> <!-- end clash-card barbarian-->
                         </div> <!-- end wrapper -->

                      </div> <!-- end col waper-->
                      <div class="col-xs-2 col-md-6  ml-auto">
                       <div class="wrapper">
                         <div class="clash-card barbarian">
                           <div class="clash-card__image clash-card__image--barbarian">
                             <img class="imagencard" src="<?=base_url('resources/assets/Informativa/images/arts_estilismomoda.jpg');?>"   alt="barbarian" />
                           </div>
                           <div class="clash-card__level clash-card__level--barbarian">Estilismo de Moda</div>
                           <div class="clash-card__unit-description">
                             En este curso investigaras y aprenderas como el estilismo de la moda es una forma moderna de contar una historia.
                           </div>
                             <p class="where">¿Cuándo?</p>
                           <div class="clash-card__unit-description">
                             <p><b>Llegada: </b>Domingo 5 Julio <b>Salida: </b>Domingo 12 Julio 2020</p>
                           </div>
                           <div class="clash-card__unit-stats clash-card__unit-stats--barbarian clearfix">
                             <div class="one-third">
                               <div class="stat-value">Edad:</div>
                               <div class="stat"> 14 a 18 </div>
                             </div>
                             <div class="one-third">
                               <div class="stat-value">Nivel de inglés:</div>
                               <div class="stat">IELTS 4.5+ / intermedio</div>
                             </div>
                             <div class="one-third no-border">
                               <div class="stat-value">Costo:</div>
                               <div class="stat"> £1,450* </div>
                             </div>
                           </div>

                         </div> <!-- end clash-card barbarian-->
                         </div> <!-- end wrapper -->

                      </div> <!-- end col waper-->
                      <div class="col-xs-2 col-md-6  ml-auto">
                       <div class="wrapper">
                         <div class="clash-card wizard">
                           <div class="clash-card__image clash-card__image--wizard">
                             <img class="imagencard" src="<?=base_url('resources/assets/Informativa/images/arts_pinturadivujo.jpg');?>"   alt="barbarian" />
                           </div>
                           <div class="clash-card__level clash-card__level--wizard">Pintura y dibujo</div>
                           <div class="clash-card__unit-description">
                             Utilizando una amplia gama de dibujo en diferentes materiales explotarás pintura contemporánea, usando Cambridge como inspiración.
                           </div>
                             <p class="where">¿Cuándo?</p>
                           <div class="clash-card__unit-description">
                             <p><b>Llegada: </b>Domingo 28 Junio  <b>Salida: </b>Domingo 5 Julio 2020</p>
                             <p><b>Llegada: </b>Domingo 12 Julio  <b>Salida: </b>Domingo 19 Julio 2020</p>
                             <p><b>Llegada: </b>Domingo 26 Julio 2020  <b>Salida: </b> Domingo 2 Agosto</p>
                           </div>
                           <div class="clash-card__unit-stats clash-card__unit-stats--wizard clearfix">
                             <div class="one-third">
                               <div class="stat-value">Edad:</div>
                               <div class="stat">14 a 18 </div>
                             </div>
                             <div class="one-third">
                               <div class="stat-value">Nivel de inglés:</div>
                               <div class="stat">IELTS 4.5+ / intermedio</div>
                             </div>
                             <div class="one-third no-border">
                               <div class="stat-value">Costo:</div>
                               <div class="stat"> £1,450* </div>
                             </div>
                           </div>
                         </div> <!-- end clash-card barbarian-->
                         </div> <!-- end wrapper -->

                      </div> <!-- end col waper-->
                      <div class="col-xs-2 col-md-6  ml-auto">
                       <div class="wrapper">
                         <div class="clash-card goblin">
                           <div class="clash-card__image clash-card__image--goblin">
                             <img class="imagencard" src="<?=base_url('resources/assets/Informativa/images/arts_graficosilustration.jpg');?>"   alt="barbarian" />
                           </div>
                           <div class="clash-card__level clash-card__level--goblin">Gráficos e Ilustración</div>
                           <div class="clash-card__unit-description">
                             Utilizando técnicas tradicionales y digitales explorarán el diseño de comunicación contemporánea y la ilustración narrativa.
                           </div>
                             <p class="where">¿Cuándo?</p>
                           <div class="clash-card__unit-description">
                             <p><b>Llegada: </b>Domingo 5 Julio  <b>Salida: </b>Domingo 12 Julio 2020</p>
                           </div>
                           <div class="clash-card__unit-stats clash-card__unit-stats--goblin clearfix">
                             <div class="one-third">
                               <div class="stat-value">Edad:</div>
                               <div class="stat">14+ </div>
                             </div>
                             <div class="one-third">
                               <div class="stat-value">Nivel de inglés:</div>
                               <div class="stat">IELTS 4.5+ / intermedio</div>
                             </div>
                             <div class="one-third no-border">
                               <div class="stat-value">Costo:</div>
                               <div class="stat"> £1,450* </div>
                             </div>
                           </div>

                         </div> <!-- end clash-card barbarian-->
                         </div> <!-- end wrapper -->

                      </div> <!-- end col waper-->
                      <div class="col-xs-2 col-md-6  ml-auto">
                       <div class="wrapper">
                         <div class="clash-card archer">
                           <div class="clash-card__image clash-card__image--archer">
                             <img class="imagencard" src="<?=base_url('resources/assets/Informativa/images/arts_dise3D.jpg');?>"   alt="barbarian" />
                           </div>
                           <div class="clash-card__level clash-card__level--archer">Diseño 3D</div>
                           <div class="clash-card__unit-description">
                             Te dará la oportunidad de explorar diferentes materiales icónicos utilizados en el diseño de productos.
                           </div>
                             <p class="where">¿Cuándo?</p>
                           <div class="clash-card__unit-description">
                             <p><b>Llegada: </b>Domingo 2 Agosto<b>Salida: </b>Domingo 9 Agosto 2020</p>
                           </div>
                           <div class="clash-card__unit-stats clash-card__unit-stats--archer clearfix">
                             <div class="one-third">
                               <div class="stat-value">Edad:</div>
                               <div class="stat">14 a 18</div>
                             </div>
                             <div class="one-third">
                               <div class="stat-value">Nivel de inglés:</div>
                               <div class="stat">IELTS 4.5+ / intermedio</div>
                             </div>
                             <div class="one-third no-border">
                               <div class="stat-value">Costo:</div>
                               <div class="stat"> £1,450* </div>
                             </div>
                           </div>

                         </div> <!-- end clash-card barbarian-->
                         </div> <!-- end wrapper -->

                      </div> <!-- end col waper-->
                      <div class="col-xs-2 col-md-6  ml-auto">
                       <div class="wrapper">
                         <div class="clash-card giant">
                           <div class="clash-card__image clash-card__image--giant">
                             <img class="imagencard" src="<?=base_url('resources/assets/Informativa/images/arts_animation.jpg');?>"   alt="barbarian" />
                           </div>
                           <div class="clash-card__level clash-card__level--giant">Animación</div>
                           <div class="clash-card__unit-description">
                             Aprenderás a desarrollar técnicas tradicionales y digitales utilizadas en la animación a computadora.
                           </div>
                             <p class="where">¿Cuándo?</p>
                           <div class="clash-card__unit-description">
                             <p><b>Llegada: </b>Domingo 12 Julio <b>Salida: </b>Domingo 19 Julio 2020</p>
                           </div>
                           <div class="clash-card__unit-stats clash-card__unit-stats--giant clearfix">
                             <div class="one-third">
                               <div class="stat-value">Edad:</div>
                               <div class="stat">14 a 18 </div>
                             </div>
                             <div class="one-third">
                               <div class="stat-value">Nivel de inglés:</div>
                               <div class="stat">IELTS 4.5+ / intermedio</div>
                             </div>
                             <div class="one-third no-border">
                               <div class="stat-value">Costo:</div>
                               <div class="stat"> £1,450* </div>
                             </div>
                           </div>

                         </div> <!-- end clash-card barbarian-->
                         </div> <!-- end wrapper -->

                      </div> <!-- end col waper-->
                      <div class="col-xs-2 col-md-6  ml-auto">
                       <div class="wrapper">
                         <div class="clash-card barbarian">
                           <div class="clash-card__image clash-card__image--barbarian">
                             <img class="imagencard" src="<?=base_url('resources/assets/Informativa/images/arts_videojuegos.jpg');?>"   alt="barbarian" />
                           </div>
                           <div class="clash-card__level clash-card__level--barbarian">Diseño de Videojuegos</div>
                           <div class="clash-card__unit-description">
                             Este curso explora tu creatividad y técnica creando tu propio videojuego.
                           </div>
                             <p class="where">¿Cuándo?</p>
                           <div class="clash-card__unit-description">
                             <p><b>Llegada: </b>Domingo 19 Julio<b>Salida: </b>Domingo 26 Julio 2020</p>
                           </div>
                           <div class="clash-card__unit-stats clash-card__unit-stats--barbarian clearfix">
                             <div class="one-third">
                               <div class="stat-value">Edad:</div>
                               <div class="stat"> 14+ </div>
                             </div>
                             <div class="one-third">
                               <div class="stat-value">Nivel de inglés:</div>
                               <div class="stat">IELTS 4.5+ / intermedio</div>
                             </div>
                             <div class="one-third no-border">
                               <div class="stat-value">Costo:</div>
                               <div class="stat"> £1,450* </div>
                             </div>
                           </div>

                         </div> <!-- end clash-card barbarian-->
                         </div> <!-- end wrapper -->

                      </div> <!-- end col waper-->
                      <div class="col-xs-2 col-md-6  ml-auto">
                       <div class="wrapper">
                         <div class="clash-card giant">
                           <div class="clash-card__image clash-card__image--giant">
                             <img class="imagencard" src="<?=base_url('resources/assets/Informativa/images/bristol_arq.png');?>"   alt="barbarian" />
                           </div>
                           <div class="clash-card__unit-description">
                              *El precio incluye hospedaje, tres comidas al día, costo de registro y transferencias de aeropuerto. Hay un costo extra de £75 que aplica para los que soliciten asistencia para viajes de menores sin compañía.
                           </div>


                           <div class="clash-card__unit-stats clash-card__unit-stats--giant clearfix">
                             <div class="one-third">
                               <div class="stat-value"></div>
                               <div class="stat">!</div>

                             </div>

                             <div class="one-third">
                               <div class="stat-value"></div>
                               <div class="stat"></div>

                             </div>

                             <div class="one-third no-border">
                               <div class="stat-value"></div>
                               <div class="stat"> </div>

                             </div>

                           </div>

                         </div> <!-- end clash-card barbarian-->
                         </div> <!-- end wrapper -->

                      </div> <!-- end col waper-->


                 </div> <!-- end row two -->


              </div><!-- end slide continer-->
            </div>
            <div class="row">
              <div class="header_btn dark_btn" style="display: flex;justify-content: center;">
               <a style="width: 100%;" href="../Login" > Me interesa</a>
              </div>
            </div>
          </div>
          <div class="row">
            <hr>
          </div>
          <div class="youtube-player" data-id="TLGYTqu34i0"></div>
        </div>
        </div>
          <div class="bottom-strip"></div>
      </div>

</div>

<div class="modal fade text-center py-5 subscribeModal-lg"  id="bristolVeranoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document" >
      <div class="modal-content">
          <!-- <div class="top-strip"></div> -->
        <div class="modal-header">
          <div class="container-fluid">
            <div class="row" style="margin-bottom: 10px;">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: red">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="row">
              <div class="col-md-4 d-none d-lg-block d-xl-block"  style="margin-top: 30px;"> <img src="<?=base_url('resources/assets/Informativa/images/v_bristol.png');?>" class="rounded mx-auto d-block" alt="..."></div>
              <div class="col-md-7 ml-auto d-none d-lg-block d-xl-block"><img  src="<?=base_url('resources/assets/Informativa/images/luu_bristol.jpg');?>" alt=""></div>
            </div>
          </div>
          <!-- <a class="h2" href="https://www.fiverr.com/sunlimetech/design-and-fix-your-bootstrap-4-issues" target="_blank"> </a>

          <h3 class="col-md-4 "></h3> -->

        </div>
        <div class="modal-body">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-4"><b>Fundación:</b> </div>
              <div class="col-md-4 "> 	1876 .</div>
            </div>
            <div class="row">
              <div class="col-md-4"><b>Ubicación:</b> </div>
              <div class="col-md-4 "> <a href="https://goo.gl/maps/EHbVwH1seTykkR6L8" target="_blank" >Senate House, Tyndall Ave, Bristol BS8 1TH, Reino Unido </a> </div>
            </div>
            <div class="row">
              <hr>

            </div>
            <div class="row">

              <div class="slide-container ">

                  <div class="row">
                    <div class="col-xs-2 col-md-6 ">
                     <div class="wrapper">
                       <div class="clash-card barbarian">
                         <div class="clash-card__image clash-card__image--barbarian">
                           <img class="imagencard" src="<?=base_url('resources/assets/Informativa/images/bristol_arqStop.png');?>"   alt="barbarian" />
                         </div>
                         <div class="clash-card__level clash-card__level--barbarian">Arqueología</div>
                         <div class="clash-card__unit-name">Incluye:</div>
                         <div class="clash-card__unit-description">
                          <ul>
                            <li>- Inscripción, materiales de excavación, libro.</li>
                            <li>- Transporte al sitio de excavación.</li>
                            <li>- Alojamiento en habitación individual en residencia de la universidad de Bristol.</li>
                            <li>- Desayuno y cenas. Lunch en días de excavación.</li>
                            <li>- Viajes de fin de semana.</li>
                            <li>Traslado de llegada y salida dentro de Bristol, estación de autobús o estación de tren Temple Meads.</li>
                           </ul>
                         </div>

                         <div class="clash-card__unit-stats clash-card__unit-stats--barbarian clearfix">
                           <div class="one-third">
                             <div class="stat-value">Requisitos</div>
                             <div class="stat">IELTS 6.5 /  TOEFL IBT 85</div>

                           </div>

                           <div class="one-third">
                             <div class="stat-value">Costo </div>
                             <div class="stat">£2,745</div>

                           </div>

                           <div class="one-third no-border">
                             <div class="stat-value">Cuándo?</div>
                             <div class="stat">5 de Julio 2020 – 18  de Julio 2020</div>

                           </div>

                         </div>

                       </div> <!-- end clash-card barbarian-->
                       </div> <!-- end wrapper -->
                    </div> <!-- end col waper-->
                    <div class="col-xs-2 col-md-6  ml-auto">
                     <div class="wrapper">
                       <div class="clash-card wizard">
                         <div class="clash-card__image clash-card__image--wizard">
                           <img class="imagencard" src="<?=base_url('resources/assets/Informativa/images/br_quimica.jpg');?>"   alt="barbarian" />
                         </div>
                         <div class="clash-card__level clash-card__level--wizard">Química Avanzada</div>
                         <p>Para estudiantes de licenciatura</p>
                         <div class="clash-card__unit-name">Incluye:</div>
                         <div class="clash-card__unit-description">
                          <ul>
                            <li>- Inscripción, laboratorio y costos de equipamiento..</li>
                            <li>- Alojamiento en habitación individual en residencia de la universidad de Bristol.</li>
                            <li>- Desayuno y cenas. </li>
                            <li>- Viajes de fin de semana.</li>
                            <li>- Traslado de llegada y salida dentro de Bristol, estación de autobús o estación de tren Temple Meads.</li>
                           </ul>
                         </div>

                         <div class="clash-card__unit-stats clash-card__unit-stats--wizard clearfix">
                           <div class="one-third">
                             <div class="stat-value">Requisitos</div>
                             <div class="stat">IELTS 6.5 /  TOEFL IBT 88</div>

                           </div>

                           <div class="one-third">
                             <div class="stat-value">Costo </div>
                             <div class="stat">£3,350</div>

                           </div>

                           <div class="one-third no-border">
                             <div class="stat-value">¿Cuándo?</div>
                             <div class="stat">18 Julio 2020 - 08 Agosto 2020</div>

                           </div>

                         </div>

                       </div> <!-- end clash-card barbarian-->
                       </div> <!-- end wrapper -->

                    </div> <!-- end col waper-->
                    <div class="col-xs-2 col-md-6  ml-auto">
                     <div class="wrapper">
                       <div class="clash-card goblin">
                         <div class="clash-card__image clash-card__image--goblin">
                           <img class="imagencard" src="<?=base_url('resources/assets/Informativa/images/br_veterinaria.jpg');?>"   alt="barbarian" />
                         </div>
                         <div class="clash-card__level clash-card__level--goblin">Escuela de Veterinaria</div>
                         <p>Abrierto para estudiantes de 16 años que cursan la preparatoria.</p>
                         <div class="clash-card__unit-name">Incluye:</div>
                         <div class="clash-card__unit-description">
                          <ul>
                            <li>- Inscripción y materiales necesarios para el curso.</li>
                            <li>- Viaje hacia y desde nuestras actividades en nuestro campus Langford.</li>
                            <li>- Alojamiento en habitación individual en residencia de la universidad de Bristol.</li>
                            <li>- Desayuno y cenas. Lunch en días de excavación.</li>
                            <li>- Emocionante programa social que incluye viajes de fin de semana y comidas.</li>
                            <li>- Traslado de aeropuerto desde Heathrow o aeropuerto de Bristol y traslados dentro de la ciudad de Bristol el domingo 19 de julio de 2020 y el sábado 1 de agosto de 2020.</li>
                           </ul>
                         </div>

                         <div class="clash-card__unit-stats clash-card__unit-stats--goblin clearfix">
                           <div class="one-third">
                             <div class="stat-value">Requisitos</div>
                             <div class="stat">IELTS 7.0 /  TOEFL IBT 95</div>

                           </div>

                           <div class="one-third">
                             <div class="stat-value">Costo </div>
                             <div class="stat">£2,395</div>

                           </div>

                           <div class="one-third no-border">
                             <div class="stat-value">¿Cuándo?</div>
                             <div class="stat">19 Julio 2020 - 1 Agosto 2020</div>

                           </div>

                         </div>

                       </div> <!-- end clash-card barbarian-->
                       </div> <!-- end wrapper -->

                    </div> <!-- end col waper-->
                    <div class="col-xs-2 col-md-6  ml-auto">
                     <div class="wrapper">
                       <div class="clash-card archer">
                         <div class="clash-card__image clash-card__image--archer">
                           <img class="imagencard" src="<?=base_url('resources/assets/Informativa/images/br_stm_pro.jpg');?>"   alt="barbarian" />
                         </div>
                         <div class="clash-card__level clash-card__level--archer">Proyectos de investigación STEM</div>
                         <div class="clash-card__unit-name">Incluye:</div>
                         <div class="clash-card__unit-description">
                          <ul>
                            <li>- Inscripción, materiales de laboratorio, libro.</li>
                            <li>- Inscripción, materiales de laboratorio, libro.</li>
                            <li>- Desayuno y cenas. Lunch en días de excursión.</li>
                            <li>- Viajes de fin de semana.</li>
                            <li>- Traslado de llegada y salida dentro de Bristol, estación de autobús o estación de tren Temple Meads.</li>
                           </ul>
                         </div>

                         <div class="clash-card__unit-stats clash-card__unit-stats--archer clearfix">
                           <div class="one-third">
                             <div class="stat-value">Requisitos</div>
                             <div class="stat">IELTS 6.5 /  TOEFL IBT 85</div>

                           </div>

                           <div class="one-third">
                             <div class="stat-value">Costo </div>
                             <div class="stat">£5,950 incluye  alojamiento</div>
                             <div class="stat">£4,100 sin alojamiento</div>

                           </div>

                           <div class="one-third no-border">
                             <div class="stat-value">¿Cuándo?</div>
                             <div class="stat">19 Julio 2020 - 29 Agosto 2020</div>

                           </div>

                         </div>

                       </div> <!-- end clash-card barbarian-->
                       </div> <!-- end wrapper -->

                    </div> <!-- end col waper-->
                    <div class="col-xs-2 col-md-6  ml-auto">
                     <div class="wrapper">
                       <div class="clash-card giant">
                         <div class="clash-card__image clash-card__image--giant">
                           <img class="imagencard" src="<?=base_url('resources/assets/Informativa/images/br_biomedica.jpg');?>"   alt="barbarian" />
                         </div>
                         <div class="clash-card__level clash-card__level--giant">Laboratorio de Biomedicina</div>
                         <p>Para estudiantes de licenciatura</p>
                         <div class="clash-card__unit-name">Incluye:</div>
                         <div class="clash-card__unit-description">
                          <ul>
                            <li>- Inscripción, laboratorio, materiales y libro.</li>
                            <li>- Alojamiento en habitación individual en residencia de la universidad de Bristol.</li>
                            <li>- Desayuno y cenas.</li>
                            <li>- Viajes de fin de semana.</li>
                            <li>- Traslado de llegada y salida dentro de Bristol, estación de autobús o estación de tren Temple Meads.</li>
                           </ul>
                         </div>

                         <div class="clash-card__unit-stats clash-card__unit-stats--giant clearfix">
                           <div class="one-third">
                             <div class="stat-value">Requisitos</div>
                             <div class="stat">IELTS 6.5 /  TOEFL IBT 85</div>

                           </div>

                           <div class="one-third">
                             <div class="stat-value">Costo </div>
                             <div class="stat">£2,995</div>

                           </div>

                           <div class="one-third no-border">
                             <div class="stat-value">Cuándo?</div>
                             <div class="stat"> 18 Julio 2020  –  8 Agosto  2020</div>

                           </div>

                         </div>

                       </div> <!-- end clash-card barbarian-->
                       </div> <!-- end wrapper -->

                    </div> <!-- end col waper-->
                    <div class="col-xs-2 col-md-6  ml-auto">
                     <div class="wrapper">
                       <div class="clash-card barbarian">
                         <div class="clash-card__image clash-card__image--barbarian">
                           <img class="imagencard" src="<?=base_url('resources/assets/Informativa/images/br_inova.jpg');?>"   alt="barbarian" />
                         </div>
                         <div class="clash-card__level clash-card__level--barbarian">Innovación y Emprendimiento</div>
                         <p>Para estudiantes de licenciatura</p>
                         <div class="clash-card__unit-name">Incluye:</div>
                         <div class="clash-card__unit-description">
                          <ul>
                            <li>- Inscripción, materiales, libro.</li>
                            <li>- Alojamiento en habitación individual en residencia de la universidad de Bristol.</li>
                            <li>- Desayunos y Cenas.</li>
                            <li>- Viajes en fin de semana.</li>
                            <li>- Traslado de llegada y salida dentro de Bristol, estación de autobús o estación de tren Temple Meads.</li>
                           </ul>
                         </div>

                         <div class="clash-card__unit-stats clash-card__unit-stats--barbarian clearfix">
                           <div class="one-third">
                             <div class="stat-value">Requisitos</div>
                             <div class="stat"> IELTS 6.5 /  TOEFL IBT 88 </div>

                           </div>

                           <div class="one-third">
                             <div class="stat-value">Costo </div>
                             <div class="stat">£2,995</div>

                           </div>

                           <div class="one-third no-border">
                             <div class="stat-value">Cuándo?</div>
                             <div class="stat"> 19 Julio 2020 - 8 Agosto 2020</div>

                           </div>

                         </div>

                       </div> <!-- end clash-card barbarian-->
                       </div> <!-- end wrapper -->

                    </div> <!-- end col waper-->
                    <div class="col-xs-2 col-md-6  ml-auto">
                     <div class="wrapper">
                       <div class="clash-card wizard">
                         <div class="clash-card__image clash-card__image--wizard">
                           <img class="imagencard" src="<?=base_url('resources/assets/Informativa/images/br_activismo.jpg');?>"   alt="barbarian" />
                         </div>
                         <div class="clash-card__level clash-card__level--wizard">Arte, Activismo y Justicia Social</div>
                         <p>Para estudiantes de licenciatura</p>
                         <div class="clash-card__unit-name">Incluye:</div>
                         <div class="clash-card__unit-description">
                          <ul>
                            <li>- Inscripción, participación en el taller, libro.</li>
                            <li>- Alojamiento en habitación individual en residencia de la universidad de Bristol.</li>
                            <li>- Todos los alimentos.</li>
                            <li>- Programa social que combina con tus intereses.</li>
                            <li>- Traslado de llegada y salida dentro de Bristol, estación de autobús o estación de tren Temple Meads.</li>
                           </ul>
                         </div>

                         <div class="clash-card__unit-stats clash-card__unit-stats--wizard clearfix">
                           <div class="one-third">
                             <div class="stat-value">Requisitos</div>
                             <div class="stat"> IELTS 6.5 /  TOEFL IBT 88 </div>

                           </div>

                           <div class="one-third">
                             <div class="stat-value">Costo </div>
                             <div class="stat">£2,650</div>

                           </div>

                           <div class="one-third no-border">
                             <div class="stat-value">Cuándo?</div>
                             <div class="stat"> 7 Junio 2020 - 27 Junio 2020</div>

                           </div>

                         </div>

                       </div> <!-- end clash-card barbarian-->
                       </div> <!-- end wrapper -->

                    </div> <!-- end col waper-->
                    <div class="col-xs-2 col-md-6  ml-auto">
                     <div class="wrapper">
                       <div class="clash-card giant">
                         <div class="clash-card__image clash-card__image--giant">
                           <img class="imagencard" src="<?=base_url('resources/assets/Informativa/images/bristol_Logo.png');?>"   alt="barbarian" />
                         </div>
                         <div class="clash-card__level clash-card__level--giant">No Incluye</div>
                         <div class="clash-card__unit-description">
                          <ul>
                            <li>- Viaje internacional a Reino Unido.</li>
                            <li>- Viaje de tu aeropuerto hacia la ciudad de Bristol.</li>
                            <li>- Traslados desde estación de autobús o tren en Bristol fuera de los días agendados.</li>
                            <li>- Seguro de viaje.</li>
                            <li>- Costos de visa, solo si aplica.</li>
                            <li>- Dinero para gastos personales.</li>
                           </ul>
                         </div>

                         <div class="clash-card__unit-stats clash-card__unit-stats--giant clearfix">
                           <div class="one-third">
                             <div class="stat-value"></div>
                             <div class="stat"></div>

                           </div>

                           <div class="one-third">
                             <div class="stat-value"></div>
                             <div class="stat"></div>

                           </div>

                           <div class="one-third no-border">
                             <div class="stat-value"></div>
                             <div class="stat"> </div>

                           </div>

                         </div>

                       </div> <!-- end clash-card barbarian-->
                       </div> <!-- end wrapper -->

                    </div> <!-- end col waper-->


               </div> <!-- end row two -->


            </div><!-- end slide continer-->
            </div>

            <div class="row">
              <hr>
                <div class="col-md-12 " style="align:center"><b>Edades</b></div>
                <div class="col-md-12"><li>Junior 7-13.</li></div>
                <div class="col-md-12"><li>Senior 14 - 17.</li></div>
                <div class="col-md-12"><li>Universitario 18-25.</li></div>

            </div>
            <div class="row">
              <hr>
                <div class="col-md-12 " style="align:center"><b>Tipo de curso</b></div>
                <div class="col-md-12"><li>Academico.</li></div>
                <div class="col-md-12"><li>Inglés.</li></div>

            </div>

            <div class="row">
              <hr>

            </div>
            <div class="list-group">
              <button type="button" class="list-group-item list-group-item-action list-group-item-success ">
                Alojamiento
              </button>
              <button type="button" class="list-group-item list-group-item-action" id="Odont" >Residencial.</button>

            </div>

            <div class="row">
              <hr>
            </div>
            <div class="row">

              <div class="col-md-12"><li>La Universidad de Bristol invita a estudiantes internacionales a unirse a nuestra gama dinámica e inmersiva de programas de verano.</li></div>
              <div class="col-md-12"><li> Obtenga experiencia académica y profesional y explore Bristol, una de las ciudades más bellas y vibrantes del Reino Unido.</li></div>

              <div class="col-md-12 ">

              <div class="header_btn dark_btn" style="display: flex;justify-content: center;">
                    <a style="width: 100%;" href="../Login" > Me interesa</a>
                </div>
                </div>

            </div>
          </div>
          <div class="row">
            <hr>
          </div>
          <div class="youtube-player" data-id="jhX3YlGnDIc"></div>

          <!--<div class="embed-responsive embed-responsive-21by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/jhX3YlGnDIc"></iframe>
          </div>-->

          <hr>
        </div>

        </div>
          <div class="bottom-strip"></div>
      </div>
</div>

<div class="modal fade text-center py-5 subscribeModal-lg "  id="intoVeranoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <!-- <div class="top-strip"></div> -->
      <div class="modal-header">
        <div class="container-fluid">
        <div class="row" style="margin-bottom: 10px;">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: red">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
          <div class="row">
            <div class="col-md-4 d-none d-lg-block d-xl-block"  style="margin-top: -1px;"> <img src="<?=base_url('resources/assets/Informativa/images/prepa_into_logo.jpg');?>" class="rounded mx-auto d-block" alt="..."></div>
            <div class="col-md-7 ml-auto d-none d-lg-block d-xl-block"><img  src="<?=base_url('resources/assets/Informativa/images/prepa_nto.png');?>" alt=""></div>
          </div>
        </div>
        <!-- <a class="h2" href="https://www.fiverr.com/sunlimetech/design-and-fix-your-bootstrap-4-issues" target="_blank"> </a>

        <h3 class="col-md-4 "></h3> -->

      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-4"><b>Fundación:</b> </div>
            <div class="col-md-4 "> 1985.</div>
          </div>
          <div class="row">
            <div class="col-md-4"><b>Ubicación:</b> </div>
            <div class="col-md-4 "> <a href="https://goo.gl/maps/fPDAMFWF43oiYsxJ7" target="_blank" > 102 Middlesex St, Spitalfields, London E1 7EZ, Reino Unido</a> </div>
          </div>
          <div class="row">
            <hr>

          </div>
          <div class="row">
            <hr>
              <div class="col-md-12 " style="align:center"><b>Into</b></div>
              <div class="col-md-12"><li>Cuenta con centros modernos que se encuentran en el campus.</li></div>
              <div class="col-md-12"><li>Si estás buscando una educación internacional que sea el primer paso para una exitosa carrera profesional, encontrarás en Reino Unido una gran oferta educativa con universidades excepcionales en ciudades muy diversas</li></div>


          </div>
          <div class="row">
            <hr>
              <div class="col-md-12 " style="align:center"><b>Into</b></div>
              <div class="col-md-12"><li>INTO trabaja con diversas universidades asociadas para ofrecer programas de Foundation</li></div>
              <div class="col-md-12"><li>Nuestros socios de las universidades afiliadas son instituciones respetadas y de alto prestigio.</li></div>
          </div>

          <div class="row">
            <hr>

          </div>
          <div class="list-group">
            <button type="button" class="list-group-item list-group-item-action list-group-item-success ">
              Universidades líderes en
            </button>
            <button type="button" class="list-group-item list-group-item-action" id="Odont" data-id="Odontología" >UK.</button>
            <button type="button" class="list-group-item list-group-item-action" id="Odont"  data-id="Veterinaria" >USA.</button>
            <button type="button" class="list-group-item list-group-item-action" id="Odont" >China.</button>

          </div>


          <div class="row">
            <hr>
          </div>
          <div class="row">
            <div class="col-md-12">INTO tiene más de 10 años de experiencia ayudando a miles de jóvenes alrededor del mundo.</div>
          </div>
        </div>
        <div class="col-md-12 ">
        <div class="header_btn dark_btn" style="display: flex;justify-content: center;">
                    <a style="width: 100%;" href="../Login" > Me interesa</a>
                </div>
        </div>
        <div class="row">
          <hr>
        </div>
        <div class="youtube-player" data-id="kkI2_4UKbos"></div>

        <!--<div class="embed-responsive embed-responsive-21by9">
          <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/GdEQPUbmvaE"></iframe>
        </div>-->
        </div>

      </div>
        <div class="bottom-strip"></div>
    </div>


</div>


<div class="modal fade text-center py-5 subscribeModal-lg "  id="catsVeranoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
          <!-- <div class="top-strip"></div> -->
        <div class="modal-header">
          <div class="container-fluid">
            <div class="row" style="margin-bottom: 10px;">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: red">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="row">
              <div class="col-md-4 d-none d-lg-block d-xl-block"  style="margin-top: -1px;"> <img src="<?=base_url('resources/assets/Informativa/images/lu_cats.png');?>" class="rounded mx-auto d-block" alt="..."></div>
              <div class="col-md-7 ml-auto d-none d-lg-block d-xl-block"><img  src="<?=base_url('resources/assets/Informativa/images/luu_cats.png');?>" alt=""></div>
            </div>
          </div>
          <!-- <a class="h2" href="https://www.fiverr.com/sunlimetech/design-and-fix-your-bootstrap-4-issues" target="_blank"> </a>

          <h3 class="col-md-4 "></h3> -->

        </div>
        <div class="modal-body">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-4"><b>Fundación:</b> </div>
              <div class="col-md-4 "> 1985.</div>
            </div>
            <div class="row">
              <div class="col-md-4"><b>Ubicación Cambridge:</b> </div>
              <div class="col-md-4 "> <a href="https://goo.gl/maps/TtxkyUd5Ud1nw4SV9"> A1 High St, Chesterton, Cambridge CB4 1NQ, Reino Unido </a> </div>

          </div>
          <br>
            <div class="row">
              <div class="col-md-4"><b>Ubicación Canterbury:</b> </div>
              <div class="col-md-4 "> <a href="https://goo.gl/maps/5WQzGMZvC7Ki8gGHA"> 68 New Dover Rd, Canterbury CT1 3LQ, Reino Unido </a> </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-4"><b>Ubicación Londres:</b> </div>
              <div class="col-md-4 "> <a href="https://goo.gl/maps/gUfa7H22Ts4LAzwM6">43-45 Bloomsbury Square, Holborn, London WC1A 2RA, Reino Unido </a> </div>

            </div>
            <br>
            <div class="row">
              <div class="slide-container ">
                  <div class="row">
                    <div class="col-xs-2 col-md-6 ">
                     <div class="wrapper">
                       <div class="clash-card barbarian">
                         <div class="clash-card__image clash-card__image--barbarian">
                           <img class="imagencard" src="<?=base_url('resources/assets/Informativa/images/cats_stem.jpg');?>"   alt="barbarian" />
                         </div>
                         <div class="clash-card__level clash-card__level--barbarian">STEM </div>
                         <div class="clash-card__unit-name">Ciencia, tecnología, ingeniería y matemáticas</div>
                         <div class="clash-card__unit-description">
                           Para estudiantes que se interesan en como la ciencia, tecnología, ingeniería y las matemáticas  se pueden usar creativamente para resolver problemas.
                         </div>
                           <p class="where">¿Cuándo y dónde?</p>
                           <p class="nameInst">Cambridge</p>
                         <div class="clash-card__unit-description">
                           <p><b>Llegada: </b>Domingo 28 Junio <b>Salida: </b>Domingo  12 Julio</p>
                         </div>
                         <div class="clash-card__unit-stats clash-card__unit-stats--barbarian clearfix">
                           <div class="one-third">
                             <div class="stat-value">Edad:</div>
                             <div class="stat">14-17 </div>
                           </div>
                           <div class="one-third">
                             <div class="stat-value">Nivel de inglés:</div>
                             <div class="stat"> IELTS 5.0 o equivalente</div>
                           </div>
                           <div class="one-third no-border">
                             <div class="stat-value">Costo:</div>
                             <div class="stat"> £2,700*  </div>
                           </div>
                         </div>
                       </div> <!-- end clash-card barbarian-->
                       </div> <!-- end wrapper -->
                    </div> <!-- end col waper-->
                    <div class="col-xs-2 col-md-6  ml-auto">
                     <div class="wrapper">
                       <div class="clash-card wizard">
                         <div class="clash-card__image clash-card__image--wizard">
                           <img class="imagencard" src="<?=base_url('resources/assets/Informativa/images/cats_experiencia.jpg');?>"   alt="barbarian" />
                         </div>
                         <div class="clash-card__level clash-card__level--wizard">Experiencia de Educación en Reino Unido</div>


                         <div class="clash-card__unit-description">
                           Para estudiantes que quieren experimentar el aprendizaje  en la educación Británica.
                         </div>
                           <p class="where">¿Cuándo y dónde?</p>
                           <p class="nameInst">Canterbury</p>
                         <div class="clash-card__unit-description">
                           <p><b>Llegada: </b>Domingo 28 Junio <b>Salida: </b>Domingo  19 Julio</p>
                           <p><b>Llegada: </b>Domingo 19 Julio <b>Salida: </b>Domingo 2 Agosto</p>
                         </div>
                         <div class="clash-card__unit-stats clash-card__unit-stats--wizard clearfix">
                           <div class="one-third">
                             <div class="stat-value">Edad:</div>
                             <div class="stat">14-17 </div>
                           </div>
                           <div class="one-third">
                             <div class="stat-value">Nivel de inglés:</div>
                             <div class="stat">IELTS 5.0 o equivalente</div>
                           </div>
                           <div class="one-third no-border">
                             <div class="stat-value">Costo:</div>
                             <div class="stat"> 2 Semanas £2,700* </div>
                             <div class="stat">  3 Semanas £3,750*  </div>
                           </div>
                         </div>
                       </div> <!-- end clash-card barbarian-->
                       </div> <!-- end wrapper -->

                    </div> <!-- end col waper-->
                    <div class="col-xs-2 col-md-6  ml-auto">
                     <div class="wrapper">
                       <div class="clash-card goblin">
                         <div class="clash-card__image clash-card__image--goblin">
                           <img class="imagencard" src="<?=base_url('resources/assets/Informativa/images/cats_blomber.jpg');?>"   alt="barbarian" />
                         </div>
                         <div class="clash-card__level clash-card__level--goblin">Laboratorio de negocios Bloomberg</div>
                         <div class="clash-card__unit-description">
                           Para estudiantes con intereses en economía y finanzas.
                         </div>
                           <p class="where">¿Cuándo y dónde?</p>
                           <p class="nameInst">Londres</p>
                         <div class="clash-card__unit-description">
                           <p><b>Llegada: </b>Domingo 28 Junio <b>Salida: </b>Domingo  12 Julio</p>
                           <p><b>Llegada: </b>Domingo 12 Julio <b>Salida: </b>Domingo 26 Julio</p>
                         </div>
                         <div class="clash-card__unit-stats clash-card__unit-stats--goblin clearfix">
                           <div class="one-third">
                             <div class="stat-value">Edad:</div>
                             <div class="stat">14-17</div>
                           </div>
                           <div class="one-third">
                             <div class="stat-value">Nivel de inglés:</div>
                             <div class="stat">IELTS 4.5 o equivalente</div>
                           </div>
                           <div class="one-third no-border">
                             <div class="stat-value">Costo:</div>
                             <div class="stat"> £2,00* </div>
                           </div>
                         </div>

                       </div> <!-- end clash-card barbarian-->
                       </div> <!-- end wrapper -->

                    </div> <!-- end col waper-->
                    <div class="col-xs-2 col-md-6  ml-auto">
                     <div class="wrapper">
                       <div class="clash-card archer">
                         <div class="clash-card__image clash-card__image--archer">
                           <img class="imagencard" src="<?=base_url('resources/assets/Informativa/images/cats_stem2.jpg');?>"   alt="barbarian" />
                         </div>
                         <div class="clash-card__level clash-card__level--archer">STEM</div>
                         <div class="clash-card__unit-name">(Ciencia, tecnología, ingeniería y matemáticas) y curso de inglés.</div>
                         <div class="clash-card__unit-description">
                           Para estudiantes que se interesan en cómo la ciencia, tecnología, ingeniería y las matemáticas  se pueden usar creativamente para resolver problemas combinado con curso de inglés especializado.
                         </div>
                           <p class="where">¿Cuándo y dónde?</p>
                           <p class="nameInst">Cambridge</p>
                         <div class="clash-card__unit-description">
                           <p><b>Llegada: </b>Domingo 28 Julio <b>Salida: </b>Domingo  26 Julio</p>
                         </div>
                         <div class="clash-card__unit-stats clash-card__unit-stats--archer clearfix">
                           <div class="one-third">
                             <div class="stat-value">Edad:</div>
                             <div class="stat">14-17  </div>
                           </div>
                           <div class="one-third">
                             <div class="stat-value">Nivel de inglés:</div>
                             <div class="stat">IELTS 4.0 o equivalente</div>
                           </div>
                           <div class="one-third no-border">
                             <div class="stat-value">Costo:</div>
                             <div class="stat"> £2,700*  </div>
                           </div>
                         </div>

                       </div> <!-- end clash-card barbarian-->
                       </div> <!-- end wrapper -->

                    </div> <!-- end col waper-->
                    <div class="col-xs-2 col-md-6  ml-auto">
                     <div class="wrapper">
                       <div class="clash-card giant">
                         <div class="clash-card__image clash-card__image--giant">
                           <img class="imagencard" src="<?=base_url('resources/assets/Informativa/images/cats_prepoxford.jpg');?>"   alt="barbarian" />
                         </div>
                         <div class="clash-card__level clash-card__level--giant">Preparación Oxbridge</div>
                         <div class="clash-card__unit-description">
                           Para estudiantes que aspiran estudiar universidades prestigiosas como Oxford, Cambridge y otras universidades Top de UK.
                         </div>
                           <p class="where">¿Cuándo y dónde?</p>
                           <p class="nameInst">Cambridge</p>
                         <div class="clash-card__unit-description">
                           <p><b>Llegada: </b>Domingo 28 Junio <b>Salida: </b>Domingo  19 Julio</p>
                         </div>
                         <div class="clash-card__unit-stats clash-card__unit-stats--giant clearfix">
                           <div class="one-third">
                             <div class="stat-value">Edad:</div>
                             <div class="stat">16-17 </div>
                           </div>
                           <div class="one-third">
                             <div class="stat-value">Nivel de inglés:</div>
                             <div class="stat">IELTS 5.5 o equivalente</div>
                           </div>
                           <div class="one-third no-border">
                             <div class="stat-value">Costo:</div>
                             <div class="stat"> £3,750* </div>
                           </div>
                         </div>

                       </div> <!-- end clash-card barbarian-->
                       </div> <!-- end wrapper -->

                    </div> <!-- end col waper-->
                    <div class="col-xs-2 col-md-6  ml-auto">
                     <div class="wrapper">
                       <div class="clash-card barbarian">
                         <div class="clash-card__image clash-card__image--barbarian">
                           <img class="imagencard" src="<?=base_url('resources/assets/Informativa/images/cats_medicina.jpg');?>"   alt="barbarian" />
                         </div>
                         <div class="clash-card__level clash-card__level--barbarian">Medicina</div>
                         <div class="clash-card__unit-description">
                           Para estudiantes que quieren explorar opciones de carrera en medicina.
                         </div>
                           <p class="where">¿Cuándo y dónde?</p>
                           <p class="nameInst">Canterbury</p>
                         <div class="clash-card__unit-description">
                           <p><b>Llegada: </b>Domingo 28 Junio <b>Salida: </b>Domingo  12 Julio</p>
                           <p><b>Llegada: </b>Domingo 12 Julio <b>Salida: </b>Domingo 26 Julio</p>
                         </div>
                         <div class="clash-card__unit-stats clash-card__unit-stats--barbarian clearfix">
                           <div class="one-third">
                             <div class="stat-value">Edad:</div>
                             <div class="stat">14-17 </div>
                           </div>
                           <div class="one-third">
                             <div class="stat-value">Nivel de inglés:</div>
                             <div class="stat">IELTS 5.0 o equivalente</div>
                           </div>
                           <div class="one-third no-border">
                             <div class="stat-value">Costo:</div>
                             <div class="stat"> £2,00* </div>
                           </div>
                         </div>

                       </div> <!-- end clash-card barbarian-->
                       </div> <!-- end wrapper -->

                    </div> <!-- end col waper-->
                    <div class="col-xs-2 col-md-6  ml-auto">
                     <div class="wrapper">
                       <div class="clash-card giant">
                         <div class="clash-card__image clash-card__image--giant">
                           <img class="imagencard" src="<?=base_url('resources/assets/Informativa/images/bristol_arq.png');?>"   alt="barbarian" />
                         </div>
                         <div class="clash-card__unit-description">
                            *El precio incluye hospedaje, tres comidas al día, costo de registro y transferencias de aeropuerto. Hay un costo extra de £75 que aplica para los que soliciten asistencia para viajes de menores sin compañia.
                         </div>


                         <div class="clash-card__unit-stats clash-card__unit-stats--giant clearfix">
                           <div class="one-third">
                             <div class="stat-value"></div>
                             <div class="stat">!</div>

                           </div>

                           <div class="one-third">
                             <div class="stat-value"></div>
                             <div class="stat"></div>

                           </div>

                           <div class="one-third no-border">
                             <div class="stat-value"></div>
                             <div class="stat"> </div>

                           </div>

                         </div>

                       </div> <!-- end clash-card barbarian-->
                       </div> <!-- end wrapper -->

                    </div> <!-- end col waper-->


               </div> <!-- end row two -->


            </div><!-- end slide continer-->
            </div>

            <div class="row">
              <hr>
            </div>
            <!-- <div class="row">
              <hr>
                <div class="col-md-12 " style="align:center"><b>Edades</b></div>
                <div class="col-md-12"><li>Junior 7-13.</li></div>
                <div class="col-md-12"><li>Senior 14 - 17.</li></div>
                <div class="col-md-12"><li>Universitario 18-25.</li></div>

            </div> -->
            <!-- <div class="row">
              <hr>
                <div class="col-md-12 " style="align:center"><b>Tipo de campamento</b></div>
                <div class="col-md-12"><li>Academico.</li></div>
                <div class="col-md-12"><li>Inglés.</li></div>
                <div class="col-md-12"><li>Combinado.</li></div>
                <div class="col-md-12"><li>Inglés mas deporte.</li></div>

            </div> -->

            <!-- <div class="list-group">
              <button type="button" class="list-group-item list-group-item-action list-group-item-success ">
                Alojamiento
              </button>
              <button type="button" class="list-group-item list-group-item-action" id="Odont" data-id="Odontología" >Con familia.</button>
              <button type="button" class="list-group-item list-group-item-action" id="Odont"  data-id="Veterinaria" >Internado.</button>
              <button type="button" class="list-group-item list-group-item-action" id="Odont" >Residencial.</button>

            </div> -->

            <div class="row">
              <hr>
            </div>
            <div class="row">
              <div class="col-md-12">l CATS College lleva casi 60 años formando alumnos con futuros llenos de éxito.</div>
            </div>
          </div>
          <div class="col-md-12 ">
            <div class="header_btn dark_btn" style="display: flex;justify-content: center;">
                    <a style="width: 100%;" href="../Login" > Me interesa</a>
                </div>
          </div>
          <div class="row">
            <hr>
          </div>
          <div class="youtube-player" data-id="uPFn8rHs6kI"></div>

          <!--<div class="embed-responsive embed-responsive-21by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/uPFn8rHs6kI"></iframe>
          </div>-->
          </div>

        </div>
          <div class="bottom-strip"></div>
      </div>

</div>

<div class="modal fade text-center py-5 subscribeModal-lg "  id="concordVeranoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
          <!-- <div class="top-strip"></div> -->
        <div class="modal-header">
          <div class="container-fluid">
            <div class="row" style="margin-bottom: 10px;">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: red">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="row">
              <div class="col-md-4 d-none d-lg-block d-xl-block"  style="margin-top: 30px;"> <img src="<?=base_url('resources/assets/Informativa/images/v_concord_logo.jpg');?>" class="rounded mx-auto d-block" alt="..."></div>
              <div class="col-md-7 ml-auto d-none d-lg-block d-xl-block"><img  src="<?=base_url('resources/assets/Informativa/images/vv_concord.png');?>" alt=""></div>
            </div>
          </div>
          <!-- <a class="h2" href="https://www.fiverr.com/sunlimetech/design-and-fix-your-bootstrap-4-issues" target="_blank"> </a>

          <h3 class="col-md-4 "></h3> -->

        </div>
        <div class="modal-body">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-4"><b>Fundación:</b> </div>
              <div class="col-md-4 "> 	1976 .</div>
            </div>
            <div class="row">
              <div class="col-md-4"><b>Ubicación:</b> </div>
              <div class="col-md-4 "> <a href="https://goo.gl/maps/xM3PEs5EtxUjUWqq5" target="_blank" >Acton Burnell Hall, Acton Burnell, Shrewsbury SY5 7PF, Reino Unido </a> </div>
            </div>
            <br>
            <div class="row">
              <div class="slide-container ">
               <div class="row">
                 <div class="col-xs-2 col-md-6  ml-auto">
                  <div class="wrapper">
                    <div class="clash-card giant">
                      <div class="clash-card__image clash-card__image--giant">
                        <img class="imagencard" src="<?=base_url('resources/assets/Informativa/images/concordCollage.png');?>"   alt="barbarian" />
                      </div>
                      <div class="clash-card__level clash-card__level--giant">Inglés y ciencias</div>
                      <div class="clash-card__unit-description">
                        Nuestro programa de inglés consta de 21 horas de clases por semana. Los estudiantes tendrán 6 horas por semana de aprendizaje integrado a través de un horario variado que consta de dos temas de su elección.
                      </div>
                      <div class="clash-card__unit-stats clash-card__unit-stats--giant clearfix">
                        <div class="one-third">
                          <div class="stat-value">Edad:</div>
                          <div class="stat">10 a 12 años </div>
                        </div>
                        <div class="one-third no-border">
                          <div class="stat-value">Costo:</div>
                          <div class="stat"> £4,200 por 2 semanas </div>
                        </div>
                      </div>

                    </div> <!-- end clash-card barbarian-->
                    </div> <!-- end wrapper -->

                 </div> <!-- end col waper-->
                 <div class="col-xs-2 col-md-6  ml-auto">
                  <div class="wrapper">
                    <div class="clash-card barbarian">
                      <div class="clash-card__image clash-card__image--barbarian">
                        <img class="imagencard" src="<?=base_url('resources/assets/Informativa/images/concordCollage.png');?>"   alt="barbarian" />
                      </div>
                      <div class="clash-card__level clash-card__level--barbarian">Inglés y actividades</div>
                      <div class="clash-card__unit-description">
                        Las actividades incluyen arte, negocios, carreras,
                        Cocina, debate, drama, preparación de exámenes,
                        Fitness, periodismo, música, actividades al aire libre o deportes
                      </div>
                      <div class="clash-card__unit-stats clash-card__unit-stats--barbarian clearfix">
                        <div class="one-third">
                          <div class="stat-value">Edad:</div>
                          <div class="stat"> 10 a 12 años </div>
                        </div>
                        <div class="one-third no-border">
                          <div class="stat-value">Costo:</div>
                          <div class="stat">  £3,900 por 2 semanas </div>
                        </div>
                      </div>

                    </div> <!-- end clash-card barbarian-->
                    </div> <!-- end wrapper -->

                 </div> <!-- end col waper-->
                 <div class="col-xs-2 col-md-6  ml-auto">
                  <div class="wrapper">
                    <div class="clash-card wizard">
                      <div class="clash-card__image clash-card__image--wizard">
                        <img class="imagencard" src="<?=base_url('resources/assets/Informativa/images/concordCollage.png');?>"   alt="barbarian" />
                      </div>
                      <div class="clash-card__level clash-card__level--wizard">Ciencia y Matemáticas</div>
                      <div class="clash-card__unit-description">
                        Nuestros cursos junior y de ciencias generales
                        cubren aspectos de biología, química, física y
                        Matemáticas.
                      </div>
                      <div class="clash-card__unit-stats clash-card__unit-stats--wizard clearfix">
                        <div class="one-third">
                          <div class="stat-value">Edad:</div>
                          <div class="stat">10 a 12 años </div>
                        </div>
                        <div class="one-third no-border">
                          <div class="stat-value">Costo:</div>
                          <div class="stat"> £4,500 por 2 semanas </div>
                        </div>
                      </div>
                    </div> <!-- end clash-card barbarian-->
                    </div> <!-- end wrapper -->

                 </div> <!-- end col waper-->
                 <div class="col-xs-2 col-md-6  ml-auto">
                  <div class="wrapper">
                    <div class="clash-card goblin">
                      <div class="clash-card__image clash-card__image--goblin">
                        <img class="imagencard" src="<?=base_url('resources/assets/Informativa/images/concordCollage.png');?>"   alt="barbarian" />
                      </div>
                      <div class="clash-card__level clash-card__level--goblin">Inglés y ciencias</div>
                      <div class="clash-card__unit-description">
                        Nuestro programa de inglés consta de 21 horas de clases por semana. Los estudiantes tendrán 6 horas por semana de aprendizaje integrado a través de un horario variado que consta de dos temas de su elección.
                      </div>
                      <div class="clash-card__unit-stats clash-card__unit-stats--goblin clearfix">
                        <div class="one-third">
                          <div class="stat-value">Edad:</div>
                          <div class="stat">13 a 17 años</div>
                        </div>
                        <div class="one-third no-border">
                          <div class="stat-value">Costo:</div>
                          <div class="stat"> £3,600por 2 semanas </div>
                        </div>
                      </div>

                    </div> <!-- end clash-card barbarian-->
                    </div> <!-- end wrapper -->

                 </div> <!-- end col waper-->
                 <div class="col-xs-2 col-md-6  ml-auto">
                  <div class="wrapper">
                    <div class="clash-card archer">
                      <div class="clash-card__image clash-card__image--archer">
                        <img class="imagencard" src="<?=base_url('resources/assets/Informativa/images/concordCollage.png');?>"   alt="barbarian" />
                      </div>
                      <div class="clash-card__level clash-card__level--archer">Inglés y actividades</div>
                      <div class="clash-card__unit-description">
                        Las actividades incluyen arte, negocios, carreras,
                        Cocina, debate, drama, preparación de exámenes,
                        Fitness, periodismo, música, actividades al aire libre o deportes
                      </div>
                      <div class="clash-card__unit-stats clash-card__unit-stats--archer clearfix">
                        <div class="one-third">
                          <div class="stat-value">Edad:</div>
                          <div class="stat">13 a 17 años</div>
                        </div>
                        <div class="one-third no-border">
                          <div class="stat-value">Costo:</div>
                          <div class="stat">  £3,900 por 2 semanas  </div>
                        </div>
                      </div>

                    </div> <!-- end clash-card barbarian-->
                    </div> <!-- end wrapper -->

                 </div> <!-- end col waper-->
                 <div class="col-xs-2 col-md-6  ml-auto">
                  <div class="wrapper">
                    <div class="clash-card giant">
                      <div class="clash-card__image clash-card__image--giant">
                        <img class="imagencard" src="<?=base_url('resources/assets/Informativa/images/concordCollage.png');?>"   alt="barbarian" />
                      </div>
                      <div class="clash-card__level clash-card__level--giant">Ciencia Seleccionada</div>
                      <div class="clash-card__unit-description">
                        Nuestros cursos de ciencias generales
                        cubren aspectos de biología, química, física y
                        Matemáticas.
                      </div>
                      <div class="clash-card__unit-stats clash-card__unit-stats--giant clearfix">
                        <div class="one-third">
                          <div class="stat-value">Edad:</div>
                          <div class="stat">15 a 17 años</div>
                        </div>
                        <div class="one-third no-border">
                          <div class="stat-value">Costo:</div>
                          <div class="stat">£4,200 por 2 semanas </div>
                        </div>
                      </div>

                    </div> <!-- end clash-card barbarian-->
                    </div> <!-- end wrapper -->

                 </div> <!-- end col waper-->
               </div>
              </div>
            </div>
            <br>
            <div class="row">
              <table class="table table-bordered">
                <thead class="theadtabletw">
                  <tr>
                    <th>#</th>
                    <th colspan="2">Incluye</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Alojamiento</td>
                    <td>Uso de instalaciones deportivas</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Uso de instalaciones deportivas</td>
                    <td>Actividades dentro del campus</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Materiales de estudio</td>
                    <td>Un día de excursión por semana</td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td>Bolso con botella para agua, playera y calendario.</td>
                    <td>Seguro</td>
                  </tr>
                  <tr>
                    <th scope="row">5</th>
                    <td>Traslados de Aeropuerto</td>
                    <td>Fotografía del curso Todos los Alimentos (Desayuno, comida y cena)</td>
                  </tr>
                </tbody>
              </table>

            </div>
            <br>
            <div class="row">

              <div class="col-md-12"><li>Concord College da la bienvenida a estudiantes de todo el mundo y el área local a su comunidad vibrante y variada.</li></div>
              <div class="col-md-12"><li>Desarrollar la confianza de los estudiantes en sus propias habilidades.</li></div>
              <div class="col-md-12"><li>Mejorar las habilidades de los estudiantes en su materia seleccionada.</li></div>

              <div class="col-md-12 ">

              <div class="header_btn dark_btn" style="display: flex;justify-content: center;">
                    <a style="width: 100%;" href="../Login" > Me interesa</a>
                </div>
                </div>

            </div>
          </div>
          <div class="row">
            <hr>
          </div>
          <div class="youtube-player" data-id="BZKgviod4D4"></div>

          <!--<div class="embed-responsive embed-responsive-21by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/BZKgviod4D4"></iframe>
          </div>-->
          <hr>

          </div>

        </div>
          <div class="bottom-strip"></div>
      </div>
</div>

<div class="modal fade text-center py-5 subscribeModal-lg "  id="chesterVeranoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
          <!-- <div class="top-strip"></div> -->
        <div class="modal-header">
          <div class="container-fluid">
            <div class="row" style="margin-bottom: 10px;">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: red">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="row">
              <div class="col-md-4 d-none d-lg-block d-xl-block"  style="margin-top: 30px;"> <img src="<?=base_url('resources/assets/Informativa/images/e_chester.jpg');?>" class="rounded mx-auto d-block" alt="..."></div>
              <div class="col-md-7 ml-auto d-none d-lg-block d-xl-block"><img  src="<?=base_url('resources/assets/Informativa/images/new_newchester-english-in-chester-00 (copy).jpg');?>" alt=""></div>
            </div>
          </div>
          <!-- <a class="h2" href="https://www.fiverr.com/sunlimetech/design-and-fix-your-bootstrap-4-issues" target="_blank"> </a>

          <h3 class="col-md-4 "></h3> -->

        </div>
        <div class="modal-body">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-4"><b>Fundación:</b> </div>
              <div class="col-md-4 "> 	1839 .</div>
            </div>
            <div class="row">
              <div class="col-md-4"><b>Ubicación:</b> </div>
              <div class="col-md-4 "> <a href="https://goo.gl/maps/Hj1s65WCmfdpusXQ8" target="_blank" > Parkgate Rd, Chester CH1 4BJ, Reino Unido</a> </div>
            </div>
            <br>
            <div class="row">
              <div class="slide-container ">
               <div class="row">
                 <div class="col-xs-2 col-md-6 ">
                  <div class="wrapper">
                    <div class="clash-card giant">
                      <div class="clash-card__image clash-card__image--giant">
                        <img class="imagencard" src="<?=base_url('resources/assets/Informativa/images/Chester_first.jpg');?>"   alt="barbarian" />
                      </div>
                      <div class="clash-card__level clash-card__level--giant">Experiencia Internacional con programa Social</div>
                      <div class="clash-card__unit-description">
                        Creamos oportunidades para que los estudiantes aumenten su confianza en el inglés al mismo tiempo que aprenden sobre la cultura y las costumbres de otras naciones.
                      </div>
                      <p class="where">Precio de Paquete incluye</p>
                      <div class="clash-card__unit-description">
                        Matrícula del curso y programa social, Alojamiento en casa anfitriona(compartida o sencilla), desayuno, cena y lunch.
                      </div>
                      <p class="where">Precio Excluye:</p>
                      <div class="clash-card__unit-description">
                        £80.00 registro, transferencias de aeropuerto(£130.00) o servicio de Meet & Greet (£160.00).
                      </div>
                      <p class="where">Programa social incluye (por semana):</p>
                      <div class="clash-card__unit-description">
                        2 proyecto, 1 excursión de medio día, 2 actividades de medio día, 2 eventos en la tarde, 1 excursión de fin de
                      </div>
                      <div class="clash-card__unit-stats clash-card__unit-stats--giant clearfix">
                        <div class="one-third">
                          <div class="stat-value">Edad:</div>
                          <div class="stat"> 13-16 años </div>
                        </div>
                      </div>

                    </div> <!-- end clash-card barbarian-->
                    </div> <!-- end wrapper -->

                 </div> <!-- end col waper-->
               </div>
              </div>
            </div>
            <br>
            <div class="row">
              <table class="table table-bordered">
                <thead class="theadtabletw">
                  <tr>
                    <th>Semana de inicio</th>
                    <th >Costo del curso y programa social por semana</th>
                    <th >Alojamiento por semana</th>
                    <th >Total del paquete</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th >29 Jun, 6 Jul, 13 Jul, 20 Jul 2020</th>
                    <td>£415.00</td>
                    <td>£178.00</td>
                    <td>£593.00</td>
                  </tr>
                  <tr>
                    <th >27 Jul, 3 Ago, 10 Ago 2020</th>
                    <td>£353.00</td>
                    <td>£178.00</td>
                    <td>£531.00</td>
                  </tr>
                </tbody>
              </table>

            </div>
            <br>
            <div class="row">

              <div class="col-md-12"><li>Te enseñarán nuestros destacados académicos de la Facultad de Administración y Negocios que son especialistas de la industria en su campo.</li></div>
              <div class="col-md-12"><li>Estos programas de dos semanas le brindarán oportunidades fantásticas para experimentar el maravilloso Chester histórico y el noroeste del Reino Unido, incluidos Liverpool, Manchester y el norte de Gales.</li></div>
              <div class="col-md-12"><li> Es una oportunidad emocionante para combinar actividades de estudio y sociales.</li></div>

              <div class="col-md-12 ">

              <div class="header_btn dark_btn" style="display: flex;justify-content: center;">
                    <a style="width: 100%;" href="../Login" > Me interesa</a>
                </div>
                </div>

            </div>
          </div>
          <div class="row">
            <hr>
          </div>
          <div class="youtube-player" data-id="5pcmATG_mjM"></div>

          <!--<div class="embed-responsive embed-responsive-21by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/5pcmATG_mjM"></iframe>
          </div>-->
        <hr>

          </div>

        </div>
          <div class="bottom-strip"></div>
      </div>
</div>

<div class="modal fade text-center py-5 subscribeModal-lg "  id="cambridgeVeranoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
          <!-- <div class="top-strip"></div> -->
        <div class="modal-header">
          <div class="container-fluid">
            <div class="row" style="margin-bottom: 10px;">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: red">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="row">
              <div class="col-md-4 d-none d-lg-block d-xl-block"  style="margin-top: 30px;"> <img src="<?=base_url('resources/assets/Informativa/images/new_selectenglishlogo.jpg');?>" class="rounded mx-auto d-block" alt="..."></div>
              <div class="col-md-7 ml-auto d-none d-lg-block d-xl-block"><img  src="<?=base_url('resources/assets/Informativa/images/new_new_eselectModal.jpg');?>" alt=""></div>
            </div>
          </div>
          <!-- <a class="h2" href="https://www.fiverr.com/sunlimetech/design-and-fix-your-bootstrap-4-issues" target="_blank"> </a>

          <h3 class="col-md-4 "></h3> -->

        </div>
        <div class="modal-body">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-4"><b>Fundación:</b> </div>
              <div class="col-md-4 "> 	1209 .</div>
            </div>
            <div class="row">
              <div class="col-md-4"><b>Ubicación:</b> </div>
                <div class="col-md-4 "> <a href="https://goo.gl/maps/fyt4VQvkFH7GoHhp6" target="_blank" >13 Station Rd, Cambridge CB1 2JB, Reino Unido </a> </div>
            </div>
            <br>
            <div class="row">
                <div class="slide-container ">
                    <div class="row">
                      <div class="col-xs-2 col-md-6 ">
                       <div class="wrapper">
                         <div class="clash-card barbarian">
                           <div class="clash-card__image clash-card__image--barbarian">
                             <img class="imagencard" src="<?=base_url('resources/assets/Informativa/images/select_younglearners.png');?>"   alt="barbarian" />
                           </div>
                           <div class="clash-card__level clash-card__level--barbarian">Culford Young Learners </div>
                           <div class="clash-card__unit-description">
                             Los estudiantes de Culford estudian 15 horas completas de clases de inglés cada semana y realizan actividades por la tarde y por la noche.
                           </div>
                             <p class="where">¿Cuándo?</p>
                           <div class="clash-card__unit-description">
                             <p><b>Llegada: </b>5 - 18 July 2020 19 Julio <b>Salida: </b>1 Agosto 2020</p>
                           </div>
                           <p class="where">Costo Incluye:</p>
                           <div class="clash-card__unit-description">
                             Alimentos, alojamiento, actividades programadas, excursiones.
                           </div>
                           <div class="clash-card__unit-stats clash-card__unit-stats--barbarian clearfix">
                             <div class="one-third">
                               <div class="stat-value">Edad:</div>
                               <div class="stat">10 – 13 años. </div>
                             </div>
                             <div class="one-third no-border">
                               <div class="stat-value">Costo:</div>
                               <div class="stat">2 semanas - £1,750 + £50 registro</div>
                              <div class="stat">4 semanas - £3,500 + £50 registro</div>
                             </div>
                           </div>
                         </div> <!-- end clash-card barbarian-->
                         </div> <!-- end wrapper -->
                      </div> <!-- end col waper-->
                      <div class="col-xs-2 col-md-6  ml-auto">
                       <div class="wrapper">
                         <div class="clash-card wizard">
                           <div class="clash-card__image clash-card__image--wizard">
                             <img class="imagencard" src="<?=base_url('resources/assets/Informativa/images/select_adolecentes.png');?>"   alt="barbarian" />
                           </div>
                           <div class="clash-card__level clash-card__level--wizard">Culford Adolescentes</div>
                           <div class="clash-card__unit-description">
                             Los estudiantes de Culford estudian 20 horas completas de clases de inglés cada semana y realizan actividades por la tarde y por la noche.
                           </div>
                             <p class="where">¿Cuándo?</p>
                             <div class="clash-card__unit-description">
                               <p><b>Llegada: </b>5 - 18 July 2020  <b>Salida: </b>19 Julio – 1 Agosto 2020</p>
                             </div>
                             <p class="where">Incluye</p>
                             <div class="clash-card__unit-description">
                               Alimentos, alojamiento, actividades programadas, excursiones.
                             </div>
                           <div class="clash-card__unit-stats clash-card__unit-stats--wizard clearfix">
                             <div class="one-third">
                               <div class="stat-value">Edad:</div>
                               <div class="stat">13 – 16 años </div>
                             </div>
                             <div class="one-third no-border">
                               <div class="stat-value">Costo:</div>
                               <div class="stat"> 2 semanas - £1,750 + £50 registro </div>
                               <div class="stat"> 4 semanas - £3,500 + £50 registro </div>
                             </div>
                           </div>
                         </div> <!-- end clash-card barbarian-->
                         </div> <!-- end wrapper -->

                      </div> <!-- end col waper-->
                      <div class="col-xs-2 col-md-6  ml-auto">
                       <div class="wrapper">
                         <div class="clash-card goblin">
                           <div class="clash-card__image clash-card__image--giant">
                             <img class="imagencard" src="<?=base_url('resources/assets/Informativa/images/select_inglesFut.png');?>"   alt="barbarian" />
                           </div>
                           <div class="clash-card__level clash-card__level--giant">Inglés + Futbol</div>
                           <div class="clash-card__unit-description">
                             Los estudiantes se unen a las clases en el curso Cambridge Junior y se quedan en el mismo alojamiento. Por las tardes y los domingos hay un curso intensivo de fútbol con nuestros entrenadores calificados por English FA.
                           </div>
                             <p class="where">¿Cuándo?</p>
                             <div class="clash-card__unit-description">
                               <p><b>Llegada: </b>12 - 25 Julio 2020  <b>Salida: </b>25 Julio – 8 Agosto 2020</p>
                             </div>
                            <p class="where">Incluye</p>
                             <div class="clash-card__unit-description">
                               Alimentos, alojamiento, actividades programadas, excursiones.
                             </div>
                           <div class="clash-card__unit-stats clash-card__unit-stats--giant clearfix">
                             <div class="one-third">
                               <div class="stat-value">Edad:</div>
                               <div class="stat">14 – 17 años</div>
                             </div>
                             <div class="one-third no-border">
                               <div class="stat-value">Costo:</div>
                               <div class="stat"> 2 semanas/Homesaty(hab. doble)- £1,720 + £50 registro </div>
                               <div class="stat"> 2 semanas/Residencia(hab. Doble) - £1,920 + £50 registro </div>
                               <div class="stat"> 2 semanas/Residencia(hab.sencilla) - £1,980 + £50 registro </div>
                               <div class="stat"> 2 semanas/Residencia(hab.sencilla) The Reilyard - £2,030 + £50 registro </div>
                             </div>
                           </div>

                         </div> <!-- end clash-card barbarian-->
                         </div> <!-- end wrapper -->

                      </div> <!-- end col waper-->
                      <div class="col-xs-2 col-md-6  ml-auto">
                       <div class="wrapper">
                         <div class="clash-card archer">
                           <div class="clash-card__image clash-card__image--archer">
                             <img class="imagencard" src="<?=base_url('resources/assets/Informativa/images/select_magdalene.png');?>"   alt="barbarian" />
                           </div>
                           <div class="clash-card__level clash-card__level--archer">Magdalene College</div>
                           <div class="clash-card__unit-description">
                             Los alumnos asistirán a uno de los colegios más viejo y bellos de la universidad de Cambridge fundado en 1428. Tendrán 20 horas de clases, desarrollarán sus habilidades en el idioma inglés debatiendo sobre temas relevantes e interesantes.
                           </div>
                             <p class="where">¿Cuándo?</p>
                           <div class="clash-card__unit-description">
                             -5 - 18 July 2020
                             -19 Julio – 1 Agosto 2020
                           </div>
                           <p class="where">Incluye</p>
                           <div class="clash-card__unit-description">
                             Alimentos, alojamiento, actividades programadas, excursiones.
                           </div>
                           <div class="clash-card__unit-stats clash-card__unit-stats--archer clearfix">
                             <div class="one-third">
                               <div class="stat-value">Edad:</div>
                               <div class="stat"> 16 – 25 años </div>
                             </div>
                             <div class="one-third">
                               <div class="stat-value">Nivel de inglés:</div>
                               <div class="stat">Básico - Avanzado</div>
                             </div>
                             <div class="one-third no-border">
                               <div class="stat-value">Costo:</div>
                               <div class="stat">  2 semanas - £2,170 + £50 registro  </div>
                               <div class="stat">  4 semanas - £4,340 + £50 registro  </div>
                             </div>
                           </div>

                         </div> <!-- end clash-card barbarian-->
                         </div> <!-- end wrapper -->

                      </div> <!-- end col waper-->
                      <div class="col-xs-2 col-md-6  ml-auto">
                       <div class="wrapper">
                         <div class="clash-card giant">
                           <div class="clash-card__image clash-card__image--goblin">
                             <img class="imagencard" src="<?=base_url('resources/assets/Informativa/images/select_adolecentestwo.png');?>"   alt="barbarian" />
                           </div>
                           <div class="clash-card__level clash-card__level--goblin">Cambridge Adolescentes</div>
                           <div class="clash-card__unit-description">
                             Tendrán cuatro horas completas de clases de inglés por día con actividades de tarde y noche. El sábado, hay un viaje de un día completo a Londres con la oportunidad de ver los lugares de interés, así como algo de tiempo libre para hacer algunas compras.
                           </div>
                             <p class="where">¿Cuándo?</p>
                           <div class="clash-card__unit-description">
                             - 28 Junio – 11Julio
                             - 12 – 25 Julio
                             - 26 Julio – 8 Agosto
                             - 9 – 22 Agosto
                           </div>
                           <p class="where">Incluye:</p>
                         <div class="clash-card__unit-description">
                           Alimentos, alojamiento, actividades programadas, excursiones.
                         </div>
                           <div class="clash-card__unit-stats clash-card__unit-stats--goblin clearfix">
                             <div class="one-third">
                               <div class="stat-value">Edad:</div>
                               <div class="stat">14 – 17 años </div>
                             </div>
                           </div>

                         </div> <!-- end clash-card barbarian-->
                         </div> <!-- end wrapper -->

                      </div> <!-- end col waper-->
                      <div class="col-xs-2 col-md-6  ml-auto">
                         <div class="wrapper">
                          <table class="table table-bordered">
                            <thead class="theadtabletw">
                              <tr>
                                <th colspan="2">Alojamiento Familia Anfitriona</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th >2 semanas</th>
                                <td>£1520 +£50 costo de registro</td>
                              </tr>
                              <tr>
                                <th >4 semanas</th>
                                <td>£3040 + £50 costo de registro</td>
                              </tr>
                              <tr>
                                <th >6 semanas</th>
                                <td>£4560 + £50 costo de registro</td>
                              </tr>
                              <tr>
                                <th >8 semanas</th>
                                <td>£6080 + £50 costo de registro</td>
                              </tr>
                            </tbody>
                          </table>
                          <table class="table table-bordered">
                            <thead class="theadtabletw">
                              <tr>
                                <th colspan="2">Junior Alojamiento en residencia Doble</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th >2 semanas</th>
                                <td>£1720 + £50 costo de registro</td>
                              </tr>
                              <tr>
                                <th >4 semanas</th>
                                <td>£3440 + £50 costo de registro</td>
                              </tr>
                              <tr>
                                <th >6 semanas</th>
                                <td>£5160 + £50 costo de registro</td>
                              </tr>
                              <tr>
                                <th >8 semanas</th>
                                <td>£6880 + £50 costo de registro</td>
                              </tr>
                            </tbody>
                          </table>
                          <table class="table table-bordered">
                            <thead class="theadtabletw">
                              <tr>
                                <th colspan="2">Junior Alojamiento en residencia sencilla</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th >2 semanas</th>
                                <td>£1780 + £50 costo de registro</td>
                              </tr>
                              <tr>
                                <th >4 semanas</th>
                                <td>£3560 + £50 costo de registro</td>
                              </tr>
                              <tr>
                                <th >6 semanas</th>
                                <td>£5340 + £50 costo de registro</td>
                              </tr>
                              <tr>
                                <th >8 semanas</th>
                                <td>£7120 + £50 costo de registro</td>
                              </tr>
                            </tbody>
                          </table>
                          <table class="table table-bordered">
                            <thead class="theadtabletw">
                              <tr>
                                <th colspan="2">Junior Alojamiento en residencia en The Railyard</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th >2 semanas</th>
                                <td>£3660 + £50 costo de registro</td>
                              </tr>
                              <tr>
                                <th >4 semanas</th>
                                <td>£5490 + £50 costo de registro</td>
                              </tr>
                              <tr>
                                <th >6 semanas</th>
                                <td>£7320 + £50 costo de registro</td>
                              </tr>
                            </tbody>
                          </table>
                         </div>
                      </div>
                      <div class="col-xs-2 col-md-6  ml-auto">
                         <div class="wrapper">
                          <table class="table table-bordered">
                            <thead class="theadtableth">
                              <tr>
                                <th colspan="2">Alojamiento Familia Anfitriona</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th >2 semanas</th>
                                <td>£1520 +£50 costo de registro</td>
                              </tr>
                              <tr>
                                <th >4 semanas</th>
                                <td>£3040 + £50 costo de registro</td>
                              </tr>
                              <tr>
                                <th >6 semanas</th>
                                <td>£4560 + £50 costo de registro</td>
                              </tr>
                              <tr>
                                <th >8 semanas</th>
                                <td>£6080 + £50 costo de registro</td>
                              </tr>
                            </tbody>
                          </table>
                          <table class="table table-bordered">
                            <thead class="theadtableth">
                              <tr>
                                <th colspan="2">Junior Alojamiento en residencia Doble</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th >2 semanas</th>
                                <td>£1720 + £50 costo de registro</td>
                              </tr>
                              <tr>
                                <th >4 semanas</th>
                                <td>£3440 + £50 costo de registro</td>
                              </tr>
                              <tr>
                                <th >6 semanas</th>
                                <td>£5160 + £50 costo de registro</td>
                              </tr>
                              <tr>
                                <th >8 semanas</th>
                                <td>£6880 + £50 costo de registro</td>
                              </tr>
                            </tbody>
                          </table>
                          <table class="table table-bordered">
                            <thead class="theadtableth">
                              <tr>
                                <th colspan="2">Junior Alojamiento en residencia sencilla</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th >2 semanas</th>
                                <td>£1780 + £50 costo de registro</td>
                              </tr>
                              <tr>
                                <th >4 semanas</th>
                                <td>£3560 + £50 costo de registro</td>
                              </tr>
                              <tr>
                                <th >6 semanas</th>
                                <td>£5340 + £50 costo de registro</td>
                              </tr>
                              <tr>
                                <th >8 semanas</th>
                                <td>£7120 + £50 costo de registro</td>
                              </tr>
                            </tbody>
                          </table>
                          <table class="table table-bordered">
                            <thead class="theadtableth">
                              <tr>
                                <th colspan="2">Junior Alojamiento en residencia en The Railyard</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th >2 semanas</th>
                                <td>£7120 + £50 costo de registro</td>
                              </tr>
                              <tr>
                                <th >4 semanas</th>
                                <td>£3660 + £50 costo de registro</td>
                              </tr>
                              <tr>
                                <th >6 semanas</th>
                                <td>£5490 + £50 costo de registro</td>
                              </tr>
                              <tr>
                                <th >8 semanas</th>
                                <td>£7320 + £50 costo de registro</td>
                              </tr>
                            </tbody>
                          </table>
                         </div>
                      </div>
                      <div class="col-xs-2 col-md-6  ml-auto">
                       <div class="wrapper">
                         <div class="clash-card barbarian">
                           <div class="clash-card__image clash-card__image--barbarian">
                             <img class="imagencard" src="<?=base_url('resources/assets/Informativa/images/select_adolecentestwo.png');?>"   alt="barbarian" />
                           </div>
                           <div class="clash-card__level clash-card__level--barbarian">Inglés Plus</div>
                           <div class="clash-card__unit-description">
                             Tendrán cuatro horas completas de clases de inglés por día. Pueden elegir combinar 10 horas de inglés con 10 horas de clases extra de ciencia, teatro musical, arte o inglés para líderes a la semana. Junto con el programa de actividades sociales programadas.
                           </div>
                             <p class="where">¿Cuándo?</p>
                           <div class="clash-card__unit-description">
                             - 28 Junio – 11 Julio
                             - 12 – 25 Julio
                             - 26 Julio – 8 Agosto
                             - 9 – 22 Agosto
                           </div>
                           <p class="where">Incluye</p>
                           <div class="clash-card__unit-description">
                             Alimentos, alojamiento, actividades programadas, excursiones.
                           </div>
                           <div class="clash-card__unit-stats clash-card__unit-stats--barbarian clearfix">
                             <div class="one-third">
                               <div class="stat-value">Edad:</div>
                               <div class="stat"> 14 – 17 años </div>
                             </div>
                             <div class="one-third">
                               <div class="stat-value">Nivel de inglés:</div>
                               <div class="stat">Intermedio - Avanzado</div>
                             </div>
                           </div>

                         </div> <!-- end clash-card barbarian-->
                         </div> <!-- end wrapper -->

                      </div> <!-- end col waper-->
                      <div class="col-xs-2 col-md-6">
                       <div class="wrapper">
                         <div class="clash-card wizard">
                           <div class="clash-card__image clash-card__image--giant">
                             <img class="imagencard" src="<?=base_url('resources/assets/Informativa/images/bristol_arq.png');?>"   alt="barbarian" />
                           </div>
                           <div class="clash-card__level clash-card__level--giant"></div>

                            <p class="where">Suplementos del curso(Se agrega al precio de tabla)</p>
                           <div class="clash-card__unit-description">
                            <p class="nameInst">Precios por 2 semanas de curso</p>
                            <ul>
                            <li>- Ciencia = £90</li>
                            <li>- Teatro musical= £90</li>
                            <li>- Arte = £90</li>
                            <li>-Inglés para líderes= £250</li>
                           </div>
                          </div>
                         </div>
                      </div>
                 </div> <!-- end row two -->
              </div><!-- end slide continer-->
            </div>
            <br>
            <div class="row">

              <div class="col-md-12"><li>Nuestros programas ofrecen una mezcla de tradición e inspiración a medida que los participantes de todo el mundo absorben la atmósfera de este lugar extraordinario.</li></div>
              <div class="col-md-12"><li>Durante siglos, la Universidad ha ayudado a dar forma y cambiar el mundo.</li></div>
              <div class="col-md-12"><li>creemos que nuestros programas ofrecen beneficios que ampliarán su experiencia y mejorarán su CV.</li></div>

              <div class="col-md-12 ">

                <div class="header_btn dark_btn" style="display: flex;justify-content: center;">
                    <a style="width: 100%;" href="../Login" > Me interesa</a>
                </div>
              </div>

            </div>
          </div>
          <div class="row">
            <hr>
          </div>
          <div class="youtube-player" data-id="bCApP-JqLpc"></div>

          <!--<div class="embed-responsive embed-responsive-21by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/bCApP-JqLpc"></iframe>
          </div>-->
          <hr>

          </div>

        </div>
          <div class="bottom-strip"></div>
      </div>
</div>



<!-- . -->
<!-- contact info section end -->
