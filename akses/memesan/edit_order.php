<?php
if ($_GET['aksi'] == 'hapus') {
	//didieu eksekusi untuk hapus
	$kode = $_GET['kode'];
	$nama_tabel = "pesan";
	$where = "id_order";
	$hapus = $ok->pupus($nama_tabel, $where, $kode);
	if ($hapus) {
		echo "<div class='alert alert-success'><i class='fa fa-check'></i> 
		Berhasil Dihapus</div>";
		echo "<a href='?go=order' class='btn btn-primary'>Kembali</a>";
	} else {
		echo "<div class='alert alert-danger'><i class='fa fa-times-circle'></i> 
		Gagal Dihapus</div>";
	}
	//akhir hapus
} else {
	$kode = $_GET['kode'];
	$nama_tabel = "pesan";
	$where = "id_order";
	$baris = $ok->edit($nama_tabel, $where, $kode);

	?>
<div class="card">
    <div class="card-header">
        Edit <strong>Pesanan</strong>
    </div>
    <div class="card-body card-block">
        <form action="" method="POST" class="">
            <div class="form-group">
                <label for="nf-email" class=" form-control-label">Id Order</label>
                <input type="text" id="nf-email" name="id_order" placeholder="Id Order" class="au-input au-input--full" value="<?php echo $baris[0]; ?>">
            </div>
            <div class="form-group">
                <label for="nf-email" class=" form-control-label">Nomor Meja</label>
                <input type="text" id="nf-email" name="no_meja" placeholder="Nomor Meja" class="au-input au-input--full" value="<?php echo $baris[1]; ?>">
            </div>
            <div class="form-group">
                <label for="nf-email" class=" form-control-label">Tanggal</label>
                <input type="date" id="nf-email" name="tanggal" placeholder="Tanggal" class="form-control" value="<?php echo $baris[2]; ?>">
            </div>
            <div class="form-group">
                <label for="nf-email" class=" form-control-label">Id User</label>
                <input type="text" id="nf-email" name="id_user" placeholder="Id User" class="form-control" value="<?php echo $baris[3]; ?>">
            </div>
            <div class="form-group">
                <label for="nf-email" class=" form-control-label">Keterangan</label>
                <input type="text" id="nf-email" name="keterangan" placeholder="Keterangan" class="form-control" value="<?php echo $baris[4]; ?>">
            </div>
            <div class="form-group">
                <label for="nf-email" class=" form-control-label">Staus Order</label>
                <input type="text" id="nf-email" name="status_order" placeholder="Ada atau tidak" class="form-control" value="<?php echo $baris[5]; ?>">
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
	$nama_tabel = "pesan";
	$id_order = $_POST['id_order'];

	$no_meja = $_POST['no_meja'];
	$tanggal = $_POST['tanggal'];
	$id_user = $_POST['id_user'];
	$keterangan = $_POST['keterangan'];
	$status_order = $_POST['status_order'];

	$query = $ok->robah_order($nama_tabel, $id_order, $no_meja, $tanggal, $id_user, $keterangan, $status_order);
	if ($query) {
		echo "<script>window.location='?go=order'</script>";
	} else {
		echo "<div class='alert alert-danger'>
		<i class='fa fa-times-circle'></i> 
		Gagal Di Merubah</div>";
	}
}
?> 