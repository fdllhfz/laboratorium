<?php
include 'koneksi.php';
$namadepan=$_POST['nama_depan'];
$namabelakang=$_POST['nama_belakang'];
$email=$_POST['email'];
$replyemail=$_POST['remail'];
$password=$_POST['password'];




$check=mysqli_query($konek,"INSERT INTO daftar VALUES
	('','$namadepan','$namabelakang','$email','$replyemail','$password')");

	error_reporting(0);

	if($check){
		header('location:login.php');
	}

	else{
		echo "failed";
	}

?>
