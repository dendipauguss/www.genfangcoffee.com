<!DOCTYPE html>
<html lang="en">

<head>
    <?php  //koneksi database
    include 'fungsi/koneksi.php';
    ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php echo NAMI_WEB; ?></title>
    <link rel="icon" href="akses/profile1.ico">
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

    <style type="text/css">
        .screen {
            text-align: center;
            background: #00DD88;
            background: -moz-linear-gradient(center top, #00DD88 0%, #00CC00 100%) repeat scroll 0 0 transparent;
            border-radius: 10px;
            margin: 5px 0 10px 15px;
            padding: 15px;
            position: absolute;
            right: -980px;
            display: none;
            z-index: 100;
            color: #fff;
        }
    </style>

</head>

<body id="page-top">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">genfang coffee</a>
            <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#menurestoran">Menu kafe</a>
                    <li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#memesan">Memesan</a>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#buatakun">Jadi Pelanggan</a>
                    </li>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="login.php">Login <i class="fas fa-sign-in-alt"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header -->
    <header class="masthead text-white bg-light">
        <div class="container text-center">
            <img class="img-fluid mb-5 d-block mx-auto" src="akses/profile1.ico" alt="">
            <h1 class="mb-0 text-secondary">GenFanGCoffee</h1>
            <hr class="star-dark">
            <h2 class="font-weight-light mb-0 text-secondary">Welcome di Kafe Simpel pinggir jalan satapak</h2>
        </div>
    </header>

    <!-- menu makanan Section -->
    <section class="portfolio bg-primary" id="menurestoran">
        <div class="container">
            <h2 class="text-center text-uppercase text-light mb-0">Menu kafe</h2>
            <hr class="star-light mb-5">
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-1">
                        <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                            <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                                <i class="fas fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img class="img-fluid" style="width: 500px; height: 250px;" src="img/kopi/cappuccino.jpg" alt="">
                    </a>
                </div>
                <div class="col-md-6 col-lg-4">
                    <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-2">
                        <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                            <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                                <i class="fas fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img class="img-fluid" style="width: 500px; height: 250px;" src="img/kopi/macchiato.jpg" alt="">
                    </a>
                </div>
                <div class="col-md-6 col-lg-4">
                    <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-3">
                        <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                            <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                                <i class="fas fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img class="img-fluid" style="width: 500px; height: 250px;" src="img/kopi/espresso.jpg" alt="">
                    </a>
                </div>

                <div class="col-md-6 col-lg-4">
                    <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-5">
                        <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                            <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                                <i class="fas fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img class="img-fluid" style="width: 500px; height: 250px;" src="img/menu/seblak.png" alt="">
                    </a>
                </div>
                <div class="col-md-6 col-lg-4">
                    <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-5">
                        <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                            <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                                <i class="fas fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img class="img-fluid" style="width: 500px; height: 250px;" src="img/menu_makanan/minuman3.jpg" alt="">
                    </a>
                </div>
                <div class="col-md-6 col-lg-4">
                    <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-5">
                        <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                            <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                                <i class="fas fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img class="img-fluid" style="width: 500px; height: 250px;" src="img/menu/jus.jpg" alt="">
                    </a>
                </div>
                <div class="col-md-6 col-lg-4">
                    <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-4">
                        <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                            <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                                <i class="fas fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img class="img-fluid" style="width: 500px; height: 250px;" src="img/kopi/americano.jpg" alt="">
                    </a>
                </div>
                <div class="col-md-6 col-lg-4">
                    <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-5">
                        <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                            <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                                <i class="fas fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img class="img-fluid" style="width: 500px; height: 250px;" src="img/kopi/mocaccino.jpg" alt="">
                    </a>
                </div>
                <div class="col-md-6 col-lg-4">
                    <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-6">
                        <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                            <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                                <i class="fas fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img class="img-fluid" style="width: 500px; height: 250px;" src="img/kopi/ristretto.jpg" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- memesan Section -->
    <section id="memesan">
        <div class="container">
            <h2 class="text-center text-uppercase text-secondary mb-0">Memesan</h2>
            <hr class="star-dark mb-5">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                    <form action="dododdo.php" name="sentMessage" id="contactForm" novalidate="novalidate">
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                <label>Nama pemesan</label>
                                <input class="form-control" id="name" type="text" placeholder="Nama" required="required" data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                <label>Email</label>
                                <input class="form-control" id="email" type="email" placeholder="Email" required="required" data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                <label>Kami akan mengirimkan pesanan ke alamat ini</label>
                                <input class="form-control" id="phone" type="tel" placeholder="Alamat rumah" required="required" data-validation-required-message="Please enter your phone number.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                <label>Berikan kami keterangan</label>
                                <textarea class="form-control" id="message" rows="5" placeholder="Komentar tambahan" required="required" data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton">Mulai Pesan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Buat akun pelanggan warta -->
    <section id="buatakun">
        <div class="container">
            <h2 class="text-center text-uppercase text-secondary mb-1">Buat Akun Pelanggan</h2>
            <h5 class="text-center text-secondary mb-0">Jadi Pelanggan Setia Kami</h5>
            <hr class="star-dark mb-5">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                    <form action="" role="form" method="POST" enctype="multipart/form-data" name="sentMessage" id="contactForm" novalidate="novalidate">
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-2">
                                <label>Id Pembeli</label>
                                <input style="border-radius: 5px; padding-left: 15px;" name="id_pembeli" class="text-primary form-control btn-primary" id="" type="text" placeholder="Kosongkan Saja" required="required" data-validation-required-message="Id tidak di isi kan?">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-2">
                                <label for="nama">Nama Pelanggan</label>
                                <input style="border-radius: 5px; padding-left: 15px;" name="nama_pembeli" class="text-primary form-control btn-primary" id="" type="text" placeholder="Masukan Nama" required="required" data-validation-required-message="Tolong masukan nama anda.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>

                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-2">
                                <label for="alamat">Tempat Tinggal Anda</label>
                                <label>Pesanan anda nanti akan diantarkan ke alamat ini.</label>
                                <input style="border-radius: 5px; padding-left: 15px;" name="alamat" class="text-primary form-control btn-primary" id="" type="text" placeholder="Alamat Lengkap" required="required" data-validation-required-message="Tolong masukan alamat lengkap anda atau KTP.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="control-group"><label class="text-warning">Masukan Foto Anda, Klik tombol choose file.</label>
                            <div class="form-group floating-label-form-group controls mb-2">
                                <label>Foto Anda</label>
                                <input style="border-radius: 5px; padding-left: 15px;" name="foto" class="text-primary form-control btn-primary" id="" type="file" placeholder="" required="required" data-validation-required-message="Tolong masukan foto anda.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="control-group ">
                            <div class="form-group floating-label-form-group controls mb-2">
                                <label>Jenis Kelamin</label>
                                <input style="border-radius: 5px; padding-left: 15px;" name="jk" class="text-primary form-control btn-primary" id="" type="text" placeholder="Jenis Kelamin" required="required" data-validation-required-message="Tolong isi jenis kelamin anda.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-2">
                                <label>Masukan Nomor Telepon</label>
                                <input style="border-radius: 5px; padding-left: 15px;" name="no_hp" class="text-primary form-control btn-primary" id="" type="text" placeholder="Telepon : " required="required" data-validation-required-message="Tolong masukan nomor hp anda.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="form-group">
                            <button type="submit" name="pelanggan" class="btn btn-primary btn-xl" id="sendMessageButton">Kirim</button>
                            <button type="reset" class="btn btn-danger btn-xl">Batal</button>
                        </div>
                    </form>
                </div>
            </div>
            <?php
            if (isset($_POST['pelanggan'])) {
                $nama_tabel = "pembeli";

                $id_pembeli = $_POST['id_pembeli'];
                $nama_pembeli = $_POST['nama_pembeli'];
                $alamat = $_POST['alamat'];
                $jk = $_POST['jk'];
                $no_hp = $_POST['no_hp'];

                $nama_foto = $_FILES['foto']['name'];
                $folder = "img/pelanggan/";
                $upload = $folder . $nama_foto;
                move_uploaded_file($_FILES['foto']['tmp_name'], $upload);

                $query = $ok->input_pembeli($nama_tabel, $id_pembeli, $nama_pembeli, $alamat, $nama_foto, $jk, $no_hp);
                if ($query) {
                    echo "<div class='alert alert-success btn-xl'><i class='fa fa-check'></i> 
                    Berhasil Disimpan</div>";
                } else {
                    echo "<div class='alert alert-danger btn-xl'><i class='fa fa-times-circle'></i> 
                    Gagal Disimpan</div>";
                }
            }
            ?>
        </div>
    </section>
    <!-- artikel Section -->
    <section class="bg-primary text-white mb-0" id="artikel">
        <div class="container">
            <h2 class="text-center text-uppercase text-white">Artikel</h2>
            <hr class="star-light mb-5">
            <div class="row">
                <div class="col-lg-4 ml-auto">
                    <p class="lead">Cuma disini kamu dapet makan yang ENAKNYA KEBANGETAN!. Cuma disini kamu bisa temuin makanan dan minuman sekenyangnya.</p>
                </div>
                <div class="col-lg-4 mr-auto">
                    <p class="lead">
                        Disini kamu bisa refil PEMADAM KEPEDASAN berulang kali. Dan kamu juga bisa nambah semaunya. Ada lagi nih, kamu bisa nentuin cabai sesuai selera kamu guys.</p>
                </div>
            </div>
            <div class="text-center mt-4">
                <a class="btn btn-xl btn-outline-light" href="#">
                    <i class="fas fa-user mr-2"></i>
                    Subscibe!
                </a>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <footer class="footer text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">Alamat Kafe</h4>
                    <p class="lead mb-0">Jalan Satapak-Cijati-Majalengka-Majalengka-Jawa Barat
                        <br>Kode Pos 45465
                        <br>no_hp.081234567899</p>
                </div>
                <div class="col-md-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">Tentang Kami</h4>
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item">
                            <a class="btn btn-outline-light btn-social text-center rounded-circle" href="https://m.facebook.com/GenFanG Coffee">
                                <i class="fab fa-fw fa-facebook-f"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="btn btn-outline-light btn-social text-center rounded-circle" href="genfangcoffee@gmail.com">
                                <i class="fab fa-fw fa-google-plus-g"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#twiter.com">
                                <i class="fab fa-fw fa-twitter"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                                <i class="fab fa-fw fa-linkedin-in"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                                <i class="fab fa-fw fa-dribbble"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h4 class="text-uppercase mb-4">Profile Kafe</h4>
                    <p class="lead mb-0">Kata warta adalah singkatan dari warung kita, kata tersebut di bentuk karena sebuah ketertarikan dari [...]
                        <a href="http://startbootstrap.com">Lebih banyak</a>.</p>
                </div>
            </div>
        </div>
    </footer>

    <div class="copyright py-4 text-center text-white">
        <div class="container">
            <small>Genfangcoffe.com | GenFanG Coffee | Dendi Paugus Sukmaya<br>
            Copyright &copy; <?php $tgl = date('Y'); echo $tgl; ?></small>
        </div>
    </div>
    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-to-top d-lg-none position-fixed ">
        <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-1">
        <div class="portfolio-modal-dialog bg-white">
            <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
                <i class="fa fa-3x fa-times"></i>
            </a>
            <div class="container text-center">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <h2 class="text-secondary text-uppercase mb-0">Project Name</h2>
                        <hr class="star-dark mb-5">
                        <img class="img-fluid mb-5" src="img/portfolio/cabin.png" alt="">
                        <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                        <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                            <i class="fa fa-close"></i>
                            Close Project</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 2 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-2">
        <div class="portfolio-modal-dialog bg-white">
            <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
                <i class="fa fa-3x fa-times"></i>
            </a>
            <div class="container text-center">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <h2 class="text-secondary text-uppercase mb-0">Project Name</h2>
                        <hr class="star-dark mb-5">
                        <img class="img-fluid mb-5" src="img/portfolio/cake.png" alt="">
                        <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                        <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                            <i class="fa fa-close"></i>
                            Close Project
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio Modal 3 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-3">
        <div class="portfolio-modal-dialog bg-white">
            <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
                <i class="fa fa-3x fa-times"></i>
            </a>
            <div class="container text-center">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <h2 class="text-secondary text-uppercase mb-0">Project Name</h2>
                        <hr class="star-dark mb-5">
                        <img class="img-fluid mb-5" src="img/portfolio/circus.png" alt="">
                        <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                        <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                            <i class="fa fa-close"></i>
                            Close Project</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio Modal 4 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-4">
        <div class="portfolio-modal-dialog bg-white">
            <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
                <i class="fa fa-3x fa-times"></i>
            </a>
            <div class="container text-center">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <h2 class="text-secondary text-uppercase mb-0">Project Name</h2>
                        <hr class="star-dark mb-5">
                        <img class="img-fluid mb-5" src="img/portfolio/game.png" alt="">
                        <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                        <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                            <i class="fa fa-close"></i>
                            Close Project</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio Modal 5 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-5">
        <div class="portfolio-modal-dialog bg-white">
            <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
                <i class="fa fa-3x fa-times"></i>
            </a>
            <div class="container text-center">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <h2 class="text-secondary text-uppercase mb-0">Project Name</h2>
                        <hr class="star-dark mb-5">
                        <img class="img-fluid mb-5" src="img/portfolio/safe.png" alt="">
                        <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                        <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                            <i class="fa fa-close"></i>
                            Close Project</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 6 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-6">
        <div class="portfolio-modal-dialog bg-white">
            <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
                <i class="fa fa-3x fa-times"></i>
            </a>
            <div class="container text-center">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <h2 class="text-secondary text-uppercase mb-0">Project Name</h2>
                        <hr class="star-dark mb-5">
                        <img class="img-fluid mb-5" src="img/portfolio/submarine.png" alt="">
                        <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                        <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                            <i class="fa fa-close"></i>
                            Close Project</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/freelancer.min.js"></script>
    <!--sweetalert-->
    <script src="bootstrap-sweetalert/dist/sweetalert.js"></script>
    <!-- mengecek input kosong<script src="/contact_me.js"></script>-->







    <input type="button" class="screen" value="Atas" id="tombolScrollTop" onclick="scrolltotop()">



    <script type="text/javascript">
        $(document).ready(function() {
            $(window).scroll(function() {
                if ($(window).scrollTop() > 100) {
                    $('#tombolScrollTop').fadeIn();
                } else {
                    $('#tombolScrollTop').fadeOut();
                }
            });
        });

        function scrolltotop() {
            $('html, body').animate({
                scrollTop: 0
            }, 500);
        }

        //<!------------------------------------------------------------------------------------------------->

        $('.screen').animate({
            opacity: 1,
            right: "50px",
            bottom: "10px",
            height: "toggle"
        }, 1000, function() {}).css('position', 'fixed');
    </script>
</body>

</html> 