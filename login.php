<?php
session_start();
include "fungsi/koneksi.php";
if (empty($_SESSION['id_level'])) {

  ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title><?php echo NAMI_WEB; ?></title>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template -->
    <link href="css/freelancer.min.css" rel="stylesheet">
    <!--sweet alert-->
    <link rel="stylesheet" type="text/css" href="bootsrtap-sweetalert/dist/sweetalert.css">
</head>

<body class="page-top masthead bg-dark text-white">
    <section id="contact">
        <div class="container">
            <h2 class="text-center text-uppercase text-light mb-0">Log in</h2>
            <br>
            <div class="row">
        <?php 
        if(isset($_GET['log'])){
            if($_GET['log'] == "password"){
                echo "<div style='margin-left: 20px;' class='alert alert-danger' role='alert'><span class='glyphicon glyphicon-warning-sign'></span>Password Yang Anda Masukan Salah !! <br>Silahkan Login Kembali</div>";
            }elseif ($_GET['log'] == "username") {
                echo "<div style='margin-left: 20px;' class='alert alert-danger' role='alert'><span class='glyphicon glyphicon-warning-sign'></span>User Atau Nama Pengguna <br> Yang Anda Masukan Salah !! <br><br><br>Silahkan Login Kembali</div>";
            }
        }
        ?>
                <div class="col-lg-8 mx-auto">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                    <form action="proses.php" method="POST">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Pengguna</label>
                            <input name="user" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan User Anda ">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input name="pass" type="password" class="form-control" id="exampleInputPassword1" placeholder="********">
                        </div>
                        <button name="login" type="submit" class="btn btn-outline-warning col-lg-2">Login</button>
                        <a href="index.php" class="btn btn-outline-danger col-lg-2">Kembali</a>
                    </form>
                    <br>
                    <div><a href="akses/register.php" class="text-white">Buat Akun Pelanggan</a> | <a href="" class="text-white">Lupa Password ?</a></div>
                </div>
            </div>
        </div>
    </section>
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <!-- Contact Form JavaScript -->
    <script src="js/login.js"></script>
    <!-- Custom scripts for this template -->
    <script src="js/freelancer.min.js"></script>
    <!--sweetalert-->
    <script src="bootstrap-sweetalert/dist/sweetalert.js"></script>
    <script src="bootstrap-sweetalert/dist/sweetalert.min.js"></script>
</body>
</html>


<?php

} else {
  header("location:akses/?go=beranda");
}
?> 