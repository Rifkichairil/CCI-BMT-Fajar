<?php 
// koneksi database
include 'koneksicrud.php';
 
// menangkap data yang di kirim dari form
$id_pegawai = $_POST['id_pegawai'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jabatan = $_POST['jabatan'];
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];

 
// update data ke database
mysqli_query($koneksi,"update tb_pegawai set id_pegawai='$id_pegawai', nama='$nama', alamat='$alamat', jabatan='$jabatan', username='$username', password='$password', level='$level' where id_pegawai='$id_pegawai'");
 
// mengalihkan halaman kembali ke pegawai.php
header("location:pegawai.php");
 
?>