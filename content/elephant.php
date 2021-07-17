<?php
// srcs 
	// sql update
	// https://www.w3schools.com/sql/sql_update.asp
	// js page change delay
	// http://stackoverflow.com/questions/14955526/php-delay-on-redirect/14955790#14955790
	// reset auto increment in phpmyadmin
	// http://stackoverflow.com/questions/3019698/reset-id-autoincrement-phpmyadmin
	// * http://www.mysqltutorial.org/mysql-reset-auto-increment
	// w3schools php array
	// https://www.w3schools.com/php/php_arrays.asp
	// w3schools php for loops
	// https://www.w3schools.com/php/php_looping_for.asp
	// w3schools php count (like length)
	// https://www.w3schools.com/php/func_array_count.asp
	// ajax requests
	// https://www.w3schools.com/php/php_ajax_database.asp 
	// https://www.w3schools.com/xml/ajax_xmlhttprequest_create.asp  
	// https://www.w3schools.com/xml/ajax_php.asp  
	
	// Start the session
session_start();

// Declaring Variables
	//$Line_Number = $_GET['ln'];
	//$Yes_No = $_GET['yn'];
	//Debugging
	//echo '<p> Ln ='.$Line_Number.'</p><br>';
	//echo '<p> Yn ='.$Yes_No.'</p>';
/*
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
	if($con){
		//echo 'connection ok';
		//echo '<i class="fa fa-check-square-o" style="font-size:24px;"></i>';
		}
	else {
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
//getting data from oxygen.php
	//$sql2="insert into drills_status (linenumber,checked) values ('$line','$checked')";
	$sql1="select checked from drills_status";
	$query = mysqli_query($con,$sql1); 
		
	// preparing data to send back to ajax
	$rows = array();
	while ($row = mysqli_fetch_array($query,MYSQLI_NUM)) 
	{
		$rows[] = $row;
	}
		
	$str = array();
	for ($i=0;$i<count($rows);$i++)
	{
		$str[]=$i+1;
		$str[]=$rows[$i][0];
	}
		
	define("str_2",string);
	for ($i=0;$i<count($rows);$i++)
	{
		$str_2.= $i+1;
		$str_2.= $rows[$i][0];
	}
	//echo '<pre>';
	//print_r($str);
	//echo '</pre>';

// Values  
if ( $Yes_No == "yes")
	{
	//echo '<i class="fa fa-check-square-o" style="font-size:24px;"></i>';
	}

// Database
	//$sql2="insert into drills_status (linenumber,checked) values ('$line','$checked')";
	
	//echo $place_in_str;
	if ($Line_Number<10)
	{
		$place_in_str = 2*$Line_Number-1;
		if($str[$place_in_str] == "y"  && $Yes_No == "yes")
		{
			echo '<i class="fa fa-check-square-o" style="font-size:24px;"></i>'; 
		}
		if($str[$place_in_str] == "n"  && $Yes_No == "no")
		{
			echo '-'; 
		}
		if($str[$place_in_str] == "n"  && $Yes_No == "yes")
		{
			$sql2="update drills_status set checked = 'y' where id = '".$Line_Number."'";
			$query = mysqli_query($con,$sql2); 
			echo '<i class="fa fa-check-square-o" style="font-size:24px;"></i>';
		}
		if($str[$place_in_str] == "y"  && $Yes_No == "no")
		{
			$sql2="update drills_status set checked = 'n' where id = '".$Line_Number."'";
			$query = mysqli_query($con,$sql2); 
			echo '-';
		}
	}
	
	if ($Line_Number>9)
	{
		$place_in_str = 2*$Line_Number-1;
		if($str[$place_in_str] == "y"  && $Yes_No == "yes")
		{
			echo '<i class="fa fa-check-square-o" style="font-size:24px;"></i>'; 
		}
		if($str[$place_in_str] == "n"  && $Yes_No == "no")
		{
			echo '-'; 
		}
		if($str[$place_in_str] == "n"  && $Yes_No == "yes")
		{
			$sql2="update drills_status set checked = 'y' where id = '".$Line_Number."'";
			$query = mysqli_query($con,$sql2); 
			echo '<i class="fa fa-check-square-o" style="font-size:24px;"></i>';
		}
		if($str[$place_in_str] == "y"  && $Yes_No == "no")
		{
			$sql2="update drills_status set checked = 'n' where id = '".$Line_Number."'";
			$query = mysqli_query($con,$sql2); 
			echo '-';
		}
	}
*/

