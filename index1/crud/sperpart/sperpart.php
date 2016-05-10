<div id="isia"></div>
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

  <div class="panel-heading"><b>DAFTAR BARANG</b></div>
  <div id="tampil">
  <button type="button" class="btn btn-danger pull-right" onclick="sperpart_tambah_kategori()" >+ Tambah Daftar Barang</button>&nbsp;
  <class="pull-right"">.
  <button type="button" class="btn btn-danger pull-right" onclick="sperpart()" ><i class="fa fa-refresh"></i></button>
  <!-- Table -->
  <table class="table">
    <tr><td><center><b>KODE BARANG</b></td><td><center><b>NAMA BARANG</b></td><td><center><b>JUMLAH</b></td><td><center><b>AKSI</b></td></center>
    </tr>
    <?php require_once"../conn.php";
$pdo=$saripdo->prepare("select*from tb_sparepart order by Kode_barang ASC");
$pdo->execute();
while($tampil=$pdo->fetch()){
  $kode=$tampil['Kode_barang'];
  $nama=$tampil['Nama_barang'];
  $jumlah=$tampil['Jumlah'];
  $satuan=$tampil['Satuan'];
?>
    <tr>
    <td><a href="#" class="list-group-item"><b><?php echo $kode; ?></b></a></td>
    <td><a href="#" class="list-group-item"><b><?php echo $nama; ?></b></a></td>
    <td><a href="#" class="list-group-item"><b><?php
    $stok=$jumlah; $n="";
    if ($stok>3) {
      echo $n.'<div class="hitam">'.$stok.'&nbsp;'.$satuan.'</div>';
    }
    else if ($stok<3 && $stok>0) {
      echo $n.'<div class="kuning">'.$stok.'&nbsp;'.$satuan.'</div>';
    }
    else {
      echo $n.'<div class="merah">KOSONG</div>';
    }
    ?></b></a></td>
    <td style="width:2%;">
  <div class="btn-group">
<button type="button" class="btn btn-success" onclick="sperpart_beli(this.value);" value="<?php echo $tampil['Kode_barang'] ?>">Beli Barang</button></div></td>
</tr>
  <?php } ?>
  </table>
</div>
</div>
<div id="aksi">.
</div>
