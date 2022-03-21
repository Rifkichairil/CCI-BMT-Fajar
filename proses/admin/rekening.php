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
    <h2 align="center" class="pt-3 pb-3">Rekening</h2>
    <div class="row justify-content-center">
        <div class="col-sm-6 col-lg-6 ">
            <a href="../crudrekening/tambahrekening.php" class="btn btn-primary mb-2">Tambah data</a>
            <a href="../crudrekening/cetak.php" class="btn btn-dark mb-2">Print</a>
            <table class="table table-striped table-hover table-bordered" id="data">
                <thead>
                    <tr align="center">
                        <th>No</th>
                        <th>Id Nasabah</th>
                        <th>Nama</th>
                        <th>Nomor Rekening</th>
                        <th>Tanggal Buka</th>
                        <th>Saldo</th>
                        <th>Saldo Akhir</th>
                        <th>OPSI</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
		include '../koneksi/koneksicrud.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from rekening");
		while($d = mysqli_fetch_array($data)){
			?>
                <tr align="center">
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $d['nasabah_id']; ?></td>
                  <td><?php echo $d['nama']; ?></td>
                  <td><?php echo $d['rek']; ?></td>
                  <td><?php echo $d['tgl_buka']; ?></td>
                  <td><?php echo $d['awal']; ?></td>
                  <td><?php echo $d['akhir']; ?></td>
                  <td>
                      <div class="btn-group">
                          <a href="../crudrekening/edit_rekening.php?id=<?=$d['id']?>"  class="btn btn-info">Edit</a>
                          <a href="../crudrekening/delete_rekening.php?id=<?=$d['id']?>" onclick="return confirm('Apakah anda ingin menghapus data ini ?')" class="btn btn-warning">Hapus</a>
                      </div>
                  </td>
                </tr>
                <?php } ?>
            </tbody>
            </table>
        </div>
    </div>
</div>
<div class="mb-3"></div>
<?php
    include "../../template/footer.php";
?>
<script type="text/javascript">
    $(document).ready(function () {
        $('#data').DataTable();
    });
</script>
