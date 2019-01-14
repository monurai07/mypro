<?php
	$name= htmlentities($_POST['name']);
	echo $name, "<br>";
	$email = htmlentities($_POST['email']);
	echo $email, "<br>";
	$msg= htmlentities($_POST['msg']);
	echo $msg, "<br>";
	
	$to= "iitpmotorsports@gmail.com ";
	$subject = "$name contacts you;";
	$body = "$msg \n
	
			----mailer info--- \n
			email: $email \n
			name: $name \n ";
	
	$headers= "From: $email";
	
	@mail($to, $subject, $body, $headers);
	
	$to2= $email;
	$subject2= "IITP Motorsports thanks you";
	$body2= "Hello $name!! \n
		Thank you for visiting our website and contacting us. We do respond to your valuable feedback.
		
		with regards \n
		IITP Motorsports";
		
	$headers2= "From: $to";
	@mail ($to2, $subject2, $body2, $headers2);
?>