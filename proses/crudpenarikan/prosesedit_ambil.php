<?php 
    // koneksi database
    include '../koneksi/koneksicrud.php';
    
    // menangkap data yang di kirim dari form
    $id_penarikan  = $_POST['id_penarikan'];
    $admin_id      = $_POST['admin_id'];
    $rekening_id   = $_POST['rekening_id'];
    $rek            = $_POST['rekening'];
    $tanggal        = $_POST['tanggal'];
    $jumlah         = $_POST['jumlah'];
    $awal           = $_POST['awal'];
    $akhir          = $_POST['akhir'];
    
    // update data ke database
    $query2     ="UPDATE transaksi SET akhir='$akhir' WHERE rekening_id = '$rekening_id'";
    $query3     ="UPDATE rekening SET akhir='$akhir' WHERE id_rekening = '$rekening_id'";

    mysqli_query($koneksi,"update penarikan set admin_id='$admin_id', rekening_id='$rekening_id', rekening='$rek', tanggal='$tanggal', jumlah='$jumlah', awal='$awal', akhir='$akhir' where id_penarikan='$id_penarikan'");
    mysqli_query($koneksi, $query2);
    mysqli_query($koneksi, $query3);

    // mengalihkan halaman kembali ke ambil.php
    header("location:../admin/ambil.php");
    
?>