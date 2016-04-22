<?php require_once"../conn.php";?>
<?php
$k=$_POST['k'];
$n=$_POST['n'];
$t=$_POST['t'];
$a=$_POST['q'];
$j=$_POST['j'];
$s=$_POST['s'];

$permintaan=$saripdo->prepare("insert into  tb_permintaan(No_permintaan,Tanggal_permintaan,Nama_pemakai,Kode_barang,Jumlah,Satuan)
values ('$n','$t','$a','$k','$j','$s')");
$permintaan->execute();
 ?>
