<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap admin template">
  <meta name="author" content="">

  <title>Anglo Latino Education Partnership</title>

  <link rel="apple-touch-icon" href="<?=base_url('resources/assets/Dashboard/center/assets/images/apple-touch-icon.png');?>">
  <link rel="shortcut icon" href="<?=base_url('resources/assets/Dashboard/center/assets/images/favicon.ico');?>">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="<?=base_url('resources/assets/Dashboard/global/css/bootstrap.min599c.css?v4.0.2');?>">
  <link rel="stylesheet" href="<?=base_url('resources/assets/Dashboard/global/css/bootstrap-extend.min599c.css?v4.0.2');?>">
  <link rel="stylesheet" href="<?=base_url('resources/assets/Dashboard/center/assets/css/site.min599c.css?v4.0.2');?>">

  <!-- Skin tools (demo site only) -->
  <link rel="stylesheet" href="<?=base_url('resources/assets/Dashboard/global/css/skintools.min599c.css?v4.0.2');?>">
  <script src="<?=base_url('resources/assets/Dashboard/center/assets/js/Plugin/skintools.min599c.js?v4.0.2');?>"></script>

  <!-- Plugins -->
  <!--<link rel="stylesheet" href="<?=base_url('resources/assets/Dashboard/global/vendor/animsition/animsition.min599c.css?v4.0.2');?>">-->
  <link rel="stylesheet" href="<?=base_url('resources/assets/Dashboard/global/vendor/asscrollable/asScrollable.min599c.css?v4.0.2');?>">
  <link rel="stylesheet" href="<?=base_url('resources/assets/Dashboard/global/vendor/switchery/switchery.min599c.css?v4.0.2');?>">
  <link rel="stylesheet" href="<?=base_url('resources/assets/Dashboard/global/vendor/intro-js/introjs.min599c.css?v4.0.2');?>">
  <link rel="stylesheet" href="<?=base_url('resources/assets/Dashboard/global/vendor/slidepanel/slidePanel.min599c.css?v4.0.2');?>">
  <link rel="stylesheet" href="<?=base_url('resources/assets/Dashboard/global/vendor/flag-icon-css/flag-icon.min599c.css?v4.0.2');?>">

  <!-- Plugins For This Page -->
  <link rel="stylesheet" href="<?=base_url('resources/assets/Dashboard/global/vendor/chartist/chartist.min599c.css?v4.0.2');?>">
  <link rel="stylesheet" href="<?=base_url('resources/assets/Dashboard/global/vendor/jvectormap/jquery-jvectormap.min599c.css?v4.0.2');?>">
  <link rel="stylesheet" href="<?=base_url('resources/assets/Dashboard/global/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.min599c.css?v4.0.2');?>">
  <link rel="stylesheet" href="<?=base_url('resources/assets/Dashboard/global/vendor/asrange/asRange.min599c.css?v4.0.2');?>">
  <link rel="stylesheet" href="<?=base_url('resources/assets/Dashboard/global/vendor/nprogress/nprogress.min599c.css');?>">
  <link rel="stylesheet" href="<?=base_url('resources/assets/Dashboard/global/vendor/ladda/ladda.min599c.css?v4.0.2');?>">
  <link rel="stylesheet" href="<?=base_url('resources/assets/Dashboard/global/vendor/toastr/toastr.min599c.css?v4.0.2');?>">
  <link rel="stylesheet" href="<?=base_url('resources/assets/Dashboard/global/vendor/select2/select2.min599c.css?v4.0.2');?>">
  <link rel="stylesheet" href="<?=base_url('resources/assets/Dashboard/global/vendor/bootstrap-tokenfield/bootstrap-tokenfield.min599c.css?v4.0.2');?>">
  <link rel="stylesheet" href="<?=base_url('resources/assets/Dashboard/global/vendor/bootstrap-tagsinput/bootstrap-tagsinput.min599c.css?v4.0.2');?>">
  <link rel="stylesheet" href="<?=base_url('resources/assets/Dashboard/global/vendor/bootstrap-select/bootstrap-select.min599c.css?v4.0.2');?>">
  <link rel="stylesheet" href="<?=base_url('resources/assets/Dashboard/global/vendor/icheck/icheck.min599c.css?v4.0.2');?>">
  <link rel="stylesheet" href="<?=base_url('resources/assets/Dashboard/global/vendor/ionrangeslider/ionrangeslider.min599c.css?v4.0.2');?>">
  <link rel="stylesheet" href="<?=base_url('resources/assets/Dashboard/global/vendor/asspinner/asSpinner.min599c.css?v4.0.2');?>">
  <link rel="stylesheet" href="<?=base_url('resources/assets/Dashboard/global/vendor/clockpicker/clockpicker.min599c.css?v4.0.2');?>">
  <link rel="stylesheet" href="<?=base_url('resources/assets/Dashboard/global/vendor/ascolorpicker/asColorPicker.min599c.css?v4.0.2');?>">
  <link rel="stylesheet" href="<?=base_url('resources/assets/Dashboard/global/vendor/bootstrap-touchspin/bootstrap-touchspin.min599c.css?v4.0.2');?>">
  <link rel="stylesheet" href="<?=base_url('resources/assets/Dashboard/global/vendor/jquery-labelauty/jquery-labelauty.min599c.css?v4.0.2');?>">
  <link rel="stylesheet" href="<?=base_url('resources/assets/Dashboard/global/vendor/bootstrap-datepicker/bootstrap-datepicker.min599c.css?v4.0.2');?>">
  <link rel="stylesheet" href="<?=base_url('resources/assets/Dashboard/global/vendor/bootstrap-maxlength/bootstrap-maxlength.min599c.css?v4.0.2');?>">
  <link rel="stylesheet" href="<?=base_url('resources/assets/Dashboard/global/vendor/timepicker/jquery-timepicker.min599c.css?v4.0.2');?>">
  <link rel="stylesheet" href="<?=base_url('resources/assets/Dashboard/global/vendor/jquery-strength/jquery-strength.min599c.css?v4.0.2');?>">
  <link rel="stylesheet" href="<?=base_url('resources/assets/Dashboard/global/vendor/multi-select/multi-select.min599c.css?v4.0.2');?>">
  <link rel="stylesheet" href="<?=base_url('resources/assets/Dashboard/global/vendor/typeahead-js/typeahead.min599c.css?v4.0.2');?>">
  <link rel="stylesheet" href="<?=base_url('resources/assets/Dashboard/global/vendor/datatables.net-bs4/dataTables.bootstrap4.min599c.css?v4.0.2');?>">
  <link rel="stylesheet" href="<?=base_url('resources/assets/Dashboard/global/vendor/datatables.net-fixedheader-bs4/dataTables.fixedheader.bootstrap4.min599c.css?v4.0.2');?>">
  <link rel="stylesheet" href="<?=base_url('resources/assets/Dashboard/global/vendor/datatables.net-fixedcolumns-bs4/dataTables.fixedcolumns.bootstrap4.min599c.css?v4.0.2');?>">
  <link rel="stylesheet" href="<?=base_url('resources/assets/Dashboard/global/vendor/datatables.net-rowgroup-bs4/dataTables.rowgroup.bootstrap4.min599c.css?v4.0.2');?>">
  <link rel="stylesheet" href="<?=base_url('resources/assets/Dashboard/global/vendor/datatables.net-scroller-bs4/dataTables.scroller.bootstrap4.min599c.css?v4.0.2');?>">
  <link rel="stylesheet" href="<?=base_url('resources/assets/Dashboard/global/vendor/datatables.net-select-bs4/dataTables.select.bootstrap4.min599c.css?v4.0.2');?>">
  <link rel="stylesheet" href="<?=base_url('resources/assets/Dashboard/global/vendor/datatables.net-responsive-bs4/dataTables.responsive.bootstrap4.min599c.css?v4.0.2');?>">
  <link rel="stylesheet" href="<?=base_url('resources/assets/Dashboard/global/vendor/datatables.net-buttons-bs4/dataTables.buttons.bootstrap4.min599c.css?v4.0.2');?>">

  <!-- Page -->
  <link rel="stylesheet" href="<?=base_url('resources/assets/Dashboard/center/assets/examples/css/dashboard/v1.min599c.css?v4.0.2');?>">
  <link rel="stylesheet" href="<?=base_url('resources/assets/Dashboard/center/assets/examples/css/uikit/icon.min599c.css?v4.0.2');?>">
  <link rel="stylesheet" href="<?=base_url('resources/assets/Dashboard/center/assets/examples/css/advanced/animation.min599c.css');?>">
  <link rel="stylesheet" href="<?=base_url('resources/assets/Dashboard/center/assets/examples/css/uikit/buttons.min599c.css?v4.0.2');?>">
  <link rel="stylesheet" href="<?=base_url('resources/assets/Dashboard/center/assets/examples/css/advanced/toastr.min599c.css?v4.0.2');?>">
  <link rel="stylesheet" href="<?=base_url('resources/assets/Dashboard/center/assets/examples/css/forms/advanced.min599c.css?v4.0.2');?>">
  <link rel="stylesheet" href="<?=base_url('resources/assets/Dashboard/center/assets/examples/css/tables/datatable.min599c.css?v4.0.2');?>">

  <!-- Fonts -->
  <link rel="stylesheet" href="<?=base_url('resources/assets/Dashboard/global/fonts/web-icons/web-icons.min599c.css?v4.0.2');?>">
  <link rel="stylesheet" href="<?=base_url('resources/assets/Dashboard/global/fonts/brand-icons/brand-icons.min599c.css?v4.0.2');?>">
  <link rel='stylesheet' href="<?=base_url('resources/assets/Dashboard/fonts.googleapis.com/cssade9.css?family=Roboto:300,400,500,300italic');?>">

  <link rel="stylesheet" href="<?=base_url('resources/assets/Dashboard/global/fonts/weather-icons/weather-icons.min599c.css?v4.0.2');?>">
  <link rel="stylesheet" href="<?=base_url('resources/assets/Dashboard/global/fonts/font-awesome/font-awesome.min599c.css?v4.0.2');?>">
  <link rel="stylesheet" href="<?=base_url('resources/assets/Dashboard/global/fonts/themify/themify.min599c.css?v4.0.2');?>">

  <!--[if lt IE 9]>
    <script src="../global/vendor/html5shiv/html5shiv.min.js?v4.0.2"></script>
    <![endif]-->

  <!--[if lt IE 10]>
    <script src="../global/vendor/media-match/media.match.min.js?v4.0.2"></script>
    <script src="../global/vendor/respond/respond.min.js?v4.0.2"></script>
    <![endif]-->

  <!-- Scripts -->
  <script src="<?=base_url('resources/assets/Dashboard/global/vendor/breakpoints/breakpoints.min599c.js?v4.0.2');?>"></script>
  <script>
    Breakpoints();
  </script>

  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

</head>