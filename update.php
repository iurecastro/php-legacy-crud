<?php 
include 'config.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $id = (int)$_POST['id'];
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);


    $sql = "UPDATE users SET name='$name', email='$email' where id=$id";

    if(mysqli_query($conn,$sql)){
        echo "User updated sucessfully!";
    }else{
        echo "Error" . mysqli_error($conn);
    }


}

?>