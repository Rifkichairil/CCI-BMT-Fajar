<?php 
    // koneksi database
    include '../koneksi/koneksicrud.php';
    
    // menangkap data yang di kirim dari form
    $admin_id      = $_POST['admin_id'];
    $rekening_id   = $_POST['rekening_id'];
    // $rek        = $_POST['rek'];
    $tanggal    = $_POST['tanggal'];
    $jumlah     = $_POST['jumlah'];
    $awal       = $_POST['awal'];
    $akhir      = $_POST['akhir'];

    // menginput data ke database
    $query2     ="UPDATE rekening SET akhir='$akhir' WHERE id_rekening = '$rekening_id'";
    $query      ="INSERT INTO transaksi SET admin_id='$admin_id',rekening_id='$rekening_id',  rekening='11', tanggal='$tanggal', jumlah='$jumlah', awal='$awal', akhir='$akhir'";
    mysqli_query($koneksi, $query2);
    mysqli_query($koneksi, $query);
    
    // mengalihkan halaman kembali ke transaksi.php
    header("location:../admin/transaksi.php");
    
?>