//Building table
//example
$id_tag_1="example_1";
$id_tag="example";
$subject_name_tag="מרחב דו ותלת שלבי";
$subjects=array("טבלאות","עצים");
	echo '<table id="table_drills" style="margin-top:2.5px;">';
	echo '<tr>
				<th style="width:10px;background-color:magenta;border-right-style:none;"></td>
				<th style="width:10px;background-color:blue;border-right-style:none;"></td>
				<th id="'.$id_tag_1.'" colspan="3" style="border-right-style:none;"><h3><b>'.$subject_name_tag.'</b></h3></td>
				
			</tr>';
	echo '<tr class="'.$id_tag.'">
				<td colspan="5" style="border-right-style:none;"><hr></td>
			</tr>';
	echo '<tr class="'.$id_tag.'">
				<th rowspan="15" style="background-color:magenta;border-right-style:none;"></td>
				<th rowspan="15" style="background-color:blue;border-right-style:none;"></td>
				<th style="padding:0px 4px;">נושא</th>
				<th style="width:50px;">הסבר</th>
				<th style="width:50px;" class="tooltip">תרגול<span class="tooltiptext">לפחות שעה וחצי</span></th>
			</tr>';
	$p= count($subjects) - 1;
	for($i=0;$i<$p;$i++)
		{
			echo '<tr class="'.$id_tag.'">
				<td colspan="5" style="border-right-style:none;"><hr></td>
			</tr>
			
			<tr class="'.$id_tag.'">
				
				
				<td style="border-right-style:none;text-align:right;padding:2px 10px;border-right-style:none;">'.$subjects[$i].'</td>
				<td></td>
				<td class="try"></td>
			</tr>';
		}
		echo '<tr class="'.$id_tag.'">
				<td colspan="5" style="border-right-style:none;"><hr></td>
			</tr>
			
			<tr class="'.$id_tag.'">
				
				
				<td style="border-right-style:none;text-align:right;padding:2px 10px;border-right-style:none;">'.$subjects[1].'</td>
				<td></td>
				<td class="try"></td>
			</tr></table>';
			
//example 2
$id_tag_1="giraffe_1";
$id_tag="giraffe";
$subject_name_tag="התפלגות בינומית";
$subjects=array("נוסחת ברנולי","הערה: יש ללמד קומבינטוריקה רק לצורכי ההתפלגות הבינומית");
	echo '<table id="table_drills" style="margin-top:2.5px;">';
	echo '<tr>
				<th style="width:10px;background-color:magenta;border-right-style:none;"></td>
				<th style="width:10px;background-color:yellow;border-right-style:none;"></td>
				<th id="'.$id_tag_1.'" colspan="3" style="border-right-style:none;"><h3><b>'.$subject_name_tag.'</b></h3></td>
				
			</tr>';
	echo '<tr class="'.$id_tag.'">
				<td colspan="5" style="border-right-style:none;"><hr></td>
			</tr>';
	echo '<tr class="'.$id_tag.'">
				<th rowspan="15" style="background-color:magenta;border-right-style:none;"></td>
				<th rowspan="15" style="background-color:yellow;border-right-style:none;"></td>
				<th style="padding:0px 4px;">נושא</th>
				<th style="width:50px;">הסבר</th>
				<th style="width:50px;" class="tooltip">תרגול<span class="tooltiptext">לפחות שעה וחצי</span></th>
			</tr>';
	$p= count($subjects) - 1;
	for($i=0;$i<$p;$i++)
		{
			echo '<tr class="'.$id_tag.'">
				<td colspan="5" style="border-right-style:none;"><hr></td>
			</tr>
			
			<tr class="'.$id_tag.'">
				
				
				<td style="border-right-style:none;text-align:right;padding:2px 10px;border-right-style:none;">'.$subjects[$i].'</td>
				<td></td>
				<td class="try"></td>
			</tr>';
		}
		echo '<tr class="'.$id_tag.'">
				<td colspan="5" style="border-right-style:none;"><hr></td>
			</tr>
			
			<tr class="'.$id_tag.'">
				
				
				<td style="border-right-style:none;text-align:right;padding:2px 10px;border-right-style:none;">'.$subjects[1].'</td>
				<td></td>
				<td class="try"></td>
			</tr></table>';
			
// Closing Connection
mysqli_close($con);
?>
