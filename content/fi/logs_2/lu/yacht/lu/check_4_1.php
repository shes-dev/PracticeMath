<?php

// display errors
	error_reporting(E_ALL);
	ini_set('display_errors', 'On');

// setting encoding for Hebrew
	header("Content-Type: text/html; charset=UTF-8");

// SSL
if($_SERVER["HTTPS"] != "on")
{
    header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
    exit();
}			

// Functions

function find_r($p,$u)
{
	$k = array_search($u, $p);
	$i=$k+3;
	return $i;	
}
	// data
	$host = 'localhost';
	$username = 'elad189g_ex_comp';
	$password = 'Italy2015';
	$db = 'elad189g_ex_comp';
	
	// creating Connection
	$con = mysqli_connect($host, $username, $password,$db);
	
	// Selecting Database
	mysqli_select_db($con, "elad189g_ex_comp"); 
	
	// Enabling Hebrew
	mysqli_query($con,"SET character_set_client=utf8");
	mysqli_query($con,"SET character_set_connection=utf8");
	mysqli_query($con,"SET character_set_database=utf8");
	mysqli_query($con,"SET character_set_results=utf8");
	mysqli_query($con,"SET character_set_server=utf8");
	
	// Setting Time	
	$sql_Time = "SET time_zone = '+03:00';";
    $query = mysqli_query($con,$sql_Time);
	
	// Backuping Data
	$sql1="SELECT * FROM Ie_comp ORDER BY ID DESC LIMIT 1";
	$query = mysqli_query($con,$sql1);	
	$row = mysqli_fetch_array($query,MYSQLI_ASSOC);
	
	$p = array();
	$g = "";
		
	$h = implode(" ",$row);
	$h_1 = explode(" ",$h);
	
	//creating the column names array before string
	for ($i=1;$i<count($row)-1;$i++)
	{
		if($i == count($row)-2)
		{
			//$p[$i]='"'.array_keys($row)[$i+1].'"';
			$p[$i]=array_keys($row)[$i+1];
			$g.="$p[$i]";
			
			break;
		}
		
		$p[$i]=array_keys($row)[$i+1];
		//creating the column names string
		$g.="$p[$i], ";
				
	}
	
	//finding r
	//$u=$_SESSION['u_n'];
	$u='אמית';
	$r=find_r($p,$u);
	//$r=2;
	//$tot=30000;
	
	//creating the values array before string
	for ($i=3;$i<count($h_1)-0;$i++)
	{
		if($i == count($h_1)-1)
		{
			$h_2[$i-2]="'".$h_1[$i]."'";
			break;
		}
		$h_2[$i-2]="'".$h_1[$i]."',";
	}
			
	//making the specific update
	//no coma added for last place
	if($r==count($h_2))
	{
		$h_2[$r]="'".$tot."'";
	}
	else
	{
		$h_2[$r]="'".$tot."',";
	}
	//creating the values string
	$h_3 = implode(" ",$h_2);
	
	//debugging	
/*	echo '<pre>';
	echo '<h3>h:</h3>';
	var_dump($h);
	echo '<h3>h_1:</h3>';
	var_dump($h_1);
	echo '<h3>h_2:</h3>';
	var_dump($h_2);
	echo '<h3>h_3:</h3>';
	var_dump($h_3);
	echo '<h3>p:</h3>';
	var_dump($p);
	echo '<h3>g:</h3>';
	var_dump($g);
	echo '<h3>r:</h3>';
	var_dump($r);
	echo '</pre>';
*/	
	//$sql1="INSERT INTO Ie_comp (".$g.") VALUES (".$h_3.")";
	//$query = mysqli_query($con,$sql1);	
	
?>