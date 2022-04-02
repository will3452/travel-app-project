<?php
class User extends Connection
{
    const USER_TYPE_ADMIN = "administrator";
    const USER_TYPE_TRAVELER = "traveler";
    const USER_TYPE_MANAGER = "manager";
    const STATUS_ACTIVE = "active";
    const STATUS_PENDING = "pending";

    public function GetConnection()
    {
        $con = $this->con();
        date_default_timezone_set('Asia/Manila');
        return $con;
    }

    public function ExtractFileData($file)
    {
        $fileName = $file['name'];
        $fileTmp = $file['tmp_name'];
        $pathExt = explode('.', $fileName);
        $fileExt = end($pathExt);

        $uniq = uniqid('', true);
        $date = date("ymdhis");

        $fileNewName ="$uniq.$date.$fileExt";

        $fileDest = "../../images/users/$fileNewName";

        return [$fileName, $fileTmp, $fileExt, $fileDest, $fileNewName];
    }

    public function Create($type, $first_name, $middle_name, $last_name, $email, $phone, $password, $file,  $manage_type)
    {
        $con = $this->GetConnection();

        [$fileName, $filetmp, $fileExt, $filedesti, $finlenamenew] = $this->ExtractFileData($file);


        $prepareStatement  = "INSERT INTO `users`(`first_name`, `middle_name`, `last_name`, `email`, `phone`, `password`, `type`, `maneger_type`, `image`,`status`) VALUE(?, ?, ?, ?, ?, ?, ?, ?, ? ,?)";

        if ($type == self::USER_TYPE_ADMIN) {

            $stmt = $con->prepare($prepareStatement);

            $param = [ $first_name, $middle_name, $last_name, $email, $phone, $password, $type, '', '', self::STATUS_ACTIVE];

            return $stmt->execute($param);
        }

        if ($type==self::USER_TYPE_MANAGER) {
            $stmt = $con->prepare($prepareStatement);

            $param = [$first_name, $middle_name, $last_name, $email, $phone, $password, $type, $manage_type, $finlenamenew, self::STATUS_PENDING];

            $executeResult = $stmt->execute($param);

            if ($executeResult) {
                 move_uploaded_file($filetmp, $filedesti);
                 return true;
            }

            return false;
        }

        return $type == self::USER_TYPE_TRAVELER ? $type : false;
    }

    public function ManagerPOP($email, $file)
    {
        $con = $this->GetConnection();

        [$fileName, $filetmp, $fileExt ,$filedesti, $finlenamenew] = $this->ExtractFileData($file);


        $stmt = $con->prepare("INSERT INTO `manager_pop`(`img`, `manager_email`) VALUE(?, ?)");

        $executeResult = $stmt->execute([$finlenamenew, $email]);

        if ($executeResult) {
            move_uploaded_file($filetmp, $filedesti);
            return true;
        }

        return false;
    }

    public function dcrypt($password)
    { // it should be Encrypt bro. decryption is the process of forming unreadable to readable, please change this, don't want to touch baka may ma break.
        return password_hash($password, PASSWORD_DEFAULT);
    }

    public function EmailExist($email)
    { //validate email exist
        $con = $this->GetConnection();

        $stmt = $con->prepare("SELECT email FROM users WHERE email=?");

        $stmt->execute(array($email));

        return $stmt->rowCount();
    }
    public function PhoneExist($phone){ //validate phone exist
        $con = $this->GetConnection();

        $stmt = $con->prepare("SELECT phone FROM users WHERE phone=?");

        $stmt->execute([$phone]);

        return $stmt->rowCount();
    }

