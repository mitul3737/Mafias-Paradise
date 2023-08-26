<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hospitaldb";


    $connection = new mysqli($servername, $username, $password);

    if ($connection->connect_error) { // checking if the servername, uname is vaid or not
        die("Connection Failed: " . $conn->connect_error); 
    } else {
        mysqli_select_db($connection, $dbname); // it is used as use "database name"
    }

?>