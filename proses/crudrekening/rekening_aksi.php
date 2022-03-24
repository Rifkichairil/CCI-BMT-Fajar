<?php 
    // koneksi database
    include '../koneksi/koneksicrud.php';
    
    // menangkap data yang di kirim dari form
    // $id         = $_POST['id'];
    $nasabah_id = $_POST['nasabah_id'];
    // $nama       = $_POST['nama'];
    $rek        = $_POST['rek'];
    $tgl_buka   = $_POST['tgl_buka'];
    $awal       = $_POST['awal'];
    $akhir      = $_POST['akhir'];

    if ($awal <= 20000) {
        # code...
        die("'<script>alert('Pemberitahuan: Minimal awal setoran adalan Rp. 20.000');
        window.location = 'tambahrekening.php'
        </script>'");

    }

    // menginput data ke database
    $query="INSERT INTO rekening SET nasabah_id='$nasabah_id', nama='test', rek='$rek', tgl_buka='$tgl_buka', awal='$awal', akhir='$akhir'";
    mysqli_query($koneksi, $query);
    
    // mengalihkan halaman kembali ke rekening.php
    header("location:../admin/rekening.php");
    
?>