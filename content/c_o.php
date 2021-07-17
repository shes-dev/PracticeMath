<?php
/* srcs */
	// sql update
	// https://www.w3schools.com/sql/sql_update.asp
	// js page change delay
	// http://stackoverflow.com/questions/14955526/php-delay-on-redirect/14955790#14955790

/*setting encoding for hebrew*/
header('Content-Type: text/html; charset=utf-8');
/*Data*/
$host = 'localhost';
$username = 'elad189g_math_user_1';
$password = 'mathpa55w0rd';
$db = 'elad189g_math_1';

// Create connection
$con = mysqli_connect($host, $username, $password,$db);
if($con){
	//echo "<meta name='viewport' content='width=device-width, initial-scale=1'>" ;
	echo "<center><h1 style='margin-top:25%;'>OK</h1></center>";
	}
else {
	echo "<center><h1>Not OK</h1></center>";
}
// enabling hebrew
mysql_query("SET character_set_client=utf8");
mysql_query("SET character_set_connection=utf8");
mysql_query("SET character_set_database=utf8");
mysql_query("SET character_set_results=utf8");
mysql_query("SET character_set_server=utf8");

// Inserting data with variables
$line = $_POST["line_number"];
$checked = $_POST["checked_yes_no"];

//echo "line:".$line."<br>";
//echo "check:".$checked;

//$sql2="insert into drills_status (linenumber,checked) values ('$line','$checked')";
if ($line == "1" && $checked == "yes"){
$sql2="update drills_status set checked = 'be' where id = '6'";
$query = mysqli_query($con,$sql2); 
}

if ($line == "2" && $checked == "yes"){
$sql2="update drills_status set checked = 'be' where id = '7'";
$query = mysqli_query($con,$sql2); 
}

if ($line == "3" && $checked == "yes"){
$sql2="update drills_status set checked = 'be' where id = '8'";
$query = mysqli_query($con,$sql2); 
}

if ($line == "4" && $checked == "yes"){
$sql2="update drills_status set checked = 'be' where id = '9'";
$query = mysqli_query($con,$sql2); 
}

if ($query){ 
 echo '<center><h2>data inserted successfully</h2></center>';
}

//getting back to previous page
$red="http://www.math.project2017.co#table_drills";
//$red="http://www.google.com";
redirect($red);

function redirect($url){
    if (headers_sent()){
      die('<script type="text/javascript">window.location.href="' . $url . '";</script>');
    }else{
      //header('refresh:5; Location: ' . $url);
      echo "<script>
		window.setTimeout(function() {
        window.location.href='http://www.example.com/target';
		}, 7500);
		</script>";
	  die();
    }    
}

?>