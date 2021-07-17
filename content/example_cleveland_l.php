<?php
session_start();

// display errors
	error_reporting(E_ALL);
	ini_set('display_errors', 'On');
// SSL
if($_SERVER["HTTPS"] != "on")
{
    header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
    exit();
}
// Vars	
	$U_name = '';
	$_SESSION['loggedin'] = 0;
	
	if(!isset($_SESSION['count']))
	{
		$_SESSION['count']=2;
		$_SESSION['count']=2;
	}
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
	$_SESSION['message_1']='הי, כאן מתחברים';
		
// Connecting
	include '../v/bus.php';

// Data
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$U_name = $con->real_escape_string($_POST['user_name']);
	$P_ass = md5($con->real_escape_string($_POST['pass_word']));
	
	$name=$con->real_escape_string($_POST['user_name']);
	$password=$con->real_escape_string($_POST['pass_word']);
					
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
						if(!empty($_POST["remember"]))   
						{  
							setcookie ("member_login",$name,time()+ (10 * 365 * 24 * 60 * 60));  
							setcookie ("member_password",$password,time()+ (10 * 365 * 24 * 60 * 60));
							$_SESSION["admin_name"] = $name;
						}  
						else  
						{  
							if(isset($_COOKIE["member_login"]))   
							{  
								setcookie ("member_login","");  
							}  
							if(isset($_COOKIE["member_password"]))   
							{  
								setcookie ("member_password","");  
							}  
					   } 
							
						$sql = "SELECT U_N FROM U WHERE U_M = '$U_name' AND U_P ='$p_2'";
						$query = mysqli_query($con,$sql);
						$row = mysqli_fetch_array($query,MYSQLI_ASSOC);
						$h_g = implode(" ",$row);
						$_SESSION['u_n']=$h_g;
						
						$_SESSION['message_1'] = "התחברות מוצלחת,";
						$_SESSION['loggedin'] = 1;
						
						$sql = "SELECT U_T1 FROM U WHERE U_M = '$U_name' AND U_P ='$p_2'";
						$query = mysqli_query($con,$sql);
						$row = mysqli_fetch_array($query,MYSQLI_ASSOC);
						
						$_SESSION['timestamp'] = implode(" ",$row);
						
						$sql = "SELECT U_T2 FROM U WHERE U_M = '$U_name' AND U_P ='$p_2'";
						$query = mysqli_query($con,$sql);
						$row = mysqli_fetch_array($query,MYSQLI_ASSOC);
						
						$_SESSION['dir_01'] = implode(" ",$row);
						$_SESSION['directory'] = $_SESSION['dir_01']."-".$_SESSION['timestamp'];
												
						header("location: wlback.php");
						
					}
					else
					{
						$_SESSION['message_1']="סיסמה לא נכונה";
						$_SESSION['count']++;
						sleep(2);
					}	
				}
				else
				{
					$_SESSION['v_wait'] = 1;
					header ('location: ../v/v.php');
				}
			}//activation
			else
			{
				if(isset($U_name)&&$U_name!='')
				{
					$_SESSION['message_1']="אין מייל כזה<h4 id='a_1' style='margin:2px auto;'>נסה שוב</h4>";
					$_SESSION['count']++;
					sleep(2);
				}
				else
				{
					$_SESSION['message_1']="לא הכנסת מייל<h4 id='a_1' style='margin:2px auto;'>נסה שוב</h4>";
					$_SESSION['count']++;
					sleep(2);
				}
			}
		}
		else
		{
			$_SESSION['message_1']="סיסמה לא נכונה<h4 id='a_1' style='margin:2px auto;'>נסה שוב</h4>";
			$_SESSION['count']++;
			sleep(2);
		}
	}
	else
	{
		header ('location: ../v/error.php');
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
	<link rel="stylesheet" href="../ex/am/ple/001/forms.css">
</head>

<body>
<div style="width:100%;text-align:center;">
	<div class="w3-card-4 w3-col l3 m2 s0 w3-center" style="opacity:0;">&nbsp;</div>
	<div class="w3-card-4 w3-col l6 m8 s12 w3-center">
		<div class="w3-container w3-blue w3-center">
			<h2><?=$_SESSION['message_1'] ?></h2>
		</div>
		<form class="w3-container" action="example_cleveland_l.php" method="post" enctype="multipart/form-data" autocomplete="on">
			<p>      
				<input id="input_1" class="w3-input w3-border w3-sand w3-center" type="text" placeholder="מייל" name="user_name" autocomplete="mail" value="<?php if(isset($_COOKIE["member_login"])) { echo $_COOKIE["member_login"]; } ?>" required>
			</p>
			<p>      
				<input class="w3-input w3-border w3-sand w3-center" type="password" placeholder="סיסמה" name="pass_word" autocomplete="new-password" value="<?php if(isset($_COOKIE["member_password"])) { echo $_COOKIE["member_password"]; } ?>" required>
			</p>
			<p>      
				<input type="checkbox" name="remember" <?php if(isset($_COOKIE["member_login"])) { ?> checked <?php } ?> />  
		        <label for="remember-me">Remember me</label> 
			</p>
			<input class="w3-btn w3-blue" style="border-radius:5px;" type="submit" value="התחבר" name="register">
		</form>
		<div id="p" style="border-radius:5px;margin-bottom:12px;"><a href="../v/f.php"><button class="w3-btn w3-red">שכחתי סיסמה</button></a></div>
		<hr style="width:50%;margin:auto;">
		<iframe src="https://giphy.com/embed/10rJCb79m16aRy" width="93%" height="200" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/up-power-beginners-zWWY4e3hV6AXC"></a></p>
	</div>
	<div class="w3-card-4 w3-col l3 m2 s0 w3-center" style="opacity:0;">&nbsp;</div>
</div>

<script>
$("#a_1").click(function(){
	$("#input_1").val('<?= $U_name ?>');
});
</script>
</body>