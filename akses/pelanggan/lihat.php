<div>
    <?php
    if ($_SESSION['id_level'] === '1') {
        echo "<a href='?go=plus_pelanggan' class='au-btn au-btn-icon btn-info'>+ Data</a>";
    } ?>
    <form class="form-header" method="POST" role="form" style="float: right;">
        <input class="au-input au-input--xl" type="text" name="key" placeholder="Cari Pelanggan" />
        <button class="au-btn--submit" type="submit" name="cari">
            <i class="zmdi zmdi-search"></i>
        </button>
    </form>
</div>
<br>

<div class="table-responsive">
    <table class="table table-bordered table-hover table-primary">
        <thead class="text-white btn-info">
            <tr>
                <th>Id</th>
                <th>Nama Pembeli</th>
                <th>Alamat Lengkap</th>
                <th>Foto</th>
                <th>Jenis Kelamin</th>
                <th>Telepon</th>
                <?php 
                if ($_SESSION['id_level'] === '1') {
                    echo "<th width='170'>Aksi</th>";
                }
                ?>
            </tr>
        </thead>
        <tbody class="text-dark">
            <?php  //mencari data peloanggan
            if (isset($_POST['cari'])) {
                $nama_tabel = "pembeli";
                $where = "nama_pembeli";
                $key = $_POST['key'];
                $query = $Kcari->cari($nama_tabel, $where, $key);
                $data = $query->fetch_row();
                $i = 1;
                if ($data != 0) {
                    foreach ($query as $view) {
                        $banyak = $i++;

                        echo "<tr>";
                        echo "<td>$view[id_pembeli]</td>";
                        echo "<td>$view[nama_pembeli]</td>";
                        echo "<td>$view[alamat]</td>";
                        echo "<td width='100px'><img src='../img/pelanggan/$view[foto]' style='border-radius: 50%;' width='70px'></td>";
                        echo "<td>$view[jk]</td>";
                        echo "<td>$view[no_hp]</td>";
                        if ($_SESSION['id_level'] === '1') {
                        echo "<td>
<a href='?go=edit_pelanggan&aksi=hapus&kode=$view[id_pembeli]' class='btn btn-outline-danger'>
Hapus</a>
<a href='?go=edit_pelanggan&aksi=edit&kode=$view[id_pembeli]' class='btn btn-outline-primary'>Edit</a>
</td>";
                            echo "</tr>";
                        }
                    }
                    echo "$banyak data ditemukan";
                } else {
                    //jika tidak ada data yang dicari
                    echo "Tidak ada data yang di temukan";

                    $nama_tabel = "pembeli";
                    $data = $ok->view($nama_tabel);
                    foreach ($data as $view) {
                        echo "<tr>";
                        echo "<td>$view[id_pembeli]</td>";
                        echo "<td>$view[nama_pembeli]</td>";
                        echo "<td>$view[alamat]</td>";
                        echo "<td width='100px'><img src='../img/pelanggan/$view[foto]' style='border-radius: 50%;' width='70px'></td>";
                        echo "<td>$view[jk]</td>";
                        echo "<td>$view[no_hp]</td>";
                        if ($_SESSION['id_level'] === '1') {
                        echo "<td>
<a href='?go=edit_pelanggan&aksi=hapus&kode=$view[id_pembeli]' class='btn btn-outline-danger'>
Hapus</a>
<a href='?go=edit_pelanggan&aksi=edit&kode=$view[id_pembeli]' class='btn btn-outline-primary'>Edit</a>
</td>";
                            echo "</tr>";
                        }
                    }
                }
            } else {
                //tampilan biasa
                $nama_tabel = "pembeli";
                $data = $ok->view($nama_tabel);
                foreach ($data as $view) {
                    echo "<tr>";
                    echo "<td>$view[id_pembeli]</td>";
                    echo "<td>$view[nama_pembeli]</td>";
                    echo "<td>$view[alamat]</td>";
                        echo "<td width='100px'><img src='../img/pelanggan/$view[foto]' style='border-radius: 50%;' width='70px'></td>";
                    echo "<td>$view[jk]</td>";
                    echo "<td>$view[no_hp]</td>";
                    if ($_SESSION['id_level'] === '1') {
                        echo "<td>
<a href='?go=edit_pelanggan&aksi=hapus&kode=$view[id_pembeli]' class='btn btn-outline-danger' onclick='return confirm(\"Yakin hapus Data ?\")'>
Hapus</a>
<a href='?go=edit_pelanggan&aksi=edit&kode=$view[id_pembeli]' class='btn btn-outline-primary'>Edit</a>
</td>";
                        echo "</tr>";
                    }
                }
            }
            ?>


        </tbody>
    </table>
</div>