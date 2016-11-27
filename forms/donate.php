<?php 
	require '../config.php';
	require '../includes/header.php'; 
	require '../includes/donateProcess.php';
?>

<main role="main" class="clear main-wrapper">

	<!-- a form that allows users to donate money for sponsering an animal. Input values you could include: -->

	<h1>Donate</h1>
	<?php

		if(isset($_POST['submitButton'])){ //check if form was submitted
			echo process();
		}
	?>
	<?php print_r('here: ' . $hasErrors); ?>
	<form id="donation-form" method="POST" action="">
		<section class="button_float">
			<input type="submit" name="submitButton" value="DONATE!" class="submit_button">
			<br/><br/>
			<input type="submit" name="clearButton" value="CLEAR!" class="submit_button">
		</section>
		<section class="form_fields">

			<!-- current date -->
			<fieldset id="don-date">
				<legend>Date</legend>
				<input id="don-date" type="date" name="donDate" value="<?php echo date('Y-m-d'); ?>" disabled>
			</fieldset>

			<br>

			<!-- amount (different amounts for different animals) -->
			<fieldset id="don-amount">
				<legend>Amount</legend>

				<label class="vol-label" for="don-amount-dog">Dogs</label>
				<input id="don-amount-dog" 
					type="number" 
					name="donAmountDog" 
					value="<?php if(isset($_POST['donAmountDog'])) { echo $donAmountDog;} else { echo '0.00';} ?>" 
					min="0" 
					step="0.01" 
					style="text-align: center;" 
				required autofocus> USD

				<br><br>

				<label class="vol-label" for="don-amount-cat">Cats</label>
				<input  id="don-amount-cat" 
					type="number" 
					name="donAmountCat" 
					value="<?php if(isset($_POST['donAmountCat'])) { echo $donAmountCat;} else { echo '0.00';} ?>" 
					min="0" 
					step="0.01" 
					style="text-align: center;" 
				required> USD

				<br><br><hr>

				<!-- payment period (weekly, monthly, quarterly etc.) -->
				<label for="don-payment-period">Month to start </label>
				<select id="don-payment-period" name="donPaymentPeriod">
					<option value="weekly">weekly</option>
					<option value="monthy">monthly</option>
					<option value="quaterly">quaterly</option>
					<option value="semiannually">semiannual</option>
					<option value="annually">annual</option>
				</select>

				<!-- month to start donation (should be stored as a date) -->
				<label for="don-start">donation: </label>
				<select id="don-start" name="donStart">
					<?php

						$today 		= date('Y-m-d');
						$future		= date('Y-m-d', strtotime('+1 year'));
						$start	  	= new DateTime($today);
						$start->modify('first day of this month');
						$end		= new DateTime($future);
						$end->modify('first day of next month');
						$interval 	= DateInterval::createFromDateString('1 month');
						$period   	= new DatePeriod($start, $interval, $end);

						foreach ($period as $dt) {
    						echo "<option value=\"" . $dt->format("Y-m-d") . "\">" . $dt->format("M  Y") . "</option>\n";
						}
					?>
				</select>
			</fieldset>

			<br>

			<!-- contact information (name, email, address, phone) -->

			<fieldset id="don-contact-info">

				<legend>Contact Information</legend>

				<label class="vol-label" for="don-name">Name</label>
				<input type="text" 
					id="don-name" 
					name="donName" 
					placeholder="Alan Turing"
					value="<?= $donName; ?>"
					pattern="^[a-zA-Z\s]+$"
					required
				>
				<br>

				<label class="vol-label" for="don-email">Email</label>
				<input type="email" 
					id="don-email" 
					name="donEmail" 
					placeholder="alan.turing@email.com"
					value="<?= $donEmail; ?>"
					required
				>

				<?php if(!empty($donEmailErr)) echo '<span class="form-error">' . $donEmailErr . '</span>';?>

				<br>

				<label class="vol-label" for="don-address">Address</label>
				<input type="text" 
					id="don-address"
					name="donAddress">
				<br>

				<label class="vol-label" for="don-phone">Phone</label>
				<input type="telephone" id="don-phone" name="donPhone" placeholder="(253) 555-1234">

			</fieldset>

			<br>

			<!-- whether or not this donation is a gift -->
			<input id="don-gift"
				type="checkbox" 
				name="donGift" 
				value="yes"
				<?php if(isset($_POST['donGift'])) print 'checked'; ?>> Yes, this donation is a gift!

			<br><br><hr>

		</section>
	</form>

</main>


<?php require '../includes/footer.php'; ?>
