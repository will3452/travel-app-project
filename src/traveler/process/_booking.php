<?php

    include_once '../../../vendor/autoload.php';

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

                    $ValidateTime = $Validator->ValidateTime($time);

                    if($ValidateTime){

                        $check = $User->GetBusinessData($host_id);
                    
                        if($check){

                            //chcek if user already book on that day

                            $checkbook = $Reservation->CheckIfReservationExist($iduser, $host_id, $date);

                            if($checkbook>0){

                                echo "error - > you already book on this host and date";
                            }                            
                            else{

                                $insert = $Reservation->InsertReservation($iduser, $host_id, $User::STATUS_PENDING, $description, $date, $time);

                                if($insert==1){
                                    
                                    //here notif
                                    $link = $protocollinks.'src/manager/view/view-notification';
    
                                    $message = 'Book On '.$date. ', '.date("h:i:a", strtotime($time));
    
                                    $insertnotif = $Notification->Insert($iduser, $User::USER_TYPE_MANAGER, $link, $message);
                                                                    
                                    if($insertnotif==1){
                    
                                        echo "success";
                    
                                    }
                                }else{
                                
                                    echo "error - > create error";
                                }
                            }
                        }else{

                            echo "error - > business error";
                        }
                    }else{
                        
                        echo "invtime";
                    }
                }else{
                    
                    echo "invdate";
                }
            }else{

                echo "EMPF";
            }
        }else{

            echo "tokenerror";
        }

    }