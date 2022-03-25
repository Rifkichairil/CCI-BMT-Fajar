<?php 
include "../koneksi/koneksicrud.php";
session_start();
$id = $_GET['id'];
$query = mysqli_query($koneksi, "select * from penarikan where id_penarikan ='$id'");
$query2 = mysqli_query($koneksi, "SELECT * FROM penarikan INNER JOIN rekening ON penarikan.rekening_id = rekening.id_rekening");

$data= mysqli_fetch_array($query);
$data2  = mysqli_fetch_array($query2);
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
                  <h4 class="card-title">Edit Transaksi Penarikan</h4>
                  <form class="forms-sample" action="../crudpenarikan/prosesedit_ambil.php" method="POST">
                    

                  <input type="hidden" name="id_penarikan" class="form-control" value="<?php echo $data["id_penarikan"] ?>">
                  <div class="form-group ">
                    <label>Id Pegawai</label>
                    <input type="text" class="form-control" id="admin_id" name="admin_id" value="<?php echo $_SESSION["username"] ?>"  readonly >
                        <input type="hidden" name="admin_id" class="form-control" value="<?php echo $_SESSION['id_admin']?>" required>
                  </div>
                  <div class="form-group ">
                    <label>Nama Nasabah / ID Rekening</label>
                    <input type="hidden" class="form-control" id="rekening_id" name="rekening_id" value="<?php echo $data2["rekening_id"] ?>"  readonly >
                    <input type="text" class="form-control" id="rekening_name" name="rekening_name" value="<?php echo $data2["nama"] ?> / <?php echo $data2["rekening_id"] ?>"  readonly >
                  </div>
                  <div class="form-group">
                    <label>Nomor Rekening</label>
                    <input type="text" name="rekening" class="form-control" value="<?php echo $data["rekening"] ?>" readonly> 
                  </div>

                  <div class="form-group">
                    <label>Tanggal</label>
                    <input type="date" name="tanggal" class="form-control" placeholder="isi tanggal" value="<?php echo $data["tanggal"] ?>" readonly>
                  </div>
                  <div class="form-group">
                    <label>Jumlah Penarikan</label>
                    <input type="text" name="jumlah" id="jumlah" class="form-control hitung" placeholder="isi jumlah" value="<?php echo $data["jumlah"] ?>">
                  </div>
                  <div class="form-group">
                    <label>Saldo Awal</label>
                    <input type="text" name="awal" id="awal" class="form-control " placeholder="isi saldo awal" value="<?php echo $data["awal"] ?>"readonly>
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
    var jumlah= parseInt($("#jumlah").val())
    var awal= parseInt($("#awal").val())
    var akhir= parseInt($("#akhir").val())
 
    var gettotal=awal - jumlah;
 
    $("#akhir").attr("value",gettotal)
  
  });
</script>

</body>

</html>
