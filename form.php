<?php
$name  = $_POST["name"];
$visitor_email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];


$email_form = "khzam.com";

$email_subject = "New form submission";

$email-body = "user name: $name.\n".
               "user email: $visitor_email.\n".
               "subject: $subject.\n".
               "message: $message .\n";

    
$to = "swabi606@gmail.com";

$headers = "form: email_form \r\n";

$headers = "Reply-to: visitor_email \r\n;"

mail($to, $email_subject,$email_body,$headers):

header(header: contact.html);
?>
