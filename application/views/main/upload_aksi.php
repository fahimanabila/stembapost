<!-- import excel ke mysql -->
<!-- www.malasngoding.com -->
 
<?php 
// menghubungkan dengan koneksi
include 'koneksi.php';
// menghubungkan dengan library excel reader
include "excel_reader2.php";
?>
 
<?php
// upload file xls
$target = basename($_FILES['filepegawai']['name']) ;
move_uploaded_file($_FILES['filepegawai']['tmp_name'], $target);
 
// beri permisi agar file xls dapat di baca
chmod($_FILES['filepegawai']['name'],0777);
 
// mengambil isi file xls
$data = new Spreadsheet_Excel_Reader($_FILES['filepegawai']['name'],false);
// menghitung jumlah baris data yang ada
$jumlah_baris = $data->rowcount($sheet_index=0);
 
// jumlah default data yang berhasil di import
$berhasil = 0;
for ($i=2; $i<=$jumlah_baris; $i++){
 
	// menangkap data dan memasukkan ke variabel sesuai dengan kolumnya masing-masing
	$no_ind     = $data->val($i, 2);
	$no_nip   = $data->val($i, 3);
	$full_name  = $data->val($i, 4);
	$class_id  = $data->val($i, 5);
	$department_id  = $data->val($i, 6);
	$active_flag  = $data->val($i, 7);
	$phone_num  = $data->val($i, 8);


 
	if($full_name != "" ){
		// input data ke database (table data_pegawai)
		mysqli_query($koneksi,"INSERT into t_contacts values('','$no_ind','$no_nip','$full_name','$class_id', '$department_id', '$phone_num', '$active_flag')");
		$berhasil++;
	}
}
 
// hapus kembali file .xls yang di upload tadi
unlink($_FILES['filepegawai']['name']);
 
// alihkan halaman ke index.php
header('Location: http://127.0.0.1/stembapost/Setup');
echo "<script='text/javascript'>alert('data berhasil terinput, harap cek ulang!')</script>";
// header/();
?>