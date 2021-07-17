<?php
// functions


//script func	
	function ca($c,$name)
	{
		//checking length
		$c_2=[];
		for ($c_1=0;$c_1<strlen($c);$c_1++)
		{
			$c_2[$c_1]=$c[$c_1];
		}
		$c_3=[$c_1];
		$c_4=array_merge($c_2,$c_3);
		return $c_4;
	}	
	
// Funcs for func array
	function do_echo($echo) 
	{
		echo $echo;
	}
	function s12($d) 
	{
		return abs(ceil(sin($d))%3);
	}
	function s13($d) 
	{
		return abs(floor(sin($d+102)%3));
	}
	function s14($d) 
	{
		return abs(floor($d^2+39.5*$d)%3);
	}
	function s15($d) 
	{
		return abs((ceil(sin($d^3+2.25)+cos($d)))%3);
	}
	function s16($d) 
	{
		return abs(floor(sin($d^3+885.2)+cos(4*$d)+sin($d))%3);
	}
	function s17($d) 
	{
		return abs(ceil(cos(2*$d^3+665.2)+sin(4.5*$d)+sin($d+1))%3);
	}
	function s18($d) 
	{
		return abs(ceil(cos(5.2*$d^3+55.522)+cos(4.39*$d)+sin($d+2.5))%3);
	}
	function s19($d) 
	{
		return abs(ceil(sin(5.21*$d^3+535.145)+sin(4.319*$d)+sin($d+0.1))%3);
	}
	function s20($d) 
	{
		return abs(floor(cos(5.1*$d^3+55.2145)+cos(4.449*$d)+sin($d-0.1-1.32))%3);
	}


//Defining func array
	$functions = array('function0' => 's12',
					   'function1' => 's12',
					   'function2' => 's13',
					   'function3' => 's14',
					   'function4' => 's15',
					   'function5' => 's16',
					   'function6' => 's17',
					   'function7' => 's18',
					   'function8' => 's19',
					   'function9' => 's20');
// script func	
	function J($y_1,$y_2,$func)
	{
		$k=[];
		$y_count = 0;
		$k_count = 0;
		$y_1_count = 0;
		$y_2_count = 0;
		for ($i=0;$i<count($y_1);$i++)
		{
			if($y_2[$i] == 0)
			{	
				$k[$k_count]=$y_1[$y_count];
				$y_count++;
				$k_count++;
				continue;
			}
			if($y_2[$i] == 1)
			{	
				$k[$k_count]=$y_1[$y_count];
				$y_count++;
				$k_count++;
				
				//1$k[$k_count]=3;
				$v=$i%10;
				$v_1='function'.$v;
				$k[$k_count]=call_user_func($func[$v_1], $i+3);
				$k_count++;
				continue;
			}
			if($y_2[$i] == 2)
			{	
				$k[$k_count]=$y_1[$y_count];
				$y_count++;
				$k_count++;
				
				//1$k[$k_count]=3;
				$v=$i%10;
				$v_1='function'.$v;
				$k[$k_count]=call_user_func($func[$v_1], $i);;
				$k_count++;
				
				//1$k[$k_count]=4;
				$v=$i%10;
				$v_1='function'.$v;
				$k[$k_count]=call_user_func($func[$v_1], $i+2);;
				$k_count++;
				continue;
			}
		}
		return $k;
	}

//	script func
	function I($p_1,$p_2,$p_3,$func)
	{
		$r=[];
		for ($i=0;$i<count($p_1)+1;$i++)
		{
			$v=$i%10;
			$v_1='function'.$v;
			if($v%2 == 1)
			{	
				$r[$i]=call_user_func($func[$v_1], $p_2);
			}
			if($v%2 == 0)
			{	
				$r[$i]=call_user_func($func[$v_1], $p_3);
			}
		}
		return $r;
	}
	
	
	//8$v=2;
	//8$v_1='function'.$v;
	//8echo "$functions[$v_1]";
	//8call_user_func($functions[$v_1], 1200);
	//8$r[$i]=call_user_func($functions['$v_1'], $p_2);

// script func	
	function H($s_1,$s_2)
	{
		$z=[];
		$z_1=0;
	/*	
		echo '<br>';
		echo $z_1%3;
		echo '<br>';
		echo $s_2;
		echo '<br>';
		echo $s_2%3;
	*/	for ($q_1=0;$q_1<count($s_1)+1;$q_1++)
		{
			if ($z_1%3 == 0)
			{
				
				$z[$q_1]=$s_2%3;
				$z_1++;
				continue;
			}
			if ($z_1%3 == 1)
			{
				$z[$q_1]=$s_2%2;
				$z_1++;
				continue;
			}
			if ($z_1%3 == 2)
			{
				$z[$q_1]=$s_2%1;
				$z_1++;
				continue;
			}
		}
		return $z;
	}

