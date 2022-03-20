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
  <link rel="stylesheet" href="css/datatables.min.css"> <!--Data Tables-->
  <link href="../../css/style.min.css" rel="stylesheet">
  <link href="../../css/costum.css" rel="stylesheet">
  <link href="../../css/pace.min.css" rel="stylesheet">

</head>

<body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
  <header class="app-header navbar">
    <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
      <span class="navbar-toggler-icon"></span>
    </button>
    
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
          <span class="fa fa-user-circle" style="font-size: 35px;"></span>
        </a>
        <div class="dropdown-menu dropdown-menu-right">
          <div class="dropdown-header text-center">
            <strong>Pengaturan Akun</strong>
          </div>
         
          <a class="dropdown-item" href="logout.php">
            <i class="fa fa-lock"></i> Logout</a>
        </div>
      </li>
    </ul>
  </header>

<div class="app-body">
    <div class="sidebar">
      <nav class="sidebar-nav">
        <ul class="nav">
          <li class="nav-title">Menu</li>
          <li class="nav-item">
            <a class="nav-link" href="halaman_admin.php">
              <i class="nav-icon icon-speedometer"></i> Dashboard</a>
          </li>
         
                <a class="nav-link" href="user.php">
                  <i class="nav-icon icon-user"></i>Data Nasabah</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="pegawai.php">
                  <i class="nav-icon fa fa-users"></i>Data Admin</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="rekening.php">
                  <i class="nav-icon icon-settings"></i>Rekening</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="transaksi.php">
                  <i class="nav-icon fa fa-dropbox"></i>Setoran</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="ambil.php">
                  <i class="nav-icon icon-doc"></i>Penarikan</a>
              </li>
             
        </ul>
      </nav>
      <button class="sidebar-minimizer brand-minimizer" type="button"></button>
    </div>

<div class="container-fluid">
    <h2 align="center" class="pt-3 pb-3">Admin</h2>
    <div class="row justify-content-center">
        <div class="col-sm-6 col-lg-6 ">
            <a href="tambahpegawai.php" class="btn btn-primary mb-2">Tambah data admin</a>
            <a href="" class="btn btn-dark mb-2">Print</a>
          
            <table class="table table-striped table-hover table-bordered" id="data">
                <thead>
    <tr align="center">
			<th>NO</th>
			<th>Id Pegawai</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Jabatan</th>
      <th>Username</th>
      <th>Password</th>
      <th>Level</th>
			<th>OPSI</th>
		
                    </tr>
                </thead>
                <tbody>

   <?php 
		include 'koneksicrud.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from tb_pegawai");
		while($d = mysqli_fetch_array($data)){
			?>
      
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['id_pegawai']; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['alamat']; ?></td>
				<td><?php echo $d['jabatan']; ?></td>
        <td><?php echo $d['username']; ?></td>
        <td><?php echo $d['password']; ?></td>
        <td><?php echo $d['level']; ?></td>
                <td>
                        <div class="btn-group">		
					<a href="editpegawai.php?&id_pegawai=<?php echo $d['id_pegawai']; ?>"class="btn btn-info">EDIT</a>
            	<a href="deletepegawai.php?&id_pegawai=<?php echo $d['id_pegawai']; ?>" onclick="return confirm('Apakah anda ingin menghapus data ini ?')" class="btn btn-warning">HAPUS</a>
                </div>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
           
  <?php
    include "../../template/footer.php";
?>
   
<script type="text/javascript">
    $(document).ready(function () {
        $('#data').DataTable();
    });
</script>

