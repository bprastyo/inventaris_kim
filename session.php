<?php
error_reporting(0);
session_start();
if ((!$_SESSION['username']) AND (!$_SESSION['password']) AND (!$_SESSION['kategori'])){
}else {
  header("login.php");
}
?>
