<?php

class Reservation extends Service{

     public function InsertReservation($user_id, $business_id, $status, $notes, $reserved_at, $time){

          $con = $this->GetConnection();

          $prepareStatement  = "INSERT INTO `reservation`(`user_id`, `business_id`, `status`, `notes`, `reserved_at`,  `time`) VALUE(?, ?, ?, ?, ?, ?)";
          
          $stmt = $con->prepare($prepareStatement);

          $param = [ $user_id, $business_id, $status, $notes, $reserved_at, $time];

          $executeResult = $stmt->execute($param);

          if ($executeResult) {

               return true;
               
          }

     }
     public function CheckIfReservationExist($user_id, $business_id, $reserved_at){

          $con = $this->GetConnection();

          $prepareStatement  = "SELECT `user_id`, `business_id`, `reserved_at` FROM `reservation` WHERE user_id=? && business_id=? && reserved_at=?";
          
          $stmt = $con->prepare($prepareStatement);

          $param = [ $user_id, $business_id, $reserved_at];

          $executeResult = $stmt->execute($param);

          return $stmt->rowCount();
     }
     public function ReservationPageSort($iduser, $status)
    {
        $con = $this->GetConnection();

        $stmt = $con->prepare("SELECT * FROM reservation WHERE user_id=? && status=?");

        $stmt->execute([$iduser, $status]);

        return $stmt->rowCount();
    }
    public function ReservationFetctSort($limit, $start, $namesort, $sortName, $iduser, $status)
    {
        $con = $this->GetConnection();

        $qs = "SELECT * FROM reservation WHERE user_id=? && status=? ORDER by $sortName $namesort LIMIT $start, $limit";
        $stmt = $con->prepare($qs);

        $stmt->execute([$iduser, $status]);

        $numwors = $stmt->rowCount();

        if ($numwors > 0) {

            while($r = $stmt->fetchAll()){

                return $r;
            }
        }
    }
    public function ReservationSearchPageSort($search, $iduser)
    {
        $con = $this->GetConnection();

        $stmt = $con->prepare("SELECT * FROM reservation WHERE
        user_id=? && reserved_at LIKE ?
        ");

        $stmt->execute([$iduser, "%$search%"]);

        return $stmt->rowCount();

    }
    public function ReservationSearchFetchSort($limit, $start, $namesort, $sortName, $search, $iduser)
    {
        $con = $this->GetConnection();

        $qs = "SELECT * FROM reservation WHERE
        user_id=? && reserved_at LIKE ?
        ORDER by $sortName $namesort LIMIT $start, $limit";
        $stmt = $con->prepare($qs);

        $stmt->execute([$iduser, "%$search%"]);

        $numwors = $stmt->rowCount();

        if ($numwors > 0) {

            while($r = $stmt->fetchAll()){

                return $r;
            }
        }
    }
    public function GetBook($user_id, $id){

        $con = $this->GetConnection();

        $stmt = $con->prepare("SELECT * FROM reservation WHERE id=? && user_id=?");

        $executeResult = $stmt->execute([$id, $user_id]);

        $check = $stmt->rowCount();

        if ($check>0) {

            return $stmt->fetch(PDO::FETCH_OBJ);
        }
        return false;
    }
}