<?php 
include "../koneksi/koneksicrud.php";
$id = $_GET['id'];
$query = mysqli_query($koneksi, "select * from admin where id ='$id'");
$data= mysqli_fetch_array($query);
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
    include "../../template/sidebar_crud.php";
?>

<body>
<div class ="pull-right">
                <a href="../admin/pegawai.php" class="btn btn-warning btn-xs"></a>
                </div>

    <div class="container-fluid">
    <h2 align="center" class="pt-3 pb-3">Edit data admin</h2>
    <div class="row justify-content-center">
        <div class="col-sm-6 col-lg-5 ">
            <div class="card">
                <div class="card-body">
                
                <form method="post" action="../crudpegawai/proses_editpegawai.php">
                    <div class="form-group ">
        <!-- <label>Id Pegawai</label> -->
		    <input type="hidden" name="id" class="form-control" value="<?php echo $data["id"] ?>">
        </div>
        <div class="form-group">
				<label>Nama</label>
				<input type="text" name="nama" class="form-control" value="<?php echo $data["nama"] ?>"> 
                </div>
         <div class="form-group">
				<label>Alamat</label>
                <input type="text" name="alamat" class="form-control" value="<?php echo $data["alamat"] ?>"
                </div>
            <div class="form-group">
				<label>Jabatan</label>
                <input type="text" name="jabatan" class="form-control" value="<?php echo $data["jabatan"] ?>"
</div>
<div class="form-group ">
        <label>Username</label>
		    <input type="text" name="username" class="form-control" value="<?php echo $data["username"] ?>">
        </div>
        <div class="form-group ">
        <label>Password</label>
		    <input type="text" name="password" class="form-control" value="<?php echo $data["password"] ?>">
        </div>
        <div class="form-group ">
        <label>Level</label>
		    <input type="text" name="level" class="form-control" value="<?php echo $data["level"] ?>">
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