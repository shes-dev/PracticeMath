<?php

// display errors
//	error_reporting(E_ALL);
//	ini_set('display_errors', 'On');

// setting encoding for Hebrew
	header("Content-Type: text/html; charset=UTF-8");

// vars
	$r_flag = 0;
	
// Funcs
	// Openning near txt file	
		function getnearfile()
		{
			//$myfile = fopen("../2018-02-26-171427-1519658167.4218/check_13.txt", "r") or die("Unable to open file!");
			$myfile = fopen("check_13.txt", "r") or die("Unable to open file!");
			
			//$l=file_get_contents("../2018-02-26-171427-1519658167.4218/check_13.txt");
			$l=file_get_contents("check_13.txt");
			
			fclose($myfile);
			
			return $l;
		}
	
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
$sql1="SELECT * FROM Ie_comp_p ORDER BY ID DESC LIMIT 1";
$query = mysqli_query($con,$sql1);	
$row = mysqli_fetch_array($query,MYSQLI_ASSOC);
	
$p = array();
$g = "";
		
$h = implode(" ",$row);// turning row to string
$h_1 = explode(" ",$h);// turning string to array with numbers

// Columns	
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

// Former values
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
	

// Getting current column name
	//$v=getnearfile();
	$v=$_SESSION['timestamp'];
	$counter = count($p)+1;
	
	for ($i=1;$i<$counter;$i++)
	{
		if ( $v == $p[$i] )
		{
			$r = $i;
			$r_flag = 1;
			break;
		}	
	}

// Values
		
	// updating new value only if column name is valid	
		if ($r_flag == 1)//found column
		{
			if(isset($tot))// tot not set, maintaining current value
			{
				// found column and tot is set, updating
				if ($r == count($h_2))
				{
					$h_2[$r]="'".$tot."'";
				}
				else
				{
					$h_2[$r]="'".$tot."',";
				}
			}
		}
	
	// creating string of new values
	$h_3 = implode(" ",$h_2);
	
// Inserting
$sql1="INSERT INTO Ie_comp_p (".$g.") VALUES (".$h_3.")";
$query = mysqli_query($con,$sql1);	

// updating Ie_comp_today_p
$sql1="INSERT INTO `Ie_comp_today_p`(`UPDATED`) VALUES ('".$v."')";
$query = mysqli_query($con,$sql1);

// Debugging
/*	echo '<pre>';
	echo 'SELECT * FROM Ie_comp ORDER BY ID DESC LIMIT 1:';
	echo '<br>';
	echo '<br>';
	var_dump($row);
	echo '<br>';
	echo '<br>';
	echo 'turning row values to string:';
	echo '<br>';
	echo '<br>';
	var_dump($h);
	echo '<br>';
	echo 'row as array of former values:';
	echo '<br>';
	echo '<br>';
	var_dump($h_1);
	echo '<br>';
	echo '<br>';
	echo 'array of former values:';
	echo '<br>';
	echo '<br>';
	var_dump($h_2);
	echo '<br>';
	echo '<br>';
	echo 'string of former values:';
	echo '<br>';
	echo '<br>';
	var_dump($h_2_1);
	echo '<br>';
	echo '<br>';
	echo 'string of new values:';
	echo '<br>';
	echo '<br>';
	var_dump($h_3);
	echo '<br>';
	echo '<br>';
	echo 'array of column names:';
	echo '<br>';
	echo '<br>';
	var_dump($p);
	echo '<br>';
	echo '<br>';
	echo 'string of column names:';
	echo '<br>';
	echo '<br>';
	var_dump($g);
	echo '<br>';
	echo '<br>';
	echo 'place in column names:';
	echo '<br>';
	echo '<br>';
	var_dump($r);
	echo '<br>';
	echo '<br>';
	echo 'sql query:';
	echo '<br>';
	echo '<br>';
	var_dump($sql1);
	echo '<br>';
	echo '<br>';
	echo 'con:';
	echo '<br>';
	echo '<br>';
	var_dump($con);
	echo '</pre>';
*/
?>