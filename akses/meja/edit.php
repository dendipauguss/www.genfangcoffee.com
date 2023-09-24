<?php
if ($_GET['aksi'] == 'hapus') {
    //didieu eksekusi untuk hapus

    $kode = $_GET['kode'];
    $nama_tabel = "meja";
    $where = "no_meja";
    $hapus = $ok->pupus($nama_tabel, $where, $kode);
    if ($hapus) {
        echo "<a href='?go=opsi_meja' class='btn btn-primary'>Kembali</a>";
        echo "<div class='alert alert-success'><i class='fa fa-check'></i> 
		Berhasil Dihapus</div>";
    } else {
        echo "<div class='alert alert-danger'><i class='fa fa-times-circle'></i> 
		Gagal Dihapus</div>";
    }
    //akhir hapus
} else {
    $kode = $_GET['kode'];
    $nama_tabel = "meja";
    $where = "no_meja";
    $baris = $ok->edit($nama_tabel, $where, $kode);

    ?>
<div class="card">
    <div class="card-header">
        Form <strong>Meja</strong>
    </div>
    <div class="card-body card-block">
        <form action="" method="POST" enctype="multipart/form-data" class="">
            <div class="form-group">
                <label for="nf-email" class=" form-control-label">Nomor Meja</label>
                <input type="text" id="nf-email" name="no_meja" placeholder="Kosongkan Saja !" class="au-input au-input--full" value="<?php echo $baris[0]; ?>">
            </div>
            <div class="form-group">
                <label for="nf-email" class=" form-control-label">Status Meja</label>
                <input type="text" id="nf-email" name="status_meja" placeholder="Masukan Status Meja" class="au-input au-input--full" value="<?php echo $baris[1]; ?>">
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
    $nama_tabel = "meja";

    $no_meja = $_POST['no_meja'];
    $status_meja = $_POST['status_meja'];

    $query = $ok->robah_meja($nama_tabel, $no_meja, $status_meja);
    if ($query) {
        echo "<div class='alert alert-success btn-xl'><i class='fa fa-check'></i> 
    Berhasil Disimpan</div>";
    } else {
        echo "<div class='alert alert-danger btn-xl'><i class='fa fa-times-circle'></i> 
    Gagal Disimpan</div>";
    }
}
?> 