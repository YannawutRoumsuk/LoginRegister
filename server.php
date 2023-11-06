<?php

    $servername = 'localhost';
    $username = 'root';
    $password = '12345678';
    $dbname = 'user';
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    
    if (!$conn) {
        die('connection fail!' . mysqli_connect_error());
    }else {
        echo "connection success!";
    }

?>