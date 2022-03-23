
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
                        <a href="../crudnasabah/tambah.php" class="btn btn-sm btn-primary btn-rounded btn-fw ">Tambah Nasabah</a>
                        <div class="p-1"></div>
                        <a href="../../cetak.php" class="btn btn-sm btn-success btn-rounded btn-fw">Cetak</a>
                    </div>
                    <h4 class="card-title">List Nasabah</h4>

                    <div class="table-responsive">
                        <table class="table" id="data">
                        <thead>
                            <tr class="text-center"> 
                                <th>No</th>
                                <!-- <th>Id Nasabah</th> -->
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Nomor KTP/SIM</th>
                                <th>Gender</th>
                                <th>Nomor Telfon</th>
                                <th>OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                            include '../koneksi/koneksicrud.php';
                            $no = 1;
                            $data = mysqli_query($koneksi,"select * from nasabah");
                            while($d = mysqli_fetch_array($data)){
                        ?>

                            <tr align="center">
                                <td><?php echo $no++; ?></td> 
                                <!-- <td><?php echo $d['id_nasabah']; ?></td> -->
                                <td><?php echo $d['nama']; ?></td>
                                <td><?php echo $d['alamat']; ?></td>
                                <td><?php echo $d['ktp']; ?></td>
                                <td><?php echo $d['gender']; ?></td>
                                <td><?php echo $d['telp']; ?></td>
                                <td>
                                    <a href="../crudnasabah/edit.php?&id=<?php echo $d['id_nasabah']; ?>" class="btn btn-sm btn-info btn-rounded btn-fw">Edit</a>
                                    <a href="../crudnasabah/delete.php?&id=<?php echo $d['id_nasabah']; ?>" class="btn btn-sm btn-danger btn-rounded btn-fw">Delete</a>
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