// script func	
	function G($s_1)
	{
		$q=[];
		//echo $s_1;
		//echo '<br>';
		for ($q_1=0;$q_1<count($s_1);$q_1++)
		{
			$q_2=$q_1+1;
			//$s=substr($s_1,$q_1,-1);
			$s=$s_1[$q_1];
			$a=0;
			//echo $s;
			if($s=="א")
			{
				$q[$q_1]="|pizza";
				$a=1;
			}
			if($s=="ב")
			{
				$q[$q_1]="|pasta";
				$a=1;
			}
			if($s=="ג")
			{
				$q[$q_1]="|avocado";
				$a=1;
			}
			if($s=="ד")
			{
				$q[$q_1]="|cucumber";
				$a=1;
			}
			if($s=="ה")
			{
				$q[$q_1]="|lettus";
				$a=1;
			}
			if($s=="ו")
			{
				$q[$q_1]="|mango";
				$a=1;
			}
			if($s=="ז")
			{
				$q[$q_1]="|apple";
				$a=1;
			}
			
			if($s=="ח")
			{
			$q[$q_1]="|tango";
				$a=1;
			}
			if($s=="ט")
			{
				$q[$q_1]="|ship";
				$a=1;
			}
			if($s=="י")
			{
				$q[$q_1]="|cruiser";
				$a=1;
			}
			if($s=="כ")
			{
				$q[$q_1]="|airplane";
				$a=1;
			}
			if($s=="ל")
			{
				$q[$q_1]="|boy";
				$a=1;
			}
			
			if($s=="מ")
			{
				$q[$q_1]="|girl";
				$a=1;
			}
			if($s=="נ")
			{
				$q[$q_1]="|supermarket";
				$a=1;
			}
			if($s=="ס")
			{
				$q[$q_1]="|twins";
				$a=1;
			}
			if($s=="ע")
			{
				$q[$q_1]="|lego";
				$a=1;
			}
			if($s=="פ")
			{
				$q[$q_1]="|toyota";
				$a=1;
			}
			if($s=="צ")
			{
				$q[$q_1]="|hyundai";
				$a=1;
			}
			if($s=="ק")
			{
				$q[$q_1]="|appolo";
				$a=1;
			}
			if($s=="ר")
			{
				$q[$q_1]="|hithere";
				$a=1;
			}
			if($s=="ש")
			{
				$q[$q_1]="|whatsup";
				$a=1;
			}
			if($s=="ת")
			{
				$q[$q_1]="|youutoo";
				$a=1;
			}
			if($s=="ן")
			{
				$q[$q_1]="|really";
				$a=1;
			}
			if($s=="ם")
			{
				$q[$q_1]="|just";
				$a=1;
			}
			
			if($s=="ך")
			{
				$q[$q_1]="|going";
				$a=1;
			}
			if($s=="ף")
			{
				$q[$q_1]="|half";
				$a=1;
			}
			if($s=="ץ")
			{
				$q[$q_1]="|why?";
				$a=1;
			}
			if($s=="a")
			{
				$q[$q_1]="||oh!";
				$a=1;
			}
			if($s=="b")
			{
				$q[$q_1]="||OMG!";
				$a=1;
			}
			
			if($s=="c")
			{
				$q[$q_1]="||nice";
				$a=1;
			}
			if($s=="d")
			{
				$q[$q_1]="||kinda";
				$a=1;
			}
			if($s=="e")
			{
				$q[$q_1]="||youknow";
				$a=1;
			}
			if($s=="f")
			{
				$q[$q_1]="||apple";
				$a=1;
			}
			if($s=="g")
			{
				$q[$q_1]="||windows";
				$a=1;
			}
			if($s=="h")
			{
				$q[$q_1]="||movie";
				$a=1;
			}
			if($s=="i")
			{
				$q[$q_1]="||car";
				$a=1;
			}
			if($s=="j")
			{
				$q[$q_1]="||amigo";
				$a=1;
			}
			if($s=="k")
			{
				$q[$q_1]="||nothing";
				$a=1;
			}
			if($s=="l")
			{
				$q[$q_1]="||night";
				$a=1;
			}
			if($s=="m")
			{
				$q[$q_1]="||iphone";
				$a=1;
			}
			
			if($s=="n")
			{
				$q[$q_1]="||samsung";
				$a=1;
			}
			if($s=="o")
			{
				$q[$q_1]="||text";
				$a=1;
			}
			if($s=="p")
			{
				$q[$q_1]="||numbers";
				$a=1;
			}
			if($s=="q")
			{
				$q[$q_1]="||enjoy";
				$a=1;
			}
			if($s=="r")
			{
				$q[$q_1]="||taking";
				$a=1;
			}
			if($s=="s")
			{
				$q[$q_1]="||giving";
				$a=1;
			}
			if($s=="t")
			{
				$q[$q_1]="||tree";
				$a=1;
			}
			if($s=="u")
			{
				$q[$q_1]="||flower";
				$a=1;
			}
			if($s=="v")
			{
				$q[$q_1]="||while";
				$a=1;
			}
			if($s=="w")
			{
				$q[$q_1]="||Shakspear";
				$a=1;
			}
			if($s=="x")
			{
			$q[$q_1]="||Michael";
				$a=1;
			}
			
			if($s=="y")
			{
			$q[$q_1]="||Opra";
				$a=1;
			}
			if($s=="z")
			{
			$q[$q_1]="||notreally";
				$a=1;
			}
			if($s=="A")
			{
				$q[$q_1]="||yeah";
				$a=1;
			}
			if($s=="B")
			{
				$q[$q_1]="||can";
				$a=1;
			}
			if($s=="C")
			{
				$q[$q_1]="||this";
				$a=1;
			}
			if($s=="D")
			{
				$q[$q_1]="||that";
				$a=1;
			}
			if($s=="E")
			{
				$q[$q_1]="||none";
				$a=1;
			}
			if($s=="F")
			{
				$q[$q_1]="||all";
				$a=1;
			}
			if($s=="G")
			{
				$q[$q_1]="||green";
				$a=1;
			}
			if($s=="H")
			{
				$q[$q_1]="||yellow";
				$a=1;
			}
			if($s=="I")
			{
				$q[$q_1]="||white";
				$a=1;
			}
			if($s=="J")
			{
				$q[$q_1]="||ten";
				$a=1;
			}
			if($s=="K")
			{
				$q[$q_1]="||nine";
				$a=1;
			}
			if($s=="L")
			{
				$q[$q_1]="||shops";
				$a=1;
			}
			if($s=="M")
			{
				$q[$q_1]="||run";
				$a=1;
			}
			if($s=="N")
			{
				$q[$q_1]="||roomate";
				$a=1;
			}
			if($s=="O")
			{
				$q[$q_1]="||college";
				$a=1;
			}
			if($s=="P")
			{
				$q[$q_1]="||city";
				$a=1;
			}
			if($s=="Q")
			{
				$q[$q_1]="||hand";
				$a=1;
			}
			if($s=="R")
			{
				$q[$q_1]="||cause";
				$a=1;
			}
			
			if($s=="S")
			{
				$q[$q_1]="||ballet";
				$a=1;
			}
			if($s=="T")
			{
				$q[$q_1]="||classical";
				$a=1;
			}
			if($s=="U")
			{
				$q[$q_1]="||wild";
				$a=1;
			}
			if($s=="V")
			{
				$q[$q_1]="||to";
				$a=1;
			}
			if($s=="W")
			{
				$q[$q_1]="||turn";
				$a=1;
			}
			if($s=="X")
			{
			$q[$q_1]="||event";
				$a=1;
			}
			if($s=="Y")
			{
			$q[$q_1]="||super";
				$a=1;
			}
			if($s=="Z")
			{
			$q[$q_1]="||no";
				$a=1;
			}
			if($s=="0")
			{
			$q[$q_1]="|||yes";
				$a=1;
			}
			if($s=="1")
			{
			$q[$q_1]="|||than";
				$a=1;
			}
			if($s=="2")
			{
			$q[$q_1]="|||then";
				$a=1;
			}
			if($s=="3")
			{
			$q[$q_1]="|||quite";
				$a=1;
			}
			if($s=="4")
			{
			$q[$q_1]="|||speed";
				$a=1;
			}
			if($s=="5")
			{
			$q[$q_1]="|||for";
				$a=1;
			}
			if($s=="6")
			{
			$q[$q_1]="|||a";
				$a=1;
			}
			if($s=="7")
			{
			$q[$q_1]="|||wonderful";
				$a=1;
			}
			if($s=="8")
			{
			$q[$q_1]="|||time";
				$a=1;
			}
			if($s=="9")
			{
			$q[$q_1]="|||hour";
				$a=1;
			}
			if($a==0)
			{
				$q[$q_1]=$s;
			}
		}
		return $q;
	}

