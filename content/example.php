<?php

// display errors
//	error_reporting(E_ALL);
//	ini_set('display_errors', 'On');
// setting encoding for Hebrew
	header("Content-Type: text/html; charset=UTF-8");
	//header("Content-Type: application/json; charset=UTF-8");

// declaring Variables
	$Line_Number = $_POST['kind'];
	$num = $Line_Number;
	//$Order_By = json_decode($_POST['obj_2'],true);
	$Order_By = json_decode($_POST['obj_2'],true);
	
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

// Inserting data with variables
	/*$user = $_POST["username1"];
	$pass = $_POST["password1"];
	$email = $_POST["email1"];
	$sql2="insert into mytable2 (username,password,email) values ('$user','$pass','$email')";
	$query = mysqli_query($con,$sql2); 
	if ($query){ 
	 echo '<br>'.'data inserted successfully';
	}
	*/
//Creating table
	//Debgging
	/*
	echo '<pre style="background:white;color:black;">';
	echo '<h3 style="margin-bottom:0;"><u>Line Number</u></h3>';
	var_dump($Line_Number);
	echo '<h3 style="margin-bottom:0;"><u>Number</u></h3>';
	var_dump($num);
	echo '<h3 style="margin-bottom:0;"><u>Order by</u></h3>';
	var_dump($Order_By);
	echo '<h3 style="margin-bottom:0;"><u>keys</u></h3>';
	print_r(array_keys($Order_By));
	echo '</pre>';
	*/
	
	//checking if first, second and third arrays are empty
	//**echo '<pre style="background:white;color:black;">';
	//**echo '<h3 style="margin-bottom:0;"><u>first array empty?</u></h3>';
	
	if(empty($Order_By['first']))
	{
		//first array empty
		//**echo 'yes';
		$sql1='SELECT * FROM table_li ORDER BY voted_y_n ASC LIMIT '.$num.'';
	}
	else //first array not empty
	{
		//**echo 'no';
				
		//values
		$first = $Order_By[array_keys($Order_By)[0]];
		$first_key = array_keys($Order_By['first'])[0]; 
		$first_value = $first[array_keys($first)[0]]; 
		$first_a_d = '';
		
		//date	
		if($first_value == 'Newest')
		{
			$first_a_d = 'DESC';
		}
		if($first_value == 'Oldest')
		{
			$first_a_d = 'ASC';
		}
		
		//popularity
		if($first_value == 'Most Popular')
		{
			$first_a_d = 'DESC';
		}
		if($first_value == 'Least Popular')
		{
			$first_a_d = 'ASC';
		}
		//accordance
		if($first_value == 'Most Agreed Upon')
		{
			$first_a_d = 'DESC';
		}
		if($first_value == 'Least Agreed Upon')
		{
			$first_a_d = 'ASC';
		}
				
		//key values
		//**echo '<h3 style="margin-bottom:0;"><u>first key:</u></h3>';
		//**print_r($first_key);
				
		//**echo '<h3 style="margin-bottom:0;"><u>first value:</u></h3>';
		//**echo $first_value;
		
		//**echo '<h3 style="margin-bottom:0;"><u>first a d:</u></h3>';
		//**echo $first_a_d;
		
		//**echo '<h3 style="margin-bottom:0;"><u>second array empty?</u></h3>';
		if(empty($Order_By['second']))
		{
			//1 full
			//**echo 'yes';
						
			//date	
			if($first_value == 'Newest')
			{
				$sql1='SELECT * FROM table_li ORDER BY '.$first_key.' DESC LIMIT '.$num.'';
			}
			if($first_value == 'Oldest')
			{
				$sql1='SELECT * FROM table_li ORDER BY '.$first_key.' ASC LIMIT '.$num.'';			
			}
			
			//popularity
			if($first_value == 'Most Popular')
			{
				$sql1='SELECT * FROM table_li ORDER BY '.$first_key.' DESC LIMIT '.$num.'';		
			}
			if($first_value == 'Least Popular')
			{
				$sql1='SELECT * FROM table_li ORDER BY '.$first_key.' ASC LIMIT '.$num.'';			
			}
			//accordance
			if($first_value == 'Most Agreed Upon')
			{
				$sql1='SELECT * FROM table_li ORDER BY '.$first_key.' DESC LIMIT '.$num.'';		
			}
			if($first_value == 'Least Agreed Upon')
			{
				$sql1='SELECT * FROM table_li ORDER BY '.$first_key.' ASC LIMIT '.$num.'';			
			}
		}
		else
		{
			//values
			$second = $Order_By[array_keys($Order_By)[1]];
			$second_key = array_keys($Order_By['second'])[0]; 
			$second_value = $second[array_keys($second)[0]]; 
			$second_a_d = ''; 
			
			//date	
			if($second_value == 'Newest')
			{
				$second_a_d = 'DESC';
			}
			if($second_value == 'Oldest')
			{
				$second_a_d = 'ASC';
			}
			
			//popularity
			if($second_value == 'Most Popular')
			{
				$second_a_d = 'DESC';
			}
			if($second_value == 'Least Popular')
			{
				$second_a_d = 'ASC';
			}
			//accordance
			if($second_value == 'Most Agreed Upon')
			{
				$second_a_d = 'DESC';
			}
			if($second_value == 'Least Agreed Upon')
			{
				$second_a_d = 'ASC';
			}
			//**echo 'no';
		
			//key values
			//**echo '<h3 style="margin-bottom:0;"><u>second key:</u></h3>';
			//**print_r($second_key);
							
			//**echo '<h3 style="margin-bottom:0;"><u>second value:</u></h3>';
			//**echo $second_value;
			
			//**echo '<h3 style="margin-bottom:0;"><u>second a d:</u></h3>';
			//**echo $second_a_d;
			
			//**echo '<h3 style="margin-bottom:0;"><u>third array empty?</u></h3>';
			if(empty($Order_By['third']))
			{	
				//**{
					//**echo 'yes';
				//**}
				
				//1,2 full
				
				$sql1='SELECT * FROM table_li ORDER BY '.$first_key.' '.$first_a_d.', '.$second_key.' '.$second_a_d.' LIMIT '.$num.'';		
			}
			else 
			{
				// all full
				
				//values
				$third = $Order_By[array_keys($Order_By)[2]];
				$third_key = array_keys($Order_By['third'])[0];
				$third_value = $third[array_keys($third)[0]]; 
				$third_a_d = ''; 
				
				//date	
				if($third_value == 'Newest')
			 	{
					$third_a_d = 'DESC';
				}
				if($third_value == 'Oldest')
				{
					$third_a_d = 'ASC';
				}
				
				//popularity
				if($third_value == 'Most Popular')
				{
					$third_a_d = 'DESC';
				}
				if($third_value == 'Least Popular')
				{
					$third_a_d = 'ASC';
				}
				//accordance
				if($third_value == 'Most Agreed Upon')
				{
					$third_a_d = 'DESC';
				}
				if($third_value == 'Least Agreed Upon')
				{
					$third_a_d = 'ASC';
				}
				
				//**echo 'no';
	
				//key values
				//**echo '<h3 style="margin-bottom:0;"><u>third key:</u></h3>';
				//**print_r($third_key);
								
				//**echo '<h3 style="margin-bottom:0;"><u>third value:</u></h3>';
				//**echo $third_value;				
				
				//**echo '<h3 style="margin-bottom:0;"><u>third a d:</u></h3>';
				//**echo $third_a_d;				
			
				$sql1='SELECT * FROM table_li ORDER BY '.$first_key.' '.$first_a_d.', '.$second_key.' '.$second_a_d.', '.$third_key.' '.$third_a_d.' LIMIT '.$num.''	;
			}
		}
	}
	
	//**echo '</pre>';
	
	//debugging
	/*
		echo '<pre style="background:white;color:black;margin-top:3px;text-align:center;border:2px black solid;">';
		echo '<h3 style="margin:0;"><u>sql:</u></h3>';
		var_dump($sql1);
		echo '</pre style="background:white;color:black;">';
	*/
	
