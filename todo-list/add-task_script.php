<?php 
include("./connection.php");

if(isset($_POST["submit"])){
    $description = $_POST["description"];
    $due_date  = $_POST["due_date"];
    $status = 0;
    $sql = "INSERT INTO tasks (description, due_date, status)
    VALUES ('".$description.", ".$due_date.", ".$status."')";

    if($conn-> query($sql) == TRUE){
        $_SESSION['message'] = "Task added successfully";
        header("Location: pending-tasks.php");
    } else{
      echo  "<script type= 'text/javascript'>alert('Error: " . $sql. "<br>". $conn->error."');</script>";
    }
    $conn->close();
}
?>