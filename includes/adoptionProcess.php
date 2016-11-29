<?php

	require '../includes/cleanData.php';
	require '../includes/saveData.php';
	
	
	$test = "";

	$hasErrors = false;	
	$vars = [
		"petName" => "",
		"why" => "",
		"leaving" => "",
		"name" => "",
		"email" => "",
		"phone" => "",
		"mailAdd" => "",
		"cityAdd" => "",
		"stateAdd" => "",
		"zipCode" => "",
		"houseType" => "",
		"kids" => "",
		"pets" => "",
		"snv" => "",
		"todayDate" => "",
		"aptDate" => "",
		"aptTime" => ""
	]; 	//array to hold variables, key = name value = value
	
	
	$varsErrors[] = $vars;
	
function process() {
	global $hasErrors;
	global $vars;
	global $varsErrors;
	
	
	global $test;
	

	if ( $_SERVER['REQUEST_METHOD'] == 'POST' && $_POST ) {

		foreach ($_POST as $key => $value) {
			$cleanValue = "";
			$cleanValue = cleanData($value);
			$vars[$key] = $cleanValue;	
			$varsErrors[$key] = "";
			//echo "$key <br/>";
		}
		
		foreach ($vars as $key => $val) {
			$tempError = "";
			$tempError = validate($val, $key);
			echo "test $key : $tempError : $val; <br>";	//validating test delete later
			if(!empty($tempError)) {
				$hasErrors = true;
				$varsErrors[$key] = $tempError;
			}
		}	
		echo "test2: $tempError; <br>";		//validating test delete later
		if($hasErrors) {
			return '<p class="warning">Please correct the error(s) in the form and resubmit.</p>';
		}		
		
   } else {
	}
}
	
	//validate data
	function validate($data, $field) {
		switch($field) {
			case 'petName' : {
				if(!empty($data)) {
					$regex = "/^[a-zA-Z\s]+$/";
					if ( !preg_match($regex, $data) ) {
						return "Please enter name using only letters and spaces";
					}
				} else {
					return "Name is required";
				}

				return "";
			}
			case 'name' : {
				if(!empty($data)) {
					$regex = "/^[a-zA-Z\s]+$/";
					if ( !preg_match($regex, $data) ) {
						return "Please enter name using only letters and spaces";
					}
				} else {
					return "Name is required";
				}
				return "";
			}
			case 'email' : {
				if ( !empty($data) ) {
					if ( !filter_var($data, FILTER_VALIDATE_EMAIL) ) {
						return "Invalid Email Address.  Please Re-enter";
					}
				} 

				return "";
			}
			case 'phone' : {
				if ( (!empty($data)) && (
					(!preg_match("/^[2-9]\d{2}-\d{3}-\d{4}$/", $data)) //xxx-xxx-xxxx
					&& (!preg_match("/^[0-9]{10}$/", $data)) //xxxxxxxxxx
				)
				){
					return "Invalid Phone Number. Please Re-enter";
				}
				return "";
			}
			case 'mailAdd' : {
				if ( (!empty($data)) && (
					(!preg_match("/^([\d]{1,5})(.*?)$/", $data)) //0-5 numbers then anything
				)
				){
					return "Invalid mailing address. Please Re-enter";
				}
				return "";
			}
			case 'cityAdd' : {
				if ( (!empty($data)) && (
					(!preg_match("/^[a-zA-Z\s]+$/", $data)) //alphabetical string
				)
				){
					return "Invalid city. Please Re-enter";
				}
				return "";
			}
			case 'stateAdd' : {
				if ( (!empty($data)) && (
					(!preg_match("/^[a-zA-Z]{2}$/", $data)) //2 letters
				)
				){
					return "Invalid state. Please Re-enter";
				}
				return "";
			}
			case 'zipCode' : {
				if ( (!empty($data)) && (
					(!preg_match("/^[\d]{5}$/", $data)) //5 numbers
				)
				){
					return "Invalid zip code. Please Re-enter";
				}
				return "";
			}
			case 'kids' : {
				if ( !empty($data) ) {
					if ( !preg_match("/\d+/",$data) || ( $data <0 ) )  {
						return "Invalid quantity.  Please enter a nonnegative number.";
					}
				} else {
					return "This is a required fieldd";
				}

				return "";
			}
			case 'pets' : {
				if ( (!empty($data)) && (
					(!preg_match("/^(([\d]{1,2})(\s)([a-zA-Z]*)(\s*))*$/", $data)) //2 numbers, whitespace, any number of letters
				)
				){
					return "Invalid format. Please Re-enter";
				}
				return "";
			}

			case 'aptDate' : {
				$cDate = date('d-m-Y H:i:s');
				if ( (!empty($data)) && (
					(strtotime($data) < strtotime($cDate))
				)
				){
					return "Invalid date. Please schedule after today";
				}
				return "";
			}
			
			case 'aptTime' : {
				//$openTime = date(mktime(1, 8, 00, 1, 1, 2000);
				$openTime = date("H:i", mktime(8, 0));
				$closeTime = date("H:i", mktime(20, 0));
				echo "TIME: $openTime || $closeTime<br>";
				if ( (!empty($data)) && (
					(strtotime($data) < strtotime($openTime))
					|| (strtotime($data) > strtotime($closeTime))
				)
				){
					return "Invalid time. We are open between 8am and 8pm";
				}
				return "";
			}
		}
	}

?>