<?php

$to = "kingler@thrudesigns.com";
$from = $_POST['email'];

$headers = "From: " . $from . "\r\n";

'Reply-To: '.$from."\r\n" .
 
$subject = "Project Description";
$name = "" . $_POST['name'];
$comments = "" . $_POST['comments'];


/* Let's prepare the message for the e-mail */
$body = "$name just sent you a message from your Contact form Website.


---------

Message:

$comments

---------

You can reply to this email to respond.

";

/* Send the message using mail() function */



if( filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) )
{ 
	if (mail($to, $subject, $body, $headers, "Name of the Contact" . $from))
	{
		echo 'Thanks'. $_POST['name']'! One of our UXers Will contact you soon at:(' . $_POST['email'] . ').:)';
	}
	else
	{
	   echo 'There was a problem with your e-mail (' . $_POST['email'] . ')';	
	}
}
else
{
   echo 'There was a problem with your e-mail (' . $_POST['email'] . ')';	
}
