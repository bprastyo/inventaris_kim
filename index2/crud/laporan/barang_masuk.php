<?php require_once"../conn.php";?>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Menu</a></li>
      <li class="active">Sperpart</li>
    </ol>
  </section>
</div>
<div class="panel panel-default">
  <!-- Default panel contents -->

  <div class="panel-heading"><b>Laporan Barang Masuk</b></div>
  <a href="crud/laporan/masuk_print.php" target="_blank"><button type="button" class="btn btn-danger pull-right"><i class="fa fa-print"></i> Print</button></a>
  <div id="tampil">
  <!-- Table -->

  <table class="table">
<td><center><b>Nomor_masuk</b></td><center><b> <td><center><b>Tanggal_masuk</b></td><center><b> <td><center><b>Kode_barang</b></td><center><b> <td><center><b>Nomor_pembelian</center></b></td><td><center><b>Jumlah</center></b></td>

    </tr>
    <?php require_once"../conn.php";
$pdob=$saripdo->prepare("select*from tb_sparepart_masuk order by Tanggal_masuk ASC");
$pdob->execute();
while($tampil=$pdob->fetch()){
?>
    <tr>
    <td><a href="#" class="list-group-item"><b><?php echo $tampil['Nomor_masuk']; ?></b></a></td>
    <td><a href="#" class="list-group-item"><b><?php echo $tampil['Tanggal_masuk']; ?></b></a></td>
    <td><a href="#" class="list-group-item"><b><?php echo $tampil['Kode_barang']; ?></b></a></td>
    <td><a href="#" class="list-group-item"><b><?php echo $tampil['Nomor_pembelian']; ?></b></a></td>
    <td><a href="#" class="list-group-item"><b><?php echo $tampil['Jumlah'];echo $tampil['Satuan']; ?></b></a></td>


</tr>
  <?php } ?>
  </table>
</div>
</div>
<div id="aksi">.
</div>
