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
		<section class="index">
			<header><h2><a href="<?php print DETAILS; ?>/cats/blh.php">Winston</a></h2></header>
			<article>
				<img src="<?php print IMAGES; ?>/cats/British_Longhair.jpg" style="top: -100px;"/>
				<p>
				Winston has long hair and he don't care. He is one of the most handsome cats here and he knows it! He has been neutered, vaccinated and microchipped. 
				</p>
			</article>
		</section>
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
