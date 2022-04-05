<?php
    include_once '../../../vendor/autoload.php';
    $User = new User;
    $Validator = new Validator;
    if(isset($_POST['token_accept_manager'])){
        $token_accept_manager = $_POST['token_accept_manager'];
        $id_get = $_POST['id_get'];
        $ValidateToken = $Validator->ValidateToken($token_accept_manager);
        if($ValidateToken==1){
            $ValidateFields = $Validator->ValidateFields($id_get, $token_accept_manager);
            if($ValidateFields==1){
                //validate id manager pending
                $ValidateUSer = $User->ValidateUSer($User::USER_TYPE_MANAGER, $User::STATUS_PENDING, $id_get);
                if($ValidateUSer>0){
                    //accept
                    $AcceptUser = $User->AcceptUser($User::USER_TYPE_MANAGER, $id_get);
                    if($AcceptUser==1){
                        echo "success";
                    }else{
                        echo "error";
                    }
                    //send mail

                    //notif
                }else{
                    echo "invaliduser";
                }
            }else{
                echo "empty";
            }
        }else{
            echo "invalidtoken";
        }
    }
    elseif(isset($_POST['token_cancel_manager'])){
        $token_cancel_manager = $_POST['token_cancel_manager'];
        $id_get_cancel = $_POST['id_get_cancel'];
        $ValidateToken = $Validator->ValidateToken($token_cancel_manager);
        if($ValidateToken==1){
            $ValidateFields = $Validator->ValidateFields($id_get_cancel, $token_cancel_manager);
            if($ValidateFields==1){
                 //validate id manager pending
                $ValidateUSer = $User->ValidateUSer($User::USER_TYPE_MANAGER, $User::STATUS_PENDING, $id_get_cancel);
                if($ValidateUSer>0){
                    //delete
                    $CancelUser = $User->CancelUser($User::USER_TYPE_MANAGER, $id_get_cancel);
                    if($CancelUser==1){
                        echo "success";
                    }else{
                        echo "error";
                    }
                    //send mail
                }else{
                    echo "invaliduser";
                }
            }else{
                echo "empty";
            }
        }else{
            echo "invalidtoken";
        }
    }
    //bantemp
    elseif(isset($_POST['token_Bantemp_manager'])){
        $token_Bantemp_manager = $_POST['token_Bantemp_manager'];
        $id_get = $_POST['id_get'];
        $ValidateToken = $Validator->ValidateToken($token_Bantemp_manager);
        if($ValidateToken==1){
            $ValidateFields = $Validator->ValidateFields($id_get, $token_Bantemp_manager);
            if($ValidateFields==1){
                $BanAccount = $User->BanAndUnbanAccount($id_get, $User::BLOCK_STATUS_TEMPORARY);
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