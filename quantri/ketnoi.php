<?php
	$dbHost = 'localhost';
	$dbUsername = 'root';
	$dbPassword = '';

	$conn = mysqli_connect($dbHost,$dbUsername,$dbPassword);
	$dbSelect = mysqli_select_db('vietproshop',$conn);
	$setLang = mysqli_query("SET NAMES 'utf8'");

?>