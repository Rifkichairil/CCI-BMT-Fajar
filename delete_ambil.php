<?php 
// koneksi database
include 'koneksicrud.php';
 
// menangkap identitas yang di kirim dari url
$id = $_GET['id'];

 
// menghapus data dari database
mysqli_query($koneksi, "delete from tb_ambil where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:ambil.php");
 
?>