<div class="card">
    <div class="card-header">
        Form <strong>Meja</strong>
    </div>
    <div class="card-body card-block">
        <form action="" method="POST" enctype="multipart/form-data" class="">
            <div class="form-group">
                <div class="col-sm-3">
                    <input type="text" name="banyak" class="form-control" placeholder="Masukan Berapa Banyak Meja">
                </div>
            </div>
            <div class="form-group">
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
    $nama_tabel = "meja";

    $status = $_POST['status'];

    $query = $ok->input_meja($nama_tabel, $status);
    if ($query) {
        echo "<div class='alert alert-success btn-xl'><i class='fa fa-check'></i> 
    Berhasil Disimpan</div>";
    } else {
        echo "<div class='alert alert-danger btn-xl'><i class='fa fa-times-circle'></i> 
    Gagal Disimpan</div>";
    }
}
?> 