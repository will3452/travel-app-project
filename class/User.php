<?php
class User extends Connection
{
    const USER_TYPE_ADMIN = "administrator";
    const USER_TYPE_TRAVELER = "traveler";
    const USER_TYPE_MANAGER = "manager";
    const STATUS_ACTIVE = "active";
    const STATUS_PENDING = "pending";
    const STATUS_HIDE = "hide";
    const STATUS_SHOW = "show";
    const STATUS_APPROVED = "approved";
    const STATUS_HISTORY = "history";
    const STATUS_ONGOING = "ongoing";
    const STATUS_DONE = "done";
    const STATUS_DROPPED = "dropped";
    const BLOCK_STATUS_TEMPORARY = "temporary";
    const BLOCK_STATUS_PERMANENTLY = "permanently";
    const BLOCK_STATUS_UNBAN = "";
    const ACCOUNT_PAYMENT = "account payment";
    const PROMOTION_PAYMENT = "promotion payment";
    public function GetConnection()
    {
        $con = $this->con();
        date_default_timezone_set('Asia/Manila');
        return $con;
    }
    public function ExtractFileData($file, $type)
    {
        $fileName = $file['name'];
        $fileTmp = $file['tmp_name'];
        $pathExt = explode('.', $fileName);
        $fileExt = end($pathExt);

        $uniq = uniqid('', true);
        $date = date("ymdhis");

        $fileNewName ="$uniq.$date.$fileExt";

        if($type=='user'){

            $fileDest = "../../images/users/$fileNewName";

            return [$fileName, $fileTmp, $fileExt, $fileDest, $fileNewName];

        }if($type=='pop'){

            $fileDest = "../../images/pop/$fileNewName";

            return [$fileName, $fileTmp, $fileExt, $fileDest, $fileNewName];

        }if($type=='logo'){

            $fileDest = "../../user/assets/logo/$fileNewName";

            return [$fileName, $fileTmp, $fileExt, $fileDest, $fileNewName];

        }if($type=='service'){

            $fileDest = "../../images/services/$fileNewName";

            return [$fileName, $fileTmp, $fileExt, $fileDest, $fileNewName];

        }if($type=='ads'){

            $fileDest = "../../images/ads/$fileNewName";

            return [$fileName, $fileTmp, $fileExt, $fileDest, $fileNewName];

        }
        return false;
    }

