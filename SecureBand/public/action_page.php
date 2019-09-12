<?php $fname = $_POST['name'];
$lname = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['country'];
$formcontent="From: $name \n Message: $message";
$recipient = "fnaafs@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>
