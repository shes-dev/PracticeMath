<?php

// display errors
//	error_reporting(E_ALL);
//	ini_set('display_errors', 'On');
// setting encoding for Hebrew
	header("Content-Type: text/html; charset=UTF-8");
	//header("Content-Type: application/json; charset=UTF-8");

// declaring Variables
	//$Data_type = $_POST['d_type'];
	//$Data_content = $_POST['d_content'];
	$Data_type = $_GET['d_type'];
	$Data_content = $_GET['d_content'];
	
	echo '<p>Type: '.$Data_type.'</p>';
	echo '<p>Content: '.$Data_content.'</p>';
	
//chekcing data
	function check_a($var_1,$var_2)
	{
	//settings variables
		$Data_type_1 = $var_1;
		$Data_content_1 = $var_2;
				
	//Debugging
		echo 'hi';
		echo '<p>Data Type_1: '.$Data_type_1.'</p>';
		echo '<p>Data Content_1: '.$Data_content_1.'</p>';
		
	//getting content letters into array
		if ($Data_type_1 == 'a')
		{
		//Debugging
			echo '<p>hi from if</p>';
			echo '<p>Data_content_1[0]: '.$Data_content_1[0].'</p>';
			echo '<p>Data_content_1[1]: '.$Data_content_1[1].'</p>';
			echo '<p>Data_content_1[2]: '.$Data_content_1[2].'</p>';
			echo '<p>Data_content_1[3]: '.$Data_content_1[3].'</p>';
			//exit("That's not a valid link");
			echo '<p>hi from after exit</p>';
		}
		else
		{
			return $Data_content_1;
		}
		//checking beginning
		if ($Data_content_1[0]=='h'&&
			$Data_content_1[1]=='t'&&
			$Data_content_1[2]=='t'&&
			$Data_content_1[3]=='p')
		{
			echo '<p>beginning is good</p>';
		}
			
		else
		{
			exit("failed beginning test");
		}
			
		//checking continues
		if ($Data_content_1[4]=='s')
		{
			if($Data_content_1[5]==':'&&
			   $Data_content_1[6]=='/'&&
			   $Data_content_1[7]=='/')
			{
				echo '<p>continued test ok</p>';
			}
			else
			{
				exit("failed continued test");
			}
		}
		else
		{
			if ($Data_content_1[4]==':')
			{
				if($Data_content_1[5]=='/'&&
				   $Data_content_1[6]=='/')
				{
					echo '<p>continued test_2 ok</p>';
				}
				else
				{
					exit("failed continued test_2");
				}
			}
			else
			{
				exit("some other error");
			}
		}
		//removing last character
		if ($Data_content_1[strlen($Data_content_1)-1]=='/')
		{
			$Data_content_1[strlen($Data_content_1)-1]='';
			echo '<p> Data content modified: '.$Data_content_1.'</p>';
		}
		
		//checking for strange symbols
		for ($i=0;$i<strlen($Data_content_1);$i++)
		{
			if($Data_content_1[$i]=='*')
			{
				exit("failed symbol test");
			}
		}	
		
		echo '<p>symbol test is good.Test end.</p>';
		return $Data_content_1;
				
	}
//calling function	
	$Data_content_0=check_a($Data_type,$Data_content);
	echo '<p>Data content 2: '.$Data_content_0.'</p>';	
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
		echo 'connection ok';
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
	//$sql2="INSERT INTO table_1 (Type,Content) VALUES ('$Data_type','$Data_content_0')";
	$sql2="INSERT INTO table_li (Type,content) VALUES ('$Data_type','$Data_content_0')";
	$query = mysqli_query($con,$sql2); 
	if ($query){ 
	 echo '<p>Data inserted successfully</p>';
	}

//getting back to previous page
$red="http://www.explainit.online/s1/s8_f/s8.php#under_comments";
redirect($red);

function redirect($url)
{
    if (headers_sent())
	{
      die('<script type="text/javascript">window.location.href="' . $url . '";</script>');
    }
	else
	{
      header('Location: ' . $url);
      die();
    }    
}

?>