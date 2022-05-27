<?php 
// koneksi database
    include '../koneksi/koneksicrud.php';
    
    // menangkap identitas yang di kirim dari url
    $id = $_GET['id'];

    echo $id;

    // menghapus data dari database
    mysqli_query($koneksi, "delete from rekening where id_rekening='$id'");
    
    // mengalihkan halaman kembali ke index.php
    header("location:../admin/rekening.php");
    
?>