<?php 


	require('./config.php');
	require('./includes/header.php'); 

?>
		
			<div class="banner">
				<div class="call-to-action main-wrapper">
					<p>Pet Lovers Unite</p>
					<a class="btn-default" href="<?php print BASE_PATH; ?>/about.php">Learn more</a>
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
				</article>


				<?php require("./includes/sidebar1.php"); ?>
			</main>

			

<?php require('./includes/footer.php'); ?>
