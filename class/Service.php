<?php

class Service extends User{

    public function Insert($category, $file, $name, $price, $description, $business_id){

        $con = $this->GetConnection();

        [$fileName, $filetmp, $fileExt, $filedesti, $finlenamenew] = $this->ExtractFileData($file, 'service');

        $prepareStatement  = "INSERT INTO `services`(`business_id`, `name`, `remarks`, `price`, `image`, `category`) VALUE(?, ?, ?, ?, ?, ?)";
        
        $stmt = $con->prepare($prepareStatement);

        $param = [ $business_id, $name, $description, $price, $finlenamenew, $category];

        $executeResult = $stmt->execute($param);

        if ($executeResult) {
             move_uploaded_file($filetmp, $filedesti);

             return true;
        }
    }
    
    public function CheckServiceExist($service_id, $businessid){

        $con = $this->GetConnection();

        $stmt = $con->prepare("SELECT * FROM services WHERE id=? && business_id=?");

        $executeResult = $stmt->execute([$service_id, $businessid]);

        $check = $stmt->rowCount();

        if ($check>0) {

            return $stmt->fetch(PDO::FETCH_OBJ);
        }
        return false;
    }
    public function Delete($service_id, $businessid)
    {
        $con = $this->GetConnection();

        $result = $this->CheckServiceExist($service_id, $businessid);

        if($result){

            $img =  $result->image;

            $olddist = "../../images/services/$img"; //old profile

            unlink($olddist);

            $stmt = $con->prepare("DELETE FROM `services` WHERE id=? && business_id=?");

            $true = $stmt->execute([$service_id, $businessid]);

            if ($true) {

                return $true;
            }
        }return false;
       
    }
    public function Update($category, $file, $name, $price, $description, $businessid, $service_id)
    {
        $con = $this->GetConnection();

        $result = $this->CheckServiceExist($service_id, $businessid);

        if($result){

            $img =  $result->image;

            if(empty($file['name'])){

                $stmt = $con->prepare("UPDATE `services` SET name=?, remarks=?, price=?, category=? WHERE id=? && business_id=?");
                
                $true = $stmt->execute([$name, $description, $price, $category, $service_id, $businessid]);
                
                if ($true) {
                   
                    return $true;
                }
            }else{
                
                $olddist = "../../images/services/$img"; //old profile
                
                unlink($olddist);
                
                [$fileName, $filetmp, $fileExt, $filedesti, $finlenamenew] = $this->ExtractFileData($file, 'service');
                
                $stmt = $con->prepare("UPDATE `services` SET name=?, remarks=?, price=?, category=?, image=? WHERE id=? && business_id=?");
                
                $true = $stmt->execute([$name, $description, $price, $category, $finlenamenew, $service_id, $businessid]);
                
                if ($true) {

                    move_uploaded_file($filetmp, $filedesti);

                    return $true;
                }
            }
        }return false;
    }
    public function InsertServiceCategory($id, $name){

        $con = $this->GetConnection();

        $prepareStatement  = "INSERT INTO `category`(`business_id`, `name`) VALUE(?, ?)";
        
        $stmt = $con->prepare($prepareStatement);

        $param = [ $id, $name ];

        $executeResult = $stmt->execute($param);

        if ($executeResult) {

             return true;
        }
    }
    public function GetCategory($id){

        $con = $this->GetConnection();

        $stmt = $con->prepare("SELECT * FROM category WHERE business_id=?");

        $executeResult = $stmt->execute([$id]);

        $numwors = $stmt->rowCount();

        if ($numwors > 0) {

            while($r = $stmt->fetchAll()){
                
                return $r;

            }
        }
    }
    public function ServiceCategory($id, $name){

        $con = $this->GetConnection();

        $stmt = $con->prepare("SELECT * FROM category WHERE business_id=? && name=?");

        $executeResult = $stmt->execute([$id, $name]);

        $check = $stmt->rowCount();

        if ($check>0) {

            return $stmt->fetch(PDO::FETCH_OBJ);
        }
        return false;

    }
    public function CategoryPageSort($businessid)
    {
        $con = $this->GetConnection();

        $stmt = $con->prepare("SELECT * FROM category WHERE business_id=?");

        $stmt->execute([$businessid]);

        return $stmt->rowCount();
    }
    public function CategoryFetctSort($limit, $start, $namesort, $sortName, $businessid)
    {
        $con = $this->GetConnection();

        $qs = "SELECT * FROM category WHERE business_id=? ORDER by $sortName $namesort LIMIT $start, $limit";
        $stmt = $con->prepare($qs);

        $stmt->execute([$businessid]);

        $numwors = $stmt->rowCount();

        if ($numwors > 0) {

            while($r = $stmt->fetchAll()){

                return $r;
            }
        }
    }
    public function CategorySearchPageSort($search, $businessid)
    {
        $con = $this->GetConnection();

        $stmt = $con->prepare("SELECT * FROM category WHERE
        name LIKE ? && business_id=?");

        $stmt->execute(["%$search%", $businessid]);

        return $stmt->rowCount();
    }
    public function CategorySearchFetchSort($limit, $start, $namesort, $sortName, $search, $businessid)
    {
        $con = $this->GetConnection();

        $stmt = $con->prepare("SELECT * FROM category WHERE
        name LIKE ? && business_id=? 
        ORDER by $sortName $namesort LIMIT $start, $limit");

        $stmt->execute(["%$search%", $businessid]);

        $numwors = $stmt->rowCount();

        if ($numwors > 0) {
            
            while($r = $stmt->fetchAll()){

                return $r;
            }
        }
    }
    public function ServicePageSort($businessid)
    {
        $con = $this->GetConnection();

        $stmt = $con->prepare("SELECT * FROM services WHERE business_id=?");

        $stmt->execute([$businessid]);

        return $stmt->rowCount();
    }
    public function ServiceFetctSort($limit, $start, $namesort, $sortName, $businessid)
    {
        $con = $this->GetConnection();

        $qs = "SELECT * FROM services WHERE business_id=? ORDER by $sortName $namesort LIMIT $start, $limit";
        $stmt = $con->prepare($qs);

        $stmt->execute([$businessid]);

        $numwors = $stmt->rowCount();

        if ($numwors > 0) {

            while($r = $stmt->fetchAll()){

                return $r;
            }
        }
    }
    public function ServicePageSortWithCategory($businessid, $category)
    {
        $con = $this->GetConnection();

        $stmt = $con->prepare("SELECT * FROM services WHERE business_id=? && category LIKE ?");

        $stmt->execute([$businessid, "%$category%"]);

        return $stmt->rowCount();
    }
    public function ServiceFetctSortWithCategory($limit, $start, $category, $namesort, $sortName, $businessid)
    {
        $con = $this->GetConnection();

        $qs = "SELECT * FROM services WHERE business_id=? && category LIKE ? ORDER by $sortName $namesort LIMIT $start, $limit";
        $stmt = $con->prepare($qs);

        $stmt->execute([$businessid, "%$category%"]);

        $numwors = $stmt->rowCount();

        if ($numwors > 0) {

            while($r = $stmt->fetchAll()){

                return $r;
            }
        }
    }
    public function ServicePageSortWithSearch($businessid, $search)
    {
        $con = $this->GetConnection();

        $stmt = $con->prepare("SELECT * FROM services WHERE business_id=? && name LIKE ?");

        $stmt->execute([$businessid, "%$search%"]);

        return $stmt->rowCount();
    }
    public function ServiceFetctSortWithSearch($limit, $start, $search, $namesort, $sortName, $businessid)
    {
        $con = $this->GetConnection();

        $qs = "SELECT * FROM services WHERE business_id=? && name LIKE ? ORDER by $sortName $namesort LIMIT $start, $limit";
        $stmt = $con->prepare($qs);

        $stmt->execute([$businessid, "%$search%"]);

        $numwors = $stmt->rowCount();

        if ($numwors > 0) {

            while($r = $stmt->fetchAll()){

                return $r;
            }
        }
    }
    public function ServicePageSortWithSearchAndCategory($businessid, $search, $category)
    {
        $con = $this->GetConnection();

        $stmt = $con->prepare("SELECT * FROM services WHERE business_id=? && name LIKE ? && category like ?");

        $stmt->execute([$businessid, "%$search%", "%$category%"]);

        return $stmt->rowCount();
    }
    public function ServiceFetctSortWithSearchAndCategory($limit, $start, $search, $category, $namesort, $sortName, $businessid)
    {
        $con = $this->GetConnection();

        $qs = "SELECT * FROM services WHERE business_id=? && name LIKE ? && category like ? ORDER by $sortName $namesort LIMIT $start, $limit";
        $stmt = $con->prepare($qs);

        $stmt->execute([$businessid, "%$search%", "%$category%"]);

        $numwors = $stmt->rowCount();

        if ($numwors > 0) {

            while($r = $stmt->fetchAll()){

                return $r;
            }
        }
    }
}