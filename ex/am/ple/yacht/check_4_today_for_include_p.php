<?php
//debugging
	// display errors
/*	error_reporting(E_ALL);
	ini_set('display_errors', 'On');
		
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
	mysqli_query($con,"SET character_set_client=utf8mb4");
	mysqli_query($con,"SET character_set_connection=utf8mb4");
	mysqli_query($con,"SET character_set_database=utf8mb4");
	mysqli_query($con,"SET character_set_results=utf8mb4");
	mysqli_query($con,"SET character_set_server=utf8mb4");
	
	// Setting Time	
	$sql_Time = "SET time_zone = '+03:00';";
    $query = mysqli_query($con,$sql_Time);
*/

//funcs
	//updating veteran column to 3 if updates where made 3 days in a row
	function update_veteran($num,$m)
	{
		$sql1="INSERT INTO `Ie_comp_today_v_p`(`UPDATED`, `VETERAN`) VALUES ('".$num."','3') ";
		$query = mysqli_query($m,$sql1);	
	}
	
	//updating veteran column to 7 if updates where made 7 days in a row
	function update_veteran_7($num,$m)
	{
		$sql1="INSERT INTO `Ie_comp_today_v_p`(`UPDATED`, `VETERAN`) VALUES ('".$num."','7') ";
		$query = mysqli_query($m,$sql1);	
	}
	
	//updating veteran column to 14 if updates where made 14 days in a row
	function update_veteran_14($num,$m)
	{
		$sql1="INSERT INTO `Ie_comp_today_v_p`(`UPDATED`, `VETERAN`) VALUES ('".$num."','14') ";
		$query = mysqli_query($m,$sql1);	
	}
//-------------today--------------//
	
// getting all entries from today
	//sql
	$sql1="SELECT * FROM `Ie_comp_today_p` WHERE DATE(`TIME`) = CURDATE()";
	$query = mysqli_query($con,$sql1);	
	//$row = mysqli_fetch_array($query,MYSQLI_ASSOC);
	
	//vars
	$p = array();
	$t = array();
	$t_1 = array();
	$t_1_count = 0;
	$i = 0;
	
	//query data to array
	while ($row = mysqli_fetch_array($query,MYSQLI_ASSOC))
		{
			$t[$i]=$row['UPDATED'];// getting the UPDATED column content for row array
			
			$i++;
		}
	
	
		//debugging
/*		echo '<pre>';
		echo 'SELECT * FROM `Ie_comp_today_p` WHERE DATE(`TIME`) = CURDATE():';
		echo '<br>';
		var_dump($row);
		echo '<br>';
		echo 'array of all who did tr today:';
		echo '<br>';
		var_dump($t);
		echo '</pre>';
*/	
	
	//checking for doubles
	for($i=0;$i<count($t);$i++)
	{
		//setting value to be checked
		$checked = $t[$i];
		
		for ($s=0;$s<count($t);$s++)
		{
			if($s == $i)
			{
				continue;
			}
			else
			{
				if($checked == $t[$s])
				{
					$t[$s]='double';
				}
			}
		}
	}
	
	
		//debugging
/*		echo '<pre>';
		echo 'array of all who did tr today after double check:';
		echo '<br>';
		var_dump($t);
		echo '</pre>';
*/	
		
	//removing doubles
	for($i=0;$i<count($t);$i++)
	{
		if($t[$i] == 'double')//value is a double, dropped
		{
			continue;
		}	
		else if (substr($t[$i],-1) == 0)//removes last character if it's 0
		{
			$t[$i]=substr($t[$i],0,14);
			$t_1[$t_1_count]=$t[$i];
			$t_1_count++;
		}
		else//value isn't a double, goes into final array
		{
			$t_1[$t_1_count]=$t[$i];
			$t_1_count++;
		}
	}
		
		//debugging
/*		echo '<pre>';
		echo 'array of all who did tr today after double removal:';
		echo '<br>';
		var_dump($t_1);
		echo '<br>';
		echo '</pre>';
*/		

//---------------yesterday--------------//	

// getting all entries from yesterday
	//sql
	$sql1="SELECT * FROM `Ie_comp_today_p` WHERE DATE(`TIME`) = CURDATE() - INTERVAL 1 DAY;";
	$query = mysqli_query($con,$sql1);	
	//$row = mysqli_fetch_array($query,MYSQLI_ASSOC);
	
	//vars
	$p = array();
	$y = array();
	$y_1 = array();
	$y_1_count = 0;
	$g = "";
	$i = 0;
	
	//query data to array
	while ($row = mysqli_fetch_array($query,MYSQLI_ASSOC))
		{
			$y[$i]=$row['UPDATED'];// getting the UPDATED column content for row array
			
			$i++;
		}
	
		
		//debugging
/*		echo '<pre>';
		echo 'SELECT * FROM `Ie_comp_today_p` WHERE DATE(`TIME`) = CURDATE() - 1:';
		echo '<br>';
		var_dump($row);
		echo '<br>';
		echo 'array of all who did tr yesterday before double check:';
		echo '<br>';
		var_dump($y);
		echo '</pre>';
*/	
	
	//checking for doubles
	for($i=0;$i<count($y);$i++)
	{
		//setting value to be checked
		$checked = $y[$i];
		
		for ($s=0;$s<count($y);$s++)
		{
			if($s == $i)
			{
				continue;
			}
			else
			{
				if($checked == $y[$s])
				{
					$y[$s]='double';
				}
			}
		}
	}
	
	
	//debugging
/*		echo '<pre>';
		echo 'array of all who did tr yesterday after double check:';
		echo '<br>';
		var_dump($y);
		echo '</pre>';
*/	
		
	//removing doubles
	for($i=0;$i<count($y);$i++)
	{
		if($y[$i] == 'double')//value is a double, dropped
		{
			continue;
		}
		else if (substr($y[$i],-1) == 0)//removes last character if it's 0
		{
			$y[$i]=substr($y[$i],0,14);
			$y_1[$y_1_count]=$y[$i];
			$y_1_count++;
		}		
		else//value isn't a double, goes into final array
		{
			$y_1[$y_1_count]=$y[$i];
			$y_1_count++;
		}
	}
		
		//debugging
/*		echo '<pre>';
		echo 'array of all who did tr yesterday after double removal:';
		echo '<br>';
		var_dump($y_1);
		echo '</pre>';
*/	


//-------------The day before yesterday---------------------//

// getting all entries from the day before yesterday
	//sql
	$sql1="SELECT * FROM `Ie_comp_today_p` WHERE DATE(`TIME`) = CURDATE() - INTERVAL 2 DAY;";
	$query = mysqli_query($con,$sql1);	
	//$row = mysqli_fetch_array($query,MYSQLI_ASSOC);
	
	//vars
	$p = array();
	$g = array();
	$g_1 = array();
	$g_1_count = 0;
	$i = 0;
	
	//query data to array
	while ($row = mysqli_fetch_array($query,MYSQLI_ASSOC))
		{
			$g[$i]=$row['UPDATED'];// getting the UPDATED column content for row array
			
			$i++;
		}
	
	
		//debugging
/*		echo '<pre>';
		echo 'SELECT * FROM `Ie_comp_today_p` WHERE DATE(`TIME`) = CURDATE():';
		echo '<br>';
		var_dump($row);
		echo '<br>';
		echo 'array of all who did tr today:';
		echo '<br>';
		var_dump($t);
		echo '</pre>';
*/	
	
	//checking for doubles
	for($i=0;$i<count($g);$i++)
	{
		//setting value to be checked
		$checked = $g[$i];
		
		for ($s=0;$s<count($g);$s++)
		{
			if($s == $i)
			{
				continue;
			}
			else
			{
				if($checked == $g[$s])
				{
					$g[$s]='double';
				}
			}
		}
	}
	
	
		//debugging
