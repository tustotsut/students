<?php
if(isset($_POST['username']) && isset ($_POST['pass'])){
    $username = $_POST['username'];
    $password = $_POST['pass'];
    if($username == 'Tusto' && $password == 'shanta'){
        echo 'login successfully';
    }else{
        echo 'login error';
    }
}

?>

<form action="getpostvariable.php" method="post">
   username: <input type="text" name="username"> <br> <br>
   password: <input type="password" name="pass"> <br> <br>
   <input type="submit" value="login">
</form>