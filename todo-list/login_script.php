<?php
 include("./connection.php");

 if(isset($_POST["submit"])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $check_user = $conn->query("SELECT * FROM users WHERE email='".$email."'");
    if($check_user->num_rows > 0){
        $check_user_details = $check_user->fetch_assoc();
        $check_password = password_verify($password, $check_user_details["password"]);

        if($check_password){
            $_SESSION['username'] = $check_user_details["name"];
            header("Location: index.php");
        }else{
            echo "<script type= 'text/javascript'>alert('Error: Password does not match.');</script>";
            return;
        }
    }else{
        echo "<script type= 'text/javascript'>alert('Error: Email does not match.');</script>";
        return;
    }
 }