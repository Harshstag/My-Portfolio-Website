<?php
$name = $_POST['name '];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$email_form ='hrsharshsingh2@gmail.com';
$emial_subject = 'New foem Submision';
$email_body="User Name: $name.\n".
            "User Email: $visitor_email.\n".
            "Subject: $subject.\n".
            "User Message: $message.\n";
$to ='hrsharshsingh@gmail.com';
$headers = "Form : $email_form \r\n";
$headers .="Replay to: $visitor_email \r\n";
mail($to,$emial_subject,$email_body,$headers);
header("Location: contact.html");

?>