<?php 


$ToEmail = 'vinay99004162081612@gmail.com'; 
$EmailSubject = 'Site contact form'; 
$mailheader = "From: ".$_POST["email"]."\r\n"; 
$mailheader .= "Reply-To: ".$_POST["email"]."\r\n"; 
$mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
$MESSAGE_BODY = "Name: ".$_POST["name"]."<br>"."Email: ".$_POST["email"]."<br>"."Mobile_no: ".$_POST["contact_no"]."<br>"."Message: ".nl2br($_POST["message"]); 
// $MESSAGE_BODY .= "Email: ".$_POST["email"].""; 
// $MESSAGE_BODY .= "Mobile_no: ".$_POST["contact_no"].""; 
// $MESSAGE_BODY .= "Message: ".nl2br($_POST["message"]).""; 
mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure"); 
?>