<?php

	require '../includes/cleanData.php';
	require '../includes/saveData.php';

	$hasErrors = false;


	$cleanValue = "";
	
	//array to hold variables, key = name value = value
	$vars[] = array();
	
	if ( $_SERVER['REQUEST_METHOD'] == 'POST' && $_POST ) {

		foreach ($_POST as $key => $value) {
			$cleanValue = cleanData($value);
			$vars[$key] = $cleanValue;			
		}
		
		foreach ($vars as $key => $val) {
			echo "$key: $val <br>"; //reference, delete later
			//validate($vars, $val, $key);
		}		
		
   } else {
	}
   
	
	//validate data
	function validate($arr, $data, $field) {
		switch($field) {
			case '0' : {
				echo "";
			}
			case 'pet_name' : {
				//echo "{$arr['pet_name']} <br>";
			}
			case 'why' : {
				
			}
			case 'leaving' : {
				
			}
			case 'first_name' : {
				
			}
			case 'last_name' : {
				
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