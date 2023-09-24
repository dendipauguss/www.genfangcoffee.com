<div class="card">
    <div class="card-header">
        Form <strong>Detail Pesanan</strong>
    </div>
    <div class="card-body card-block">
        <form action="" method="POST" class="">
            <div class="form-group">
                <label for="nf-email" class=" form-control-label">Id Order</label>
                <input type="text" id="nf-email" name="id_order" placeholder="Id Order" class="au-input au-input--full">
            </div>
            <div class="form-group">
                <label for="nf-email" class=" form-control-label">Id Masakan</label>
                <input type="text" id="nf-email" name="id_masakan" placeholder="Id Masakan" class="form-control">
            </div>
            <div class="form-group">
                <label for="nf-email" class=" form-control-label">Banyak porsi</label>
                <input type="text" id="nf-email" name="qty" placeholder="Masukan Banyak porsi makanan" class="form-control">
            </div>
            <div class="form-group">
                <label for="nf-email" class=" form-control-label">Keterangan</label>
                <input type="text" id="nf-email" name="keterangan" placeholder="Keterangan" class="form-control">
            </div>
            <div class="form-group">
                <label for="nf-email" class=" form-control-label">Staus Detail Order</label>
                <input type="text" id="nf-email" name="status_detail_order" placeholder="Status ada atau tidak" class="form-control">
            </div>

            <div class="form-group">
                <div class="col-sm-5"></div>
                <div class="col-sm-5">
                    <button type="submit" name="submit" class="btn btn-success">
                        <i class="fa fa-check"></i>
                        Tambahkan
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>


<?php
if (isset($_POST['submit'])) {
    $nama_tabel = "detail_order";

    $id_order = $_POST['id_order'];
    $id_masakan = $_POST['id_masakan'];
    $qty = $_POST['qty'];
    $keterangan = $_POST['keterangan'];
    $status_detail_order = $_POST['status_detail_order'];

    $query = $ok->input_detail_order($nama_tabel, $id_order, $id_masakan, $qty, $keterangan, $status_detail_order);
    if ($query) {
        echo "<script>window.location='?go=detail_order'</script>";
    } else {
        echo "<div class='alert alert-danger'>
        <i class='fa fa-times-circle'></i> 
        Gagal Di Tambahkan</div>";
    }
}
?> 