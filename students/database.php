<?php

try {
    $server_name = "localhost:3306";
    $user = "root";
    $password = "";
    $database = "php_project";

    $connection = new mysqli($server_name,$user,$password,$database);

    // echo $connection;

    if($connection->connect_error){
        die("Connection failed: ".$connection->connect_error);
    }
} catch (Exception $th) {
    print_r($th);
    exit();
}



?>
