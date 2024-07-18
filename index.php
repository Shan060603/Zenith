<?php
session_start();

// Check if the user is not logged in and redirect to the login page
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header('Location: userlogin.php');
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Zenith</title>
	<link rel="stylesheet" href="styles.css">
	<link rel="icon" href="images/Letter-Logo-White.png" type="image/icon type">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body>
		<div class="nav-container sticky-top">
			<?php include("include/navbarmain.php");?>
		</div>
	
		<section>
			<div class="hero-section">
				<div class="slogan typewriter">
					<h1>Higher. Further. Faster.</h1>
				</div>
				<div class="logo">
					<img src="images/ZenithLogoBorderless-White.png" width="800px" alt="Zenith Aerospace Logo">
				</div>
				<div class="introduction fade-in-text hidden">
					<h3>Welcome to Zenith Aerospace, where Dreams Become Voyages. We're not merely aiming for the stars; we're placing them in your hands. Dive into the era of personalized interstellar travel with our range of spacecraft, designed for the adventurer in you.
					</h3>
				</div>
			</div>
		
			<div class="mission-statement">
				<h1>Our Mission</h1>
				<hr>
				<h4 class="fade-in-text hidden">At Zenith Aerospace, our mission is to fuel the universal dreams of mankind by making space exploration accessible to all. Through cutting-edge spacecraft, we aim to transform the cosmos into a canvas for the optimistic and curious. Our commitment is to craft a journey that transcends physical distances, sparking a cosmic curiosity. With Zenith, the journey is as crucial as the destination, as we collectively reach for the stars with hope and an insatiable curiosity about the wonders that await us in the great beyond.</h2>
			</div>
			<div class="innovation">
				<center>
				<h1>Innovation</h1>
				</center>
				<hr>
				<h4 class="fade-in-text hidden">At Zenith Aerospace, innovation is the beating heart of our spacecraft design ethos. With each endeavor, our relentless pursuit of pioneering technology drives us to create spacecraft that redefine the possibilities of cosmic exploration. Our mission is not just to design vessels; it's to craft marvels of innovation that propel humanity beyond the confines of conventional space travel. Join us in the cosmos, where innovation is not a destination, but a guiding principle that fuels our journey into the uncharted territories of space.</h2>
				<br>
				<br>
				<br>
				<center><h3>Below are some of Zenith's greatest leaps of innovation in the field of interstellar travel.</h3></center>
			</div>
		</section>
		<center>
				<h1 style="color: white">The Antimatter Hyperdrive Engine</h1>
		</center>
		<hr>
		<div class="engine-info-container">
		<div class="engine-img-container">
			<img class="engine-img" src="images/Hyperdrive1.jpg" alt="Antimatter Hyperdrive">
		</div>
		<div class="engine-info">
			<h4>At the heart of every spacecraft crafted by Zenith Aerospace resides the Antimatter Hyperdrive Engine—an unparalleled marvel in propulsion technology. Available in diverse sizes tailored to the specific needs of each spacecraft, this revolutionary engine harnesses the formidable energy generated from the annihilation of matter and antimatter. Its primary function lies in bending the fabric of space-time, thereby creating a profound warp that allows spacecraft to achieve unimaginable speeds and traverse vast interstellar distances in record time.
				<br>
				<br>
				Functioning as the cornerstone of Zenith's cosmic explorations, this technological feat orchestrates controlled interactions between matter and antimatter within precision-engineered containment chambers. The resulting energy release propels the spacecraft by warping the surrounding space, effectively bending the cosmic fabric. This pioneering propulsion system redefines the boundaries of interstellar travel, enabling cosmic voyagers to navigate the cosmos at unprecedented velocities, transcending conventional limitations and opening new horizons for swift, efficient, and unparalleled cosmic exploration. The Antimatter Hyperdrive Engine stands as a testament to human innovation, unlocking the boundless potential of space travel and propelling mankind toward the stars as never before.</h4>
		</div>
		</div>
		<center><h1 style="color: white">Infrastructure</h1></center>
		<hr>
		<div class="factory-info-container">
			<div class="factory-img-container">
			<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
	<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
	<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/Janjira-Shipyard.jpg" class="d-block w-100" alt="...">
	  <div class="carousel-caption d-none d-md-block">
        <h5>Janjira Shipyard</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/Manila-Shipyard.jpg" class="d-block w-100" alt="...">
	  <div class="carousel-caption d-none d-md-block">
        <h5>Manila Shipyard</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/Tokyo-Shipyard.jpg" class="d-block w-100" alt="...">
	  <div class="carousel-caption d-none d-md-block">
        <h5>Tokyo Shipyard</h5>
      </div>
    </div>
	<div class="carousel-item">
      <img src="images/New-York-Shipyard.jpg" class="d-block w-100" alt="...">
	  <div class="carousel-caption d-none d-md-block">
        <h5>New York Shipyard</h5>
      </div>
    </div>
	<div class="carousel-item">
      <img src="images/Helios-Shipyard.jpg" class="d-block w-100" alt="...">
	  <div class="carousel-caption d-none d-md-block">
        <h5>Helios Shipyard</h5>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
			</div>
		
		<!-- <div class="factory-info">
			<h4>Welcome to Zenith Aerospace's state-of-the-art shipyards, the birthplace of cosmic exploration and technological innovation. With facilities strategically located in Janjira and Tokyo, Japan, as well as Manila and New York, these cutting-edge shipyards represent the epitome of spacecraft construction, testing, and launch.
				<br>
				<br>
				Each shipyard serves as a nexus of pioneering advancements in aerospace engineering, where spacecraft are meticulously crafted from inception to final assembly. Expert engineers, technicians, and scientists work tirelessly to ensure precision and excellence in every aspect of spacecraft development. Rigorous testing procedures, simulating the extreme conditions of space, validate the integrity and resilience of every vessel.
				<br>
				<br>
				Among these terrestrial marvels, orbiting high above the Earth, is the Helios Shipyard. Positioned in the cosmic expanse, this orbital shipyard represents the zenith of space-bound construction and serves as a testament to human innovation. Crafted to operate in the vacuum of space, it facilitates the assembly and deployment of spacecraft with unrivaled efficiency and adaptability.
				<br>
				<br>
				These Zenith Aerospace shipyards, whether firmly grounded on Earth or orbiting in the cosmic void, stand as beacons of human ingenuity and commitment to exploring the cosmos, each contributing significantly to the realization of mankind's cosmic aspirations.</h4>
				<br>
				<br>
		</div> -->
		</div>      
		
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="..." crossorigin="anonymous"></script>
		<script defer src="app.js"></script>
		<script>
  			// Initialize the carousel when the document is ready
  			$(document).ready(function() {
    		$('#carouselExampleIndicators').carousel();
  			});
		</script>
</body>
</html>
