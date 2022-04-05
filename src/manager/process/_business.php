<?php
    include_once '../../../vendor/autoload.php';
    $User = new User;
    $Validator = new Validator;
    $Authentication = new Authentication;
    $Authentication->session();
    $email = $_SESSION['manager'];
    $GetUserID = $User->GetUserID($email);
    $userid = $GetUserID->id;
    $userid = $GetUserID->id;
    if(isset($_POST['token_business_submit'])){
        $token_business_submit = $_POST['token_business_submit'];
        $logofile = $_FILES['logofilename'];
        $businessname = $_POST['businessname'];
        $businesstype = $_POST['businesstype'];
        $ValidateToken = $Validator->ValidateToken($token_business_submit);
        if($ValidateToken==1){
            $ValidateImage = $Validator->ValidateImage($logofile);
            if($Validator->ValidateImage($logofile)==='emp'){
                echo "EMP";
            }elseif($Validator->ValidateImage($logofile)==='fileexterror'){
                echo "FNA";
            }
            elseif($Validator->ValidateImage($logofile)==='fileeror'){
                echo "FE";
            }elseif($Validator->ValidateImage($logofile)==='fileoversize'){
                echo "FOS";
            }else{
                $ValidateFields = $Validator->ValidateFields($businessname, $businesstype, $logofile);
                if($ValidateFields==1){
                    $InsertBusinessManager = $User->InsertBusinessManager($logofile, $businessname, $userid, $businesstype);
                    if($InsertBusinessManager==1){
                        echo "success";
                    }else{
                        echo "error";
                    }
                }else{
                    echo "emp";
                }
            }
        }else{
            echo "invalidtoken";
        }
    }