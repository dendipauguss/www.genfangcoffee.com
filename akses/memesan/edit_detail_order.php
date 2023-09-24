<?php
if ($_GET['aksi'] == 'hapus') {
	//didieu eksekusi untuk hapus

	$kode = $_GET['kode'];
	$nama_tabel = "detail_order";
	$where = "id_detail_order";
	$hapus = $ok->pupus($nama_tabel, $where, $kode);
	if ($hapus) {
		echo "<div class='alert alert-success'><i class='fa fa-check'></i> 
		Berhasil Dihapus</div>";
		echo "<a href='?go=detail_order' class='btn btn-primary'>Kembali</a>";
	} else {
		echo "<div class='alert alert-danger'><i class='fa fa-times-circle'></i> 
		Gagal Dihapus</div>";
	}
	//akhir hapus
} else {
	$kode = $_GET['kode'];
	$nama_tabel = "detail_order";
	$where = "id_detail_order";
	$baris = $ok->edit($nama_tabel, $where, $kode);

	?>
<div class="card">
    <div class="card-header">
        Edit <strong>Detail Pesanan</strong>
    </div>
    <div class="card-body card-block">
        <form action="" method="POST" class="">
            <div class="form-group">
                <label for="nf-email" class=" form-control-label">Id Detail Order</label>
                <input type="text" id="nf-email" name="id__detail_order" placeholder="Kosongkan Saja" class="au-input au-input--full" value="<?php echo $baris[0]; ?>">
            </div>
            <div class="form-group">
                <label for="nf-email" class=" form-control-label">Id Order</label>
                <input type="text" id="nf-email" name="id_order" placeholder="Id Order" class="au-input au-input--full" value="<?php echo $baris[1]; ?>">
            </div>
            <div class="form-group">
                <label for="nf-email" class=" form-control-label">Id Masakan</label>
                <input type="text" id="nf-email" name="id_masakan" placeholder="Id Masakan" class="form-control" value="<?php echo $baris[2]; ?>">
            </div>
            <div class="form-group">
                <label for="nf-email" class=" form-control-label">Banyak Jumlah</label>
                <input type="text" id="nf-email" name="qty" placeholder="Masukan Banyak Jumlah" class="form-control" value="<?php echo $baris[3]; ?>">
            </div>
            <div class="form-group">
                <label for="nf-email" class=" form-control-label">Keterangan</label>
                <input type="text" id="nf-email" name="keterangan" placeholder="Keterangan" class="form-control" value="<?php echo $baris[4]; ?>">
            </div>
            <div class="form-group">
                <label for="nf-email" class=" form-control-label">Staus Detail Order</label>
                <input type="text" id="nf-email" name="status_detail_order" placeholder="Ada atau tidak" class="form-control" value="<?php echo $baris[5]; ?>">
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
	$nama_tabel = "detail_order";

	$id_detail_order = $_POST['id_detail_order'];
	$id_order = $_POST['id_order'];
	$id_masakan = $_POST['id_masakan'];
	$qty = $_POST['qty'];
	$keterangan = $_POST['keterangan'];
	$status_detail_order = $_POST['status_detail_order'];

	$query = $ok->robah_detail_order($nama_tabel, $id_detail_order, $id_order, $id_masakan, $qty, $keterangan, $status_detail_order);
	if ($query) {
		echo "<script>window.location='?go=detail_order'</script>";
	} else {
		echo "<div class='alert alert-danger'>
		<i class='fa fa-times-circle'></i> 
		Gagal Di Merubah</div>";
	}
}
?> 