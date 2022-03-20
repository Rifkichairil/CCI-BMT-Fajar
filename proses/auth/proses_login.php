<?php
    session_start();
    include '../koneksi/koneksi.php';
    $username = $_POST['username'];
    $password = $_POST['password'];

    // menyeleksi data user dengan username dan password yang sesuai
    $login = mysqli_query($koneksi,"select * from admin where username='$username' and password='$password'");
    // menghitung jumlah data yang ditemukan
    $cek = mysqli_num_rows($login);

    // cek apakah username dan password di temukan pada database
    if($cek > 0){
    $data = mysqli_fetch_assoc($login);

    // cek jika user login sebagai admin
    if($data['level']=="admin"){
    
        // buat session login dan username
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "admin";
        //set session
        $_SESSION["login"] = true;
        // alihkan ke halaman dashboard admin
        echo "<script>alert('Pemberitahuan : Login Berhasil, Selamat Datang $username ');
        window.location = './../admin/halaman_admin.php'</script>";
    
    // cek jika user login sebagai kepala cabang
    }else if($data['level']=="kc"){
        // buat session login dan username
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "kc";
        //set session
        $_SESSION["login"] = true;
        // alihkan ke halaman dashboard
        echo "<script>alert('Pemberitahuan : Login Berhasil, Selamat Datang $username ');
        window.location = './../admin/halaman_admin.php'</script>";

    }else{
    
    // alihkan ke halaman login kembali
    header("location:login.php?pesan=gagal");
    }
    }else{
    header("location:login.php?pesan=gagal, silahkan login kembali");
    }
    
?>  
