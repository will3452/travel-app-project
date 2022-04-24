<?php


    include_once '../../vendor/autoload.php';

    include_once '../process/LoginStatus.php';
    
    include_once '../../PHPmailersetup/mailsetup.php';

    $User = new User;

    $Validator = new Validator;

    $Notification = new Notification;

    $Mails = new Mail;
    
    $protocollinks = $Notification->ProtocolAndLinks();

    $email = $_SESSION['traveler'];

    $GetUserID = $User->GetUserID($email);

    $iduser = $GetUserID->id;

    if(isset($_POST['message_'])){

        $messageReciever = $_POST['messageReciever'];

        $messageSender = $_POST['messageSender'];

        $message_ = $_POST['message_'];

        //get ids of users

        $recidget = $User->GetUserID($messageReciever);

        $recid = $recidget->id;

        $senidget = $User->GetUserID($messageSender);

        $senid = $senidget->id;

        $mail->addAddress($messageReciever);  

        $messagesendermail = '<b>Sender: </b>'. ' '. $messageSender;

        $mail->Subject = 'Notification Message';   

        $messageemail =  '<b>Message Content: </b>'. ' ' .$message_ . '.' .'  <b> Travel Guide for Cebu Province Inc. </b>';

        $fulllink = $protocollinks.'/manager/inquire/message?traveler_id='.$senid;

        $mail->Body = $Mails->SendMailMessage($fulllink, 'Message', 'Travel Guide for Cebu Province Inc.', $messageemail, $messagesendermail);

        if($mail->send()){
                                    
            echo "success";

        }else{

            echo "error -> failed send mail";

        }
        
    }