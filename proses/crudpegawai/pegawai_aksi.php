<?php 
    // koneksi database
    include '../koneksi/koneksicrud.php';
    
    // menangkap data yang di kirim dari form
    // $id_pegawai     = $_POST['id_pegawai'];
    $nama           = $_POST['nama'];
    $alamat         = $_POST['alamat'];
    $jabatan        = $_POST['jabatan'];
    $username       = $_POST['username'];
    $password       = $_POST['password'];
    $level          = $_POST['level'];

    
    // menginput data ke database
    $query="INSERT INTO admin SET  nama='$nama', alamat='$alamat', jabatan='$jabatan', username='$username', password='$password', level='$level'";
    mysqli_query($koneksi, $query);
    
    // mengalihkan halaman kembali ke pegawai.php
    header("location:../admin/pegawai.php");
    
?>