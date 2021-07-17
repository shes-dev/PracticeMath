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

//SETTING DB NAME
	// - GETS ROW NUMBER
	// - RETURNS DB NAME
	function letters($i)
	{
		//MODULO
		$k=$i%10;
		
		//CASE 1 
		if($i<261)	
		{
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
			if($i>100&&$i<111)
			{
				$first = 'k';
				if($k == 0)
				{
					$k=10;
				}
			}
			if($i>110&&$i<121)
			{
				$first = 'l';
				if($k == 0)
				{
					$k=10;
				}
			}
			if($i>120&&$i<131)
			{
				$first = 'm';
				if($k == 0)
				{
					$k=10;
				}
			}
			if($i>130&&$i<141)
			{
				$first = 'n';
				if($k == 0)
				{
					$k=10;
				}
			}
			if($i>140&&$i<151)
			{
				$first = 'o';
				if($k == 0)
				{
					$k=10;
				}
			}
			if($i>150&&$i<161)
			{
				$first = 'p';
				if($k == 0)
				{
					$k=10;
				}
			}
			if($i>160&&$i<171)
			{
				$first = 'q';
				if($k == 0)
				{
					$k=10;
				}
			}
			if($i>170&&$i<181)
			{
				$first = 'r';
				if($k == 0)
				{
					$k=10;
				}
			}
			if($i>180&&$i<191)
			{
				$first = 's';
				if($k == 0)
				{
					$k=10;
				}
			}
			if($i>190&&$i<201)
			{
				$first = 't';
				if($k == 0)
				{
					$k=10;
				}
			}
			if($i>200&&$i<211)
			{
				$first = 'u';
				if($k == 0)
				{
					$k=10;
				}
			}
			if($i>210&&$i<221)
			{
				$first = 'v';
				if($k == 0)
				{
					$k=10;
				}
			}
			if($i>220&&$i<231)
			{
				$first = 'w';
				if($k == 0)
				{
					$k=10;
				}
			}
			if($i>230&&$i<241)
			{
				$first = 'x';
				if($k == 0)
				{
					$k=10;
				}
			}
			if($i>240&&$i<251)
			{
				$first = 'y';
				if($k == 0)
				{
					$k=10;
				}
			}
		
		
			if($i>250&&$i<261)
			{
				$first = 'z';
				if($k == 0)
				{
					$k=10;
				}
			}
			//PUTTING LETTER AND NUMBER TOGETHER			
			$s=$first.$k;
			
			//CHANGING $s TO LOWER CASE
			$t=strtolower($s);
			
			//RETURNING DB NAME
			return $t;
		}//CASE 1
		
		//CASE 2
		if($i>260 && $i<521)
		{
			if($i>260&&$i<271)
			{
				$first = 'za';
				if($k == 0)
				{
					$k=10;
				}
			}
			if($i>270&&$i<281)
			{
				$first = 'Zb';
				if($k == 0)
				{
					$k=10;
				}
			}
			if($i>280&&$i<291)
			{
				$first = 'zc';
				if($k == 0)
				{
					$k=10;
				}
			}
			if($i>290&&$i<301)
			{
				$first = 'zD';
				if($k == 0)
				{
					$k=10;
				}
			}
			if($i>300&&$i<311)
			{
				$first = 'ze';
				if($k == 0)
				{
					$k=10;
				}
			}
			if($i>310&&$i<321)
			{
				$first = 'zF';
				if($k == 0)
				{
					$k=10;
				}
			}
			if($i>320&&$i<331)
			{
				$first = 'zg';
				if($k == 0)
				{
					$k=10;
				}
			}
			if($i>330&&$i<341)
			{
				$first = 'zh';
				if($k == 0)
				{
					$k=10;
				}
			}
			if($i>340&&$i<351)
			{
				$first = 'Zi';
				if($k == 0)
				{
					$k=10;
				}
			}
			if($i>350&&$i<361)
			{
				$first = 'zj';
				if($k == 0)
				{
					$k=10;
				}
			}
			if($i>360&&$i<371)
			{
				$first = 'Zk';
				if($k == 0)
				{
					$k=10;
				}
			}
			if($i>370&&$i<381)
			{
				$first = 'zl';
				if($k == 0)
				{
					$k=10;
				}
			}
			if($i>380&&$i<391)
			{
				$first = 'Zm';
				if($k == 0)
				{
					$k=10;
				}
			}
			if($i>390&&$i<401)
			{
				$first = 'zN';
				if($k == 0)
				{
					$k=10;
				}
			}
			if($i>400&&$i<411)
			{
				$first = 'zo';
				if($k == 0)
				{
					$k=10;
				}
			}
			if($i>410&&$i<421)
			{
				$first = 'zp';
				if($k == 0)
				{
					$k=10;
				}
			}
			if($i>420&&$i<431)
			{
				$first = 'Zq';
				if($k == 0)
				{
					$k=10;
				}
			}
			if($i>430&&$i<441)
			{
				$first = 'zr';
				if($k == 0)
				{
					$k=10;
				}
			}
			if($i>440&&$i<451)
			{
				$first = 'zS';
				if($k == 0)
				{
					$k=10;
				}
			}
			if($i>450&&$i<461)
			{
				$first = 'zt';
				if($k == 0)
				{
					$k=10;
				}
			}
			if($i>460&&$i<471)
			{
				$first = 'zu';
				if($k == 0)
				{
					$k=10;
				}
			}
			if($i>470&&$i<481)
			{
				$first = 'zV';
				if($k == 0)
				{
					$k=10;
				}
			}
			if($i>480&&$i<491)
			{
				$first = 'zw';
				if($k == 0)
				{
					$k=10;
				}
			}
			if($i>490&&$i<501)
			{
				$first = 'zX';
				if($k == 0)
				{
					$k=10;
				}
			}
			if($i>500&&$i<511)
			{
				$first = 'zy';
				if($k == 0)
				{
					$k=10;
				}
			}
			if($i>510&&$i<521)
			{
				$first = 'zZ';
				if($k == 0)
				{
					$k=10;
				}
			}
			//PUTTING LETTER AND NUMBER TOGETHER			
			$s=$first.$k;
			
			//CHANGING $s TO LOWER CASE
			$t=strtolower($s);
			
			//RETURNING DB NAME
			return $t;
		}//CASE 2
		
		//CASE 3
		if($i>520 && $i<781)
		{
			if($i>520&&$i<531)
			{
				$first = 'zza';
				if($k == 0)
				{
					$k=10;
				}
			}
			if($i>530&&$i<541)
			{
				$first = 'Zzb';
				if($k == 0)
				{
					$k=10;
				}
			}
			if($i>540&&$i<551)
			{
				$first = 'zzc';
				if($k == 0)
				{
					$k=10;
				}
			}
			if($i>550&&$i<561)
			{
				$first = 'zzD';
				if($k == 0)
				{
					$k=10;
				}
			}
			if($i>560&&$i<571)
			{
				$first = 'zZe';
				if($k == 0)
				{
					$k=10;
				}
			}
			if($i>570&&$i<581)
			{
				$first = 'zzF';
				if($k == 0)
				{
					$k=10;
				}
			}
			if($i>580&&$i<591)
			{
				$first = 'zZg';
				if($k == 0)
				{
					$k=10;
				}
			}
			if($i>590&&$i<601)
			{
				$first = 'zzh';
				if($k == 0)
				{
					$k=10;
				}
			}
			if($i>600&&$i<611)
			{
				$first = 'Zzi';
				if($k == 0)
				{
					$k=10;
				}
			}
			if($i>610&&$i<621)
			{
				$first = 'zZj';
				if($k == 0)
				{
					$k=10;
				}
			}
			if($i>620&&$i<631)
			{
				$first = 'ZZk';
				if($k == 0)
				{
					$k=10;
				}
			}
			if($i>630&&$i<641)
			{
				$first = 'zzl';
				if($k == 0)
				{
					$k=10;
				}
			}
			if($i>640&&$i<651)
			{
				$first = 'Zzm';
				if($k == 0)
				{
					$k=10;
				}
			}
			if($i>650&&$i<661)
			{
				$first = 'zZN';
				if($k == 0)
				{
					$k=10;
				}
			}
			if($i>660&&$i<671)
			{
				$first = 'zzo';
				if($k == 0)
				{
					$k=10;
				}
			}
			if($i>670&&$i<681)
			{
				$first = 'zZp';
				if($k == 0)
				{
					$k=10;
				}
			}
			if($i>680&&$i<691)
			{
				$first = 'ZZq';
				if($k == 0)
				{
					$k=10;
				}
			}
			if($i>690&&$i<701)
			{
				$first = 'zzr';
				if($k == 0)
				{
					$k=10;
				}
			}
			if($i>700&&$i<711)
			{
				$first = 'zZS';
				if($k == 0)
				{
					$k=10;
				}
			}
			if($i>710&&$i<721)
			{
				$first = 'zzt';
				if($k == 0)
				{
					$k=10;
				}
			}
			if($i>720&&$i<731)
			{
				$first = 'zZu';
				if($k == 0)
				{
					$k=10;
				}
			}
			if($i>730&&$i<741)
			{
				$first = 'zZV';
				if($k == 0)
				{
					$k=10;
				}
			}
			if($i>740&&$i<751)
			{
				$first = 'zzw';
				if($k == 0)
				{
					$k=10;
				}
			}
			if($i>750&&$i<761)
			{
				$first = 'zzX';
				if($k == 0)
				{
					$k=10;
				}
			}
			if($i>760&&$i<771)
			{
				$first = 'zzy';
				if($k == 0)
				{
					$k=10;
				}
			}
			if($i>770&&$i<781)
			{
				$first = 'zZz';
				if($k == 0)
				{
					$k=10;
				}
			}
			//PUTTING LETTER AND NUMBER TOGETHER			
			$s=$first.$k;
			
			//CHANGING $s TO LOWER CASE
			$t=strtolower($s);
			
			//RETURNING DB NAME
			return $t;
		}//CASE 3
		
		//CASE 4
		if($i>780 && $i<1041)
		{
			if($i>780&&$i<791)
			{
				$first = 'zzza';
				if($k == 0)
				{
					$k=10;
				}
			}
			if($i>790&&$i<801)
			{
				$first = 'Zzzb';
				if($k == 0)
				{
					$k=10;
				}
			}
			if($i>800&&$i<811)
			{
				$first = 'zzzc';
				if($k == 0)
				{
					$k=10;
				}
			}
			if($i>810&&$i<821)
			{
				$first = 'zZzD';
				if($k == 0)
				{
					$k=10;
				}
			}
			if($i>820&&$i<831)
			{
				$first = 'zZZe';
				if($k == 0)
				{
					$k=10;
				}
			}
			if($i>830&&$i<841)
			{
				$first = 'zzzF';
				if($k == 0)
				{
					$k=10;
				}
			}
			if($i>840&&$i<851)
			{
				$first = 'zzZg';
				if($k == 0)
				{
					$k=10;
				}
			}
			if($i>850&&$i<861)
			{
				$first = 'zZzh';
				if($k == 0)
				{
					$k=10;
				}
			}
			if($i>860&&$i<871)
			{
				$first = 'Zzzi';
				if($k == 0)
				{
					$k=10;
				}
			}
			if($i>870&&$i<881)
			{
				$first = 'zzZj';
				if($k == 0)
				{
					$k=10;
				}
			}
			if($i>880&&$i<891)
			{
				$first = 'ZZZk';
				if($k == 0)
				{
					$k=10;
				}
			}
			if($i>890&&$i<901)
			{
				$first = 'zZzl';
				if($k == 0)
				{
					$k=10;
				}
			}
			if($i>900&&$i<911)
			{
				$first = 'Zzzm';
				if($k == 0)
				{
					$k=10;
				}
			}
			if($i>910&&$i<921)
			{
				$first = 'zzZN';
				if($k == 0)
				{
					$k=10;
				}
			}
			if($i>920&&$i<931)
			{
				$first = 'zZzo';
				if($k == 0)
				{
					$k=10;
				}
			}
			if($i>930&&$i<941)
			{
				$first = 'zzZp';
				if($k == 0)
				{
					$k=10;
				}
			}
			if($i>940&&$i<951)
			{
				$first = 'ZZZq';
				if($k == 0)
				{
					$k=10;
				}
			}
			if($i>950&&$i<961)
			{
				$first = 'zzzr';
				if($k == 0)
				{
					$k=10;
				}
			}
			if($i>960&&$i<971)
			{
				$first = 'zzZS';
				if($k == 0)
				{
					$k=10;
				}
			}
			if($i>970&&$i<981)
			{
				$first = 'zZzt';
				if($k == 0)
				{
					$k=10;
				}
			}
			if($i>980&&$i<991)
			{
				$first = 'zZZu';
				if($k == 0)
				{
					$k=10;
				}
			}
			if($i>990&&$i<1001)
			{
				$first = 'zzZV';
				if($k == 0)
				{
					$k=10;
				}
			}
			if($i>1000&&$i<1011)
			{
				$first = 'zZzw';
				if($k == 0)
				{
					$k=10;
				}
			}
			if($i>1010&&$i<1021)
			{
				$first = 'zZzX';
				if($k == 0)
				{
					$k=10;
				}
			}
			if($i>1020&&$i<1031)
			{
				$first = 'zzzy';
				if($k == 0)
				{
					$k=10;
				}
			}
			if($i>1030&&$i<1041)
			{
				$first = 'zZzz';
				if($k == 0)
				{
					$k=10;
				}
			}
			//PUTTING LETTER AND NUMBER TOGETHER			
			$s=$first.$k;
			
			//CHANGING $s TO LOWER CASE
			$t=strtolower($s);
			
			//RETURNING DB NAME
			return $t;
		}//CASE 4
	}//LETTERS FUNCTION
	
