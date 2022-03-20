<?php 
// koneksi database
include '../koneksi/koneksicrud.php';

// menangkap data yang di kirim dari form
// $id         = $_POST['id'];
$nama       = $_POST['nama'];
$alamat     = $_POST['alamat'];
$ktp        = $_POST['ktp'];
$telp       = $_POST['telp'];
$gender     = $_POST['gender'];

// menginput data ke database
$query="INSERT INTO nasabah SET  nama='$nama', alamat='$alamat', ktp='$ktp', gender='$gender', telp='$telp'";
mysqli_query($koneksi, $query);

// mengalihkan halaman kembali ke lihat.php
header("location:../admin/user.php");
?>