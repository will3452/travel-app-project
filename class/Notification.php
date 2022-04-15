<?php

class Notification extends User{

    public function Insert($id, $user_receieve_id, $type, $link, $message){

        $con = $this->GetConnection();

        $prepareStatement  = "INSERT INTO `notifications`(`user_id`, `user_receieve_id`, `type`, `link`, `message`) VALUE(?, ?, ?, ?, ?)";
        
        $stmt = $con->prepare($prepareStatement);

        $param = [ $id, $user_receieve_id, $type, $link, $message];

        $executeResult = $stmt->execute($param);

        if ($executeResult) {
            
             return true;
        }

        return false;
    }
    public function ProtocolAndLinks(){

        $protocol = strtolower(substr($_SERVER["SERVER_PROTOCOL"],0,strpos( $_SERVER["SERVER_PROTOCOL"],'/'))).'://';

        $links = $_SERVER['HTTP_HOST'];

        return $protocol.$links;
    }
    public function UpdateNotification($date, $id, $user_id){

        $con = $this->GetConnection();

        $prepareStatement  = "UPDATE `notifications` SET read_at=? WHERE id=? && user_id=?";

        $stmt = $con->prepare($prepareStatement);

        $param = [ $date, $id, $user_id ];

        $executeResult = $stmt->execute($param);

        if ($executeResult) {
            
             return true;
        }

    }
    public function DeleteNotification($id, $user_id){

        $con = $this->GetConnection();

        $prepareStatement  = "DELETE FROM `notifications` WHERE id=? && user_id=?";

        $stmt = $con->prepare($prepareStatement);

        $param = [ $id, $user_id ];

        $executeResult = $stmt->execute($param);

        if ($executeResult) {
            
             return true;
        }

    }
    public function FetchAdminNotif($user){

        $con = $this->GetConnection();

        $prepareStatement  = "SELECT * FROM notifications WHERE type=? ORDER by date_created DESC";

        $stmt = $con->prepare($prepareStatement);

        $param = [ $user ];

        $executeResult = $stmt->execute($param);

        $numwors = $stmt->rowCount();

        if($numwors>0){

            while($r = $stmt->fetchAll()){

                return $r;

            }
        }
    }
    public function CountUnreadNotifAdmin($user){

        $con = $this->GetConnection();

        $prepareStatement  = "SELECT * FROM notifications WHERE type=?";

        $stmt = $con->prepare($prepareStatement);

        $param = [ $user ];

        $executeResult = $stmt->execute($param);

        return $numwors = $stmt->rowCount();

    }
}