<?php 
    // koneksi database
    include '../koneksi/koneksicrud.php';
    
    // menangkap data yang di kirim dari form
    $admin_id      = $_POST['admin_id'];
    $rekening_id   = $_POST['rekening_id'];
    $rek        = $_POST['rek'];
    $tanggal    = $_POST['tanggal'];
    $jumlah     = $_POST['jumlah'];
    $awal       = $_POST['awal'];
    $akhir      = $_POST['akhir'];

    // menginput data ke database
    $query3     ="UPDATE penarikan SET akhir='$akhir' WHERE rekening_id = '$rekening_id'";
    $query2     ="UPDATE rekening SET akhir='$akhir' WHERE id_rekening = '$rekening_id'";
    $query      ="INSERT INTO transaksi SET admin_id='$admin_id',rekening_id='$rekening_id', rekening='$rek', tanggal='$tanggal', jumlah='$jumlah', awal='$awal', akhir='$akhir'";
    
    mysqli_query($koneksi, $query2);
    mysqli_query($koneksi, $query3);
    mysqli_query($koneksi, $query);
    
    // mengalihkan halaman kembali ke transaksi.php
    header("location:../admin/transaksi.php");
    
?>