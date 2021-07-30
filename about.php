<!DOCTYPE html>
<html>
<head>
	<title>my website</title>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
	<nav>
     		<ul class="menu">
     			<li><a href="index.php">HOME</a></li>
     			<li><a href="about.php">ABOUT</a></li>
     			<li><a href="features.php">FEATURES</a></li>
     			<li><a href="contact.php">CONTACT</a></li>
     		</ul>
     	</nav>
     
	<section class="about">
		<div class="about-img">
			<img src="img/a.jpg">
			</div>
			<div class="about-text">
				<h3>TRUE NEPAL HOSPITALITY</h3>
				<h5>Situated in the epicenter of Kathmandu valley, offering great value for money with superb rooms and wonderful dining experience. Come and stay with us and allow us to make you feel at home with true Nepalese hospitability!<br>
				Nestled within 10 acres of exquisitely landscaped grounds, Hotel Himalaya is conveniently located 8 km away from the Tribhuban International Airport and only 2 km from the Kathmandu city centre. We have always been an ideal haven for business and leisure travelers alike, offering resort ambience with an intimate touch. Since many of the distinguished NGO’s and INGO’s in Kathmandu are in the vicinity and the UN head office is only a few minutes walking distance. We provide a perfect place for our valued guests to rest, work or socialize.<span id="dots">...</span><span id="more">
					<br>Our 125 well-appointed rooms offer every comfort the traveler may need and we have a full range of amenities for our distinguished guests. You can enjoy a 180 degree panoramic view of the majestic Himalayan range from our garden. We offer the finest cuisine in our international restaurant ‘Café Horizon’ as well as In-Room dining for a more private meal. For our active guests, we have a superb tennis court, swimming pool and health club to keep you in shape and tone your body.

The food served are hygienic and timely. The culinary chef use their best skills to serve a delight on your table. You can enjoy the delicious recipes of Indian, Continental and Chinese Cuisine.
				</span>
</h5>
                <button onclick="myFunction()" id="myBtn">Read more</button>
			</div>
			
	</section>
	<script>
function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}
</script>

</body>
</html>