/*		echo '<pre>';
		echo 'array of all who did tr today after double check:';
		echo '<br>';
		var_dump($t);
		echo '</pre>';
*/	
		
	//removing doubles
	for($i=0;$i<count($g);$i++)
	{
		if($g[$i] == 'double')//value is a double, dropped
		{
			continue;
		}	
		else if (substr($g[$i],-1) == 0)//removes last character if it's 0
		{
			$g[$i]=substr($g[$i],0,14);
			$g_1[$g_1_count]=$g[$i];
			$g_1_count++;
		}
		else//value isn't a double, goes into final array
		{
			$g_1[$g_1_count]=$g[$i];
			$g_1_count++;
		}
	}
		
		//debugging
/*		echo '<pre>';
		echo 'array of all who did tr today after double removal:';
		echo '<br>';
		var_dump($t_1);
		echo '<br>';
		echo '</pre>';
*/		

//-------------3 days ago ---------------------//

// getting all entries from the day before yesterday
	//sql
	$sql1="SELECT * FROM `Ie_comp_today_p` WHERE DATE(`TIME`) = CURDATE() - INTERVAL 3 DAY;";
	$query = mysqli_query($con,$sql1);	
	//$row = mysqli_fetch_array($query,MYSQLI_ASSOC);
	
	//vars
	$p = array();
	$three_days = array();
	$three_days_1 = array();
	$three_days_1_count = 0;
	$i = 0;
	
	//query data to array
	while ($row = mysqli_fetch_array($query,MYSQLI_ASSOC))
		{
			$three_days[$i]=$row['UPDATED'];// getting the UPDATED column content for row array
			
			$i++;
		}
	
	
		//debugging
/*		echo '<pre>';
		echo 'SELECT * FROM `Ie_comp_today_p` WHERE DATE(`TIME`) = CURDATE():';
		echo '<br>';
		var_dump($row);
		echo '<br>';
		echo 'array of all who did tr today:';
		echo '<br>';
		var_dump($t);
		echo '</pre>';
*/	
	
	//checking for doubles
	for($i=0;$i<count($three_days);$i++)
	{
		//setting value to be checked
		$checked = $three_days[$i];
		
		for ($s=0;$s<count($three_days);$s++)
		{
			if($s == $i)
			{
				continue;
			}
			else
			{
				if($checked == $three_days[$s])
				{
					$three_days[$s]='double';
				}
			}
		}
	}
	
	
		//debugging
/*		echo '<pre>';
		echo 'array of all who did tr today after double check:';
		echo '<br>';
		var_dump($t);
		echo '</pre>';
*/	
		
	//removing doubles
	for($i=0;$i<count($three_days);$i++)
	{
		if($three_days[$i] == 'double')//value is a double, dropped
		{
			continue;
		}	
		else if (substr($three_days[$i],-1) == 0)//removes last character if it's 0
		{
			$three_days[$i]=substr($three_days[$i],0,14);
			$three_days_1[$three_days_1_count]=$three_days[$i];
			$three_days_1_count++;
		}
		else//value isn't a double, goes into final array
		{
			$three_days_1[$three_days_1_count]=$three_days[$i];
			$three_days_1_count++;
		}
	}
		
		//debugging
/*		echo '<pre>';
		echo 'array of all who did tr three_days ago after removal:';
		echo '<br>';
		var_dump($three_days_1);
		echo '<br>';
		echo '</pre>';
*/		

//-------------four days ago ---------------------//

// getting all entries from the day before yesterday
	//sql
	$sql1="SELECT * FROM `Ie_comp_today_p` WHERE DATE(`TIME`) = CURDATE() - INTERVAL 4 DAY;";
	$query = mysqli_query($con,$sql1);	
	//$row = mysqli_fetch_array($query,MYSQLI_ASSOC);
	
	//vars
	$p = array();
	$four_days = array();
	$four_days_1 = array();
	$four_days_1_count = 0;
	$i = 0;
	
	//query data to array
	while ($row = mysqli_fetch_array($query,MYSQLI_ASSOC))
		{
			$four_days[$i]=$row['UPDATED'];// getting the UPDATED column content for row array
			
			$i++;
		}
	
	
		//debugging
/*		echo '<pre>';
		echo 'SELECT * FROM `Ie_comp_today_p` WHERE DATE(`TIME`) = CURDATE():';
		echo '<br>';
		var_dump($row);
		echo '<br>';
		echo 'array of all who did tr today:';
		echo '<br>';
		var_dump($t);
		echo '</pre>';
*/	
	
	//checking for doubles
	for($i=0;$i<count($four_days);$i++)
	{
		//setting value to be checked
		$checked = $four_days[$i];
		
		for ($s=0;$s<count($four_days);$s++)
		{
			if($s == $i)
			{
				continue;
			}
			else
			{
				if($checked == $four_days[$s])
				{
					$four_days[$s]='double';
				}
			}
		}
	}
	
	
		//debugging
/*		echo '<pre>';
		echo 'array of all who did tr today after double check:';
		echo '<br>';
		var_dump($t);
		echo '</pre>';
*/	
		
	//removing doubles
	for($i=0;$i<count($four_days);$i++)
	{
		if($four_days[$i] == 'double')//value is a double, dropped
		{
			continue;
		}	
		else if (substr($four_days[$i],-1) == 0)//removes last character if it's 0
		{
			$four_days[$i]=substr($four_days[$i],0,14);
			$four_days_1[$four_days_1_count]=$four_days[$i];
			$four_days_1_count++;
		}
		else//value isn't a double, goes into final array
		{
			$four_days_1[$four_days_1_count]=$four_days[$i];
			$four_days_1_count++;
		}
	}
		
		//debugging
/*		echo '<pre>';
		echo 'array of all who did tr four_days ago after removal:';
		echo '<br>';
		var_dump($four_days_1);
		echo '<br>';
		echo '</pre>';
*/		
//-------------five days ago ---------------------//

// getting all entries from the day before yesterday
	//sql
	$sql1="SELECT * FROM `Ie_comp_today_p` WHERE DATE(`TIME`) = CURDATE() - INTERVAL 5 DAY;";
	$query = mysqli_query($con,$sql1);	
	//$row = mysqli_fetch_array($query,MYSQLI_ASSOC);
	
	//vars
	$p = array();
	$five_days = array();
	$five_days_1 = array();
	$five_days_1_count = 0;
	$i = 0;
	
	//query data to array
	while ($row = mysqli_fetch_array($query,MYSQLI_ASSOC))
		{
			$five_days[$i]=$row['UPDATED'];// getting the UPDATED column content for row array
			
			$i++;
		}
	
	
		//debugging
/*		echo '<pre>';
		echo 'SELECT * FROM `Ie_comp_today_p` WHERE DATE(`TIME`) = CURDATE():';
		echo '<br>';
		var_dump($row);
		echo '<br>';
		echo 'array of all who did tr today:';
		echo '<br>';
		var_dump($t);
		echo '</pre>';
*/	
	
	//checking for doubles
	for($i=0;$i<count($five_days);$i++)
	{
		//setting value to be checked
		$checked = $five_days[$i];
		
		for ($s=0;$s<count($five_days);$s++)
		{
			if($s == $i)
			{
				continue;
			}
			else
			{
				if($checked == $five_days[$s])
				{
					$five_days[$s]='double';
				}
			}
		}
	}
	
	
		//debugging
/*		echo '<pre>';
		echo 'array of all who did tr today after double check:';
		echo '<br>';
		var_dump($t);
		echo '</pre>';
*/	
		
	//removing doubles
	for($i=0;$i<count($five_days);$i++)
	{
		if($five_days[$i] == 'double')//value is a double, dropped
		{
			continue;
		}	
		else if (substr($five_days[$i],-1) == 0)//removes last character if it's 0
		{
			$five_days[$i]=substr($five_days[$i],0,14);
			$five_days_1[$five_days_1_count]=$five_days[$i];
			$five_days_1_count++;
		}
		else//value isn't a double, goes into final array
		{
			$five_days_1[$five_days_1_count]=$five_days[$i];
			$five_days_1_count++;
		}
	}
		
		//debugging
/*		echo '<pre>';
		echo 'array of all who did tr five_days ago after removal:';
		echo '<br>';
		var_dump($five_days_1);
		echo '<br>';
		echo '</pre>';
*/
//-------------six_days ago ---------------------//

