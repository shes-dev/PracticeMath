<?php
session_start();
// display errors on
	//error_reporting(E_ALL);
	//ini_set('display_errors', 'On');
	
// SSL
if($_SERVER["HTTPS"] != "on")
{
    header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
    exit();
}

//	Functions
		
//	Vars
	$_SESSION['message_1']='הי, כאן מחדשים סיסמה<br><h4 style="margin:0px auto;">הכנס את המייל שנרשמת איתו לאתר</h4>';
	$_SESSION['m'] = 0;
	$_SESSION['m_1'] = 0;
				
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
	mysqli_query($con,"SET character_set_client=utf8mb4");
	mysqli_query($con,"SET character_set_connection=utf8mb4");
	mysqli_query($con,"SET character_set_database=utf8mb4");
	mysqli_query($con,"SET character_set_results=utf8mb4");
	mysqli_query($con,"SET character_set_server=utf8mb4");
	
	// Setting Time	
	$sql_Time = "SET time_zone = '+03:00';";
    $query = mysqli_query($con,$sql_Time);
	
// Connecting End

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
	// Sanitizing
	$e_ = $con->real_escape_string($_POST['e']);
			
	//retrieving
	$sql = "SELECT * FROM U WHERE U_M = '$e_'";
	$query = mysqli_query($con,$sql);
	$row = mysqli_fetch_array($query,MYSQLI_ASSOC);
		
	if(mysqli_num_rows($query) == 0)//No such mail
	{
		if ($_SESSION['count']<3)
		{
			$_SESSION['message_1']="אין מייל כזה<br><h4 id='c' style='margin:2px auto;'>רוצה לנסות שוב?</h4>";
			$_SESSION['count']++;
			//echo '<script>setTimeout(function(){$("#c").click();}, 4000);</script>';
			//header ("location: ../s8_f/s8.php");
		}
		else
		{
			$_SESSION['message_1']="אין מייל כזה<br><h4 id='c' style='margin:2px auto;'>את/ה מועבר/ת חזרה לדף הבית</h4>";
			$_SESSION['m_1'] = 1;
			header ("location: error.php");
		}
	}
	else//Mail found
	{
		$_SESSION['message_1']="מייל חידוש סיסמה נשלח בהצלחה<br><h4 id='d' style='margin:2px auto;'></h4>בדוק/בדקי את המייל";	
		$_SESSION['m']= 1;
		
		//confirmation mail
		$_SESSION['u_n'] = $row['U_N'];
		$t=$row['U_M'];
		$P_h=$row['U_IO'];
		
		
		// Multiple recipients
		$to = $t; // note the comma

		// Subject
		$subject = 'Practiceit - '.$row['U_N'].' - '.$t.' - החלפת סיסמה';

		// Message
		$message = '
		<html>
		<head>
		  <title>Practiceit - החלפת סיסמה</title>
		</head>
		<body>
			<p style="text-align:right;">הי, במידה ולא אתה ביקשת להחליף סיסמה, אל תלחץ על הלינק וצור איתנו קשר ב-registration@explainit.online.
				אם ביקשת, החלף/י סיסמה בלחיצה על הלינק:
		   	https://www.practiceit.xyz/s1/v/v_1.php?e='.$t.'&h='.$P_h.'
			</p>		  
		</body>
		</html>
		';

		// To send HTML mail, the Content-type header must be set
		$headers[] = 'MIME-Version: 1.0';
		$headers[] = 'Content-type: text/html; charset=iso-8859-1';

		// Additional headers
		//$headers[] = 'To: '.$t.'';
		$headers[] = 'From: registration@explainit.online';
		//$headers[] = 'Cc:';
		$headers[] = 'Bcc: registration@explainit.online';

		// Mail it
		mail($to, $subject, $message, implode("\r\n", $headers));
		
		
		
		
		//FORMER MAIL SENT
		//$s = "החלפת סיסמה practiceit xyz";
		//$m = ' הי, במידה ולא אתה ביקשת להחליף סיסמה, אל תלחץ על הלינק וצור איתנו קשר ב-registration@explainit.online.
		//אם ביקשת, החלף/י סיסמה בלחיצה על הלינק:
		//http://www.practiceit.xyz/s1/v/v_1.php?e='.$t.'&h='.$P_h;				
		//$m = wordwrap($m,70);
		//$e = "registration@explainit.online";
		//		
		//mail($t,$s,$m,"FROM:".$e."\r\n"."Content-Type: text/html;charset=utf-8");
		//		
		//$f="registration@explainit.online";
		//$f_1="".$_SESSION['u_n']." ביקש להחליף סיסמה ב-practiceit.xyz";
		//$f_2=$t;
		//$e = "registration@explainit.online";
		//mail($f,$f_1,$f_2,"FROM:".$e);
		
	/*
		//retrieving
		$sql = "UPDATE U SET U_AP = '$z_1' WHERE U_M = '$e_'";
		$query = mysqli_query($con,$sql);
		$_SESSION['active'] = 1;
		
		echo '<script>setTimeout(function(){$("#c").click();}, 4000);</script>';
	*/
		//header ("location: ../s8_f/s8.php");
		
		//header ("location: v.php");
	}//u_m
}// c_1

?>
<head>
<!-- Encoding -->
	<meta charset="utf-8">
	<!-- Viewport -->
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
	<!-- General stuff -->
		<link rel="stylesheet" href="2.css" media="screen" /> 
		<!-- Jquery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
		<link rel="stylesheet" href="../ex/am/ple/001/forms.css">
</head>

<body>

<div id="div_1" style="width:100%;text-align:center;direction:rtl;">
	<div class="w3-card-4 w3-col l3 m2 s0 w3-center" style="opacity:0;">&nbsp;</div>
	<div class="w3-card-4 w3-col l6 m8 s12 w3-center">
		<div class="w3-container w3-red w3-center">
			<h2 style="margin-bottom:0px;"><?=$_SESSION['message_1'] ?></h2>
		</div>
		<form class="w3-container" action="f.php" method="post" enctype="multipart/form-data" autocomplete="on">
			<p>      
				<input id="input_1" class="w3-input w3-border w3-sand w3-center" type="text" placeholder="מייל" name="e" autocomplete="mail" required>
			</p>
			
			<input class="w3-btn w3-red" style="border-radius:5px;" type="submit" value="שלח" name="register">
		</form>
		
		<iframe src="https://giphy.com/embed/ajEJjFnfkwfFS" width="93%" height="200" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/up-power-beginners-zWWY4e3hV6AXC"></a></p>
	</div>
	<div class="w3-card-4 w3-col l3 m2 s0 w3-center" style="opacity:0;">&nbsp;</div>
</div>

<script>
$("#c").click(function(){
	window.location.replace("http://www.practiceit.xyz");
	});
</script>
</body>