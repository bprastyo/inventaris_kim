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
  <div class="panel-heading"><b>Form User</b></div>
  <button type="button" class="btn btn-danger pull-right" onclick="user_tam()" >+</button>
  <table class="table">
    <tr><td><center><b>USERNAME</b></td><td><center><b>PASSWORD</b></td><td><center><b>KATEGORI</b></td><td><center><b>AKSI</b></td></center>
    </tr>
    <?php require_once"../conn.php";
$pdo=$saripdo->prepare("select*from tb_user order by username");
$pdo->execute();
while($tampil=$pdo->fetch()){
  $user=$tampil['username'];
  $password=$tampil['password'];
  $kategori=$tampil['kategori'];
?>
    <tr>
    <td><a href="#" class="list-group-item"><?php echo $user; ?></a></td>
    <td><a href="#" class="list-group-item"><?php echo $password; ?></a></td>
    <td><a href="#" class="list-group-item"><?php echo $kategori; ?></a></td>
    <td style="width:150px;">
  <div class="btn-group">
<button type="button" class="btn btn-success" onclick="user_edit(this.value);" value="<?php echo $tampil['username'] ?>">Ubah</button></a>
<button type="button" class="btn btn-danger"  onclick="user_hapus(this.value);" value="<?php echo $tampil['username'] ?>">Hapus</button></div></td>
</tr>
  <?php } ?>
  </table>
</div>
<div id="aksi">
</div>
