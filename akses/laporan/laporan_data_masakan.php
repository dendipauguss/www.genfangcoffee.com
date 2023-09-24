<?php
require('../../fungsi/koneksi.php');
require('../pdf2/fpdf.php');

$pdf = new FPDF("L","cm","A4");

$pdf->SetMargins(2,1,1);
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','B',11);
$pdf->Image('gcof_logo.png',1,1,3,2);
$pdf->SetX(4);            
$pdf->MultiCell(19.5,0.5,'GENFANG COFFEE',0,'L');
$pdf->SetX(4);
$pdf->MultiCell(19.5,0.5,'Telepon : 021-321-599-671',0,'L');    
$pdf->SetFont('Arial','B',10);
$pdf->SetX(4);
$pdf->MultiCell(19.5,0.5,'JL. LEUWISEENG-CIJATI-LEMAHSUGIH (MAJALENGKA)',0,'L');
$pdf->SetX(4);
$pdf->MultiCell(19.5,0.5,'website : www.genfangcoffee.com email : genfangcoff2@gmail.com',0,'L');
$pdf->Line(1,3.1,28.5,3.1);
$pdf->SetLineWidth(0.1);      
$pdf->Line(1,3.2,28.5,3.2);   
$pdf->SetLineWidth(0);
$pdf->ln(1);
$pdf->SetFont('Arial','B',14);
$pdf->Cell(25.5,0.7,"Laporan Data Masakan",0,10,'C');
$pdf->ln(1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(5,0.7,"Di cetak pada : ".date("D-d/m/Y"),0,0,'C');
$pdf->ln(1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(1, 0.8, 'NO', 1, 0, 'C');
$pdf->Cell(4, 0.8, 'Id Masakan', 1, 0, 'C');
$pdf->Cell(7, 0.8, 'Nama Masakan', 1, 0, 'C');
$pdf->Cell(5, 0.8, 'Harga', 1, 0, 'C');
$pdf->Cell(4.5, 0.8, 'Status Masakan', 1, 0, 'C');
$pdf->Cell(4.5, 0.8, 'Stok', 1, 1, 'C');
$pdf->SetFont('Arial','',10);
$no=1;
$tabel="masakan";
$id="id_masakan";
$query=$ok->laporan($tabel,$id);
while($lihat=mysqli_fetch_array($query)){
	$pdf->Cell(1, 0.8, $no , 1, 0, 'C');
	$pdf->Cell(4, 0.8, $lihat['id_masakan'],1, 0, 'C');
	$pdf->Cell(7, 0.8, $lihat['nama_masakan'], 1, 0,'C');
	$pdf->Cell(5, 0.8, "Rp. ".number_format($lihat['harga'])." ,-",1, 0, 'C');
	$pdf->Cell(4.5, 0.8, $lihat['status_masakan'], 1, 0,'C');
	$pdf->Cell(4.5, 0.8, $lihat['stok'],1, 1, 'C');

	$no++;
}

$pdf->Output("laporan_Masakan-GCoffe.pdf","I");

?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo NAMI_WEB; ?></title>
</head>
<body>

</body>
</html>