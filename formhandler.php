<?php 
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'shubhamgavand@yahoo.in';

$email_subject = 'New form submission'

$email_body = "user Name: $name.\n"
                "user Email: $visitor_email.\n"
                "Subject: $subject.\n"
                "user message: $message.\n" ;

$to = 'shubhamgavand@yahoo.in';

$headers = "From: $email_from \r\n"
$headers .= "Reply-To $visitor_email \r\n"

mail($to,$email_subject,$email_body,$headers);
header("Location: contact.html")
?>