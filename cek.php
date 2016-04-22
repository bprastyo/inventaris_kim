<?php
include('koneksi.php');
session_start();
if(!isset($_SESSION['akses'])){

	if($_SESSION['level']== "admin") {
		header("location:admin/index.php");
	}
	if(!isset($_SESSION['akses'])){
		header("location:index.php");
  }
?>
