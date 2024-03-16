<!DOCTYPE html>
<html>
<head>
    <style>
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td, #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even){background-color: #f2f2f2;}

        #customers tr:hover {background-color: #ddd;}

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #04AA6D;
            color: white;
        }
    </style>
</head>
<body>
<!-- create button -->
<h2><a href="/php-crud/students/create.php">Create User</a></h2>

<h1>Users Table</h1>

<table id="customers">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Address</th>
        <th>Contact</th>
        <th>Action</th>
    </tr>

    <?php

    if (isset($_SESSION['success'])) {
        echo $_SESSION['success'];
        unset($_SESSION['success']);
    }

    include "database.php";

    $sql = "SELECT id,student_name,address,contact_number FROM student";
    // $sql = "SELECT id,name,email FROM users";
    $result = $connection->query($sql);

    if($result->num_rows>0){
        while ($row=$result->fetch_assoc()){
            $id = $row['id'];
            echo "<tr>";
                echo "<td>".$row['id']."</td>";
                // echo "<td>".$row['name']."</td>";
                // echo "<td>".$row['email']."</td>";
                echo "<td>".$row['student_name']."</td>";
                echo "<td>".$row['address']."</td>";
                echo "<td>".$row['contact_number']."</td>";
                echo  "<td><a href='/php-crud/students/edit.php?id=$id'>Edit</a>&nbsp;&nbsp;<a href='/php-crud/students/delete.php?id=$id'>Delete</a></td>";
            echo "</tr>";
        }
    }

    ?>

</table>

</body>
</html>

<?php

// try{
//     include "database.php";
// }catch(Exception $e){
//     echo "Error including: ".$e;
// }

// $sql = "SELECT * FROM users";

// $data = $connection->query($sql);

// if($data->num_rows>0){
//     while($element=$data->fetch_assoc()){
//         print_r($element);
//     }
// }

