<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hospitaldb";


    $connection = new mysqli($servername, $username, $password); //create connection which has 3 parameters servername, username, password

    if ($connection->connect_error) { //if connection failed
        die("Connection Failed: " . $conn->connect_error);
    } else {//if connection is successful
        mysqli_select_db($connection, $dbname);//select database (hospitaldb) as connection is working
    }

?>