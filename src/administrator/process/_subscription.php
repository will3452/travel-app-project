<?php
    include_once '../../../vendor/autoload.php';

    $User = new User;

    $Validator = new Validator;

    $Payment = new Payment;

    $Promotion = new Promotion;

    $Notification = new Notification;

    $protocollinks = $Notification->ProtocolAndLinks();

    if(isset($_POST['token_accept_acceptadssubs'])){

        $token = $_POST['token_accept_acceptadssubs'];

        $adssub_id = $_POST['adssub_id'];

        $ValidateToken = $Validator->ValidateToken($token);

        if($ValidateToken==1){

            $ValidateFields = $Validator->ValidateFields($adssub_id, $token);

            if($ValidateFields==1){

                //get data of ads
                $dataads = $User->GetAdsData($adssub_id);

                $manageid = $dataads->manager_id;

                $popnewname = $dataads->pop;

                $promo_id = $dataads->package_id;

                $UpdateAdsSubs = $User->UpdateAdsSubs($adssub_id, $User::STATUS_ONGOING);

                if($UpdateAdsSubs==1){

                    $ValPromo = $Promotion->GetPromoData($promo_id);
                    
                    if($ValPromo){

                        $priceads = $ValPromo->price;

                        $promoname = $ValPromo->name;

                        $InsertPOP = $Payment->InsertPOP($popnewname, $manageid, $adssub_id, $User::PROMOTION_PAYMENT, $User::STATUS_DONE, $priceads);
                   
                        if($InsertPOP==1){
                            
                            $link = $protocollinks.'/src/manager/view/view-notification';

                            $insertnotif = $Notification->Insert($manageid, $User::USER_TYPE_MANAGER, $link, "Accept your avail advertisement!". " ". $promoname);
                                                        
                            if($insertnotif==1){

                                echo "success";

                            }

                        }
                    }
                }

            }else{
                
                echo "emp";
            }
        }else{

            echo "tokenerror";
        }
    }
    elseif(isset($_POST['token_accept_doneadssubs'])){

        $token = $_POST['token_accept_doneadssubs'];

        $adssub_iddone = $_POST['adssub_iddone'];

        $ValidateToken = $Validator->ValidateToken($token);

        if($ValidateToken==1){

            $ValidateFields = $Validator->ValidateFields($adssub_iddone, $token);

            if($ValidateFields==1){

                //get data of ads
                $dataads = $User->GetAdsData($adssub_iddone);

                $manageid = $dataads->manager_id;

                $promo_id = $dataads->package_id;

                $UpdateAdsSubs = $User->UpdateAdsSubs($adssub_iddone, $User::STATUS_DONE);

                if($UpdateAdsSubs==1){

                    $ValPromo = $Promotion->GetPromoData($promo_id);
                    
                    if($ValPromo){

                        $promoname = $ValPromo->name;

                        $link = $protocollinks.'/src/manager/view/view-notification';

                        $insertnotif = $Notification->Insert($manageid, $User::USER_TYPE_MANAGER, $link, "Your avail advertisement!". " ". $promoname. " has been expired!");
                                                        
                        if($insertnotif==1){

                            echo "success";

                        }

                    }
                }

            }else{
                
                echo "emp";
            }
        }else{

            echo "tokenerror";
        }
    }
    elseif(isset($_POST['token_accept_deleteadssubs'])){

        $token = $_POST['token_accept_deleteadssubs'];

        $adssub_iddelete = $_POST['adssub_iddelete'];

        $ValidateToken = $Validator->ValidateToken($token);

        if($ValidateToken==1){

            $ValidateFields = $Validator->ValidateFields($adssub_iddelete, $token);

            if($ValidateFields==1){

                //get data of ads
                $dataads = $User->GetAdsData($adssub_iddelete);

                $manageid = $dataads->manager_id;
                
                $status = $dataads->status;

                $promo_id = $dataads->package_id;

                    $ValPromo = $Promotion->GetPromoData($promo_id);
                    
                    if($ValPromo){

                        $promoname = $ValPromo->name;

                        if($status==$User::STATUS_DONE){
                            //will not send notif
                            $DeleteManagerPOPAds = $Payment->DeleteManagerPOPAds($manageid, $adssub_iddelete);

                            if($DeleteManagerPOPAds==1){

                                $DeleteAdsSubs = $User->DeleteAdsSubs($adssub_iddelete);

                                if($DeleteAdsSubs==1){
                                    
                                    echo "success";
                                    
                                }
                            }
                            
                        }
                        elseif($status==$User::STATUS_ONGOING){
                            //will not send notif
                            $DeleteManagerPOPAds = $Payment->DeleteManagerPOPAds($manageid, $adssub_iddelete);

                            if($DeleteManagerPOPAds==1){

                                $DeleteAdsSubs = $User->DeleteAdsSubs($adssub_iddelete);

                                if($DeleteAdsSubs==1){
                                    
                                    $link = $protocollinks.'/src/manager/view/view-notification';

                                    $insertnotif = $Notification->Insert($manageid, $User::USER_TYPE_MANAGER, $link, "Your avail advertisement!". " ". $promoname. " is Deleted!");
                                                                
                                    if($insertnotif==1){
            
                                        echo "success";
            
                                    }
                                    
                                }
                            }
                            
                        }
                        else{
                            //will send notiff
                                $DeleteAdsSubs = $User->DeleteAdsSubs($adssub_iddelete);
        
                                if($DeleteAdsSubs==1){

                                    $link = $protocollinks.'/src/manager/view/view-notification';

                                    $insertnotif = $Notification->Insert($manageid, $User::USER_TYPE_MANAGER, $link, "Your avail advertisement!". " ". $promoname. " is rejected!");
                                                                
                                    if($insertnotif==1){
            
                                        echo "success";
            
                                    }
            
                                    
                                }
                        }
                    }

               

            }else{
                
                echo "emp";
            }
        }else{

            echo "tokenerror";
        }
    }