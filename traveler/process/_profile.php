<?php

    include_once '../../vendor/autoload.php';

    include_once '../process/LoginStatus.php';

    $User = new User;

    $Validator = new Validator;

    $email = $_SESSION['traveler'];

    $GetUserID = $User->GetUserID($email);

    $iduser = $GetUserID->id;

    if(isset($_POST['token_profile'])){

        $token = $_POST['token_profile'];

        $fname = $_POST['fname'];

        $mname = $_POST['mname'];

        $lname = $_POST['lname'];

        $contact = $_POST['contact'];

        $password = $_POST['password'];

        $ValidateToken = $Validator->ValidateToken($token);

        if($ValidateToken==1){

            $ValidateFields = $Validator->ValidateFields($token, $fname, $mname, $lname, $contact);

            if($ValidateFields==1){

                $ValidateContact = $Validator->ValidateContact($contact);

                if($ValidateContact){

                    //get user data 
                    $GetUserData = $User->GetUserData($iduser, $User::USER_TYPE_TRAVELER);

                    if($GetUserData){

                        $currentphone = $GetUserData->phone;

                        $currentimage = $GetUserData->image;

                        $currentpassword = $GetUserData->password;
                        
                        if(empty($_FILES['fileimage']['tmp_name'])){

                            //check if empty password
                            if(empty($password)){
                                //empt ps

                                //check if phone match

                                if($currentphone==$contact){
                                    // update

                                    $update = $User->UpdateProfile($iduser, $User::USER_TYPE_TRAVELER, $fname, $mname, $lname, $currentphone, $currentimage);

                                    
                                }else{
                                    //validate contact exit

                                    $PhoneExist = $User->PhoneExist($contact);

                                    if($PhoneExist){
                                        
                                        echo "error -> phone already taken";
                                    }else{


                                    }

                                }

                            }else{


                            }


                        }else{
                          


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

