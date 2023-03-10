<!-- header -->
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
  <!-- <link type="text/css" rel="stylesheet" href="<?= base_url('assets/css/custom.css') ?>" /> -->
  <!-- <link type="text/css" rel="stylesheet" href="<?= base_url('assets/css/animate.css') ?>" /> -->
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
 
</head>
    <!-- Logo -->

<!-- header -->
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

<div style="margin-top: 25px;margin-bottom: 25px;margin-right: 30px;margin-left: 30px;">
  <div class="inner">
    <div class="row">
      <div class="col-lg-12" style="margin-left:20px;padding-right:50px;">
        <div class="row">
          <div class="col-lg-12">
            <div class="text-left">
              <h5><span style="font-family: Spartan;font-size: 30px;"><b><i class="fa fa-paperclip"></i> ATTACHMENT </b></span></h5>
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
                  <table class="table table-stembapost table-bordered table-hover" style="width: 100%">
                <thead class="toscahead">
                  <tr class="bg-default">
                      <th class="text-center" style="width: 5%">No</th>
                      <th class="text-center" style="width: 15%">Creation Date</th>
                      <th class="text-center" style="width: 35%">Messages</th>
                      <th class="text-center" style="width: 12%">Get Attachment</th>
                    </tr>
                </thead>
                  <tbody id="tbodyDash">
                    <?php $i=1; foreach ($history as $k) { ?>
                    <tr class="<?php echo $k['message_id'] ?>">
                      <td class="text-center"><?php echo $i;?></td>

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


                      <td class="text-center">
                        <a href="<?php echo base_url('assets/upload/'.$k['attachment'])?>" target="_blank">
                          <button type="button" style="width: 100px;" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i> Preview </button>
                        </a>
                      <form method="post" action="<?php echo base_url('downloadAttachment/'.$k['attachment'])?>">
                          <button type="submit" style="width: 100px;margin-top: 5px;" class="btn btn-success btn-sm"><i class="fa fa-download"></i> Download </button>
                        </form>
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
</div>

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

<!-- footer -->
<style type="text/css">
  footer {
      clear: both;
      position: relative !important;
      height: 50px;
      margin-top: -200px;
      bottom: 0;
      width: 100%;
      margin-left: -20px;
      z-index: 3;

}
  @font-face {
  font-family: Passion;
  src: url(<?php echo base_url('assets/fonts/PassionOne-Regular.woff')?>);
  }
  @font-face {
  font-family: Noto;
  src: url(<?php echo base_url('assets/fonts/NotoSans-Regular.woff')?>);
  }
  @font-face {
  font-family: Spartan;
  src: url(<?php echo base_url('assets/fonts/LeagueSpartan-Bold.woff')?>);
  }
  
</style>
 
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script>
  var baseurl = "<?= base_url() ?>"
</script>
<script src="<?= base_url('assets/');?>plugins/sweetalert2.all.min.js"></script>
<script src="<?= base_url('assets/');?>plugins/sweetalert2.all.js"></script>

<script src="<?= base_url('assets/');?>bower_components/jquery/dist/jquery.min.js"></script>
<script src="<?= base_url('assets/');?>plugins/jQuery/jquery-3.2.1.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?= base_url('assets/');?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="<?= base_url('assets/');?>bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/');?>bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?= base_url('assets/');?>bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?= base_url('assets/');?>bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets/');?>dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url('assets/');?>dist/js/demo.js"></script>
<!-- Howler Sound Player -->
<script src="<?= base_url('assets/');?>dist/howler/howler.js"></script>
<!-- page script -->
<script src="<?= base_url('assets/');?>dist/js/sweetAlert.js"></script>

<script src="<?= base_url('assets/');?>dist/js/custom.js"></script>