// script func - file contents to array
	function F($t)
	{
		$myfile = fopen($t, "r") or die("Unable to open file!");
		// Output one character until end-of-file
		$r=[];
		$c_3=0;
		while(!feof($myfile))
		{
			$r[$c_3]= fgetc($myfile);
			$c_3++;
		}
		fclose($myfile);
		return $r;
	}

// script func
	
	function E($m,$n)
	{
		$t=[];
		for ($i=1;$i<$m+1;$i++)
		{
			$t[$i]=substr($n,-$i);
		}
		return $t;
	}


//script func	
	function A($A,$name)
	{
		//checking length
		$c_2_1=md5($A);
		//for ($c_1=0;$c_1<ceil(strlen($A)/7+12);$c_1++)
		for ($c_1=0;$c_1<1;$c_1++)
		{
			if($c_1<strlen($A))
			{
				$h = bin2hex(random_bytes(2));
				$c_2_1=md5($c_2_1.$h);
				$v_89=$c_1 + 101;
				$b="$name/$v_89.txt";
				$myfile = fopen($b, "w");
				fwrite($myfile, $h);
			}
			$h = bin2hex(random_bytes(2));
			$v_89=$c_1 + 101;
			$b="$name/$v_89.txt";
			$myfile = fopen($b, "w");
			fwrite($myfile, $h);
		}
		return $c_2_1;
	}
