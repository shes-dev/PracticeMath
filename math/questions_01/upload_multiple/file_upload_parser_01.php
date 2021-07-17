<?php
//SESSION
	session_start();

// ERRORS DISPLAY
	//error_reporting(E_ALL);
	//ini_set('display_errors', 'On');
	//ini_set('memory_limit', '128M');	

//UPLOADED FILE DATA VARS	
	$fileName = $_FILES["file_01"]["name"]; // The file name
	$fileTmpLoc = $_FILES["file_01"]["tmp_name"]; // File in the PHP tmp folder
	$fileType = $_FILES["file_01"]["type"]; // The type of file it is
	$fileSize = $_FILES["file_01"]["size"]; // File size in bytes
	$fileErrorMsg = $_FILES["file_01"]["error"]; // 0 for false... and 1 for true
	
	date_default_timezone_set("Asia/Jerusalem");
	$fileName = date("Y-m-d")."_".date("h-i-sa")."_".$_FILES["file_01"]["name"];
		
	if (!$fileTmpLoc) 
	{ // if file not chosen
		echo "ERROR: Please browse for a file before clicking the upload button.";
		exit();
	}
	
	if(move_uploaded_file($fileTmpLoc, "test_uploads/$fileName"))
	{
		//echo "$fileName upload is complete";
		echo "Upload is complete";
		
		//REPORT MAIL
		$f = "registration@explainit.online";
		$f_1="1000ish - IMAGE UPLOADED";
				
		//HEADERS
		$headers = "From: registration@explainit.online\r\n";
		$headers .= "Reply-To:registration@explainit.online\r\n";
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=utf-8\r\n";
				
		//MESSAGE
		$message = '<html lang="iw" dir="rtl"><body>';
		$message .= '<div style="width:100%;margin:auto;text-align:center;">';
		$message .= '<h4>IP:</h4>';
		$message .= '<h4>'.$_SERVER['REMOTE_ADDR'].'</h4>';
		$message .= "</div>";
		$message .= "</body></html>";
		
		//SENDING
		mail($f,$f_1,$message,$headers);
						
	} 
	
	else 
	{
		//echo "move_uploaded_file function failed";
		echo "Upload failed";
	}
?>