<!-- <form method="get" action="<?php echo base_url('submit')?>"> -->
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content">
      <div class="inner" >
        <div class="box box-header"  style="padding-left:20px">
          <h3 class="pull-left" style="font-family: sans-serif;" ><strong> Masukkan Data </strong>- Stembapost</h3>
        </div>
      </div>
      <div class="col-md-8">
      <div class="panel box-body">
              <!--   <div class="col-md-3">
                  <div class="small-box bg-aqua">
                    <div class="inner">
                      <h3>tes</h3>
                      <p>new</p>
                    </div>
                  </div>
                </div> -->
          <!--     </div> -->
      <!-- <div class="row"> -->
            <!-- <div class="col-xs-12"> -->

              <!-- <div class="box"> -->
               <!--  <div class="box-header">
                  <h3 class="box-title">SO Outstanding</h3>
                </div> -->
                <!-- /.box-header -->
                <!-- <div class="box-body"> -->
                <!-- <meta http-equiv="refresh" content="10"> -->
                 <!--  <table id="do_list" class="table table-bordered table-striped">
                    <thead style="background-color:#367FA9; color:white">
                      <tr>
                        <th>No</th>
                        <th>No Sales Order</th>
                        <th>Last Updated Date</th>
                        <th>Action</th>    
                      </tr>
                    </thead>
                    <tbody>  
                    </tbody>
                  </table> -->
                  <br/>

<div class="col-md-6">
  <input type="hidden" id="status" value="<?php echo $status[0]['status']?>">
  <input type="hidden" id="username" value="<?php echo $status[0]['username']?>">
<table class="table">
    <tr>
      <td><span> Nomor Telpon </span> </td>
      <td> <input type="text" class="form-control"  size="25" name="txt_no_tlp" id="no_telp_id"> </td>
    </tr>
    <tr>
      <td><span> Pesan </span> </td>
      <td> <textarea type="text" class="form-control"  size="25" name="txt_pesan" id="txt_pesan"> </textarea></td>
    </tr>
</table>
<div class="pull-left">
  <button type="submit" onclick="submit(this)" class="btn btn-success btn-sm">Submit</button>
</div>
<!-- </form> -->
</div>
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
            </div>
            <!-- /.col -->
          </div>
      </div>
    </div>
    </section>
  <!-- /.content-wrapper -->
  </div>

  <script type="text/javascript">
    
    function submit(th) {
      var nomor = $('#no_telp_id').val();
      var pesan = $('#txt_pesan').val();

      $.ajax({
        type: "POST",
        url: baseurl+"submit",
        data:
        {
          numbers:nomor,
          message:pesan
        },
      success : function (response) {
        alert('berhasil')
      }
      })
    }

  </script>









