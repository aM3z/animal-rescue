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
	<form id="adoption_form" method="POST" action="">
		<section class="button_float">
			<article>
				<input type="submit" value="ADOPT!" class="submit_button" name="submitButton">
				<input type="reset" value="CLEAR!" class="submit_button" name="clearButton">
			</article>
		</section>
		<section class="form_fields">
			<fieldset id="adoptee">
				<legend>Adoptee</legend>
				
				<!--pet name-->
				<label for="petname" class="vol-label"><req>Name</req></label>
					<input 
						type="text" 
						id="pet-name" 
						name="petName" 
						placeholder="spot"
						value= "<?= $vars['petName']; ?>"
						pattern="^[a-zA-Z\s]+$"
						required
					>
					<?php if(!empty($varsErrors['petName'])) echo '<span class="warning">' . $varsErrors['petName'] . '</span>';?>
				<br/><br/>
				
				<!--why adopt pet?-->
				<label for="why"><req>Why do you think you are the perfect family for this pet?</req></label>
				<br/>
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
				<label for="leaving"><req>What would lead you to giving up this pet?</req></label><br/>
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
					
					<!--name-->
					<label for="name" class="vol-label"><req>Name</req></label>
						<input 
							type="text" 
							id="fname" 
							name="name" 
							placeholder="First Last"
							value="<?= $vars['name']; ?>"
							pattern="^[a-zA-Z\s]+$"
							required
						>
						<?php if(!empty($varsErrors['name'])) echo '<span class="warning">' . $varsErrors['name'] . '</span>';?>

					<br/><br/>
					
					<!--email-->
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
					
					<!--phone-->
					<label for="phonenum" class="vol-label"><req>Phone</req></label>
						<input 
							type="phone" 
							id="phonenum" 
							name="phone" 
							value="<?= $vars['phone']; ?>"
							placeholder="253-555-1234"
							required
						>
						
						<?php if(!empty($varsErrors['phone'])) echo '<span class="warning">' . $varsErrors['phone'] . '</span>';?>

				</fieldset>
				
				<fieldset id="your home">
					<legend>Your home</legend>
					
					<!--address-->
					<label for="mailaddr" class="vol-label"><req>Address</req></label>
						<input 
							type="mail addr" 
							id="mailaddr" 
							name="mailAdd" 
							placeholder="0000 pacific ave"
							value="<?= $vars['mailAdd']; ?>"
							required
						>
						<?php if(!empty($varsErrors['mailAdd'])) echo '<span class="warning">' . $varsErrors['mailAdd'] . '</span>';?>
					<br/><br/>
					
					<!--city-->
					<label for="c_addr" class="vol-label"><req>City</req></label>
						<input 
							type="city addr" 
							id="cityaddr" 
							name="cityAdd" 
							placeholder="tacoma"
							value="<?= $vars['cityAdd']; ?>"
							required
						>
						
					<br/><br/>
					
					<!--state-->
					<label for="s_addr" class="vol-label"><req>State</req></label>
						<input 
							type="state addr" 
							id="stateaddr" 
							name="stateAdd" 
							placeholder="wa"
							value="<?= $vars['stateAdd']; ?>"
							required
						>
						
						<?php if(!empty($varsErrors['stateAdd'])) echo '<span class="warning">' . $varsErrors['stateAdd'] . '</span>';?>
					<br/><br/>
				
					<!--zipcode-->
					<label for="z_addr" class="vol-label"><req>Zipcode</req></label>
						<input 
							type="zip code" 
							id="zipcode" 
							name="zipCode" 
							placeholder="98444"
							value="<?= $vars['zipCode']; ?>"
							required
						>
						<?php if(!empty($varsErrors['zipCode'])) echo '<span class="warning">' . $varsErrors['zipCode'] . '</span>';?>
						
					<br/><br/>
					
					<!--house-->
					<label for="housetype"><req>House Type</req></label>
					 <select 
						id="housetype" 
						name="houseType">
						<option label="house" value="house" <?php if($vars['houseType'] == 'house') echo 'selected'; ?> >
						<option label="condo" value="condo" <?php if($vars['houseType'] == 'condo') echo 'selected'; ?>>
						<option label="mobile" value="mobile" <?php if($vars['houseType'] == 'mobile') echo 'selected'; ?>>
						<option label="appartment" value="appartment" <?php if($vars['houseType'] == 'apartment') echo 'selected'; ?>>
						<option label="townhouse" value="townhouse" <?php if($vars['houseType'] == 'townhouse') echo 'selected'; ?>>
						<option label="other" value="other" <?php if($vars['houseType'] == 'other') echo 'selected'; ?>>
					 </select>
				</fieldset>
				
				<fieldset id="family">
					<legend>your family</legend>
					
					<!--kid num-->
					<label for="kids">How many kids under 10 years old do you have?</label>
					<br/>
						<input 
							type="number" 
							id="kids" 
							name="kids" 
							value="<?= $vars['kids']; ?>" 
							min="0"
						>
					<?php if(!empty($varsErrors['kids'])) echo '<span class="warning">' . $varsErrors['kids'] . '</span>';?>	
					<br/><br/>
					
					
					<!--pet num-->
					<label for="pets">how many pets and what pets do you have?</label>
					<br/>
						<textarea 
							id="pets" 
							name="pets"
							placeholder="enter number then type ex:<?="\n"?>3 cats <?="\n"?>0 dogs <?="\n"?>1 hamster"
							cols="40"
							rows="4"><?= $vars['pets']; ?></textarea>
							
						<?php if(!empty($varsErrors['pets'])) echo '<span class="warning">' . $varsErrors['pets'] . '</span>';?>
					<br/><br/>
					
					<!--spayed/neutered/vac-->
					<label for="pets"><req>Are they spayed/neutered/vaccanated?</req></label><br/>
						<input 
							type="radio" 
							id="snv" 
							name="snv" 
							value="yes"
							<?php if($vars['snv'] == 'yes') echo 'checked'; ?>
						> 
						<label for="single" class="vol-label"> yes</label>
						
						<input
							type="radio" 
							id="snv" 
							name="snv" 
							value="no" 
							<?php if($vars['snv'] == 'no') echo 'checked'; ?>
						>
						<label for="single" class="vol-label"> no</label>
						
						<input 
							type="radio" 
							id="snv" 
							name="snv" 
							value="na"
							<?php if($vars['snv'] == 'na') echo 'checked'; ?>
							required
						>
						<label for="single" class="vol-label"> n/a</label>						
					
				</fieldset>
			</fieldset>
			
			<fieldset id="extra">
				<legend>extra</legend>
				
					<!--current date-->
					<input 
					type="hidden" 
					id="vol-current-date" 
					value="<?php echo date('Y-m-d'); ?>"
					>
					
					<!--followup appt-->
					<label for="followup"><req>when would you like a follow up appointment?</req></label>
					<br/><br/>
					<label for="apt_date" class="vol-label"><req>Day</req></label>
					<input 
						type="date" 
						id="apt_date" 
						name="aptDate"
						value="<?= $vars['aptDate']; ?>" 						
						required
					>
					
					<?php if(!empty($varsErrors['aptDate'])) echo '<span class="warning">' . $varsErrors['aptDate'] . '</span>';?>					

					<br/><br/>
					<label for="apt_time" class="vol-label"><req>Time</req></label>
					<input 
						type="time" 
						id="apt_time" 
						name="aptTime" 
						value="<?= $vars['aptTime']; ?>" 
						required
					>

					<?php if(!empty($varsErrors['aptTime'])) echo '<span class="warning">' . $varsErrors['aptTime'] . '</span>';?>					

			</fieldset>
		</section>
	</form>
</main>


<?php require('./../includes/footer.php'); ?>
