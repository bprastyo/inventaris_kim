<?php
require_once"../conn.php";
$user = $_POST['u'];
$pass = $_POST['p'];
$kategori = $_POST['k'];

$sql_simpan=$saripdo->prepare("insert into  tb_user(username,password,kategori)
values ('$user','$pass','$kategori')");
$sql_simpan->execute();
?>
<br/>
<script language="JavaScript">alert('Data Berhasil Di Simpan !');
document.location=('')</script>
