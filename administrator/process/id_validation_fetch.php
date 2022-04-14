<?php
$User = new User;

$Payment = new Payment;

$Promotion = new Promotion;

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
else{

    header("location:../dashboard");
    
}
