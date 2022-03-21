<?php 
    // koneksi database
    include '../koneksi/koneksicrud.php';
    
    // menangkap data yang di kirim dari form
    $admin_id   = $_POST['admin_id'];
    $id         = $_POST['id'];
    $rek        = $_POST['rek'];
    $tanggal    = $_POST['tanggal'];
    $jumlah     = $_POST['jumlah'];
    $awal       = $_POST['awal'];
    $akhir      = $_POST['akhir'];

    // menginput data ke database
    $query="INSERT INTO transaksi SET admin_id='$admin_id', id='$id', rekening='$rek', tanggal='$tanggal', jumlah='$jumlah', awal='$awal', akhir='$akhir'";
    mysqli_query($koneksi, $query);
    
    // mengalihkan halaman kembali ke transaksi.php
    header("location:../admin/transaksi.php");
    
?>