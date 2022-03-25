<?php
include('../koneksi/koneksi.php');
session_start();
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
                  <h4 class="card-title">Tambah Transaksi Penarikan</h4>
                  <form class="forms-sample" action="../crudpenarikan/ambil_aksi.php" method="POST">
                    
                  <div class="form-group">
                      <label for="admin_id">ID Pegawai</label>
                      <input type="text" name="admin_name" class="form-control" placeholder="isi id pegawai" value="<?php echo $_SESSION['username']?>" required readonly>
                        <input type="hidden" name="admin_id" class="form-control" value="<?php echo $_SESSION['id_admin']?>" required>
                    </div>
                  <div class="form-group">
                      <label for="rekening_id">Nasabah</label>
                      <select class="js-example-basic-single w-100" id="rekening_id" name="rekening_id">
                          <option value="">- Pilih Nasabah -</option>
                          <?php
                            include "../koneksi/koneksi.php";
                            // $sql = "select * from nasabah";
                            $sql = 'SELECT * FROM rekening INNER JOIN nasabah ON rekening.nasabah_id = nasabah.id_nasabah';

                            $result = mysqli_query($koneksi, $sql);
                            $options = "";
  
                            while ($row = mysqli_fetch_array($result)) {
                              # code...
                              $nama = $row['nama'];
                              $id_rekening = $row['id_rekening'];

                              echo '<option value="'.$row['id_rekening'] . '"> ' . $row['nama'] . '</option>';
                            }
                          ?>
                        </select>
                    </div>
                  
                    <div class="form-group">
                      <label>Nomor Rekening</label>
                      <input type="text" name="rek" id="rek" class="form-control" placeholder="isi rekening" required readonly>
                    </div>
                    <div class="form-group">
                      <label>Tanggal</label>
                      <input type="date" name="tanggal" class="form-control" placeholder="isi tanggal" required>
                    </div>
                    <div class="form-group">
                      <label>Jumlah Penarikan</label>
                      <input type="number" name="jumlah" id="jumlah" class="form-control hitung" placeholder="isi jumlah" required>
                    </div>
                    <div class="form-group">
                      <label>Saldo Awal</label>
                      <input type="number" name="awal" id="awal" class="form-control " placeholder="isi saldo awal" required readonly>
                    </div>
                    <div class="form-group ">
                      <label>Saldo Akhir</label>
                      <input type="number" name="akhir" id="akhir" class="form-control" placeholder="isi saldo akhir" required readonly>
                    </div>


                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <!-- <script type="text/javascript">   
                        <?php   
                          echo $b;
                        ?>  
                          function changeValue(id){     
                            document.getElementById('rek').value = rek[id].rek;   
                          };  
                    </script>	 -->
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
  $(document).ready(function(){
      $('#rekening_id').change(function(){
      //Selected value
      var rekening_id = $(this).val();
      $.ajax({
        url: 'get.php',
        method: 'post',
        data: 'rekening_id=' + rekening_id
      }).done(function(books){
        // console.log(books)
        books = JSON.parse(books);
        books.forEach(function(book){
          document.getElementById('rek').value = book.rek
          document.getElementById('awal').value = book.akhir
          // console.log(book.awal)
        })
      })
      });
  });

  $(".hitung").keyup(function(){
    var jumlah  = parseInt($("#jumlah").val())
    var awal    = parseInt($("#awal").val())
    var akhir   = parseInt($("#akhir").val())

    var gettotal  = awal - jumlah;

    $("#akhir").attr("value",gettotal)
  
  });
</script>

</body>

</html>
