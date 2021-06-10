<?php

    abstract class Model{
        protected $databaseHandler; 

        public function __construct(){
            $this->databaseHandler = new DatabaseConnection(); 
        }


        public getDatabaseHandler(){
            return this->databaseHandler;
        }
    }

?>