<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" href="<?php echo base_url('assets/logo.png') ?>" />
  <title>Pusat Info | STEMBA</title>
  <link rel="stylesheet" href="<?= base_url('assets/bower_components/bootstrap/dist/css/bootstrap.min.css');?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('assets/');?>bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?= base_url('assets/');?>bower_components/Ionicons/css/ionicons.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?= base_url('assets/');?>bower_components/jvectormap/jquery-jvectormap.css">
  <!-- DataTables -->
  <!-- <link rel="stylesheet" href="<?= base_url('assets/');?>/bower_components/datatables.net-bs/css/dataTables.bootstrap.css"> -->
  <link rel="stylesheet" href="<?= base_url('assets/plugins/datatables/datatables.min.css');?>"> 
  <link rel="stylesheet" href="<?= base_url('assets/plugins/datatables/datatables.css');?>"> 
  <!-- <link rel="stylesheet" href="<?= base_url('assets/');?>dist/css/AdminLTE.min.css"> -->
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?= base_url('assets/');?>dist/css/skins/_all-skins.min.css">
  <link type="text/css" rel="stylesheet" href="<?= base_url('assets/plugins/select2/select2.min.css') ?>" />
  <link type="text/css" rel="stylesheet" href="<?= base_url('assets/plugins/bootstrap/3.3.7/css/bootstrap.css') ?>" />
    <link type="text/css" rel="stylesheet" href="<?= base_url('assets/plugins/bootstrap/4.0.0/card.css') ?>" />
  <link type="text/css" rel="stylesheet" href="<?= base_url('assets/plugins/select2/select2.min.css') ?>" />
  <link type="text/css" rel="stylesheet" href="<?= base_url('assets/plugins/Font-Awesome/3.2.0/css/font-awesome.css') ?>" />
    <link type="text/css" rel="stylesheet" href="<?= base_url('assets/plugins/Font-Awesome/4.3.0/css/font-awesome.min.css') ?>" />
    <link type="text/css" rel="stylesheet" href="<?= base_url('assets/plugins/Font-Awesome/4.3.0/css/font-awesome-animation.css') ?>" />
    <link type="text/css" rel="stylesheet" href="<?= base_url('assets/plugins/ionicons/css/ionicons.min.css') ?>" />
    <link type="text/css" rel="stylesheet" href="<?= base_url('assets/theme/css/AdminLTE.min.css') ?>" />
    <link type="text/css" rel="stylesheet" href="<?= base_url('assets/theme/css/skins/_all-skins.min.css') ?>" />
  <!-- <link type="text/css" rel="stylesheet" href="<?= base_url('assets/plugins/datatables-latest/datatables.min.css') ?>" /> -->
  <!-- <link type="text/css" rel="stylesheet" href="<?= base_url('assets/plugins/dataTables/dataTables.bootstrap.css') ?>" />
    <link type="text/css" rel="stylesheet" href="<?= base_url('assets/plugins/dataTables/buttons.dataTables.min.css') ?>" />
    <link type="text/css" rel="stylesheet" href="<?= base_url('assets/plugins/dataTables/extensions/FixedColumns/css/dataTables.fixedColumns.min.css') ?>" /> -->
  <link type="text/css" rel="stylesheet" href="<?= base_url('assets/plugins/touchspin/jquery.bootstrap-touchspin.min.css') ?>" />
  <link type="text/css" rel="stylesheet" href="<?= base_url('assets/plugins/pace/center-atom-pace.css') ?>" />
  <link type="text/css" rel="stylesheet" href="<?= base_url('assets/plugins/jQueryUI/jquery-ui.css') ?>" />
  <link type="text/css" rel="stylesheet" href="<?= base_url('assets/plugins/uniform/themes/default/css/uniform.default.css') ?>" />
  <link type="text/css" rel="stylesheet" href="<?= base_url('assets/plugins/inputlimiter/jquery.inputlimiter.1.0.css') ?>" />
  <link type="text/css" rel="stylesheet" href="<?= base_url('assets/plugins/chosen/chosen.min.css') ?>" />
  <link type="text/css" rel="stylesheet" href="<?= base_url('assets/plugins/colorpicker/css/colorpicker.css') ?>" />
  <link type="text/css" rel="stylesheet" href="<?= base_url('assets/plugins/intro.js-2.9.3/introjs.css') ?>" />
  <link type="text/css" rel="stylesheet" href="<?= base_url('assets/plugins/dropzone/basic.min.css') ?>" />
  <link type="text/css" rel="stylesheet" href="<?= base_url('assets/plugins/dropzone/dropzone.min.css') ?>" />
  <link type="text/css" rel="stylesheet" href="<?= base_url('assets/plugins/tagsinput/jquery.tagsinput.css') ?>" />
  <link type="text/css" rel="stylesheet" href="<?= base_url('assets/plugins/daterangepicker-master/daterangepicker.css') ?>" />
  <link type="text/css" rel="stylesheet" href="<?= base_url('assets/plugins/datepicker/css/datepicker.css') ?>" />
  <link type="text/css" rel="stylesheet" href="<?= base_url('assets/plugins/datetimepicker/build/jquery.datetimepicker.min.css') ?>" />
  <link type="text/css" rel="stylesheet" href="<?= base_url('assets/plugins/timepicker/css/bootstrap-timepicker.min.css') ?>" />
  <link type="text/css" rel="stylesheet" href="<?= base_url('assets/plugins/switch/static/stylesheets/bootstrap-switch.css') ?>" />
  <link type="text/css" rel="stylesheet" href="<?= base_url('assets/plugins/validator/bootstrapValidator.min.css') ?>" />
  <link type="text/css" rel="stylesheet" href="<?= base_url('assets/plugins/validator/bootstrapValidator.css') ?>" />
  <link type="text/css" rel="stylesheet" href="<?= base_url('assets/plugins/qtip/jquery.qtip.css') ?>" />
  <link type="text/css" rel="stylesheet" href="<?= base_url('assets/plugins/iCheck/skins/all.css') ?>" />
  <link type="text/css" rel="stylesheet" href="<?= base_url('assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.css') ?>" />
  <link type="text/css" rel="stylesheet" href="<?= base_url('assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') ?>" />
  <link type="text/css" rel="stylesheet" href="<?= base_url('assets/plugins/redactor/css/redactor.css') ?>" />
  <link type="text/css" rel="stylesheet" href="<?= base_url('assets/plugins/fine-uploader/fine-uploader-new.min.css') ?>" />
  <link type="text/css" rel="stylesheet" href="<?= base_url('assets/plugins/multiselect/css/bootstrap-multiselect.css') ?>" />
  <link type="text/css" rel="stylesheet" href="<?= base_url('assets/plugins/mdtimepicker/mdtimepicker.css') ?>" />
  <link type="text/css" rel="stylesheet" href="<?= base_url('assets/css/custom.css') ?>" />
  <link type="text/css" rel="stylesheet" href="<?= base_url('assets/css/animate.css') ?>" />
    <script src="<?= base_url('assets/plugins/jquery-2.1.4.min.js') ?>" type="text/javascript"></script>
  <script src="<?= base_url('assets/plugins/jQueryUI/jquery-ui.min.js') ?>" type="text/javascript"></script>
    <script src="<?= base_url('assets/plugins/bootstrap/3.3.7/js/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('assets/plugins/modernizr-2.6.2-respond-1.1.0.min.js') ?>" type="text/javascript"></script>

  <!-- Google Font -->
  <style type="text/css">
  @font-face {
  font-family: Passion;
  src: url(<?php echo base_url('assets/fonts/PassionOne-Regular.woff')?>);
  }
  </style>
  <link rel="stylesheet"
        href="<?= base_url('assets/fonts/Spartan-VariableFont_wght.ttf') ?>">
</head>
<body class="hold-transition skin-blue light sidebar-mini">
<div class="wrapper">

  <header class="main-header">

    <!-- Logo -->
    <a href="<?= base_url('index')?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>SI</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Stemba</b> Info</span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
    </nav>
  </header>