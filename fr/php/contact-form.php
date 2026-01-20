<?php
	
	$name = trim($_POST['name']);
	$email = trim($_POST['email']);
	$message = trim($_POST['message']);
	
	$emailTo = 'ikumafreelancer@gmail.com'; //Put your own email address here
	$subject = 'Message de votre site Web.';
	$body = "Nom: $name \n\nEmail: $email \n\Message:\n$message";
	$headers = 'De: '.$email."\r\n" .
        'Réponds à: '.$email."\r\n".
		'Content-Type:text/html;charset=utf-8'."\r\n";

	mail($emailTo, $subject, $body, $headers);
	$emailSent = true;
	echo ('ENVOYER'); 
	
?>
