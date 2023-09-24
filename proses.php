<body>
    <link rel="stylesheet" type="text/css" href="bootstrap-sweetalert/dist/sweetalert.css">
    <script src="vendor/jquery/jquery.js"></script>
    <script src="bootstrap-sweetalert/dist/sweetalert.min.js"></script>
</body>

<?php
session_start();
require "fungsi/koneksi.php";
if (empty($_SESSION['id_level'])) {

	//mengambil dari form
	if (isset($_POST['login'])) {

		$user = $_POST['user'];
		$pass = sha1($_POST['pass']);

		$nama_tabel= "user";
		$where= "username";
		$m = $ok->login($user,$nama_tabel,$where);
		foreach ($m as $row) {
			$rows = $row;
		}

		if ($rows > 0) {
			//mengambil dari database
			$tampil = $ok->login_dua($user);
			$duser = $tampil['username'];
			$dpass = $tampil['password'];
			$id_user = $tampil['id_user'];
			$dnama = $tampil['nama_user'];
			$dlevel = $tampil['id_level'];
			$dfoto = $tampil['foto'];

			if ($user == $duser and $pass == $dpass) {

				$_SESSION['user'] = $user;
				$_SESSION['pass'] = $pass;

				$_SESSION['id_user'] = $id_user;
				$_SESSION['nama_user'] = $dnama;
				$_SESSION['id_level'] = $dlevel;
				$_SESSION['foto'] = $dfoto;


				echo "<script>alert ('Selamat datang " . $_SESSION['nama_user'] . "');</script>";
				echo "<script>window.location='akses/?go=beranda';
			</script>";
			} else {
			header("location:login.php?log=password")or die(mysql_error());
			}
		} else {
			header("location:login.php?log=username")or die(mysql_error());
		}
	}
} elseif ($_SESSION['id_level'] === '1') {
	header("location:akses_admin/?go=beranda");
} elseif ($_SESSION['id_level'] === '2') {
	header("location:akses_operator/?go=beranda");
} elseif ($_SESSION['id_level'] === '3') {
	header("location:akses/?go=beranda");
}


?> 