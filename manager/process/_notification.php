<?php

    include_once '../../vendor/autoload.php';

    include_once '../process/LoginStatus.php';

    $User = new User;

    $Validator = new Validator;

    $Notification = new Notification;

    $email = $_SESSION['manager'];

    $GetUserID = $User->GetUserID($email);

    $iduser = $GetUserID->id;

    if(isset($_POST['notification_load_token'])){

        $token = $_POST['notification_load_token'];

        $ValidateToken = $Validator->ValidateToken($token);

        if($ValidateToken==1){

            $FetchNOtifUsers = $Notification->FetchNOtifUsers($User::USER_TYPE_MANAGER, $iduser);

            if($FetchNOtifUsers){

                echo '<div class="bgserachtitle-notif">
                    <p><i class="fas fa-bell" id="notif_btn_open"></i> New / Un-Read Notification</p>
                </div>
                <button id="deleteallnotif">Delete All</button>
                ';
               
                foreach($FetchNOtifUsers as $displays){

                    $user_id = $displays['user_id'];
                        
                    $GetUserData = $User->GetUserData($user_id, $User::USER_TYPE_TRAVELER);

                        if($displays['read_at']=='0000-00-00 00:00:00'){
                            if($user_id==''){

                                echo ' <a href="'.$displays['link'].'?notif_id='.$displays['id'].'" class="loop_link_mess">
                                    <div class="mess_loop">
                                    <div class="_cont">
                                        <div class="circular--landscape--mess">
                                            <p id="admin_pro">A</p>
                                        </div>
                                        <div class="head_mess">
                                            <span id="name_heres">Administrator</span>
                                        </div>
                                    </div>
                                    <div class="_cont">
                                            <span id="notifmessage_mess"><i class="fas fa-circle"></i>

                                            '.$displays['message'].'</span>
                                    </div>
                                    </div>
                                </a>';

                            }else{

                                echo ' <a href="'.$displays['link'].'?notif_id='.$displays['id'].'" class="loop_link_mess">
                                    <div class="mess_loop">
                                    <div class="_cont">
                                        <div class="circular--landscape--mess">
                                            <img id="vievimage" src="/images/users/'.$GetUserData->image.'" alt="">
                                        </div>
                                        <div class="head_mess">
                                            <span id="name_heres">'.$GetUserData->email.'</span>
                                        </div>
                                    </div>
                                    <div class="_cont">
                                            <span id="notifmessage_mess"><i class="fas fa-circle"></i>

                                            '.$displays['message'].'</span>
                                    </div>
                                    </div>
                                </a>';

                            }
                        }else{
                            if($user_id==''){

                                echo ' <a href="'.$displays['link'].'?notif_id='.$displays['id'].'" class="loop_link_mess">
                                <div class="mess_loop">
                                    <div class="_cont">
                                        <div class="circular--landscape--mess">
                                            <p id="admin_pro">A</p>
                                        </div>
                                        <div class="head_mess">
                                            <span id="name_heres">Administrator</span>
                                        </div>
                                    </div>
                                    <div class="_cont">
                                            <span id="notifmessage_mess">
    
                                            '.$displays['message'].'</span>
                                        </div>
                                    </div>
                                </a>';
                            }else{
                                echo ' <a href="'.$displays['link'].'?notif_id='.$displays['id'].'" class="loop_link_mess">
                                <div class="mess_loop">
                                    <div class="_cont">
                                        <div class="circular--landscape--mess">
                                            <img id="vievimage" src="/images/users/'.$GetUserData->image.'" alt="">
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
    
    }