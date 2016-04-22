<?php
require_once"../conn.php";
$kd=$_POST['kdhapus'];
echo $kd;
$hapus=$saripdo->prepare("DELETE FROM tb_user WHERE username='$kd'");
$hapus->execute();
?>
<script language="JavaScript">alert('Data Berhasil Di Hapus !');
document.location=('')</script>
