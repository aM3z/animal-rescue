<?php 
	require('./../config.php');
	require('./../includes/header.php'); 
	require('./../includes/process.php');
?>

<main role="main" class="clear main-wrapper">
	<h1>Adopt!</h1>
	<form id="adoption_form" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<section class="button_float">
			<input type="submit" value="ADOPT!" class="submit_button">
			<input type="submit" value="CLEAR!" class="submit_button">
		</section>
		<section class="form_fields">
			<fieldset id="adoptee">
				<legend>adoptee</legend>
				<label for="petname" class="label">Name</label>
					<input type="text" id="pname" name="pet_name" value="first"autofocus required>
				<br/><br/>
				<label for="why" class="label">Why do you think you are the perfect family for this pet?</label><br/>
					<input type="text" id="why" name="why">
				<br/><br/>
				<label for="leaving" class="label">What would lead you to giving up this pet?</label><br/>
					<input type="text" id="leaving" name="leaving">

			</fieldset>	
		
			<fieldset id="about you">
				<legend>about you</legend>
				
				<fieldset id="contact">
					<legend>contact information</legend>
					
					<label for="name" class="label">Name</label>
						<input type="text" id="fname" name="first_name" value="first"autofocus required>
						<input type="text" id="lname" name="last_name" value="last"autofocus required>

					<br/><br/>
					<label for="emailaddr" class="label">Email</label>
						<input type="email" id="emailaddr" name="Email_Add" value="email@email.com" required>
					<br/><br/>
					<label for="phonenum" class="label">Phone</label>
						<input type="phone" id="phonenum" name="Phone_num" value="" required>

				</fieldset>
				
				<fieldset id="your home">
					<legend>Your home</legend>
					<label for="mailaddr" class="label">Address</label>
						<input type="mail addr" id="mailaddr" name="Mail_Add" required>
					<br/><br/>
					<label for="c_addr" class="label">City</label>
						<input type="city addr" id="cityaddr" name="City_Add" required>
					<br/><br/>
					<label for="s_addr" class="label">State</label>
						<input type="state addr" id="stateaddr" name="State_Add" required>
					<br/><br/>
					<label for="z_addr" class="label">Zipcode</label>
						<input type="zip code" id="zipcode" name="Zipcode" required>
					<br/><br/>
					<label for="housetype"> House Type</label>
					 <select id="houseType" name="HouseType">
						<option label="house" value="house">
						<option label="condo" value="condo">
						<option label="mobile" value="mobile">
						<option label="appartment" value="appartment">
						<option label="townhouse" value="townhouse">
						<option label="other" value="other">
					 </select>
				</fieldset>
				
				<fieldset id="family">
					<legend>your family</legend>
					
					<label for="kids" class="label">How many kids do you have?</label>
						<input type="number" id="kids" name="Kids" value="2" min="0">
					<br/><br/>
					<label for="pets" class="label">How many pets do you have?</label>
						<input type="number" id="pets" name="Pets" value="1" min="0">
					<br/><br/>
					<label for="pets" class="label">Are they spayed/neutered/vaccanated?</label><br/>
						<input type="radio" id="snv" name="snv" value="yes"> <label for="single" class="label"> yes</label>
						
						<input type="radio" id="snv" name="snv" value="yes"> <label for="single" class="label"> no</label>
						
						<input type="radio" id="snv" name="snv" value="yes"> <label for="single" class="label"> n/a</label>						
					
				</fieldset>
			</fieldset>
			
			<fieldset id="extra">
				<legend>extra</legend>
				
				<label for="today_date" class="label">Today's Date</label>
					<input type="date" id="today_date" name="date" requied>

			</fieldset>
		</section>
	</form>
</main>


<?php require('./../includes/footer.php'); ?>
