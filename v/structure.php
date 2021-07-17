<?php
session_start();

//ERRORS DISPLAY
	error_reporting(E_ALL);
	ini_set('display_errors', 'On');
	
	include 'loginAlert.php';
	include 'videos.php';

class videoGallery
{
	// property declaration
    public $content;
    public $green_link;
    public $red_link;
    public $current_link;
			
	// method declaration
	// none
	
	public function __construct($first_page = null, $word_index_start = 0, $word_index_end = 10)
	{
			$this->content = '
			
			<div id="my_nanogallery2"></div>
			<script>
			
			  jQuery("#my_nanogallery2").nanogallery2({
				items:[
				  {
					src:          \'https://vimeo.com/32875422\',                           // media url
					srct:         \'https://i.vimeocdn.com/video/222726041_1280x720.jpg\',  // media thumbnail url
					title:        \'Vimeo video\',                                          // media title
					description:  \'Video\'                                                 // media description
				  },
				  { src: \'https://www.youtube.com/watch?v=Ir098VWCv8Q\', title: \'Youtube video\' },
				  { src: \'https://www.dailymotion.com/video/x4wtyl6\',   title: \'Dailymotion video\' },
				  { src: \'berlin1.jpg\',      srct: \'berlin1t.jpg\',   title: \'Title Image\' }
					],
				thumbnailWidth:  \'auto\',
				thumbnailHeight: 170,
				itemsBaseURL:    \'https://nanogallery2.nanostudio.org/samples/\',
					locationHash:    false
			  });
			
			</script>
			';	
	}
	
	// method declaration
    public function displayContent() 
	{
        echo $this->content;
    }
}

class cardPage
{
	// property declaration
    public $content;
    public $green_link;
    public $red_link;
    public $current_link;
			
	// method declaration
	// none
	
	public function __construct($first_page = null, $word_index_start = 0, $word_index_end = 10)
	{
		$this->green_link='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTZIbTuWRSqUVqo_Qdo4O9PKBwhRuwHBcmDdJlDez5oSwdXel-7pw';
		$this->red_link='https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcQJW58uxpzvVMvRwWjeU840KqAKGhLNyMT0F5Qh4cgD9rUCihYh';
		$this->promo_link='https://practiceit.xyz/s1/psychometric/questions_10/questionPics/centhair05.png';
		$this->promo2_link='https://practiceit.xyz/s1/psychometric/questions_10/questionPics/centhair02.png';
		$this->promo3_link='https://practiceit.xyz/s1/psychometric/questions_10/questionPics/centhair04.png';
		
		include 'words.php';
		
		for($i=$word_index_start;$i<$word_index_end;$i++) {
			
			$this->content .= '
					
			<div class="fx-wrap">
			  <div class="card"'; 
			  
			  if($i%15==0) {$this->current_link=$this->promo_link;}
			  else if($i%10==0) {$this->current_link=$this->promo2_link;}	
			  else if($i%5==0) {$this->current_link=$this->promo3_link;}	
			  else if($i%2==0) {$this->current_link=$this->green_link;}	
			  else  	  {$this->current_link=$this->red_link;}	
			
			$this->content .= 'data-href="'.$this->current_link.'">
				<div class="front">
				  <div class="image">
					<p class="heading"></p>
				  </div>
				  <div class="text">
					<header class="clearfix">
					  <button class="flip"><span class="zmdi zmdi-replay"></span></button>
					</header>
					<p style="font-size:initial;">'.array_keys($this->word)[$i].'</p><a href="#"></a>
				  </div>
				</div>
				<div class="back">
				  <div class="text">
					<header class="clearfix">
					  <button class="flip"><span class="zmdi zmdi-replay"></span></button>
					</header><b>"'.array_keys($this->word)[$i].'"</b>
					<p>'.$this->word[array_keys($this->word)[$i]].'</p>
				  </div>
				</div>
			  </div>
			</div>';
		}

		$this->content .= '<script>';
		
		if(!empty($first_page)) {
		
		$this->content .= '
		$(document).on(\'click\', \'.flip\', function () {
		  let card = $(this).closest(\'.card\');
		  if (card.hasClass(\'flip-it\')) card.removeClass(\'flip-it\');else
		  card.addClass(\'flip-it\');
		});';
		}

		$this->content .= '
		  $(\'.card\').each(function () {
		  let href = $(this).data(\'href\');
		  $(this).find(\'.image\').css({
			backgroundImage: [\'url(\', href, \')\'].join(\'\') });

		});
		</script>';
			
	}
	
	// method declaration
    public function displayContent() 
	{
        echo $this->content;
    }
}
	
class solutionArray 
{
	// property declaration
    public $settings = array(
		"questionDemoNumber"      =>'',
		"demoNumber"              =>'',
		"secondaryDemoNumber"     =>'',
		"thirdDemoNumber"         =>'',
		"views"                   =>'',
		"questionAdImg"           =>'',
		"solutionAdImg"           =>'',
		"solutionAdVideo"         =>'',
		"solutionAdAudio"         =>'',
		"questionDescriptionText" =>'',
		"imgName"                 =>'',
		"questionName"            =>'',
		"questionTag1"            =>'',
		"questionTag1Color"       =>'',
		"questionTag2"            =>'',
		"questionTag2Color"       =>'',
		"questionTag3"            =>'',
		"questionTag3Color"       =>'',
		"questionTag4"            =>'',
		"questionTag4Color"       =>'',
		"questionNumber"          =>'',
		"solutionMathjax"         =>'',
		"questionMathjax"         =>'',
		"fullSolutionMathjax"     =>''
	);
    
	public function __call($methodName, $params = null)
    {
        if($methodName == 'set' && count($params) == 2)
        {
            $key = $params[0];
            $value = $params[1];
            $this->settings[$key] = $value;
        }
        elseif($methodName == 'get' && count($params) == 1)
        {
            $key = $params[0];
            if(array_key_exists($key, $this->settings)) return $this->settings[$key];
        }
        else
        {
            exit('Opps! The method is not defined!');
        }
    }
	
	// method declaration
    public function displaySolutionArray() 
	{
		return $this->settings;
    }
}

class englishSolution 
{
	// property declaration
    public $content;
	public $demoNumber;
    public $secondaryDemoNumber;
    public $thirdDemoNumber;
    public $imgName;
    public $questionName;
    public $questionTag1;
    public $questionTag2;
    public $questionTag3;
    public $questionTag4;
	public $questionTag1Flag;
    public $questionTag2Flag;
    public $questionTag3Flag;
    public $questionTag4Flag;
    public $questionTag1Color;
	public $questionTag2Color;
	public $questionTag3Color;
	public $questionTag4Color;
    public $questionNumber;
    public $solutionMathjax;
    public $fullSolutionMathjax;
	public $solutionAdImg;
    public $solutionAdImgFlag;
    public $solutionAdVideoFlag;
    public $solutionAdAudioFlag;
    public $views;
	
	public function __construct($solution_array)
	{
		
		$this->demoNumber=$solution_array['demoNumber'];
		$this->secondaryDemoNumber=$solution_array['secondaryDemoNumber'];
		$this->thirdDemoNumber=$solution_array['thirdDemoNumber'];
		$this->imgName=$solution_array['imgName'];
		$this->questionName=$solution_array['questionName'];
		$this->questionTag1=$solution_array['questionTag1'];
		$this->questionTag1Color=$solution_array['questionTag1Color'];
		$this->questionTag2=$solution_array['questionTag2'];
		$this->questionTag2Color=$solution_array['questionTag2Color'];
		$this->questionTag3=$solution_array['questionTag3'];
		$this->questionTag3Color=$solution_array['questionTag3Color'];
		$this->questionTag4=$solution_array['questionTag4'];
		$this->questionTag4Color=$solution_array['questionTag4Color'];
		$this->questionNumber=$solution_array['questionNumber'];
		$this->solutionMathjax=$solution_array['solutionMathjax'];
		$this->fullSolutionMathjax=$solution_array['fullSolutionMathjax'];
		$this->views=$solution_array['views'];
			
		$this->solutionAdImgFlag=0;
		$this->solutionAdVideoFlag=0;
		$this->solutionAdAudioFlag=0;
		
		if(isset($solution_array['questionTag1']) && !empty($solution_array['questionTag1']))	
		{
			$this->questionTag1=$solution_array['questionTag1'];
			$this->questionTag1Flag=1;
		}
		
		if(isset($solution_array['questionTag2']) && !empty($solution_array['questionTag2']))	
		{
			$this->questionTag2=$solution_array['questionTag2'];
			$this->questionTag2Flag=1;
		}
		
		if(isset($solution_array['questionTag3']) && !empty($solution_array['questionTag3']))	
		{
			$this->questionTag3=$solution_array['questionTag3'];
			$this->questionTag3Flag=1;
		}
		
		if(isset($solution_array['questionTag4']) && !empty($solution_array['questionTag4']))	
		{
			$this->questionTag4=$solution_array['questionTag4'];
			$this->questionTag4Flag=1;
		}
		
		if(isset($solution_array['solutionAdImg']) && !empty($solution_array['solutionAdImg']))	
		{
			$this->solutionAdImg=$solution_array['solutionAdImg'];
			$this->solutionAdImgFlag=1;
		}
		
		if(isset($solution_array['solutionAdVideo']) && !empty($solution_array['solutionAdVideo']))	
		{
			$this->solutionAdVideo=$solution_array['solutionAdVideo'];
			$this->solutionAdVideoFlag=1;
		}
		if(isset($solution_array['solutionAdAudio']) && !empty($solution_array['solutionAdAudio']))	
		{
			$this->solutionAdAudio=$solution_array['solutionAdAudio'];
			$this->solutionAdAudioFlag=1;
		}

		
		$this->content = '
		<div class="w3-container w3-hide Demo'.$this->demoNumber.' padding-left-zero">
				<ul class="w3-ul w3-card-4 w3-margin-bottom">
					<li class="w3-bar" onclick="myFunction(\'Demo'.$this->secondaryDemoNumber.'\')" style="width:100%;">
						<img src="'.$this->imgName.'" class="w3-bar-item w3-circle" style="width:68px">
						<div class="w3-bar-item w3-right">
							<span class="w3-large">'.$this->questionName.' | </span>
							<span>'.$this->questionNumber.' | </span>
							<span>'.$this->views.' צפיות</span>
							<p class="margin-bottom-0px">';
								if($this->questionTag1Flag)
								{
									$this->content.='<span class="w3-tag margin-left-2px w3-'.$this->questionTag1Color.'">'.$this->questionTag1.'</span>';
								}
								if($this->questionTag2Flag)
								{
									$this->content.='<span class="w3-tag margin-left-2px w3-'.$this->questionTag2Color.'">'.$this->questionTag2.'</span>';
								}
								if($this->questionTag3Flag)
								{
									$this->content.='<span class="w3-tag margin-left-2px w3-'.$this->questionTag3Color.'">'.$this->questionTag3.'</span>';
								}
								if($this->questionTag4Flag)
								{
									$this->content.='<span class="w3-tag margin-left-2px w3-'.$this->questionTag4Color.'">'.$this->questionTag4.'</span>';
								}
							
							$this->content.='</p>
							<span>לחצ/י לפרטים</span>
						</div>
					</li>
				</ul>
				
				
				<div class="w3-card-4 w3-margin-bottom w3-hide Demo'.$this->secondaryDemoNumber.'" style="width:100%">
					<div onclick="myFunction(\'Demo'.$this->thirdDemoNumber.'\')" class="w3-container w3-center">
					<p style="margin:8px;">'.$this->solutionMathjax.'</p>
					</div>
					
					<div class="w3-container w3-hide Demo'.$this->thirdDemoNumber.'">
						<div style="width:75%;margin:auto;">
							<hr>
						</div>
						<p>'.$this->fullSolutionMathjax.'</p>';
		
		if($this->solutionAdImgFlag)
		{
			//$this->content.='<img src='.$this->solutionAdImg.' style="width:100%;" class="w3-margin-bottom" /></div></div></div>';
			$this->content.=$this->solutionAdImg;
		}
		if ($this->solutionAdVideoFlag)
		{
			//$this->content.='<iframe width="100%" height="235px" class="w3-margin-bottom" src="https://www.youtube.com/embed/QAgy9r331v0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div></div></div>';
			$this->content.=$this->solutionAdVideo;
		}
		if ($this->solutionAdAudioFlag)
		{
			//$this->content.='<iframe width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/609498354&color=%2300aabb&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe></div></div></div>';
			$this->content.=$this->solutionAdAudio;
		}
		
		$this->content.='</div></div></div>';
	}
	
	// method declaration
    public function displayContent() 
	{
        echo $this->content;
    }
}

class solution 
{
	// property declaration
    public $content;
	public $demoNumber;
    public $secondaryDemoNumber;
    public $thirdDemoNumber;
    public $imgName;
    public $questionName;
    public $questionTag1;
    public $questionTag2;
    public $questionTag3;
    public $questionTag4;
	public $questionTag1Flag;
    public $questionTag2Flag;
    public $questionTag3Flag;
    public $questionTag4Flag;
    public $questionTag1Color;
	public $questionTag2Color;
	public $questionTag3Color;
	public $questionTag4Color;
    public $questionNumber;
    public $solutionMathjax;
    public $fullSolutionMathjax;
	public $solutionAdImg;
    public $solutionAdImgFlag;
    public $solutionAdVideoFlag;
    public $solutionAdAudioFlag;
    public $views;
	
	public function __construct($solution_array)
	{
		
		$this->demoNumber=$solution_array['demoNumber'];
		$this->secondaryDemoNumber=$solution_array['secondaryDemoNumber'];
		$this->thirdDemoNumber=$solution_array['thirdDemoNumber'];
		$this->imgName=$solution_array['imgName'];
		$this->questionName=$solution_array['questionName'];
		$this->questionTag1=$solution_array['questionTag1'];
		$this->questionTag1Color=$solution_array['questionTag1Color'];
		$this->questionTag2=$solution_array['questionTag2'];
		$this->questionTag2Color=$solution_array['questionTag2Color'];
		$this->questionTag3=$solution_array['questionTag3'];
		$this->questionTag3Color=$solution_array['questionTag3Color'];
		$this->questionTag4=$solution_array['questionTag4'];
		$this->questionTag4Color=$solution_array['questionTag4Color'];
		$this->questionNumber=$solution_array['questionNumber'];
		$this->solutionMathjax=$solution_array['solutionMathjax'];
		$this->fullSolutionMathjax=$solution_array['fullSolutionMathjax'];
		$this->views=$solution_array['views'];
			
		$this->solutionAdImgFlag=0;
		$this->solutionAdVideoFlag=0;
		$this->solutionAdAudioFlag=0;
		
		if(isset($solution_array['questionTag1']) && !empty($solution_array['questionTag1']))	
		{
			$this->questionTag1=$solution_array['questionTag1'];
			$this->questionTag1Flag=1;
		}
		
		if(isset($solution_array['questionTag2']) && !empty($solution_array['questionTag2']))	
		{
			$this->questionTag2=$solution_array['questionTag2'];
			$this->questionTag2Flag=1;
		}
		
		if(isset($solution_array['questionTag3']) && !empty($solution_array['questionTag3']))	
		{
			$this->questionTag3=$solution_array['questionTag3'];
			$this->questionTag3Flag=1;
		}
		
		if(isset($solution_array['questionTag4']) && !empty($solution_array['questionTag4']))	
		{
			$this->questionTag4=$solution_array['questionTag4'];
			$this->questionTag4Flag=1;
		}
		
		if(isset($solution_array['solutionAdImg']) && !empty($solution_array['solutionAdImg']))	
		{
			$this->solutionAdImg=$solution_array['solutionAdImg'];
			$this->solutionAdImgFlag=1;
		}
		
		if(isset($solution_array['solutionAdVideo']) && !empty($solution_array['solutionAdVideo']))	
		{
			$this->solutionAdVideo=$solution_array['solutionAdVideo'];
			$this->solutionAdVideoFlag=1;
		}
		if(isset($solution_array['solutionAdAudio']) && !empty($solution_array['solutionAdAudio']))	
		{
			$this->solutionAdAudio=$solution_array['solutionAdAudio'];
			$this->solutionAdAudioFlag=1;
		}

		
		$this->content = '
		<div class="w3-container w3-hide Demo'.$this->demoNumber.' padding-left-zero">
				<ul class="w3-ul w3-card-4 w3-margin-bottom">
					<li class="w3-bar" onclick="myFunction(\'Demo'.$this->secondaryDemoNumber.'\')" style="width:100%;">
						<img src="'.$this->imgName.'" class="w3-bar-item w3-circle" style="width:68px">
						<div class="w3-bar-item w3-right">
							<span class="w3-large">'.$this->questionName.' | </span>
							<span>'.$this->questionNumber.' | </span>
							<span>'.$this->views.' צפיות</span>
							<p class="margin-bottom-0px">';
								if($this->questionTag1Flag)
								{
									$this->content.='<span class="w3-tag margin-left-2px w3-'.$this->questionTag1Color.'">'.$this->questionTag1.'</span>';
								}
								if($this->questionTag2Flag)
								{
									$this->content.='<span class="w3-tag margin-left-2px w3-'.$this->questionTag2Color.'">'.$this->questionTag2.'</span>';
								}
								if($this->questionTag3Flag)
								{
									$this->content.='<span class="w3-tag margin-left-2px w3-'.$this->questionTag3Color.'">'.$this->questionTag3.'</span>';
								}
								if($this->questionTag4Flag)
								{
									$this->content.='<span class="w3-tag margin-left-2px w3-'.$this->questionTag4Color.'">'.$this->questionTag4.'</span>';
								}
							
							$this->content.='</p>
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
						<p>'.$this->fullSolutionMathjax.'</p>';
		
		if($this->solutionAdImgFlag)
		{
			//$this->content.='<img src='.$this->solutionAdImg.' style="width:100%;" class="w3-margin-bottom" /></div></div></div>';
			$this->content.=$this->solutionAdImg;
		}
		if ($this->solutionAdVideoFlag)
		{
			//$this->content.='<iframe width="100%" height="235px" class="w3-margin-bottom" src="https://www.youtube.com/embed/QAgy9r331v0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div></div></div>';
			$this->content.=$this->solutionAdVideo;
		}
		if ($this->solutionAdAudioFlag)
		{
			//$this->content.='<iframe width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/609498354&color=%2300aabb&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe></div></div></div>';
			$this->content.=$this->solutionAdAudio;
		}
		
		$this->content.='</div></div></div>';
	}
	
	// method declaration
    public function displayContent() 
	{
        echo $this->content;
    }
}

class englishQuestion
{
	// property declaration
    public $content;
	public $demoNumber;
    public $imgName;
    public $questionName;
    public $questionTag1;
    public $questionTag2;
    public $questionTag3;
    public $questionTag4;
	public $questionTag1Flag;
    public $questionTag2Flag;
    public $questionTag3Flag;
    public $questionTag4Flag;
    public $questionNumber;
    public $descriptionText;
    public $questionMathjax;
    public $questionAdImg;
    public $questionAdImgFlag;
    public $questionAdImgIframeFlag;
    public $views;
	
	public function __construct($solution_array)
	{
		
		$this->demoNumber=$solution_array['questionDemoNumber'];
		$this->descriptionText=$solution_array['questionDescriptionText'];
		
		$this->imgName=$solution_array['imgName'];
		$this->questionName=$solution_array['questionName'];
		$this->questionTag1=$solution_array['questionTag1'];
		$this->questionTag1Color=$solution_array['questionTag1Color'];
		$this->questionTag2=$solution_array['questionTag2'];
		$this->questionTag2Color=$solution_array['questionTag2Color'];
		$this->questionTag3=$solution_array['questionTag3'];
		$this->questionTag3Color=$solution_array['questionTag3Color'];
		$this->questionTag4=$solution_array['questionTag4'];
		$this->questionTag4Color=$solution_array['questionTag4Color'];
		$this->questionNumber=$solution_array['questionNumber'];
		$this->questionMathjax=$solution_array['questionMathjax'];
		$this->views=$solution_array['views'];
		
		$this->questionAdImgFlag=0;
		$this->questionAdImgIframeFlag=0;
		
		if(isset($solution_array['questionTag1']) && !empty($solution_array['questionTag1']))	
		{
			$this->questionTag1=$solution_array['questionTag1'];
			$this->questionTag1Flag=1;
		}
		
		if(isset($solution_array['questionTag2']) && !empty($solution_array['questionTag2']))	
		{
			$this->questionTag2=$solution_array['questionTag2'];
			$this->questionTag2Flag=1;
		}
		
		if(isset($solution_array['questionTag3']) && !empty($solution_array['questionTag3']))	
		{
			$this->questionTag3=$solution_array['questionTag3'];
			$this->questionTag3Flag=1;
		}
		
		if(isset($solution_array['questionTag4']) && !empty($solution_array['questionTag4']))	
		{
			$this->questionTag4=$solution_array['questionTag4'];
			$this->questionTag4Flag=1;
		}
				
		if(isset($solution_array['questionAdImg']) && !empty($solution_array['questionAdImg']))	
		{
			$this->questionAdImg=$solution_array['questionAdImg'];
			$this->questionAdImgFlag=1;
			
			//Iframe
			if(substr($this->questionAdImg,0,26) == '<div class="videoWrapper">')
			{
				$this->questionAdImgIframeFlag=1;
			}
		}
		
		$this->content = '
			<li class="w3-bar" onclick="myFunction(\'Demo'.$this->demoNumber.'\')" style="width:100%;">
				<div class="w3-col" style="width:68px">
					<img src="'.$this->imgName.'" class="w3-bar-item w3-circle" style="width:100%">
				</div>
				
				<div class="w3-rest">
					<div class="w3-bar-item w3-right">
						<span class="w3-large">'.$this->questionName.' | </span>
						<span>'.$this->questionNumber.' | </span>
						<span>'.$this->views.' צפיות</span>
						<p class="margin-bottom-0px">';
							
							if($this->questionTag1Flag)
								{
									$this->content.='<span class="w3-tag margin-left-2px w3-'.$this->questionTag1Color.'">'.$this->questionTag1.'</span>';
								}
								if($this->questionTag2Flag)
								{
									$this->content.='<span class="w3-tag margin-left-2px w3-'.$this->questionTag2Color.'">'.$this->questionTag2.'</span>';
								}
								if($this->questionTag3Flag)
								{
									$this->content.='<span class="w3-tag margin-left-2px w3-'.$this->questionTag3Color.'">'.$this->questionTag3.'</span>';
								}
								if($this->questionTag4Flag)
								{
									$this->content.='<span class="w3-tag margin-left-2px w3-'.$this->questionTag4Color.'">'.$this->questionTag4.'</span>';
								}
						
						$this->content.='</p>
						<span>'.$this->descriptionText.'</span>
					</div>
				</div>';
				
				if($this->questionAdImgIframeFlag)
				{
					$this->content.='<div class="w3-container w3-hide Demo'.$this->demoNumber.' no-padding">';
				}
				else
				{
					$this->content.='<div class="w3-container w3-hide Demo'.$this->demoNumber.'">';
				}
			    
				$this->content.='<div style="width:75%;margin:auto;">
						<hr style="margin:10px auto;">
					</div>';
					
					if($this->questionAdImgFlag)
					{
						//$this->content.=$this->questionMathjax.'<img src='.$this->questionAdImg.' style="width:100%;" /></div></li>';
						$this->content.=$this->questionAdImg.'<br>'.$this->questionMathjax.'</div></li>';
					}
					else
					{
						$this->content.=$this->questionMathjax.'</div></li>';
					}
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
    public $questionTag1;
    public $questionTag2;
    public $questionTag3;
    public $questionTag4;
	public $questionTag1Flag;
    public $questionTag2Flag;
    public $questionTag3Flag;
    public $questionTag4Flag;
    public $questionNumber;
    public $descriptionText;
    public $questionMathjax;
    public $questionAdImg;
    public $questionAdImgFlag;
    public $questionAdImgIframeFlag;
    public $views;
	
	public function __construct($solution_array)
	{
		
		$this->demoNumber=$solution_array['questionDemoNumber'];
		$this->descriptionText=$solution_array['questionDescriptionText'];
		
		$this->imgName=$solution_array['imgName'];
		$this->questionName=$solution_array['questionName'];
		$this->questionTag1=$solution_array['questionTag1'];
		$this->questionTag1Color=$solution_array['questionTag1Color'];
		$this->questionTag2=$solution_array['questionTag2'];
		$this->questionTag2Color=$solution_array['questionTag2Color'];
		$this->questionTag3=$solution_array['questionTag3'];
		$this->questionTag3Color=$solution_array['questionTag3Color'];
		$this->questionTag4=$solution_array['questionTag4'];
		$this->questionTag4Color=$solution_array['questionTag4Color'];
		$this->questionNumber=$solution_array['questionNumber'];
		$this->questionMathjax=$solution_array['questionMathjax'];
		$this->views=$solution_array['views'];
		
		$this->questionAdImgFlag=0;
		$this->questionAdImgIframeFlag=0;
		
		if(isset($solution_array['questionTag1']) && !empty($solution_array['questionTag1']))	
		{
			$this->questionTag1=$solution_array['questionTag1'];
			$this->questionTag1Flag=1;
		}
		
		if(isset($solution_array['questionTag2']) && !empty($solution_array['questionTag2']))	
		{
			$this->questionTag2=$solution_array['questionTag2'];
			$this->questionTag2Flag=1;
		}
		
		if(isset($solution_array['questionTag3']) && !empty($solution_array['questionTag3']))	
		{
			$this->questionTag3=$solution_array['questionTag3'];
			$this->questionTag3Flag=1;
		}
		
		if(isset($solution_array['questionTag4']) && !empty($solution_array['questionTag4']))	
		{
			$this->questionTag4=$solution_array['questionTag4'];
			$this->questionTag4Flag=1;
		}
				
		if(isset($solution_array['questionAdImg']) && !empty($solution_array['questionAdImg']))	
		{
			$this->questionAdImg=$solution_array['questionAdImg'];
			$this->questionAdImgFlag=1;
			
			//Iframe
			if(substr($this->questionAdImg,0,26) == '<div class="videoWrapper">')
			{
				$this->questionAdImgIframeFlag=1;
			}
		}
		
		$this->content = '
			<li class="w3-bar" onclick="myFunction(\'Demo'.$this->demoNumber.'\')" style="width:100%;">
				<div class="w3-col" style="width:68px">
					<img src="'.$this->imgName.'" class="w3-bar-item w3-circle" style="width:100%">
				</div>
				
				<div class="w3-rest">
					<div class="w3-bar-item w3-right">
						<span class="w3-large">'.$this->questionName.' | </span>
						<span>'.$this->questionNumber.' | </span>
						<span>'.$this->views.' צפיות</span>
						<p class="margin-bottom-0px">';
							
							if($this->questionTag1Flag)
								{
									$this->content.='<span class="w3-tag margin-left-2px w3-'.$this->questionTag1Color.'">'.$this->questionTag1.'</span>';
								}
								if($this->questionTag2Flag)
								{
									$this->content.='<span class="w3-tag margin-left-2px w3-'.$this->questionTag2Color.'">'.$this->questionTag2.'</span>';
								}
								if($this->questionTag3Flag)
								{
									$this->content.='<span class="w3-tag margin-left-2px w3-'.$this->questionTag3Color.'">'.$this->questionTag3.'</span>';
								}
								if($this->questionTag4Flag)
								{
									$this->content.='<span class="w3-tag margin-left-2px w3-'.$this->questionTag4Color.'">'.$this->questionTag4.'</span>';
								}
						
						$this->content.='</p>
						<span>'.$this->descriptionText.'</span>
					</div>
				</div>';
				
				if($this->questionAdImgIframeFlag)
				{
					$this->content.='<div class="w3-container w3-hide Demo'.$this->demoNumber.' no-padding">';
				}
				else
				{
					$this->content.='<div class="w3-container w3-hide Demo'.$this->demoNumber.'">';
				}
			    
				$this->content.='<div style="width:75%;margin:auto;">
						<hr>
					</div>';
					
					if($this->questionAdImgFlag)
					{
						//$this->content.=$this->questionMathjax.'<img src='.$this->questionAdImg.' style="width:100%;" /></div></li>';
						$this->content.=$this->questionMathjax.$this->questionAdImg.'</div></li>';
					}
					else
					{
						$this->content.=$this->questionMathjax.'</div></li>';
					}
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
	
	public function __construct($subject_picture = 'psychometry')
	{
		$this->content = '
			<!DOCTYPE html>
			<html lang="iw">
			<head>
			<!-- Global site tag (gtag.js) - Google Analytics -->
            <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119966024-2"></script>
            <script>
                window.dataLayer = window.dataLayer || [];
                function gtag(){dataLayer.push(arguments);}
                gtag("js", new Date());
                gtag("config", "UA-119966024-2");
            </script>

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
			<!-- CSS STYLESHEET --><link rel="stylesheet" href="css/w3css_4_w3.css">
			<!-- JQUERY --><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
			<!-- JS SCRIPT --><script src="questionJs/questions.js"></script>
			<!-- MATHJAX --><script src=\'https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.5/latest.js?config=TeX-MML-AM_CHTML\' async></script>
			<!-- MATH LATEX SYNTAX: https://en.wikibooks.org/wiki/LaTeX/Mathematics -->
			<!-- MATHJAX SYNTAX: https://docs.mathjax.org/en/latest/start.html -->
			<!-- GOOGLE FONTS --><link href="https://fonts.googleapis.com/css?family=Alef&display=swap" rel="stylesheet">
			<!-- BOOTSTRAP --><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
			<!-- EMOJI CSS --><link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
			<!-- CARDS CSS --><link href="css/cards-css.css" rel="stylesheet">
			<!-- VIDEO GALLERY --><script type="text/javascript" src="https://unpkg.com/nanogallery2/dist/jquery.nanogallery2.min.js"></script>
			<!-- VIDEO GALLERY --><link href="https://unpkg.com/nanogallery2/dist/css/nanogallery2.min.css" rel="stylesheet" type="text/css">
			</head>

			<body>
			<!-- Sidebar -->
			<div class="w3-sidebar w3-bar-block w3-border-right" style="display:none" id="mySidebar">
			  <button onclick="w3_close()" class="w3-bar-item w3-large" style="text-align:right;color:#ccc;">&times; סגירה</button>';
			
			  if($subject_picture == 'psychometry') {	
				$this->content .= '<div class="w3-bar-item w3-button" style="text-align:center;"><b>מילים בעברית לפסיכומטרי</b></div>';
			  } else {
				$this->content .= '<div class="w3-bar-item w3-button" style="text-align:center;"><b>סוגי דפים</b></div>';  
			  }
			  
			  if($subject_picture == 'psychometry') {
			  $this->content .= '
			  			  
			  <a href="../questions_10/index.php" class="w3-bar-item w3-button" style="text-align:center;">001-080</a>
			  <a href="../questions_11/index.php" class="w3-bar-item w3-button" style="text-align:center;">081-160</a>
			  <a href="../questions_12/index.php" class="w3-bar-item w3-button" style="text-align:center;">161-240</a>
			  <a href="../questions_13/index.php" class="w3-bar-item w3-button" style="text-align:center;">241-320</a>
			  <a href="../questions_14/index.php" class="w3-bar-item w3-button" style="text-align:center;">321-400</a>
			  <a href="../questions_15/index.php" class="w3-bar-item w3-button" style="text-align:center;">401-480</a>
			  <a href="../questions_16/index.php" class="w3-bar-item w3-button" style="text-align:center;">481-560</a>
			  <a href="../questions_17/index.php" class="w3-bar-item w3-button" style="text-align:center;">561-640</a>
			  <a href="../questions_18/index.php" class="w3-bar-item w3-button" style="text-align:center;">641-720</a>
			  <a href="../questions_19/index.php" class="w3-bar-item w3-button" style="text-align:center;">721-800</a>
			  
			  <a href="../questions_20/index.php" class="w3-bar-item w3-button" style="text-align:center;">801-880</a>
			  <a href="../questions_21/index.php" class="w3-bar-item w3-button" style="text-align:center;">881-960</a>
			  <a href="../questions_22/index.php" class="w3-bar-item w3-button" style="text-align:center;">961-1040</a>
			  <a href="../questions_23/index.php" class="w3-bar-item w3-button" style="text-align:center;">1041-1120</a>			  
			  <a href="../questions_24/index.php" class="w3-bar-item w3-button" style="text-align:center;">1121-1200</a>			  
			  <a href="../questions_25/index.php" class="w3-bar-item w3-button" style="text-align:center;">1201-1280</a>
			  <a href="../questions_26/index.php" class="w3-bar-item w3-button" style="text-align:center;">1281-1360</a>
			  <a href="../questions_27/index.php" class="w3-bar-item w3-button" style="text-align:center;">1361-1440</a>
			  <a href="../questions_28/index.php" class="w3-bar-item w3-button" style="text-align:center;">1441-1520</a>
			  <a href="../questions_29/index.php" class="w3-bar-item w3-button" style="text-align:center;">1521-1600</a>
			  
			  <a href="../questions_30/index.php" class="w3-bar-item w3-button" style="text-align:center;">1601-1680</a>
			  <a href="../questions_31/index.php" class="w3-bar-item w3-button" style="text-align:center;">1681-1760</a>
			  <a href="../questions_32/index.php" class="w3-bar-item w3-button" style="text-align:center;">1761-1840</a>
			  <a href="../questions_33/index.php" class="w3-bar-item w3-button" style="text-align:center;">1841-1920</a>
			  <a href="../questions_34/index.php" class="w3-bar-item w3-button" style="text-align:center;">1921-2000</a>			  
			  <a href="../questions_35/index.php" class="w3-bar-item w3-button" style="text-align:center;">2001-2080</a>
			  <a href="../questions_36/index.php" class="w3-bar-item w3-button" style="text-align:center;">2081-2160</a>
			  <a href="../questions_37/index.php" class="w3-bar-item w3-button" style="text-align:center;">2161-2240</a>
			  <a href="../questions_38/index.php" class="w3-bar-item w3-button" style="text-align:center;">2241-2320</a>
			  <a href="../questions_39/index.php" class="w3-bar-item w3-button" style="text-align:center;">2321-2400</a>
			  
			  <a href="../questions_40/index.php" class="w3-bar-item w3-button" style="text-align:center;">2401-2480</a>
			  <a href="../questions_41/index.php" class="w3-bar-item w3-button" style="text-align:center;">2481-2560</a>
			  <a href="../questions_42/index.php" class="w3-bar-item w3-button" style="text-align:center;">2561-2640</a>
			  <a href="../questions_43/index.php" class="w3-bar-item w3-button" style="text-align:center;">2641-2720</a>
			  <a href="../questions_44/index.php" class="w3-bar-item w3-button" style="text-align:center;">2721-2800</a>			  
			  <a href="../questions_45/index.php" class="w3-bar-item w3-button" style="text-align:center;">2801-2880</a>
			  <a href="../questions_46/index.php" class="w3-bar-item w3-button" style="text-align:center;">2881-2960</a>
			  <a href="../questions_47/index.php" class="w3-bar-item w3-button" style="text-align:center;">2961-3040</a>
			  <a href="../questions_48/index.php" class="w3-bar-item w3-button" style="text-align:center;">3041-3120</a>
			  <a href="../questions_49/index.php" class="w3-bar-item w3-button" style="text-align:center;">3121-3200</a>
			  
			  <a href="../questions_50/index.php" class="w3-bar-item w3-button" style="text-align:center;">3201-3280</a>			  
			  <a href="../questions_51/index.php" class="w3-bar-item w3-button" style="text-align:center;">3281-3360</a>
			  <a href="../questions_52/index.php" class="w3-bar-item w3-button" style="text-align:center;">3361-3440</a>
			  <a href="../questions_53/index.php" class="w3-bar-item w3-button" style="text-align:center;">3441-3520</a>
			  <a href="../questions_54/index.php" class="w3-bar-item w3-button" style="text-align:center;">3521-3600</a>
			  <a href="../questions_55/index.php" class="w3-bar-item w3-button" style="text-align:center;">3601-3672</a>';
			  } 
			  else {
				
				$this->content .= '
			  			  
			  <a href="../questions/index.php" class="w3-bar-item w3-button" style="text-align:center;">שאלות וכרטיסים</a>
			  <a href="../questions_01/index.php" class="w3-bar-item w3-button" style="text-align:center;">שאלות</a>
			  <a href="../questions_02/index.php" class="w3-bar-item w3-button" style="text-align:center;">הסברים</a>
			  <a href="../questions_031/index.php" class="w3-bar-item w3-button" style="text-align:center;">וידאו</a>
			  <a href="../questions_04/index.php" class="w3-bar-item w3-button" style="text-align:center;">iframe</a>';
			  	
			  }
			  
			 
			$this->content .= '</div>

			<!-- Page Content -->
			<div style="background-color:#ccc;">
			  <button class="w3-button w3-xlarge" style="background-color:#00a4e4;" onclick="w3_open()">☰</button>
			  <div class="w3-container w3-center">';
			
			  if($subject_picture == 'psychometry') {	
				$this->content .= '<img src="../questions_10/questionPics/logo.png" style="width:200px;">';
			  } else {
				$this->content .= '<img src="../../math/questions_10/questionPics/logo.png" style="width:200px;">';  
			  }
			  $this->content .= '</div>
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
	
	public function __construct($subjectName,$start_question_index = null, $end_questions_index = null)
	{
		$this->content = '
		
<div class="w3-container w3-center">
  <a href="https://m.me/262296564684427" style="text-decoration:none;"><div><h4>לשיפור אוצר המילים באנגלית <img style="margin-right:10px;width:100px;" src="../questions_10/questionPics/chatbot.png"/></h4></div></a>
  <hr style="width:50%;margin:auto;">
  <h2 style="margin-top:10px;">'.$subjectName.'</h2>
  <h4 style="margin-top:10px;">'.$start_question_index.'-'.$end_questions_index.'</h4>
	<div class="w3-bar w3-border w3-round pagination" style="width:auto;display:inline-block;text-align:center;">
		<button class="w3-bar-item w3-button padding-8x-16px green-hover" style="display:none;padding:8px 16px;text-decoration:none;">&raquo;</button>
		<button id="button01" class="w3-bar-item w3-button padding-8x-16px green-hover" style="padding:8px 16px;text-decoration:none;">1</button>
		<button id="button02" class="w3-bar-item w3-button padding-8x-16px green-hover" style="padding:8px 16px;text-decoration:none;">2</button>
		<button id="button03" class="w3-bar-item w3-button padding-8x-16px green-hover" style="padding:8px 16px;text-decoration:none;">3</button>
		<button id="button04" class="w3-bar-item w3-button padding-8x-16px green-hover" style="padding:8px 16px;text-decoration:none;">4</button>
		<button class="w3-bar-item w3-button padding-8x-16px green-hover" style="display:none;padding:8px 16px;text-decoration:none;">&laquo;</button>
	</div>
</div>

<div class="w3-row w3-container w3-center">
   <div class="w3-row">
    <div id="div2" class="w3-col l6 m6 s0 w3-center" style="padding:2px;">

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
    
	<div class="w3-col l6 m6 s12 w3-center" style="float:right;padding:2px;">
		<ul class="w3-ul w3-card-4">
		';
	}
	
	// method declaration
    public function displayContent() 
	{
        echo $this->content;
    }
}

class middlePart2
{
	// property declaration
    // none
	
	// method declaration
	// none
	
	public function __construct()
	{
		$this->content = '
</div>
    
	<div id="div1">
		<div class="w3-col l6 m6 s12 w3-center" style="float:right;padding:2px;">
			<ul class="w3-ul">
		';
	}
	
	// method declaration
    public function displayContent() 
	{
        echo $this->content;
    }
}

class listBeforeFooter
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
	
	public function __construct($indexPage = null)
	{
		$this->content = '
			<li class="w3-bar" onclick="myFunction(\'Demo5\')" style="width:100%;display:none;">
				<div class="w3-bar-item w3-right">
					<span class="w3-large">הוסף שאלה</span><br>
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
</div>

<div id="disqus_thread" style="padding:10px;"></div>
<script>
	/**
	 *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
	 *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/

	var disqus_config = function() {
		this.page.url = \'https://www.practiceit.xyz/s1/s8_f/s10.php\'; // Replace PAGE_URL with your page\'s canonical URL variable
		this.page.identifier = \'practiceitIndex\'; // Replace PAGE_IDENTIFIER with your page\'s unique identifier variable
	};

	(function() { // DON\'T EDIT BELOW THIS LINE
		var d = document,
			s = d.createElement(\'script\');
		s.src = \'https://https-www-practiceit-xyz.disqus.com/embed.js\';
		s.setAttribute(\'data-timestamp\', +new Date());
		(d.head || d.body).appendChild(s);
	})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>


<script>
$(document).ready(function(){';
	
	if(isset($indexPage)&&!empty($indexPage))
	{
		$this->content.='$("#button01").css("background-color","#009688").css("color","white");';
	}
	
	$this->content.='$("#button01").click(function(){
	$(this).css("background-color","#009688").css("color","white");
	$("#button02").css("background-color","white").css("color","black");
	$("#button03").css("background-color","white").css("color","black");
	$("#button04").css("background-color","white").css("color","black");
	
    $.ajax({url: "solution/solution_01.php", success: function(result){
      $("#div2").html(result);
	  
		$.ajax({url: "questions/questions_01.php", success: function(result){
			 $("#div1").html(result);
			 $(\'.card\').each(function () {
				let href = $(this).data(\'href\');
				$(this).find(\'.image\').css({
				backgroundImage: [\'url(\', href, \')\'].join(\'\') });

			 });
		}});
	}});
  });
  
  $("#button02").click(function(){
	$(this).css("background-color","#009688");
	$(this).css("color","white");
	$("#button01").css("background-color","white").css("color","black");
	$("#button03").css("background-color","white").css("color","black");
	$("#button04").css("background-color","white").css("color","black");
	
	$.ajax({url: "solution/solution_02.php", success: function(result){
      $("#div2").html(result);
	  
		$.ajax({url: "questions/questions_02.php", success: function(result){
			 $("#div1").html(result);
			 $(\'.card\').each(function () {
				let href = $(this).data(\'href\');
				$(this).find(\'.image\').css({
				backgroundImage: [\'url(\', href, \')\'].join(\'\') });

			 });
		}});
	}});
  });
  
  $("#button03").click(function(){
	$(this).css("background-color","#009688");
	$(this).css("color","white");
	$("#button01").css("background-color","white").css("color","black");
	$("#button02").css("background-color","white").css("color","black");
	$("#button04").css("background-color","white").css("color","black");
	
    $.ajax({url: "solution/solution_03.php", success: function(result){
      $("#div2").html(result);
	  
		$.ajax({url: "questions/questions_03.php", success: function(result){
			 $("#div1").html(result);
			 $(\'.card\').each(function () {
				let href = $(this).data(\'href\');
				$(this).find(\'.image\').css({
				backgroundImage: [\'url(\', href, \')\'].join(\'\') });

			 });
		}});
	}});
  });
  
  $("#button04").click(function(){
	$(this).css("background-color","#009688");
	$(this).css("color","white");
	$("#button01").css("background-color","white").css("color","black");
	$("#button02").css("background-color","white").css("color","black");
	$("#button03").css("background-color","white").css("color","black");
	
    $.ajax({url: "solution/solution_04.php", success: function(result){
      $("#div2").html(result);
	  
		$.ajax({url: "questions/questions_04.php", success: function(result){
			 $("#div1").html(result);
			 $(\'.card\').each(function () {
				let href = $(this).data(\'href\');
				$(this).find(\'.image\').css({
				backgroundImage: [\'url(\', href, \')\'].join(\'\') });

			 });
		}});
	}});
  });
});
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
