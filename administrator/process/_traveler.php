<?php
    include_once '../../vendor/autoload.php';

    include_once '../../PHPmailersetup/mailsetup.php';

    $User = new User;

    $Validator = new Validator;
    
    $Notification = new Notification;
    
    $Mails = new Mail;

    $protocollinks = $Notification->ProtocolAndLinks();


    if(isset($_POST['token_Bantemp_manager'])){

        $token_Bantemp_manager = $_POST['token_Bantemp_manager'];

        $id_get = $_POST['id_get'];

        $ValidateToken = $Validator->ValidateToken($token_Bantemp_manager);
        
        if($ValidateToken==1){

            $ValidateFields = $Validator->ValidateFields($id_get, $token_Bantemp_manager);

            $GetUserData = $User->GetUserData($id_get, $User::USER_TYPE_TRAVELER);

            $emailofrecipient = $GetUserData->email;

            if($ValidateFields==1){

                $BanAccount = $User->BanAndUnbanAccount($id_get, $User::BLOCK_STATUS_TEMPORARY);

                if($BanAccount==1){

                    $link = $protocollinks.'/traveler/view-notification';
                    
                    $insertnotif = $Notification->Insert($id_get, $User::USER_TYPE_TRAVELER, $link, "Your Account had been temporary Ban");
                                                        
                    if($insertnotif==1){

                        $mail->addAddress($emailofrecipient);  

                        $mail->Subject = 'Account Status';   

                        $messageemail = 'Your Account had been temporary Ban <b> Travel Guide for Cebu Province Inc. </b>';

                        $message_ext = 'Thank You so much.!';

                        $mail->Body = $Mails->SendMailAccDisabling($protocollinks, 'Account Status', 'Travel Guide for Cebu Province Inc.', $messageemail, $message_ext);

                        if($mail->send()){
                                    
                            echo "success";

                        }else{

                            echo "error -> failed send mail";
                        }

                    }
                }else{

                    echo "error";
                }

            }else{

                echo "empty";
            }
        }else{

            echo "invalidtoken";
        }
    }
     //banperm
     elseif(isset($_POST['token_Panperm_manager'])){

        $token_Panperm_manager = $_POST['token_Panperm_manager'];

        $id_get_2 = $_POST['id_get_2'];

        $ValidateToken = $Validator->ValidateToken($token_Panperm_manager);

        if($ValidateToken==1){

            $ValidateFields = $Validator->ValidateFields($id_get_2, $token_Panperm_manager);

            $GetUserData = $User->GetUserData($id_get_2, $User::USER_TYPE_TRAVELER);

            $emailofrecipient = $GetUserData->email;

            if($ValidateFields==1){

                $BanAccount = $User->BanAndUnbanAccount($id_get_2, $User::BLOCK_STATUS_PERMANENTLY);

                if($BanAccount==1){

                        $mail->addAddress($emailofrecipient);  

                        $mail->Subject = 'Account Status';   

                        $messageemail = 'Your Account has been permanently ban! you no longer use this email in our system <b> Travel Guide for Cebu Province Inc. </b>';

                        $message_ext = 'Thank You so much.!';

                        $mail->Body = $Mails->SendMailAccDisabling($protocollinks, 'Account Status', 'Travel Guide for Cebu Province Inc.', $messageemail, $message_ext);

                        if($mail->send()){
                                    
                            echo "success";

                        }else{

                            echo "error -> failed send mail";
                        }

                }else{

                    echo "error";
                }
            }else{

                echo "empty";
            }
        }else{

            echo "invalidtoken";
        }
    }
      //unban
      elseif(isset($_POST['token_Unbantemp_manager'])){

        $token_Unbantemp_manager = $_POST['token_Unbantemp_manager'];
        
        $id_get_un = $_POST['id_get_un'];

        $ValidateToken = $Validator->ValidateToken($token_Unbantemp_manager);

        if($ValidateToken==1){

            $ValidateFields = $Validator->ValidateFields($id_get_un, $token_Unbantemp_manager);

            $GetUserData = $User->GetUserData($id_get_un, $User::USER_TYPE_TRAVELER);

            $emailofrecipient = $GetUserData->email;

            if($ValidateFields==1){

                $BanAccount = $User->BanAndUnbanAccount($id_get_un, $User::BLOCK_STATUS_UNBAN);

                if($BanAccount==1){

                    $link = $protocollinks.'/traveler/view-notification';

                    $insertnotif = $Notification->Insert($id_get_un, $User::USER_TYPE_TRAVELER, $link, "Your Account Has been Activated");
                                                        
                    if($insertnotif==1){

                        $mail->addAddress($emailofrecipient);  

                        $mail->Subject = 'Account Status';   

                        $messageemail = 'Your Account has been activated <b> Travel Guide for Cebu Province Inc. </b>';

                        $message_ext = 'Thank You so much for complying to us!';

                        $mail->Body = $Mails->SendMailAccDisabling($protocollinks, 'Account Status', 'Travel Guide for Cebu Province Inc.', $messageemail, $message_ext);

                        if($mail->send()){
                                    
                            echo "success";

                        }else{

                            echo "error -> failed send mail";
                        }

                    }
                }else{

                    echo "error";
                }
            }else{

                echo "empty";
            }
        }else{
            echo "invalidtoken";
        }
    }