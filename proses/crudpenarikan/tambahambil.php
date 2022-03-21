<?php
include('../koneksi/koneksi.php');
?>



<!DOCTYPE html>
<html lang="en">


<?php
    include('../../template/head.php')
?>
<body>
    <div class="container-scroller">
    <?php
        include('../../template/navbar.php')
    ?>

    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
    <!-- partial:partials/_sidebar.html -->
    <?php
        include('../../template/sidebar_crud.php')
    ?>

    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            
        <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Tambah Transaksi Penarikan</h4>
                  <form class="forms-sample" action="../crudpenarikan/ambil_aksi.php" method="POST">
                    
                  <div class="form-group">
                      <label for="admin_id">ID Pegawai</label>
                      <input type="text" class="form-control" id="admin_id" name="admin_id" placeholder="masukan nama" required>
                    </div>
                  <div class="form-group">
                      <label for="rekening_id">ID Nasabah</label>
                      <select class="form-control form-control-lg" id="rekening_id" name="rekening_id" onchange="changeValue(this.value)" required>
                        <option value="">- Pilih -</option>
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
                      <label>Jumlah Penarikan</label>
                      <input type="text" name="jumlah" id="jumlah" class="form-control" placeholder="isi jumlah" required>
                    </div>
                    <div class="form-group">
                      <label>Saldo Awal</label>
                      <input type="text" name="awal" id="awal" class="form-control hitung" placeholder="isi saldo awal" required>
                    </div>
                    <div class="form-group ">
                      <label>Saldo Akhir</label>
                      <input type="text" name="akhir" id="akhir" class="form-control" placeholder="isi saldo akhir" required>
                    </div>


                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
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
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <?php
            include('../../template/footer.php')
        ?>
        <!-- partial -->
    </div>
    <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->


<?php
    include('../../template/js.php')
?>

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
