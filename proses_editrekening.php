<?php 
// koneksi database
include 'koneksicrud.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$rek = $_POST['rek'];
$tgl_buka = $_POST['tgl_buka'];
$awal = $_POST['awal'];
$akhir = $_POST['akhir'];

 
// update data ke database
mysqli_query($koneksi,"update tb_rek set id='$id', nama='$nama', rek='$rek', tgl_buka='$tgl_buka', awal='$awal', akhir='$akhir' where id='$id'");
 
// mengalihkan halaman kembali ke rekening.php
header("location:rekening.php");
 
?>