// getting all entries from the day before yesterday
	//sql
	$sql1="SELECT * FROM `Ie_comp_today_p` WHERE DATE(`TIME`) = CURDATE() - INTERVAL 6 DAY;";
	$query = mysqli_query($con,$sql1);	
	//$row = mysqli_fetch_array($query,MYSQLI_ASSOC);
	
	//vars
	$p = array();
	$six_days = array();
	$six_days_1 = array();
	$six_days_1_count = 0;
	$i = 0;
	
	//query data to array
	while ($row = mysqli_fetch_array($query,MYSQLI_ASSOC))
		{
			$six_days[$i]=$row['UPDATED'];// getting the UPDATED column content for row array
			
			$i++;
		}
	
	
		//debugging
/*		echo '<pre>';
		echo 'SELECT * FROM `Ie_comp_today_p` WHERE DATE(`TIME`) = CURDATE():';
		echo '<br>';
		var_dump($row);
		echo '<br>';
		echo 'array of all who did tr today:';
		echo '<br>';
		var_dump($t);
		echo '</pre>';
*/	
	
	//checking for doubles
	for($i=0;$i<count($six_days);$i++)
	{
		//setting value to be checked
		$checked = $six_days[$i];
		
		for ($s=0;$s<count($six_days);$s++)
		{
			if($s == $i)
			{
				continue;
			}
			else
			{
				if($checked == $six_days[$s])
				{
					$six_days[$s]='double';
				}
			}
		}
	}
	
	
		//debugging
/*		echo '<pre>';
		echo 'array of all who did tr today after double check:';
		echo '<br>';
		var_dump($t);
		echo '</pre>';
*/	
		
	//removing doubles
	for($i=0;$i<count($six_days);$i++)
	{
		if($six_days[$i] == 'double')//value is a double, dropped
		{
			continue;
		}	
		else if (substr($six_days[$i],-1) == 0)//removes last character if it's 0
		{
			$six_days[$i]=substr($six_days[$i],0,14);
			$six_days_1[$six_days_1_count]=$six_days[$i];
			$six_days_1_count++;
		}
		else//value isn't a double, goes into final array
		{
			$six_days_1[$six_days_1_count]=$six_days[$i];
			$six_days_1_count++;
		}
	}
		
		//debugging
/*		echo '<pre>';
		echo 'array of all who did tr six_days ago after removal:';
		echo '<br>';
		var_dump($six_days_1);
		echo '<br>';
		echo '</pre>';
*/

//-------------seven_days ago ---------------------//

// getting all entries from the day before yesterday
	//sql
	$sql1="SELECT * FROM `Ie_comp_today_p` WHERE DATE(`TIME`) = CURDATE() - INTERVAL 7 DAY;";
	$query = mysqli_query($con,$sql1);	
	//$row = mysqli_fetch_array($query,MYSQLI_ASSOC);
	
	//vars
	$p = array();
	$seven_days = array();
	$seven_days_1 = array();
	$seven_days_1_count = 0;
	$i = 0;
	
	//query data to array
	while ($row = mysqli_fetch_array($query,MYSQLI_ASSOC))
		{
			$seven_days[$i]=$row['UPDATED'];// getting the UPDATED column content for row array
			
			$i++;
		}
	
	
		//debugging
/*		echo '<pre>';
		echo 'SELECT * FROM `Ie_comp_today_p` WHERE DATE(`TIME`) = CURDATE():';
		echo '<br>';
		var_dump($row);
		echo '<br>';
		echo 'array of all who did tr today:';
		echo '<br>';
		var_dump($t);
		echo '</pre>';
*/	
	
	//checking for doubles
	for($i=0;$i<count($seven_days);$i++)
	{
		//setting value to be checked
		$checked = $seven_days[$i];
		
		for ($s=0;$s<count($seven_days);$s++)
		{
			if($s == $i)
			{
				continue;
			}
			else
			{
				if($checked == $seven_days[$s])
				{
					$seven_days[$s]='double';
				}
			}
		}
	}
	
	
		//debugging
/*		echo '<pre>';
		echo 'array of all who did tr today after double check:';
		echo '<br>';
		var_dump($t);
		echo '</pre>';
*/	
		
	//removing doubles
	for($i=0;$i<count($seven_days);$i++)
	{
		if($seven_days[$i] == 'double')//value is a double, dropped
		{
			continue;
		}	
		else if (substr($seven_days[$i],-1) == 0)//removes last character if it's 0
		{
			$seven_days[$i]=substr($seven_days[$i],0,14);
			$seven_days_1[$seven_days_1_count]=$seven_days[$i];
			$seven_days_1_count++;
		}
		else//value isn't a double, goes into final array
		{
			$seven_days_1[$seven_days_1_count]=$seven_days[$i];
			$seven_days_1_count++;
		}
	}
		
		//debugging
/*		echo '<pre>';
		echo 'array of all who did tr seven_days ago after removal:';
		echo '<br>';
		var_dump($seven_days_1);
		echo '<br>';
		echo '</pre>';
*/	

//-------------eight_days ago ---------------------//

// getting all entries from the day before yesterday
	//sql
	$sql1="SELECT * FROM `Ie_comp_today_p` WHERE DATE(`TIME`) = CURDATE() - INTERVAL 8 DAY;";
	$query = mysqli_query($con,$sql1);	
	//$row = mysqli_fetch_array($query,MYSQLI_ASSOC);
	
	//vars
	$p = array();
	$eight_days = array();
	$eight_days_1 = array();
	$eight_days_1_count = 0;
	$i = 0;
	
	//query data to array
	while ($row = mysqli_fetch_array($query,MYSQLI_ASSOC))
		{
			$eight_days[$i]=$row['UPDATED'];// getting the UPDATED column content for row array
			
			$i++;
		}
	
	
		//debugging
/*		echo '<pre>';
		echo 'SELECT * FROM `Ie_comp_today_p` WHERE DATE(`TIME`) = CURDATE():';
		echo '<br>';
		var_dump($row);
		echo '<br>';
		echo 'array of all who did tr today:';
		echo '<br>';
		var_dump($t);
		echo '</pre>';
*/	
	
	//checking for doubles
	for($i=0;$i<count($eight_days);$i++)
	{
		//setting value to be checked
		$checked = $eight_days[$i];
		
		for ($s=0;$s<count($eight_days);$s++)
		{
			if($s == $i)
			{
				continue;
			}
			else
			{
				if($checked == $eight_days[$s])
				{
					$eight_days[$s]='double';
				}
			}
		}
	}
	
	
		//debugging
/*		echo '<pre>';
		echo 'array of all who did tr today after double check:';
		echo '<br>';
		var_dump($t);
		echo '</pre>';
*/	
		
	//removing doubles
	for($i=0;$i<count($eight_days);$i++)
	{
		if($eight_days[$i] == 'double')//value is a double, dropped
		{
			continue;
		}	
		else if (substr($eight_days[$i],-1) == 0)//removes last character if it's 0
		{
			$eight_days[$i]=substr($eight_days[$i],0,14);
			$eight_days_1[$eight_days_1_count]=$eight_days[$i];
			$eight_days_1_count++;
		}
		else//value isn't a double, goes into final array
		{
			$eight_days_1[$eight_days_1_count]=$eight_days[$i];
			$eight_days_1_count++;
		}
	}
		
		//debugging
/*		echo '<pre>';
		echo 'array of all who did tr eight_days ago after removal:';
		echo '<br>';
		var_dump($eight_days_1);
		echo '<br>';
		echo '</pre>';
*/	

//-------------nine_days ago ---------------------//

// getting all entries from the day before yesterday
	//sql
	$sql1="SELECT * FROM `Ie_comp_today_p` WHERE DATE(`TIME`) = CURDATE() - INTERVAL 9 DAY;";
	$query = mysqli_query($con,$sql1);	
	//$row = mysqli_fetch_array($query,MYSQLI_ASSOC);
	
	//vars
	$p = array();
	$nine_days = array();
	$nine_days_1 = array();
	$nine_days_1_count = 0;
	$i = 0;
	
	//query data to array
	while ($row = mysqli_fetch_array($query,MYSQLI_ASSOC))
		{
			$nine_days[$i]=$row['UPDATED'];// getting the UPDATED column content for row array
			
			$i++;
		}
	
	
		//debugging
