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

 
// menginput data ke database
$query="INSERT INTO tb_transaksi SET id_pegawai='$id_pegawai', id='$id', rek='$rek', tanggal='$tanggal', jumlah='$jumlah', awal='$awal', akhir='$akhir'";
mysqli_query($koneksi, $query);
 
// mengalihkan halaman kembali ke transaksi.php
header("location:transaksi.php");
 
?>