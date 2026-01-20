<?php
	
	$name = trim($_POST['name']);
	$email = trim($_POST['email']);
	$message = trim($_POST['message']);
	
	$emailTo = 'ikumafreelancer@gmail.com'; //Put your own email address here
	$subject = 'Mensagem do seu site.';
	$body = "Nome: $name \n\nEmail: $email \n\nMensagem:\n$message";
	$headers = 'De: '.$email."\r\n" .
        'Responder a: '.$email."\r\n".
		'Content-Type:text/html;charset=utf-8'."\r\n";

	mail($emailTo, $subject, $body, $headers);
	$emailSent = true;
	echo ('ENVIAR'); 
	
?>
