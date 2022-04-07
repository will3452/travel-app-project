<?php
    include_once '../../../vendor/autoload.php';
    include_once '../process/LoginStatus.php';
    $Validator = new Validator;
    $Payment = new Payment;
    $User = new User;
    $email = $_SESSION['manager'];
    $GetUserID = $User->GetUserID($email);
    $userid = $GetUserID->id;
    if(isset($_POST['token_payrenewal'])){
        $pop = $_FILES['pop'];
        $token = $_POST['token_payrenewal'];
        $date = $_POST['date'];
        if($Validator->ValidateToken($token)){
            $validateimage = $Validator->ValidateImage($pop);
            if($Validator->ValidateImage($pop)==='emp'){
                echo "EMPPOP";
            }elseif($Validator->ValidateImage($pop)==='fileexterror'){
                echo "FNAPOP";
            }
            elseif($Validator->ValidateImage($pop)==='fileeror'){
                echo "FEPOP";
            }elseif($Validator->ValidateImage($pop)==='fileoversize'){
                echo "FOSPOP";
            }else{
                $Fields = $Validator->ValidateFields($pop, $token, $date);
                if($Fields){
                    $ValidateDate = $Validator->ValidateDate($date);
                    if($ValidateDate==1){
                        $Insert = $Payment->ManagerPOP($userid, $pop, $User::ACCOUNT_PAYMENT, $date);
                        if($Insert==1){
                            //here notif
                            echo "success";
                        }else{
                            echo "error";
                        }
                    }else{
                        echo "invdate";
                    }
                }else{
                    echo "emp";
                }
            }
        }else{
            echo "tokeninvalid";
        }
    }