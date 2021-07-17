<?php

// display errors
//	error_reporting(E_ALL);
//	ini_set('display_errors', 'On');

// setting encoding for Hebrew
	header("Content-Type: text/html; charset=UTF-8");
			
	// Retreiving Data
	$sql1="SELECT * FROM Ie_comp_p ORDER BY ID DESC LIMIT 1";
	$query = mysqli_query($con,$sql1);	
	$row_1 = mysqli_fetch_array($query,MYSQLI_ASSOC);
	
	$row_2=array();
	$row_2["1"] = $row;
	$row_2["2"] = $row_1;
	echo json_encode($row_2);
	
?>