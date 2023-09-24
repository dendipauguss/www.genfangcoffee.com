        <!-- MENU SIDEBAR MOBILE-->
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img style="width: 60px;" src="profile.ico" alt="CoolAdmin" />
                        </a>
                        <h2 class="text-info">WKH.com</h2>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="?go=beranda">
                                <i class="fas fa-home"></i>Beranda</a>
                        </li>


                        <?php
                        if ($_SESSION['id_level'] === '1') {

                            ?>
                        <li>
                            <a href="?go=pelanggan">
                                <i class="fas fa-users"></i>Data Pelanggan</a>
                        </li>
                        <li>
                            <a href="?go=masakan">
                                <i class="fa fa-coffee"></i>Menu Restoran</a>
                        </li>
                        <li>
                            <a href="?go=meja"><i class="fas fa-table"></i>Pilih Meja</a>
                        </li>
                        <li>
                            <a href="?go=bayar"><i class="fa fa-money-bill-alt"></i>Bayar</a>
                        </li>
                        <li>
                            <a href="?go=tambah"><i class="fas fa-shopping-basket"></i>Tambah Pesanan</a>
                        </li>
                        <li>
                            <a href="?go=order">
                                <i class="fa fa-file"></i>Data Order</a>
                        </li>
                        <li>
                            <a href="?go=detail_order">
                                <i class="fa fa-file"></i>Data Detail Order</a>
                        </li>
                        <li>
                            <a href="?go=transaksi">
                                <i class="fa fa-file"></i>Data Pembayaran</a>
                        </li>
                        <li>
                            <a href="?go=laporan">
                                <i class="fas fa-balance-scale"></i>Laporan</a>
                        </li>
                        <li>
                            <a href="?go=opsi_meja">
                                <i class="fa fa-table"></i>Opsi Meja</a>
                        </li>
                        <li>
                            <a href="?go=user">
                                <i class="fas fa-user"></i>Data User</a>
                        </li>
                        <li>
                            <a href="?go=level">
                                <i class="fas fa-user"></i>Level</a>
                        </li>

                        <?php

                    } elseif ($_SESSION['id_level'] === '2') {
                        ?>

                        <li>
                            <a href="?go=pelanggan">
                                <i class="fas fa-users"></i>Data Pelanggan</a>
                        </li>
                        <li>
                            <a href="?go=masakan">
                                <i class="fa fa-coffee"></i>Menu Restoran</a>
                        </li>
                        <li>
                            <a href="?go=meja"><i class="fas fa-table"></i>Pilih Meja</a>
                        </li>
                        <li>
                            <a href="?go=bayar"><i class="fa fa-money-bill-alt"></i>Bayar</a>
                        </li>
                        <li>
                            <a href="?go=tambah"><i class="fas fa-shopping-basket"></i>Tambah Pesanan</a>
                        </li>
                        <li>
                            <a href="?go=laporan">
                                <i class="fas fa-balance-scale"></i>Laporan</a>
                        </li>

                        <?php

                    } elseif ($_SESSION['id_level'] === '3') {
                        ?>

                        <li>
                            <a href="?go=transaksi">
                                <i class="fa fa-money-bill-alt"></i>Transaksi</a>
                        </li>
                        <li>
                            <a href="?go=laporan">
                                <i class="fas fa-balance-scale"></i>Laporan</a>
                        </li>

                        <?php
                    } elseif ($_SESSION['id_level'] === '4') {
                       ?>

                        <li>
                            <a href="?go=laporan">
                                <i class="fas fa-balance-scale"></i>Laporan</a>
                        </li>

                        <?php
                    } elseif ($_SESSION['id_level'] === '5') {
                        ?>
                        <li>
                            <a href="?go=meja"><i class="fas fa-table"></i>Memesan</a>
                        </li>
                        <?php
                    }else{
                        echo "Siapa anda?";
                        echo "Anda tidak termasuk dalam user.";
                    }
                    ?>


                        <li>
                            <a href="../logout.php">
                                <i class="zmdi zmdi-power"></i>Keluar</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->
        <!-- MENU SIDEBAR MOBILE--> 