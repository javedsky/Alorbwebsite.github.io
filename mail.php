<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

function smtpmailer($to, $from, $from_name, $subject, $body)
    {
        $mail = new PHPMailer(true);
        $mail->IsSMTP();
        $mail->SMTPAuth = true; 
 
        $mail->SMTPSecure = 'ssl'; 
        $mail->Host = 'smtp.hostinger.com';
        $mail->Port = 465;  
        $mail->Username = 'connect@alorb.in';
        $mail->Password = '!Alorb.756';   
        
   //   $path = 'reseller.pdf';
   //   $mail->AddAttachment($path);
        $mail->IsHTML(true);
        $mail->From="connect@alorb.in";
        $mail->FromName='alorb';
        $mail->Sender='connect@alorb.in';
        $mail->AddReplyTo($from, $from_name);
        $mail->Subject = $subject;
        $mail->Body = $body;
        $mail->AddAddress($to);
        if(!$mail->Send())
        {
            $error ="Please try Later, Error Occured while Processing...";
           
            return $error; 
        }
        else 
        {
            $error = "Thanks You !! Your email is sent.";  
        
            return $error;
        }
    }
    
   
?>