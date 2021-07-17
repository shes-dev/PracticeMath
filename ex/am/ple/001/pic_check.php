<?php
//settings
	// display errors
		error_reporting(E_ALL);
		ini_set('display_errors', 'On');
		ini_set('file_uploads', 'On');
		
	// getting php data	
		//phpinfo();
		//echo getcwd();


//vars
$name = '';
$type = '';
$size = '';
$error = '';
$msg_h4='';
$msg='';

//funcs   
	// creating imgs
	function compress_image($source_url, $destination_url, $quality) 
	{
	
		$info = getimagesize($source_url);
		
		if ($info['mime'] == 'image/jpeg')
		$image = imagecreatefromjpeg($source_url);
	
		elseif ($info['mime'] == 'image/gif')
		$image = imagecreatefromgif($source_url);
	
		elseif ($info['mime'] == 'image/png')
		$image = imagecreatefrompng($source_url);
	
		imagejpeg($image, $destination_url, $quality);
		
		// debugging
		/*
			echo '<pre>';
			echo '<h4>info:</h4>';
			var_dump($info);
			//var_dump($image);
			echo '</pre>';
		*/
		
		return $destination_url;
	}

	//gets list of folders in directory ordered by date
	function D($d)
	{
		$ignored = array('.', '..', '.svn', '.htaccess');
	
		$files = array();    
		foreach (scandir($d) as $file) 
		{
			if (in_array($file, $ignored)) continue;
			$files[$file] = filemtime($d . '/' . $file);
		}
	
		arsort($files);
		$files = array_keys($files);
	
		return ($files) ? $files : false;
	}

//post
if (isset($_POST['submit'])) 
{
	//debugging
	/*
		echo '<pre>';
		var_dump($_FILES);
		echo '</pre>';
	*/
	
	//setting file variable
	$f=$_FILES['file'];
	
	$f_name=$f['name'];
	$f_tmpname=$f['tmp_name'];
	$f_size=$f['size'];
	$f_error=$f['error'];
	$f_type=$f['type'];

	if ($f['error'] > 0)
	{
		if ($f['error'] < 5)
		{
			if ($f['error'] == 1 || $f['error'] == 2 )
			{
				$msg_h4 = 'ההעלאה נכשלה';
				$msg = 'הקובץ גדול מדי.';
			}
			
			if ($f['error'] == 3 )
			{
				$msg_h4 = 'ההעלאה נכשלה';
				$msg = 'אנא נסה שוב.';
			}
			
			
			if ($f['error'] == 4 )
			{
				$msg_h4 = 'ההעלאה נכשלה';
				$msg = 'לא נבחר קובץ.';
			}
		}
		else
		{
			$msg_h4 = 'ההעלאה נכשלה';
			$msg = 'אנא צור איתנו קשר ב-registration@explainit.online.';
		}
	}
    
	//no errors, continuing
	else if (($_FILES["file"]["type"] == "image/gif") ||
             ($_FILES["file"]["type"] == "image/jpeg")||
             ($_FILES["file"]["type"] == "image/png"))
		 {
		
			// message
			$msg_h4 = "ההעלאה הצליחה";
			$msg = "";
			
			// date			
			date_default_timezone_set('Asia/Jerusalem');
			
			// var
			$d=date('l_j_S_\of_F_Y_h-i-sA');
			$d_1=date('dmY');
			
			//setting directories
			$t=D('img');
				// scanning to see if today's directory exists
				$f=0;
				
				for ($i=0;$i<count($t);$i++)
				{
					if($t[$i]==$d_1)
					{
						$f=1;
					}
				}
				
				// today's directory found
				if($f == 0)
				{
					echo 'not found';
					$y='img/$d_1';
					mkdir($y,0755);
					var_dump(is_dir('img'));
				}
				
				if($f == 1)
				{
					echo 'found';
					//var_dump(is_dir('img'));
				}
				
				for ($i=0;$i<count($t);$i++)
				{
					if(is_dir('img/'.$t[$i].''))
					{
						echo '<pre>';
						echo $t[$i];
						echo ' is a directory';
						echo '</pre>';
					}
				}
				
				
			// setting urls
						
			$url = 'img/'.$d_1.'/'.$d.'.jpg';
			$url_up = '../up/'.$d.'.jpg';
						
			// uploading
			compress_image($_FILES["file"]["tmp_name"], $url, 80);
			compress_image($_FILES["file"]["tmp_name"], $url_up, 80);
		}
		else
		{
			$msg_h4 = "ההעלאה נכשלה";
			$msg = "מותר להעלות רק תמונות מסוג jpg, png או gif.";
		}
}
?>
<html>

<body>
	<div class="msg">
		<!-- conditional msg output -->
		<?php
        if($_POST)
		{
			if (1) 
			{
        ?>
			<div style="text-align:center;direction:rtl;">
				<h2 style="margin-bottom:0px;"><?php echo $msg_h4; ?></h4>
				<p style="margin-top:4px;"><?php echo $msg; ?></p>
			</div>
        <?php
			}
					
		//getting all files in img directory
		$t=D('img');
		
		echo '<pre>';
		var_dump($t);
		echo '<br>';
		var_dump($d_1);
		echo '</pre>';
		
		/*
		// outputting pics
		for ($i=0;$i<count($t);$i++)
			{
				echo '<div style="float:left;width:100px;">';
				echo '<img src="img/'.$t[$i].'" style="width:100%;">';
				echo '</div>';
			}
		*/
		}
		?>
    </div>
          
	 
    <div style="text-align:center;">
		<form action="pic_check.php" name="img_compress" id="img_compress" method="post" enctype="multipart/form-data">
			
			<h4>העלאת תמונה</h4>
			<input type="file" name="file"/>
			<input type="submit" name="submit" value="העלאה"/>
			
		</form>
	</div>
          
     </body>
</html>