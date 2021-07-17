<?php
//-->session_start();
//session_start();

// display errors
//	error_reporting(E_ALL);
//	ini_set('display_errors', 'On');

//vars
	$p = $_SESSION['r'];
	
// includes
	include "$p/test_po_5_add.php";
	
//	Functions

// time func
	
	function microtime_float()
	{
		list($usec, $sec) = explode(" ", microtime());
		return ((float)$usec + (float)$sec);
	}
	
//counts spaces,zeros and empty places in string
	function sta($str)
	{
		$d=[];
		$f=[];
		$v=0;
		$v_1=0;
		$t=[];
		$s=[];
		$v_2=0;
		$test_1=[];

		for ($c_1=0;$c_1<strlen($str);$c_1++)
		{
			$c_2=$c_1+1;
			$d[$c_1]=mb_substr($str,$c_1,1,'utf-8');
						
			if(preg_match("/\s/",$d[$c_1]))
			{
				$s[$v_2]=$c_1;
				$v_2++;
				//continue;
			}
			
			$test_1[$c_1]=empty($d[$c_1]);
			
			if (empty($d[$c_1]))
			{
				if($d[$c_1]=="0")
				{
					$t[$v_1]=$c_1;
					$v_1++;
					continue;
				}
				
				$f[$v]=$c_1;
				$v++;
				unset($d[$c_1]);
			}
		}
		return $d;
	}
	
	function check_length($str)
	{
		//checking length
		if (mb_strlen($str)>=8)
		{
			return TRUE;
		}	
	}

//check func
/* declared also in other file
	function valid($check)
	{
		//checking length
		if (mb_strlen($check)>=8)
		{
			return TRUE;
		}	
	}
*/
	
//gets list of folders in directory ordered by date
	function D($d)
	{
		$ignored = array('.', '..', '.svn', '.htaccess');

		$files = array();    
		foreach (scandir($d) as $file) 
		{
			if (in_array($file, $ignored)) continue;
			$files[$file] = filemtime($d . '/' . $file);
		}

		arsort($files);
		$files = array_keys($files);

		return ($files) ? $files : false;
	}
	
//copying files
	function copy_files($new_path,$p)
	{
		$a=['check_1.php',
		    'check_1_p.php',
			'check_2.php',
		    'check_2_p.php',
			'check_3.php',
		    'check_3_p.php',
			'check_11.php',
		    'check_12.php',
			'index.php',
			'local.css',
			'table.css'
			];
		
		$b=0;
		
		for ($i=0;$i<count($a);$i++)
		{
			$file = "../ex/name.explainit.online/$a[$i]";
			$newfile = "$new_path/$a[$i]";
			
			if (copy($file, $newfile))
			{
				$b++;
			}
			else
			{
				return FALSE;
			}
		}
		
		if ($b == count($a))
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}
	
//setting check_11
	function set_check_11($new_path)
	{
		$host = 'localhost';
		$username = 'elad189g_ex_1';
		$password = '1qq2ww3ee4rr';
		$db = 'elad189g_ex_us';
		
		// creating Connection
		$con = mysqli_connect($host, $username, $password,$db);
				
		$Num = 1;
		$sql = "SELECT * FROM D WHERE U_TP = '$Num' ORDER BY U_I DESC LIMIT 1";
		$query = mysqli_query($con,$sql);
		$row =  mysqli_fetch_array($query,MYSQLI_ASSOC);
		
		// Enabling Hebrew
		mysqli_query($con,"SET character_set_client=utf8");
		mysqli_query($con,"SET character_set_connection=utf8");
		mysqli_query($con,"SET character_set_database=utf8");
		mysqli_query($con,"SET character_set_results=utf8");
		mysqli_query($con,"SET character_set_server=utf8");
				
		if(mysqli_num_rows($query) > 0)
		{

			$j=$row['U_V'];
			$i=$row['U_I'];
			$k=$row['U_I']%10;
			
			if($i>0&&$i<11)
			{
				$first = 'a';
				if($k == 0)
				{
					$k=10;
				}
			}
			if($i>10&&$i<21)
			{
				$first = 'b';
				if($k == 0)
				{
					$k=10;
				}
			}
			if($i>20&&$i<31)
			{
				$first = 'c';
				if($k == 0)
				{
					$k=10;
				}
			}
			if($i>30&&$i<41)
			{
				$first = 'd';
				if($k == 0)
				{
					$k=10;
				}
			}
			if($i>40&&$i<51)
			{
				$first = 'e';
				if($k == 0)
				{
					$k=10;
				}
			}
			if($i>50&&$i<61)
			{
				$first = 'f';
				if($k == 0)
				{
					$k=10;
				}
			}
			if($i>60&&$i<71)
			{
				$first = 'g';
				if($k == 0)
				{
					$k=10;
				}
			}
			if($i>70&&$i<81)
			{
				$first = 'h';
				if($k == 0)
				{
					$k=10;
				}
			}
			if($i>80&&$i<91)
			{
				$first = 'i';
				if($k == 0)
				{
					$k=10;
				}
			}
			if($i>90&&$i<101)
			{
				$first = 'j';
				if($k == 0)
				{
					$k=10;
				}
			}
			$s=$first.$k;
			$t="elad189g_ex_".$s;
			$v=['a'=>'localhost','b'=>$t,'c'=>$j,'d'=>$t];

		}
		
		//updating current index to 0
		$r=$row['U_I'];
		$sql = "UPDATE D SET U_TP = '0' WHERE U_I = '$r'";
		$query = mysqli_query($con,$sql);
		
		//updating next index to 1
		$s=$r+1;
		$sql = "UPDATE D SET U_TP = '1' WHERE U_I = '$s'";
		$query = mysqli_query($con,$sql);
				
		return $v;
	}

