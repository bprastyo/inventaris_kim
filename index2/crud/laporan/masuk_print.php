<?php
require_once"../../pdf/fpdf.php";
require_once"../conn.php";

$pdf=new fpdf;

$pdf->AddPage('P','A4');

$pdf->SetTextColor(0,0,100);
$pdf->SetFont('times','','14');
$pdf->Cell('0','6','LAPORAN','0',1,'C');
$pdf->Cell('0','6','PT. KIM REMBANG','0',1,'C');

$pdf->SetFont('times','','10');
$pdf->Cell('0','6','Jl. Raya surabaya - semarang ','0',1,'C');
$pdf->Cell('190','','','B','','');
$pdf->Ln(10);
$pdf->SetTextColor(0,0,100);
$pdf->SetFont('arial','','20');
$pdf->Cell('0','5','DAFTAR SPERPART KELUAR','0','1','C');
$pdf->Ln(10);


$pdf->SetFont('Arial','B','10');
$pdf->Cell(35,10,'No Masuk','LTBR',0,'C');
$pdf->Cell(39,10,'Tgl Masuk','LTBR',0,'C');
$pdf->Cell(39,10,'Kode Barang','LTBR',0,'C');
$pdf->Cell(39,10,'No Pembelian','LTBR',0,'C');
$pdf->Cell(39,10,'Jumlah','LTBR',0,'C');
$pdf->Ln();


$pdo=$saripdo->prepare("select*from tb_sparepart_masuk order by Nomor_masuk");
$pdo->execute();
while($tampil=$pdo->fetch()){
$pdf->SetFont('Arial','','10','C');
$pdf->SetTextColor(128);
$pdf->Cell(35,10,$tampil['Nomor_masuk'],'LBR',0,'C');
$pdf->Cell(39,10,$tampil['Tanggal_masuk'],'LBR',0,'C');
$pdf->Cell(39,10,$tampil['Kode_barang'],'LBR',0,'C');
$pdf->Cell(39,10,$tampil['Nomor_pembelian'],'LBR',0,'C');
$pdf->Cell(39,10,$tampil['Jumlah'].$tampil['Satuan'],'LBR',0,'C');
$pdf->Ln();
}

$pdf->Ln(3);
$pdf->SetTextColor(0,0,100);
$pdf->SetFont('times','','10');

$pdf->Output();
?>
