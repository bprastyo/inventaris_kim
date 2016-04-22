<?php
session_start();
require_once("konek.php");
$username=$_POST['username'];
$password=$_POST['password'];
$akses=$_POST['akses'];
echo "$password";
	$sql = "SELECT * FROM tb_user WHERE username = '$username'";
	$query = $db->query($sql);
	$hasil = $query->fetch_assoc();
	if($query->num_rows == 0) {
		echo "<div align='center'>Username Belum Terdaftar! <a href='login.php'>Back</a></div>";
	} else {
		if($pass != $hasil['[password']) {
			echo "<div align='center'>Password salah! <a href='login.php'>Back</a></div>";
		} else {
			$_SESSION['username'] = $hasil['username'];
			$_SESSION['akses'] = $hasil['kategori'];
			header('location:session.php');
		}
	}

?>