// Writing to far file
	function write2farfile($t,$content,$p)
	{
		$myfile = fopen("../../../../../ocartdata/storage/vendor/cardinity/cardinity-sdk-php/spec/Method/Refund/$t.txt", "w") or die("Unable to open file!");
			
		$txt = $content['a']."\n";
		fwrite($myfile, $txt);
		
		$txt = $content['b']."\n";
		fwrite($myfile, $txt);
		
		$txt = $content['c']."\n";
		fwrite($myfile, $txt);
		
		$txt = $content['d'];
		fwrite($myfile, $txt);
		
		fclose($myfile);
	}

// Writing to near file
	function write2nearfile($name_1,$t,$p)
	{
		$myfile = fopen("$name_1/check_13.txt", "w") or die("Unable to open file!");
				
		$txt = $t;
		fwrite($myfile, $txt);
				
		fclose($myfile);
	}

// Writing to db
	function write2db($t,$u,$y)
	{
		//data
		$host = 'localhost';
		$username = 'elad189g_ex_1';
		$password = '1qq2ww3ee4rr';
		$db = 'elad189g_ex_us';
		
		// creating Connection
		$con = mysqli_connect($host, $username, $password,$db);
		
		//user name
		$u = $_SESSION['u_i'];
		
		//sql
		$sql = "UPDATE U SET U_T1 = '$t' WHERE U_I = '$u'";
		$query = mysqli_query($con,$sql);
		
		$sql = "UPDATE U SET U_T2 = '$y' WHERE U_I = '$u'";
		$query = mysqli_query($con,$sql);
		
	}

	
// Openning far txt file
	function getfile($new_path,$p)
	{
		$t=$new_path;
		$myfile = fopen("../../../../../ocartdata/storage/vendor/cardinity/cardinity-sdk-php/spec/Method/Refund/$t.txt", "r") or die("Unable to open file!");
	
		$r=file_get_contents("../../../../../ocartdata/storage/vendor/cardinity/cardinity-sdk-php/spec/Method/Refund/$t.txt");
		
		fclose($myfile);
		
		//splitting by spaces
		$p = explode("\n", $r);

	}

// Openning near txt file	
	function getnearfile($p)
	{
		$myfile = fopen("$p/check_13.txt", "r") or die("Unable to open file!");
		
		$r=file_get_contents("$p/check_13.txt");
		
		fclose($myfile);
	}

//updating ex-comp
	function comp($n)
	{
		//$tin=$_SESSION['u_n'];
		$tin=strval($n);
		
		// data
		$host = 'localhost';
		$username = 'elad189g_ex_comp';
		$password = 'Italy2015';
		$db = 'elad189g_ex_comp';
	
		// creating Connection
		$con = mysqli_connect($host, $username, $password,$db);
		
		// checking Connection
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
		//*mysqli_select_db($con, "elad189g_ex_us"); 
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
		
		//adding column to Ie_comp
		$sql1="ALTER TABLE `Ie_comp` ADD `$tin` INT NOT NULL";
		$query = mysqli_query($con,$sql1);
		
		//adding column to Ie_comp_data
		$sql1="ALTER TABLE `Ie_comp_data` ADD `$tin` VARCHAR(50) NOT NULL";
		$query = mysqli_query($con,$sql1);
				
		//entering name to Ie_comp_data
		$b=$_SESSION['u_n_2'];
		
		$sql1="UPDATE `Ie_comp_data` SET `$tin`='$b' WHERE `Ie_comp_data`.`ID` = 1";
		$query = mysqli_query($con,$sql1);
		
	}
	
