<?php

try{
    include "database.php";
}catch(Exception $e){
    echo "Error including: ".$e;
}

$sql = "SELECT * FROM users";

$data = $connection->query($sql);

if($data->num_rows>0){
    while($element=$data->fetch_assoc()){
        print_r($element);
    }
}

echo "Hello world";
