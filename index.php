<?php 

session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>my website</title>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
     <section class="main">
     	<nav>
     		<a href="#" class="logo">
     			<img src="img/j.png" style="width:100px;height:100px;">
     		</a>

     		<ul class="menu">
     			<li><a href="#" class="active">HOME</a></li>
     			<li><a href="about.php">ABOUT</a></li>
     			<li><a href="features.php">FEATURES</a></li>
     			<li><a href="contact.php">CONTACT</a></li>
     			<li><a href="logout.php">Logout</a></li>
     	</nav>
     	<div class="main-heading">
     		<h1>HIMILAYAN HOTEL</h1>
     		<h4>Nestled within 10 acres of exquisitely landscaped grounds, Hotel Himalaya is conveniently located 8 km away from the Tribhuban International Airport and only 2 km from the Kathmandu city centre. We have always been an ideal haven for business and leisure travelers alike, offering resort ambience with an intimate touch. Since many of the distinguished NGO’s and INGO’s in Kathmandu are in the vicinity and the UN head office is only a few minutes walking distance.

We provide a perfect place for our valued guests to rest, work or socialize. Come and stay with us and allow us to make you feel at home with true Nepalese hospitality!</h4>
     		<a class="main-btn" href="contact.php">contact</a>
     	</div>
     </section>


     <section class="features">
     	<div class="feature-container">
     		<div class="feature-box">
     			<div class="f-img">
     				<img src="img/1.jpg">
     			</div>
     			<div class="f-text">
     				<p>DELUX TWIN BED</p>
     				<p>Twin beds and has everything you need for a pleasant stay.</p>
     				<a href="check.php" class="main-btn">Check</a>
     			</div>
     		</div>

<div class="feature-box">
     			<div class="f-img">
     				<img src="img/2.jpg">
     			</div>
     			<div class="f-text">
     				<p>DELUXE KING BED</p>
     				<p>A well-equipped room with all the facilities needs for an elegant stay.</p>
     				<a href="#" class="main-btn">Check</a>
     			</div>
     		</div>

<div class="feature-box">
     			<div class="f-img">
     				<img src="img/3.jpg">
     			</div>
     			<div class="f-text">
     				<p>EXECUTIVE KING BED</p>
     				<p>Executive Floor commands the best view of the Kathmandu valley</p>
     				<a href="#" class="main-btn">Check</a>
     			</div>
     		</div>



     		</div>

     	
     </section>


</body>
</html>
