<?php
if ($_GET['aksi'] == 'hapus') {
	//didieu eksekusi untuk hapus
	$kode = $_GET['kode'];
	$nama_tabel = "transaksi";
	$where = "id_transaksi";
	$hapus = $ok->pupus($nama_tabel, $where, $kode);
	if ($hapus) {
		echo "<div class='alert alert-success'><i class='fa fa-check'></i> 
		Berhasil Dihapus</div>";
		echo "<a href='?go=transaksi' class='btn btn-primary'>Kembali</a>";
	} else {
		echo "<div class='alert alert-danger'><i class='fa fa-times-circle'></i> 
		Gagal Dihapus</div>";
	}
}
