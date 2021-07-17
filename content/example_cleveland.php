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
	$_SESSION['message_1']="הי, כאן נרשמים <h4 id='u_1' style='margin:2px auto;'>בוא נתחיל</h4>";
	$Us_name = '';
	$Ma_name = '';
// Connecting
	include '../v/bus.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
	// Sanitizing
	$Us_name = $con->real_escape_string($_POST['user_name']);
	$Ma_name = $con->real_escape_string($_POST['e_mail']);
	$Pa_name = $con->real_escape_string($_POST['pass_word']);
	$Pa_2_name = $con->real_escape_string($_POST['pass_word_2']);
	
	//Existing mail search
	$sql = "SELECT * FROM U WHERE U_M = '$Ma_name'";
	$query = mysqli_query($con,$sql);
		
	if(mysqli_num_rows($query) > 0)
	{
		$_SESSION['message_1']="יש כבר משתמש עם מייל כזה <br><h4 id='a_2' style='margin:2px auto;'>הכנס מייל אחר</h4>";
		echo '<script>setTimeout(function(){$("#a_2").click();}, 0001);</script>';
	}
	else//No such mail, continue
	{
		//Existing username search
		$sql = "SELECT * FROM U WHERE U_N = '$Us_name'";
		$query = mysqli_query($con,$sql);
		
		if(mysqli_num_rows($query) > 0)
		{
			$_SESSION['message_1']="יש כבר שם משתמש כזה<br><h4 id='a_3' style='margin:2px auto;'>הכנס שם משתמש אחר</h4>";
			echo '<script>setTimeout(function(){$("#a_3").click();}, 0001);</script>';
		}
		else//No such username, continue
		{
			if($Pa_name==$Pa_2_name)//Passwords match
			{
				if (valid($Pa_name))//Password long enough
				{	
					$U_name = $con->real_escape_string($_POST['user_name']);
					$E_mail = $con->real_escape_string($_POST['e_mail']);
					$P_ass = md5($con->real_escape_string($_POST['pass_word']));
					$P_h = $con->real_escape_string(md5(rand(0,1100)));
					
					//$A_path = $con->real_escape_string('av/'.$_FILES['image_1']['name']);
										
					//Securing
					$bytes_0 = bin2hex(random_bytes(5));
					$bytes_1 = bin2hex(random_bytes(5));
					$bytes_2 = bin2hex(random_bytes(5));
					$bytes_3 = bin2hex(random_bytes(5));
					$bytes_4 = bin2hex(random_bytes(5));
					
					$bytes_4 = md5($bytes_4);
					
					$p_0 = $bytes_1.$bytes_4.$bytes_0;
					$p_2 = md5($p_0);
					
					$p_3 = $bytes_2.$bytes_4.$bytes_3;
					$p_4 = md5($p_3);
					
					$p_5 = $bytes_0.$bytes_4.$bytes_4;
					$p_6 = md5($p_5);
					
					$p = $bytes_0.$P_ass.$bytes_2;
					$p_1 = md5($p);
					
					$_SESSION['a_p']='av/1.png';
					$_SESSION['u_n']=$U_name;
					$_SESSION['u_n_2']=$U_name;
									
					$sql = "INSERT INTO U (U_N,U_M,U_P,U_Z,U_A,U_E,U_U,U_V,U_X,U_Y,U_T,U_IO) VALUES ('$U_name','$E_mail','$p_1','$p_2','1.png','$bytes_2','$bytes_0','$bytes_1','$bytes_3','$p_6','$p_4','$P_h')";
					$query = mysqli_query($con,$sql);
					
					$sql = "SELECT U_N FROM U WHERE U_N = '$U_name'";
					$query = mysqli_query($con,$sql);
					$row = mysqli_fetch_array($query,MYSQLI_ASSOC);
					$h_g = implode(" ",$row);
					$_SESSION['u_n']=$h_g;
					
					$sql = "SELECT U_I FROM U WHERE U_N = '$U_name'";
					$query = mysqli_query($con,$sql);
					$row = mysqli_fetch_array($query,MYSQLI_ASSOC);
					$h_g = implode(" ",$row);
					$_SESSION['u_i']=$h_g;
					
					//creating user folder
					$_SESSION['a'] = 1;
					//$p = '../../s/srhair.com/files';
					$p = 'fi';
					$_SESSION['r']=$p;
					include "$p/test_po_5.php";
					
										
					/*
					//debugging
						
						echo '<pre style="background:white;color:black;margin-top:3px;text-align:center;border:2px black solid;">';
						//8echo '<h3 style="margin:0px auto;"><u>b_0:</u></h3>';
						//8var_dump($bytes_0);
						//8var_dump($bytes_1);
						//8var_dump($bytes_2);
						//8var_dump($bytes_3);
						//8var_dump($bytes_4);
						//8echo '<h3 style="margin:0px auto;"><u>query:</u></h3>';
						//8var_dump($query);
						//8echo '<h3 style="margin:0px auto;"><u>con:</u></h3>';
						//8var_dump($con);
						echo '</pre>';
					*/
					
					//if query successful, redirect to welcome page
					if($query)
					{
						$_SESSION['message_1']="הרשמה מוצלחת";
						$_SESSION['message_2']="כדי להפעיל את החשבון לחץ על הקישור שנשלח במייל";
						//header("location: http://explainit.online/s1/s8_f/wl.php");
						$t=$E_mail;
						
						//FORMER MAIL
						//confirmation mail
						//$t=$E_mail;
						//$s="אישור חשבון practiceit.xyz";
						//$m=' הי, אשר/י את החשבון בלחיצה על הלינק:
						//http://www.practiceit.xyz/s1/v/v.php?e='.$t.'&h='.$P_h;				
						//$m = wordwrap($m,70);
						//$e = "registration@explainit.online";
						///*$headerFields = array(
						//"From: {$visitor_email}",
						//"MIME-Version: 1.0",
						//"Content-Type: text/html;charset=utf-8");
						//*/
						//mail($t,$s,$m,"FROM:".$e."\r\n"."Content-Type: text/html;charset=utf-8");
						//
						//$f="registration@explainit.online";
						//$f_1="".$_SESSION['u_n']." נרשם ב-practiceit.xyz";
						//$f_2=$t;
						//mail($f,$f_1,$f_2,"FROM:".$e);
						
						// Multiple recipients
						$to = $t; // note the comma
					
						// Subject
						$subject = 'Practiceit - '.$_SESSION['u_n'].' - '.$t.' - אישור חשבון';
					
						// Message
						$message = '
						<html>
						<head>
						  <title>Practiceit - אישור חשבון</title>
						</head>
						<body>
							<p style="text-align:right;"> הי, אשר/י את החשבון בלחיצה על הלינק:
							https://www.practiceit.xyz/s1/v/v.php?e='.$t.'&h='.$P_h.'
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
						
						$_SESSION['v_wait'] = 1;
						header("location: ../v/v.php");
					}
					else
					{
						$_SESSION['message_1']="הרשמה לא מוצלחת";
						header("location: ../v/error.php");
					}
				}//Password not long enough
				else
				{
					$_SESSION['message_1']="סיסמה לא ארוכה מספיק <br><h4 id='a_1' style='margin:2px auto;'>(צריך מינימום 8 אותיות ומספרים)</h4>";
					echo '<script>setTimeout(function(){$("#a_1").click();}, 0001);</script>';
				}   
			}//Passwords don't match
			else
			{
				$_SESSION['message_1']="הסיסמאות לא מתאימות<h4 id='a_1' style='margin:2px auto;'>נסה שוב</h4>";
				echo '<script>setTimeout(function(){$("#a_1").click();}, 0001);</script>';
			}
		}
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
			<link rel="stylesheet" href="2.css" media="screen" /> 
			<!-- Emoji CSS -->
			<link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
			<!-- Jquery -->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
			<link rel="stylesheet" href="../ex/am/ple/001/forms.css">
</head>
<body>
<div style="width:100%;text-align:center;direction:rtl;">
	<div class="w3-card-4 w3-col l3 m2 s0 w3-center" style="opacity:0;">&nbsp;</div>
	<div class="w3-card-4 w3-col l6 m8 s12 w3-center">
		<div class="w3-container w3-orange w3-center">
			<h2 style="margin-bottom:0px;"><?=$_SESSION['message_1'] ?></h2>
		</div>
		<form class="w3-container" action="example_cleveland.php" method="post" enctype="multipart/form-data" autocomplete="on">
			<p>      
				<input id="input_1" class="w3-input w3-border w3-sand w3-center" type="text" placeholder="שם משתמש" name="user_name" onfocus="tell_uname()" required>
			</p>
			<p>      
				<input id="input_2" class="w3-input w3-border w3-sand w3-center" type="email" placeholder="מייל" name="e_mail" onfocus="tell_mail()" required>
			</p>
			<p>      
				<input class="w3-input w3-border w3-sand w3-center" type="password" placeholder="סיסמה" name="pass_word" autocomplete="new-password" onfocus="tell_pass()" required>
			</p>
			<p>      
				<input class="w3-input w3-border w3-sand w3-center" type="password" placeholder="סיסמה מחדש" name="pass_word_2" autocomplete="new-password" onfocus="tell_pass_2()" required>
			</p>
			<input class="w3-btn w3-orange" style="border-radius:5px;" type="submit" value="הרשמה" name="register">
		</form>
		
		<div id="p" style="border-radius:5px;margin-bottom:12px;"></div>
		
		<iframe src="https://giphy.com/embed/l4JyOCNEfXvVYEqB2" width="93%" height="200" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/up-power-beginners-zWWY4e3hV6AXC"></a></p>
	</div>
	<div class="w3-card-4 w3-col l3 m2 s0 w3-center" style="opacity:0;">&nbsp;</div>
</div>

<script>
/*
$(".em").click(function(){
	alert(this.id);
});
*/
$("#a_1").click(function(){
	$("#input_1").val('<?= $Us_name ?>');
	$("#input_2").val('<?= $Ma_name ?>');
});
$("#a_2").click(function(){
	$("#input_1").val('<?= $Us_name ?>');
});
$("#a_3").click(function(){
	$("#input_2").val('<?= $Ma_name ?>');
});

function tell_uname()
{
	$("#u_1").html('זה יהיה השם שלך באתר');
}

function tell_mail()
{
	$("#u_1").html('איתו אתה עושה לוגין');
}
function tell_pass()
{
	$("#u_1").html('לפחות 8 אותיות ומספרים');
}
function tell_pass_2()
{
	$("#u_1").html('לפחות 8 אותיות ומספרים');
}
</script>
</body>