<?php

	// check if data posted
	$hasErrors = false;
	$cleanValue = "";
	$vars[] = array();
	if ( $_SERVER['REQUEST_METHOD'] == 'POST' && $_POST ) {

		foreach ($_POST as $key => $value) {
			$cleanValue = cleanData($value);
			$vars[$key] = $cleanValue;			
		}
		
		echo "success!"; //delete later
		
   } else {
   }
   
   //clean data
	function cleanData ($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	
	//validate data
	function validate($data, $field) {
		switch($field) {
			
		}
	}

?>