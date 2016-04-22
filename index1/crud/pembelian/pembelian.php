<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Menu</a></li>
      <li class="active">Pembelian</li>
    </ol>
  </section>
</div>
<div class="panel panel-default">
  <div class="panel-heading"><b>Table Tembelian</b></div>
  <button type="button" class="btn btn-danger pull-right" onclick="permintaan_tam()" >+</button>
  <table class="table">
    <tr><td><center><b>Nomor Pembelian</b></td><td><center><b>Tanggal Pembelian</b></td><td>
      <center><b>Kode Barang</b></td><td><center><b>Jumlah</b></center></td><td><center><b></b></center></td>
    </tr>
    <?php require_once"../conn.php";
$pdo=$saripdo->prepare("select*from tb_pembelian order by Nomor_pembelian");
$pdo->execute();
while($tampil=$pdo->fetch()){
?>
    <tr>
    <td><a href="#" class="list-group-item"><?php echo $tampil['Nomor_pembelian']; ?></a></td>
    <td><a href="#" class="list-group-item"><?php echo $tampil['Tanggal_pembelian']; ?></a></td>
    <td><a href="#" class="list-group-item"><?php echo $tampil['Kode_barang']; ?></a></td>
    <td><a href="#" class="list-group-item"><?php echo $tampil['Jumlah']."&nbsp;"; echo $tampil['Satuan']; ?></a></td>
    <td style="width:150px;">
  <div class="btn-group">
<button type="button" class="btn btn-success" onclick="proses(this.value);" value="<?php echo $tampil['No_permintaan'] ?>">Laporan</button></a>
</div></td>
</tr>
  <?php } ?>
  </table>
</div>
<div id="aksi">.
</div>
