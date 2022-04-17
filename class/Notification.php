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
    public function UpdateNotificationAdmin($date, $id, $type){

        $con = $this->GetConnection();

        $prepareStatement  = "UPDATE `notifications` SET read_at=? WHERE id=? && type=?";

        $stmt = $con->prepare($prepareStatement);

        $param = [ $date, $id, $type ];

        $executeResult = $stmt->execute($param);

        if ($executeResult) {
            
             return true;
        }

    }
    public function UpdateNotificationUsers($date, $id, $type, $user){

        $con = $this->GetConnection();

        $prepareStatement  = "UPDATE `notifications` SET read_at=? WHERE id=? && type=? && user_receieve_id=?";

        $stmt = $con->prepare($prepareStatement);

        $param = [ $date, $id, $type, $user ];

        $executeResult = $stmt->execute($param);

        if ($executeResult) {
            
             return true;
        }

    }
    public function DeleteNotificationAdmin($id, $type){

        $con = $this->GetConnection();

        $prepareStatement  = "DELETE FROM `notifications` WHERE id=? && type=?";

        $stmt = $con->prepare($prepareStatement);

        $param = [ $id, $type ];

        $executeResult = $stmt->execute($param);

        if ($executeResult) {
            
             return true;
        }

    }
    public function DeleteNotificationAdminAfterCancelAcc($id, $type){

        $con = $this->GetConnection();

        $prepareStatement  = "DELETE FROM `notifications` WHERE user_id=? && type=?";

        $stmt = $con->prepare($prepareStatement);

        $param = [ $id, $type ];

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
    public function FetchNOtifUsers($user, $user_receieve_id){

        $con = $this->GetConnection();

        $prepareStatement  = "SELECT * FROM notifications WHERE type=? && user_receieve_id=? ORDER by date_created DESC";

        $stmt = $con->prepare($prepareStatement);

        $param = [ $user, $user_receieve_id ];

        $executeResult = $stmt->execute($param);

        $numwors = $stmt->rowCount();

        if($numwors>0){

            while($r = $stmt->fetchAll()){

                return $r;

            }
        }
    }
    public function GetDataNotifAdmin($type, $id){

        $con = $this->GetConnection();

        $stmt = $con->prepare("SELECT * FROM notifications WHERE type=? && id=?");

        $executeResult = $stmt->execute([ $type, $id ]);

        return $stmt->fetch(PDO::FETCH_OBJ);

    }
    public function GetDataNotifUsers($type, $id, $user){

        $con = $this->GetConnection();

        $stmt = $con->prepare("SELECT * FROM notifications WHERE type=? && id=? && user_receieve_id=?");

        $executeResult = $stmt->execute([ $type, $id, $user ]);

        return $stmt->fetch(PDO::FETCH_OBJ);

    }
    public function CountUnreadNotifAdmin($user, $read_at){

        $con = $this->GetConnection();

        $prepareStatement  = "SELECT * FROM notifications WHERE type=? && read_at=?";

        $stmt = $con->prepare($prepareStatement);

        $param = [ $user, $read_at];

        $executeResult = $stmt->execute($param);

        return $numwors = $stmt->rowCount();

    }
    public function CountUnreadNotifUsers($user, $user_receieve_id, $read_at){

        $con = $this->GetConnection();

        $prepareStatement  = "SELECT * FROM notifications WHERE type=? && user_receieve_id=? && read_at=?";

        $stmt = $con->prepare($prepareStatement);

        $param = [ $user, $user_receieve_id, $read_at];

        $executeResult = $stmt->execute($param);

        return $numwors = $stmt->rowCount();

    }
    public function DeleteUserNotifAll($user_receieve_id, $type){

        $con = $this->GetConnection();

        $prepareStatement  = "DELETE FROM `notifications` WHERE user_receieve_id=? && type=?";

        $stmt = $con->prepare($prepareStatement);

        $param = [ $user_receieve_id, $type ];

        $executeResult = $stmt->execute($param);

        if ($executeResult) {
            
             return true;
        }

    }
    public function DeleteAdminNotifAll($type){

        $con = $this->GetConnection();

        $prepareStatement  = "DELETE FROM `notifications` WHERE type=?";

        $stmt = $con->prepare($prepareStatement);

        $param = [ $type ];

        $executeResult = $stmt->execute($param);

        if ($executeResult) {
            
             return true;
        }

    }
    public function DeleteUserNotif($id, $user_receieve_id, $type){

        $con = $this->GetConnection();

        $prepareStatement  = "DELETE FROM `notifications` WHERE id=? && user_receieve_id=? && type=?";

        $stmt = $con->prepare($prepareStatement);

        $param = [ $id, $user_receieve_id, $type ];

        $executeResult = $stmt->execute($param);

        if ($executeResult) {
            
             return true;
        }

    }
    public function DeleteAdminNotif($id, $type){

        $con = $this->GetConnection();

        $prepareStatement  = "DELETE FROM `notifications` WHERE id=? && type=?";

        $stmt = $con->prepare($prepareStatement);

        $param = [ $id, $type ];

        $executeResult = $stmt->execute($param);

        if ($executeResult) {
            
             return true;
        }

    }
}