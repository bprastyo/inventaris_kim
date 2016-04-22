<?php
require_once"../conn.php"; require_once"../autocode.php";
$kdbeli = $_POST['kdbeli'];
$pbeli=$saripdo->prepare("select*from tb_pembelian where Nomor_pembelian='$kdbeli'");
$pbeli->execute();
$masuk=$pbeli->fetch();
$d=(date('Y-m-d'));
$no=$masuk['Nomor_pembelian'];
$kd=$masuk['Kode_barang'];
$jum=$masuk['Jumlah'];
$sat=$masuk['Satuan'];
?>
<?php
$bmasuk=$saripdo->prepare("select*from tb_sparepart_masuk ORDER BY Nomor_masuk DESC LIMIT 1");
$bmasuk->execute();
$bamasuk=$bmasuk->fetch();
$bbmasuk=$bamasuk['Nomor_masuk'];
if ($bbmasuk==null) {
     $kdmasuk=autonumber('MASUK00', 5, 2);
   }else {
     $kdmasuk=autonumber($bbmasuk, 5, 2);
   }
?>
<?php
$beliproses=$saripdo->prepare("insert into  tb_sparepart_masuk(Nomor_masuk,Tanggal_masuk,Kode_barang,Nomor_pembelian,Jumlah,Satuan)
values ('$kdmasuk','$d;','$kd','$no','$jum','$sat')");
$beliproses->execute();
?>
