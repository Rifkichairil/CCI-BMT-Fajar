<?php 
    // koneksi database
    include '../koneksi/koneksicrud.php';
    
    // menangkap identitas yang di kirim dari url
    $id = $_GET['id'];

    
    // menghapus data dari database
    mysqli_query($koneksi, "delete from nasabah where id_nasabah='$id'");
    
    // mengalihkan halaman kembali ke index.php
    header("location:../admin/user.php");
 
?>