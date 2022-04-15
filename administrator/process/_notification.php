<?php


    include_once '../../vendor/autoload.php';

    include_once '../../PHPmailersetup/mailsetup.php';

    $User = new User;

    $Validator = new Validator;

    $Notification = new Notification;

    if(isset($_POST['notification_load_token'])){

        $token = $_POST['notification_load_token'];

        $ValidateToken = $Validator->ValidateToken($token);

        if($ValidateToken==1){

            $fetchadminnotif = $Notification->FetchAdminNotif($User::USER_TYPE_ADMIN);

            if($fetchadminnotif){
                echo '<div class="bgserachtitle-notif">
                    <p><i class="fas fa-bell" id="notif_btn_open"></i> New / Un-Read Notification</p>
                </div>';

                foreach($fetchadminnotif as $displays){

                    $user_id = $displays['user_id'];

                    //get user data
                    $GetUserData = $User->GetUserData($user_id, $User::USER_TYPE_MANAGER);

                    if(!$GetUserData){

                        $GetUserData = $User->GetUserData($user_id, $User::USER_TYPE_TRAVELER);
                    }
                    if($displays['read_at']==''){
                        echo ' <a href="view/view-notification?notif_id='.$displays['id'].'" class="loop_link_mess">
                        <div class="mess_loop">
                            <div class="_cont">
                                <div class="circular--landscape--mess">
                                    <img id="vievimage" src="../images/users/'.$GetUserData->image.'" alt="">
                                </div>
                                <div class="head_mess">
                                    <span id="name_heres">'.$GetUserData->email.' (unread)</span>
                                </div>
                            </div>
                            <div class="_cont">
                                    <span id="notifmessage_mess"><i class="fas fa-circle"></i>

                                    '.$displays['message'].'</span>
                            </div>
                            </div>
                        </a>';
                    }else{
                        echo ' <a href="view/view-notification?notif_id='.$displays['id'].'" class="loop_link_mess">
                        <div class="mess_loop">
                            <div class="_cont">
                                <div class="circular--landscape--mess">
                                    <img id="vievimage" src="../images/users/'.$GetUserData->image.'" alt="">
                                </div>
                                <div class="head_mess">
                                    <span id="name_heres">'.$GetUserData->email.'</span>
                                </div>
                            </div>
                            <div class="_cont">
                                    <span id="notifmessage_mess">

                                    '.$displays['message'].'</span>
                                </div>
                            </div>
                        </a>';
                    }
                    
                }
                
            }

        }
    }
