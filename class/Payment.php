<?php

class Payment extends User{
   
    public function ManagerPOP($id, $file, $type, $date)
    {
        $con = $this->GetConnection();

        [$fileName, $filetmp, $fileExt ,$filedesti, $finlenamenew] = $this->ExtractFileData($file, 'pop');

        date_default_timezone_set('Asia/Manila');

        $time = date("H:i:s");

        $newdate = $date.' '.$time;
        
        $stmt = $con->prepare("INSERT INTO `manager_pop`(`img`, `manager_id`, `type`, `date`) VALUE(?, ?, ?, ?)");

        $executeResult = $stmt->execute([$finlenamenew, $id, $type, $newdate]);

        if ($executeResult) {
            move_uploaded_file($filetmp, $filedesti);
            return true;
        }

        return false;
    }
    public function InsertPOP($popnewname, $userid, $type)
    {
        $con = $this->GetConnection();

        $stmt = $con->prepare("INSERT INTO `manager_pop`(`img`, `manager_id`, `type`) VALUE(?, ?, ?)");

        $executeResult = $stmt->execute([$popnewname, $userid, $type]);

        if ($executeResult) {

            return true;
        }

        return false;
    }
    public function AdsPOP($userid, $adsimage, $imagepop, $promo_id, $date)
    {
        $con = $this->GetConnection();

        [$fileName, $filetmp, $fileExt ,$filedesti, $finlenamenew] = $this->ExtractFileData($imagepop, 'pop');

        [$fileName2, $filetmp2, $fileExt2 ,$filedesti2, $finlenamenew2] = $this->ExtractFileData($adsimage, 'ads');

        $stmt = $con->prepare("INSERT INTO `advertisement`(`image`, `manager_id`, `status`, `package_id`, `pop`, `schedule_at`) VALUE(?, ?, ?, ?, ?, ?)");

        $executeResult = $stmt->execute([$finlenamenew2, $userid, 'pending', $promo_id, $finlenamenew, $date]);

        if ($executeResult) {
            move_uploaded_file($filetmp, $filedesti);
            move_uploaded_file($filetmp2, $filedesti2);
            return $finlenamenew;
        }

        return false;
    }

    public function GetPaymentManager($id)
    {
        $con = $this->GetConnection();

        $stmt = $con->prepare("SELECT * FROM manager_pop WHERE manager_id=?");

        $stmt->execute([$id]);

        return $stmt->fetch(PDO::FETCH_OBJ);
    }
    public function GetPaymentManagerData($id)
    {
        $con = $this->GetConnection();

        $stmt = $con->prepare("SELECT * FROM manager_pop WHERE id=?");

        $stmt->execute([$id]);

        return $stmt->fetch(PDO::FETCH_OBJ);
    }
    public function PaymentPageSort($id)
    {
        $con = $this->GetConnection();

        $stmt = $con->prepare("SELECT * FROM manager_pop WHERE manager_id=?");

        $stmt->execute([$id]);

        return $stmt->rowCount();
    }
    public function PaymentFetctSort($limit, $start, $namesort, $sortName, $id)
    {
        $con = $this->GetConnection();

        $qs = "SELECT * FROM manager_pop WHERE manager_id=? ORDER by $sortName $namesort LIMIT $start, $limit";
        $stmt = $con->prepare($qs);

        $stmt->execute([$id]);
        $numwors = $stmt->rowCount();
        if ($numwors > 0) {
            while($r = $stmt->fetchAll()){
                return $r;
            }
        }
    }
    public function PaymentSearchFetchSort($limit, $start, $namesort, $sortName, $search, $id)
    {
        $con = $this->GetConnection();

        $stmt = $con->prepare("SELECT * FROM manager_pop WHERE
        date LIKE ? && manager_id=?
        ORDER by $sortName $namesort LIMIT $start, $limit");
        $stmt->execute(["%$search%", $id]);

        $numwors = $stmt->rowCount();

        if ($numwors > 0) {

            while($r = $stmt->fetchAll()){

                return $r;
            }
        }
    }
    public function PaymentSearchPageSort($search, $id)
    {
        $con = $this->GetConnection();

        $stmt = $con->prepare("SELECT * FROM manager_pop WHERE
        date LIKE ? && manager_id=?");
        $stmt->execute(["%$search%", $id]);

        return $stmt->rowCount();
    }

    

    public function PaymentRecordPageSort()
    {
        $con = $this->GetConnection();

        $stmt = $con->prepare("SELECT * FROM manager_pop");

        $stmt->execute();

        return $stmt->rowCount();
    }
    public function PaymentRecordFetctSort($limit, $start, $namesort, $sortName)
    {
        $con = $this->GetConnection();

        $qs = "SELECT * FROM manager_pop ORDER by $sortName $namesort LIMIT $start, $limit";
        $stmt = $con->prepare($qs);

        $stmt->execute();
        $numwors = $stmt->rowCount();
        if ($numwors > 0) {
            while($r = $stmt->fetchAll()){
                return $r;
            }
        }
    }
    public function PaymentRecordSearchFetchSort($limit, $start, $namesort, $sortName, $search)
    {
        $con = $this->GetConnection();

        $stmt = $con->prepare("SELECT * FROM manager_pop WHERE
        date LIKE ?
        ORDER by $sortName $namesort LIMIT $start, $limit");
        $stmt->execute(["%$search%"]);

        $numwors = $stmt->rowCount();

        if ($numwors > 0) {

            while($r = $stmt->fetchAll()){

                return $r;
            }
        }
    }
    public function PaymentRecordSearchPageSort($search)
    {
        $con = $this->GetConnection();

        $stmt = $con->prepare("SELECT * FROM manager_pop WHERE
        date LIKE ?");
        $stmt->execute(["%$search%"]);

        return $stmt->rowCount();
    }
    
    public function DeletePayment($id){

        $con = $this->GetConnection();

        $stmt = $con->prepare("SELECT * FROM manager_pop WHERE id=?");

        $true = $stmt->execute([$id]);

        if ($true) {
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            $img =  $result['img'];

            $old = "../../images/pop/$img"; //old profile

            unlink($old); //deleting pass profile

            $stmt = $con->prepare("DELETE FROM `manager_pop` WHERE id=?");

            $true = $stmt->execute([$id]);

            if ($true) {

                return true;
            }
            return false;
        }

        return false;
    }
}