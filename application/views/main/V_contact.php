<html>
<link rel="icon" href="<?php echo base_url('assets/logo.png') ?>" />
<title>
Stembapost Broadcast</title>
<head>
<!-- <link href="<?php echo base_url('assets/css/sb-admin-2.min.css')?>" rel="stylesheet"> -->
<!-- <link href="<?php echo base_url('bootstrap/css/bootstrap.css')?>" rel="stylesheet"> -->
<!-- <link href="<?php echo base_url('bootstrap/css/font-awesome.min.css')?>" rel="stylesheet"> -->
<link rel="stylesheet" href="<?php echo base_url('assets/login/font-awesome/css/font-awesome.min.css') ?>">
 <!-- <link rel="stylesheet" href="<?php echo base_url('assets/login/css/this_for_form.css') ?>"> -->
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

.dataTables_length{
  float: left!important;
  margin-bottom: 10px;
}

.paging_simple_numbers{
   float: right!important;
}
.dataTables_info{
  padding-top: 50px;
  float: left!important;
}
.dataTables_filter{
   float: right!important;
}

.dataTables_filter .input-sm{
  margin-left: 5px;
}
</style>
<body style="background-color:#dce0e0">
  <div class="col-lg-12">
    <div class="col-md-12">
      <div class="content-fluid text-left" style="background-color:white;padding-top: 10px;padding-left: 50px;margin-top: 25px;
        padding-bottom: 20px;">
        <h3 style="font-family: Spartan;"><i class="fa fa-user"></i> <b>LIST CONTACTS</b></h3>
      </div>
      <div class="content-fluid" style="background-color:white;margin-bottom:85px;padding-top: 10px;padding-bottom: 50px;padding-left:50px;padding-right:50px">
            <div class="content-fluid bg-white bg-light border-top border-info" style="margin-top:30px; height:100%">
               <select id="slcCon" name="slcCon_name" onchange="getOptionContact(this)" class="form-control select2 text-center select2-hidden-accessible" style="width:500px;">
                    <option> -- Choose Group -- </option>
                    <?php foreach ($list as $k ){ ?>
                    <option value="<?= $k['class_id']?>"><?= $k['class_name']?></option>
                    <?php }?>
                  </select>
                  <div class="contact" style="margin-top: 50px;">
                    
                  </div>
                </form>
                </div>
            </div>
      </div>
      </div>
</div>
</body>
</html>

<script type="text/javascript">
$(document).ready(function(){
            $('.table-address').DataTable({
              "paging": true,
              "info":     true,
              "language" : {
              "zeroRecords": " "             
              }
            })
})

function getOptionContact(th) {
      var class_id = $('#slcCon').val();
      console.log(class_id)
      $('div.contact').html("<center><img id='loading12' style='width:500px ;margin-top: 2%;' src='"+baseurl+"assets/img/gif/loading99.gif'/><br /></center><br />")
      $.ajax({
                    type: "POST",
                    url: baseurl+"ajax/getContact",
                    data:{
                      class_id:class_id
                    },
                    success: function(response) {
                      $('div.contact').html(response);
                      }
              })
  
}
</script>