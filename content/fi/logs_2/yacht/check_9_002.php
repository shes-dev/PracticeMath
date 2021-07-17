<!--
	<h4 id="header_4" style="margin:2px;"><u>רשימות</u></h4>
	<textarea rows="10" id="next_lesson" style="width:100%;margin-top:4px;color:black;padding:4px;"></textarea>
-->

<script>
var app = angular.module('app_1', []);

app.controller('controller_1', function($scope,$http) {
  		
		//setting initial values	
		$http.get("check_1.php").then(function(response){
			
			//converting to numbers
			
			//Jan 18
			
			var jan_01_1 = response.data.records[0]["jan_01_1"];
			var jan_01_2 = response.data.records[0]["jan_01_2"];
			var jan_01_3 = response.data.records[0]["jan_01_3"];
			var jan_01_4 = response.data.records[0]["jan_01_4"];
			var jan_01_5 = response.data.records[0]["jan_01_5"];
			var jan_01_6 = response.data.records[0]["jan_01_6"];
			var jan_01_7 = response.data.records[0]["jan_01_7"];
			
			var jan_02_1 = response.data.records[0]["jan_02_1"];
			var jan_02_2 = response.data.records[0]["jan_02_2"];
			var jan_02_3 = response.data.records[0]["jan_02_3"];
			var jan_02_4 = response.data.records[0]["jan_02_4"];
			var jan_02_5 = response.data.records[0]["jan_02_5"];
			var jan_02_6 = response.data.records[0]["jan_02_6"];
			var jan_02_7 = response.data.records[0]["jan_02_7"];
			
			var jan_03_1 = response.data.records[0]["jan_03_1"];
			var jan_03_2 = response.data.records[0]["jan_03_2"];
			var jan_03_3 = response.data.records[0]["jan_03_3"];
			var jan_03_4 = response.data.records[0]["jan_03_4"];
			var jan_03_5 = response.data.records[0]["jan_03_5"];
			var jan_03_6 = response.data.records[0]["jan_03_6"];
			var jan_03_7 = response.data.records[0]["jan_03_7"];
			
			var jan_04_1 = response.data.records[0]["jan_04_1"];
			var jan_04_2 = response.data.records[0]["jan_04_2"];
			var jan_04_3 = response.data.records[0]["jan_04_3"];
			var jan_04_4 = response.data.records[0]["jan_04_4"];
			var jan_04_5 = response.data.records[0]["jan_04_5"];
			var jan_04_6 = response.data.records[0]["jan_04_6"];
			var jan_04_7 = response.data.records[0]["jan_04_7"];
			
			var jan_05_1 = response.data.records[0]["jan_05_1"];
			var jan_05_2 = response.data.records[0]["jan_05_2"];
			var jan_05_3 = response.data.records[0]["jan_05_3"];
			
			//Feb
			
			var feb_01_1 = response.data.records[0]["feb_01_1"];
			var feb_01_2 = response.data.records[0]["feb_01_2"];
			var feb_01_3 = response.data.records[0]["feb_01_3"];
			var feb_01_4 = response.data.records[0]["feb_01_4"];
			var feb_01_5 = response.data.records[0]["feb_01_5"];
			var feb_01_6 = response.data.records[0]["feb_01_6"];
			var feb_01_7 = response.data.records[0]["feb_01_7"];
			
			var feb_02_1 = response.data.records[0]["feb_02_1"];
			var feb_02_2 = response.data.records[0]["feb_02_2"];
			var feb_02_3 = response.data.records[0]["feb_02_3"];
			var feb_02_4 = response.data.records[0]["feb_02_4"];
			var feb_02_5 = response.data.records[0]["feb_02_5"];
			var feb_02_6 = response.data.records[0]["feb_02_6"];
			var feb_02_7 = response.data.records[0]["feb_02_7"];
			
			var feb_03_1 = response.data.records[0]["feb_03_1"];
			var feb_03_2 = response.data.records[0]["feb_03_2"];
			var feb_03_3 = response.data.records[0]["feb_03_3"];
			var feb_03_4 = response.data.records[0]["feb_03_4"];
			var feb_03_5 = response.data.records[0]["feb_03_5"];
			var feb_03_6 = response.data.records[0]["feb_03_6"];
			var feb_03_7 = response.data.records[0]["feb_03_7"];
			
			var feb_04_1 = response.data.records[0]["feb_04_1"];
			var feb_04_2 = response.data.records[0]["feb_04_2"];
			var feb_04_3 = response.data.records[0]["feb_04_3"];
			var feb_04_4 = response.data.records[0]["feb_04_4"];
			var feb_04_5 = response.data.records[0]["feb_04_5"];
			var feb_04_6 = response.data.records[0]["feb_04_6"];
			var feb_04_7 = response.data.records[0]["feb_04_7"];
			
			//mar
			
			var mar_01_1 = response.data.records[0]["mar_01_1"];
			var mar_01_2 = response.data.records[0]["mar_01_2"];
			var mar_01_3 = response.data.records[0]["mar_01_3"];
			var mar_01_4 = response.data.records[0]["mar_01_4"];
			var mar_01_5 = response.data.records[0]["mar_01_5"];
			var mar_01_6 = response.data.records[0]["mar_01_6"];
			var mar_01_7 = response.data.records[0]["mar_01_7"];
			
			var mar_02_1 = response.data.records[0]["mar_02_1"];
			var mar_02_2 = response.data.records[0]["mar_02_2"];
			var mar_02_3 = response.data.records[0]["mar_02_3"];
			var mar_02_4 = response.data.records[0]["mar_02_4"];
			var mar_02_5 = response.data.records[0]["mar_02_5"];
			var mar_02_6 = response.data.records[0]["mar_02_6"];
			var mar_02_7 = response.data.records[0]["mar_02_7"];
			
			var mar_03_1 = response.data.records[0]["mar_03_1"];
			var mar_03_2 = response.data.records[0]["mar_03_2"];
			var mar_03_3 = response.data.records[0]["mar_03_3"];
			var mar_03_4 = response.data.records[0]["mar_03_4"];
			var mar_03_5 = response.data.records[0]["mar_03_5"];
			var mar_03_6 = response.data.records[0]["mar_03_6"];
			var mar_03_7 = response.data.records[0]["mar_03_7"];
			
			var mar_04_1 = response.data.records[0]["mar_04_1"];
			var mar_04_2 = response.data.records[0]["mar_04_2"];
			var mar_04_3 = response.data.records[0]["mar_04_3"];
			var mar_04_4 = response.data.records[0]["mar_04_4"];
			var mar_04_5 = response.data.records[0]["mar_04_5"];
			var mar_04_6 = response.data.records[0]["mar_04_6"];
			var mar_04_7 = response.data.records[0]["mar_04_7"];
			
			var mar_05_1 = response.data.records[0]["mar_05_1"];
			var mar_05_2 = response.data.records[0]["mar_05_2"];
			var mar_05_3 = response.data.records[0]["mar_05_3"];
						
			//apr
			
			var apr_01_1 = response.data.records[0]["apr_01_1"];
			var apr_01_2 = response.data.records[0]["apr_01_2"];
			var apr_01_3 = response.data.records[0]["apr_01_3"];
			var apr_01_4 = response.data.records[0]["apr_01_4"];
			var apr_01_5 = response.data.records[0]["apr_01_5"];
			var apr_01_6 = response.data.records[0]["apr_01_6"];
			var apr_01_7 = response.data.records[0]["apr_01_7"];
			
			var apr_02_1 = response.data.records[0]["apr_02_1"];
			var apr_02_2 = response.data.records[0]["apr_02_2"];
			var apr_02_3 = response.data.records[0]["apr_02_3"];
			var apr_02_4 = response.data.records[0]["apr_02_4"];
			var apr_02_5 = response.data.records[0]["apr_02_5"];
			var apr_02_6 = response.data.records[0]["apr_02_6"];
			var apr_02_7 = response.data.records[0]["apr_02_7"];
			
			var apr_03_1 = response.data.records[0]["apr_03_1"];
			var apr_03_2 = response.data.records[0]["apr_03_2"];
			var apr_03_3 = response.data.records[0]["apr_03_3"];
			var apr_03_4 = response.data.records[0]["apr_03_4"];
			var apr_03_5 = response.data.records[0]["apr_03_5"];
			var apr_03_6 = response.data.records[0]["apr_03_6"];
			var apr_03_7 = response.data.records[0]["apr_03_7"];
			
			var apr_04_1 = response.data.records[0]["apr_04_1"];
			var apr_04_2 = response.data.records[0]["apr_04_2"];
			var apr_04_3 = response.data.records[0]["apr_04_3"];
			var apr_04_4 = response.data.records[0]["apr_04_4"];
			var apr_04_5 = response.data.records[0]["apr_04_5"];
			var apr_04_6 = response.data.records[0]["apr_04_6"];
			var apr_04_7 = response.data.records[0]["apr_04_7"];
			
			var apr_05_1 = response.data.records[0]["apr_05_1"];
			var apr_05_2 = response.data.records[0]["apr_05_2"];
						
			//may
			
			var may_01_1 = response.data.records[0]["may_01_1"];
			var may_01_2 = response.data.records[0]["may_01_2"];
			var may_01_3 = response.data.records[0]["may_01_3"];
			var may_01_4 = response.data.records[0]["may_01_4"];
			var may_01_5 = response.data.records[0]["may_01_5"];
			var may_01_6 = response.data.records[0]["may_01_6"];
			var may_01_7 = response.data.records[0]["may_01_7"];
			
			var may_02_1 = response.data.records[0]["may_02_1"];
			var may_02_2 = response.data.records[0]["may_02_2"];
			var may_02_3 = response.data.records[0]["may_02_3"];
			var may_02_4 = response.data.records[0]["may_02_4"];
			var may_02_5 = response.data.records[0]["may_02_5"];
			var may_02_6 = response.data.records[0]["may_02_6"];
			var may_02_7 = response.data.records[0]["may_02_7"];
			
			var may_03_1 = response.data.records[0]["may_03_1"];
			var may_03_2 = response.data.records[0]["may_03_2"];
			var may_03_3 = response.data.records[0]["may_03_3"];
			var may_03_4 = response.data.records[0]["may_03_4"];
			var may_03_5 = response.data.records[0]["may_03_5"];
			var may_03_6 = response.data.records[0]["may_03_6"];
			var may_03_7 = response.data.records[0]["may_03_7"];
			
			var may_04_1 = response.data.records[0]["may_04_1"];
			var may_04_2 = response.data.records[0]["may_04_2"];
			var may_04_3 = response.data.records[0]["may_04_3"];
			var may_04_4 = response.data.records[0]["may_04_4"];
			var may_04_5 = response.data.records[0]["may_04_5"];
			var may_04_6 = response.data.records[0]["may_04_6"];
			var may_04_7 = response.data.records[0]["may_04_7"];
			
			var may_05_1 = response.data.records[0]["may_05_1"];
			var may_05_2 = response.data.records[0]["may_05_2"];
			var may_05_3 = response.data.records[0]["may_05_3"];
			
			//jun
			
			var jun_01_1 = response.data.records[0]["jun_01_1"];
			var jun_01_2 = response.data.records[0]["jun_01_2"];
			var jun_01_3 = response.data.records[0]["jun_01_3"];
			var jun_01_4 = response.data.records[0]["jun_01_4"];
			var jun_01_5 = response.data.records[0]["jun_01_5"];
			var jun_01_6 = response.data.records[0]["jun_01_6"];
			var jun_01_7 = response.data.records[0]["jun_01_7"];
			
			var jun_02_1 = response.data.records[0]["jun_02_1"];
			var jun_02_2 = response.data.records[0]["jun_02_2"];
			var jun_02_3 = response.data.records[0]["jun_02_3"];
			var jun_02_4 = response.data.records[0]["jun_02_4"];
			var jun_02_5 = response.data.records[0]["jun_02_5"];
			var jun_02_6 = response.data.records[0]["jun_02_6"];
			var jun_02_7 = response.data.records[0]["jun_02_7"];
			
			var jun_03_1 = response.data.records[0]["jun_03_1"];
			var jun_03_2 = response.data.records[0]["jun_03_2"];
			var jun_03_3 = response.data.records[0]["jun_03_3"];
			var jun_03_4 = response.data.records[0]["jun_03_4"];
			var jun_03_5 = response.data.records[0]["jun_03_5"];
			var jun_03_6 = response.data.records[0]["jun_03_6"];
			var jun_03_7 = response.data.records[0]["jun_03_7"];
			
			var jun_04_1 = response.data.records[0]["jun_04_1"];
			var jun_04_2 = response.data.records[0]["jun_04_2"];
			var jun_04_3 = response.data.records[0]["jun_04_3"];
			var jun_04_4 = response.data.records[0]["jun_04_4"];
			var jun_04_5 = response.data.records[0]["jun_04_5"];
			var jun_04_6 = response.data.records[0]["jun_04_6"];
			var jun_04_7 = response.data.records[0]["jun_04_7"];
			
			var jun_05_1 = response.data.records[0]["jun_05_1"];
			var jun_05_2 = response.data.records[0]["jun_05_2"];
			
			//july
			
			var jul_01_1 = response.data.records[0]["jul_01_1"];
			var jul_01_2 = response.data.records[0]["jul_01_2"];
			var jul_01_3 = response.data.records[0]["jul_01_3"];
			var jul_01_4 = response.data.records[0]["jul_01_4"];
			var jul_01_5 = response.data.records[0]["jul_01_5"];
			var jul_01_6 = response.data.records[0]["jul_01_6"];
			var jul_01_7 = response.data.records[0]["jul_01_7"];
			
			var jul_02_1 = response.data.records[0]["jul_02_1"];
			var jul_02_2 = response.data.records[0]["jul_02_2"];
			var jul_02_3 = response.data.records[0]["jul_02_3"];
			var jul_02_4 = response.data.records[0]["jul_02_4"];
			var jul_02_5 = response.data.records[0]["jul_02_5"];
			var jul_02_6 = response.data.records[0]["jul_02_6"];
			var jul_02_7 = response.data.records[0]["jul_02_7"];
			
			var jul_03_1 = response.data.records[0]["jul_03_1"];
			var jul_03_2 = response.data.records[0]["jul_03_2"];
			var jul_03_3 = response.data.records[0]["jul_03_3"];
			var jul_03_4 = response.data.records[0]["jul_03_4"];
			var jul_03_5 = response.data.records[0]["jul_03_5"];
			var jul_03_6 = response.data.records[0]["jul_03_6"];
			var jul_03_7 = response.data.records[0]["jul_03_7"];
			
			var jul_04_1 = response.data.records[0]["jul_04_1"];
			var jul_04_2 = response.data.records[0]["jul_04_2"];
			var jul_04_3 = response.data.records[0]["jul_04_3"];
			var jul_04_4 = response.data.records[0]["jul_04_4"];
			var jul_04_5 = response.data.records[0]["jul_04_5"];
			var jul_04_6 = response.data.records[0]["jul_04_6"];
			var jul_04_7 = response.data.records[0]["jul_04_7"];
			
			var jul_05_1 = response.data.records[0]["jul_05_1"];
			var jul_05_2 = response.data.records[0]["jul_05_2"];
			var jul_05_3 = response.data.records[0]["jul_05_3"];
			
			//august
			
			var aug_01_1 = response.data.records[0]["aug_01_1"];
			var aug_01_2 = response.data.records[0]["aug_01_2"];
			var aug_01_3 = response.data.records[0]["aug_01_3"];
			var aug_01_4 = response.data.records[0]["aug_01_4"];
			var aug_01_5 = response.data.records[0]["aug_01_5"];
			var aug_01_6 = response.data.records[0]["aug_01_6"];
			var aug_01_7 = response.data.records[0]["aug_01_7"];
			
			var aug_02_1 = response.data.records[0]["aug_02_1"];
			var aug_02_2 = response.data.records[0]["aug_02_2"];
			var aug_02_3 = response.data.records[0]["aug_02_3"];
			var aug_02_4 = response.data.records[0]["aug_02_4"];
			var aug_02_5 = response.data.records[0]["aug_02_5"];
			var aug_02_6 = response.data.records[0]["aug_02_6"];
			var aug_02_7 = response.data.records[0]["aug_02_7"];
			
			var aug_03_1 = response.data.records[0]["aug_03_1"];
			var aug_03_2 = response.data.records[0]["aug_03_2"];
			var aug_03_3 = response.data.records[0]["aug_03_3"];
			var aug_03_4 = response.data.records[0]["aug_03_4"];
			var aug_03_5 = response.data.records[0]["aug_03_5"];
			var aug_03_6 = response.data.records[0]["aug_03_6"];
			var aug_03_7 = response.data.records[0]["aug_03_7"];
			
			var aug_04_1 = response.data.records[0]["aug_04_1"];
			var aug_04_2 = response.data.records[0]["aug_04_2"];
			var aug_04_3 = response.data.records[0]["aug_04_3"];
			var aug_04_4 = response.data.records[0]["aug_04_4"];
			var aug_04_5 = response.data.records[0]["aug_04_5"];
			var aug_04_6 = response.data.records[0]["aug_04_6"];
			var aug_04_7 = response.data.records[0]["aug_04_7"];
			
			var aug_05_1 = response.data.records[0]["aug_05_1"];
			var aug_05_2 = response.data.records[0]["aug_05_2"];
			var aug_05_3 = response.data.records[0]["aug_05_3"];
			
			//sep
			
			var sep_01_1 = response.data.records[0]["sep_01_1"];
			var sep_01_2 = response.data.records[0]["sep_01_2"];
			var sep_01_3 = response.data.records[0]["sep_01_3"];
			var sep_01_4 = response.data.records[0]["sep_01_4"];
			var sep_01_5 = response.data.records[0]["sep_01_5"];
			var sep_01_6 = response.data.records[0]["sep_01_6"];
			var sep_01_7 = response.data.records[0]["sep_01_7"];
			
			var sep_02_1 = response.data.records[0]["sep_02_1"];
			var sep_02_2 = response.data.records[0]["sep_02_2"];
			var sep_02_3 = response.data.records[0]["sep_02_3"];
			var sep_02_4 = response.data.records[0]["sep_02_4"];
			var sep_02_5 = response.data.records[0]["sep_02_5"];
			var sep_02_6 = response.data.records[0]["sep_02_6"];
			var sep_02_7 = response.data.records[0]["sep_02_7"];
			
			var sep_03_1 = response.data.records[0]["sep_03_1"];
			var sep_03_2 = response.data.records[0]["sep_03_2"];
			var sep_03_3 = response.data.records[0]["sep_03_3"];
			var sep_03_4 = response.data.records[0]["sep_03_4"];
			var sep_03_5 = response.data.records[0]["sep_03_5"];
			var sep_03_6 = response.data.records[0]["sep_03_6"];
			var sep_03_7 = response.data.records[0]["sep_03_7"];
			
			var sep_04_1 = response.data.records[0]["sep_04_1"];
			var sep_04_2 = response.data.records[0]["sep_04_2"];
			var sep_04_3 = response.data.records[0]["sep_04_3"];
			var sep_04_4 = response.data.records[0]["sep_04_4"];
			var sep_04_5 = response.data.records[0]["sep_04_5"];
			var sep_04_6 = response.data.records[0]["sep_04_6"];
			var sep_04_7 = response.data.records[0]["sep_04_7"];
			
			var sep_05_1 = response.data.records[0]["sep_05_1"];
			var sep_05_2 = response.data.records[0]["sep_05_2"];
			
			//oct
			
			var oct_01_1 = response.data.records[0]["oct_01_1"];
			var oct_01_2 = response.data.records[0]["oct_01_2"];
			var oct_01_3 = response.data.records[0]["oct_01_3"];
			var oct_01_4 = response.data.records[0]["oct_01_4"];
			var oct_01_5 = response.data.records[0]["oct_01_5"];
			var oct_01_6 = response.data.records[0]["oct_01_6"];
			var oct_01_7 = response.data.records[0]["oct_01_7"];
			
			var oct_02_1 = response.data.records[0]["oct_02_1"];
			var oct_02_2 = response.data.records[0]["oct_02_2"];
			var oct_02_3 = response.data.records[0]["oct_02_3"];
			var oct_02_4 = response.data.records[0]["oct_02_4"];
			var oct_02_5 = response.data.records[0]["oct_02_5"];
			var oct_02_6 = response.data.records[0]["oct_02_6"];
			var oct_02_7 = response.data.records[0]["oct_02_7"];
			
			var oct_03_1 = response.data.records[0]["oct_03_1"];
			var oct_03_2 = response.data.records[0]["oct_03_2"];
			var oct_03_3 = response.data.records[0]["oct_03_3"];
			var oct_03_4 = response.data.records[0]["oct_03_4"];
			var oct_03_5 = response.data.records[0]["oct_03_5"];
			var oct_03_6 = response.data.records[0]["oct_03_6"];
			var oct_03_7 = response.data.records[0]["oct_03_7"];
			
			var oct_04_1 = response.data.records[0]["oct_04_1"];
			var oct_04_2 = response.data.records[0]["oct_04_2"];
			var oct_04_3 = response.data.records[0]["oct_04_3"];
			var oct_04_4 = response.data.records[0]["oct_04_4"];
			var oct_04_5 = response.data.records[0]["oct_04_5"];
			var oct_04_6 = response.data.records[0]["oct_04_6"];
			var oct_04_7 = response.data.records[0]["oct_04_7"];
			
			var oct_05_1 = response.data.records[0]["oct_05_1"];
			var oct_05_2 = response.data.records[0]["oct_05_2"];
			var oct_05_3 = response.data.records[0]["oct_05_3"];
			
			//nov
			
			var nov_01_1 = response.data.records[0]["nov_01_1"];
			var nov_01_2 = response.data.records[0]["nov_01_2"];
			var nov_01_3 = response.data.records[0]["nov_01_3"];
			var nov_01_4 = response.data.records[0]["nov_01_4"];
			var nov_01_5 = response.data.records[0]["nov_01_5"];
			var nov_01_6 = response.data.records[0]["nov_01_6"];
			var nov_01_7 = response.data.records[0]["nov_01_7"];
			
			var nov_02_1 = response.data.records[0]["nov_02_1"];
			var nov_02_2 = response.data.records[0]["nov_02_2"];
			var nov_02_3 = response.data.records[0]["nov_02_3"];
			var nov_02_4 = response.data.records[0]["nov_02_4"];
			var nov_02_5 = response.data.records[0]["nov_02_5"];
			var nov_02_6 = response.data.records[0]["nov_02_6"];
			var nov_02_7 = response.data.records[0]["nov_02_7"];
			
			var nov_03_1 = response.data.records[0]["nov_03_1"];
			var nov_03_2 = response.data.records[0]["nov_03_2"];
			var nov_03_3 = response.data.records[0]["nov_03_3"];
			var nov_03_4 = response.data.records[0]["nov_03_4"];
			var nov_03_5 = response.data.records[0]["nov_03_5"];
			var nov_03_6 = response.data.records[0]["nov_03_6"];
			var nov_03_7 = response.data.records[0]["nov_03_7"];
			
			var nov_04_1 = response.data.records[0]["nov_04_1"];
			var nov_04_2 = response.data.records[0]["nov_04_2"];
			var nov_04_3 = response.data.records[0]["nov_04_3"];
			var nov_04_4 = response.data.records[0]["nov_04_4"];
			var nov_04_5 = response.data.records[0]["nov_04_5"];
			var nov_04_6 = response.data.records[0]["nov_04_6"];
			var nov_04_7 = response.data.records[0]["nov_04_7"];
			
			var nov_05_1 = response.data.records[0]["nov_05_1"];
			var nov_05_2 = response.data.records[0]["nov_05_2"];
			
			//dec
			
			var dec_01_1 = response.data.records[0]["dec_01_1"];
			var dec_01_2 = response.data.records[0]["dec_01_2"];
			var dec_01_3 = response.data.records[0]["dec_01_3"];
			var dec_01_4 = response.data.records[0]["dec_01_4"];
			var dec_01_5 = response.data.records[0]["dec_01_5"];
			var dec_01_6 = response.data.records[0]["dec_01_6"];
			var dec_01_7 = response.data.records[0]["dec_01_7"];
			
			var dec_02_1 = response.data.records[0]["dec_02_1"];
			var dec_02_2 = response.data.records[0]["dec_02_2"];
			var dec_02_3 = response.data.records[0]["dec_02_3"];
			var dec_02_4 = response.data.records[0]["dec_02_4"];
			var dec_02_5 = response.data.records[0]["dec_02_5"];
			var dec_02_6 = response.data.records[0]["dec_02_6"];
			var dec_02_7 = response.data.records[0]["dec_02_7"];
			
			var dec_03_1 = response.data.records[0]["dec_03_1"];
			var dec_03_2 = response.data.records[0]["dec_03_2"];
			var dec_03_3 = response.data.records[0]["dec_03_3"];
			var dec_03_4 = response.data.records[0]["dec_03_4"];
			var dec_03_5 = response.data.records[0]["dec_03_5"];
			var dec_03_6 = response.data.records[0]["dec_03_6"];
			var dec_03_7 = response.data.records[0]["dec_03_7"];
			
			var dec_04_1 = response.data.records[0]["dec_04_1"];
			var dec_04_2 = response.data.records[0]["dec_04_2"];
			var dec_04_3 = response.data.records[0]["dec_04_3"];
			var dec_04_4 = response.data.records[0]["dec_04_4"];
			var dec_04_5 = response.data.records[0]["dec_04_5"];
			var dec_04_6 = response.data.records[0]["dec_04_6"];
			var dec_04_7 = response.data.records[0]["dec_04_7"];
			
			var dec_05_1 = response.data.records[0]["dec_05_1"];
			var dec_05_2 = response.data.records[0]["dec_05_2"];
			var dec_05_3 = response.data.records[0]["dec_05_3"];
			
			
			//setting scope variables
			
			//Jan 18
			
			$scope.jan_01_1 = Number(jan_01_1);
			$scope.jan_01_2 = Number(jan_01_2);
			$scope.jan_01_3 = Number(jan_01_3);
			$scope.jan_01_4 = Number(jan_01_4);
			$scope.jan_01_5 = Number(jan_01_5);
			$scope.jan_01_6 = Number(jan_01_6);
			$scope.jan_01_7 = Number(jan_01_7);
			
			$scope.jan_02_1 = Number(jan_02_1);
			$scope.jan_02_2 = Number(jan_02_2);
			$scope.jan_02_3 = Number(jan_02_3);
			$scope.jan_02_4 = Number(jan_02_4);
			$scope.jan_02_5 = Number(jan_02_5);
			$scope.jan_02_6 = Number(jan_02_6);
			$scope.jan_02_7 = Number(jan_02_7);
			
			$scope.jan_03_1 = Number(jan_03_1);
			$scope.jan_03_2 = Number(jan_03_2);
			$scope.jan_03_3 = Number(jan_03_3);
			$scope.jan_03_4 = Number(jan_03_4);
			$scope.jan_03_5 = Number(jan_03_5);
			$scope.jan_03_6 = Number(jan_03_6);
			$scope.jan_03_7 = Number(jan_03_7);
			
			$scope.jan_04_1 = Number(jan_04_1);
			$scope.jan_04_2 = Number(jan_04_2);
			$scope.jan_04_3 = Number(jan_04_3);
			$scope.jan_04_4 = Number(jan_04_4);
			$scope.jan_04_5 = Number(jan_04_5);
			$scope.jan_04_6 = Number(jan_04_6);
			$scope.jan_04_7 = Number(jan_04_7);
			
			$scope.jan_05_1 = Number(jan_05_1);
			$scope.jan_05_2 = Number(jan_05_2);
			$scope.jan_05_3 = Number(jan_05_3);
			
			//Feb 18
			
			$scope.feb_01_1 = Number(feb_01_1);
			$scope.feb_01_2 = Number(feb_01_2);
			$scope.feb_01_3 = Number(feb_01_3);
			$scope.feb_01_4 = Number(feb_01_4);
			$scope.feb_01_5 = Number(feb_01_5);
			$scope.feb_01_6 = Number(feb_01_6);
			$scope.feb_01_7 = Number(feb_01_7);
			
			$scope.feb_02_1 = Number(feb_02_1);
			$scope.feb_02_2 = Number(feb_02_2);
			$scope.feb_02_3 = Number(feb_02_3);
			$scope.feb_02_4 = Number(feb_02_4);
			$scope.feb_02_5 = Number(feb_02_5);
			$scope.feb_02_6 = Number(feb_02_6);
			$scope.feb_02_7 = Number(feb_02_7);
			
			$scope.feb_03_1 = Number(feb_03_1);
			$scope.feb_03_2 = Number(feb_03_2);
			$scope.feb_03_3 = Number(feb_03_3);
			$scope.feb_03_4 = Number(feb_03_4);
			$scope.feb_03_5 = Number(feb_03_5);
			$scope.feb_03_6 = Number(feb_03_6);
			$scope.feb_03_7 = Number(feb_03_7);
			
			$scope.feb_04_1 = Number(feb_04_1);
			$scope.feb_04_2 = Number(feb_04_2);
			$scope.feb_04_3 = Number(feb_04_3);
			$scope.feb_04_4 = Number(feb_04_4);
			$scope.feb_04_5 = Number(feb_04_5);
			$scope.feb_04_6 = Number(feb_04_6);
			$scope.feb_04_7 = Number(feb_04_7);
			
			//mar 18
			
			$scope.mar_01_1 = Number(mar_01_1);
			$scope.mar_01_2 = Number(mar_01_2);
			$scope.mar_01_3 = Number(mar_01_3);
			$scope.mar_01_4 = Number(mar_01_4);
			$scope.mar_01_5 = Number(mar_01_5);
			$scope.mar_01_6 = Number(mar_01_6);
			$scope.mar_01_7 = Number(mar_01_7);
			
			$scope.mar_02_1 = Number(mar_02_1);
			$scope.mar_02_2 = Number(mar_02_2);
			$scope.mar_02_3 = Number(mar_02_3);
			$scope.mar_02_4 = Number(mar_02_4);
			$scope.mar_02_5 = Number(mar_02_5);
			$scope.mar_02_6 = Number(mar_02_6);
			$scope.mar_02_7 = Number(mar_02_7);
			
			$scope.mar_03_1 = Number(mar_03_1);
			$scope.mar_03_2 = Number(mar_03_2);
			$scope.mar_03_3 = Number(mar_03_3);
			$scope.mar_03_4 = Number(mar_03_4);
			$scope.mar_03_5 = Number(mar_03_5);
			$scope.mar_03_6 = Number(mar_03_6);
			$scope.mar_03_7 = Number(mar_03_7);
			
			$scope.mar_04_1 = Number(mar_04_1);
			$scope.mar_04_2 = Number(mar_04_2);
			$scope.mar_04_3 = Number(mar_04_3);
			$scope.mar_04_4 = Number(mar_04_4);
			$scope.mar_04_5 = Number(mar_04_5);
			$scope.mar_04_6 = Number(mar_04_6);
			$scope.mar_04_7 = Number(mar_04_7);
			
			$scope.mar_05_1 = Number(mar_05_1);
			$scope.mar_05_2 = Number(mar_05_2);
			$scope.mar_05_3 = Number(mar_05_3);
			
			//apr 18
			
			$scope.apr_01_1 = Number(apr_01_1);
			$scope.apr_01_2 = Number(apr_01_2);
			$scope.apr_01_3 = Number(apr_01_3);
			$scope.apr_01_4 = Number(apr_01_4);
			$scope.apr_01_5 = Number(apr_01_5);
			$scope.apr_01_6 = Number(apr_01_6);
			$scope.apr_01_7 = Number(apr_01_7);
			
			$scope.apr_02_1 = Number(apr_02_1);
			$scope.apr_02_2 = Number(apr_02_2);
			$scope.apr_02_3 = Number(apr_02_3);
			$scope.apr_02_4 = Number(apr_02_4);
			$scope.apr_02_5 = Number(apr_02_5);
			$scope.apr_02_6 = Number(apr_02_6);
			$scope.apr_02_7 = Number(apr_02_7);
			
			$scope.apr_03_1 = Number(apr_03_1);
			$scope.apr_03_2 = Number(apr_03_2);
			$scope.apr_03_3 = Number(apr_03_3);
			$scope.apr_03_4 = Number(apr_03_4);
			$scope.apr_03_5 = Number(apr_03_5);
			$scope.apr_03_6 = Number(apr_03_6);
			$scope.apr_03_7 = Number(apr_03_7);
			
			$scope.apr_04_1 = Number(apr_04_1);
			$scope.apr_04_2 = Number(apr_04_2);
			$scope.apr_04_3 = Number(apr_04_3);
			$scope.apr_04_4 = Number(apr_04_4);
			$scope.apr_04_5 = Number(apr_04_5);
			$scope.apr_04_6 = Number(apr_04_6);
			$scope.apr_04_7 = Number(apr_04_7);
			
			$scope.apr_05_1 = Number(apr_05_1);
			$scope.apr_05_2 = Number(apr_05_2);
			
			//may 18
			
			$scope.may_01_1 = Number(may_01_1);
			$scope.may_01_2 = Number(may_01_2);
			$scope.may_01_3 = Number(may_01_3);
			$scope.may_01_4 = Number(may_01_4);
			$scope.may_01_5 = Number(may_01_5);
			$scope.may_01_6 = Number(may_01_6);
			$scope.may_01_7 = Number(may_01_7);
			
			$scope.may_02_1 = Number(may_02_1);
			$scope.may_02_2 = Number(may_02_2);
			$scope.may_02_3 = Number(may_02_3);
			$scope.may_02_4 = Number(may_02_4);
			$scope.may_02_5 = Number(may_02_5);
			$scope.may_02_6 = Number(may_02_6);
			$scope.may_02_7 = Number(may_02_7);
			
			$scope.may_03_1 = Number(may_03_1);
			$scope.may_03_2 = Number(may_03_2);
			$scope.may_03_3 = Number(may_03_3);
			$scope.may_03_4 = Number(may_03_4);
			$scope.may_03_5 = Number(may_03_5);
			$scope.may_03_6 = Number(may_03_6);
			$scope.may_03_7 = Number(may_03_7);
			
			$scope.may_04_1 = Number(may_04_1);
			$scope.may_04_2 = Number(may_04_2);
			$scope.may_04_3 = Number(may_04_3);
			$scope.may_04_4 = Number(may_04_4);
			$scope.may_04_5 = Number(may_04_5);
			$scope.may_04_6 = Number(may_04_6);
			$scope.may_04_7 = Number(may_04_7);
			
			$scope.may_05_1 = Number(may_05_1);
			$scope.may_05_2 = Number(may_05_2);
			$scope.may_05_3 = Number(may_05_3);
			
			//jun 18
			
			$scope.jun_01_1 = Number(jun_01_1);
			$scope.jun_01_2 = Number(jun_01_2);
			$scope.jun_01_3 = Number(jun_01_3);
			$scope.jun_01_4 = Number(jun_01_4);
			$scope.jun_01_5 = Number(jun_01_5);
			$scope.jun_01_6 = Number(jun_01_6);
			$scope.jun_01_7 = Number(jun_01_7);
			
			$scope.jun_02_1 = Number(jun_02_1);
			$scope.jun_02_2 = Number(jun_02_2);
			$scope.jun_02_3 = Number(jun_02_3);
			$scope.jun_02_4 = Number(jun_02_4);
			$scope.jun_02_5 = Number(jun_02_5);
			$scope.jun_02_6 = Number(jun_02_6);
			$scope.jun_02_7 = Number(jun_02_7);
			
			$scope.jun_03_1 = Number(jun_03_1);
			$scope.jun_03_2 = Number(jun_03_2);
			$scope.jun_03_3 = Number(jun_03_3);
			$scope.jun_03_4 = Number(jun_03_4);
			$scope.jun_03_5 = Number(jun_03_5);
			$scope.jun_03_6 = Number(jun_03_6);
			$scope.jun_03_7 = Number(jun_03_7);
			
			$scope.jun_04_1 = Number(jun_04_1);
			$scope.jun_04_2 = Number(jun_04_2);
			$scope.jun_04_3 = Number(jun_04_3);
			$scope.jun_04_4 = Number(jun_04_4);
			$scope.jun_04_5 = Number(jun_04_5);
			$scope.jun_04_6 = Number(jun_04_6);
			$scope.jun_04_7 = Number(jun_04_7);
			
			$scope.jun_05_1 = Number(jun_05_1);
			$scope.jun_05_2 = Number(jun_05_2);
			
			//jul 18
			
			$scope.jul_01_1 = Number(jul_01_1);
			$scope.jul_01_2 = Number(jul_01_2);
			$scope.jul_01_3 = Number(jul_01_3);
			$scope.jul_01_4 = Number(jul_01_4);
			$scope.jul_01_5 = Number(jul_01_5);
			$scope.jul_01_6 = Number(jul_01_6);
			$scope.jul_01_7 = Number(jul_01_7);
			
			$scope.jul_02_1 = Number(jul_02_1);
			$scope.jul_02_2 = Number(jul_02_2);
			$scope.jul_02_3 = Number(jul_02_3);
			$scope.jul_02_4 = Number(jul_02_4);
			$scope.jul_02_5 = Number(jul_02_5);
			$scope.jul_02_6 = Number(jul_02_6);
			$scope.jul_02_7 = Number(jul_02_7);
			
			$scope.jul_03_1 = Number(jul_03_1);
			$scope.jul_03_2 = Number(jul_03_2);
			$scope.jul_03_3 = Number(jul_03_3);
			$scope.jul_03_4 = Number(jul_03_4);
			$scope.jul_03_5 = Number(jul_03_5);
			$scope.jul_03_6 = Number(jul_03_6);
			$scope.jul_03_7 = Number(jul_03_7);
			
			$scope.jul_04_1 = Number(jul_04_1);
			$scope.jul_04_2 = Number(jul_04_2);
			$scope.jul_04_3 = Number(jul_04_3);
			$scope.jul_04_4 = Number(jul_04_4);
			$scope.jul_04_5 = Number(jul_04_5);
			$scope.jul_04_6 = Number(jul_04_6);
			$scope.jul_04_7 = Number(jul_04_7);
			
			$scope.jul_05_1 = Number(jul_05_1);
			$scope.jul_05_2 = Number(jul_05_2);
			$scope.jul_05_3 = Number(jul_05_3);
			
			//aug 18
			
			$scope.aug_01_1 = Number(aug_01_1);
			$scope.aug_01_2 = Number(aug_01_2);
			$scope.aug_01_3 = Number(aug_01_3);
			$scope.aug_01_4 = Number(aug_01_4);
			$scope.aug_01_5 = Number(aug_01_5);
			$scope.aug_01_6 = Number(aug_01_6);
			$scope.aug_01_7 = Number(aug_01_7);
			
			$scope.aug_02_1 = Number(aug_02_1);
			$scope.aug_02_2 = Number(aug_02_2);
			$scope.aug_02_3 = Number(aug_02_3);
			$scope.aug_02_4 = Number(aug_02_4);
			$scope.aug_02_5 = Number(aug_02_5);
			$scope.aug_02_6 = Number(aug_02_6);
			$scope.aug_02_7 = Number(aug_02_7);
			
			$scope.aug_03_1 = Number(aug_03_1);
			$scope.aug_03_2 = Number(aug_03_2);
			$scope.aug_03_3 = Number(aug_03_3);
			$scope.aug_03_4 = Number(aug_03_4);
			$scope.aug_03_5 = Number(aug_03_5);
			$scope.aug_03_6 = Number(aug_03_6);
			$scope.aug_03_7 = Number(aug_03_7);
			
			$scope.aug_04_1 = Number(aug_04_1);
			$scope.aug_04_2 = Number(aug_04_2);
			$scope.aug_04_3 = Number(aug_04_3);
			$scope.aug_04_4 = Number(aug_04_4);
			$scope.aug_04_5 = Number(aug_04_5);
			$scope.aug_04_6 = Number(aug_04_6);
			$scope.aug_04_7 = Number(aug_04_7);
			
			$scope.aug_05_1 = Number(aug_05_1);
			$scope.aug_05_2 = Number(aug_05_2);
			$scope.aug_05_3 = Number(aug_05_3);
			
			//sep 18
			
			$scope.sep_01_1 = Number(sep_01_1);
			$scope.sep_01_2 = Number(sep_01_2);
			$scope.sep_01_3 = Number(sep_01_3);
			$scope.sep_01_4 = Number(sep_01_4);
			$scope.sep_01_5 = Number(sep_01_5);
			$scope.sep_01_6 = Number(sep_01_6);
			$scope.sep_01_7 = Number(sep_01_7);
			
			$scope.sep_02_1 = Number(sep_02_1);
			$scope.sep_02_2 = Number(sep_02_2);
			$scope.sep_02_3 = Number(sep_02_3);
			$scope.sep_02_4 = Number(sep_02_4);
			$scope.sep_02_5 = Number(sep_02_5);
			$scope.sep_02_6 = Number(sep_02_6);
			$scope.sep_02_7 = Number(sep_02_7);
			
			$scope.sep_03_1 = Number(sep_03_1);
			$scope.sep_03_2 = Number(sep_03_2);
			$scope.sep_03_3 = Number(sep_03_3);
			$scope.sep_03_4 = Number(sep_03_4);
			$scope.sep_03_5 = Number(sep_03_5);
			$scope.sep_03_6 = Number(sep_03_6);
			$scope.sep_03_7 = Number(sep_03_7);
			
			$scope.sep_04_1 = Number(sep_04_1);
			$scope.sep_04_2 = Number(sep_04_2);
			$scope.sep_04_3 = Number(sep_04_3);
			$scope.sep_04_4 = Number(sep_04_4);
			$scope.sep_04_5 = Number(sep_04_5);
			$scope.sep_04_6 = Number(sep_04_6);
			$scope.sep_04_7 = Number(sep_04_7);
			
			$scope.sep_05_1 = Number(sep_05_1);
			$scope.sep_05_2 = Number(sep_05_2);
			
			//oct 18
			
			$scope.oct_01_1 = Number(oct_01_1);
			$scope.oct_01_2 = Number(oct_01_2);
			$scope.oct_01_3 = Number(oct_01_3);
			$scope.oct_01_4 = Number(oct_01_4);
			$scope.oct_01_5 = Number(oct_01_5);
			$scope.oct_01_6 = Number(oct_01_6);
			$scope.oct_01_7 = Number(oct_01_7);
			
			$scope.oct_02_1 = Number(oct_02_1);
			$scope.oct_02_2 = Number(oct_02_2);
			$scope.oct_02_3 = Number(oct_02_3);
			$scope.oct_02_4 = Number(oct_02_4);
			$scope.oct_02_5 = Number(oct_02_5);
			$scope.oct_02_6 = Number(oct_02_6);
			$scope.oct_02_7 = Number(oct_02_7);
			
			$scope.oct_03_1 = Number(oct_03_1);
			$scope.oct_03_2 = Number(oct_03_2);
			$scope.oct_03_3 = Number(oct_03_3);
			$scope.oct_03_4 = Number(oct_03_4);
			$scope.oct_03_5 = Number(oct_03_5);
			$scope.oct_03_6 = Number(oct_03_6);
			$scope.oct_03_7 = Number(oct_03_7);
			
			$scope.oct_04_1 = Number(oct_04_1);
			$scope.oct_04_2 = Number(oct_04_2);
			$scope.oct_04_3 = Number(oct_04_3);
			$scope.oct_04_4 = Number(oct_04_4);
			$scope.oct_04_5 = Number(oct_04_5);
			$scope.oct_04_6 = Number(oct_04_6);
			$scope.oct_04_7 = Number(oct_04_7);
			
			$scope.oct_05_1 = Number(oct_05_1);
			$scope.oct_05_2 = Number(oct_05_2);
			$scope.oct_05_3 = Number(oct_05_3);
			
			//nov 18
			
			$scope.nov_01_1 = Number(nov_01_1);
			$scope.nov_01_2 = Number(nov_01_2);
			$scope.nov_01_3 = Number(nov_01_3);
			$scope.nov_01_4 = Number(nov_01_4);
			$scope.nov_01_5 = Number(nov_01_5);
			$scope.nov_01_6 = Number(nov_01_6);
			$scope.nov_01_7 = Number(nov_01_7);
			
			$scope.nov_02_1 = Number(nov_02_1);
			$scope.nov_02_2 = Number(nov_02_2);
			$scope.nov_02_3 = Number(nov_02_3);
			$scope.nov_02_4 = Number(nov_02_4);
			$scope.nov_02_5 = Number(nov_02_5);
			$scope.nov_02_6 = Number(nov_02_6);
			$scope.nov_02_7 = Number(nov_02_7);
			
			$scope.nov_03_1 = Number(nov_03_1);
			$scope.nov_03_2 = Number(nov_03_2);
			$scope.nov_03_3 = Number(nov_03_3);
			$scope.nov_03_4 = Number(nov_03_4);
			$scope.nov_03_5 = Number(nov_03_5);
			$scope.nov_03_6 = Number(nov_03_6);
			$scope.nov_03_7 = Number(nov_03_7);
			
			$scope.nov_04_1 = Number(nov_04_1);
			$scope.nov_04_2 = Number(nov_04_2);
			$scope.nov_04_3 = Number(nov_04_3);
			$scope.nov_04_4 = Number(nov_04_4);
			$scope.nov_04_5 = Number(nov_04_5);
			$scope.nov_04_6 = Number(nov_04_6);
			$scope.nov_04_7 = Number(nov_04_7);
			
			$scope.nov_05_1 = Number(nov_05_1);
			$scope.nov_05_2 = Number(nov_05_2);
			
			//dec 18
			
			$scope.dec_01_1 = Number(dec_01_1);
			$scope.dec_01_2 = Number(dec_01_2);
			$scope.dec_01_3 = Number(dec_01_3);
			$scope.dec_01_4 = Number(dec_01_4);
			$scope.dec_01_5 = Number(dec_01_5);
			$scope.dec_01_6 = Number(dec_01_6);
			$scope.dec_01_7 = Number(dec_01_7);
			
			$scope.dec_02_1 = Number(dec_02_1);
			$scope.dec_02_2 = Number(dec_02_2);
			$scope.dec_02_3 = Number(dec_02_3);
			$scope.dec_02_4 = Number(dec_02_4);
			$scope.dec_02_5 = Number(dec_02_5);
			$scope.dec_02_6 = Number(dec_02_6);
			$scope.dec_02_7 = Number(dec_02_7);
			
			$scope.dec_03_1 = Number(dec_03_1);
			$scope.dec_03_2 = Number(dec_03_2);
			$scope.dec_03_3 = Number(dec_03_3);
			$scope.dec_03_4 = Number(dec_03_4);
			$scope.dec_03_5 = Number(dec_03_5);
			$scope.dec_03_6 = Number(dec_03_6);
			$scope.dec_03_7 = Number(dec_03_7);
			
			$scope.dec_04_1 = Number(dec_04_1);
			$scope.dec_04_2 = Number(dec_04_2);
			$scope.dec_04_3 = Number(dec_04_3);
			$scope.dec_04_4 = Number(dec_04_4);
			$scope.dec_04_5 = Number(dec_04_5);
			$scope.dec_04_6 = Number(dec_04_6);
			$scope.dec_04_7 = Number(dec_04_7);
			
			$scope.dec_05_1 = Number(dec_05_1);
			$scope.dec_05_2 = Number(dec_05_2);
			$scope.dec_05_3 = Number(dec_05_3);
			
		});
		
		$scope.d=[10, 20, 30, 40];
		$scope.daily_expense_1=0;
		
		//Trying func
		
		$scope.GetAllData = function () {
           			
			$http.get('check_1_p.php')
            .then(function (response, status, headers, config) {
                $scope.Details = response;
				console.log(response);
				
			var jan_01_1 = response.data.records[0]["jan_01_1"];
			var jan_01_2 = response.data.records[0]["jan_01_2"];
			var jan_01_3 = response.data.records[0]["jan_01_3"];
			var jan_01_4 = response.data.records[0]["jan_01_4"];
			var jan_01_5 = response.data.records[0]["jan_01_5"];
			var jan_01_6 = response.data.records[0]["jan_01_6"];
			var jan_01_7 = response.data.records[0]["jan_01_7"];
			
			var jan_02_1 = response.data.records[0]["jan_02_1"];
			var jan_02_2 = response.data.records[0]["jan_02_2"];
			var jan_02_3 = response.data.records[0]["jan_02_3"];
			var jan_02_4 = response.data.records[0]["jan_02_4"];
			var jan_02_5 = response.data.records[0]["jan_02_5"];
			var jan_02_6 = response.data.records[0]["jan_02_6"];
			var jan_02_7 = response.data.records[0]["jan_02_7"];
			
			var jan_03_1 = response.data.records[0]["jan_03_1"];
			var jan_03_2 = response.data.records[0]["jan_03_2"];
			var jan_03_3 = response.data.records[0]["jan_03_3"];
			var jan_03_4 = response.data.records[0]["jan_03_4"];
			var jan_03_5 = response.data.records[0]["jan_03_5"];
			var jan_03_6 = response.data.records[0]["jan_03_6"];
			var jan_03_7 = response.data.records[0]["jan_03_7"];
			
			var jan_04_1 = response.data.records[0]["jan_04_1"];
			var jan_04_2 = response.data.records[0]["jan_04_2"];
			var jan_04_3 = response.data.records[0]["jan_04_3"];
			var jan_04_4 = response.data.records[0]["jan_04_4"];
			var jan_04_5 = response.data.records[0]["jan_04_5"];
			var jan_04_6 = response.data.records[0]["jan_04_6"];
			var jan_04_7 = response.data.records[0]["jan_04_7"];
			
			var jan_05_1 = response.data.records[0]["jan_05_1"];
			var jan_05_2 = response.data.records[0]["jan_05_2"];
			var jan_05_3 = response.data.records[0]["jan_05_3"];
			
			//Feb
			
			var feb_01_1 = response.data.records[0]["feb_01_1"];
			var feb_01_2 = response.data.records[0]["feb_01_2"];
			var feb_01_3 = response.data.records[0]["feb_01_3"];
			var feb_01_4 = response.data.records[0]["feb_01_4"];
			var feb_01_5 = response.data.records[0]["feb_01_5"];
			var feb_01_6 = response.data.records[0]["feb_01_6"];
			var feb_01_7 = response.data.records[0]["feb_01_7"];
			
			var feb_02_1 = response.data.records[0]["feb_02_1"];
			var feb_02_2 = response.data.records[0]["feb_02_2"];
			var feb_02_3 = response.data.records[0]["feb_02_3"];
			var feb_02_4 = response.data.records[0]["feb_02_4"];
			var feb_02_5 = response.data.records[0]["feb_02_5"];
			var feb_02_6 = response.data.records[0]["feb_02_6"];
			var feb_02_7 = response.data.records[0]["feb_02_7"];
			
			var feb_03_1 = response.data.records[0]["feb_03_1"];
			var feb_03_2 = response.data.records[0]["feb_03_2"];
			var feb_03_3 = response.data.records[0]["feb_03_3"];
			var feb_03_4 = response.data.records[0]["feb_03_4"];
			var feb_03_5 = response.data.records[0]["feb_03_5"];
			var feb_03_6 = response.data.records[0]["feb_03_6"];
			var feb_03_7 = response.data.records[0]["feb_03_7"];
			
			var feb_04_1 = response.data.records[0]["feb_04_1"];
			var feb_04_2 = response.data.records[0]["feb_04_2"];
			var feb_04_3 = response.data.records[0]["feb_04_3"];
			var feb_04_4 = response.data.records[0]["feb_04_4"];
			var feb_04_5 = response.data.records[0]["feb_04_5"];
			var feb_04_6 = response.data.records[0]["feb_04_6"];
			var feb_04_7 = response.data.records[0]["feb_04_7"];
			
			//mar
			
			var mar_01_1 = response.data.records[0]["mar_01_1"];
			var mar_01_2 = response.data.records[0]["mar_01_2"];
			var mar_01_3 = response.data.records[0]["mar_01_3"];
			var mar_01_4 = response.data.records[0]["mar_01_4"];
			var mar_01_5 = response.data.records[0]["mar_01_5"];
			var mar_01_6 = response.data.records[0]["mar_01_6"];
			var mar_01_7 = response.data.records[0]["mar_01_7"];
			
			var mar_02_1 = response.data.records[0]["mar_02_1"];
			var mar_02_2 = response.data.records[0]["mar_02_2"];
			var mar_02_3 = response.data.records[0]["mar_02_3"];
			var mar_02_4 = response.data.records[0]["mar_02_4"];
			var mar_02_5 = response.data.records[0]["mar_02_5"];
			var mar_02_6 = response.data.records[0]["mar_02_6"];
			var mar_02_7 = response.data.records[0]["mar_02_7"];
			
			var mar_03_1 = response.data.records[0]["mar_03_1"];
			var mar_03_2 = response.data.records[0]["mar_03_2"];
			var mar_03_3 = response.data.records[0]["mar_03_3"];
			var mar_03_4 = response.data.records[0]["mar_03_4"];
			var mar_03_5 = response.data.records[0]["mar_03_5"];
			var mar_03_6 = response.data.records[0]["mar_03_6"];
			var mar_03_7 = response.data.records[0]["mar_03_7"];
			
			var mar_04_1 = response.data.records[0]["mar_04_1"];
			var mar_04_2 = response.data.records[0]["mar_04_2"];
			var mar_04_3 = response.data.records[0]["mar_04_3"];
			var mar_04_4 = response.data.records[0]["mar_04_4"];
			var mar_04_5 = response.data.records[0]["mar_04_5"];
			var mar_04_6 = response.data.records[0]["mar_04_6"];
			var mar_04_7 = response.data.records[0]["mar_04_7"];
			
			var mar_05_1 = response.data.records[0]["mar_05_1"];
			var mar_05_2 = response.data.records[0]["mar_05_2"];
			var mar_05_3 = response.data.records[0]["mar_05_3"];
						
			//apr
			
			var apr_01_1 = response.data.records[0]["apr_01_1"];
			var apr_01_2 = response.data.records[0]["apr_01_2"];
			var apr_01_3 = response.data.records[0]["apr_01_3"];
			var apr_01_4 = response.data.records[0]["apr_01_4"];
			var apr_01_5 = response.data.records[0]["apr_01_5"];
			var apr_01_6 = response.data.records[0]["apr_01_6"];
			var apr_01_7 = response.data.records[0]["apr_01_7"];
			
			var apr_02_1 = response.data.records[0]["apr_02_1"];
			var apr_02_2 = response.data.records[0]["apr_02_2"];
			var apr_02_3 = response.data.records[0]["apr_02_3"];
			var apr_02_4 = response.data.records[0]["apr_02_4"];
			var apr_02_5 = response.data.records[0]["apr_02_5"];
			var apr_02_6 = response.data.records[0]["apr_02_6"];
			var apr_02_7 = response.data.records[0]["apr_02_7"];
			
			var apr_03_1 = response.data.records[0]["apr_03_1"];
			var apr_03_2 = response.data.records[0]["apr_03_2"];
			var apr_03_3 = response.data.records[0]["apr_03_3"];
			var apr_03_4 = response.data.records[0]["apr_03_4"];
			var apr_03_5 = response.data.records[0]["apr_03_5"];
			var apr_03_6 = response.data.records[0]["apr_03_6"];
			var apr_03_7 = response.data.records[0]["apr_03_7"];
			
			var apr_04_1 = response.data.records[0]["apr_04_1"];
			var apr_04_2 = response.data.records[0]["apr_04_2"];
			var apr_04_3 = response.data.records[0]["apr_04_3"];
			var apr_04_4 = response.data.records[0]["apr_04_4"];
			var apr_04_5 = response.data.records[0]["apr_04_5"];
			var apr_04_6 = response.data.records[0]["apr_04_6"];
			var apr_04_7 = response.data.records[0]["apr_04_7"];
			
			var apr_05_1 = response.data.records[0]["apr_05_1"];
			var apr_05_2 = response.data.records[0]["apr_05_2"];
						
			//may
			
			var may_01_1 = response.data.records[0]["may_01_1"];
			var may_01_2 = response.data.records[0]["may_01_2"];
			var may_01_3 = response.data.records[0]["may_01_3"];
			var may_01_4 = response.data.records[0]["may_01_4"];
			var may_01_5 = response.data.records[0]["may_01_5"];
			var may_01_6 = response.data.records[0]["may_01_6"];
			var may_01_7 = response.data.records[0]["may_01_7"];
			
			var may_02_1 = response.data.records[0]["may_02_1"];
			var may_02_2 = response.data.records[0]["may_02_2"];
			var may_02_3 = response.data.records[0]["may_02_3"];
			var may_02_4 = response.data.records[0]["may_02_4"];
			var may_02_5 = response.data.records[0]["may_02_5"];
			var may_02_6 = response.data.records[0]["may_02_6"];
			var may_02_7 = response.data.records[0]["may_02_7"];
			
			var may_03_1 = response.data.records[0]["may_03_1"];
			var may_03_2 = response.data.records[0]["may_03_2"];
			var may_03_3 = response.data.records[0]["may_03_3"];
			var may_03_4 = response.data.records[0]["may_03_4"];
			var may_03_5 = response.data.records[0]["may_03_5"];
			var may_03_6 = response.data.records[0]["may_03_6"];
			var may_03_7 = response.data.records[0]["may_03_7"];
			
			var may_04_1 = response.data.records[0]["may_04_1"];
			var may_04_2 = response.data.records[0]["may_04_2"];
			var may_04_3 = response.data.records[0]["may_04_3"];
			var may_04_4 = response.data.records[0]["may_04_4"];
			var may_04_5 = response.data.records[0]["may_04_5"];
			var may_04_6 = response.data.records[0]["may_04_6"];
			var may_04_7 = response.data.records[0]["may_04_7"];
			
			var may_05_1 = response.data.records[0]["may_05_1"];
			var may_05_2 = response.data.records[0]["may_05_2"];
			var may_05_3 = response.data.records[0]["may_05_3"];
			
			//jun
			
			var jun_01_1 = response.data.records[0]["jun_01_1"];
			var jun_01_2 = response.data.records[0]["jun_01_2"];
			var jun_01_3 = response.data.records[0]["jun_01_3"];
			var jun_01_4 = response.data.records[0]["jun_01_4"];
			var jun_01_5 = response.data.records[0]["jun_01_5"];
			var jun_01_6 = response.data.records[0]["jun_01_6"];
			var jun_01_7 = response.data.records[0]["jun_01_7"];
			
			var jun_02_1 = response.data.records[0]["jun_02_1"];
			var jun_02_2 = response.data.records[0]["jun_02_2"];
			var jun_02_3 = response.data.records[0]["jun_02_3"];
			var jun_02_4 = response.data.records[0]["jun_02_4"];
			var jun_02_5 = response.data.records[0]["jun_02_5"];
			var jun_02_6 = response.data.records[0]["jun_02_6"];
			var jun_02_7 = response.data.records[0]["jun_02_7"];
			
			var jun_03_1 = response.data.records[0]["jun_03_1"];
			var jun_03_2 = response.data.records[0]["jun_03_2"];
			var jun_03_3 = response.data.records[0]["jun_03_3"];
			var jun_03_4 = response.data.records[0]["jun_03_4"];
			var jun_03_5 = response.data.records[0]["jun_03_5"];
			var jun_03_6 = response.data.records[0]["jun_03_6"];
			var jun_03_7 = response.data.records[0]["jun_03_7"];
			
			var jun_04_1 = response.data.records[0]["jun_04_1"];
			var jun_04_2 = response.data.records[0]["jun_04_2"];
			var jun_04_3 = response.data.records[0]["jun_04_3"];
			var jun_04_4 = response.data.records[0]["jun_04_4"];
			var jun_04_5 = response.data.records[0]["jun_04_5"];
			var jun_04_6 = response.data.records[0]["jun_04_6"];
			var jun_04_7 = response.data.records[0]["jun_04_7"];
			
			var jun_05_1 = response.data.records[0]["jun_05_1"];
			var jun_05_2 = response.data.records[0]["jun_05_2"];
			
			//july
			
			var jul_01_1 = response.data.records[0]["jul_01_1"];
			var jul_01_2 = response.data.records[0]["jul_01_2"];
			var jul_01_3 = response.data.records[0]["jul_01_3"];
			var jul_01_4 = response.data.records[0]["jul_01_4"];
			var jul_01_5 = response.data.records[0]["jul_01_5"];
			var jul_01_6 = response.data.records[0]["jul_01_6"];
			var jul_01_7 = response.data.records[0]["jul_01_7"];
			
			var jul_02_1 = response.data.records[0]["jul_02_1"];
			var jul_02_2 = response.data.records[0]["jul_02_2"];
			var jul_02_3 = response.data.records[0]["jul_02_3"];
			var jul_02_4 = response.data.records[0]["jul_02_4"];
			var jul_02_5 = response.data.records[0]["jul_02_5"];
			var jul_02_6 = response.data.records[0]["jul_02_6"];
			var jul_02_7 = response.data.records[0]["jul_02_7"];
			
			var jul_03_1 = response.data.records[0]["jul_03_1"];
			var jul_03_2 = response.data.records[0]["jul_03_2"];
			var jul_03_3 = response.data.records[0]["jul_03_3"];
			var jul_03_4 = response.data.records[0]["jul_03_4"];
			var jul_03_5 = response.data.records[0]["jul_03_5"];
			var jul_03_6 = response.data.records[0]["jul_03_6"];
			var jul_03_7 = response.data.records[0]["jul_03_7"];
			
			var jul_04_1 = response.data.records[0]["jul_04_1"];
			var jul_04_2 = response.data.records[0]["jul_04_2"];
			var jul_04_3 = response.data.records[0]["jul_04_3"];
			var jul_04_4 = response.data.records[0]["jul_04_4"];
			var jul_04_5 = response.data.records[0]["jul_04_5"];
			var jul_04_6 = response.data.records[0]["jul_04_6"];
			var jul_04_7 = response.data.records[0]["jul_04_7"];
			
			var jul_05_1 = response.data.records[0]["jul_05_1"];
			var jul_05_2 = response.data.records[0]["jul_05_2"];
			var jul_05_3 = response.data.records[0]["jul_05_3"];
			
			//august
			
			var aug_01_1 = response.data.records[0]["aug_01_1"];
			var aug_01_2 = response.data.records[0]["aug_01_2"];
			var aug_01_3 = response.data.records[0]["aug_01_3"];
			var aug_01_4 = response.data.records[0]["aug_01_4"];
			var aug_01_5 = response.data.records[0]["aug_01_5"];
			var aug_01_6 = response.data.records[0]["aug_01_6"];
			var aug_01_7 = response.data.records[0]["aug_01_7"];
			
			var aug_02_1 = response.data.records[0]["aug_02_1"];
			var aug_02_2 = response.data.records[0]["aug_02_2"];
			var aug_02_3 = response.data.records[0]["aug_02_3"];
			var aug_02_4 = response.data.records[0]["aug_02_4"];
			var aug_02_5 = response.data.records[0]["aug_02_5"];
			var aug_02_6 = response.data.records[0]["aug_02_6"];
			var aug_02_7 = response.data.records[0]["aug_02_7"];
			
			var aug_03_1 = response.data.records[0]["aug_03_1"];
			var aug_03_2 = response.data.records[0]["aug_03_2"];
			var aug_03_3 = response.data.records[0]["aug_03_3"];
			var aug_03_4 = response.data.records[0]["aug_03_4"];
			var aug_03_5 = response.data.records[0]["aug_03_5"];
			var aug_03_6 = response.data.records[0]["aug_03_6"];
			var aug_03_7 = response.data.records[0]["aug_03_7"];
			
			var aug_04_1 = response.data.records[0]["aug_04_1"];
			var aug_04_2 = response.data.records[0]["aug_04_2"];
			var aug_04_3 = response.data.records[0]["aug_04_3"];
			var aug_04_4 = response.data.records[0]["aug_04_4"];
			var aug_04_5 = response.data.records[0]["aug_04_5"];
			var aug_04_6 = response.data.records[0]["aug_04_6"];
			var aug_04_7 = response.data.records[0]["aug_04_7"];
			
			var aug_05_1 = response.data.records[0]["aug_05_1"];
			var aug_05_2 = response.data.records[0]["aug_05_2"];
			var aug_05_3 = response.data.records[0]["aug_05_3"];
			
			//sep
			
			var sep_01_1 = response.data.records[0]["sep_01_1"];
			var sep_01_2 = response.data.records[0]["sep_01_2"];
			var sep_01_3 = response.data.records[0]["sep_01_3"];
			var sep_01_4 = response.data.records[0]["sep_01_4"];
			var sep_01_5 = response.data.records[0]["sep_01_5"];
			var sep_01_6 = response.data.records[0]["sep_01_6"];
			var sep_01_7 = response.data.records[0]["sep_01_7"];
			
			var sep_02_1 = response.data.records[0]["sep_02_1"];
			var sep_02_2 = response.data.records[0]["sep_02_2"];
			var sep_02_3 = response.data.records[0]["sep_02_3"];
			var sep_02_4 = response.data.records[0]["sep_02_4"];
			var sep_02_5 = response.data.records[0]["sep_02_5"];
			var sep_02_6 = response.data.records[0]["sep_02_6"];
			var sep_02_7 = response.data.records[0]["sep_02_7"];
			
			var sep_03_1 = response.data.records[0]["sep_03_1"];
			var sep_03_2 = response.data.records[0]["sep_03_2"];
			var sep_03_3 = response.data.records[0]["sep_03_3"];
			var sep_03_4 = response.data.records[0]["sep_03_4"];
			var sep_03_5 = response.data.records[0]["sep_03_5"];
			var sep_03_6 = response.data.records[0]["sep_03_6"];
			var sep_03_7 = response.data.records[0]["sep_03_7"];
			
			var sep_04_1 = response.data.records[0]["sep_04_1"];
			var sep_04_2 = response.data.records[0]["sep_04_2"];
			var sep_04_3 = response.data.records[0]["sep_04_3"];
			var sep_04_4 = response.data.records[0]["sep_04_4"];
			var sep_04_5 = response.data.records[0]["sep_04_5"];
			var sep_04_6 = response.data.records[0]["sep_04_6"];
			var sep_04_7 = response.data.records[0]["sep_04_7"];
			
			var sep_05_1 = response.data.records[0]["sep_05_1"];
			var sep_05_2 = response.data.records[0]["sep_05_2"];
			
			//oct
			
			var oct_01_1 = response.data.records[0]["oct_01_1"];
			var oct_01_2 = response.data.records[0]["oct_01_2"];
			var oct_01_3 = response.data.records[0]["oct_01_3"];
			var oct_01_4 = response.data.records[0]["oct_01_4"];
			var oct_01_5 = response.data.records[0]["oct_01_5"];
			var oct_01_6 = response.data.records[0]["oct_01_6"];
			var oct_01_7 = response.data.records[0]["oct_01_7"];
			
			var oct_02_1 = response.data.records[0]["oct_02_1"];
			var oct_02_2 = response.data.records[0]["oct_02_2"];
			var oct_02_3 = response.data.records[0]["oct_02_3"];
			var oct_02_4 = response.data.records[0]["oct_02_4"];
			var oct_02_5 = response.data.records[0]["oct_02_5"];
			var oct_02_6 = response.data.records[0]["oct_02_6"];
			var oct_02_7 = response.data.records[0]["oct_02_7"];
			
			var oct_03_1 = response.data.records[0]["oct_03_1"];
			var oct_03_2 = response.data.records[0]["oct_03_2"];
			var oct_03_3 = response.data.records[0]["oct_03_3"];
			var oct_03_4 = response.data.records[0]["oct_03_4"];
			var oct_03_5 = response.data.records[0]["oct_03_5"];
			var oct_03_6 = response.data.records[0]["oct_03_6"];
			var oct_03_7 = response.data.records[0]["oct_03_7"];
			
			var oct_04_1 = response.data.records[0]["oct_04_1"];
			var oct_04_2 = response.data.records[0]["oct_04_2"];
			var oct_04_3 = response.data.records[0]["oct_04_3"];
			var oct_04_4 = response.data.records[0]["oct_04_4"];
			var oct_04_5 = response.data.records[0]["oct_04_5"];
			var oct_04_6 = response.data.records[0]["oct_04_6"];
			var oct_04_7 = response.data.records[0]["oct_04_7"];
			
			var oct_05_1 = response.data.records[0]["oct_05_1"];
			var oct_05_2 = response.data.records[0]["oct_05_2"];
			var oct_05_3 = response.data.records[0]["oct_05_3"];
			
			//nov
			
			var nov_01_1 = response.data.records[0]["nov_01_1"];
			var nov_01_2 = response.data.records[0]["nov_01_2"];
			var nov_01_3 = response.data.records[0]["nov_01_3"];
			var nov_01_4 = response.data.records[0]["nov_01_4"];
			var nov_01_5 = response.data.records[0]["nov_01_5"];
			var nov_01_6 = response.data.records[0]["nov_01_6"];
			var nov_01_7 = response.data.records[0]["nov_01_7"];
			
			var nov_02_1 = response.data.records[0]["nov_02_1"];
			var nov_02_2 = response.data.records[0]["nov_02_2"];
			var nov_02_3 = response.data.records[0]["nov_02_3"];
			var nov_02_4 = response.data.records[0]["nov_02_4"];
			var nov_02_5 = response.data.records[0]["nov_02_5"];
			var nov_02_6 = response.data.records[0]["nov_02_6"];
			var nov_02_7 = response.data.records[0]["nov_02_7"];
			
			var nov_03_1 = response.data.records[0]["nov_03_1"];
			var nov_03_2 = response.data.records[0]["nov_03_2"];
			var nov_03_3 = response.data.records[0]["nov_03_3"];
			var nov_03_4 = response.data.records[0]["nov_03_4"];
			var nov_03_5 = response.data.records[0]["nov_03_5"];
			var nov_03_6 = response.data.records[0]["nov_03_6"];
			var nov_03_7 = response.data.records[0]["nov_03_7"];
			
			var nov_04_1 = response.data.records[0]["nov_04_1"];
			var nov_04_2 = response.data.records[0]["nov_04_2"];
			var nov_04_3 = response.data.records[0]["nov_04_3"];
			var nov_04_4 = response.data.records[0]["nov_04_4"];
			var nov_04_5 = response.data.records[0]["nov_04_5"];
			var nov_04_6 = response.data.records[0]["nov_04_6"];
			var nov_04_7 = response.data.records[0]["nov_04_7"];
			
			var nov_05_1 = response.data.records[0]["nov_05_1"];
			var nov_05_2 = response.data.records[0]["nov_05_2"];
			
			//dec
			
			var dec_01_1 = response.data.records[0]["dec_01_1"];
			var dec_01_2 = response.data.records[0]["dec_01_2"];
			var dec_01_3 = response.data.records[0]["dec_01_3"];
			var dec_01_4 = response.data.records[0]["dec_01_4"];
			var dec_01_5 = response.data.records[0]["dec_01_5"];
			var dec_01_6 = response.data.records[0]["dec_01_6"];
			var dec_01_7 = response.data.records[0]["dec_01_7"];
			
			var dec_02_1 = response.data.records[0]["dec_02_1"];
			var dec_02_2 = response.data.records[0]["dec_02_2"];
			var dec_02_3 = response.data.records[0]["dec_02_3"];
			var dec_02_4 = response.data.records[0]["dec_02_4"];
			var dec_02_5 = response.data.records[0]["dec_02_5"];
			var dec_02_6 = response.data.records[0]["dec_02_6"];
			var dec_02_7 = response.data.records[0]["dec_02_7"];
			
			var dec_03_1 = response.data.records[0]["dec_03_1"];
			var dec_03_2 = response.data.records[0]["dec_03_2"];
			var dec_03_3 = response.data.records[0]["dec_03_3"];
			var dec_03_4 = response.data.records[0]["dec_03_4"];
			var dec_03_5 = response.data.records[0]["dec_03_5"];
			var dec_03_6 = response.data.records[0]["dec_03_6"];
			var dec_03_7 = response.data.records[0]["dec_03_7"];
			
			var dec_04_1 = response.data.records[0]["dec_04_1"];
			var dec_04_2 = response.data.records[0]["dec_04_2"];
			var dec_04_3 = response.data.records[0]["dec_04_3"];
			var dec_04_4 = response.data.records[0]["dec_04_4"];
			var dec_04_5 = response.data.records[0]["dec_04_5"];
			var dec_04_6 = response.data.records[0]["dec_04_6"];
			var dec_04_7 = response.data.records[0]["dec_04_7"];
			
			var dec_05_1 = response.data.records[0]["dec_05_1"];
			var dec_05_2 = response.data.records[0]["dec_05_2"];
			var dec_05_3 = response.data.records[0]["dec_05_3"];
			
			
			//setting scope variables
			
			//Jan 18
			
			$scope.jan_01_1 = Number(jan_01_1);
			$scope.jan_01_2 = Number(jan_01_2);
			$scope.jan_01_3 = Number(jan_01_3);
			$scope.jan_01_4 = Number(jan_01_4);
			$scope.jan_01_5 = Number(jan_01_5);
			$scope.jan_01_6 = Number(jan_01_6);
			$scope.jan_01_7 = Number(jan_01_7);
			
			$scope.jan_02_1 = Number(jan_02_1);
			$scope.jan_02_2 = Number(jan_02_2);
			$scope.jan_02_3 = Number(jan_02_3);
			$scope.jan_02_4 = Number(jan_02_4);
			$scope.jan_02_5 = Number(jan_02_5);
			$scope.jan_02_6 = Number(jan_02_6);
			$scope.jan_02_7 = Number(jan_02_7);
			
			$scope.jan_03_1 = Number(jan_03_1);
			$scope.jan_03_2 = Number(jan_03_2);
			$scope.jan_03_3 = Number(jan_03_3);
			$scope.jan_03_4 = Number(jan_03_4);
			$scope.jan_03_5 = Number(jan_03_5);
			$scope.jan_03_6 = Number(jan_03_6);
			$scope.jan_03_7 = Number(jan_03_7);
			
			$scope.jan_04_1 = Number(jan_04_1);
			$scope.jan_04_2 = Number(jan_04_2);
			$scope.jan_04_3 = Number(jan_04_3);
			$scope.jan_04_4 = Number(jan_04_4);
			$scope.jan_04_5 = Number(jan_04_5);
			$scope.jan_04_6 = Number(jan_04_6);
			$scope.jan_04_7 = Number(jan_04_7);
			
			$scope.jan_05_1 = Number(jan_05_1);
			$scope.jan_05_2 = Number(jan_05_2);
			$scope.jan_05_3 = Number(jan_05_3);
			
			//Feb 18
			
			$scope.feb_01_1 = Number(feb_01_1);
			$scope.feb_01_2 = Number(feb_01_2);
			$scope.feb_01_3 = Number(feb_01_3);
			$scope.feb_01_4 = Number(feb_01_4);
			$scope.feb_01_5 = Number(feb_01_5);
			$scope.feb_01_6 = Number(feb_01_6);
			$scope.feb_01_7 = Number(feb_01_7);
			
			$scope.feb_02_1 = Number(feb_02_1);
			$scope.feb_02_2 = Number(feb_02_2);
			$scope.feb_02_3 = Number(feb_02_3);
			$scope.feb_02_4 = Number(feb_02_4);
			$scope.feb_02_5 = Number(feb_02_5);
			$scope.feb_02_6 = Number(feb_02_6);
			$scope.feb_02_7 = Number(feb_02_7);
			
			$scope.feb_03_1 = Number(feb_03_1);
			$scope.feb_03_2 = Number(feb_03_2);
			$scope.feb_03_3 = Number(feb_03_3);
			$scope.feb_03_4 = Number(feb_03_4);
			$scope.feb_03_5 = Number(feb_03_5);
			$scope.feb_03_6 = Number(feb_03_6);
			$scope.feb_03_7 = Number(feb_03_7);
			
			$scope.feb_04_1 = Number(feb_04_1);
			$scope.feb_04_2 = Number(feb_04_2);
			$scope.feb_04_3 = Number(feb_04_3);
			$scope.feb_04_4 = Number(feb_04_4);
			$scope.feb_04_5 = Number(feb_04_5);
			$scope.feb_04_6 = Number(feb_04_6);
			$scope.feb_04_7 = Number(feb_04_7);
			
			//mar 18
			
			$scope.mar_01_1 = Number(mar_01_1);
			$scope.mar_01_2 = Number(mar_01_2);
			$scope.mar_01_3 = Number(mar_01_3);
			$scope.mar_01_4 = Number(mar_01_4);
			$scope.mar_01_5 = Number(mar_01_5);
			$scope.mar_01_6 = Number(mar_01_6);
			$scope.mar_01_7 = Number(mar_01_7);
			
			$scope.mar_02_1 = Number(mar_02_1);
			$scope.mar_02_2 = Number(mar_02_2);
			$scope.mar_02_3 = Number(mar_02_3);
			$scope.mar_02_4 = Number(mar_02_4);
			$scope.mar_02_5 = Number(mar_02_5);
			$scope.mar_02_6 = Number(mar_02_6);
			$scope.mar_02_7 = Number(mar_02_7);
			
			$scope.mar_03_1 = Number(mar_03_1);
			$scope.mar_03_2 = Number(mar_03_2);
			$scope.mar_03_3 = Number(mar_03_3);
			$scope.mar_03_4 = Number(mar_03_4);
			$scope.mar_03_5 = Number(mar_03_5);
			$scope.mar_03_6 = Number(mar_03_6);
			$scope.mar_03_7 = Number(mar_03_7);
			
			$scope.mar_04_1 = Number(mar_04_1);
			$scope.mar_04_2 = Number(mar_04_2);
			$scope.mar_04_3 = Number(mar_04_3);
			$scope.mar_04_4 = Number(mar_04_4);
			$scope.mar_04_5 = Number(mar_04_5);
			$scope.mar_04_6 = Number(mar_04_6);
			$scope.mar_04_7 = Number(mar_04_7);
			
			$scope.mar_05_1 = Number(mar_05_1);
			$scope.mar_05_2 = Number(mar_05_2);
			$scope.mar_05_3 = Number(mar_05_3);
			
			//apr 18
			
			$scope.apr_01_1 = Number(apr_01_1);
			$scope.apr_01_2 = Number(apr_01_2);
			$scope.apr_01_3 = Number(apr_01_3);
			$scope.apr_01_4 = Number(apr_01_4);
			$scope.apr_01_5 = Number(apr_01_5);
			$scope.apr_01_6 = Number(apr_01_6);
			$scope.apr_01_7 = Number(apr_01_7);
			
			$scope.apr_02_1 = Number(apr_02_1);
			$scope.apr_02_2 = Number(apr_02_2);
			$scope.apr_02_3 = Number(apr_02_3);
			$scope.apr_02_4 = Number(apr_02_4);
			$scope.apr_02_5 = Number(apr_02_5);
			$scope.apr_02_6 = Number(apr_02_6);
			$scope.apr_02_7 = Number(apr_02_7);
			
			$scope.apr_03_1 = Number(apr_03_1);
			$scope.apr_03_2 = Number(apr_03_2);
			$scope.apr_03_3 = Number(apr_03_3);
			$scope.apr_03_4 = Number(apr_03_4);
			$scope.apr_03_5 = Number(apr_03_5);
			$scope.apr_03_6 = Number(apr_03_6);
			$scope.apr_03_7 = Number(apr_03_7);
			
			$scope.apr_04_1 = Number(apr_04_1);
			$scope.apr_04_2 = Number(apr_04_2);
			$scope.apr_04_3 = Number(apr_04_3);
			$scope.apr_04_4 = Number(apr_04_4);
			$scope.apr_04_5 = Number(apr_04_5);
			$scope.apr_04_6 = Number(apr_04_6);
			$scope.apr_04_7 = Number(apr_04_7);
			
			$scope.apr_05_1 = Number(apr_05_1);
			$scope.apr_05_2 = Number(apr_05_2);
			
			//may 18
			
			$scope.may_01_1 = Number(may_01_1);
			$scope.may_01_2 = Number(may_01_2);
			$scope.may_01_3 = Number(may_01_3);
			$scope.may_01_4 = Number(may_01_4);
			$scope.may_01_5 = Number(may_01_5);
			$scope.may_01_6 = Number(may_01_6);
			$scope.may_01_7 = Number(may_01_7);
			
			$scope.may_02_1 = Number(may_02_1);
			$scope.may_02_2 = Number(may_02_2);
			$scope.may_02_3 = Number(may_02_3);
			$scope.may_02_4 = Number(may_02_4);
			$scope.may_02_5 = Number(may_02_5);
			$scope.may_02_6 = Number(may_02_6);
			$scope.may_02_7 = Number(may_02_7);
			
			$scope.may_03_1 = Number(may_03_1);
			$scope.may_03_2 = Number(may_03_2);
			$scope.may_03_3 = Number(may_03_3);
			$scope.may_03_4 = Number(may_03_4);
			$scope.may_03_5 = Number(may_03_5);
			$scope.may_03_6 = Number(may_03_6);
			$scope.may_03_7 = Number(may_03_7);
			
			$scope.may_04_1 = Number(may_04_1);
			$scope.may_04_2 = Number(may_04_2);
			$scope.may_04_3 = Number(may_04_3);
			$scope.may_04_4 = Number(may_04_4);
			$scope.may_04_5 = Number(may_04_5);
			$scope.may_04_6 = Number(may_04_6);
			$scope.may_04_7 = Number(may_04_7);
			
			$scope.may_05_1 = Number(may_05_1);
			$scope.may_05_2 = Number(may_05_2);
			$scope.may_05_3 = Number(may_05_3);
			
			//jun 18
			
			$scope.jun_01_1 = Number(jun_01_1);
			$scope.jun_01_2 = Number(jun_01_2);
			$scope.jun_01_3 = Number(jun_01_3);
			$scope.jun_01_4 = Number(jun_01_4);
			$scope.jun_01_5 = Number(jun_01_5);
			$scope.jun_01_6 = Number(jun_01_6);
			$scope.jun_01_7 = Number(jun_01_7);
			
			$scope.jun_02_1 = Number(jun_02_1);
			$scope.jun_02_2 = Number(jun_02_2);
			$scope.jun_02_3 = Number(jun_02_3);
			$scope.jun_02_4 = Number(jun_02_4);
			$scope.jun_02_5 = Number(jun_02_5);
			$scope.jun_02_6 = Number(jun_02_6);
			$scope.jun_02_7 = Number(jun_02_7);
			
			$scope.jun_03_1 = Number(jun_03_1);
			$scope.jun_03_2 = Number(jun_03_2);
			$scope.jun_03_3 = Number(jun_03_3);
			$scope.jun_03_4 = Number(jun_03_4);
			$scope.jun_03_5 = Number(jun_03_5);
			$scope.jun_03_6 = Number(jun_03_6);
			$scope.jun_03_7 = Number(jun_03_7);
			
			$scope.jun_04_1 = Number(jun_04_1);
			$scope.jun_04_2 = Number(jun_04_2);
			$scope.jun_04_3 = Number(jun_04_3);
			$scope.jun_04_4 = Number(jun_04_4);
			$scope.jun_04_5 = Number(jun_04_5);
			$scope.jun_04_6 = Number(jun_04_6);
			$scope.jun_04_7 = Number(jun_04_7);
			
			$scope.jun_05_1 = Number(jun_05_1);
			$scope.jun_05_2 = Number(jun_05_2);
			
			//jul 18
			
			$scope.jul_01_1 = Number(jul_01_1);
			$scope.jul_01_2 = Number(jul_01_2);
			$scope.jul_01_3 = Number(jul_01_3);
			$scope.jul_01_4 = Number(jul_01_4);
			$scope.jul_01_5 = Number(jul_01_5);
			$scope.jul_01_6 = Number(jul_01_6);
			$scope.jul_01_7 = Number(jul_01_7);
			
			$scope.jul_02_1 = Number(jul_02_1);
			$scope.jul_02_2 = Number(jul_02_2);
			$scope.jul_02_3 = Number(jul_02_3);
			$scope.jul_02_4 = Number(jul_02_4);
			$scope.jul_02_5 = Number(jul_02_5);
			$scope.jul_02_6 = Number(jul_02_6);
			$scope.jul_02_7 = Number(jul_02_7);
			
			$scope.jul_03_1 = Number(jul_03_1);
			$scope.jul_03_2 = Number(jul_03_2);
			$scope.jul_03_3 = Number(jul_03_3);
			$scope.jul_03_4 = Number(jul_03_4);
			$scope.jul_03_5 = Number(jul_03_5);
			$scope.jul_03_6 = Number(jul_03_6);
			$scope.jul_03_7 = Number(jul_03_7);
			
			$scope.jul_04_1 = Number(jul_04_1);
			$scope.jul_04_2 = Number(jul_04_2);
			$scope.jul_04_3 = Number(jul_04_3);
			$scope.jul_04_4 = Number(jul_04_4);
			$scope.jul_04_5 = Number(jul_04_5);
			$scope.jul_04_6 = Number(jul_04_6);
			$scope.jul_04_7 = Number(jul_04_7);
			
			$scope.jul_05_1 = Number(jul_05_1);
			$scope.jul_05_2 = Number(jul_05_2);
			$scope.jul_05_3 = Number(jul_05_3);
			
			//aug 18
			
			$scope.aug_01_1 = Number(aug_01_1);
			$scope.aug_01_2 = Number(aug_01_2);
			$scope.aug_01_3 = Number(aug_01_3);
			$scope.aug_01_4 = Number(aug_01_4);
			$scope.aug_01_5 = Number(aug_01_5);
			$scope.aug_01_6 = Number(aug_01_6);
			$scope.aug_01_7 = Number(aug_01_7);
			
			$scope.aug_02_1 = Number(aug_02_1);
			$scope.aug_02_2 = Number(aug_02_2);
			$scope.aug_02_3 = Number(aug_02_3);
			$scope.aug_02_4 = Number(aug_02_4);
			$scope.aug_02_5 = Number(aug_02_5);
			$scope.aug_02_6 = Number(aug_02_6);
			$scope.aug_02_7 = Number(aug_02_7);
			
			$scope.aug_03_1 = Number(aug_03_1);
			$scope.aug_03_2 = Number(aug_03_2);
			$scope.aug_03_3 = Number(aug_03_3);
			$scope.aug_03_4 = Number(aug_03_4);
			$scope.aug_03_5 = Number(aug_03_5);
			$scope.aug_03_6 = Number(aug_03_6);
			$scope.aug_03_7 = Number(aug_03_7);
			
			$scope.aug_04_1 = Number(aug_04_1);
			$scope.aug_04_2 = Number(aug_04_2);
			$scope.aug_04_3 = Number(aug_04_3);
			$scope.aug_04_4 = Number(aug_04_4);
			$scope.aug_04_5 = Number(aug_04_5);
			$scope.aug_04_6 = Number(aug_04_6);
			$scope.aug_04_7 = Number(aug_04_7);
			
			$scope.aug_05_1 = Number(aug_05_1);
			$scope.aug_05_2 = Number(aug_05_2);
			$scope.aug_05_3 = Number(aug_05_3);
			
			//sep 18
			
			$scope.sep_01_1 = Number(sep_01_1);
			$scope.sep_01_2 = Number(sep_01_2);
			$scope.sep_01_3 = Number(sep_01_3);
			$scope.sep_01_4 = Number(sep_01_4);
			$scope.sep_01_5 = Number(sep_01_5);
			$scope.sep_01_6 = Number(sep_01_6);
			$scope.sep_01_7 = Number(sep_01_7);
			
			$scope.sep_02_1 = Number(sep_02_1);
			$scope.sep_02_2 = Number(sep_02_2);
			$scope.sep_02_3 = Number(sep_02_3);
			$scope.sep_02_4 = Number(sep_02_4);
			$scope.sep_02_5 = Number(sep_02_5);
			$scope.sep_02_6 = Number(sep_02_6);
			$scope.sep_02_7 = Number(sep_02_7);
			
			$scope.sep_03_1 = Number(sep_03_1);
			$scope.sep_03_2 = Number(sep_03_2);
			$scope.sep_03_3 = Number(sep_03_3);
			$scope.sep_03_4 = Number(sep_03_4);
			$scope.sep_03_5 = Number(sep_03_5);
			$scope.sep_03_6 = Number(sep_03_6);
			$scope.sep_03_7 = Number(sep_03_7);
			
			$scope.sep_04_1 = Number(sep_04_1);
			$scope.sep_04_2 = Number(sep_04_2);
			$scope.sep_04_3 = Number(sep_04_3);
			$scope.sep_04_4 = Number(sep_04_4);
			$scope.sep_04_5 = Number(sep_04_5);
			$scope.sep_04_6 = Number(sep_04_6);
			$scope.sep_04_7 = Number(sep_04_7);
			
			$scope.sep_05_1 = Number(sep_05_1);
			$scope.sep_05_2 = Number(sep_05_2);
			
			//oct 18
			
			$scope.oct_01_1 = Number(oct_01_1);
			$scope.oct_01_2 = Number(oct_01_2);
			$scope.oct_01_3 = Number(oct_01_3);
			$scope.oct_01_4 = Number(oct_01_4);
			$scope.oct_01_5 = Number(oct_01_5);
			$scope.oct_01_6 = Number(oct_01_6);
			$scope.oct_01_7 = Number(oct_01_7);
			
			$scope.oct_02_1 = Number(oct_02_1);
			$scope.oct_02_2 = Number(oct_02_2);
			$scope.oct_02_3 = Number(oct_02_3);
			$scope.oct_02_4 = Number(oct_02_4);
			$scope.oct_02_5 = Number(oct_02_5);
			$scope.oct_02_6 = Number(oct_02_6);
			$scope.oct_02_7 = Number(oct_02_7);
			
			$scope.oct_03_1 = Number(oct_03_1);
			$scope.oct_03_2 = Number(oct_03_2);
			$scope.oct_03_3 = Number(oct_03_3);
			$scope.oct_03_4 = Number(oct_03_4);
			$scope.oct_03_5 = Number(oct_03_5);
			$scope.oct_03_6 = Number(oct_03_6);
			$scope.oct_03_7 = Number(oct_03_7);
			
			$scope.oct_04_1 = Number(oct_04_1);
			$scope.oct_04_2 = Number(oct_04_2);
			$scope.oct_04_3 = Number(oct_04_3);
			$scope.oct_04_4 = Number(oct_04_4);
			$scope.oct_04_5 = Number(oct_04_5);
			$scope.oct_04_6 = Number(oct_04_6);
			$scope.oct_04_7 = Number(oct_04_7);
			
			$scope.oct_05_1 = Number(oct_05_1);
			$scope.oct_05_2 = Number(oct_05_2);
			$scope.oct_05_3 = Number(oct_05_3);
			
			//nov 18
			
			$scope.nov_01_1 = Number(nov_01_1);
			$scope.nov_01_2 = Number(nov_01_2);
			$scope.nov_01_3 = Number(nov_01_3);
			$scope.nov_01_4 = Number(nov_01_4);
			$scope.nov_01_5 = Number(nov_01_5);
			$scope.nov_01_6 = Number(nov_01_6);
			$scope.nov_01_7 = Number(nov_01_7);
			
			$scope.nov_02_1 = Number(nov_02_1);
			$scope.nov_02_2 = Number(nov_02_2);
			$scope.nov_02_3 = Number(nov_02_3);
			$scope.nov_02_4 = Number(nov_02_4);
			$scope.nov_02_5 = Number(nov_02_5);
			$scope.nov_02_6 = Number(nov_02_6);
			$scope.nov_02_7 = Number(nov_02_7);
			
			$scope.nov_03_1 = Number(nov_03_1);
			$scope.nov_03_2 = Number(nov_03_2);
			$scope.nov_03_3 = Number(nov_03_3);
			$scope.nov_03_4 = Number(nov_03_4);
			$scope.nov_03_5 = Number(nov_03_5);
			$scope.nov_03_6 = Number(nov_03_6);
			$scope.nov_03_7 = Number(nov_03_7);
			
			$scope.nov_04_1 = Number(nov_04_1);
			$scope.nov_04_2 = Number(nov_04_2);
			$scope.nov_04_3 = Number(nov_04_3);
			$scope.nov_04_4 = Number(nov_04_4);
			$scope.nov_04_5 = Number(nov_04_5);
			$scope.nov_04_6 = Number(nov_04_6);
			$scope.nov_04_7 = Number(nov_04_7);
			
			$scope.nov_05_1 = Number(nov_05_1);
			$scope.nov_05_2 = Number(nov_05_2);
			
			//dec 18
			
			$scope.dec_01_1 = Number(dec_01_1);
			$scope.dec_01_2 = Number(dec_01_2);
			$scope.dec_01_3 = Number(dec_01_3);
			$scope.dec_01_4 = Number(dec_01_4);
			$scope.dec_01_5 = Number(dec_01_5);
			$scope.dec_01_6 = Number(dec_01_6);
			$scope.dec_01_7 = Number(dec_01_7);
			
			$scope.dec_02_1 = Number(dec_02_1);
			$scope.dec_02_2 = Number(dec_02_2);
			$scope.dec_02_3 = Number(dec_02_3);
			$scope.dec_02_4 = Number(dec_02_4);
			$scope.dec_02_5 = Number(dec_02_5);
			$scope.dec_02_6 = Number(dec_02_6);
			$scope.dec_02_7 = Number(dec_02_7);
			
			$scope.dec_03_1 = Number(dec_03_1);
			$scope.dec_03_2 = Number(dec_03_2);
			$scope.dec_03_3 = Number(dec_03_3);
			$scope.dec_03_4 = Number(dec_03_4);
			$scope.dec_03_5 = Number(dec_03_5);
			$scope.dec_03_6 = Number(dec_03_6);
			$scope.dec_03_7 = Number(dec_03_7);
			
			$scope.dec_04_1 = Number(dec_04_1);
			$scope.dec_04_2 = Number(dec_04_2);
			$scope.dec_04_3 = Number(dec_04_3);
			$scope.dec_04_4 = Number(dec_04_4);
			$scope.dec_04_5 = Number(dec_04_5);
			$scope.dec_04_6 = Number(dec_04_6);
			$scope.dec_04_7 = Number(dec_04_7);
			
			$scope.dec_05_1 = Number(dec_05_1);
			$scope.dec_05_2 = Number(dec_05_2);
			$scope.dec_05_3 = Number(dec_05_3);
		
            })
        };
		
		//Trying func 2
		
		$scope.GetAllData_M = function () {
            $http.get('check_1.php')
            .then(function (response, status, headers, config) {
                $scope.Details = response;
				console.log(response);
				
			var jan_01_1 = response.data.records[0]["jan_01_1"];
			var jan_01_2 = response.data.records[0]["jan_01_2"];
			var jan_01_3 = response.data.records[0]["jan_01_3"];
			var jan_01_4 = response.data.records[0]["jan_01_4"];
			var jan_01_5 = response.data.records[0]["jan_01_5"];
			var jan_01_6 = response.data.records[0]["jan_01_6"];
			var jan_01_7 = response.data.records[0]["jan_01_7"];
			
			var jan_02_1 = response.data.records[0]["jan_02_1"];
			var jan_02_2 = response.data.records[0]["jan_02_2"];
			var jan_02_3 = response.data.records[0]["jan_02_3"];
			var jan_02_4 = response.data.records[0]["jan_02_4"];
			var jan_02_5 = response.data.records[0]["jan_02_5"];
			var jan_02_6 = response.data.records[0]["jan_02_6"];
			var jan_02_7 = response.data.records[0]["jan_02_7"];
			
			var jan_03_1 = response.data.records[0]["jan_03_1"];
			var jan_03_2 = response.data.records[0]["jan_03_2"];
			var jan_03_3 = response.data.records[0]["jan_03_3"];
			var jan_03_4 = response.data.records[0]["jan_03_4"];
			var jan_03_5 = response.data.records[0]["jan_03_5"];
			var jan_03_6 = response.data.records[0]["jan_03_6"];
			var jan_03_7 = response.data.records[0]["jan_03_7"];
			
			var jan_04_1 = response.data.records[0]["jan_04_1"];
			var jan_04_2 = response.data.records[0]["jan_04_2"];
			var jan_04_3 = response.data.records[0]["jan_04_3"];
			var jan_04_4 = response.data.records[0]["jan_04_4"];
			var jan_04_5 = response.data.records[0]["jan_04_5"];
			var jan_04_6 = response.data.records[0]["jan_04_6"];
			var jan_04_7 = response.data.records[0]["jan_04_7"];
			
			var jan_05_1 = response.data.records[0]["jan_05_1"];
			var jan_05_2 = response.data.records[0]["jan_05_2"];
			var jan_05_3 = response.data.records[0]["jan_05_3"];
			
			//Feb
			
			var feb_01_1 = response.data.records[0]["feb_01_1"];
			var feb_01_2 = response.data.records[0]["feb_01_2"];
			var feb_01_3 = response.data.records[0]["feb_01_3"];
			var feb_01_4 = response.data.records[0]["feb_01_4"];
			var feb_01_5 = response.data.records[0]["feb_01_5"];
			var feb_01_6 = response.data.records[0]["feb_01_6"];
			var feb_01_7 = response.data.records[0]["feb_01_7"];
			
			var feb_02_1 = response.data.records[0]["feb_02_1"];
			var feb_02_2 = response.data.records[0]["feb_02_2"];
			var feb_02_3 = response.data.records[0]["feb_02_3"];
			var feb_02_4 = response.data.records[0]["feb_02_4"];
			var feb_02_5 = response.data.records[0]["feb_02_5"];
			var feb_02_6 = response.data.records[0]["feb_02_6"];
			var feb_02_7 = response.data.records[0]["feb_02_7"];
			
			var feb_03_1 = response.data.records[0]["feb_03_1"];
			var feb_03_2 = response.data.records[0]["feb_03_2"];
			var feb_03_3 = response.data.records[0]["feb_03_3"];
			var feb_03_4 = response.data.records[0]["feb_03_4"];
			var feb_03_5 = response.data.records[0]["feb_03_5"];
			var feb_03_6 = response.data.records[0]["feb_03_6"];
			var feb_03_7 = response.data.records[0]["feb_03_7"];
			
			var feb_04_1 = response.data.records[0]["feb_04_1"];
			var feb_04_2 = response.data.records[0]["feb_04_2"];
			var feb_04_3 = response.data.records[0]["feb_04_3"];
			var feb_04_4 = response.data.records[0]["feb_04_4"];
			var feb_04_5 = response.data.records[0]["feb_04_5"];
			var feb_04_6 = response.data.records[0]["feb_04_6"];
			var feb_04_7 = response.data.records[0]["feb_04_7"];
			
			//mar
			
			var mar_01_1 = response.data.records[0]["mar_01_1"];
			var mar_01_2 = response.data.records[0]["mar_01_2"];
			var mar_01_3 = response.data.records[0]["mar_01_3"];
			var mar_01_4 = response.data.records[0]["mar_01_4"];
			var mar_01_5 = response.data.records[0]["mar_01_5"];
			var mar_01_6 = response.data.records[0]["mar_01_6"];
			var mar_01_7 = response.data.records[0]["mar_01_7"];
			
			var mar_02_1 = response.data.records[0]["mar_02_1"];
			var mar_02_2 = response.data.records[0]["mar_02_2"];
			var mar_02_3 = response.data.records[0]["mar_02_3"];
			var mar_02_4 = response.data.records[0]["mar_02_4"];
			var mar_02_5 = response.data.records[0]["mar_02_5"];
			var mar_02_6 = response.data.records[0]["mar_02_6"];
			var mar_02_7 = response.data.records[0]["mar_02_7"];
			
			var mar_03_1 = response.data.records[0]["mar_03_1"];
			var mar_03_2 = response.data.records[0]["mar_03_2"];
			var mar_03_3 = response.data.records[0]["mar_03_3"];
			var mar_03_4 = response.data.records[0]["mar_03_4"];
			var mar_03_5 = response.data.records[0]["mar_03_5"];
			var mar_03_6 = response.data.records[0]["mar_03_6"];
			var mar_03_7 = response.data.records[0]["mar_03_7"];
			
			var mar_04_1 = response.data.records[0]["mar_04_1"];
			var mar_04_2 = response.data.records[0]["mar_04_2"];
			var mar_04_3 = response.data.records[0]["mar_04_3"];
			var mar_04_4 = response.data.records[0]["mar_04_4"];
			var mar_04_5 = response.data.records[0]["mar_04_5"];
			var mar_04_6 = response.data.records[0]["mar_04_6"];
			var mar_04_7 = response.data.records[0]["mar_04_7"];
			
			var mar_05_1 = response.data.records[0]["mar_05_1"];
			var mar_05_2 = response.data.records[0]["mar_05_2"];
			var mar_05_3 = response.data.records[0]["mar_05_3"];
						
			//apr
			
			var apr_01_1 = response.data.records[0]["apr_01_1"];
			var apr_01_2 = response.data.records[0]["apr_01_2"];
			var apr_01_3 = response.data.records[0]["apr_01_3"];
			var apr_01_4 = response.data.records[0]["apr_01_4"];
			var apr_01_5 = response.data.records[0]["apr_01_5"];
			var apr_01_6 = response.data.records[0]["apr_01_6"];
			var apr_01_7 = response.data.records[0]["apr_01_7"];
			
			var apr_02_1 = response.data.records[0]["apr_02_1"];
			var apr_02_2 = response.data.records[0]["apr_02_2"];
			var apr_02_3 = response.data.records[0]["apr_02_3"];
			var apr_02_4 = response.data.records[0]["apr_02_4"];
			var apr_02_5 = response.data.records[0]["apr_02_5"];
			var apr_02_6 = response.data.records[0]["apr_02_6"];
			var apr_02_7 = response.data.records[0]["apr_02_7"];
			
			var apr_03_1 = response.data.records[0]["apr_03_1"];
			var apr_03_2 = response.data.records[0]["apr_03_2"];
			var apr_03_3 = response.data.records[0]["apr_03_3"];
			var apr_03_4 = response.data.records[0]["apr_03_4"];
			var apr_03_5 = response.data.records[0]["apr_03_5"];
			var apr_03_6 = response.data.records[0]["apr_03_6"];
			var apr_03_7 = response.data.records[0]["apr_03_7"];
			
			var apr_04_1 = response.data.records[0]["apr_04_1"];
			var apr_04_2 = response.data.records[0]["apr_04_2"];
			var apr_04_3 = response.data.records[0]["apr_04_3"];
			var apr_04_4 = response.data.records[0]["apr_04_4"];
			var apr_04_5 = response.data.records[0]["apr_04_5"];
			var apr_04_6 = response.data.records[0]["apr_04_6"];
			var apr_04_7 = response.data.records[0]["apr_04_7"];
			
			var apr_05_1 = response.data.records[0]["apr_05_1"];
			var apr_05_2 = response.data.records[0]["apr_05_2"];
						
			//may
			
			var may_01_1 = response.data.records[0]["may_01_1"];
			var may_01_2 = response.data.records[0]["may_01_2"];
			var may_01_3 = response.data.records[0]["may_01_3"];
			var may_01_4 = response.data.records[0]["may_01_4"];
			var may_01_5 = response.data.records[0]["may_01_5"];
			var may_01_6 = response.data.records[0]["may_01_6"];
			var may_01_7 = response.data.records[0]["may_01_7"];
			
			var may_02_1 = response.data.records[0]["may_02_1"];
			var may_02_2 = response.data.records[0]["may_02_2"];
			var may_02_3 = response.data.records[0]["may_02_3"];
			var may_02_4 = response.data.records[0]["may_02_4"];
			var may_02_5 = response.data.records[0]["may_02_5"];
			var may_02_6 = response.data.records[0]["may_02_6"];
			var may_02_7 = response.data.records[0]["may_02_7"];
			
			var may_03_1 = response.data.records[0]["may_03_1"];
			var may_03_2 = response.data.records[0]["may_03_2"];
			var may_03_3 = response.data.records[0]["may_03_3"];
			var may_03_4 = response.data.records[0]["may_03_4"];
			var may_03_5 = response.data.records[0]["may_03_5"];
			var may_03_6 = response.data.records[0]["may_03_6"];
			var may_03_7 = response.data.records[0]["may_03_7"];
			
			var may_04_1 = response.data.records[0]["may_04_1"];
			var may_04_2 = response.data.records[0]["may_04_2"];
			var may_04_3 = response.data.records[0]["may_04_3"];
			var may_04_4 = response.data.records[0]["may_04_4"];
			var may_04_5 = response.data.records[0]["may_04_5"];
			var may_04_6 = response.data.records[0]["may_04_6"];
			var may_04_7 = response.data.records[0]["may_04_7"];
			
			var may_05_1 = response.data.records[0]["may_05_1"];
			var may_05_2 = response.data.records[0]["may_05_2"];
			var may_05_3 = response.data.records[0]["may_05_3"];
			
			//jun
			
			var jun_01_1 = response.data.records[0]["jun_01_1"];
			var jun_01_2 = response.data.records[0]["jun_01_2"];
			var jun_01_3 = response.data.records[0]["jun_01_3"];
			var jun_01_4 = response.data.records[0]["jun_01_4"];
			var jun_01_5 = response.data.records[0]["jun_01_5"];
			var jun_01_6 = response.data.records[0]["jun_01_6"];
			var jun_01_7 = response.data.records[0]["jun_01_7"];
			
			var jun_02_1 = response.data.records[0]["jun_02_1"];
			var jun_02_2 = response.data.records[0]["jun_02_2"];
			var jun_02_3 = response.data.records[0]["jun_02_3"];
			var jun_02_4 = response.data.records[0]["jun_02_4"];
			var jun_02_5 = response.data.records[0]["jun_02_5"];
			var jun_02_6 = response.data.records[0]["jun_02_6"];
			var jun_02_7 = response.data.records[0]["jun_02_7"];
			
			var jun_03_1 = response.data.records[0]["jun_03_1"];
			var jun_03_2 = response.data.records[0]["jun_03_2"];
			var jun_03_3 = response.data.records[0]["jun_03_3"];
			var jun_03_4 = response.data.records[0]["jun_03_4"];
			var jun_03_5 = response.data.records[0]["jun_03_5"];
			var jun_03_6 = response.data.records[0]["jun_03_6"];
			var jun_03_7 = response.data.records[0]["jun_03_7"];
			
			var jun_04_1 = response.data.records[0]["jun_04_1"];
			var jun_04_2 = response.data.records[0]["jun_04_2"];
			var jun_04_3 = response.data.records[0]["jun_04_3"];
			var jun_04_4 = response.data.records[0]["jun_04_4"];
			var jun_04_5 = response.data.records[0]["jun_04_5"];
			var jun_04_6 = response.data.records[0]["jun_04_6"];
			var jun_04_7 = response.data.records[0]["jun_04_7"];
			
			var jun_05_1 = response.data.records[0]["jun_05_1"];
			var jun_05_2 = response.data.records[0]["jun_05_2"];
			
			//july
			
			var jul_01_1 = response.data.records[0]["jul_01_1"];
			var jul_01_2 = response.data.records[0]["jul_01_2"];
			var jul_01_3 = response.data.records[0]["jul_01_3"];
			var jul_01_4 = response.data.records[0]["jul_01_4"];
			var jul_01_5 = response.data.records[0]["jul_01_5"];
			var jul_01_6 = response.data.records[0]["jul_01_6"];
			var jul_01_7 = response.data.records[0]["jul_01_7"];
			
			var jul_02_1 = response.data.records[0]["jul_02_1"];
			var jul_02_2 = response.data.records[0]["jul_02_2"];
			var jul_02_3 = response.data.records[0]["jul_02_3"];
			var jul_02_4 = response.data.records[0]["jul_02_4"];
			var jul_02_5 = response.data.records[0]["jul_02_5"];
			var jul_02_6 = response.data.records[0]["jul_02_6"];
			var jul_02_7 = response.data.records[0]["jul_02_7"];
			
			var jul_03_1 = response.data.records[0]["jul_03_1"];
			var jul_03_2 = response.data.records[0]["jul_03_2"];
			var jul_03_3 = response.data.records[0]["jul_03_3"];
			var jul_03_4 = response.data.records[0]["jul_03_4"];
			var jul_03_5 = response.data.records[0]["jul_03_5"];
			var jul_03_6 = response.data.records[0]["jul_03_6"];
			var jul_03_7 = response.data.records[0]["jul_03_7"];
			
			var jul_04_1 = response.data.records[0]["jul_04_1"];
			var jul_04_2 = response.data.records[0]["jul_04_2"];
			var jul_04_3 = response.data.records[0]["jul_04_3"];
			var jul_04_4 = response.data.records[0]["jul_04_4"];
			var jul_04_5 = response.data.records[0]["jul_04_5"];
			var jul_04_6 = response.data.records[0]["jul_04_6"];
			var jul_04_7 = response.data.records[0]["jul_04_7"];
			
			var jul_05_1 = response.data.records[0]["jul_05_1"];
			var jul_05_2 = response.data.records[0]["jul_05_2"];
			var jul_05_3 = response.data.records[0]["jul_05_3"];
			
			//august
			
			var aug_01_1 = response.data.records[0]["aug_01_1"];
			var aug_01_2 = response.data.records[0]["aug_01_2"];
			var aug_01_3 = response.data.records[0]["aug_01_3"];
			var aug_01_4 = response.data.records[0]["aug_01_4"];
			var aug_01_5 = response.data.records[0]["aug_01_5"];
			var aug_01_6 = response.data.records[0]["aug_01_6"];
			var aug_01_7 = response.data.records[0]["aug_01_7"];
			
			var aug_02_1 = response.data.records[0]["aug_02_1"];
			var aug_02_2 = response.data.records[0]["aug_02_2"];
			var aug_02_3 = response.data.records[0]["aug_02_3"];
			var aug_02_4 = response.data.records[0]["aug_02_4"];
			var aug_02_5 = response.data.records[0]["aug_02_5"];
			var aug_02_6 = response.data.records[0]["aug_02_6"];
			var aug_02_7 = response.data.records[0]["aug_02_7"];
			
			var aug_03_1 = response.data.records[0]["aug_03_1"];
			var aug_03_2 = response.data.records[0]["aug_03_2"];
			var aug_03_3 = response.data.records[0]["aug_03_3"];
			var aug_03_4 = response.data.records[0]["aug_03_4"];
			var aug_03_5 = response.data.records[0]["aug_03_5"];
			var aug_03_6 = response.data.records[0]["aug_03_6"];
			var aug_03_7 = response.data.records[0]["aug_03_7"];
			
			var aug_04_1 = response.data.records[0]["aug_04_1"];
			var aug_04_2 = response.data.records[0]["aug_04_2"];
			var aug_04_3 = response.data.records[0]["aug_04_3"];
			var aug_04_4 = response.data.records[0]["aug_04_4"];
			var aug_04_5 = response.data.records[0]["aug_04_5"];
			var aug_04_6 = response.data.records[0]["aug_04_6"];
			var aug_04_7 = response.data.records[0]["aug_04_7"];
			
			var aug_05_1 = response.data.records[0]["aug_05_1"];
			var aug_05_2 = response.data.records[0]["aug_05_2"];
			var aug_05_3 = response.data.records[0]["aug_05_3"];
			
			//sep
			
			var sep_01_1 = response.data.records[0]["sep_01_1"];
			var sep_01_2 = response.data.records[0]["sep_01_2"];
			var sep_01_3 = response.data.records[0]["sep_01_3"];
			var sep_01_4 = response.data.records[0]["sep_01_4"];
			var sep_01_5 = response.data.records[0]["sep_01_5"];
			var sep_01_6 = response.data.records[0]["sep_01_6"];
			var sep_01_7 = response.data.records[0]["sep_01_7"];
			
			var sep_02_1 = response.data.records[0]["sep_02_1"];
			var sep_02_2 = response.data.records[0]["sep_02_2"];
			var sep_02_3 = response.data.records[0]["sep_02_3"];
			var sep_02_4 = response.data.records[0]["sep_02_4"];
			var sep_02_5 = response.data.records[0]["sep_02_5"];
			var sep_02_6 = response.data.records[0]["sep_02_6"];
			var sep_02_7 = response.data.records[0]["sep_02_7"];
			
			var sep_03_1 = response.data.records[0]["sep_03_1"];
			var sep_03_2 = response.data.records[0]["sep_03_2"];
			var sep_03_3 = response.data.records[0]["sep_03_3"];
			var sep_03_4 = response.data.records[0]["sep_03_4"];
			var sep_03_5 = response.data.records[0]["sep_03_5"];
			var sep_03_6 = response.data.records[0]["sep_03_6"];
			var sep_03_7 = response.data.records[0]["sep_03_7"];
			
			var sep_04_1 = response.data.records[0]["sep_04_1"];
			var sep_04_2 = response.data.records[0]["sep_04_2"];
			var sep_04_3 = response.data.records[0]["sep_04_3"];
			var sep_04_4 = response.data.records[0]["sep_04_4"];
			var sep_04_5 = response.data.records[0]["sep_04_5"];
			var sep_04_6 = response.data.records[0]["sep_04_6"];
			var sep_04_7 = response.data.records[0]["sep_04_7"];
			
			var sep_05_1 = response.data.records[0]["sep_05_1"];
			var sep_05_2 = response.data.records[0]["sep_05_2"];
			
			//oct
			
			var oct_01_1 = response.data.records[0]["oct_01_1"];
			var oct_01_2 = response.data.records[0]["oct_01_2"];
			var oct_01_3 = response.data.records[0]["oct_01_3"];
			var oct_01_4 = response.data.records[0]["oct_01_4"];
			var oct_01_5 = response.data.records[0]["oct_01_5"];
			var oct_01_6 = response.data.records[0]["oct_01_6"];
			var oct_01_7 = response.data.records[0]["oct_01_7"];
			
			var oct_02_1 = response.data.records[0]["oct_02_1"];
			var oct_02_2 = response.data.records[0]["oct_02_2"];
			var oct_02_3 = response.data.records[0]["oct_02_3"];
			var oct_02_4 = response.data.records[0]["oct_02_4"];
			var oct_02_5 = response.data.records[0]["oct_02_5"];
			var oct_02_6 = response.data.records[0]["oct_02_6"];
			var oct_02_7 = response.data.records[0]["oct_02_7"];
			
			var oct_03_1 = response.data.records[0]["oct_03_1"];
			var oct_03_2 = response.data.records[0]["oct_03_2"];
			var oct_03_3 = response.data.records[0]["oct_03_3"];
			var oct_03_4 = response.data.records[0]["oct_03_4"];
			var oct_03_5 = response.data.records[0]["oct_03_5"];
			var oct_03_6 = response.data.records[0]["oct_03_6"];
			var oct_03_7 = response.data.records[0]["oct_03_7"];
			
			var oct_04_1 = response.data.records[0]["oct_04_1"];
			var oct_04_2 = response.data.records[0]["oct_04_2"];
			var oct_04_3 = response.data.records[0]["oct_04_3"];
			var oct_04_4 = response.data.records[0]["oct_04_4"];
			var oct_04_5 = response.data.records[0]["oct_04_5"];
			var oct_04_6 = response.data.records[0]["oct_04_6"];
			var oct_04_7 = response.data.records[0]["oct_04_7"];
			
			var oct_05_1 = response.data.records[0]["oct_05_1"];
			var oct_05_2 = response.data.records[0]["oct_05_2"];
			var oct_05_3 = response.data.records[0]["oct_05_3"];
			
			//nov
			
			var nov_01_1 = response.data.records[0]["nov_01_1"];
			var nov_01_2 = response.data.records[0]["nov_01_2"];
			var nov_01_3 = response.data.records[0]["nov_01_3"];
			var nov_01_4 = response.data.records[0]["nov_01_4"];
			var nov_01_5 = response.data.records[0]["nov_01_5"];
			var nov_01_6 = response.data.records[0]["nov_01_6"];
			var nov_01_7 = response.data.records[0]["nov_01_7"];
			
			var nov_02_1 = response.data.records[0]["nov_02_1"];
			var nov_02_2 = response.data.records[0]["nov_02_2"];
			var nov_02_3 = response.data.records[0]["nov_02_3"];
			var nov_02_4 = response.data.records[0]["nov_02_4"];
			var nov_02_5 = response.data.records[0]["nov_02_5"];
			var nov_02_6 = response.data.records[0]["nov_02_6"];
			var nov_02_7 = response.data.records[0]["nov_02_7"];
			
			var nov_03_1 = response.data.records[0]["nov_03_1"];
			var nov_03_2 = response.data.records[0]["nov_03_2"];
			var nov_03_3 = response.data.records[0]["nov_03_3"];
			var nov_03_4 = response.data.records[0]["nov_03_4"];
			var nov_03_5 = response.data.records[0]["nov_03_5"];
			var nov_03_6 = response.data.records[0]["nov_03_6"];
			var nov_03_7 = response.data.records[0]["nov_03_7"];
			
			var nov_04_1 = response.data.records[0]["nov_04_1"];
			var nov_04_2 = response.data.records[0]["nov_04_2"];
			var nov_04_3 = response.data.records[0]["nov_04_3"];
			var nov_04_4 = response.data.records[0]["nov_04_4"];
			var nov_04_5 = response.data.records[0]["nov_04_5"];
			var nov_04_6 = response.data.records[0]["nov_04_6"];
			var nov_04_7 = response.data.records[0]["nov_04_7"];
			
			var nov_05_1 = response.data.records[0]["nov_05_1"];
			var nov_05_2 = response.data.records[0]["nov_05_2"];
			
			//dec
			
			var dec_01_1 = response.data.records[0]["dec_01_1"];
			var dec_01_2 = response.data.records[0]["dec_01_2"];
			var dec_01_3 = response.data.records[0]["dec_01_3"];
			var dec_01_4 = response.data.records[0]["dec_01_4"];
			var dec_01_5 = response.data.records[0]["dec_01_5"];
			var dec_01_6 = response.data.records[0]["dec_01_6"];
			var dec_01_7 = response.data.records[0]["dec_01_7"];
			
			var dec_02_1 = response.data.records[0]["dec_02_1"];
			var dec_02_2 = response.data.records[0]["dec_02_2"];
			var dec_02_3 = response.data.records[0]["dec_02_3"];
			var dec_02_4 = response.data.records[0]["dec_02_4"];
			var dec_02_5 = response.data.records[0]["dec_02_5"];
			var dec_02_6 = response.data.records[0]["dec_02_6"];
			var dec_02_7 = response.data.records[0]["dec_02_7"];
			
			var dec_03_1 = response.data.records[0]["dec_03_1"];
			var dec_03_2 = response.data.records[0]["dec_03_2"];
			var dec_03_3 = response.data.records[0]["dec_03_3"];
			var dec_03_4 = response.data.records[0]["dec_03_4"];
			var dec_03_5 = response.data.records[0]["dec_03_5"];
			var dec_03_6 = response.data.records[0]["dec_03_6"];
			var dec_03_7 = response.data.records[0]["dec_03_7"];
			
			var dec_04_1 = response.data.records[0]["dec_04_1"];
			var dec_04_2 = response.data.records[0]["dec_04_2"];
			var dec_04_3 = response.data.records[0]["dec_04_3"];
			var dec_04_4 = response.data.records[0]["dec_04_4"];
			var dec_04_5 = response.data.records[0]["dec_04_5"];
			var dec_04_6 = response.data.records[0]["dec_04_6"];
			var dec_04_7 = response.data.records[0]["dec_04_7"];
			
			var dec_05_1 = response.data.records[0]["dec_05_1"];
			var dec_05_2 = response.data.records[0]["dec_05_2"];
			var dec_05_3 = response.data.records[0]["dec_05_3"];
			
			
			//setting scope variables
			
			//Jan 18
			
			$scope.jan_01_1 = Number(jan_01_1);
			$scope.jan_01_2 = Number(jan_01_2);
			$scope.jan_01_3 = Number(jan_01_3);
			$scope.jan_01_4 = Number(jan_01_4);
			$scope.jan_01_5 = Number(jan_01_5);
			$scope.jan_01_6 = Number(jan_01_6);
			$scope.jan_01_7 = Number(jan_01_7);
			
			$scope.jan_02_1 = Number(jan_02_1);
			$scope.jan_02_2 = Number(jan_02_2);
			$scope.jan_02_3 = Number(jan_02_3);
			$scope.jan_02_4 = Number(jan_02_4);
			$scope.jan_02_5 = Number(jan_02_5);
			$scope.jan_02_6 = Number(jan_02_6);
			$scope.jan_02_7 = Number(jan_02_7);
			
			$scope.jan_03_1 = Number(jan_03_1);
			$scope.jan_03_2 = Number(jan_03_2);
			$scope.jan_03_3 = Number(jan_03_3);
			$scope.jan_03_4 = Number(jan_03_4);
			$scope.jan_03_5 = Number(jan_03_5);
			$scope.jan_03_6 = Number(jan_03_6);
			$scope.jan_03_7 = Number(jan_03_7);
			
			$scope.jan_04_1 = Number(jan_04_1);
			$scope.jan_04_2 = Number(jan_04_2);
			$scope.jan_04_3 = Number(jan_04_3);
			$scope.jan_04_4 = Number(jan_04_4);
			$scope.jan_04_5 = Number(jan_04_5);
			$scope.jan_04_6 = Number(jan_04_6);
			$scope.jan_04_7 = Number(jan_04_7);
			
			$scope.jan_05_1 = Number(jan_05_1);
			$scope.jan_05_2 = Number(jan_05_2);
			$scope.jan_05_3 = Number(jan_05_3);
			
			//Feb 18
			
			$scope.feb_01_1 = Number(feb_01_1);
			$scope.feb_01_2 = Number(feb_01_2);
			$scope.feb_01_3 = Number(feb_01_3);
			$scope.feb_01_4 = Number(feb_01_4);
			$scope.feb_01_5 = Number(feb_01_5);
			$scope.feb_01_6 = Number(feb_01_6);
			$scope.feb_01_7 = Number(feb_01_7);
			
			$scope.feb_02_1 = Number(feb_02_1);
			$scope.feb_02_2 = Number(feb_02_2);
			$scope.feb_02_3 = Number(feb_02_3);
			$scope.feb_02_4 = Number(feb_02_4);
			$scope.feb_02_5 = Number(feb_02_5);
			$scope.feb_02_6 = Number(feb_02_6);
			$scope.feb_02_7 = Number(feb_02_7);
			
			$scope.feb_03_1 = Number(feb_03_1);
			$scope.feb_03_2 = Number(feb_03_2);
			$scope.feb_03_3 = Number(feb_03_3);
			$scope.feb_03_4 = Number(feb_03_4);
			$scope.feb_03_5 = Number(feb_03_5);
			$scope.feb_03_6 = Number(feb_03_6);
			$scope.feb_03_7 = Number(feb_03_7);
			
			$scope.feb_04_1 = Number(feb_04_1);
			$scope.feb_04_2 = Number(feb_04_2);
			$scope.feb_04_3 = Number(feb_04_3);
			$scope.feb_04_4 = Number(feb_04_4);
			$scope.feb_04_5 = Number(feb_04_5);
			$scope.feb_04_6 = Number(feb_04_6);
			$scope.feb_04_7 = Number(feb_04_7);
			
			//mar 18
			
			$scope.mar_01_1 = Number(mar_01_1);
			$scope.mar_01_2 = Number(mar_01_2);
			$scope.mar_01_3 = Number(mar_01_3);
			$scope.mar_01_4 = Number(mar_01_4);
			$scope.mar_01_5 = Number(mar_01_5);
			$scope.mar_01_6 = Number(mar_01_6);
			$scope.mar_01_7 = Number(mar_01_7);
			
			$scope.mar_02_1 = Number(mar_02_1);
			$scope.mar_02_2 = Number(mar_02_2);
			$scope.mar_02_3 = Number(mar_02_3);
			$scope.mar_02_4 = Number(mar_02_4);
			$scope.mar_02_5 = Number(mar_02_5);
			$scope.mar_02_6 = Number(mar_02_6);
			$scope.mar_02_7 = Number(mar_02_7);
			
			$scope.mar_03_1 = Number(mar_03_1);
			$scope.mar_03_2 = Number(mar_03_2);
			$scope.mar_03_3 = Number(mar_03_3);
			$scope.mar_03_4 = Number(mar_03_4);
			$scope.mar_03_5 = Number(mar_03_5);
			$scope.mar_03_6 = Number(mar_03_6);
			$scope.mar_03_7 = Number(mar_03_7);
			
			$scope.mar_04_1 = Number(mar_04_1);
			$scope.mar_04_2 = Number(mar_04_2);
			$scope.mar_04_3 = Number(mar_04_3);
			$scope.mar_04_4 = Number(mar_04_4);
			$scope.mar_04_5 = Number(mar_04_5);
			$scope.mar_04_6 = Number(mar_04_6);
			$scope.mar_04_7 = Number(mar_04_7);
			
			$scope.mar_05_1 = Number(mar_05_1);
			$scope.mar_05_2 = Number(mar_05_2);
			$scope.mar_05_3 = Number(mar_05_3);
			
			//apr 18
			
			$scope.apr_01_1 = Number(apr_01_1);
			$scope.apr_01_2 = Number(apr_01_2);
			$scope.apr_01_3 = Number(apr_01_3);
			$scope.apr_01_4 = Number(apr_01_4);
			$scope.apr_01_5 = Number(apr_01_5);
			$scope.apr_01_6 = Number(apr_01_6);
			$scope.apr_01_7 = Number(apr_01_7);
			
			$scope.apr_02_1 = Number(apr_02_1);
			$scope.apr_02_2 = Number(apr_02_2);
			$scope.apr_02_3 = Number(apr_02_3);
			$scope.apr_02_4 = Number(apr_02_4);
			$scope.apr_02_5 = Number(apr_02_5);
			$scope.apr_02_6 = Number(apr_02_6);
			$scope.apr_02_7 = Number(apr_02_7);
			
			$scope.apr_03_1 = Number(apr_03_1);
			$scope.apr_03_2 = Number(apr_03_2);
			$scope.apr_03_3 = Number(apr_03_3);
			$scope.apr_03_4 = Number(apr_03_4);
			$scope.apr_03_5 = Number(apr_03_5);
			$scope.apr_03_6 = Number(apr_03_6);
			$scope.apr_03_7 = Number(apr_03_7);
			
			$scope.apr_04_1 = Number(apr_04_1);
			$scope.apr_04_2 = Number(apr_04_2);
			$scope.apr_04_3 = Number(apr_04_3);
			$scope.apr_04_4 = Number(apr_04_4);
			$scope.apr_04_5 = Number(apr_04_5);
			$scope.apr_04_6 = Number(apr_04_6);
			$scope.apr_04_7 = Number(apr_04_7);
			
			$scope.apr_05_1 = Number(apr_05_1);
			$scope.apr_05_2 = Number(apr_05_2);
			
			//may 18
			
			$scope.may_01_1 = Number(may_01_1);
			$scope.may_01_2 = Number(may_01_2);
			$scope.may_01_3 = Number(may_01_3);
			$scope.may_01_4 = Number(may_01_4);
			$scope.may_01_5 = Number(may_01_5);
			$scope.may_01_6 = Number(may_01_6);
			$scope.may_01_7 = Number(may_01_7);
			
			$scope.may_02_1 = Number(may_02_1);
			$scope.may_02_2 = Number(may_02_2);
			$scope.may_02_3 = Number(may_02_3);
			$scope.may_02_4 = Number(may_02_4);
			$scope.may_02_5 = Number(may_02_5);
			$scope.may_02_6 = Number(may_02_6);
			$scope.may_02_7 = Number(may_02_7);
			
			$scope.may_03_1 = Number(may_03_1);
			$scope.may_03_2 = Number(may_03_2);
			$scope.may_03_3 = Number(may_03_3);
			$scope.may_03_4 = Number(may_03_4);
			$scope.may_03_5 = Number(may_03_5);
			$scope.may_03_6 = Number(may_03_6);
			$scope.may_03_7 = Number(may_03_7);
			
			$scope.may_04_1 = Number(may_04_1);
			$scope.may_04_2 = Number(may_04_2);
			$scope.may_04_3 = Number(may_04_3);
			$scope.may_04_4 = Number(may_04_4);
			$scope.may_04_5 = Number(may_04_5);
			$scope.may_04_6 = Number(may_04_6);
			$scope.may_04_7 = Number(may_04_7);
			
			$scope.may_05_1 = Number(may_05_1);
			$scope.may_05_2 = Number(may_05_2);
			$scope.may_05_3 = Number(may_05_3);
			
			//jun 18
			
			$scope.jun_01_1 = Number(jun_01_1);
			$scope.jun_01_2 = Number(jun_01_2);
			$scope.jun_01_3 = Number(jun_01_3);
			$scope.jun_01_4 = Number(jun_01_4);
			$scope.jun_01_5 = Number(jun_01_5);
			$scope.jun_01_6 = Number(jun_01_6);
			$scope.jun_01_7 = Number(jun_01_7);
			
			$scope.jun_02_1 = Number(jun_02_1);
			$scope.jun_02_2 = Number(jun_02_2);
			$scope.jun_02_3 = Number(jun_02_3);
			$scope.jun_02_4 = Number(jun_02_4);
			$scope.jun_02_5 = Number(jun_02_5);
			$scope.jun_02_6 = Number(jun_02_6);
			$scope.jun_02_7 = Number(jun_02_7);
			
			$scope.jun_03_1 = Number(jun_03_1);
			$scope.jun_03_2 = Number(jun_03_2);
			$scope.jun_03_3 = Number(jun_03_3);
			$scope.jun_03_4 = Number(jun_03_4);
			$scope.jun_03_5 = Number(jun_03_5);
			$scope.jun_03_6 = Number(jun_03_6);
			$scope.jun_03_7 = Number(jun_03_7);
			
			$scope.jun_04_1 = Number(jun_04_1);
			$scope.jun_04_2 = Number(jun_04_2);
			$scope.jun_04_3 = Number(jun_04_3);
			$scope.jun_04_4 = Number(jun_04_4);
			$scope.jun_04_5 = Number(jun_04_5);
			$scope.jun_04_6 = Number(jun_04_6);
			$scope.jun_04_7 = Number(jun_04_7);
			
			$scope.jun_05_1 = Number(jun_05_1);
			$scope.jun_05_2 = Number(jun_05_2);
			
			//jul 18
			
			$scope.jul_01_1 = Number(jul_01_1);
			$scope.jul_01_2 = Number(jul_01_2);
			$scope.jul_01_3 = Number(jul_01_3);
			$scope.jul_01_4 = Number(jul_01_4);
			$scope.jul_01_5 = Number(jul_01_5);
			$scope.jul_01_6 = Number(jul_01_6);
			$scope.jul_01_7 = Number(jul_01_7);
			
			$scope.jul_02_1 = Number(jul_02_1);
			$scope.jul_02_2 = Number(jul_02_2);
			$scope.jul_02_3 = Number(jul_02_3);
			$scope.jul_02_4 = Number(jul_02_4);
			$scope.jul_02_5 = Number(jul_02_5);
			$scope.jul_02_6 = Number(jul_02_6);
			$scope.jul_02_7 = Number(jul_02_7);
			
			$scope.jul_03_1 = Number(jul_03_1);
			$scope.jul_03_2 = Number(jul_03_2);
			$scope.jul_03_3 = Number(jul_03_3);
			$scope.jul_03_4 = Number(jul_03_4);
			$scope.jul_03_5 = Number(jul_03_5);
			$scope.jul_03_6 = Number(jul_03_6);
			$scope.jul_03_7 = Number(jul_03_7);
			
			$scope.jul_04_1 = Number(jul_04_1);
			$scope.jul_04_2 = Number(jul_04_2);
			$scope.jul_04_3 = Number(jul_04_3);
			$scope.jul_04_4 = Number(jul_04_4);
			$scope.jul_04_5 = Number(jul_04_5);
			$scope.jul_04_6 = Number(jul_04_6);
			$scope.jul_04_7 = Number(jul_04_7);
			
			$scope.jul_05_1 = Number(jul_05_1);
			$scope.jul_05_2 = Number(jul_05_2);
			$scope.jul_05_3 = Number(jul_05_3);
			
			//aug 18
			
			$scope.aug_01_1 = Number(aug_01_1);
			$scope.aug_01_2 = Number(aug_01_2);
			$scope.aug_01_3 = Number(aug_01_3);
			$scope.aug_01_4 = Number(aug_01_4);
			$scope.aug_01_5 = Number(aug_01_5);
			$scope.aug_01_6 = Number(aug_01_6);
			$scope.aug_01_7 = Number(aug_01_7);
			
			$scope.aug_02_1 = Number(aug_02_1);
			$scope.aug_02_2 = Number(aug_02_2);
			$scope.aug_02_3 = Number(aug_02_3);
			$scope.aug_02_4 = Number(aug_02_4);
			$scope.aug_02_5 = Number(aug_02_5);
			$scope.aug_02_6 = Number(aug_02_6);
			$scope.aug_02_7 = Number(aug_02_7);
			
			$scope.aug_03_1 = Number(aug_03_1);
			$scope.aug_03_2 = Number(aug_03_2);
			$scope.aug_03_3 = Number(aug_03_3);
			$scope.aug_03_4 = Number(aug_03_4);
			$scope.aug_03_5 = Number(aug_03_5);
			$scope.aug_03_6 = Number(aug_03_6);
			$scope.aug_03_7 = Number(aug_03_7);
			
			$scope.aug_04_1 = Number(aug_04_1);
			$scope.aug_04_2 = Number(aug_04_2);
			$scope.aug_04_3 = Number(aug_04_3);
			$scope.aug_04_4 = Number(aug_04_4);
			$scope.aug_04_5 = Number(aug_04_5);
			$scope.aug_04_6 = Number(aug_04_6);
			$scope.aug_04_7 = Number(aug_04_7);
			
			$scope.aug_05_1 = Number(aug_05_1);
			$scope.aug_05_2 = Number(aug_05_2);
			$scope.aug_05_3 = Number(aug_05_3);
			
			//sep 18
			
			$scope.sep_01_1 = Number(sep_01_1);
			$scope.sep_01_2 = Number(sep_01_2);
			$scope.sep_01_3 = Number(sep_01_3);
			$scope.sep_01_4 = Number(sep_01_4);
			$scope.sep_01_5 = Number(sep_01_5);
			$scope.sep_01_6 = Number(sep_01_6);
			$scope.sep_01_7 = Number(sep_01_7);
			
			$scope.sep_02_1 = Number(sep_02_1);
			$scope.sep_02_2 = Number(sep_02_2);
			$scope.sep_02_3 = Number(sep_02_3);
			$scope.sep_02_4 = Number(sep_02_4);
			$scope.sep_02_5 = Number(sep_02_5);
			$scope.sep_02_6 = Number(sep_02_6);
			$scope.sep_02_7 = Number(sep_02_7);
			
			$scope.sep_03_1 = Number(sep_03_1);
			$scope.sep_03_2 = Number(sep_03_2);
			$scope.sep_03_3 = Number(sep_03_3);
			$scope.sep_03_4 = Number(sep_03_4);
			$scope.sep_03_5 = Number(sep_03_5);
			$scope.sep_03_6 = Number(sep_03_6);
			$scope.sep_03_7 = Number(sep_03_7);
			
			$scope.sep_04_1 = Number(sep_04_1);
			$scope.sep_04_2 = Number(sep_04_2);
			$scope.sep_04_3 = Number(sep_04_3);
			$scope.sep_04_4 = Number(sep_04_4);
			$scope.sep_04_5 = Number(sep_04_5);
			$scope.sep_04_6 = Number(sep_04_6);
			$scope.sep_04_7 = Number(sep_04_7);
			
			$scope.sep_05_1 = Number(sep_05_1);
			$scope.sep_05_2 = Number(sep_05_2);
			
			//oct 18
			
			$scope.oct_01_1 = Number(oct_01_1);
			$scope.oct_01_2 = Number(oct_01_2);
			$scope.oct_01_3 = Number(oct_01_3);
			$scope.oct_01_4 = Number(oct_01_4);
			$scope.oct_01_5 = Number(oct_01_5);
			$scope.oct_01_6 = Number(oct_01_6);
			$scope.oct_01_7 = Number(oct_01_7);
			
			$scope.oct_02_1 = Number(oct_02_1);
			$scope.oct_02_2 = Number(oct_02_2);
			$scope.oct_02_3 = Number(oct_02_3);
			$scope.oct_02_4 = Number(oct_02_4);
			$scope.oct_02_5 = Number(oct_02_5);
			$scope.oct_02_6 = Number(oct_02_6);
			$scope.oct_02_7 = Number(oct_02_7);
			
			$scope.oct_03_1 = Number(oct_03_1);
			$scope.oct_03_2 = Number(oct_03_2);
			$scope.oct_03_3 = Number(oct_03_3);
			$scope.oct_03_4 = Number(oct_03_4);
			$scope.oct_03_5 = Number(oct_03_5);
			$scope.oct_03_6 = Number(oct_03_6);
			$scope.oct_03_7 = Number(oct_03_7);
			
			$scope.oct_04_1 = Number(oct_04_1);
			$scope.oct_04_2 = Number(oct_04_2);
			$scope.oct_04_3 = Number(oct_04_3);
			$scope.oct_04_4 = Number(oct_04_4);
			$scope.oct_04_5 = Number(oct_04_5);
			$scope.oct_04_6 = Number(oct_04_6);
			$scope.oct_04_7 = Number(oct_04_7);
			
			$scope.oct_05_1 = Number(oct_05_1);
			$scope.oct_05_2 = Number(oct_05_2);
			$scope.oct_05_3 = Number(oct_05_3);
			
			//nov 18
			
			$scope.nov_01_1 = Number(nov_01_1);
			$scope.nov_01_2 = Number(nov_01_2);
			$scope.nov_01_3 = Number(nov_01_3);
			$scope.nov_01_4 = Number(nov_01_4);
			$scope.nov_01_5 = Number(nov_01_5);
			$scope.nov_01_6 = Number(nov_01_6);
			$scope.nov_01_7 = Number(nov_01_7);
			
			$scope.nov_02_1 = Number(nov_02_1);
			$scope.nov_02_2 = Number(nov_02_2);
			$scope.nov_02_3 = Number(nov_02_3);
			$scope.nov_02_4 = Number(nov_02_4);
			$scope.nov_02_5 = Number(nov_02_5);
			$scope.nov_02_6 = Number(nov_02_6);
			$scope.nov_02_7 = Number(nov_02_7);
			
			$scope.nov_03_1 = Number(nov_03_1);
			$scope.nov_03_2 = Number(nov_03_2);
			$scope.nov_03_3 = Number(nov_03_3);
			$scope.nov_03_4 = Number(nov_03_4);
			$scope.nov_03_5 = Number(nov_03_5);
			$scope.nov_03_6 = Number(nov_03_6);
			$scope.nov_03_7 = Number(nov_03_7);
			
			$scope.nov_04_1 = Number(nov_04_1);
			$scope.nov_04_2 = Number(nov_04_2);
			$scope.nov_04_3 = Number(nov_04_3);
			$scope.nov_04_4 = Number(nov_04_4);
			$scope.nov_04_5 = Number(nov_04_5);
			$scope.nov_04_6 = Number(nov_04_6);
			$scope.nov_04_7 = Number(nov_04_7);
			
			$scope.nov_05_1 = Number(nov_05_1);
			$scope.nov_05_2 = Number(nov_05_2);
			
			//dec 18
			
			$scope.dec_01_1 = Number(dec_01_1);
			$scope.dec_01_2 = Number(dec_01_2);
			$scope.dec_01_3 = Number(dec_01_3);
			$scope.dec_01_4 = Number(dec_01_4);
			$scope.dec_01_5 = Number(dec_01_5);
			$scope.dec_01_6 = Number(dec_01_6);
			$scope.dec_01_7 = Number(dec_01_7);
			
			$scope.dec_02_1 = Number(dec_02_1);
			$scope.dec_02_2 = Number(dec_02_2);
			$scope.dec_02_3 = Number(dec_02_3);
			$scope.dec_02_4 = Number(dec_02_4);
			$scope.dec_02_5 = Number(dec_02_5);
			$scope.dec_02_6 = Number(dec_02_6);
			$scope.dec_02_7 = Number(dec_02_7);
			
			$scope.dec_03_1 = Number(dec_03_1);
			$scope.dec_03_2 = Number(dec_03_2);
			$scope.dec_03_3 = Number(dec_03_3);
			$scope.dec_03_4 = Number(dec_03_4);
			$scope.dec_03_5 = Number(dec_03_5);
			$scope.dec_03_6 = Number(dec_03_6);
			$scope.dec_03_7 = Number(dec_03_7);
			
			$scope.dec_04_1 = Number(dec_04_1);
			$scope.dec_04_2 = Number(dec_04_2);
			$scope.dec_04_3 = Number(dec_04_3);
			$scope.dec_04_4 = Number(dec_04_4);
			$scope.dec_04_5 = Number(dec_04_5);
			$scope.dec_04_6 = Number(dec_04_6);
			$scope.dec_04_7 = Number(dec_04_7);
			
			$scope.dec_05_1 = Number(dec_05_1);
			$scope.dec_05_2 = Number(dec_05_2);
			$scope.dec_05_3 = Number(dec_05_3);
					
            })
        };
});
</script>


