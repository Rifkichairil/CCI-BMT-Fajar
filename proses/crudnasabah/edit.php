<?php 
include '../koneksi/koneksicrud.php';
$id = $_GET['id'];
$query = mysqli_query($koneksi, "select * from nasabah where id ='$id'");
$data= mysqli_fetch_array($query);
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
                  <form class="forms-sample" action="../crudnasabah/proses_edit.php" method="POST">
                    <div class="form-group">
                      <input type="hidden" class="form-control" id="id" name="id"  value="<?php echo $data["id"] ?>">
                    </div>
                    <div class="form-group">
                      <label for="nama">Nama</label>
                      <input type="text" class="form-control" id="nama" name="nama" placeholder="masukan nama" value="<?php echo $data["nama"] ?>">
                    </div>
                    <div class="form-group">
                      <label for="alamat">Alamat</label>
                      <input type="text" class="form-control" id="alamat" name="alamat" placeholder="masukan alamat" value="<?php echo $data["alamat"] ?>">
                    </div>
                    <div class="form-group">
                      <label for="ktp">Nomor KTP / SIM</label>
                      <input type="number" class="form-control" id="ktp" name="ktp" placeholder="masukan ktp" value="<?php echo $data["ktp"] ?>">
                    </div>
                    <div class="form-group">
                      <label for="gender">Gender</label>
                      <select class="form-control form-control-lg" id="gender" name="gender">
                        <option value="<?php echo $data["gender"] ?>"> <?php echo $data["gender"] ?> </option>
                        <option value="Laki-Laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="telp">No Telpon</label>
                      <input type="text" class="form-control" id="telp" name="telp" placeholder="masukan telp" value="<?php echo $data["telp"] ?>">
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