//setting check_11
	function set_check_11($new_path)
	{
		$course_number="000_practiceit";
		
		$host = 'localhost';
		$username = 'elad189g_ex_1';
		$password = '1qq2ww3ee4rr';
		$db = 'elad189g_ex_us';
		
		// creating Connection
		$con = mysqli_connect($host, $username, $password,$db);
		
		//ENABLING HEBREW
		mysqli_query($con,"SET character_set_client=utf8mb4");
		mysqli_query($con,"SET character_set_connection=utf8mb4");
		mysqli_query($con,"SET character_set_database=utf8mb4");
		mysqli_query($con,"SET character_set_results=utf8mb4");
		mysqli_query($con,"SET character_set_server=utf8mb4");
				
		//GETTING DB ROW
		$Num = 1;
		$sql = "SELECT * FROM D_videos_practiceit_001 WHERE U_TP = '$Num' ORDER BY U_I DESC LIMIT 1";
		$query = mysqli_query($con,$sql);
		$row =  mysqli_fetch_array($query,MYSQLI_ASSOC);
		
		//FOUND DB ROW
		if(mysqli_num_rows($query) > 0)
		{
	
			//GETTING USERNAME AND PASSWORD
			$j=$row['U_V'];
			$i=$row['U_I'];
			$k=$row['U_I']%10;
			
			//GETTING DB NAME
			$s=letters($i);
			
			//CREATING DB NAME
			$t="xo_course".$course_number."_".$s;
			
			//FORMING v ARRAY
			$v=['a'=>'hwsrv-302501.hostwindsdns.com','b'=>$t,'c'=>$j,'d'=>$t];
	
		}
		
		//UPDATING CURRENT INDEX TO 0
		$r=$row['U_I'];
		$sql = "UPDATE D_videos_practiceit_001 SET U_TP = '0' WHERE U_I = '$r'";
		$query = mysqli_query($con,$sql);
		
		//UPDATING NEXT ROW INDEX TO 1
		$s=$r+1;
		$sql = "UPDATE D_videos_practiceit_001 SET U_TP = '1' WHERE U_I = '$s'";
		$query = mysqli_query($con,$sql);
		
		//RETURNING v ARRAY (WITH DB DETAILS)
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

	//updating ex-comp-py
	function comp_py($n)
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
		$sql1="ALTER TABLE `Ie_comp_py` ADD `$tin` INT NOT NULL";
		$query = mysqli_query($con,$sql1);	
		
		//adding column to Ie_comp_data_p
		$sql1="ALTER TABLE `Ie_comp_data_py` ADD `$tin` VARCHAR(50) NOT NULL";
		$query = mysqli_query($con,$sql1);
		
		//entering name to Ie_comp_data_p
		$b=$_SESSION['u_n_2'];
		
		$sql1="UPDATE `Ie_comp_data_py` SET `$tin`='$b' WHERE `Ie_comp_data_py`.`ID` = 1";
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
	comp_py($t_s);
	write2db($t_s,'hof',$na);
	$_SESSION['a'] = 0;
}
else
{
	header ('location: ../v/error.php');
}
?>
