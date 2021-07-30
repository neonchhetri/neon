<?php

$connection = mysqli_connect('localhost','root');
mysqli_select_db($connection,"mydata");

$user = $_POST['user'];
$email = $_POST['email'];
$message = $_POST['message'];

$query = " insert into userinfodata (user,email,message)
values ('$user','$email','$message')";

mysqli_query($connection,$query);
echo "MESSAGE IS SENT";
?>