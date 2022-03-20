<?php 
// koneksi database
include '../koneksi/koneksicrud.php';
 
// menangkap data yang di kirim dari form
// $id         = $_POST['id'];
$nasabah_id = $_POST['nasabah_id'];
$nama       = $_POST['nama'];
$rek        = $_POST['rek'];
$tgl_buka   = $_POST['tgl_buka'];
$awal       = $_POST['awal'];
$akhir      = $_POST['akhir'];

// menginput data ke database
$query="INSERT INTO rekening SET nasabah_id='$nasabah_id', nama='$nama', rek='$rek', tgl_buka='$tgl_buka', awal='$awal', akhir='$akhir'";
mysqli_query($koneksi, $query);
 
// mengalihkan halaman kembali ke rekening.php
header("location:../admin/rekening.php");
 
?>