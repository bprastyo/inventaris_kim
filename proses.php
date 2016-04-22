<?php
require "./akses/conn.php";
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
$op = $_GET['login'];
if($op=="masuk"){
$verliquier=$verlipdo->prepare("select * from tb_user where username=:username and password=:password");
$verliquier->bindParam(':username', $username);
$verliquier->bindParam(':password', $password);
$verliquier->execute();
$verly = $verliquier->rowCount();
if($verly== 1){
$verly=$verliquier->fetch();
$_SESSION['username'] = $verly['username'];
$_SESSION['password'] = $verly['password'];
$_SESSION['kategori'] = $verly['kategori'];
//Verly HTACCESS
$homepage="homepage.html";
//Verly HTACCESS END
 if($verly['kategori']=="admin"){
header("location:./index1/");
}else if($verly['kategori']=="pimpinan"){
header("location:./index2/");
}
}else{
echo
include"login.php";
}
}else if($op=="out"){
unset($_SESSION['username']);
unset($_SESSION['password']);
header("location:login.php");
}
?>
