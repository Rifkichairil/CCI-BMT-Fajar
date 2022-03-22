<?php 
$server = 'localhost';
$username = 'root'; //default mysql
$password = ''; //default mysql
$database = 'db_bmt'; //nama database yang akan diakses
$peringatan = 'DATABASE TIDAK BISA DIBUKA!';

$koneksi = mysqli_connect($server,$username,$password,$database);
	
	// Check connection
	if (mysqli_connect_errno()){
		echo "Koneksi database gagal : " . mysqli_connect_error();
	}
	
?>