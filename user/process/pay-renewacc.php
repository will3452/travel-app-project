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

    if(isset($_POST['token_renew_manager'])){

        date_default_timezone_set('Asia/Manila');

        $date = date("Y-m-d");

        $file1 = $_FILES['pop'];

        $email = $_POST['email'];

        $token = $_POST['token_renew_manager'];

        if($Validator->ValidateToken($token)){

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

                $Fields = $Validator->ValidateFields($email, $file1, $token);

                if($Fields){

                    $valemail = $Validator->ValidateEmail($email);

                    if($valemail==$email){

                        $valemailexist = $User->EmailExistASMAnager($email, $User::USER_TYPE_MANAGER);

                        if($valemailexist){

                            $GetUserID = $User->GetUserID($email);

                            $managerid = $GetUserID->id;

                            $check1 = $User->CheckManagerIfExpInLogin($managerid, $User::STATUS_ONGOING, date("Y-m-d"), date("Y-m-d"));

                            if($check1>0){

                                echo 'error -> email is currently active!';

                            }else{
                                
                                $check = $User->CheckManageSubsIf($managerid, $User::STATUS_PENDING);

                                if($check>0){
        
                                    echo "error -> you already have pending subscription, wait till accept!";
        
                                }else{
                                    

                                    //create subs
                                    $InsertAccountSubs = $User->InsertAccountSubs($managerid, $date, '', $User::STATUS_PENDING);

                                    if($InsertAccountSubs){
                                        
                                        $Insert = $Payment->ManagerPOP($managerid, $file1, $User::ACCOUNT_PAYMENT, $date, $User::STATUS_PENDING, $account_pricing);

                                        if($Insert==1){

                                            $link = $protocollinks.'/administrator/view/view-notification';

                                            $insertnotif = $Notification->Insert($managerid, '', $User::USER_TYPE_ADMIN, $link, "Account Renewal Payment");
                                                                        
                                            if($insertnotif==1){

                                                echo "success";

                                            }
                                            
                                        }else{

                                            echo "error -> process failed";

                                        }

                                    }else{

                                        echo "error -> process failed";

                                    }
                                }
                            }
                           
                        }else{

                            echo 'emailexistnot';
                        }

                    }else{

                        echo "error -> invalid email type";
                    }
                }else{

                    echo "error -> empty fields";
                }
            }

        }else{

            echo "error -> process failed";
        }
    }