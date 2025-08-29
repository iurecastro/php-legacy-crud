<?php
    include 'config.php';

    if(isset($_POST['id'])){
        $id = $_POST['id'];
        $sql = "DELETE FROM users where id = $id";
        if(mysqli_query($conn,$sql)){
            echo "User deleted successfuly";
        } else{
            echo "Error: " . mysqli_error($conn);
        }
    }
?>