<?php
    include_once '../../vendor/autoload.php';

    include_once '../process/LoginStatus.php';

    date_default_timezone_set('Asia/Manila');

    $Validator = new Validator;

    $Payment = new Payment;

    $User = new User;

    $Promotion = new Promotion;

    $Gcash = new Gcash;

    $Notification = new Notification;

    $protocollinks = $Notification->ProtocolAndLinks();

    $GetPricing = $Gcash->GetPricing();

    $account_pricing = $GetPricing->account_pricing;

    $email = $_SESSION['manager'];

    $GetUserID = $User->GetUserID($email);

    $userid = $GetUserID->id;

    if(isset($_POST['token_payrenewal'])){

        $pop = $_FILES['pop'];

        $token = $_POST['token_payrenewal'];

        $date = $_POST['date'];

        if($Validator->ValidateToken($token)){

            $validateimage = $Validator->ValidateImage($pop);

            if($Validator->ValidateImage($pop)==='emp'){

                echo "EMPPOP";

            }elseif($Validator->ValidateImage($pop)==='fileexterror'){

                echo "FNAPOP";

            }
            elseif($Validator->ValidateImage($pop)==='fileeror'){
                
                echo "FEPOP";

            }elseif($Validator->ValidateImage($pop)==='fileoversize'){
                
                echo "FOSPOP";
                
            }else{

                $Fields = $Validator->ValidateFields($pop, $token, $date);

                if($Fields){

                    $ValidateDate = $Validator->ValidateDate($date);

                    if($ValidateDate==1){
                        //check if ongoing pa yong subscription
                        $check = $User->CheckManageSubsIf($userid, $User::STATUS_PENDING);

                        if($check>0){

                            echo "error -> you already have pending subscription, wait till accept!";

                        }else{

                                

                                //create subs
                                $InsertAccountSubs = $User->InsertAccountSubs($userid, $date, '', $User::STATUS_PENDING);

                                if($InsertAccountSubs){
                                    
                                    $Insert = $Payment->ManagerPOP($userid, $pop, $User::ACCOUNT_PAYMENT, $date, $User::STATUS_PENDING, $account_pricing);
                        
                                    if($Insert==1){

                                        $link = $protocollinks.'/administrator/view/view-notification';
    
                                        $insertnotif = $Notification->Insert($userid, '', $User::USER_TYPE_ADMIN, $link, "Account Renewal Payment");
                                                                    
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
                       
                    }else{

                        echo "invdate";
                    }
                }else{

                    echo "emp";
                }
            }
        }else{

            echo "tokeninvalid";
        }
    }
    elseif(isset($_POST['token_create_promo'])){
        
        $token = $_POST['token_create_promo'];
        
        $promo_id = $_POST['promo_id'];

        $date = $_POST['date'];

        $adsimage = $_FILES['image'];

        $imagepop = $_FILES['imagepop'];

        if($Validator->ValidateToken($token)){

            $validateimage = $Validator->ValidateImage($adsimage);

            if($Validator->ValidateImage($adsimage)==='emp'){

                echo "EMP";

            }elseif($Validator->ValidateImage($adsimage)==='fileexterror'){

                echo "FNA";
            }
            elseif($Validator->ValidateImage($adsimage)==='fileeror'){

                echo "FE";

            }elseif($Validator->ValidateImage($adsimage)==='fileoversize'){

                echo "FOS";

            }else{
                $validateimage = $Validator->ValidateImage($imagepop);

                if($Validator->ValidateImage($imagepop)==='emp'){

                    echo "EMP";

                }elseif($Validator->ValidateImage($imagepop)==='fileexterror'){

                    echo "FNA";

                }

                elseif($Validator->ValidateImage($imagepop)==='fileeror'){

                    echo "FE";

                }elseif($Validator->ValidateImage($imagepop)==='fileoversize'){

                    echo "FOS";

                }else{

                    $Fields = $Validator->ValidateFields($adsimage, $imagepop, $token, $date, $promo_id);
                    
                    if($Fields){

                        $ValidateDate = $Validator->ValidateDate($date);

                        if($ValidateDate==1){

                            //check if promo id exist
                            $check = $Promotion->GetPromoData($promo_id);

                            if($check){

                                $packagename = $check->name;

                                $days = $check->days;

                                $datend = date('Y-m-d', strtotime($date. + $days. 'days')); 

                                $Insert = $Payment->AdsPOP($userid, $adsimage, $imagepop, $promo_id, $date, $datend);

                                if($Insert){

                                    //here notif
                                    $link = $protocollinks.'/administrator/view/view-notification';

                                    $insertnotif = $Notification->Insert($userid, '', $User::USER_TYPE_ADMIN, $link, "Avail ".$packagename." Advertisment");
                                                                    
                                    if($insertnotif==1){
                    
                                        echo "success";
                    
                                    }
                                   
                                }else{

                                    echo "error";
                                }
                            }else{

                                echo "invid";
                            }
                                
                        }else{

                            echo "invdate";
                        }
                    }else{

                        echo "emp";
                    }
                }
            }
        }
        else{

            echo "tokeninvalid";
        }
    }

    //delete ads avail
    elseif(isset($_POST['token_cancelads_manager'])){

        $token = $_POST['token_cancelads_manager'];

        $cancelads_id_s = $_POST['cancelads_id_s'];

        if($Validator->ValidateToken($token)){

            if($Validator->ValidateFields($token, $cancelads_id_s)){

                if($Promotion->CanceleAdsSubsManager($cancelads_id_s, $User::STATUS_PENDING, $userid)){

                    //send notif

                      //here notif
                      $link = $protocollinks.'/administrator/view/view-notification';

                      $insertnotif = $Notification->Insert($userid, '', $User::USER_TYPE_ADMIN, $link, "Cancel Promo Advertisment");
                                                      
                      if($insertnotif==1){
      
                          echo "success";
      
                      }

                   
                }else{

                    echo "error -> process failed";
                }
            }else{

                echo "error -> process failed";
            }

        }else{

            echo "error -> process failed";
        }
    }
    elseif(isset($_POST['token_delete_manager_subs'])){

        $token = $_POST['token_delete_manager_subs'];

        $id_get_subs_d = $_POST['id_get_subs_d'];

        $ValidateToken = $Validator->ValidateToken($token);

        if($ValidateToken==1){

            $ValidateFields = $Validator->ValidateFields($id_get_subs_d, $token);

            if($ValidateFields==1){

                    $deletetrasn = $Payment->DeleteManagerPOPAdsaftercancelsubs($userid, 0, $User::STATUS_PENDING);

                    $DeleteSubs = $User->DeleteSubs($userid, $id_get_subs_d, $User::STATUS_PENDING);

                    if($DeleteSubs){

 //here notif
                              $link = $protocollinks.'/administrator/view/view-notification';

                                $insertnotif = $Notification->Insert($userid, '', $User::USER_TYPE_ADMIN, $link, "Cancel Pending Account Subscription!");
                                 
                                  if($insertnotif==1){

                                       echo "success";

                                   }
                    }
            }else{

                echo "error -> process error";
            }

        }else{

            echo "error -> process error";
        }
    }