<?php
$konek=mysqli_connect("localhost","root","","kafe");
require('../pdf2/fpdf.php');

$pdf = new FPDF("L","cm","A4");

$pdf->SetMargins(2,1,1);
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','B',11);
$pdf->Image('logo.png',1,1,3,2);
$pdf->SetX(4);            
$pdf->MultiCell(19.5,0.5,'RESTORAN WAKAHA-Warung Kita Halal dot com',0,'L');
$pdf->SetX(4);
$pdf->MultiCell(19.5,0.5,'Telepon : 025321599671',0,'L');    
$pdf->SetFont('Arial','B',10);
$pdf->SetX(4);
$pdf->MultiCell(19.5,0.5,'JL. PADAREK-LEMAHSUGIH-MAJALENGKA',0,'L');
$pdf->SetX(4);
$pdf->MultiCell(19.5,0.5,'website : www.WaKaHa.com email : WaKaHa@gmail.com',0,'L');
$pdf->Line(1,3.1,28.5,3.1);
$pdf->SetLineWidth(0.1);      
$pdf->Line(1,3.2,28.5,3.2);   
$pdf->SetLineWidth(0);
$pdf->ln(1);
$pdf->SetFont('Arial','B',14);
$pdf->Cell(25.5,0.7,"Laporan Data Transaksi",0,10,'C');
$pdf->ln(1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(5,0.7,"Di cetak pada : ".date("D-d/m/Y"),0,0,'C');
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
$query=mysqli_query($konek,"SELECT * from transaksi order by tanggal desc");
while($lihat=mysqli_fetch_array($query)){
	$pdf->Cell(1, 0.8, $no , 1, 0, 'C');
	$pdf->Cell(4, 0.8, $lihat['id_transaksi'],1, 0, 'C');
	$pdf->Cell(4, 0.8, $lihat['id_user'], 1, 0,'C');
	$pdf->Cell(4, 0.8, $lihat['id_order'], 1, 0,'C');
	$pdf->Cell(4, 0.8, $lihat['tanggal'],1, 0, 'C');
	$pdf->Cell(4, 0.8, $lihat['id_pembeli'],1, 0, 'C');
	$pdf->Cell(5, 0.8, "Rp. ".number_format($lihat['total_bayar'])." ,-", 1, 1,'C');

	$no++;
}



$pdf->Output("laporan_Transaksi_WaKaHa.pdf","I");

?>