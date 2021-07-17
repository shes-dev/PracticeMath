<?php

// display errors
//	error_reporting(E_ALL);
//	ini_set('display_errors', 'On');
// setting encoding for Hebrew
	header("Content-Type: text/html; charset=UTF-8");
	//header("Content-Type: application/json; charset=UTF-8");

// declaring Variables
	$Line_Number = $_POST['line_number'];
		
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
	echo '<ol id="comments_list_co" style="margin-top:0px;">';

//Extracting data
	$sql1='SELECT * FROM table_1 WHERE Type ="co" ORDER BY ID ASC';
	$query = mysqli_query($con,$sql1); 
	$i=0;
	$a=0;

while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC))
{
	if ($i<4)
	{
		if ($i==3)
		{
			$a=1;
			$i++;
		}
		if ($a==0)
		{
			echo '<li class="first_3_co first_10_co">';
			echo $row['Content'].'<br>';
			echo $row['Date'];
			echo '</li>';
			$i++;
		}
	}
		
	if ($i>3&&$i<12)
	{
		$a=0;
		if ($i==11)
		{
			$a=1;
			$i++;
		}
		if ($a==0)
		{
			echo '<li class="first_10_co">';
			echo $row['Content'].'<br>';
			echo $row['Date'];
			echo '</li>';
			$i++;
		}
	}
	
	if($i>11)
	{
		echo '<li>';
		echo $row['Content'].'<br>';
		echo $row['Date'];
		echo '</li>';
		$i++;
	}
}

echo '</ol>';
?>