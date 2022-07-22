<?php
//get data from form  
if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $email= $_POST['emailaddress'];
    $email_subject= $_POST['message-subject']
    $message= $_POST['message'];
    $to = "ajaydrippin@gmail.com";

    $subject = "someone emailed you from your website!";
    $txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Header =" . $email_subject ."
    \r\n Message =" .$message;

    $headers = "From: ".$email;

    mail($to,$subject,$txt,$headers);
    header("Location: redirect.html");
    }

?>