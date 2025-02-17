<?php
include("connection/connect.php"); 
$username = 'admin123';
$pass = 'admin123';
$password = md5($pass);
	$loginquery ="INSERT INTO admin (username,password) values ('$username','$password')";
	$result=mysqli_query($db, $loginquery);
?>