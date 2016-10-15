<?php 

	require('../../config.php');
	require('../../templates/header.php'); 

?>

			<main role="main" class="clear main-wrapper">
				
				<article> 
					<header>
						<h1>Nova Scotia Duck Tolling Retriever Puppies</h1>
						<p>Published: <time pubdate="pubdate">2016-10-07</time> </p>
						<hr>
					</header>

                    <img src="<?php print IMAGES; ?>/dogs/Nova_Scotia_duck_tolling_retriever.jpg" alt="Nova Scotia Duck Tolling Retriever">

				</article>

				<?php require('../../templates/sidebar1.php'); ?>

			</main>

<?php require('../../templates/footer.php'); ?>
