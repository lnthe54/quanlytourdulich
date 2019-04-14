<?php

    $server   = "localhost";   
    $username = "root";
    $password = "";    
    $dbname   = "quanlydulich";      

    $conn = mysqli_connect($server, $username, $password, $dbname);

    if (!$conn) {
        die("Không kết nối :".mysqli_connect_error());
        exit();
    }
?>