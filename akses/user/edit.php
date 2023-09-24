<?php
if ($_GET['aksi'] == 'hapus') {
    //didieu eksekusi untuk hapus

    $kode = $_GET['kode'];
    $nama_tabel = "user";
    $where = "id_user";
    $hapus = $ok->pupus($nama_tabel, $where, $kode);
    if ($hapus) {
        echo "<div class='alert alert-success'><i class='fa fa-check'></i> 
		Berhasil Dihapus</div>";
        echo "<a href='?go=user' class='btn btn-primary'>Kembali</a>";
    } else {
        echo "<div class='alert alert-danger'><i class='fa fa-times-circle'></i> 
		Gagal Dihapus</div>";
    }
    //akhir hapus
} else {
    $kode = $_GET['kode'];
    $nama_tabel = "user";
    $where = "id_user";
    $baris = $ok->edit($nama_tabel, $where, $kode);

    ?>
<div class="card">
    <div class="card-header">
        Form <strong>user</strong>
    </div>
    <div class="card-body card-block">
        <form action="#" method="POST" enctype="multipart/form-data" class="">
            <div class="form-group">
                <input type="hidden" name="id_user" placeholder="id_user" class="au-input au-input--full" value="<?php echo $baris[0]; ?>">
            </div>
            <div class="form-group">
                <label class=" form-control-label">Nama user</label>
                <input type="text" name="nama_user" placeholder="Nama User" class="au-input au-input--full" value="<?php echo $baris[3]; ?>">
            </div>
            <div class="form-group">
                <label class=" form-control-label">Foto</label>
                <input type="file" name="foto" placeholder="Masukan Status user" class="au-input au-input--full" value="<?php echo $baris[4]; ?>">
            </div>
            <div class="form-group">

            <div class="form-group">
                <div class="col-sm-5"></div>
                <div class="col-sm-5">
                    <button type="submit" name="submit" class="btn btn-success">
                        <i class="fa fa-check"></i>
                        Ubah
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

<?php

}
?>

<?php
if (isset($_POST['submit'])) {
    $nama_tabel = "user";

    $id_user = $_POST['id_user'];
    $nama_user = $_POST['nama_user'];

    $nama_foto = $_FILES['foto']['name'];
    $folder = "../img/user/";
    $upload = $folder . $nama_foto;
    move_uploaded_file($_FILES['foto']['tmp_name'], $upload);

    $query = $ok->robah_user($nama_tabel, $id_user, $nama_user, $nama_foto);
    if ($query) {
        echo "<div class='alert alert-success btn-xl'><i class='fa fa-check'></i> 
    Berhasil Disimpan</div>";
    } else {
        echo "<div class='alert alert-danger btn-xl'><i class='fa fa-times-circle'></i> 
    Gagal Disimpan</div>";
    }
}
?> 