<?php
$name=$_POST['name'];
$visitor_email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$email_from='info@yourwebsite.com';
$email_subject='New Form Submission';
$email_body ="user name: $name.\n"
         ="user email: $visitor_email.\n"
         ="subject: $subject.\n"
         ="user message : $message.\n"

         $to-'runzzy345@gmail.com';
         $header="from: $email_from\r\n";
         $header .= reply-to: $visitor_email\r\n";

         mail($to,$email_subject,$email_body,$header);
         header("location:contactc.html");

         if{
             em
         }




?>