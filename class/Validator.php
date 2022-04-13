<?php
class Validator
{
    const VALID_MANAGER_TYPE = [
        "Resort manager",
        "Bed and breakfast manager",
        "Rental vehicle manager",
        "tourist attraction manager",
        "Resto and cafe manager",
    ];


    public function ValidatePassword($password)  //validate Password
    {
        $uppercase = preg_match('@[A-Z]@', $password);

        $lowercase = preg_match('@[a-z]@', $password);

        $number = preg_match('@[0-9]@', $password);

        $specialChars = preg_match('@[^\W_]*[\W_]@', $password);

        return $uppercase && $lowercase && $number && $specialChars && (strlen($password) > 10 );
    }

    public function ValidateFields( ...$args)
    {
        foreach ($args as $arg) {

            if (empty($arg)) {

                return false;
            }
        }
        return true;
    }

    public function ValidateLogin($email, $password)
    {
        return $this->ValidateFields($email, $password);
    }

    public function ValidateContact($phone)
    {
        return is_numeric($phone);
    }
    public function ValidateDate($date)
    {
        return date('Y-m-d', strtotime($date))==$date;
    }
    public function ValidateTime($time)
    {
        return date('H:i', strtotime($time))==$time;
    }
    public function ValidateEmail($email)
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    public function ValidateToken($token)
    {
        if ($this->ValidateFields($token)) {

            date_default_timezone_set('Asia/Manila');

            $date = date("Y-m-d");

            $hashvalue = $date."token-ps";

            return password_verify($hashvalue, $token);
        }

        return false;
    }

    public function ValidateImage($file)
    {
        $filename = $file['name'];

        $filesize = $file['size'];

        $fileerror = $file['error'];

        $fileext = explode('.', $filename);
        
        $fileactex = strtolower(end($fileext));

        $allowed = array('jpg','jpeg','png');

        if (empty($filename)) {
            return "emp";
        }

        if (! in_array($fileactex, $allowed)) {
            return "fileexterror";
        }

        if (! $fileerror === 0) {
            return "fileeror";
        }

        if ($filesize > 15000000) {
            return "fileoversize";
        }

        return true;
    }

    public function ManagerTypeValidator($manager_type)
    {
        return in_array($manager_type, self::VALID_MANAGER_TYPE);
    }
}
