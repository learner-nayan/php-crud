<?php

if($_SERVER['REQUEST_METHOD']=='GET'){
    $id = $_GET['id'];

    include "database.php";

    try {
        $sql = "DELETE FROM student WHERE id=$id";

        $result = $connection->query($sql);
    
        if($result){
            session_start();
            $_SESSION['success'] = "Data deleted successfully.";
            echo "Data deleted successfully.";
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