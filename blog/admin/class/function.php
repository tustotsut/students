<?php
class AdminBlog{

    private $conn;
    
    public function _construct()
    {
        #database host, database user, database name
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $dbname = "blog";

        $this->conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
        if(!$this->conn){
            die('Database Connection Error');
        }
    
    }
}


?>