<?php
    include_once '../../../vendor/autoload.php';
    $Gcash = new Gcash;
    $Validator = new Validator;
    if(isset($_POST['token_pricing_submit'])){
        $price_ac = $_POST['price_ac'];
        $description_acc_price = $_POST['description_acc_price'];
        $token_pricing_submit = $_POST['token_pricing_submit'];
        $ValidateToken = $Validator->ValidateToken($token_pricing_submit);
        if($ValidateToken==1){
            $ValidateFields = $Validator->ValidateFields($price_ac, $description_acc_price);
            if($ValidateFields==1){
                    $ValidateContact = $Validator->ValidateContact($price_ac);
                    if($ValidateContact>0){
                        $PricinghProcess = $Gcash->PricinghProcess($price_ac, $description_acc_price);
                        if($PricinghProcess==1){
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