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
   
}