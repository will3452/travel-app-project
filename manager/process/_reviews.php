<?php


    include_once '../../vendor/autoload.php';

    include_once '../process/LoginStatus.php';

    $User = new User;

    $Service = new Service;

    $Validator = new Validator;

    $email = $_SESSION['manager'];

    $GetUserID = $User->GetUserID($email);

    $iduser = $GetUserID->id;

    $maneger_type = $GetUserID->maneger_type;

    $check = $User->GetBusinessManager($iduser);

    $businessid = $check->id;


    if(isset($_POST['token_deletereviews_manager'])){

        $token = $_POST['token_deletereviews_manager'];

        $reviews_id = $_POST['reviews_id'];

        $ValidateToken = $Validator->ValidateToken($token);
        
        if($ValidateToken==1){

            $ValidateFields = $Validator->ValidateFields($reviews_id, $token);

            if($ValidateFields==1){

                $deletereviews = $Service->DeleteReviews($reviews_id, $businessid);

                if($deletereviews){

                    echo "success";

                }else{

                    echo "erorr -> process error";
                }

            }else{

                echo "erorr -> process error";
            }

        }else{

            echo "erorr -> process error";
        }
    }
    elseif(isset($_POST['token_showreviews_manager'])){
        
        $token = $_POST['token_showreviews_manager'];

        $reviews_id_s = $_POST['reviews_id_s'];

        $ValidateToken = $Validator->ValidateToken($token);

        if($ValidateToken==1){

            $ValidateFields = $Validator->ValidateFields($reviews_id_s, $token);

            if($ValidateFields==1){

                $UpdateReviews = $Service->UpdateReviews($reviews_id_s, $businessid, $User::STATUS_SHOW);

                if($UpdateReviews){

                    echo "success";

                }else{

                    echo "erorr -> process error";
                }

            }else{

                echo "erorr -> process error";
            }

        }else{

            echo "erorr -> process error";
        }

    }
    elseif(isset($_POST['token_hidereviews_manager'])){
        
        $token = $_POST['token_hidereviews_manager'];

        $reviews_id_h = $_POST['reviews_id_h'];

        $ValidateToken = $Validator->ValidateToken($token);

        if($ValidateToken==1){

            $ValidateFields = $Validator->ValidateFields($reviews_id_h, $token);

            if($ValidateFields==1){

                $UpdateReviews = $Service->UpdateReviews($reviews_id_h, $businessid, $User::STATUS_HIDE);

                if($UpdateReviews){

                    echo "success";

                }else{

                    echo "erorr -> process error";
                }

            }else{

                echo "erorr -> process error";
            }

        }else{

            echo "erorr -> process error";
        }

    }