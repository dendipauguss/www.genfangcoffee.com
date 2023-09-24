        <!-- MENU SIDEBAR menu bagian kiri-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="profile1.ico" style="width: 100px;" alt="Cool Admin" />
                </a>
                <h2 class="text-info text-uppercase" style="text-align: center;"> <?php echo NAMI_WEB; ?></h2>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar2">
                    <ul class="list-unstyled navbar__list">
                        <li>
                            <!-- BISA DI AKSES SEMUA ------------>
                            <a href="?go=beranda">
                                <i class="fas fa-home"></i>Beranda</a>
                        </li>
                        
                        <?php
                        /* AKSES UNTUK ADMIN */
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
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-shopping-basket"></i>Memesan
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="?go=meja"><i class="fas fa-table"></i>Pilih Meja</a>
                                </li>
                                <li>
                                    <a href="?go=bayar"><i class="fa fa-money-bill-alt"></i>Bayar</a>
                                </li>
                                <li>
                                    <a href="?go=tambah"><i class="fas fa-shopping-basket"></i>Tambah Pesanan</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-file"></i>Data transaksi
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="?go=order"><i class="fas fa-file"></i>Data Pesanan</a>
                                </li>
                                <li>
                                    <a href="?go=detail_order"><i class="fas fa-file"></i>Data Detail Pesanan</a>
                                </li>
                                <li>
                                    <a href="?go=transaksi">
                                        <i class="fa fa-file"></i>Data Pembayaran</a>
                                </li>
                            </ul>
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
                        /* AKSES UNTUK WAITER */
                            } elseif ($_SESSION['id_level'] === '2' || '3') {
                        ?>

                        <li>
                            <a href="?go=pelanggan">
                                <i class="fas fa-users"></i>Data Pelanggan</a>
                        </li>
                        <li>
                            <a href="?go=masakan">
                                <i class="fa fa-coffee"></i>Menu Restoran</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-shopping-basket"></i>Memesan
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="?go=meja"><i class="fas fa-table"></i>Pilih Meja</a>
                                </li>
                                <li>
                                    <a href="?go=bayar"><i class="fa fa-money-bill-alt"></i>Bayar</a>
                                </li>
                                <li>
                                    <a href="?go=tambah"><i class="fas fa-shopping-basket"></i>Tambah Pesanan</a>
                                </li>
                            </ul>
                        </li>
                        <?php
                        /* AKSES UNTUK WAITER */
                            } elseif ($_SESSION['id_level'] === '2') {
                        ?>
                        <li>
                            <a href="?go=laporan">
                                <i class="fas fa-balance-scale"></i>Laporan</a>
                        </li>

                        <?php
                        /* AKSES UNTUK KASIR */
                            } elseif ($_SESSION['id_level'] === '3') {
                        ?>

                        <li>
                            <a href="?go=pelanggan">
                                <i class="fas fa-users"></i>Data Pelanggan</a>
                        </li>
                        <li>
                            <a href="?go=masakan">
                                <i class="fa fa-coffee"></i>Menu Restoran</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-shopping-basket"></i>Transaksi
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="?go=bayar"><i class="fa fa-money-bill-alt"></i>Bayar</a>
                                </li>
                            </ul>
                        </li>


                        <?php
                        /* AKSES UNTUK OWNER */
                            } elseif ($_SESSION['id_level'] === '4') {
                        ?>
                        <li>
                            <a href="?go=laporan">
                            <i class="fas fa-balance-scale"></i>Laporan</a>
                        </li>
                        <?php
                        /* AKSES UNTUK PELANGGAN */
                            }elseif ($_SESSION['id_level'] === '5') {
                        ?>
                        <li>
                            <a href="?go=masakan">
                                <i class="fa fa-coffee"></i>Menu Restoran</a>
                        </li>
                        <li>
                           <a href="?go=meja"><i class="fas fa-shopping-basket"></i>Memesan</a>
                        </li>
                        <?php
                    }else{
                        echo "Siapa anda?";
                        echo "Anda tidak termasuk dalam user.";
                    }
                    ?>

                        <li>
                            <!-- BISA DI AKSES SEMUA ------------>
                            <a href="../logout.php">
                                <i class="zmdi zmdi-power"></i>Keluar</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR--> 