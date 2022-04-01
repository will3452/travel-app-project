<?php


class User extends Connection
{
    const USER_TYPE_ADMIN = "administrator";
    const USER_TYPE_TRAVELLER = "traveller";
    const USER_TYPE_MANAGER = "manager";
    const STATUS = "active";
    const PENDING = "pending";

    public function Create($type, $first_name, $middle_name, $last_name, $email, $phone, $password, $file,  $manage_type){ // create acc
        $con = $this->con();
        $fname = $this->first_name=$first_name;
        $mname = $this->middle_name=$middle_name;
        $lname = $this->last_name=$last_name;
        $email = $this->email=$email;
        $phone = $this->phone=$phone;
        $manage_type = $this->manage_type=$manage_type;
        $password = $this->password=$password;

        $fileimages = $this->file=$file;
        $filename = $this->file=$file['name'];
        $filetmp =  $this->file=$file['tmp_name'];

        $fileext = explode('.', $filename);
        $fileactex = strtolower(end($fileext));

        $uniq = uniqid('',true);
        $date = date("ymdhis");

        $finlenamenew = "$uniq.$date.$fileactex";

        $filedesti = "../../images/users/$finlenamenew";

        if($this->type=$type==self::USER_TYPE_ADMIN){
            $stmt = $con->prepare("INSERT INTO `users`(`first_name`, `middle_name`, `last_name`, `email`
            , `phone`, `password`, `type`, `maneger_type`, `image`, `status`)
            VALUE(?, ?, ?, ?, ?, ?, ?, ?, ? ,?)");
            $true = $stmt->execute(array($fname, $mname, $lname, $email, $phone, $password, $this->type=$type, '', '', self::STATUS));
            if($true){
                return true;
            }else {
                return false;
            }
        }
        elseif($this->type=$type==self::USER_TYPE_MANAGER){
            $stmt = $con->prepare("INSERT INTO `users`(`first_name`, `middle_name`, `last_name`, `email`
            , `phone`, `password`, `type`, `maneger_type`, `image`, `status`)
            VALUE(?, ?, ?, ?, ?, ?, ?, ?, ? ,?)");
            $true = $stmt->execute(array($fname, $mname, $lname, $email, $phone, $password, $this->type=$type, $manage_type, $finlenamenew, self::PENDING));
            if($true){
                 move_uploaded_file($filetmp,$filedesti);
                return true;
            }else {
                return false;
            }
        }
        elseif($this->type=$type==self::USER_TYPE_TRAVELLER){
            return self::USER_TYPE_TRAVELLER;
        }else{
            return false;
        }
    }
    public function ManagerPOP($email, $file){
        $con = $this->con();
        $email = $this->email=$email;

        $fileimages = $this->file=$file;
        $filename = $this->file=$file['name'];
        $filetmp =  $this->file=$file['tmp_name'];

        $fileext = explode('.',$filename);
        $fileactex = strtolower(end($fileext));

        $finlenamenew = uniqid('',true).".".date("ymdhis").".".$fileactex;
        $filedesti = '../../images/pop/'.$finlenamenew;

        $stmt = $con->prepare("INSERT INTO `manager_pop`(`img`, `manager_email`)
        VALUE(?, ?)");
        $true = $stmt->execute(array($finlenamenew, $email));
        if($true){
            move_uploaded_file($filetmp,$filedesti);
            return true;
        }else {
            return false;
        }
    }
    public function dcrypt($password){ // decrypt password
        return password_hash($this->password=$password, PASSWORD_DEFAULT);
    }
    public function EmailExist($email){ //validate email exist
        $con = $this->con();
        $stmt = $con->prepare("SELECT email FROM users WHERE email=?");
        $stmt->execute(array($this->email=$email));
        $numwors = $stmt->rowCount();
        if($numwors>0){
            return false;
        }else{
            return true;
        }
    }
    public function PhoneExist($phone){ //validate phone exist
        $con = $this->con();
        $stmt = $con->prepare("SELECT phone FROM users WHERE phone=?");
        $stmt->execute(array($this->phone=$phone));
        $numwors = $stmt->rowCount();
        if($numwors>0){
            return false;
        }else{
            return true;
        }
    }
}
