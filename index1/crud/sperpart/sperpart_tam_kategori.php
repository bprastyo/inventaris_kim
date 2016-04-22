<?php
require_once"../conn.php"; require_once"../autocode.php";
$number=$saripdo->prepare("select*from tb_sparepart ORDER BY Kode_barang DESC LIMIT 1");
$number->execute();
$nume=$number->fetch();
$autono=$nume['Kode_barang'];
if ($autono==null) {
     $data=autonumber('BARANG00', 6, 2);
   }else {
     $data=autonumber($autono, 6, 2);
   }
?>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Menu</a></li>
      <li class="active">User</li>
    </ol>
  </section>
</div>
<div class="panel panel-default">
  <!-- Default panel contents -->

  <div class="panel-heading"><b>TAMBAH DAFTAR BARANG</b></div>
  <div id="tampil">
  <button type="button" class="btn btn-danger pull-right" onclick="sperpart()" >x</button>
  <!-- Table -->
  <table class="table">
    <tr><td><center><b>KODE BARANG</b></td><td><center><b>NAMA BARANG</b></td></center>
    </tr>
    <tr>
    <td><input type="text" class="form-control" id="kode_barang" value="<?php echo $data; ?>"></td>
    <td><input type="text" class="form-control" id="nama_barang"></td>
    <td style="width:170px;">
  <div class="btn-group">
<button type="button" class="btn btn-success" onclick="sperpart_tambahan()">Tambah</button></div></td>
</tr>
  </table>
</div>
</div>
<div id="aksi">.
</div>
