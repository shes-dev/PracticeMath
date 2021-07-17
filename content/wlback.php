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
	
	// Data
	if ($_SESSION['loggedin'] == 1)//user came from authentication
	{
			
		$_SESSION["example"] = 1;
		echo '<script>setTimeout(function(){$("#c").click();}, 4000);</script>';
		echo '<script>setTimeout(function(){alert("את/ה מועבר/ת לאתר")}, 3000);</script>';
			
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
	<h1>התחברות מוצלחת,</h1>
	
	<div class="user">
		<h4 id="c">ברוך הבא <span style="padding:2px 5px;margin:10px;text-align:center;border:2px dashed green;"><?=$_SESSION['u_n'] ?></span>.</h4> 
	</div>
</div>

<div style="float:left;width:100%;padding:5px;text-align:center;">

</div>

<script>
$("#c").click({param1: "<?=$_SESSION['directory'] ?>"},function(event){
	var gb = "../ex/am/ple/001/index.php";
	//alert (goto);
	window.location.replace(gb);
});
</script>
</body>