<?php
//$_SESSION['mapZoomArea'] = (isset($_POST['mapza']) ? $_POST['mapza'] : "";
//echo $_POST['mapza_2'];

// Setting encoding for Hebrew
	header("Content-Type: text/html; charset=UTF-8");
	//header("Content-Type: application/json; charset=UTF-8");

// display errors
//	error_reporting(E_ALL);
//	ini_set('display_errors', 'On');
	
// Declaring Variables
	//$mapza = $_GET['mapza'];
		
// Connecting

	// Data
	$host = 'localhost';
	$username = 'elad189g_ex_1';
	$password = '1qq2ww3ee4rr';
	$db = 'elad189g_ex_comments';
	
	// Create Connection
	$con = mysqli_connect($host, $username, $password,$db);
	
	// Check Connection
	if($con)
	{
		//echo '<i class="fa fa-check-square-o" style="font-size:24px;color:purple;"></i>';
		echo 'connection ok ';
	}
	else
	{
		die('Could not connect: ' . mysqli_error($con));
	}
		
	// Selecting Database
	//mysql_select_db("elad189g_ex_comments"); 
	
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
//echo '<ol id="comments_list_db" style="margin-top:0px;">';
echo 'hi';
//Extracting data
$sql1="select * from page_1 order by id asc";
$query = mysqli_query($con,$sql1); 
$i=0;

while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC))
{
echo 'hi2';}
	//echo '$i';
	//if ($i==0)
	//{
	//	echo 'hi3';
		/*if ($row['Type']=='li')
		{
		echo '<'.$row['Type'].' id="nextuntil_example_start">';
		echo $row['Content'].', ';
		echo $row['Date'];
		echo '</'.$row['Type'].'>';
		}
		
		if ($row['Type']=='a')
		{
		echo '<'.$row['Type'].' id="nextuntil_example_start_a">';
		echo $row['Content'];
		echo '</'.$row['Type'].'>';
		$i=1;
		}*/
		
	//}
	/*
	if ($i==1&&$row['Type']=='a')
	{
		$i=2;
		continue;
	}
	
	if ($i==2)
	{
		if ($row['Type']=='li')
		{
		echo '<'.$row['Type'].'>';
		echo $row['Content'].', ';
		echo $row['Date'];
		echo '</'.$row['Type'].'>';
		}
				
		if ($row['Type']=='a')
		{
		echo '<'.$row['Type'].'>';
		echo $row['Content'];
		echo '</'.$row['Type'].'>';
		}*/
		/*$a=$row['Content'];
		echo "<a href=$a>".$row['email']."</a>";
		echo '</td><td>';
		echo "<img src=".$row['email']." width='50%'>"; 
		echo '</td></tr>';*/
	//}
//}

//echo '</ol>';
?>