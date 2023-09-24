<?php
session_start();
include "../fungsi/koneksi.php";
if (empty($_SESSION['user'])) {
    header("location:../login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'header.php'; ?>  
</head>
<body class="animsition"><!-- class="animsition" -->
    <div class="page-wrapper">
        <!--MENU-->
        <!-- MENU SIDEBAR MOBILE-->
        <!-- HEADER MOBILE-->
        <?php include 'sidebar/menu_sidebar_mobile.php'; ?>
        <!-- END HEADER MOBILE-->
        <!-- MENU SIDEBAR MOBILE-->

        <!-- MENU SIDEBAR DESTOP (menu bagian kiri)-->
        <?php
        include 'sidebar/menu_sidebar.php';
        ?>
        <!-- END MENU SIDEBAR DESTOP-->
        <!--AKHIR MENU-->
        <!------------------------------------------------------------->
        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP + MOBILE-->
            <header class="header-desktop">
                <?php include 'sidebar/header_destop+mobile.php'; ?>
            </header>
            <!-- AKHIR HEADER DESKTOP + MOBILE-->
            <!----------------------------------------------------->
            <!-- BREADCRUMB-->
            <section class="au-breadcrumb m-t-75">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="au-breadcrumb-content">
                                    <div class="au-breadcrumb-left">
                                        <ul class="list-unstyled list-inline au-breadcrumb__list">
                                            <li class="list-inline-item active">
                                                <a href="#">
                                                    <span class="au-breadcrumb-span">
                                                        <?php 
                                                        echo "Pukul : ";
                                                        echo date("H:i");
                                                        echo " WIB";
                                                        ?>
                                                    </span></a>
                                            </li>
                                            <li class="list-inline-item seprate">
                                                <span></span>
                                            </li>
                                            <li class="list-inline-item">
                                                <?php
                                                echo date("d-M-Y");
                                                ?>
                                            </li>
                                        </ul>
                                    </div>
                                    <div style="margin-top: 20px;"><marquee>Selamat datang <?php echo $_SESSION['nama_user']; ?> di Kafe GenFanG Coffee | Makan - ngobrol Santuy - minum bersama | Selamat Menikmati dan <?php include 'ucapan_selamat.php'; ?></marquee></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END BREADCRUMB-->
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div>
                                    <?php include 'konten.php'; ?>
                                </div>
                            </div>
                        </div>
                        <?php include 'copyright.php'; ?>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>




    <?php //model atau popup
    include 'model/model_hapus.php';
    include 'model/model_edit.php';
    include 'popup.php'; //form memesan menu makanan 
    ?>

    <!-- Javascript-->
    <?php include 'javascript.php'; ?>
</body>

</html> 