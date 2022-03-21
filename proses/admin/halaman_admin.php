    <?php
    include "../koneksi/koneksicrud.php";
    // $query = mysqli_query($koneksi, "select count(id) as jumlah from tb_nasabah");
    // $query1 = mysqli_query($koneksi, "select count(id_pegawai) as jumlah from tb_pegawai");
    // $query2 = mysqli_query($koneksi, "select count(id) as jumlah from tb_transaksi");
    // $query3 = mysqli_query($koneksi, "select count(id) as jumlah from tb_ambil");
    // $data= mysqli_fetch_array($query);
    // $dataadm= mysqli_fetch_array($query1);
    // $datatr= mysqli_fetch_array($query2);
    // $dataamb= mysqli_fetch_array($query3);
    // $jumlahnasabah = $data['jumlah']; 
    // $jumlahadmin = $dataadm['jumlah'];
    // $jumlahsetor = $datatr['jumlah'];
    // $jumlahambil = $dataamb['jumlah'];  
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
            <div class="col-md-12 grid-margin transparent">
            <div class="row">
                <div class="col-md-3 mb-4 stretch-card transparent">
                <div class="card card-tale">
                    <div class="card-body">
                    <p class="mb-4">Jumlah Nasabah</p>
                    <p class="fs-30 mb-2">4006</p>
                    <p>10.00% (30 days)</p>
                    </div>
                </div>
                </div>
                <div class="col-md-3 mb-4 stretch-card transparent">
                <div class="card card-dark-blue">
                    <div class="card-body">
                    <p class="mb-4">Jumlah Admin</p>
                    <p class="fs-30 mb-2">61344</p>
                    <p>22.00% (30 days)</p>
                    </div>
                </div>
                </div>
                <div class="col-md-3 mb-4 stretch-card transparent">
                <div class="card card-dark-blue">
                    <div class="card-body">
                    <p class="mb-4">Jumlah Setoran</p>
                    <p class="fs-30 mb-2">61344</p>
                    <p>22.00% (30 days)</p>
                    </div>
                </div>
                </div>
                <div class="col-md-3 mb-4 stretch-card transparent">
                <div class="card card-dark-blue">
                    <div class="card-body">
                    <p class="mb-4">Jumlah Penarikan</p>
                    <p class="fs-30 mb-2">61344</p>
                    <p>22.00% (30 days)</p>
                    </div>
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

</body>

</html>

