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

<html lang="en">
  <head>
    <title>BMT FAJAR</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <link rel="stylesheet" href="./../../css/animate.css">
    
    <link rel="stylesheet" href="./../../css/owl.carousel.min.css">
    <link rel="stylesheet" href="./../../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="./../../css/magnific-popup.css">

    <link rel="stylesheet" href="./../../css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="./../../css/jquery.timepicker.css">

    <link rel="stylesheet" href="./../../css/flaticon.css">
    <link rel="stylesheet" href="./../../css/style2.css">
  </head>
  
  <body class="app flex-row align-items-center">
  <div class="container">
    <!-- <h1 align="center">Login</h1> -->
<div class="row justify-content-center">
        <div class="col-md-5">
          <div class="card-group">
            <div class="card p-2">
              <div class="card-body">
                
               
                    <!-- <div class="alert alert-danger"> -->
                    
                    <form class="form-signin well" role="form" action="proses_login.php" method="post"> 
                        <h2 class="form-signin-heading">Login</h2>  <br>     
                        <input type="text" class="form-control" placeholder="Username" name="username" required autofocus>
                        <br>
                        <input type="password" class="form-control" placeholder="Password" name="password" required>
                        <label class="checkbox">
                          <input type="checkbox" value="remember-me"> Remember me
                        </label>
                        <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
                  
                      </form>
    

                    <!-- </div> -->
                
                </div>
              </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap and necessary plugins-->
    <script src="./../../vendors/js/jquery.min.js"></script>
    <script src="./../../vendors/js/popper.min.js"></script>
    <script src="./../../vendors/js/bootstrap.min.js"></script>
    <script src="./../../vendors/js/pace.min.js"></script>
    <script src="./../../vendors/js/perfect-scrollbar.min.js"></script>
    <script src="./../../vendors/js/coreui.min.js"></script>
  </body>
</html>