//script func	
	function B($B,$name)
	{
		//checking length
		$B_2=[];
		$B_3=[];
		$c_2=1;
		$c_3=10000;
		$c_4=1;
		$c_5=1;
				
		//for ($c_1=0;$c_1<100;$c_1++)
		for ($c_1=0;$c_1<1;$c_1++)
		{
			if($c_1<$B[count($B)-1])
			{
				if (sin(300/$c_2)<0)
				{
					$a_8=strtoupper(bin2hex(random_bytes(ceil($c_2)+20)));
					$B_2[$c_1]=strtoupper($B[$c_1].$a_8);
					$c_2=(1/-$c_3+1.5-$c_1)*0.1;
					$c_3=$c_1*pi()*0.5+2;
					$c_4='T';
					$B_3[count($B_3)]=$a_8;
					$v_89=count($B_3);
					$g="$name/$v_89.txt";
					$myfile = fopen($g, "w");
					fwrite($myfile, $a_8);
					
				}
				else
				{	
					$a_8=strtoupper(bin2hex(random_bytes(floor($c_2)+30)));
					$B_2[$c_1]=strtolower($B[$c_1].$a_8);
					$c_2=-(1/$c_3+2.5+$c_1)*0.02;
					$c_3=-$c_1*pi()*-0.255+0.002;
					$c_4='F';
					$B_3[count($B_3)]=$a_8;
					$v_89=count($B_3);
					$g="$name/$v_89.txt";
					$myfile = fopen($g, "w");
					fwrite($myfile, $a_8);
				}
			}
			else
			{
				if (sin(300/$c_2)<0)
				{
					$a_8=strtoupper(bin2hex(random_bytes(ceil($c_2)+20)));
					
					$c_2=(1/-$c_3+1.5-$c_1)*0.1;
					$c_3=$c_1*pi()*0.5+2;
					$c_4='T';
					$B_3[count($B_3)]=$a_8;
					$v_89=count($B_3);
					$g="$name/$v_89.txt";
					$myfile = fopen($g, "w");
					fwrite($myfile, $a_8);
					
				}
				else
				{	
					$a_8=strtoupper(bin2hex(random_bytes(floor($c_2)+30)));
					
					$c_2=-(1/$c_3+2.5+$c_1)*0.02;
					$c_3=-$c_1*pi()*-0.255+0.002;
					$c_4='F';
					$B_3[count($B_3)]=$a_8;
					$v_89=count($B_3);
					$g="$name/$v_89.txt";
					$myfile = fopen($g, "w");
					fwrite($myfile, $a_8);
				}
			}
		}
		return implode($B_2);
		//return implode($B_3);
		//return($B_3);
	}


//script func	
	function c($c,$name)
	{
		//checking length
		$c_2=[];
		for ($c_1=0;$c_1<strlen($c);$c_1++)
		{
			$c_2[$c_1]=$c[$c_1];
		}
		$c_3=[$c_1];
		$c_4=array_merge($c_2,$c_3);
		return $c_4;
	}
	
	
?>