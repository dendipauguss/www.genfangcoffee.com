<div>
    <?php 
        if ($_SESSION['id_level']!=='3') {
            include 'masakan/pemberitahuan.php';
        }
    ?>



    <?php
    if ($_SESSION['id_level'] === '1') {
        echo "<a href='?go=plus_masakan' class='au-btn au-btn-icon btn-info'>+ Data</a>";
    } ?>
    <form class="form-header" method="POST" role="form" style="float: right;">
        <button class="au-btn au-btn--icon btn-success" type="submit" name="minuman">
            Minuman
        </button>
        <button class="au-btn au-btn--block btn-danger" type="submit" name="makanan">
            Makanan
        </button>
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
                <th>Id</th>
                <th>Nama Masakan</th>
                <th>Harga</th>
                <th>Jenis</th>
                <th>Stok</th>
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
                $nama_tabel = "masakan";
                $where = "nama_masakan";
                $key = $_POST['key'];
                $query = $Kcari->cari($nama_tabel, $where, $key);
                $data = $query->fetch_row();
                $i = 1;
                if ($data != 0) {
                    foreach ($query as $view) {
                        $banyak = $i++;
                        echo "<tr>";
                        echo "<td>$view[id_masakan]</td>";
                        echo "<td>$view[nama_masakan]</td>";
                        echo "<td>Rp.".number_format($view['harga']).",-</td>";
                        echo "<td>$view[status_masakan]</td>";
                        echo "<td>$view[stok]</td>";
                        if ($_SESSION['id_level'] === '1') {
                        echo "<td>
<a href='?go=edit_masakan&aksi=hapus&kode=$view[id_masakan]' class='btn btn-outline-danger'>
Hapus</a>
<a href='?go=edit_masakan&aksi=edit&kode=$view[id_masakan]' class='btn btn-outline-primary'>Edit</a>
</td>";
                        }
                        echo "</tr>";
                    }
                    echo "$banyak data ditemukan";
                } else {
                    //jika tidak ada data yang dicari
                    echo "Tidak ada data yang di temukan";

                    $nama_tabel = "masakan";
                    $data = $ok->view($nama_tabel);
                    foreach ($data as $view) {
                        echo "<tr>";
                        echo "<td>$view[id_masakan]</td>";
                        echo "<td>$view[nama_masakan]</td>";
                        echo "<td>Rp.".number_format($view['harga']).",-</td>";
                        echo "<td>$view[status_masakan]</td>";
                        echo "<td>$view[stok]</td>";
                        if ($_SESSION['id_level'] === '1') {
                        echo "<td>
<a href='?go=edit_masakan&aksi=hapus&kode=$view[id_masakan]' class='btn btn-outline-danger'>
Hapus</a>
<a href='?go=edit_masakan&aksi=edit&kode=$view[id_masakan]' class='btn btn-outline-primary'>Edit</a>
</td>";
                        }
                    }
                }
            }
            else if (isset($_POST['makanan'])) {
                    $nama_tabel = "masakan";
                    $where = "status_masakan";
                    $key = "Makanan";
                    $data = $Kcari->cari($nama_tabel, $where, $key);
                    foreach ($data as $view) {
                    echo "<tr>";
                    echo "<td>$view[id_masakan]</td>";
                    echo "<td>$view[nama_masakan]</td>";
                        echo "<td>Rp.".number_format($view['harga']).",-</td>";
                    echo "<td>$view[status_masakan]</td>";
                    echo "<td>$view[stok]</td>";
                    if ($_SESSION['id_level'] === '1') {

                        echo "<td>
<a href='?go=edit_masakan&aksi=hapus&kode=$view[id_masakan]' class='btn btn-outline-danger'>
Hapus</a>
<a href='?go=edit_masakan&aksi=edit&kode=$view[id_masakan]' class='btn btn-outline-primary'>Edit</a>
</td>";
                }
            }
        }else if (isset($_POST['minuman'])) {
                    $nama_tabel = "masakan";
                    $where = "status_masakan";
                    $key = "Minuman";
                    $data = $Kcari->cari($nama_tabel, $where, $key);
                    foreach ($data as $view) {
                    echo "<tr>";
                    echo "<td>$view[id_masakan]</td>";
                    echo "<td>$view[nama_masakan]</td>";
                        echo "<td>Rp.".number_format($view['harga']).",-</td>";
                    echo "<td>$view[status_masakan]</td>";
                    echo "<td>$view[stok]</td>";
                    if ($_SESSION['id_level'] === '1') {

                        echo "<td>
<a href='?go=edit_masakan&aksi=hapus&kode=$view[id_masakan]' class='btn btn-outline-danger'>
Hapus</a>
<a href='?go=edit_masakan&aksi=edit&kode=$view[id_masakan]' class='btn btn-outline-primary'>Edit</a>
</td>";
                }
            }
        }
             else {
                //tampilan biasa
                $nama_tabel = "masakan";
                $data = $ok->view($nama_tabel);
                foreach ($data as $view) {
                    echo "<tr>";
                    echo "<td>$view[id_masakan]</td>";
                    echo "<td>$view[nama_masakan]</td>";
                        echo "<td>Rp.".number_format($view['harga']).",-</td>";
                    echo "<td>$view[status_masakan]</td>";
                    echo "<td>$view[stok]</td>";
                    if ($_SESSION['id_level'] === '1') {

                        echo "<td>
<a href='?go=edit_masakan&aksi=hapus&kode=$view[id_masakan]' class='btn btn-outline-danger'>
Hapus</a>
<a href='?go=edit_masakan&aksi=edit&kode=$view[id_masakan]' class='btn btn-outline-primary'>Edit</a>
</td>";
                    }
                }
            }
            ?>
        </tbody>
    </table>
</div> 