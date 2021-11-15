<?php
	$dbHost = 'localhost';
	$dbUsername = 'root';
	$dbPassword = '';

	$conn = mysqli_connect($dbHost,$dbUsername,$dbPassword);
	$dbSelect = mysqli_select_db($conn,'vietproshop');
	$setLang = mysqli_query($conn, "SET NAMES 'utf8'");

?>