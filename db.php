<?php
class db {
    private $con;
    function __construct()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database="practise";  
        $this->con = mysqli_connect($servername, $username, $password,$database); 
    }
    function getConnection()
    {
        return $this->con;
    }
}
?>