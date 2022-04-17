<?php

    include_once '../../vendor/autoload.php';

    include_once '../process/LoginStatus.php';

    $User = new User;

    $Validator = new Validator;

    $email = $_SESSION['administrator'];

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

                    $GetUserData = $User->GetUserData($iduser, $User::USER_TYPE_ADMIN);

                    if($GetUserData){

                        $currentphone = $GetUserData->phone;

                        $currentpassword = $GetUserData->password;

                        if(empty($password)){

                            if($currentphone==$contact){

                                $update = $User->UpdateProfile($iduser, $User::USER_TYPE_ADMIN, '', $fname, $mname, $lname, $currentphone, $currentpassword);
                                
                                if($update){

                                    echo "success";
                                        
                                }

                            }else{

                                $PhoneExist = $User->PhoneExist($contact);

                                if($PhoneExist){

                                    echo "error -> phone already taken";

                                }else{

                                    $update = $User->UpdateProfile($iduser, $User::USER_TYPE_ADMIN, '', $fname, $mname, $lname, $contact, $currentpassword);

                                    if($update){

                                        echo "success";
                                            
                                    }

                                }
                            }

                        }else{

                            $dcps = $User->dcrypt($password);

                            $ValidatePassword = $Validator->ValidatePassword($password);

                            if($ValidatePassword){

                                if($currentphone==$contact){

                                    $update = $User->UpdateProfile($iduser, $User::USER_TYPE_ADMIN, '', $fname, $mname, $lname, $currentphone, $dcps);

                                    if($update){

                                        echo "success";
                                        
                                    }
                                }else{

                                    $PhoneExist = $User->PhoneExist($contact);

                                    if($PhoneExist){
                                    
                                        echo "error -> phone already taken";
                                    }else{

                                        $update = $User->UpdateProfile($iduser, $User::USER_TYPE_ADMIN, '', $fname, $mname, $lname, $contact, $dcps);

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
                        
                        echo "error -> process failed";

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