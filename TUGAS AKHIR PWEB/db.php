<?php 
	$hostname = 'localhost';
	$username = 'root';
	$password = 'Reyyy12345!';
	$dbname   = 'db_bukawarung';

	$conn = mysqli_connect($hostname, $username, $password, $dbname) or die ('Gagal terhubung ke database');
?>