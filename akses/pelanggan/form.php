<div class="card">
    <div class="card-header">
        Form <strong>Pelanggan</strong>
    </div>
    <div class="card-body card-block">
        <form action="" method="POST" enctype="multipart/form-data" class="">
            <div class="form-group">
                <input type="hidden" id="nf-email" name="id_pembeli" placeholder="Masukan id pembeli Anda" class="au-input au-input--full">
            </div>
            <div class="form-group">
                <label for="nf-email" class=" form-control-label">Nama Pelanggan</label>
                <input type="text" id="nf-email" name="nama_pembeli" placeholder="Masukan Nama Anda" class="au-input au-input--full">
            </div>
            <div class="form-group">
                <label for="nf-email" class=" form-control-label">Alamat</label>
                <input type="textarea" id="nf-email" name="alamat" placeholder="Masukan Alamat" class="form-control">
            </div>
            <div class="form-group">
                <label for="nf-email" class=" form-control-label">Foto</label>
                <input type="file" id="nf-email" name="foto" placeholder="Masukan Foto" class="form-control">
            </div>
            <div class="form-group">
                <label for="nf-email" class=" form-control-label">Jenis Kelamin</label>
                <input type="text" id="nf-email" name="jk" placeholder="Masukan Jenis Kelamin" class="form-control">
            </div>
            <div class="form-group">
                <label for="nf-email" class=" form-control-label">Telepon</label>
                <input type="text" id="nf-email" name="no_hp" placeholder="Masukan Telepon" class="form-control">
            </div>

            <div class="form-group">
                <div class="col-sm-5"></div>
                <div class="col-sm-5">
                    <button type="submit" name="tambah" class="btn btn-success">
                        <i class="fa fa-check"></i>
                        Tambahkan
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
<?php
if (isset($_POST['tambah'])) {
    $nama_tabel = "pembeli";

    $id_pembeli = $_POST['id_pembeli'];
    $nama_pembeli = $_POST['nama_pembeli'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jk'];
    $no_hp = $_POST['no_hp'];

    $nama_foto = $_FILES['foto']['name'];
    $folder = "../img/pelanggan/";
    $upload = $folder . $nama_foto;
    move_uploaded_file($_FILES['foto']['tmp_name'], $upload);

    $query = $ok->input_pembeli($nama_tabel, $id_pembeli, $nama_pembeli, $alamat, $nama_foto, $jk, $no_hp);
    if ($query) {
        echo "<div class='alert alert-success btn-xl'><i class='fa fa-check'></i> 
    Berhasil Disimpan</div>";
    } else {
        echo "<div class='alert alert-danger btn-xl'><i class='fa fa-times-circle'></i> 
    Gagal Disimpan</div>";
    }
}
?> 