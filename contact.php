<?php
	

	$name = $_Post['name'];
	$email = $_Post['email'];
	$website = $_Post['website'];
	$address = $_Post['address'];
	$subject = $_Post['subject'];
	$massage = $_Post['message'];
	$email_form = 'Mxnxn.com';
	$email_sub = "New Visitor";
	$email_body =  "helloworldWx"

	// "User Name: ".$name.".\n"."User Email : $email. \n"."User Website: $website. \n"."User Address: $address. \n"."Subject : $subject. \n"."Message : $message. \n";

	$to = "developermxnxn@gmail.com";
	$header = "From : $email_form \r\n";
	$header .= "Reply_To : $email \r\n";

	@mail($to,$email_sub,$email_body,$header);

	header("Location: index.html?mailsend");

?>