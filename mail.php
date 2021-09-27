<?php
$name = $_POST['name'];
$email= $_POST['emailaddress'];
$message= $_POST['message'];

$to = "abankiandras@gmail.com";

$subject = "Mail from Portfolio Website";
$txt= "Name = ". $name . "\r\n Email = " . $email . "\r\n Message =" . $message;

$headers = "From: noreply@andrasbankiportfolio.com" . "\r\n";
if($email!=NULL){
  mail($to,$subject,$txt,$headers);
}
header("Location:index.html");
?>