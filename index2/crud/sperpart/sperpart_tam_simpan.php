<?php
require_once"../conn.php";
$k=$_POST['k'];
$n=$_POST['n'];
$j=0;
$s="UNIT";

$sql_simpan=$saripdo->prepare("insert into  tb_sparepart(Kode_barang,Nama_barang,Jumlah,Satuan)
values ('$k','$n','$j','$s')");
$sql_simpan->execute();
?>
