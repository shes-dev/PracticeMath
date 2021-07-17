<?php

// display errors
//	error_reporting(E_ALL);
//	ini_set('display_errors', 'On');
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
	
// Connecting End
	
	// Getting Keys
	$sql1="SELECT * FROM Ie_comp_data ORDER BY ID DESC LIMIT 1";
	$query = mysqli_query($con,$sql1);
	$row_4 = mysqli_fetch_array($query,MYSQLI_NUM);
	
	// Debugging
	echo '<pre>';
	echo '<h4>row_4:</h4>';
	var_dump($row_4);
	echo '</pre>';
	
	// Getting values
	$sql1="SELECT * FROM Ie_comp ORDER BY ID DESC LIMIT 1";
	$query = mysqli_query($con,$sql1);	
	$row = mysqli_fetch_array($query,MYSQLI_NUM);
	
	// putting together keys and values
	$new_row = array();
	
	for ($i=2;$i<count($row_4);$i++)
	{
		if ($row[$i] < 1)
		{
			$a = '0';	
		}
		else
		{
			$a = $row[$i];
		}
		$new_row[$row_4[$i]] = $a; 
	}
// Debugging
		echo '<pre style="background:white;color:black;margin-top:3px;text-align:left;direction:ltr;padding:3px;border:2px black solid;">';
		echo '<h3 style="margin:0px auto;"><u>row:</u></h3>';
		var_dump($row);
		echo '<h3 style="margin:0px auto;"><u>new_row:</u></h3>';
		var_dump($new_row);
		echo '<h3 style="margin:0px auto;"><u>i:</u></h3>';
		var_dump($i);
		echo '<h3 style="margin:0px auto;"><u>count row_4:</u></h3>';
		var_dump(count($row_4));
		echo '<h3 style="margin:0px auto;"><u>count row:</u></h3>';
		var_dump(count($row));
		echo '<h3 style="margin:0px auto;"><u>count new_row:</u></h3>';
		var_dump(count($new_row));
		echo '<h3 style="margin:0px auto;"><u>json_encode($row):</u></h3>';
		echo json_encode($new_row);
		echo '</pre style="background:white;color:black;">';
	
	echo json_encode($new_row);
	
?>