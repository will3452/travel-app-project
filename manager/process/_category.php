<?php
    include_once '../../vendor/autoload.php';

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

                    echo "error -> create business first";
                }
            }else{

                echo "error -> process error";
            }
        }else{

            echo "error -> process error";
        }
    }
    elseif(isset($_POST['token_categorydelete_manager'])){

        $token = $_POST['token_categorydelete_manager'];

        $categ_id = $_POST['categ_id'];

        $ValidateToken = $Validator->ValidateToken($token);
        
        if($ValidateToken==1){

            $ValidateFields = $Validator->ValidateFields($token, $categ_id);

            if($ValidateFields==1){

                $check = $User->GetBusinessManager($iduser);

                if($check){
            
                    $businessid = $check->id;
                    //check if categ exist
                    $check = $Service->CheckCategExist($categ_id, $businessid);

                    if($check){

                        $categname = $check->name;
                        
                        //check if categ is used

                        $check2 = $Service->CheckCategUsedInService($categname, $businessid);

                        if($check2){
                            
                            echo "error -> category is used, cannot be deleted!";

                        }else{

                            $delete = $Service->CategoryDelete($categ_id, $businessid);

                            if($delete){

                                echo "success";
                            }
                            else{

                                echo "error -> process error delete";
                            }
                        }

                    }else{

                        echo "error -> create business first";
                    }

                }
            }else{

                echo "error -> process error";
            }

        }else{

            echo "error -> process error";
        }
    }