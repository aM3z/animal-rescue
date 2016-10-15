<?php require('./config.php'); ?>

<!DOCTYPE html>

<!--

================================================================================
================================================================================
================================================================================
 
TEAM:		Micaela Pierce and Miguel Amezola
POJECT: 	1
COURSE: 	CSCI387
DATE: 		2016-10-18

================================================================================
============================================ https://www.cs.plu.edu ============
================================================================================

-->

<html lang="en">

	<head>
		<!-- meta tags -->
		<meta charset="utf-8">
		<title>Rescue Dogs and Cats</title>
		<meta name="description" content="This is a multi-page website for rescuing two types of pets or animals.">
		<meta name="robots" content="index, follow">
		<meta name="author" content="Micaela Pierce, Miguel Amezola">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- styling -->
		<link rel="stylesheet" type="text/css" href="<?php print CSS; ?>/normalize.css" />
		<link rel="stylesheet" type="text/css" href="./css/style.css">

		<!-- google fonts -->
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

	</head>
	<body> 
		<div class="container">
			<header>
				<div class="main-wrapper">	
					<h1><img src="http://placehold.it/60x60"><a id="homepage-link" href="">Rescue Dogs and Cats</a></h1>
				</div>	
				<nav>
					<div class="nav-wrapper">
					<!-- first dropdown -->
					<div class="dropdown">
						<a href="" class="menubtn">Dogs</a>
						<div class="dropdown-content">
							<div class="dd-link-wrapper"><a href="">One</a></div>
							<div class="dd-link-wrapper"><a href="">Two</a></div>
							<div class="dd-link-wrapper"><a href="">Three</a></div>
						</div>
					</div>
					<!-- second dropdown -->
					<div class="dropdown">
						<a href="" class="menubtn">Cats</a>
						<div class="dropdown-content">
							<div class="dd-link-wrapper"><a href="">One</a></div>
							<div class="dd-link-wrapper"><a href="">Two</a></div>
							<div class="dd-link-wrapper"><a href="">Three</a></div>
						</div>
					</div>
					<!-- third dropdown -->
					<div class="dropdown">
						<a href="" class="menubtn">About Us</a>
						<!--
						<div class="dropdown-content">
							<a href=""></a>
						</div>
						-->
					</div>
					<!-- fourth dropdown -->
					<div class="dropdown">
						<a href="" class="menubtn">Credits</a>
						<!--
						<div class="dropdown-content">
							<a href=""></a>
						</div>
						-->
					</div>
				</div>
				</nav>
			</header> 

			
			
			<div class="main-wrapper" id="social-media-buttons">
			<a href="https://twitter.com/share" class="twitter-share-button" data-text="This website is a homework project for CSCI387 course @PLUNEWS and is not a real travel site." data-url="https://www.cs.plu.edu/~amezolma/homework/hw3" data-via="aM3zola" data-show-count="false">Tweet</a>
			</div>

