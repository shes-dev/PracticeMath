<?php

// display errors
	error_reporting(E_ALL);
	ini_set('display_errors', 'On');

// setting encoding for Hebrew
	header("Content-Type: text/html; charset=UTF-8");
	
//Updating data
	$Stuff = mysqli_real_escape_string($con,$Order_By["stuff"]);
	
	$sql1="INSERT INTO Ie (Daily_EX_1,Daily_EX_2,Daily_EX_3,Daily_EX_4,Daily_EX_5,Daily_EX_6,Daily_EX_7,Daily_IN_1,Daily_IN_2,Daily_IN_3,Daily_IN_4,Daily_IN_5,Daily_IN_6,Daily_IN_7,IN_Prediction_1_1,IN_Prediction_1_2,IN_Prediction_1_3,IN_Prediction_1_4,IN_Prediction_1_5,IN_Prediction_1_6,IN_Prediction_1_7,dec_49_1,dec_49_2,dec_49_3,dec_49_4,dec_49_5,dec_49_6,dec_49_7,dec_50_1,dec_50_2,dec_50_3,dec_50_4, dec_50_5,dec_50_6,dec_50_7,dec_51_1,dec_51_2,dec_51_3,dec_51_4,dec_51_5,dec_51_6,dec_51_7,dec_52_1,dec_52_2,dec_52_3,dec_52_4,dec_52_5,dec_52_6,dec_52_7,jan_01_1,jan_01_2,jan_01_3,jan_01_4,jan_01_5,jan_01_6,jan_01_7,jan_02_1,jan_02_2,jan_02_3,jan_02_4, jan_02_5,jan_02_6,jan_02_7,jan_03_1,jan_03_2,jan_03_3,jan_03_4,jan_03_5,jan_03_6,jan_03_7,jan_04_1,jan_04_2,jan_04_3,jan_04_4,jan_04_5,jan_04_6,jan_04_7,feb_01_1,feb_01_2,feb_01_3,feb_01_4,feb_01_5,feb_01_6,feb_01_7,feb_02_1,feb_02_2,feb_02_3,feb_02_4, feb_02_5,feb_02_6,feb_02_7,feb_03_1,feb_03_2,feb_03_3,feb_03_4,feb_03_5,feb_03_6,feb_03_7,feb_04_1,feb_04_2,feb_04_3,feb_04_4,feb_04_5,feb_04_6,feb_04_7,Stuff) VALUES ('$Daily_EX_1','$Daily_EX_2','$Daily_EX_3','$Daily_EX_4','$Daily_EX_5','$Daily_EX_6','$Daily_EX_7','$Daily_IN_1','$Daily_IN_2','$Daily_IN_3','$Daily_IN_4','$Daily_IN_5','$Daily_IN_6','$Daily_IN_7','$IN_Prediction_1_1','$IN_Prediction_1_2','$IN_Prediction_1_3','$IN_Prediction_1_4','$IN_Prediction_1_5','$IN_Prediction_1_6','$IN_Prediction_1_7','$dec_49_1','$dec_49_2','$dec_49_3','$dec_49_4','$dec_49_5','$dec_49_6','$dec_49_7','$dec_50_1','$dec_50_2','$dec_50_3','$dec_50_4', '$dec_50_5','$dec_50_6','$dec_50_7','$dec_51_1','$dec_51_2','$dec_51_3','$dec_51_4','$dec_51_5','$dec_51_6','$dec_51_7','$dec_52_1','$dec_52_2','$dec_52_3','$dec_52_4','$dec_52_5','$dec_52_6','$dec_52_7','$jan_01_1','$jan_01_2','$jan_01_3','$jan_01_4','$jan_01_5','$jan_01_6','$jan_01_7','$jan_02_1','$jan_02_2','$jan_02_3','$jan_02_4', '$jan_02_5','$jan_02_6','$jan_02_7','$jan_03_1','$jan_03_2','$jan_03_3','$jan_03_4','$jan_03_5','$jan_03_6','$jan_03_7','$jan_04_1','$jan_04_2','$jan_04_3','$jan_04_4','$jan_04_5','$jan_04_6','$jan_04_7','$feb_01_1','$feb_01_2','$feb_01_3','$feb_01_4','$feb_01_5','$feb_01_6','$feb_01_7','$feb_02_1','$feb_02_2','$feb_02_3','$feb_02_4', '$feb_02_5','$feb_02_6','$feb_02_7','$feb_03_1','$feb_03_2','$feb_03_3','$feb_03_4','$feb_03_5','$feb_03_6','$feb_03_7','$feb_04_1','$feb_04_2','$feb_04_3','$feb_04_4','$feb_04_5','$feb_04_6','$feb_04_7','$Stuff')";
	$query = mysqli_query($con,$sql1);	

?>