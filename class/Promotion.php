<?php

class Promotion extends User{

    public function Insert($name, $price, $date, $description)
    {
        $con = $this->GetConnection();

        $prepareStatement  = "INSERT INTO `packages`(`name`, `days`, `price`, `description`) VALUE(?, ?, ?, ?)";
        
        $stmt = $con->prepare($prepareStatement);

        $param = [ $name, $date, $price, $description];

        $executeResult = $stmt->execute($param);

        if ($executeResult) {

            return true;
       }
    }
    
    public function PromotionPageSort()
    {
        $con = $this->GetConnection();

        $stmt = $con->prepare("SELECT * FROM packages");

        $stmt->execute();

        return $stmt->rowCount();
    }
    public function PromotionFetctSort($limit, $start, $namesort, $sortName)
    {
        $con = $this->GetConnection();

        $qs = "SELECT * FROM packages ORDER by $sortName $namesort LIMIT $start, $limit";
        $stmt = $con->prepare($qs);

        $stmt->execute();

        $numwors = $stmt->rowCount();

        if ($numwors > 0) {

            while($r = $stmt->fetchAll()){
                
                return $r;

            }
        }
    }
    public function PromotionSearchFetchSort($limit, $start, $namesort, $sortName, $search)
    {
        $con = $this->GetConnection();

        $stmt = $con->prepare("SELECT * FROM packages WHERE name LIKE ? ORDER by $sortName $namesort LIMIT $start, $limit");

        $stmt->execute(["%$search%"]);

        $numwors = $stmt->rowCount();

        if ($numwors > 0) {

            while($r = $stmt->fetchAll()){

                return $r;

            }
        }
    }
    public function PromotionSearchPageSort($search)
    {
        $con = $this->GetConnection();

        $stmt = $con->prepare("SELECT * FROM packages WHERE name LIKE ?");

        $stmt->execute(["%$search%"]);

        return $stmt->rowCount();
    }
    public function GetPromoData($id)
    {
        $con = $this->GetConnection();

        $stmt = $con->prepare("SELECT * FROM packages WHERE id=?");

        $stmt->execute([$id]);

        return $stmt->fetch(PDO::FETCH_OBJ);
    }
    
    public function GetAdsOngoing($status, $schedule_at, $end_at){

        $con = $this->GetConnection();

        $stmt = $con->prepare("SELECT * FROM advertisement WHERE status=? && schedule_at<=? && end_at>=?");

        $stmt->execute([$status, $schedule_at, $end_at]);
        
        $numwors = $stmt->rowCount();

        if ($numwors > 0) {

            while($r = $stmt->fetchAll()){

                return $r;

            }
        }
    }
    public function AdsPageSort($iduser)
    {
        $con = $this->GetConnection();

        $stmt = $con->prepare("SELECT * FROM advertisement WHERE manager_id=?");

        $stmt->execute([$iduser]);

        return $stmt->rowCount();
    }
    public function AdsFetctSort($limit, $start, $namesort, $sortName, $iduser)
    {
        $con = $this->GetConnection();

        $qs = "SELECT * FROM advertisement WHERE manager_id=? ORDER by $sortName $namesort LIMIT $start, $limit";
        $stmt = $con->prepare($qs);

        $stmt->execute([$iduser]);

        $numwors = $stmt->rowCount();

        if ($numwors > 0) {

            while($r = $stmt->fetchAll()){
                
                return $r;

            }
        }
    }
    public function AdsSearchFetchSort($limit, $start, $namesort, $sortName, $search, $iduser)
    {
        $con = $this->GetConnection();

        $stmt = $con->prepare("SELECT * FROM advertisement WHERE 
        status LIKE ? && manager_id=? || 
        schedule_at LIKE ? && manager_id=? || 
        end_at LIKE ? && manager_id=? 
        ORDER by $sortName $namesort LIMIT $start, $limit");

        $stmt->execute(["%$search%", $iduser, "%$search%", $iduser, "%$search%", $iduser]);

        $numwors = $stmt->rowCount();

        if ($numwors > 0) {

            while($r = $stmt->fetchAll()){

                return $r;

            }
        }
    }
    public function AdsSearchPageSort($search, $iduser)
    {
        $con = $this->GetConnection();

        $stmt = $con->prepare("SELECT * FROM advertisement WHERE 
        status LIKE ? && manager_id=? || 
        schedule_at LIKE ? && manager_id=? || 
        end_at LIKE ? && manager_id=?");

        $stmt->execute(["%$search%", $iduser, "%$search%", $iduser, "%$search%", $iduser]);

        return $stmt->rowCount();
    }
    public function CanceleAdsSubsManager($id, $status, $manager_id){

        $con = $this->GetConnection();

        $stmt = $con->prepare("SELECT * FROM `advertisement` WHERE id=? && status=? && manager_id=?");

        $executeResult = $stmt->execute([$id, $status, $manager_id]);

        if ($executeResult) {

            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            $img =  $result['image'];

            $pop =  $result['pop'];

            $olddist2 = "../../images/pop/$pop"; //old profile

            $olddist3 = "../../images/ads/$img"; //old profile

            unlink($olddist2); //deleting pass profile

            unlink($olddist3); //deleting pass profile

            $stmt = $con->prepare("DELETE FROM `advertisement` WHERE id=? && status=? && manager_id=?");

            $true = $stmt->execute([$id, $status, $manager_id]);
    
            if ($true) {
    
                return true;
            }
    
            return false;

        }
    }
    public function SearchPACKAGE($search){ 

        $con = $this->GetConnection();

        $stmt = $con->prepare("SELECT * FROM packages WHERE 
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
    public function GetAdsDatas($id, $manager_id){

        $con = $this->GetConnection();

        $stmt = $con->prepare("SELECT * FROM advertisement WHERE id=? && manager_id=?");

        $stmt->execute([$id, $manager_id]);
        
        return $stmt->fetch(PDO::FETCH_OBJ);
    }
    public function SearchMYADS($search, $manager_id){ 

        $con = $this->GetConnection();

        $stmt = $con->prepare("SELECT * FROM advertisement WHERE 
        schedule_at LIKE ? && manager_id=?
        ORDER by schedule_at ASC");

        $stmt->execute(array("%$search%", $manager_id));

        $numwors = $stmt->rowCount();

        if($numwors>0){

            while($r = $stmt->fetchAll()){

                return $r;

            }
        }
    }
}