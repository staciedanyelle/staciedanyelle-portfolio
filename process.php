<?php
$to      = 'staciedanyelle@gmail.com';
$from    = 'contact-us';
$email   = $_POST['email'];
$subject = 'New Site Inquiry';
$message = "Name: ".$_POST['name']."\nEmail: ".$_POST["email"]." \nMessage: ".$_POST['inquiry']."\nWebsite: ".$_POST['website']."";
$headers = 'From: '.$from."\r\n" .
        'Reply-To: '.$email."\r\n" .
        'X-Mailer: PHP/' . phpversion();

if(mail($to, $subject, $message, $headers))
{
	echo'<script>swal("Thank you!", "Your message has been sent successfully!", "success")</script>';
	echo'<script>$("#reset")[0].reset()</script>';
}
else
{
	echo'<script>swal("oops", "email not send!", "info")</script>';
}
?>