<?php
include('./../koneksi/koneksi.php');
?>
<?php
session_start();
// cek apakah user sudah login
if(!isset($_SESSION['login'])){
	header ("location :../auth/login.php");                       
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
                  <form class="forms-sample" action="../crudnasabah/tambah_aksicrud.php" method="POST">
                    <div class="form-group">
                      <label for="nama">Nama</label>
                      <input type="text" class="form-control" id="nama" name="nama" placeholder="masukan nama" required>
                    </div>
                    <div class="form-group">
                      <label for="alamat">Alamat</label>
                      <input type="text" class="form-control" id="alamat" name="alamat" placeholder="masukan alamat" required>
                    </div>
                    <div class="form-group">
                      <label for="ktp">Nomor KTP / SIM</label>
                      <input type="number" class="form-control" id="ktp" name="ktp" placeholder="masukan ktp" required>
                    </div>
                    <div class="form-group">
                      <label for="gender">Gender</label>
                      <select class="form-control form-control-lg" id="gender" name="gender">
                        <option value="">- Pilih Gender -</option>
                        <option value="Laki-Laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="telp">No Telpon</label>
                      <input type="text" class="form-control" id="telp" name="telp" placeholder="masukan telp" required>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
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

</body>

</html>
