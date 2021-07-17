<?php
class solution 
{
	// property declaration
    public $content;
	public $demoNumber;
    public $secondaryDemoNumber;
    public $thirdDemoNumber;
    public $imgName;
    public $questionName;
    public $questionTag;
    public $questionTagColor;
    public $questionNumber;
    public $solutionMathjax;
    public $fullSolutionMathjax;
	
	public function __construct($solution_array)
	{
		
		$this->demoNumber=$solution_array['demoNumber'];
		$this->secondaryDemoNumber=$solution_array['secondaryDemoNumber'];
		$this->thirdDemoNumber=$solution_array['thirdDemoNumber'];
		$this->imgName=$solution_array['imgName'];
		$this->questionName=$solution_array['questionName'];
		$this->questionTag=$solution_array['questionTag'];
		$this->questionTagColor=$solution_array['questionTagColor'];
		$this->questionNumber=$solution_array['questionNumber'];
		$this->solutionMathjax=$solution_array['solutionMathjax'];
		$this->fullSolutionMathjax=$solution_array['fullSolutionMathjax'];
				
		$this->content = '
		<div class="w3-container w3-hide Demo'.$this->demoNumber.' padding-left-zero">
				<ul class="w3-ul w3-card-4 w3-margin-bottom">
					<li class="w3-bar" onclick="myFunction(\'Demo'.$this->secondaryDemoNumber.'\')" style="width:100%;">
						<img src="'.$this->imgName.'" class="w3-bar-item w3-circle" style="width:68px">
						<div class="w3-bar-item w3-right">
							<span class="w3-large">'.$this->questionName.' | </span>
							<span>'.$this->questionNumber.'</span>
							<p class="margin-bottom-0px">
								<span class="w3-tag w3-'.$this->questionTagColor.'">'.$this->questionTag.'</span>
							</p>
							<span>לחצ/י לפיתרון</span>
						</div>
					</li>
				</ul>
				
				
				<div class="w3-card-4 w3-margin-bottom w3-hide Demo'.$this->secondaryDemoNumber.'" style="width:100%">
					<div onclick="myFunction(\'Demo'.$this->thirdDemoNumber.'\')" class="w3-container w3-center">
					<p>'.$this->solutionMathjax.'</p>
					</div>
					
					<div class="w3-container w3-hide Demo'.$this->thirdDemoNumber.'">
						<div style="width:75%;margin:auto;">
							<hr>
						</div>
						<p>'.$this->fullSolutionMathjax.'</p>
					</div>
				</div>
			</div>
		';
	}
	
	// method declaration
    public function displayContent() 
	{
        echo $this->content;
    }
}

class question
{
	// property declaration
    public $content;
	public $demoNumber;
    public $imgName;
    public $questionName;
    public $questionTag;
    public $questionTagColor;
    public $questionNumber;
    public $descriptionText;
    public $questionMathjax;
	
	public function __construct($question_array)
	{
		
		$this->demoNumber=$question_array['demoNumber'];
		$this->imgName=$question_array['imgName'];
		$this->questionName=$question_array['questionName'];
		$this->questionTag=$question_array['questionTag'];
		$this->questionTagColor=$question_array['questionTagColor'];
		$this->questionNumber=$question_array['questionNumber'];
		$this->descriptionText=$question_array['descriptionText'];
		$this->questionMathjax=$question_array['questionMathjax'];
				
		$this->content = '
			<li class="w3-bar" onclick="myFunction(\'Demo'.$this->demoNumber.'\')" style="width:100%;">
				<div class="w3-col" style="width:68px">
					<img src="'.$this->imgName.'" class="w3-bar-item w3-circle" style="width:100%">
				</div>
				
				<div class="w3-rest">
					<div class="w3-bar-item w3-right">
						<span class="w3-large">'.$this->questionName.' | </span>
						<span>'.$this->questionNumber.'</span>
						<p class="margin-bottom-0px">
							<span class="w3-tag w3-'.$this->questionTagColor.'">'.$this->questionTag.'</span>
						</p>
						<span>'.$this->descriptionText.'</span>
					</div>
				</div>
				
				<div class="w3-container w3-hide Demo'.$this->demoNumber.'">
					<div style="width:75%;margin:auto;">
						<hr>
					</div>
					'.$this->questionMathjax.'
				</div>
			</li>
		';
	}
	
	// method declaration
    public function displayContent() 
	{
        echo $this->content;
    }
}

class documentHeader
{
	// property declaration
    // none
	
	// method declaration
	// none
	
