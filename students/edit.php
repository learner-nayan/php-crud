<!DOCTYPE html>
<html>
<style>
    input[type=text],
    select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    input[type=submit] {
        width: 100%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type=submit]:hover {
        background-color: #45a049;
    }

    div {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
    }
</style>

<?php

if($_SERVER['REQUEST_METHOD']=="GET"){
    $id = $_GET['id'];
    // echo $id;
    
    include "database.php";

    $sql = "SELECT id,student_name,address,contact_number FROM student WHERE id=$id";
    $result = $connection->query($sql);
    // print_r($result);

    if($result->num_rows>0){
        while ($row=$result->fetch_assoc()) {
            $name = $row['student_name'];
            $address = $row['address'];
            $contact = $row['contact_number'];
        }
    }

}

?>

<body>

<h3>Create User</h3>

<div>
    <form action="/php-crud/students/update.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" placeholder="Your name.." requied value="<?php echo $name; ?>">

        <label for="address">Address</label>
        <input type="text" id="address" name="address" placeholder="Your Address.." reqired value="<?php echo $address; ?>">

        <label for="contact">Contact</label>
        <input type="text" id="contact" name="contact" placeholder="Your Contact.." reqired value="<?php echo $contact; ?>">

        <input type="submit" value="Update">
    </form>
</div>

</body>

</html>

