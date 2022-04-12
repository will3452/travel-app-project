<?php

class Notification extends User{

    public function Insert($id, $type, $message){

        $con = $this->GetConnection();

        $prepareStatement  = "INSERT INTO `notifications`(`user_id`, `type`, `message`) VALUE(?, ?, ?)";
        
        $stmt = $con->prepare($prepareStatement);

        $param = [ $id, $type, $message];

        $executeResult = $stmt->execute($param);

        if ($executeResult) {
            
             return true;
        }

        return false;
    }
}