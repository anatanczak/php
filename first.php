<?php
//Recipient
$to = 'info@anavidev.com';

//openssl_csr_get_subject
$subject = 'This is Anastaisa\' test email';

//Message
$message = '<h1>Hi girls.</h1> <p>
Thanks for readnin gmy test email
</p>';


//Headers
$headers = "From: The Sender Name <support@anavidev.com>";
$headers .= "reply-To: anatkachen@gmail.com\r\n";
$headers .= "Content-type: text/html\r\n";


//Send email
mail($to, $subject, $message, $headers);

 ?>
