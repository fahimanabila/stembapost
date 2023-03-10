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
  <form method="post" action="<?php echo base_url('ajax/getExport')?>">
  <div class="col-lg-12">
    <div class="col-md-12">
      <div class="content-fluid text-left" style="background-color:white;padding-top: 10px;padding-left: 50px;
        padding-bottom: 20px;margin-top: 25px;">
        <h3 style="font-family: Spartan;"><i class="fa fa-book"></i> <b>FIND ADDRESS</b></h3>
      </div>
      <div class="content-fluid col-md-12" style="height:100%;background-color:white;margin-bottom:85px;padding-top: 10px;padding-bottom: 50px;padding-left:50px;padding-right:50px">
        <div class="content-
        fluid bg-white bg-light border-top border-info" style="margin-top:30px; height:100%">
          <div class="col-md-1"></div>
            <div class="col-md-12">
              <span class="pull-left" style="margin-bottom:20px;margin-left: 65px;"><i>Masukkan parameter pencarian</i></span>
          <div class="col-md-12" style="margin-left: 50px">
          <table style="width: 100%;margin-bottom: 50px;" class="text-left">
            <tr>
              <td style="width: 18%"><span><label>Name</label></span></td>
              <td style="width: 20%;padding-bottom: 10px;"><input placeholder="Insert Name..." type="text" id="name_id" name="nama" class="form-control" style="width:300px;"/></td>

              <td style="width: 20%;padding-left:30px;"><span><label>Department</label></span></td>
              <td style="width: 20%;padding-bottom: 10px;">
                  <select onchange="onFilterClass(this)" id="department_id_add" name="departement" class="form-control select2 select2-hidden-accessible" style="width:300px;">
                                    <option value="" > -- Choose Department --  </option>
                                    <?php foreach ($department as $k){ ?>
                                    <option value="<?= $k['department_id']?>"><?= $k['department_name']?></option>
                                    <?php } ?>
                  </select>
              </td>
            </tr>

            <tr>
              <td><span><label>Status</label></span></td>
              <td style="width: 20%;padding-bottom: 10px;">
                  <select  id="status_id_add" name="status" class="form-control select2 select2-hidden-accessible iniStatus" style="width:300px;" >
                                    <option value=""> -- Choose Status --  </option>
                                    <option value="Y" > Active </option>
                                    <option value="N" > Inactive </option>
                  </select>
              </td>

              <td style="width: 20%;padding-left:30px;"><span><label>Class/Group</label></span></td>
              <td style="width: 20%;padding-bottom: 10px;">
                  <select  data-toggle="tooltip" data-position="top" title="You are allowed to skip" id="class_id_add" name="group" class="form-control select2 select2-hidden-accessible" style="width:300px;">
                                    <option value="" > -- Choose Class/Group --  </option>
                                    <?php foreach ($class as $k){ ?>
                                    <option value="<?= $k['class_id']?>"><?= $k['class_name']?></option>
                                    <?php } ?>
                  </select>
              </td>
            </tr>

            <tr>
              <td><span><label>Phone Number</label></span></td>
              <td style="width: 20%;padding-bottom: 10px;">
                <input placeholder="Insert Phone Number..." type="text" id="phone_num_id" name="phone" class="form-control" style="width:300px;"/>
              </td>

              <td style="width: 20%;padding-left:30px;"><span><label>NIS/NIP</label></span></td>
              <td style="width: 20%;padding-bottom: 10px;">
                  <input placeholder="Insert NIS/NIP..." type="text" id="nis_nip" name="nip" class="form-control" style="width:300px;"/>
              </td>
              <td></td>
              <td></td>
            </tr>

            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td style="margin-top:30px;">
                <button type="submit" class="btn btn-success btn-sm pull-right" style="width: 85px; margin-left: 5px;"><i class="fa fa-file-excel-o"></i>Get (.xls) </button>
              </form>
                <button  onclick="filterData(this)" type="button" class="btn btn-primary btn-sm pull-right" style="width: 85px;"><i class="fa fa-check"></i> Find</button> 
                <button  onclick="resetData(this)" type="button" class="btn btn-danger btn-sm pull-right" style="width: 85px; margin-left: 5px; margin-right: 5px;"><i class="fa fa-trash"></i> Reset</button>
            </tr>
          </table>
            <div class="table-data" style="padding-right:100px">
              
            </div>
        </div>
      <!--   <div class="col-md-1"></div>
        </div>
          <div class="col-md-1"></div> -->
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
</script>