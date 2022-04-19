<?php

class Payment extends User{
   
    public function ManagerPOP($id, $file, $type, $date, $status, $price)
    {
        $con = $this->GetConnection();

        [$fileName, $filetmp, $fileExt ,$filedesti, $finlenamenew] = $this->ExtractFileData($file, 'pop');

        date_default_timezone_set('Asia/Manila');

        $time = date("H:i:s");

        $newdate = $date.' '.$time;
        
        $stmt = $con->prepare("INSERT INTO `manager_pop`(`img`, `price`, `manager_id`, `type`, `date`, `status`) VALUE(?, ?, ?, ?, ?, ?)");

        $executeResult = $stmt->execute([$finlenamenew, $price, $id, $type, $newdate, $status]);

        if ($executeResult) {
            move_uploaded_file($filetmp, $filedesti);
            return true;
        }

        return false;
    }
    public function InsertPOP($popnewname, $userid, $type_id, $type, $status, $price)
    {
        $con = $this->GetConnection();

        $stmt = $con->prepare("INSERT INTO `manager_pop`(`img`, `price`, `manager_id`, `type_id`, `type`, `status`) VALUE(?, ?, ?, ?, ?, ?)");

        $executeResult = $stmt->execute([$popnewname, $price, $userid, $type_id, $type, $status]);

        if ($executeResult) {

            return true;
        }

        return false;
    }
    public function UpdateManagerPOPAccount($userid, $status, $type_id)
    {
        $con = $this->GetConnection();

        $stmt = $con->prepare("UPDATE manager_pop SET status=?, type_id=? WHERE manager_id=?");

        $result = $stmt->execute([$status, $type_id, $userid]);

        return $result;
    }
    public function UpdateManagerPOPAds($userid, $type_id, $status)
    {
        $con = $this->GetConnection();

        $stmt = $con->prepare("UPDATE manager_pop SET status=? WHERE manager_id=? && type_id=?");

        $result = $stmt->execute([$status, $userid, $type_id]);

        return $result;
    }
    public function DeleteManagerPOPAds($userid, $type_id)
    {

        $con = $this->GetConnection();

        $stmt = $con->prepare("SELECT * FROM manager_pop WHERE manager_id=? && type_id=?");

        $executeResult = $stmt->execute([$userid, $type_id]);

        if ($executeResult) {

            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            $img =  $result['img'];

            $olddist2 = "../../images/pop/$img"; //old profile

            unlink($olddist2); //deleting pass profile

            $stmt = $con->prepare("DELETE FROM `manager_pop` WHERE manager_id=? && type_id=?");

            $true = $stmt->execute([$userid, $type_id]);

            if ($true) {

                return true;
            }

            return false;
        }
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
            
            return true;
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
    public function InsertRevenue($price, $userid, $type)
    {
        $con = $this->GetConnection();

        $stmt = $con->prepare("INSERT INTO `revenue`(`amount`, `user_id`, `type`) VALUE(?, ?, ?)");

        $executeResult = $stmt->execute([$price, $userid, $type]);

        if ($executeResult) {

            return true;
        }

        return false;
    }
    public function RevenuePageSort()
    {
        $con = $this->GetConnection();

        $stmt = $con->prepare("SELECT DATE(date) as date, SUM(price) as total  FROM manager_pop WHERE status=? GROUP by date(date)");

        $stmt->execute([self::STATUS_DONE]);

        return $stmt->rowCount();
    }
    public function RevenueFetctSort($limit, $start, $namesort, $sortName)
    {
        $con = $this->GetConnection();

        $qs = "SELECT DATE(date) as date, SUM(price) as total  FROM manager_pop WHERE status=? GROUP by date(date)  ORDER by $sortName $namesort LIMIT $start, $limit";
        $stmt = $con->prepare($qs);

        $stmt->execute([self::STATUS_DONE]);

        $numwors = $stmt->rowCount();

        if ($numwors > 0) {

            while($r = $stmt->fetchAll()){

                return $r;

            }
        }
    }
    public function RevenueSearchPageSort($search)
    {
        $con = $this->GetConnection();

        $stmt = $con->prepare("SELECT DATE(date) as date, SUM(price) as total  
        FROM manager_pop WHERE status=? && date LIKE ? GROUP by date(date)");

        $stmt->execute([self::STATUS_DONE, "%$search%"]);

        return $stmt->rowCount();
    }
    public function RevenueSearchFetchSort($limit, $start, $namesort, $sortName, $search)
    {
        $con = $this->GetConnection();

        $stmt = $con->prepare("SELECT DATE(date) as date, SUM(price) as total  
        FROM manager_pop WHERE status=? && date LIKE ? GROUP by date(date) ORDER by $sortName $namesort LIMIT $start, $limit");

        $stmt->execute([self::STATUS_DONE, "%$search%"]);


        $numwors = $stmt->rowCount();

        if ($numwors > 0) {

            while($r = $stmt->fetchAll()){

                return $r;
            }
        }
    }
    public function GenerateReport($datefrom, $dateto){

        $con = $this->GetConnection();

        $stmt = $con->prepare("SELECT DATE(date) as date, SUM(price) as total  

        FROM manager_pop WHERE status=? && date BETWEEN ? AND ? GROUP by date(date) ORDER by date desc");

        $stmt->execute([self::STATUS_DONE, $datefrom, $dateto]);

        $numwors = $stmt->rowCount();

        if ($numwors > 0) {

            header('Content-Type: text/csv; charset=utf-8');

            header("Content-Disposition: attachment; filename=RevenueReportFrom' $datefrom ' to ' $dateto '.csv");

            $output = fopen("php://output", "w");
            
            $result = $r = $stmt->fetchAll();

            $totalvalue = 0;

            fputcsv($output, array('Date','Total Revenue', 'Over All Revenue'));

            foreach ($result as $values) {

                $totalvalue += $values['total'];

            }
            fputcsv($output, array('','',$totalvalue));

            foreach ($result as $value) {
               
                fputcsv($output, array($value['date'], $value['total']));

                $totalvalue += $value['total'];

            }
            fclose($output);
            return true;
        }else{
            return false;
        }
    }
}