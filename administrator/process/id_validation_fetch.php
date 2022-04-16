<?php
$User = new User;

$Payment = new Payment;

$Promotion = new Promotion;

$Notification = new Notification;

if(isset($_GET['payment_id'])){

    $id =  $_GET['payment_id'];

    $paymentdata = $Payment->GetPaymentManagerData($id);

    if(!$paymentdata){

        header("location:../dashboard");
        
    }
}
elseif(isset($_GET['manager_id'])){

    $id =  $_GET['manager_id'];

    $userdata = $User->GetUserData($id, $User::USER_TYPE_MANAGER);

    if(!$userdata){

        header("location:../dashboard");

    }
}
elseif(isset($_GET['traveler_id'])){

    $id =  $_GET['traveler_id'];

    $userdata = $User->GetUserData($id, $User::USER_TYPE_TRAVELER);

    if(!$userdata){

        header("location:../dashboard");

    }
}
elseif(isset($_GET['ads_id'])){

    $id =  $_GET['ads_id'];

    $userdata = $User->GetAdsData($id);

    if(!$userdata){

        header("location:../dashboard");

    }
}
elseif(isset($_GET['pack_id'])){

    $id =  $_GET['pack_id'];

    $promodata = $Promotion->GetPromoData($id);

    if(!$promodata){

        header("location:../dashboard");

    }
}
elseif(isset($_GET['notif_id'])){

    $id =  $_GET['notif_id'];

    $datanotif2 = $Notification->GetDataNotifAdmin($User::USER_TYPE_ADMIN, $id);

    if(!$datanotif2){

        header("location:../dashboard");

    }else{

        $read_ats = $datanotif2->read_at;

        if($read_ats=='0000-00-00 00:00:00'){

           $update = $Notification->UpdateNotificationAdmin(date("Y-m-d H:i:s"), $id, $User::USER_TYPE_ADMIN);

           if($update){

                $datanotif = $Notification->GetDataNotifAdmin($User::USER_TYPE_ADMIN, $id);

           }

        }else{

            $datanotif = $Notification->GetDataNotifAdmin($User::USER_TYPE_ADMIN, $id);

        }
    }
}
else{

    header("location:../dashboard");
    
}
