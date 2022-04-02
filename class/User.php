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
        $filename = $file['name'];
        $filetmp =  $file['tmp_name'];

        $fileext = explode('.', $filename);
        $fileactex = strtolower(end($fileext));

        $uniq = uniqid('',true);
        $date = date("ymdhis");

        $finlenamenew = "$uniq.$date.$fileactex";

        $filedesti = "../../images/users/$finlenamenew";

        if($type==self::USER_TYPE_ADMIN){
            $stmt = $con->prepare("INSERT INTO `users`(`first_name`, `middle_name`, `last_name`, `email`
            , `phone`, `password`, `type`, `maneger_type`, `image`, `status`)
            VALUE(?, ?, ?, ?, ?, ?, ?, ?, ? ,?)");
            $true = $stmt->execute(array($first_name, $middle_name, $last_name, $email, $phone, $password, $type, '', '', self::STATUS));
            if($true){
                return true;
            }else {
                return false;
            }
        }
        elseif($type==self::USER_TYPE_MANAGER){
            $stmt = $con->prepare("INSERT INTO `users`(`first_name`, `middle_name`, `last_name`, `email`
            , `phone`, `password`, `type`, `maneger_type`, `image`, `status`)
            VALUE(?, ?, ?, ?, ?, ?, ?, ?, ? ,?)");
            $true = $stmt->execute(array($first_name, $middle_name, $last_name, $email, $phone, $password, $type, $manage_type, $finlenamenew, self::PENDING));
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

        $filename = $file['name'];
        $filetmp =  $file['tmp_name'];

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
        return password_hash($password, PASSWORD_DEFAULT);
    }
    public function EmailExist($email){ //validate email exist
        $con = $this->con();
        $stmt = $con->prepare("SELECT email FROM users WHERE email=?");
        $stmt->execute(array($email));
        return $numwors = $stmt->rowCount();
    }
    public function PhoneExist($phone){ //validate phone exist
        $con = $this->con();
        $stmt = $con->prepare("SELECT phone FROM users WHERE phone=?");
        $stmt->execute(array($phone));
        return $numwors = $stmt->rowCount();
    }
    public function GetUserID($email){
        $con = $this->con();
        $stmt = $con->prepare("SELECT * FROM users WHERE email=?");
        $stmt->execute(array($email));
        return $result = $stmt->fetch(PDO::FETCH_OBJ);
    }
    public function UserPageSort($type, $status){
        $con = $this->con();
        $stmt = $con->prepare("SELECT * FROM users WHERE status=? && type=?");
        $stmt->execute(array($status, $type));
        return $stmt->rowCount();
    }
    public function UserFetctSort($limit, $start, $namesort, $nameofsorting, $status, $type){
        $con = $this->con();
        $stmt = $con->prepare("SELECT * FROM users WHERE status=? && type=? ORDER by $nameofsorting $namesort LIMIT $start, $limit");
        $stmt->execute(array($status, $type));
        $numwors = $stmt->rowCount();
        if($numwors>0){
            while($r = $stmt->fetchAll()){
                return $r;
            }
        }
    }
    public function GetPaymentManager($email){
        $con = $this->con();
        $stmt = $con->prepare("SELECT * FROM manager_pop WHERE manager_email=?");
        $stmt->execute(array($email));
        return $result = $stmt->fetch(PDO::FETCH_OBJ);
    }
    public function UserSearchFetchSort($limit, $start, $namesort, $nameofsorting, $search, $status, $type){
        $con = $this->con();
        $stmt = $con->prepare("SELECT * FROM users WHERE 
        email LIKE ? && status=? && type=? ||
        first_name LIKE ? && status=? && type=? ||
        last_name LIKE ? && status=? && type=?
        ORDER by $nameofsorting $namesort LIMIT $start, $limit");
         $stmt->execute(array("%$search%", $status, $type, "%$search%", $status, $type, "%$search%", $status, $type));
        $numwors = $stmt->rowCount();
        if($numwors>0){
            while($r = $stmt->fetchAll()){
                return $r;
            }
        }
    }
    public function UserSearchPageSort($search, $type, $status){
        $con = $this->con();
        $stmt = $con->prepare("SELECT * FROM users WHERE 
        email LIKE ? && status=? && type=? ||
        first_name LIKE ? && status=? && type=? ||
        last_name LIKE ? && status=? && type=?");
        $stmt->execute(array("%$search%", $status, $type, "%$search%", $status, $type, "%$search%", $status, $type));
        return $stmt->rowCount();
    }
    public function ValidateUSer($type, $status, $id){
        $con = $this->con();
        $stmt = $con->prepare("SELECT * FROM users WHERE status=? && type=? && id=?");
        $stmt->execute(array($status, $type, $id));
        return $numwors = $stmt->rowCount();
    }
    public function AcceptUser($type, $id){
        $con = $this->con();
        date_default_timezone_set('Asia/Manila'); 
        $date = date('Y-m-d H:i:s');
        $stmt = $con->prepare("UPDATE users SET status=?, subcribed_at=? WHERE id=? && type=?");
        $true = $stmt->execute(array(self::STATUS, $date, $id, $type));
        if($true){
            return true;
        }else {
            return false;
        }
    }
    public function CancelUser($type, $id){
        $con = $this->con();
        date_default_timezone_set('Asia/Manila'); 
        $date = date('Y-m-d H:i:s');
        $stmt = $con->prepare("SELECT id, image,email, type, status FROM users WHERE id=? && type=? && status=?");
        $true = $stmt->execute(array($id, $type, self::PENDING));
        if($true){
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            $img =  $result['image'];
            $email =  $result['email'];

            $stmt = $con->prepare("SELECT * FROM manager_pop WHERE manager_email=?");
            $true = $stmt->execute(array($email));
            if($true){
                $result = $stmt->fetch(PDO::FETCH_ASSOC);
                $img2 =  $result['img'];
                $olddist2 = '../../images/pop/'.$img2; //old profile
                unlink($olddist2); //deleting pass profile
                $stmt = $con->prepare("DELETE FROM `manager_pop` WHERE manager_email=?");
                $true = $stmt->execute(array($email));
                if($true){
                    $olddist = '../../images/users/'.$img; //old profile
                    unlink($olddist); //deleting pass profile
                    $stmt = $con->prepare("DELETE FROM `users` WHERE type=? && id=?");
                    $true = $stmt->execute(array($type, $id));
                    if($true){
                        return true;
                    }else {
                        return false;
                    }
                }else{
                    return false;
                }
            }else {
                return false;
            }
        }else {
            return false;
        }
    }
}
