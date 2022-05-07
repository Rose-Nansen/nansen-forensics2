<?php
echo "Got here";
$name = $_POST['First name'] ['Last name'];
$email = $_POST['email'];
// $request = $_POST['form-control'] ['textarea'];

$to = "rose@nansen.io";
$subject = "Forensic Inquiry";
$body = $_POST['textarea'];

mail ($to,$subject,$body);

echo "Thank your email. Your message has been sent!"
?>