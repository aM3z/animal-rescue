<?php 

	require('../../config.php');
	require('../../templates/header.php'); 

?>

			<main role="main" class="clear main-wrapper">
				
				<article> 
					<header>
						<h1>Rottweiller</h1>
						<p>Published: <time pubdate="pubdate">2016-10-07</time> </p>
						<hr>
					</header>

                    <img src="<?php print IMAGES; ?>/dogs/Rottweiler_standing_facing_left.jpg" alt="Rottweiller">

				</article>

				<?php require('../../templates/sidebar1.php'); ?>

			</main>

<?php require('../../templates/footer.php'); ?>
