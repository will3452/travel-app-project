<?php

    include_once '../../vendor/autoload.php';

    $User = new User;

    $Validator = new Validator;

    $Payment = new Payment;

    $Notification = new Notification;

    $Validator = new  Validator;

    $Promotion = new Promotion;

    $protocollinks = $Notification->ProtocolAndLinks();

    if(isset($_POST['seachinside'])){

        $searchdata = $_POST['searchglobals'];

        $token = $_POST['search_global_token'];

        $tokenValidate = $Validator->ValidateToken($token);

        if($tokenValidate==1){

            $SearchTraveler = $User->SearchUser($searchdata, $User::USER_TYPE_TRAVELER);
            
            if($SearchTraveler){

                echo '<div class="bgserachtitle">

                    <p>Traveler  Account</p>

                </div>';

                foreach($SearchTraveler as $displays){

                    echo '<a href='.$protocollinks.'/administrator/view/traveler-data?traveler_id='.$displays['id'].'>'.$displays['first_name'].' '.$displays['last_name'].'</a>';
                
                }

                echo "</br>";

            }

            $SearchManager = $User->SearchUser($searchdata, $User::USER_TYPE_MANAGER);
            
            if($SearchManager){

                echo '<div class="bgserachtitle">

                    <p>Manager  Account</p>

                </div>';

                foreach($SearchManager as $displays){

                    echo '<a href='.$protocollinks.'/administrator/view/manager-data?manager_id='.$displays['id'].'>'.$displays['first_name'].' '.$displays['last_name'].'</a>';
                
                }

                echo "</br>";

            }
            
            $SearchPOP = $Payment->SearchPOPGLOBAL($searchdata, '');
            
            if($SearchPOP){

                echo '<div class="bgserachtitle">

                    <p>Payment Result</p>

                </div>';

                foreach($SearchPOP as $displays){

                    echo '<a href='.$protocollinks.'/administrator/view/payment-data?payment_id='.$displays['id'].'>'.date("Y-m-d", strtotime($displays['date'])).' ('.$displays['type'].')</a>';
                
                }

                echo "</br>";

            }
            $SearchPACKAGE = $Promotion->SearchPACKAGE($searchdata, '');
            
            if($SearchPACKAGE){

                echo '<div class="bgserachtitle">

                    <p>Package Offer</p>

                </div>';

                foreach($SearchPACKAGE as $displays){

                    echo '<a href='.$protocollinks.'/administrator/view/package-data?pack_id='.$displays['id'].'>'.$displays['name'].'</a>';
                
                }

                echo "</br>";

            }
        }
    }