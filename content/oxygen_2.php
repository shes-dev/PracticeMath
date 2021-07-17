<?php
// srcs 
	// sql update
	// https://www.w3schools.com/sql/sql_update.asp
	// js page change delay
	// http://stackoverflow.com/questions/14955526/php-delay-on-redirect/14955790#14955790
	// select column mysql
	// https://dev.mysql.com/doc/refman/5.7/en/selecting-columns.html
	// php5 sessions
	// https://www.w3schools.com/php/php_sessions.asp
	// array in php sesions
	// http://stackoverflow.com/questions/2306159/array-as-session-variable
	// https://web.archive.org/web/20080707052007/http://www.phpriot.com/articles/intro-php-sessions/7
	// string length in php
	// http://php.net/manual/en/function.strlen.php
	// create array from mysql column
	// http://stackoverflow.com/questions/1538229/create-php-array-from-mysql-column
	
// Start the session
session_start();

// Declaring Variables
	//$Line_Number = $_GET['ln'];
	//$Yes_No = $_GET['yn'];
	
// Connecting

	// Setting encoding for Hebrew
	header('Content-Type: text/html; charset=utf-8');
	
	// Data
	$host = 'localhost';
	$username = 'elad189g_math_user_1';
	$password = 'mathpa55w0rd';
	$db = 'elad189g_math_1';
	
	// Create Connection
	$con = mysqli_connect($host, $username, $password,$db);
	
	// Check Connection
	if($con)
	{
		//echo '<i class="fa fa-check-square-o" style="font-size:24px;color:purple;"></i>';
	}
	else
	{
		die('Could not connect: ' . mysqli_error($con));
	}
		
	// Selecting Database
	mysql_select_db("elad189g_math_l"); 
	
	// Enabling Hebrew
	mysql_query("SET character_set_client=utf8");
	mysql_query("SET character_set_connection=utf8");
	mysql_query("SET character_set_database=utf8");
	mysql_query("SET character_set_results=utf8");
	mysql_query("SET character_set_server=utf8");
	
	// Setting Time	
	$sql_Time = "SET time_zone = '+02:00';";
    $query = mysqli_query($con,$sql_Time);
	
// Connecting End

// Database
	//$sql2="insert into drills_status (linenumber,checked) values ('$line','$checked')";
	$sql1="select checked from drills_status";
	$query = mysqli_query($con,$sql1); 
		
// preparing data to send back to ajax
	$rows = array();
	while ($row = mysqli_fetch_array($query,MYSQLI_NUM)) 
	{
		$rows[] = $row;
	}
	echo '<pre>';
	print_r($rows);
	echo '</pre>';
	
	$str = array();
	for ($i=0;$i<count($rows);$i++)
	{
		$str[]=$rows[$i][0];
		print_r($rows[$i][0]);
		print_r("\n");
	}
	echo '<pre>';
	print_r($str);
	echo '</pre>';
	
	define("str_2",string);
	for ($i=0;$i<count($rows);$i++)
	{
		$str_2.= $i+1;
		$str_2.= $rows[$i][0];
		print_r($rows[$i][0]);
		print_r("\n");
	}
	echo '<pre>';
	print_r($str_2);
	echo '</pre>';
	
	/*for ($i=0;$i<count($str);$i++)
	{
		print_r("str:");
		print_r($str[$i]);
		
	}*/
	
	
	//echo '</pre>';
	/*for (i=0;i<strlen($row);i++)
	{
		$str = $str + $row[i];
	}*/
// Closing Connection
mysqli_close($con);
/*
// remove all session variables
session_unset(); 

// destroy the session 
session_destroy(); 
*/
?>
