<?php

	require '../includes/cleanData.php';
	require '../includes/saveData.php';

	/**
	 *
	 * This script processes the volunteer form.
	 *
     * NOTE: strtotime() is a built-in functions that has not been discussed in class.
	 *
	 */

	$hasErrors = false;

	$volDate = $volName = $volEmail = $volAddress = $volPhone = $volDOB = $volSex =
		$volEmerName = $volEmerEmail = $volEmerAddress = $volEmerPhone = 
		$volAvailMonStart = $volAvailMonEnd = $volAvailTueStart = $volAvailTueEnd =
		$volAvailWedStart = $volAvailWedEnd = $volAvailThuStart = $volAvailThuEnd =
		$volAvailFriStart = $volAvailFriEnd = $volAvailSatStart = $volAvailSatEnd =
		$volAvailSunStart = $volAvailSunEnd = $volMaxHours = $volMaxHoursPeriod =
		$volExperience = $volPref = $volAgrees = $volEvents = $volCleanup = $volOffice = "";

	$volEmailErr = $volPhoneErr = $volDOBErr = $volEmerEmailErr = $volEmerPhoneErr = 
		$volAvailMonPeriodErr = $volAvailTuePeriodErr = $volAvailWedPeriodErr = 
		$volAvailThuPeriodErr = $volAvailFriPeriodErr = $volAvailSatPeriodErr =
		$volAvailSunPeriodErr = "";

	// declare and initialize vars
	function process() {

		global $volDate, $volName, $volEmail, $volAddress, $volPhone, $volDOB, $volSex,
			$volEmerName, $volEmerEmail, $volEmerAddress, $volEmerPhone, 
			$volAvailMonStart, $volAvailMonEnd, $volAvailTueStart, $volAvailTueEnd,
			$volAvailWedStart, $volAvailWedEnd, $volAvailThuStart, $volAvailThuEnd,
			$volAvailFriStart, $volAvailFriEnd, $volAvailSatStart, $volAvailSatEnd,
			$volAvailSunStart, $volAvailSunEnd, $volMaxHours, $volMaxHoursPeriod,
			$volExperience, $volPref, $volAgrees, $volEvents, $volCleanup, $volOffice;

		global $volEmailErr, $volPhoneErr, $volDOBErr, $volEmerEmailErr, $volEmerPhoneErr, 
			$volAvailMonPeriodErr, $volAvailTuePeriodErr, $volAvailWedPeriodErr, 
			$volAvailThuPeriodErr, $volAvailFriPeriodErr, $volAvailSatPeriodErr, 
			$volAvailSunPeriodErr;
			
		global $hasErrors;

		// check if data posted
		// clean & validate data
		// save data

		if ( $_SERVER['REQUEST_METHOD'] == 'POST' && $_POST ) {

			// $volDate
			$volDate = date('Y-m-d'); 

			// $volName
			$volName = cleanData($_POST['volName']);

			// $volEmail
	        $volEmail = cleanData($_POST['volEmail']); 
			$volEmailErr = validate( $volEmail, 'email');
			if ( !empty($volEmailErr) ) $hasErrors = true; 

			// $volAddress
			$volAddress = cleanData($_POST['volAddress']);

			// $volPhone
            $volPhone = cleanData($_POST['volPhone']); 
			$volPhoneErr = validate( $volPhone, 'phone');
			if ( !empty($volPhoneErr) ) $hasErrors = true; 

			// $volDOB
            $volDOB = cleanData($_POST['volDOB']); 
			$volDOBErr = validate( $volDOB, 'dob');
			if ( !empty($volDOBErr) ) $hasErrors = true; 


			// $volSex
			$volSex = $_POST['volSex'];

			// $volEmerName
			$volEmerName = cleanData($_POST['volEmerName']);

			// $volEmerEmail
	        $volEmerEmail = cleanData($_POST['volEmerEmail']); 
			$volEmerEmailErr = validate( $volEmerEmail, 'email');
			if ( !empty($volEmerEmailErr) ) $hasErrors = true; 

			// $volEmerAddress
			$volEmerAddress = cleanData($_POST['volEmerAddress']);

			// $volEmerPhone
            $volEmerPhone = cleanData($_POST['volEmerPhone']); 
			$volEmerPhoneErr = validate( $volEmerPhone, 'phone');
			if ( !empty($volEmerPhoneErr) ) $hasErrors = true; 

			// $volAvailMonStart and $volAvailMonEnd
			$volAvailMonStart = cleanData($_POST['volAvailMonStart']);
			$volAvailMonEnd = cleanData($_POST['volAvailMonEnd']);

			$volAvailMonPeriodErr = validate(array($volAvailMonStart, $volAvailMonEnd), 'time_period');	
		
			if ( !empty($volAvailMonPeriodErr) ) $hasErrors = true;

			// $volAvailTueStart and $volAvailTueEnd
			$volAvailTueStart = cleanData($_POST['volAvailTueStart']);
			$volAvailTueEnd = cleanData($_POST['volAvailTueEnd']);

			$volAvailTuePeriodErr = validate(array($volAvailTueStart, $volAvailTueEnd), 'time_period');	
		
			if ( !empty($volAvailTuePeriodErr) ) $hasErrors = true;

			// $volAvailWedStart and $volAvailWedEnd
			$volAvailWedStart = cleanData($_POST['volAvailWedStart']);
			$volAvailWedEnd = cleanData($_POST['volAvailWedEnd']);

			$volAvailWedPeriodErr = validate(array($volAvailWedStart, $volAvailWedEnd), 'time_period');	
		
			if ( !empty($volAvailWedPeriodErr) ) $hasErrors = true;

			// $volAvailThuStart and $volAvailThuEnd
			$volAvailThuStart = cleanData($_POST['volAvailThuStart']);
			$volAvailThuEnd = cleanData($_POST['volAvailThuEnd']);

			$volAvailThuPeriodErr = validate(array($volAvailThuStart, $volAvailThuEnd), 'time_period');	
		
			if ( !empty($volAvailThuPeriodErr) ) $hasErrors = true;

			// $volAvailFriStart and $volAvailFriEnd
			$volAvailFriStart = cleanData($_POST['volAvailFriStart']);
			$volAvailFriEnd = cleanData($_POST['volAvailFriEnd']);

			$volAvailFriPeriodErr = validate(array($volAvailFriStart, $volAvailFriEnd), 'time_period');	
		
			if ( !empty($volAvailFriPeriodErr) ) $hasErrors = true;

			// $volAvailSatStart and $volAvailSatEnd
			$volAvailSatStart = cleanData($_POST['volAvailSatStart']);
			$volAvailSatEnd = cleanData($_POST['volAvailSatEnd']);

			$volAvailSatPeriodErr = validate(array($volAvailSatStart, $volAvailSatEnd), 'time_period');	
		
			if ( !empty($volAvailSatPeriodErr) ) $hasErrors = true;

			// $volAvailSunStart and $volAvailSunEnd
			$volAvailSunStart = cleanData($_POST['volAvailSunStart']);
			$volAvailSunEnd = cleanData($_POST['volAvailSunEnd']);

			$volAvailSunPeriodErr = validate(array($volAvailSunStart, $volAvailSunEnd), 'time_period');	
		
			if ( !empty($volAvailSunPeriodErr) ) $hasErrors = true;

			// $volMaxHours
			$volMaxHours = $_POST['volMaxHours'];

			// $volMaxHoursPeriod
			$volMaxHoursPeriod = $_POST['volMaxHoursPeriod'];

			// $volExperience
			$volExperience = cleanData($_POST['volExperience']);

			// $volPref
			$volPref = cleanData($_POST['volPref']);
			
			// $volEvents, volCleanup, volOffice
			$volEvents = $_POST['volEvents'];
			$volOffice = $_POST['volOffice'];
			$volCleanup = $_POST['volCleanup'];

			// $volAgrees
			if(isset($_POST['volAgrees'])) {
				$volAgrees		= $_POST['volAgrees'];
			} else {
				$volAgrees		= 'no';
			}

			if($hasErrors) {

				return '<p class="warning">Please correct the error(s) in the form and resubmit.</p>';

			} else {

				$volunteer = array(
					'date' => $volDate,
					'name' => $volName,
					'personalContact' => array(
						'email' => $volEmail,
						'address' => $volAddress,
						'phone' => $volPhone
					),
					'DOB' => $volDOB,
					'sex' => $volSex,
					'emergencyContact' => array(
						'name' => $volEmerName,
						'email' => $volEmerEmail,
						'address' => $volEmerAddress,
						'phone' => $volEmerPhone
					),
					'availability' => array(
						'mon' => $volAvailMonStart . '-' . $volAvailMonEnd,
						'tue' => $volAvailTueStart . '-' . $volAvailTueEnd,
						'wed' => $volAvailWedStart . '-' . $volAvailWedEnd,
						'thu' => $volAvailThuStart . '-' . $volAvailThuEnd,
						'fri' => $volAvailFriStart . '-' . $volAvailFriEnd,
						'sat' => $volAvailSatStart . '-' . $volAvailSatEnd,
						'sun' => $volAvailSunStart . '-' . $volAvailSunEnd
					),
					'maxHours' => $volMaxHours,
					'maxHoursPeriod' => $volMaxHoursPeriod,
					'experience' => $volExperience,
					'preferences' => $volPref,
					'preferences: events' => $volEvents,
					'preference: office' => $volOffice,
					'preference: cleanup' => $volCleanup,
					'agreement' => $volAgrees
				);

				// write to .json file
				saveData($volunteer, '../data/volunteers.json');

				// reset vars
				$lastUser = $volName;

				$hasErrors = false;

				$volDate = $volName = $volEmail = $volAddress = $volPhone = $volDOB = $volSex =
					$volEmerName = $volEmerEmail = $volEmerAddress = $volEmerPhone = 
					$volAvailMonStart = $volAvailMonEnd = $volAvailTueStart = $volAvailTueEnd =
					$volAvailWedStart = $volAvailWedEnd = $volAvailThuStart = $volAvailThuEnd =
					$volAvailFriStart = $volAvailFriEnd = $volAvailSatStart = $volAvailSatEnd =
					$volAvailSunStart = $volAvailSunEnd = $volMaxHours = $volMaxHoursPeriod =
					$volExperience = $volPref = $volAgrees = "";

				$volEmailErr = $volPhoneErr = $volDOBErr = $volEmerEmailErr = $volEmerPhoneErr = 
					$volAvailMonPeriodErr = $volAvailTuePeriodErr = $volAvailWedPeriodErr = 
					$volAvailThuPeriodErr = $volAvailFriPeriodErr = $volAvailSatPeriodErr =
					$volAvailSunPeriodErr = "";

				// return success msg
				return '<p class="success">Thank you very much for your time, ' . $lastUser . ', we\'re excited to have you on our team!</p>';
			}
		}

	}

	// Simple data validation

	function validate( $data, $field ) {


		switch ( $field ) {

			// date
			case 'date' :  {

            	if ( !empty($data) ) {
                	// get associative array with detailed info about given date
                    $dateChk = date_parse($data);
                    // check the validity of the date formed by the arguments
                    if ( !checkdate($dateChk['month'], $dateChk['day'], $dateChk['year']) ) {
                    	return "Invalid Order Date.  Please Re-enter";
					}

                 } else {
                    return "Month to start donation is required";
                 }
 
                 return "";
			}
			// email
			case 'email' : {
            	if ( !empty($data) ) { 
					if ( !filter_var($data, FILTER_VALIDATE_EMAIL) ) { 
				    	return "Invalid Email Address.  Please Re-enter";
					}
		    	}

			    return ""; 
			}
			// phone
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
			// $DOB
			case 'dob' : {

				if (!empty($data)) {
					if( $data > date('Y-m-d', strtotime('-18 year')) ) {
						return "Invalid date of birth. Volunteers must be at least 18 years of age.";
					}
				} else {
					return "Date of birth is required.";
				}

				return "";
			}
			// time_period
			case 'time_period' : {
				if ( !empty($data) && !empty($data[1]) ) {

					$startTime = $data[0];
					$endTime = $data[1];

					if($startTime > $endTime) {
						return "Start time cannot be after end time.";
					}

					//check if within working hours
					$openTime = date("H:i", mktime(7, 0));
					$closeTime = date("H:i", mktime(11, 59));
					if ((strtotime($startTime) < strtotime($openTime))
						|| (strtotime($endTime) < strtotime($closeTime)) )
					{
						return "Invalid time. We allow work  between 7am and 12am";
					}

				} else {
					return "Missing time.";
				}
				
				return "";

			}

			default :   break;
		}

	} // end validate

