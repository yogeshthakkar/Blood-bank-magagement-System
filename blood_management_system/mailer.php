<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include './Email.php';
        $mail = new Email();
        $mail->send("help.bloodbanksystem@gmail.com", "Hi", "HELLO","drmaniya0196@gmail.com");
        if($mail){
            echo 'HIII';
        }
        
        
        
        ?>
    </body>
</html>
