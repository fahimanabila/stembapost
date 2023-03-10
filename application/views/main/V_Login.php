<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" href="<?php echo base_url('assets/logo.png') ?>" />
  <title>Login Stembapost</title>
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

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<style type="text/css">
  /*input[type=text], input[type=password], textarea {
  -webkit-transition: all 0.30s ease-in-out;
  -moz-transition: all 0.30s ease-in-out;
  -ms-transition: all 0.30s ease-in-out;
  -o-transition: all 0.30s ease-in-out;
  outline: none;
  padding: 3px 0px 3px 3px;
  margin: 5px 1px 3px 0px;
  border: 1px solid #DDDDDD;
}
 
input[type=text]:focus, input[type=password], textarea:focus {
  box-shadow: 0 0 5px rgba(81, 203, 238, 1);
  padding: 3px 0px 3px 3px;
  margin: 5px 1px 3px 0px;
  border: 1px solid rgba(81, 203, 238, 1);
}*/
</style>
<body class="hold-transition login-page" style="background: linear-gradient(to left, rgb(189, 195, 199), rgb(44, 62, 80));">
    <div class="col-lg-4 col-md-4 col-sm-3 col-xs-2"></div>
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-8" style="color:white;margin-top: 200px; overflow: auto;">
      <!-- <div class="login-logo" style="color:white"> -->
        <!-- <b>Login</b> StembaPost -->
      <!-- </div> -->
      <!-- /.login-logo -->
      <!-- <div class="login-box-body" style="border-radius: 10px"> -->
        <div>
        <center><h1><b>LOGIN</b></h1></center>
        <p class="login-box-msg"></p>
         <form action="<?php echo base_url('login/aksi_login'); ?>" method="post"> 
          <div class="form-group has-feedback">

            <input name="username" type="text" class="form-control" style="font-family: sans-serif;border-radius: 100px" placeholder="Username">

            <span style="color: rgb(32, 58, 67)" class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">

            <input name="password" type="password" class="form-control"  style="font-family: sans-serif;border-radius: 100px"  placeholder="Password">

            <span style="color: rgb(32, 58, 67)" class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-4 pull-right">
              <button type="submit" class="btn btn-success btn-block btn-flat" style="border-radius: 100px">Sign In</button>
            </div>
            <div class="col-md-8 col-sm-8 col-xs-8 pull-right" style="padding-top: 0px">
              Don't have account?<a href="<?php echo base_url('SignUp') ?>" style="color: #00cde8"> Sign Up Now! </a><br>
            </div>
            <!-- /.col -->
          </div>
        </form>

        
        <!-- /.social-auth-links -->

        
        <!-- <a href="register.html" class="text-center">Register a new membership</a> -->

      </div>
      <!-- /.login-box-body -->
    </div>
    <div class="col-lg-4 col-md-4 col-sm-3 col-xs-2"></div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="<?php echo base_url('assets/AdminLTE-2.4.0-rc/') ?>bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('assets/AdminLTE-2.4.0-rc/') ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?php echo base_url('assets/AdminLTE-2.4.0-rc/') ?>plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
