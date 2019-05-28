<?php
include 'koneksi.php';
$nama_depan=$_POST['nama_depan'];
$nama_belakang=$_POST['nama_belakang'];
$email=$_POST['email'];
$remail=$_POST['remail'];
$password=$_POST['password'];
$tanggal=$_POST['tanggal'];
$bulan=$_POST['bulan'];
$tahun=$_POST['tahun'];
$jenis_kelamin=$_POST['jenis_kelamin'];

$cek=mysqli_query($konek,"INSERT INTO daftar VALUES('','$nama_depan','$nama_belakang','$email','$remail','$password','$tanggal','$bulan','$tahun','$jenis_kelamin')");

error_reporting(0);
if($cek){
	header('location:login.php');
}
else{
	echo "failed";
}
?>