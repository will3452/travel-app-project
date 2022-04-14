<?php

    include_once '../../vendor/autoload.php';

    include_once '../process/LoginStatus.php';

    $User = new User;

    $Service = new Service;

    $Validator = new Validator;

    $email = $_SESSION['traveler'];

    $GetUserID = $User->GetUserID($email);
    
    $iduser = $GetUserID->id;

    if(isset($_POST['token_add_bucketlist'])){

        $token = $_POST['token_add_bucketlist'];

        $host_id = $_POST['host_id'];

        $date = $_POST['date'];

        $description = $_POST['description'];

        $ValidateToken = $Validator->ValidateToken($token);

        if($ValidateToken==1){

            $ValidateFields = $Validator->ValidateFields($token, $host_id, $date, $description);

            if($ValidateFields==1){

                $ValidateDate = $Validator->ValidateDate($date);

                if($ValidateDate){
                    //check business

                    $check = $User->GetBusinessData($host_id);
                    
                    if($check){
                        //insert bucketlist

                        $insert = $Service->InsertBucketList($iduser, $host_id, $date, $description);

                        if($insert==1){
                            
                            echo "success";
                        }else{
                        
                            echo "error - > create error";
                        }

                    }else{

                        echo "error - > business error";
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
