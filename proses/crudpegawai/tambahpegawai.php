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
if(($_SESSION['level']!="kc")){
die("'<script>alert('Pemberitahuan: akses tidak di izinkan');
    window.location = 'halaman_admin.php'</script>'");
//Jika Bukan kc tidak bisa Lanjut
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
                  <h4 class="card-title">Tambah Pegawai</h4>
                  <form class="forms-sample" action="../crudpegawai/pegawai_aksi.php" method="POST">
                    
                  <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control" placeholder="isi nama" required>
                  </div>
                  <div class="form-group">
                    <label>Alamat</label>
                    <input type="textarea" name="alamat" class="form-control" placeholder="isi alamat" required>
                  </div>
                  <div class="form-group">
                    <label>Jabatan</label>
                    <input type="text" name="jabatan" class="form-control" placeholder="isi jabatan" required>
                  </div>
                  <div class="form-group ">
                      <label>Username</label>
                      <input type="text" name="username" class="form-control" placeholder="isi username" required>
                    </div>
                  <div class="form-group ">
                      <label>Password</label>
                      <input type="text" name="password" class="form-control" placeholder="isi password" required>
                    </div>
                  <div class="form-group ">
                      <label>Level</label>
                      <input type="text" name="level" class="form-control" placeholder="isi level" required>
                  </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
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
