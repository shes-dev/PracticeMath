<?php
session_start();
// 05:22 https://www.youtube.com/watch?time_continue=537&v=FgSysHTsb6A
// display errors
//	error_reporting(E_ALL);
//	ini_set('display_errors', 'On');

// SSL
if($_SERVER["HTTPS"] != "on")
{
    header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
    exit();
}

	// connecting
		include '../v/bus.php';
	
	// Data
	if ($_SESSION['wl'] == 1)//user came from authentication
	{
		$sql = "SELECT U_N FROM U";
		$query = mysqli_query($con,$sql);
		
		while ($row = mysqli_fetch_array($query,MYSQLI_ASSOC)) 
		{
		
			if ($row['U_N'] == $_SESSION['u_n'])
			{
				continue;
			}
			else
			{
				echo '<div class="u_ns" style="float:left;padding:2px 5px;margin:10px;text-align:center;border:2px dashed green;">';
				echo '<div class="u_names">'.$row['U_N'].'</div>';
				//echo '<img src="'.$row['U_A'].'">';
				echo '</div>';
			}
		}
		
		$_SESSION['wl'] = 0;
		
		echo '<script>setTimeout(function(){alert("הי, מיד תועבר לדף התחברות.")}, 3000);</script>';
		echo '<script>setTimeout(function(){$("#c").click();}, 4000);</script>';
		
		/*	//debugging	
			echo '<pre style="background:white;color:black;margin-top:3px;text-align:center;border:2px black solid;">';
			echo '<h3 style="margin:0px auto;"><u>row</u></h3>';
			var_dump($row);
			echo '</pre>';
		*/			
		
	}
	else
	{
		header ("location: ../v/error.php");
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
<div class="content" style="direction:rtl;text-align:center;">
	<h1>החשבון הופעל בהצלחה!</h1>
	
	<div class="user">
		<h4>ברוך הבא <span style="padding:2px 5px;margin:10px;text-align:center;border:2px dashed green;"><?=$_SESSION['u_n'] ?></span>.</h4> 
		<h4 id="c" style="margin-bottom:0px;">מי שכבר פה:</h4> 
	</div>
</div>

<div style="float:left;width:100%;padding:5px;text-align:center;">

</div>

<script>
$("#c").click(function(){
	window.location.replace("example_cleveland_l.php");
});
</script>
</body>