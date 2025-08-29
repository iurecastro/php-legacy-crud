<?php

include 'config.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
  
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);

    $sql = "insert INTO users (name, email) VALUES ('$name','$email')";
    if(mysqli_query($conn,$sql)){
        echo "User created sucessfully";
    } else{
        echo "Error: " . mysqli_error($conn);
    }

}

?>