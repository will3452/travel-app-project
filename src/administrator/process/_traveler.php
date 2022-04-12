<?php
    include_once '../../../vendor/autoload.php';

    $User = new User;

    $Validator = new Validator;

    
    $Notification = new Notification;

    if(isset($_POST['token_Bantemp_manager'])){

        $token_Bantemp_manager = $_POST['token_Bantemp_manager'];

        $id_get = $_POST['id_get'];

        $ValidateToken = $Validator->ValidateToken($token_Bantemp_manager);
        
        if($ValidateToken==1){

            $ValidateFields = $Validator->ValidateFields($id_get, $token_Bantemp_manager);

            if($ValidateFields==1){

                $BanAccount = $User->BanAndUnbanAccount($id_get, $User::BLOCK_STATUS_TEMPORARY);

                if($BanAccount==1){

                    $insertnotif = $Notification->Insert($id_get, $User::USER_TYPE_TRAVELER, "Your Account had been temporary Ban");
                                                        
                    if($insertnotif==1){

                        echo "success";

                    }
                }else{

                    echo "error";
                }

            }else{

                echo "empty";
            }
        }else{

            echo "invalidtoken";
        }
    }
     //banperm
     elseif(isset($_POST['token_Panperm_manager'])){

        $token_Panperm_manager = $_POST['token_Panperm_manager'];

        $id_get_2 = $_POST['id_get_2'];

        $ValidateToken = $Validator->ValidateToken($token_Panperm_manager);

        if($ValidateToken==1){

            $ValidateFields = $Validator->ValidateFields($id_get_2, $token_Panperm_manager);

            if($ValidateFields==1){

                $BanAccount = $User->BanAndUnbanAccount($id_get_2, $User::BLOCK_STATUS_PERMANENTLY);

                if($BanAccount==1){

                    echo "success";

                }else{

                    echo "error";
                }
            }else{

                echo "empty";
            }
        }else{

            echo "invalidtoken";
        }
    }
      //unban
      elseif(isset($_POST['token_Unbantemp_manager'])){

        $token_Unbantemp_manager = $_POST['token_Unbantemp_manager'];
        
        $id_get_un = $_POST['id_get_un'];

        $ValidateToken = $Validator->ValidateToken($token_Unbantemp_manager);

        if($ValidateToken==1){

            $ValidateFields = $Validator->ValidateFields($id_get_un, $token_Unbantemp_manager);

            if($ValidateFields==1){

                $BanAccount = $User->BanAndUnbanAccount($id_get_un, $User::BLOCK_STATUS_UNBAN);

                if($BanAccount==1){

                    $insertnotif = $Notification->Insert($id_get_un, $User::USER_TYPE_TRAVELER, "Your Account Has been Activated");
                                                        
                    if($insertnotif==1){

                        echo "success";

                    }
                }else{

                    echo "error";
                }
            }else{

                echo "empty";
            }
        }else{
            echo "invalidtoken";
        }
    }