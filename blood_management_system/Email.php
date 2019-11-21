<?php
/**
 * Created by PhpStorm.
 * User: hardik
 * Date: 19/01/18
 * Time: 7:13 AM
 */

include 'email/PHPMailerAutoload.php';

class Email
{
    static public function send($from,$subject,$message,$to)
    {
        $mail = new PHPMailer();
        $mail->IsSmtp();
        $mail->SMTPDebug = 0;
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'tls';
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );
        $mail->Host = 'smtp.gmail.com';
        $mail ->Port = 587;
        $mail ->IsHTML(true);
        $mail ->Username = "help.bloodbanksystem@gmail.com";
        $mail ->Password = "admin@bb";
        $mail ->SetFrom($from);
        $mail ->Subject = $subject;
        $mail ->Body = $message;
        $mail ->AddAddress($to);

        if(!$mail->Send())
        {
            return false;
        }
        else
        {
            return true;
        }
    }
}