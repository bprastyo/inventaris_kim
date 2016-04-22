<?php require_once"../conn.php";

$n = $_POST['n'];
$nama= $_POST['a'];
$jumbarang = $_POST['q'];
$t = $_POST['t'];
$k = $_POST['k'];
$j = $_POST['j'];
$s = $_POST['s'];
$pembelian =($jumbarang+$j);
/*

*/
$sql_beli=$saripdo->prepare("insert into  tb_pembelian(Nomor_pembelian,Tanggal_pembelian,Kode_barang,Jumlah,Satuan)
values ('$n','$t','$k','$j','$s')");
$sql_beli->execute();

/*
$sql_up=$saripdo->prepare("UPDATE tb_sparepart SET
                            Nama_barang='$nama',
                            Jumlah='$pembelian',
                            Satuan='$s'
                            WHERE Kode_barang='$k'");
$sql_up->execute();
*/
?>
<br/>
<script language="JavaScript">alert('Data Berhasil Di Simpan !');
document.location=('')</script>
