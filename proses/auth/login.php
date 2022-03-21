<?php 
  session_start();
  if (isset($_SESSION['pesanerror']))
  {
    ?>
      <script type="text/javascript">
        alert("<?php echo $_SESSION['pesanerror']?>");
      </script>

    <?php
  }
  ?>

<!DOCTYPE html>
<html lang="en">


<?php
    include "../../template/head.php";
?>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
              </div>
              <h4 class="text-center">Selamat Datang di BMT Fajar</h4>
              <form class="pt-3" action="proses_login.php" method="post">
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" id="username" name="username" placeholder="Username">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="Password">
                </div>
                <div class="mt-3">
                  <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" >Login</button>
                </div>
                
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  

  
<?php
    include "../../template/js.php";
?>
</body>

</html>








