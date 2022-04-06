<?php
class Gcash extends User
{
    public function CheckGcash($account_name, $account_number)
    {
        $con = $this->GetConnection();

        $str = "SELECT * FROM gcash WHERE 'name' == $account_name AND 'number' == $account_number";

        $stmt = $con->prepare($str);

        $stmt->execute();

        return $stmt->rowCount();
    }

    public function GcashProcess($account_name, $account_number){
        $con = $this->GetConnection();
        $check = $this->CheckGcash($account_name, $account_number);
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
}
