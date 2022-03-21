<?php
include('../koneksi/koneksi.php');
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
                <a href="user.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i>Kembali</a>
                </div>

    <div class="container-fluid">
    <h2 align="center" class="pt-3 pb-3">Tambah Transaksi Setoran</h2>
    <div class="row justify-content-center">
        <div class="col-sm-6 col-lg-5 ">
            <div class="card">
                <div class="card-body">
                <div class="hitung">
                <form method="post" action="../crudtransaksi/transaksi_aksi.php">
                <div class="form-group ">
                    <label>Id Pegawai</label>
                  <input type="text" name="admin_id" class="form-control" placeholder="isi id pegawai" value="" required>
                </div>
                    <div class="form-group ">
                    <label>Id Nasabah</label>
                    <select name="id" id="id" class="form-control" onchange="changeValue(this.value)" required >  
                           <option value="">Pilih..</option>
						   <?php
						   include "../koneksi/koneksi.php";  
                          $query = mysqli_query($koneksi, "select * from rekening");  
                          $result = mysqli_query($koneksi, "select * from rekening");  
                          
                          $b          = "rek= new Array();\n;"; 
                          while ($d = mysqli_fetch_array($result)) {  
                               echo '<option name="id" value="'.$d['id'] . '">' . $d['id'] . '</option>';   
                          $b .= "rek['" . $d['id'] . "'] = {rek:'" . addslashes($d['rek'])."'};\n"; 
					
                          }  
                          ?> 
	             </select>
               
                </div>
                    <div class="form-group">
                  <label>Nomor Rekening</label>
                  <input type="text" name="rek" id="rek" class="form-control" placeholder="isi rekening" required readonly>
                </div>
                <div class="rm-group">
                  <label>Tanggal</label>
                  <input type="date" name="tanggal" class="form-control" placeholder="isi tanggal" required>
                </div>
                <div class="rm-group">
                  <label>Jumlah Setoran</label>
                  <input type="text" name="jumlah" id="jumlah" class="form-control" placeholder="isi jumlah" required>
                </div> 
                <div class="form-group">
                  <label>Setoran Awal</label>
                  <input type="text" name="awal" id="awal" class="form-control" placeholder="isi saldo awal" required>
                </div>
                <div class="form-group ">
                    <label>Saldo Akhir</label>
                  <input type="text" name="akhir" id="akhir" class="form-control" placeholder="isi saldo akhir" required>
                </div>
                    <tr>
                      <td></td>
                      <td><input type="submit" value="SIMPAN"></td>
                      </tr>	
                      <script type="text/javascript">   
                          <?php   
                          
                          echo $b;
						                ?>  
                          function changeValue(id){     
						
              document.getElementById('rek').value = rek[id].rek;   
				 
                          };  
                  </script>	
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
 
    var gettotal=awal + jumlah;
 
    $("#akhir").attr("value",gettotal)
  
  });
  </script>

  </body>
</html>