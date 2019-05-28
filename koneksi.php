<?php 
 
$koneksi = mysql_connect("localhost","root","","db_perangkat");
 
// Check connection
if (mysql_connect_errno()){
	echo "Koneksi database gagal : " . mysql_connect_error();
}
 
?>