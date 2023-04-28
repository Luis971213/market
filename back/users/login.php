<?php
    //login-singin
    include("../config/cnx_db.php");
    $email = $_POST['email'];
    $pasword = $_POST[`password`];
    // $pasword= md5($_POST[`password`]);
    $sql = "SELECT * FROM users where email = '$email' AND password = '$pasword'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        //echo"User has been found succesfully. You're login";
        header("location:http//127.0.0.1/market/front/home.html");
    }
    else{
        //echo "Verify your data";
        echo"<script>alert('user doesn`t exist')</script>";
        header("refresh:0; url=http//127.0.0.1/market/front/login.html");

    }
?>