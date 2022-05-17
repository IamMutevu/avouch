<?php

namespace Avouch;

class Database{
    public static function connect(){
        $data = file_get_contents('../configure.json');
        $data  = json_decode($data);

        $servername = $data->servername;
        $username = $data->username;
        $password = $data->password;
        $database = $data->database;
    
        try {
            $connection = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
            // set the PDO error mode to exception
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        } catch(PDOException $e) {
            echo $e->getMessage();
        }
        return $connection;
    }
}