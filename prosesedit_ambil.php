<?php 
// koneksi database
include 'koneksicrud.php';
 
// menangkap data yang di kirim dari form
$id_pegawai = $_POST['id_pegawai'];
$id = $_POST['id'];
$rek = $_POST['rek'];
$tanggal = $_POST['tanggal'];
$jumlah = $_POST['jumlah'];
$awal = $_POST['awal'];
$akhir = $_POST['akhir'];
 
// update data ke database
mysqli_query($koneksi,"update tb_ambil set id_pegawai='$id_pegawai', id='$id', rek='$rek', tanggal='$tanggal', jumlah='$jumlah', awal='$awal', akhir='$akhir' where id='$id'");
 
// mengalihkan halaman kembali ke ambil.php
header("location:ambil.php");
 
?>