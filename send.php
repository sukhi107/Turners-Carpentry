<?php

$name = $_POST['name'];
$subject = $_POST['subject'];
$email = $_POST['email-address'];
$phone = $_POST['phone-number'];
$message = $_POST['enquiry'];

$to = "callum_turner@turnerscarpentry.co.uk";
$body = "";
$body .= "From: ".$name. "\r\n";
$body .= "Email: ".$email. "\r\n";
$body .= "Number: ".$phone. "\r\n";
$body .= "Message: ".$message. "\r\n";

mail($to,$subject,$body);

echo "Message sent! <a href= 'index.html'>Click here</a> to return to site.";

?>
