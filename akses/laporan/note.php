<?php
mysql_connect("localhost","root","");
mysql_select_db("wakaha");
require('../pdf/fpdf.php');

$pdf = new FPDF("L","cm","A4");

$pdf->SetMargins(2,1,1);
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','B',11);  
$pdf->SetLineWidth(0);
$pdf->ln(1);
$pdf->SetFont('Arial','B',14);
$pdf->Cell(25.5,0.7,"RESTO & CAPE",0,10,'C');
$pdf->Cell(25.5,0.7," PT WAKAHA, TBK",0,10,'C');
$pdf->ln(1);
$pdf->SetFont('Arial','B',10);
$pdf->ln(1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(1, 0.8, 'NO', 1, 0, 'C');
$pdf->Cell(4, 0.8, 'Id Transaksi', 1, 0, 'C');
$pdf->Cell(4, 0.8, 'Id _user', 1, 0, 'C');
$pdf->Cell(4, 0.8, 'Id Order', 1, 0, 'C');
$pdf->Cell(4, 0.8, 'Tanggal', 1, 0, 'C');
$pdf->Cell(4, 0.8, 'Id Pembeli', 1, 0, 'C');
$pdf->Cell(5, 0.8, 'Total Bayar', 1, 1, 'C');
$pdf->SetFont('Arial','',10);
$no=1;
$query=mysql_query("SELECT * from transaksi order by tanggal desc");
while($lihat=mysql_fetch_array($query)){
	$pdf->Cell(1, 0.8, $no , 1, 0, 'C');
	$pdf->Cell(4, 0.8, $lihat['id_transaksi'],1, 0, 'C');
	$pdf->Cell(4, 0.8, $lihat['id_user'], 1, 0,'C');
	$pdf->Cell(4, 0.8, $lihat['id_order'], 1, 0,'C');
	$pdf->Cell(4, 0.8, $lihat['tanggal'],1, 0, 'C');
	$pdf->Cell(4, 0.8, $lihat['id_pembeli'],1, 0, 'C');
	$pdf->Cell(5, 0.8, "Rp. ".number_format($lihat['total_bayar'])." ,-", 1, 1,'C');

	$no++;
}
$q=mysql_query("select sum(total_bayar) as total from transaksi");
// select sum(total_harga) as total from barang_laku where tanggal='$tanggal'
while($total=mysql_fetch_array($q)){
	$pdf->Cell(21, 0.8, "Total Pendapatan", 1, 0,'C');		
	$pdf->Cell(5, 0.8, "Rp. ".number_format($total['total'])." ,-", 1, 0,'C');	
}


$pdf->Output("laporan_Transaksi_WaKaHa.pdf","I");

?>