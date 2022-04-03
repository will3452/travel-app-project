<?php

class Gcash extends User{
    public function CheckGcash($account_name, $account_number){
        $con = $this->GetConnection();
        $stmt = $con->prepare("SELECT * FROM gcash");
        $executeResult = $stmt->execute();
        return $numwors = $stmt->rowCount();
    }
    public function GcashProcess($account_name, $account_number){
        $con = $this->GetConnection();
        $check = $this->CheckGcash($account_name, $account_number);
        if($check>0){
            $prepareStatement  = "UPDATE `gcash` SET `name`=?, `number`=?";
            $stmt = $con->prepare($prepareStatement);
            $param = [$account_name, $account_number];
            $executeResult = $stmt->execute($param);
            if ($executeResult){
                return true;
            }
            return false;
        }
        $prepareStatement  = "INSERT INTO `gcash`(`name`, `number`) VALUE(?, ?)";
        $stmt = $con->prepare($prepareStatement);
        $param = [$account_name, $account_number];
        $executeResult = $stmt->execute($param);
        if ($executeResult){
            return true;
        }
        return false;
    }
    public function GetGcash(){
        $con = $this->GetConnection();
        $stmt = $con->prepare("SELECT * FROM gcash");
        $executeResult = $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);
    }
}