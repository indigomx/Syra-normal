<?php
$contact_name = $_POST['name'];
$contact_email = $_POST['email'];
$contact_subject = $_POST['subject'];
$contact_message = $_POST['message'];

if( $contact_name == true )
{
	$sender = $contact_email;
	$receiver = "christian@dsindigo.com";
	$client_ip = $_SERVER['REMOTE_ADDR'];
	$email_body = "Name: $contact_name \nEmail: $sender \nSubject: $contact_subject \nMessage: $contact_message \nIP: $client_ip \n";		
	$extra = "From: $sender\r\n" . "Reply-To: $sender \r\n" . "X-Mailer: PHP/" . phpversion();

	if( mail( $receiver, "Contacto Syra - $contact_subject", $email_body, $extra ) ) 
	{
		echo "success=yes";
	}
	else
	{
		echo "success=no";
	}
}
?>
