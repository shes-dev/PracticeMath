<?php

// display errors
	error_reporting(E_ALL);
	ini_set('display_errors', 'On');

// setting encoding for Hebrew
	header("Content-Type: text/html; charset=UTF-8");
			
// connecting
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
		
$h = implode(" ",$row);// turning row to string
$h_1 = explode(" ",$h);// turning string to array with numbers
	
// creating array of former values
	for ($i=3;$i<count($h_1);$i++)
	{
		if($i == count($h_1)-1)
		{
			$h_2[$i-2]="'".$h_1[$i]."'";
			break;
		}
		$h_2[$i-2]="'".$h_1[$i]."',";
	}

// creating string of former values	
$h_2_1 = implode(" ",$h_2);

// setting local values - Debugging
//$r = 22;
//$tot = 2000;

// updating new value	
	if ($r == count($h_2))
	{
		$h_2[$r]="'".$tot."'";
	}
	else
	{
		$h_2[$r]="'".$tot."',";
	}

// creating string of new values
$h_3 = implode(" ",$h_2);

// creating string of column names
for ($i=1;$i<count($row)-1;$i++)
{
	if($i == count($row)-2)
	{
		//$p[$i]='"'.array_keys($row)[$i+1].'"';
		$p[$i]=strval(array_keys($row)[$i+1]);
		$g.="`$p[$i]`";
		
		break;
	}
	
	$p[$i]=strval(array_keys($row)[$i+1]);
	$g.="`$p[$i]`, ";
			
}
		
$sql1="INSERT INTO Ie_comp (".$g.") VALUES (".$h_3.")";
$query = mysqli_query($con,$sql1);	

	// Debugging
/*	echo '<pre>';
	var_dump($row);
	echo '<br>';
	var_dump($h);
	echo '<br>';
	var_dump($h_1);
	echo '<br>';
	echo '<h4>array of former values:</h4>';
	var_dump($h_2);
	echo '<h4>string of former values:</h4>';
	var_dump($h_2_1);
	echo '<h4>string of new values:</h4>';
	var_dump($h_3);
	echo '<h4>array of column names:</h4>';
	var_dump($p);
	echo '<h4>string of column names:</h4>';
	var_dump($g);
	echo '<h4>sql query:</h4>';
	var_dump($sql1);
	echo '<h4>con:</h4>';
	var_dump($con);
	echo '</pre>';
*/
?>