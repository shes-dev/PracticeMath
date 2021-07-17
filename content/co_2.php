<?php

// Start the session
session_start();

// display errors
//error_reporting(E_ALL);
//ini_set('display_errors', 'On');

// Declaring Variables
	$Line_Number = $_GET['ln'];
	$Yes_No = $_GET['yn'];
	$Subject = $_GET['sub'];
	
	$Line_Number_Old = $Line_Number;
	
	if($Subject == "All")
	{
		$index_in_table = 0;	
		$Line_Number = $Line_Number + $index_in_table;
	}
	
	if($Subject == "Algebra")
	{
		$index_in_table = 0;	
		$Line_Number = $Line_Number + $index_in_table;
	}
	
	if($Subject == "Series")
	{
		$index_in_table = 33;	
		$Line_Number = $Line_Number + $index_in_table - 1;
	}
	
	if($Subject == "Probability")
	{
		$index_in_table = 48;	
		$Line_Number = $Line_Number + $index_in_table - 1;
	}
	//Debugging
	//echo 'index_in_table:'.$index_in_table.'<br>';
	//echo 'Line number Old:'.$Line_Number_Old.'<br>';
	//echo 'Line number:'.$Line_Number.'<br>';
	
	//Debugging
	//echo '<p> Ln ='.$Line_Number.'</p><br>';
	//echo '<p> Yn ='.$Yes_No.'</p>';

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
	if($con){
		//echo 'connection ok';
		//echo '<i class="fa fa-check-square-o" style="font-size:24px;"></i>';
		}
	else {
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

//getting data from oxygen.php
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
		$str[]=$i+1;
		$str[]=$rows[$i][0];
	}
		
	$str_2='';
	for ($i=0;$i<count($rows);$i++)
	{
		$str_2.= $i+1;
		$str_2.= $rows[$i][0];
	}
	//Debugging
	//echo '<pre>';
	//print_r($str);
	//echo '</pre>';

// Database
	//$sql2="insert into drills_status (linenumber,checked) values ('$line','$checked')";
	
	//echo $place_in_str;
	if ($Line_Number_Old<10)
	{
		$place_in_str = 2*$Line_Number_Old-1;
		//echo 'place_in_str:'.$place_in_str.'<br>';
		if($str[$place_in_str] == "y"  && $Yes_No == "yes")
		{
			echo '<i class="fa fa-check-square-o" style="font-size:24px;"></i>'; 
		}
		if($str[$place_in_str] == "n"  && $Yes_No == "no")
		{
			echo '-'; 
		}
		if($str[$place_in_str] == "n"  && $Yes_No == "yes")
		{
			$sql2="update drills_status set checked = 'y' where id = '".$Line_Number."'";
			$query = mysqli_query($con,$sql2); 
			echo '<i class="fa fa-check-square-o" style="font-size:24px;"></i>';
		}
		if($str[$place_in_str] == "y"  && $Yes_No == "no")
		{
			$sql2="update drills_status set checked = 'n' where id = '".$Line_Number."'";
			$query = mysqli_query($con,$sql2); 
			echo '-';
		}
	}
	
	if ($Line_Number_Old>9)
	{
		$place_in_str = 2*$Line_Number_Old-1;
		//echo 'place_in_str:'.$place_in_str.'<br>';
		if($str[$place_in_str] == "y"  && $Yes_No == "yes")
		{
			echo '<i class="fa fa-check-square-o" style="font-size:24px;"></i>'; 
		}
		if($str[$place_in_str] == "n"  && $Yes_No == "no")
		{
			echo '-'; 
		}
		if($str[$place_in_str] == "n"  && $Yes_No == "yes")
		{
			$sql2="update drills_status set checked = 'y' where id = '".$Line_Number."'";
			$query = mysqli_query($con,$sql2); 
			echo '<i class="fa fa-check-square-o" style="font-size:24px;"></i>';
		}
		if($str[$place_in_str] == "y"  && $Yes_No == "no")
		{
			$sql2="update drills_status set checked = 'n' where id = '".$Line_Number."'";
			$query = mysqli_query($con,$sql2); 
			echo '-';
		}
	}

// Closing Connection
mysqli_close($con);
?>
