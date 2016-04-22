<?php require_once"../conn.php";
$kdedit=$_POST['kdedit'];
$pdoubah=$saripdo->prepare("select*from tb_user where username='$kdedit' ");
$pdoubah->execute();
$ubah=$pdoubah->fetch();
?>
<div class="panel panel-default">
  <button type="button" class="btn btn-danger pull-right" onclick="user()" >X</button>
    <div class="panel-heading"><b>Form User Update</b></div>
    <table class="table">
      <tr>
      <td><center><b>USERNAME</b></td>
        <td><center><b>PASSWORD</b></td>
          <td><center><b>KATEGORI</b></td><td><center>
            <b>AKSI</b></td></center>
      </tr>
      <tr>
<td><input type="text" class="form-control" id="username_u" value="<?php echo $ubah['username']; ?>"></td>
<td><input type="text" class="form-control" id="password_u" value="<?php echo $ubah['password']; ?>"></td>
<td><input type="text" class="form-control" id="kategori_u" value="<?php echo $ubah['kategori']; ?>"></td>
<td><center><button type="button" class="btn btn-primary" onclick="users_update();">Simpan</button></div></center></td>
</tr></table>
</div>

<div id="hasil">
</div>
