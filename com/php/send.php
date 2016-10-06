<?php
$name = $_REQUEST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$msg = "Neue Nachricht von:\r\n$name\r\n$email\r\n\r\n$message";

$to = "info@easybenefit.de";
$headers = "From: $email" . "\r\n" .
"Content-type: text/plain; charset=\"utf-8\"\r\n";

if (filter_var($email, FILTER_VALIDATE_EMAIL)) { // this line checks that we have a valid email address
mail($to, $subject, $msg, $headers); //This method sends the mail.
header ("location: /kontakt/danke.php");
}else{
header ("location: /kontakt/fehler.php");
}
?>
