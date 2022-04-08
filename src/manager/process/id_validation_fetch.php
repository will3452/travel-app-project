<?php

$Service = new Service();
$User = new User;
$Promotion = new Promotion;
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
else{
    header("location:../services");
}