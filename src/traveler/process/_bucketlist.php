<?php

    include_once '../../../vendor/autoload.php';

    include_once '../process/LoginStatus.php';

    $User = new User;

    $Service = new Service;

    $Validator = new Validator;

    $email = $_SESSION['traveler'];

    $GetUserID = $User->GetUserID($email);
    
    $iduser = $GetUserID->id;

    if(isset($_POST['token_add_bucketlist'])){

        $token = $_POST['token_add_bucketlist'];

        $service_id = $_POST['service_id'];

        $host_view = $_POST['host_view'];

        $date = $_POST['date'];

        $description = $_POST['description'];

        $ValidateToken = $Validator->ValidateToken($token);

        if($ValidateToken==1){

            $ValidateFields = $Validator->ValidateFields($token, $service_id, $date, $description);

            if($ValidateFields==1){

                $ValidateDate = $Validator->ValidateDate($date);

                if($ValidateDate){
                    //check CheckServiceExist

                    $check = $Service->CheckServiceExist($service_id, $host_view);

                    if($check){
                        //insert bucketlist

                        $insert = $Service->InsertBucketList($iduser, $service_id, $date, $description);

                        if($insert==1){
                            
                            echo "success";
                        }

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
    elseif(isset($_POST['token_update_bucketlist'])){

        $token = $_POST['token_update_bucketlist'];

        $bucketlist_id = $_POST['bucketlist_id'];

        $date = $_POST['date'];

        $description = $_POST['description'];

        $ValidateToken = $Validator->ValidateToken($token);

        if($ValidateToken==1){

            $ValidateFields = $Validator->ValidateFields($token, $bucketlist_id, $date, $description);

            if($ValidateFields==1){

                $ValidateDate = $Validator->ValidateDate($date);

                if($ValidateDate){
                    //check CheckServiceExist

                    $GetBucketlistExist = $Service->GetBucketlistExist($iduser, $bucketlist_id);

                    if($GetBucketlistExist){

                        $dateold = date("Y-m-d", strtotime($GetBucketlistExist->date));

                        if($date==$dateold){

                            $update = $Service->UpdateBucketlist($iduser, $bucketlist_id, $dateold, $description);

                            if($update){

                                echo "success";
                            }
                        }else{

                            $update = $Service->UpdateBucketlist($iduser, $bucketlist_id, $date, $description);

                            if($update){

                                echo "success";
                            }
                        }
                        

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
    elseif(isset($_POST['token_Delete_bucketlist'])){

        $token = $_POST['token_Delete_bucketlist'];

        $bucketid = $_POST['bucketid'];

        $ValidateToken = $Validator->ValidateToken($token);

        if($ValidateToken==1){

            $ValidateFields = $Validator->ValidateFields($token, $bucketid);

            if($ValidateFields==1){

                //delete
                $delete = $Service->DeleteBucketList($iduser, $bucketid);

                if($delete){

                    echo "success";
                }

            }else{

                echo "EMPF";
            }

        }else{

            echo "tokenerror";
        }
    }   
