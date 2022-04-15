<?php
include_once '../../vendor/autoload.php';

$User = new User;

$Validator = new Validator;

$Payment = new Payment;

$Gcash = new Gcash;

$Notification = new Notification;

$protocollinks = $Notification->ProtocolAndLinks();

$GetPricing = $Gcash->GetPricing();

$account_pricing = $GetPricing->account_pricing;

if(isset($_POST['token_register_manager'])){

    date_default_timezone_set('Asia/Manila');

    $date = date("Y-m-d");

    $file1 = $_FILES['profile_image'];

    $file2 = $_FILES['pop'];

    $first_name = $_POST['first_name'];

    $middle_name = $_POST['middle_name'];

    $last_name = $_POST['last_name'];

    $email = $_POST['email'];

    $phone = $_POST['phone'];

    $password = $_POST['password'];

    $manager_type = $_POST['manager_type'];
    
    $token_register_manager = $_POST['token_register_manager'];

    if($Validator->ValidateToken($token_register_manager)){
        //validate images
        $validateimage = $Validator->ValidateImage($file1);

        if($Validator->ValidateImage($file1)==='emp'){

            echo "EMPPROFILE";

        }elseif($Validator->ValidateImage($file1)==='fileexterror'){

            echo "FNAPROFILE";
        }
        elseif($Validator->ValidateImage($file1)==='fileeror'){

            echo "FEPROFILE";

        }elseif($Validator->ValidateImage($file1)==='fileoversize'){

            echo "FOSPROFILE";

        }else{

            $validateimage = $Validator->ValidateImage($file2);

            if($Validator->ValidateImage($file2)==='emp'){

                echo "EMPPOP";

            }elseif($Validator->ValidateImage($file2)==='fileexterror'){

                echo "FNAPOP";
            }
            elseif($Validator->ValidateImage($file2)==='fileeror'){

                echo "FEPOP";

            }elseif($Validator->ValidateImage($file2)==='fileoversize'){

                echo "FOSPOP";

            }else{

                $Fields = $Validator->ValidateFields($first_name, $middle_name, $last_name, $email, $phone, $password, $manager_type);

                if($Fields){

                    $valphone = $Validator->ValidateContact($phone);

                    if($valphone==1){

                        $valemail = $Validator->ValidateEmail($email);

                        if($valemail==$email){

                            $valpassword = $Validator->ValidatePassword($password);

                            if($valpassword==$password){

                                $hashpassword = $User->dcrypt($password);

                                //here validate type of manager
                                $valtypemanage = $Validator->ManagerTypeValidator($manager_type);

                                if($valtypemanage==1){

                                    $valemailexist = $User->EmailExist($email);

                                    if($valemailexist<1){

                                        $valephoneexist = $User->PhoneExist($phone);
                                        
                                        if($valephoneexist<1){

                                            $insert = $User->Create($User::USER_TYPE_MANAGER, $first_name, $middle_name, $last_name, $email, $phone, $hashpassword, $file1, $manager_type);
                                            
                                            if($insert==1){

                                                $GetUserID = $User->GetUserID($email);

                                                if($GetUserID){

                                                    $newid = $GetUserID->id;

                                                    $insertpop = $Payment->ManagerPOP($newid, $file2, $User::ACCOUNT_PAYMENT, $date, $User::STATUS_PENDING, $account_pricing);
                                                    
                                                    if($insertpop==1){

                                                        //notif
                                                        $link = $protocollinks.'/administrator/view/view-notification';

                                                        $insertnotif = $Notification->Insert($newid, '', $User::USER_TYPE_ADMIN, $link, "Created New Manager Account!");
                                                        
                                                        if($insertnotif==1){

                                                            echo "success";

                                                        }

                                                    }else{

                                                        echo "error2";

                                                    }
                                                }
                                               
                                            }else{

                                                echo "error1";
                                            }
                                        }else{

                                            echo "phoneexist";
                                        }
                                    }else{

                                        echo "emailexist";
                                    }
                                }else{

                                    echo "typemanagernotexit";
                                }
                            }else{

                               echo "invalidpassword";
                            }
                        }else{

                            echo "invalidemail";
                        }
                    }else{

                        echo "invalidphone";
                    }
                }else{

                    echo "emptyfields";
                }
            }
        }
    }else{

        echo "invalidtoken";
    }
}
elseif(isset($_POST['token_register_traveler'])){

    $file1 = $_FILES['profile_image'];

    $first_name = $_POST['first_name'];

    $middle_name = $_POST['middle_name'];

    $last_name = $_POST['last_name'];

    $email = $_POST['email'];
    
    $phone = $_POST['phone'];

    $password = $_POST['password'];

    $manager_type = '';

    $token_register_traveler = $_POST['token_register_traveler'];

    if($Validator->ValidateToken($token_register_traveler)){

        $validateimage = $Validator->ValidateImage($file1);

        if($Validator->ValidateImage($file1)==='emp'){

            echo "EMPPROFILE";

        }elseif($Validator->ValidateImage($file1)==='fileexterror'){

            echo "FNAPROFILE";
        }
        elseif($Validator->ValidateImage($file1)==='fileeror'){

            echo "FEPROFILE";

        }elseif($Validator->ValidateImage($file1)==='fileoversize'){

            echo "FOSPROFILE";

        }else{

            $Fields = $Validator->ValidateFields($first_name, $middle_name, $last_name, $email, $phone, $password);

            if($Fields){

                $valphone = $Validator->ValidateContact($phone);

                if($valphone==1){

                    $valemail = $Validator->ValidateEmail($email);

                    if($valemail==$email){

                        $valpassword = $Validator->ValidatePassword($password);

                        if($valpassword==$password){

                            $hashpassword = $User->dcrypt($password);

                            $valemailexist = $User->EmailExist($email);

                            if($valemailexist<1){

                                $valephoneexist = $User->PhoneExist($phone);

                                if($valephoneexist<1){

                                    $insert = $User->Create($User::USER_TYPE_TRAVELER, $first_name, $middle_name, $last_name, $email, $phone, $hashpassword, $file1, $manager_type);
                                    
                                    if($insert==1){

                                        $GetUserID = $User->GetUserID($email);

                                        if($GetUserID){

                                            $newid = $GetUserID->id;

                                            //notif

                                            $link = $protocollinks.'/administrator/view/view-notification';

                                            $insertnotif = $Notification->Insert($newid, '', $User::USER_TYPE_ADMIN, $link, "Created New Traveler Account!");
                                                            
                                            if($insertnotif==1){

                                                echo "success";

                                            }
                                        }

                                    }else{

                                        echo "error1";
                                    }
                                }else{

                                    echo "phoneexist";
                                }
                                
                            }else{

                                echo "emailexist";
                            }
                        }else{

                            echo "invalidpassword";
                         }
                    }else{

                        echo "invalidemail";
                    }
                }else{

                    echo "invalidphone";
                }
            }else{

                echo "emptyfields";
            }
        }
    }else{
        
        echo "invalidtoken";
    }
}