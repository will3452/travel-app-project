<?php

    use PHPMailer\PHPMailer\PHPMailer;

    use PHPMailer\Exception;


    require_once '../../PHPMailer/PHPMailer.php';

    require_once '../../PHPMailer/SMTP.php';

    require_once '../../PHPMailer/Exception.php';



    $mail = new PHPMailer();


                
    $mail->isSMTP();   
    $email = "juncorpuz941@gmail.com";
    $name = "Travel Guide for Cebu Province Inc.";                                         
    $mail->Host       = 'smtp.gmail.com';                 
    $mail->SMTPAuth   = true;                                 
    $mail->Username   = $email;                   
    $mail->Password   = 'Newpassword_27';                     
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;           
    $mail->Port       = 465;  
    $mail->SMTPSecure = "ssl";
    $mail->isHTML(true);
    $mail->setFrom($email, $name);

// email setting
    