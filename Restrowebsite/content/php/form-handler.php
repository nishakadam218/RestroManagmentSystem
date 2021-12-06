<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$location= $_POST['location'];
$message = $_POST['message'];

$email_from = 'info@domainname.com';
$email_subject = 'New From Submition';
$email_body = "User Name:$name.\n".
            "User Email:$email.\n".
            "Location:$location.\n".
            "User Message:$message.\n.";


$to = 'nsk266662@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To:$visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");








?>