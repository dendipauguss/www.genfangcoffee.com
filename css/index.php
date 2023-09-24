<?php
session_start();
include "../fungsi/koneksi.php";
if (empty($_SESSION['id_level'])) {
    header("location:../");
}elseif ($_SESSION['id_level']==='1') {
    header("location:../akses/?go=beranda");
}
?>