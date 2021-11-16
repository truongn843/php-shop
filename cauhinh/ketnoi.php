<?php
	$dbHost = 'localhost';
	$dbUsername = 'root';
	$dbPassword = '';

	$conn = mysqli_connect($dbHost,$dbUsername,$dbPassword);
	$dbSelect = mysqli_select_db($conn,'assigment_web_db');
	$setLang = mysqli_query($conn, "SET NAMES 'utf8'");

?>