<?php

class Branding extends User{
    public function CheckBranding() { // why u pass param and yet you don't using it ?
                                      //okays na bro

        $con = $this->GetConnection();

        $stmt = $con->prepare("SELECT * FROM branding");

        $stmt->execute();

        return $stmt->rowCount();
    }
    public function BrandingProcess($name, $description){

        $con = $this->GetConnection();

        $check = $this->CheckBranding();
        
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


    public function CheckSystemAbout() { // why u pass param and yet you don't using it ?
        //okays na bro

        $con = $this->GetConnection();

        $stmt = $con->prepare("SELECT * FROM system_about");

        $stmt->execute();

        return $stmt->rowCount();
    }
    public function LandinageAbout($title, $description){

        $con = $this->GetConnection();

        $check = $this->CheckSystemAbout();
        
        if($check>0){

            $prepareStatement  = "UPDATE `system_about` SET `title`=?, `description`=?";

            $stmt = $con->prepare($prepareStatement);

            $param = [$title, $description];

            $executeResult = $stmt->execute($param);

            if ($executeResult){

                return true;
            }
            return false;
        }
        $prepareStatement  = "INSERT INTO `system_about`(`title`, `description`) VALUE(?, ?)";

        $stmt = $con->prepare($prepareStatement);

        $param = [$title, $description];

        $executeResult = $stmt->execute($param);

        if ($executeResult){

            return true;
        }
        return false;
    }
    public function GetSystemAbout(){

        $con = $this->GetConnection();

        $stmt = $con->prepare("SELECT * FROM system_about");

        $executeResult = $stmt->execute();

        return $stmt->fetch(PDO::FETCH_OBJ);
    }



    public function CheckFooterAbout() { // why u pass param and yet you don't using it ?
        //okays na bro

        $con = $this->GetConnection();

        $stmt = $con->prepare("SELECT * FROM footer");

        $stmt->execute();

        return $stmt->rowCount();
    }
    public function LandinageFooter($contact, $facebook, $twitter, $instagram){

        $con = $this->GetConnection();

        $check = $this->CheckFooterAbout();
        
        if($check>0){

            $prepareStatement  = "UPDATE `footer` SET `contact`=?, `facebook`=?, `twitter`=?, `instagram`=? ";

            $stmt = $con->prepare($prepareStatement);

            $param = [$contact, $facebook, $twitter, $instagram];

            $executeResult = $stmt->execute($param);

            if ($executeResult){

                return true;
            }
            return false;
        }
        $prepareStatement  = "INSERT INTO `footer`(`contact`, `facebook`, `twitter`, `instagram`) VALUE(?, ?, ?, ?)";

        $stmt = $con->prepare($prepareStatement);

        $param = [$contact, $facebook, $twitter, $instagram];

        $executeResult = $stmt->execute($param);

        if ($executeResult){

            return true;
        }
        return false;
    }
    public function GetSystemFooter(){

        $con = $this->GetConnection();

        $stmt = $con->prepare("SELECT * FROM footer");

        $executeResult = $stmt->execute();

        return $stmt->fetch(PDO::FETCH_OBJ);
    }




    
    public function CheckTMD() { // why u pass param and yet you don't using it ?
        //okays na bro

        $con = $this->GetConnection();

        $stmt = $con->prepare("SELECT * FROM termandcondition");

        $stmt->execute();

        return $stmt->rowCount();
    }
    public function TermsAndConProcess($termstitle, $termsdescription, $conditiontitle, $conditiondescription){

        $con = $this->GetConnection();

        $check = $this->CheckTMD();
        
        if($check>0){

            $prepareStatement  = "UPDATE `termandcondition` SET `termstitle`=?, `termsdescription`=?, `conditiontitle`=?, `conditiondescription`=? ";

            $stmt = $con->prepare($prepareStatement);

            $param = [$termstitle, $termsdescription, $conditiontitle, $conditiondescription];

            $executeResult = $stmt->execute($param);

            if ($executeResult){

                return true;
            }
            return false;
        }
        $prepareStatement  = "INSERT INTO `termandcondition`(`termstitle`, `termsdescription`, `conditiontitle`, `conditiondescription`) VALUE(?, ?, ?, ?)";

        $stmt = $con->prepare($prepareStatement);

        $param = [$termstitle, $termsdescription, $conditiontitle, $conditiondescription];

        $executeResult = $stmt->execute($param);

        if ($executeResult){

            return true;
        }
        return false;
    }
    public function GetSystemTMD(){

        $con = $this->GetConnection();

        $stmt = $con->prepare("SELECT * FROM termandcondition");

        $executeResult = $stmt->execute();

        return $stmt->fetch(PDO::FETCH_OBJ);
    }
}
