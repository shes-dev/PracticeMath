<?php
//$_SESSION['mapZoomArea'] = (isset($_POST['mapza']) ? $_POST['mapza'] : "";
//echo $_POST['mapza_2'];

// Setting encoding for Hebrew
	header("Content-Type: text/html; charset=UTF-8");
	//header("Content-Type: application/json; charset=UTF-8");

// Declaring Variables
	$mapza = $_POST['mapza'];
		
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
		//echo 'connection ok';
	}
	else
	{
		die('Could not connect: ' . mysqli_error($con));
	}
		
	// Selecting Database
	mysql_select_db("elad189g_ex_comments"); 
	
	// Enabling Hebrew
	mysql_query("SET character_set_client=utf8");
	mysql_query("SET character_set_connection=utf8");
	mysql_query("SET character_set_database=utf8");
	mysql_query("SET character_set_results=utf8");
	mysql_query("SET character_set_server=utf8");
	
	// Setting Time	
	$sql_Time = "SET time_zone = '+03:00';";
    $query = mysqli_query($con,$sql_Time);
	
// Connecting End

// Inserting data with variables
$t_1 = "ch";
$c_1 = "ch";
$c = 1;
$b = array ("li",
			"global vars in js and php",
			"a",
			"http://stackoverflow.com/questions/15519454/how-to-access-session-variables-and-set-them-in-javascript",
			"li",
			"global vars in js",
			"a",
			"http://stackoverflow.com/questions/5786851/define-global-variable-in-a-javascript-function",
			"li",
			"passing vars to console log",
			"a",
			"http://stackoverflow.com/questons/16600925/how-can-i-add-a-variable-to-console-log",
			"li",
			"jquery each function",
			"a",
			"https://api.jquery.com/each/",
			"a",
			"http://api.jquery.com/jquery.each/",
			"li",
			"jquery adding id",
			"a",
			"https://stackoverflow.com/questions/2176986/jquery-add-id-instead-of-class",
			"li",
			"jquery to load after page content",
			"a",
			"https://stackoverflow.com/questions/2926227/how-to-do-jquery-code-after-page-loading",
			"li",
			"jquery display toggle",
			"a",
			"http://api.jquery.com/toggle/"
			);
	while($c<count($b))
		{
		//$sql2="insert into page_1 (Type,Content) values ('$t_1','$c_1')";
		$sql2="insert into page_1 (Type,Content) values ('".$b[$c-1]."','".$b[$c]."')";
		$query = mysqli_query($con,$sql2); 
		if ($query)
		{ 
			echo '<br>'.'data inserted successfully';
		}
		$c += 2;
	}

//Creating table
echo '<ol id="comments_list_db" style="margin-top:0px;">';

//Extracting data
$sql1="select * from page_1 order by id asc";
$query = mysqli_query($con,$sql1); 
$i=0;

while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC))
{
	if ($i==0)
	{
		if ($row['Type']=='li')
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
		}
		
	}
	
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
		}
		/*$a=$row['Content'];
		echo "<a href=$a>".$row['email']."</a>";
		echo '</td><td>';
		echo "<img src=".$row['email']." width='50%'>"; 
		echo '</td></tr>';*/
	}
}

echo '</ol>';
?>