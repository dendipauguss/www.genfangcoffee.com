<a href="?go=plus_detail_order">
    <button class="au-btn au-btn-icon btn-info"><i class="zmdi zmdi-plus"></i> data</button>
</a>
<br>
<br>
<div class="table-responsive">
    <table class="table table-bordered table-hover table-primary">
        <thead class="text-white btn-info">
            <tr>
                <th>Id Detail Order</th>
                <th>Id Order</th>
                <th>Id Masakan</th>
                <th>Jumlah</th>
                <th>Keterangan</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody class="text-dark">
            <?php
            $nama_tabel = "detail_order";
            $data = $ok->view($nama_tabel);
            foreach ($data as $view) {
                echo "<tr>";
                echo "<td>$view[id_detail_order]</td>";
                echo "<td>$view[id_order]</td>";
                echo "<td>$view[id_masakan]</td>";
                echo "<td>$view[qty]</td>";
                echo "<td>$view[keterangan]</td>";
                echo "<td>$view[status_detail_order]</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div> 