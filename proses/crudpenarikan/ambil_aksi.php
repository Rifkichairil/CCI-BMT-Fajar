<?php 
    // koneksi database
    include '../koneksi/koneksicrud.php';
    
    // menangkap data yang di kirim dari form
    // $id             = $_POST['id'];
    $admin_id       = $_POST['admin_id'];
    $rekening_id    = $_POST['rekening_id'];
    $rek            = $_POST['rek'];
    $tanggal        = $_POST['tanggal'];
    $jumlah         = $_POST['jumlah'];
    $awal           = $_POST['awal'];
    $akhir          = $_POST['akhir'];

    
    // menginput data ke database
    $query="INSERT INTO penarikan SET admin_id='$admin_id',rekening_id='$rekening_id', rekening='$rek', tanggal='$tanggal', jumlah='$jumlah', awal='$awal', akhir='$akhir'";
    mysqli_query($koneksi, $query);
    
    // mengalihkan halaman kembali ke ambil.php
    header("location:../admin/ambil.php");
    
?>