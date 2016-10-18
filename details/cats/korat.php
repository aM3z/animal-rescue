<?php 

	require('../../config.php');
	require('../../includes/header.php'); 

?>

			<main role="main" class="clear main-wrapper">
				
				<article> 
					<header>
						<h1>Korat</h1>
						<p>Published: <time pubdate="pubdate">2016-10-07</time> </p>
						<hr>
					</header>

                    <img  class="pet-pix" src="<?php print IMAGES; ?>/cats/korat.jpg" alt="Korat">

				</article>

				<?php require('../../includes/sidebar1.php'); ?>

			</main>

<?php require('../../includes/footer.php'); ?>
