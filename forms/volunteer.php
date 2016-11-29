<?php 
	require '../config.php';
	require '../includes/header.php'; 
    require '../includes/volunteerProcess.php';

?>

<main role="main" class="clear main-wrapper">
	<h1>Volunteer</h1>

	<?php

		if(isset($_POST['submitButton'])){ //check if form was submitted
			echo process();
		}

	?>


	<form id="adoption_form" method="POST" action="">
		<section class="button_float">
			<input type="submit" name="submitButton" value="SUBMIT!" class="submit_button">
			<input type="reset" value="CLEAR!" class="submit_button">
		</section>
		<section class="form_fields">

			<!-- current date -->
			<!--<fieldset id="vol-date">
				<legend>Date</legend>-->
				<input 
					type="hidden" 
					id="vol-current-date" 
					value="<?php echo date('Y-m-d'); ?>"
				>
			<!--</fieldset>-->
			<br> 


			<!-- contact information (name, email, address, phone) -->
			<fieldset class="vol-contact" id="vol-contact-info">

				<legend>Contact Information</legend>

				<label class="vol-label" for="vol-name">Name</label>
				<input 
					type="text" 
					id="vol-name" 
					name="volName" 
					value="<?= $volName; ?>"
					placeholder="Alan Turing"
					autofocus
					required
				>

				<br>

				<label class="vol-label" for="vol-email">Email</label>
				<input 
					type="email" 
					id="vol-email"
					name="volEmail"
					value="<?= $volEmail; ?>"
					placeholder="alan.turing@enigma.com"
					required
				>
				<?php if(!empty($volEmailErr)) echo '<span class="warning">' . $volEmailErr . '</span>';?>

				<br>

				<label class="vol-label" for="vol-address">Address</label>
				<input 
					type="text" 
					id="vol-address" 
					name="volAddress"
					value="<?= $volAddress; ?>"
				>

				<br>

				<label class="vol-label" for="vol-phone">Phone</label>
				<input 
					type="tel" 
					id="vol-phone" 
					name="volPhone" 
					value="<?= $volPhone; ?>"
					placeholder="(253) 555-1234"
				>

				<?php if(!empty($volPhoneErr)) echo '<span class="warning">' . $volPhoneErr . '</span>';?>

			</fieldset>

			<br>

			<!-- date of birth and gender -->
			<fieldset id="vol-personal-details">
				<legend>Personal Details</legend>

				<label class="vol-label" for="vol-dob" >Date of Birth</label>
				<input 
					type="date" 
					id="vol-dob" 
					name="volDOB"
					value="<?= $volDOB; ?>"
					required
				>
				
				<?php if(!empty($volDOBErr)) echo '<span class="warning">' . $volDOBErr . '</span>';?>

				<br>

				<label class="vol-label" for="vol-sex" >Sex</label>
				<select id="vol-sex" name="volSex">
					<option></option>
					<option value="male" <?php if($volSex == 'male') echo 'selected'; ?>>Male</option>
					<option value="female" <?php if($volSex == 'female') echo 'selected'; ?>>Female</option>
				</select>

			</fieldset>

			<br>

			<!-- emergency contact information (name, email, address, phone) and relationship to you -->
			<fieldset class="vol-contact" id="vol-emergency-contant">
				<legend>Emergency Contact</legend>

				<label class="vol-label" for="vol-emer-name">Name</label>
				<input 
					type="text" 
					id="vol-emer-name" 
					name="volEmerName" 
					value="<?= $volEmerName; ?>"
					placeholder="Alan Turing" 
					required
				>

				<br>

				<label class="vol-label" for="vol-emer-email">Email</label>
				<input 
					type="email" 
					id="vol-emer-email" 
					name="volEmerEmail"
					value="<?= $volEmerEmail; ?>" 
					placeholder="alan.turing@enigma.com"
					required
				>

				<?php if(!empty($volEmerEmailErr)) echo '<span class="warning">' . $volEmerEmailErr . '</span>';?>

				<br>

				<label class="vol-label" for="vol-emer-address">Address</label>
				<input 
					type="text" 
					id="vol-emer-address" 
					name="volEmerAddress"
					value="<?= $volEmerAddress; ?>"
				>

				<br>

				<label class="vol-label" for="vol-emer-phone">Phone</label>
				<input 
					type="telephone" 
					id="vol-emer-phone" 
					name="volEmerPhone"
					value="<?= $volEmerPhone; ?>" 
					placeholder="(253) 555-1234"
				>

				<?php if(!empty($volEmerPhoneErr)) echo '<span class="warning">' . $volEmerPhoneErr . '</span>';?>

			</fieldset>

			<br>

			<!-- availability - days (Sunday through Saturday), start and end times (7am to midnight) -->
			<fieldset id="vol-avail">
				<legend>Availability</legend>
				<?php 
		
					$days = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");

					foreach($days as $day):

						$short = substr($day, 0, 3);
						$short_lower = substr(strtolower($day), 0, 3);

				?>

				<fieldset class="vol-avail <?php if(!empty(${'volAvail' . $short . 'PeriodErr'})) echo 'warning'?>" id="vol-avail-<?php echo $short_lower; ?>">
				<legend><?php echo $day; ?></legend>

					<label class="vol-avail-label" for="vol-avail-<?php echo $short_lower; ?>-start">Start</label>
					<input 
						type="time" 
						id="vol-avail-<?php echo $short_lower; ?>-start" 
						name="volAvail<?php echo $short; ?>Start" 
						min="07:00" 
						max="24:00" 
						value="<?php if(empty(${'volAvail' . $short . 'Start'})) echo '07:00'; else echo ${'volAvail' . $short . 'Start'}; ?>"
					>

					<label class="vol-avail-label" for="vol-avail-<?php echo $short_lower; ?>-end">End</label>
					<input 
						type="time" 
						id="vol-avail-<?php echo $short_lower; ?>-end" 
						name="volAvail<?php echo $short; ?>End" 
						min="07:00" 
						max="24:00" 
						value="<?php if(empty(${'volAvail' . $short . 'End'})) echo '15:00'; else echo ${'volAvail' . $short . 'End'}; ?>"

					>
				</fieldset>

				<?php endforeach; ?>

			</fieldset>

			<br>

			<fieldset id="vol-important-details">

				<legend>Important Details</legend>

				<!-- max hours per month or week willing to volunteer -->
				<label for="vol-max-hours">I would like to volunteer a maximum of </label>
				<input 
					type="number" 
					id="vol-max-hours" 
					name="volMaxHours"
					value="<?= $volMaxHours; ?>"
					placeholder="10" 
					min="1" 
					max="744"
					required
				>

				<label for="vol-max-hours-period" > hours per </label>
				<input 
					type="radio" 
					id="vol-max-hours-period" 
					name="volMaxHoursPeriod" 
					value="month"
					<?php if($volMaxHoursPeriod == 'month') echo 'checked'; ?>
				> month or 
				<input 
					type="radio" 
					id="vol-max-hours-period" 
					name="volMaxHoursPeriod" 
					value="week"
					<?php if($volMaxHoursPeriod == 'week') echo 'checked'; ?>
				> week.
				
				<br><br>

				<!-- skills and experience (see example for ideas) -->
				<label for="vol-experience">Skills and Experience</label>
				<br>
				<textarea 
					id="vol-experience" 
					name="volExperience" 
					rows="10"
					required
				><?= $volExperience; ?></textarea>

				<br><br>

				<!-- assignment preferences-->
				<label for="vol-pref">Assignment Preferences</label>
				<br><br>
				
				<!--event work-->
				<label for="vol-pref-events" class="vol-label">Event Work</label>
				<input
					type="range"
					name="volEvents"
					min="0"
					max="10"
					incremint="1"
					value="<?=$volEvents;?>"
				>
				<br/><br/>
				
				<!--office work-->
				<label for="vol-pref-office" class="vol-label">Office Work</label>
				<input
					type="range"
					name="volOffice"
					min="0"
					max="10"
					incremint="1"
					value="<?=$volOffice;?>"
				>
				<br/><br/>
				
				<!--animal work-->
				<label for="vol-pref-events" class="vol-label">Animal Transport/ Cleanup</label>
				<input
					type="range"
					name="volCleanup"
					min="0"
					max="10"
					incremint="1"
					value="<?=$volCleanup;?>"
				>
				<br/><br/>
				<label for="vol-pref">List specific preferences here</label>
				<textarea 
					id="vol-pref" 
					name="volPref" 
					rows="10"
					required
				><?= $volPref; ?></textarea>

			</fieldset>

			<!-- Volunteer Application Agreement (see example for ideas) -->
			<p>I understand and agree that submitting this application form does not automatically register me as a volunteer, and that there may be certain qualifications I must meet, including the acceptance of established volunteer policies and procedures before I may begin volunteering.</p>

			<p>By submitting this form, I attest that the information I have provided on the form is true and accurate.</p>

			<input 
				type="checkbox"
				name="volAgrees"
				value="yes"
				required
				<?php if($volAgrees == 'yes') echo 'checked'; ?>
			> I agree.</input>

			<br><br><hr>

		</section>
	</form>
</main>


<?php require('./../includes/footer.php'); ?>
