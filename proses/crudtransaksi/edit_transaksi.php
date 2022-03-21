
<?php 
include "../koneksi/koneksicrud.php";
$id = $_GET['id'];
$query = mysqli_query($koneksi, "select * from transaksi where id ='$id'");
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
                <h4 class="card-title">Edit Transaksi</h4>
                <form class="forms-sample" action="proses_edittransaksi.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $data["id"] ?>" >

                    <div class="form-group">
                    <label for="admin_id">Id Pegawai</label>
                    <input type="text" class="form-control" id="admin_id" name="admin_id" value="<?php echo $data["admin_id"] ?>"  readonly >
                    </div>
                    <div class="form-group">
                    <label for="id">Id Nasabah</label>
                    <input type="text" class="form-control" id="id" name="id" value="<?php echo $data["id"] ?>"  readonly >
                    </div>

                    <div class="form-group">
                    <label for="rek">Nomor Rekening</label>
                    <input type="text" class="form-control" id="rek" name="rek" value="<?php echo $data["rekening"] ?>" readonly >
                    </div>
                    <div class="form-group">
                    <label for="tanggal">Tanggal</label>
                    <input type="text" class="form-control" id="tanggal" name="tanggal" value="<?php echo $data["tanggal"] ?>" readonly >
                    </div>
                    
                    <div class="rm-group">
                        <label>Jumlah Setoran</label>
                        <input type="text" name="jumlah" id="jumlah" class="form-control" placeholder="isi jumlah" value="<?php echo $data["jumlah"] ?>">
                    </div> 
                    <div class="form-group">
                        <label>Setoran Awal</label>
                        <input type="text" name="awal" id="awal" class="form-control hitung" placeholder="isi saldo awal" value="<?php echo $data["awal"] ?>">
                    </div>
                    <div class="form-group ">
                        <label>Saldo Akhir</label>
                        <input type="text" name="akhir" id="akhir" class="form-control" placeholder="isi saldo akhir" value="<?php echo $data["akhir"] ?>" readonly>
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
