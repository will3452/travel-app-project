<?php

include_once '../../../vendor/autoload.php';
$Authentication = new Authentication;
$Validator = new Validator;

if(isset($_POST['token_authentication_login'])){
    $checkbox = "";
    if(isset($_POST['checkbox'])){
        $checkbox = $_POST['checkbox'];
    }
    $token_authentication_login = $_POST['token_authentication_login'];
    $email = $_POST['email'];
    $password  = $_POST['password'];
    $token_authentication_login = $_POST['token_authentication_login'];
    if($Validator->ValidateToken($token_authentication_login)){
        $field = $Validator->ValidateLogin($email, $password);
        if($field==1){
            $emailact = $Authentication->CheckUserForLogin($email); //check email active
            if($emailact>0){
                $UserLogin = $Authentication->UserLogin($email, $password, $checkbox);
                if($UserLogin){
                    session_start();
                    $UserLogin = $Authentication->UserLogin($email, $password, $checkbox);
                    echo $UserLogin;
                }else{
                    echo "INVALIDACC";
                }
            }else{
                echo "USERINVALID";
            }
        }else{
            echo "EMPT";
        }
    }else{
        echo "invalidtoken";
    }
   
}