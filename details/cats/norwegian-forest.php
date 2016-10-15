<?php 

	require('../../config.php');
	require('../../templates/header.php'); 

?>

			<main role="main" class="clear main-wrapper">
				
				<article> 
					<header>
						<h1>Norwegian Forest</h1>
						<p>Published: <time pubdate="pubdate">2016-10-07</time> </p>
						<hr>
					</header>

                    <img src="<?php print IMAGES; ?>/cats/Noorse-boskat.jpg" alt="Norwegian Forest Cat">

				</article>

				<?php require('../../templates/sidebar1.php'); ?>

			</main>

<?php require('../../templates/footer.php'); ?>