/*		echo '<pre>';
		echo 'SELECT * FROM `Ie_comp_today_p` WHERE DATE(`TIME`) = CURDATE():';
		echo '<br>';
		var_dump($row);
		echo '<br>';
		echo 'array of all who did tr today:';
		echo '<br>';
		var_dump($t);
		echo '</pre>';
*/	
	
	//checking for doubles
	for($i=0;$i<count($nine_days);$i++)
	{
		//setting value to be checked
		$checked = $nine_days[$i];
		
		for ($s=0;$s<count($nine_days);$s++)
		{
			if($s == $i)
			{
				continue;
			}
			else
			{
				if($checked == $nine_days[$s])
				{
					$nine_days[$s]='double';
				}
			}
		}
	}
	
	
		//debugging
/*		echo '<pre>';
		echo 'array of all who did tr today after double check:';
		echo '<br>';
		var_dump($t);
		echo '</pre>';
*/	
		
	//removing doubles
	for($i=0;$i<count($nine_days);$i++)
	{
		if($nine_days[$i] == 'double')//value is a double, dropped
		{
			continue;
		}	
		else if (substr($nine_days[$i],-1) == 0)//removes last character if it's 0
		{
			$nine_days[$i]=substr($nine_days[$i],0,14);
			$nine_days_1[$nine_days_1_count]=$nine_days[$i];
			$nine_days_1_count++;
		}
		else//value isn't a double, goes into final array
		{
			$nine_days_1[$nine_days_1_count]=$nine_days[$i];
			$nine_days_1_count++;
		}
	}
		
		//debugging
/*		echo '<pre>';
		echo 'array of all who did tr nine_days ago after removal:';
		echo '<br>';
		var_dump($nine_days_1);
		echo '<br>';
		echo '</pre>';
*/	

//-------------ten_days ago ---------------------//

// getting all entries from the day before yesterday
	//sql
	$sql1="SELECT * FROM `Ie_comp_today_p` WHERE DATE(`TIME`) = CURDATE() - INTERVAL 10 DAY;";
	$query = mysqli_query($con,$sql1);	
	//$row = mysqli_fetch_array($query,MYSQLI_ASSOC);
	
	//vars
	$p = array();
	$ten_days = array();
	$ten_days_1 = array();
	$ten_days_1_count = 0;
	$i = 0;
	
	//query data to array
	while ($row = mysqli_fetch_array($query,MYSQLI_ASSOC))
		{
			$ten_days[$i]=$row['UPDATED'];// getting the UPDATED column content for row array
			
			$i++;
		}
	
	
		//debugging
/*		echo '<pre>';
		echo 'SELECT * FROM `Ie_comp_today_p` WHERE DATE(`TIME`) = CURDATE():';
		echo '<br>';
		var_dump($row);
		echo '<br>';
		echo 'array of all who did tr today:';
		echo '<br>';
		var_dump($t);
		echo '</pre>';
*/	
	
	//checking for doubles
	for($i=0;$i<count($ten_days);$i++)
	{
		//setting value to be checked
		$checked = $ten_days[$i];
		
		for ($s=0;$s<count($ten_days);$s++)
		{
			if($s == $i)
			{
				continue;
			}
			else
			{
				if($checked == $ten_days[$s])
				{
					$ten_days[$s]='double';
				}
			}
		}
	}
	
	
		//debugging
/*		echo '<pre>';
		echo 'array of all who did tr today after double check:';
		echo '<br>';
		var_dump($t);
		echo '</pre>';
*/	
		
	//removing doubles
	for($i=0;$i<count($ten_days);$i++)
	{
		if($ten_days[$i] == 'double')//value is a double, dropped
		{
			continue;
		}	
		else if (substr($ten_days[$i],-1) == 0)//removes last character if it's 0
		{
			$ten_days[$i]=substr($ten_days[$i],0,14);
			$ten_days_1[$ten_days_1_count]=$ten_days[$i];
			$ten_days_1_count++;
		}
		else//value isn't a double, goes into final array
		{
			$ten_days_1[$ten_days_1_count]=$ten_days[$i];
			$ten_days_1_count++;
		}
	}
		
		//debugging
/*		echo '<pre>';
		echo 'array of all who did tr ten_days ago after removal:';
		echo '<br>';
		var_dump($ten_days_1);
		echo '<br>';
		echo '</pre>';
*/	

//-------------eleven_days ago ---------------------//

// getting all entries from the day before yesterday
	//sql
	$sql1="SELECT * FROM `Ie_comp_today_p` WHERE DATE(`TIME`) = CURDATE() - INTERVAL 11 DAY;";
	$query = mysqli_query($con,$sql1);	
	//$row = mysqli_fetch_array($query,MYSQLI_ASSOC);
	
	//vars
	$p = array();
	$eleven_days = array();
	$eleven_days_1 = array();
	$eleven_days_1_count = 0;
	$i = 0;
	
	//query data to array
	while ($row = mysqli_fetch_array($query,MYSQLI_ASSOC))
		{
			$eleven_days[$i]=$row['UPDATED'];// getting the UPDATED column content for row array
			
			$i++;
		}
	
	
		//debugging
/*		echo '<pre>';
		echo 'SELECT * FROM `Ie_comp_today_p` WHERE DATE(`TIME`) = CURDATE():';
		echo '<br>';
		var_dump($row);
		echo '<br>';
		echo 'array of all who did tr today:';
		echo '<br>';
		var_dump($t);
		echo '</pre>';
*/	
	
	//checking for doubles
	for($i=0;$i<count($eleven_days);$i++)
	{
		//setting value to be checked
		$checked = $eleven_days[$i];
		
		for ($s=0;$s<count($eleven_days);$s++)
		{
			if($s == $i)
			{
				continue;
			}
			else
			{
				if($checked == $eleven_days[$s])
				{
					$eleven_days[$s]='double';
				}
			}
		}
	}
	
	
		//debugging
/*		echo '<pre>';
		echo 'array of all who did tr today after double check:';
		echo '<br>';
		var_dump($t);
		echo '</pre>';
*/	
		
	//removing doubles
	for($i=0;$i<count($eleven_days);$i++)
	{
		if($eleven_days[$i] == 'double')//value is a double, dropped
		{
			continue;
		}	
		else if (substr($eleven_days[$i],-1) == 0)//removes last character if it's 0
		{
			$eleven_days[$i]=substr($eleven_days[$i],0,14);
			$eleven_days_1[$eleven_days_1_count]=$eleven_days[$i];
			$eleven_days_1_count++;
		}
		else//value isn't a double, goes into final array
		{
			$eleven_days_1[$eleven_days_1_count]=$eleven_days[$i];
			$eleven_days_1_count++;
		}
	}
		
		//debugging
/*		echo '<pre>';
		echo 'array of all who did tr eleven_days ago after removal:';
		echo '<br>';
		var_dump($eleven_days_1);
		echo '<br>';
		echo '</pre>';
*/	

//-------------twelve_days ago ---------------------//

// getting all entries from the day before yesterday
	//sql
	$sql1="SELECT * FROM `Ie_comp_today_p` WHERE DATE(`TIME`) = CURDATE() - INTERVAL 12 DAY;";
	$query = mysqli_query($con,$sql1);	
	//$row = mysqli_fetch_array($query,MYSQLI_ASSOC);
	
	//vars
	$p = array();
	$twelve_days = array();
	$twelve_days_1 = array();
	$twelve_days_1_count = 0;
	$i = 0;
	
	//query data to array
	while ($row = mysqli_fetch_array($query,MYSQLI_ASSOC))
		{
			$twelve_days[$i]=$row['UPDATED'];// getting the UPDATED column content for row array
			
			$i++;
		}
	
	
		//debugging
/*		echo '<pre>';
		echo 'SELECT * FROM `Ie_comp_today_p` WHERE DATE(`TIME`) = CURDATE():';
		echo '<br>';
		var_dump($row);
		echo '<br>';
		echo 'array of all who did tr today:';
		echo '<br>';
		var_dump($t);
		echo '</pre>';
*/	
	
	//checking for doubles
	for($i=0;$i<count($twelve_days);$i++)
	{
		//setting value to be checked
		$checked = $twelve_days[$i];
		
		for ($s=0;$s<count($twelve_days);$s++)
		{
			if($s == $i)
			{
				continue;
			}
			else
			{
				if($checked == $twelve_days[$s])
				{
					$twelve_days[$s]='double';
				}
			}
		}
	}
	
	
		//debugging
