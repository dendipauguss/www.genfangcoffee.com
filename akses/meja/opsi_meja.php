<div>
<?php
if (isset($_POST['submit'])) {
    $nama_tabel = "meja";

    $no_meja = $_POST['no_meja'];

    $query = $ok->input_meja($nama_tabel, $no_meja);
    if ($query) {
        echo "<div class='alert alert-success btn-xl'><i class='fa fa-check'></i> 
    Berhasil Disimpan</div>";
    } else {
        echo "<div class='alert alert-danger btn-xl'><i class='fa fa-times-circle'></i> 
    Gagal Disimpan</div>";
    }
}
?> 
    <?php
    if ($_SESSION['id_level'] === '1') {
        ?>
        <form method="POST" action="">
        <input type="hidden" value="1" name="no_meja">
        <button type="submit" name="submit" class='au-btn au-btn-icon btn-info'>+ Data</button>
        </form>
  <?php  } ?>


    <form class="form-header" method="POST" role="form" style="float: right;">
        <input class="au-input au-input--xl" type="text" name="key" placeholder="Cari Meja" />
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
                <th>Nomor Meja</th>
                <th>Status Meja</th>
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
                $nama_tabel = "meja";
                $where = "no_meja";
                $key = $_POST['key'];
                $query = $Kcari->cari($nama_tabel, $where, $key);
                $data = $query->fetch_row();
                $i = 1;
                if ($data != 0) {
                    foreach ($query as $view) {
                        $banyak = $i++;
                        echo "<tr>";
                        echo "<td>$view[no_meja]</td>";
                        echo "<td>$view[status]</td>";
                        if ($_SESSION['id_level'] === '1') {
                        echo "<td>
<a href='?go=edit_meja&aksi=hapus&kode=$view[no_meja]' class='btn btn-outline-danger'>
Hapus</a>
</td>";
                            echo "</tr>";
                        }
                    }
                    echo "$banyak data ditemukan";
                } else {
                    //jika tidak ada data yang dicari
                    echo "Tidak ada data yang di temukan";

                    $no_tabel = "meja";
                    $data = $ok->view($no_tabel);
                    foreach ($data as $view) {
                        echo "<tr>";
                        echo "<td>$view[no_meja]</td>";
                        echo "<td>$view[status]</td>";
                        if ($_SESSION['id_level'] === '1') {
                        echo "<td>
<a href='?go=edit_meja&aksi=hapus&kode=$view[no_meja]' class='btn btn-outline-danger'>
Hapus</a>
</td>";
                        }
                    }
                }
            } else {
                //tampilan biasa
                $no_tabel = "meja";
                $data = $ok->view($no_tabel);
                foreach ($data as $view) {
                    echo "<tr>";
                    echo "<td>$view[no_meja]</td>";
                    echo "<td>$view[status]</td>";
                    if ($_SESSION['id_level'] === '1') {
                        echo "<td>
<a href='?go=edit_meja&aksi=hapus&kode=$view[no_meja]' class='btn btn-outline-danger'>
Hapus</a>
</td>";
                    }
                }
            }
            ?>
        </tbody>
    </table>
</div> 