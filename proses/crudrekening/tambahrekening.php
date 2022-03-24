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
                  <h4 class="card-title">Tambah Nasabah</h4>
                  <form class="forms-sample" action="../crudrekening/rekening_aksi.php" method="POST">

                  <div class="form-group">
                    <label>Nasabah</label>
                    <select class="js-example-basic-single w-100" id="nasabah_id" name="nasabah_id">
                      <option value="">- Pilih Nasabah -</option>
                      <?php
                        include "../koneksi/koneksi.php";
                        $sql = "select * from nasabah";
                        $result = mysqli_query($koneksi, $sql);
                        $options = "";

                        while ($row = mysqli_fetch_array($result)) {
                          # code...
                          $id = $row['id'];
                          $nama = $row['nama'];

                          echo '<option value="'. $row['id_nasabah'] . '">' . $row['nama'] . '</option>';
                        }
                      ?>
                    </select>
                  </div>
                    <!-- <div class="form-group">
                      <label for="nasabah">Nasabah</label>
                      <select class="form-control form-control-lg" id="nasabah_id" name="nasabah_id" onchange="changeValue(this.value)" required>
                        <option value="">- Pilih -</option>
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
                    </div> -->
                  
                    <!-- <div class="form-group">
                      <label for="nama">Nama</label>
                      <input type="text" class="form-control" id="nama" name="nama" placeholder="masukan nama" required>
                    </div> -->
                    <div class="form-group">
                      <label for="rek">Nomor Rekening</label>
                      <input type="text" class="form-control" id="rek" name="rek" placeholder="masukan rek" required>
                    </div>
                    <div class="form-group">
                      <label for="tgl_buka">Tanggal Buka</label>
                      <input type="date" class="form-control" id="tgl_buka" name="tgl_buka" placeholder="masukan tgl_buka" required>
                    </div>
                    
                    <div class="form-group">
                      <label for="awal">Saldo Awal</label>
                      <input type="text" class="form-control hitung" id="awal" name="awal" placeholder="masukan saldo awal" required>
                    </div>
                    <div class="form-group">
                      <label for="akhir">Saldo Akhir</label>
                      <input type="text" class="form-control" id="akhir" name="akhir" placeholder="masukan saldo akhir" required readonly>
                    </div>


                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
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
      var awal= parseInt($("#awal").val())
      var akhir= parseInt($("#akhir").val())
      var gettotal=awal;
  
      $("#akhir").attr("value",gettotal)
  });
</script>

</body>

</html>
