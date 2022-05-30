<?php
    include_once '../../vendor/autoload.php';

    include_once '../process/LoginStatus.php';

    $User = new User;

    $Service = new Service;

    $Validator = new Validator;

    $Reservation = new Reservation;
    
    $Notification = new Notification;

    $protocollinks = $Notification->ProtocolAndLinks();
    
    $email = $_SESSION['manager'];

    $GetUserID = $User->GetUserID($email);

    $iduser = $GetUserID->id;

    $maneger_type = $GetUserID->maneger_type;

    $check = $User->GetBusinessManager($iduser);

    $businessid = $check->id;

    $businessname = $check->name;

    if(isset($_POST['token_Acceptreservation_manager'])){

        $token = $_POST['token_Acceptreservation_manager'];

        $res_id = $_POST['res_id'];

        $ValidateToken = $Validator->ValidateToken($token);

        if($ValidateToken==1){

            $ValidateFields = $Validator->ValidateFields($token, $res_id);
            
            if($ValidateFields==1){

                //update reservation / booking into approved

                $GetBookManager = $Reservation->GetBookManager($res_id, $businessid);

                if($GetBookManager){

                    $dateofbook = $GetBookManager->reserved_at;

                    $timeofbook = $GetBookManager->time;

                    $user_id = $GetBookManager->user_id;

                    $update = $Reservation->UpdateReservation($res_id, $User::STATUS_APPROVED, null, $businessid, '');

                    if($update){
    
                       //here notif
                       $link = $protocollinks.'/traveler/view/view-notification';
    
                       $message = 'Your Book in '. $businessname.' at '.$dateofbook. ' '.date("h:i:A", strtotime($timeofbook)).' Has been approved';
    
                       $insertnotif = $Notification->Insert($iduser, $user_id,  $User::USER_TYPE_TRAVELER, $link, $message);
                                                       
                       if($insertnotif==1){
       
                           echo "success";
       
                       }
    
                    }else{
    
                        echo "error -> invalid process";
                    }
                }else{

                    echo "error -> invalid process";
                }

            }else{

                echo "error -> invalid process";
            }

        }else{

            echo "error -> token error";
        }
    }
    
    elseif(isset($_POST['token_deletereservation_manager'])){

        $token = $_POST['token_deletereservation_manager'];

        $res_id = $_POST['res_id_d'];

        $ValidateToken = $Validator->ValidateToken($token);

        if($ValidateToken==1){

            $ValidateFields = $Validator->ValidateFields($token, $res_id);
            
            if($ValidateFields==1){

                 //update reservation / booking into approved

                $GetBookManager = $Reservation->GetBookManager($res_id, $businessid);

                if($GetBookManager){
 
                    $dateofbook = $GetBookManager->reserved_at;
 
                    $timeofbook = $GetBookManager->time;
 
                    $user_id = $GetBookManager->user_id;
 
                    $update = $Reservation->UpdateReservation($res_id, $User::STATUS_HISTORY, $User::STATUS_DROPPED, $businessid, '');
 
                    if($update){
     
                        //here notif
                        $link = $protocollinks.'/traveler/view/view-notification';
     
                        $message = 'Your Book in '. $businessname.' at '.$dateofbook. ' '.date("h:i:A", strtotime($timeofbook)).' Has been dropped';
     
                        $insertnotif = $Notification->Insert($iduser, $user_id, $User::USER_TYPE_TRAVELER, $link, $message);
                                                        
                        if($insertnotif==1){
        
                            echo "success";
        
                        }
     
                    }else{
     
                        echo "error -> invalid process";
                    }
                }else{
 
                    echo "error -> invalid process";
                }

            }else{

                echo "error -> invalid process";
            }

        }else{

            echo "error -> token error";
        }
    }
    elseif(isset($_POST['token_donereservation_manager'])){

        $token = $_POST['token_donereservation_manager'];

        $res_id = $_POST['res_id_done'];

        $totalprice = $_POST['totalprice'];

        $ValidateToken = $Validator->ValidateToken($token);

        if($ValidateToken==1){

            if(isset($_POST['packages'])){

                $packages = $_POST['packages'];

                $ValidateFields = $Validator->ValidateFields($token, $res_id, $totalprice, $packages);
                
                if($ValidateFields==1){

                    //check total price

                    $checkpricenumber = $Validator->ValidateContact($totalprice);

                    if($checkpricenumber){

                        //update reservation / booking into approved

                        $GetBookManager = $Reservation->GetBookManager($res_id, $businessid);

                        if($GetBookManager){
        
                            $dateofbook = $GetBookManager->reserved_at;
        
                            $timeofbook = $GetBookManager->time;
        
                            $user_id = $GetBookManager->user_id;
        
                            $update = $Reservation->UpdateReservation($res_id, $User::STATUS_HISTORY, $User::STATUS_DONE, $businessid, $totalprice);
        
                            if($update){

                                   //check packages exit
                                foreach($packages as $value){

                                    $CheckServiceExist = $Service->CheckServiceExist($value, $businessid);

                                    if($CheckServiceExist){

                                        $serviceidval = $value;

                                        //insert service acquired

                                        $insertserviceq = $Reservation->InsertReservationService($res_id, $serviceidval);

                                    }
                                }

            
                                //here notif
                                $link = $protocollinks.'/traveler/view/view-notification';
            
                                $message = 'Your Book in '. $businessname.' at '.$dateofbook. ' '.date("h:i:A", strtotime($timeofbook)).' Has been done';
            
                                $insertnotif = $Notification->Insert($iduser, $user_id, $User::USER_TYPE_TRAVELER, $link, $message);
                                                                
                                if($insertnotif==1){
                
                                    echo "success";
                
                                }
            
                            }else{
            
                                echo "error -> invalid process";
                            }
                        }else{
        
                            echo "error -> invalid process";
                        }
                        
                                
                    }else{

                        echo "error -> price invalid";
                    }


                }else{

                    echo "error -> invalid process";
                }
            }else{

                echo "error -> select packages";
            }

        }else{

            echo "error -> token error";
        }
    }
    elseif(isset($_POST['token_create_reservation'])){

        $token = $_POST['token_create_reservation'];

        $email = $_POST['email'];

        $date = $_POST['date'];

        $time = $_POST['time'];

        $description = $_POST['description'];

        $ValidateToken = $Validator->ValidateToken($token);

        if($ValidateToken==1){

            $ValidateFields = $Validator->ValidateFields($token, $email, $date, $time, $description);
            
            if($ValidateFields==1){

                    $validatedate = $Validator->ValidateDate($date);

                    if($validatedate){

                        $vallimitdate = $Validator->ValidateDateLimit($date);
    
                        if($vallimitdate){

                            $ValidateTime = $Validator->ValidateTime($time);

                            if($ValidateTime){

                                $GetUserID = $User->GetUserID($email);

                                if($GetUserID){
            
                                    $travelerid = $GetUserID->id;
            
                                    $GetUserData = $User->GetUserData($travelerid, $User::USER_TYPE_TRAVELER);
            
                                    if($GetUserData){
            
                                        $block = $GetUserData->block_status;
            
                                        if($block==$User::BLOCK_STATUS_TEMPORARY){
            
                                            echo "error -> traveler email ban temporary";
            
                                        }elseif($block==$User::BLOCK_STATUS_PERMANENTLY){
            
                                            echo "error -> traveler email ban permanently";
                                            
                                        }else{
            
                                            $insert = $Reservation->InsertReservation($travelerid, $businessid, $User::STATUS_APPROVED, $description, $date, $time);
            
                                            if($insert){
            
                                                //here notif
                                                $link = $protocollinks.'/traveler/view/view-notification';
                            
                                                $message = $businessname.' created book on '.$date. ' '.date("h:i:A", strtotime($time));
                            
                                                $insertnotif = $Notification->Insert($iduser, $travelerid, $User::USER_TYPE_TRAVELER, $link, $message);
                                                                                
                                                if($insertnotif==1){
                                
                                                    echo "success";
                                
                                                }else{
            
                                                    echo "error -> process error";
                                                }
            
                                            }else{
            
                                                echo "error -> process error";
                                            }
                                        }
                                    }else{
            
                                        echo "error -> invalid email 2";
                                    }
                                }
                                else{
            
                                    echo "error -> invalid email";
                                }
        
                            }else{
        
                            echo "error -> invalid time";
                            
                            }
                        }else{

                            echo "error -> invalid date";
                            
                        }
                    }else{

                        echo "error -> invalid date";
                        
                    }
            }else{

                echo "error -> invalid process";
            }

        }else{

            echo "error -> token error";
        }

    }
    elseif(isset($_POST['token_update_reservation'])){

        $token = $_POST['token_update_reservation'];

        $rs_id = $_POST['rs_id'];

        $date = $_POST['date'];

        $time = $_POST['time'];

        $description = $_POST['description'];

        $ValidateToken = $Validator->ValidateToken($token);

        $ValidateToken = $Validator->ValidateToken($token);

        if($ValidateToken==1){

            $ValidateFields = $Validator->ValidateFields($token, $rs_id, $date, $time, $description);
            
            if($ValidateFields==1){

                $validatedate = $Validator->ValidateDate($date);

                if($validatedate){

                    $ValidateTime = $Validator->ValidateTime($time);

                    if($ValidateTime){

                        $GetBookManager = $Reservation->GetBookManager($rs_id, $businessid);

                        if($GetBookManager){

                            $dateold = $GetBookManager->reserved_at;

                            $travelerid = $GetBookManager->user_id;

                            $status = $GetBookManager->status;
                            
                            if($status==$User::STATUS_HISTORY){

                                echo "error -> process error";

                            }else{
                                
                                if($dateold==$date){

                                    $update = $Reservation->UpdateReservationDataManager($rs_id, $businessid, $date, $time, $description);
    
                                    if($update){
    
                                         //here notif
                                         $link = $protocollinks.'/traveler/view/view-notification';
                            
                                         $message = $businessname.' update your book on '.$date. ' '.date("h:i:A", strtotime($time));
                     
                                         $insertnotif = $Notification->Insert($iduser, $travelerid, $User::USER_TYPE_TRAVELER, $link, $message);
                                                                         
                                         if($insertnotif==1){
                         
                                             echo "success";
                         
                                         }else{
     
                                             echo "error -> process error";
                                         }
    
    
                                    }else{
    
                                        echo "error -> process failed";
                                    }
    
                                }else{
    
                                    $vallimitdate = $Validator->ValidateDateLimit($date);
    
                                    if($vallimitdate){
    
                                        $update = $Reservation->UpdateReservationDataManager($rs_id, $businessid, $date, $time, $description);
    
                                        if($update){
        
                                             //here notif
                                            $link = $protocollinks.'/traveler/view/view-notification';
                                
                                            $message = $businessname.' update your book from '.$dateold. ' to ' .$date .' '.date("h:i:A", strtotime($time));
                        
                                            $insertnotif = $Notification->Insert($iduser, $travelerid, $User::USER_TYPE_TRAVELER, $link, $message);
                                                                            
                                            if($insertnotif==1){
                            
                                                echo "success";
                            
                                            }else{
        
                                                echo "error -> process error";
                                            }
        
        
                                        }else{
        
                                            echo "error -> process failed";
                                        }
        
                                    }else{
        
                                        echo "error -> date error";
                                    }
    
                                }
                            }
                        }else{

                            echo "error -> process error";

                        }

                    }else{
      
                        echo "error -> invalid time";
                        
                    }
                    
                }else{

                    echo "error -> invalid date";
                        
                }
            }else{

                echo "error -> invalid process";
            }

        }else{

            echo "error -> token error";
        }
    }
    elseif(isset($_POST['token_update_reservation_service_aquired'])){

        $token = $_POST['token_update_reservation_service_aquired'];

        $rs_id = $_POST['rs_id'];

        $totalprice = $_POST['totalprice'];

        $ValidateToken = $Validator->ValidateToken($token);

        if($ValidateToken==1){
            if(isset($_POST['packages'])){

                $packages = $_POST['packages'];

                $ValidateFields = $Validator->ValidateFields($token, $rs_id, $totalprice, $packages);
                
                if($ValidateFields==1){

                    $checkpricenumber = $Validator->ValidateContact($totalprice);

                    if($checkpricenumber){

                        $GetBookManager = $Reservation->GetBookManager($rs_id, $businessid);

                        if($GetBookManager){

                            $dateofbook = $GetBookManager->reserved_at;
        
                            $timeofbook = $GetBookManager->time;
        
                            $user_id = $GetBookManager->user_id;
        
                            $update = $Reservation->UpdateReservationCost($rs_id, $User::STATUS_HISTORY, $businessid, $totalprice);

                            if($update){
                                $delete = $Reservation->DeleteReservaBullService($rs_id);
                                //check packages exit
                                foreach($packages as $value){

                                    $CheckServiceExist = $Service->CheckServiceExist($value, $businessid);

                                    if($CheckServiceExist){

                                        $serviceidval = $value;

                                        $insertserviceq = $Reservation->InsertReservationService($rs_id, $serviceidval);
                                        
                                    }
                                }

                                
                                //here notif
                                 $link = $protocollinks.'/traveler/view/view-notification';
            
                                 $message = 'Update Your Book History Data in '. $businessname.' at '.$dateofbook. ' '.date("h:i:A", strtotime($timeofbook));
             
                                 $insertnotif = $Notification->Insert($iduser, $user_id, $User::USER_TYPE_TRAVELER, $link, $message);
                                                                 
                                 if($insertnotif==1){
                 
                                     echo "success";
                 
                                 }

                            }else{
            
                                echo "error -> invalid process";
                            }
                        }else{
            
                            echo "error -> invalid process";
                        }

                    }else{
        
                        echo "error -> invalid process";
                    }

                }else{

                    echo "error -> invalid process";
                }

            }else{

                echo "error -> select packages";
            }
        }else{

            echo "error -> token error";
        }
    }
