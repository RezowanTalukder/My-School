<?php
    $mailto = $_POST['email'];
    $mailSub = "Registration Confirmation" ;
    $mailMsg = "Dear ".$_POST['name']." , your registration is sucessfull";
   require 'PHPMailer-master/PHPMailerAutoload.php';
   $mail = new PHPMailer();
   $mail ->IsSmtp();
   $mail ->SMTPDebug = 0;
   $mail ->SMTPAuth = true;
   $mail ->SMTPSecure = 'ssl';
   $mail ->Host = "smtp.gmail.com";
   $mail ->Port = 465; // or 587
   $mail ->IsHTML(true);
   $mail ->Username = "rez1.iit.du@gmail.com";
   $mail ->Password = "1163144@ndc";
   $mail ->SetFrom("rez1.iit.du@gmail.com");
   $mail ->Subject = $mailSub;
   $mail ->Body = $mailMsg;
   $mail ->AddAddress($mailto);

   if(!$mail->Send())
   {
       echo "Mail Not Sent";
   }
   else
   {
       echo "Mail Sent";
   }





   

