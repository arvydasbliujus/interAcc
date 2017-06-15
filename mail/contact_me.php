<?php
// Check for empty fields
if(empty($_POST['name'])      ||
   empty($_POST['email'])     ||
   // empty($_POST['phone'])     ||
   empty($_POST['message'])   ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "No arguments Provided!";
   return false;
   }
   
$name = $_POST['name'];
$email_address = $_POST['email'];
// $phone = $_POST['phone'];
$message = $_POST['message'];
   
// Create the email and send the message
$to = 'info@interacc.co.uk'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Website Contact Form:  $name";
$email_body = "Gautas pranešimas/užklausa iš interacc.co.uk puslapio.\n\n"."Siuntėjo kontaktiniai duomenys:\n\nVardas: $name\n\nEl. paštas: $email_address\n\nPranešimas/užklausa:\n$message";
$headers = "From: info@interacc.co.uk\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: noreply@interacc.co.uk";   
mail($to,$email_subject,$email_body,$headers);
return true;
// \n\nTel. nr.: $phone         
?>