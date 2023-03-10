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
  transform: scale(1.2); 
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.zoom2 {
  transition: transform .2s;
}

.zoom2:hover {
  -ms-transform: scale(1.3); /* IE 9 */
  -webkit-transform: scale(1.3); /* Safari 3-8 */
  transform: scale(1.1); 
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.blink_me {
  animation: blinker 1.5s linear infinite;
}

@keyframes blinker {
  50% {
    opacity: 0;

}
.table-responsive {
  max-width:100%;
  overflow-x: auto;
  }
</style>
<body style="background-color:#dce0e0">
<form method="post" enctype="multipart/form-data" action="<?php echo base_url('Main')?>">
  <div class="col-lg-12">
    <div class="col-md-12">
      <div class="content-fluid text-left" style="background-color:white;margin-top:25px;padding-top: 10px;padding-left: 50px;
        padding-bottom: 20px;">
        <h3 style="font-family: Spartan;"><i class="fa fa-bullhorn"></i> <b>NEW BROADCAST</b></h3>
      </div>
        <div style="margin-top: 10px;margin-bottom: 10px"></div>
            <div class="content-fluid text-left" style="background-color:#708090;padding-top: 20px;padding-left: 50px;padding-bottom: 50px;min-height: 125px">
              <div class="col-md-4">
                <span class="text-bold-400 text-left" style="font-size:15px;font-family: sans-serif; color:black; margin-top:100px;color:white">
                  <!-- clock -->
                    <b><h4><p id="date"></p></h4>
                    <div id="clock">
                      <span class="unit" style="font-size: 30px" id="hours"></span> :
                      <span class="unit" style="font-size: 30px" id="minutes"></span> : 
                      <span class="unit" style="font-size: 30px" id="seconds"></span>  
                      <span class="unit" style="font-size: 30px" id="ampm"></span> 
                    </div>
                  </b>
                </span>
              </div>
                  <br/>
              <div class="col-md-4 pull-right">
                    <span class="text-bold-400 " style="font-size:25px; color:black; font-family: sans-serif;padding-top:10px;color:white;"><i class="fa fa-user"></i><i> Welcome 
                    <?php echo $arrai['nama'] ?> !</i>
                    <br/> </span>
              </div>
                  <br/>
            </div>

          <div class="content-fluid col-md-12" style="background-color:white;margin-bottom:25px;padding-top: 10px;padding-left: 50px;padding-bottom: 50px;margin-top: 10px">
            <div class="content-fluid bg-white bg-light border-top border-info" style="margin-left:20px;margin-top:30px; height:100%">
                    <div class="col-md-9">
                    <table style="width: 100%;">
                    <tr >
                        <td style="width:10%"><b>From </b></td>
                        <td style="padding-bottom: 10px;width:20%">
                          <input class="form-control"  placeholder="Insert Sender" type="text" name="txtFrom" id="no_telp_id" style="margin-left:5px; color:black; width:500px;">
                        </td>
                    </tr>
                    <tr>
                      <td><b>Group</b></td>
                        <td style="padding-bottom: 10px">
                         <select id="choose_group" name="txtGroup" onchange="getNum(this)" class="form-control select2 text-center select2-hidden-accessible" style="width:500px;margin-left: 4px">
                              <option> -- Choose Group (All) -- </option>
                              <?php foreach ($group as $k) { ?>
                              <option value ="<?= $k['class_id']?>"><?= $k['class_name']?></option>
                              <?php } ?>
                        </select>
                        </td>
                    </tr>
                     <tr>
                        <td><b>To</b></td>
                        <td style="padding-bottom: 10px"><input placeholder="Insert Recepient (eg: 081xxxxxx, 083xxxxxx, etc)" class="form-control" type="text" name="txtRecepient" id="txtRecepient" style="margin-left:5px; color:black; width:500px;"> </td>
                    </tr>
                    <tr>
                        <td><b>Subject</b></td>
                        <td style="padding-bottom: 10px"><input placeholder="Insert Subject" class="form-control" type="text" name="txt_subject" id="txt_subject" style="margin-left:5px; color:black; width:500px;"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td class="text-left" style="padding-left: 5px;padding-bottom: 10px" >
                          <button type="button" data-target="#bold" data-toggle="modal" class="zoom btn btn-sm btn-danger" style="margin-bottom:5px;"><i class="fa fa-bold"></i> Bold
                          </button>
                          <button type="button" data-target="#italic" data-toggle="modal" class="zoom btn btn-sm btn-warning" style="margin-bottom:5px;"><i class="fa fa-italic"></i> Italic
                          </button>
                          <button type="button" data-target="#strikethrough" data-toggle="modal" class="zoom btn btn-sm btn-success" style="margin-bottom:5px;"><i class="fa fa-strikethrough"></i> Strike
                          </button>
                          <button type="button" onclick="resetFunction()" class="zoom btn btn-sm btn-primary" style="margin-bottom:5px;"><i class="fa fa-eraser"></i> Reset
                          </button>
                          <button type="button" onclick="copyFunction()" class="zoom btn btn-sm btn-default" style="margin-bottom:5px;"><i class="fa fa-copy"></i> Copy All
                          </button>
                          <?php echo form_open_multipart('Main');?>
                          <input type="file" name="attachment">
                          </form>
                        </td>
                    </tr>
                    <tr>
                      <td></td>
                      <td style="padding-bottom: 10px">
                        <textarea placeholder="Insert Body" name="message" class="form-control" id="text_pesan" cols="50px" rows="10px" style="margin-left:5px;color:black; width:500px;">
                        </textarea>
                      </td>
                      <!-- <td style="width:10%;padding-top:180px;padding-right:0px" class="text-left">
                        <button type="submit" class="zoom btn btn-sm btn-default " style="margin-left:0px;width: 100px;background-color:#708090;color:white;"><i class="fa fa-paper-plane"></i> SEND
                        </button>
                      </td> -->
                    </tr>
                    <tr><td></td>
                      <td>
                        <button type="submit" class="zoom btn btn-sm btn-default pull-left" style="margin-left:0px;width: 100px;background-color:#708090;color:white;"><i class="fa fa-paper-plane"></i> SEND
                        </button>
                      </td>
                    </tr>
                    </table>
                  </div>

                  <div class="col-md-3">
                    <div class="box box-danger zoom2">
                      <a target="_blank" href="<?php echo base_url('Home')?>">
                        <div class="box-header with-border">
                          <button type="button" class="btn btn-danger zoom"><h3 class="box-title"><b>Recent Messages</b></h3></button>
                        </div>
                      </a>
            <!-- /.box-header -->
            <div class="box-body">
              <?php $no=1;foreach ($sneak as $k => $value) { ?>

              <p class="<?php echo $no;?>"><strong><?php echo $value['subject'] ?><br/><br/></strong></p>
              <div style="overflow: auto">
              <table id="tblSneak" class="text-left table-responsive" style="min-width: 100%">
                <tr>
                  <td></td>
                  <td><label class="label label-primary"><i class="fa fa-paper-plane"></i> Sent</label> <label class="label label-success"><i class="fa fa-check"></i> Success</label>
                    <?php if ($value['attachment'] == ''){ ?>
                    <?php }else if ($value['attachment'] !== ''){ ?>
                    <label class="label label-warning"><i class="fa fa-paperclip"></i> Attachment</label>
                    <?php } ?></td>
                </tr>
                <tr>
                  <td><i class="fa fa-clock-o"></i> </td>
                  <td>&nbsp;<i><?php echo date('d-m-Y H:i:s', strtotime($value['creation_date']))?></i></td>
                <tr>

                <tr>
                  <td><i class="fa fa-tags"></i> </td>
                  <td>&nbsp;<?php echo $value['from_sender']?></td>
                </tr>

                <tr>
                  <td><i class="fa fa-share"></i> </td>
                  <td>&nbsp;<?php 
                  $length = round(strlen($value['receiver_number'])/5, 0); echo substr($value['receiver_number'], 0, $length); ?>...</td>
                </tr>

                <tr>  
                  <td><i class="fa fa-sticky-note"></i> </td>
                  <td>&nbsp;<?php echo $value['messages']?></td>
                </tr>
              </table>
              <hr>
<!-- </div> -->
              <?php $no++;} ?>

            </div>
            <!-- /.box-body -->
          </div>
                  </div>
                </form>
                </div>

            </div>
            
          </div>
            </div>
        </div>

        <div class="modal fade bold"  id="bold" tabindex="1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog modal-sm" style="width:400px;" role="document">
        <div class="modal-content">
            <div class="modal-header" style="width: 100%;" >
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
                <div class="modal-body" style="width: 100%;">
                  <p align="justify">
                  Untuk membuat output bold/tebal pada WhatsApp Text, tambahkan '<b>*</b>' diantara kata yang ingin ditebalkan. <br>
                  <b>Contoh</b> : *Assalamualaikum* <br/> akan memiliki output : <b>Assalamualaikum</b>
                  </p>
                    </div>
                   
                      <div class="modal-footer">
                        <div class="col-md-4 pull-right">
                        </div>
                      </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade italic"  id="italic" tabindex="1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog modal-sm" style="width:400px;" role="document">
        <div class="modal-content">
            <div class="modal-header" style="width: 100%;" >
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
                <div class="modal-body" style="width: 100%;">
                  <p align="justify">
                  Untuk membuat output italic/miring pada WhatsApp Text, tambahkan '<b>_</b>' diantara kata yang ingin dimiringkan. <br>
                  <b>Contoh</b> : _Assalamualaikum_ <br/> akan memiliki output : <i>Assalamualaikum</i>
                  </p>
                    </div>
                   
                      <div class="modal-footer">
                        <div class="col-md-4 pull-right">
                        </div>
                      </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade strikethrough"  id="strikethrough" tabindex="1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog modal-sm" style="width:400px;" role="document">
        <div class="modal-content">
            <div class="modal-header" style="width: 100%;" >
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
                <div class="modal-body" style="width: 100%;">
                  <p align="justify">
                  Untuk membuat output strikethrough/coret pada WhatsApp Text, tambahkan '<b>~</b>' diantara kata yang ingin dicoret. <br>
                  <b>Contoh</b> : ~Assalamualaikum~, <br/> akan memiliki output : <strike>Assalamualaikum</strike>
                  </p>
                    </div>
                   
                      <div class="modal-footer">
                        <div class="col-md-4 pull-right">
                        </div>
                      </div>
                </div>
            </form>
        </div>
    </div>
</div>

        <!-- <script src="<?php echo base_url('assets/jQuery/jQuery/jquery-3.2.1.min.js'); ?>"></script> -->
        <script type="text/javascript">
            var baseurl = '<?php echo base_url(); ?>';
        </script>
        <script type="text/javascript">
          $(document).ready(function (){
            $('#text_pesan').val('').trigger('change');
          })

          $('p.1').css('background-color', 'white').addClass('blink_me');


          var $dOut = $('#date'),
            $hOut = $('#hours'),
            $mOut = $('#minutes'),
            $sOut = $('#seconds'),
            $ampmOut = $('#ampm');
        var months = [
          'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'
        ];

        var days = [
          'Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'
        ];

        function update(){
          var date = new Date();
          
          var ampm = date.getHours() < 12
                     ? 'AM'
                     : 'PM';
          
          var hours = date.getHours() == 0
                      ? 12
                      : date.getHours() > 12
                        ? date.getHours() - 12
                        : date.getHours();
          
          var minutes = date.getMinutes() < 10 
                        ? '0' + date.getMinutes() 
                        : date.getMinutes();
          
          var seconds = date.getSeconds() < 10 
                        ? '0' + date.getSeconds() 
                        : date.getSeconds();
          
          var dayOfWeek = days[date.getDay()];
          var month = months[date.getMonth()];
          var day = date.getDate();
          var year = date.getFullYear();
          
          var dateString = dayOfWeek + ', ' + month + ' ' + day + ', ' + year;
          
          $dOut.text(dateString);
          $hOut.text(hours);
          $mOut.text(minutes);
          $sOut.text(seconds);
          $ampmOut.text(ampm);
        } 

        update();
        window.setInterval(update, 1000);

            // var start = new Date;

            // setInterval(function() {
            //     $('.Timer').text((new Date - start) / 1000 + " Seconds");
            // }, 1000);

            // function pretty_time_string(num) {
            //         return ( num < 10 ? "0" : "" ) + num;
            //       }

            //     var start = new Date;    

            //     setInterval(function() {
            //       var total_seconds = (new Date - start) / 1000;   

            //       var hours = Math.floor(total_seconds / 3600);
            //       total_seconds = total_seconds % 3600;

            //       var minutes = Math.floor(total_seconds / 60);
            //       total_seconds = total_seconds % 60;

            //       var seconds = Math.floor(total_seconds);

            //       hours = pretty_time_string(hours);
            //       minutes = pretty_time_string(minutes);
            //       seconds = pretty_time_string(seconds);

            //       var currentTimeString = hours + ":" + minutes + ":" + seconds;

            //       $('.Timer').text(currentTimeString);
            //     }, 1000);
        
            function submit(th) {

              var arry = [];
               $('input#no_telp_id').each(function(){
              var nomor = $(this).val();
              arry.push(nomor);
              });

               var arry2 = [];
               $('input#text_pesan').each(function(){
              var pesan = $(this).val();
              arry2.push(pesan);
              });


              $.ajax({
                type: "POST",
                url: baseurl+"submit",
                data:
                {
                  numbers:arry,
                  message:arry2
                },
              success : function (response) {
                // window.location.replace(baseurl+"submit")
                alert('berhasil')
              }
              })
            }
  </script>
</div>
</div>
</body>
</html>