<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Restoran | WaKaHa.com</title>
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

<body class="page-top masthead bg-primary text-white">
        <div class="container">
            <h2 class="text-center text-uppercase text-secondary mb-0">Membuat Akun</h2>
            <hr class="star-light">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <form method="POST" enctype="multipart/form-data" class="px-5 py-1">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputnama4">Username</label>
                                <input type="text" name="username" class="form-control" id="inputnama" placeholder="Masukan nama user atau pengguna">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputalamat4">Password</label>
                                <input type="password" name="password" class="form-control" id="inputalamat4" placeholder="Masukan password min 8 karakter">
                            </div>
                        </div>
                        <div class="form-group">
                                <label for="inputtelp4">Nama Lengkap</label>
                                <input type="text" name="nama_user" class="form-control" id="inputtelp" placeholder="Masukan nama lengkap anda">
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Foto</label>
                            <input type="file" name="foto" class="form-control" id="inputfoto" placeholder="Masukan Foto anda">
                            <input type="hidden" name="id_level" class="form-control" value="3">
                        </div>
                        <button type="submit" class="pelanggan" class="btn btn-outline-warning col-lg-2">Buat</button>
                        <button type="reset" class="btn btn-outline-danger col-lg-2">Batal</button>
                    </form>
                </div>
            </div>
        </div>
</body>
</html> 
            <?php
            if (isset($_POST['pelanggan'])) {
                $nama_tabel = "user";

                $username = $_POST['username'];
                $password = $_POST['password'];
                $nama_user = $_POST['nama_user'];
                $id_level = "5";

                $nama_foto = $_FILES['foto']['name'];
                $folder = "img/pelanggan/";
                $upload = $folder . $nama_foto;
                move_uploaded_file($_FILES['foto']['tmp_name'], $upload);

                $query = $ok->input_user($nama_tabel, $id_pembeli, $nama_pembeli, $alamat, $nama_foto, $id_level);
                if ($query) {
                    echo "<div class='alert alert-success btn-xl'><i class='fa fa-check'></i> 
                    Berhasil Disimpan</div>";
                } else {
                    echo "<div class='alert alert-danger btn-xl'><i class='fa fa-times-circle'></i> 
                    Gagal Disimpan</div>";
                }
            }
            ?>