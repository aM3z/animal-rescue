<?php 

	require('../../config.php');
	require('./../../templates/header.php'); 
	

?>
<main role="main" class="clear main-wrapper">
				
	<section class="details">
		<article> 
			<header style="	background-image:url('./../../images/dogs/yorkie.jpg');
 background-position-y:18%">
				<h1>Meet Harry!</h1>
			</header>
			<ul>
				<!--<li><div class=imghold><img src="./../../images/dogs/little_tootie.jpg"/></div></li> -->
				<li><div class=imghold><img src="./../../images/cats/american-curl.jpg"/></div></li>
				<li><div class=imghold><img src="./../../images/dogs/yorkshire-terrier-06.jpg"/></div></li>
			</ul>
			<p>
				Harry came to us fairly recently. 
				<br><br><br>
				<code>Published: <time pubdate="pubdate">2016-10-07</time></code>
			</p>
		</article> 
	</section>
	<aside class="details">
		<article>
			<h2><b>Facts</b> About Harry:</h2>
			<ul>
				<li><b>AGE</b> adult</li>
				<li><b>SEX</b> male</li>
			</ul>
		</article>
		<center><button class="adopt">ADOPT ME!</button></center>
	</aside>
</main>

<?php require('../../templates/footer.php'); ?>
