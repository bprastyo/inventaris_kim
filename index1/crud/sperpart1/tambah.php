<?php
require_once"../conn.php";
$verli=$verlis->prepare("select * from tb_sparepart_masuk");
$verli->execute();
$verli_s=$verli->fetch();
?>

<div class="col-md-12">
<div class="box box-primary">
<div class="box-header">
<h3 class="box-title">Form Input Siswa</h3>
</div><!-- /.box-header -->
<!-- form start -->
<form action="./crud/data_simpan.php" method="post" role="form">
<div class="box-body">
  <div class="form-group">
  <input type="text" class="form-control" name="no_masuk" placeholder="NO MASUK" required>
  </div>
<div class="form-group">
<input type="date" class="form-control" name="tgl_masuk" required>
</div>
  <div class="form-group">
  <input type="text" class="form-control" name="kode_barang" placeholder="KODE BARANG" required>
  </div>
  <div class="form-group">
  <input type="text" class="form-control" name="no_pembelian" placeholder="NOMOR PEMBELIAN" required>
  </div>
<div class="form-group">
<input type="text" class="form-control" name="jumlah" placeholder="JUMLAH" required>
</div>
  <div class="form-group">
  <input type="text" class="form-control" name="satuan" placeholder="SATUAN" required>
  </div>
<div class="form-group">
<input type="submit" value="Simpan">
</div>
</div><!-- /.box-body -->
