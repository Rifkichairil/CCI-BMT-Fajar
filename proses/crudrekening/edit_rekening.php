
<?php 
    include '../koneksi/koneksicrud.php';
    $id = $_GET['id'];
    $sql = "SELECT * FROM rekening INNER JOIN nasabah ON rekening.nasabah_id = nasabah.id_nasabah where id_rekening = '$id'";
    // $query = mysqli_query($koneksi, "select * from rekening where id_rekening ='$id'");
    $query = mysqli_query($koneksi, $sql);
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
                <h4 class="card-title">
                    <!-- <?php echo var_dump($query)?> -->
                </h4>
                <h4 class="card-title">Edit Rekening</h4>
                <form class="forms-sample" action="../crudrekening/proses_editrekening.php" method="POST">
                <input type="hidden" name="id_rekening" value="<?php echo $data["id_rekening"] ?>" >
                <input type="hidden" name="nasabah_id" value="<?php echo $data["nasabah_id"] ?>" >

                    <!-- <div class="form-group">
                        <label for="nasabah_id">Id Nasabah</label>
                        <input type="text" class="form-control" id="nasabah_id" name="nasabah_id" value="<?php echo $data["nasabah_id"] ?>"  readonly >
                    </div> -->
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $data["nama"] ?>" readonly >
                    </div>
                    <div class="form-group">
                        <label for="rek">Nomor Rekening</label>
                        <input type="text" class="form-control" id="rek" name="rek" placeholder="masukan rek" value="<?php echo $data["rek"] ?>">
                    </div>
                    <div class="form-group">
                        <label for="tgl_buka">Tanggal Buka</label>
                        <input type="date" class="form-control" id="tgl_buka" name="tgl_buka" placeholder="masukan tgl_buka" value="<?php echo $data["tgl_buka"] ?>">
                    </div>
                    <div class="form-group">
                        <label for="awal">Saldo Awal</label>
                        <input type="text" class="form-control hitung" id="awal" name="awal" placeholder="masukan saldo awal" value="<?php echo $data["awal"] ?>">
                    </div>
                    <div class="form-group">
                        <label for="akhir">Saldo Akhir</label>
                        <input type="text" class="form-control" id="akhir" name="akhir" placeholder="masukan saldo akhir" value="<?php echo $data["akhir"] ?>" readonly>
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
