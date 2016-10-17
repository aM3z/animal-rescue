<?php 

	require('../../config.php');
	require('./../../templates/header.php'); 
	

?>
<main role="main" class="clear main-wrapper">
				
	<section class="details">
		<article> 
			<header style="	background-image:url('./../../images/cats/nor1.jpg');
 background-position-y:18%">
				<h1>Meet Hagrid!</h1>
			</header>
			<ul>
				<li><div class=imghold><img src="./../../images/cats/nor2.jpg"/></div></li>
				<li><div class=imghold><img src="./../../images/cats/nor3.jpg"/></div></li>
			</ul>
			<p>
				Hagrid isn't very talkative but loves pets. He has been neutered, vaccinated and microchipped.
				<br><br>
				He is friendly around both dogs and other cats and would make a great family pet. Adventurous, he loves finding the tallest place in the house and sleeping in sun spots. He doesn't like to be held but will hapilly sleep in your lap.
				<br><br><br>
				<code>Published: <time pubdate="pubdate">2016-10-11</time></code>
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
