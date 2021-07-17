<?php

// Start the session
session_start();

// display errors
//error_reporting(E_ALL);
//ini_set('display_errors', 'On');

// Vars
	$row_number = $_GET['ln'];
	$Yes_No = $_GET['yn'];
	$Subject = $_GET['sub'];
	
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

// Backuping
	$sql2="SELECT * FROM drills_status_tr ORDER BY id DESC LIMIT 1";
	$query = mysqli_query($con,$sql2); 
	$row = mysqli_fetch_array($query,MYSQLI_ASSOC);
		
	// setting new value
	//$row_number="s1_m2_tr_b1";
	$row[$row_number]=$Yes_No;
	
	/* Debugging
		echo '<pre>';
		var_dump($row);
		echo '</pre>';
		
		echo '<pre>';
		for ($i=1;$i<count($row);$i++)
		{
			var_dump(array_keys($row)[$i]);
		}
		echo '</pre>';
		
		$sql_multi='';
		$sql_multi_2='';
		$sql_multi_3='';
		
		echo '<pre>';
		for ($i=2;$i<count($row);$i++)
		{
			var_dump("update drills_status_tr set '".array_keys($row)[$i]."' = '".$row[array_keys($row)[$i]]."' where id = '".$row[array_keys($row)[0]]."'");
			$sql_multi .= "update `drills_status_tr` set `".array_keys($row)[$i]."` = '".$row[array_keys($row)[$i]]."' where `id` = ".$row[array_keys($row)[0]].";";
			if($i==count($row)-1)
			{	
				$sql_multi_2 .= "`".array_keys($row)[$i]."` ";
				$sql_multi_3 .= "".$row[array_keys($row)[$i]]."";
			}
			else
			{
				$sql_multi_2 .= "`".array_keys($row)[$i]."`, ";
				$sql_multi_3 .= "".$row[array_keys($row)[$i]].",";
			}
		}
		$sql_in = "INSERT INTO `drills_status_tr`(".$sql_multi_2.") VALUES (".$sql_multi_3.")";
		echo '</pre>';
		
		echo '<pre>';
		{
			var_dump($sql_multi_2);
			echo '<br>';
			var_dump($sql_multi_3);
			echo '<br>';
			var_dump($sql_in);
		}
		echo '</pre>';
	*/

// updating
	
	// prepating sql query

	$sql_multi='';
	$sql_multi_2='';
	$sql_multi_3='';
	
	// preparing insert statement
	for ($i=2;$i<count($row);$i++)
	{
		if($i==count($row)-1)
		{	
			$sql_multi_2 .= "`".array_keys($row)[$i]."` ";
			$sql_multi_3 .= "".$row[array_keys($row)[$i]]."";
		}
		else
		{
			$sql_multi_2 .= "`".array_keys($row)[$i]."`, ";
			$sql_multi_3 .= "".$row[array_keys($row)[$i]].",";
		}
	}
	
	// query
	$sql_in = "INSERT INTO `drills_status_tr`(".$sql_multi_2.") VALUES (".$sql_multi_3.")";
	$query = mysqli_query($con,$sql_in); 
	
	/* debugging
		echo '<pre>';
		var_dump($row);
		var_dump($con);
		echo '</pre>';
	*/

// Closing Connection
mysqli_close($con);


// Func Library
/* works - multiple queries	
	$sql_multi='';
	$sql_multi_2='';
	$sql_multi_3='';
	
	for ($i=2;$i<count($row);$i++)
	{
		//var_dump("update drills_status_tr set '".array_keys($row)[$i]."' = '".$row[array_keys($row)[$i]]."' where id = '".$row[array_keys($row)[0]]."'");
		//$sql_multi .= "update `drills_status_tr` set `".array_keys($row)[$i]."` = '".$row[array_keys($row)[$i]]."' where `id` = ".$row[array_keys($row)[0]].";";
	}
	
	echo '<pre>';
	var_dump($sql_multi);
	echo '</pre>';
	
	//$query = mysqli_multi_query($con,$sql_multi); 
*/	
?>
