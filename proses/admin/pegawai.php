<?php
session_start();
// cek apakah user sudah login
if(!isset($_SESSION['login'])){
	header ("location :../admin/auth/login.php");                       
} 
// cek user
if(($_SESSION['level']!="kc")){
die("'<script>alert('Pemberitahuan: akses tidak di izinkan');
    window.location = '../admin/halaman_admin.php'</script>'");
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
        include('../../template/sidebar.php')
    ?>

    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                    <div class="d-flex justify-content-end">
                        <a href="../crudpegawai/tambahpegawai.php" class="btn btn-sm btn-primary btn-rounded btn-fw ">Tambah Pegawai</a>
                        <div class="p-1"></div>
                        <!-- <a href="../crudrekening/cetak.php" class="btn btn-sm btn-success btn-rounded btn-fw">Cetak</a> -->
                    </div>
                    <h4 class="card-title">List Rekening</h4>

                    <div class="table-responsive">
                        <table class="table" id="data">
                        <thead>
                            <tr class="text-center">
                                <th>NO</th>
                                <!-- <th>Id Pegawai</th> -->
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Jabatan</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Level</th>
                                <th>OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                            include '../koneksi/koneksicrud.php';
                            $no = 1;
                            $data = mysqli_query($koneksi,"select * from admin");
                            while($d = mysqli_fetch_array($data)){
                        ?>

                            <tr align="center">
                            <td><?php echo $no++; ?></td>
                                <!-- <td><?php echo $d['id_admin']; ?></td> -->
                                <td><?php echo $d['nama']; ?></td>
                                <td><?php echo $d['alamat']; ?></td>
                                <td><?php echo $d['jabatan']; ?></td>
                                <td><?php echo $d['username']; ?></td>
                                <td><?php echo $d['password']; ?></td>
                                <td><?php echo $d['level']; ?></td>
                                <td>
                                    <a href="../crudpegawai/editpegawai.php?&id=<?php echo $d['id_admin']; ?>" class="btn btn-sm btn-info btn-rounded btn-fw">Edit</a>
                                    <a href="../crudpegawai/deletepegawai.php?&id=<?php echo $d['id_admin']; ?>" class="btn btn-sm btn-danger btn-rounded btn-fw">Delete</a>
                                </td>
                            </tr>
                

                        <?php } ?>
                        </tbody>
                        </table>
                    </div>
                    </div>
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
    $(document).ready(function () {
        $('#data').DataTable();
    });
</script>
</body>

</html>