	public function __construct()
	{
		$this->content = '
			<!DOCTYPE html>
<html lang="iw">
<head>
<!-- FAVICON --><!-- OUTPUT 01_NOT NUMBERED -->
<link rel="icon" type="image/png" href="../css/favicon.ico">

<!-- APPLE TOUCH ICON --><!-- OUTPUT 02 -->
<link rel="apple-touch-icon" sizes="57x57" href="../css/favicon.png" />
<link rel="apple-touch-icon" sizes="72x72" href="../css/favicon.png" />
<link rel="apple-touch-icon" sizes="114x114" href="../css/favicon.png" />
<link rel="apple-touch-icon" sizes="144x144" href="../css/favicon.png" />

<!-- Encoding -->
<meta charset="utf-8">
	
<title>שאלות</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="format-detection" content="telephone=no">
<link rel="stylesheet" href="w3css_4_w3.css">
<!-- JQUERY --><script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="questions.js"></script>
<!-- MATHJAX --><script src=\'https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.5/latest.js?config=TeX-MML-AM_CHTML\' async></script>
<!-- MATH LATEX SYNTAX: https://en.wikibooks.org/wiki/LaTeX/Mathematics -->
<!-- MATHJAX SYNTAX: https://docs.mathjax.org/en/latest/start.html -->
<link href="https://fonts.googleapis.com/css?family=Alef&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<!-- EMOJI CSS --><link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
</head>

<body>
<!-- Sidebar -->
<div class="w3-sidebar w3-bar-block w3-border-right" style="display:none" id="mySidebar">
  <button onclick="w3_close()" class="w3-bar-item w3-large" style="text-align:right;">&times; סגירה</button>
  <a href="#" class="w3-bar-item w3-button" style="text-align:right;"><b>מספרים ושברים</b></a>
  <a href="#" class="w3-bar-item w3-button" style="text-align:right;">חיבור, חיסור, כפל, חילוק</a>
  <a href="#" class="w3-bar-item w3-button" style="text-align:right;">סדר פעולות חשבון</a>
  <a href="#" class="w3-bar-item w3-button" style="text-align:right;">טכניקה אלגברית</a>
  <a href="#" class="w3-bar-item w3-button" style="text-align:right;">משוואות עם נעלם אחד</a>
  <a href="#" class="w3-bar-item w3-button" style="text-align:right;">משוואות עם סוגריים</a>
  <a href="#" class="w3-bar-item w3-button" style="text-align:right;">משוואות עם נעלם אחד משני הצדדים</a>
  <a href="#" class="w3-bar-item w3-button" style="text-align:right;">משוואות עם נעלם אחד במונה</a>
  <a href="#" class="w3-bar-item w3-button" style="text-align:right;">משוואות עם נעלם אחד במכנה</a>
  <a href="#" class="w3-bar-item w3-button" style="text-align:right;">מערכת משוואות</a>
  <a href="#" class="w3-bar-item w3-button" style="text-align:right;">חזקה ושורש</a>
  <a href="#" class="w3-bar-item w3-button" style="text-align:right;"><b>פונקציות</b></a>
  <a href="#" class="w3-bar-item w3-button" style="text-align:right;">מערכת צירים</a>
  <a href="#" class="w3-bar-item w3-button" style="text-align:right;">טבלת ערכים</a>
  <a href="#" class="w3-bar-item w3-button" style="text-align:right;">שרטוט גרף</a>
  <a href="#" class="w3-bar-item w3-button" style="text-align:right;">תחומי עליה וירידה</a>

</div>

<!-- Page Content -->
<div class="w3-teal">
  <button class="w3-button w3-teal w3-xlarge" onclick="w3_open()">☰</button>
  <div class="w3-container w3-center">
    <h1>מתמטיקה |3|4|5 יח"ל</h1>
  </div>
</div>
		';
	}
	
	// method declaration
    public function displayContent() 
	{
        echo $this->content;
    }
}

class subjectHeader
{
	// property declaration
    // none
	
	// method declaration
	// none
	
