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
      <div class="content-fluid text-left" style="background-color:white;padding-top: 10px;padding-left: 50px;margin-top:25px;;
        padding-bottom: 20px;">
        <h3 style="font-family: Spartan;"><i class="fa fa-trash"></i> <b>TRASH</b></h3>
      </div>
      <div class="content-fluid" style="background-color:white;padding-top: 10px;padding-bottom: 50px;padding-left:50px;padding-right:50px">
            <div class="content-fluid bg-white bg-light border-top border-info" style="margin-top:30px; height:100%">
                  <div style="overflow:auto;">
                    <table class="table table-address table-bordered table-hover text-center" style="min-width: 130%">
                      <thead class="toscahead" style="background-color: #ff0000b5;color:white;">
                  <tr class="bg-default">
                      <th class="text-center" style="width: 5%">No</th>
                      <th class="text-center" style="width: 8%">Message ID</th>
                      <th class="text-center" style="width: 15%">Sender Number</th>
                      <th class="text-center" style="width: 20%">Created By</th>
                      <th class="text-center" style="width: 15%">Creation Date</th>
                      <th class="text-center" style="width: 35%">Messages</th>
                      <th class="text-center" style="width: 15%">Receiver Number</th>
                      <th class="text-center" style="width: 12%">Attachment</th>
                      <th class="text-center" style="width: 3%">Status</th>
                      <th class="text-center" style="width: 7%">Action</th>
                    </tr>
                </thead>
                  <tbody>
                    <?php $i=1; foreach ($trash as $k) { ?>
                    <tr>
                      <td class="text-center"><?php echo $i;?></td>
                      <td class="text-center"><?php echo $k['message_id'] ?></td>
                      <td class="text-center">
                        <?php if ($k['sender_number'] == ''){ ?>
                        <i>None</i>
                        <?php }else { ?> 
                        <?php echo $k['sender_number'] ?>
                        <?php } ?></td>
                      <td class="text-center">
                        <b><?php echo $k['username'] ?></b><br/>
                        <i>(<?php echo $k['prev_name'] ?>)</i>
                      </td>

                      <td class="text-center">
                        <?php echo date('d-M-Y H:i:s', strtotime($k['creation_date'])) ?>
                      </td>

                      <td class="text-left">
                        <p align="justify">
                          <b> From : <?php echo $k['from_sender']?></b><br/>
                          <b>Subject : <?php echo $k['subject']?></b></br> 
                          <?php echo $k['messages'] ?>
                        </p>
                      </td>

                      <?php $length = round(strlen($k['receiver_number'])/5, 0);?>
                      <td class="text-left">
                        <?php echo substr($k['receiver_number'], 0, $length); ?>
                      </td>

                      <td class="text-center">
                        <?php if ($k['attachment'] == ''){?>
                          <button onclick="alert('Tidak ada berkas yang diuploadkan')" type="button" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i> View </button>
                        <?php }else if ($k['attachment'] !== ''){ ?>
                        <a href="<?php echo base_url('assets/upload/'.$k['attachment'])?>" target="_blank">
                          <button type="button" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i> View </button>
                        </a>
                        <?php }?>
                      </td>

                      <td class="text-center">
                       <?php if ($k['active_flag'] == 'N'){?>
                       <label class="label label-danger"><i class="fa fa-times"></i> Trash</label>
                       <?php }else{} ?>
                      </td>

                      <td class="text-center">
                        <button type="button" onclick="permanentDelete(<?php echo $k['message_id'] ?>)" class="btn btn-xs btn-danger" style="width:100px"><i class="fa fa-trash"></i> Delete </button>
                      </td>
                    </tr>
                    <?php $i++;} ?>
                    
                  </tbody>
                    </table>
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
              "zeroRecords": "Yeay! there is no trash exist ;)"             
              }
            })
})
</script>