/*		echo '<pre>';
		echo 'array of all who did tr today after double check:';
		echo '<br>';
		var_dump($t);
		echo '</pre>';
*/	
		
	//removing doubles
	for($i=0;$i<count($twelve_days);$i++)
	{
		if($twelve_days[$i] == 'double')//value is a double, dropped
		{
			continue;
		}	
		else if (substr($twelve_days[$i],-1) == 0)//removes last character if it's 0
		{
			$twelve_days[$i]=substr($twelve_days[$i],0,14);
			$twelve_days_1[$twelve_days_1_count]=$twelve_days[$i];
			$twelve_days_1_count++;
		}
		else//value isn't a double, goes into final array
		{
			$twelve_days_1[$twelve_days_1_count]=$twelve_days[$i];
			$twelve_days_1_count++;
		}
	}
		
		//debugging
/*		echo '<pre>';
		echo 'array of all who did tr twelve_days ago after removal:';
		echo '<br>';
		var_dump($twelve_days_1);
		echo '<br>';
		echo '</pre>';
*/	

//-------------thirteen_days ago ---------------------//

// getting all entries from the day before yesterday
	//sql
	$sql1="SELECT * FROM `Ie_comp_today_p` WHERE DATE(`TIME`) = CURDATE() - INTERVAL 13 DAY;";
	$query = mysqli_query($con,$sql1);	
	//$row = mysqli_fetch_array($query,MYSQLI_ASSOC);
	
	//vars
	$p = array();
	$thirteen_days = array();
	$thirteen_days_1 = array();
	$thirteen_days_1_count = 0;
	$i = 0;
	
	//query data to array
	while ($row = mysqli_fetch_array($query,MYSQLI_ASSOC))
		{
			$thirteen_days[$i]=$row['UPDATED'];// getting the UPDATED column content for row array
			
			$i++;
		}
	
	
		//debugging
/*		echo '<pre>';
		echo 'SELECT * FROM `Ie_comp_today_p` WHERE DATE(`TIME`) = CURDATE():';
		echo '<br>';
		var_dump($row);
		echo '<br>';
		echo 'array of all who did tr today:';
		echo '<br>';
		var_dump($t);
		echo '</pre>';
*/	
	
	//checking for doubles
	for($i=0;$i<count($thirteen_days);$i++)
	{
		//setting value to be checked
		$checked = $thirteen_days[$i];
		
		for ($s=0;$s<count($thirteen_days);$s++)
		{
			if($s == $i)
			{
				continue;
			}
			else
			{
				if($checked == $thirteen_days[$s])
				{
					$thirteen_days[$s]='double';
				}
			}
		}
	}
	
	
		//debugging
/*		echo '<pre>';
		echo 'array of all who did tr today after double check:';
		echo '<br>';
		var_dump($t);
		echo '</pre>';
*/	
		
	//removing doubles
	for($i=0;$i<count($thirteen_days);$i++)
	{
		if($thirteen_days[$i] == 'double')//value is a double, dropped
		{
			continue;
		}	
		else if (substr($thirteen_days[$i],-1) == 0)//removes last character if it's 0
		{
			$thirteen_days[$i]=substr($thirteen_days[$i],0,14);
			$thirteen_days_1[$thirteen_days_1_count]=$thirteen_days[$i];
			$thirteen_days_1_count++;
		}
		else//value isn't a double, goes into final array
		{
			$thirteen_days_1[$thirteen_days_1_count]=$thirteen_days[$i];
			$thirteen_days_1_count++;
		}
	}
		
		//debugging
/*		echo '<pre>';
		echo 'array of all who did tr thirteen_days ago after removal:';
		echo '<br>';
		var_dump($thirteen_days_1);
		echo '<br>';
		echo '</pre>';
*/	

//-------------fourteen_days ago ---------------------//

// getting all entries from the day before yesterday
	//sql
	$sql1="SELECT * FROM `Ie_comp_today_p` WHERE DATE(`TIME`) = CURDATE() - INTERVAL 14 DAY;";
	$query = mysqli_query($con,$sql1);	
	//$row = mysqli_fetch_array($query,MYSQLI_ASSOC);
	
	//vars
	$p = array();
	$fourteen_days = array();
	$fourteen_days_1 = array();
	$fourteen_days_1_count = 0;
	$i = 0;
	
	//query data to array
	while ($row = mysqli_fetch_array($query,MYSQLI_ASSOC))
		{
			$fourteen_days[$i]=$row['UPDATED'];// getting the UPDATED column content for row array
			
			$i++;
		}
	
	
		//debugging
/*		echo '<pre>';
		echo 'SELECT * FROM `Ie_comp_today_p` WHERE DATE(`TIME`) = CURDATE():';
		echo '<br>';
		var_dump($row);
		echo '<br>';
		echo 'array of all who did tr today:';
		echo '<br>';
		var_dump($t);
		echo '</pre>';
*/	
	
	//checking for doubles
	for($i=0;$i<count($fourteen_days);$i++)
	{
		//setting value to be checked
		$checked = $fourteen_days[$i];
		
		for ($s=0;$s<count($fourteen_days);$s++)
		{
			if($s == $i)
			{
				continue;
			}
			else
			{
				if($checked == $fourteen_days[$s])
				{
					$fourteen_days[$s]='double';
				}
			}
		}
	}
	
	
		//debugging
/*		echo '<pre>';
		echo 'array of all who did tr today after double check:';
		echo '<br>';
		var_dump($t);
		echo '</pre>';
*/	
		
	//removing doubles
	for($i=0;$i<count($fourteen_days);$i++)
	{
		if($fourteen_days[$i] == 'double')//value is a double, dropped
		{
			continue;
		}	
		else if (substr($fourteen_days[$i],-1) == 0)//removes last character if it's 0
		{
			$fourteen_days[$i]=substr($fourteen_days[$i],0,14);
			$fourteen_days_1[$fourteen_days_1_count]=$fourteen_days[$i];
			$fourteen_days_1_count++;
		}
		else//value isn't a double, goes into final array
		{
			$fourteen_days_1[$fourteen_days_1_count]=$fourteen_days[$i];
			$fourteen_days_1_count++;
		}
	}
		
		//debugging
/*		echo '<pre>';
		echo 'array of all who did tr fourteen_days ago after removal:';
		echo '<br>';
		var_dump($fourteen_days_1);
		echo '<br>';
		echo '</pre>';
*/	
				
	
//-----------comp data--------------//
	
// getting data from comp data
	//sql
	$sql1="SELECT * FROM `Ie_comp_data`";
	$query = mysqli_query($con,$sql1);	
	$row = mysqli_fetch_array($query,MYSQLI_ASSOC);
		
	//getting row's keys
	$k=array_keys($row);
	$f=array();
	
	//setting array keys
	for ($i=2;$i<count($row);$i++)
	{
		$k_1[$i-2]=$k[$i];//making k_1 array of keys atarting with index 0
		$f[strval($k_1[$i-2])]['crown']=0;//array with id as key
		$f[strval($k_1[$i-2])]['veteran']=0;//array with id as key
		$f[strval($k_1[$i-2])]['fourteen_days_ago']=0;//array with id as key
		$f[strval($k_1[$i-2])]['thirteen_days_ago']=0;//array with id as key
		$f[strval($k_1[$i-2])]['twelve_days_ago']=0;//array with id as key
		$f[strval($k_1[$i-2])]['eleven_days_ago']=0;//array with id as key
		$f[strval($k_1[$i-2])]['ten_days_ago']=0;//array with id as key
		$f[strval($k_1[$i-2])]['nine_days_ago']=0;//array with id as key
		$f[strval($k_1[$i-2])]['eight_days_ago']=0;//array with id as key
		$f[strval($k_1[$i-2])]['seven_days_ago']=0;//array with id as key
		$f[strval($k_1[$i-2])]['six_days_ago']=0;//array with id as key
		$f[strval($k_1[$i-2])]['five_days_ago']=0;//array with id as key
		$f[strval($k_1[$i-2])]['four_days_ago']=0;//array with id as key
		$f[strval($k_1[$i-2])]['three_days_ago']=0;//array with id as key
		$f[strval($k_1[$i-2])]['yesterday-1']=0;//array with id as key
		$f[strval($k_1[$i-2])]['yesterday']=0;//array with id as key
		$f[strval($k_1[$i-2])]['today']=0;//array with id as key
	}
	
	
	//debugging
