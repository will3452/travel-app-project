<?php

include_once '../../vendor/autoload.php';

include_once '../../PHPmailersetup/mailsetup.php';

$User = new User;

$Validator = new Validator;

$Mails = new Mail;

$Notification = new Notification;

$protocollinks = $Notification->ProtocolAndLinks();

if(isset($_POST['token_authentication_login'])){

    $token = $_POST['token_authentication_login'];

    $email = $_POST['email'];

    $token_authentication_login = $_POST['token_authentication_login'];

    if($Validator->ValidateToken($token, $email)){

        $field = $Validator->ValidateFields($email);

        if($field==1){

            $checkemail = $User->GetUserID($email);
            
            if($checkemail){

               $status = $checkemail->block_status;

               if($status==$User::BLOCK_STATUS_TEMPORARY){

                    echo "erro -> email is termporay disabled";

               }elseif($status==$User::BLOCK_STATUS_PERMANENTLY){

                    echo "erro -> email is no longer active";

               }else{

                    date_default_timezone_set('Asia/Manila'); 

                    $datetoday = date("y-m-d h:i:sa");

                    $secret= rand(100000000000000, 9999999999999999).$datetoday.uniqid();

                    $secretcode = base64_encode($secret);

                    $encodeem =  base64_encode($email);

                    $InsertUpdateEmailForgot = $User->InsertUpdateEmailForgot($email, $secret);

                    if($InsertUpdateEmailForgot){

                        $mail->addAddress($email);  

                        $mail->Subject = 'Account Status';   

                        $messageemail = 'You Request Forgot Password Confirmation <b> Travel Guide for Cebu Province Inc. </b> ';

                        $mail->Body = $Mails->SendMailForgotPassword($protocollinks, 'Account Forgot Password', 'Travel Guide for Cebu Province Inc.', $messageemail, $secretcode, $encodeem);

                        if($mail->send()){
                            
                          echo "success";

                        }else{

                          echo "error -> failed send mail";
                        }

                    }else{

                        echo "error -> process failed";
                    }

               }

            }else{

                echo "error -> email is not register";
            }
        }else{

            echo "error -> process failed";

        }

    }else{

        echo "error -> process failed";
    }
}
elseif(isset($_POST['token_authentication_changepassword'])){

    $token = $_POST['token_authentication_changepassword'];

    $password = $_POST['password'];

    $token_authentication_changepassword = $_POST['token_authentication_changepassword'];

    if($Validator->ValidateToken($token, $password)){

        $field = $Validator->ValidateFields($password);

        if($field==1){

            $passwordstrong = $Validator->ValidatePassword($password);

            $dcrypt = $User->dcrypt($password);

            if($passwordstrong){

                $ChangePasswordForgot = $User->ChangePasswordForgot($dcrypt);

                if($ChangePasswordForgot){

                    $deleteforgotpassword = $User->deleteforgotpassword();

                    if($deleteforgotpassword){

                        unset($_SESSION['changepassword']);

                        echo "success";
                    }

                }else{

                    echo "error -> process failed";
                }

            }else{

                echo "error -> password must have upper, lowercase, number, special character";
            }


        }else{

            echo "error -> process failed";

        }

    }else{

        echo "error -> process failed";
    }
}