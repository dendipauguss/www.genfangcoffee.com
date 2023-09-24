<link rel="stylesheet" type="text/css" href="../timer/bootstrap.min.css">

<head>
    <link rel="stylesheet" type="text/css" href="../timer/bootstrap.min.css">
</head>

<div class="table-responsive">

    <table class="table table-bordered table-hover table-primary">
        <thead class="text-white btn-info">
            <tr>
                <th>Id Transaksi</th>
                <th>Id User</th>
                <th>Id Order</th>
                <th>Tanggal</th>
                <th>Id Pembeli</th>
                <th>Total Bayar</th>
            </tr>
        </thead>
<?php
include "../../fungsi/koneksi.php";
$no = 1;
$tahun=$_POST['tahun'];
$bulan=$_POST['bulan'];
$masuk="$tahun-$bulan";

$asd = $ok->laporan_perbulan($masuk); 
if ($asd->num_rows > 0 ) {
foreach ($asd as $view) {
echo "<tr>";
echo "<td>$view[id_transaksi]</td>";
echo "<td>$view[id_user]</td>";
echo "<td>$view[id_order]</td>";
echo "<td>$view[tanggal]</td>";
echo "<td>$view[id_pembeli]</td>";
echo "<td>Rp. ".number_format($view['total_bayar'])." ,-</td>";
echo "</tr>";
}
}
?>

<?php
//diajax
$no = 1;
$tahun=$_POST['tahun'];
$bulan=$_POST['bulan'];
$masuk="$tahun-$bulan";

$query = $ok->duit_perbulan($masuk); 
if ($query->num_rows > 0 ) {
    foreach ($query as $data) {
    	//didieu tampilkeun penghasilan per bulan
    	//ngieun tabel ngieun tr td = valuena $data['Total'];
        //echo "</table><br><table class='table table-bordered table-hover table-primary'>";//membuat jarak antara isi tabel dan jumlah
        echo "<tfoot>
                <tr>
                    <th colspan='5'>Jumlah  &nbsp;&nbsp; :</th>
                    <td><b>Rp. ".number_format($data['Total'])." ,-</b></td>
                </tr>
            </tfoot>";
	}
    echo "</table>";
    echo "<div class='alert alert-danger'>Jika jumlahnya kosong atau tidak terisi,<br>Maka tidak ada pemasukan.</div>";
}
?>

<div style="float: right;"><a href="laporan/laporan_data_transaksi.php?tanggal=$masuk" target="_blank" class="text-white btn btn-success">Cetak</a></div>

</div>