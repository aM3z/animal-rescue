<?php 
	require('./../config.php');
	require('./../includes/header.php'); 

?>

<main role="main" class="clear main-wrapper">
	<h1>Volunteer</h1>
	<form id="adoption_form" method="POST" action="processRequest.php">
		<section class="button_float">
			<input type="submit" value="ADOPT!" class="submit_button">
			<br/><br/>
			<input type="submit" value="CLEAR!" class="submit_button">
		</section>
		<section class="form_fields">

			<!-- current date -->
			<fieldset id="vol-date">
				<legend>Date</legend>
				<input type="date" id="vol-current-date" name="volDate" value="<?php print date('Y-m-d'); ?>">
			</fieldset>
			<br>


			<!-- contact information (name, email, address, phone) -->
			<fieldset class="vol-contact" id="vol-contact-info">

				<legend>Contact Information</legend>

				<label class="vol-label" for="vol-name">Name</label>
				<input type="text" id="vol-name" name="volName" placeholder="Alan Turing" autofocus>
				<br>

				<label class="vol-label" for="vol-email">Email</label>
				<input type="email" id="vol-email" name="volEmail" placeholder="alan.turing@email.com">
				<br>

				<label class="vol-label" for="vol-address">Address</label>
				<input type="text" id="vol-address" name="volAddress">
				<br>

				<label class="vol-label" for="vol-phone">Phone</label>
				<input type="telephone" id="vol-phone" name="volPhone" placeholder="(253) 555-1234">

			</fieldset>

			<br>

			<!-- date of birth and gender -->
			<fieldset id="vol-personal-details">
				<legend>Personal Details</legend>

				<label class="vol-label" for="vol-dob" >Date of Birth</label>
				<input type="date" id="vol-dob" name="volDOB" value="<?php print date("Y-m-d", strtotime('-18 year') ); ?>">
				<br>

				<label class="vol-label" for="vol-sex" >Sex</label>
				<select id="vol-sex" name="volSex">
					<option></option>
					<option value="male">Male</option>
					<option value="female">Female</option>
				</select>

			</fieldset>

			<br>

			<!-- emergency contact information (name, email, address, phone) and relationship to you -->
			<fieldset class="vol-contact" id="vol-emergency-contant">
				<legend>Emergency Contact</legend>

				<label class="vol-label" for="vol-emer-name">Name</label>
				<input type="text" id="vol-emer-name" name="volEmerName" placeholder="Alan Turing" autofocus>
				<br>

				<label class="vol-label" for="vol-emer-email">Email</label>
				<input type="email" id="vol-emer-email" name="volEmerEmail" placeholder="alan.turing@email.com">
				<br>

				<label class="vol-label" for="vol-emer-address">Address</label>
				<input type="text" id="vol-emer-address" name="volEmerAddress">
				<br>

				<label class="vol-label" for="vol-emer-phone">Phone</label>
				<input type="telephone" id="vol-emer-phone" name="volEmerPhone" placeholder="(253) 555-1234">

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

				<fieldset class="vol-avail" id="vol-avail-<?php echo $short_lower; ?>">
				<legend><?php echo $day; ?></legend>

					<label class="vol-avail-label" for="vol-avail-<?php echo $short_lower; ?>-start">Start</label>
					<input type="time" id="vol-avail-<?php echo $short_lower; ?>-start" name="volAvail<?php echo $short; ?>Start" min="07:00:00" max="00:00:00" value="07:00:00">

					<label class="vol-avail-label" for="vol-avail-<?php echo $short_lower; ?>-end">End</label>
					<input type="time" id="vol-avail-<?php echo $short_lower; ?>-end" name="volAvail<?php echo $short; ?>End" min="07:00:00" max="00:00:00" value="00:00:00">

				</fieldset>

				<?php endforeach; ?>

			</fieldset>

			<br>

			<fieldset id="vol-important-details">
				<legend>Important Details</legend>
				<!-- max hours per month or week willing to volunteer -->
				<label for="vol-max-hours">I would like to volunteer a maximum of </label>
				<input type="number" id="vol-max-hours" name="volMaxHours" placeholder="10" min="1" max="744">
				<label for="vol-max-hours-period" > hours per </label>
				<input type="radio" id="vol-max-hours-period" name="volMaxHoursPeriod" value="month"> month or 
				<input type="radio" id="vol-max-hours-period" name="volMaxHoursPeriod" value="week"> week.
				
				<br>

				<!-- skills and experience (see example for ideas) -->
				<label for="vol-experience">Skills and Experience</label>
				<br>
				<textarea id="vol-experience" name="volExperience" cols="50" rows="10"></textarea>
				<br>

				<!-- assignment preferences (see example for ideas) -->
				<label for="vol-pref">Assignment Preferences</label>
				<br>
				<textarea id="vol-pref" name="volPref" cols="50" rows="10"></textarea>

			</fieldset>

			<!-- Volunteer Application Agreement (see example for ideas) -->
			<p>I understand and agree that submitting this application form does not automatically register me as a volunteer, and that there may be certain qualifications I must meet, including the acceptance of established volunteer policies and procedures before I may begin volunteering.</p>

			<p>By submitting this form, I attest that the information I have provided on the form is true and accurate.</p>

			<input type="checkbox" name="volAgrees" value="true"> I agree.</input>

			<br><br><hr>

		</section>
	</form>
</main>


<?php require('./../includes/footer.php'); ?>
