<?php

	// check if data posted
	// print data
	$hasErrors = false;
	$cleanValue = "";
	$vars[] = array();
	if ( $_SERVER['REQUEST_METHOD'] == 'POST' && $_POST ) {

		foreach ($_POST as $key => $value) {
			$cleanValue = cleanData($value);
			$vars[$key] = $cleanValue;			
		}
		
		echo "success!";
		
   } else {
   }
   
   
	function cleanData ($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

?>