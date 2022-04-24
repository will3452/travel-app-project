<?php

    include_once '../../vendor/autoload.php';

    include_once '../process/LoginStatus.php';

    $User = new User;

    $Validator = new Validator;

    $Payment = new Payment;

    $Notification = new Notification;

    $Promotion = new Promotion;

    $Service = new Service;

    $Reservation = new Reservation;

    $protocollinks = $Notification->ProtocolAndLinks();

    $email = $_SESSION['traveler'];

    $GetUserID = $User->GetUserID($email);

    $iduser = $GetUserID->id;

    if(isset($_POST['seachinside'])){

        $searchdata = $_POST['searchglobals'];

        $token = $_POST['search_global_token'];

        $tokenValidate = $Validator->ValidateToken($token);

        if($tokenValidate==1){

            $SearchSERVICETRAVELER = $Reservation->SearchSERVICETRAVELER($searchdata, $iduser);
            
            if($SearchSERVICETRAVELER){

                echo '<div class="bgserachtitle">

                    <p>Reservation</p>

                </div>';

                foreach($SearchSERVICETRAVELER as $displays){

                    echo '<a href='.$protocollinks.'/traveler/view/booking-data?book_id='.$displays['id'].'>'.$displays['reserved_at'].'</a>';
                
                }

                echo "</br>";

            }

            $SearchBUSINESS = $User->SearchBUSINESS($searchdata);
            
            if($SearchBUSINESS){

                echo '<div class="bgserachtitle">

                    <p>Host</p>

                </div>';

                foreach($SearchBUSINESS as $displays){

                    $GetManagerData = $User->GetUserData($displays['manager_id'], $User::USER_TYPE_MANAGER);

                    if($GetManagerData->block_status==$User::BLOCK_STATUS_TEMPORARY || $GetManagerData->block_status==$User::BLOCK_STATUS_PERMANENTLY){

                    }else{

                        echo '<a href='.$protocollinks.'/traveler/view/host-list-data?host_id='.$displays['id'].'>'.$displays['name'].'</a>';
                    }
                }

                echo "</br>";

            }
            $SearchSERVICETRAVELER = $Reservation->SearchSERVICETRAVELER($searchdata, $iduser);
            
            if($SearchSERVICETRAVELER){

                echo '<div class="bgserachtitle">

                    <p>My Book</p>

                </div>';

                foreach($SearchSERVICETRAVELER as $displays){

                    echo '<a href='.$protocollinks.'/traveler/view/booking-data?book_id='.$displays['id'].'>'.$displays['reserved_at'].'</a>';
                
                }

                echo "</br>";

            }
            $SearchBUCKETLIST = $Service->SearchBUCKETLIST($searchdata, $iduser);
            
            if($SearchBUCKETLIST){

                echo '<div class="bgserachtitle">

                    <p>My Bucketlist</p>

                </div>';

                foreach($SearchBUCKETLIST as $displays){

                    echo '<a href='.$protocollinks.'/traveler/view/bucketlist-data?bucketlist_id='.$displays['id'].'>'.date("Y-m-d", strtotime($displays['date'])).'</a>';
                
                }

                echo "</br>";

            }
        }
    }