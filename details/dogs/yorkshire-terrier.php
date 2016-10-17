<?php 

	require('../../config.php');
	require('./../../templates/header.php'); 
	

?>
<main role="main" class="clear main-wrapper">
				
	<section class="details">
		<article> 
			<header style="	background-image:url('./../../images/dogs/yorkie.jpg');
 background-position-y:18%">
				<h1>Meet Frodo!</h1>
			</header>
			<ul>
				<!--<li><div class=imghold><img src="./../../images/dogs/little_tootie.jpg"/></div></li> -->
				<li><div class=imghold><img src="./../../images/dogs/yorkie.jpg"/></div></li>
				<li><div class=imghold><img src="./../../images/dogs/yorkshire-terrier-06.jpg"/></div></li>
			</ul>
			<p>
				Frodo is an adventurous little fellow. We believe he is around three to four years old and has been neutered, vaccinated and microchipped.
				<br><br>
				Frodo is a yorkshire terrier who's full of energy and always ready for walks and games of catch.
				<br><br>
				He is house trained and will be perfectly happy in an appartment but would need to be excersized daily. He's good with kids and other dogs but shows agression with cats and other small animals.
				<br><br><br>
				<code>Published: <time pubdate="pubdate">2016-10-07</time></code>
			</p>
		</article> 
	</section>
	<aside class="details">
		<article>
			<h2><b>Facts</b> About Frodo:</h2>
			<ul>
				<li><b>AGE</b> adult</li>
				<li><b>SEX</b> male</li>
				<li><b>BREED</b> yorkshire terrior</li>
				<li><b>SIZE</b> toy</li>
			</ul>
		</article>
		<center><button class="adopt">ADOPT ME!</button></center>
	</aside>
</main>

<?php require('../../templates/footer.php'); ?>
