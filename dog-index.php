<?php 
	require('./config.php');
	require('./templates/header.php'); 

?>

	<main role="main" class="clear main-wrapper">
		<h1>Avaliable Dogs</h1>
		<section class="index">
		<header><h2><a href="<?php print DETAILS; ?>/dogs/yorkshire-terrier.php">Frodo</a></h2></header>
			<article>
			<img src="<?php print IMAGES; ?>/dogs/yorkshire-terrier-06.jpg" />
				<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin hendrerit lacinia est, euismod tincidunt nisi gravida nec. Ut id pretium sapien, ac lobortis nibh. Etiam tincidunt diam sem, sit amet bibendum velit ultrices non. Suspendisse tempus aliquam sem, ut vestibulum risus pellentesque vel. Cras accumsan urna ante, eget congue justo tristique vitae. Vestibulum at nulla ac elit pharetra pharetra. Morbi a felis luctus, commodo velit nec, sodales risus. In facilisis semper interdum. Praesent venenatis ipsum congue, cursus tortor in, ullamcorper erat. Vivamus pellentesque elit arcu, in hendrerit elit auctor eleifend.
				</p>
			</article>
		</section>
		
		<section class="index">
			<header><h2><a href="<?php print DETAILS; ?>/dogs/welsh-springer-spaniel.php">Samwise</a></h2></header>
			<article>
				<img src="<?php print IMAGES; ?>/dogs/springer-spaniel-tennis-balls4.jpg"/>
				<p>
				Curabitur rhoncus tellus nunc, et finibus nunc consectetur eu. Donec vestibulum commodo libero, sit amet viverra nibh porta non. Suspendisse pellentesque at nisl sit amet blandit. Proin sagittis, nibh vitae porta accumsan, tortor felis malesuada ex, et faucibus arcu metus et leo. Morbi massa arcu, varius eget sapien et, vehicula posuere massa. Aenean lacinia urna lacus. Praesent ligula elit, fermentum id leo nec, pellentesque tempus sem.
				</p>
			</article>
		</section>
		
		<section class="index">
			<header><h2><a href="<?php print DETAILS; ?>/dogs/nova-scotia-duck-tolling-retriever.php">Pippin</a></h2></header>
			<article>
				<img src="<?php print IMAGES; ?>/dogs/nstr.jpg"/>
				<p>
				Curabitur rhoncus tellus nunc, et finibus nunc consectetur eu. Donec vestibulum commodo libero, sit amet viverra nibh porta non. Suspendisse pellentesque at nisl sit amet blandit. Proin sagittis, nibh vitae porta accumsan, tortor felis malesuada ex, et faucibus arcu metus et leo. Morbi massa arcu, varius eget sapien et, vehicula posuere massa. Aenean lacinia urna lacus. Praesent ligula elit, fermentum id leo nec, pellentesque tempus sem.
				</p>
			</article>
		</section>
		
		<section class="index">
			<header><h2><a href="<?php print DETAILS; ?>/dogs/rottweiller.php">Merry</a></h2></header>
			<article>
				<img src="<?php print IMAGES; ?>/dogs/Rottweiler_standing_facing_left.jpg"/>
				<p>
				Curabitur rhoncus tellus nunc, et finibus nunc consectetur eu. Donec vestibulum commodo libero, sit amet viverra nibh porta non. Suspendisse pellentesque at nisl sit amet blandit. Proin sagittis, nibh vitae porta accumsan, tortor felis malesuada ex, et faucibus arcu metus et leo. Morbi massa arcu, varius eget sapien et, vehicula posuere massa. Aenean lacinia urna lacus. Praesent ligula elit, fermentum id leo nec, pellentesque tempus sem.
				</p>
			</article>
		</section>

		
	</main>
			
<?php 

	require('./templates/footer.php'); 

?>
