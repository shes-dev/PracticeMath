<?php

// display errors
	error_reporting(E_ALL);
	ini_set('display_errors', 'On');

// setting encoding for Hebrew
	header("Content-Type: text/html; charset=UTF-8");
	
// Declaring Variables
	$Order_By = json_decode($_POST['Y_n'],true);
	$Daily_EX_1 = $Order_By["daily_expense_1"];
	$Daily_EX_2 = $Order_By["daily_expense_2"];
	$Daily_EX_3 = $Order_By["daily_expense_3"];
	$Daily_EX_4 = $Order_By["daily_expense_4"];
	$Daily_EX_5 = $Order_By["daily_expense_5"];
	$Daily_EX_6 = $Order_By["daily_expense_6"];
	$Daily_EX_7 = $Order_By["daily_expense_7"];
	
	$Daily_IN_1 = $Order_By["daily_income_1"];
	$Daily_IN_2 = $Order_By["daily_income_2"];
	$Daily_IN_3 = $Order_By["daily_income_3"];
	$Daily_IN_4 = $Order_By["daily_income_4"];
	$Daily_IN_5 = $Order_By["daily_income_5"];
	$Daily_IN_6 = $Order_By["daily_income_6"];
	$Daily_IN_7 = $Order_By["daily_income_7"];
	
	$IN_Prediction_1_1 = $Order_By["income_prediction_1_1"];
	$IN_Prediction_1_2 = $Order_By["income_prediction_1_2"];
	$IN_Prediction_1_3 = $Order_By["income_prediction_1_3"];
	$IN_Prediction_1_4 = $Order_By["income_prediction_1_4"];
	$IN_Prediction_1_5 = $Order_By["income_prediction_1_5"];
	$IN_Prediction_1_6 = $Order_By["income_prediction_1_6"];
	$IN_Prediction_1_7 = $Order_By["income_prediction_1_7"];
	
	$dec_49_1 = $Order_By["dec_49_1"];
	$dec_49_2 = $Order_By["dec_49_2"];
	$dec_49_3 = $Order_By["dec_49_3"];
	$dec_49_4 = $Order_By["dec_49_4"];
	$dec_49_5 = $Order_By["dec_49_5"];
	$dec_49_6 = $Order_By["dec_49_6"];
	$dec_49_7 = $Order_By["dec_49_7"];
	
	$dec_50_1 = $Order_By["dec_50_1"];
	$dec_50_2 = $Order_By["dec_50_2"];
	$dec_50_3 = $Order_By["dec_50_3"];
	$dec_50_4 = $Order_By["dec_50_4"];
	$dec_50_5 = $Order_By["dec_50_5"];
	$dec_50_6 = $Order_By["dec_50_6"];
	$dec_50_7 = $Order_By["dec_50_7"];
	
	$dec_51_1 = $Order_By["dec_51_1"];
	$dec_51_2 = $Order_By["dec_51_2"];
	$dec_51_3 = $Order_By["dec_51_3"];
	$dec_51_4 = $Order_By["dec_51_4"];
	$dec_51_5 = $Order_By["dec_51_5"];
	$dec_51_6 = $Order_By["dec_51_6"];
	$dec_51_7 = $Order_By["dec_51_7"];
	
	$dec_52_1 = $Order_By["dec_52_1"];
	$dec_52_2 = $Order_By["dec_52_2"];
	$dec_52_3 = $Order_By["dec_52_3"];
	$dec_52_4 = $Order_By["dec_52_4"];
	$dec_52_5 = $Order_By["dec_52_5"];
	$dec_52_6 = $Order_By["dec_52_6"];
	$dec_52_7 = $Order_By["dec_52_7"];
	
	$tot = $Order_By["tot"];
	
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
	
	//Updating data
	$Stuff = mysqli_real_escape_string($con,$Order_By["stuff"]);
	
	$sql1="INSERT INTO Ie (Daily_EX_1,Daily_EX_2,Daily_EX_3,Daily_EX_4,Daily_EX_5,Daily_EX_6,Daily_EX_7,Daily_IN_1,Daily_IN_2,Daily_IN_3,Daily_IN_4,Daily_IN_5,Daily_IN_6,Daily_IN_7,IN_Prediction_1_1,IN_Prediction_1_2,IN_Prediction_1_3,IN_Prediction_1_4,IN_Prediction_1_5,IN_Prediction_1_6,IN_Prediction_1_7,dec_49_1,dec_49_2,dec_49_3,dec_49_4,dec_49_5,dec_49_6,dec_49_7,dec_50_1,dec_50_2,dec_50_3,dec_50_4, dec_50_5,dec_50_6,dec_50_7,dec_51_1,dec_51_2,dec_51_3,dec_51_4,dec_51_5,dec_51_6,dec_51_7,dec_52_1,dec_52_2,dec_52_3,dec_52_4,dec_52_5,dec_52_6,dec_52_7,Stuff) VALUES ('$Daily_EX_1','$Daily_EX_2','$Daily_EX_3','$Daily_EX_4','$Daily_EX_5','$Daily_EX_6','$Daily_EX_7','$Daily_IN_1','$Daily_IN_2','$Daily_IN_3','$Daily_IN_4','$Daily_IN_5','$Daily_IN_6','$Daily_IN_7','$IN_Prediction_1_1','$IN_Prediction_1_2','$IN_Prediction_1_3','$IN_Prediction_1_4','$IN_Prediction_1_5','$IN_Prediction_1_6','$IN_Prediction_1_7','$dec_49_1','$dec_49_2','$dec_49_3','$dec_49_4','$dec_49_5','$dec_49_6','$dec_49_7','$dec_50_1','$dec_50_2','$dec_50_3','$dec_50_4', '$dec_50_5','$dec_50_6','$dec_50_7','$dec_51_1','$dec_51_2','$dec_51_3','$dec_51_4','$dec_51_5','$dec_51_6','$dec_51_7','$dec_52_1','$dec_52_2','$dec_52_3','$dec_52_4','$dec_52_5','$dec_52_6','$dec_52_7','$Stuff')";
	$query = mysqli_query($con,$sql1);	
	
	
	/* Debugging
	echo '<pre style="background:white;color:black;margin-top:3px;padding:5px;border:2px black solid;direction:ltr;">';
	echo '<h3 style="margin:0px auto;"><u>Order by:</u></h3>';
	//var_dump($Order_By["daily_expense_1"]);
	var_dump($Order_By);
	echo '</pre style="background:white;color:black;">';
	*/
	$r=2;
	
	include '../yacht/check_4.php';
			
	include '../yacht/check_5.php';
	//echo json_encode($row["דוגמה"]);
	
?>