//updating ex-comp-p
	function comp_p($n)
	{
		//$tin=$_SESSION['u_n'];
		$tin=strval($n);
		
		// data
		$host = 'localhost';
		$username = 'elad189g_ex_comp';
		$password = 'Italy2015';
		$db = 'elad189g_ex_comp';
	
		// creating Connection
		$con = mysqli_connect($host, $username, $password,$db);
		
		// checking Connection
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
		mysqli_select_db($con, "elad189g_ex_us"); 
		
		// Enabling Hebrew
		mysqli_query($con,"SET character_set_client=utf8");
		mysqli_query($con,"SET character_set_connection=utf8");
		mysqli_query($con,"SET character_set_database=utf8");
		mysqli_query($con,"SET character_set_results=utf8");
		mysqli_query($con,"SET character_set_server=utf8");
		
		// Setting Time	
		$sql_Time = "SET time_zone = '+03:00';";
		$query = mysqli_query($con,$sql_Time);
		
		//adding column to Ie_comp
		$sql1="ALTER TABLE `Ie_comp_p` ADD `$tin` INT NOT NULL";
		$query = mysqli_query($con,$sql1);	
		
		//adding column to Ie_comp_data_p
		$sql1="ALTER TABLE `Ie_comp_data_p` ADD `$tin` VARCHAR(50) NOT NULL";
		$query = mysqli_query($con,$sql1);
		
		//entering name to Ie_comp_data_p
		$b=$_SESSION['u_n_2'];
		
		$sql1="UPDATE `Ie_comp_data_p` SET `$tin`='$b' WHERE `Ie_comp_data_p`.`ID` = 1";
		$query = mysqli_query($con,$sql1);

	}
	
//change 0
	function change_0($m)
	{
		for ($i=0;$i<strlen($m);$i++)
		{
			if ($m[$i] == '0')
			{
				$m[$i] = '1';
			}
		}
		return $m;
	}

//	Vars
	$_SESSION['message_1']='הי,<br> כאן מתחברים';
	//$_POST['pass_word'] = "";
		
// connecting
	// data
	$host = 'localhost';
	$username = 'elad189g_ex_1';
	$password = '1qq2ww3ee4rr';
	$db = 'elad189g_ex_us';
	
	// creating Connection
	$con = mysqli_connect($host, $username, $password,$db);
	
	// checking Connection
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
	mysqli_select_db($con, "elad189g_ex_us"); 
	
	// Enabling Hebrew
	mysqli_query($con,"SET character_set_client=utf8");
	mysqli_query($con,"SET character_set_connection=utf8");
	mysqli_query($con,"SET character_set_database=utf8");
	mysqli_query($con,"SET character_set_results=utf8");
	mysqli_query($con,"SET character_set_server=utf8");
	
	// Setting Time	
	$sql_Time = "SET time_zone = '+03:00';";
    $query = mysqli_query($con,$sql_Time);
	$RF = 6;
// Connecting End

//data

//if ($_SESSION['a'] == 1)
if (1)
{
	//vars
	date_default_timezone_set('Africa/Cairo');
	
	//getting timestamp
	$t_s = strval(microtime_float());
	//$t_s = "00000.2000";
	$t_s = change_0($t_s);
	$na=date('Y-m-d-His');
	$nam=date('Y-m-d-His-').$t_s;
	
	//creating folder
	$name_1="$p/logs_2/$nam";
	mkdir($name_1,0755);
		
	//copying files
	$copy_files_result = copy_files($name_1,$p);
	
	//creating far txt file - db query
	$check_set = set_check_11(0);
	
	//creating far txt file - writing to file 
	write2farfile($t_s,$check_set,$p);
	
	//creating near txt file - writing to file 
	write2nearfile($name_1,$t_s,$p);
	
	getfile($t_s,$p);
	getnearfile($p);
	comp($t_s);
	comp_p($t_s);
	write2db($t_s,'hof',$na);
	$_SESSION['a'] = 0;
}
else
{
	header ('location: ../v/error.php');
}
?>
