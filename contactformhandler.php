<?php
	$name = $_Post['fname'];
	$visitor_email = $_Post['email']
	$message = $_Post['message']


	$email_from = 'zironox224@gmail.com';

	$email_subject = 'subject';

	$email_body = "User Name: $name.\n".
					"User Email: $visitor_email.\n".
						"User Message: $message.\n";


	$to = "golamrahman268224@gmail.com";

	$headers = "From: $email_from \r\n";

	$headers = "Reply-To: $visitor_email \r\n";

	mail($to, $email_subject, $email_body, $headers);

	heaader("location: index.html");

	?>