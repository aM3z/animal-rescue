<?php 
	require('./config.php');
	require('./includes/header.php'); 

?>

	<main role="main" class="clear main-wrapper">
		<h1>Avaliable Cats</h1>
		<section class="index">
		<header><h2><a href="<?php print DETAILS; ?>/cats/american-curl.php">Harry</a></h2></header>
			<article>
			<img src="<?php print IMAGES; ?>/cats/american-curl.jpg" />
				<p>
				Harry came to us fairly recently. He's a talkative fellow and has been neutered, vaccinated and microchipped. 
				</p>
			</article>
		</section>
		<!--	
		<section class="index">
			<header><h2><a href="<?php print DETAILS; ?>/cats/abyssinian.php">Hermione</a></h2></header>
			<article>
				<img src="<?php print IMAGES; ?>/cats/BillyHJay.jpg"/>
				<p>
				Curabitur rhoncus tellus nunc, et finibus nunc consectetur eu. Donec vestibulum commodo libero, sit amet viverra nibh porta non. Suspendisse pellentesque at nisl sit amet blandit. Proin sagittis, nibh vitae porta accumsan, tortor felis malesuada ex, et faucibus arcu metus et leo. Morbi massa arcu, varius eget sapien et, vehicula posuere massa. Aenean lacinia urna lacus. Praesent ligula elit, fermentum id leo nec, pellentesque tempus sem.
				</p>
			</article>
		</section>
		-->
		<section class="index">
		<header><h2><a href="<?php print DETAILS; ?>/cats/norwegian-forest.php">Hagrid</a></h2></header>
			<article>
				<img src="<?php print IMAGES; ?>/cats/nor-forest.jpg"/>
				<p>
				Hagrid isn't very talkative but loves pets. He has been neutered, vaccinated and microchipped. 
				</p>
			</article>
		</section>

		
	</main>
			
<?php 

	require('./includes/footer.php'); 

?>
