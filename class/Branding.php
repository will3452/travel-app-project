<?php

class Branding extends User{
    public function CheckBranding($name, $description){
        $con = $this->GetConnection();
        $stmt = $con->prepare("SELECT * FROM branding");
        $executeResult = $stmt->execute();
        return $numwors = $stmt->rowCount();
    }
    public function BrandingProcess($name, $description){
        $con = $this->GetConnection();
        $check = $this->CheckBranding($name, $description);
        if($check>0){
            $prepareStatement  = "UPDATE `branding` SET `name`=?, `description`=?";
            $stmt = $con->prepare($prepareStatement);
            $param = [$name, $description];
            $executeResult = $stmt->execute($param);
            if ($executeResult){
                return true;
            }
            return false;
        }
        $prepareStatement  = "INSERT INTO `branding`(`name`, `description`) VALUE(?, ?)";
        $stmt = $con->prepare($prepareStatement);
        $param = [$name, $description];
        $executeResult = $stmt->execute($param);
        if ($executeResult){
            return true;
        }
        return false;
    }
    public function GetBranding(){
        $con = $this->GetConnection();
        $stmt = $con->prepare("SELECT * FROM branding");
        $executeResult = $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);
    }
}