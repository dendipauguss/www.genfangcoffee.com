<?php
if ($_GET['aksi'] == 'hapus') {
    //didieu eksekusi untuk hapus

    $kode = $_GET['kode'];
    $nama_tabel = "level";
    $where = "id_level";
    $hapus = $ok->pupus($nama_tabel, $where, $kode);
    if ($hapus) {
        echo "<div class='alert alert-success'><i class='fa fa-check'></i> 
		Berhasil Dihapus</div>";
        echo "<a href='?go=level' class='btn btn-primary'>Kembali</a>";
    } else {
        echo "<div class='alert alert-danger'><i class='fa fa-times-circle'></i> 
		Gagal Dihapus</div>";
    }
    //akhir hapus 
} else {
    $kode = $_GET['kode'];
    $nama_tabel = "level";
    $where = "id_level";
    $baris = $ok->edit($nama_tabel, $where, $kode);

    ?>
<div class="card">
    <div class="card-header">
        Form <strong>level</strong>
    </div>
    <div class="card-body card-block">
        <form action="" method="POST" enctype="multipart/form-data" class="">
            <div class="form-group">
                <label for="nf-email" class=" form-control-label">Id level</label>
                <input type="text" id="nf-email" name="id_level" placeholder="Kosongkan Saja !" class="au-input au-input--full" value="<?php echo $baris[0]; ?>">
            </div>
            <div class="form-group">
                <label for="nf-email" class=" form-control-label">Nama level</label>
                <input type="text" id="nf-email" name="nama_level" placeholder="Masukan Status level" class="au-input au-input--full" value="<?php echo $baris[1]; ?>">
            </div>

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
    $nama_tabel = "level";

    $id_level = $_POST['id_level'];
    $nama_level = $_POST['nama_level'];

    $query = $ok->robah_level($nama_tabel, $id_level, $nama_level);
    if ($query) {
        echo "<div class='alert alert-success btn-xl'><i class='fa fa-check'></i> 
    Berhasil Disimpan</div>";
    } else {
        echo "<div class='alert alert-danger btn-xl'><i class='fa fa-times-circle'></i> 
    Gagal Disimpan</div>";
    }
}
?> 