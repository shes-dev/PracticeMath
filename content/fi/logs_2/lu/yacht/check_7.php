<?php

// display errors
	error_reporting(E_ALL);
	ini_set('display_errors', 'On');

// setting encoding for Hebrew
	header("Content-Type: text/html; charset=UTF-8");
			
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
	$rows.= '"dec_52_7":"'  . $row["dec_52_7"] . '",';
			
	$rows.= '"jan_01_1":"'  . $row["jan_01_1"] . '",';
	$rows.= '"jan_01_2":"'  . $row["jan_01_2"] . '",';
	$rows.= '"jan_01_3":"'  . $row["jan_01_3"] . '",';
	$rows.= '"jan_01_4":"'  . $row["jan_01_4"] . '",';
	$rows.= '"jan_01_5":"'  . $row["jan_01_5"] . '",';
	$rows.= '"jan_01_6":"'  . $row["jan_01_6"] . '",';
	$rows.= '"jan_01_7":"'  . $row["jan_01_7"] . '",';
	
	$rows.= '"jan_02_1":"'  . $row["jan_02_1"] . '",';
	$rows.= '"jan_02_2":"'  . $row["jan_02_2"] . '",';
	$rows.= '"jan_02_3":"'  . $row["jan_02_3"] . '",';
	$rows.= '"jan_02_4":"'  . $row["jan_02_4"] . '",';
	$rows.= '"jan_02_5":"'  . $row["jan_02_5"] . '",';
	$rows.= '"jan_02_6":"'  . $row["jan_02_6"] . '",';
	$rows.= '"jan_02_7":"'  . $row["jan_02_7"] . '",';
	
	$rows.= '"jan_03_1":"'  . $row["jan_03_1"] . '",';
	$rows.= '"jan_03_2":"'  . $row["jan_03_2"] . '",';
	$rows.= '"jan_03_3":"'  . $row["jan_03_3"] . '",';
	$rows.= '"jan_03_4":"'  . $row["jan_03_4"] . '",';
	$rows.= '"jan_03_5":"'  . $row["jan_03_5"] . '",';
	$rows.= '"jan_03_6":"'  . $row["jan_03_6"] . '",';
	$rows.= '"jan_03_7":"'  . $row["jan_03_7"] . '",';
	
	$rows.= '"jan_04_1":"'  . $row["jan_04_1"] . '",';
	$rows.= '"jan_04_2":"'  . $row["jan_04_2"] . '",';
	$rows.= '"jan_04_3":"'  . $row["jan_04_3"] . '",';
	$rows.= '"jan_04_4":"'  . $row["jan_04_4"] . '",';
	$rows.= '"jan_04_5":"'  . $row["jan_04_5"] . '",';
	$rows.= '"jan_04_6":"'  . $row["jan_04_6"] . '",';
	$rows.= '"jan_04_7":"'  . $row["jan_04_7"] . '",';
	
	$rows.= '"feb_01_1":"'  . $row["feb_01_1"] . '",';
	$rows.= '"feb_01_2":"'  . $row["feb_01_2"] . '",';
	$rows.= '"feb_01_3":"'  . $row["feb_01_3"] . '",';
	$rows.= '"feb_01_4":"'  . $row["feb_01_4"] . '",';
	$rows.= '"feb_01_5":"'  . $row["feb_01_5"] . '",';
	$rows.= '"feb_01_6":"'  . $row["feb_01_6"] . '",';
	$rows.= '"feb_01_7":"'  . $row["feb_01_7"] . '",';
	
	$rows.= '"feb_02_1":"'  . $row["feb_02_1"] . '",';
	$rows.= '"feb_02_2":"'  . $row["feb_02_2"] . '",';
	$rows.= '"feb_02_3":"'  . $row["feb_02_3"] . '",';
	$rows.= '"feb_02_4":"'  . $row["feb_02_4"] . '",';
	$rows.= '"feb_02_5":"'  . $row["feb_02_5"] . '",';
	$rows.= '"feb_02_6":"'  . $row["feb_02_6"] . '",';
	$rows.= '"feb_02_7":"'  . $row["feb_02_7"] . '",';
	
	$rows.= '"feb_03_1":"'  . $row["feb_03_1"] . '",';
	$rows.= '"feb_03_2":"'  . $row["feb_03_2"] . '",';
	$rows.= '"feb_03_3":"'  . $row["feb_03_3"] . '",';
	$rows.= '"feb_03_4":"'  . $row["feb_03_4"] . '",';
	$rows.= '"feb_03_5":"'  . $row["feb_03_5"] . '",';
	$rows.= '"feb_03_6":"'  . $row["feb_03_6"] . '",';
	$rows.= '"feb_03_7":"'  . $row["feb_03_7"] . '",';
	
	$rows.= '"feb_04_1":"'  . $row["feb_04_1"] . '",';
	$rows.= '"feb_04_2":"'  . $row["feb_04_2"] . '",';
	$rows.= '"feb_04_3":"'  . $row["feb_04_3"] . '",';
	$rows.= '"feb_04_4":"'  . $row["feb_04_4"] . '",';
	$rows.= '"feb_04_5":"'  . $row["feb_04_5"] . '",';
	$rows.= '"feb_04_6":"'  . $row["feb_04_6"] . '",';
	$rows.= '"feb_04_7":"'  . $row["feb_04_7"] . '"}';
	
	
}

$rows ='{"records":['.$rows.']}';	

echo ($rows);

?>