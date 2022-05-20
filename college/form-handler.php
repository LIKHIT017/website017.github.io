<?php
$name =$_POST['name'];
$visitor_email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];
$email_from ='XYZ@gmail.com';
$email_subject='nex form submission';
$email_body="User Name: $name.\n".
              "User Email: $visitor_email.\n". 
              "Subject: $subject.\n".
               "User Message:$message";

$to='abc@gmail.com';
$headers="From:$email_from \r\n";
$headers="Reply-to:$visitor_email";
mail($to,$email_subject,$email_body,$headers);
header("location: contact.html");               
               ?>