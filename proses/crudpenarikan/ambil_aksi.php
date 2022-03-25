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

    
    if ($akhir <= 20000) {
        # code...
        die("'<script>alert('Pemberitahuan: Saldo akhir anda dibawah Rp. 20.000');
        window.location = 'tambahambil.php'
        </script>'");

    }

    // menginput data ke database
    $query2     ="UPDATE rekening SET akhir='$akhir' WHERE id_rekening = '$rekening_id'";
    $query3     ="UPDATE transaksi SET akhir='$akhir' WHERE rekening_id = '$rekening_id'";
    $query      ="INSERT INTO penarikan SET admin_id='$admin_id',rekening_id='$rekening_id', rekening='$rek', tanggal='$tanggal', jumlah='$jumlah', awal='$awal', akhir='$akhir'";
   
    mysqli_query($koneksi, $query2);
    mysqli_query($koneksi, $query3);
    mysqli_query($koneksi, $query);
    
    // mengalihkan halaman kembali ke ambil.php
    header("location:../admin/ambil.php");
    
?>