	public function __construct()
	{
		$this->content = '
		
<div class="w3-container w3-center">
  <h2 style="margin-top:10px;">חיבור, חיסור, כפל, חילוק שברים</h2>
	<div class="w3-bar w3-border w3-round pagination" style="width:auto;display:inline-block;text-align:center;">
		<a href="questions_01.php" class="w3-bar-item w3-button padding-8x-16px green-hover" style="padding:8px 16px;text-decoration:none;">&raquo;</a>
		<a href="questions_02.php" class="w3-bar-item w3-button padding-8x-16px green-hover" style="padding:8px 16px;text-decoration:none;">1</a>
		<a href="questions_03.php" class="w3-bar-item w3-button padding-8x-16px green-hover" style="padding:8px 16px;text-decoration:none;">2</a>
		<a href="#" class="w3-bar-item w3-button padding-8x-16px green-hover" style="padding:8px 16px;text-decoration:none;">3</a>
		<a href="#" class="w3-bar-item w3-button padding-8x-16px green-hover" style="padding:8px 16px;text-decoration:none;">4</a>
		<a href="#" class="w3-bar-item w3-button padding-8x-16px green-hover" style="padding:8px 16px;text-decoration:none;">&laquo;</a>
	</div>
</div>

<div class="w3-row w3-container w3-center">
   <div class="w3-row">
    <div class="w3-col l6 m6 s0 w3-center">

		';
	}
	
	// method declaration
    public function displayContent() 
	{
        echo $this->content;
    }
}

class middlePart
{
	// property declaration
    // none
	
	// method declaration
	// none
	
	public function __construct()
	{
		$this->content = '
</div>
    
	<div class="w3-col l6 m6 s12 w3-center" style="float:right;">
		<ul class="w3-ul w3-card-4">
		';
	}
	
	// method declaration
    public function displayContent() 
	{
        echo $this->content;
    }
}


class footer
{
	// property declaration
    // none
	
	// method declaration
	// none
	
	public function __construct()
	{
		$this->content = '
			<li class="w3-bar" onclick="myFunction(\'Demo5\')" style="width:100%;">
				<div class="w3-bar-item w3-right">
					<span class="w3-large">הוסף שאלה</span><br>
				</div>
				
				<div class="w3-bar-item">
					<img src="Plus.jpg" class="w3-bar-item w3-circle" style="width:68px;">
				</div>
			</li>
			
			<li class="w3-bar w3-hide Demo5" style="width:100%;">
				<div class="w3-container w3-teal">
					<h2 style="margin-top:10px;">שאלה חדשה</h2>
				</div>
				
				<form class="w3-container w3-card-4">
					<p class="align-right margin-bottom-0px">      
						<label class="w3-text-grey margin-bottom-0px margin-top-5px">העלאת תמונה</label>
						<p class="align-right margin-bottom-0px">לא לשכוח לציין שם שאלה, תיאור קצר (בשורה) ופתרון מלא.</p>
						<!-- FORM 01 -->
						<table style="width:100%;margin:auto;border-collapse:collapse;direction:ltr;">
							<tr style="width:100%;">
								<td style="width:100%;text-align:left;">
									<input class="w3-input" type="file" name="file_01" id="file_01" style="display:inline;padding-right:0px;">
								</td>
							</tr>
							<tr style="width:100%;">
								<td style="width:100%;text-align:left;">
									<input class="w3-input" type="button" value="Upload File" onclick="uploadFile_01()" style="display:inline;margin-top:2px;">
									<input class="w3-input" type="button" value="Cancel" id="cancel" style="display:inline;margin-top:2px;">
								</td>
							</tr>
							<tr>
								<td style="width:100%;text-align:left;direction:ltr;">
									<!-- PROGRESS BAR -->
									<progress style="vertical-align:top;width:100%;float:right;" id="progressBar_01" value="0" max="100"></progress>
									<h3 class="w3-input" id="status_01" style="width:100%;direction:ltr;font-size:14px;"></h3>
									<p class="w3-input" id="loaded_n_total_01" style="display:none;"></p> 
								</td>
							</tr>
						</table>
					</p>
				</form>
			</li>
		</ul>
	</div>
  </div>
</div>

<div id="disqus_thread" style="padding:10px;margin-top:20px;"></div>
<script>

	/**
	*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
	*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
	
	var disqus_config = function () {
	this.page.url = \'https://1000ish.com/Questions/questions_02.php\';  // Replace PAGE_URL with your page\'s canonical URL variable
	this.page.identifier = \'questions_02Index\'; // Replace PAGE_IDENTIFIER with your page\'s unique identifier variable
	};
	
	(function() { // DON\'T EDIT BELOW THIS LINE
	var d = document, s = d.createElement(\'script\');
	s.src = \'https://https-1000ish-com-questions-questions-02-php.disqus.com/embed.js\';
	s.setAttribute(\'data-timestamp\', +new Date());
	(d.head || d.body).appendChild(s);
	})();
</script>

<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
</body>
</html>           
		';
	}
	
	// method declaration
    public function displayContent() 
	{
        echo $this->content;
    }
}

?>
