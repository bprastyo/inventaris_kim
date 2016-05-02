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

  <div class="panel-heading"><b>DO</b></div>
  <div id="tampil">
  <button type="button" class="btn btn-danger pull-right" onclick="laporan_do()" ><i class="fa fa-refresh"></i></button>
  <!-- Table -->
  <table class="table">
    <tr><td><center><b>KODE DO</b></td><td><center><b>TGL</b></td><td><center><b>NO PERMINTAAN</b></td><td><center><b>KODE BARANG</b></td></center>
      <td><center><b>NOMOR KELUAR</b></td></center><td><center><b>JUMLAH</b></td></center>
    </tr>
    <?php require_once"../conn.php";
$pdo=$saripdo->prepare("select*from tb_do order by Nomor_DO ASC");
$pdo->execute();
while($tampil=$pdo->fetch()){
  $no=$tampil['Nomor_DO'];
  $tgl=$tampil['Tanggal_DO'];
  $noper=$tampil['Nomor_permintaan'];
  $kdbrg=$tampil['Kode_barang'];
  $nokel=$tampil['Nomor_keluar'];
  $jumlah=$tampil['Jumlah'];
  $satuan=$tampil['Satuan'];
?>
    <tr>
    <td><a href="#" class="list-group-item"><b><?php echo $no; ?></b></a></td>
    <td><a href="#" class="list-group-item"><b><?php echo $tgl; ?></b></a></td>
    <td><a href="#" class="list-group-item"><b><?php echo $noper; ?></b></a></td>
    <td><a href="#" class="list-group-item"><b><?php echo $kdbrg; ?></b></a></td>
    <td><a href="#" class="list-group-item"><b><?php echo $nokel; ?></b></a></td>
    <td><a href="#" class="list-group-item"><b><?php echo $jumlah.$satuan; ?></b></a></td>
    <td style="width:2%;">
  <div class="btn-group">
<button type="button" class="btn btn-success" onclick="printdo1(this.value);" value="<?php echo $tampil['Nomor_DO'] ?>">Lihat</button></div></td>
<div id="print"></div>
</tr>
  <?php } ?>
  </table>
</div>
</div>
<div id="aksi">.
</div>
