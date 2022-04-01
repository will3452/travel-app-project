<?php

class Authentication extends User{
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
        }elseif(isset($_SESSION['traveller'])){
            header("location:../traveller/dashboard");
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
    public function UserLogoutAdmin(){
        unset($_SESSION['administrator']);
        return true;
    }
    public function UserLogoutManager(){
        unset($_SESSION['manager']);
        return true;
    }
    public function CheckUserForLogin($email){ //validate email exist
        $con = $this->con();
        $stmt = $con->prepare("SELECT email, subcribed_at, status FROM users WHERE email=? && subcribed_at!=? && status=?");
        $stmt->execute(array($this->email=$email, '', self::STATUS));
        $numwors = $stmt->rowCount();
        if($numwors>0){
            return true;
        }else{
            return false;
        }
    }
    public function UserLogin($email, $password, $check){
        $con = $this->con();
        $emailuser = $this->email=$email;
        $passworduser = $this->password=$password;
        $checkuser = $this->check=$check;
        $stmt = $con->prepare("SELECT * FROM users WHERE email=?");
        $stmt->execute(array($emailuser));
        $r = $stmt->fetch(PDO::FETCH_OBJ);
        $passwordhas = $r->password;
        $typeofuser = $r->type;
        if(password_verify($passworduser, $passwordhas)){
            if($checkuser=="on"){
                $name = 'travel_guide_email';
                $expireTime = 2147483647;
                $path = '/';
                $secret= base64_encode($emailuser);
                setcookie($name,$secret,$expireTime,$path);

                $name_ps = 'travel_guide_password';
                $expireTime_ps = 2147483647;
                $path_ps = '/';
                $secret_ps= base64_encode($passworduser);
                setcookie($name_ps,$secret_ps,$expireTime_ps,$path_ps);
                if($typeofuser==self::USER_TYPE_ADMIN){
                    $_SESSION['administrator'] = $emailuser;
                    return self::USER_TYPE_ADMIN;
                }elseif($typeofuser==self::USER_TYPE_TRAVELLER){
                    $_SESSION['traveller'] = $emailuser;
                    return self::USER_TYPE_TRAVELLER;
                }elseif($typeofuser==self::USER_TYPE_MANAGER){
                    $_SESSION['manager'] = $emailuser;
                    return self::USER_TYPE_MANAGER;
                }else{
                    return false;
                }
            }else{
                setcookie("travel_guide_email",null, -1, "/");
                setcookie("travel_guide_password",null, -1, "/");
                if($typeofuser==self::USER_TYPE_ADMIN){
                    $_SESSION['administrator'] = $emailuser;
                    return self::USER_TYPE_ADMIN;
                }elseif($typeofuser==self::USER_TYPE_TRAVELLER){
                    $_SESSION['traveller'] = $emailuser;
                    return self::USER_TYPE_TRAVELLER;
                }elseif($typeofuser==self::USER_TYPE_MANAGER){
                    $_SESSION['manager'] = $emailuser;
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
