<?php

$Service = new Service();

$User = new User;

$Promotion = new Promotion;

$Reservation = new Reservation;

$Notification = new Notification;

$email = $_SESSION['manager'];

$GetUserID = $User->GetUserID($email);

$iduser = $GetUserID->id;

$check = $User->GetBusinessManager($iduser);

$businessid = '';

if($check){

    $businessid = $check->id;

}
if(isset($_GET['service_id'])){

    $id = $_GET['service_id'];

    $businessid;

    $data = $Service->CheckServiceExist($id, $businessid);
    
    if(!$data){

        header("location:../services");

    }
}
elseif(isset($_GET['traveler_id'])){

    $id = $_GET['traveler_id'];
    
    $data = $User->GetUserData($id, $User::USER_TYPE_TRAVELER);

    if(!$data){

        header("location:../traveler");

    }
}
elseif(isset($_GET['promo_id'])){

    $id = $_GET['promo_id'];

    $data = $Promotion->GetPromoData($id);

    if(!$data){

        header("location:../promotion");

    }
}
elseif(isset($_GET['rs_id'])){
    
    $id = $_GET['rs_id'];

    $data = $Reservation->GetBookManager($id, $businessid);

    if(!$data){

        header("location:../dashboard");

    }
}
elseif(isset($_GET['notif_id'])){

    $id =  $_GET['notif_id'];

    $datanotif2 = $Notification->GetDataNotifUsers($User::USER_TYPE_MANAGER, $id, $iduser);

    if(!$datanotif2){

        header("location:../dashboard");

    }else{

        $read_ats = $datanotif2->read_at;

        if($read_ats=='0000-00-00 00:00:00'){

           $update = $Notification->UpdateNotificationUsers(date("Y-m-d H:i:s"), $id, $User::USER_TYPE_MANAGER, $iduser);

           if($update){

                $datanotif = $Notification->GetDataNotifUsers($User::USER_TYPE_MANAGER, $id, $iduser);

           }

        }else{

            $datanotif = $Notification->GetDataNotifUsers($User::USER_TYPE_MANAGER, $id, $iduser);

        }
    }
}
else{
    header("location:../services");
}