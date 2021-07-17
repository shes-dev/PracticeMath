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

// Vars
//$_SESSION['message_1']="משהו לא עובד, <br>אנא נסה שוב או צור איתנו קשר ב<br><h4 id='c' style='margin:2px auto;'>registration@explainit.online</h4>";
$_SESSION['message_1']="משהו לא עובד<h4 id='c' style='margin:2px auto;'>אנא נסה להתחבר שוב או צור איתנו קשר ב-<br>registration@explainit.online</h4>";
?>
<head>
<!-- Encoding -->
	<meta charset="utf-8">
	<!-- Viewport -->
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
	<!-- General stuff -->
		<!-- Jquery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
</head>

<body>
<div style="text-align:center;width:100%;direction:rtl;">
	<h1 style="margin-bottom:0px;"><?=$_SESSION['message_1'] ?></h1>
</div>
</body>