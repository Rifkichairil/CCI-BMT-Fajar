<?php
    include('../koneksi/koneksi.php');
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
        window.location = 'halaman_admin.php'</script>'");
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
                        <a href="../crudtransaksi/tambahtransaksi.php" class="btn btn-sm btn-primary btn-rounded btn-fw ">Tambah Transaksi</a>
                        <div class="p-1"></div>
                        <a href="../crudtransaksi/eksport.php" class="btn btn-sm btn-success btn-rounded btn-fw">Cetak</a>
                    </div>
                    <h4 class="card-title">List Transaksi</h4>

                    <div class="table-responsive">
                        <table class="table" id="data">
                        <thead>
                            <tr class="text-center">
                                <th>No</th>
                                <!-- <th>Id Transaksi</th> -->
                                <!-- <th>Id Pegawai</th> -->
                                <!-- <th>Id Rekening</th> -->
                                <th>Nama Nasabah</th>
                                <th>Nomor Rekening</th>
                                <th>Tanggal</th>
                                <th>Jumlah</th>
                                <th>Setoran Awal</th>
                                <th>Saldo Akhir</th>
                                <th>OPSI</th> 
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                            include '../koneksi/koneksicrud.php';
                            $no = 1;
                            // $sql = 'SELECT * FROM rekening INNER JOIN nasabah ON rekening.nasabah_id = nasabah.id_nasabah';
                            $sql = 'SELECT * FROM transaksi INNER JOIN rekening ON transaksi.rekening_id = rekening.id_rekening';

                            $data = mysqli_query($koneksi, $sql);
                            while($d = mysqli_fetch_array($data)){
                        ?>

                            <tr align="center">
                                <td><?php echo $no++; ?></td>
                                <!-- <td><?php echo $d['id_transaksi']; ?></td> -->
                                <!-- <td><?php echo $d['admin_id']; ?></td> -->
                                <!-- <td><?php echo $d['rekening_id']; ?></td> -->
                                <td><?php echo $d['nama']; ?></td>
                                <td><?php echo $d['rekening']; ?></td>
                                <td><?php echo $d['tanggal']; ?></td>
                                <td><?php echo $d['jumlah']; ?></td>
                                <td><?php echo $d['awal']; ?></td>
                                <td><?php echo $d['akhir']; ?></td>
                                <td>
                                    <a href="../crudtransaksi/edit_transaksi.php?&id=<?php echo $d['id_transaksi']; ?>" class="btn btn-sm btn-info btn-rounded btn-fw">Edit</a>
                                    <a href="../crudtransaksi/delete_transaksi.php?&id=<?php echo $d['id_transaksi']; ?>" class="btn btn-sm btn-danger btn-rounded btn-fw">Delete</a>
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

