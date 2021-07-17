<?php
session_start();
// display errors on
//	error_reporting(E_ALL);
//	ini_set('display_errors', 'On');
	
// SSL
if($_SERVER["HTTPS"] != "on")
{
    header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
    exit();
}

//	Functions
	function valid($check)
	{
		//checking length
		if (mb_strlen($check)>=8)
		{
			return TRUE;
			
			//checking not all upper case or lower case
			if(!ctype_upper($check) && !ctype_lower($check))
			{
				//$_SESSION['test'] = 0;
				//return TRUE;
				//return mb_strlen($check);
				//return $check;
			}
		}	
	}
//	Vars
	$_SESSION['message_1']='הי, <br> כאן מאשרים החלפת סיסמה';
	$_SESSION['m_3'] = 0;
			
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

if (isset($_GET['e']) && !empty($_GET['e']) AND isset($_GET['h']) && !empty($_GET['h']))
{
	// Sanitizing
	$e_ = $con->real_escape_string($_GET['e']);
	$P_h_ = $con->real_escape_string($_GET['h']);
	$_SESSION['d_1'] = $e_;
	$_SESSION['d_2'] = $P_h_;
	$z = 0;
	$z_1 = 1;
		
	//retrieving
	$sql = "SELECT * FROM U WHERE U_M = '$e_' AND U_IO = '$P_h_' AND U_AP = '$z_1'";
	$query = mysqli_query($con,$sql);
	$row = mysqli_fetch_array($query,MYSQLI_ASSOC);		
		
	//if(mysqli_num_rows($query) > 0)
	if(mysqli_num_rows($query) == 0)
	{
		$_SESSION['message_1']="משהו לא עובד, אנא נסה שוב או צור איתנו קשר ב-registration@explainit.online<br><h4 id='c' style='margin:2px auto;'></h4>";
		$_SESSION['m_3'] = 1;
		//echo '<script>setTimeout(function(){$("#c").click();}, 4000);</script>';
		header ("location: error.php");
	}
	else
	{
		$_SESSION['message_1']="אנא בחר/י סיסמה חדשה<br><h4 id='c' style='margin:2px auto;'></h4>";	
	}//u_m
}// c_1
else
{
	$_SESSION['message_1']="משהו לא עובד, אנא נסה שוב או צור איתנו קשר ב<br><h4 id='c' style='margin:2px auto;'>registration@explainit.online</h4>";
	//echo $_SESSION['message_1'];
	//echo '<script>setTimeout(function(){$("#c").click();}, 4000);</script>';
	header ("location: error.php");
}

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
</head>

<body>
<div style="text-align:center;width:100%;direction:rtl;">
	<h1 style="margin-bottom:0px;"><?=$_SESSION['message_1'] ?></h1>
	
	<form action="v_2.php" method="post" enctype="multipart/form-data" autocomplete="on">
		<input style="margin:4px auto;padding:2px;" type="password" placeholder="סיסמה חדשה" name="pass_word" required><br>
		<input style="margin:4px auto;padding:2px;" type="password" placeholder="סיסמה חדשה שוב" name="pass_word_2" autocomplete="new-password" required><br>
		<input style="margin:4px auto;padding:2px;" type="submit" value="התחבר" name="register">
	</form>
</div>
<script>
$("#c").click(function(){
	window.location.replace("http://www.explainit.online");
	});
</script>
</body>