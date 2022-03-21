
<?php 
include "../koneksi/koneksicrud.php";
$id = $_GET['id'];
$query = mysqli_query($koneksi, "select * from penarikan where id ='$id'");
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

    <body>
 	
    <div class ="pull-right">
      <a href="ambil.php" class="btn btn-warning btn-xs"></a>
    </div>
   
       <div class="container-fluid">
       <h2 align="center" class="pt-3 pb-3">Edit Transaksi Penarikan</h2>
       <div class="row justify-content-center">
           <div class="col-sm-6 col-lg-5 ">
               <div class="card">
                   <div class="card-body">
                   <div class="hitung">
                   <form method="post" action="../crudpenarikan/prosesedit_ambil.php">
                       <div class="form-group ">
                       <input type="hidden" name="id" class="form-control" value="<?php echo $data["id"] ?>">

                      <label>Id Pegawai</label>
                      <input type="text" name="admin_id" class="form-control" value="<?php echo $data["admin_id"] ?>">
                      </div>
                      <div class="form-group ">
                      <label>Id Rekening Nasabah</label>
                      <input type="text" name="rekening_id" class="form-control" value="<?php echo $data["rekening_id"] ?>">
                      </div>
                      <div class="form-group">
                      <label>Nomor Rekening</label>
                      <input type="text" name="rekening" class="form-control" value="<?php echo $data["rekening"] ?>"> 
                              </div>
                      <div class="form-group">
                      <label>Tanggal</label>
                              <input type="date" name="tanggal" class="form-control" value="<?php echo $data["tanggal"] ?>"
                              </div>
                          <div class="form-group">
                      <label>Jumlah</label>
                              <input type="text" name="jumlah" id="jumlah" class="form-control" value="<?php echo $data["jumlah"] ?>"
              </div>

            <div class="form-group">
				<label>Saldo Awal</label>
                <input type="text" name="awal" id="awal" class="form-control" value="<?php echo $data["awal"] ?>"
</div>

<div class="form-group">
				<label>Saldo Akhir</label>
                <input type="text" name="akhir" id="akhir" class="form-control" value="<?php echo $data["akhir"] ?>"
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
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
 <script type="text/javascript">
 
  $(".hitung").keyup(function(){
    var jumlah= parseInt($("#jumlah").val())
    var awal= parseInt($("#awal").val())
    var akhir= parseInt($("#akhir").val())
 
    var gettotal=awal - jumlah;
 
    $("#akhir").attr("value",gettotal)
  
  });
  </script>

  </body>
</html>