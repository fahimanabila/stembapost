<html>
<link rel="icon" href="<?php echo base_url('assets/logo.png') ?>" />
<title>
Stembapost Broadcast</title>
<head>

<link rel="stylesheet" href="<?php echo base_url('assets/login/font-awesome/css/font-awesome.min.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/login/css/style.css') ?>">
<link href="<?php echo base_url('assets/AdminLTE-2.4.0-rc/') ?>bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style type="text/css">
  .zoom {
  transition: transform .2s;
}

.zoom:hover {
  -ms-transform: scale(1.3); /* IE 9 */
  -webkit-transform: scale(1.3); /* Safari 3-8 */
  transform: scale(1.3); 
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}
</style>
<body style="background-color:#dce0e0">
  <div class="col-lg-12">
    <div class="col-md-12">
      <div class="content-fluid text-left" style="background-color:white;padding-top: 10px;padding-left: 50px;
        padding-bottom: 10px;margin-top:25px">
        <h3 style="font-family: Spartan;"><i class="fa fa-gears"></i> <b>SETUP</b></h3>
      </div>
      <div class="content-fluid" style="background-color:white;margin-bottom:85px;padding-top: 10px;padding-bottom: 50px;padding-left:50px;padding-right:50px">
            <div class="content-fluid bg-white bg-light border-top border-info" style="margin-top:30px; height:100%">
                <?php if ($status[0]['user_details_id'] == '1000') {?>
                  <select id="id_setup" name="id_setup" onchange="getOptionSetup(this)" class="form-control select2 text-center select2-hidden-accessible" style="width:500px;">
                    <option> -- Choose Setup -- </option>
                    <option value="1"> Manage Profile </option>
                    <option value="2"> Set User Previlges </option>
                    <option value="3"> Create Group </option>
                    <option value="4"> Import Contact (.xls) </option>
                  </select>
                  <?php }else if ($status[0]['user_details_id'] == '100') {?>
                  <select id="id_setup" name="id_setup" onchange="getOptionSetup(this)" class="form-control select2 text-center select2-hidden-accessible" style="width:500px;">
                    <option> -- Choose Setup -- </option>
                    <option value="1"> Manage Profile </option>
                    <option value="3"> Create Group </option>
                    <option value="4"> Import Contact (.xls) </option>
                  </select>
                  <?php }else if ($status[0]['user_details_id'] == '10') {?>
                    <select id="id_setup" name="id_setup" onchange="getOptionSetup(this)" class="form-control select2 text-center select2-hidden-accessible" style="width:500px;">
                    <option> -- Choose Setup -- </option>
                    <option value="1"> Manage Profile </option>
                  </select>
                  <?php } ?>
                </div>
                <!-- ketika klik  -->
                <div class="setup" style="margin-top: 90px;margin-bottom: 75px;">

                </div>
            </div>
    </div>
        
  <script type="text/javascript">
       
  </script>
</div>
</div>
</body>
</html>