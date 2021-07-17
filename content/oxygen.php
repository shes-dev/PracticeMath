<?php

// Start the session
session_start();

// display errors
//error_reporting(E_ALL);
//ini_set('display_errors', 'On');

// Declaring Variables
	$Subject = $_GET['ln'];

// Connecting

	// Setting encoding for Hebrew
	header('Content-Type: text/html; charset=utf-8');
	
	// Data
	$host = 'localhost';
	$username = 'elad189g_math_user_1';
	$password = 'mathpa55w0rd';
	$db = 'elad189g_math_1';
	
	// Create Connection
	$con = mysqli_connect($host, $username, $password,$db);
	
	// Check Connection
	if($con)
	{
		//echo '<i class="fa fa-check-square-o" style="font-size:24px;color:purple;"></i>';
	}
	else
	{
		die('Could not connect: ' . mysqli_error($con));
	}
		
	// Selecting Database
	mysqli_select_db($con,"elad189g_math_l"); 
	
	// Enabling Hebrew
	mysqli_query($con,"SET character_set_client=utf8");
	mysqli_query($con,"SET character_set_connection=utf8");
	mysqli_query($con,"SET character_set_database=utf8");
	mysqli_query($con,"SET character_set_results=utf8");
	mysqli_query($con,"SET character_set_server=utf8");
	
	// Setting Time	
	$sql_Time = "SET time_zone = '+02:00';";
    $query = mysqli_query($con,$sql_Time);
	
// Connecting End

// Database
	//getting data
	//$sql2="insert into drills_status (linenumber,checked) values ('$line','$checked')";
	if ($Subject == "All")
	{
	$sql1="select checked from drills_status";
	$query = mysqli_query($con,$sql1); 	
	}
	else
	{
	$sql1="select checked from drills_status WHERE Subject LIKE '".$Subject."'";
	$query = mysqli_query($con,$sql1); 
	}
	// preparing data to send back to ajax
	$rows = array();
	while ($row = mysqli_fetch_array($query,MYSQLI_NUM)) 
	{
		$rows[] = $row;
	}
		
	$str = array();
	for ($i=0;$i<count($rows);$i++)
	{
		$str[]=$rows[$i][0];
	}
		
	$str_2='';
	for ($i=0;$i<count($rows);$i++)
	{
		$str_2.= $i+1;
		$str_2.= $rows[$i][0];
	}
	
	print_r($str_2);
	
		
// Closing Connection
mysqli_close($con);
/*
// remove all session variables
session_unset(); 

// destroy the session 
session_destroy(); 
*/
?>