<script>
function a_11_f() {
console.log("---a 11 f")

var a_11_loader = $(document).outerWidth()/2-60;
//console.log(a_11_loader);
var a_12_loader = $(window).outerHeight()/2-60;
$('.loader').css("left",a_11_loader);
$('.loader').css("top",a_12_loader);
}


//CHANGING INPUT COLOR
function inputBackground()
{
	$('table input').each(function(index)
	{
		var input = $(this);
		
		if(input.val()!=0)
		{
			//alert('Type: ' + input.attr('type') + 'Name: ' + input.attr('name') + 'Value: ' + input.val());
		
			input.parent().css( "background-color", "orange" );
			input.parent().css( "border", "0.5px black solid" );
		}
		
		
	});
}
//CHANGING INPUT COLOR END

</script>

<script>
$(document).ready(function()
{
	//MONTH TO SHOW ON HOVER
		$('#table_12').find('td').hover(function()
		{
			$(this).find('hr').css("border", "1px black solid"); 
			$(this).find('input').css("color", "black"); 
			$("#month_12").addClass("month-hovered");
		},
		function()
		{
			$(this).find('hr').css("border", "1px white solid"); 
			$(this).find('input').css("color", "white"); 
		});
		
		$('#table_12').hover(function()
		{
			$("#month_12").addClass("month-hovered");
		},
		function()
		{
			$("#month_12").removeClass("month-hovered");
		});
	//MONTH TO SHOW ON HOVER END
	
	//MONTH TO SHOW ON HOVER
		$('#table_11').find('td').hover(function()
		{
			$(this).find('hr').css("border", "1px black solid"); 
			$(this).find('input').css("color", "black"); 
			$("#month_11").addClass("month-hovered");
		},
		function()
		{
			$(this).find('hr').css("border", "1px white solid"); 
			$(this).find('input').css("color", "white"); 
		});
		
		$('#table_11').hover(function()
		{
			$("#month_11").addClass("month-hovered");
		},
		function()
		{
			$("#month_11").removeClass("month-hovered");
		});
	//MONTH TO SHOW ON HOVER END
	
	//MONTH TO SHOW ON HOVER
		$('#table_10').find('td').hover(function()
		{
			$(this).find('hr').css("border", "1px black solid"); 
			$(this).find('input').css("color", "black"); 
			$("#month_10").addClass("month-hovered");
		},
		function()
		{
			$(this).find('hr').css("border", "1px white solid"); 
			$(this).find('input').css("color", "white"); 
		});
		
		$('#table_10').hover(function()
		{
			$("#month_10").addClass("month-hovered");
		},
		function()
		{
			$("#month_10").removeClass("month-hovered");
		});
	//MONTH TO SHOW ON HOVER END
	
	//MONTH TO SHOW ON HOVER
		$('#table_09').find('td').hover(function()
		{
			$(this).find('hr').css("border", "1px black solid"); 
			$(this).find('input').css("color", "black"); 
			$("#month_09").addClass("month-hovered");
		},
		function()
		{
			$(this).find('hr').css("border", "1px white solid"); 
			$(this).find('input').css("color", "white"); 
		});
		
		$('#table_09').hover(function()
		{
			$("#month_09").addClass("month-hovered");
		},
		function()
		{
			$("#month_09").removeClass("month-hovered");
		});
	//MONTH TO SHOW ON HOVER END
	
	//MONTH TO SHOW ON HOVER
		$('#table_08').find('td').hover(function()
		{
			$(this).find('hr').css("border", "1px black solid"); 
			$(this).find('input').css("color", "black"); 
			$("#month_08").addClass("month-hovered");
		},
		function()
		{
			$(this).find('hr').css("border", "1px white solid"); 
			$(this).find('input').css("color", "white"); 
		});
		
		$('#table_08').hover(function()
		{
			$("#month_08").addClass("month-hovered");
		},
		function()
		{
			$("#month_08").removeClass("month-hovered");
		});
	//MONTH TO SHOW ON HOVER END
	
	//MONTH TO SHOW ON HOVER
		$('#table_07').find('td').hover(function()
		{
			$(this).find('hr').css("border", "1px black solid"); 
			$(this).find('input').css("color", "black"); 
			$("#month_07").addClass("month-hovered");
		},
		function()
		{
			$(this).find('hr').css("border", "1px white solid"); 
			$(this).find('input').css("color", "white"); 
		});
		
		$('#table_07').hover(function()
		{
			$("#month_07").addClass("month-hovered");
		},
		function()
		{
			$("#month_07").removeClass("month-hovered");
		});
	//MONTH TO SHOW ON HOVER END
	
	//MONTH TO SHOW ON HOVER
		$('#table_06').find('td').hover(function()
		{
			$(this).find('hr').css("border", "1px black solid"); 
			$(this).find('input').css("color", "black"); 
			$("#month_06").addClass("month-hovered");
		},
		function()
		{
			$(this).find('hr').css("border", "1px white solid"); 
			$(this).find('input').css("color", "white"); 
		});
		
		$('#table_06').hover(function()
		{
			$("#month_06").addClass("month-hovered");
		},
		function()
		{
			$("#month_06").removeClass("month-hovered");
		});
	//MONTH TO SHOW ON HOVER END
	
	//MONTH TO SHOW ON HOVER
		$('#table_05').find('td').hover(function()
		{
			$(this).find('hr').css("border", "1px black solid"); 
			$(this).find('input').css("color", "black"); 
			$("#month_05").addClass("month-hovered");
		},
		function()
		{
			$(this).find('hr').css("border", "1px white solid"); 
			$(this).find('input').css("color", "white"); 
		});
		
		$('#table_05').hover(function()
		{
			$("#month_05").addClass("month-hovered");
		},
		function()
		{
			$("#month_05").removeClass("month-hovered");
		});
	//MONTH TO SHOW ON HOVER END
	
	//MONTH TO SHOW ON HOVER
		$('#table_04').find('td').hover(function()
		{
			$(this).find('hr').css("border", "1px black solid"); 
			$(this).find('input').css("color", "black"); 
			$("#month_04").addClass("month-hovered");
		},
		function()
		{
			$(this).find('hr').css("border", "1px white solid"); 
			$(this).find('input').css("color", "white"); 
		});
		
		$('#table_04').hover(function()
		{
			$("#month_04").addClass("month-hovered");
		},
		function()
		{
			$("#month_04").removeClass("month-hovered");
		});
	//MONTH TO SHOW ON HOVER END

	//MONTH TO SHOW ON HOVER
		$('#table_03').find('td').hover(function()
		{
			$(this).find('hr').css("border", "1px black solid"); 
			$(this).find('input').css("color", "black"); 
			$("#month_03").addClass("month-hovered");
		},
		function()
		{
			$(this).find('hr').css("border", "1px white solid"); 
			$(this).find('input').css("color", "white"); 
		});
		
		$('#table_03').hover(function()
		{
			$("#month_03").addClass("month-hovered");
		},
		function()
		{
			$("#month_03").removeClass("month-hovered");
		});
	//MONTH TO SHOW ON HOVER END
	
	//MONTH TO SHOW ON HOVER
		$('#table_02').find('td').hover(function()
		{
			$(this).find('hr').css("border", "1px black solid"); 
			$(this).find('input').css("color", "black"); 
			$("#month_02").addClass("month-hovered");
		},
		function()
		{
			$(this).find('hr').css("border", "1px white solid"); 
			$(this).find('input').css("color", "white"); 
		});
		
		$('#table_02').hover(function()
		{
			$("#month_02").addClass("month-hovered");
		},
		function()
		{
			$("#month_02").removeClass("month-hovered");
		});
	//MONTH TO SHOW ON HOVER END
	
	//MONTH TO SHOW ON HOVER
		$('#table_01').find('td').hover(function()
		{
			$(this).find('hr').css("border", "1px black solid"); 
			$(this).find('input').css("color", "black"); 
			$("#month_01").addClass("month-hovered");
		},
		function()
		{
			$(this).find('hr').css("border", "1px white solid"); 
			$(this).find('input').css("color", "white"); 
		});
		
		$('#table_01').hover(function()
		{
			$("#month_01").addClass("month-hovered");
		},
		function()
		{
			$("#month_01").removeClass("month-hovered");
		});
	//MONTH TO SHOW ON HOVER END
	
//MORE STUFF	
	$("#header_1").addClass("M");
	
	$("#div_M").click(function(){
		$("#header_1").removeClass("P");
		$("#header_1").addClass("M");
		$("#header_2").click();
		$("#div_M").css("background-color","green");
		
		$("#div_P").css("background-color","");
	});
	
	
	$("#div_P").click(function(){
		$("#header_1").removeClass("M");
		$("#header_1").addClass("P");
		$("#header_2").click();
		$("#div_P").css("background-color","purple");
		
		$("#div_M").css("background-color","");
	});
	
	$("#div_M").click();
		
	//opacity for loader
	$('#div_1').animate({opacity:1},1000);
	$('.loader').css ("display","none");
		
	setTimeout(inputBackground, 1000);

	
});
</script>

<script>
$( window ).resize(function() 
{
  	//loader
	a_11_f();
	
});
</script>