/*		echo '<pre>';
		echo 'SELECT * FROM `Ie_comp_data`:';
		echo '<br>';
		var_dump($row);
		echo '<br>';
		echo 'array of keys:';
		echo '<br>';
		var_dump($k);
		echo '<br>';
		echo 'array of keys starting with index 0:';
		echo '<br>';
		var_dump($k_1);
		echo '<br>';
		echo 'array of users and tr status:';
		echo '<br>';
		var_dump($f);
		echo '<br>';
		echo 'user array\'s keys:';
		echo '<br>';
		var_dump(array_keys($f));
		echo '</pre>';	
*/

//----------------f array-----------------//
	
//updating f array to current update status

//------updating fourteen_days ago----------//
	
	//vars
	$f_keys=array_keys($f);
	
	// updating
	for($i=0;$i<count($fourteen_days_1);$i++)
	{
		//setting value to be checked
		$checked = $fourteen_days_1[$i];
		
		for ($s=0;$s<count($f_keys);$s++)
		{
			if($checked == $f_keys[$s])
			{
				$f[$checked]['fourteen_days_ago']=1;
				//$f[$checked]['total'] = 'לפני אתמול';//updated only yesterday
			}
		}
	}



//------updating thirteen_days ago----------//
	
	//vars
	$f_keys=array_keys($f);
	
	// updating
	for($i=0;$i<count($thirteen_days_1);$i++)
	{
		//setting value to be checked
		$checked = $thirteen_days_1[$i];
		
		for ($s=0;$s<count($f_keys);$s++)
		{
			if($checked == $f_keys[$s])
			{
				$f[$checked]['thirteen_days_ago']=1;
				//$f[$checked]['total'] = 'לפני אתמול';//updated only yesterday
			}
		}
	}



//------updating twelve_days ago----------//
	
	//vars
	$f_keys=array_keys($f);
	
	// updating
	for($i=0;$i<count($twelve_days_1);$i++)
	{
		//setting value to be checked
		$checked = $twelve_days_1[$i];
		
		for ($s=0;$s<count($f_keys);$s++)
		{
			if($checked == $f_keys[$s])
			{
				$f[$checked]['twelve_days_ago']=1;
				//$f[$checked]['total'] = 'לפני אתמול';//updated only yesterday
			}
		}
	}



//------updating eleven_days ago----------//
	
	//vars
	$f_keys=array_keys($f);
	
	// updating
	for($i=0;$i<count($eleven_days_1);$i++)
	{
		//setting value to be checked
		$checked = $eleven_days_1[$i];
		
		for ($s=0;$s<count($f_keys);$s++)
		{
			if($checked == $f_keys[$s])
			{
				$f[$checked]['eleven_days_ago']=1;
				//$f[$checked]['total'] = 'לפני אתמול';//updated only yesterday
			}
		}
	}



//------updating ten_days ago----------//
	
	//vars
	$f_keys=array_keys($f);
	
	// updating
	for($i=0;$i<count($ten_days_1);$i++)
	{
		//setting value to be checked
		$checked = $ten_days_1[$i];
		
		for ($s=0;$s<count($f_keys);$s++)
		{
			if($checked == $f_keys[$s])
			{
				$f[$checked]['ten_days_ago']=1;
				//$f[$checked]['total'] = 'לפני אתמול';//updated only yesterday
			}
		}
	}



//------updating nine_days ago----------//
	
	//vars
	$f_keys=array_keys($f);
	
	// updating
	for($i=0;$i<count($nine_days_1);$i++)
	{
		//setting value to be checked
		$checked = $nine_days_1[$i];
		
		for ($s=0;$s<count($f_keys);$s++)
		{
			if($checked == $f_keys[$s])
			{
				$f[$checked]['nine_days_ago']=1;
				//$f[$checked]['total'] = 'לפני אתמול';//updated only yesterday
			}
		}
	}



//------updating eight_days ago----------//
	
	//vars
	$f_keys=array_keys($f);
	
	// updating
	for($i=0;$i<count($eight_days_1);$i++)
	{
		//setting value to be checked
		$checked = $eight_days_1[$i];
		
		for ($s=0;$s<count($f_keys);$s++)
		{
			if($checked == $f_keys[$s])
			{
				$f[$checked]['eight_days_ago']=1;
				//$f[$checked]['total'] = 'לפני אתמול';//updated only yesterday
			}
		}
	}


//------updating seven_days ago----------//
	
	//vars
	$f_keys=array_keys($f);
	
	// updating
	for($i=0;$i<count($seven_days_1);$i++)
	{
		//setting value to be checked
		$checked = $seven_days_1[$i];
		
		for ($s=0;$s<count($f_keys);$s++)
		{
			if($checked == $f_keys[$s])
			{
				$f[$checked]['seven_days_ago']=1;
				//$f[$checked]['total'] = 'לפני אתמול';//updated only yesterday
			}
		}
	}


//------updating six_days ago----------//
	
	//vars
	$f_keys=array_keys($f);
	
	// updating
	for($i=0;$i<count($six_days_1);$i++)
	{
		//setting value to be checked
		$checked = $six_days_1[$i];
		
		for ($s=0;$s<count($f_keys);$s++)
		{
			if($checked == $f_keys[$s])
			{
				$f[$checked]['six_days_ago']=1;
				//$f[$checked]['total'] = 'לפני אתמול';//updated only yesterday
			}
		}
	}

//------updating five_days ago----------//
	
	//vars
	$f_keys=array_keys($f);
	
	// updating
	for($i=0;$i<count($five_days_1);$i++)
	{
		//setting value to be checked
		$checked = $five_days_1[$i];
		
		for ($s=0;$s<count($f_keys);$s++)
		{
			if($checked == $f_keys[$s])
			{
				$f[$checked]['five_days_ago']=1;
				//$f[$checked]['total'] = 'לפני אתמול';//updated only yesterday
			}
		}
	}

//------updating four_days ago----------//
	
	//vars
	$f_keys=array_keys($f);
	
	// updating
	for($i=0;$i<count($four_days_1);$i++)
	{
		//setting value to be checked
		$checked = $four_days_1[$i];
		
		for ($s=0;$s<count($f_keys);$s++)
		{
			if($checked == $f_keys[$s])
			{
				$f[$checked]['four_days_ago']=1;
				//$f[$checked]['total'] = 'לפני אתמול';//updated only yesterday
			}
		}
	}

//------updating three_days ago----------//
	
	//vars
	$f_keys=array_keys($f);
	
	// updating
	for($i=0;$i<count($three_days_1);$i++)
	{
		//setting value to be checked
		$checked = $three_days_1[$i];
		
		for ($s=0;$s<count($f_keys);$s++)
		{
			if($checked == $f_keys[$s])
			{
				$f[$checked]['three_days_ago']=1;
				//$f[$checked]['total'] = 'לפני אתמול';//updated only yesterday
			}
		}
	}


