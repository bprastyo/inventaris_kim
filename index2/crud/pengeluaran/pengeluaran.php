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
  <div class="panel-heading"><b>Barang keluar</b></div>

  <table class="table">
    <tr><td><center><b>Nomor Keluar</b></td><td><center><b>Tanggal Keluar</b></td><td>
      <center><b>Nomor Permintaan</b></td><td><center><b>Kode Barang</b></td><td><center><b>Jumlah</b></center></td>
    </tr>
    <?php require_once"../conn.php";
$pdo=$saripdo->prepare("select*from tb_sparepart_keluar order by Nomor_keluar");
$pdo->execute();
while($tampil=$pdo->fetch()){
?>
    <tr>
    <td><a href="#" class="list-group-item"><?php echo $tampil['Nomor_keluar']; ?></a></td>
    <td><a href="#" class="list-group-item"><?php echo $tampil['Tanggal_keluar']; ?></a></td>
    <td><a href="#" class="list-group-item"><?php echo $tampil['Nomor_permintaan']; ?></a></td>
    <td><a href="#" class="list-group-item"><?php echo $tampil['Kode_barang']; ?></a></td>
    <td><a href="#" class="list-group-item"><?php echo $tampil['Jumlah']; echo $tampil['Jumlah']; ?></a></td>
</tr>
  <?php } ?>
  </table>
</div>
<div id="aksi">
  .
</div>
