<?php require_once"../conn.php";?>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Menu</a></li>
      <li class="active">Permintaan</li>
    </ol>
  </section>
</div>
<div class="panel panel-default">
  <div class="panel-heading"><b>Permintaan</b></div>
  <button type="button" class="btn btn-danger pull-right" onclick="permintaan()" >x close</button>
  <table class="table">
  <td><center><b>Kode Barang</b></td>
  <tr>
  <td><select class="form-control" id="kodebarang">
  <?php $pdo=$saripdo->prepare("select*from tb_sparepart");
        $pdo->execute(); foreach ($pdo as $pdo){ ?>
<option value="<?php echo $pdo['Kode_barang'];?>"><?php echo $pdo['Kode_barang'];?></option>
<?php } ?></select></td>
  <td>  <div class="btn-group">
  <button type="button" class="btn btn-success" onclick="tambah_permintaan()">Tambah</button>
  </div></td>
</tr>
</table>
</div>
<div id="aksi">
  .
</div>
