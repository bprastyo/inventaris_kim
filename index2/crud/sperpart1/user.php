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

  <div class="panel-heading" center>Form User</div>
  <!-- Table -->
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
    <td style="width:170px;">
  <div class="btn-group">

<button type="button" class="btn btn-success" onclick="user_edit(this.value);">Ubah</button>
  <a href="javascript:void(0)" onclick="user_hapus(this.value);"><button type="button" class="btn btn-danger">Hapus</button></div></td>
</tr>
  <?php } ?>
  </table>
</div>

<div id="aksi">
</div>
