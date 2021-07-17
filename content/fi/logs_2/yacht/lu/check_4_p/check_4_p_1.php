<?php

// display errors
	error_reporting(E_ALL);
	ini_set('display_errors', 'On');

// setting encoding for Hebrew
	header("Content-Type: text/html; charset=UTF-8");
			
	// data
	$host = 'localhost';
	$username = 'elad189g_ex_comp';
	$password = 'Italy2015';
	$db = 'elad189g_ex_comp';
	
	// creating Connection
	$con = mysqli_connect($host, $username, $password,$db);
	
	// Selecting Database
	mysqli_select_db($con, "elad189g_ex_comp"); 
	
	// Enabling Hebrew
	mysqli_query($con,"SET character_set_client=utf8");
	mysqli_query($con,"SET character_set_connection=utf8");
	mysqli_query($con,"SET character_set_database=utf8");
	mysqli_query($con,"SET character_set_results=utf8");
	mysqli_query($con,"SET character_set_server=utf8");
	
	// Setting Time	
	$sql_Time = "SET time_zone = '+03:00';";
    $query = mysqli_query($con,$sql_Time);
	
	// Backuping Data
	$sql1="SELECT * FROM Ie_comp_p ORDER BY ID DESC LIMIT 1";
	$query = mysqli_query($con,$sql1);	
	$row = mysqli_fetch_array($query,MYSQLI_ASSOC);
	
	$p = array();
	$g = "";
		
	$h = implode(" ",$row);
	$h_1 = explode(" ",$h);
	
	for ($i=3;$i<count($h_1)-0;$i++)
	{
		if($i == count($h_1)-1)
		{
			$h_2[$i-2]="'".$h_1[$i]."'";
			break;
		}
		$h_2[$i-2]="'".$h_1[$i]."',";
	}
	
	$h_2[$r]="'".$tot."',";
	$h_3 = implode(" ",$h_2);
	
	for ($i=1;$i<count($row)-1;$i++)
	{
		if($i == count($row)-2)
		{
			//$p[$i]='"'.array_keys($row)[$i+1].'"';
			$p[$i]=array_keys($row)[$i+1];
			$g.="$p[$i]";
			
			break;
		}
		
		$p[$i]=array_keys($row)[$i+1];
		$g.="$p[$i], ";
				
	}
		
	$sql1="INSERT INTO Ie_comp_p (".$g.") VALUES (".$h_3.")";
	$query = mysqli_query($con,$sql1);	
	
?>