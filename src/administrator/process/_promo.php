<?php
    include_once '../../../vendor/autoload.php';

    $Validator = new Validator;

    $Promotion = new Promotion;

    if(isset($_POST['token_create_promo'])){

        $token = $_POST['token_create_promo'];

        $name = $_POST['name'];

        $price = $_POST['price'];

        $date = $_POST['date'];

        $description = $_POST['description'];

        $ValidateToken = $Validator->ValidateToken($token);

        if($ValidateToken==1){

            $ValidateFields = $Validator->ValidateFields($token, $name, $price, $description, $date);

            if($ValidateFields==1){

                $ValidatePrice = $Validator->ValidateContact($price);

                if($ValidatePrice==1){

                    $Validatedate = $Validator->ValidateContact($date);

                    if($Validatedate==1){
    
                        $Insert = $Promotion->Insert($name, $price, $date, $description);

                        if($Insert==1){

                            echo "success";

                        }else{

                            echo "error";
                        }
                    }else{
    
                        echo "invalidays";
                    }

                }else{

                    echo "invalidprice";
                }
            }else{

                echo "EMPF";

            }
        }else{

            echo "tokenerror";
        }
    }