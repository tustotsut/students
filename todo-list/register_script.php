<?php
session_start();
include("./connection.php");

if(isset($_POST["submit"])){
   $name = $_POST['name'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $dob = $_POST['dob'];
   $address = $_POST['address'];
   $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

   $check_email_count = $conn->query("SELECT * FROM users WHERE email='".$email."'")->num_rows;
   if($check_email_count>0){
      echo "<script type= 'text/javascript'>alert('Error: Email is already exists.');</script>";
      return;
   }
   $check_phone_count = $conn->query("SELECT * FROM users WHERE phone='".$phone."'")->num_rows;
   if($check_phone_count>0){
      echo "<script type= 'text/javascript'>alert('Error: Phone number is already exists.');</script>";
      return;
   }
   
   $sql = "INSERT INTO users (name, email, phone, dob, address, password)
      VALUES ('".$name."','".$email."','".$phone."','".$dob."','".$address."','".$password."')";
      
      if ($conn->query($sql) === TRUE) {
         $_SESSION['message'] = "Registration successfully. Please login!!!";
         header("Location: login.php");
      } else {
         echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
      }
      $conn->close();

   
}