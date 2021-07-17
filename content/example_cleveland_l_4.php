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
	$U_name = '';
	
// Functions
	function valid($check)
	{
		//checking length
		if (mb_strlen($check)>=8)
		{
			return TRUE;
		}	
	}
	function check_length($str)
	{
		//checking length
		if (mb_strlen($str)>=8)
		{
			return TRUE;
		}	
	}
	
// Vars
	$_SESSION['message_1']='הי,<br> כאן מתחברים';
		
// Connecting
	include '../v/bus.php';

// Data
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$U_name = $con->real_escape_string($_POST['user_name']);
	$P_ass = md5($con->real_escape_string($_POST['pass_word']));
	$_SESSION['u_n']=$U_name;
	//$A_path = $con->real_escape_string('av/'.$_FILES['image_1']['name']);
	
	//checking count
	if($_SESSION['count']<4)
	{
		if(check_length($P_ass))
		{
			//retrieving
			$sql = "SELECT * FROM U WHERE U_M = '$U_name'";
			$query = mysqli_query($con,$sql);
			$row = mysqli_fetch_array($query,MYSQLI_ASSOC);	
			
			//checking mail
			if (mysqli_num_rows($query) > 0)
			{	
				//checking activation
				if($row['U_AP'] == 1)
				{
					$hi=$row['U_E'];
					$hi_2=$row['U_U'];
											
					$p = $hi_2.$P_ass.$hi;
					$p_2 = md5($p);
								
					$sql = "SELECT 1 FROM U WHERE U_M = '$U_name' AND U_P ='$p_2'";
					$query = mysqli_query($con,$sql);
					
					if(mysqli_num_rows($query) > 0)
					{
						$sql = "SELECT U_N FROM U WHERE U_M = '$U_name' AND U_P ='$p_2'";
						$query = mysqli_query($con,$sql);
						$row = mysqli_fetch_array($query,MYSQLI_ASSOC);
						$h_g = implode(" ",$row);
						$_SESSION['u_n']=$h_g;
						
						$_SESSION['message_1'] = "התחברת בהצלחה";
						//8$name = 'shachar';
						//8$_SESSION[$name] = 1;
						//8$route= "https://www.explainit.online/s1/ex/".$name.".explainit.online/index.php";
						//8header("location: $route");
						header("location: https://www.explainit.online/s1/s8_f/s9.php");
								
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
						$_SESSION['message_1']="סיסמה לא נכונה";
						$_SESSION['count']++;
					}	
				}
				else
				{
					$_SESSION['v_wait'] = 1;
					header ('location: https://www.explainit.online/s1/v/v.php');
				}
			}//activation
			else
			{
				if(isset($U_name)&&$U_name!='')
				{
					$_SESSION['message_1']="אין מייל כזה<h4 id='a_1' style='margin:2px auto;'>נסה שוב</h4>";
					$_SESSION['count']++;
				}
				else
				{
					$_SESSION['message_1']="לא הכנסת מייל<h4 id='a_1' style='margin:2px auto;'>נסה שוב</h4>";
					$_SESSION['count']++;
				}
			}
		}
		else
		{
			$_SESSION['message_1']="סיסמה לא נכונה<h4 id='a_1' style='margin:2px auto;'>נסה שוב</h4>";
			$_SESSION['count']++;
			echo $_SESSION['count'];
		}
	}
	else
	{
		header ('location: https://www.explainit.online/s1/v/error.php');
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
		<input id="input_1" style="margin:4px auto;padding:2px;" type="text" placeholder="מייל" name="user_name" required><br>
		<input style="margin:4px auto;padding:2px;" type="password" placeholder="סיסמה" name="pass_word" autocomplete="new-password" required><br>
		<div style="font-size:14px;"><a href="../v/f.php">שכחתי סיסמה</a></div>
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
$("#a_1").click(function(){
	$("#input_1").val('<?= $U_name ?>');
});
</script>
</body>