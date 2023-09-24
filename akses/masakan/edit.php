<?php
if ($_GET['aksi'] == 'hapus') {
	//didieu eksekusi untuk hapus

	$kode = $_GET['kode'];
	$nama_tabel = "masakan";
	$where = "id_masakan";
	$hapus = $ok->pupus($nama_tabel, $where, $kode);
	if ($hapus) {
		echo "<div class='alert alert-success'><i class='fa fa-check'></i> 
		Berhasil Dihapus</div>";
		echo "<a href='?go=masakan' class='btn btn-primary'>Kembali</a>";
	} else {
		echo "<div class='alert alert-danger'><i class='fa fa-times-circle'></i> 
		Gagal Dihapus</div>";
	}
	//akhir hapus 
} else {
	$kode = $_GET['kode'];
	$nama_tabel = "masakan";
	$where = "id_masakan";
	$baris = $ok->edit($nama_tabel, $where, $kode);

	?>
<div class="card">
    <div class="card-header">
        Edit <strong>Masakan</strong>
    </div>
    <div class="card-body card-block">
        <form action="" method="POST" enctype="multipart/form-data" class="">
            <div class="form-group">
                <label for="nf-email" class=" form-control-label">Id Masakan</label>
                <input type="text" id="nf-email" name="id_masakan" placeholder="Id Masakan" class="au-input au-input--full" value="<?php echo $baris[0]; ?>">
            </div>
            <div class="form-group">
                <label for="nf-email" class=" form-control-label">Nama Masakan</label>
                <input type="text" id="nf-email" name="nama_masakan" placeholder="Nama Masakan" class="au-input au-input--full" value="<?php echo $baris[1]; ?>">
            </div>
            <div class="form-group">
                <label for="nf-email" class=" form-control-label">Harga</label>
                <input type="textarea" id="nf-email" name="harga" placeholder="Harga" class="form-control" value="<?php echo $baris[2]; ?>">
            </div>
            <div class="form-group">
                <label for="nf-email" class=" form-control-label">Status Masakan</label>
                <input type="text" id="nf-email" name="status_masakan" placeholder="Status Masakan" class="form-control" value="<?php echo $baris[3]; ?>">
            </div>
            <div class="form-group">
                <label for="nf-email" class=" form-control-label">Stok</label>
                <input type="text" id="nf-email" name="stok" placeholder="Stok" class="form-control" value="<?php echo $baris[4]; ?>">
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
	$nama_tabel = "masakan";
	$id_masakan = $_POST['id_masakan'];

	$nama_masakan = $_POST['nama_masakan'];
	$harga = $_POST['harga'];
	$status_masakan = $_POST['status_masakan'];
	$stok = $_POST['stok'];

	$query = $ok->robah_masakan($nama_tabel, $id_masakan, $nama_masakan, $harga, $status_masakan, $stok);
	if ($query) {
		echo "<script>window.location='?go=masakan'</script>";
	} else {
		echo "<div class='alert alert-danger'>
		<i class='fa fa-times-circle'></i> 
		Gagal Di Merubah</div>";
	}
}
?> 