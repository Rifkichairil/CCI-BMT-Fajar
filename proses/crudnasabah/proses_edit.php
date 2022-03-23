<?php 
    // koneksi database
    include '../koneksi/koneksicrud.php';
    
    // menangkap data yang di kirim dari form
    $id_nasabah = $_POST['id_nasabah'];
    $nama       = $_POST['nama'];
    $alamat     = $_POST['alamat'];
    $ktp        = $_POST['ktp'];
    $gender     = $_POST['gender'];
    $telp       = $_POST['telp'];
    
    // update data ke database
    mysqli_query($koneksi,"update nasabah set nama='$nama', alamat='$alamat', ktp='$ktp', gender='$gender', telp='$telp' where id_nasabah='$id_nasabah'");
    
    // mengalihkan halaman kembali ke user.php
    header("location:../admin/user.php");
    
?>