    public function GetUserID($email)
    {
        $con = $this->GetConnection();

        $stmt = $con->prepare("SELECT * FROM users WHERE email=?");

        $stmt->execute([$email]);

        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    public function UserPageSort($type, $status)
    {
        $con = $this->GetConnection();

        $stmt = $con->prepare("SELECT * FROM users WHERE status=? && type=?");

        $stmt->execute([$status, $type]);

        return $stmt->rowCount();
    }

    public function UserFetctSort($limit, $start, $namesort, $sortName, $status, $type)
    {
        $con = $this->GetConnection();

        $qs = "SELECT * FROM users WHERE status=? && type=? ORDER by $sortName $namesort LIMIT $start, $limit";
        $stmt = $con->prepare($qs);

        $stmt->execute([$status, $type]);
        $numwors = $stmt->rowCount();
        if ($numwors > 0) {
            while($r = $stmt->fetchAll()){
                return $r;
            }
        }
    }
    public function GetPaymentManager($email)
    {
        $con = $this->GetConnection();

        $stmt = $con->prepare("SELECT * FROM manager_pop WHERE manager_email=?");

        $stmt->execute([$email]);

        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    public function UserSearchFetchSort($limit, $start, $namesort, $sortName, $search, $status, $type)
    {
        $con = $this->GetConnection();

        $stmt = $con->prepare("SELECT * FROM users WHERE
        email LIKE ? && status=? && type=? ||
        first_name LIKE ? && status=? && type=? ||
        last_name LIKE ? && status=? && type=?
        ORDER by $sortName $namesort LIMIT $start, $limit");
         $stmt->execute(["%$search%", $status, $type, "%$search%", $status, $type, "%$search%", $status, $type]);
        $numwors = $stmt->rowCount();
        if ($numwors > 0) {
            while($r = $stmt->fetchAll()){
                return $r;
            }
        }
    }
    public function UserSearchPageSort($search, $type, $status)
    {
        $con = $this->GetConnection();

        $stmt = $con->prepare("SELECT * FROM users WHERE
        email LIKE ? && status=? && type=? ||
        first_name LIKE ? && status=? && type=? ||
        last_name LIKE ? && status=? && type=?");
        $stmt->execute(["%$search%", $status, $type, "%$search%", $status, $type, "%$search%", $status, $type]);

        return $stmt->rowCount();
    }
    public function ValidateUSer($type, $status, $id){
        $con = $this->GetConnection();

        $stmt = $con->prepare("SELECT * FROM users WHERE status=? && type=? && id=?");

        $stmt->execute([$status, $type, $id]);

        return $stmt->rowCount();
    }

    public function AcceptUser($type, $id)
    {
        $con = $this->GetConnection();
        $date = date('Y-m-d H:i:s');

        $stmt = $con->prepare("UPDATE users SET status=?, subcribed_at=? WHERE id=? && type=?");

        $result = $stmt->execute(array(self::STATUS_ACTIVE, $date, $id, $type));

        return $result;
    }
    public function CancelUser($type, $id)
    {
        $con = $this->GetConnection();
        $date = date('Y-m-d H:i:s');
        $stmt = $con->prepare("SELECT id, image,email, type, status FROM users WHERE id=? && type=? && status=?");
         $executeResult = $stmt->execute(array($id, $type, self::STATUS_PENDING));
        if ($executeResult) {
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            $img =  $result['image'];
            $email =  $result['email'];

            $stmt = $con->prepare("SELECT * FROM manager_pop WHERE manager_email=?");
            $true = $stmt->execute(array($email));
            if ($true) {
                $result = $stmt->fetch(PDO::FETCH_ASSOC);
                $img2 =  $result['img'];
                $olddist2 = "../../images/pop/$img2"; //old profile
                unlink($olddist2); //deleting pass profile
                $stmt = $con->prepare("DELETE FROM `manager_pop` WHERE manager_email=?");
                $true = $stmt->execute(array($email));
                if ($true) {
                    $olddist = "../../images/users/$img"; //old profile
                    unlink($olddist); //deleting pass profile
                    $stmt = $con->prepare("DELETE FROM `users` WHERE type=? && id=?");
                    $true = $stmt->execute(array($type, $id));
                    return $true;
                }
            }
        }

        return false;
    }
}
