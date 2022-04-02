<?php
include_once '../../../vendor/autoload.php';
$User = new User;
$Validator = new Validator;
if(isset($_POST['token_register_manager'])){
    $file1 = $_FILES['profile_image'];
    $file2 = $_FILES['pop'];

    $first_name = $_POST['first_name'];
    $middle_name = $_POST['middle_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $manager_type = $_POST['manager_type'];
    $token_register_manager = $_POST['token_register_manager'];
    if($Validator->ValidateToken($token_register_manager)){
        //validate images
        $validateimage = $Validator->ValidateImage($file1);
        if($Validator->ValidateImage($file1)==='emp'){
            echo "EMPPROFILE";
        }elseif($Validator->ValidateImage($file1)==='fileexterror'){
            echo "FNAPROFILE";
        }
        elseif($Validator->ValidateImage($file1)==='fileeror'){
            echo "FEPROFILE";
        }elseif($Validator->ValidateImage($file1)==='fileoversize'){
            echo "FOSPROFILE";
        }else{
            $validateimage = $Validator->ValidateImage($file2);
            if($Validator->ValidateImage($file2)==='emp'){
                echo "EMPPOP";
            }elseif($Validator->ValidateImage($file2)==='fileexterror'){
                echo "FNAPOP";
            }
            elseif($Validator->ValidateImage($file2)==='fileeror'){
                echo "FEPOP";
            }elseif($Validator->ValidateImage($file2)==='fileoversize'){
                echo "FOSPOP";
            }else{
                $Fields = $Validator->ValidateFields($first_name, $middle_name, $last_name, $email, $phone, $password, $manager_type);
                if($Fields){
                    $valphone = $Validator->ValidateContact($phone);
                    if($valphone==1){
                        $valemail = $Validator->ValidateEmail($email);
                        if($valemail==$email){
                             $valpassword = $Validator->ValidatePassword($password);
                            if($valpassword==$password){
                                $hashpassword = $User->dcrypt($password);
                                //here validate type of manager
                                $valtypemanage = $Validator->ManagerTypeValidator($manager_type);
                                if($valtypemanage==1){
                                    $valemailexist = $User->EmailExist($email);
                                    if($valemailexist<1){
                                        $valephoneexist = $User->PhoneExist($phone);
                                        if($valephoneexist<1){
                                           $insert = $User->Create($User::USER_TYPE_MANAGER, $first_name, $middle_name, $last_name, $email, $phone, $hashpassword, $file1, $manager_type);
                                            if($insert==1){
                                                $insertpop = $User->ManagerPOP($email, $file2);
                                                if($insertpop==1){
                                                    echo "success";
                                                }else{
                                                    echo "error2";
                                                }
                                            }else{
                                                echo "error1";
                                            }
                                        }else{
                                            echo "phoneexist";
                                        }
                                    }else{
                                        echo "emailexist";
                                    }
                                }else{
                                    echo "typemanagernotexit";
                                }
                            }else{
                               echo "invalidpassword";
                            }
                        }else{
                            echo "invalidemail";
                        }
                    }else{
                        echo "invalidphone";
                    }
                }else{
                    echo "emptyfields";
                }
            }
        }
    }else{
        echo "invalidtoken";
    }
}