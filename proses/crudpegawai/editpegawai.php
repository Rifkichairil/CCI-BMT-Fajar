<?php 
include "../koneksi/koneksicrud.php";
$id = $_GET['id'];
$query = mysqli_query($koneksi, "select * from admin where id ='$id'");
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
                    <h4 class="card-title">Tambah Pegawai</h4>
                    <form class="forms-sample" action="../crudpegawai/proses_editpegawai.php" method="POST">
                    <input type="hidden" name="id" class="form-control" value="<?php echo $data["id"] ?>">

                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="nama" class="form-control" placeholder="isi nama" value="<?php echo $data["nama"] ?>">
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="textarea" name="alamat" class="form-control" placeholder="isi alamat" value="<?php echo $data["alamat"] ?>">
                    </div>
                    <div class="form-group">
                        <label>Jabatan</label>
                        <input type="text" name="jabatan" class="form-control" placeholder="isi jabatan" value="<?php echo $data["jabatan"] ?>">
                    </div>
                    <div class="form-group ">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control" placeholder="isi username" value="<?php echo $data["username"] ?>">
                        </div>
                    <div class="form-group ">
                        <label>Password</label>
                        <input type="text" name="password" class="form-control" placeholder="isi password" value="<?php echo $data["password"] ?>">
                        </div>
                    <div class="form-group ">
                        <label>Level</label>
                        <input type="text" name="level" class="form-control" placeholder="isi level" value="<?php echo $data["level"] ?>">
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
