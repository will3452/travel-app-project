<?php
    include_once '../../vendor/autoload.php';

    include_once '../../PHPmailersetup/mailsetup.php';

    $User = new User;

    $Validator = new Validator;

    $Payment = new Payment;

    $Notification = new Notification;

    $Mails = new Mail;
    
    $protocollinks = $Notification->ProtocolAndLinks();

    if(isset($_POST['token_accept_manager'])){

        $token_accept_manager = $_POST['token_accept_manager'];

        $id_get = $_POST['id_get'];

        $ValidateToken = $Validator->ValidateToken($token_accept_manager);

        if($ValidateToken==1){

            $ValidateFields = $Validator->ValidateFields($id_get, $token_accept_manager);

            if($ValidateFields==1){

                //validate id manager pending
                $ValidateUSer = $User->ValidateUSer($User::USER_TYPE_MANAGER, $User::STATUS_PENDING, $id_get);

                if($ValidateUSer>0){

                    //accept
                    $AcceptUser = $User->AcceptUser($User::USER_TYPE_MANAGER, $id_get);

                    if($AcceptUser==1){

                        $date = date("Y-m-d");

                        date_default_timezone_set('Asia/Manila');

                        $d = strtotime("+1 months",strtotime($date));

                        $newdate =  date("Y-m-d",$d); 

                        $InsertSub = $User->InsertAccountSubs($id_get, $date, $newdate, $User::STATUS_ONGOING);

                        if($InsertSub==1){

                            $GetAccSubsData = $User->GetAccSubsData($id_get);

                            $type_id = $GetAccSubsData->id;

                            $UpdateManagerPOPAccount = $Payment->UpdateManagerPOPAccount($id_get, $User::STATUS_DONE, $type_id);

                            $link = $protocollinks.'/manager/view/view-notification';
                            
                            $insertnotif = $Notification->Insert('', $id_get, $User::USER_TYPE_MANAGER, $link, "Welcome Please Create Your Business!");
                                                        
                            if($insertnotif==1){

                                $GetUserData = $User->GetUserData($id_get, $User::USER_TYPE_MANAGER);

                                $emailofrecipient = $GetUserData->email;

                                $mail->addAddress($emailofrecipient);  

                                $mail->Subject = 'Account Status';   

                                $messageemail = 'You are now offically registered in <b> Travel Guide for Cebu Province Inc. </b> Please Create Your Business!';

                                $mail->Body = $Mails->SendMailAcceptAccount($protocollinks, 'Account Status', 'Travel Guide for Cebu Province Inc.', $messageemail);

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

                        echo "error";
                    }
                }else{

                    echo "invaliduser";
                }
            }else{

                echo "empty";
            }
        }else{

            echo "invalidtoken";
        }
    }
    elseif(isset($_POST['token_cancel_manager'])){

        $token_cancel_manager = $_POST['token_cancel_manager'];

        $id_get_cancel = $_POST['id_get_cancel'];

        $ValidateToken = $Validator->ValidateToken($token_cancel_manager);

        if($ValidateToken==1){

            $ValidateFields = $Validator->ValidateFields($id_get_cancel, $token_cancel_manager);

            if($ValidateFields==1){

                 //validate id manager pending
                $ValidateUSer = $User->ValidateUSer($User::USER_TYPE_MANAGER, $User::STATUS_PENDING, $id_get_cancel);

                $GetUserData = $User->GetUserData($id_get_cancel, $User::USER_TYPE_MANAGER);

                $emailofrecipient = $GetUserData->email;

                
                if($ValidateUSer>0){

                    //delete
                    $CancelUser = $User->CancelUser($User::USER_TYPE_MANAGER, $id_get_cancel);

                    if($CancelUser==1){

                        $mail->addAddress($emailofrecipient);  

                        $mail->Subject = 'Account Status';   

                        $messageemail = 'Your request for creating account has been declined, Please Sign Up again with valid idenity And Proof of payment <b> Travel Guide for Cebu Province Inc. </b>';

                        $mail->Body = $Mails->SendMailCancelAccount($protocollinks, 'Account Status', 'Travel Guide for Cebu Province Inc.', $messageemail);

                        if($mail->send()){
                                    
                            $deletenotif = $Notification->DeleteNotificationAdminAfterCancelAcc($id_get_cancel, $User::USER_TYPE_ADMIN);
                            
                            if($deletenotif){

                                echo "success";
                            }

                        }else{

                            echo "error -> failed send mail";
                        }


                    }else{

                        echo "error";

                    }
                    //send mail
                }else{

                    echo "invaliduser";

                }

            }else{

                echo "empty";
            }
        }else{

            echo "invalidtoken";
        }
    }
    //bantemp
    elseif(isset($_POST['token_Bantemp_manager'])){

        $token_Bantemp_manager = $_POST['token_Bantemp_manager'];

        $id_get = $_POST['id_get'];

        $ValidateToken = $Validator->ValidateToken($token_Bantemp_manager);

        if($ValidateToken==1){

            $ValidateFields = $Validator->ValidateFields($id_get, $token_Bantemp_manager);
            
            $GetUserData = $User->GetUserData($id_get, $User::USER_TYPE_MANAGER);

            $emailofrecipient = $GetUserData->email;

            if($ValidateFields==1){

                $BanAccount = $User->BanAndUnbanAccount($id_get, $User::BLOCK_STATUS_TEMPORARY);

                if($BanAccount==1){

                    $link = $protocollinks.'/manager/view/view-notification';

                    $insertnotif = $Notification->Insert('', $id_get, $User::USER_TYPE_MANAGER, $link, "Your Account had been temporary Ban");
                                                        
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

            $GetUserData = $User->GetUserData($id_get_2, $User::USER_TYPE_MANAGER);

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

            $GetUserData = $User->GetUserData($id_get_un, $User::USER_TYPE_MANAGER);

            $emailofrecipient = $GetUserData->email;

            if($ValidateFields==1){

                $BanAccount = $User->BanAndUnbanAccount($id_get_un, $User::BLOCK_STATUS_UNBAN);

                if($BanAccount==1){

                    $link = $protocollinks.'/manager/view/view-notification';

                    $insertnotif = $Notification->Insert('', $id_get_un, $User::USER_TYPE_MANAGER, $link, "Your Account Has been Activated");
                                                        
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
    //delete pop
    elseif(isset($_POST['token_Delete_POP_manager'])){

        $token = $_POST['token_Delete_POP_manager'];

        $pop = $_POST['pop'];

        $ValidateToken = $Validator->ValidateToken($token);

        if($ValidateToken==1){

            $ValidateFields = $Validator->ValidateFields($pop, $token);

            if($ValidateFields==1){

                $Delete = $Payment->DeletePayment($pop);

                if($Delete==1){
                    
                    echo "success";
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
        
        $manager_id = $_POST['manager_id'];

        $ValidateToken = $Validator->ValidateToken($token);

        if($ValidateToken==1){

            $ValidateFields = $Validator->ValidateFields($token, $fname, $mname, $lname, $contact, $manager_id);

            if($ValidateFields==1){

                $ValidateContact = $Validator->ValidateContact($contact);

                if($ValidateContact){

                    $GetUserData = $User->GetUserData($manager_id, $User::USER_TYPE_MANAGER);

                    if($GetUserData){

                        $currentphone = $GetUserData->phone;

                        $currentpassword = $GetUserData->password;

                        $emailofrecipient = $GetUserData->email;

                        if(empty($password)){

                            if($currentphone==$contact){

                                $update = $User->UpdateProfile($manager_id, $User::USER_TYPE_MANAGER, '', $fname, $mname, $lname, $currentphone, $currentpassword);
                                
                                if($update){

                                    $link = $protocollinks.'/manager/view/view-notification';
                    
                                    $insertnotif = $Notification->Insert('', $manager_id, $User::USER_TYPE_MANAGER, $link, "Your Account Has Been Modify By Admin");
                                                                        
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

                                    $update = $User->UpdateProfile($manager_id, $User::USER_TYPE_MANAGER, '', $fname, $mname, $lname, $contact, $currentpassword);

                                    if($update){

                                        $link = $protocollinks.'/manager/view/view-notification';
                    
                                        $insertnotif = $Notification->Insert('', $manager_id, $User::USER_TYPE_MANAGER, $link, "Your Account Has Been Modify By Admin");
                                                                            
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

                                    $update = $User->UpdateProfile($manager_id, $User::USER_TYPE_MANAGER, '', $fname, $mname, $lname, $currentphone, $dcps);

                                    if($update){

                                        $link = $protocollinks.'/manager/view/view-notification';
                    
                                        $insertnotif = $Notification->Insert('', $manager_id, $User::USER_TYPE_MANAGER, $link, "Your Account Has Been Modify By Admin, Password Change to ". $password);
                                                                            
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

                                        $update = $User->UpdateProfile($manager_id, $User::USER_TYPE_MANAGER, '', $fname, $mname, $lname, $contact, $dcps);

                                        if($update){

                                            $link = $protocollinks.'/manager/view/view-notification';
                    
                                            $insertnotif = $Notification->Insert('', $manager_id, $User::USER_TYPE_MANAGER, $link, "Your Account Has Been Modify By Admin, Password Change to ". $password);
                                                                                
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