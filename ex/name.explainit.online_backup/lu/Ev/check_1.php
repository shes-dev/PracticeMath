<?php

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
	// data
	$host = 'localhost';
	$username = 'elad189g_ex_evyatar';
	$password = 'Mexico1786';
	$db = 'elad189g_ex_evyatar';
	
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
	mysqli_select_db($con, "elad189g_ex_evyatar"); 
	
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
	
	$sql1='SELECT * FROM Ie ORDER BY ID DESC LIMIT 1';
	$query = mysqli_query($con,$sql1);	
	
	/*
	echo '<pre style="background:white;color:black;margin-top:3px;text-align:center;border:2px black solid;">';
	echo '<h3 style="margin:0px auto;"><u>sql:</u></h3>';
	var_dump($sql1);
	echo '</pre style="background:white;color:black;">';
	*/
	
//Extracting data
	
$rows = "";
//echo '<br>rows array created:'.$rows;
while ($row = mysqli_fetch_array($query,MYSQLI_ASSOC)) 
{
	
	$rows.= '{"Daily_IN_1":"'  . $row["Daily_IN_1"] . '",';
	$rows.= '"Daily_IN_2":"'  . $row["Daily_IN_2"] . '",';
	$rows.= '"Daily_IN_3":"'  . $row["Daily_IN_3"] . '",';
	$rows.= '"Daily_IN_4":"'  . $row["Daily_IN_4"] . '",';
	$rows.= '"Daily_IN_5":"'  . $row["Daily_IN_5"] . '",';
	$rows.= '"Daily_IN_6":"'  . $row["Daily_IN_6"] . '",';
	$rows.= '"Daily_IN_7":"'  . $row["Daily_IN_7"] . '",';
	
	$rows.= '"Daily_EX_1":"'  . $row["Daily_EX_1"] . '",';
	$rows.= '"Daily_EX_2":"'  . $row["Daily_EX_2"] . '",';
	$rows.= '"Daily_EX_3":"'  . $row["Daily_EX_3"] . '",';
	$rows.= '"Daily_EX_4":"'  . $row["Daily_EX_4"] . '",';
	$rows.= '"Daily_EX_5":"'  . $row["Daily_EX_5"] . '",';
	$rows.= '"Daily_EX_6":"'  . $row["Daily_EX_6"] . '",';
	$rows.= '"Daily_EX_7":"'  . $row["Daily_EX_7"] . '",';
	
	$rows.= '"IN_Prediction_1_1":"'  . $row["IN_Prediction_1_1"] . '",';
	$rows.= '"IN_Prediction_1_2":"'  . $row["IN_Prediction_1_2"] . '",';
	$rows.= '"IN_Prediction_1_3":"'  . $row["IN_Prediction_1_3"] . '",';
	$rows.= '"IN_Prediction_1_4":"'  . $row["IN_Prediction_1_4"] . '",';
	$rows.= '"IN_Prediction_1_5":"'  . $row["IN_Prediction_1_5"] . '",';
	$rows.= '"IN_Prediction_1_6":"'  . $row["IN_Prediction_1_6"] . '",';
	$rows.= '"IN_Prediction_1_7":"'  . $row["IN_Prediction_1_7"] . '",';
	
	$rows.= '"dec_49_1":"'  . $row["dec_49_1"] . '",';
	$rows.= '"dec_49_2":"'  . $row["dec_49_2"] . '",';
	$rows.= '"dec_49_3":"'  . $row["dec_49_3"] . '",';
	$rows.= '"dec_49_4":"'  . $row["dec_49_4"] . '",';
	$rows.= '"dec_49_5":"'  . $row["dec_49_5"] . '",';
	$rows.= '"dec_49_6":"'  . $row["dec_49_6"] . '",';
	$rows.= '"dec_49_7":"'  . $row["dec_49_7"] . '",';
	
	$rows.= '"dec_50_1":"'  . $row["dec_50_1"] . '",';
	$rows.= '"dec_50_2":"'  . $row["dec_50_2"] . '",';
	$rows.= '"dec_50_3":"'  . $row["dec_50_3"] . '",';
	$rows.= '"dec_50_4":"'  . $row["dec_50_4"] . '",';
	$rows.= '"dec_50_5":"'  . $row["dec_50_5"] . '",';
	$rows.= '"dec_50_6":"'  . $row["dec_50_6"] . '",';
	$rows.= '"dec_50_7":"'  . $row["dec_50_7"] . '",';
	
	$rows.= '"dec_51_1":"'  . $row["dec_51_1"] . '",';
	$rows.= '"dec_51_2":"'  . $row["dec_51_2"] . '",';
	$rows.= '"dec_51_3":"'  . $row["dec_51_3"] . '",';
	$rows.= '"dec_51_4":"'  . $row["dec_51_4"] . '",';
	$rows.= '"dec_51_5":"'  . $row["dec_51_5"] . '",';
	$rows.= '"dec_51_6":"'  . $row["dec_51_6"] . '",';
	$rows.= '"dec_51_7":"'  . $row["dec_51_7"] . '",';
	
	$rows.= '"dec_52_1":"'  . $row["dec_52_1"] . '",';
	$rows.= '"dec_52_2":"'  . $row["dec_52_2"] . '",';
	$rows.= '"dec_52_3":"'  . $row["dec_52_3"] . '",';
	$rows.= '"dec_52_4":"'  . $row["dec_52_4"] . '",';
	$rows.= '"dec_52_5":"'  . $row["dec_52_5"] . '",';
	$rows.= '"dec_52_6":"'  . $row["dec_52_6"] . '",';
	$rows.= '"dec_52_7":"'  . $row["dec_52_7"] . '"}';
	
	
}

$rows ='{"records":['.$rows.']}';	

echo ($rows);

	/*	
	echo '<pre style="background:white;color:black;margin-top:3px;padding:8px;border:2px black solid;">';
	echo '<h3 style="margin:0px auto;"><u>rows array:</u></h3>';
	var_dump($rows);
	echo '</pre style="background:white;color:black;">';
	*/
	/*		
	echo '<pre style="background:white;color:black;margin-top:3px;padding:8px;border:2px black solid;">';
	echo '<h3 style="margin:0px auto;"><u>rows[0]["TIME"]:</u></h3>';
	var_dump($rows[0]["TIME"]);
	echo '</pre style="background:white;color:black;">';
	*/
	//echo json_encode($rows);
			
?>