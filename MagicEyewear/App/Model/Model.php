<?php
require_once('DatabaseConnection.php');
session_start();

protected $database; 

public function connectToDatabase()
{
    // IF THERE IS NO DATABASE CONNECTION, CREATE NEW CONNECTION
    
    if(NULL===$this->database)
    {
        $this->database = new DatabaseConnection(); 
    }
}



?>