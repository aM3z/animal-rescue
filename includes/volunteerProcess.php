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


			default :   break;
		}

	} // end validate

