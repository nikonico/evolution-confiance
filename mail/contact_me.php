<?php
header('Content-Type: text/html;charset="UTF-8"');
// Check for empty fields
if(empty($_POST['name'])      ||
   empty($_POST['email'])     ||
   empty($_POST['phone'])     ||
   empty($_POST['message'])   ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "No arguments Provided!";
   return false;
   }
   
$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$message = strip_tags(htmlspecialchars($_POST['message']));

// Create the emai$recaptchaSecret = 'YOUR_SECRET_KEY';l and send the message
$to = 'info@evolution-confiance.ch'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "$name est intéressé par Evolution et Confiance :)";
$email_body = "Tu as reçu un petit mail d'amour d'une âme perdue, viens-lui en aide!.\n\n"."Voilà les détails :\n\nNom: $name\n\nEmail: $email_address\n\nTéléhone: $phone\n\nMessage:\n$message$str";
$headers = "From: info@evolution-confiance.ch\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address\n";   
$headers .='Content-Type: text/plain; charset="UTF-8"'." "; // ici on envoie le mail au format texte encodé en UTF-8
mail($to,$email_subject,$email_body,$headers);
return true;         
?>
