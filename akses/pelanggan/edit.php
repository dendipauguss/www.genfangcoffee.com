<?php
if ($_GET['aksi'] == 'hapus') {
	//didieu eksekusi untuk hapus

	$kode = $_GET['kode'];
	$nama_tabel = "pembeli";
	$where = "id_pembeli";
	$hapus = $ok->pupus($nama_tabel, $where, $kode);
	if ($hapus) {
		echo "<div class='alert alert-success'><i class='fa fa-check'></i> 
		Berhasil Dihapus</div>";
		echo "<a href='?go=pelanggan' class='btn btn-primary'>Kembali</a>";
	} else {
		echo "<div class='alert alert-danger'><i class='fa fa-times-circle'></i> 
		Gagal Dihapus</div>";
	}
	//akhir hapus
} else {
	$kode = $_GET['kode'];
	$nama_tabel = "pembeli";
	$where = "id_pembeli";
	$baris = $ok->edit($nama_tabel, $where, $kode);

	?>
<div class="card">
    <div class="card-header">
        Edit <strong>Pelanggan</strong>
    </div>
    <div class="card-body card-block">
        <form action="" method="POST" enctype="multipart/form-data" class="">
            <div class="form-group">
                <label for="nf-email" class=" form-control-label">Id Pelanggan</label>
                <input type="text" id="nf-email" name="id_pembeli" placeholder="Id Pembeli" class="au-input au-input--full" value="<?php echo $baris[0]; ?>">
            </div>
            <div class="form-group">
                <label for="nf-email" class=" form-control-label">Nama Pelanggan</label>
                <input type="text" id="nf-email" name="nama_pembeli" placeholder="Nama Pembeli" class="au-input au-input--full" value="<?php echo $baris[1]; ?>">
            </div>
            <div class="form-group">
                <label for="nf-email" class=" form-control-label">Alamat</label>
                <input type="textarea" id="nf-email" name="alamat" placeholder="Alamat" class="form-control" value="<?php echo $baris[2]; ?>">
            </div>
            <div class="form-group">
                <label for="nf-email" class=" form-control-label">Foto</label>
                <input type="file" id="nf-email" name="foto" placeholder="Foto" class="form-control" value="<?php echo $baris[3]; ?>">
            </div>
            <div class="form-group">
                <label for="nf-email" class=" form-control-label">Jenis Kelamin</label>
                <input type="text" id="nf-email" name="jk" placeholder="Jenis Kelamin" class="form-control" value="<?php echo $baris[4]; ?>">
            </div>
            <div class="form-group">
                <label for="nf-email" class=" form-control-label">Telepon</label>
                <input type="text" id="nf-email" name="no_hp" placeholder="Telepon" class="form-control" value="<?php echo $baris[5]; ?>">
            </div>

            <div class="form-group">
                <div class="col-sm-5"></div>
                <div class="col-sm-5">
                    <button type="submit" name="ubah" class="btn btn-success">
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
if (isset($_POST['ubah'])) {
	$nama_tabel = "pembeli";
	$kode = $_POST['id_pembeli'];

	$nama_pembeli = $_POST['nama_pembeli'];
	$alamat = $_POST['alamat'];
	$foto = $_FILES['foto']['name'];
	$jk = $_POST['jk'];
	$no_hp = $_POST['no_hp'];

	$query = $ok->robah_pembeli($nama_tabel, $kode, $nama_pembeli, $alamat, $jk, $no_hp, $foto);
	if ($query) {
		echo "<script>window.location='?go=pelanggan'</script>";
	} else {
		echo "<div class='alert alert-danger'>
		<i class='fa fa-times-circle'></i> 
		Gagal Di Merubah</div>";
	}
}
?> 