    public function Create($type, $first_name, $middle_name, $last_name, $email, $phone, $password, $file,  $manage_type)
    {
        $con = $this->GetConnection();

        [$fileName, $filetmp, $fileExt, $filedesti, $finlenamenew] = $this->ExtractFileData($file, 'user');

        $subcribed_at = null;

        $prepareStatement  = "INSERT INTO `users`(`first_name`, `middle_name`, `last_name`, `email`, `phone`, `password`, `type`, `maneger_type`, `subcribed_at`, `image`,`status`) VALUE(?, ?, ?, ?, ?, ?, ?, ?, ?, ? ,?)";

        if ($type == self::USER_TYPE_ADMIN) {

            $stmt = $con->prepare($prepareStatement);

            $param = [ $first_name, $middle_name, $last_name, $email, $phone, $password, $type, '', '', self::STATUS_ACTIVE];

            return $stmt->execute($param);
        }

        if ($type==self::USER_TYPE_MANAGER) {

            $stmt = $con->prepare($prepareStatement);

            $param = [$first_name, $middle_name, $last_name, $email, $phone, $password, $type, $manage_type, $subcribed_at, $finlenamenew, self::STATUS_PENDING];

            $executeResult = $stmt->execute($param);

            if ($executeResult) {
                 move_uploaded_file($filetmp, $filedesti);
                 return true;
            }

            return false;
        }

        if ($type==self::USER_TYPE_TRAVELER) {

            $date_sub = date('Y-m-d H:i:s');

            $stmt = $con->prepare($prepareStatement);

            $param = [$first_name, $middle_name, $last_name, $email, $phone, $password, $type, $manage_type, $date_sub, $finlenamenew, self::STATUS_ACTIVE];

            $executeResult = $stmt->execute($param);

            if ($executeResult) {
                 move_uploaded_file($filetmp, $filedesti);

                 return true;
            }

            return false;
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

        $stmt->execute([$email]);

        return $stmt->rowCount();
    }
    public function EmailExistASMAnager($email, $type)
    { //validate email exist
        $con = $this->GetConnection();

        $stmt = $con->prepare("SELECT email FROM users WHERE email=? && type=?");

        $stmt->execute([$email, $type]);

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
    public function GetAdminData()
    {
        $con = $this->GetConnection();

        $stmt = $con->prepare("SELECT * FROM users WHERE type=?");

        $stmt->execute([self::USER_TYPE_ADMIN]);

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

        $result = $stmt->execute([self::STATUS_ACTIVE, $date, $id, $type]);

        return $result;
    }
    public function CancelUser($type, $id)
    {
        $con = $this->GetConnection();

        $date = date('Y-m-d H:i:s');

        $stmt = $con->prepare("SELECT id, image,email, type, status FROM users WHERE id=? && type=? && status=?");

        $executeResult = $stmt->execute([$id, $type, self::STATUS_PENDING]);
        if ($executeResult) {

            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            $img =  $result['image'];

            $stmt = $con->prepare("SELECT * FROM manager_pop WHERE manager_id=?");

            $true = $stmt->execute([$id]);
            if ($true) {

                $result = $stmt->fetch(PDO::FETCH_ASSOC);

                $img2 =  $result['img'];

                $olddist2 = "../../images/pop/$img2"; //old profile

                unlink($olddist2); //deleting pass profile

                $stmt = $con->prepare("DELETE FROM `manager_pop` WHERE manager_id=?");

                $true = $stmt->execute([$id]);

                if ($true) {

                    $olddist = "../../images/users/$img"; //old profile

                    unlink($olddist); //deleting pass profile

                    $stmt = $con->prepare("DELETE FROM `users` WHERE type=? && id=?");

                    $true = $stmt->execute([$type, $id]);

                    return $true;
                }
            }
        }

        return false;
    }
    public function BanAndUnbanAccount($id, $type){

        $con = $this->GetConnection();

        $stmt = $con->prepare("SELECT id, status, block_status FROM users WHERE id=? && status=? && block_status=?");

        $executeResult = $stmt->execute([$id, self::STATUS_ACTIVE, self::BLOCK_STATUS_PERMANENTLY]);

        $numwors = $stmt->rowCount();

        if ($numwors>0) {

            return "perma";

        }
        $stmt = $con->prepare("UPDATE users SET block_status=? WHERE id=?");

        $result = $stmt->execute([$type, $id]);

        return $result;
    }
    public function GetBusinessManager($id){

        $con = $this->GetConnection();

        $stmt = $con->prepare("SELECT * FROM business WHERE manager_id=?");

        $executeResult = $stmt->execute([$id]);

        return $stmt->fetch(PDO::FETCH_OBJ);
    }
    public function InsertBusinessManager($file, $businessname, $id, $businesstype, $city, $municipality, $street, $barangay, $zip_code, $landmark){

        $con = $this->GetConnection();

        [$fileName, $filetmp, $fileExt, $filedesti, $finlenamenew] = $this->ExtractFileData($file, 'logo');

        $stmt = $con->prepare("SELECT * FROM business WHERE manager_id=?");

        $executeResult = $stmt->execute([$id]);

        $numwors = $stmt->rowCount();

        if($numwors>0){

            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            $img =  $result['logo'];

            $olddist = "../../user/assets/logo/$img"; //old logo

            unlink($olddist); 

            $prepareStatement  = "UPDATE `business` SET `name`=?, `logo`=?, `city`=?, `municipality`=?, `street`=?, `barangay`=?, `zip_code`=?, `landmark`=?, type=? WHERE manager_id=?";

            $stmt = $con->prepare($prepareStatement);

            $executeResult = $stmt->execute([$businessname, $finlenamenew, $city, $municipality, $street, $barangay, $zip_code, $landmark, $businesstype, $id]);

            if ($executeResult){

                move_uploaded_file($filetmp, $filedesti);

                return true;
                
            }
            return false;
        }
        $prepareStatement  = "INSERT INTO `business`(`name`, `type`, `manager_id`, `logo`, `city`, `municipality`, `street`, `barangay`, `zip_code`, `landmark`) 
        VALUE(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $stmt = $con->prepare($prepareStatement);

        $executeResult = $stmt->execute([$businessname, $businesstype, $id, $finlenamenew, $city, $municipality, $street, $barangay, $zip_code, $landmark]);

        if ($executeResult){

            move_uploaded_file($filetmp, $filedesti);
            
            return true;
        }
        return false;
    }
    public function GetUserData($id, $type)
    {
        $con = $this->GetConnection();

        $stmt = $con->prepare("SELECT * FROM users WHERE id=? && type=?");

        $stmt->execute([$id, $type]);

        return $stmt->fetch(PDO::FETCH_OBJ);
    }
    public function BusinessPageSort()
    {
        $con = $this->GetConnection();

        $stmt = $con->prepare("SELECT * FROM business");

        $stmt->execute();

        return $stmt->rowCount();
    }
    public function BusinessFetctSort($limit, $start, $namesort, $sortName)
    {
        $con = $this->GetConnection();

        $qs = "SELECT * FROM business ORDER by $sortName $namesort LIMIT $start, $limit";
        $stmt = $con->prepare($qs);

        $stmt->execute();

        $numwors = $stmt->rowCount();

        if ($numwors > 0) {

            while($r = $stmt->fetchAll()){

                return $r;
            }
        }
    }
    public function BusinessPageSortWithCategory($category)
    {
        $con = $this->GetConnection();

        $stmt = $con->prepare("SELECT * FROM business WHERE type LIKE ?");

        $stmt->execute(["%$category%"]);

        return $stmt->rowCount();
    }
    public function BusinessFetctSortWithCategory($limit, $start, $category, $namesort, $sortName)
    {
        $con = $this->GetConnection();

        $qs = "SELECT * FROM business WHERE type LIKE ? ORDER by $sortName $namesort LIMIT $start, $limit";
        $stmt = $con->prepare($qs);

        $stmt->execute(["%$category%"]);

        $numwors = $stmt->rowCount();

        if ($numwors > 0) {

            while($r = $stmt->fetchAll()){

                return $r;
            }
        }
    }
    
    public function BusinessPageSortWithSearch($search)
    {
        $con = $this->GetConnection();

        $stmt = $con->prepare("SELECT * FROM business WHERE name LIKE ? || city LIKE ? || municipality LIKE ?");

        $stmt->execute(["%$search%", "%$search%", "%$search%"]);

        return $stmt->rowCount();
    }
    public function BusinessFetctSortWithSearch($limit, $start, $search, $namesort, $sortName)
    {
        $con = $this->GetConnection();

        $qs = "SELECT * FROM business WHERE name LIKE ? || city LIKE ? || municipality LIKE ? ORDER by $sortName $namesort LIMIT $start, $limit";
        $stmt = $con->prepare($qs);

        $stmt->execute(["%$search%", "%$search%", "%$search%"]);

        $numwors = $stmt->rowCount();

        if ($numwors > 0) {

            while($r = $stmt->fetchAll()){

                return $r;
            }
        }
    }
    public function BusinessPageSortWithSearchAndCategory($search, $category)
    {
        $con = $this->GetConnection();

        $stmt = $con->prepare("SELECT * FROM business WHERE name LIKE ? AND type like ? || city LIKE ? AND type like ? || municipality LIKE ? AND type like ?");

        $stmt->execute(["%$search%", "%$category%", "%$search%", "%$category%", "%$search%", "%$category%"]);

        return $stmt->rowCount();
    }
    public function BusinessFetctSortWithSearchAndCategory($limit, $start, $search, $category, $namesort, $sortName)
    {
        $con = $this->GetConnection();

        $qs = "SELECT * FROM business WHERE name LIKE ? AND type like  ?  || city LIKE ? AND type like ? || municipality LIKE ? AND type like ? ORDER by $sortName $namesort LIMIT $start, $limit";
        $stmt = $con->prepare($qs);

        $stmt->execute(["%$search%", "%$category%", "%$search%", "%$category%", "%$search%", "%$category%"]);

        $numwors = $stmt->rowCount();

        if ($numwors > 0) {

            while($r = $stmt->fetchAll()){

                return $r;
            }
        }
    }
    public function GetBusinessData($id){

        $con = $this->GetConnection();

        $stmt = $con->prepare("SELECT * FROM business WHERE id=?");

        $executeResult = $stmt->execute([$id]);

        return $stmt->fetch(PDO::FETCH_OBJ);
    }
    public function InsertAccountSubs($id, $start, $expiration, $status) {

        $con = $this->GetConnection();

        date_default_timezone_set('Asia/Manila');

        $time = date("H:i:s");

        $newdatestart = $start.' '.$time;

        $newdateexpiration = $expiration.' '.$time;
        
        $prepareStatement  = "INSERT INTO `account_subscription`(`user_id`, `start`, `expiration`, `status`) VALUE(?, ?, ?, ?)";

        $param = [$id, $newdatestart, $newdateexpiration, $status];

        $stmt = $con->prepare($prepareStatement);

        $executeResult = $stmt->execute($param);

        if ($executeResult) {

             return true;
        }

        return false;

    }
    public function SubsPageSort()
    {
        $con = $this->GetConnection();

        $stmt = $con->prepare("SELECT * FROM account_subscription");

        $stmt->execute();

        return $stmt->rowCount();
    }

    public function SubsFetctSort($limit, $start, $namesort, $sortName)
    {
        $con = $this->GetConnection();

        $qs = "SELECT * FROM account_subscription ORDER by $sortName $namesort LIMIT $start, $limit";
        $stmt = $con->prepare($qs);

        $stmt->execute();

        $numwors = $stmt->rowCount();

        if ($numwors > 0) {

            while($r = $stmt->fetchAll()){
                
                return $r;

            }
        }
    }
    public function SubsSearchFetchSort($limit, $start, $namesort, $sortName, $search)
    {
        $con = $this->GetConnection();

        $stmt = $con->prepare("SELECT * FROM account_subscription WHERE
        start LIKE ? ||
        expiration LIKE ? ||
        status LIKE ?
        ORDER by $sortName $namesort LIMIT $start, $limit");

        $stmt->execute(["%$search%", "%$search%", "%$search%"]);

        $numwors = $stmt->rowCount();

        if ($numwors > 0) {

            while($r = $stmt->fetchAll()){

                return $r;

            }
        }
    }
    public function SubsSearchPageSort($search)
    {
        $con = $this->GetConnection();

        $stmt = $con->prepare("SELECT * FROM account_subscription WHERE
        start LIKE ? ||
        expiration LIKE ? ||
        status LIKE ? ");

        $stmt->execute(["%$search%", "%$search%", "%$search%"]);

        return $stmt->rowCount();
    }
    public function GetAccSubsData($id)
    {
        $con = $this->GetConnection();

        $stmt = $con->prepare("SELECT * FROM account_subscription WHERE user_id=?");

        $stmt->execute([$id]);

        return $stmt->fetch(PDO::FETCH_OBJ);
    }
    public function CheckManageSubsIf($id, $status)
    {
        $con = $this->GetConnection();

        $stmt = $con->prepare("SELECT * FROM account_subscription WHERE user_id=? && status=?");

        $stmt->execute([$id, $status]);

        return $stmt->rowCount();
    }
    public function CheckManagerIfExpInLogin($id, $status, $datein, $dateout){

        $con = $this->GetConnection();

        $stmt = $con->prepare("SELECT * FROM account_subscription WHERE
        user_id=? && start<=? && expiration>=? && status=?");

        $stmt->execute([$id, $datein, $dateout, $status]);

        return $stmt->rowCount();

    }
    public function GetAccSubsDataUsingId($id)
    {
        $con = $this->GetConnection();

        $stmt = $con->prepare("SELECT * FROM account_subscription WHERE id=?");

        $stmt->execute([$id]);

        return $stmt->fetch(PDO::FETCH_OBJ);
    }
    public function UpdateSubs($id, $status, $start, $end)
    {
        $con = $this->GetConnection();

        $stmt = $con->prepare("UPDATE account_subscription SET status=?, start=?, expiration=? WHERE id=?");

        $result = $stmt->execute([$status, $start, $end, $id]);

        return $result;
    }
    public function DeleteSubs($manageid, $id, $status)
    {
        $con = $this->GetConnection();

        $stmt = $con->prepare("DELETE FROM `account_subscription` WHERE user_id=? && id=? && status=?");

        $true = $stmt->execute([$manageid, $id, $status]);

        if ($true) {

            return true;
        }

        return false;
    }
    public function AdsSubsPageSort()
    {
        $con = $this->GetConnection();

        $stmt = $con->prepare("SELECT * FROM advertisement");

        $stmt->execute();

        return $stmt->rowCount();
    }

    public function AdsSubsFetctSort($limit, $start, $namesort, $sortName)
    {
        $con = $this->GetConnection();

        $qs = "SELECT * FROM advertisement ORDER by $sortName $namesort LIMIT $start, $limit";
        $stmt = $con->prepare($qs);

        $stmt->execute();

        $numwors = $stmt->rowCount();

        if ($numwors > 0) {

            while($r = $stmt->fetchAll()){
                
                return $r;

            }
        }
    }
    public function AdsSubsSearchFetchSort($limit, $start, $namesort, $sortName, $search)
    {
        $con = $this->GetConnection();

        $stmt = $con->prepare("SELECT * FROM advertisement WHERE
        schedule_at LIKE ? ||  status LIKE ?
        ORDER by $sortName $namesort LIMIT $start, $limit");

        $stmt->execute(["%$search%", "%$search%"]);

        $numwors = $stmt->rowCount();

        if ($numwors > 0) {

            while($r = $stmt->fetchAll()){

                return $r;

            }
        }
    }
    public function AdsSubsSearchPageSort($search)
    {
        $con = $this->GetConnection();

        $stmt = $con->prepare("SELECT * FROM advertisement WHERE
        schedule_at LIKE ? ||  status LIKE ?");

        $stmt->execute(["%$search%", "%$search%"]);

        return $stmt->rowCount();
    }
    public function GetAdsData($id)
    {
        $con = $this->GetConnection();

        $stmt = $con->prepare("SELECT * FROM advertisement WHERE id=?");

        $stmt->execute([$id]);

        return $stmt->fetch(PDO::FETCH_OBJ);
    }
    public function UpdateAdsSubs($id, $status)
    {
        $con = $this->GetConnection();

        $stmt = $con->prepare("UPDATE advertisement SET status=? WHERE id=?");

        $result = $stmt->execute([$status, $id]);

        return $result;
    }
    public function TotalPendingAds($status)
    {
        $con = $this->GetConnection();

        $stmt = $con->prepare("SELECT * FROM advertisement WHERE status=?");

        $stmt->execute([$status]);

        return $stmt->rowCount();
    }
    public function DeleteAdsSubs($id){

        $con = $this->GetConnection();

        $stmt = $con->prepare("DELETE FROM `advertisement` WHERE id=?");

        $true = $stmt->execute([$id]);

        if ($true) {

            return true;
        }

        return false;
    }

    public function UpdateProfile($id, $type, $file, $fname, $mname, $lname, $phone, $password)
    {
        $con = $this->GetConnection();

        $result = $this->GetUserData($id, $type);

        if($result){

            $img =  $result->image;

            if(empty($file['name'])){

                $stmt = $con->prepare("UPDATE users SET first_name=?, middle_name=?, last_name=?, phone=?, password=? WHERE id=? && type=?");
    
                $result = $stmt->execute([$fname, $mname, $lname, $phone, $password, $id, $type]);
        
                return $result;
    
            }

            $olddist = "../../images/users/$img"; //old profile

            unlink($olddist);

            [$fileName, $filetmp, $fileExt, $filedesti, $finlenamenew] = $this->ExtractFileData($file, 'user');

            $stmt = $con->prepare("UPDATE users SET first_name=?, middle_name=?, last_name=?, phone=?, image=?, password=? WHERE id=? && type=?");
    
            $result = $stmt->execute([$fname, $mname, $lname, $phone, $finlenamenew, $password, $id, $type]);
    
            if ($result) {

                move_uploaded_file($filetmp, $filedesti);

                return true;
            }


        }
        return false;
    }
    public function CheckIfForgotEmailExist($email){

        $con = $this->GetConnection();

        $stmt = $con->prepare("SELECT * FROM passwordrecovery WHERE email=?");

        $executeResult = $stmt->execute([$email]);

        return $stmt->rowCount();
    }
    public function CheckIfForgotCodeConfirm($email, $code){

        $con = $this->GetConnection();

        $stmt = $con->prepare("SELECT * FROM passwordrecovery WHERE email=? && code=?");

        $executeResult = $stmt->execute([$email, $code]);

        return $stmt->rowCount();
    }
    public function InsertUpdateEmailForgot($email, $code){

        $con = $this->GetConnection();

        $check = $this->CheckIfForgotEmailExist($email);

        if($check){

            $stmt = $con->prepare("UPDATE passwordrecovery SET code=? WHERE email=?");
    
            $result = $stmt->execute([$code, $email]);
    
            if ($result) {

                return true;
            }
            
        }
            $stmt = $con->prepare("INSERT INTO passwordrecovery (`email`, `code`) VALUES(?, ?)");
    
            $result = $stmt->execute([$email, $code]);
    
            if ($result) {

                return true;
            }

    }
    public function ChangePasswordForgot($password){

        session_start();

        $con = $this->GetConnection();

        $email = $_SESSION['changepassword'];

        $stmt = $con->prepare("UPDATE users SET password=? WHERE email=?");
    
        $result = $stmt->execute([$password, $email]);

        if ($result) {

            return true;
        }
        return false;
    }
    public function deleteforgotpassword(){

        $con = $this->GetConnection();

        $email = $_SESSION['changepassword'];

        $stmt = $con->prepare("DELETE FROM `passwordrecovery` WHERE email=?");

        $true = $stmt->execute(array($email));

        if($true){

            return true;

        }
        return false;
    }
    public function BusinessFetctSortInLandingPage()
    {
        $con = $this->GetConnection();

        $qs = "SELECT * FROM business";
        $stmt = $con->prepare($qs);

        $stmt->execute();

        $numwors = $stmt->rowCount();

        if ($numwors > 0) {

            while($r = $stmt->fetchAll()){

                return $r;
            }
        }
    }
    public function SubsManagerPageSort($userid)
    {
        $con = $this->GetConnection();

        $stmt = $con->prepare("SELECT * FROM account_subscription WHERE user_id=?");

        $stmt->execute([$userid]);

        return $stmt->rowCount();
    }
    public function SubsManagerFetctSort($limit, $start, $namesort, $sortName, $userid)
    {
        $con = $this->GetConnection();

        $qs = "SELECT * FROM account_subscription WHERE user_id=? ORDER by $sortName $namesort LIMIT $start, $limit";
        $stmt = $con->prepare($qs);

        $stmt->execute([$userid]);

        $numwors = $stmt->rowCount();

        if ($numwors > 0) {

            while($r = $stmt->fetchAll()){
                
                return $r;

            }
        }
    }
    public function SubsManagerSearchFetchSort($limit, $start, $namesort, $sortName, $search, $userid)
    {
        $con = $this->GetConnection();

        $stmt = $con->prepare("SELECT * FROM account_subscription WHERE
        user_id=? && start LIKE ? ||
        user_id=? && expiration LIKE ?
        ORDER by $sortName $namesort LIMIT $start, $limit");

        $stmt->execute([$userid, "%$search%", $userid, "%$search%"]);       

        $numwors = $stmt->rowCount();

        if ($numwors > 0) {

            while($r = $stmt->fetchAll()){

                return $r;

            }
        }
    }
    public function SubsManagerSearchPageSort($search, $userid)
    {
        $con = $this->GetConnection();

        $stmt = $con->prepare("SELECT * FROM account_subscription WHERE
        user_id=? && start LIKE ? ||
        user_id=? && expiration LIKE ?");

        $stmt->execute([$userid, "%$search%", $userid, "%$search%"]);

        return $stmt->rowCount();
    }
    public function SearchUser($search, $type){ 

        $con = $this->GetConnection();

        $stmt = $con->prepare("SELECT * FROM users WHERE 
        email LIKE ? && type=? 
        ||first_name LIKE ? && type=? 
        || middle_name LIKE ? && type=? 
        || last_name LIKE ? && type=?  
        ORDER by first_name ASC");

        $stmt->execute(array("%$search%", "$type", 
         "%$search%", "$type", 
         "%$search%", "$type", 
         "%$search%", "$type"
        ));

        $numwors = $stmt->rowCount();

        if($numwors>0){

            while($r = $stmt->fetchAll()){

                return $r;

            }
        }
    }
    public function SearchBUSINESS($search){ 

        $con = $this->GetConnection();

        $stmt = $con->prepare("SELECT * FROM business WHERE 
        name LIKE ?
        ORDER by name ASC");

        $stmt->execute(array("%$search%"));

        $numwors = $stmt->rowCount();

        if($numwors>0){

            while($r = $stmt->fetchAll()){

                return $r;

            }
        }
    }
}
