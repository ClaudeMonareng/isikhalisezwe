<?php

    $name = $_POST['fullname'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mailheader = "From: ".$name."<".$email.">\r\n";    

    $recipient = "lehlohonolomonareng@yahoo.com";
    
    mail($recipient, $messasge, $mailheader) or die ("Error");

    echo"message sent";

?>