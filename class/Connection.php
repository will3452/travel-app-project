<?php
class Connection{
    private $servername = "127.0.0.1";
    private $username = "root";
    private $password = "";
    private $dbname = "travel_guide";

    public function con(){
        try {

          $this->pdo = new PDO("mysql:host=$this->servername;port='';dbname=$this->dbname", $this->username, $this->password);
        
        } catch(PDOException $e) {
            
            die($e->getMessage());
        }
        return $this->pdo;
    }
}
