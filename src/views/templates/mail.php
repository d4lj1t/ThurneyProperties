<?php $name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$phone = $_POST['phone'];
$formcontent="From: $name \n Message: $message \n Phone: $phone";
$recipient = "d4lj1t@hotmail.com";
$subject = "Thurney Properties Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
header('Location: thank-you.html');
exit;
?>
