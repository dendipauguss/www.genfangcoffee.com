<div class="card">
    <div class="card-header">
        Form <strong>Level</strong>
    </div>
    <div class="card-body card-block">
        <form action="" method="POST" enctype="multipart/form-data" class="">
            <div class="form-group">
                <label for="nf-email" class=" form-control-label">Status Level</label>
                <input type="text" id="nf-email" name="nama_level" placeholder="Masukan Status Level" class="au-input au-input--full">
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
    $nama_tabel = "level";

    $id_level = $_POST['id_level'];
    $nama_level = $_POST['nama_level'];

    $query = $ok->input_level($nama_tabel, $id_level, $nama_level);
    if ($query) {
        echo "<div class='alert alert-success btn-xl'><i class='fa fa-check'></i> 
    Berhasil Disimpan</div>";
    } else {
        echo "<div class='alert alert-danger btn-xl'><i class='fa fa-times-circle'></i> 
    Gagal Disimpan</div>";
    }
}
?> 