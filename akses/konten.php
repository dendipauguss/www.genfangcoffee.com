<?php
if (isset($_GET['go'])) {


	switch ($_GET['go']) {
//masakan
		case 'masakan':
			include "masakan/lihat.php";
			break;

		case 'plus_masakan':
			include "masakan/form.php";
			break;

		case 'edit_masakan':
			include "masakan/edit.php";
			break;
//order/memesan
		case 'memesan':
			include "memesan/memesan.php";
			break;

		case 'tambah':
			include "memesan/nambah.php";
			break;
			//setelah tambah selanjutnya
		case 'selanjutnya':
			include 'memesan/order_nudi_nambah.php';
			break;

		case 'order':
			include "memesan/lihat_order.php";
			break;

		case 'plus_order':
			include "memesan/form_order.php";
			break;

//detail order/detail memesan
		case 'detail_order':
			include "memesan/lihat_detail_order.php";
			break;

		case 'plus_detail_order':
			include "memesan/form_detail_order.php";
			break;

//bayar
		case 'bayar':
			include "memesan/panderi.php";
			break;

//meja
		case 'meja':
			include "meja/lihat.php";
			break;

		case 'opsi_meja':
			include "meja/opsi_meja.php";
			break;

		case 'plus_meja':
			include "meja/form.php";
			break;

		case 'edit_meja':
			include "meja/edit.php";
			break;

//pelanggan
		case 'pelanggan':
			include "pelanggan/lihat.php";
			break;

		case 'plus_pelanggan':
			include "pelanggan/form.php";
			break;

		case 'edit_pelanggan':
			include "pelanggan/edit.php";
			break;

		case 'cari_pelanggan':
			include "pelanggan/cari-lihat.php";
			break;
//transaksi
		case 'transaksi':
			include "transaksi/lihat.php";
			break;

		case 'edit_transaksi':
			include "transaksi/edit.php";
			break;
//user
		case 'user':
			include "user/lihat.php";
			break;

		case 'plus_user':
			include "user/form.php";
			break;

		case 'edit_user':
			include "user/edit.php";
			break;
//level
		case 'level':
			include "level/lihat.php";
			break;

		case 'plus_level':
			include "level/form.php";
			break;

		case 'edit_level':
			include "level/edit.php";
			break;
//laporan
		case 'laporan':
			include "laporan/ngalapor.php";
			break;
/*
		case 'print':
			include "laporan/print.php";
			break;
//ngalapor
		case 'laporan':
			include "laporan/lihat.php";
			break;*/
//profile
		case 'profil':
			include "profil/lihat.php";
			break;

//kosong
		default:
			include "beranda.php";
			break;
	}
}
 