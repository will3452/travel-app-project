<?php
    include_once '../../vendor/autoload.php';

    include_once '../process/LoginStatus.php';

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

                        $Insert = $Payment->ManagerPOP($userid, $pop, $User::ACCOUNT_PAYMENT, $date, $User::STATUS_PENDING, $account_pricing);
                        
                        if($Insert==1){

                            //here notif
                            $link = $protocollinks.'/administrator/view/view-notification';

                            $insertnotif = $Notification->Insert($userid, '', $User::USER_TYPE_ADMIN, $link, "Account Renewal Payment");
                                                        
                            if($insertnotif==1){
        
                                echo "success";
        
                            }
                        }else{

                            echo "error";
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