<!-- new -->
<script src="<?= base_url('assets/plugins/slimScroll/jquery.slimscroll.min.js') ?>"></script>
    <script src="<?= base_url('assets/plugins/fastclick/fastclick.min.js') ?>"></script>
    <script src="<?= base_url('assets/theme/js/app.min.js') ?>"></script>
    <!-- <script src="<?= base_url('assets/plugins/datatables-latest/datatables.min.js') ?>"></script> -->
      <script src="<?= base_url('assets/plugins/table2excel/jquery.table2excel.min.js');?>"></script>
      <script src="<?= base_url('assets/plugins/sweetalert2.all.min.js');?>"></script>
      <script src="<?= base_url('assets/plugins/sweetalert2.all.js');?>"></script>
    <script src="<?= base_url('assets/plugins/canvasjs/canvasjs.min.js') ?>"></script>
    <script src="<?= base_url('assets/plugins/chartjs/Chart.js') ?>"></script>
    <script src="<?= base_url('assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.js') ?>"></script>
    <script src="<?= base_url('assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') ?>"></script>
    <script src="<?= base_url('assets/plugins/input-mask/3.x') ?>/dist/jquery.inputmask.bundle.js"></script>
    <script src="<?= base_url('assets/plugins/input-mask/3.x') ?>/dist/inputmask/phone-codes/phone.js"></script>
    <script src="<?= base_url('assets/plugins/input-mask/3.x') ?>/dist/inputmask/phone-codes/phone-be.js"></script>
    <script src="<?= base_url('assets/plugins/input-mask/3.x') ?>/dist/inputmask/phone-codes/phone-ru.js"></script>
    <script src="<?= base_url('assets/plugins/input-mask/3.x') ?>/dist/inputmask/bindings/inputmask.binding.js"></script>
    <script src="<?= base_url('assets/plugins/intro.js-2.9.3/intro.js') ?>"></script>
    <script src="<?= base_url('assets/plugins/multiselect/js/bootstrap-multiselect.js') ?>"></script>
    <script src="<?= base_url('assets/plugins/touchspin/jquery.bootstrap-touchspin.min.js')?>"></script>
    <script src="<?= base_url('assets/plugins/fine-uploader/jquery.fine-uploader.min.js') ?>"></script>
    <script src="<?= base_url('assets/plugins/fine-uploader/fine-uploader.min.js') ?>"></script>
    <script src="<?= base_url('assets/plugins/chartjs/Chart.bundle.min.js') ?>"></script>
    <script src="<?= base_url('assets/plugins/redactor/js/redactor.min.js') ?>"></script>
    <script src="<?= base_url('assets/plugins/mdtimepicker/mdtimepicker.js') ?>"></script>
    <script src="<?= base_url('assets/plugins/html2canvas/html2canvas.min.js') ?>"></script>
    <script src="<?= base_url('assets/plugins/highchart/highcharts.js') ?>"></script>
    <script src="<?= base_url('assets/plugins/highchart/exporting.js') ?>"></script>
    <script src="<?= base_url('assets/plugins/highchart/offline-exporting.js') ?>"></script>
    <script src="<?= base_url('assets/plugins/jquery.number.min.js') ?>"></script>
    <script src="<?= base_url('assets/plugins/uniform/jquery.uniform.min.js') ?>"></script>
    <script src="<?= base_url('assets/plugins/inputlimiter/jquery.inputlimiter.1.3.1.min.js') ?>"></script>
    <script src="<?= base_url('assets/plugins/select2/select2.full.min.js') ?>"></script>
    <script src="<?= base_url('assets/plugins/chosen/chosen.jquery.min.js') ?>"></script>
    <script src="<?= base_url('assets/plugins/colorpicker/js/bootstrap-colorpicker.js') ?>"></script>
    <script src="<?= base_url('assets/plugins/tagsinput/jquery.tagsinput.min.js') ?>"></script>
    <script src="<?= base_url('assets/plugins/validVal/js/jquery.validVal.min.js') ?>"></script>
    <script src="<?= base_url('assets/plugins/dropzone/dropzone.min.js') ?>"></script>
    <script src="<?= base_url('assets/plugins/daterangepicker-master/moment.min.js') ?>"></script>
    <script src="<?= base_url('assets/plugins/datepicker/js/bootstrap-datepicker.js') ?>"></script>
    <script src="<?= base_url('assets/plugins/daterangepicker-master/daterangepicker.min.js') ?>"></script>
    <script src="<?= base_url('assets/plugins/timepicker/js/bootstrap-timepicker.min.js') ?>"></script>
    <script src="<?= base_url('assets/plugins/datetimepicker/build/jquery.datetimepicker.full.js') ?>"></script>
    <script src="<?= base_url('assets/plugins/datetimepicker/build/jquery.datetimepicker.full.min.js') ?>"></script>
    <script src="<?= base_url('assets/plugins/datetimepicker/build/jquery.datetimepicker.min.js') ?>"></script>
    <script src="<?= base_url('assets/plugins/switch/static/js/bootstrap-switch.min.js') ?>"></script>
    <script src="<?= base_url('assets/plugins/jquery.dualListbox-1.3/jquery.dualListBox-1.3.min.js') ?>"></script>
    <script src="<?= base_url('assets/plugins/autosize/jquery.autosize.min.js') ?>"></script>
    <script src="<?= base_url('assets/plugins/jasny/js/bootstrap-inputmask.js') ?>"></script>
    <script src="<?= base_url('assets/plugins/jquery-validation-1.11.1/dist/jquery.validate.min.js') ?>"></script>
    <script src="<?= base_url('assets/plugins/validator/bootstrapValidator.min.js') ?>"></script>
    <script src="<?= base_url('assets/plugins/validator/bootstrapValidator.js') ?>"></script>
    <script src="<?= base_url('assets/plugins/jquery.mask.js') ?>"></script>
    <script src="<?= base_url('assets/plugins/iCheck/icheck.js') ?>"></script>
    <script src="<?= base_url('assets/plugins/jquery.toaster/jquery.toaster.js') ?>"></script>
    <!-- <script src="<?= base_url('assets/js/formsInit.js') ?>"></script> -->
    <!-- <script src="<?= base_url('assets/js/ajaxSearch.js')?>"></script> -->
    <!-- <script src="<?= base_url('assets/js/HtmlFunction.js')?>"></script> -->
    <!-- <script src="<?= base_url('assets/js/ChainArea.js') ?>"></script> -->
    <script src="<?= base_url('assets/plugins/jQuery/jquery.toaster.js') ?>"></script>
    <script src="<?= base_url('assets/plugins/qtip/jquery.qtip.js') ?>"></script>
    <script src="<?= base_url('assets/plugins/jasny-bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('assets/plugins/inputmask/inputmask.bundle.js') ?>"></script>
    <script src="<?= base_url('assets/plugins/sweetAlert/sweetalert.js') ?>"></script>
    <script src="<?= base_url('assets/plugins/table-to-CSV/table2csv.js') ?>"></script>
    <script src="<?= base_url('assets/plugins/table-to-CSV/tableHTMLExport.js') ?>"></script>
    <script src="<?= base_url('assets/plugins/table-to-CSV/jspdf.min.js') ?>"></script>
    <script src="<?= base_url('assets/plugins/table-to-CSV/jspdf.plugin.autotable.min.js') ?>"></script>
    <script src="<?= base_url('assets/plugins/table-to-CSV/tableExport.js') ?>"></script>
    <script src="<?= base_url('assets/plugins/table-to-CSV/FileSaver.min.js') ?>"></script>
    <script src="<?= base_url('assets/plugins/monthPicker/monthpicker.js') ?>"></script>
    <script src="<?= base_url('assets/plugins/print/print.min.js') ?>"></script>
    <!-- <script src="<?= base_url('assets/js/formValidation.js') ?>"></script> -->
    <!-- <script src="<?= base_url('assets/js/jquery-maskmoney.js') ?>"></script> -->
    <script src="<?= base_url('assets/plugins/howler/howler.js') ?>"></script>
</body>
</html>