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

                    $link = $protocollinks.'/traveler/view/view-notification';
                    
                    $insertnotif = $Notification->Insert('', $id_get, $User::USER_TYPE_TRAVELER, $link, "Your Account had been temporary Ban");
                                                        
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

                    $link = $protocollinks.'/traveler/view/view-notification';

                    $insertnotif = $Notification->Insert('', $id_get_un, $User::USER_TYPE_TRAVELER, $link, "Your Account Has been Activated");
                                                        
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
    elseif(isset($_POST['token_profile'])){

        $token = $_POST['token_profile'];

        $fname = $_POST['fname'];

        $mname = $_POST['mname'];

        $lname = $_POST['lname'];

        $contact = $_POST['contact'];

        $password = $_POST['password'];
        
        $iduser = $_POST['traveler_id'];

        $ValidateToken = $Validator->ValidateToken($token);

        if($ValidateToken==1){

            $ValidateFields = $Validator->ValidateFields($token, $fname, $mname, $lname, $contact, $iduser);

            if($ValidateFields==1){

                $ValidateContact = $Validator->ValidateContact($contact);

                if($ValidateContact){

                    $GetUserData = $User->GetUserData($iduser, $User::USER_TYPE_TRAVELER);

                    if($GetUserData){

                        $currentphone = $GetUserData->phone;

                        $currentpassword = $GetUserData->password;

                        $emailofrecipient = $GetUserData->email;

                        if(empty($password)){

                            if($currentphone==$contact){

                                $update = $User->UpdateProfile($iduser, $User::USER_TYPE_TRAVELER, '', $fname, $mname, $lname, $currentphone, $currentpassword);
                                
                                if($update){

                                    $link = $protocollinks.'/traveler/view/view-notification';
                    
                                    $insertnotif = $Notification->Insert('', $iduser, $User::USER_TYPE_TRAVELER, $link, "Your Account Has Been Modify By Admin");
                                                                        
                                    if($insertnotif==1){

                                        $mail->addAddress($emailofrecipient);  

                                        $mail->Subject = 'Account Status';   
                
                                        $messageemail = 'Your Account has been modify by admin <b> Travel Guide for Cebu Province Inc. </b>';
                
                                        $message_ext = 'Thank You so much!';
                
                                        $mail->Body = $Mails->SendMailAccDisabling($protocollinks, 'Account Status', 'Travel Guide for Cebu Province Inc.', $messageemail, $message_ext);
                
                                        if($mail->send()){
                                                    
                                            echo "success";
                
                                        }else{
                
                                            echo "error -> failed send mail";
                                        }

                                    }
                                        
                                }

                            }else{

                                $PhoneExist = $User->PhoneExist($contact);

                                if($PhoneExist){

                                    echo "error -> phone already taken";

                                }else{

                                    $update = $User->UpdateProfile($iduser, $User::USER_TYPE_TRAVELER, '', $fname, $mname, $lname, $contact, $currentpassword);

                                    if($update){

                                        $link = $protocollinks.'/traveler/view/view-notification';
                    
                                        $insertnotif = $Notification->Insert('', $iduser, $User::USER_TYPE_TRAVELER, $link, "Your Account Has Been Modify By Admin");
                                                                            
                                        if($insertnotif==1){
    
                                            $mail->addAddress($emailofrecipient);  
    
                                            $mail->Subject = 'Account Status';   
                    
                                            $messageemail = 'Your Account has been modify by admin <b> Travel Guide for Cebu Province Inc. </b>';
                    
                                            $message_ext = 'Thank You so much!';
                    
                                            $mail->Body = $Mails->SendMailAccDisabling($protocollinks, 'Account Status', 'Travel Guide for Cebu Province Inc.', $messageemail, $message_ext);
                    
                                            if($mail->send()){
                                                        
                                                echo "success";
                    
                                            }else{
                    
                                                echo "error -> failed send mail";
                                            }
    
                                        }
                                            
                                    }

                                }
                            }

                        }else{

                            $dcps = $User->dcrypt($password);

                            $ValidatePassword = $Validator->ValidatePassword($password);

                            if($ValidatePassword){

                                if($currentphone==$contact){

                                    $update = $User->UpdateProfile($iduser, $User::USER_TYPE_TRAVELER, '', $fname, $mname, $lname, $currentphone, $dcps);

                                    if($update){

                                        $link = $protocollinks.'/traveler/view/view-notification';
                    
                                        $insertnotif = $Notification->Insert('', $iduser, $User::USER_TYPE_TRAVELER, $link, "Your Account Has Been Modify By Admin, Password Change to ". $password);
                                                                            
                                        if($insertnotif==1){
    
                                            $mail->addAddress($emailofrecipient);  
    
                                            $mail->Subject = 'Account Status';   
                    
                                            $messageemail = 'Your Account Has Been Modify By Admin, Password Change to '. $password. '<b> Travel Guide for Cebu Province Inc. </b>';
                    
                                            $message_ext = 'Thank You so much!';
                    
                                            $mail->Body = $Mails->SendMailAccDisabling($protocollinks, 'Account Status', 'Travel Guide for Cebu Province Inc.', $messageemail, $message_ext);
                    
                                            if($mail->send()){
                                                        
                                                echo "success";
                    
                                            }else{
                    
                                                echo "error -> failed send mail";
                                            }
    
                                        }
                                        
                                    }
                                }else{

                                    $PhoneExist = $User->PhoneExist($contact);

                                    if($PhoneExist){
                                    
                                        echo "error -> phone already taken";
                                    }else{

                                        $update = $User->UpdateProfile($iduser, $User::USER_TYPE_TRAVELER, '', $fname, $mname, $lname, $contact, $dcps);

                                        if($update){

                                            $link = $protocollinks.'/traveler/view/view-notification';
                    
                                            $insertnotif = $Notification->Insert('', $iduser, $User::USER_TYPE_TRAVELER, $link, "Your Account Has Been Modify By Admin, Password Change to ". $password);
                                                                                
                                            if($insertnotif==1){
        
                                                $mail->addAddress($emailofrecipient);  
        
                                                $mail->Subject = 'Account Status';   
                        
                                                $messageemail = 'Your Account Has Been Modify By Admin, Password Change to '. $password. '<b> Travel Guide for Cebu Province Inc. </b>';
                        
                                                $message_ext = 'Thank You so much!';
                        
                                                $mail->Body = $Mails->SendMailAccDisabling($protocollinks, 'Account Status', 'Travel Guide for Cebu Province Inc.', $messageemail, $message_ext);
                        
                                                if($mail->send()){
                                                            
                                                    echo "success";
                        
                                                }else{
                        
                                                    echo "error -> failed send mail";
                                                }
        
                                            }
                                            
                                        }
                                    }

                                }


                            }else{

                                echo "error -> password not strong";
                            }
                        }
                        

                    }else{
                        
                        echo "error -> process failed";

                    }

                }else{

                    echo "error -> invalid contact";
                }

            }else{

                echo "error - > empty fields";
            }
        }else{

            echo "error -> process error";
        }

    }