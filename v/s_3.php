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
		
//	Vars

if ($_SESSION['m_3'] == 1)
{
	//echo '<script>setTimeout(function(){$("#d").click();}, 4000);</script>';
	$_SESSION['m_3'] = 0;
}
else
{
	header ("location: v.php");
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
	<h1 id="d" style="margin-bottom:0px;"><?=$_SESSION['message_1'] ?></h1>
</div>
<script>
$("#d").click(function(){
	window.location.replace("http://www.explainit.online");
	});
</script>
</body>