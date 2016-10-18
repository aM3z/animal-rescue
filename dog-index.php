<?php 
	require('./config.php');
	require('./includes/header.php'); 

?>

	<main role="main" class="clear main-wrapper">
		<h1>Avaliable Dogs</h1>
		<section class="index">
		<header><h2><a href="<?php print DETAILS; ?>/dogs/yorkshire-terrier.php">Frodo</a></h2></header>
			<article>
			<img src="<?php print IMAGES; ?>/dogs/yorkshire-terrier-06.jpg" />
				<p>
				Frodo is an adventurous little fellow. We believe he is around three to four years old and has been neutered, vaccinated and microchipped. 
				</p>
			</article>
		</section>
		<!--	
		<section class="index">
			<header><h2><a href="<?php print DETAILS; ?>/dogs/welsh-springer-spaniel.php">Samwise</a></h2></header>
			<article>
				<img src="<?php print IMAGES; ?>/dogs/springer-spaniel-tennis-balls4.jpg"/>
				<p>
				Curabitur rhoncus tellus nunc, et finibus nunc consectetur eu. Donec vestibulum commodo libero, sit amet viverra nibh porta non. Suspendisse pellentesque at nisl sit amet blandit. Proin sagittis, nibh vitae porta accumsan, tortor felis malesuada ex, et faucibus arcu metus et leo. Morbi massa arcu, varius eget sapien et, vehicula posuere massa. Aenean lacinia urna lacus. Praesent ligula elit, fermentum id leo nec, pellentesque tempus sem.
				</p>
			</article>
		</section>
		-->	
		<section class="index">
			<header><h2><a href="<?php print DETAILS; ?>/dogs/nova-scotia-duck-tolling-retriever.php">Pippin</a></h2></header>
			<article>
				<img src="<?php print IMAGES; ?>/dogs/nstr.jpg"/>
				<p>
				Pippin is a sweetheart, cool and calm unlike her namesake. She is likely 7 years old and has been spayed, vaccinated and microchipped. 
				</p>
			</article>
		</section>
		
		<section class="index">
			<header><h2><a href="<?php print DETAILS; ?>/dogs/rottweiller.php">Merry</a></h2></header>
			<article>
				<img src="<?php print IMAGES; ?>/dogs/Rottweiler_standing_facing_left.jpg"/>
				<p>
				Merry is a confident, vivacious. He's likely two to three years old and has been neutered, vaccinated and microchipped. 
				</p>
			</article>
		</section>

		
	</main>
			
<?php 

	require('./includes/footer.php'); 

?>
