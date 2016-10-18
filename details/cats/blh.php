<?php 

	require('../../config.php');
	require('./../../includes/header.php'); 

?>
<main role="main" class="clear main-wrapper">
				
	<section class="details">
		<article> 
		<header style="	background-image:url('<?php print IMAGES; ?>/cats/British_Longhair.jpg'); background-position-y:32%">
				<h1>Meet Winston!</h1>
			</header>
			<ul>
				<!--<li><div class=imghold><img src="./../../images/dogs/little_tootie.jpg"/></div></li> -->
				<li><div class=imghold><img src="<?php print IMAGES; ?>/cats/British_Longhair.jpg"/></div></li>
				<!-- <li><div class=imghold><img src="./../../images/cats/curl2.jpg"/></div></li> -->
			</ul>
			<p>
				Winston has long hair and he don't care. He is one of the most handsome cats here and he knows it! He has been neutered, vaccinated and microchipped. 
				<br><br>
				He prefers to stay on his bed and groom himself. He loves attention from people but isn't too fond of children. Winston is 4 years old and he is a British Longhair (Highlander). 
				<br><br><br>
				<code>Published: <time pubdate="pubdate">2016-10-16</time></code>
			</p>
		</article> 
	</section>
	<aside class="details">
		<article>
			<h2><b>Facts</b> About Winston:</h2>
			<ul>
				<li><b>AGE</b> adult</li>
				<li><b>SEX</b> male</li>
			</ul>
		</article>
		<center><button class="adopt">ADOPT ME!</button></center>
	</aside>
</main>

<?php require('../../includes/footer.php'); ?>
