<?php

    include_once '../../vendor/autoload.php';

    include_once '../process/LoginStatus.php';

    $User = new User;

    $Service = new Service;

    $Validator = new Validator;

    $Reservation = new Reservation;
    
    $Notification = new Notification;

    $protocollinks = $Notification->ProtocolAndLinks();

    $email = $_SESSION['traveler'];

    $GetUserID = $User->GetUserID($email);
    
    $iduser = $GetUserID->id;
    
    if(isset($_POST['token_add_book'])){
      
        $token = $_POST['token_add_book'];

        $host_id = $_POST['host_id'];

        $date = $_POST['date'];

        $time = $_POST['time'];

        $description = $_POST['description'];

        $ValidateToken = $Validator->ValidateToken($token);

        if($ValidateToken==1){

            $ValidateFields = $Validator->ValidateFields($token, $host_id, $date, $time, $description);

            if($ValidateFields==1){

                $ValidateDate = $Validator->ValidateDate($date);

                if($ValidateDate){

                    $vallimitdate = $Validator->ValidateDateLimit($date);
    
                    if($vallimitdate){

                        $ValidateTime = $Validator->ValidateTime($time);

                        if($ValidateTime){

                            $check = $User->GetBusinessData($host_id);
                        
                            if($check){

                                $manager_id = $check->manager_id;

                                $GetManagerData = $User->GetUserData($manager_id, $User::USER_TYPE_MANAGER);

                                if($GetManagerData->block_status == $User::BLOCK_STATUS_TEMPORARY){

                                    echo "error -> host temporary disabled";
                                    
                                }elseif($GetManagerData->block_status == $User::BLOCK_STATUS_PERMANENTLY){

                                    echo "error -> host is no longer available";
                                }
                                else{
                                    //chcek if user already book on that day

                                    $checkbook = $Reservation->CheckIfReservationExist($iduser, $host_id, $date);

                                    if($checkbook>0){

                                        echo "error - > you already book on this host and date";
                                    }                            
                                    else{

                                        $insert = $Reservation->InsertReservation($iduser, $host_id, $User::STATUS_PENDING, $description, $date, $time);

                                        if($insert==1){
                                            
                                            //here notif
                                            $link = $protocollinks.'/manager/view/view-notification';
            
                                            $message = 'Book On '.$date. ', '.date("h:i:a", strtotime($time));
            
                                            $insertnotif = $Notification->Insert($iduser, $manager_id, $User::USER_TYPE_MANAGER, $link, $message);
                                                                            
                                            if($insertnotif==1){
                            
                                                echo "success";
                            
                                            }
                                        }else{
                                        
                                            echo "error - > create error";
                                        }
                                    }
                                }
                            }else{

                                echo "error - > business error";
                            }
                        }else{
                            
                            echo "error - > invtime";
                        }
                    }else{
                        
                        echo "error - > invdate";
                    }
                }else{
                        
                    echo "error - > invdate";
                }
            }else{

                echo "error - > EMPF";
            }
        }else{

            echo "error - > tokenerror";
        }

    }
    elseif(isset($_POST['token_deletereservation_travler'])){

        $token = $_POST['token_deletereservation_travler'];

        $res_id = $_POST['res_id_d'];

        $ValidateToken = $Validator->ValidateToken($token);

        if($ValidateToken==1){

            $ValidateFields = $Validator->ValidateFields($token, $res_id);
            
            if($ValidateFields==1){

                 //update reservation / booking into approved

                $GetBook = $Reservation->GetBook($iduser, $res_id);

                if($GetBook){
 
                    $dateofbook = $GetBook->reserved_at;
 
                    $timeofbook = $GetBook->time;

                    $host_id = $GetBook->business_id;

                    $check = $User->GetBusinessData($host_id);

                    $manager_id = $check->manager_id;
 
                    $update = $Reservation->UpdateReservationTravel($res_id, $User::STATUS_HISTORY, $User::STATUS_DROPPED, $iduser);
 
                    if($update){
     
                        //here notif
                        $link = $protocollinks.'/manager/view/view-notification';
     
                        $message = 'Cancel Book on '.$dateofbook. ' '.date("h:i:A", strtotime($timeofbook));
     
                        $insertnotif = $Notification->Insert($iduser, $manager_id, $User::USER_TYPE_MANAGER, $link, $message);
                                                        
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

            echo "error -> process error";
        }
    }
    elseif(isset($_POST['token_update_book'])){

        $token = $_POST['token_update_book'];

        $book_id = $_POST['book_id'];

        $date = $_POST['date'];

        $time = $_POST['time'];

        $description = $_POST['description'];

        $ValidateToken = $Validator->ValidateToken($token);

        if($ValidateToken==1){

            $ValidateFields = $Validator->ValidateFields($token, $book_id, $date, $time, $description);

            if($ValidateFields==1){

                $ValidateDate = $Validator->ValidateDate($date);

                if($ValidateDate){

                    $vallimitdate = $Validator->ValidateDateLimit($date);
    
                    if($vallimitdate){

                        $ValidateTime = $Validator->ValidateTime($time);

                        if($ValidateTime){

                            $GetBook = $Reservation->GetBook($iduser, $book_id);

                            if($GetBook){
             
                                $dateold = $GetBook->reserved_at;
             
                                $business_id = $GetBook->business_id;

                                $status = $GetBook->status;

                                $GetBusinessData = $User->GetBusinessData($business_id);

                                $managerid = $GetBusinessData->manager_id;

                                $GetManagerData = $User->GetUserData($managerid, $User::USER_TYPE_MANAGER);

                                if($GetManagerData->block_status == $User::BLOCK_STATUS_TEMPORARY){

                                    echo "error -> host temporary disabled";
                                    
                                }elseif($GetManagerData->block_status == $User::BLOCK_STATUS_PERMANENTLY){

                                    echo "error -> host is no longer available";
                                }
                                else{

                                    if($status==$User::STATUS_HISTORY || $status==$User::STATUS_APPROVED){

                                        echo "error -> process error";
        
                                    }else{
                                        
                                        if($dateold==$date){

                                            $update = $Reservation->UpdateReservationDataTraveler($book_id, $iduser, $date, $time, $description);

                                            if($update){
        
                                                //here notif
                                                $link = $protocollinks.'/manager/view/view-notification';
                                
                                                $message = 'update book on '.$date. ' '.date("h:i:A", strtotime($time));
                            
                                                $insertnotif = $Notification->Insert($iduser, $managerid, $User::USER_TYPE_MANAGER, $link, $message);
                                                                                
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

                                                $update = $Reservation->UpdateReservationDataTraveler($book_id, $iduser, $date, $time, $description);
        
                                                if($update){
                
                                                    //here notif
                                                    $link = $protocollinks.'/manager/view/view-notification';
                                        
                                                    $message = 'update book from '.$dateold. ' to ' .$date .' '.date("h:i:A", strtotime($time));
                                
                                                    $insertnotif = $Notification->Insert($iduser, $managerid, $User::USER_TYPE_MANAGER, $link, $message);
                                                                                    
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
                                }

                            }else{

                                echo "error -> process error";
                            }

                        }else{

                            echo "error -> invalid time";
                        }
                    }else{

                        echo "error -> invalid date limit";
                    }
                }else{

                    echo "error -> invalid date";
                }
            }else{

                echo "error -> empty fields";
            }
        }else{

            echo "error -> process error";
        }
    }