<?php
    include_once '../../../vendor/autoload.php';
    include_once '../process/LoginStatus.php';
    $Validator = new Validator;
    $Payment = new Payment;
    $User = new User;
    $Promotion = new Promotion;
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
    elseif(isset($_POST['token_create_promo'])){
        $token = $_POST['token_create_promo'];
        $promo_id = $_POST['promo_id'];
        $date = $_POST['date'];
        $adsimage = $_FILES['image'];
        $imagepop = $_FILES['imagepop'];
        if($Validator->ValidateToken($token)){
            $validateimage = $Validator->ValidateImage($adsimage);
            if($Validator->ValidateImage($adsimage)==='emp'){
                echo "EMP";
            }elseif($Validator->ValidateImage($adsimage)==='fileexterror'){
                echo "FNA";
            }
            elseif($Validator->ValidateImage($adsimage)==='fileeror'){
                echo "FE";
            }elseif($Validator->ValidateImage($adsimage)==='fileoversize'){
                echo "FOS";
            }else{
                $validateimage = $Validator->ValidateImage($imagepop);
                if($Validator->ValidateImage($imagepop)==='emp'){
                    echo "EMP";
                }elseif($Validator->ValidateImage($imagepop)==='fileexterror'){
                    echo "FNA";
                }
                elseif($Validator->ValidateImage($imagepop)==='fileeror'){
                    echo "FE";
                }elseif($Validator->ValidateImage($imagepop)==='fileoversize'){
                    echo "FOS";
                }else{
                    $Fields = $Validator->ValidateFields($adsimage, $imagepop, $token, $date, $promo_id);
                    if($Fields){
                        $ValidateDate = $Validator->ValidateDate($date);
                        if($ValidateDate==1){
                            //check if promo id exist
                            $ValPromo = $Promotion->GetPromoData($promo_id);
                            if($ValPromo){
                                $Insert = $Payment->AdsPOP($userid, $adsimage, $imagepop, $promo_id, $date);
                                if($Insert){
                                    $popnewname =  $Insert;
                                    $Insertpop = $Payment->InsertPOP($popnewname, $userid, $User::PROMOTION_PAYMENT);
                                    if($Insertpop==1){
                                        //notification
                                        echo "success";
                                    }else{
                                        echo "error";
                                    }
                                }else{
                                    echo "error";
                                }
                            }else{
                                echo "invid";
                            }
                        }else{
                            echo "invdate";
                        }
                    }else{
                        echo "emp";
                    }
                }
            }
        }
        else{
            echo "tokeninvalid";
        }
    }