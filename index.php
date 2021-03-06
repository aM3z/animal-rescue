<?php 


	require('./config.php');
	require('./includes/header.php'); 

?>
		
			<div class="banner">
				<div class="call-to-action main-wrapper">
					<p>Ways to help</p>
					<a href="<?= ADOPTION_FORM ?>" class="btn-default">Adopt</a>
					<a href="<?= VOLUNTEER_FORM ?>" class="btn-default">Volunteer</a>
					<a href="<?= DONATE_FORM ?>" class="btn-default">Donate</a>
				</div>
			</div>
			<main role="main" class="clear main-wrapper">

							
				<article class="welcome-msg"> 
					<header>
						<h1>Welcome!</h1>
					</header>
					<p><a href="https://www.michaelmorpurgo.com/" target="_blank">Michael Morpurgo</a>, author of <em>War Horse</em>, once said,</p>
					<blockquote>"Animals are sentient, intelligent, perceptive, funny and entertaining. We owe them a duty of care as we do to children."</blockquote> <p>This website is for people who agree with him!</p>

					<p>The dogs and cats featured here are up for adoption. They would make great pets. They've all been properly vaccinated and have been examined by a veterinarian. New arrivals are featured to the right. You can find more information on each pet by using the main menu to navigate to their page.</p>
				
					<p>If adoption is not an option for you, any support of our efforts would be greatly appreciated.</p>

					<p>Check out the adoption pages listing animals available for adoption: <a href="./dog-index.php">dogs</a> and <a href="./cat-index.php">cats</a>.</p>
					
				</article>

				<?php require("./includes/sidebar1.php"); ?>
			</main>

			

<?php require('./includes/footer.php'); ?>
