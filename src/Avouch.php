<?php

namespace iammutevu\Avouch;
use Database;
use FileHandler;

class Avouch{
    public function execute(){
        // Create connection
        $connection = Database::connect($command);

        $query = $connection->prepare($command);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    } 
}