<div>
    <?php
    if ($_SESSION['id_level'] === '1') {
        echo "<a href='?go=plus_user' class='au-btn au-btn-icon btn-info'>+ Data</a>";
    } ?>
    <form class="form-header" method="POST" role="form" style="float: right;">
        <input class="au-input au-input--xl" type="text" name="key" placeholder="Cari User" />
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
                <th>Id User</th>
                <th>Nama User</th>
                <th>Username</th>
                <th>Foto</th>
                <th width="170">Aksi</th>
            </tr>
        </thead>
        <tbody class="text-dark">
            <?php
            if (isset($_POST['cari'])) {
                $nama_tabel = "user";
                $where = "nama_user";
                $key = $_POST['key'];
                $query = $Kcari->cari($nama_tabel, $where, $key);
                $data = $query->fetch_row();
                $i = 1;
                if ($data != 0) {
                    foreach ($query as $view) {
                        $banyak = $i++;
                        echo "<tr>";
                        echo "<td>$view[id_user]</td>";
                        echo "<td>$view[nama_user]</td>";
                        echo "<td>$view[username]</td>";
                        echo "<td width='100px'><img src='../img/user/$view[foto]' style='border-radius: 50%;' width='70px'></td>";
                        if ($_SESSION['id_level'] === '1') {
                        echo "<td>
<a href='?go=edit_user&aksi=hapus&kode=$view[id_user]' class='btn btn-outline-danger'>
Hapus </a>
<a href='?go=edit_user&aksi=edit&kode=$view[id_user]' class='btn btn-outline-primary'>Edit</a>
</td>";
                            echo "</tr>";
                        }
                    }
                    echo "$banyak data ditemukan";
                } else {
                    //jika tidak ada data yang dicari
                    echo "Tidak ada data yang di temukan";

                    $nama_tabel = "user";
                    $data = $ok->view($nama_tabel);
                    foreach ($data as $view) {
                        echo "<tr>";
                        echo "<td>$view[id_user]</td>";
                        echo "<td>$view[nama_user]</td>";
                        echo "<td>$view[username]</td>";
                        echo "<td width='100px'><img src='../img/user/$view[foto]' style='border-radius: 50%;' width='70px'></td>";
                        if ($_SESSION['id_level'] === '1') {
                        echo "<td>
<a href='?go=edit_user&aksi=hapus&kode=$view[id_user]' class='btn btn-outline-danger'>
Hapus</a>
<a href='?go=edit_user&aksi=edit&kode=$view[id_user]' class='btn btn-outline-primary'>Edit</a>
</td>";
                        }
                    }
                }
            } else {
                //tampilan biasa
                $nama_tabel = "user";
                $data = $ok->view($nama_tabel);
                foreach ($data as $view) {
                    echo "<tr>";
                    echo "<td>$view[id_user]</td>";
                    echo "<td>$view[nama_user]</td>";
                    echo "<td>$view[username]</td>";
                        echo "<td width='100px'><img src='../img/user/$view[foto]' style='border-radius: 50%;' width='70px'></td>";
                    if ($_SESSION['id_level'] === '1') {
                        echo "<td>
<a href='?go=edit_user&aksi=hapus&kode=$view[id_user]' class='btn btn-outline-danger'>
Hapus</a>
<a href='?go=edit_user&aksi=edit&kode=$view[id_user]' class='btn btn-outline-primary'>Edit</a>
</td>";
                    }
                }
            }
            ?>
        </tbody>
    </table>
</div> 