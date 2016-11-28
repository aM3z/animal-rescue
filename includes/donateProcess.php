<?php

	require '../includes/cleanData.php';
	require '../includes/saveData.php';

	$hasErrors = false;

	$donDate = $donAmountDog = $donAmountCat = $donPaymentPeriod = $donStart = 
		$donName = $donEmail = $donAddress = $donPhone = $donGift = "";

	$donAmountDogErr = $donAmountCatErr = $donStartErr = $donNameErr =
		$donEmailErr = $donAddressErr = $donPhoneErr = "";


	// declare and initialize vars
	function process() {

		global $donDate, $donAmountDog, $donAmountCat, $donPaymentPeriod, $donStart, 
			$donName, $donEmail, $donAddress, $donPhone, $donGift;
	
		global 	$donAmountDogErr, $donAmountCatErr, $donStartErr, $donNameErr, 
			$donEmailErr, $donAddressErr, $donPhoneErr;


		// check if data posted
		// clean & validate data
		// print data

		if ( $_SERVER['REQUEST_METHOD'] == 'POST' && $_POST ) {
			// $donDate
			$donDate   			= $_POST['donDate']; 

			// $donAmountDog
			$donAmountDog   	= cleanData($_POST['donAmountDog']); 
			$donAmountDogErr 	= validate( $donAmountDog, 'donAmountDog');
			if ( !empty($donAmountDogErr) ) $hasErrors = true; 

			// $donAmountCat
			$donAmountCat   	= cleanData($_POST['donAmountCat']); 
			$donAmountCatErr 	= validate( $donAmountCat, 'donAmountCat');
			if ( !empty($donAmountCatErr) ) $hasErrors = true; 


			// $donPaymentPeriod
			$donPaymentPeriod	= $_POST['donPaymentPeriod'];

			// $donStart	
			$donStart  			= cleanData($_POST['donStart']); 
			$donStartErr 		= validate( $donStart, 'donStart');
			if ( !empty($donStartErr) ) $hasErrors = true; 

			// $donName 
			$donName 			= cleanData($_POST['donName']); 
			$donNameErr 		= validate( $donName, 'donName');
			if ( !empty($donNameErr) ) $hasErrors = true; 


			// $donEmail
			$donEmail  			= cleanData($_POST['donEmail']); 
			$donEmailErr 		= validate( $donEmail, 'donEmail');
			if ( !empty($donEmailErr) ) $hasErrors = true; 

			// $donAddress
			$donAddress  		= cleanData($_POST['donAddress']); 

			// $donPhone
			$donPhone	  		= cleanData($_POST['donPhone']); 
			$donPhoneErr 		= validate( $donPhone, 'donPhone');
			if ( !empty($donPhoneErr) ) $hasErrors = true; 

			// $donGift 
			if(isset($_POST['donGift'])) {
				$donGift		= $_POST['donGift'];
			} else {
				$donGift		= 'no';
			}

			if($hasErrors) {

				return '<p class="warning">Please correct the error in the form an resubmit.</p>';

			} else {

				$donation = array(
					// $donDate
					'date' => $donDate,
					'amount' => array(
						'dogs' => $donAmountDog,
						'cats' => $donAmountCat
					),
					// $donPaymentPeriod 
					'paymentPeriod' => $donPaymentPeriod,
					// $donStart
					'starting' => $donStart,
					// contact info 
					'contactInfo' => array(
						'name' => $donName,
						'email' => $donEmail,
						'address' => $donAddress,
						'phone' => $donPhone
					),
					// $donGift 
					'isGift' => $donGift
				);

				// write to .json file
				saveData($donation, '../data/donations.json');

				// reset vars
				$lastUser = $donName;

				$hasErrors = false;

				$donDate = $donAmountDog = $donAmountCat = $donPaymentPeriod = $donStart = 
					$donName = $donEmail = $donAddress = $donPhone = $donGift = "";

				$donAmountDogErr = $donAmountCatErr = $donStartErr = $donNameErr =
					$donEmailErr = $donAddressErr = $donPhoneErr = "";

				// return success msg
				return '<p class="success">Thank you very much for your generous donation, ' . $lastUser . '!</p>';
			}
		}

	}

	// Simple data validation

	function validate( $data, $field ) {


		switch ( $field ) {

			// donAmountDog 
			case 'donAmountDog' :  {
				if ( !empty($data) ) {
					if ( !preg_match("/\d+/",$data) || ( $data <0 ) )  {
						return "Invalid quantity.  Please enter a nonnegative number.";
					}
				} else {
					return "Quantity is required for dog donation.";
				}

				return "";
			}

			// donAmountCat
			case 'donAmountCat' :  {
				if ( !empty($data) ) {
					if ( !preg_match("/\d+/",$data) || ( $data <0 ) )  {
						return "Invalid quantity.  Please enter a nonnegative number.";
					}
				} else {
					return "Quantity is required for cat donation.";
				}

				return "";
			}

			// donPaymentPeriod 
			// donStart 
			case 'donStart' : {

				if ( !empty($data) ) {
					// get associative array with detailed info about given date
					$dateChk = date_parse($data);
					// check the validity of the date formed by the arguments
					if ( !checkdate($dateChk[month], $dateChk[day], $dateChk[year]) ) {
						return "Invalid Order Date.  Please Re-enter";
					}
				} else { 
					return "Month to start donation is required";
				}

				return "";
			}
			// donName
			case 'donName' : {
				if ( !empty($data) ) {
					$regex = "/^[a-zA-Z\s]+$/";                            // $regex = "/^[\pL\s-'.]+[\pNd]{0,1}$/";
					if ( !preg_match($regex, $data) ) {
						return "Please enter name using only letters and spaces";
					}
				} else {
					return "Name is required";
				}

				return "";
			}

			// donEmail 
			case 'donEmail' : {

				if ( !empty($data) ) {
					if ( !filter_var($data, FILTER_VALIDATE_EMAIL) ) {
						return "Invalid Email Address.  Please Re-enter";
					}
				} 

				return "";
			}

			// donPhone
			case 'donPhone' : {

				if ( !empty($data) && !preg_match("/^[0-9]{10}$/", $data) ) {
					return "Invalid Phone Number. Please Re-enter";
				}

				return "";
			}

			// donGift 

			default :   break;
		}

	} // end validate

