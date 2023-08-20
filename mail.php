<?php 

	$to = ""; // this is your Email address
	$from  = "Unknow email" ; // this is the sender's Email address
	$sender_name = $_POST['name'];
	$phone = $_POST['phone'];
	$business = $_POST['select'];
	$note = $_POST['note'];

	$subject = "Form submission";
	$message = $sender_name . " has send the contact message. His / her phone number is : " .  $phone . " and his / her selected business type is " . $business . ". He / she worte the following... ". "\n\n" . $note;

	$headers = 'From: ' . $from;
	
	mail($to, $subject, $message, $headers);

?>