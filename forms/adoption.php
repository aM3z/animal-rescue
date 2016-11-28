<?php 
	require('./../config.php');
	require('./../includes/header.php'); 
	require('./../includes/adoptionProcess.php');
?>

<main role="main" class="clear main-wrapper">
	<h1>Adopt!</h1>
	<?php

		if(isset($_POST['submitButton'])){ //check if form was submitted
			echo process();
		}

	?>
	<form id="adoption_form" method="POST" action=""> <!--<?php //echo $_SERVER['PHP_SELF']; ?>-->
		<section class="button_float">
			<input type="submit" value="ADOPT!" class="submit_button" name="submitButton">
			<input type="reset" value="CLEAR!" class="submit_button" name="clearButton">
		</section>
		<section class="form_fields">
			<fieldset id="adoptee">
				<legend>adoptee</legend>
				
				<!--pet name-->
				<label for="petname" class="vol-label">Name</label>
					<input 
						type="text" 
						id="pet-name" 
						name="petName" 
						placeholder="spot"
						value= "<?= $vars['petName']; ?>"
						pattern="^[a-zA-Z\s]+$"
						required
					>
				<br/><br/>
				
				<!--why adopt pet?-->
				<label for="why" class="vol-label">Why do you think you are the perfect family for this pet?</label>
					<textarea 
						type="text" 
						id="why" 
						name="why"
						rows="6"
						cols="50"
						placeholder="pleae enter a paragraph"
						required
					><?= $vars['why']; ?></textarea>
										
				<br/><br/>
				
				<!--why give up pet-->
				<label for="leaving" class="vol-label">What would lead you to giving up this pet?</label>
				<textarea 
						type="text" 
						id="leaving" 
						name="leaving"
						rows="6"
						cols="50"
						placeholder="You may list or paragraph"
						required
				><?= $vars['leaving']; ?></textarea>

			</fieldset>	
		
			<fieldset id="about you">
				<legend>about you</legend>
				
				<fieldset id="contact">
					<legend>contact information</legend>
					
					<label for="name" class="vol-label">Name</label>
						<input 
							type="text" 
							id="fname" 
							name="name" 
							placeholder="First Last"
							value="<?= $vars['name']; ?>"
							pattern="^[a-zA-Z\s]+$"
							required
						>

					<br/><br/>
					<label for="emailaddr" class="vol-label">Email</label>
						<input 
							type="text" 
							id="emailaddr" 
							name="email" 
							value="<?= $vars['email']; ?>"
							placeholder="email@host.com"
						>
						
						<?php if(!empty($varsErrors['email'])) echo '<span class="warning">' . $varsErrors['email'] . '</span>';?>
						
					<br/><br/>
					<label for="phonenum" class="vol-label">Phone</label>
						<input 
							type="phone" 
							id="phonenum" 
							name="phone" 
							value="<?= $vars['phone']; ?>"
							placeholder="(253) 555-1234"
							required
						>
						
					<?php if(!empty($varsErrors['phone'])) echo '<span class="warning">' . $varsErrors['phone'] . '</span>';?>

				</fieldset>
				<!--
				<fieldset id="your home">
					<legend>Your home</legend>
					<label for="mailaddr" class="vol-label">Address</label>
						<input 
							type="mail addr" 
							id="mailaddr" 
							name="mailAdd" 
							value=<?= $vars['mailAdd']; ?>
							required
						>
					<br/><br/>
					<label for="c_addr" class="vol-label">City</label>
						<input 
							type="city addr" 
							id="cityaddr" 
							name="cityAdd" 
							value=<?= $vars['cityAdd']; ?>
							required
						>
					<br/><br/>
					<label for="s_addr" class="vol-label">State</label>
						<input 
							type="state addr" 
							id="stateaddr" 
							name="stateAdd" 
							value=<?= $vars['stateAdd']; ?>
							required
						>
					<br/><br/>
					<!--
					<label for="z_addr" class="vol-label">Zipcode</label>
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
					 </select>-->
				</fieldset>
				
				<!--
				<fieldset id="family">
					<legend>your family</legend>
					
					<label for="kids" class="vol-label">How many kids do you have?</label>
						<input type="number" id="kids" name="Kids" value="2" min="0">
					<br/><br/>
					<label for="pets" class="vol-label">How many pets do you have?</label>
						<input type="number" id="pets" name="Pets" value="1" min="0">
					<br/><br/>
					<label for="pets" class="vol-label">Are they spayed/neutered/vaccanated?</label><br/>
						<input type="radio" id="snv" name="snv" value="yes"> <label for="single" class="vol-label"> yes</label>
						
						<input type="radio" id="snv" name="snv" value="yes"> <label for="single" class="vol-label"> no</label>
						
						<input type="radio" id="snv" name="snv" value="yes" checked> <label for="single" class="vol-label"> n/a</label>						
					
				</fieldset>
			</fieldset>
			
			<fieldset id="extra">
				<legend>extra</legend>
				
				<label for="today_date" class="vol-label">Today's Date</label>
					<input type="date" id="today_date" name="date" requied>

			</fieldset> -->
		</section>
	</form>
</main>


<?php require('./../includes/footer.php'); ?>
