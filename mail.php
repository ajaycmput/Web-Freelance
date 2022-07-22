<?php
//get data from form  

$name = $_POST['name'];
$email= $_POST['emailaddress'];
$email_subject= $_POST['message-subject']
$message= $_POST['message'];
$to = "ajaydrippin@gmail.com";

$subject = "someone emailed you from your website!";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Header =" . $email_subject ."
    \r\n Message =" .$message;

$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
    header("Location:redirect.html");
}
//redirect
?>