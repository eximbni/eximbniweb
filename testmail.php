<?php
include("config.php"); 
		
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	require 'PHPMailer/src/Exception.php';
	require 'PHPMailer/src/PHPMailer.php';
	//require 'PHPMailer/src/PHPMailerAutoload.php';
	require 'PHPMailer/src/SMTP.php';

    $email = 'info@eximbin.com';
	$password = 'EximBni.2020';
	$to_email = 'patilvrushabh1008@gmail.com';
	$message = "test email msg.";
	$subject = "Test Email";
		
	$mail = new PHPMailer(); // create a new object
	$mail->IsSMTP(); // enable SMTP
	$mail->SMTPDebug = 0; // debugging: 1 = errors and messages, 2 = messages only
	$mail->SMTPAuth = true; // authentication enabled
	$mail->SMTPSecure = 'none'; // secure transfer enabled REQUIRED for Gmail
	$mail->Host = "mail.eximbin.com";
	$mail->Port = 25; // or 587
	$mail->IsHTML(true);
	$mail->Username = $email;
	$mail->Password = $password;
	$mail->SetFrom($email);
	$mail->Subject = $subject;
	$mail->Body = $message;
	$mail->AddAddress($to_email);
	$sent = $mail->Send();
	if($sent)
	{
	    echo "Mail Sent";
	}
	else
	{
	    echo "Mail Not Sent";
	}
?>