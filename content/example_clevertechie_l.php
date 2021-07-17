<?php
session_start();
// 05:22 https://www.youtube.com/watch?time_continue=537&v=FgSysHTsb6A
// display errors
//	error_reporting(E_ALL);
//	ini_set('display_errors', 'On');
//	vars
	$_SESSION['loggedin'] = 0;

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
	
// Connecting End

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$U_name = $con->real_escape_string($_POST['user_name']);
	$P_ass = md5($_POST['pass_word']);
	//$A_path = $con->real_escape_string('av/'.$_FILES['image_1']['name']);
	$_SESSION['u_n']=$U_name;
	
	//retrieving
	$sql = "SELECT * FROM U WHERE U_N = '$U_name'";
	$query = mysqli_query($con,$sql);
	
	if(mysqli_num_rows($query) > 0)
	{
		while ($row = mysqli_fetch_array($query,MYSQLI_ASSOC)) 
		{
			$hi=$row['U_E'];
			$hi_2=$row['U_U'];
		}
			
		$p = $hi_2.$P_ass.$hi;
		$p_2 = md5($p);
		
		$sql = "SELECT 1 FROM U WHERE U_N = '$U_name' AND U_P ='$p_2'";
		$query = mysqli_query($con,$sql);
		$row = mysqli_fetch_array($query,MYSQLI_ASSOC);			
		
		if(mysqli_num_rows($query) > 0)
		{
			$_SESSION['message_1'] = "התחברת בהצלחה";
			//echo "Success.... <script>setTimeout(function(){alert('Hello')}, 3000);</script>";
			//if query successful, redirect to welcome page
			//$_SESSION['message_1']="הרשמה מוצלחת";
			//$_SESSION['loggedin'] = 1;
			//$_SESSION['timestamp'] = 2;
			
			header("location: wl.php");
					
			//debugging
			/*	
				echo '<pre style="background:white;color:black;margin-top:3px;text-align:center;border:2px black solid;">';
				echo '<h3 style="margin:0px auto;"><u>sql</u></h3>';
				var_dump($sql);
				echo '<h3 style="margin:0px auto;"><u>query:</u></h3>';
				var_dump($query);
				echo '<h3 style="margin:0px auto;"><u>con:</u></h3>';
				var_dump($con);
				echo '</pre>';
			*/
		}
		else
		{
		$_SESSION['message_1']="התחברות לא מוצלחת";
		}
	}
	else
	{
		$_SESSION['message_1']="התחברות לא מוצלחת";
	}
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
			<link rel="stylesheet" href="2.css" media="screen"> 
			<!-- Emoji CSS -->
			<link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
			<!-- Jquery -->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
</head>

<body>
<div style="direction:rtl;text-align:center;">
	<h1 style="margin-bottom:0px;"><?=$_SESSION['message_1'] ?></h1>
	<i class="em em-writing_hand"></i>
		
	<form action="example_cleveland_l.php" method="post" enctype="multipart/form-data" autocomplete="on">
		<input style="margin:4px auto;padding:2px;" type="text" placeholder="שם משתמש" name="user_name" required><br>
		<input style="margin:4px auto;padding:2px;" type="password" placeholder="סיסמה" name="pass_word" autocomplete="new-password" required><br>
			<!--
			<div>
				<label for="im">בחירת תמונה:</label><br><input id="im" type="file" name="image_1" accept="image/*" required>
			</div>
			-->
		<div>
			<i id="p" class="em em-airplane"></i>
		</div>
		<input style="margin:4px auto;padding:2px;" type="submit" value="התחבר" name="register">
	</form>
</div>

<script>
$(".em").click(function(){
	alert(this.id);
});
</script>
</body>