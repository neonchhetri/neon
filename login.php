<?php

session_start();
$conn =  mysqli_connect('localhost' , 'root' , '' ,'db_school') or die ('unable to connect');

?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<style>

		body{
			text-align: center;
			margin: 0;
			padding:0;
		    background: url(img/ll.jpg);
		    background-position: center;
		    font-family: sans-serif;
		}
		
		.field{
			margin-bottom: 20px;
		}
		.logit{
			width: 28%;
			height: 340px;
			background: #234F1E;
			color: #fff;
			top: 28%;
			left: 36%;
			position: absolute;
			box-sizing: bord;
			display: flex;
			justify-content: center;
			flex-direction: column;
			align-items: center;
			padding: -10px -40px;
			border-radius: 15px;

		}

.logit form{
	width: 150px;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;

}
.logit form input{
	width: 200%;
	height: 35px;
	margin: 5px 0px;
	padding: 10px;
	background-color: white;
	color: #1e1e1e;
	border-radius: 5px;
}
.avatar{
	width: 110px;
	height: 110px;
	border-radius: 50%;
	position: absolute;
	top: -60px;
	left:calc(50% - 50px);

}
.white{

	color: #bbbbbb ;
	font-size: 25px;

}

	</style>


</head>
<body>
	<div class="white">
<h3>Please login</h3>
</div>
<div class="logit">
	<img src="img/t.jpg" class="avatar">
	<form action ="login.php" method="post">
		<input type="text" class = "field" name= "Username" placeholder="Username" required=""></br>
		<input type="password" class = "field" name= "Pass" placeholder="Password" required=""></br>
         <input type="submit" class = "field" name="login" value="Login">
     </form>

</div>

<?php
if (isset($_POST['login'])){
	$Username = $_POST['Username'];
	$Pass = $_POST['Pass'];

	$select = mysqli_query($conn, "SELECT * FROM tb_student WHERE Username = '$Username' AND Pass = '$Pass' ");
	$row = mysqli_fetch_array($select);

	if(is_array($row)){
		$_SESSION["Username"] = $row ['Username'];
        $_SESSION["Pass"] = $row ['Pass'];
    }
        else{
        	echo '<script type = "text/javascript">';
        	echo 'alert("Invalid Username or Password");';
        	echo 'window.location.href="login.php"';
        	echo '</script>';
        

	}
}
if(isset($_SESSION["Username"])){
	header("LOCATION:index.php");
}
?>
</body>
</html>