<?php
$server = "localhost";
    $username = "root";
    $password = "";
    $db_name = "trip";

    $con = mysqli_connect($server, $username, $password,$db_name);

    if(!$con){
        die("connection to this database is failed due to". mysqli_connect_error());
    }
    
?>