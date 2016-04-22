<?php require_once"../conn.php";
$u=$_POST['u'];
$p=$_POST['p'];
$k=$_POST['k'];
?>
<?php
$sql_simpan=$saripdo->prepare("UPDATE tb_user SET
  			    password='$p',
				    kategori='$k'
				    WHERE username='$u'");

$sql_simpan->execute();
?>
<br/>
<script language="JavaScript">alert('Data Berhasil Di Ubah !');</script>
<div class="panel panel-default">
  <button type="button" class="btn btn-danger pull-right" value="<?php echo $u; ?>" onclick="user_edit(this.value)" >X</button>
    <div class="panel-heading"><b>UPDATE DATA BERHASIL</b></div>
<table class="table">
<tr>
<td><input type="text" class="form-control" id="username_u" value="<?php echo $u; ?>"></td>
<td><input type="text" class="form-control" id="password_u" value="<?php echo $p; ?>"></td>
<td><input type="text" class="form-control" id="kategori_u" value="<?php echo $k; ?>"></td>
<td style="width:159px;"></td>
</tr>
</table>
</div>
