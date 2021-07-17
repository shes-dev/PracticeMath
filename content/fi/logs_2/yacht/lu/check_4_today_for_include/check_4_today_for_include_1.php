<?php
//debugging
	// data
/*	$host = 'localhost';
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
// getting all entries from today
	//sql
	$sql1="SELECT * FROM `Ie_comp_today` WHERE DATE(`TIME`) = CURDATE()";
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
		echo 'SELECT * FROM `Ie_comp_today` WHERE DATE(`TIME`) = CURDATE():';
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
	
// getting all entries from yesterday
	//sql
	$sql1="SELECT * FROM `Ie_comp_today` WHERE DATE(`TIME`) = CURDATE() - 1";
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
		echo 'SELECT * FROM `Ie_comp_today` WHERE DATE(`TIME`) = CURDATE() - 1:';
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
	
//updating f array to current update status
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
						$f[$checked]['total'] = 'יומיים ברצף';
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

/*	//debugging
		echo '<pre>';
		echo 'user array after updating yesterday and today:';
		echo '<br>';
		var_dump($f);
		echo '<br>';
		echo '</pre>';	
*/	
?>