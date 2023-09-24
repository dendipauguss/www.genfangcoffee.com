<a href="?go=plus_order">
    <button class="au-btn au-btn-icon btn-info"><i class="zmdi zmdi-plus"></i> data</button>
</a>
<br>
<br>
<div class="table-responsive">
    <table class="table table-bordered table-hover table-primary">
        <thead class="text-white btn-info">
            <tr>
                <th>Id Order</th>
                <th>Nomor Meja</th>
                <th>Tanggal</th>
                <th>Id User</th>
                <th>Keterangan</th>
                <th>Status</th>
            </tr>
        <tbody class="text-dark">
            <?php
            $nama_tabel = "pesan";
            $data = $ok->view($nama_tabel);
            foreach ($data as $view) {
                echo "<tr>";
                echo "<td>$view[id_order]</td>";
                echo "<td>$view[no_meja]</td>";
                echo "<td>$view[tanggal]</td>";
                echo "<td>$view[id_user]</td>";
                echo "<td>$view[keterangan]</td>";
                echo "<td>$view[status_order]</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div> 