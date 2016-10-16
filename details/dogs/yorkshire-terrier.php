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
				<li><div class=imghold><img src="./../../images/dogs/little_tootie.jpg"/></div></li>
				<li><div class=imghold><img src="./../../images/dogs/yorkie.jpg"/></div></li>
				<li><div class=imghold><img src="./../../images/dogs/yorkshire-terrier-06.jpg"/></div></li>
			</ul>
			<p>
				Frodo is an adventurous little fellow. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc lacinia nec ipsum id interdum. Nunc porta, lorem vitae aliquam gravida, sem nunc vestibulum lorem, sed tempus sem tellus eu turpis. Nullam et enim vitae eros pretium finibus. Praesent lorem elit, vestibulum sit amet hendrerit a, vulputate ac nulla. Ut quis enim eget tellus aliquet fermentum. Proin tristique sagittis augue ut congue. Nam in nisl a tellus fermentum aliquet in ut elit. Quisque semper suscipit nunc, vel euismod odio ullamcorper ut.
				<br><br>
				Phasellus quis tellus at lectus imperdiet pellentesque eget quis libero. Fusce placerat pellentesque massa vitae fermentum. Cras ullamcorper vestibulum lacus vel posuere. Proin ornare vitae lacus ac dictum. Nullam malesuada dictum diam ut eleifend. Maecenas dapibus rhoncus lectus sed scelerisque. Fusce aliquam magna ac lacus placerat volutpat. 
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
