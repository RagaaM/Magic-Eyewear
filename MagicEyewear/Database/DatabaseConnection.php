<?php
class DatabaseConnection{

        private $host="localhost";
        private $user="root";
        private $pass="";
        private $database="magic_eyewear";
    
      protected function connect(){
        $conn = 'mysql:host='.$this->host.';database='.$this->database;
        $pdo = new PDO($conn,$this->user,$this->pass);
        $pdo ->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    
      }
    }




 ?>
