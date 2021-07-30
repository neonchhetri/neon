<!DOCTYPE html>
<html>
<head>
	<nav>
     		<ul class="menu">
     			<a href="index.php">HOME</a>
       			<a href="about.php">ABOUT</a>
     			<a href="features.php">FEATURES</a>
     			<a href="contact.php" class="active">CONTACT</a>
     		</ul>
     	</nav>
	<div class="page">
		<h1>Contact Us</h1>
	<p>We are being involved in below social media an excellent platform to enhance communication and understanding. Please do see our post, comment on it , like it and share it and more. It will help us to improve our services and extend customer satisfaction. </p>
</div>

		
	<style>
.page{
	text-align: center;
}
		.contact{
			width: 100%;
			display: flex;
			justify-content: center;
			flex-direction: column;
			align-items: center;
			padding: 40px 0px;
		}
		.contact-heading{
	    text-align: center;
     	margin: 40px 0px;
	margin-bottom: 10px;
}
.contact-heading h1{
	font-size: 2.2rem;

}
.contact form{
	width: 600px;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;

}
.contact form input,.contact textarea{
	width: 100%;
	height: 40px;
	margin: 5px 0px;
	padding: 10px;
	background-color: #e2e2e2;
	color: #1e1e1e;
	border-radius: 5px;
}

.contact form textarea{
	height: 150px;
	}
	nav{
	display: flex;
	justify-content: space-around;
	align-items: center;
	left: 0;
	top: 0;
	width: 100%;
	z-index: ;
}
nav ul{
	display: flex;

}
nav ul a{
	height: 40px;
	line-height: 43px;
	margin: 3px;
	padding: 0 22px;
	display: flex;
	font-size: 0.73rem;
	text-transform: uppercase;
	font-weight: 500;
	letter-spacing: 1px;
	border-radius: 3px;
	transition: 0.6s ease-in-out;
	color: #000000;
	text-decoration: none;
}
nav ul a:hover{
	background-color: #fc6f41;
	color: #fff;
	box-shadow: 5px 10px 30px rgba(0, 0, 0, 0.397);
}



	</style>
</head>
<body>
	
<section class="contact">
<div class="contact-heading">

</div>
<form action="userinformation.php" method="post">
		<input type="text" name="user" placeholder="Your full name"/>
		<input type="email" name="email" placeholder="Your E-mail"/>
		<textarea name="message" placeholder="Type your message here........."></textarea>
		<button class="main-btn" type="submit">Continue</button>
	</form>

</section>
</body>
</html>