//---------------------------------------------//	
	//updating day before yesterday
	
	//vars
	$f_keys=array_keys($f);
	
	// updating
	for($i=0;$i<count($g_1);$i++)
	{
		//setting value to be checked
		$checked = $g_1[$i];
		
		for ($s=0;$s<count($f_keys);$s++)
		{
			if($checked == $f_keys[$s])
			{
				$f[$checked]['yesterday-1']=1;
				$f[$checked]['total'] = 'לפני אתמול';//updated only yesterday
			}
		}
	}
		
	//updating yesterday
	
	//vars
	$f_keys=array_keys($f);
	
	// updating
	for($i=0;$i<count($y_1);$i++)
	{
		//setting value to be checked
		$checked = $y_1[$i];
		
		for ($s=0;$s<count($f_keys);$s++)
		{
			if($checked == $f_keys[$s])
			{
				$f[$checked]['yesterday']=1;
				$f[$checked]['total'] = 'אתמול';//updated only yesterday
			}
		}
	}
	
	//updating today
	
	//vars
	$f_keys=array_keys($f);
	
	// updating
	if(count($t_1) > 0)//at least one updated today
	{
		for($i=0;$i<count($t_1);$i++)
		{
			//setting value to be checked
			$checked = $t_1[$i];
			
			for ($s=0;$s<count($f_keys);$s++)
			{
				if($checked == $f_keys[$s])//name exists in updated today's list
				{
					$f[$checked]['today']=1;
					
					if($f[$checked]['yesterday'] == 1)//updated yesterday too
					{
						if($f[$checked]['yesterday-1'] == 1)////updated the day before yesterday too
						{
							if($f[$checked]['three_days_ago'] == 1)// UPDATED 3 DAYS AGO
							{
								if($f[$checked]['four_days_ago'] == 1)// UPDATED 4 DAYS AGO
								{
									if($f[$checked]['five_days_ago'] == 1)// UPDATED 5 DAYS AGO
									{
										if($f[$checked]['six_days_ago'] == 1)// UPDATED 6 DAYS AGO
										{
											if($f[$checked]['seven_days_ago'] == 1)// UPDATED 7 DAYS AGO
											{
												if($f[$checked]['eight_days_ago'] == 1)// UPDATED 8 DAYS AGO
												{
													if($f[$checked]['nine_days_ago'] == 1)// UPDATED 9 DAYS AGO
													{
														if($f[$checked]['ten_days_ago'] == 1)// UPDATED 10 DAYS AGO
														{
															if($f[$checked]['eleven_days_ago'] == 1)// UPDATED 11 DAYS AGO
															{
																if($f[$checked]['twelve_days_ago'] == 1)// UPDATED 12 DAYS AGO
																{
																	if($f[$checked]['thirteen_days_ago'] == 1)// UPDATED 13 DAYS AGO
																	{
																		if($f[$checked]['fourteen_days_ago'] == 1)// UPDATED 14 DAYS AGO
																		{
																			$f[$checked]['total'] = 'strike_14';// UPDATED 14 DAYS IN A ROW
																			update_veteran_14($checked,$con);//updating experience level to 14
																		}
																		/* TO BE CONTINUED
																			else
																			{
																				$f[$checked]['total'] = 'strike_14';// UPDATED 14 DAYS IN A ROW
																			}
																		*/
																	}
																	else
																	{
																		$f[$checked]['total'] = 'strike_13';// UPDATED 13 DAYS IN A ROW
																	}
																}
																else
																{
																	$f[$checked]['total'] = 'strike_12';// UPDATED 12 DAYS IN A ROW
																}
															}
															else
															{
																$f[$checked]['total'] = 'strike_11';// UPDATED 11 DAYS IN A ROW
															}
														}
														else
														{
															$f[$checked]['total'] = 'strike_10';// UPDATED 10 DAYS IN A ROW
														}
													}
													else
													{
														$f[$checked]['total'] = 'strike_9';// UPDATED 9 DAYS IN A ROW
													}
												}
												else
												{
													$f[$checked]['total'] = 'strike_8';// UPDATED 8 DAYS IN A ROW
												}
											}
											else
											{
												$f[$checked]['total'] = 'strike_7';// UPDATED 7 DAYS IN A ROW
												update_veteran_7($checked,$con);//updating experience level to 7
											}
										}
										else
										{
											$f[$checked]['total'] = 'strike_6';// UPDATED 6 DAYS IN A ROW
										}
									}
									else
									{
										$f[$checked]['total'] = 'strike_5';// UPDATED 5 DAYS IN A ROW
									}
								}
								else
								{
									$f[$checked]['total'] = 'strike_4';// UPDATED 4 DAYS IN A ROW
								}
							}
							else
							{
								$f[$checked]['total'] = 'strike_3';// UPDATED 3 DAYS IN A ROW
								update_veteran($checked,$con);//updating experience level to 3
							}
						}
						else
						{	
							$f[$checked]['total'] = 'יומיים ברצף';
						}
					}
					else
					{
						$f[$checked]['total'] = 'היום';//updated only today
					}
				}
				if ($f[$f_keys[$s]]['yesterday'] == 0 && $f[$f_keys[$s]]['today'] == 0)
				{
					$f[$f_keys[$s]]['total'] = 'לזלז';//not yesterday and not today
				}
			}
		}
	}
	else//no one updated today
	{
		for ($s=0;$s<count($f_keys);$s++)
		{
			if($f[$f_keys[$s]]['yesterday'] == 1)//updated yesterday
			{
				$f[$f_keys[$s]]['total'] = 'אתמול';
			}
			if ($f[$f_keys[$s]]['yesterday'] == 0 && $f[$f_keys[$s]]['today'] == 0)
			{
				$f[$f_keys[$s]]['total'] = 'לזלז';//not yesterday and not today
			}
		}
	}


	
//-------------updating experience level-3-------------------//

// getting all entries where veteran = 3
	//sql
	$sql1="SELECT * FROM `Ie_comp_today_v_p` WHERE `VETERAN` = 3";
	$query = mysqli_query($con,$sql1);	
	//$row = mysqli_fetch_array($query,MYSQLI_ASSOC);
	
	//vars
	$p = array();
	$e = array();
	$e_1 = array();
	$e_1_count = 0;
	$i = 0;
	
	//query data to array
	while ($row = mysqli_fetch_array($query,MYSQLI_ASSOC))
		{
			$e[$i]=$row['UPDATED'];// getting the UPDATED column content for row array
			
			$i++;
		}
	
	
		//debugging
/*		echo '<pre>';
		echo 'SELECT * FROM `Ie_comp_today_p` WHERE DATE(`TIME`) = CURDATE():';
		echo '<br>';
		var_dump($row);
		echo '<br>';
		echo 'array of all who did tr today:';
		echo '<br>';
		var_dump($t);
		echo '</pre>';
*/	
	
	//checking for doubles
	for($i=0;$i<count($e);$i++)
	{
		//setting value to be checked
		$checked = $e[$i];
		
		for ($s=0;$s<count($e);$s++)
		{
			if($s == $i)
			{
				continue;
			}
			else
			{
				if($checked == $e[$s])
				{
					$e[$s]='double';
				}
			}
		}
	}
	
	
		//debugging
/*		echo '<pre>';
		echo 'array of all who did tr today after double check:';
		echo '<br>';
		var_dump($t);
		echo '</pre>';
*/	
		
	//removing doubles
	for($i=0;$i<count($e);$i++)
	{
		if($e[$i] == 'double')//value is a double, dropped
		{
			continue;
		}	
		else if (substr($e[$i],-1) == 0)//removes last character if it's 0
		{
			$e[$i]=substr($e[$i],0,14);
			$e_1[$g_1_count]=$e[$i];
			$e_1_count++;
		}
		else//value isn't a double, goes into final array
		{
			$e_1[$e_1_count]=$e[$i];
			$e_1_count++;
		}
	}
		
		//debugging
	/*	echo '<pre>';
		echo 'array of experience:';
		echo '<br>';
		var_dump($e_1);
		echo '<br>';
		echo '</pre>';
	*/	
	
	//updating veteran status
	
	//vars
	$f_keys=array_keys($f);
	
	// updating
	for($i=0;$i<count($e_1);$i++)
	{
		//setting value to be checked
		$checked = $e_1[$i];
		
		for ($s=0;$s<count($f_keys);$s++)
		{
			if($checked == $f_keys[$s])// found in veteran array
			{
				$f[$checked]['veteran']=3;//updated 3 days in a row
			}
		}
	}

//-------------updating experience level-7-------------------//

