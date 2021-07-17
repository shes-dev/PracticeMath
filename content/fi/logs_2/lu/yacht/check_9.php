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
			
			var Daily_IN_1 = response.data.records[0]["Daily_IN_1"];
			var Daily_IN_2 = response.data.records[0]["Daily_IN_2"];
			var Daily_IN_3 = response.data.records[0]["Daily_IN_3"];
			var Daily_IN_4 = response.data.records[0]["Daily_IN_4"];
			var Daily_IN_5 = response.data.records[0]["Daily_IN_5"];
			var Daily_IN_6 = response.data.records[0]["Daily_IN_6"];
			var Daily_IN_7 = response.data.records[0]["Daily_IN_7"];
			
			var Daily_EX_1 = response.data.records[0]["Daily_EX_1"];
			var Daily_EX_2 = response.data.records[0]["Daily_EX_2"];
			var Daily_EX_3 = response.data.records[0]["Daily_EX_3"];
			var Daily_EX_4 = response.data.records[0]["Daily_EX_4"];
			var Daily_EX_5 = response.data.records[0]["Daily_EX_5"];
			var Daily_EX_6 = response.data.records[0]["Daily_EX_6"];
			var Daily_EX_7 = response.data.records[0]["Daily_EX_7"];
			
			var IN_Prediction_1_1 = response.data.records[0]["IN_Prediction_1_1"];
			var IN_Prediction_1_2 = response.data.records[0]["IN_Prediction_1_2"];
			var IN_Prediction_1_3 = response.data.records[0]["IN_Prediction_1_3"];
			var IN_Prediction_1_4 = response.data.records[0]["IN_Prediction_1_4"];
			var IN_Prediction_1_5 = response.data.records[0]["IN_Prediction_1_5"];
			var IN_Prediction_1_6 = response.data.records[0]["IN_Prediction_1_6"];
			var IN_Prediction_1_7 = response.data.records[0]["IN_Prediction_1_7"];
			
			var dec_49_1 = response.data.records[0]["dec_49_1"];
			var dec_49_2 = response.data.records[0]["dec_49_2"];
			var dec_49_3 = response.data.records[0]["dec_49_3"];
			var dec_49_4 = response.data.records[0]["dec_49_4"];
			var dec_49_5 = response.data.records[0]["dec_49_5"];
			var dec_49_6 = response.data.records[0]["dec_49_6"];
			var dec_49_7 = response.data.records[0]["dec_49_7"];
			
			var dec_50_1 = response.data.records[0]["dec_50_1"];
			var dec_50_2 = response.data.records[0]["dec_50_2"];
			var dec_50_3 = response.data.records[0]["dec_50_3"];
			var dec_50_4 = response.data.records[0]["dec_50_4"];
			var dec_50_5 = response.data.records[0]["dec_50_5"];
			var dec_50_6 = response.data.records[0]["dec_50_6"];
			var dec_50_7 = response.data.records[0]["dec_50_7"];
			
			var dec_51_1 = response.data.records[0]["dec_51_1"];
			var dec_51_2 = response.data.records[0]["dec_51_2"];
			var dec_51_3 = response.data.records[0]["dec_51_3"];
			var dec_51_4 = response.data.records[0]["dec_51_4"];
			var dec_51_5 = response.data.records[0]["dec_51_5"];
			var dec_51_6 = response.data.records[0]["dec_51_6"];
			var dec_51_7 = response.data.records[0]["dec_51_7"];
			
			var dec_52_1 = response.data.records[0]["dec_52_1"];
			var dec_52_2 = response.data.records[0]["dec_52_2"];
			var dec_52_3 = response.data.records[0]["dec_52_3"];
			var dec_52_4 = response.data.records[0]["dec_52_4"];
			var dec_52_5 = response.data.records[0]["dec_52_5"];
			var dec_52_6 = response.data.records[0]["dec_52_6"];
			var dec_52_7 = response.data.records[0]["dec_52_7"];
			
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
			
			//setting scope variables
			
			$scope.daily_income_1 = Number(Daily_IN_1);
			$scope.daily_income_2 = Number(Daily_IN_2);
			$scope.daily_income_3 = Number(Daily_IN_3);
			$scope.daily_income_4 = Number(Daily_IN_4);
			$scope.daily_income_5 = Number(Daily_IN_5);
			$scope.daily_income_6 = Number(Daily_IN_6);
			$scope.daily_income_7 = Number(Daily_IN_7);
			
			$scope.daily_expense_1 = Number(Daily_EX_1);
			$scope.daily_expense_2 = Number(Daily_EX_2);
			$scope.daily_expense_3 = Number(Daily_EX_3);
			$scope.daily_expense_4 = Number(Daily_EX_4);
			$scope.daily_expense_5 = Number(Daily_EX_5);
			$scope.daily_expense_6 = Number(Daily_EX_6);
			$scope.daily_expense_7 = Number(Daily_EX_7);
			
			$scope.daily_nov_48_1 = Number(IN_Prediction_1_1);
			$scope.daily_nov_48_2 = Number(IN_Prediction_1_2);
			$scope.daily_nov_48_3 = Number(IN_Prediction_1_3);
			$scope.daily_nov_48_4 = Number(IN_Prediction_1_4);
			$scope.daily_nov_48_5 = Number(IN_Prediction_1_5);
			$scope.daily_nov_48_6 = Number(IN_Prediction_1_6);
			$scope.daily_nov_48_7 = Number(IN_Prediction_1_7);
			
			$scope.dec_49_1 = Number(dec_49_1);
			$scope.dec_49_2 = Number(dec_49_2);
			$scope.dec_49_3 = Number(dec_49_3);
			$scope.dec_49_4 = Number(dec_49_4);
			$scope.dec_49_5 = Number(dec_49_5);
			$scope.dec_49_6 = Number(dec_49_6);
			$scope.dec_49_7 = Number(dec_49_7);
			
			$scope.dec_50_1 = Number(dec_50_1);
			$scope.dec_50_2 = Number(dec_50_2);
			$scope.dec_50_3 = Number(dec_50_3);
			$scope.dec_50_4 = Number(dec_50_4);
			$scope.dec_50_5 = Number(dec_50_5);
			$scope.dec_50_6 = Number(dec_50_6);
			$scope.dec_50_7 = Number(dec_50_7);
			
			$scope.dec_51_1 = Number(dec_51_1);
			$scope.dec_51_2 = Number(dec_51_2);
			$scope.dec_51_3 = Number(dec_51_3);
			$scope.dec_51_4 = Number(dec_51_4);
			$scope.dec_51_5 = Number(dec_51_5);
			$scope.dec_51_6 = Number(dec_51_6);
			$scope.dec_51_7 = Number(dec_51_7);
			
			$scope.dec_52_1 = Number(dec_52_1);
			$scope.dec_52_2 = Number(dec_52_2);
			$scope.dec_52_3 = Number(dec_52_3);
			$scope.dec_52_4 = Number(dec_52_4);
			$scope.dec_52_5 = Number(dec_52_5);
			$scope.dec_52_6 = Number(dec_52_6);
			$scope.dec_52_7 = Number(dec_52_7);
			
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
			
		});
		
		$scope.d=[10, 20, 30, 40];
		$scope.daily_expense_1=0;
		
		//Trying func
		
		$scope.GetAllData = function () {
           			
			$http.get('check_1_p.php')
            .then(function (response, status, headers, config) {
                $scope.Details = response;
				console.log(response);
				
				//converting to numbers
			
			var Daily_IN_1 = response.data.records[0]["Daily_IN_1"];
			var Daily_IN_2 = response.data.records[0]["Daily_IN_2"];
			var Daily_IN_3 = response.data.records[0]["Daily_IN_3"];
			var Daily_IN_4 = response.data.records[0]["Daily_IN_4"];
			var Daily_IN_5 = response.data.records[0]["Daily_IN_5"];
			var Daily_IN_6 = response.data.records[0]["Daily_IN_6"];
			var Daily_IN_7 = response.data.records[0]["Daily_IN_7"];
			
			var Daily_EX_1 = response.data.records[0]["Daily_EX_1"];
			var Daily_EX_2 = response.data.records[0]["Daily_EX_2"];
			var Daily_EX_3 = response.data.records[0]["Daily_EX_3"];
			var Daily_EX_4 = response.data.records[0]["Daily_EX_4"];
			var Daily_EX_5 = response.data.records[0]["Daily_EX_5"];
			var Daily_EX_6 = response.data.records[0]["Daily_EX_6"];
			var Daily_EX_7 = response.data.records[0]["Daily_EX_7"];
			
			var IN_Prediction_1_1 = response.data.records[0]["IN_Prediction_1_1"];
			var IN_Prediction_1_2 = response.data.records[0]["IN_Prediction_1_2"];
			var IN_Prediction_1_3 = response.data.records[0]["IN_Prediction_1_3"];
			var IN_Prediction_1_4 = response.data.records[0]["IN_Prediction_1_4"];
			var IN_Prediction_1_5 = response.data.records[0]["IN_Prediction_1_5"];
			var IN_Prediction_1_6 = response.data.records[0]["IN_Prediction_1_6"];
			var IN_Prediction_1_7 = response.data.records[0]["IN_Prediction_1_7"];
			
			var dec_49_1 = response.data.records[0]["dec_49_1"];
			var dec_49_2 = response.data.records[0]["dec_49_2"];
			var dec_49_3 = response.data.records[0]["dec_49_3"];
			var dec_49_4 = response.data.records[0]["dec_49_4"];
			var dec_49_5 = response.data.records[0]["dec_49_5"];
			var dec_49_6 = response.data.records[0]["dec_49_6"];
			var dec_49_7 = response.data.records[0]["dec_49_7"];
			
			var dec_50_1 = response.data.records[0]["dec_50_1"];
			var dec_50_2 = response.data.records[0]["dec_50_2"];
			var dec_50_3 = response.data.records[0]["dec_50_3"];
			var dec_50_4 = response.data.records[0]["dec_50_4"];
			var dec_50_5 = response.data.records[0]["dec_50_5"];
			var dec_50_6 = response.data.records[0]["dec_50_6"];
			var dec_50_7 = response.data.records[0]["dec_50_7"];
			
			var dec_51_1 = response.data.records[0]["dec_51_1"];
			var dec_51_2 = response.data.records[0]["dec_51_2"];
			var dec_51_3 = response.data.records[0]["dec_51_3"];
			var dec_51_4 = response.data.records[0]["dec_51_4"];
			var dec_51_5 = response.data.records[0]["dec_51_5"];
			var dec_51_6 = response.data.records[0]["dec_51_6"];
			var dec_51_7 = response.data.records[0]["dec_51_7"];
			
			var dec_52_1 = response.data.records[0]["dec_52_1"];
			var dec_52_2 = response.data.records[0]["dec_52_2"];
			var dec_52_3 = response.data.records[0]["dec_52_3"];
			var dec_52_4 = response.data.records[0]["dec_52_4"];
			var dec_52_5 = response.data.records[0]["dec_52_5"];
			var dec_52_6 = response.data.records[0]["dec_52_6"];
			var dec_52_7 = response.data.records[0]["dec_52_7"];
			
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
			
			//Feb 18
			
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
			
			//setting scope variables
			
			$scope.daily_income_1 = Number(Daily_IN_1);
			$scope.daily_income_2 = Number(Daily_IN_2);
			$scope.daily_income_3 = Number(Daily_IN_3);
			$scope.daily_income_4 = Number(Daily_IN_4);
			$scope.daily_income_5 = Number(Daily_IN_5);
			$scope.daily_income_6 = Number(Daily_IN_6);
			$scope.daily_income_7 = Number(Daily_IN_7);
			
			$scope.daily_expense_1 = Number(Daily_EX_1);
			$scope.daily_expense_2 = Number(Daily_EX_2);
			$scope.daily_expense_3 = Number(Daily_EX_3);
			$scope.daily_expense_4 = Number(Daily_EX_4);
			$scope.daily_expense_5 = Number(Daily_EX_5);
			$scope.daily_expense_6 = Number(Daily_EX_6);
			$scope.daily_expense_7 = Number(Daily_EX_7);
			
			$scope.daily_nov_48_1 = Number(IN_Prediction_1_1);
			$scope.daily_nov_48_2 = Number(IN_Prediction_1_2);
			$scope.daily_nov_48_3 = Number(IN_Prediction_1_3);
			$scope.daily_nov_48_4 = Number(IN_Prediction_1_4);
			$scope.daily_nov_48_5 = Number(IN_Prediction_1_5);
			$scope.daily_nov_48_6 = Number(IN_Prediction_1_6);
			$scope.daily_nov_48_7 = Number(IN_Prediction_1_7);
			
			$scope.dec_49_1 = Number(dec_49_1);
			$scope.dec_49_2 = Number(dec_49_2);
			$scope.dec_49_3 = Number(dec_49_3);
			$scope.dec_49_4 = Number(dec_49_4);
			$scope.dec_49_5 = Number(dec_49_5);
			$scope.dec_49_6 = Number(dec_49_6);
			$scope.dec_49_7 = Number(dec_49_7);
			
			$scope.dec_50_1 = Number(dec_50_1);
			$scope.dec_50_2 = Number(dec_50_2);
			$scope.dec_50_3 = Number(dec_50_3);
			$scope.dec_50_4 = Number(dec_50_4);
			$scope.dec_50_5 = Number(dec_50_5);
			$scope.dec_50_6 = Number(dec_50_6);
			$scope.dec_50_7 = Number(dec_50_7);
			
			$scope.dec_51_1 = Number(dec_51_1);
			$scope.dec_51_2 = Number(dec_51_2);
			$scope.dec_51_3 = Number(dec_51_3);
			$scope.dec_51_4 = Number(dec_51_4);
			$scope.dec_51_5 = Number(dec_51_5);
			$scope.dec_51_6 = Number(dec_51_6);
			$scope.dec_51_7 = Number(dec_51_7);
			
			$scope.dec_52_1 = Number(dec_52_1);
			$scope.dec_52_2 = Number(dec_52_2);
			$scope.dec_52_3 = Number(dec_52_3);
			$scope.dec_52_4 = Number(dec_52_4);
			$scope.dec_52_5 = Number(dec_52_5);
			$scope.dec_52_6 = Number(dec_52_6);
			$scope.dec_52_7 = Number(dec_52_7);
			
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
			
			//Fab 18
			
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
            })
        };
		
		//Trying func 2
		
		$scope.GetAllData_M = function () {
            $http.get('check_1.php')
            .then(function (response, status, headers, config) {
                $scope.Details = response;
				console.log(response);
				
				//converting to numbers
			
			var Daily_IN_1 = response.data.records[0]["Daily_IN_1"];
			var Daily_IN_2 = response.data.records[0]["Daily_IN_2"];
			var Daily_IN_3 = response.data.records[0]["Daily_IN_3"];
			var Daily_IN_4 = response.data.records[0]["Daily_IN_4"];
			var Daily_IN_5 = response.data.records[0]["Daily_IN_5"];
			var Daily_IN_6 = response.data.records[0]["Daily_IN_6"];
			var Daily_IN_7 = response.data.records[0]["Daily_IN_7"];
			
			var Daily_EX_1 = response.data.records[0]["Daily_EX_1"];
			var Daily_EX_2 = response.data.records[0]["Daily_EX_2"];
			var Daily_EX_3 = response.data.records[0]["Daily_EX_3"];
			var Daily_EX_4 = response.data.records[0]["Daily_EX_4"];
			var Daily_EX_5 = response.data.records[0]["Daily_EX_5"];
			var Daily_EX_6 = response.data.records[0]["Daily_EX_6"];
			var Daily_EX_7 = response.data.records[0]["Daily_EX_7"];
			
			var IN_Prediction_1_1 = response.data.records[0]["IN_Prediction_1_1"];
			var IN_Prediction_1_2 = response.data.records[0]["IN_Prediction_1_2"];
			var IN_Prediction_1_3 = response.data.records[0]["IN_Prediction_1_3"];
			var IN_Prediction_1_4 = response.data.records[0]["IN_Prediction_1_4"];
			var IN_Prediction_1_5 = response.data.records[0]["IN_Prediction_1_5"];
			var IN_Prediction_1_6 = response.data.records[0]["IN_Prediction_1_6"];
			var IN_Prediction_1_7 = response.data.records[0]["IN_Prediction_1_7"];
			
			var dec_49_1 = response.data.records[0]["dec_49_1"];
			var dec_49_2 = response.data.records[0]["dec_49_2"];
			var dec_49_3 = response.data.records[0]["dec_49_3"];
			var dec_49_4 = response.data.records[0]["dec_49_4"];
			var dec_49_5 = response.data.records[0]["dec_49_5"];
			var dec_49_6 = response.data.records[0]["dec_49_6"];
			var dec_49_7 = response.data.records[0]["dec_49_7"];
			
			var dec_50_1 = response.data.records[0]["dec_50_1"];
			var dec_50_2 = response.data.records[0]["dec_50_2"];
			var dec_50_3 = response.data.records[0]["dec_50_3"];
			var dec_50_4 = response.data.records[0]["dec_50_4"];
			var dec_50_5 = response.data.records[0]["dec_50_5"];
			var dec_50_6 = response.data.records[0]["dec_50_6"];
			var dec_50_7 = response.data.records[0]["dec_50_7"];
			
			var dec_51_1 = response.data.records[0]["dec_51_1"];
			var dec_51_2 = response.data.records[0]["dec_51_2"];
			var dec_51_3 = response.data.records[0]["dec_51_3"];
			var dec_51_4 = response.data.records[0]["dec_51_4"];
			var dec_51_5 = response.data.records[0]["dec_51_5"];
			var dec_51_6 = response.data.records[0]["dec_51_6"];
			var dec_51_7 = response.data.records[0]["dec_51_7"];
			
			var dec_52_1 = response.data.records[0]["dec_52_1"];
			var dec_52_2 = response.data.records[0]["dec_52_2"];
			var dec_52_3 = response.data.records[0]["dec_52_3"];
			var dec_52_4 = response.data.records[0]["dec_52_4"];
			var dec_52_5 = response.data.records[0]["dec_52_5"];
			var dec_52_6 = response.data.records[0]["dec_52_6"];
			var dec_52_7 = response.data.records[0]["dec_52_7"];
			
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
			
			//Feb 18
			
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
			
			//setting scope variables
			
			$scope.daily_income_1 = Number(Daily_IN_1);
			$scope.daily_income_2 = Number(Daily_IN_2);
			$scope.daily_income_3 = Number(Daily_IN_3);
			$scope.daily_income_4 = Number(Daily_IN_4);
			$scope.daily_income_5 = Number(Daily_IN_5);
			$scope.daily_income_6 = Number(Daily_IN_6);
			$scope.daily_income_7 = Number(Daily_IN_7);
			
			$scope.daily_expense_1 = Number(Daily_EX_1);
			$scope.daily_expense_2 = Number(Daily_EX_2);
			$scope.daily_expense_3 = Number(Daily_EX_3);
			$scope.daily_expense_4 = Number(Daily_EX_4);
			$scope.daily_expense_5 = Number(Daily_EX_5);
			$scope.daily_expense_6 = Number(Daily_EX_6);
			$scope.daily_expense_7 = Number(Daily_EX_7);
			
			$scope.daily_nov_48_1 = Number(IN_Prediction_1_1);
			$scope.daily_nov_48_2 = Number(IN_Prediction_1_2);
			$scope.daily_nov_48_3 = Number(IN_Prediction_1_3);
			$scope.daily_nov_48_4 = Number(IN_Prediction_1_4);
			$scope.daily_nov_48_5 = Number(IN_Prediction_1_5);
			$scope.daily_nov_48_6 = Number(IN_Prediction_1_6);
			$scope.daily_nov_48_7 = Number(IN_Prediction_1_7);
			
			$scope.dec_49_1 = Number(dec_49_1);
			$scope.dec_49_2 = Number(dec_49_2);
			$scope.dec_49_3 = Number(dec_49_3);
			$scope.dec_49_4 = Number(dec_49_4);
			$scope.dec_49_5 = Number(dec_49_5);
			$scope.dec_49_6 = Number(dec_49_6);
			$scope.dec_49_7 = Number(dec_49_7);
			
			$scope.dec_50_1 = Number(dec_50_1);
			$scope.dec_50_2 = Number(dec_50_2);
			$scope.dec_50_3 = Number(dec_50_3);
			$scope.dec_50_4 = Number(dec_50_4);
			$scope.dec_50_5 = Number(dec_50_5);
			$scope.dec_50_6 = Number(dec_50_6);
			$scope.dec_50_7 = Number(dec_50_7);
			
			$scope.dec_51_1 = Number(dec_51_1);
			$scope.dec_51_2 = Number(dec_51_2);
			$scope.dec_51_3 = Number(dec_51_3);
			$scope.dec_51_4 = Number(dec_51_4);
			$scope.dec_51_5 = Number(dec_51_5);
			$scope.dec_51_6 = Number(dec_51_6);
			$scope.dec_51_7 = Number(dec_51_7);
			
			$scope.dec_52_1 = Number(dec_52_1);
			$scope.dec_52_2 = Number(dec_52_2);
			$scope.dec_52_3 = Number(dec_52_3);
			$scope.dec_52_4 = Number(dec_52_4);
			$scope.dec_52_5 = Number(dec_52_5);
			$scope.dec_52_6 = Number(dec_52_6);
			$scope.dec_52_7 = Number(dec_52_7);
			
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
</script>

<script>
$(document).ready(function()
{
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
	
	$("#header_1").click(function(){
		var scope = angular.element("#div_1").scope();
		
		console.log(scope.daily_expense_1);
		
		var data_1 = {"daily_expense_1":scope.daily_expense_1,
					  "daily_expense_2":scope.daily_expense_2,
					  "daily_expense_3":scope.daily_expense_3,
					  "daily_expense_4":scope.daily_expense_4,
					  "daily_expense_5":scope.daily_expense_5,
					  "daily_expense_6":scope.daily_expense_6,
					  "daily_expense_7":scope.daily_expense_7,
					  "daily_income_1":scope.daily_income_1,
					  "daily_income_2":scope.daily_income_2,
					  "daily_income_3":scope.daily_income_3,
					  "daily_income_4":scope.daily_income_4,
					  "daily_income_5":scope.daily_income_5,
					  "daily_income_6":scope.daily_income_6,
					  "daily_income_7":scope.daily_income_7,
					  "daily_income_7":scope.daily_income_7,
					  "former_expense":scope.former_expense,
					  "former_income":scope.former_income,
					  "income_prediction_1_1":scope.daily_nov_48_1,
					  "income_prediction_1_2":scope.daily_nov_48_2,
					  "income_prediction_1_3":scope.daily_nov_48_3,
					  "income_prediction_1_4":scope.daily_nov_48_4,
					  "income_prediction_1_5":scope.daily_nov_48_5,
					  "income_prediction_1_6":scope.daily_nov_48_6,
					  "income_prediction_1_7":scope.daily_nov_48_7,
					  
					  "dec_49_1":scope.dec_49_1,
					  "dec_49_2":scope.dec_49_2,
					  "dec_49_3":scope.dec_49_3,
					  "dec_49_4":scope.dec_49_4,
					  "dec_49_5":scope.dec_49_5,
					  "dec_49_6":scope.dec_49_6,
					  "dec_49_7":scope.dec_49_7,
					  
					  "dec_50_1":scope.dec_50_1,
					  "dec_50_2":scope.dec_50_2,
					  "dec_50_3":scope.dec_50_3,
					  "dec_50_4":scope.dec_50_4,
					  "dec_50_5":scope.dec_50_5,
					  "dec_50_6":scope.dec_50_6,
					  "dec_50_7":scope.dec_50_7,
					  
					  "dec_51_1":scope.dec_51_1,
					  "dec_51_2":scope.dec_51_2,
					  "dec_51_3":scope.dec_51_3,
					  "dec_51_4":scope.dec_51_4,
					  "dec_51_5":scope.dec_51_5,
					  "dec_51_6":scope.dec_51_6,
					  "dec_51_7":scope.dec_51_7,
					  
					  "dec_52_1":scope.dec_52_1,
					  "dec_52_2":scope.dec_52_2,
					  "dec_52_3":scope.dec_52_3,
					  "dec_52_4":scope.dec_52_4,
					  "dec_52_5":scope.dec_52_5,
					  "dec_52_6":scope.dec_52_6,
					  "dec_52_7":scope.dec_52_7,
					  
					  "jan_01_1":scope.jan_01_1,
					  "jan_01_2":scope.jan_01_2,
					  "jan_01_3":scope.jan_01_3,
					  "jan_01_4":scope.jan_01_4,
					  "jan_01_5":scope.jan_01_5,
					  "jan_01_6":scope.jan_01_6,
					  "jan_01_7":scope.jan_01_7,
					  
					  "jan_02_1":scope.jan_02_1,
					  "jan_02_2":scope.jan_02_2,
					  "jan_02_3":scope.jan_02_3,
					  "jan_02_4":scope.jan_02_4,
					  "jan_02_5":scope.jan_02_5,
					  "jan_02_6":scope.jan_02_6,
					  "jan_02_7":scope.jan_02_7,
					  
					  "jan_03_1":scope.jan_03_1,
					  "jan_03_2":scope.jan_03_2,
					  "jan_03_3":scope.jan_03_3,
					  "jan_03_4":scope.jan_03_4,
					  "jan_03_5":scope.jan_03_5,
					  "jan_03_6":scope.jan_03_6,
					  "jan_03_7":scope.jan_03_7,
					  
					  "jan_04_1":scope.jan_04_1,
					  "jan_04_2":scope.jan_04_2,
					  "jan_04_3":scope.jan_04_3,
					  "jan_04_4":scope.jan_04_4,
					  "jan_04_5":scope.jan_04_5,
					  "jan_04_6":scope.jan_04_6,
					  "jan_04_7":scope.jan_04_7,
					  
					  "feb_01_1":scope.feb_01_1,
					  "feb_01_2":scope.feb_01_2,
					  "feb_01_3":scope.feb_01_3,
					  "feb_01_4":scope.feb_01_4,
					  "feb_01_5":scope.feb_01_5,
					  "feb_01_6":scope.feb_01_6,
					  "feb_01_7":scope.feb_01_7,
					  
					  "feb_02_1":scope.feb_02_1,
					  "feb_02_2":scope.feb_02_2,
					  "feb_02_3":scope.feb_02_3,
					  "feb_02_4":scope.feb_02_4,
					  "feb_02_5":scope.feb_02_5,
					  "feb_02_6":scope.feb_02_6,
					  "feb_02_7":scope.feb_02_7,
					  
					  "feb_03_1":scope.feb_03_1,
					  "feb_03_2":scope.feb_03_2,
					  "feb_03_3":scope.feb_03_3,
					  "feb_03_4":scope.feb_03_4,
					  "feb_03_5":scope.feb_03_5,
					  "feb_03_6":scope.feb_03_6,
					  "feb_03_7":scope.feb_03_7,
					  
					  "feb_04_1":scope.feb_04_1,
					  "feb_04_2":scope.feb_04_2,
					  "feb_04_3":scope.feb_04_3,
					  "feb_04_4":scope.feb_04_4,
					  "feb_04_5":scope.feb_04_5,
					  "feb_04_6":scope.feb_04_6,
					  "feb_04_7":scope.feb_04_7,
					  
					  
					  "stuff":$("#stuff").val(),
					  "tot":$("#tot").html()
					};
		var data_1_js = JSON.stringify(data_1);
		
		//ajax request
		var className = $('#header_1').attr('class');
		//alert (className);
		if (className == "M")
		{
			$.ajax
			({
				url: 'check_2.php',
				type: 'POST',
				//data: {'Y_n': data_1_js,
				//		'Number_0': num}
				data: {'Y_n': data_1_js}
			}).done(function(result)
			{
				//$("#container").html(result);
				//var result_1 = JSON.parse(result);
				//console.log(result_1);
				//var load_1 = JSON.parse(result);
				//console.log(load_1);
				var result_1 = JSON.parse(result);
				console.log("3:",result_1);
			});
		}
		if (className == "P")
		{
			$.ajax
			({
				url: 'check_2_p.php',
				type: 'POST',
				//data: {'Y_n': data_1_js,
				//		'Number_0': num}
				data: {'Y_n': data_1_js}
			}).done(function(result)
			{
				//$("#container").html(result);
				//var result_1 = JSON.parse(result);
				//console.log(result_1);
				//var load_1 = JSON.parse(result);
				//console.log(load_1);
				var result_1 = JSON.parse(result);
				console.log("3_p:",result_1);
			});
		}
});
	
	//opacity for loader
	$('#div_1').animate({opacity:1},1000);
	$('.loader').css ("display","none");
	
	$("#header_2").click(function(){
		//var scope = angular.element("#div_1").scope();
		//console.log(scope.daily_expense_1);
				
		//ajax request
		var className = $('#header_1').attr('class');
		//alert (className);
		if (className == "M")
		{
			$.ajax
			({
				url: 'check_3.php',
				type: 'POST',
				//data: {'Y_n': data_1_js,
				//		'Number_0': num}
				
			}).done(function(result)
			{
				//$("#container").html(result);
				
				var result_1 = JSON.parse(result);
				$("#stuff").val(result_1["Stuff"]);
				//console.log(result_1["Stuff"]);
				//var load_1 = JSON.parse(result);
				//console.log(load_1);
				//scope.daily_income_1 = Number(result_1["Daily_IN_1"]);
				console.log($("#tot").html());
			});
		}
		if (className == "P")
		{
			$.ajax
			({
				url: 'check_3_p.php',
				type: 'POST',
				//data: {'Y_n': data_1_js,
				//		'Number_0': num}
				
			}).done(function(result)
			{
				//$("#container").html(result);
				
				var result_1 = JSON.parse(result);
				$("#stuff").val(result_1["Stuff"]);
				//console.log(result_1["Stuff"]);
				//var load_1 = JSON.parse(result);
				//console.log(load_1);
				//scope.daily_income_1 = Number(result_1["Daily_IN_1"]);
				console.log($("#tot").html());
			});
		}
	});
	$("#header_2").click();
	
});
</script>

<script>
$( window ).resize(function() 
{
  	//loader
	a_11_f();
	
});
</script>