//Extracting data
	
	echo '<ol id="comments_list" style="margin-top:6px;">';
	$query = mysqli_query($con,$sql1); 
	$i=1;
	$a=0;

while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC))
{
	if ($row['Type']=='li')
		{
			echo '<b><'.$row['Type'].' class="first_3 first_10 li_'.$i.'" id="'.$row['Type'].'_'.$row['ID'].'">';
			echo $row['content'].'</b><br>';
			echo $row['date'];
			echo '</'.$row['Type'].'>';
			//echo '<i id="plus_'.$i.'" class="fa fa-plus-square-o square-plus"></i> <i id="check_circle_'.$i.'" class="fa fa-check-circle check-circle"></i> <i id="times_circle_'.$i.'" class="fa fa-times-circle times-circle"></i> <i id="toggle_down_'.$i.'" class="fa fa-toggle-down"></i>';
			echo '<i id="check_circle_'.$row['ID'].'" class="fa fa-check-circle check-circle_li v_'.$row['voted'].'" style="font-size:24px;"></i> <i style="vertical-align:text-bottom;color:#4CAF50;position:relative;bottom:3px;"><b> '.$row['accordance'].'</b></i> <i id="times_circle_'.$row['ID'].'" class="fa fa-times-circle times-circle_li v_'.$row['voted_n'].'" style="font-size:24px;"></i> <i style="vertical-align:text-bottom;color:#f44336;position:relative;bottom:3px;"><b> '.$row['accordance_minus'].'</b></i>';
			$i++;
		}
}

