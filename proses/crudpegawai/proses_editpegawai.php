<?php 
    // koneksi database
    include '../koneksi/koneksicrud.php';
    
    // menangkap data yang di kirim dari form
    $id         = $_POST['id'];
    $nama       = $_POST['nama'];
    $alamat     = $_POST['alamat'];
    $jabatan    = $_POST['jabatan'];
    $username   = $_POST['username'];
    $password   = $_POST['password'];
    $level      = $_POST['level'];

    // echo var_dump($level);
    // update data ke database
    mysqli_query($koneksi,"update admin set nama='$nama', alamat='$alamat', jabatan='$jabatan', username='$username', password='$password', level='$level' where id='$id'");
    
    // mengalihkan halaman kembali ke pegawai.php
    header("location:../admin/pegawai.php");
    
?>