<div>
    <a href='?go=plus_level' class='au-btn au-btn-icon btn-info'>+ Data</a>
    <form class="form-header" method="POST" role="form" style="float: right;">
        <input class="au-input au-input--xl" type="text" name="key" placeholder="Cari level" />
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
                <th>Id level</th>
                <th>Nama level</th>
                <th width='170'>Aksi</th>
            </tr>
        </thead>
        <tbody class="text-dark">
            <?php
            if (isset($_POST['cari'])) {
                $nama_tabel = "level";
                $where = "nama_level";
                $key = $_POST['key'];
                $query = $Kcari->cari($nama_tabel, $where, $key);
                $data = $query->fetch_row();
                $i = 1;
                if ($data != 0) {
                    foreach ($query as $view) {
                        $banyak = $i++;
                        echo "<tr>";
                        echo "<td>$view[id_level]</td>";
                        echo "<td>$view[nama_level]</td>";
                        echo "<td>
<a href='?go=edit_level&aksi=edit&kode=$view[id_level]' class='btn btn-outline-primary'>Edit</a>
</td>";
                            echo "</tr>";
                    }
                    echo "$banyak data ditemukan";
                } else {
                    //jika tidak ada data yang dicari
                    echo "Tidak ada data yang di temukan";

                    $nama_tabel = "level";
                    $data = $ok->view($nama_tabel);
                    foreach ($data as $view) {
                        echo "<tr>";
                        echo "<td>$view[id_level]</td>";
                        echo "<td>$view[nama_level]</td>";
                        echo "<td>
<a href='?go=edit_level&aksi=edit&kode=$view[id_level]' class='btn btn-outline-primary'>Edit</a>
</td>";
                    }
                }
            } else {
                //tampilan biasa
                $nama_tabel = "level";
                $data = $ok->view($nama_tabel);
                foreach ($data as $view) {
                    echo "<tr>";
                    echo "<td>$view[id_level]</td>";
                    echo "<td>$view[nama_level]</td>";
                        echo "<td>
<a href='?go=edit_level&aksi=edit&kode=$view[id_level]' class='btn btn-outline-primary'>Edit</a>
</td>";
                }
            }
            ?>
        </tbody>
    </table>
</div> 