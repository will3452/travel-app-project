<?php
    include_once '../../../vendor/autoload.php';

    $Gcash = new Gcash;

    $Validator = new Validator;

    if(isset($_POST['token_gcash_submit'])){

        $name = $_POST['name'];

        $number = $_POST['number'];

        $token_gcash_submit = $_POST['token_gcash_submit'];

        $ValidateToken = $Validator->ValidateToken($token_gcash_submit);

        if($ValidateToken==1){

            $ValidateFields = $Validator->ValidateFields($name, $number, $token_gcash_submit);

            if($ValidateFields==1){

                $ValidateContact = $Validator->ValidateContact($number);

                if($ValidateContact>0){

                    $GcashProcess = $Gcash->GcashProcess($name, $number);

                    if($GcashProcess==1){

                        echo "success";
                    }else{

                        echo "error";
                    }
                }else{

                    echo "invnum";
                }

            }else{

                echo "empty";
            }
        }else{
            
             echo "invalidtoken";
        }
    }