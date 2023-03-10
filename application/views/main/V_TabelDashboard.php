<style type="text/css">
  #filter tr td{padding: 5px}
  .text-left span {
    font-size: 36px;
tr:first-child {background-color: #ffccf9;}
  }
/*.blink_me {
  animation: blinker 1.5s linear infinite;
}

@keyframes blinker {
  50% {
    opacity: 0;
  }
}*/

table.tb_sms tr:first-child {
  font-weight: bold;
}


.zoom {
  transition: transform .2s;
}

.zoom:hover {
  -ms-transform: scale(1.3); /* IE 9 */
  -webkit-transform: scale(1.3); /* Safari 3-8 */
  transform: scale(1.3); 
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.dataTables_filter{
  float: right!important;
}

.dataTables_filter .input-sm{
  margin-left: 5px;
}

.paging_simple_numbers{
   float: right!important;
}
.dataTables_info{
  padding-top: 30px;
}

</style>
<!-- <head> 
  <meta http-equiv="refresh" content="30"/> 
  <meta name="viewport" content="initial-scale=1"/>
</head> -->
<br/>
<br/>
<section id="history" class="content">
  <div class="inner" >
    <div class="row">
      <div class="col-lg-12" style="margin-left:20px;padding-right:50px;">
        <div class="row">
          <div class="col-lg-12">
            <div class="text-left">
              <h5><span style="font-family: Spartan;font-size: 30px;"><b><i class="fa fa-clock-o"></i> HISTORY </b></span></h5>
            </div>
          </div>
        </div>
        <br />
        <div class="row">
          <div class="col-lg-12">
            <div class="box itsfun1">
                <div class="box-header with-border">
                  <br/>
                </div>
                <!-- <div id="tableHolder"> -->
                <!-- <div class="box-body"> -->
                  <!-- table-striped  table-bordered -->
                  <div style="overflow:auto;">
                  <table class="table table-stembapost table-bordered table-hover" style="min-width: 130%">
                <thead class="toscahead">
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
                  <tbody id="tbodyDash">
                    <?php $i=1; foreach ($history as $k) { ?>
                    <tr class="<?php echo $k['message_id'] ?>">
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
                        <?php echo substr($k['receiver_number'], 0, $length); ?>...
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
                       <?php if ($k['active_flag'] == 'Y'){?>
                       <label class="label label-success"><i class="fa fa-check"></i> Sent</label>
                       <?php }else{} ?>
                      </td>

                      <td class="text-center">
                        <button type="button" onclick="moveTrash(<?php echo $k['message_id'] ?>)" class="btn btn-xs btn-danger" style="width:100px"><i class="fa fa-times"></i> Delete</button>
                        <button type="button" data-target="MdlDetail" data-toggle="modal" onclick="DetailMSg(<?php echo $k['message_id'] ?>)" class="btn btn-xs btn-warning" style="width:100px; margin-top: 5px;"><i class="fa fa-external-link-square"></i> Detail</button>
                      </td>
                    </tr>
                    <?php $i++;} ?>
                    
                  </tbody>
              </table>
                </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="modal fade MdlDetail"  id="MdlDetail" tabindex="1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog modal-sm" style="width:1000px;" role="document">
        <div class="modal-content">
            <div class="modal-header" style="width: 100%;" >
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body" style="width: 100%;">
                <div class="modal-tabel" >
                </div>
            </div>

            <div class="modal-footer">
                <div class="col-md-2 pull-left">
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
  $(document).ready(function(){
  $('.table-stembapost').DataTable({
    "paging": true,
    "info":     true,
    "language" : {
    "zeroRecords": " "             
    }
  })

  })
</script>
<!-- <script>
var estimasiw = $('.hidTxt').val();
console.log(estimasiw)
var countDownDate = new Date(estimasiw).getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);

</script> -->
