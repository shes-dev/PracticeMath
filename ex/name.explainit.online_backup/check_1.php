<?php
session_start();
// display errors
	error_reporting(E_ALL);
	ini_set('display_errors', 'On');
// setting encoding for Hebrew
	header("Content-Type: text/html; charset=UTF-8");

	include 'check_12.php';
//Querie	
	$sql1='SELECT * FROM Ie ORDER BY ID DESC LIMIT 1';
	$query = mysqli_query($con,$sql1);	
			
	include '../yacht/check_7.php';
				
?>