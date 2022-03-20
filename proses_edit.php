<?php 
// koneksi database
include 'koneksicrud.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$ktp = $_POST['ktp'];
$gender = $_POST['gender'];
$telp = $_POST['telp'];
 
// update data ke database
mysqli_query($koneksi,"update tb_nasabah set id='$id', nama='$nama', alamat='$alamat', ktp='$ktp', gender='$gender', telp='$telp' where id='$id'");
 
// mengalihkan halaman kembali ke user.php
header("location:user.php");
 
?>