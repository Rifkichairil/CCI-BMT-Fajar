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
if(($_SESSION['level']!="admin")){
die("'<script>alert('Pemberitahuan: akses tidak di izinkan');
    window.location = '../admin/halaman_admin.php'</script>'");
//Jika Bukan Admin tidak bisa Lanjut
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
                <a href="rekening.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i>Kembali</a>
                </div>

               <div class="container-fluid">
    <h2 align="center" class="pt-3 pb-3">Tambah Rekening</h2>
    <div class="row justify-content-center">
        <div class="col-sm-6 col-lg-5 ">
            <div class="card">
                <div class="card-body">
                <div class="hitung">
                <form method="post" action="../crudrekening/rekening_aksi.php">
                    <div class="form-group ">
                  <label>Nasabah</label>
                  <select name="nasabah_id" id="nasabah_id" class="form-control" onchange="changeValue(this.value)" required >  
                           <option value="">Pilih..</option>
						   <?php
						   include "../koneksi/koneksi.php";  
                          $query = mysqli_query($koneksi, "select * from nasabah");  
                          $result = mysqli_query($koneksi, "select * from nasabah");  
                          
                          $b          = "nama= new Array();\n;"; 
                          while ($d = mysqli_fetch_array($result)) {  
                               echo '<option name="id" value="'.$d['id'] . '">' . $d['id'] . '</option>';   
                          $b .= "nama['" . $d['id'] . "'] = {nama:'" . addslashes($d['nama'])."'};\n"; 
					
                          }  
                          ?> 
	             </select>
                </div>
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" name="nama" id="nama" class="form-control" placeholder="nama nasabah" required>
                </div>
                <div class="form-group">
                  <label>Nomor Rekening</label>
                  <input type="text" name="rek" class="form-control" placeholder="nomor rekening" required >
                </div>
                  <div class="form-group">
                  <label>Tanggal Buka</label>
                  <input type="date" name="tgl_buka" class="form-control" placeholder="tanggal" required>
                </div>  
                <div class="form-group">
                  <label>Saldo</label>
                  <input type="text" name="awal" id="awal" class="form-control" placeholder="Saldo Awal" required>
                </div>
                <div class="form-group">
                  <label>Saldo Akhir</label>
                  <input type="text" name="akhir" id="akhir" class="form-control" placeholder="Saldo Akhir" required>
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
						
              document.getElementById('nama').value = nama[id].nama;   
				 
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
    var awal= parseInt($("#awal").val())
    var akhir= parseInt($("#akhir").val())
 
    var gettotal=awal;
 
    $("#akhir").attr("value",gettotal)
  
  });
  </script>
</html>