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
		<link rel="stylesheet" type="text/css" href="<?php print CSS; ?>/style.css">

		<!-- google fonts -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

	</head>
	<body> 
		<div class="container">
			<header class="page">
				<div class="main-wrapper">	
					<h1><img src="http://www.clipartbest.com/cliparts/MTL/Lb6/MTLLb6eBc.gif"><a id="homepage-link" href="<?php print BASE_PATH; ?>">Pet Rescue</a></h1>
				</div>
				<nav>
					<div class="nav-wrapper main-wrapper">
					<!-- zeroth dropdown -->
					<div class="dropdown">
					<a href="<?php print BASE_PATH; ?>/index.php" class="menubtn">Home</a>
					</div>
					<!-- first dropdown -->
					<div class="dropdown">
					<a href="<?php print BASE_PATH; ?>/dog-index.php" class="menubtn">Dogs</a>
						<div class="dropdown-content">
						<div class="dd-link-wrapper"><a href="<?php print DETAILS; ?>/dogs/nova-scotia-duck-tolling-retriever.php">Pippin</a></div>
							<div class="dd-link-wrapper"><a href="<?php print DETAILS; ?>/dogs/rottweiller.php">Merry</a></div>
							<!-- <div class="dd-link-wrapper"><a href="<?php print DETAILS; ?>/dogs/welsh-springer-spaniel.php">Sam</a></div> -->
							<div class="dd-link-wrapper"><a href="<?php print DETAILS; ?>/dogs/yorkshire-terrier.php">Frodo</a></div>
						</div>
					</div>
					<!-- second dropdown -->
					<div class="dropdown">
						<a href="<?php print BASE_PATH; ?>/cat-index.php" class="menubtn">Cats</a>
						<div class="dropdown-content">
							<!-- <div class="dd-link-wrapper"><a href="<?php print DETAILS; ?>/cats/abyssinian.php">Abyssinian</a></div> -->
							<div class="dd-link-wrapper"><a href="<?php print DETAILS; ?>/cats/american-curl.php">Harry</a></div>
							<!-- <div class="dd-link-wrapper"><a href="<?php print DETAILS; ?>/cats/egyptian-mau-bronze.php">Egyptian Mau Bronze</a></div> -->
							<div class="dd-link-wrapper"><a href="<?php print DETAILS; ?>/cats/blh.php">Winston</a></div>
							<div class="dd-link-wrapper"><a href="<?php print DETAILS; ?>/cats/norwegian-forest.php">Hagrid</a></div>
						</div>
					</div>
					<!-- third dropdown -->
					<div class="dropdown">
						<a href="<?php print BASE_PATH; ?>/about.php" class="menubtn">About Us</a>
					</div>
					<!-- fourth dropdown -->
					<div class="dropdown">
					<a href="<?php print BASE_PATH; ?>/credits.php" class="menubtn">Credits</a>
					</div>
				</div>
				</nav>
			</header>
			
			<!--	
			<div class="main-wrapper" id="social-media-buttons">
				<a href="https://twitter.com/intent/tweet?button_hashtag=Lutes" class="twitter-hashtag-button" data-size="large" data-text="Hi! Thank you for sharing our project!" data-show-count="false">Tweet #Lutes</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
			</div>
			-->

