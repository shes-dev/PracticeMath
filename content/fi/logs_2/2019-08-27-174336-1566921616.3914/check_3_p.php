<?php
session_start();
// display errors
	error_reporting(E_ALL);
	ini_set('display_errors', 'On');
// setting encoding for Hebrew
	header("Content-Type: text/html; charset=UTF-8");
	//header("Content-Type: application/json; charset=UTF-8");

// declaring Variables
	//$Li_Number = $_POST['li_num'];
	//$Li_Number_All = $_POST['li_num_a'];
	
	//$Order_By = json_decode($_POST['obj_2'],true);
	//$Order_By = json_decode($_POST['obj_2'],true);
	
	//$Line_Number = 1;
	/*$Order_By = '{
					"type": "donut",
					"name": "Cake",
					"toppings": [
						{ "id": "5002", "type": "Glazed" },
						{ "id": "5006", "type": "Chocolate with Sprinkles" },
						{ "id": "5004", "type": "Maple" }
					]
				}';
	$yummy = json_decode($Order_By);
	*/
// connecting
	
	include 'check_11.php';
	
	// creating Connection
	$con = mysqli_connect($host, $username, $password,$db);
	
	// checking Connection
	if($con)
	{
		//echo '<i class="fa fa-check-square-o" style="font-size:24px;color:purple;"></i>';
		//echo 'connection ok';
	}
	else
	{
		die('Could not connect: ' . mysqli_error($con));
	}
		
	// Selecting Database
	mysqli_select_db($con, $db); 
	
	// Enabling Hebrew
	mysqli_query($con,"SET character_set_client=utf8");
	mysqli_query($con,"SET character_set_connection=utf8");
	mysqli_query($con,"SET character_set_database=utf8");
	mysqli_query($con,"SET character_set_results=utf8");
	mysqli_query($con,"SET character_set_server=utf8");
	
	// Setting Time	
	$sql_Time = "SET time_zone = '+03:00';";
    $query = mysqli_query($con,$sql_Time);
	
// Connecting End
	
	$sql1='SELECT * FROM Ie_p ORDER BY ID DESC LIMIT 1';
	$query = mysqli_query($con,$sql1);	
	$row = mysqli_fetch_array($query,MYSQLI_ASSOC);
	/*
		echo '<pre style="background:white;color:black;margin-top:3px;text-align:left;direction:ltr;padding:3px;border:2px black solid;">';
		echo '<h3 style="margin:0px auto;"><u>json_encode($row):</u></h3>';
		echo json_encode($row);
		echo '<h3 style="margin:0px auto;"><u>sql:</u></h3>';
		var_dump($sql1);
		echo '<h3 style="margin:0px auto;"><u>query:</u></h3>';
		var_dump($query);
		echo '<h3 style="margin:0px auto;"><u>row:</u></h3>';
		var_dump($row);
		echo '</pre style="background:white;color:black;">';
	*/
	echo json_encode($row);
	
?>