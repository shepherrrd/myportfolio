<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$to = $_POST["goldofonime@gmail.com"];
$subject = "Mail From ".$name." On Website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@shepherdumanah.com" . "\r\n" .
"CC: Admin";

mail($to,$subject,$txt);

//redirect
header("Location:/");
?>