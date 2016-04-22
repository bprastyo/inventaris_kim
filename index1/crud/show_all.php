<?php
require_once"conn.php";
//user
$number=$saripdo->prepare("select*from tb_user ORDER BY No_permintaan DESC LIMIT 1");
$number->execute();
$nume=$number->fetch();
$autono=$nume['No_permintaan'];

?>
