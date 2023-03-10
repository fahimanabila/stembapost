<style type="text/css">
.dataTables_filter{
  float: right!important;
  margin-right:50px
}

.dataTables_filter .input-sm{
  margin-left: 5px;
}

.paging_simple_numbers{
   float: right!important;
  margin-right:50px

}
.dataTables_info{
  padding-top: 30px;
}

.dataTables_length{
float: left!important;
}

.dataTables_info{
float: left!important;
}
</style>

<?php 
include 'koneksi.php';
?>
<div class="content-fluid" style="background-color:white;padding-top: 10px;padding-bottom: 50px;padding-left:50px;padding-right:50px; margin-left: 50px;">
<!-- <div class="col-md-12"> -->
<form method="post" enctype="multipart/form-data" action="<?php echo base_url('upload_aksi')?>">
<table border="0" style="width: 100%;margin-bottom: 20px;margin-left: 5px" class="text-left">
            <tr>
              <td style="width: 15%"><span><label>Upload File (.xls)</label></span></td>
              <td style="width: 10%;padding-bottom: 5px;">
                <input type="file" class="form-control" name="filepegawai" style="width: 300px">
              </td>
              
              <td style="width: 30%">
                <button type="submit" class="btn btn-success btn-m pull-left" style="width:100px;margin-bottom:5px"><i class="fa fa-upload"></i> Upload</button>
                </form>
                <form method="post" action="<?php echo base_url('download')?>">
                <button type="submit" class="btn btn-primary btn-m pull-left" style="width:110px;margin-bottom:5px;margin-left: 10px;"><i class="fa fa-download"></i> Form (.xls) </button>
                <button type="button" data-toggle="modal" data-target="#mdlPanduan" class="btn btn-warning btn-m pull-left" style="width:110px;margin-bottom:5px;margin-left: 10px;"><i class="fa fa-book"></i> Panduan </button>
                </form>
              </td>
              <td style="width: 10%"></td>
            </tr>
          </table>
          <div class="col-md-12 col-xs-12" style="margin-top:10px;margin-right:8px;">
            
          </div>

            <table class="table table-address table-bordered table-hover text-center table_group" style="width: 100%;margin-top: 30px;width: 990px">
                <thead class="table-primary">
                  <tr class="bg-primary">
                      <th class="text-center" >No</th>
                      <th class="text-center" >No Induk (Siswa)</th>
                      <th class="text-center" >No NIP (Guru)</th>
                      <th class="text-center" >Full Name</th>
                      <th class="text-center" style="width: 10%">Class </th>
                      <th class="text-center" >Department </th>
                      <th class="text-center" >Active Flag (Y/N)</th>
                      <th class="text-center" >Phone Number</th>
                      <th class="text-center" >Action</th>
                    </tr>
                </thead>
            <tbody>
             <?php 
              include 'koneksi.php';
              // $no=1;
              $data = mysqli_query($koneksi,"SELECT 
                        a.contact_id, 
                        a.no_ind, 
                        a.no_nip,
                        a.full_name, 
                        a.class_id, 
                        a.phone_num,
                        a.department_id,
                        c.department_name, 
                        b.class_name,
                        a.active_flag 
                    from 
                        t_contacts a 
                    left join t_class b on a.class_id = b.class_id
                    left join t_department c on a.department_id = c.department_id");
              while($d = mysqli_fetch_array($data)){
                ?>
                <tr>
                  <td><?php echo $d['contact_id']; ?></td>
                  <td><?php echo $d['no_ind']; ?></td>
                  <td><?php echo $d['no_nip']; ?></td>
                  <td><?php echo $d['full_name']; ?></td>
                  <td><?php echo $d['class_name']; ?> (<?php echo $d['class_id']; ?>)</td>
                  <td><?php echo $d['department_name']; ?> (<?php echo $d['department_id']; ?>)</td>
                  <td><?php echo $d['active_flag']; ?></td>
                  <td><?php echo $d['phone_num']; ?></td>
                  <td><button type="button" onclick="deleteContact(<?php echo $d['contact_id']?>)" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button></td>
                </tr>
                <?php 
              }
              ?>
            </tbody>
</table>

<div class="modal fade mdlPanduan"  id="mdlPanduan" tabindex="1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog modal-sm" style="width:800px;" role="document">
        <div class="modal-content">
            <div class="modal-header text-left" style="width: 100%;" >
              Panduan Pengisian Form (.xls)
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
                <div class="modal-body text-left" style="width: 100%;">
                  <p align="justify">
                  <b>Berikut kami sampaikan cara mengisi form (.xls) untuk menambah kontak</b><br/>
                  <ol>
                    <li>Download template form yang disediakan, dengan mengklik button biru Form (.xls)</li>
                    <li>Masukkan data diri sesuai form, no. (menyesuaikan), no_ind (<b>hanya untuk siswa</b>, isi dengan nomor induk sekolah), no_nip (<b>hanya untuk guru</b>, isi dengan nomor induk pegawai), full_name (isi dengan nama lengkap), class_id dan department_id (<b>hanya untuk siswa</b>, sesuaikan dengan list kelas yang berada di kolom NOTE, isi dengan format angka saja), phone_num (isi dengan nomor telpon). </li>
                    <li>Jika dirasa data sudah sesuai dengan perintah, silakan save file tanpa mengubah format file yaitu format (.xls)</li>
                    <li>Uploadkan file yang sudah diisi ke halaman Setup -> Upload Contact (.xls) pada aplikasi broadcasting STEMBAPOST. Klik button 'Choose File' -> Pilih file -> Klik button 'Upload'. Kemudian halaman akan reload otomatis, dan silakan kembali ke halaman Upload Contact dan check data yang diuploadkan pada tabel.</li>
                    <li>Jika masih merasa kesulitan, silakan hubungi WhatsApp administrator pada menu About</li>
                    <li>-Selamat Mencoba-</li>
                  </ol>
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
<script type="text/javascript">
   $(document).ready(function(){
  $('.table_group').DataTable({
    "paging": true,
    "info":     true,
    "language" : {
    "zeroRecords": "Sorry, data not found :("             
    }
  })

  })
</script>