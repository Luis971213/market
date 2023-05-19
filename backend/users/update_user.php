<?php
    include_once("../config/bd.php");

    $uId = $_POST['uId'];
    $fname = $_POST["first_name"];
    $lname = $_POST["last_name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql="UPDATE users SET 
        
        first_name='$fname',
        last_name='$lname',
        email='$email',
        password='$password'
        WHERE id='$uId'
        ";
    $result = $mysqli->query($sql);
    if($result) {
        
            header("Location: http://localhost/market/backend/users/list_users.php");
        
    } else {
        echo"Error: ".$mysqli->error."<br>".$sql;
    }
