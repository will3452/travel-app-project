<?php
    include_once '../../../vendor/autoload.php';

    include_once '../process/LoginStatus.php';

    $User = new User;
    
    $Validator = new Validator;

    $Service = new Service;

    $email = $_SESSION['manager'];

    $GetUserID = $User->GetUserID($email);

    $iduser = $GetUserID->id;

    $maneger_type = $GetUserID->maneger_type;

   

    if(isset($_POST['token_create_category'])){

        $token = $_POST['token_create_category'];
        
        $name = $_POST['name'];

        $ValidateToken = $Validator->ValidateToken($token);
        
        if($ValidateToken==1){

            $ValidateFields = $Validator->ValidateFields($token, $name);

            if($ValidateFields==1){

                $check = $User->GetBusinessManager($iduser);

                if($check){
            
                    $businessid = $check->id;

                    $insert = $Service->InsertServiceCategory($businessid, $name);
                
                    if($insert==1){
    
                        echo "success";
                    }
                }
                else{

                    echo "nobusiness";
                }
            }else{

                echo "emp";
            }
        }else{

            echo "tokenerror";
        }
    }