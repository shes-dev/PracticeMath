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
	// mysqli_fetch_array returns only one line
	// http://stackoverflow.com/questions/8810410/mysql-fetch-array-only-showing-1-row-when-theres-more
	// inserting values to php array
	// http://stackoverflow.com/questions/676677/how-to-add-elements-to-an-empty-array-in-php
	// define strings in php
	// http://php.net/manual/en/function.define.php
	// concatenate strings in php
	// http://php.net/manual/en/language.operators.string.php
	// w3school php comparison operators
	// https://www.w3schools.com/php/php_operators.asp
	// w3school php if else statements
	// https://www.w3schools.com/php/php_if_else.asp
	// php objects
	// https://www.w3schools.com/php/php_datatypes.asp
	// php count object
	// https://stackoverflow.com/questions/1314745/php-count-an-stdclass-object
	// php multi dimentional arrays
	// https://stackoverflow.com/questions/28922643/php-array-keys-wildcard

// Start the session
session_start();

// Declaring Variables
	//$Subject = $_GET['ln'];
	//$SubSubject = $_GET['yn'];
	//$Subject = 'Probability';
	//$SubSubject = 'intro';
	//$SubSubject_2 = '23stageSpace';
	//$SubSubject_3 = 'Binom';
		
// Connecting

	// Setting encoding for Hebrew
	header("Content-Type: text/html; charset=UTF-8");
	$obj = json_decode($_GET["ln"], false);
	
	/*class obj
	{
		function obj() 
		{
			$this->P_0 = "Probability";
			$this->S_0 = "Binom";
			$this->S_1 = "23stageSpace";
			$this->P_1 = "Algebra";
			$this->S_2 = "Peruk";
			$this->S_3 = "intro";
		}
	}
	$subs = new obj();
	*/
	echo '<pre>';
	print_r($obj);
	echo '<br>';
	echo '</pre>';
	//$r=(array)$subs;
	//$p=(object)$subs;
	/*
	$array_1=get_object_vars($subs);
	for($i=0;$i<count(get_object_vars($subs));$i++)
	{
	$t ="P_";
	$t .=$i;
	echo $t;
	//print_r ($subs->$t);
	//$arraykey = key($subs->$t);
	}
	//print_r($arraykey);
	//echo 'hi';
	//print_r($array_1[P_0]);
	//print_r($r);
	//print_r($p);
	//echo '</pre>';
	//echo count(get_object_vars($subs));
	//echo get_object_vars($subs);
	
	
	var $Subject = [];
	var $SubSubject = [];
	$m=0;
	
	while($m<count(get_object_vars($subs)))
	{	
	
	$m_plus_1 = $m+1;
	echo 'm_plus_1:'.$m_plus_1;
	echo '<br>';
	$m_plus_2 = $m+2;
	echo 'm_plus_2:'.$m_plus_2;
	echo '<br>';
	var $key_name = "P_"+$m;
	echo 'key_name:'.$key_name;
	echo '<br>';
	var $key_name_1 = "sub"+$m_plus_1;
	echo 'key_name_1:'.$key_name_1;
	echo '<br>';
	var $key_name_2 = "sub"+$m_plus_2;
	echo 'key_name_2:'.$key_name_2;
	echo '<br>';
	$Subject[$m] = $obj->$key_name;
	$SubSubject[$m] = 0;
	$SubSubject[$m_plus_1] = $obj->$key_name_1;
	$SubSubject[$m_plus_2] = $obj->$key_name_2;
	//$SubSubject_2 = $obj->subsub2;
	//$SubSubject_3 = $obj->subsub3;
	echo 'Subject:'.$Subject;
	echo '<br>';
	echo 'Subsubject:'.$SubSubject;
	echo '<br>';
	m = m + 3;
	}*/
	/*echo 'variables:';
	echo '<br>';
	echo $Subject;
	echo '<br>';
	echo $SubSubject;
	echo '<br>';
	echo $SubSubject2;
	echo '<br>';
	echo $SubSubject3;
	echo '<br>';*/
	/*
	//Data
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
	*/
// Connecting End
/*
// Database
	//getting data
	//$sql2="insert into drills_status (linenumber,checked) values ('$line','$checked')";
	$subsubjects = array();
	$subsubjects[0] = $SubSubject;
	$subsubjects[1] = $SubSubject_2;
	$subsubjects[2] = $SubSubject_3;
	$results = array();
	for($a=0;$a<count($subsubjects);$a++)
	{
		$SubSubject = $subsubjects[$a];
		//echo $subsubjects[a];
		$sql1="select checked from drills_status WHERE Subject LIKE '".$Subject."' and Subsubject LIKE '".$SubSubject."'";
		$query = mysqli_query($con,$sql1); 
		
		// preparing data to send back to ajax
		$rows = array();
		
		while ($row = mysqli_fetch_array($query,MYSQLI_NUM)) 
		{
			$rows[] = $row;
		}
			
		$str = array();
		$str[0] = $Subject;
		$str[1] = $SubSubject;
		$str[2] = count($rows);
		$check_var = 0;
		for ($i=0;$i<count($rows);$i++)
		{
			$str[]=$rows[$i][0];
			//echo $rows[$i][0];
			if($rows[$i][0] == "y")
			{
				$check_var++;
			}
		}
		//echo '<br>';
		//echo 'check_var:'.$check_var;
		//echo '<br>';
		if ($check_var == count($rows))
		{
			//echo '<br>';
			//echo $Subject;
			//echo '<br>';
			//echo $SubSubject;
			//echo '<br>';
			//echo "success";
			//echo '<br>';
			//echo '<br>';
			$results[]=$Subject;
			$results[]=$SubSubject;
			$results[]="success";
			
		}
		
		define("str_2",string);
		for ($i=0;$i<count($rows);$i++)
		{
			$str_2.= $i+1;
			$str_2.= $rows[$i][0];
		}
		
		//print_r('<h3>str2:</h3>');
		//print_r($str_2);
		//print_r('<br>');
		//print_r('<h3>str:</h3>');
		//print_r('<pre>');
		//print_r($str);
		//print_r('</pre>');
	}
	
	//echo '<h3>results:</h3>';
	//echo '<br>';
	//print_r('<pre>');
	//print_r ($results);
	echo json_encode($results);
	//print_r('</pre>');

// Closing Connection
mysqli_close($con);
*/
/*
// remove all session variables
session_unset(); 

// destroy the session 
session_destroy(); 
*/
?>
