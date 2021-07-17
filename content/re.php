<?php
// Start the session
session_start();

// display errors
//error_reporting(E_ALL);
//ini_set('display_errors', 'On');

// Setting encoding for Hebrew
	header("Content-Type: text/html; charset=UTF-8");

// Declaring Variables
	$obj = json_decode($_GET["ln"], true);
		
// Connecting

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
	$obj_1 = (array)$obj;
	
	// loop for primary subjects
		for($a=0;$a<count($obj[0]);$a++)
		{
			$heading = "P";
			$heading_1 = $a+1;
			$heading .= $heading_1;
			
			$Subject = $obj[0][$heading];
			
			$sql1="select checked from drills_status WHERE Subject LIKE '".$Subject."'";
			$query = mysqli_query($con,$sql1); 
			
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
			
			// variables before for loop
			$y_count = 0;
					
			for ($i=0;$i<count($rows);$i++)
			{
				if($str[$i]== "y")
				{
					$y_count++;
				}
			}	
			
			if($y_count == count($rows))
			{
				$obj_1[0][$heading] = 'y';
			}
			
			else
			{
				$obj_1[0][$heading] = 'n';
			}
		}
	
		// loop for secondary subjects
		$b=count($obj[1])/2;
		
		for($a=0;$a<$b;$a++)
		{
							
			$heading_P = "P";
			$heading_S = "S";
			$heading_1 = $a+1;
			
			$heading_P .= $heading_1;
			$heading_S .= $heading_1;
			
			$Subject = $obj[1][$heading_P];
			$SubSubject = $obj[1][$heading_S];
			
			$sql1="select checked from drills_status WHERE Subject LIKE '".$Subject."' and Subsubject LIKE '".$SubSubject."'";
			$query = mysqli_query($con,$sql1); 
			
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
			// variables before for loop
			$y_count = 0;
					
			for ($i=0;$i<count($rows);$i++)
			{
				
				if($str[$i]== "y")
				{
					$y_count++;
				}
			}
			
			if($y_count == count($rows))
			{
				//echo '<br>success';
				$obj_1[1][$heading_S] = 'y';
				$obj_1[1][$heading_P] = 'c';
			}
			
			else
			{
				$obj_1[1][$heading_S] = 'n';
				$obj_1[1][$heading_P] = 'c';
			}
		}

// Echoing
echo json_encode($obj_1);
// Closing Connection
mysqli_close($con);
?>
