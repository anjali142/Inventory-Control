<?php
include '../config/db_connection.php';

$conn = OpenCon();
echo $conn->error;

If(isset($_POST['submit'])) {

    if($_SERVER['REQUEST_METHOD'] == 'POST') 
    {
        $name = $_POST['name'];

        $user_id = $_POST['user_id'];
        
        // Credentials: admin 
        if ($name == "admin" && $user_id == 0) 
        {
          header('Location: http://localhost:8080/db_structure.php?server=1&db=inventory');         // Url to phpmyadmin database
        } 
        else 
        {
          echo "Sorry !! Admin Id or Name is incorrect";
        }

    }

}

?>