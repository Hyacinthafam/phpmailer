<?php 

require_once 'PHPMailer/PHPMailerAutoload.php'; 


    function smtpmailer($to, $from, $from_name, $subject, $body)
    {
        
        $mail = new PHPMailer();
        $mail -> SMTPDebug = 4;
        $mail ->IsSMTP();
        $mail ->SMTPAuth = true;

        $mail -> SMTPSecure = 'ssl';
        $mail -> Host = 'mail.landlordng.com';
        $mail -> Port = 465;
        $mail -> username = 'support@blandlordng.com';
        $mail -> Password = '.......';



        $mail -> IsHTML(true);
        $mail -> From ="";
        $mail -> FromName='my west' ;
        $mail -> Sender = 'support@blandlord.com' ;
        $mail -> AddReplyTo($from, $from_name);
        $mail -> Subject = $subject;
        $mail -> Body = $body;
        $mail -> AddAddress($to);
        if(!$mail->Send())
        {
           
         // echo '<script>alert("please try again, error occured")</script>';
            $error ="please try again, error occured";
            echo $mail->ErrorInfo;

        }
            else{
                 //echo 'thanks mail sent';
                $error = "thanks mail sent ";
                echo $error ;
            }
    

} 
            $to = 'westwizo@gmail.com';
            $from = '.........';
            $name ='bitzone';
            $subject ='mail testing';
            $msg = 'heiya it works';

            $error = smtpmailer($to,$from,$name,$subject,$msg);
?> 
