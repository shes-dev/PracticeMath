<?php

// display errors
//	error_reporting(E_ALL);
//	ini_set('display_errors', 'On');
// setting encoding for Hebrew
	header("Content-Type: text/html; charset=UTF-8");
	//header("Content-Type: application/json; charset=UTF-8");

// declaring Variables
	//$Li_yn = $_POST['Y_n'];
	//$Li_yn_num = $_POST['Number_0'];
	
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
	
	$Top_3 = array();
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
	
//Sql
	//selecting most popular comment
		$sql1  ='SELECT * FROM table_li ORDER BY popularity DESC LIMIT 1';
		$query = mysqli_query($con,$sql1); 	
		
		while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC))
		{
			//echo '<'.$row['Type'].'>';
			$Top_3[0] = $row['content'];
		}
	
	//selecting agreed upon comment
		$sql1  ='SELECT * FROM table_li ORDER BY accordance DESC LIMIT 1';
		$query = mysqli_query($con,$sql1); 	
		
		while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC))
		{
			//echo '<'.$row['Type'].'>';
			$Top_3[1] = $row['content'];
		}
	
	//selecting least agreed upon comment
		$sql1  ='SELECT * FROM table_li ORDER BY accordance_minus DESC LIMIT 1';
		$query = mysqli_query($con,$sql1); 	
		
		while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC))
		{
			//echo '<'.$row['Type'].'>';
			$Top_3[2] = $row['content'];
		}	
	
			
		// if ($Li_yn == 'n')
			// {	
			// $sql1  ='UPDATE table_li SET accordance_minus = accordance_minus + 1 WHERE ID = '.$Li_yn_num.';';
			// $sql1 .='UPDATE table_li SET accordance_total = accordance_total - 1 WHERE ID = '.$Li_yn_num.';';
			// $sql1 .='UPDATE table_li SET popularity = popularity + 1 WHERE ID = '.$Li_yn_num.';';
			// $sql1 .='UPDATE table_li SET voted_y_n = voted_y_n + 1 WHERE ID = '.$Li_yn_num.';';
			// $sql1 .='UPDATE table_li SET voted_n = \'n\' WHERE ID = '.$Li_yn_num.';';
			// $sql1 .='UPDATE table_li SET voted = \'\' WHERE ID = '.$Li_yn_num.'';
		// }
		
	//debugging
	/*
		echo '<pre style="background:white;color:black;margin-top:3px;text-align:center;border:2px black solid;">';
		echo '<h3 style="margin:0px auto;"><u>Accordance li sql:</u></h3>';
		var_dump($sql1);
		echo '</pre>';
	*/
	
	//debugging
	/*
		echo '<pre style="background:white;color:black;margin-top:3px;text-align:center;border:2px black solid;">';
		echo '<h3 style="margin:0px auto;"><u>Top 3:</u></h3>';
		var_dump($Top_3);
		echo '</pre>';
	*/
//Extracting data
	
	//**echo '<ol id="comments_list" style="margin-top:0px;">';
	/*
	//working
		$query = mysqli_query($con,$sql1); 
		$query = mysqli_query($con,$sql2); 
		$query = mysqli_query($con,$sql3); 
		$query = mysqli_query($con,$sql4); 
	*/
	
	//mysqli_multi_query($con,$sql1);
	
/*
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
*/

echo json_encode($Top_3);
?>