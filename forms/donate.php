<?php 
	require('./../config.php');
	require('./../includes/header.php'); 

?>

<main role="main" class="clear main-wrapper">

	<!-- a form that allows users to donate money for sponsering an animal. Input values you could include: -->

	<h1>Donate</h1>

	<form id="adoption_form" method="POST" action="processRequest.php">
		<section class="button_float">
			<input type="submit" value="DONATE!" class="submit_button">
			<br/><br/>
			<input type="submit" value="CLEAR!" class="submit_button">
		</section>
		<section class="form_fields">

			<!-- current date -->
			<label for="don-date">Date </label> 
			<input id="don-date" type="date" name="donDate" value="<?php echo date('Y-m-d'); ?>">

			<!-- amount (different amounts for different animals) -->
			<fieldset id="don-amount">
				<legend>Amount</legend>

				<label class="don-label" for="don-amount-dog">Dogs $</label>
				<input id="don-amount-dog" type="number" name="donAmountDog" value="0" min="0" set="1">

				<br>

				<label class="don-label" for="don-amount-cat">Cats $</label>
				<input id="don-amount-cat" type="number" name="donAmountCat" value="0" min="0" set="1">

				<br>

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
				<input id="don-start" type="date" name="donStart" value="<?php echo date('Y-m'); ?>">

			</fieldset>

			<!-- contact information (name, email, address, phone) -->

			<fieldset id="don-contact-info">

				<legend>Contact Information</legend>

				<label class="don-label" for="don-name">Name</label>
				<input type="text" id="don-name" name="donName" placeholder="Alan Turing">
				<br>

				<label class="don-label" for="don-email">Email</label>
				<input type="email" id="don-email" name="donEmail" placeholder="alan.turing@email.com">
				<br>

				<label class="don-label" for="don-address">Address</label>
				<input type="text" id="don-address" name="donAddress">
				<br>

				<label class="don-label" for="don-phone">Phone</label>
				<input type="telephone" id="don-phone" name="donPhone" placeholder="(253) 555-1234">

			</fieldset>

			<br>

			<!-- whether or not this donation is a gift -->
			<input id="don-gift" type="checkbox" name="donGift" value="true"> Yes, this donation is a gift!

		</section>
	</form>
</main>


<?php require('./../includes/footer.php'); ?>
