<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" href="<?php echo base_url('assets/logo.png') ?>" />
  <title>Sign Up | Stembapost</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE-2.4.0-rc/') ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE-2.4.0-rc/') ?>bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE-2.4.0-rc/') ?>bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE-2.4.0-rc/') ?>dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE-2.4.0-rc/') ?>plugins/iCheck/square/blue.css">

  <link type="text/css" rel="stylesheet" href="<?= base_url('assets/plugins/select2/select2.min.css') ?>" />

  <link type="text/css" rel="stylesheet" href="<?= base_url('assets/plugins/iCheck/skins/all.css') ?>" />

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<style type="text/css">
    .swal-wide{
    width:850px !important;
}
</style>
    <body class="hold-transition login-page" style="background: linear-gradient(to left, rgb(189, 195, 199), rgb(44, 62, 80));">
        <div class="col-lg-4 col-md-4 col-sm-3 col-xs-2"></div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-8" style="color:white;margin-top: 100px;overflow: auto;">
            <!-- <div class="login-logo" style="color:white">
                <b>Sign Up</b> StembaPost
            </div>
                <div class="login-box-body"> -->
                <center><h1><b>SIGN UP</b></h1></center>
                    <p class="login-box-msg"></p>
                <div class="form-group has-feedback">
                  <!-- <span class="glyphicon glyphicon-th-list form-control-feedback"></span> -->
                    <select id="slcPriv" name="slcPriv" onchange="privilegeSelection(this)" class="form-control select2 selectPriviledge" style="font-family: sans-serif;border-radius: 50px">
                        <option value="" > Pilih  </option>
                        <option value="1000" >Super User</option>
                        <option value="100"> Admin </option>
                        <option value="10"> User </option>
                    </select>
                </div>

                <div class="form-group has-feedback unique_code_div">
                    <!-- <span style="color:rgb(32, 58, 67);" class="glyphicon glyphicon-barcode form-control-feedback"></span> -->
                        <!-- <input disabled name="uniqueCode" id="txtuniquecode" type="text" class="form-control" style="font-family: sans-serif;border-radius: 50px;" placeholder="Insert Unique Code">  -->
                </div>
                <div class="form-group has-feedback">
                    <span class="rematchCode"></span>
                </div>

                <div class="form-group has-feedback">
                  <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-4"></div>
                    <div class="col-md-4 col-sm-4 col-xs-4"></div>
                    <div class="col-md-4 col-sm-4 col-xs-4"></div>
                  </div>
                </div>


                <div class="form-group has-feedback full_name_div">
                    <!-- <span style="color:rgb(32, 58, 67);" class="glyphicon glyphicon-user form-control-feedback"></span> -->
                        <!-- <input name="username" id="username" type="text" class="form-control" style="font-family: sans-serif;border-radius: 50px;" placeholder="Username"> -->
                </div>
                
                <div class="form-group has-feedback username_div">
                    <!-- <span style="color:rgb(32, 58, 67);" class="glyphicon glyphicon-info-sign form-control-feedback"></span> -->
                            <!-- <input name="fullname" id="fullname" type="text" class="form-control" style="font-family: sans-serif;border-radius: 50px;" placeholder="Insert Full Name"> -->
                </div>

                <div class="form-group has-feedback password_div">
                    <!-- <span style="color:rgb(32, 58, 67);" class="glyphicon glyphicon-lock form-control-feedback"></span> -->
                        <!-- <input name="password" id="password" type="password" class="form-control"  style="font-family: sans-serif;border-radius: 50px;"  placeholder="Password"> -->
                </div>

                <div class="form-group has-feedback repassword_div">
                    <!-- <span style="color:rgb(32, 58, 67);" class="glyphicon glyphicon-lock form-control-feedback"></span><input name="repassword" id="repassword" type="password" class="form-control"  style="font-family: sans-serif;border-radius: 50px;"  placeholder="Re-Password"> -->

                </div>

                <div class="form-group has-feedback checkbox">
                    <!-- <input type="checkbox" class="form-control" id="checkoutPass"> -->
                </div>

                 <div class="form-group has-feedback">
                    <span class="repassword_code" style="margin-left: 10px"></span>
                </div>
                <div class="row">
                  <div class="col-md-4 col-sm-4 col-xs-4">
                         <!-- <a href="<?php echo base_url('')?>"> -->
                            <button type="button" onclick="window.location.replace(baseurl)" id="btnBack" class="btn btn-primary btn-block btn-flat" style="border-radius: 100px;">
                            <i class="fa fa-reply"></i> BACK</button>
                         <!-- </a> -->
                  </div>
                  <div class="col-md-4 col-sm-4 col-xs-4" ></div>
                  <div class="col-md-4 col-sm-4 col-xs-4 signup test">
                      <!-- <button type="button" onclick="signUp(this)" id="btnSignUp" class="btn btn-success btn-block btn-flat" style="border-radius: 100px;"><i class="fa fa-check"></i> SIGN UP</button> -->
                  </div>
                </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-3 col-xs-2"></div>
      <!-- /.login-box-body -->

    </div>
<!-- /.login-box -->
<!-- jQuery 3 -->
<script src="<?= base_url('assets/');?>plugins/jQuery/jquery-3.2.1.min.js"></script>
<script src="<?= base_url('assets/');?>dist/js/custom.js"></script>
<!-- <script src="<?= base_url('assets/');?>dist/js/sweetAlert.js"></script> -->
<script src="<?= base_url('assets/');?>plugins/sweetalert2.all.js"></script>
<script src="<?= base_url('assets/');?>plugins/sweetalert2.all.min.js"></script>

<script src="<?php echo base_url('assets/AdminLTE-2.4.0-rc/') ?>bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('assets/AdminLTE-2.4.0-rc/') ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?php echo base_url('assets/AdminLTE-2.4.0-rc/') ?>plugins/iCheck/icheck.min.js"></script>

<script type="text/javascript" src="<?= base_url('assets/plugins/select2/select2.full.min.js') ?>"></script>
<script>
  var baseurl = "<?= base_url() ?>"
</script>
<script>
  $(function () {
    $('.checkoutPass').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });

 
</script>
</body>
</html>
