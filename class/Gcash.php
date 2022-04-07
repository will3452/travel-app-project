<?php
class Gcash extends User
{
    public function CheckGcash()
    {
        $con = $this->GetConnection();

        $str = "SELECT * FROM gcash";

        $stmt = $con->prepare($str);

        $stmt->execute();

        return $stmt->rowCount();
    }

    public function GcashProcess($account_name, $account_number){

        $con = $this->GetConnection();

        $check = $this->CheckGcash();
        
        if ( $check > 0 ) {

            $prepareStatement  = "UPDATE `gcash` SET `name`=?, `number`=?";

            $stmt = $con->prepare($prepareStatement);

            $executeResult = $stmt->execute([$account_name, $account_number]);

            return $executeResult;
        }
        $prepareStatement  = "INSERT INTO `gcash`(`name`, `number`) VALUE(?, ?)";

        $stmt = $con->prepare($prepareStatement);

        $executeResult = $stmt->execute([$account_name, $account_number]);

        return $executeResult;
    }
    public function GetGcash()
    {
        $con = $this->GetConnection();

        $stmt = $con->prepare("SELECT * FROM gcash");

        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    public function CheckPricing()
    {
        $con = $this->GetConnection();

        $str = "SELECT * FROM pricing";

        $stmt = $con->prepare($str);

        $stmt->execute();

        return $stmt->rowCount();
    }
    public function PricinghProcess($account_pricing, $account_details, $promotion_pricing, $promotion_details){

        $con = $this->GetConnection();

        $check = $this->CheckPricing();
        
        if ( $check > 0 ) {

            $prepareStatement  = "UPDATE `pricing` SET `account_pricing`=?, `account_details`=?, `promotion_pricing`=?, `promotion_details`=?";

            $stmt = $con->prepare($prepareStatement);

            $executeResult = $stmt->execute([$account_pricing, $account_details, $promotion_pricing, $promotion_details]);

            return $executeResult;
        }
        $prepareStatement  = "INSERT INTO `pricing`(`account_pricing`, `account_details`, `promotion_pricing`, `promotion_details`) VALUE(?, ?, ?, ?)";

        $stmt = $con->prepare($prepareStatement);

        $executeResult = $stmt->execute([$account_pricing, $account_details, $promotion_pricing, $promotion_details]);

        return $executeResult;
    }
    public function GetPricing()
    {
        $con = $this->GetConnection();

        $stmt = $con->prepare("SELECT * FROM pricing");

        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_OBJ);
    }
}
