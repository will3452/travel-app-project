<?php
class Authentication extends User{

    public function UserLogoutAdmin(){
        unset($_SESSION['administrator']);
        return true;
    }
    public function UserLogoutManager(){
        unset($_SESSION['manager']);
        return true;
    }
    public function UserLogoutTraveler(){
        unset($_SESSION['traveler']);
        return true;
    }
    public function session(){
        session_start();
        return true;
    }

    public function UserLoginStatus( $email )
    {
        return !isset($email);
    }

    public function CheckIfLogin(){
        session_start();
        if(isset($_SESSION['administrator'])){
            header("location:../administrator/dashboard");
        }elseif(isset($_SESSION['traveler'])){
            header("location:../traveler/dashboard");
        }elseif(isset($_SESSION['manager'])){
            header("location:../manager/dashboard");
        }
    }
    public function Cookies(){
        if(isset($_COOKIE['travel_guide_email']) && isset($_COOKIE['travel_guide_password'])) {
            return true;
        }else{
            return false;
        }
    }
    public function CheckUserForLogin($email){ //validate email exist
        $con = $this->GetConnection();
        $stmt = $con->prepare("SELECT email, subcribed_at, status, block_status FROM users WHERE email=? && subcribed_at!=? && status=?");
        $stmt->execute([$email, '', self::STATUS_ACTIVE]);
        $numwors = $stmt->rowCount();
        if($numwors>0){
            $r = $stmt->fetch(PDO::FETCH_OBJ);
            $block_status = $r->block_status;
            if($block_status==self::BLOCK_STATUS_TEMPORARY){
                return 'temp';
            }
            if($block_status==self::BLOCK_STATUS_PERMANENTLY){
                return 'perm';
            }
            return true;
        }
        return false;
    }
    public function UserLogin($email, $password, $check){
        $con = $this->GetConnection();
        $stmt = $con->prepare("SELECT * FROM users WHERE email=?");
        $stmt->execute([$email]);
        $r = $stmt->fetch(PDO::FETCH_OBJ);
        $passwordhas = $r->password;
        $typeofuser = $r->type;
        if(password_verify($password, $passwordhas)){
            if($check=="on"){
                $name = 'travel_guide_email';
                $expireTime = 2147483647;
                $path = '/';
                $secret= base64_encode($email);
                setcookie($name,$secret,$expireTime,$path);

                $name_ps = 'travel_guide_password';
                $expireTime_ps = 2147483647;
                $path_ps = '/';
                $secret_ps= base64_encode($password);
                setcookie($name_ps,$secret_ps,$expireTime_ps,$path_ps);
                if($typeofuser==self::USER_TYPE_ADMIN){
                    $_SESSION['administrator'] = $email;
                    return self::USER_TYPE_ADMIN;
                }elseif($typeofuser==self::USER_TYPE_TRAVELER){
                    $_SESSION['traveler'] = $email;
                    return self::USER_TYPE_TRAVELER;
                }elseif($typeofuser==self::USER_TYPE_MANAGER){
                    $_SESSION['manager'] = $email;
                    return self::USER_TYPE_MANAGER;
                }else{
                    return false;
                }
            }else{
                setcookie("travel_guide_email",null, -1, "/");
                setcookie("travel_guide_password",null, -1, "/");
                if($typeofuser==self::USER_TYPE_ADMIN){
                    $_SESSION['administrator'] = $email;
                    return self::USER_TYPE_ADMIN;
                }elseif($typeofuser==self::USER_TYPE_TRAVELER){
                    $_SESSION['traveler'] = $email;
                    return self::USER_TYPE_TRAVELER;
                }elseif($typeofuser==self::USER_TYPE_MANAGER){
                    $_SESSION['manager'] = $email;
                    return self::USER_TYPE_MANAGER;
                }else{
                    return false;
                }
            }
        }else{
            return false;
        }
    }
}