/*
// values
	$i=0;
	$a=0;

// former while row content

	if ($i<4)
	{
		if ($row['Type']=='li'&&$i==3)
		{
			$a=1;
			$i++;
		}
		if ($row['Type']=='li'&&$a==0)
		{
			echo '<'.$row['Type'].' class="first_3 first_10 li_'.$i.'">';
			echo $row['Content'].', ';
			echo $row['Date'];
			echo '</'.$row['Type'].'>';
			echo '<i id="plus_'.$i.'" class="fa fa-plus-square-o square-plus"></i> <i id="check_circle_'.$i.'" class="fa fa-check-circle check-circle"></i> <i id="times_circle_'.$i.'" class="fa fa-times-circle times-circle"></i> <i id="toggle_down_'.$i.'" class="fa fa-toggle-down"></i>';
			$i++;
		}
			
		if ($row['Type']=='a')
		{
			$i_1 = $i-1;
			echo '<'.$row['Type'].' class="first_3 first_10 li_a_'.$i_1.'" href='.$row['Content'].'>';
			echo $row['Content'];
			echo '</'.$row['Type'].'>';
		}
	}
		
	if ($i>3&&$i<12)
	{
		$a=0;
		if ($row['Type']=='li'&&$i==11)
		{
			$a=1;
			$i++;
		}
		if ($row['Type']=='li'&&$a==0)
		{
			echo '<'.$row['Type'].' class="first_10 li_'.$i.'">';
			echo $row['Content'].', ';
			echo $row['Date'];
			echo '</'.$row['Type'].'>';
			echo '<i id="plus_'.$i.'" class="fa fa-plus-square-o square-plus"></i> <i id="check_circle_'.$i.'" class="fa fa-check-circle check-circle"></i> <i id="times_circle_'.$i.'" class="fa fa-times-circle times-circle"></i> <i id="toggle_down_'.$i.'" class="fa fa-toggle-down"></i>';
			$i++;
		}
			
		if ($row['Type']=='a')
		{
			$i_1 = $i-1;
			echo '<'.$row['Type'].' class="first_10 li_a_'.$i_1.'" href='.$row['Content'].'>';
			echo $row['Content'];
			echo '</'.$row['Type'].'>';
		}
	}
	
	if($i>11)
	{
		if ($row['Type']=='li')
		{
		$i_1 = $i-1;
		echo '<'.$row['Type'].' class="li_'.$i_1.'">';
		echo $row['Content'].', ';
		echo $row['Date'];
		echo '</'.$row['Type'].'>';
		echo '<i id="plus_'.$i_1.'" class="fa fa-plus-square-o square-plus"></i> <i id="check_circle_'.$i_1.'" class="fa fa-check-circle check-circle"></i> <i id="times_circle_'.$i_1.'" class="fa fa-times-circle times-circle"></i> <i id="toggle_down_'.$i_1.'" class="fa fa-toggle-down"></i>';
		$i++;
		}
				
		if ($row['Type']=='a')
		{
		$i_1 = $i-2;
		echo '<'.$row['Type'].' class="li_a_'.$i_1.'" href='.$row['Content'].'>';
		echo $row['Content'];
		echo '</'.$row['Type'].'>';
		}
	}
*/
echo '</ol>';
?>