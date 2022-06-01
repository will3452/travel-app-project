<?php
    include_once '../../vendor/autoload.php';

    $User = new User;

    $Validator = new Validator;

    $Authentication = new Authentication;

    $Authentication->session();
    
    $email = $_SESSION['manager'];

    $GetUserID = $User->GetUserID($email);

    $userid = $GetUserID->id;

    $businesstype = $GetUserID->maneger_type;

    if(isset($_POST['token_business_submit'])){

        $token_business_submit = $_POST['token_business_submit'];

        $logofile = $_FILES['logofilename'];

        $businessname = $_POST['businessname'];

        $city = $_POST['city'];

        $municipality = $_POST['municipality'];

        $street = $_POST['street'];

        $barangay = $_POST['barangay'];

        $zip_code = $_POST['zip_code'];

        $landmark = $_POST['landmark'];

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
                $ValidateFields = $Validator->ValidateFields($businessname, $logofile, $city, $municipality, $street, $barangay, $zip_code, $landmark);

                if($ValidateFields==1){
                    
                    $InsertBusinessManager = $User->InsertBusinessManager($logofile, $businessname, $userid, $businesstype, $city, $municipality, $street, $barangay, $zip_code, $landmark);
                    
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
    elseif(isset($_POST['token_profile'])){

        $token = $_POST['token_profile'];

        $fname = $_POST['fname'];

        $mname = $_POST['mname'];

        $lname = $_POST['lname'];

        $contact = $_POST['contact'];

        $password = $_POST['password'];

        $image = $_FILES['fileimage'];

        $ValidateToken = $Validator->ValidateToken($token);

        if($ValidateToken==1){

            $ValidateFields = $Validator->ValidateFields($token, $fname, $mname, $lname, $contact);

            if($ValidateFields==1){

                $ValidateContact = $Validator->ValidateContact($contact);

                if($ValidateContact){

                    //get user data 
                    $GetUserData = $User->GetUserData($userid, $User::USER_TYPE_MANAGER);

                    if($GetUserData){

                        $currentphone = $GetUserData->phone;

                        $currentpassword = $GetUserData->password;
                        
                        if(empty($_FILES['fileimage']['tmp_name'])){

                            //check if empty password
                            if(empty($password)){
                                //empt ps

                                //check if phone match

                                if($currentphone==$contact){
                                    // update

                                    $update = $User->UpdateProfile($userid, $User::USER_TYPE_MANAGER, $image, $fname, $mname, $lname, $currentphone, $currentpassword);
                                    if($update){

                                        echo "success";
                                        
                                    }

                                    
                                }else{
                                    //validate contact exit

                                    $PhoneExist = $User->PhoneExist($contact);

                                    if($PhoneExist){
                                        
                                        echo "error -> phone already taken";
                                    }else{

                                        $update = $User->UpdateProfile($userid, $User::USER_TYPE_MANAGER, $image, $fname, $mname, $lname, $contact, $currentpassword);

                                        if($update){

                                            echo "success";
                                            
                                        }
                                    }

                                }

                            }else{
                                
                                $dcps = $User->dcrypt($password);

                                //validatepassword 
                                $ValidatePassword = $Validator->ValidatePassword($password);

                                if($ValidatePassword){

                                    if($currentphone==$contact){

                                        $update = $User->UpdateProfile($userid, $User::USER_TYPE_MANAGER, $image, $fname, $mname, $lname, $currentphone, $dcps);

                                        if($update){

                                            echo "success";
                                            
                                        }
                                    }else{

                                        $PhoneExist = $User->PhoneExist($contact);

                                        if($PhoneExist){
                                        
                                            echo "error -> phone already taken";
                                        }else{
    
                                            $update = $User->UpdateProfile($userid, $User::USER_TYPE_MANAGER, $image, $fname, $mname, $lname, $contact, $dcps);
    
                                            if($update){

                                                echo "success";
                                                
                                            }
                                        }

                                    }

                                }else{

                                    echo "error -> password not strong";
                                }
                                
                            }


                        }else{
                          
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

                                if(empty($password)){

                                    if($currentphone==$contact){
                                        
                                        $update = $User->UpdateProfile($userid, $User::USER_TYPE_MANAGER, $image, $fname, $mname, $lname, $currentphone, $currentpassword);

                                        if($update){

                                            echo "success";
                                            
                                        }
                                    }else{

                                        $PhoneExist = $User->PhoneExist($contact);

                                        if($PhoneExist){
                                            
                                            echo "error -> phone already taken";
                                        }else{
    
                                            $update = $User->UpdateProfile($userid, $User::USER_TYPE_MANAGER, $image, $fname, $mname, $lname, $contact, $currentpassword);
                                            
                                            if($update){

                                                echo "success";
                                                
                                            }
                                        }
                                        
                                    }
                                }else{

                                    $dcps = $User->dcrypt($password);

                                    //validatepassword 
                                    $ValidatePassword = $Validator->ValidatePassword($password);

                                    if($ValidatePassword){

                                        if($currentphone==$contact){

                                            $update = $User->UpdateProfile($userid, $User::USER_TYPE_MANAGER, $image, $fname, $mname, $lname, $currentphone, $dcps);

                                            if($update){

                                                echo "success";
                                                
                                            }

                                        }else{

                                            $PhoneExist = $User->PhoneExist($contact);

                                            if($PhoneExist){
                                            
                                                echo "error -> phone already taken";
                                            }else{
        
                                                $update = $User->UpdateProfile($userid, $User::USER_TYPE_MANAGER, $image, $fname, $mname, $lname, $contact, $dcps);
        
                                                if($update){

                                                    echo "success";
                                                    
                                                }
                                            }

                                        }

                                    }else{

                                        echo "error -> password not strong";
                                    }

                                }

                            }

                        }
                        
                    }


                }else{

                    echo "error -> invalid contact";
                }

            }else{

                echo "error - > empty fields";
            }

        }else{

            echo "error -> process error";
        }
    }