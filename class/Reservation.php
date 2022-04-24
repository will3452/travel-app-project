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
    public function ReservationSearchPageSort($search, $iduser, $status)
    {
        $con = $this->GetConnection();

        $stmt = $con->prepare("SELECT * FROM reservation WHERE
        user_id=? && reserved_at LIKE ? && status=?
        ");

        $stmt->execute([$iduser, "%$search%", $status]);

        return $stmt->rowCount();

    }
    public function ReservationSearchFetchSort($limit, $start, $namesort, $sortName, $search, $iduser, $status)
    {
        $con = $this->GetConnection();

        $qs = "SELECT * FROM reservation WHERE
        user_id=? && reserved_at LIKE ? && status=?
        ORDER by $sortName $namesort LIMIT $start, $limit";
        $stmt = $con->prepare($qs);

        $stmt->execute([$iduser, "%$search%", $status]);

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

    public function ReservationPageSortManager($iduser, $status)
    {
        $con = $this->GetConnection();

        $stmt = $con->prepare("SELECT * FROM reservation WHERE business_id=? && status=?");

        $stmt->execute([$iduser, $status]);

        return $stmt->rowCount();
    }
    public function ReservationFetctSortManager($limit, $start, $namesort, $sortName, $iduser, $status)
    {
        $con = $this->GetConnection();

        $qs = "SELECT * FROM reservation WHERE business_id=? && status=? ORDER by $sortName $namesort LIMIT $start, $limit";
        $stmt = $con->prepare($qs);

        $stmt->execute([$iduser, $status]);

        $numwors = $stmt->rowCount();

        if ($numwors > 0) {

            while($r = $stmt->fetchAll()){

                return $r;
            }
        }
    }
    public function ReservationSearchPageSortManager($search, $iduser, $status)
    {
        $con = $this->GetConnection();

        $stmt = $con->prepare("SELECT * FROM reservation WHERE
        business_id=? && reserved_at LIKE ? && status=?
        ");

        $stmt->execute([$iduser, "%$search%", $status]);

        return $stmt->rowCount();

    }
    public function ReservationSearchFetchSortManager($limit, $start, $namesort, $sortName, $search, $iduser, $status)
    {
        $con = $this->GetConnection();

        $qs = "SELECT * FROM reservation WHERE
        business_id=? && reserved_at LIKE ? && status=?
        ORDER by $sortName $namesort LIMIT $start, $limit";
        $stmt = $con->prepare($qs);

        $stmt->execute([$iduser, "%$search%", $status]);

        $numwors = $stmt->rowCount();

        if ($numwors > 0) {

            while($r = $stmt->fetchAll()){

                return $r;
            }
        }
    }
    public function GetBookManager($id, $business_id){

        $con = $this->GetConnection();

        $stmt = $con->prepare("SELECT * FROM reservation WHERE id=? && business_id=?");

        $executeResult = $stmt->execute([$id, $business_id]);

        $check = $stmt->rowCount();

        if ($check>0) {

            return $stmt->fetch(PDO::FETCH_OBJ);
        }
        return false;
    }

    public function UpdateReservation($id, $status, $remarks, $business_id, $totalprice){

        $con = $this->GetConnection();

        $stmt = $con->prepare("UPDATE `reservation` SET status=?, remarks=?, total=? WHERE id=? && business_id=?");

        $true = $stmt->execute([$status, $remarks, $totalprice, $id, $business_id]);

        if ($true) {
                   
            return $true;
        }
        return false;
    }
    public function UpdateReservationTravel($id, $status, $remarks, $user_id){

        $con = $this->GetConnection();

        $stmt = $con->prepare("UPDATE `reservation` SET status=?, remarks=? WHERE id=? && user_id=?");

        $true = $stmt->execute([$status, $remarks, $id, $user_id]);

        if ($true) {
                   
            return $true;
        }
        return false;
    }
    public function UpdateReservationDataManager($id, $business_id, $date, $time, $notes){

        $con = $this->GetConnection();

        $stmt = $con->prepare("UPDATE `reservation` SET reserved_at=?, time=?, notes=? WHERE id=? && business_id=?");

        $true = $stmt->execute([$date, $time, $notes, $id, $business_id]);

        if ($true) {
                   
            return $true;
        }
        return false;
    }
    public function UpdateReservationDataTraveler($id, $user_id, $date, $time, $notes){

        $con = $this->GetConnection();

        $stmt = $con->prepare("UPDATE `reservation` SET reserved_at=?, time=?, notes=? WHERE id=? && user_id=?");

        $true = $stmt->execute([$date, $time, $notes, $id, $user_id]);

        if ($true) {
                   
            return $true;
        }
        return false;
    }
    public function InsertReservationService($reservation_id, $service_id){

        $con = $this->GetConnection();

        $prepareStatement  = "INSERT INTO `reservation_service`(`reservation_id`, `service_id`) VALUE(?, ?)";
        
        $stmt = $con->prepare($prepareStatement);

        $param = [ $reservation_id, $service_id ];

        $executeResult = $stmt->execute($param);

        if ($executeResult) {

             return true;
        }
    }
    public function GetReservationService($reservation_id){

        $con = $this->GetConnection();


        $qs = "SELECT * FROM reservation_service WHERE reservation_id=?";
        $stmt = $con->prepare($qs);

        $stmt->execute([$reservation_id]);

        $numwors = $stmt->rowCount();

        if ($numwors > 0) {

            while($r = $stmt->fetchAll()){

                return $r;
            }
        }
    }
    public function CheckReservationService($reservation_id, $service_id){

        $con = $this->GetConnection();

        $qs = "SELECT * FROM reservation_service WHERE reservation_id=? && service_id=?";
        $stmt = $con->prepare($qs);

        $stmt->execute([$reservation_id, $service_id]);

        $check = $stmt->rowCount();

        if ($check>0) {

            return $stmt->fetch(PDO::FETCH_OBJ);
        }
        return false;
    }
    public function UpdateReservationCost($id, $status, $business_id, $totalprice){

        $con = $this->GetConnection();

        $stmt = $con->prepare("UPDATE `reservation` SET total=? WHERE id=? && business_id=? && status=?");

        $true = $stmt->execute([$totalprice, $id, $business_id, $status]);

        if ($true) {
                   
            return $true;
        }
        return false;
    }
    public function DeleteReservationService($reservation_id, $service_id){

        $con = $this->GetConnection();

        $qs = "DELETE FROM reservation_service WHERE reservation_id=? && service_id!=?";
        $stmt = $con->prepare($qs);

        $true = $stmt->execute([$reservation_id, $service_id]);

        if($true){

            return true;
        }
        return false;
    }

    public function ReservationTravelerPageSortManager($iduser, $status, $traveler_id)
    {
        $con = $this->GetConnection();

        $stmt = $con->prepare("SELECT * FROM reservation WHERE business_id=? && status=? && user_id=?");

        $stmt->execute([$iduser, $status, $traveler_id]);

        return $stmt->rowCount();
    }
    public function ReservationTravelerFetctSortManager($limit, $start, $namesort, $sortName, $iduser, $status, $traveler_id)
    {
        $con = $this->GetConnection();

        $qs = "SELECT * FROM reservation WHERE business_id=? && status=? && user_id=? ORDER by $sortName $namesort LIMIT $start, $limit";
        $stmt = $con->prepare($qs);

        $stmt->execute([$iduser, $status, $traveler_id]);

        $numwors = $stmt->rowCount();

        if ($numwors > 0) {

            while($r = $stmt->fetchAll()){

                return $r;
            }
        }
    }
    public function ReservationTravelerSearchPageSortManager($search, $iduser, $status, $traveler_id)
    {
        $con = $this->GetConnection();

        $stmt = $con->prepare("SELECT * FROM reservation WHERE
        business_id=? && reserved_at LIKE ? && status=? && user_id=?
        ");

        $stmt->execute([$iduser, "%$search%", $status, $traveler_id]);

        return $stmt->rowCount();

    }
    public function ReservationTravelerSearchFetchSortManager($limit, $start, $namesort, $sortName, $search, $iduser, $status, $traveler_id)
    {
        $con = $this->GetConnection();

        $qs = "SELECT * FROM reservation WHERE
        business_id=? && reserved_at LIKE ? && status=? && user_id=?
        ORDER by $sortName $namesort LIMIT $start, $limit";
        $stmt = $con->prepare($qs);

        $stmt->execute([$iduser, "%$search%", $status, $traveler_id]);

        $numwors = $stmt->rowCount();

        if ($numwors > 0) {

            while($r = $stmt->fetchAll()){

                return $r;
            }
        }
    }
    public function CheckIfTravelerAlreadyHaveBookInSpecificHost($user_id, $business_id, $status){

        $con = $this->GetConnection();

        $prepareStatement  = "SELECT `user_id`, `business_id`, `status` FROM `reservation` WHERE user_id=? && business_id=? && status=?";
        
        $stmt = $con->prepare($prepareStatement);

        $param = [ $user_id, $business_id, $status];

        $executeResult = $stmt->execute($param);

        return $stmt->rowCount();

    }
    public function SearchSERVICESMANAGER($search, $businessid){ 

        $con = $this->GetConnection();

        $stmt = $con->prepare("SELECT * FROM reservation WHERE 
        reserved_at LIKE ? && business_id=?
        ORDER by reserved_at ASC");

        $stmt->execute(array("%$search%", $businessid));

        $numwors = $stmt->rowCount();

        if($numwors>0){

            while($r = $stmt->fetchAll()){

                return $r;

            }
        }
    }
    public function SearchSERVICETRAVELER($search, $iduser){ 

        $con = $this->GetConnection();

        $stmt = $con->prepare("SELECT * FROM reservation WHERE 
        reserved_at LIKE ? && user_id=?
        ORDER by reserved_at ASC");

        $stmt->execute(array("%$search%", $iduser));

        $numwors = $stmt->rowCount();

        if($numwors>0){

            while($r = $stmt->fetchAll()){

                return $r;

            }
        }
    }
}

