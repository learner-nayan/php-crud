<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $contact = $_POST['contact'];
    echo $id;
    echo $name;
    echo $contact;
    // die();

    include "database.php";

    try {
        $sql = "UPDATE student set student_name='$name', address='$address', contact_number='$contact' WHERE id=$id";

        $result = $connection->query($sql);
    
        if($result){
            echo "Data updated successfully.";
            header("Location: /php-crud/index.php");
            // exit();
        }else{
            echo "Error: ".$connection->error;
        }
    } catch (Exception $th) {
        print_r($th);
        exit();
    }


}else{
    echo "Error".$sql.$connection->error;
}


?>