<?php 
    // koneksi database
    include '../koneksi/koneksicrud.php';
    
    // menangkap data yang di kirim dari form
    $id         = $_POST['id'];
    $admin_id   = $_POST['admin_id'];
    $rek        = $_POST['rek'];
    $tanggal    = $_POST['tanggal'];
    $jumlah     = $_POST['jumlah'];
    $awal       = $_POST['awal'];
    $akhir      = $_POST['akhir'];

    
    // update data ke database
    mysqli_query($koneksi,"update transaksi set admin_id='$admin_id', id='$id', rekening='$rek', tanggal='$tanggal', jumlah='$jumlah', awal='$awal', akhir='$akhir' where id='$id'");
    
    // mengalihkan halaman kembali ke transaksi.php
    header("location:../admin/transaksi.php");
    
?>