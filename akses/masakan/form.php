<div class="card">
    <div class="card-header">
        Form <strong>Masakan</strong>
    </div>
    <div class="card-body card-block">
        <form action="" method="POST" enctype="multipart/form-data" class="">
            <div class="form-group">
                <label for="nf-email" class=" form-control-label">Nama Masakan</label>
                <input type="text" id="nf-email" name="nama_masakan" placeholder="Masukan Nama Masakan" class="au-input au-input--full">
            </div>
            <div class="form-group">
                <label for="nf-email" class=" form-control-label">Harga</label>
                <input type="textarea" id="nf-email" name="harga" placeholder="Masukan Harga Masakan" class="form-control">
            </div>
            <div class="form-group">
                <label for="nf-email" class=" form-control-label">Status Masakan</label>
                <input type="text" id="nf-email" name="status_masakan" placeholder="Masukan Status Masakan" class="form-control">
            </div>
            <div class="form-group">
                <label for="nf-email" class=" form-control-label">Stok</label>
                <input type="text" id="nf-email" name="stok" placeholder="Masukan Banyak Stok" class="form-control">
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
    $nama_tabel = "masakan";

    $nama_masakan = $_POST['nama_masakan'];
    $harga = $_POST['harga'];
    $status_masakan = $_POST['status_masakan'];
    $stok = $_POST['stok'];

    $query = $ok->input_masakan($nama_tabel, $nama_masakan, $harga, $status_masakan, $stok);
    if ($query) {
        echo "<script>window.location='?go=masakan'</script>";
    } else {
        echo "<div class='alert alert-danger'>
        <i class='fa fa-times-circle'></i> 
        Gagal Di Merubah</div>";
    }
}
?> 