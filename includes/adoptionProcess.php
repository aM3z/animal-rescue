<?php

	require '../includes/cleanData.php';
	require '../includes/saveData.php';
	
	
	$test = "";

	$hasErrors = false;	
	$vars = [
		"petName" => "",
		"why" => "",
		"leaving" => "",
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
			$varsErrors[$key] = 0;
			//echo "$key <br/>";
		}
		
		foreach ($vars as $key => $val) {
			$tempError = "";
			$tempError = validate($val, $key);
			echo "test: $tempError; <br>";	//validating test delete later
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
			case 'submitButton' : {
				return "";
			}
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
			case 'why' : {
				return "";
			}
			case 'leaving' : {
				return "";
			}
			case 'name' : {
				
			}
			case 'email_add' : {
				
			}
			case 'phone_num' : {
				
			}
			case 'mail_add' : {
				
			}
			case 'city_add' : {
				
			}
			case 'state_add' : {
				
			}
			case 'zipcode' : {
				
			}
			case 'housetype' : {
				
			}
			case 'kids' : {
				
			}
			case 'pets' : {
				
			}
			case 'snv' : {
				
			}
			case 'date' : {
				
			}
		}
	}

?>