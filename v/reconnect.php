<?php
session_start();

// display errors
//	error_reporting(E_ALL);
//	ini_set('display_errors', 'On');

// SSL
if($_SERVER["HTTPS"] != "on")
{
    header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
    exit();
}

if ($_SESSION['reco'] == 1)
{
	$_SESSION['message_1']="אתה מועבר להתחברות מחדש<h4 id='c' style='margin:2px auto;'>עם הסיסמה החדשה</h4>";
	$_SESSION['reco'] = 0;
	echo '<script>setTimeout(function(){$("#c").click();}, 1000);</script>';
}
else
{
	header("location: error.php");
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
</div>
<script>
$("#c").click(function(){
	window.location.replace("../content/example_cleveland_l.php");
	});
</script>
</body>