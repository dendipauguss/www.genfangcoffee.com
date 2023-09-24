<div>
    <form class="form-header" method="POST" role="form" style="float: right;">
        <input class="au-input au-input--xl" type="text" name="key" placeholder="Cari Masakan" />
        <button class="au-btn--submit" type="submit" name="cari">
            <i class="zmdi zmdi-search"></i>
        </button>
    </form>
</div>
<div class="table-responsive"><br>
    <table class="table table-bordered table-hover table-primary">
        <thead class="text-white btn-info">
            <tr>
                <th>Id Transaksi</th>
                <th>Id User</th>
                <th>Id Order</th>
                <th>Tanggal</th>
                <th>Total Bayar</th>
                <th>Id Pembeli</th>
                <?php 
                if ($_SESSION['id_level'] === '1') {
                    echo "<th width='170'>Aksi</th>";
                }
                ?>
            </tr>
        </thead>
        <tbody class="text-dark">
            <?php
            if (isset($_POST['cari'])) {
                $nama_tabel = "transaksi";
                $where = "id_pembeli";
                $key = $_POST['key'];
                $query = $Kcari->cari($nama_tabel, $where, $key);
                $data = $query->fetch_row();
                $i = 1;
                if ($data != 0) {
                    foreach ($query as $view) {
                        $banyak = $i++;
                echo "<tr>";
                echo "<td>$view[id_transaksi]</td>";
                echo "<td>$view[id_user]</td>";
                echo "<td>$view[id_order]</td>";
                echo "<td>$view[tanggal]</td>";
                echo "<td>Rp.".number_format($view['total_bayar']).",-</td>";
                echo "<td>$view[id_pembeli]</td>";
                        if ($_SESSION['id_level']=== "1") {
                        echo "<td>
<a href='?go=edit_transaksi&aksi=hapus&kode=$view[id_transaksi]' class='btn btn-outline-danger'>
Hapus</a>
</td>";
                        }
                echo "</tr>";
                    }
                    echo "$banyak data ditemukan";
                } else {
                    //jika tidak ada data yang dicari
                    echo "Tidak ada data yang di temukan";

                    $nama_tabel = "transaksi";
                    $data = $ok->view($nama_tabel);
                    foreach ($data as $view) {
                echo "<tr>";
                echo "<td>$view[id_transaksi]</td>";
                echo "<td>$view[id_user]</td>";
                echo "<td>$view[id_order]</td>";
                echo "<td>$view[tanggal]</td>";
                echo "<td>Rp.".number_format($view['total_bayar']).",-</td>";
                echo "<td>$view[id_pembeli]</td>";
                        if ($_SESSION['id_level']=== "1") {
                        echo "<td>
<a href='?go=edit_transaksi&aksi=hapus&kode=$view[id_transaksi]' class='btn btn-outline-danger'>
Hapus</a>
</td>";
                        }
                    }
                }
            } else {
                //tampilan biasa
                $nama_tabel = "transaksi";
                $data = $ok->view($nama_tabel);
                foreach ($data as $view) {
                echo "<tr>";
                echo "<td>$view[id_transaksi]</td>";
                echo "<td>$view[id_user]</td>";
                echo "<td>$view[id_order]</td>";
                echo "<td>$view[tanggal]</td>";
                echo "<td>Rp.".number_format($view['total_bayar']).",-</td>";
                echo "<td>$view[id_pembeli]</td>";
                        if ($_SESSION['id_level']=== "1") {
                        echo "<td>
<a href='?go=edit_transaksi&aksi=hapus&kode=$view[id_transaksi]' class='btn btn-outline-danger'>
Hapus</a>
</td>";
                    }
                }
            }
            ?>
        </tbody>
    </table>
</div>