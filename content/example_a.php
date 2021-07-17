<?php

// display errors
//	error_reporting(E_ALL);
//	ini_set('display_errors', 'On');
// setting encoding for Hebrew
	header("Content-Type: text/html; charset=UTF-8");
	//header("Content-Type: application/json; charset=UTF-8");

// declaring Variables
	$Li_Number = $_POST['li_num'];
	$Li_Number_All = $_POST['li_num_a'];
	
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
	$username = 'elad189g_ex_1';
	$password = '1qq2ww3ee4rr';
	$db = 'elad189g_ex_comments';
	
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
	mysqli_select_db($con, "elad189g_ex_comments"); 
	
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
	if ($Li_Number_All == 'a')
	{
	$sql1='SELECT * FROM table_a ORDER BY Date DESC';
	}
	if ($Li_Number_All == 'n')
	{
	$sql1='SELECT * FROM table_a WHERE Belongsto = '.$Li_Number.' ORDER BY Date DESC';
	}
	echo '<pre style="background:white;color:black;padding:0;">';
	echo '<h3 style="margin-bottom:0;"><u>a:</u></h3>';
	echo '<h3 style="margin-bottom:0;"><u>sql:</u></h3>';
	var_dump($sql1);
	echo '</pre style="background:white;color:black;">';

//Extracting data
	
	echo '<ol id="comments_list_a" style="margin-top:0px;">';
	$query = mysqli_query($con,$sql1); 
	$i=1;
	$a=0;

while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC))
{
	if ($row['Type']=='a')
		{
			echo '<li>';
			//echo '<'.$row['Type'].'>';
			echo $row['Content'].'<br>';
			echo $row['Date'];
			//echo '</'.$row['Type'].'>';
			//echo '<i id="plus_'.$i.'" class="fa fa-plus-square-o square-plus"></i> <i id="check_circle_'.$i.'" class="fa fa-check-circle check-circle"></i> <i id="times_circle_'.$i.'" class="fa fa-times-circle times-circle"></i> <i id="toggle_down_'.$i.'" class="fa fa-toggle-down"></i>';
			echo '</li>';
			$i++;
		}
}

echo '</ol>';
?>