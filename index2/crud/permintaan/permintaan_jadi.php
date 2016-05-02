<?php
require_once"../conn.php"; require_once"../autocode.php";
$kode=$_POST['kdproses'];
$pdoa=$saripdo->prepare("select*from tb_permintaan where No_permintaan='$kode'");
$pdoa->execute();
$jadi=$pdoa->fetch();
$no_pe=$jadi['No_permintaan'];
$tgl_per=$jadi['Tanggal_permintaan'];
$nama_pem=$jadi['Nama_pemakai'];
$kode_brg=$jadi['Kode_barang'];
$jumlah=$jadi['Jumlah'];
$satuan=$jadi['Satuan'];
$tgl_keluar=(date('Y-m-d'));
?>
<?php
$akeluar=$saripdo->prepare("select*from tb_sparepart_keluar ORDER BY Nomor_keluar DESC LIMIT 1");
$akeluar->execute();
$nume=$akeluar->fetch();
$akd=$nume['Nomor_keluar'];
if ($akd==null) {
     $data=autonumber('KLUR00', 4, 2);
   }else {
     $data=autonumber($akd, 4, 2);
   }
?>
<?php
$jadi=$saripdo->prepare("insert into  tb_sparepart_keluar(Nomor_keluar,Tanggal_keluar,Nomor_permintaan,Kode_barang,Jumlah,Satuan)
values ('$data','$tgl_keluar','$no_pe','$kode_brg','$jumlah','$satuan')");
$jadi->execute();
 ?>
 <?php
 $kel=$saripdo->prepare("select*from tb_sparepart where Kode_barang='$kode_brg'");
 $kel->execute();
 $sper=$kel->fetch();
 $namabrg=$sper['Nama_barang'];
 $jumbar=$sper['Jumlah']-$jumlah;
 //echo $jumbar
?>
<?php
 $spersim=$saripdo->prepare("UPDATE tb_sparepart SET
   			    Nama_barang='$namabrg',
 				    Jumlah='$jumbar',
            Satuan='$satuan'
 				    WHERE Kode_barang='$kode_brg'");

 $spersim->execute();
 ?>
 <?php
 $dell=$saripdo->prepare("DELETE FROM tb_permintaan WHERE No_permintaan='$no_pe'");
 $dell->execute();
 include_once"permintaan.php";
?>
