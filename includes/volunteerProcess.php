<?php

	require '../includes/cleanData.php';
	require '../includes/saveData.php';

	$hasErrors = false;

	$volDate = $volName = $volEmail = $volAddress = $volPhone = $volDOB = $volSex =
		$volEmerName = $volEmerEmail = $volEmerAddress = $volEmerPhone = 
		$volAvailMonStart = $volAvailMonEnd = $volAvailTueStart = $volAvailTueEnd =
		$volAvailWedStart = $volAvailWedEnd = $volAvailThuStart = $volAvailThuEnd =
		$volAvailFriStart = $volAvailFriEnd = $volAvailSatStart = $volAvailSatEnd =
		$volAvailSunStart = $volAvailSunEnd = $volMaxHours = $volMaxHoursPeriod =
		$volExperience = $volPref = $volAgrees = "";

	$volDateErr = $volNameErr = $volEmailErr = $volAddressErr = $volPhoneErr = $volDOBErr = $volSexErr =
		$volEmerNameErr = $volEmerEmailErr = $volEmerAddressErr = $volEmerPhoneErr = 
		$volAvailMonStartErr = $volAvailMonEndErr = $volAvailTueStartErr = $volAvailTueEndErr =
		$volAvailWedStartErr = $volAvailWedEndErr = $volAvailThuStartErr = $volAvailThuEndErr =
		$volAvailFriStartErr = $volAvailFriEndErr = $volAvailSatStartErr = $volAvailSatEndErr =
		$volAvailSunStartErr = $volAvailSunEndErr = $volMaxHoursErr = $volMaxHoursPeriodErr =
		$volExperienceErr = $volPrefErr = $volAgreesErr = "";

	// declare and initialize vars
	function process() {

		global $volDate, $volName, $volEmail, $volAddress, $volPhone, $volDOB, $volSex,
			$volEmerName, $volEmerEmail, $volEmerAddress, $volEmerPhone, 
			$volAvailMonStart, $volAvailMonEnd, $volAvailTueStart, $volAvailTueEnd,
			$volAvailWedStart, $volAvailWedEnd, $volAvailThuStart, $volAvailThuEnd,
			$volAvailFriStart, $volAvailFriEnd, $volAvailSatStart, $volAvailSatEnd,
			$volAvailSunStart, $volAvailSunEnd, $volMaxHours, $volMaxHoursPeriod,
			$volExperience, $volPref, $volAgrees;

		global $volDateErr, $volNameErr, $volEmailErr, $volAddressErr, $volPhoneErr, $volDOBErr, $volSexErr,
			$volEmerNameErr, $volEmerEmailErr, $volEmerAddressErr, $volEmerPhoneErr,
			$volAvailMonStartErr, $volAvailMonEndErr, $volAvailTueStartErr, $volAvailTueEndErr,
			$volAvailWedStartErr, $volAvailWedEndErr, $volAvailThuStartErr, $volAvailThuEndErr,
			$volAvailFriStartErr, $volAvailFriEndErr, $volAvailSatStartErr, $volAvailSatEndErr,
			$volAvailSunStartErr, $volAvailSunEndErr, $volMaxHoursErr, $volMaxHoursPeriodErr,
			$volExperienceErr, $volPrefErr, $volAgreesErr;

		// check if data posted
		// clean & validate data
		// save data

		if ( $_SERVER['REQUEST_METHOD'] == 'POST' && $_POST ) {

			// $volDate
			$volDate = $_POST['volDate'];

			// $volName
			$volName = cleanData($_POST['volName']);

			// $volEmail
	
			// $volAddress
			$volAddress = cleanData($_POST['volAddress']);

			// $volPhone

			// $volDOB

			// $volSex
			$volSex = $_POST['volSex'];

			// $volEmerName
			$volEmerName = cleanData($_POST['volEmerName']);

			// $volEmerEmail

			// $volEmerAddress
			$volEmerAddress = cleanData($_POST['volEmerAddress']);

			// $volEmerPhone

			// $volAvailMonStart
			// $volAvailMonEnd
			// $volAvailTueStart
			// $volAvailTueEnd
			// $volAvailWedStart
			// $volAvailWedEnd
			// $volAvailThuStart
			// $volAvailThuEnd
			// $volAvailFriStart
			// $volAvailFriEnd
			// $volAvailSatStart
			// $volAvailSatEnd
			// $volAvailSunStart
			// $volAvailSunEnd

			// $volMaxHours
			$volMaxHours = $_POST['volMaxHours'];

			// $volMaxHoursPeriod
			$volMaxHoursPeriod = $_POST['volMaxHoursPeriod'];

			// $volExperience
			$volExperience = cleanData($_POST['volExperience']);

			// $volPref
			$volPref = cleanData($_POST['volPref']);

			// $volAgrees
			if(isset($_POST['volAgrees'])) {
				$volAgrees		= $_POST['volAgrees'];
			} else {
				$volAgrees		= 'no';
			}

			if($hasErrors) {

				return '<p class="warning">Please correct the error in the form an resubmit.</p>';

			} else {

				$volunteer = array(
					// $volDate
					// $volName
					// $volEmail
					// $volAddress
					// $volPhone
					// $volDOB
					// $volSex
					// $volEmerName 
					// $volEmerEmail
					// $volEmerAddress
					// $volEmerPhone
					// $volAvailMonStart
					// $volAvailMonEnd
					// $volAvailTueStart
					// $volAvailTueEnd
					// $volAvailWedStart
					// $volAvailWedEnd
					// $volAvailThuStart
					// $volAvailThuEnd
					// $volAvailFriStart
					// $volAvailFriEnd
					// $volAvailSatStart
					// $volAvailSatEnd
					// $volAvailSunStart
					// $volAvailSunEnd
					// $volMaxHours
					// $volMaxHoursPeriod
					// $volExperience
					// $volPref
					// $volAgrees

				);

				// write to .json file
				saveData($donation, '../data/donations.json');

				// reset vars
				$lastName = $donName;

				$hasErrors = false;

				$donDate = $donAmountDog = $donAmountCat = $donPaymentPeriod = $donStart = 
					$donName = $donEmail = $donAddress = $donPhone = $donGift = "";

				$donAmountDogErr = $donAmountCatErr = $donStartErr = $donNameErr =
					$donEmailErr = $donAddressErr = $donPhoneErr = "";

				// return success msg
				return '<p class="success">Thank you very much for your generous donation, ' . $lastName . '!</p>';
			}
		}

	}

	// Simple data validation

	function validate( $data, $field ) {


		switch ( $field ) {

			// date
			case 'date' :  {

			}
			// email
			case 'email' : {

			}
			// phone
			case 'phone' : {

			}
			// $DOB
			case 'dob' : {

			}
			// time_period
			case 'time_period' : {

			}

			default :   break;
		}

	} // end validate

