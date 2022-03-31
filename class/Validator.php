<?php


class Validator{

    public function ValidatePassword($password){   //validate Password
        $passwordVal = $this->password=$password;
        $uppercase = preg_match('@[A-Z]@', $passwordVal);
        $lowercase = preg_match('@[a-z]@', $passwordVal);
        $number    = preg_match('@[0-9]@', $passwordVal);
        $specialChars = preg_match('@[^\W_]*[\W_]@', $passwordVal);
        if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 10){
            return false;
        }else{
            return true;
        }
    }
    public function ValidateSignUpForm($first_name, $middle_name, $last_name, $email, $phone, $password, $manager_type){
        if(empty($this->first_name=$first_name) || empty($this->middle_name=$middle_name) || empty($this->last_name=$last_name)
            || empty($this->email=$email) || empty($this->phone=$phone) || empty($this->password=$password) ||
            empty($this->manager_type=$manager_type)){
            return false;
        }else{
            return true;
        }
    }
    public function ValidateLogin($email, $password){
        if(empty($this->email=$email) || empty($this->password=$password)){
            return false;
        }else{
            return true;
        }
    }
    public function ValidateContact($phone){
        $phoneVal = $this->phone=$phone;
        if(!is_numeric($phoneVal)){
            return false;
        }else{
           return true;
        }
    }
    public function ValidateEmail($email){
        $emailVal = $this->email=$email;
        if(!filter_var($emailVal, FILTER_VALIDATE_EMAIL)){
            return false;
        }else{
           return true;
        }
    }
    public function ValidateToken($token){
        $token = $this->token=$token;
        if(empty($token)){
            return false;
        }else{
            date_default_timezone_set('Asia/Manila');
            $hashvalue = date("Y-m-d").'token-ps'; //security code
            if(password_verify($hashvalue,$token)){
                return true;
            }else{
                return false;
            }
        }
    }
    public function ValidateImage($file){
        $fileimages = $this->file=$file;
        $filename = $this->file=$file['name'];
        $filesize = $this->file=$file['size'];
        $fileerror = $this->file=$file['error'];
        $profilename = $this->file=$file['name'];
        $filetype = $this->file=$file['type'];

        $fileext = explode('.',$filename);
        $fileactex = strtolower(end($fileext));

        $allowed = array('jpg','jpeg','png'); 
        if(empty($filename)){
            return "emp";
        }else{
            if(!in_array($fileactex, $allowed)){
                return "fileexterror";
            }else{
                if(!$fileerror===0){
                    return "fileeror";
                }else{
                    if($filesize>15000000){
                        return "fileoversize";
                    }else{
                        return true;
                    }
                }
            }
        }
    }
    public function ManagerTypeValidator($manager_type){
        $manager_arr = array("Resort manager", "Bed and breakfast manager", "Rental vehicle manager", "tourist attraction manager", "Resto and cafe manager");

        if (in_array($this->manager_type=$manager_type, $manager_arr))
        {
            return true;
        }else{
            return false;
        }

    }
}