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

    $email = $_SESSION['manager'];

    $GetUserID = $User->GetUserID($email);

    $iduser = $GetUserID->id;

    $check = $User->GetBusinessManager($iduser);

    $businessid = $check->id;

    if(isset($_POST['seachinside'])){

        $searchdata = $_POST['searchglobals'];

        $token = $_POST['search_global_token'];

        $tokenValidate = $Validator->ValidateToken($token);

        if($tokenValidate==1){

            $SearchTraveler = $User->SearchUser($searchdata, $User::USER_TYPE_TRAVELER);
            
            if($SearchTraveler){

                echo '<div class="bgserachtitle">

                    <p>Traveler Account</p>

                </div>';

                foreach($SearchTraveler as $displays){

                    echo '<a href='.$protocollinks.'/manager/view/traveler-data?traveler_id='.$displays['id'].'>'.$displays['first_name'].' '.$displays['last_name'].'</a>';
                
                }

                echo "</br>";

            }
            $SearchSERVICES = $Service->SearchSERVICES($searchdata, $businessid);
            
            if($SearchSERVICES){

                echo '<div class="bgserachtitle">

                    <p>Service</p>

                </div>';

                foreach($SearchSERVICES as $displays){

                    echo '<a href='.$protocollinks.'/manager/view/service-data?service_id='.$displays['id'].'>'.$displays['name'].'</a>';
                
                }

                echo "</br>";

            }
            $SearchPACKAGE = $Promotion->SearchPACKAGE($searchdata, '');
            
            if($SearchPACKAGE){

                echo '<div class="bgserachtitle">

                    <p>Ads Package Offer</p>

                </div>';

                foreach($SearchPACKAGE as $displays){

                    echo '<a href='.$protocollinks.'/manager/view/promotion-ads-data?promo_id='.$displays['id'].'>'.$displays['name'].'</a>';
                
                }

                echo "</br>";

            }
            $SearchSERVICESMANAGER = $Reservation->SearchSERVICESMANAGER($searchdata, $businessid);
            
            if($SearchSERVICESMANAGER){

                echo '<div class="bgserachtitle">

                    <p>Reservation</p>

                </div>';

                foreach($SearchSERVICESMANAGER as $displays){

                    echo '<a href='.$protocollinks.'/manager/view/reservation-data?rs_id='.$displays['id'].'>'.$displays['reserved_at'].'</a>';
                
                }

                echo "</br>";

            }
            $SearchMYADS = $Promotion->SearchMYADS($searchdata, $iduser);
            
            if($SearchMYADS){

                echo '<div class="bgserachtitle">

                    <p>My Ads</p>

                </div>';

                foreach($SearchMYADS as $displays){

                    echo '<a href='.$protocollinks.'/manager/view/view-advertisement?ads_id='.$displays['id'].'>'.date("Y-m-d", strtotime($displays['schedule_at'])).'</a>';
                
                }

                echo "</br>";

            }
        }
    }