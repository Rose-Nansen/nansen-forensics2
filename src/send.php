<?php
$name = $_POST['First name'] ['Last name'];
$email = $_POST['email']
$request = $_POST['form-control'] ['textarea'];

$to = "rose@nansen.io";
$subject = "Forensic Inquiry";
$body = "Thank you for your message. We will reply to your inquiry soon. Please do not reply to this email. \n\n request";

mail ($to,$subject,$body);

echo "Thank your email. Your message has been sent!"
?>