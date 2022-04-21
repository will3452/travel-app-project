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

    if(isset($_POST['token_add_reviews'])){

        $token = $_POST['token_add_reviews'];

        $host_id = $_POST['host_id'];

        $rate = $_POST['rate'];

        $description = $_POST['description'];

        $ValidateToken = $Validator->ValidateToken($token);

        if($ValidateToken==1){

            $ValidateFields = $Validator->ValidateFields($token, $host_id, $rate, $description);

            if($ValidateFields==1){

                if($Validator->ValidateContact($rate)){

                    if($rate>5 || $rate==0){

                        echo "error -> invalid rate";

                    }else{

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
                                //check traveler already done book here

                                if($Reservation->CheckIfTravelerAlreadyHaveBookInSpecificHost($iduser, $host_id, $User::STATUS_HISTORY)>0){
                                                            
                                    //submit reviews

                                    $insert = $Service->SubmitReviews($iduser, $host_id, $rate, $description, $User::STATUS_HIDE);

                                    if($insert){

                                        //here notif
                                        $link = $protocollinks.'/manager/view/view-notification';

                                        $message = 'Submit A Reviews, '.$rate. ' star,  '.$description;

                                        $insertnotif = $Notification->Insert($iduser, $manager_id, $User::USER_TYPE_MANAGER, $link, $message);
                                                                        
                                        if($insertnotif==1){

                                            echo "success";

                                        }

                                    }else{

                                        echo "error -> process failed";
                                    }

                                }else{

                                    echo "error -> you don't have book history on this establishment / host";
                                }

                            }

                        }else{

                            echo "error - > business error";
                        }
                    }

                }else{

                    echo "error -> invalid rate";
                }

            }else{

                echo "error -> please select fields";
            }

        }else{

            echo "tokenerror";
        }
    }