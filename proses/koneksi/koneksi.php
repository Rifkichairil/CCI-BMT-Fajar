<?php
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'db_bmt';

//koneksi dan memilih database di server
$koneksi = mysqli_connect($server,$username,$password) or die ("KONEKSI GAGAL!");
mysqli_select_db($koneksi,$database) or die ("DATABASE TIDAK BISA DIBUKA!");
?>