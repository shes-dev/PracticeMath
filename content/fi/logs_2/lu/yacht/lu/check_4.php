<?php

// display errors
	error_reporting(E_ALL);
	ini_set('display_errors', 'On');

// setting encoding for Hebrew
	header("Content-Type: text/html; charset=UTF-8");
			
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
	
	for ($i=3;$i<count($h_1)-4;$i++)
	{
		if($i == count($h_1)-5)
		{
			$h_2[$i-2]="'".$h_1[$i]."'";
			break;
		}
		$h_2[$i-2]="'".$h_1[$i]."',";
	}
	
	$h_2[$r]="'".$tot."',";
	$h_3 = implode(" ",$h_2);
	
	for ($i=1;$i<count($row)-5;$i++)
	{
		if($i == count($row)-6)
		{
			//$p[$i]='"'.array_keys($row)[$i+1].'"';
			$p[$i]=array_keys($row)[$i+1];
			$g.="$p[$i]";
			
			break;
		}
		//$p[$i]='"'.array_keys($row)[$i+1].'"';
		$p[$i]=array_keys($row)[$i+1];
		$g.="$p[$i], ";
				
	}
	
	/*
		//$sql1="INSERT INTO Ie_comp (".$g.") VALUES (".$h_3.")";
		//$sql2="INSERT INTO Ie_comp (1) VALUES ('1')";
		//Debugging
		echo '<pre style="background:white;color:black;margin-top:3px;padding:5px;border:2px black solid;direction:ltr;">';
		echo '<h3 style="margin:0px auto;"><u>row:</u></h3>';
		var_dump($row);
		echo '<h3 style="margin:0px auto;"><u>tot:</u></h3>';
		var_dump($tot);
		echo '<h3 style="margin:0px auto;"><u>array p:</u></h3>';
		print_r($p);
		echo '<h3 style="margin:0px auto;"><u>g:</u></h3>';
		print_r($g);
		echo '<h3 style="margin:0px auto;"><u>h:</u></h3>';
		print_r($h);
		echo '<h3 style="margin:0px auto;"><u>h_1:</u></h3>';
		print_r($h_1);
		echo '<h3 style="margin:0px auto;"><u>h_2:</u></h3>';
		print_r($h_2);
		echo '<h3 style="margin:0px auto;"><u>h_3:</u></h3>';
		print_r($h_3);
		echo '<h3 style="margin:0px auto;"><u>sql1:</u></h3>';
		print_r($sql1);
		echo '<h3 style="margin:0px auto;"><u>sql2:</u></h3>';
		print_r($sql2);
		echo '<br><h3 style="margin:0px auto;"><u>row keys:</u></h3>';
		print_r(array_keys($row));
		echo '<br><h3 style="margin:0px auto;"><u>row keys length:</u></h3>';
		print_r(count($row));
		echo '</pre style="background:white;color:black;">';
	*/
	
	// Inserting data
	/*
	$p_1 = "טל_1";X
	$p_2 = "אביתר";X
	$p_3 = "גוני";X
	$p_4 = "עמית";X
	$p_5 = "שחר";X
	$p_6 = "עידו_1";X
	$p_7 = "עידו_2";X
	$p_8 = "אורן"--;
	$p_9 = "מעיין";X
	$p_10 = "ברק";X
	$p_11 = "יואב--";
	$p_12 = "מאיה";X
	$p_13 = "יונתן";X
	$p_14 = "דניאל--";
	$p_15 = "דודו";X
	$p_16 = "אייקי--";
	$p_17 = "דוגמה";X
	$p_18 = "בדיקה";
	$p_19 = "בדיקה_2--";
	
		
	$try_01=$row[$p_1];
	$try_02=$row[$p_2];
	$try_03=$row[$p_3];
	$try_04=$row[$p_4];
	$try_05=$row[$p_5];
	$try_06=$row[$p_6];
	$try_07=$row[$p_7];
	$try_08=$row[$p_8];
	$try_09=$row[$p_9];
	$try_10=$row[$p_10];
	$try_11=$row[$p_11];
	$try_12=$row[$p_12];
	$try_13=$row[$p_13];
	$try_14=$row[$p_14];
	$try_15=$row[$p_15];
	$try_16=$row[$p_16];
	$try_17=$row[$p_17];
	$try_18=$row[$p_18];
	$try_19=$row[$p_19];
	*/
	
	$sql1="INSERT INTO Ie_comp (".$g.") VALUES (".$h_3.")";
	//$sql1="INSERT INTO Ie_comp ($p_1) VALUES ('$tot')";
	$query = mysqli_query($con,$sql1);	
	
?>