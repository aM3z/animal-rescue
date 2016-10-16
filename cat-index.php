<?php 
	require('./config.php');
	require('./templates/header.php'); 

?>

	<main role="main" class="clear main-wrapper">
		<h1>Avaliable Cats</h1>
		<section class="index">
		<header><h2><a href="<?php print DETAILS; ?>/cats/american-curl.php">Harry</a></h2></header>
			<article>
			<img src="<?php print IMAGES; ?>/cats/american-curl.jpg" />
				<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin hendrerit lacinia est, euismod tincidunt nisi gravida nec. Ut id pretium sapien, ac lobortis nibh. Etiam tincidunt diam sem, sit amet bibendum velit ultrices non. Suspendisse tempus aliquam sem, ut vestibulum risus pellentesque vel. Cras accumsan urna ante, eget congue justo tristique vitae. Vestibulum at nulla ac elit pharetra pharetra. Morbi a felis luctus, commodo velit nec, sodales risus. In facilisis semper interdum. Praesent venenatis ipsum congue, cursus tortor in, ullamcorper erat. Vivamus pellentesque elit arcu, in hendrerit elit auctor eleifend.
				</p>
			</article>
		</section>
		
		<section class="index">
			<header><h2><a href="<?php print DETAILS; ?>/cats/abyssinian.php">Hermione</a></h2></header>
			<article>
				<img src="<?php print IMAGES; ?>/cats/BillyHJay.jpg"/>
				<p>
				Curabitur rhoncus tellus nunc, et finibus nunc consectetur eu. Donec vestibulum commodo libero, sit amet viverra nibh porta non. Suspendisse pellentesque at nisl sit amet blandit. Proin sagittis, nibh vitae porta accumsan, tortor felis malesuada ex, et faucibus arcu metus et leo. Morbi massa arcu, varius eget sapien et, vehicula posuere massa. Aenean lacinia urna lacus. Praesent ligula elit, fermentum id leo nec, pellentesque tempus sem.
				</p>
			</article>
		</section>
		
		<section class="index">
		<header><h2><a href="<?php print DETAILS; ?>/cats/norwegian-forest.php">Hagrid</a></h2></header>
			<article>
				<img src="<?php print IMAGES; ?>/cats/nor-forest.jpg"/>
				<p>
				Curabitur rhoncus tellus nunc, et finibus nunc consectetur eu. Donec vestibulum commodo libero, sit amet viverra nibh porta non. Suspendisse pellentesque at nisl sit amet blandit. Proin sagittis, nibh vitae porta accumsan, tortor felis malesuada ex, et faucibus arcu metus et leo. Morbi massa arcu, varius eget sapien et, vehicula posuere massa. Aenean lacinia urna lacus. Praesent ligula elit, fermentum id leo nec, pellentesque tempus sem.
				</p>
			</article>
		</section>

		
	</main>
			
<?php 

	require('./templates/footer.php'); 

?>
