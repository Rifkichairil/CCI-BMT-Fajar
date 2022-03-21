<?php
include('../koneksi/koneksi.php');
?>

<?php
session_start();
// cek apakah user sudah login
if(!isset($_SESSION['login'])){
	header ("location :login.php");                       
} 
// cek user
if(($_SESSION['level']!="kc")){
die("'<script>alert('Pemberitahuan: akses tidak di izinkan');
    window.location = 'halaman_admin.php'</script>'");
//Jika Bukan kc tidak bisa Lanjut
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>BMT FAJAR</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
  <meta name="author" content="Lukasz Holeczek">
  <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
  
  <!-- Icons-->
  <link href="../../vendors/css/flag-icon.min.css" rel="stylesheet">
  <link href="../../vendors/css/font-awesome.min.css" rel="stylesheet">
  <link href="../../vendors/css/simple-line-icons.css" rel="stylesheet">
  <!-- Main styles for this application-->
  <link rel="stylesheet" href="../../css/datatables.min.css"> <!--Data Tables-->
  <link href="../../css/style.min.css" rel="stylesheet">
  <link href="../../css/costum.css" rel="stylesheet">
  <link href="../../css/pace.min.css" rel="stylesheet">

</head>

<body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
<?php
    include "../../template/header.php";
?>

<div class="app-body">
<?php
    include "../../template/sidebar_crud.php";
?>

    <div class ="pull-right">
                <a href="../admin/pegawai.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i>Kembali</a>
                </div>

    <div class="container-fluid">
    <h2 align="center" class="pt-3 pb-3">Tambah Data Admin</h2>
    <div class="row justify-content-center">
        <div class="col-sm-6 col-lg-5 ">
            <div class="card">
                <div class="card-body">
                <form method="post" action="pegawai_aksi.php">
                    <!-- <div class="form-group ">
                      <label>Id Pegawai</label>
                      <input type="text" name="id_pegawai" class="form-control" placeholder="isi id pegawai" required>
                    </div> -->
                    <div class="form-group">
                  <label>Nama</label>
                  <input type="text" name="nama" class="form-control" placeholder="isi nama" required>
                </div>
                <div class="form-group">
                  <label>Alamat</label>
                  <input type="textarea" name="alamat" class="form-control" placeholder="isi alamat" required>
                </div>
                <div class="form-group">
                <label>Jabatan</label>
                  <input type="text" name="jabatan" class="form-control" placeholder="isi jabatan" required>
                </div>
                <div class="form-group ">
                    <label>Username</label>
                  <input type="text" name="username" class="form-control" placeholder="isi username" required>
                </div>
                <div class="form-group ">
                    <label>Password</label>
                  <input type="text" name="password" class="form-control" placeholder="isi password" required>
                </div>
                <div class="form-group ">
                    <label>Level</label>
                  <input type="text" name="level" class="form-control" placeholder="isi level" required>
                </div>
                    <tr>
                      <td></td>
                      <td><input type="submit" value="SIMPAN"></td>
                    </tr>		
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</html>
