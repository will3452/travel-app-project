<?php

$Service = new Service();

$User = new User;

$Reservation = new Reservation;

$email = $_SESSION['traveler'];

$GetUserID = $User->GetUserID($email);

$iduser = $GetUserID->id;

if(isset($_GET['host_id'])){
    
    $id = $_GET['host_id'];

    $data = $User->GetBusinessData($id);

    if(!$data){

        header("location:../host-list");

    }
}

elseif(isset($_GET['bucketlist_id'])){
    
    $id = $_GET['bucketlist_id'];

    $data = $Service->GetBucketlistExist($iduser, $id);

    if(!$data){

        header("location:../host-list");

    }
}
elseif(isset($_GET['host_view']) && isset($_GET['service_id'])){
    
    $service_id = $_GET['service_id'];

    $host_view = $_GET['host_view'];

    $data = $Service->CheckServiceExist($service_id, $host_view);

    if(!$data){

        header("location:../host-list");

    }
}


elseif(isset($_GET['book_id'])){
    
    $id = $_GET['book_id'];

    $data = $Reservation->GetBook($iduser, $id);

    if(!$data){

        header("location:../host-list");

    }
}
else{
    header("location:../host-list");
}