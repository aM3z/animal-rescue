<?php 

	require('../../config.php');
	require('./../../includes/header.php'); 
	

?>
<main role="main" class="clear main-wrapper">
				
	<section class="details">
		<article> 
			<header style="	background-image:url('<?php print IMAGES; ?>/dogs/nstr.jpg');
 background-position-y:18%">
				<h1>Meet Pippin!</h1>
			</header>
			<ul>
				<li><div class=imghold><img src="<?php print IMAGES; ?>/dogs/nstdrcatch.jpg"/></div></li>
				<li><div class=imghold><img src="<?php print IMAGES; ?>/dogs/Nova_Scotia_Duck_Tolling_Retriever_portrait.jpg"/></div></li>
			</ul>
			<p>
				Pippin is a sweetheart, cool and calm unlike her namesake. She is likely 7 years old and has been spayed, vaccinated and microchipped.
				<br><br>
				She enjoys leashed walks and knows to heel, sit, stay and come. She enjoys sleeping on the couch but is kennel trained. Pippin also believes she is a lap dog and is always up for pets and cuddles.
				<br><br>
				Pippin is used to kids, and is gentle around cats and other dogs.
				
				<br><br><br>
				<code>Published: <time pubdate="pubdate">2016-08-07</time></code>
			</p>
		</article> 
	</section>
	<aside class="details">
		<article>
			<h2><b>Facts</b> About Pippin:</h2>
			<ul>
				<li><b>AGE</b> adult</li>
				<li><b>SEX</b> female</li>
				<li><b>BREED</b> retriever mix</li>
				<li><b>SIZE</b> medium</li>
			</ul>
		</article>
		<center><button class="adopt">ADOPT ME!</button></center>
	</aside>
</main>

<?php require('../../includes/footer.php'); ?>
