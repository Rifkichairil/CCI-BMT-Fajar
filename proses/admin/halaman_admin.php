<?php
include "../koneksi/koneksicrud.php";
// $query = mysqli_query($koneksi, "select count(id) as jumlah from tb_nasabah");
// $query1 = mysqli_query($koneksi, "select count(id_pegawai) as jumlah from tb_pegawai");
// $query2 = mysqli_query($koneksi, "select count(id) as jumlah from tb_transaksi");
// $query3 = mysqli_query($koneksi, "select count(id) as jumlah from tb_ambil");
// $data= mysqli_fetch_array($query);
// $dataadm= mysqli_fetch_array($query1);
// $datatr= mysqli_fetch_array($query2);
// $dataamb= mysqli_fetch_array($query3);
// $jumlahnasabah = $data['jumlah']; 
// $jumlahadmin = $dataadm['jumlah'];
// $jumlahsetor = $datatr['jumlah'];
// $jumlahambil = $dataamb['jumlah'];  
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
  <link rel="stylesheet" href="../css/datatables.min.css"> <!--Data Tables-->
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
    include "../../template/sidebar.php";
?>
    <div class="container-fluid">
        <h1 align="center" class="pt-3">Selamat datang di Bmt Fajar</h1>
        <div class="row pt-5">

            <div class="col-sm-6 col-lg-4">
                <div class="brand-card">
                    <div class="brand-card-header bg-facebook">
                        <i class="fa fa-users"></i>
                    </div>
                    <div class="card-body pb-0">
                        <div class="text-value" align="center">Jumlah Nasabah</div>
                    </div>
                    <div class="brand-card-body">
                        <div>
                            <!-- <div class="text-value"><?=$jumlahnasabah?></div> -->
                            <div class="text-uppercase text-muted small">Nasabah</div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-sm-6 col-lg-4">
                <div class="brand-card">
                    <div class="brand-card-header bg-twitter">
                        <i class="fa fa-user"></i>
                    </div>
                    <div class="card-body pb-0">
                        <div class="text-value" align="center">Jumlah Admin</div>
                    </div>
                    <div class="brand-card-body">
                        <div>
                            <!-- <div class="text-value"><?=$jumlahadmin?></div> -->
                            <div class="text-uppercase text-muted small">Admin</div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-sm-6 col-lg-4">
                <div class="brand-card">
                    <div class="brand-card-header bg-success">
                        <i class="fa fa-dropbox"></i>
                    </div>
                    <div class="card-body pb-0">
                        <div class="text-value" align="center">Jumlah Setoran</div>
                    </div>
                    <div class="brand-card-body">
                        <div>
                            <!-- <div class="text-value"><?=$jumlahsetor?></div> -->
                            <div class="text-uppercase text-muted small">Transaksi</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4">
                <div class="brand-card">
                    <div class="brand-card-header bg-danger">
                        <i class="fa fa-dropbox"></i>
                    </div>
                    <div class="card-body pb-0">
                        <div class="text-value" align="center">Jumlah Penarikan</div>
                    </div>
                    <div class="brand-card-body">
                        <div>
                            <!-- <div class="text-value"><?=$jumlahambil?></div> -->
                            <div class="text-uppercase text-muted small">Transaksi</div>
                        </div>
                    </div>
                </div>
            </div>
<?php
    include "../../template/footer.php";
?>