// getting all entries where veteran = 7
	//sql
	$sql1="SELECT * FROM `Ie_comp_today_v_p` WHERE `VETERAN` = 7";
	$query = mysqli_query($con,$sql1);	
	//$row = mysqli_fetch_array($query,MYSQLI_ASSOC);
	
	//vars
	$p = array();
	$e = array();
	$e_1 = array();
	$e_1_count = 0;
	$i = 0;
	
	//query data to array
	while ($row = mysqli_fetch_array($query,MYSQLI_ASSOC))
		{
			$e[$i]=$row['UPDATED'];// getting the UPDATED column content for row array
			
			$i++;
		}
	
	
		//debugging
/*		echo '<pre>';
		echo 'SELECT * FROM `Ie_comp_today_p` WHERE DATE(`TIME`) = CURDATE():';
		echo '<br>';
		var_dump($row);
		echo '<br>';
		echo 'array of all who did tr today:';
		echo '<br>';
		var_dump($t);
		echo '</pre>';
*/	
	
	//checking for doubles
	for($i=0;$i<count($e);$i++)
	{
		//setting value to be checked
		$checked = $e[$i];
		
		for ($s=0;$s<count($e);$s++)
		{
			if($s == $i)
			{
				continue;
			}
			else
			{
				if($checked == $e[$s])
				{
					$e[$s]='double';
				}
			}
		}
	}
	
	
		//debugging
/*		echo '<pre>';
		echo 'array of all who did tr today after double check:';
		echo '<br>';
		var_dump($t);
		echo '</pre>';
*/	
		
	//removing doubles
	for($i=0;$i<count($e);$i++)
	{
		if($e[$i] == 'double')//value is a double, dropped
		{
			continue;
		}	
		else if (substr($e[$i],-1) == 0)//removes last character if it's 0
		{
			$e[$i]=substr($e[$i],0,14);
			$e_1[$g_1_count]=$e[$i];
			$e_1_count++;
		}
		else//value isn't a double, goes into final array
		{
			$e_1[$e_1_count]=$e[$i];
			$e_1_count++;
		}
	}
		
		//debugging
	/*	echo '<pre>';
		echo 'array of experience:';
		echo '<br>';
		var_dump($e_1);
		echo '<br>';
		echo '</pre>';
	*/	
	
	//updating veteran status
	
	//vars
	$f_keys=array_keys($f);
	
	// updating
	for($i=0;$i<count($e_1);$i++)
	{
		//setting value to be checked
		$checked = $e_1[$i];
		
		for ($s=0;$s<count($f_keys);$s++)
		{
			if($checked == $f_keys[$s])// found in veteran array
			{
				$f[$checked]['veteran']=7;//updated 7 days in a row
			}
		}
	}
	
//-------------updating experience level-14-------------------//

// getting all entries where veteran = 14
	//sql
	$sql1="SELECT * FROM `Ie_comp_today_v_p` WHERE `VETERAN` = 14";
	$query = mysqli_query($con,$sql1);	
	//$row = mysqli_fetch_array($query,MYSQLI_ASSOC);
	
	//vars
	$p = array();
	$e = array();
	$e_1 = array();
	$e_1_count = 0;
	$i = 0;
	
	//query data to array
	while ($row = mysqli_fetch_array($query,MYSQLI_ASSOC))
		{
			$e[$i]=$row['UPDATED'];// getting the UPDATED column content for row array
			
			$i++;
		}
	
	
		//debugging
/*		echo '<pre>';
		echo 'SELECT * FROM `Ie_comp_today_p` WHERE DATE(`TIME`) = CURDATE():';
		echo '<br>';
		var_dump($row);
		echo '<br>';
		echo 'array of all who did tr today:';
		echo '<br>';
		var_dump($t);
		echo '</pre>';
*/	
	
	//checking for doubles
	for($i=0;$i<count($e);$i++)
	{
		//setting value to be checked
		$checked = $e[$i];
		
		for ($s=0;$s<count($e);$s++)
		{
			if($s == $i)
			{
				continue;
			}
			else
			{
				if($checked == $e[$s])
				{
					$e[$s]='double';
				}
			}
		}
	}
	
	
		//debugging
/*		echo '<pre>';
		echo 'array of all who did tr today after double check:';
		echo '<br>';
		var_dump($t);
		echo '</pre>';
*/	
		
	//removing doubles
	for($i=0;$i<count($e);$i++)
	{
		if($e[$i] == 'double')//value is a double, dropped
		{
			continue;
		}	
		else if (substr($e[$i],-1) == 0)//removes last character if it's 0
		{
			$e[$i]=substr($e[$i],0,14);
			$e_1[$g_1_count]=$e[$i];
			$e_1_count++;
		}
		else//value isn't a double, goes into final array
		{
			$e_1[$e_1_count]=$e[$i];
			$e_1_count++;
		}
	}
		
		//debugging
	/*	echo '<pre>';
		echo 'array of experience:';
		echo '<br>';
		var_dump($e_1);
		echo '<br>';
		echo '</pre>';
	*/	
	
	//updating veteran status
	
	//vars
	$f_keys=array_keys($f);
	
	// updating
	for($i=0;$i<count($e_1);$i++)
	{
		//setting value to be checked
		$checked = $e_1[$i];
		
		for ($s=0;$s<count($f_keys);$s++)
		{
			if($checked == $f_keys[$s])// found in veteran array
			{
				$f[$checked]['veteran']=14;//updated 14 days in a row
			}
		}
	}
	
	
//------------UPDATING CROWN STATUS-------------------------//

// getting all entries where crown = 1
	//sql
	$sql1="SELECT * FROM `Ie_comp_today_c_p` WHERE `CROWN` = 1";
	$query = mysqli_query($con,$sql1);	
	//$row = mysqli_fetch_array($query,MYSQLI_ASSOC);
	
	//vars
	$p = array();
	$e = array();
	$e_1 = array();
	$e_1_count = 0;
	$i = 0;
	
	//query data to array
	while ($row = mysqli_fetch_array($query,MYSQLI_ASSOC))
		{
			$e[$i]=$row['UPDATED'];// getting the UPDATED column content for row array
			
			$i++;
		}
	
	
		//debugging
/*		echo '<pre>';
		echo 'SELECT * FROM `Ie_comp_today_c` WHERE CROWN = 1:';
		echo '<br>';
		var_dump($row);
		echo '<br>';
		var_dump($con);
		echo '</pre>';
*/	
	
	//checking for doubles
	for($i=0;$i<count($e);$i++)
	{
		//setting value to be checked
		$checked = $e[$i];
		
		for ($s=0;$s<count($e);$s++)
		{
			if($s == $i)
			{
				continue;
			}
			else
			{
				if($checked == $e[$s])
				{
					$e[$s]='double';
				}
			}
		}
	}
	
	
		//debugging
/*		echo '<pre>';
		echo 'array of all who did tr today after double check:';
		echo '<br>';
		var_dump($t);
		echo '</pre>';
*/	
		
	//removing doubles
	for($i=0;$i<count($e);$i++)
	{
		if($e[$i] == 'double')//value is a double, dropped
		{
			continue;
		}	
		else if (substr($e[$i],-1) == 0)//removes last character if it's 0
		{
			$e[$i]=substr($e[$i],0,14);
			$e_1[$g_1_count]=$e[$i];
			$e_1_count++;
		}
		else//value isn't a double, goes into final array
		{
			$e_1[$e_1_count]=$e[$i];
			$e_1_count++;
		}
	}
		
/*		//debugging
		echo '<pre>';
		echo 'array of crown:';
		echo '<br>';
		var_dump($e_1);
		echo '<br>';
		echo '</pre>';
*/		
	
	//updating crown status
	
	//vars
	$f_keys=array_keys($f);
	
	// updating
	for($i=0;$i<count($e_1);$i++)
	{
		//setting value to be checked
		$checked = $e_1[$i];
		
		for ($s=0;$s<count($f_keys);$s++)
		{
			if($checked == $f_keys[$s])// found in crown array
			{
				$f[$checked]['crown']=1;// deserves a crown
			}
		}
	}

	
//-----------END OF PAGE--------------//
	
	//debugging
/*		echo '<pre>';
		echo 'user array after updating yesterday and today:';
		echo '<br>';
		var_dump($f);
		echo '<br>';
		echo '</pre>';	
*/	
?>