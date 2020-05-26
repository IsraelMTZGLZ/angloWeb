
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
            <div class="blog-post-wrapper">
                       
                        <!-- /.entry-footer -->
                        </div>
                        <!-- /.post-thumbnail -->

                        <!-- /.blog-content -->

                    </div>
            </div>
        </div>
    </div>
    
</div>

<div class="blog_wrapper float_left">
        <div class="container">
            <div class="row">
                <?php for($i=0;$i < count($eventos); $i++) { ;?>
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                        <div class="blog-post-wrapper iner_blog">
                            <div class="post-thumbnail">
                                <img src="<?=@$eventos[$i]['urlImagen'];?>" class="img-responsive " alt="Image">
                                <div class="entry-footer float_left">
                                <ul class="entry-meta pull-left">
                                </ul>
                                
                            </div>
                            <div class="zoom_popup" style="position: absolute;right: 0px;width: 300px;padding: 10px;" title="Expandir imagen">
                                            <a class="img-link" href="<?=@$eventos[$i]['urlImagen'];?>"> <i class="flaticon-add"></i>
                                            </a>
                                        </div>
                            <!-- /.entry-footer -->
                            </div>                 
                            <!-- /.post-thumbnail -->

                            <div class="blog-content">
                                <header class="entry-header">
                                    <h4 class="entry-title"><a href="<?=@$eventos[$i]['urlE'];?>" target="_blank"><?=@$eventos[$i]['titulo'];?></a></h4>
                                    <div class="entry-meta">
                                        <ul>
                                            <li><span class="posted-in" style="font-size: 20px">Fecha: &nbsp;<?=@$eventos[$i]['fecha'];?></span>
                                            </li>
                                            <li><span class="posted-in" style="font-size: 20px">Horario: &nbsp;<?=@$eventos[$i]['horario'];?></span>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- /.entry-meta -->
                                </header>
                                <!-- /.entry-header -->
                                <br>
                                <div class="entry-content">
                                    <p><?=@$eventos[$i]['descE'];?></p>
                                </div>
                                <a href="<?=@$eventos[$i]['urlE'];?>" class="blog_read">Registrarme <i class="flaticon-arrow"></i></a>
                                <!-- /.entry-content -->
                            </div>
                            <!-- /.blog-content -->

                        </div>
                    </div>
                <?php } ;?>
            </div>
        </div>
    </div>