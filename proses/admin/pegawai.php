<?php
session_start();
// cek apakah user sudah login
if(!isset($_SESSION['login'])){
	header ("location :../admin/auth/login.php");                       
} 
// cek user
if(($_SESSION['level']!="kc")){
die("'<script>alert('Pemberitahuan: akses tidak di izinkan');
    window.location = '../admin/halaman_admin.php'</script>'");
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
<?php
    include "../../template/header.php";
?>

<div class="app-body">
<?php
    include "../../template/sidebar.php";
?>

<div class="container-fluid">
    <h2 align="center" class="pt-3 pb-3">Admin</h2>
    <div class="row justify-content-center">
        <div class="col-sm-6 col-lg-6 ">
            <a href="../crudpegawai/tambahpegawai.php" class="btn btn-primary mb-2">Tambah data admin</a>
            <!-- <a href="" class="btn btn-dark mb-2">Print</a> -->
          
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
		include '../koneksi/koneksicrud.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from admin");
		while($d = mysqli_fetch_array($data)){
			?>
      
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['id']; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['alamat']; ?></td>
				<td><?php echo $d['jabatan']; ?></td>
                <td><?php echo $d['username']; ?></td>
                <td><?php echo $d['password']; ?></td>
                <td><?php echo $d['level']; ?></td>
                <td>
                        <div class="btn-group">		
                <a href="../crudpegawai/editpegawai.php?&id=<?php echo $d['id']; ?>"class="btn btn-info">EDIT</a>
            	<a href="../crudpegawai/deletepegawai.php?&id=<?php echo $d['id']; ?>" onclick="return confirm('Apakah anda ingin menghapus data ini ?')" class="btn btn-warning">HAPUS</a>
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

