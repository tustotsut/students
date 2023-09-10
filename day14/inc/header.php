<?php
$hostname = 'localhost';
$username = 'root';
$password = '';



// new mysqli(host, username, password);
// $conn = new mysqli($hostname, $username, $password);

$conn = mysqli_connect($hostname, $username, $password);

// if($conn->connect_errno){
//     die('Connection Failed:' .$conn->connect_error);
// }
// echo 'Connected Successfully';

// $conn->close();

if($conn){
    die('Connection Failed:' .mysqli_connect_error());
}
echo 'Connected Successfully';
?>