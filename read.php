<?php


    include 'config.php';

    if(isset($_GET['id'])){
        $id = (int)$_GET['id'];
        $sql = "SELECT * FROM users WHERE id =$id";
        $result = mysqli_query($conn,$sql);
        $user = mysqli_fetch_assoc($result);
        echo json_encode($user);

    }

?>