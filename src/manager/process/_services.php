<?php
    include_once '../../../vendor/autoload.php';
    include_once '../process/LoginStatus.php';
    $User = new User;
    $Service = new Service;
    $Validator = new Validator;
    $email = $_SESSION['manager'];
    $GetUserID = $User->GetUserID($email);
    $iduser = $GetUserID->id;
    $maneger_type = $GetUserID->maneger_type;
    if(isset($_POST['token_create_service'])){
        $image = $_FILES['image'];
        $token = $_POST['token_create_service'];
        $category = $_POST['category'];
        $name = $_POST['name'];
        $price = $_POST['price'];
        $description = $_POST['description'];
        
        $ValidateToken = $Validator->ValidateToken($token);
        if($ValidateToken==1){
            $validateimage = $Validator->ValidateImage($image);
            if($Validator->ValidateImage($image)==='emp'){
                echo "EMPIMG";
            }elseif($Validator->ValidateImage($image)==='fileexterror'){
                echo "FNA";
            }
            elseif($Validator->ValidateImage($image)==='fileeror'){
                echo "FE";
            }elseif($Validator->ValidateImage($image)==='fileoversize'){
                echo "FOS";
            }else{
                $ValidateFields = $Validator->ValidateFields($image, $token, $category, $name, $price, $description);
                if($ValidateFields==1){
                    $ServiceCategory = $User->ServiceCategory($category);
                    if($ServiceCategory==1){
                        //check business exist
                        $check = $User->GetBusinessManager($iduser);
                        if($check){
                            $businessid = $check->id;
                            $Insert = $Service->Insert($category, $image, $name, $price, $description, $businessid);
                            if($Insert==1){
                                echo "success";
                            }else{
                                echo "error";
                            }
                        }else{
                            echo "nobusiness";
                        }
                    }else{
                        echo "notvalidcategory";
                    }
                }else{
                    echo "EMPF";
                }
            }
        }else{
            echo "tokenerror";
        }
    }
    //delete service
    elseif(isset($_POST['token_Delete_Service_manager'])){
        $token = $_POST['token_Delete_Service_manager'];
        $service_id = $_POST['service_id'];
        $ValidateToken = $Validator->ValidateToken($token);
        if($ValidateToken==1){
            $ValidateFields = $Validator->ValidateFields($service_id, $token);
            if($ValidateFields==1){
                //check here if used
                $check = $User->GetBusinessManager($iduser);
                if($check){
                    $businessid = $check->id;
                    $delete = $Service->Delete($service_id, $businessid);
                    if($delete==1){
                        echo "success";
                    }else{
                        echo "error";
                    }
                }
            }else{
                echo "emp";
            }
        }else{
            echo "tokenerror";
        }
    }
    //update
    elseif(isset($_POST['token_update_service'])){
        $image = $_FILES['image'];
        $service_id = $_POST['service_id'];
        $token = $_POST['token_update_service'];
        $category = $_POST['category'];
        $name = $_POST['name'];
        $price = $_POST['price'];
        $description = $_POST['description'];
        $ValidateToken = $Validator->ValidateToken($token);
        if($ValidateToken==1){
            $ValidateFields = $Validator->ValidateFields($service_id, $token, $category, $name, $price, $description);
            if($ValidateFields==1){
                $ServiceCategory = $User->ServiceCategory($category);
                if($ServiceCategory==1){
                    $check = $User->GetBusinessManager($iduser);
                    if($check){
                        $businessid = $check->id;
                        if(!empty($_FILES['image']['name'])){
                            $validateimage = $Validator->ValidateImage($image);
                            if($Validator->ValidateImage($image)==='emp'){
                                echo "EMPIMG";
                            }elseif($Validator->ValidateImage($image)==='fileexterror'){
                                echo "FNA";
                            }
                            elseif($Validator->ValidateImage($image)==='fileeror'){
                                echo "FE";
                            }elseif($Validator->ValidateImage($image)==='fileoversize'){
                                echo "FOS";
                            }else{
                                $Update = $Service->Update($category, $image, $name, $price, $description, $businessid, $service_id);
                                if($Update==1){
                                    echo "success";
                                }else{
                                    echo "error";
                                }
                            }
                        }else{
                            $Update = $Service->Update($category, $image, $name, $price, $description, $businessid, $service_id);
                            if($Update==1){
                                echo "success";
                            }else{
                                echo "error";
                            }
                        }
                    }else{
                        echo "nobusiness";
                    }
                }else{
                    echo "notvalidcategory";
                }
            }else{
                echo "EMPF";
            }
        }else{
            echo "tokenerror";
        }
    }