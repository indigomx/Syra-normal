<?php
$contact_name = $_POST['name'];
$contact_email = $_POST['email'];
$contact_subject = $_POST['subject'];
$contact_message = $_POST['message'];

if( $contact_name == true )
{
	$sender = $contact_email;
	$receiver = "syra@infinitum.com.mx";
	$client_ip = $_SERVER['REMOTE_ADDR'];
	$email_body = "Name: $contact_name \nEmail: $sender \nSubject: $contact_subject \nMessage: $contact_message \nIP: $client_ip \nFlash Contact Form provided by http://www.flashmo.com";		
	$extra = "From: $sender\r\n" . "Reply-To: $sender \r\n" . "X-Mailer: PHP/" . phpversion();

	if( mail( $receiver, "Flash Contact Form - $subject", $email_body, $extra ) ) 
	{
		echo "success=yes";
	}
	else
	{
		echo "success=no";
	}
}
?>