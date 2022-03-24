<?php 
    // koneksi database
    include '../koneksi/koneksicrud.php';
    
    // menangkap data yang di kirim dari form
   // menangkap data yang di kirim dari form
    $id_transaksi  = $_POST['id_transaksi'];
    $admin_id      = $_POST['admin_id'];
    $rekening_id   = $_POST['rekening_id'];
    $rek        = $_POST['rek'];
    $tanggal    = $_POST['tanggal'];
    $jumlah     = $_POST['jumlah'];
    $awal       = $_POST['awal'];
    $akhir      = $_POST['akhir'];

    $query2     ="UPDATE rekening SET akhir='$akhir' WHERE id_rekening = '$rekening_id'";
    // update data ke database
    mysqli_query($koneksi,"update transaksi set rekening_id='$rekening_id', admin_id='$admin_id', rekening='$rek', tanggal='$tanggal', jumlah='$jumlah', awal='$awal', akhir='$akhir' where id_transaksi='$id_transaksi'");
    mysqli_query($koneksi, $query2);

    // mengalihkan halaman kembali ke transaksi.php
    header("location:../admin/transaksi.php");
    
    
?>