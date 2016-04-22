<?php
require_once"../pdf/fpdf.php";
require_once"conn.php";

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
$pdf->Cell('0','5','DAFTAR USERNAME','0','1','C');
$pdf->Ln(10);


$pdf->SetFont('Arial','B','10');
$pdf->Cell(60,10,'USERNAME','LTBR',0,'C');
$pdf->Cell(60,10,'PASSWORD','LTBR',0,'C');
$pdf->Cell(60,10,'KATEGORI','LTBR',0,'C');
$pdf->Ln();

$pdo=$saripdo->prepare("select*from tb_user order by username");
$pdo->execute();
while($tampil=$pdo->fetch()){
$pdf->SetFont('Arial','','10','C');
$pdf->SetTextColor(128);
$pdf->Cell(60,10,$tampil['username'],'LBR',0,'C');
$pdf->Cell(60,10,$tampil['password'],'LBR',0,'C');
$pdf->Cell(60,10,$tampil['kategori'],'LBR',0,'C');
$pdf->Ln();
}

$pdf->Ln(3);
$pdf->SetTextColor(0,0,100);
$pdf->SetFont('times','','10');

$pdf->Output();
?>
