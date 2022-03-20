<?php 
// koneksi database
include 'koneksicrud.php';
 
// menangkap identitas yang di kirim dari url
$id_pegawai = $_GET['id_pegawai'];

 
// menghapus data dari database
mysqli_query($koneksi, "delete from tb_pegawai where id_pegawai='$id_pegawai'");
 
// mengalihkan halaman kembali ke index.php
header("location:pegawai.php");
 
?>