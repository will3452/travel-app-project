<?php

    include_once '../../vendor/autoload.php';

    include_once '../process/LoginStatus.php';

    include_once '../../PHPmailersetup/mailsetup.php';

    $User = new User;

    $Validator = new Validator;

    $Notification = new Notification;
    
    $Mails = new Mail;
    
    $protocollinks = $Notification->ProtocolAndLinks();

    $email = $_SESSION['manager'];

    $GetUserID = $User->GetUserID($email);

    $iduser = $GetUserID->id;

    $check = $User->GetBusinessManager($iduser);

    $businessid = $check->id;

    $businessname = $check->name;

    if(isset($_POST['message_'])){

        $messageReciever = $_POST['messageReciever'];

        $message_ = $_POST['message_'];

        //get ids of users

        $mail->addAddress($messageReciever);  

        $messagesendermail = '<b>Sender: </b>'. ' '. $businessname;

        $mail->Subject = 'Notification Message';   

        $messageemail =  '<b>Message Content: </b>'. ' ' .$message_ . '.' .'  <b> Travel Guide for Cebu Province Inc. </b>';

        $fulllink = $protocollinks.'/traveler/inquire/message?host_id='.$businessid;

        $mail->Body = $Mails->SendMailMessage($fulllink, 'Message', 'Travel Guide for Cebu Province Inc.', $messageemail, $messagesendermail);

        if($mail->send()){
                                    
            echo "success";

        }else{

            echo "error -> failed send mail";

        }
        
    }