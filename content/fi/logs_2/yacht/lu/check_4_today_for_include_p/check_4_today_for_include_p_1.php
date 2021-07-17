<?php
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
	
	/*
		//debugging
		echo '<pre>';
		echo 'today before double check:';
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
	
	/*
		//debugging
		echo '<pre>';
		echo 'today after double check:';
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
		
	/*	//debugging
		echo '<pre>';
		echo 't_1 today after double removal:';
		echo '<br>';
		var_dump($t_1);
		echo '<br>';
		/*echo 't_1 last character:';
		echo '<br>';
		var_dump(substr($t_1[2],-1));
		echo '<br>';
		echo 't_1 remaining characters:';
		echo '<br>';
		var_dump(substr($t_1[2],0,14));
		echo '</pre>';
	*/	
	
// getting all entries from yesterday
	//sql
	$sql1="SELECT * FROM `Ie_comp_today_p` WHERE DATE(`TIME`) = CURDATE() - 1";
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
	
	/*	
		//debugging
		echo '<pre>';
		echo 'yesterday before double check:';
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
	
	/*
	//debugging
		echo '<pre>';
		echo 'yesterday after double check:';
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
		
	/*	//debugging
		echo '<pre>';
		echo 'y_1 yesterday after double removal:';
		echo '<br>';
		var_dump($y_1);
		echo '</pre>';
	*/
	
// getting data from comp data
	//sql
	$sql1="SELECT * FROM `Ie_comp_data_p` ";
	$query = mysqli_query($con,$sql1);	
	$row = mysqli_fetch_array($query,MYSQLI_ASSOC);
	
	//getting row's keys
	$k=array_keys($row);
	$f=array();
	
	//setting array keys
	for ($i=2;$i<count($row);$i++)
	{
		$k_1[$i-2]=$k[$i];
		$f[strval($k_1[$i-2])]['yesterday']=0;//array with id as key
		$f[strval($k_1[$i-2])]['today']=0;//array with id as key
	}
	
	/*
	//debugging
		echo '<pre>';
		echo 'k:';
		echo '<br>';
		var_dump($k);
		echo '<br>';
		echo 'k_1:';
		echo '<br>';
		var_dump($k_1);
		echo '<br>';
		echo 'f:';
		echo '<br>';
		var_dump($f);
		echo '<br>';
		echo 'f keys:';
		echo '<br>';
		var_dump(array_keys($f));
		echo '<br>';
		echo 'row:';
		echo '<br>';
		var_dump($row);
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
	
	
	//debugging
	/*	echo '<pre>';
		echo '<h4>f after updating:</h4>';
		echo '<br>';
		var_dump($f);
		echo '<br>';
		echo '</pre>';	
	*/
?>