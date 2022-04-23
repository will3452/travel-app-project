<?php
    include_once '../../vendor/autoload.php';

    include_once '../../PHPmailersetup/mailsetup.php';

    $User = new User;

    $Validator = new Validator;

    $Payment = new Payment;

    $Promotion = new Promotion;

    $Notification = new Notification;

    $Mails = new Mail;

    $protocollinks = $Notification->ProtocolAndLinks();

    date_default_timezone_set('Asia/Manila');

    if(isset($_POST['token_accept_acceptadssubs'])){

        $token = $_POST['token_accept_acceptadssubs'];

        $adssub_id = $_POST['adssub_id'];

        $ValidateToken = $Validator->ValidateToken($token);

        if($ValidateToken==1){

            $ValidateFields = $Validator->ValidateFields($adssub_id, $token);

            if($ValidateFields==1){

                //get data of ads
                $dataads = $User->GetAdsData($adssub_id);

                $manageid = $dataads->manager_id;

                $popnewname = $dataads->pop;

                $promo_id = $dataads->package_id;

                $UpdateAdsSubs = $User->UpdateAdsSubs($adssub_id, $User::STATUS_ONGOING);

                if($UpdateAdsSubs==1){

                    $ValPromo = $Promotion->GetPromoData($promo_id);
                    
                    if($ValPromo){

                        $priceads = $ValPromo->price;

                        $promoname = $ValPromo->name;

                        $InsertPOP = $Payment->InsertPOP($popnewname, $manageid, $adssub_id, $User::PROMOTION_PAYMENT, $User::STATUS_DONE, $priceads);
                   
                        if($InsertPOP==1){
                            
                            $link = $protocollinks.'/manager/view/view-notification';

                            $insertnotif = $Notification->Insert('', $manageid, $User::USER_TYPE_MANAGER, $link, "Accept your avail advertisement!". " ". $promoname);
                                                        
                            if($insertnotif==1){

                                echo "success";

                            }

                        }
                    }
                }

            }else{
                
                echo "emp";
            }
        }else{

            echo "tokenerror";
        }
    }
    elseif(isset($_POST['token_accept_doneadssubs'])){

        $token = $_POST['token_accept_doneadssubs'];

        $adssub_iddone = $_POST['adssub_iddone'];

        $ValidateToken = $Validator->ValidateToken($token);

        if($ValidateToken==1){

            $ValidateFields = $Validator->ValidateFields($adssub_iddone, $token);

            if($ValidateFields==1){

                //get data of ads
                $dataads = $User->GetAdsData($adssub_iddone);

                $manageid = $dataads->manager_id;

                $promo_id = $dataads->package_id;

                $UpdateAdsSubs = $User->UpdateAdsSubs($adssub_iddone, $User::STATUS_DONE);

                if($UpdateAdsSubs==1){

                    $ValPromo = $Promotion->GetPromoData($promo_id);
                    
                    if($ValPromo){

                        $promoname = $ValPromo->name;

                        $link = $protocollinks.'/manager/view/view-notification';

                        $insertnotif = $Notification->Insert('', $manageid, $User::USER_TYPE_MANAGER, $link, "Your avail advertisement!". " ". $promoname. " has been expired!");
                                                        
                        if($insertnotif==1){

                            echo "success";

                        }

                    }
                }

            }else{
                
                echo "emp";
            }
        }else{

            echo "tokenerror";
        }
    }
    elseif(isset($_POST['token_accept_deleteadssubs'])){

        $token = $_POST['token_accept_deleteadssubs'];

        $adssub_iddelete = $_POST['adssub_iddelete'];

        $ValidateToken = $Validator->ValidateToken($token);

        if($ValidateToken==1){

            $ValidateFields = $Validator->ValidateFields($adssub_iddelete, $token);

            if($ValidateFields==1){

                //get data of ads
                $dataads = $User->GetAdsData($adssub_iddelete);

                $manageid = $dataads->manager_id;
                
                $status = $dataads->status;

                $promo_id = $dataads->package_id;

                    $ValPromo = $Promotion->GetPromoData($promo_id);
                    
                    if($ValPromo){

                        $promoname = $ValPromo->name;

                        if($status==$User::STATUS_DONE){
                            //will not send notif
                            $DeleteManagerPOPAds = $Payment->DeleteManagerPOPAds($manageid, $adssub_iddelete);

                            if($DeleteManagerPOPAds==1){

                                $DeleteAdsSubs = $User->DeleteAdsSubs($adssub_iddelete);

                                if($DeleteAdsSubs==1){
                                    
                                    echo "success";
                                    
                                }
                            }
                            
                        }
                        elseif($status==$User::STATUS_ONGOING){
                            //will not send notif
                            $DeleteManagerPOPAds = $Payment->DeleteManagerPOPAds($manageid, $adssub_iddelete);

                            if($DeleteManagerPOPAds==1){

                                $DeleteAdsSubs = $User->DeleteAdsSubs($adssub_iddelete);

                                if($DeleteAdsSubs==1){
                                    
                                    $link = $protocollinks.'/manager/view/view-notification';

                                    $insertnotif = $Notification->Insert('', $manageid, $User::USER_TYPE_MANAGER, $link, "Your avail advertisement!". " ". $promoname. " is Deleted!");
                                                                
                                    if($insertnotif==1){
            
                                        echo "success";
            
                                    }
                                    
                                }
                            }
                            
                        }
                        else{
                            //will send notiff
                                $DeleteAdsSubs = $User->DeleteAdsSubs($adssub_iddelete);
        
                                if($DeleteAdsSubs==1){

                                    $link = $protocollinks.'/manager/view/view-notification';

                                    $insertnotif = $Notification->Insert('', $manageid, $User::USER_TYPE_MANAGER, $link, "Your avail advertisement!". " ". $promoname. " is rejected!");
                                                                
                                    if($insertnotif==1){
            
                                        echo "success";
            
                                    }
            
                                    
                                }
                        }
                    }

               

            }else{
                
                echo "emp";
            }
        }else{

            echo "tokenerror";
        }
    }
    elseif(isset($_POST['token_accept_manager_subs'])){

        $token = $_POST['token_accept_manager_subs'];

        $id_get_subs = $_POST['id_get_subs'];

        $ValidateToken = $Validator->ValidateToken($token);

        if($ValidateToken==1){

            $ValidateFields = $Validator->ValidateFields($id_get_subs, $token);

            if($ValidateFields==1){

                $GetAccSubsDataUsingId = $User->GetAccSubsDataUsingId($id_get_subs);

                if($GetAccSubsDataUsingId){

                    $manageid = $GetAccSubsDataUsingId->user_id;

                    $olddate = $GetAccSubsDataUsingId->start;

                    if($olddate>date("Y-m-d")){

                        $date = $olddate;

                    }else{

                        $date = date("Y-m-d");

                    }

                    $d = strtotime("+1 months",strtotime($date));
    
                    $newdate =  date("Y-m-d h:i:s",$d); 

                    //check if meron pang ongoing suybs

                    if($User->CheckManageSubsIf($manageid, $User::STATUS_ONGOING)){

                        echo "error -> user have ongoing subscription, please mark as done first!";

                    }else{
                        $UpdateSubs = $User->UpdateSubs($id_get_subs, $User::STATUS_ONGOING, $date, $newdate);

                        if($UpdateSubs){
        
                            $BanAccount = $User->BanAndUnbanAccount($manageid, $User::BLOCK_STATUS_UNBAN);

                            $updatepayment = $Payment->UpdateManagerPOPAccount($manageid , $User::STATUS_DONE, $id_get_subs);
        
                            if($updatepayment){

                                $GetUserData = $User->GetUserData($manageid, $User::USER_TYPE_MANAGER);

                                $emailofrecipient= $GetUserData->email;

                                $mail->addAddress($emailofrecipient);  

                                $mail->Subject = 'Account Status';   

                                $messageemail = 'Your Pending Subscripton Has been Accept <b> Travel Guide for Cebu Province Inc. </b>';

                                $mail->Body = $Mails->SendMailAcceptAccount($protocollinks, 'Account Status', 'Travel Guide for Cebu Province Inc.', $messageemail);

                                if($mail->send()){
                                    
                                    $link = $protocollinks.'/manager/view/view-notification';

                                    $insertnotif = $Notification->Insert('', $manageid, $User::USER_TYPE_MANAGER, $link, "Accept your subscription!");
                                                                
                                    if($insertnotif==1){
        
                                        echo "success";
        
                                    }

                                }else{

                                echo "error -> failed send mail";
                                }

                            }else{
            
                                echo "error -> process failed";
                            }

                        }else{
        
                            echo "error -> process failed";
                        }

                    }
                }else{

                    echo "error -> process failed";
                }


            }else{

                echo "error -> process failed";
            }

        }else{

            echo "error -> process failed";
        }
    }
    elseif(isset($_POST['token_delete_manager_subs'])){

        $token = $_POST['token_delete_manager_subs'];

        $id_get_subs_d = $_POST['id_get_subs_d'];

        $ValidateToken = $Validator->ValidateToken($token);

        if($ValidateToken==1){

            $ValidateFields = $Validator->ValidateFields($id_get_subs_d, $token);

            if($ValidateFields==1){

                $GetAccSubsDataUsingId = $User->GetAccSubsDataUsingId($id_get_subs_d);

                if($GetAccSubsDataUsingId){

                    $manageid = $GetAccSubsDataUsingId->user_id;

                    $deletetrasn = $Payment->DeleteManagerPOPAdsaftercancelsubs($manageid, 0, $User::STATUS_PENDING);

                    $DeleteSubs = $User->DeleteSubs($manageid, $id_get_subs_d, $User::STATUS_PENDING);

                    if($DeleteSubs){

                        $GetUserData = $User->GetUserData($manageid, $User::USER_TYPE_MANAGER);

                        $emailofrecipient= $GetUserData->email;

                        $mail->addAddress($emailofrecipient);  

                        $mail->Subject = 'Account Status';   

                        $messageemail = 'Your Pending Subscripton Has been declined <b> Travel Guide for Cebu Province Inc. </b>';

                        $mail->Body = $Mails->SendMailAcceptAccount($protocollinks, 'Account Status', 'Travel Guide for Cebu Province Inc.', $messageemail);

                        if($mail->send()){
                            
                            $link = $protocollinks.'/manager/view/view-notification';

                            $insertnotif = $Notification->Insert('', $manageid, $User::USER_TYPE_MANAGER, $link, "Declined your subscription!");
                                                        
                            if($insertnotif==1){

                                echo "success";

                            }

                        }else{

                            echo "error -> failed send mail";
                        }
                    }else{

                        echo "error -> process failed";
                    }

                }

            }else{

                echo "error -> process failed";
            }

        }else{

            echo "error -> process failed";
        }
    }
    elseif(isset($_POST['token_done_manager_subs'])){

        $token = $_POST['token_done_manager_subs'];

        $id_get_subs_done = $_POST['id_get_subs_done'];

        $ValidateToken = $Validator->ValidateToken($token);

        if($ValidateToken==1){

            $ValidateFields = $Validator->ValidateFields($id_get_subs_done, $token);

            if($ValidateFields==1){

                $GetAccSubsDataUsingId = $User->GetAccSubsDataUsingId($id_get_subs_done);

                if($GetAccSubsDataUsingId){

                        $manageid = $GetAccSubsDataUsingId->user_id;

                        $date = $GetAccSubsDataUsingId->start;

                        $newdate = $GetAccSubsDataUsingId->expiration;

                        $UpdateSubs = $User->UpdateSubs($id_get_subs_done, $User::STATUS_DONE, $date, $newdate);

                        if($UpdateSubs){

                            $BanAccount = $User->BanAndUnbanAccount($manageid, $User::BLOCK_STATUS_TEMPORARY);

                            if($BanAccount==1){

                                $GetUserData = $User->GetUserData($manageid, $User::USER_TYPE_MANAGER);

                                $emailofrecipient= $GetUserData->email;

                                $mail->addAddress($emailofrecipient);  

                                $mail->Subject = 'Account Status';   

                                $messageemail = 'Your Subscription is ended and Account has been temporary Ban! Please Renew Your Account! <b> Travel Guide for Cebu Province Inc. </b>';

                                $message_ext = 'Thank You so much.!';

                                $mail->Body = $Mails->SendMailAccDisabling($protocollinks, 'Account Status', 'Travel Guide for Cebu Province Inc.', $messageemail, $message_ext);

                                if($mail->send()){
                                            
                                    echo "success";

                                }else{

                                    echo "error -> failed send mail";
                                }

                            }else{
                                 
                                echo "error -> process failed";

                            }

                        }else{

                            echo "error -> process failed";
                        }

                    

                }else{

                    echo "error -> process failed";
                }
                
            }else{

                echo "error -> process failed";
            }

        }else{

            echo "error -> process failed";
        }
    }